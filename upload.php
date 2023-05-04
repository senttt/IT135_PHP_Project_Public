<?php
if (isset($_POST['submit'])){

    echo "check";
    $mysqli = new mysqli("localhost", "root", "", "barangaywebsite");

// check for connection errors
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    $documentForm = $_POST['documentForm'];
    $fnameForm = $_POST['fnameForm'];
    $lnameForm = $_POST['lnameForm'];
    $emailForm = $_POST['emailForm'];
    $addressForm = $_POST['addressForm'];
    $birthdateForm = $_POST['birthdateForm'];
    $sexForm = $_POST['sexForm'];
    $civilStatusForm = $_POST['civilStatusForm'];

    print_r($_POST);
    
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf');

    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            echo "Success. File Uploaded.";
            
            if($fileSize < 600000){
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = 'upload/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                
            }else{
                echo "Error. Your file is too big.";
            }
        }else{
            echo "Error uploading the file.";
        }
    }else{
        echo "Error. You cannot upload files of this type.";
    }

    if (empty($documentForm) || empty($lnameForm) ||empty($emailForm) || empty($fnameForm) || empty($addressForm) || empty($birthdateForm) || empty($sexForm) || empty($civilStatusForm)) {
        $message = "Please fill in all required fields.";
      }else {
        // All required fields are filled, proceed with user registration
        $sql = "INSERT INTO documentrequest(doc_documentType, doc_fname, doc_lname, doc_address, doc_birthdate, doc_sex, doc_email, doc_civilstatus, doc_directory) 
                                  VALUES ('$documentForm','$fnameForm','$lnameForm','$addressForm','$birthdateForm','$sexForm','$emailForm','$civilStatusForm','$fileDestination')";
      }
      if ($mysqli->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
}