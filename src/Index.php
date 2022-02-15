<?php
if(isset($_FILES['fileToUpload'])){
//     echo "<pre>";
//     print_r($_FILES);
//     echo "</pre>";
//     echo $_FILES["fileToUpload"]["type"];
//    echo $_FILES["fileToUpload"]["size"];
if($_FILES["fileToUpload"]["type"]=="image/png" && $_FILES["fileToUpload"]["size"]<= (2*1000000)){
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],"uploads/".$_FILES["fileToUpload"]["name"])) {
    echo "The file has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}else{
    echo "enter valid image";
}
}
?>
<html>
   <body>
      
      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="fileToUpload" />
         <input type="submit" value="Upload Image" name="submit"/>
      </form>
      
   </body>
</html>