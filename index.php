<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Gustavo Luigi - Programador e Desenvolvedor Web</title>
    <meta charset="utf-8">
    <meta name="url-api" content="includes/send-message.php">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="assets/img/favicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/layout.css">
    <link rel="stylesheet" type="text/css" href="assets/css/pages.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
</head>

<body>
    <main>
        <div style="display: flex; align-items: center;">
            <img src="assets/img/perfil.jpeg" alt="" style="width: 60px; height: 60px; border-radius: 10px;">
            <div style="margin-left: 25px;">
                <h1 style="font-size: 30px; font-weight: 700;">Gustavo Luigi</h1>
                <h2 style="font-size: 18px; color: var(--color-grey-darken); font-weight: 500;">Back-end Developer</h2>
            </div>
        </div>
        <br><br>
        <h3 class="subtitle" style="color: var(--color-blue-grey); ">Envie uma Mensagem</h3>
        <br>
        <form id="app" class="form" method="post" action="/includes/send-message.php">
            <input type="text" autocomplete="off" spellcheck="false" id="name" name="name" label="Nome">
            <br>
            <input type="text" autocomplete="off" spellcheck="false" id="email" name="email" label="E-mail">
            <br>
            <input type="text" autocomplete="off" spellcheck="false" id="subject" name="subject" label="Assunto">
            <br>
            <input type="text" autocomplete="off" spellcheck="false" id="message" name="message" label="Mensagem">
            <button type="submit" id="btn-send-message" class="button btn-default form-button">Enviar</button>
        </form>
    </main>
    <div id="sidebar">
        <h3 class="subtitle" style="color: var(--color-blue-grey);">Sobre Mim</h3>
        <p class="paragraph">Soluções para web. Desenvolvimento e depuração de sites, aplicativos e sistemas para desktop e mobile.</p>
        <br>
        <h2 class="subtitle" style="color: var(--color-blue-grey);">Tecnologias</h2>
        <p class="paragraph">Git, HTML, CSS, XML, JavaScript, JQuery, Vue.js, PHP, Laravel, Java, MySQL, SQL Server, SQLite, HSQL.</p>
        <br>
        <h2 class="subtitle" style="color: var(--color-blue-grey);">Contatos</h2>
        <p class="paragraph">
            <span class="fa fa-envelope"></span> <span>contato@gustavoluigi.com.br</span><br>
            <span class="fa fa-whatsapp"></span> <span>(11) 952976713</span><br>
            <a href="https://br.linkedin.com/in/gustavoluigi" target="_blank"><span class="fa fa-linkedin"></span> <span>gustavoluigi</span></a><br>
            <a href="https://github.com/ogustavoluigi" target="_blank"><span class="fa fa-github"></span> <span>ogustavoluigi</span></a>
        </p>
    </div>
    <script src="assets/libs/master-input.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>