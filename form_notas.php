<html>
<head>
    <title>Resultado da Média</title>
</head>
<body>
    <h1>Resultado da Média</h1>

    <?php
    // Função para substituir vírgula por ponto
    function substituirVirgulaPorPonto($valor) {
        return str_replace(',', '.', $valor);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obter nome, nota1 e nota2 do formulário
        $nome = $_POST["nome"];
        $nota1 = substituirVirgulaPorPonto($_POST["nota1"]);
        $nota2 = substituirVirgulaPorPonto($_POST["nota2"]);

        // Calcular a média
        $media = ($nota1 + $nota2) / 2;

        // Determinar a situação
        if ($media < 4.0) {
            $situacao = "Reprovado";
        } elseif ($media >= 4.0 && $media < 6.0) {
            $situacao = "Exame final";
        } else {
            $situacao = "Aprovado";
        }

        echo "Nome do Aluno: " . $nome . "<br>";
        echo "Média: " . number_format($media, 2) . "<br>";
        echo "Situação: " . $situacao;
    }
    ?>

    <br><br>
    <a href="index.html">Calcular novamente</a>
</body>      
  
</html>