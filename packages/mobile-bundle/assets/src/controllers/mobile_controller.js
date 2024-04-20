import {Controller} from '@hotwired/stimulus';

/*
* The following line makes this controller "lazy": it won't be downloaded until needed
* See https://github.com/symfony/stimulus-bridge#lazy-controllers
*/
/* stimulusFetch: 'lazy' */
export default class extends Controller {
    static targets = [
        'menu',
        'detail',
        'title',
        'pageTitle',
        'tabbar',
        'twigTemplate',
        'savedCount', 'message', 'menu', 'navigator']

    // ...

    eventPreDebug(e) {
        let navigator = e.navigator;
        console.warn(e.type, e.currentPage.getAttribute('id'), e.detail, e.currentPage, e);
    }

    eventPostDispatch(e) {
        // idea: dispatch a "{page}:{eventName}" and let the stimulus controller listen for it.
        let navigator = e.navigator;
        let enterPageName = e.enterPage.getAttribute('id');
        let leavePageName = '~';
        if (e.leavePage) {
            leavePageName = e.leavePage.getAttribute('id');
            let eventType = leavePageName + '.' + e.type;
            console.log('dispatching ' + eventType);
            document.dispatchEvent(new Event(eventType));
        }

        // this.dispatch("saved", { detail: { content:
        //         'saved content' } })

        console.error(e.type, 'left ' + leavePageName,
            'entering ' + enterPageName);
        let eventType = enterPageName + '.' + e.type;
        console.log('dispatching ' + eventType);
        document.dispatchEvent(new Event(eventType));

        if (enterPageName == 'saved') {
            // this.tabbarTarget.loadPage('saved');

        }
    }

    connect() {
        super.connect();
        console.log('hello from ' + this.identifier);
        ons.ready((x) => {
            console.warn("ons is ready, " + this.identifier)
        })
        this.navigatorTarget.addEventListener('prepush', this.eventPreDebug);
        this.navigatorTarget.addEventListener('prepop', this.eventPreDebug);
        this.navigatorTarget.addEventListener('postpush', this.eventPostDispatch);
        this.navigatorTarget.addEventListener('postpop', this.eventPostDispatch);
        // https://thoughtbot.com/blog/taking-the-most-out-of-stimulus

        // prechange happens on tabs only
        document.addEventListener('prechange', (e) => {
            console.warn(e.type);

            // console.log('target', target, e.target.dataset);

            let tabItem = e.detail.tabItem;
            if (tabItem) {
                // console.log('prechange', target, tabItem, pageName);

                // this is the tabItem component, not an HTML element
                let title = tabItem.getAttribute('label');
                console.warn(title);
                this.titleTarget.innerHTML = tabItem.getAttribute('label');
                let tabPageName = tabItem.getAttribute('page');
                let eventType = tabPageName + '.' + e.type;
                console.log('dispatching ' + eventType);
                document.dispatchEvent(new Event(eventType));
            }
        });


    }

    setTitle(title) {
        if (this.hasTitleTarget) {
            this.titleTarget.innerHTML = title;
        }
    }

    openMenu(e) {
        console.log(e);
        this.menuTarget.open();
        console.log(this.menuTarget);
    }


    log(x) {
        console.log(x);
    }


    messageTargetConnected(element) {
        // this.messageTarget.innerHTML = ''
    }

    loadPage(e) {
        this.menuTarget.close();
        let page = e.params.route;
        if (page) {
            this.navigatorTarget.bringPageTop(page, {animation: 'fade'});
            console.log('loading page ' + page);
        } else {
            console.error('missing page ', e.params);
        }

    }

    pushPage(e) {
        console.error(e.params);
        this.navigatorTarget.pushPage(e.params.page, {data: e.params})
            .then(p => console.log(p));
    }


}

