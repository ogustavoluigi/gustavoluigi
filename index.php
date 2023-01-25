<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Gustavo Luigi - Programador e Desenvolvedor Web</title>
    <meta charset="utf-8">
    <meta name="url-api" content="includes/send-message.php">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/assets/img/favicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/layout.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/pages.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/responsive.css">
</head>

<body id="body">
    <div id="nav">
        <ul id="nav-itens">
            <li class="nav-item">
                <a class="link" path="/">Início</a>
            </li>
            <li class="nav-item Anchor">
                <a class="link" path="/sobre">Sobre</a>
            </li>
            <li class="nav-item">
                <a class="link" path="/contato">Contato</a>
            </li>
        </ul>
    </div>
    <div id="content">
        <main id="content-body">
            <div class="page" id="home" style="position: sticky; top: 0; height: 10vh; margin: 45vh 0;">
                <h1 class="page-title" id="site-title" style="font-weight: bold; font-family: 'Lato';">Gustavo Luigi</h1>
            </div>
            <div class="page" id="sobre" style="padding-top: 10vh; height: 100vh;">
                <div class="main-header">
                    <h1 class="page-title">Sobre Mim</h1>
                </div>
                <div class="main-body">
                    <h2 class="subtitle">Desenvolvedor</h2>
                    <p class="paragraph">Olá! Me chamo Gustavo Luigi, trabalho com desenvolvimento de soluções para web, desktop e mobile. Atualmente estou trabalhando como Desenvolvedor Autônomo.</p>
                    <h2 class="subtitle">Tecnologias</h2>
                    <p class="paragraph">Git, HTML, CSS, XML, JavaScript, JQuery, Vue.js, PHP, Laravel, Java, MySQL, SQL Server, SQLite, HSQL.</p>
                </div>
            </div>
            <div class="page" id="contato" style="padding-top: 10vh; height: 100vh;">
                <div class="main-header">
                    <h1 class="page-title">Contato</h1>
                </div>
                <div class="main-body">
                    <p class="paragraph">
                        <span class="fa fa-envelope"></span> <span>contato@gustavoluigi.com.br</span>&nbsp;&nbsp;&nbsp;
                        <span class="fa fa-whatsapp"></span> <span>(11) 952976713</span>&nbsp;&nbsp;&nbsp;
                        <span class="fa fa-linkedin"></span> <span>gustavoluigi</span>&nbsp;&nbsp;&nbsp;
                        <span class="fa fa-github"></span> <span>ogustavoluigi</span>
                    </p>
                    <form id="app" class="form" method="post" action="/includes/send-message.php">
                        <div class="form-campo" onclick="ativaInput(0)">
                            <label class="campo-label" id="hname" data-label="Nome">Nome</label>
                            <input onfocus="ativaInput(0)" onblur="desativaInput(0)" autocomplete="off" spellcheck="false" class="campo-input" id="txtUsuario_login" type="text" name="nome" v-model="nome">
                        </div>
                        <div class="form-campo" onclick="ativaInput(1)">
                            <label class="campo-label" id="hemail" data-label="E-mail">E-mail</label>
                            <input onfocus="ativaInput(1)" onblur="desativaInput(1)" autocomplete="off" spellcheck="false" class="campo-input" id="txtSenha_login" type="text" name="email" v-model="email">
                        </div>
                        <div class="form-campo" onclick="ativaInput(2)">
                            <label class="campo-label" data-label="Assunto">Assunto</label>
                            <input onfocus="ativaInput(2)" onblur="desativaInput(2)" autocomplete="off" spellcheck="false" class="campo-input" id="txtSenha_login" type="text" name="assunto" v-model="assunto">
                        </div>
                        <div class="form-campo" onclick="ativaInput(3)">
                            <label class="campo-label" data-label="Mensagem">Mensagem</label>
                            <input onfocus="ativaInput(3)" onblur="desativaInput(3)" autocomplete="off" spellcheck="false" class="campo-input" id="txtSenha_login" type="text" name="mensagem" v-model="mensagem">
                        </div>
                        <button type="submit" id="btn-send-message" class="button btn-default form-button">Enviar</button>
                    </form>
                </div>
            </div>
        </main>
    </div>
    <script>
        function pageLoad() {

            let anchors = document.querySelectorAll('a[path]');
            let siteTitle = document.querySelector('#site-title');
            if (window.location.pathname != "/") {
                let section = window.location.pathname.replaceAll("/", "");
                let anchor = document.querySelector('a[path="/' + section + '"]');

                anchors.forEach(item => {
                    item.classList.remove("active");
                });

                anchor.classList.add("active");

                if (section != "") {
                    let currentAnchor = document.querySelector("#" + section);
                    if (currentAnchor != undefined) document.querySelector('#content').scroll({
                        top: currentAnchor.offsetTop,
                        left: 0,
                        behavior: 'smooth'
                    });
                }

                siteTitle.style.fontSize = "16px";
                siteTitle.style.transition = ".1s all";

            } else {
                let anchor = document.querySelector('a[path="/"]');

                anchors.forEach(item => {
                    item.classList.remove("active");
                });

                anchor.classList.add("active");

                document.querySelector('#content').scroll({
                    top: 0,
                    left: 0,
                    behavior: 'smooth'
                });

                siteTitle.style.fontSize = "32px";
                siteTitle.style.transition = ".1s .5s all";
            }

            anchors.forEach(anchor => {
                anchor.addEventListener('click', (event) => {
                    anchors.forEach(item => {
                        item.classList.remove("active");
                    });
                    let targetElement = event.target || event.srcElement;
                    targetElement.classList.add("active");
                    let section = targetElement.getAttribute('path').replaceAll("/", "");
                    window.history.pushState("{}", null, "/" + section);
                    if (section != "") {
                        let currentAnchor = document.querySelector("#" + section);

                        if (currentAnchor != undefined) document.querySelector('#content').scroll({
                            top: currentAnchor.offsetTop,
                            left: 0,
                            behavior: 'smooth'
                        });

                        siteTitle.style.fontSize = "16px";
                        siteTitle.style.transition = ".1s all";

                    } else {
                        document.querySelector('#content').scroll({
                            top: 0,
                            left: 0,
                            behavior: 'smooth'
                        });

                        siteTitle.style.fontSize = "32px";
                        siteTitle.style.transition = ".1s .5s all";
                    }

                });
            });

            document.querySelector("#content").addEventListener("DOMMouseScroll", contentMousewheel);

            document.querySelector("#content").addEventListener("mousewheel", contentMousewheel);

            function contentMousewheel(event) {

                event.preventDefault();

                if (document.querySelector('#content').scrollTop % window.innerHeight == 0) {

                    let prevSection = document.querySelector('#content').scrollTop - window.innerHeight;
                    let nextSection = document.querySelector('#content').scrollTop + window.innerHeight;
                    let newPosition = ((event.deltaY || event.detail) > 0) ? nextSection : prevSection;

                    document.querySelector('#content').scrollTop = newPosition;

                    if (newPosition >= document.querySelector('#sobre').offsetTop) {
                        anchors.forEach(item => {
                            item.classList.remove("active");
                        });
                        document.querySelector('a[path="/sobre"]').classList.add("active");


                        siteTitle.style.fontSize = "16px";
                        siteTitle.style.transition = ".1s all";
                    }
                    if (newPosition >= document.querySelector('#contato').offsetTop) {
                        anchors.forEach(item => {
                            item.classList.remove("active");
                        });
                        document.querySelector('a[path="/contato"]').classList.add("active");

                        siteTitle.style.fontSize = "16px";
                        siteTitle.style.transition = ".1s all";
                    }
                    if (newPosition < document.querySelector('#sobre').offsetTop && newPosition < document.querySelector('#contato').offsetTop) {
                        anchors.forEach(item => {
                            item.classList.remove("active");
                        });
                        document.querySelector('a[path="/"]').classList.add("active");

                        siteTitle.style.fontSize = "32px";
                        siteTitle.style.transition = ".1s .5s all";
                    }

                    return false;
                }


            };


        }
        window.addEventListener('resize', pageLoad, true);
        window.addEventListener('load', pageLoad);


        let field = document.querySelectorAll(".form-campo");
        let label = document.querySelectorAll(".campo-label");
        let input = document.querySelectorAll(".campo-input");
        let hname = document.querySelector("#hname");
        let btnSendMessage = document.querySelector("#btn-send-message");

        function ativaInput(position) {
            input[position].focus();
            label[position].classList.add("blur");
            input[position].classList.add("focus");
            field[position].classList.add("ctext");
        }

        function desativaInput(position) {
            if (input[position].value == "") {
                label[position].innerHTML = label[position].getAttribute('data-label');
                label[position].classList.remove("helper-text");
                label[position].classList.remove("blur");
                input[position].classList.remove("focus");
                field[position].classList.remove("ctext");
            } else {
                label[position].innerHTML = label[position].getAttribute('data-label');
                label[position].classList.remove("helper-text");
            }
        }

        function desativaAllInput() {
            field.forEach(function(element, i) {
                label[i].innerHTML = label[i].getAttribute('data-label');
                label[i].classList.remove("helper-text");
                label[i].classList.remove("blur");
                input[i].classList.remove("focus");
                field[i].classList.remove("ctext");
            });
        }

        function limparCampos() {
            this.nome = "";
            this.email = "";
            this.assunto = "";
            this.mensagem = "";
        }

        document.querySelector('form').addEventListener("submit", function(e) {
            e.preventDefault();

            let url = this.getAttribute('action');

            const regexNome = /^([A-Za-z]|\s)+$/i;
            const regexEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/i;

            if (!regexNome.test(this.elements.nome.value)) {
                hname.classList.add("helper-text");
                hname.innerHTML = `<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;Coloque seu nome!`;
                return false;
            }
            if (!regexEmail.test(this.elements.email.value)) {
                hemail.classList.add("helper-text");
                hemail.innerHTML = `<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;Coloque um e-mail válido!`;
                return false;
            }

            btnSendMessage.innerHTML = `<i class="fa fa-circle-o-notch fa-spin"></i>&nbsp;Enviando`;

            let formData = new FormData();
            formData.append('name', this.nome);
            formData.append('email', this.email);
            formData.append('subject', this.assunto);
            formData.append('message', this.mensagem);

            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                let response = JSON.parse(this.response);
                if (response.success) {
                    limparCampos();
                    desativaAllInput();
                    btnSendMessage.innerHTML = `Mensagem Enviada`;
                } else btnSendMessage.innerHTML = `Mensagem não Enviada`;
                setTimeout(function() {
                    btnSendMessage.innerHTML = `Enviar`
                }, 5000);
            }
            xhttp.onerror = function() {
                let response = JSON.parse(this.response);
                btnSendMessage.innerHTML = `Mensagem não Enviada`;
                setTimeout(function() {
                    btnSendMessage.innerHTML = `Enviar`
                }, 5000);
            }
            xhttp.open("POST", url, true);
            xhttp.send("email=teste@teste.com");
        });
    </script>
</body>

</html>