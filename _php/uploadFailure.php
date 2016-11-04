<!doctype html>
<html lang="en">

<head>
    <base href="//localhost/broabect/memeGen/" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Meme Generator</title>
    <link rel='shortcut icon' href='_imgs/favicon.ico' type='image/x-icon' />
    <!-- jQuery -->
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap v3 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="_css/style.css">
    <link rel="stylesheet" href="_css/hover-min.css">

</head>

<body>
    <?php include '../_components/nav.html' ?>
    <div class="container wrapper">
        <div class="col-xs-12 about-row">
            <h1>Admin Page</h1>
            <div class="col-md-4">
                <?php include '../_components/admin-nav.html' ?>
            </div>
            <div class="col-md-8">
                <h3>Upload Failure! <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></h3>
                <div class="alert alert-danger" role="alert">
                  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                  <span class="sr-only">Error:</span>
                   If the problem persists, please <a href="contact.php"> contact us</a>!
                </div>
            </div>            
        </div>
        <div class="push"></div>
    </div>
    <?php include '../_components/footer.html' ?>
</body>

</html>