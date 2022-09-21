From the command line, create an entity for the elected official (congressperson or senator)

### make the entity / repo
```bash
git clean -f src
bin/console doctrine:database:drop --force 
bin/console c:c
composer dump
echo "firstName,string,16,yes," | sed "s/,/\n/g"  | bin/console -a make:entity Official
echo "lastName,string,32,no," | sed "s/,/\n/g"  | bin/console make:entity Official
echo "officialName,string,48,no," | sed "s/,/\n/g"  | bin/console make:entity Official
echo "birthday,date_immutable,yes," | sed "s/,/\n/g"  | bin/console make:entity Official
echo "gender,string,1,yes," | sed "s/,/\n/g"  | bin/console make:entity Official

# terms 
echo "offical,ManyToOne,Official,no,yes,terms,yes," | sed "s/,/\n/g"  | bin/console -a make:entity Term -a
echo "type,string,16,yes," | sed "s/,/\n/g"  | bin/console make:entity Term
echo "stateAbbreviation,string,2,yes," | sed "s/,/\n/g"  | bin/console make:entity Term
echo "party,string,8,yes," | sed "s/,/\n/g"  | bin/console make:entity Term
echo "district,string,8,yes," | sed "s/,/\n/g"  | bin/console make:entity Term
echo "startDate,date_immutable,yes," | sed "s/,/\n/g"  | bin/console make:entity Term
echo "endDate,date_immutable,yes," | sed "s/,/\n/g"  | bin/console make:entity Term

bin/console doctrine:schema:update --force
```


