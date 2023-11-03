import { Controller } from '@hotwired/stimulus';

import bootstrap from 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/+esm'
import jQuery from 'jquery';
console.log('local jquery');
const $ = jQuery;
// global.jQuery = global.$ = $;

import DataTables from 'datatables.net-bs5'
import 'datatables.net-bs5/css/dataTables.bootstrap5.min.css';

import {default as axios} from "axios";

export default class extends Controller {
    connect() {
        this.element.textContent = 'Hello Stimulus! Edit me in assets/controllers/hello_controller.js';
    }
}
