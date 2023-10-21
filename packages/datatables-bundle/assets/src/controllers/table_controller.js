import {Controller} from "@hotwired/stimulus";
import DataTable from 'datatables.net';


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
        console.error('hello from ' + this.identifier);
        const dataTable = new DataTable(this.element, {
        });
        this.initialized = true;
    }

    disconnect() {
        super.disconnect();
    }


}
