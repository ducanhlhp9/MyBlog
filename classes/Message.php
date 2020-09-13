<?php

(isset($_SESSION['userLogged'])) ? $user = $_SESSION['userLogged'] : $user = "user";
$sql = mysqli_query($connection, "SELECT * FROM users WHERE email='$user'");
$row = mysqli_fetch_array($sql);
$username = $row['username'];
$profile = $row['profile_pic'];
$role = $row['role'];


class Message
{
    private $con;

    public function __construct($con)
    {
        $this->con = $con;
    }

    public function addMessage($name,$phone, $email, $message)
    {
        if (!empty($message)) {
            $query = mysqli_query($this->con, "INSERT INTO message(name, phone, email, message) VALUES('$name','$phone','$email','$message');");
            if (!$query) {
                die("Failed " . mysqli_error($this->con));
            }
        } else {
            return false;
        }
    }


}
