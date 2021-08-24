<?php
   $BCno = $_POST['BCno'];
    $NIDno = $_POST['NIDno'];
   $Passportno = $_POST['Passportno'];
   $DLno = $_POST['DLno'];
   $TINcno = $_POST['TINcno'];
    $Bloodgroup = $_POST['Bloodgroup'];
    $Fingerprint = $_POST['Fingerprint'];
    $Eyerishprint = $_POST['Eyerishprint'];
    $Signature = $_POST['Signature'];
    $Birthmark = $_POST['Birthmark'];
    $Identicalmark = $_POST['Identicalmark'];
   
   

//database connection
   $conn = new mysqli('localhost', 'root', '','cms');
   if($conn->connect_error){
        die('connection failed : '.$conn->connect_error);
    }else{
    	$stmt = $conn->prepare("insert into identity_info(BCno, NIDno, Passportno, DLno, TINcno, Bloodgroup, Fingerprint, Eyerishprint, Signature, Birthmark , Identicalmark) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    	$stmt->bind_param("iiiiissssss", $BCno, $NIDno, $Passportno, $DLno, $TINcno, $Bloodgroup, $Fingerprint, $Eyerishprint, $Signature, $Birthmark , $Identicalmark);
    	$stmt->execute();

      // $sql= ("INSERT INTO personal_info (CMSID) SELECT CMSID FROM signin ORDER BY id ASC");
      
    	echo "Identity Information Updated";
       echo "<script> location.href='Professionalinfo.html'; </script>";

    	$stmt->close();
    	$conn->close();
    }
 ?>