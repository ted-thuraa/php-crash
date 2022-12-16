<?php

/*
    Sessions are a way to store information (in variables) to
    be used across multiple pages.
    Unlike cookies sessions are stored on the servers.
    sessions store sensitive info like user id 
*/
session_start();

if(isset($_POST['submit'])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);

    $password = $_POST['password'];

    if($username == 'john' && $password == 'password') {
        $_SESSION['username'] = $username;
        //redirect
        header('Location: /php-crash/extras/dashboard.php');
    } else {
        echo 'incorrect credentials';
    }
}

?>

<form action="<?php echo htmlspecialchars(
    $_SERVER['PHP_SELF']
  ); ?>" method="POST">
    <div>
      <label>Username: </label>
      <input type="text" name="username">
    </div>
    <br>
    <div>
      <label>Password: </label>
      <input type="password" name="password">
    </div>
    <br>
    <input type="submit" name="submit" value="Submit">
  </form>