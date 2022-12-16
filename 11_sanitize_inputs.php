<?php
/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/

//checks if the state of the form. if its submitted to avoid some error
if(isset($_POST['submit'])) {
    //protects incase user types for example a script
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);
    echo $name;

    //another way to do this using filter func
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPEECIAL_CHARS);
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPEECIAL_CHARS);
    echo $name;
}
?>

<!-- Pass data through a link -->
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Ted">click</a>

<br><br>

<!-- Pass data through a form -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<div>
  <label>Name: </label>
  <input type="text" name="name">
</div>
<br>
<div>
<label>Age: </label>
  <input type="text" name="age">
</div>
<br>
  <input type="submit" name="submit" value="Submit">
</form>