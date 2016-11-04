<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome | Meme Generator</title>
    <link rel='shortcut icon' href='_imgs/favicon.ico' type='image/x-icon' />
    <!-- jQuery -->
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap v3 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="_css/welcome.css">
    <link rel="stylesheet" href="_css/style.css">
    <link rel="stylesheet" href="_css/hover-min.css">
    <!-- Custom JS -->
    <script src="_js/loadThumbnails.js"></script>
</head>

<body>
    <!-- Nav include -->
    <?php include '_components/nav.html' ?>
    <div id="jumbotron" class="jumbotron text-center">
        <div class="container">
            <div class="jumbotron">
                <h1>Meme Generator</h1>
                <p>Create memes to share with co-workers and friends!</p>
                <p><a class="btn btn-primary btn-lg hvr-grow-shadow" href="generator.php" role="button">Start Creating!</a>
                </p>
            </div>
        </div>
    </div><!-- /.jumbotron -->
    <div class="container welcome-row">
        <div class="col-sm-6">
            <h2>Welcome</h2>
            <p>We have created a simple web application that will allow anyone to user their favorite memes to create funny or clever images. We have offer many different classic memes to start your project off with.</p>
        </div>
        <div class="col-sm-6">
            <img id="welcome-feature" src="_imgs/welcome-example.png">
        </div>
    </div>
    <div class="container welcome-row">
        <div class="col-md-4 text-center">
            <h3>Create</h3>
            <p>Create some of your favorite memes, or start your own custom memes for the internet to see!</p>
        </div>
        <div class="col-md-4 text-center">
            <h3>Download</h3>
            <p>We allow a user to save a download the image of the meme that was created. This makes it easy to share your creations!</p>
        </div>
        <div class="col-md-4 text-center">
            <h3>Support</h3>
            <p>We are constantly working to improve our generator. Our goal is to create a robust, easy to use, and visually appealing application.</p>
        </div>
    </div>
    <div class="container welcome-row">
        <div class="col-md-4 text-center">
            <h3>12</h3>
            <h4>Meme Templates</h4>
        </div>
        <div class="col-md-4 text-center">
            <h3>1</h3>
            <h4>Programmer</h4>
        </div>
        <div class="col-md-4 text-center">
            <h3>1000's of	</h3>
            <h4>Possibilities</h4>
        </div>
    </div>
    <div id="memeGallery" class="container welcome-row">
        <h2 style="text-align: center">Get Started!</h2>
        <!-- 
			Loading this area using with loadThumbnails.json
        -->
    </div>
    <?php include '_components/footer.html' ?>
</body>

</html>