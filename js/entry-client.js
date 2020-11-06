import app from './app';

// hydrating shared data from PHP
app.people = window.people;

app.$mount('#app');
