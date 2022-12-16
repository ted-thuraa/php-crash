<?php
    if(isset($_POST['submit'])) {
        if(!empty($_FILES['upload']['name'])) {
            //allowed files
            $allowed_ext = array('png', 'jpg', 'jpeg', 'gif');

            print_r($_FILES);
            $file_name = $_FILES['upload']['name'];
            $file_size = $_FILES['upload']['size'];
            $file_tmp = $_FILES['upload']['tmp_name'];

            //upload to
            $target_dir = "uploads/${file_name}";

            //get file extenton explode creates an array from a string
            //in this case we want to separate it with the period to get the last part
            $file_ext = explode('.', $file_name);
            $file_ext = strtolower(end($file_ext));

            //echo $file_ext;

            //validate file ext
             if(in_array($file_ext, $allowed_ext)) {
                // Validate file size
                if($file_size <= 1000000) { // 1000000 bytes = 1MB
                    move_uploaded_file($file_tmp, $target_dir);
                    //success message
                    $message = '<p style="color: green;">File uploaded</p>';
                } else {
                    echo '<p style="color: red;">File too large!</p>';
                }
             } else {
                $message = '<p style="color: red;">invalid file type</p>';
             }

        } else {
            $message = '<p style="color: red;">Please select a file</p>';

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
    <?php echo $message ?? null; ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST' enctype='multipart/form-data'>
        select image to Upload
        <input type='file' name='upload'>
        <input type='submit' name='submit' value='submit'>
    </form>
</body>
</html>