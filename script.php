<?php
$text_area = trim($_GET["text-area"]);
$censured_word = trim($_GET['censored']);
$censored_paragraph = str_replace(strtolower($censured_word), '***', strtolower($text_area));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css'
        integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg=='
        crossorigin='anonymous' />
</head>
<body>
    <div class="container">
        <div class="d-flex flex-column w-50 m-auto mt-5">
            <div>
                <p> Paragrafo NON censurato:</p>
                <p> <?php echo $text_area ?></p>
                <p>Questo paragrafo è lungo <strong><?php echo strlen($text_area)?></strong> caratteri</p>
            </div>
            <p>Parola da censurare: <?php echo $censured_word?> </p>
            <div>
                <p>Paragrafo censurato:</p>
                <p><?php echo $censored_paragraph ?></p>
                <p>Questo paragrafo è lungo <strong><?php echo strlen($censored_paragraph)?></strong> caratteri</p>
            </div>
        </div>
        
        <a class="btn btn-secondary" href="index.html">Torna indietro</a>
    </div>
</body>
</html>