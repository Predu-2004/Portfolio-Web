// Função para recuperar os valores e realizar o cálculo

botao_calcular = document.querySelector("#calcular");
botao_resetar = document.querySelector("#resetar");

botao_calcular.addEventListener("click", function(e) {

    e.preventDefault();

    var focal = document.querySelector("#distancia-focal").value;
    var objeto = document.querySelector("#posicao-objeto").value;
    var imagem = document.querySelector("#posicao-imagem").value;

    // Variável que conta quantos campos nulos existem no algoritmo
    var nulo = 0;

    if (focal == "") {
        nulo += 1;
    } else {
        focal = parseFloat(focal);
    }

    if (objeto == "") {
        nulo += 1;
    } else {
        objeto = parseFloat(objeto);
    }

    if (imagem == "") {
        nulo += 1;
    } else {
        imagem = parseFloat(imagem); 
    }

    // Verificação da quantidade de campos nulos
    if (nulo >= 2) {
        alert("São necessários no mínimo dois valores para que o cálculo seja efetuado corretamente.");
    } else if (nulo == 0) {
        alert("São necessários apenas dois valores para que o cálculo seja efetuado corretamente.");
    } else {
        // Verificação de qual campo que está vazio para definir a incógnita
        var incognita = "";

        if (typeof focal == 'string') {
            incognita = "focal";
        } else if (typeof objeto == 'string') {
            incognita = "objeto";
        } else if (typeof imagem == 'string') {
            incognita = "imagem";
        }

        numerador = 0;
        denominador = 0;

        // Calcular o valor da incógnita
        switch(incognita) {
            case "focal":
                numerador = imagem + objeto;
                denominador = imagem * objeto;
                objeto = denominador / numerador;
                document.querySelector("#distancia-focal").value = objeto;
                document.querySelector("#distancia-focal").classList.add("border");
                document.querySelector("#distancia-focal").classList.add("border-3");
                document.querySelector("#distancia-focal").classList.add("border-success");
                document.querySelector("#distancia-focal").classList.add("text-success");
                break;

            case "objeto":
                numerador = imagem - focal;
                denominador = imagem * focal;
                objeto = denominador / numerador;
                document.querySelector("#posicao-objeto").value = objeto;
                document.querySelector("#posicao-objeto").classList.add("border");
                document.querySelector("#posicao-objeto").classList.add("border-3");
                document.querySelector("#posicao-objeto").classList.add("border-success");
                document.querySelector("#posicao-objeto").classList.add("text-success");
                break;

            case "imagem":
                numerador = objeto - focal;
                denominador = objeto * focal;
                imagem = denominador / numerador;
                document.querySelector("#posicao-imagem").value = imagem;
                document.querySelector("#posicao-imagem").classList.add("border");
                document.querySelector("#posicao-imagem").classList.add("border-3");
                document.querySelector("#posicao-imagem").classList.add("border-success");
                document.querySelector("#posicao-imagem").classList.add("text-success");
                break;
        } 

    } 
})

botao_resetar.addEventListener("click", function(e) {

    e.preventDefault();

    document.querySelector("#distancia-focal").value = "";
    document.querySelector("#distancia-focal").classList.remove("border");
    document.querySelector("#distancia-focal").classList.remove("border-3");
    document.querySelector("#distancia-focal").classList.remove("border-success");
    document.querySelector("#distancia-focal").classList.remove("text-success");

    document.querySelector("#posicao-objeto").value = "";
    document.querySelector("#posicao-objeto").classList.remove("border");
    document.querySelector("#posicao-objeto").classList.remove("border-3");
    document.querySelector("#posicao-objeto").classList.remove("border-success");
    document.querySelector("#posicao-objeto").classList.remove("text-success");

    document.querySelector("#posicao-imagem").value = "";
    document.querySelector("#posicao-imagem").classList.remove("border");
    document.querySelector("#posicao-imagem").classList.remove("border-3");
    document.querySelector("#posicao-imagem").classList.remove("border-success");
    document.querySelector("#posicao-imagem").classList.remove("text-success");

})
