<?php
class Auth {
  private $conn;
  private $isLoggedIn;

  public function __construct($host, $username, $password, $dbname) {
    $this->conn = new mysqli($host, $username, $password, $dbname);

    if ($this->conn->connect_error) {
      die("Connection failed: " . $this->conn->connect_error);
    }

    session_start();

    if (isset($_SESSION['isLoggedIn'])) {
      $this->isLoggedIn = $_SESSION['isLoggedIn'];
    } else {
      $this->isLoggedIn = false;
    }
  }

  public function login($email, $password) {
    $stmt = $this->conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
      $user = $result->fetch_assoc();
      if (password_verify($password, $user['password'])) {
        $this->isLoggedIn = true;
        $_SESSION['isLoggedIn'] = true;
        $_SESSION['userID'] = $user['userID'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['userType'] = $user['userType'];
        return true;
      } else {
        return false;
      }
    } else {
      return false;
    }
  }

  public function logout() {
    session_unset();
    session_destroy();
    $this->isLoggedIn = false;
  }

  public function isLoggedIn() {
    return $this->isLoggedIn;
  }
  
  public function close() {
    $this->conn->close();
  }

  public function isAdmin()
  {
    if (isset($_SESSION['userType']) && $_SESSION['userType'] == 'admin') {
      return true;
    } else {
      return false;
    }
  }
}


?>