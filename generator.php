<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Generator | Meme Generator</title>
    <link rel='shortcut icon' href='_imgs/favicon.ico' type='image/x-icon' />
    <!-- jQuery -->
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap v3 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="_css/style.css">
    <link rel="stylesheet" href="_css/hover-min.css">
    <!-- Custom JS -->
    <script src="_js/generator.js"></script>
</head>

<body>
    <?php include '_components/nav.html' ?>

    <div class="container wrapper">
        <h1>Meme Generator</h1>
        <div class="col-md-5" id="form-container">
            <div id="meme-form">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Top Text" id="topline" name="topline" autocomplete="off" required>
                </div>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Bottom Text" id="botline" name="botline" autocomplete="off" required>
                </div>
                <select id="memePicker" class="dropdown" name="meme">
                    <option disabled="">Select a meme</option>
                    <!-- Inserting here from generator.js -->
                </select>
                <br>
                <!--<div class="g-recaptcha" data-sitekey="6LenUA8TAAAAAGrGMTWi_s6Ksa7vlipPsDLwBZB4"></div>-->
                <a id="memeDownload" class="btn btn-default hvr-back-pulse" >Download</a>
            </div>
        </div>
        <div class="col-md-7">
            <div id="canvasContainer" class="col-xs-11 thumbnail">
                <canvas id="memecanvas" class="">
                    Sorry, canvas not supported on your browser
                </canvas>
                <img id="ghostImage" src="_imgs/memes/sipping-my-tea.png" alt="" />
            </div>
        </div>
        <div class="push"></div>
    </div>
    <?php include '_components/footer.html' ?>

</body>

</html>