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
                    <form id="app" class="form" method="post" @submit="formContatoSubmit">
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
        </main>
    </div>
    <script>
        window.addEventListener('load', () => {
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
        });
    </script>
</body>

</html>