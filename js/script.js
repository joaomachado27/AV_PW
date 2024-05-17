document.querySelector('input[type=email').oninvalid = function(){
    // remove mensagens de erro antigas
    this.setCustomValidity("");

    // reexecuta a validação
    if(!this.validity.valid){

        // se inválido, coloca mensagem de erro
        this.setCustomValidity("Email inválido");
    }
};

/*document.querySelector('#form-busca').onsubmit = function(){
    if (document.querySelector('#q').value == ''){
        document.querySelector('#q').style.border = '1px solid red';
        return false;
    }
}
*/