let sections = ["", "sobre", "contato"];
let currentSection = 0;
let currentSectionPosition = 0;

let nameField = new MasterInput(document.querySelector('#name'));
let emailField = new MasterInput(document.querySelector('#email'));
let subjectField = new MasterInput(document.querySelector('#subject'));
let messageField = new MasterInput(document.querySelector('#message'));

document.querySelector('form').addEventListener("submit", function (e) {
    e.preventDefault();
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
    xhttp.onload = function () {
        let response = JSON.parse(this.response);
        if (response.success) {
            clearFields();
            btnSendMessage.innerHTML = `Mensagem Enviada`;
        } else btnSendMessage.innerHTML = `Mensagem não Enviada`;
        setTimeout(function () {
            btnSendMessage.innerHTML = `Enviar`
        }, 5000);
    }
    xhttp.onerror = function () {
        console.log(this);
        btnSendMessage.innerHTML = `Mensagem não Enviada`;
        setTimeout(function () {
            btnSendMessage.innerHTML = `Enviar`
        }, 5000);
    }
    xhttp.open("POST", url, true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send(`name=${nameField.getVal()}&email=${emailField.getVal()}&subject=${subjectField.getVal()}&message=${messageField.getVal()}`);
});

function clearFields() {
    nameField.setVal("");
    emailField.setVal("");
    subjectField.setVal("");
    messageField.setVal("");
}