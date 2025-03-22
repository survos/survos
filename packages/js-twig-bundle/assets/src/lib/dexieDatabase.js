class DbUtilities {
    constructor(db) {
        this.db = db;
    }

    static async syncTable(db, table , url) {
        table = table || null;
        if (table) {
            let count = await db[table].count();
            if (count === 0) {
                let instance = new DbUtilities(db);
                await instance.fetchTable(table, url);
            }
        }
    }

    async fetchTable(table, url) {
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