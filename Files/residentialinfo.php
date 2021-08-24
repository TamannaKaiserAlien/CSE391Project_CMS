<?php
   $PDivision = $_POST['PDivision'];
    $PDistrict = $_POST['PDistrict'];
   $Pcitycorporation = $_POST['Pcitycorporation'];
   $Ppolicestation = $_POST['Ppolicestation'];
   $Pvillage = $_POST['Pvillage'];
    $proadno = $_POST['proadno'];
    $Ppostoffice = $_POST['Ppostoffice'];
    $Ppostcode = $_POST['Ppostcode'];
    $Phousename = $_POST['Phousename'];
    $Pholdingno = $_POST['Pholdingno'];
    $Pappartmentno = $_POST['Pappartmentno'];
    $Pblockno = $_POST['Pblockno'];
    $Pwardno = $_POST['Pwardno'];
     $Perdivision = $_POST['Perdivision'];
     $Perdistrict = $_POST['Perdistrict'];
    $Percitycorporation = $_POST['Percitycorporation'];
    $Perpolicestation = $_POST['Perpolicestation'];
    $Pervillage = $_POST['Pervillage'];
    $Perroadno = $_POST['Perroadno'];
    $Perpostoffice = $_POST['Perpostoffice'];
    $Perpostcode = $_POST['Perpostcode'];
    $Perhousename = $_POST['Perhousename'];
        $Perholdingno = $_POST['Perholdingno'];
    $Perappartmentno = $_POST['Perappartmentno'];
    $Perblockno = $_POST['Perblockno'];
    $Perwardno = $_POST['Perwardno'];
   $Voterareaname = $_POST['Voterareaname'];
   $Voterareano = $_POST['Voterareano'];
   $Housecontactno = $_POST['Housecontactno'];

//database connection
   $conn = new mysqli('localhost', 'root', '','cms');
   if($conn->connect_error){
        die('connection failed : '.$conn->connect_error);
    }else{
    	$stmt = $conn->prepare("insert into residential_info(PDivision, PDistrict, Pcitycorporation, Ppolicestation, Pvillage, proadno, Ppostoffice, Ppostcode, Phousename, Pholdingno, Pappartmentno, Pblockno, Pwardno, Perdivision, Perdistrict, Percitycorporation, Perpolicestation, Pervillage, Perroadno, Perpostoffice, Perpostcode, Perhousename,  Perholdingno, Perappartmentno, Perblockno, Perwardno, Voterareaname, Voterareano, Housecontactno) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    	$stmt->bind_param("sssssssisiiiisssssssisiiiisii", $PDivision, $PDistrict, $Pcitycorporation, $Ppolicestation, $Pvillage, $proadno, $Ppostoffice, $Ppostcode, $Phousename, $Pholdingno, $Pappartmentno, $Pblockno, $Pwardno, $Perdivision, $Perdistrict, $Percitycorporation, $Perpolicestation, $Pervillage, $Perroadno, $Perpostoffice, $Perpostcode, $Perhousename, $Perholdingno, $Perappartmentno, $Perblockno, $Perwardno, $Voterareaname, $Voterareano, $Housecontactno);
    	$stmt->execute();

      // $sql= ("INSERT INTO personal_info (CMSID) SELECT CMSID FROM signin ORDER BY id ASC");
      
    	echo "Residential Information Updated";
      echo "<script> location.href='educationalinfo.html'; </script>";

    	$stmt->close();
    	$conn->close();
    }
 ?>