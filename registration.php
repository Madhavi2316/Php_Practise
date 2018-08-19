<?php
    session_start();
     header('location:Login.php');
    //connection with back end
    $con=mysqli_connect('localhost','root');
    if($con){
        echo "Connection sucsessful";
       
    }
    else{
        echo "please check details";
    }
    //connect with db
    mysqli_select_db($con, 'sessionpracticals');

    $name= $_POST['username'];
    $pass= $_POST['password'];
    $confirm_pass= $_POST['confirm_password'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
//query creation as a string for resuability
    $sql= "select * from registration where username='$name' && password='$pass'";
   
    //query execution
    $result= mysqli_query($con, $sql);
    //echo $result;
// $row= mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count= mysqli_num_rows($result);

    if($count == 1)
    {
        echo "already a member";
    }
    else{
        $qv="insert into registration(username, password, confirm_password, email, phone) values ('$name','$pass','$confirm_pass','$email','$phone')";
        mysqli_query($con, $qv);
    }

?>