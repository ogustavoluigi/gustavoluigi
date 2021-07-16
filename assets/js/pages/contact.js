const contact = {
    template: `
    <div class="main" id="page-contact">
        <div class="main-header">
            <h1 class="page-title">Contato</h1>
        </div>
        <div class="main-body">
            <p class="paragraph">
                <span class="fa fa-envelope"></span> <span>contato@gustavoluigi.com.br</span>&nbsp;&nbsp;&nbsp;
                <span class="fa fa-whatsapp"></span> </a><span>(11) 952976713</span></p>
            </p>
            <form id="app" class="form" @submit="formContatoSubmit">
                <div class="form-campo" @click="ativaInput(0)">
                    <label class="campo-label" id="hname" data-label="Nome">Nome</label>
                    <input @focus="ativaInput(0)" @blur="desativaInput(0)" autocomplete="off" spellcheck="false" class="campo-input" id="txtUsuario_login" type="text" name="nome" v-model="nome">
                </div>
                <div class="form-campo" @click="ativaInput(1)">
                    <label class="campo-label" id="hemail" data-label="E-mail">E-mail</label>
                    <input @focus="ativaInput(1)" @blur="desativaInput(1)" autocomplete="off" spellcheck="false" class="campo-input" id="txtSenha_login" type="text" name="email" v-model="email">
                </div>
                <div class="form-campo" @click="ativaInput(2)">
                    <label class="campo-label" data-label="Assunto">Assunto</label>
                    <input @focus="ativaInput(2)" @blur="desativaInput(2)" autocomplete="off" spellcheck="false" class="campo-input" id="txtSenha_login" type="text" name="assunto" v-model="assunto">
                </div>
                <div class="form-campo" @click="ativaInput(3)">
                    <label class="campo-label" data-label="Mensagem">Mensagem</label>
                    <input @focus="ativaInput(3)" @blur="desativaInput(3)" autocomplete="off" spellcheck="false" class="campo-input" id="txtSenha_login" type="text" name="mensagem" v-model="mensagem">
                </div>
                <button type="submit" id="btn-send-message" class="button btn-default form-button">Enviar</button>
            </form>
        </div>
    </div>
    `,
    data: function() {
        return {
            nome: "",
            email: "",
            assunto: "",
            mensagem: "",
            mensagem: "",
            field: document.querySelectorAll(".form-campo"),
            label: document.querySelectorAll(".campo-label"),
            input: document.querySelectorAll(".campo-input")
        }
    },
    methods: {
        ativaInput(position) {
            input[position].focus();
            label[position].classList.add("blur");
            input[position].classList.add("focus");
            field[position].classList.add("ctext");
        },
        desativaInput(position) {
            if (input[position].value == "") {
                label[position].innerHTML = label[position].getAttribute('data-label');
                label[position].classList.remove("helper-text");
                label[position].classList.remove("blur");
                input[position].classList.remove("focus");
                field[position].classList.remove("ctext");
            }else{
                label[position].innerHTML = label[position].getAttribute('data-label');
                label[position].classList.remove("helper-text");
            }
        },
        desativaAllInput() {
            field.forEach(function(element, i) {
                label[i].innerHTML = label[i].getAttribute('data-label');
                label[i].classList.remove("helper-text");
                label[i].classList.remove("blur");
                input[i].classList.remove("focus");
                field[i].classList.remove("ctext");
            });
        },
        limparCampos() {
            this.nome = "";
            this.email = "";
            this.assunto = "";
            this.mensagem = "";
        },
        formContatoSubmit(e) {
            e.preventDefault();

            btnSendMessage.innerHTML = `<i class="fa fa-circle-o-notch fa-spin"></i>&nbsp;Enviando`;

            let url = document.querySelector("meta[name='url-api']").getAttribute('content');

            const regexNome = /^([A-Za-z]|\s)+$/i;
            const regexEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/i;

            if (!regexNome.test(this.nome)) {
                hname.classList.add("helper-text");
                hname.innerHTML = `<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;Coloque seu nome!`;
                return false;
            }
            if (!regexEmail.test(this.email)) {
                hemail.classList.add("helper-text");
                hemail.innerHTML = `<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;Coloque um e-mail válido!`;
                return false;
            }

            let formData = new FormData();
            formData.append('name', this.nome);
            formData.append('email', this.email);
            formData.append('subject', this.assunto);
            formData.append('message', this.mensagem);

            let method = this;

            this.$http({ method: 'POST', url: url, body: formData })
            .then(response => {
                if (response.body.success) {
                    method.limparCampos();
                    method.desativaAllInput();
                    btnSendMessage.innerHTML = `Mensagem Enviada`;
                } else btnSendMessage.innerHTML = `Mensagem não Enviada`;
                setTimeout(function(){ btnSendMessage.innerHTML = `Enviar` }, 5000);
            }).catch((error) => {
                btnSendMessage.innerHTML = `Mensagem não Enviada`;
                setTimeout(function(){ btnSendMessage.innerHTML = `Enviar` }, 5000);
            });
        }
    },
    mounted() {
        this.$root.title = this.title;
        field = document.querySelectorAll(".form-campo");
        label = document.querySelectorAll(".campo-label");
        input = document.querySelectorAll(".campo-input");
        hname = document.querySelector("#hname");
        btnSendMessage = document.querySelector("#btn-send-message");
    }
};