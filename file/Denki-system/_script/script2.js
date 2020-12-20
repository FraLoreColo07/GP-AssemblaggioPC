$(document).ready(function () {

    $("#button1-cpu").click(function () {

        document.getElementById("scelta-cpu").value = "CPU scelta";
    });
    $("#button1-mo").click(function () {

        document.getElementById("scelta-mo").value = "Motherboard scelta";
    });
    $("#button1-ram").click(function () {

        document.getElementById("prova").innerHTML = "Fatto2";
    });
    $("#button1-gpu").click(function () {

        document.getElementById("prova").innerHTML = "Fatto3";
    });
    $("#button1-ssd").click(function () {

        document.getElementById("prova").innerHTML = "Fatto4";
    });
    $("#button1-case").click(function () {

        document.getElementById("prova").innerHTML = "Fatto5";
    });

    $("#imm-cpu").click(function () {

        var url;  //probabilmente sustituito da php
        window.open(url, '_blank')
    });
});


