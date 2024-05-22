<?php
if (isset($_POST['comprimento']) && isset($_POST['largura']) && isset($_POST['altura'])) {
    $comprimento = intval($_POST['comprimento']);
    $largura = intval($_POST['largura']);
    $altura = intval($_POST['altura']);
    $volume = $comprimento * $largura * $altura;

    echo "<br><br> O volume da caixa é: " . $volume. " cm³.";
}

