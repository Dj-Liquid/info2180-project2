import _ from 'lodash';
window._ = _;

/**
 * Issue requests to Laravel by loading the axios HTTP library. 
 * Library to send the CSRF token as a header based on the value of the "XSRF" token cookie.
 */

import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API which subscribes to channels and listens
 * for events broadcasted by Laravel. Echo and event broadcasting
 * allows for the creation of robust real-time web applications.
 */

