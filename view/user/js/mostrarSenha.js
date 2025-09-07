//Este código JavaScript contém uma série de funções que são responsáveis por alternar a visibilidade das 
//senhas em diferentes campos de um formulário. Cada função é associada a um evento, 
//como um clique em um ícone de olho, e alterna entre a exibição do texto da senha e a sua ocultação.

function mostrarOcultarSenha(){
    // Obtém o elemento de senha pelo nome
    var senha = document.getElementsByName("senha")[0];
    // Obtém a imagem do olho pelo ID
    var olhoImg = document.getElementById("olho");

    // Verifica se o tipo da senha é "password"
    if (senha.type == "password") {
        // Se for, muda para tipo "text" (exibindo o texto)
        senha.type = "text";
        // Altera a imagem do olho para o olho aceso
        olhoImg.src = "user/img/olhoAceso.png";
    } else {
        // Se não for "password", muda de volta para tipo "password" (oculta o texto)
        senha.type = "password";
        // Altera a imagem do olho para o olho apagado
        olhoImg.src = "user/img/olhoApagado.png";
    }
}

// Página de Alterar a Senha

function mostrarOcultarSenhaAntiga(){
    // Obtém o elemento de senha atual pelo nome
    var senha = document.getElementsByName("senhaAtual")[0];
    // Obtém a imagem do olho atual pelo ID
    var olhoImg = document.getElementById("olhoAtual");

    if (senha.type == "password") {
        senha.type = "text";
        olhoImg.src = "img/olhoAceso.png";
    } else {
        senha.type = "password";
        olhoImg.src = "img/olhoApagado.png";
    }
}

function mostrarOcultarSenhaNova(){
    // Obtém o elemento de nova senha pelo nome
    var senha = document.getElementsByName("senhaNova")[0];
    // Obtém a imagem do olho novo pelo ID
    var olhoImg = document.getElementById("olhonovo");

    if (senha.type == "password") {
        senha.type = "text";
        olhoImg.src = "img/olhoAceso.png";
    } else {
        senha.type = "password";
        olhoImg.src = "img/olhoApagado.png";
    }
}

function mostrarOcultarSenhaConfirma(){
    // Obtém o elemento de confirmação de senha pelo nome
    var senha = document.getElementsByName("senhaConfirmacao")[0];
    // Obtém a imagem do olho de confirmação pelo ID
    var olhoImg = document.getElementById("olhoconfirma");

    if (senha.type == "password") {
        senha.type = "text";
        olhoImg.src = "img/olhoAceso.png";
    } else {
        senha.type = "password";
        olhoImg.src = "img/olhoApagado.png";
    }
}

function mostrarOcultarSenhaCadastro(){
    // Obtém o elemento de senha de cadastro pelo nome
    var senha = document.getElementsByName("senhacadastro")[0];
    // Obtém a imagem do olho de cadastro pelo ID
    var olhoImg = document.getElementById("olhocadastro");

    if (senha.type == "password") {
        senha.type = "text";
        olhoImg.src = "img/olhoAceso.png";
    } else {
        senha.type = "password";
        olhoImg.src = "img/olhoApagado.png";
    }
} 
