import Dexie from 'dexie';

class DbUtilities {
    constructor(config) {
        this.config = config;
        //hard set version to 1 , and local to en
        let version = 1;
        let local = 'es';
        //prepare db from config
        let db = new Dexie(config.database);
        db.version(version).stores(this.convertArrayToObject(config.stores));
        //call db connection
        db.open().then(() => {
            this.db = db;
            this.initDatabase();
            window.db = db;
        }).catch(err => {
            console.error('Failed to connect to database');
        });
        this.local = local;
    }

    convertArrayToObject(array, key) {
        if (!array) {
            return {};
        }
        return array.reduce((acc, curr) => {
            acc[curr.name] = curr.schema;
            return acc;
        }, {});
    }

    async initDatabase() {
        this.populateEmptyTables(this.config.stores);
    }

    async populateEmptyTables(tables) {
        for (let table of tables) {
            this.syncTable(table.name, table.url);
        }
    }

    async syncTable(table , url) {
        table = table || null;
        if (table) {
            let count = await this.db[table].count();
            if (count === 0) {
                this.fetchTable(table, url);
            }
        }
    }

    async fetchTable(table, url) {
        //temp : replace http with https in next url
        url = url.replace('http://', 'https://');
        //replace local in url
        url = url.replace('{local}', this.local);
        let res = await fetch(url);
        let data = await res.json();
        if (data.member.length > 0) {
            data.member.forEach(row => {
                this.db[table].add(row);
            });
            if (data.view && data.view.next) {
                await this.fetchTable(table, data.view.next); // Fetch next page
            }
        }
    }

    async isPopulated(table) {
        let count = await this.db[table].count();
        return count > 0;
    }
}

export { DbUtilities };