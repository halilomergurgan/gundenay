<?php
include 'baglanti.php';
 
if (isset($_POST['submit'])) {
    $j = 0; //Variable for indexing uploaded image 
    
  $target_path = "sizden_gelenler_upload/"; //Declaring Path for uploaded images
    for ($i = 0; $i < count($_FILES['file']['name']); $i++) {//loop to get individual element from the array

        $validextensions = array("jpeg", "jpg", "png","JPG");  //Extensions which are allowed
        $ext = explode('.', basename($_FILES['file']['name'][$i]));//explode file name from dot(.) 
        $file_extension = end($ext); //store extensions in the variable
        
    $target_path = $target_path . md5(uniqid()) . "." . $ext[count($ext) - 1];//set the target path with a new name of image
 
        $j = $j + 1;//increment the number of uploaded images according to the files in array       
       
    if (($_FILES["file"]["size"][$i] <  50000000) //Approx. 100kb files can be uploaded.
                && in_array($file_extension, $validextensions)) {

            if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $target_path)) {
                mysql_query($sql = "INSERT INTO sizden_gelenler
                (sizden_gelenler_ad, sizden_gelenler_resim)
                            VALUES 
                            ('".mysql_real_escape_string($_POST['sizden_gelenler_ad'])."',
                             '".$target_path."');");
                            
                                  
                echo $j. ').<span id="noerror">Image uploaded successfully!.</span><br/><br/>';
            } else {//if file was not moved.
                echo $j. ').<span id="error">please try again!.</span><br/><br/>';
            }
        } else {//if file size and file type was incorrect.
            echo $j. ').<span id="error">***Invalid file Size or Type***</span><br/><br/>';
        }

    }
}
?>