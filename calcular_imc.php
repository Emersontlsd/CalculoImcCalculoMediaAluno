<!DOCTYPE html>
<html>
<head>
    <title>Resultado do IMC</title>
</head>
<body>
    <h1>Resultado do IMC</h1>

    <?php
    // Função para substituir vírgula por ponto
    function substituirVirgulaPorPonto($valor) {
        return str_replace(',', '.', $valor);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obter peso e altura do formulário
        $peso = substituirVirgulaPorPonto($_POST["peso"]);
        $altura = substituirVirgulaPorPonto($_POST["altura"]);

        // Calcular o IMC
        $imc = $peso / ($altura * $altura);

        // Determinar a situação
        if ($imc < 17) {
            $situacao = "Muito abaixo do peso";
        } elseif ($imc >= 17 && $imc < 18.5) {
            $situacao = "Abaixo do peso";
        } elseif ($imc >= 18.5 && $imc < 25) {
            $situacao = "Peso normal";
        } elseif ($imc >= 25 && $imc < 30) {
            $situacao = "Acima do peso";
        } elseif ($imc >= 30 && $imc < 35) {
            $situacao = "Obesidade I";
        } elseif ($imc >= 35 && $imc < 40) {
            $situacao = "Obesidade II (severa)";
        } else {
            $situacao = "Obesidade III (mórbida)";
        }

        echo "Seu IMC é: " . number_format($imc, 2) . "<br>";
        echo "Situação: " . $situacao;
    }
    ?>

    <br><br>
    <a href="index.html">Calcular novamente</a>
</body>
</html>