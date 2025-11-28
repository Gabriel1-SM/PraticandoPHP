<?php
$resultado = '';

if (isset($_GET['numero1'], $_GET['numero2'], $_GET['calcular'])) {
  $num1 = floatval($_GET['numero1']);
  $num2 = floatval($_GET['numero2']);
  $operacao = $_GET['calcular'];

  switch ($operacao) {
    case 'somar':
      $resultado = $num1 + $num2;
      break;
    case 'subtrair':
      $resultado = $num1 - $num2;
      break;
    case 'dividir':
      $resultado = $num2 != 0 ? $num1 / $num2 : 'Erro: Divisão por zero';
      break;
    case 'multiplicar':
      $resultado = $num1 * $num2;
      break;
    default:
      $resultado = 'Operação inválida';
  }
}
?>
<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Calculadora</title>
    <style>
        body {
            background-color: antiquewhite;
            font-family: monospace;
            padding: 20px;
        }
        .btn {
            margin: 13px 0px 19px 0px;
        }
        .botao {
            box-shadow: 10px 11px 14px 0 #d1969634;
            background-color: #8f0b0b;
            border-radius: 70px;
            margin: 14px 0px 0px 0px;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
        form div {
            margin: 10px 0;
        }
        input, select {
            padding: 5px;
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div>
        <form method="GET">
            <div>
                <label for="numero1">Insira o Primeiro Número:</label>
                <input type="number" name="numero1" id="numero1" required />
            </div>
            <div>
                <label for="numero2">Insira o Segundo Número:</label>
                <input type="number" name="numero2" id="numero2" required />
            </div>
            <div class="btn">
                <label for="calcular">Operação:</label>
                <select name="calcular" id="calcular">
                    <option value="somar">+</option>
                    <option value="subtrair">-</option>
                    <option value="dividir">/</option>
                    <option value="multiplicar">*</option>
                </select>
            </div>
            <input type="submit" value="Calcular" class="botao">
            
            <?php if($resultado !== ''): ?>
            <div>
                <label for="resultado">Seu resultado:</label>
                <input type="text" id="resultado" value="<?php echo $resultado; ?>" readonly />
            </div>
            <?php endif; ?>
        </form>
    </div>
</body>
</html>