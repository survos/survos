// tree-bundle/assets/src/controllers/tree_controller.js

import {Controller} from "@hotwired/stimulus";
import jQuery from 'jquery';
import 'jstree';

export default class extends Controller {

    static values = {
        msg: {type: String, default: ''},
        plugins: {type: Array, default: ['checkbox', 'theme', "types", 'sort']},
        types: {type: Object, default: {}}
        // interval: { type: Number, default: 5 },
        // clicked: { type: Boolean, default: false },
    }

    static targets = ["html", "ajax"]

    connect() {

        let msg = 'Hello from tree-bundle tree_controller ' + this.identifier;
        console.error(msg);
        // this.html(this.element);
        // // this.element.textContent = msg;
        // if (this.hasHtmlTarget) {
        //     this.html(this.htmlTarget);
        // }
        console.log('hello from ' + this.identifier);
        // if no target, then the controller is on the ul element
        // this.element.textContent = msg;
        let el = this.element;
        if (!this.hasHtmlTarget) {
            // @todo: handle just the controller
            el = this.htmlTarget;
        }
        this.html(el);

        // window.addEventListener('jstree', (ev, data) => {
        //     console.log("Event received", ev.type);
        // })
    }

    search(event) {
        // this.$element.jstree(true).search(event.currentTarget.value, {
        //     show_only_matches: true,
        //     show_only_matches_children: true
        // });
        this.$element.jstree(true).search(event.currentTarget.value, false, true, true);
    }

    addListeners() {
        console.log('adding listeners. ');
        this.$element
            .on('changed.jstree', this.onChanged) // triggered when selection changes, can be multiple, data is tree data, not node data
            .on('ready.jstree', (e, data) => {
                console.warn('ready.jstree fired, so opening_all');
                // $element.jstree('open_all');
            })
    }

    onChanged(event, data) {
        var i, j, r = [];
        let instance = data.instance;
        for(i = 0, j = data.selected.length; i < j; i++) {
            let node = instance.get_node(data.selected[i]);
            // r.push(instance.data('path'));
            console.log(node.data.path);
            // instance.jstree().open(); // not sure how to do this.
                    // the event.type is ready, not ready.jstree
            // this._dispatchEvent(event.type + '.jstree', {msg: event.type, event, d: data})

            // window.dispatchEvent(new CustomEvent('jstree', {
            //         detail: {
            //             data: node.data,
            //             msg: event.type}
            //     }
            // ));
            // let jsTreeData = JSON.parse(node.data.jstree);
            // console.warn(jsTreeData, jsTreeData.path);
        }
        // console.log(r);
        // console.log($(data).dataset);
    }


    html(el) {
        // jQuery.tree.reference(el );
        this.$element = jQuery(el);
        // this.$element = jQuery.jstree.reference(el);
        this.$element.jstree(
            {
                "plugins": this.pluginsValue,
                "types": this.typesValue
            }
        );

        this.addListeners();

    }

    _dispatchEvent(name, payload) {

        // name = 'jstree';
        let ev = new CustomEvent(name, { detail: payload });
        Object.defineProperty(ev, 'target', {writable: false, value: window});
        // let ev = new Event(name, { detail: payload });
        console.log('Dispatching event ' + name + " " + payload.msg);
        // this.element.dispatchEvent(ev);
        window.dispatchEvent(ev);
    }

}
