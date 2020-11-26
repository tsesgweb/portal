function validarTitulo(inscricao) {
    var paddedInsc = inscricao;
    var dig1 = 0;
    var dig2 = 0;

    var tam = paddedInsc.length;
    var digitos = paddedInsc.substr(tam - 2, 2);
    var estado = paddedInsc.substr(tam - 4, 2);
    var titulo = paddedInsc.substr(0, tam - 2);
    var exce = (estado == '01') || (estado == '02');
    dig1 = (titulo.charCodeAt(0) - 48) * 9 + (titulo.charCodeAt(1) - 48) * 8 +
        (titulo.charCodeAt(2) - 48) * 7 + (titulo.charCodeAt(3) - 48) * 6 +
        (titulo.charCodeAt(4) - 48) * 5 + (titulo.charCodeAt(5) - 48) * 4 +
        (titulo.charCodeAt(6) - 48) * 3 + (titulo.charCodeAt(7) - 48) * 2;
    var resto = (dig1 % 11);
    if (resto == 0) {
        if (exce) {
            dig1 = 1;
        } else {
            dig1 = 0;
        }
    } else {
        if (resto == 1) {
            dig1 = 0;
        } else {
            dig1 = 11 - resto;
        }
    }

    dig2 = (titulo.charCodeAt(8) - 48) * 4 + (titulo.charCodeAt(9) - 48) * 3 + dig1 * 2;
    resto = (dig2 % 11);
    if (resto == 0) {
        if (exce) {
            dig2 = 1;
        } else {
            dig2 = 0;
        }
    } else {
        if (resto == 1) {
            dig2 = 0;
        } else {
            dig2 = 11 - resto;
        }
    }

    if ((digitos.charCodeAt(0) - 48 == dig1) && (digitos.charCodeAt(1) - 48 == dig2)) {
        return true; // Titulo valido
    } else {
        return false;
    }

}
function completaZerosEsquerda(numero, tamanho) {
    var ret = "";
    if (numero.length > 0) {
        var qtdCompleta = tamanho - numero.length;
        var zeros = "";
        for (var i = 0; i < qtdCompleta; i++) {
            zeros += "0";
        }
        ret = zeros + numero;
    }
    return ret;

}
function validarNomeTituloEleitor(nomeTitulo) {
    var regra = /^[0-9]+$/;
    if (nomeTitulo.match(regra)) {
        return validarTitulo(completaZerosEsquerda(nomeTitulo, 12));
    }else{
        return true;
    }
}

$.validator.addMethod("time24", function(value, element) {
    if (!/^\d{2}:\d{2}$/.test(value)) return false;
    var parts = value.split(':');
    if (parts[0] > 23 || parts[1] > 59) return false;
    return true;
}, "Informe um hora válida.");

$.validator.addMethod("dateBR", function (value, element) {
    if (value.length != 10) return false;
    var data = value;
    var dia = data.substr(0, 2);
    var barra1 = data.substr(2, 1);
    var mes = data.substr(3, 2);
    var barra2 = data.substr(5, 1);
    var ano = data.substr(6, 4);
    if (data.length != 10 || barra1 != "/" || barra2 != "/" || isNaN(dia) || isNaN(mes) || isNaN(ano) || dia > 31 || mes > 12) return false;
    if ((mes == 4 || mes == 6 || mes == 9 || mes == 11) && dia == 31) return false;
    if (mes == 2 && (dia > 29 || (dia == 29 && ano % 4 != 0))) return false;
    if (ano < 1900) return false;
    return true;
}, "Informe uma data válida"); // Mensagem padrão

$.validator.addMethod("titulo", function (value, element) {
    return validarTitulo(completaZerosEsquerda(value, 12));
}, "Título de eleitor inválido."); // Mensagem padrão


$.validator.addMethod("nomeTituloEleitor", function (value, element) {
    return validarNomeTituloEleitor(value);
}, "Título de eleitor inválido."); // Mensagem padrão


$(function () {
    $("#form-consulta-quitacao-eleitoral").validate({
        // Specify validation rules
        rules: {
            nomeEleitor: {
                required: true
            },
            numeroTitulo: {
                required: true,
                digits: true,
                titulo: true
            },
            dataNascimento: {
                required: true,
                dateBR: true
            },
            nomeMae: {
                required: "#QE_NaoConstaMae:unchecked"
            },
            nomePai: {
                required: "#QE_NaoConstaPai:unchecked"
            }
        },
        // Specify validation error messages
        messages: {
            nomeEleitor: {
                required: "Informe o nome do eleitor"
            },
            numeroTitulo: {
                required: "Informe o número do título"
            },
            dataNascimento: {
                required: "Informe a data de nascimento",
                dateBR: "Informe uma data válida"
            },
            nomeMae: "Nome da mãe deve ser preenchido ou \"Não Consta/Em Branco\" deve ser marcado.",
            nomePai: "Nome do pai deve ser preenchido ou \"Não Consta/Em Branco\" deve ser marcado."
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function (form) {
            //form.submit();
        }
    });
    $("#form-validar-quitacao-eleitoral").validate({
        rules: {
            numeroTitulo: {
                required: true,
                digits: true,
                titulo: true
            },
            dataEmissao: {
                required: true,
                dateBR: true
            },
            horaEmissao: {
                required: true,
                time24: true
            },
            codigoCertidao: {
                required: true
            }
        },
        messages: {
            numeroTitulo: {
                required: "Informe o número do título"
            },
            dataEmissao: {
                required: "Informe a data de emissão da certidão",
                dateBR: "Informe uma data válida"
            },
            horaEmissao: {
                required: "Informe a hora de emissão da certidão",
                time24: "Informe um horário válido"
            },
            codigoCertidao: {
                required: "Informe o código de validação da certidão"
            }
        },
        submitHandler: function (form) {
            //form.submit();
        }
    });
    $("#form-consultar-local-votacao").validate({
        rules: {
            nomeTituloEleitor: {
                required: true,
                nomeTituloEleitor: true
            },
            dataNascimento: {
                required: true,
                dateBR: true
            },
            nomeMae: {
                required: "#LV_NaoConstaMae:unchecked"
            }
        },
        messages: {
            nomeTituloEleitor: {
                required: "Informe o nome ou o número do título",
                nomeTituloEleitor: "Número do título inválido"
            },
            dataNascimento: {
                required: "Informe a data de nascimento",
                dateBR: "Informe uma data válida"
            },
            nomeMae: {
                required: "Informe o nome da mãe"
            }
        },
        submitHandler: function (form) {
            //form.submit();
        }
    });
    $("#form-consultar-titulo-eleitoral").validate({
        rules: {
            nomeTituloEleitor: {
                required: true,
                nomeTituloEleitor: true
            },
            dataNascimento: {
                required: true,
                dateBR: true
            },
            nomeMae: {
                required: "#TE_NaoConstaMae:unchecked"
            }
        },
        messages: {
            nomeTituloEleitor: {
                required: "Informe o nome ou o número do título",
                nomeTituloEleitor: "Número do título inválido"
            },
            dataNascimento: {
                required: "Informe a data de nascimento",
                dateBR: "Informe uma data válida"
            },
            nomeMae: {
                required: "Informe o nome da mãe"
            }
        },
        submitHandler: function (form) {
            //form.submit();
        }
    });
    $("#form-consulta-situacao-eleitoral").validate({
        rules: {
            nomeTituloEleitor: {
                required: true,
                nomeTituloEleitor: true
            },
            dataNascimento: {
                required: true,
                dateBR: true
            }
        },
        messages: {
            nomeTituloEleitor: {
                required: "Informe o nome ou o número do título",
                nomeTituloEleitor: "Número do título inválido"
            },
            dataNascimento: {
                required: "Informe a data de nascimento",
                dateBR: "Informe uma data válida"
            }
        },
        submitHandler: function (form) {
            //form.submit();
        }
    });
    $("#delete_files_without_reference").validate({
        rules: {
            path_server: {
                required: true
            },
            start_date: {
                required: true,
                dateBR: true
            },
            end_date: {
                required: true,
                dateBR: true
            },
            tribunal: {
                required: true
            }
        },
        messages: {
            path_server: {
                required: "Campo obrigatório"
            },
            start_date: {
                required: "Informe a data inicial",
                dateBR: "Informe uma data válida"
            },
            end_date: {
                required: "Informe a data final",
                dateBR: "Informe uma data válida"
            },
            tribunal: {
                required: "Campo obrigatório"
            }
        },
        submitHandler: function (form) {
            form.submit();
        }
    });
    $("#form-pesquisa-pag").validate({
        rules: {
            start_date: {
                dateBR: {
                    depends: function(element) {
                        return $("#start_date").val()
                    }
                }
            },
            end_date: {
                dateBR: {
                    depends: function(element) {
                        return $("#end_date").val()
                    }
                }
            },
        },
        messages: {
            start_date: {
                dateBR: "Informe uma data válida"
            },
            end_date: {
                dateBR: "Informe uma data válida"
            }
        },
        submitHandler: function (form) {
            form.submit();
        }
    });
    $("#form-consulta-negativa-alistamento-eleitoral").validate({
        // Specify validation rules
        rules: {
            nomeCivil: {
                required: true
            },
            dataNascimento: {
                required: true,
                dateBR: true
            },
            nomeMae: {
                required: "#QE_NaoConstaMae:unchecked"
            },
            nomePai: {
                required: "#QE_NaoConstaPai:unchecked"
            }
        },
        // Specify validation error messages
        messages: {
            nomeCivil: {
                required: "Informe o nome"
            },
            dataNascimento: {
                required: "Informe a data de nascimento",
                dateBR: "Informe uma data válida"
            },
            nomeMae: "Nome da mãe deve ser preenchido ou \"Não Consta/Em Branco\" deve ser marcado.",
            nomePai: "Nome do pai deve ser preenchido ou \"Não Consta/Em Branco\" deve ser marcado."
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function (form) {
            //form.submit();
        }
    });
    $("#form-validar-negativa-alistamento-eleitoral").validate({
        rules: {
            nomeCivil: {
                required: true
            },
            dataNascimento: {
                required: true,
                dateBR: true
            },
            dataEmissao: {
                required: true,
                dateBR: true
            },
            horaEmissao: {
                required: true,
                time24: true
            },
            codigoCertidao: {
                required: true
            }
        },
        messages: {
            nomeCivil: {
                required: "Informe o nome"
            },
            dataNascimento: {
                required: "Informe a data de nascimento",
                dateBR: "Informe uma data válida"
            },
            dataEmissao: {
                required: "Informe a data de emissão da certidão",
                dateBR: "Informe uma data válida"
            },
            horaEmissao: {
                required: "Informe a hora de emissão da certidão",
                time24: "Informe um horário válido"
            },
            codigoCertidao: {
                required: "Informe o código de validação da certidão"
            }
        },
        submitHandler: function (form) {
            //form.submit();
        }
    });
    $("#form-consulta-negativa-alistamento-eleitoral").validate({
        // Specify validation rules
        rules: {
            nomeCivil: {
                required: true
            },
            dataNascimento: {
                required: true,
                dateBR: true
            },
            nomeMae: {
                required: "#QE_NaoConstaMae:unchecked"
            },
            nomePai: {
                required: "#QE_NaoConstaPai:unchecked"
            }
        },
        // Specify validation error messages
        messages: {
            nomeCivil: {
                required: "Informe o nome"
            },
            dataNascimento: {
                required: "Informe a data de nascimento",
                dateBR: "Informe uma data válida"
            },
            nomeMae: "Nome da mãe deve ser preenchido ou \"Não Consta/Em Branco\" deve ser marcado.",
            nomePai: "Nome do pai deve ser preenchido ou \"Não Consta/Em Branco\" deve ser marcado."
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function (form) {
            //form.submit();
        }
    });
    $("#form-consulta-crimes-eleitorais").validate({
        // Specify validation rules
        rules: {
            nomeEleitor: {
                required: true
            },
            numeroTitulo: {
                required: true,
                digits: true,
                titulo: true
            },
            dataNascimento: {
                required: true,
                dateBR: true
            },
            nomeMae: {
                required: "#QE_NaoConstaMae:unchecked"
            },
            nomePai: {
                required: "#QE_NaoConstaPai:unchecked"
            }
        },
        // Specify validation error messages
        messages: {
            nomeEleitor: {
                required: "Informe o nome do eleitor"
            },
            numeroTitulo: {
                required: "Informe o número do título"
            },
            dataNascimento: {
                required: "Informe a data de nascimento",
                dateBR: "Informe uma data válida"
            },
            nomeMae: "Nome da mãe deve ser preenchido ou \"Não Consta/Em Branco\" deve ser marcado.",
            nomePai: "Nome do pai deve ser preenchido ou \"Não Consta/Em Branco\" deve ser marcado."
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function (form) {
            //form.submit();
        }
    });
    $("#form-validar-crimes-eleitorais").validate({
        rules: {
            numeroTitulo: {
                required: true,
                digits: true,
                titulo: true
            },
            dataEmissao: {
                required: true,
                dateBR: true
            },
            horaEmissao: {
                required: true,
                time24: true
            },
            codigoCertidao: {
                required: true
            }
        },
        messages: {
            numeroTitulo: {
                required: "Informe o número do título"
            },
            dataEmissao: {
                required: "Informe a data de emissão da certidão",
                dateBR: "Informe uma data válida"
            },
            horaEmissao: {
                required: "Informe a hora de emissão da certidão",
                time24: "Informe um horário válido"
            },
            codigoCertidao: {
                required: "Informe o código de validação da certidão"
            }
        },
        submitHandler: function (form) {
            //form.submit();
        }
    });
    $("#form-validar-documentos").validate({
        rules: {
            numeroTitulo: {
                required: true,
                digits: true,
                titulo: true
            },
            dataEmissao: {
                required: true,
                dateBR: true
            },
            horaEmissao: {
                required: true,
                time24: true
            },
            codigoCertidao: {
                required: true
            }
        },
        messages: {
            numeroTitulo: {
                required: "Informe o número do título"
            },
            dataEmissao: {
                required: "Informe a data de emissão da certidão",
                dateBR: "Informe uma data válida"
            },
            horaEmissao: {
                required: "Informe a hora de emissão da certidão",
                time24: "Informe um horário válido"
            },
            codigoCertidao: {
                required: "Informe o código de validação da certidão"
            }
        },
        submitHandler: function (form) {
            //form.submit();
        }
    });
});
var checkNumber=function(e){e.match(/^[0-9]+$/)?$(".campo-data-situacao-eleitoral").hide():$(".campo-data-situacao-eleitoral").show()};

