<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista Back End PHP</title>
</head>
<body>

    <!-- 1. -->
    <p><?php echo $msgIdade; ?></p>

    <!-- 2. -->
    <p><?php echo $msgDinheiro; ?></p>

    <!-- 3. -->
    <p>Resultado: <?php echo $resultadoOp; ?></p>

    <hr>

    <!-- 4. -->
    <p>Pares de 1 a 100:</p>
    <p>
    <?php
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
    ?>
    </p>

    <!-- 5. -->
    <p>Tabuadas:</p>
    <?php
    $tabuadas = [4, 7, 12879.5];
    foreach ($tabuadas as $num) {
        echo "<b>Tabuada do $num:</b><br>";
        for ($i = 1; $i <= 10; $i++) {
            echo $num . " x " . $i . " = " . ($num * $i) . "<br>";
        }
        echo "<br>";
    }
    ?>

    <hr>

    <!-- 6. -->
    <p><?php echo saudar("Carlos Johnson"); ?></p>

    <!-- 7. -->
    <?php $res = operacaoIncrevel(10, 5); ?>
    <p>Soma: <?php echo $res[0]; ?></p>
    <p>Subtracao: <?php echo $res[1]; ?></p>
    <p>Frase: <?php echo $res[2]; ?></p>

    <hr>

    <!-- 8. -->
    <p>Memes:</p>
    <ul>
    <?php foreach ($memes as $m): ?>
        <li><?php echo $m; ?></li>
    <?php endforeach; ?>
    </ul>

    <!-- 9. -->
    <p>Papagaios:</p>
    <ul>
    <?php foreach ($papagaios as $p): ?>
        <li><?php echo $p; ?></li>
    <?php endforeach; ?>
    </ul>

    <!-- 10. -->
    <p>Pessoa:</p>
    <ul>
    <?php foreach ($pessoa as $chave => $valor): ?>
        <li><?php echo $chave . ": " . $valor; ?></li>
    <?php endforeach; ?>
    </ul>

    <hr>

    <!-- 11. -->
    <form method="POST">
        <input type="number" step="any" name="peso" placeholder="Peso" required>
        <input type="number" step="any" name="altura" placeholder="Altura" required>
        <button type="submit" name="calc_imc">Calcular IMC</button>
    </form>
    <p><?php echo $imcResultado; ?></p>

    <hr>

    <!-- 12. -->
    <form method="POST">
        <input type="number" step="any" name="n1" placeholder="Numero 1" required>
        <input type="number" step="any" name="n2" placeholder="Numero 2" required>
        <input type="submit" name="op" value="Somar">
        <input type="submit" name="op" value="Subtrair">
        <input type="submit" name="op" value="Multiplicar">
        <input type="submit" name="op" value="Dividir">
        <input type="hidden" name="calc_num" value="1">
    </form>
    <p>Resultado: <?php echo $calcResultado; ?></p>

    <hr>

    <!-- 13. -->
    <form method="POST">
        <input type="text" name="nome" placeholder="Nome" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="text" name="telefone" placeholder="Telefone" required><br>
        <input type="date" name="data_nasc" required><br>
        <input type="text" name="cidade" placeholder="Cidade" required><br>
        <input type="text" name="estado" placeholder="Estado" required><br>
        <select name="sexo" required>
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
        </select><br>
        <input type="text" name="curso" placeholder="Curso" required><br>
        <textarea name="obs" placeholder="Observacoes"></textarea><br>
        <button type="submit" name="cadastrar">Enviar</button>
    </form>

    <?php if ($cadastro): ?>
        <br>
        <div style="border: 1px solid #000; padding: 10px; width: 300px;">
            <h3>Cartao de Cadastro</h3>
            <p>Nome: <?php echo $cadastro['nome']; ?></p>
            <p>Email: <?php echo $cadastro['email']; ?></p>
            <p>Telefone: <?php echo $cadastro['telefone']; ?></p>
            <p>Data Nascimento: <?php echo $cadastro['data_nasc']; ?></p>
            <p>Cidade: <?php echo $cadastro['cidade']; ?></p>
            <p>Estado: <?php echo $cadastro['estado']; ?></p>
            <p>Sexo: <?php echo $cadastro['sexo']; ?></p>
            <p>Curso: <?php echo $cadastro['curso']; ?></p>
            <p>Obs: <?php echo $cadastro['obs']; ?></p>
        </div>
    <?php endif; ?>

</body>
</html>