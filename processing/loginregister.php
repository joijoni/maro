<?php 
if(isset($_POST['register'])){    
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $occupation=$_POST["occupation"];
    $industry=$_POST["industry"];
    $password=$_POST["password"];
    $designation=2;
    $salt = 'shfdyewencnhcsdsewe'.$password;
    $hashed_password = md5($salt);            
    $date=date("Y-m-d h:i:s");

    $to = $email. "\r\n";
    $subject = 'Welcome to Josey MSME';
    $name = "Josey Marion";
    $email = "info@msmebyjosey.com"; 

  $message = "************************************************** \r\n" .
  	         "Welcome to  MSME by Josey!  \r\n" .
             "************************************************** \r\n" .	
            "Thank you for registering with us. \r\n" .
            "Your account has been created. \r\n" .
            "You can login with your password and email. \r\n" .
  	        "Name: " . $name . "\r\n" .
  	        "E-mail: " . $email . "\r\n" .
  	        "Message: " . $_POST["message"] . "\r\n"; 

  $headers = "From: " . $name . "<" . $email . "> \r\n" .
  	         "Reply-To: " . $email . "\r\n" .
             "MIME-Version: 1.0" . "\r\n" .
             "Content-type:text/html;charset=UTF-8" . "\r\n";

    //Insert into the database
    $set_fk_checkr=mysqli_query($conn,"SET FOREIGN_KEY_CHECKS=0;");
    $sql="INSERT INTO users (first_name, last_name, email, phone, occupation, industry_id, password, date_created) VALUES ('$fname','$lname','$email','$phone','$occupation','$industry','$hashed_password','$date')";
    if (!mysqli_query($conn,$sql) && !$set_fk_check)
    {
    $_SESSION['msgtype']="danger";
    $_SESSION['msg']="User registration failed";
    echo "<script>alert('Failed!', 'User registration failed');</script>";
    die('Error: ' . mysqli_error($conn));
    }else{
        mail($to, $subject, $message, $headers); 
        $_SESSION['msgtype']="success";
        $_SESSION['msg']="User registration successful";
        echo "<script>alert('Success!', 'User registration successful');</script>";
        header("Location: index.php");
    }
}
  


//check if form is submitted

if (isset($_POST['login'])) {
      
    $username = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $salt = 'shfdyewencnhcsdsewe'.$password;
    $hashed_password = md5($salt);                     
    $query = "SELECT * FROM users WHERE email = '$username' AND password = '$hashed_password'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) >= 1) {
        $row = mysqli_fetch_array($result);
        $_SESSION['user'] = $row['email'];
        $_SESSION['loggedIn'] = true;
        echo "<script>alert('Success!', 'User login successful');</script>";
        header("location:userhome.php");
    }else {
        $_SESSION['msgtype']="danger";
        $_SESSION['msg']="username or password is incorrect";
        echo "<script>alert('Failed!', 'User Login failed');</script>";
        header("location:index.php");
    }                                 
}
?>