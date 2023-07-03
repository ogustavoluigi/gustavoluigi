<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Gustavo Luigi - Programador e Desenvolvedor Web</title>
    <meta charset="utf-8">
    <meta name="url-api" content="includes/send-message.php">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="assets/img/favicon.png" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/layout.css">
</head>

<body>
    <header style="display: flex; justify-content: end; padding: 2.25rem;">
        <button id="toggle-theme-button" data-theme="light" class="basic-button">
            <svg width="30" height="30" fill="#2e3438" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.5 19.938a5.438 5.438 0 1 0 0-10.876 5.438 5.438 0 0 0 0 10.876Zm0 1.812a7.25 7.25 0 1 1 0-14.5 7.25 7.25 0 0 1 0 14.5Zm0-19.938a.906.906 0 0 1 .906.907V4.53a.906.906 0 1 1-1.812 0V2.72a.906.906 0 0 1 .906-.906Zm0 21.75a.906.906 0 0 1 .906.907v1.812a.906.906 0 1 1-1.812 0V24.47a.906.906 0 0 1 .906-.907ZM5.528 5.529a.906.906 0 0 1 1.282 0L8.09 6.81A.906.906 0 1 1 6.81 8.09L5.528 6.81a.906.906 0 0 1 0-1.282ZM20.91 20.91a.906.906 0 0 1 1.281 0l1.282 1.281a.906.906 0 0 1-1.282 1.282L20.91 22.19a.906.906 0 0 1 0-1.281ZM1.813 14.5a.906.906 0 0 1 .906-.906H4.53a.906.906 0 1 1 0 1.812H2.72a.906.906 0 0 1-.906-.906Zm21.75 0a.906.906 0 0 1 .906-.906h1.812a.906.906 0 1 1 0 1.812H24.47a.906.906 0 0 1-.907-.906ZM5.527 23.472a.906.906 0 0 1 0-1.282L6.81 20.91A.906.906 0 0 1 8.09 22.19L6.81 23.472a.906.906 0 0 1-1.282 0ZM20.91 8.09a.906.906 0 0 1 0-1.281l1.281-1.282a.907.907 0 0 1 1.282 1.282L22.19 8.09a.906.906 0 0 1-1.281 0Z" fill="#currentColor"></path>
            </svg>
        </button>
    </header>
    <div id="container" class="container">
        <main>
            <div style="display: flex; align-items: center;">
                <div>
                    <h1 style="line-height: 1.2; font-size: 2.2rem; font-weight: 700; color: var(--text-color)">Gustavo Luigi</h1>
                    <h2 style="line-height: 1.2; font-size: 1rem; color: var(--secondary-color); font-weight: 500;">Back-end Developer</h2>
                </div>
            </div>
            <br><br>
            <h3 class="subtitle">Envie uma Mensagem</h3>
            <br>
            <form id="contact-form" method="post" action="/methods/send-message.php">
                <input type="text" autocomplete="off" spellcheck="false" name="name" label="Nome">
                <br>
                <input type="text" autocomplete="off" spellcheck="false" name="email" label="E-mail">
                <br>
                <input type="text" autocomplete="off" spellcheck="false" name="subject" label="Assunto">
                <br>
                <input type="text" autocomplete="off" spellcheck="false" name="message" label="Mensagem">
                <br>
                <button type="submit" id="btn-send-message" class="button">Enviar</button>
            </form>
        </main>
        <aside>
            <h3 class="subtitle">Sobre Mim</h3>
            <p class="paragraph">Soluções para web. Desenvolvimento e depuração de sites, aplicativos e sistemas para desktop e mobile.</p>
            <br>
            <h2 class="subtitle">Tecnologias</h2>
            <p class="paragraph">Git, HTML, CSS, XML, JavaScript, JQuery, Vue.js, PHP, Laravel, Java, MySQL, SQL Server, SQLite, HSQL.</p>
            <br>
            <h2 class="subtitle">Contatos</h2>
            <p class="paragraph">
                <a href="mailto:contato@gustavoluigi.com.br"><span class="fa fa-envelope"></span> <span>contato@gustavoluigi.com.br</span></a><br>
                <a href="https://api.whatsapp.com/send?phone=5511952976713" target="_blank"><span class="fa fa-whatsapp"></span> <span>(11) 952976713</span></a><br>
                <a href="https://br.linkedin.com/in/gustavoluigi" target="_blank"><span class="fa fa-linkedin"></span> <span>gustavoluigi</span></a><br>
                <a href="https://github.com/ogustavoluigi" target="_blank"><span class="fa fa-github"></span> <span>ogustavoluigi</span></a>
            </p>
        </aside>
    </div>
    <script src="assets/libs/floating-label.js"></script>
    <script>
        function setLightTheme() {
            document.documentElement.style.setProperty('--text-color', '#212529');
            document.documentElement.style.setProperty('--secondary-color', '#5f5f5f');
            document.documentElement.style.setProperty('--background-color', '#ffffff');
        }

        function setDarkTheme() {
            document.documentElement.style.setProperty('--text-color', '#ffffff');
            document.documentElement.style.setProperty('--secondary-color', '#aeaeae');
            document.documentElement.style.setProperty('--background-color', '#212529');
        }

        document.querySelector("#toggle-theme-button").addEventListener("click", function() {
            let currentTheme = this.getAttribute("data-theme");
            if (currentTheme == "light") {
                this.setAttribute("data-theme", "dark");
                this.innerHTML = `<svg width="30" height="30" fill="#ffffff" xmlns="http://www.w3.org/2000/svg">
                    <path d="m15.22 6.03 2.53-1.94L14.56 4 13.5 1l-1.06 3-3.19.09 2.53 1.94-.91 3.06 2.63-1.81 2.63 1.81-.91-3.06ZM19.61 12.25 21.25 11l-2.06-.05L18.5 9l-.69 1.95-2.06.05 1.64 1.25-.59 1.98 1.7-1.17 1.7 1.17-.59-1.98Z" fill="#currentColor"></path>
                    <path d="M7 6a10.994 10.994 0 0 0 12.56 10.89C17.95 19.36 15.17 21 12 21a9 9 0 0 1-9-9c0-3.17 1.64-5.95 4.11-7.56C7.04 4.95 7 5.47 7 6Z" stroke="#currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>`;
                setDarkTheme();
            } else if (currentTheme == "dark") {
                this.setAttribute("data-theme", "light");
                this.innerHTML = `<svg width="30" height="30" fill="#2e3438" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.5 19.938a5.438 5.438 0 1 0 0-10.876 5.438 5.438 0 0 0 0 10.876Zm0 1.812a7.25 7.25 0 1 1 0-14.5 7.25 7.25 0 0 1 0 14.5Zm0-19.938a.906.906 0 0 1 .906.907V4.53a.906.906 0 1 1-1.812 0V2.72a.906.906 0 0 1 .906-.906Zm0 21.75a.906.906 0 0 1 .906.907v1.812a.906.906 0 1 1-1.812 0V24.47a.906.906 0 0 1 .906-.907ZM5.528 5.529a.906.906 0 0 1 1.282 0L8.09 6.81A.906.906 0 1 1 6.81 8.09L5.528 6.81a.906.906 0 0 1 0-1.282ZM20.91 20.91a.906.906 0 0 1 1.281 0l1.282 1.281a.906.906 0 0 1-1.282 1.282L20.91 22.19a.906.906 0 0 1 0-1.281ZM1.813 14.5a.906.906 0 0 1 .906-.906H4.53a.906.906 0 1 1 0 1.812H2.72a.906.906 0 0 1-.906-.906Zm21.75 0a.906.906 0 0 1 .906-.906h1.812a.906.906 0 1 1 0 1.812H24.47a.906.906 0 0 1-.907-.906ZM5.527 23.472a.906.906 0 0 1 0-1.282L6.81 20.91A.906.906 0 0 1 8.09 22.19L6.81 23.472a.906.906 0 0 1-1.282 0ZM20.91 8.09a.906.906 0 0 1 0-1.281l1.281-1.282a.907.907 0 0 1 1.282 1.282L22.19 8.09a.906.906 0 0 1-1.281 0Z" fill="#currentColor"></path>
                </svg>`;
                setLightTheme();
            }
        });

        let contactForm = document.querySelector("#contact-form");
        let nameField = new FloatingLabel(contactForm.name);
        let emailField = new FloatingLabel(contactForm.email);
        let subjectField = new FloatingLabel(contactForm.subject);
        let messageField = new FloatingLabel(contactForm.message);

        document.querySelector('form').addEventListener("submit", function(event) {
            event.preventDefault();
            let url = this.getAttribute('action');
            const regexNome = /^([A-Za-z|\W]|\s)+$/i;
            const regexEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/i;
            let btnSendMessage = document.querySelector("#btn-send-message");
            if (nameField.getVal() == "") {
                nameField.showMessage("Digite seu nome!");
                nameField.setFocus();
                return false;
            }
            if (!regexNome.test(nameField.getVal())) {
                nameField.showMessage("Acho que esse não é seu nome!");
                nameField.setFocus();
                return false;
            }
            if (!regexEmail.test(emailField.getVal())) {
                emailField.showMessage("Coloque um e-mail válido!");
                emailField.setFocus();
                return false;
            }
            btnSendMessage.innerHTML = `<i style="color: var(--color-white-lighten);" class="fa fa-circle-o-notch fa-spin"></i>&nbsp;Enviando`;
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                let response = JSON.parse(this.response);
                if (response.success) {
                    nameField.setVal("");
                    emailField.setVal("");
                    subjectField.setVal("");
                    messageField.setVal("");
                    btnSendMessage.innerHTML = `Mensagem Enviada`;
                } else btnSendMessage.innerHTML = `Mensagem não Enviada`;
                setTimeout(function() {
                    btnSendMessage.innerHTML = `Enviar`
                }, 5000);
            }
            xhttp.onerror = function() {
                btnSendMessage.innerHTML = `Mensagem não Enviada`;
                setTimeout(function() {
                    btnSendMessage.innerHTML = `Enviar`
                }, 5000);
            }
            xhttp.open("POST", url, true);
            xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhttp.send(`name=${nameField.getVal()}&email=${emailField.getVal()}&subject=${subjectField.getVal()}&message=${messageField.getVal()}`);
        });
    </script>
</body>

</html>