<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Meme | Meme Generator</title>
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
    <script src="_js/main.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(function(){
        $("#editForm").hide();
        $("#imagePreview").hide();

        $("#memePicker").change(function(){
            $("#editForm").show();
            $("#imagePreview").show();
            $.getJSON("_php/getJson.php", function(data) {
                $.each(data, function(object, val) {
                  if(val.file_name == $("#memePicker").val()){
                      var memeName = String(val.name);
                      var memeFileName = String(val.file_name);
                      var memeWidth = String(val.width);                  
                      var memeHeight = String(val.height);                  

                      $("#name").val(memeName);
                      $("#width").val(memeWidth);
                      $("#height").val(memeHeight);
                      $("#imagePreview").attr("src", "_imgs/thumbnails/" + memeFileName);                  
                  }
                });
            });
        });   

    });
    </script>
</head>

<body onload="getMemes();">
    <?php include '_components/nav.html' ?>
    <div class="container wrapper" >
        <div class="col-xs-12 about-row">
            <h1>Admin Page</h1>
            <div class="col-md-3">
                <?php include '_components/admin-nav.html' ?>
            </div>
            <div class="col-md-4">
                <h3>Edit Meme</h3>

                <select id="memePicker" class="dropdown" name="meme" >
                    <option disabled="">Select a meme</option>
                    <!-- Inserting here from generator.js -->
                </select>
                <form id="editForm" name="uploadMemeForm" action="_php/editMemeProcess.php" enctype=multipart/form-data method="POST">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Name" name="memeName">
                  </div>
                  <div class="form-group">
                    <label for="width">Width</label>
                    <input type="text" class="form-control" id="width" placeholder="Width" name="memeWidth">
                  </div>
                  <div class="form-group">
                    <label for="height">Height</label>
                    <input type="text" class="form-control" id="height" placeholder="Height" name="memeHeight">
                  </div>

                  <div class="form-group">
                    <label for="memeImage">Meme Image</label>
                    <input type="file" name="memeImage" id="memeImage">
                  </div>


                  <div class="g-recaptcha" data-sitekey="6LenUA8TAAAAAGrGMTWi_s6Ksa7vlipPsDLwBZB4"></div>
                  <button class="btn btn-default">Submit</button>
                </form>
            </div>     
            <div class="col-md-5">
                <img id="imagePreview" class="center thumbnail width-fix" src="">
            </div>
        </div>
        <div class="push"></div>
    </div>
    <?php include '_components/footer.html' ?>
</body>

</html>