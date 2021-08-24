<?php
   $Name = $_POST['name'];
    $Email = $_POST['email'];
   $Contactno = $_POST['contactno'];
   $Fathername = $_POST['fathername'];
   $Fathernid = $_POST['fathernid'];
    $Fatherocc = $_POST['fatherocc'];
    $Fathercontactno = $_POST['fathercontactno'];
    $Mothername = $_POST['Mothername'];
    $Mothernid = $_POST['Mothernid'];
    $Motheroccupation = $_POST['Motheroccupation'];
    $Mothercontactno = $_POST['Mothercontactno'];
    $LGname = $_POST['LGname'];
    $LGcno = $_POST['LGcno'];
     $LGnidno = $_POST['LGnidno'];
    $Bloodgroup = $_POST['Bloodgroup'];
    $Dateofbirth = $_POST['Dateofbirth'];
    $Placeofbirth = $_POST['Placeofbirth'];
    $Gender = $_POST['Gender'];
    $Typesofcitizen = $_POST['Typesofcitizen'];
    $Age = $_POST['Age'];
    $Religion = $_POST['Religion'];
    $Profession = $_POST['Profession'];
    $Maritalstatus = $_POST['Maritalstatus'];

//database connection
   $conn = new mysqli('localhost', 'root', '','cms');
   if($conn->connect_error){
        die('connection failed : '.$conn->connect_error);
    }else{
    	$stmt = $conn->prepare("insert into personal_info(name, email, contactno, fathername, fathernid, fatherocc, fathercontactno, Mothername, Mothernid, Motheroccupation, Mothercontactno, LGname, LGcno, LGnidno, Bloodgroup, Dateofbirth, Placeofbirth, Gender, Typesofcitizen, Age, Religion, Profession, Maritalstatus) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    	$stmt->bind_param("ssisisisisisiisssssisss", $Name, $Email, $Contactno, $Fathername, $Fathernid, $Fatherocc, $Fathercontactno, $Mothername, $Mothernid, $Motheroccupation, $Mothercontactno, $LGname, $LGcno, $LGnidno, $Bloodgroup, $Dateofbirth, $Placeofbirth, $Gender, $Typesofcitizen, $Age, $Religion, $Profession, $Maritalstatus);
    	$stmt->execute();

      // $sql= ("INSERT INTO personal_info (CMSID) SELECT CMSID FROM signin ORDER BY id ASC");
      
    	echo "Personal Information Updated";
      echo "<script> location.href='identityinfo.html'; </script>";

    	$stmt->close();
    	$conn->close();
    }
 ?>