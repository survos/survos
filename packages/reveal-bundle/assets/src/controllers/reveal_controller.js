import { Controller } from '@hotwired/stimulus';
import Reveal from 'reveal.js'

/*
* The following line makes this controller "lazy": it won't be downloaded until needed
* See https://github.com/symfony/stimulus-bridge#lazy-controllers
*/
/* stimulusFetch: 'lazy' */
export default class extends Controller {
    static targets = ['slideshow']
    static values = {
        slides: Array,
    }

    connect()
    {
        super.connect();
        let el = this.element;
        // if (this.hasSlideshowTarget) {
        //     // this.slideshowTarget.innerHTML = "…"
        //     // this.slideshowTarget.innerHTML = 'test';
        // } else {
        //     console.error('missing slideshowTarget');
        // }
        console.warn("hello from " + this.identifier);

        let orig = new Reveal(el, {
            //     hash: true,
            //     // Learn about plugins: https://revealjs.com/plugins/
            //     plugins: [ ]

        });
        orig.initialize();

    }
        // ...
}
