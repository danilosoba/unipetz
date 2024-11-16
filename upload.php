<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $targetDir = "uploads adoçao/"; // Pasta onde as imagens serão salvas
    $targetFile = $targetDir . basename($_FILES["imagem"]["name"]);
    $uploadOk = 1;

    // Verifica se o arquivo é uma imagem
    $check = getimagesize($_FILES["imagem"]["tmp_name"]);
    if ($check !== false) {
        // Tenta mover o arquivo para a pasta uploads
        if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $targetFile)) {
            echo "A imagem " . htmlspecialchars(basename($_FILES["imagem"]["name"])) . " foi enviada com sucesso.";
        } else {
            echo "Houve um erro ao enviar a imagem.";
        }
    } else {
        echo "O arquivo não é uma imagem.";
        $uploadOk = 0;
    }
}
?>
