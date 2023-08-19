<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cactus</title>
    <script>
        function calcularSuma(){
            n1 = document.getElementById("txtN1").value;
            n2 = document.getElementById("txtN2").value;

            alert(n1);
            alert(n2);
        }
    </script>
</head>
<body>
     <input type="text" name="txtN1" id="txtN1" value="0">
     <span>+</span>
     <input type="text" name="txtN2" id="txtN2" value="0">
     <span>=</span>
     <input type="text" name="txtN3" id="txtN3" value="0">
     <button onclick="calcularSuma();">Calcular Suma</button>
</body>
</html>