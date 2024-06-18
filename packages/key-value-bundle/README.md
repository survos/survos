# Key Value Bundle

A Symfony bundle that leverages Sqlite to create an indexed no-sql datastore.

Insprired by https://gist.github.com/sbrl/c3bfbbbb3d1419332e9ece1bac8bb71c and https://dexie.org/

At its core, the idea is to store strings or unstructured data accessibile by a key or a filter.

Initially, it was just a string lookup, which could be a JSON string.

You can customize the import process by adding a .conf file with directives that facilitate renaming fields and munging data.  You can also listen for events during the import and export process.

Pixy can (will, eventually) using json schema files to defining the fields. https://json-schema.org/ using LiFormBundle

The indexes can be defined via the command line, a listener, or a .conf file.  There's a succinct format that is a comma-separated string, and a detailed format with is a hash with the index details as keys.



```php
$id = 'tt123';
$kv = $keyValueService->getStorageBox('app.db', [
    'movies' => 'imdb_id' // first key is text primary key by default
]);
$data = ['title' => 'sequence', 'imdb_id' => $id, 'category' => 'animated', 'year' => 2021];

$kv->select('movies'); // so that we don't have to pass it each time.
$kv->set($data); // because they key is in the data.
assert($kv->get($id));
assert($kv->has($id));
assert(json_decode($kv->get($id)) == $data);
//
```

Suppose we want to filter by category.  First, we need to add an index, dexie-style, to the table.

```php
$kv = $keyValueService->getStorageBox('app.db', [
    'movies' => 'imdb_id, year|integer, category|string' // first key is text primary key by default
]);

$rows = $kv->where("year < 2000 and category='drama'")->iterate();
// without the index
$rows = $kv->where("json_extract(value, '$.year') < 2000")->iterate();
```

Often CSV files and other data sources have key names that aren't really compatible with sqlite column names.  To map the old names to the new ones, you can create a sequence of regex rules for the column names.

From MOMA Artists.json

```json
{
  "ConstituentID": 1,
  "DisplayName": "Robert Arneson",
  "ArtistBio": "American, 1930–1992",
  "Nationality": "American",
  "Gender": "male",
  "BeginDate": 1930,
  "EndDate": 1992,
  "Wiki QID": null
}
```

```php
$kv->map([
   '/ConstituentID/' => 'id',
   '/BeginDate/' => 'birthYear',
   '/EndDate/' => 'deathYear'
], [
    'artists'
]);
```

All fields will be converted to camel_case, even without regex rules.

Note that the JSON is NOT compressed, so the keys are duplicated.  So the sqlite file is larger than the CSV by (rowCount * headerRowSize).  
## Usage

```bash
composer require survos/key-value-bundle
```

Initialize StorageBox with the sqlite database name plus any new tables to be created.

Existing tables can be used, but automatic table creation is disabled. 

```php
$kvDb = new StorageBox('translation.db', ['es', 'en'], 'en');
$key = md5('dog');
$kvDb->set($key, 'perro', 'es');
$kvDb->set($key, 'dog'); // defaults to en
$trans = $kvDb->get($key); // dog 
$trans = $kvDb->get($key, 'es'); // perro 
// trans is perro

// cache-like with callcack
$trans = $kvDb->get($key, callback: fn($item) => $this->translator->trans('dog'));

// keys are automatically slugified
$trans = $kvDb->get('My name is', fn($item) => $this->translator->trans($item->key));

// keys are automatically slugified
$trans = $kvDb->get('My name is',   ) => $this->translator->trans($item->key));

```


## Multi-lingual StorageBox

Specifically for kv lookups of text fields that may have translations

```php
$kvDb = new MLSB('property.db', ['label','description']);

$key = 'Q31';
$kvDb->set($key, 'label', 'Belgium', 'en-gb');
$kvDb->set($key, 'description', 'constitutional monarchy in Western Europe', 'en-gb');

$transArray = $kvDb->getFieldsByLocale($key, 'en-gb'); 
// ['label' => 'Belgium'...]

$label = $kvDb->getField($key, 'label', 'en-gb'); 
// 'Belgium'

$transArray = $kvDb->getFields($key); 
// ['en-gb' => ['label' => 'Belgium', 'description'  => ...]]

// ditto for set, needs transactions


