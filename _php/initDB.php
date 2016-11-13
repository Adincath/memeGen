<?php

include "config.php";

class dbInitializer{

    private function createCommentTable($conn){
        
        try{
            
            $sql =
            "CREATE TABLE comment(
                ID INT,
                dateCreated DATE,
                ownerID INT,
                body varchar(1000),
                PRIMARY KEY (ID),
                FOREIGN KEY (ownerID) REFERENCES User(uID)
            )"
            ;
            
            $query = $conn->prepare($sql);
            $query->execute();
            
        }
        catch(PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    private function createCommentsTable($conn){
        
        try{
            
            $sql =
            "CREATE TABLE comments(
                commentID INT,
                profileID INT,
                memeID INT,
                PRIMARY KEY (commentID, profileID, memeID),
                FOREIGN KEY (memeID) REFERENCES meme(ID),
                FOREIGN KEY (commentID) REFERENCES comment(ID),
                FOREIGN KEY (profileID) REFERENCES user(uID)
            )"
            ;
            
            $query = $conn->prepare($sql);
            $query->execute();
            
        }
        catch(PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    private function createLikeTable($conn){
        
        try{
            
            $sql =
            "CREATE TABLE likeTable(
                ID INT,
                dateLiked DATE,
                ownerID INT,
                PRIMARY KEY (ID),
                FOREIGN KEY (ownerID) REFERENCES User(uID)
            )"
            ;
            
            $query = $conn->prepare($sql);
            $query->execute();
            
        }
        catch(PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    private function createLikedTable($conn){
        
        try{
            
            $sql =
            "CREATE TABLE liked(
                commentID INT,
                likeID INT,
                memeID INT,
                PRIMARY KEY (commentID, likeID, memeID),
                FOREIGN KEY (memeID) REFERENCES meme(ID),
                FOREIGN KEY (commentID) REFERENCES comment(ID),
                FOREIGN KEY (likeID) REFERENCES likeTable(ID)
            )"
            ;
            
            $query = $conn->prepare($sql);
            $query->execute();
            
        }
        catch(PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    private function createMemeTable($conn){
        try{
            
            $sql =
            "CREATE TABLE meme(
                ID INT AUTO_INCREMENT,
                ownerID INT,
                creationDate DATE,
                baseImageID INT,
                imagePath VARCHAR(255),
                PRIMARY KEY (ID),
                FOREIGN KEY (ownerID) REFERENCES user(uID),
                FOREIGN KEY (baseImageID) REFERENCES meme(ID)
            )"
            ;
            
            $query = $conn->prepare($sql);
            $query->execute();
            
        }
        catch(PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }
    
    private function createUserTable($conn){
        
        try{
            
            $sql =
            "CREATE TABLE user(
                uID INT AUTO_INCREMENT,
                bio varchar(3000),
                email varchar(255) NOT NULL,
                name varchar(255) NOT NULL,
                startDate DATE NOT NULL,
                PRIMARY KEY (uID)
            )"
            ;
            
            $query = $conn->prepare($sql);
            $query->execute();
            
        }
        catch(PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }
    
    public function createAllTables(){

        $conn = new PDO('mysql:dbname=' . DB_DATABASE . ';host=' . DB_HOST  . ';' ,DB_USERNAME , DB_PASSWORD);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        //Order of these functions is intentional for foriegn keys
        self::createUserTable($conn);
        self::createMemeTable($conn);
        self::createLikeTable($conn);
        self::createCommentTable($conn);
        self::createCommentsTable($conn);
        self::createLikedTable($conn);

        $conn = NULL;

    }
}

$driver = new dbInitializer();
$driver->createAllTables();

?>