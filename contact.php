<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us | Meme Generator</title>
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

    <script type="text/javascript">
        window.onload = function(){
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth()+1; //January is 0!
            var yyyy = today.getFullYear();
            if(dd<10){dd='0'+dd} if(mm<10){mm='0'+mm} today = mm+'/'+dd+'/'+yyyy;
            $('#dateInput').attr('value', today);
            $('#dateInput').html("<b>asdfasdf</b>");
        }
    </script>
</head>

<body>
    <?php include '_components/nav.html' ?>
    <div class="container wrapper">
        <h1>Contact Us</h1>
        <div class="col-md-7">
            <form name="contactForm" action="_php/contactProcess.php" method="POST">
              <div class="form-group">
                <label for="emailInput">Email address</label>
                <input type="email" class="form-control" id="emailInput" placeholder="Email" required name="userEmail">
              </div>
              <div class="form-group">
                <label for="nameInput">Name</label>
                <input type="text" class="form-control" id="nameInput" placeholder="Full Name" required name="userName">
              </div>
              <div class="form-group">
                <label for="dateInput">Date</label>
                <input type="text" class="form-control" id="dateInput" name="userDate" disabled>
              </div>
              <div class="form-group">
                <div class="form-group">
                <label for="suggestionInput">Suggestion</label>
                  <textarea class="form-control" rows="5" id="suggestionInput" name="userSuggestion" placeholder="Enter your suggestion"></textarea>
                </div>
              </div>    
              <div class="g-recaptcha" data-sitekey="6LenUA8TAAAAAGrGMTWi_s6Ksa7vlipPsDLwBZB4"></div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
        <div class="col-md-5">
            <h2>How to submit</h2>
            <p>In order to submit a suggestion, you will have to include:</p>
            <ul>
                <li>A Valid Email</li>
                <li>A Name</li>
                <li>A Constuctive Criticism</li>
            </ul>
            <p>You should use this form to:</p>
            <ul>
                <li>Request the addition of a new meme</li>
                <li>Make general complaints about the aesthetics of the site</li>
                <li>Suggest new additions to the site</li>
            </ul>            
        </div>
        <div class="push"></div>
    </div>
    <?php include '_components/footer.html' ?>
</body>

</html>