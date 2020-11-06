/* global context, dispatch */

import app from './app';
import renderVueComponentToString from 'vue-server-renderer/basic';

// hydrating shared data from PHP
app.people = context.people;

renderVueComponentToString(app, (err, html) => {
    if (err) {
        throw new Error(err);
    }
    dispatch(html);
});
