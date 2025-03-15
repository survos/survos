import {Controller} from "@hotwired/stimulus";

/* make sure this loaded eagerly in assets/controllers.json, so that the listeners are available!
"@survos/js-twig-bundle": {
    "dexie": {
        "enabled": true,
            "fetch": "eager",
            "autoimport": []
    },
 */

// https://javascript.plainenglish.io/12-best-practices-for-writing-asynchronous-javascript-like-a-pro-5ac4cb95d3c8
// now called from the TwigJsComponent Component, so it can pass in a Twig Template
// combination api-platform, inspection-bundle, dexie and twigjs
// loads data from API Platform to dexie, renders dexie data in twigjs
// import db from '../db.js';
import Twig from "twig";
import Dexie from "dexie";
import {stimulus_action, stimulus_controller, stimulus_target,} from "stimulus-attributes";

import Routing from 'fos-routing';
import RoutingData from '/js/fos_js_routes.js';

Routing.setData(RoutingData);

Twig.extend(function (Twig) {
    Twig._function.extend(
        "stimulus_controller",
        (
            controllerName,
            controllerValues = {},
            controllerClasses = {},
            controllerOutlets = ({} = {})
        ) =>
            stimulus_controller(
                controllerName,
                controllerValues,
                controllerClasses,
                controllerOutlets
            )
    );
    Twig._function.extend("stimulus_target", (controllerName, r = null) =>
        stimulus_target(controllerName, r)
    );
    Twig._function.extend(
        "stimulus_action",
        (controllerName, r, n = null, a = {}) =>
            stimulus_action(controllerName, r, n, a)
    );
    Twig._function.extend('path', (route, routeParams = {}) => {
        // console.error(routeParams);
        delete routeParams._keys; // seems to be added by twigjs
        return Routing.generate(route, routeParams);
    });
});

/* stimulusFetch: 'eager' */
export default class extends Controller {
    static targets = ['content'];
    static values = {
        twigTemplate: String, // the specific template to render
        twigTemplates: Object,
        refreshEvent: String,
        type: {
            type: String,
            default: "list", // list, item
        },
        dbName: String,
        caller: String,
        // because passing an object is problematic if empty, just pass the config and parse it.
        // https://github.com/symfony/stimulus-bridge/issues/89
        config: Object,
        // schema: Object,
        // tableUrls: Object,
        version: Number,
        store: String,
        globals: Object,
        key: String, // overrides filter, get a single row.  ID is a reserved word!!
        filter: {
            type: String,
            default: "{}",
        }, // {status: 'queued'}
        // order: Object // e.g. {dateAdded: 'DESC'} (could be array?)
    };
    static outlets = ["app"]; // could pass this in, too.

    connect() {
        // by default, the template id is the caller basename
        // console.error(this.callerValue);

        console.assert(this.refreshEventValue, "missing refreshEvent");
        console.assert(this.hasAppOutlet, "missing app outlet");
        console.assert(this.dbNameValue, "missing dbName");

        // this.appOutlet.setTitle('test setTitle from appOutlet');
        // this.populateEmptyTables(db, this.configValue['stores']);

        console.warn("hi from " + this.identifier + ' using dbName: ' + this.dbNameValue + '/' + this.storeValue);
        this.filter = this.filterValue ? JSON.parse(this.filterValue) : false;
        // console.error(this.callerValue, this.filterValue, this.filter);
        // compile the template

        let compiledTwigTemplates = {};

        // these are the templates within the <twig:dexie> component
        console.error(this.twigTemplatesValue);
        for (const [key, value] of Object.entries(this.twigTemplatesValue)) {
            compiledTwigTemplates[key] = Twig.twig({
                data: value.html.trim(),
            });
        }
        this.compiledTwigTemplates = compiledTwigTemplates;

        // the actual jstwig template code, passed into the renderer
        // console.error(this.twigTemplateValue);
        // this should be multiple templates, dispatched as events or populating a target if it exists.
        this.template = Twig.twig({
            data: this.twigTemplateValue,
        });

        document.addEventListener('dexie.load-data', (e) => {
            console.error('heard: dexie.load-data');
            if (!window.called) {
                window.called = true;
                this.openDatabase(this.dbNameValue);
            }

            this.dispatch(new CustomEvent('appOutlet.connected', {detail: app.identifier}));

            this.openDatabase(this.dbNameValue);
            // console.error(event);
            // the data comes from the topPage data
            console.warn(this.identifier + " heard %s event! %o", e.type, e.detail);
        });

        // register dexie events that use the database to update a page or tab
        const eventName = this.refreshEventValue;
        if (eventName) {
            console.warn(`Listening for ${eventName}`);
            document.addEventListener(eventName, (e) => {
                console.log(window.app);
                // the data comes from the topPage data
                console.warn(this.identifier + " heard %s event! %o", e.type, e.detail);
                console.error('@get the db and pass it to the template');
                document.getElementById('test').innerHTML = "hello this is " + e.type;

                var that = this;
                window.app.db[this.storeValue].count().then(function (count) {
                    alert("There are " + count + " " + that.storeValue + " in the database");
                });

                console.error(this.storeValue, this.filter);
                // set rows = await query the dexie for the rows.
                // console.error(e.detail.id, this.storeValue);
                // @todo: types of events, like detail, list,
                if (e.detail.hasOwnProperty('id')) {
                    let html = this.renderPage(e.detail.id, this.storeValue);
                    console.warn(html);
                } else {

                    this.contentConnected();
                }
            });

        }
        // idea: dispatch an event that app_controller listens for and opens the database if it doesn't already exist.
        // there is only one app_controller, so this.db can be share.
        // app should be in the dom, not sure why this.appOutlet not immediately available when dexie connects.
        // we shouldn't need to call this every time, since appOutlet.getDb caches the db.
        // console.error('can we get rid of this call?')
        document.addEventListener('appOutlet.connected', (e) => {
            // the data comes from the topPage data
            console.warn(this.identifier + " heard %s event! %o", e.type, e.detail);

            // console.error(e.detail.id, this.storeValue);
            // @todo: types of events, like detail, list,
            if (e.detail.hasOwnProperty('id')) {
                let html = this.renderPage(e.detail.id, this.storeValue);
                console.warn(html);
            } else {

                this.contentConnected();
            }
        });
    }



    convertArrayToObject(array, key) {
        return array.reduce((acc, curr) => {
            acc[curr.name] = curr.schema;
            return acc;
        }, {});
    }

    // initialize() {
    //     super.initialize();
    //     console.info("initializing %s", this.dbNameValue);
    // }

    // opens the database and sets the global this.db.  Also pushes that db to appOutlet
    async openDatabase(dbName) {
        // Get the hash parameter from the URL
        const urlParams = new URLSearchParams(window.location.search);
        const hashParam = urlParams.get('hash');

        // Get the stored hash from localStorage
        const storedHash = localStorage.getItem('databaseHash');
        console.error(storedHash);

        // If the hash parameter is provided and it doesn't match the stored hash
        // or if there's no stored hash, delete the database
        if (hashParam && hashParam !== storedHash) {
            // Delete the database
            await Dexie.delete(dbName);
            console.info("Deleted existing database.");

            // Store the new hash in localStorage
            localStorage.setItem('databaseHash', hashParam);
        }
        // this opens the database for every dexie connection!
        console.assert(this.dbNameValue, "Missing dbName in dexie_controller");
        const db = new Dexie(this.dbNameValue);
        let schema = this.convertArrayToObject(this.configValue.stores);
        db.version(this.versionValue).stores(schema);
        await db.open();
        this.db = db;
        window.db = db;
        console.info(`connection to ${this.dbNameValue} succeeded`, schema, this.configValue.stores);

        // this.appOutlet.test("I am from dexie")
        // there should only be one app, but sometimes it appears to be zero.
        // this.appOutlet.setDb(this.db);
        await this.contentConnected();

        console.info(
            "at this point, the tables should be populated and db should be open"
        );
        return this.db;
    }

    appOutletConnected(app, element) {
        // return; // move to regular events
        // console.warn(app, element);
        console.error(
            `${this.callerValue}: ${app.identifier}_controller is now connected to ` +
            this.identifier +
            "_controller"
        );
        if (!window.called) {
            window.called = true;
            this.openDatabase(this.dbNameValue);
        }

        this.dispatch(new CustomEvent('appOutlet.connected', {detail: app.identifier}));


        return;

        this.appOutlet.setDb(window.db); // ??

        console.assert(this.hasAppOutlet, "no appOutlet!");
        this.db = this.appOutlet.getDb();
        if (!this.db) {
            this.db = this.openDatabase();
            this.db = this.appOutlet.setDb(this.db);
        }

        this.filter = this.appOutlet.getFilter(); // the global filter, like projectId

        // console.warn(this.hasAppOutlet, this.appOutlet.getCurrentProjectId());
        if (this.db) {
            this.appOutlet.setDb(this.db);
        } else {
            this.db = this.appOutlet.getDb();
        }
        // console.log(app.identifier + '_controller', body);
        // console.error('page data', this.appOutlet.getProjectId);
    }

    async populateEmptyTables(db, stores, filteredStores) {
        let shouldReload = false;
        for (const store of stores) {
            let t = window.db.table(store.name);
            if (!this.hasAppOutlet) {
                console.error('missing appOutlet');
                return;
            }
            console.assert(this.appOutlet);
            // app_controller checks isPopulated to check for reload

            const isPopulated = await this.appOutlet.isPopulated(t);
            if (isPopulated) {
                continue;
            }
            // const count = await new Promise((resolve, reject) => {
            //     t.count(count => resolve(count)).catch(reject);
            // });
            // if (count > 0) {
            //     // console.warn("%s already has %d", t.name, count);
            //     continue; // Move to the next store
            // }
            shouldReload = true;
            console.warn(store.name, store.url);
            console.warn("%s has no data, loading...", t.name, filteredStores.find((f) => f.name === store.name));
            // const filteredUrl = filteredStores ? filteredStores.find((f)=> f.name === store.name).url : store.url;
            const filteredUrl = store.url;

            // console.error(filteredUrl, filteredStores);
            // Fetch and bulk put data for each page
            await loadData(filteredUrl, store.name);
            // console.warn("Done populating.");
            try {
            } catch (error) {
                console.error("Error populating table", t.name, error);
            }
        }
        // what listens to this??
        document.dispatchEvent(new CustomEvent('window.db.available', {'detail': {dbName: db.name}}));
        if (shouldReload) {
            window.location.reload(); // Reload after populating all tables
        }
    }

    // because this can be loaded by Turbo or Onsen
    async contentConnected() {
        console.warn("Content is connected! Populate tables if empty")
        // console.error(this.outlets);
        // this.outlets.forEach( (outlet) => console.warn(outlet));
        // if this is fired before the database is open, return, it'll be called later
        // if (!this.db) {
        //     console.error('db is not connected, it should be loaded in appOutletConnected.');
        //     return;
        // }
        if (!window.db) {
            console.error(
                "db is not connected, it should be loaded in appOutletConnected."
            );
            return;
        }
        // console.error(window.db);
        // is db a Dexie instance?  It shouldn't be complaining about void, it thinks it's a console table
        // https://dexie.org/docs/Dexie/Dexie.table()
        let table = window.db.table(this.storeValue);
        // console.error(table,  this.storeValues)

        // if (this.filter) {
        //     this.filter = {'owned': true};
        //     table = table.where({owned: true}).toArray().then(rows => console.log(rows)).catch(e => console.error(e));
        // }
        // // console.log(table);
        // return;

        if (this.filter.length) {
            console.log(this.filter);
            if (this.hasAppOutlet)
                try {
                    if (this.appOutlet.getFilter()) {
                        this.filter = {
                            ...this.filter,
                            ...this.appOutlet.getFilter(this.refreshEventValue),
                        };
                        // console.error(this.filter);
                    }
                } catch (e) {
                    console.error(e.message);
                }
        } else {
            this.filter = this.appOutlet.getFilter(this.refreshEventValue);
        }

        // populate the tables after the db is open

        // const modifiedStores = this.appOutlet.getProjectFiltered(this.configValue.stores);
        const modifiedStores = [];


        await this.populateEmptyTables(window.db, this.configValue.stores, modifiedStores);

        // this.appOutlet.setTitle('hello???!');
        if (this.keyValue) {
            console.error(this.keyValue, "@render ".this.keyValue);
            // this.renderPage(this.storeValue, this.keyValue);
        } else if (this.filter) {
            table = table.filter((row) => {
                // there's probably a way to use reduce() or something
                let okay = true;
                for (const [key, value] of Object.entries(this.filter)) {
                    // @todo: check for array and use 'in array'
                    okay = okay && row[key] === value;
                    // console.log(`${key}: ${value}`, row[key] === value, okay);
                }
                return okay;
            });
        }

        table.count().then((c) => {
            console.assert(c, "missing rows in table");
        });

        table
            .toArray()
            .then((rows) =>
                // render the template with a collection of items
                 this.template.render({rows: rows, globals: this.globalsValue})
            )
            .then((html) => {
                    this.element.innerHTML = html;
                }
            )
            .catch((e) => console.error(e))
            .finally((e) => console.log("populated the template with the data"));
    }


    async renderPage(key, store) {
        // console.log(this.appOutlet.tabbarTarget.getActiveIndex());
        //
        // console.warn(this.appOutlet.tabbarTarget.getActiveIndex());

        // console.error("top page %o", this.appOutlet.navigatorTarget.topPage);
        // console.error("page data", this.appOutlet.navigatorTarget.topPage.data);
        // let key = this.appOutlet.navigatorTarget.topPage.data.id;
        // console.error(this.appOutlet.navigatorTarget.topPage.data, key);
        let table = window.db.table(store);

        table = table.get(parseInt(key));
        table
            .then((data) => {
                    console.error(data, key, store);
                    return {
                        content: this.template.render({
                            data: data,
                            globals: this.globalsValue,
                        }),
                        // if there's a <twig:block name="title"> use it to render the title
                        title:
                            this.compiledTwigTemplates.hasOwnProperty('title')
                                ? this.compiledTwigTemplates["title"].render({
                                    data: data,
                                    globals: this.globalsValue,
                                })
                                : 'no title'
                    };
                }
            )
            .then(
                ({
                     content,
                     title
                 }
                ) => {
                    this.contentTarget.innerHTML = content;
                    console.log(title);
                    if (this.hasAppOutlet) {
                        console.error(title);
                        this.appOutlet.setTitle(title);
                    }
                }
            )
            .catch((e) => console.error(e))
            .finally((e) => console.log("finally rendered page"));

    }

}

async function loadData(url, tableName) {
    let nextPageUrl = url;
    while (nextPageUrl) {
        console.log("fetching " + nextPageUrl);
        const response = await fetch(nextPageUrl);
        const data = await response.json();
        console.log(data);

        // Bulk put data for this page
        const t = window.db.table(tableName);
        const rows = data["member"];
        console.log(rows);
        await t.bulkPut(rows)
            .then((x) => console.log("bulk add", x))
        // .catch((e) => console.error(e))
        ;

        console.table(rows[1] ?? []);
        console.error(data);

        // Check if there's a next page
        nextPageUrl = data["view"] && data["view"]["next"] ? data["view"]["next"] : null;
    }
}
