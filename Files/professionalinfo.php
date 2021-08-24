<?php
   $Typesofprofession = $_POST['Typesofprofession'];
    $Cname = $_POST['Cname'];
   $Caddress = $_POST['Caddress'];
   $Ccontactno = $_POST['Ccontactno'];
   $Cemail = $_POST['Cemail'];
    $Position = $_POST['Position'];
    $Joiningdate = $_POST['Joiningdate'];
    $Professionid = $_POST['Professionid'];
    $Ocontactno = $_POST['Ocontactno'];
  
   
   

//database connection
   $conn = new mysqli('localhost', 'root', '','cms');
   if($conn->connect_error){
        die('connection failed : '.$conn->connect_error);
    }else{
    	$stmt = $conn->prepare("insert into profession_info(Typesofprofession, Cname, Caddress, Ccontactno, Cemail, Position, Joiningdate, Professionid, Ocontactno) values(?, ?, ?, ?, ?, ?, ?, ?, ?)");
    	$stmt->bind_param("sssisssii", $Typesofprofession, $Cname, $Caddress, $Ccontactno, $Cemail, $Position, $Joiningdate, $Professionid, $Ocontactno);
    	$stmt->execute();

      // $sql= ("INSERT INTO personal_info (CMSID) SELECT CMSID FROM signin ORDER BY id ASC");
      
    	echo "Professional Information Updated";
       echo "<script> location.href='residentialinfo.html'; </script>";

    	$stmt->close();
    	$conn->close();
    }
 ?>