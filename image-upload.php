<?php
include 'db-connect.php' ;
if(isset($_POST["submit"])){
    $target_dir = "uploads";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
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
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $query = "INSERT INTO `virtual_tour` VALUES ('' ,'$target_file')";
            $query_run = mysqli_query($connect, $query);
            
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>
<html>
    <head>
        <title>SE Project</title>
        <style type="text/css">
            #blah{
                visibility: hidden;
            }
        </style>
        <script src="jquery-3.2.0.js"></script>
        <script type="text/javascript">
            $(document).ready(function($){
                $("#image").change(function(){
                    readURL(this);
                });

            });
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#blah').attr('src', e.target.result).css({"visibility":"visible", "height": "200px",
                            "width": "200px"});
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>
    </head>
    <body background="https://www.simpson-associates.co.uk/wp-content/uploads/2016/04/2-compressor.jpg">
    <form action="image-upload.php" method="post" enctype="multipart/form-data">
        <img id="blah" src="#" alt="your image" /><br>
        <input type='file' name="fileToUpload" id="image"/><br><br><br>
        <input type="submit" value="Upload Image" name="submit">
    </form>

    </body>
</html>