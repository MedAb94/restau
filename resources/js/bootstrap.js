window._ = require('lodash');


try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) {
}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

let sd = (v, d) => {
    return v === undefined || v === null ? d : v;
};

window.app_api = sd(process.env.MIX_API_URL, "http://127.0.0.1:8000/api");
window.axios.defaults.baseURL = sd(process.env.MIX_API_URL, "http://127.0.0.1:8000/api");
//window.axios.defaults.baseURL = "http://127.0.0.1:8000/api";
window.axios.defaults.baseURL = "https://restau0.herokuapp.com/api";

