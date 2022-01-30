new Vue({
    el: '#app',
    template: app,
    data: {
        appContent: "base-desactive",
        nome: "",
    },
    watch: {
        $route(to, from) {
            if (to.path == "/") this.appContent = "base-active"
            else this.appContent = "base-desactive"
        }
    },
    mounted() {
        if (this.$route.path == "/") {
            this.appContent = "base-active"
        } else {
            this.appContent = "base-desactive"
        }
    },
    router
});