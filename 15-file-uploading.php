<?php
if(isset($_POST['submit'])) {
    if(!empty($_FILES['upload']['name'])) {
        $allowed_ext = array('png', 'jpg', 'jpeg', 'gif');
        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $file_tmp = $_FILES['upload']['tmp_name'];
        $target_dir = "uploads/${file_name}";


        // Get file ext

        $file_ext = explode('.', $file_name);
        $file_ext = strtolower((end($file_ext)));

        echo $file_ext;

        // Validate file ext    

        if((in_array($file_ext, $allowed_ext))) { 

        
        } else {
        $message = '<p style"color: red;">Please choose a file </p>';
        }

        } else {
        $message = '<p style"color: red;">Please choose a file </p>';
    }
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <?php echo $message ?? null ; ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data" </form>
    Select image to Upload:
    <input type="file" name="upload">;
    <input type="submit" value="Submit" name="submit">
    
</body>
</html>


