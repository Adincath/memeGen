<?php 

define("FAILURL", "../editFailure.php"); 
define("SUCCESSURL", "../editSuccess.php"); 

if (isset($_POST["memeName"])) {
    $memeName = $_POST["memeName"];
    $fileName = basename($_FILES["fileToUpload"]["name"]);
    session_start();
    $_SESSION['memeName'] = $memeName;
    $_SESSION['fileName'] = $fileName;
    uploadImage($memeName, $fileName);

} else {
    header('Location: ' . FAILURL, true, $statusCode);
    die();
}



function uploadImage($memeName, $fileName){
    $target_dir = "../_imgs/thumbnails/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } 
    else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            addMemeToDatabase($memeName , $fileName, 500, 500);
            //header('Location: ' . SUCCESSURL, true, $statusCode);
            //die();
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

function addMemeToDatabase($memeName, $fileName, $width, $height){
    include "config.php";

    //Attempting connection and query
    try{
        $conn = new PDO('mysql:dbname=' . DB_DATABASE . ';host=' . DB_HOST  . ';' ,DB_USERNAME , DB_PASSWORD);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  

        $params = array($memeName, $fileName);
        $sql = "INSERT INTO "  . DB_TABLE . " VALUES (:name, :file_name, :width, :height)";

        $query = $conn->prepare($sql);

        //Adding Paremterized Variables
        $query->bindParam(':name', $memeName);
        $query->bindParam(':file_name', $fileName);
        $query->bindParam(':width', $width);
        $query->bindParam(':height', $height);
        $query->execute();

        $conn = NULL; 
        header('Location: ' . SUCCESSURL, true, $statusCode);
        die();
    } 
    catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
}


?>