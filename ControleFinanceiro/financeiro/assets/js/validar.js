// VALIDAÇAO DE CAMPOS: TELA LOGIN  (INDEX.PHP)

function ValidarLogin(){
    if ($("#emailUsuario").val().trim()== ''){
        alert ("Preencha o campo obrigatório E-MAIL");
        $("#emailUsuario"). focus();
        return false;
    }


    if ($("#senha").val().trim()== ''){
        alert ("Preencha o campo obrigatório SENHA!");
        $ ("#senha"). focus();
        return false;
    }


    if ($("#senha").val().trim().length < 6 || $("#senha").val().trim().length > 8 ){
        alert ("O campo SENHA deve conter entre 6 e 8 caracteres!");
        $("#senha"). focus();
        return false;
    }
}

function ValidarCadastro (){

    if ($("#nomelUsuario").val().trim()== ''){
        alert ("Preencha o campo obrigatório NOME!");
        $("#nomeUsuario"). focus();
        return false;
    }

    if ($("#emailUsuario").val().trim()== ''){
        alert ("Preencha o campo obrigatório E-MAIL");
        $("#emailUsuario"). focus();
        return false;
    }


    if ($("#senha").val().trim()== ''){
        alert ("Preencha o campo obrigatório SENHA!");
        $("#senha"). focus();
        return false;
    }

    if ($("#repSenha").val().trim()== ''){
        alert ("Preencha o campo obrigatório REPETIR SENHA!");
        $ ("#repSenha"). focus();
        return false;
    }

    if ($("#senha").val().trim() != $("#repSenha").val().trim()){
        alert ("As SENHAS devem ser IGUAIS!");
        $("#repSenha"). focus();
        return false;
    }

    if ($("#senha").val().trim().length < 6 || $("#senha").val().trim().length > 8 ){
        alert ("O campo SENHA deve conter entre 6 e 8 caracteres!");
        $("#senha"). focus();
        return false;
    }

}

function ValidarMeusDados(){
    if($("#nomeUsuario").val().trim() == ''){
        alert("Preencha o campo obrigatório NOME");
        $("#nomeUsuario").focus();
        return false;
    }

    if ($("#emailUsuario").val().trim() == ''){
        alert("Preencha o campo obrigatório E-MAIL!")
        $("#emailUsuario").focus();
        return false;
    }
}

function ValidarCategoria(){
    if ($("#nome").val().trim() == ''){
        alert ("Preencha o campo obrigatório NOME DA CATEGORIA");
        $("#nome").focus();
        return false;
    }
}

function ValidarEmpresa (){
    if ($("#nomeEmp").val().trim() == ''){
        alert ("Preencha o campo obrigatório NOME DA EMPRESA!");
        $("#nomeEmp").focus();
        return false;
    }
    if ($("#telefone").val().trim() == ''){
        alert("Preencha o campo obrigatório TELEFONE!");
        $("#telefone").focus();
        return false;
    }
    if($("#endereco").val().trim() == ''){
        alert("Preencha o campo obrigatório ENDEREÇO!");
        $("#endereco").focus();
        return false;
    }
}

function ValidarConta(){

    if ($("#banco").val().trim() == ''){
        alert ("Preencha o campo obrigatório BANCO!")
        $("#banco").focus();
        return false;
    }
    if ($("#agencia").val().trim() == ''){
        alert ("Preencha o campo obrigatório NUMERO DA AGÊNCIA!")
        $("#agencia").focus();
        return false;
    }
    if ($("#numero").val().trim() == ''){
        alert ("Preencha o campo obrigatório NUMERO DA CONTA!")
        $("#numero").focus();
        return false;
    }
    if ($("#saldo").val().trim() == ''){
        alert ("Preencha o campo obrigatório SALDO (R$)!")
        $("#saldo").focus();
        return false;
    }
}

function ValidarRealizarMovimento(){
    if ($("#tipo").val().trim() == ''){
        alert ("Preencha o campo obrigatório TIPO DE MOVIMENTO!")
        $("#tipo").focus();
        return false;
    }
    if ($("#data").val().trim() == ''){
        alert ("Selecione uma DATA!")
        $("#data").focus();
        return false;
    }
    if ($("#valor").val().trim() == ''){
        alert ("Preencha o campo obrigatório VALOR!")
        $("#valor").focus();
        return false;
    }
    if ($("#categoria").val().trim() == ''){
        alert ("Preencha o campo obrigatório CATEGORIA FINANCEIRA!")
        $("#categoria").focus();
        return false;
    }
    if ($("#empresa").val().trim() == ''){
        alert ("Selecione uma EMPRESA!")
        $("#empresa").focus();
        return false;
    }
    if ($("#conta").val().trim() == ''){
        alert ("Selecione uma CONTA BANCÁRIA!")
        $("#conta").focus();
        return false;
    }
}

function ValidarConsultarMovimento(){
    if ($("#tipoMov").val().trim() == ''){
        alert ("Selecione um TIPO DE MOVIMENTO!")
        $("#tipoMov").focus();
        return false;
    }
    if ($("#dtInicio").val().trim() == ''){
        alert ("Selecione uma DATA DE INICIO!")
        $("#dtInicio").focus();
        return false;
    }
    if ($("#dtFinal").val().trim() == ''){
        alert ("Selecione uma DATA FINAL!")
        $("#dtFinal").focus();
        return false;
    }
}