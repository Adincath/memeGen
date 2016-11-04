<!doctype html>
<html lang="en">

<head>
    <base href="//localhost/broabect/memeGen/" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Success | Meme Generator</title>
    <link rel='shortcut icon' href='_imgs/favicon.ico' type='image/x-icon' />
    <!-- jQuery -->
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap v3 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!-- Google reCAPTCHA -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!-- CSS -->
    <link rel="stylesheet" href="_css/style.css">
    <link rel="stylesheet" href="_css/hover-min.css">
</head>

<?php include"main.php" ?>

<body>
    <?php include '../_components/nav.html' ?>
    <div class="container wrapper">
    <div class="col-md-6">
        <h1>Suggestion Submitted</h1>
        <p>Your suggestion has been successfully been recorded.</p>
        <p>Thank You!</p>
    </div>
    <div class="col-md-6">
        <img class="center thumbnail" src="_imgs/contact-succes.png" alt="Kermit the Frog Meme, 'I think your meme site is stupid, but that is non of my business though'">
    </div>
        <div class="push"></div>
    </div>
        <?php include '../_components/footer.html' ?>
</body>

</html>