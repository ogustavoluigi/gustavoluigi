const errorNotFound = {
    data: function () {
        return {
            title: 'Não encontrado'
        }
    },
    template: `
    <div id="main">
        <h1 class="info-title">Erro 404</h1>
    </div>
    `,
    mounted() {
        this.$root.title = this.title;
    }
};