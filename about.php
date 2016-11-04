<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About | Meme Generator</title>
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
    <?php include '_components/nav.html' ?>
    <div class="container wrapper">
        <div class="col-xs-12 about-row">
            <h1>About</h1>
            <div class="col-md-4">
                <img class="about-image width-fix" src="_imgs/about-project.png" alt="Make all the Memes! meme">
            </div>
            <div class="col-md-8">
                <h2>The Project</h2>
                <p>This project started as an assignment for CSCI415, Web-Based Client-Server Program, where we used PHP to edit the text over a background image. This worked, but did not allow the user to download the meme that they created.</p>

                <p>This web app uses HTML5's canvas instead to let a user download their custom meme.</p>

                <p>All of the meme information is stored in a JSON file which allows the site to dynamically load in that information for easier maintenance and modularity. Using JSON also would allow me to use any server side script and a database to create the JSON for this site to use without having to change any of the code on the site</p>
            </div>
        </div>

        <div class="col-xs-12 about-row">
            <div class="col-md-4 hidden-lg hidden-md">
                <img class="about-image" src="_imgs/Becton_Brooks.png" alt="Make all the Memes! meme">
            </div>           
            <div class="col-md-8">
            <h2>The Programmer</h2>
                <h3>Brooks Becton</h3>
                <p>Brooks Becton is a student at the University of Tennessee at Martin. He is currently studying computer science as a junior. Brooks enjoys learning more about programming, specifically web based technologies. He also works for the university as a student worker for the ITC department on the web site team. More of his work can be found on his personal web site <a href="http://adincath.bitbucket.org" target="_blank">The Directory</a></p>

                <p></p>
            </div>
            <div class="col-md-4 visible-md-block visible-lg-block">
                <img class="about-image" src="_imgs/Becton_Brooks.png">
            </div>
        </div>
        <div class="push"></div>
    </div>
    <?php include '_components/footer.html' ?>
</body>

</html>