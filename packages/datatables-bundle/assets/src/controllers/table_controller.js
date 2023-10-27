import {Controller} from "@hotwired/stimulus";
// import DataTable from 'datatables.net';
import DataTable from 'https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.mjs'


/* stimulusFetch: 'lazy' */
export default class extends Controller {
    static targets = ['table', 'tr'];
    static values = {
        search: true,
        fixedHeight: false,
        perPage: 12,
        filter: {type: String, default: ''}
    }

    initalize() {
        this.initialized = false;
    }

    trTargetConnected(element) {
        console.log(element);

        // let countryCode = element.innerText;
        let countryCode = element.dataset.cc;
        element.innerHTML = 'xx';
    }


    connect() {
        // super.connect();
        if (!this.initialized) {
            console.error('hello from ' + this.identifier);
            const dataTable = new DataTable(this.element, {});
            this.initialized = true;
        }
    }

    disconnect() {
        super.disconnect();
    }


}
