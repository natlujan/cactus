function calcularSuma(){
    /* n1 = document.getElementById("txtN1").value;
    n2 = document.getElementById("txtN2").value;

    res = document.getElementById("txtRes");
    res.value = parseInt(n1) + parseInt(n2);
    */
}

function calcularResta(){
    n1 = document.getElementById("txtN1").value;
    n2 = document.getElementById("txtN2").value;

    res = document.getElementById("txtRes");
    res.value = parseInt(n1) - parseInt(n2);
}


function calcularSuma2(){
    n1 = $("#txtN1").val();
    n2 = $("#txtN2").val();

    if (n1 == "0" || n2 == "0")
    {
        swal.fire(
            "Error",
            "Debe capturar números > 0 para N1 y N2",
            "error"
        );
    }
    else{

    res = parseInt(n1) + parseInt(n2)

    $("#txtRes").val(res)
    }
}
