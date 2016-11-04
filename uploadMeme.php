<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Upload Meme | Meme Generator</title>
    <link rel='shortcut icon' href='_imgs/favicon.ico' type='image/x-icon' />
    <!-- jQuery -->
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap v3 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="_css/style.css">
    <link rel="stylesheet" href="_css/hover-min.css">
    <!-- JS -->
    <script src="_js/main.js"></script>

</head>

<body>
    <?php include '_components/nav.html' ?>
    <div class="container wrapper">
        <div class="col-xs-12 about-row">
            <h1>Admin Page</h1>
            <div class="col-md-4">
                <?php include '_components/admin-nav.html' ?>
            </div>
            <div class="col-md-8">
                <h3>Upload Meme</h3>
                <form name="uploadMemeForm" action="_php/uploadMemeProcess.php" enctype=multipart/form-data method="POST">
                  <div class="form-group">
                    <label for="memeName">Meme Name</label>
                    <input class="form-control" id="memeName" placeholder="Meme Name" name="memeName" autocomplete="on" required> 
                  </div>

                  <input type="file" name="fileToUpload" id="fileToUpload" required>

                  <div class="g-recaptcha" data-sitekey="6LenUA8TAAAAAGrGMTWi_s6Ksa7vlipPsDLwBZB4"></div>
                  <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>            
        </div>
        <div class="push"></div>
    </div>
    <?php include '_components/footer.html' ?>
</body>

</html>