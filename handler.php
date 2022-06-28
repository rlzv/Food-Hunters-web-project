<?php
include "conn.php";
if ( isset( $_POST['login'] ) ) {

    function validate( $data ) {
      $data = trim( $data );
      $data = stripslashes( $data );
      $data = htmlspecialchars( $data );
      return $data;
    }

    $username = validate( $_POST[ 'username' ] );
    $password = validate( $_POST[ 'psw' ] );
    $password = md5( $password );

      $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
      $result = mysqli_query( $conn, $sql ); 
      $count = mysqli_num_rows( $result );
	  $row = mysqli_fetch_assoc($result);

      if ( $count == 1 ) {
        session_start();
          $_SESSION[ 'username' ] = $row['username'];
          header( "Location: ./index.php" );
    } else {
    header( "Location: ./login.php" );
    exit();
  }
}


if ( isset( $_POST['register'] ) ) {
    header( "Location: ./index.php?merge" );
    function validate( $data ) {
      $data = trim( $data );
      $data = stripslashes( $data );
      $data = htmlspecialchars( $data );
      return $data;
    }

    $username = validate( $_POST[ 'username' ] );
    $email = validate( $_POST[ 'email' ] );
    $password1 = validate( $_POST[ 'psw' ] );
    $password2 = validate( $_POST[ 'psw-repeat' ] );

if($password1 == $password2){

    $password1 = md5( $password1 );
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password1')";
    $result = mysqli_query( $conn, $sql );
} else {
    header( "Location: ./register.php" );
    exit();
  

}}

