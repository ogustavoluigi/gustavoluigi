const routes = [
    { path: '/', component: home },
    { path: '/sobre', component: about },
    { path: '/contato', component: contact },
    { path: '/*', component: errorNotFound },
];

const router = new VueRouter({ /* mode: 'history', */ routes });