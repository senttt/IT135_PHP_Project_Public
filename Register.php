<?php
class Register {
  private $conn;

  public function __construct($host, $username, $password, $dbname) {
    $this->conn = new mysqli($host, $username, $password, $dbname);

    if ($this->conn->connect_error) {
      die("Connection failed: " . $this->conn->connect_error);
    }
  }

  public function insertUser($firstName, $lastName, $email, $password, $contactNo, $address, $dateOfBirth, $maritalStatus, $isDeceased, $userType) {
    // Check if email is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "Invalid email format";
    }
    
    // Check if email already exists in the database
    $stmt = $this->conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        return "Email already exists";
    }
    
    // Check if contact number already exists in the database
    $stmt = $this->conn->prepare("SELECT * FROM users WHERE contactNo = ?");
    $stmt->bind_param("s", $contactNo);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        return "Contact number already exists";
    }
    
    // Hash the password before storing it in the database
    $password = password_hash($password, PASSWORD_DEFAULT); 
    $fullName = $firstName . " " . $lastName;
    $stmt = $this->conn->prepare("INSERT INTO users (firstName, lastName, fullName, email, password, contactNo, address, dateOfBirth, maritalStatus, isDeceased, userType) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssssis", $firstName, $lastName, $fullName, $email, $password, $contactNo, $address, $dateOfBirth, $maritalStatus, $isDeceased, $userType);
    $stmt->execute();
    $stmt->close();
    
    return "User registered successfully";
}


  
  public function close() {
    $this->conn->close();
  }
}


?>