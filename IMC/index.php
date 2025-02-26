<div>

    <h2><b>O seu IMC esta na Faixa de: </b></h2>
    <?php

    $altura = 1.75;
    $peso = 90;
    $imc = $peso / ($altura * $altura);
    $faixa = '';

    if ($imc < 18.5) {
        $faixa = 'Abaixo do peso';
    } elseif ($imc >= 18.5 && $imc <= 24.9) {
        $faixa = 'Peso normal';
    } elseif ($imc >= 25 && $imc <= 29.9) {
        $faixa = 'Sobrepeso';
    } elseif ($imc >= 30 && $imc <= 34.9) {
        $faixa = 'Obesidade grau 1';
    } elseif ($imc >= 35 && $imc <= 39.9) {
        $faixa = 'Obesidade grau 2';
    } else {
        $faixa = 'Obesidade grau 3';
    }

    echo "<h3>Faixa: $faixa</h3>";
    echo "<h3>IMC: $imc</h3>";

    /*
    De acordo com a tabela da OMS:

    Abaixo de 18.5 → Abaixo do peso
    18.5 - 24.9 → Peso normal
    25 - 29.9 → Sobrepeso
    30 - 34.9 → Obesidade grau 1
    35 - 39.9 → Obesidade grau 2
    40+ → Obesidade grau 3
     */
    ?>
</div>