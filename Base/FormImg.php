<form action="FormImg.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="image" id="image">
    <button type="submit">Submit</button>
</form>
<?php 
    if(isset($_FILES["image"])){
        $tmp = $_FILES["image"]["tmp_name"];
        $filename = $_FILES["image"]["name"];
        move_uploaded_file($tmp, $filename);
        echo $filename . " ";
        echo '<img src="'.$filename .'" width="300px"  >';
    }
?>
