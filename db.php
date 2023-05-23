
<?php 
    
ob_start();
 if(isset($_POST['heading'])&& isset($_POST['trip_date'])&& isset($_POST['duration'])&& isset($_POST['summary']))
 {
    $servername="localhost";
    $username="id20610698_veena";
    $password="Veena@123";
    $dbname="id20610698_add_adventure";
    // open mysql connection
    $conn=new mysqli($servername,$username,$password,$dbname);
    // proceed if connection healthy
    if($conn->connect_error)
    {
        die("Mysql connection failed:".$conn->connect_error);
    }

    $heading=$_POST["heading"];
    $trip_date=$_POST["trip_date"];
    $duration=$_POST["duration"];
    $summary=$_POST["summary"];



    $stmt=$conn->prepare("INSERT INTO add_event(heading,trip_date,duration,summary) VALUES (?,?,?,?)");
    $stmt->bind_param("ssss",$heading,$trip_date,$duration,$summary);
    $stmt->execute();



    $_SESSION['affected_rows']=$conn->affected_rows;
    if (($_SESSION['affected_rows']) >0) {
        header("location:admin-confirm.php"); // Redirecting To Other Page
            ob_end_flush();
    }
    else{
      echo "<script> alert('Incorrect code, try again!');</script>";
   }

   

    $conn->close();
 } 


?>