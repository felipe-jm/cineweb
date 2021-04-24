<?php

if (!$this) {
    exit(header('HTTP/1.0 403 Forbidden'));
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">

    <meta charset="utf-8">
    <title>Cineweb</title>
    <meta name="description" content="Um gerenciador de cinemas">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="<?php echo URL; ?>public/img/favicon.png" type="image/png">

    <!-- CSS -->
    <link href="<?php echo URL; ?>public/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <header class="headerContainer">
            <div class="headerContent">
                <img src="<?php echo URL; ?>public/img/logo_transparent.png" alt="Cineweb logo">
            </div>
        </header>