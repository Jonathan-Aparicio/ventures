<?php
// Dao.php
// class for getting products in MySQL
class Dao {
  private $host = "us-cdbr-iron-east-02.cleardb.net";
  private $db = "heroku_70d7290d39f4cdc";
  private $user = "bcb8814d4836ab";
  private $pass = "99aef4c2";
  public function getConnection () {
    return
      new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user,
          $this->pass);
  }
  public function addUser($username, $password){
     $conn = $this->getConnection();
     $saveQuery =
           "INSERT INTO user
           (Email, Password)
           VALUES
           (:name, :password)";
           $q = $conn->prepare($saveQuery);
            $q->bindParam(":name", $username);
            $q->bindParam(":password", $password);
            $q->execute();
  }
  public function checkExists($username){
    $conn = $this->getConnection();
    $query = "select * from user where Email = :email";
    $q = $conn->prepare($query);
    $q->bindParam(":email",$username);
    $q->execute();
    if($q->fetch()){
      return true;
    }else{
      return false;
    }
  }
  public function checkLog($username, $password){
    $conn = $this->getConnection();
    $query = "select * from user where Email = :email && Password = :pass";
    $q = $conn->prepare($query);
    $q->bindParam(":email",$username);
    $q->bindParam(":pass",$password);
    $q->execute();
    if($q->fetch()){
      return true;
    }else{
      return false;
    }
  }
  public function getUser($username)
	{
		$conn = $this->getConnection();
		$stmt = $conn->prepare("SELECT * FROM user WHERE Email = :uname");
		$stmt->bindParam(":uname", $username);
		$stmt->execute();
		return $stmt->fetch();
	}
  public function getPass($username)
  {
    $conn = $this->getConnection();
    $stmt = $conn->prepare("SELECT Password FROM user WHERE Email = :uname");
    $stmt->bindParam(":uname", $username);
    $stmt->execute();
    return $stmt->fetch();
  }

  public function getInfo($id){
    $conn = $this->getConnection();
    $stmt = $conn->prepare("SELECT * FROM Houses WHERE ID = :id");
    $stmt->bindParam(":id", $id);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    return $stmt->fetchALL();
  }

  public function getPics($id){
    $conn = $this->getConnection();
    $stmt = $conn->prepare("SELECT Images.image FROM Images JOIN Houses ON Images.ID = Houses.PhotoID WHERE Houses.ID = :id");
    $stmt->bindParam(":id", $id);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    return $stmt->fetchALL();
  }

  public function getAddress($id){
    $conn = $this->getConnection();
    $stmt = $conn->prepare("SELECT StreetAddress, City, State FROM Houses WHERE ID = :id");
    $stmt->bindParam(":id", $id);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    return $stmt->fetchALL();
  }

  // public function updateMain($id, $data){
  //     $blob = fopen($data, 'rb');
  //     echo"in dao";
  //     echo $blob;
  //      $conn = $this->getConnection();
  //      $saveQuery =
  //            "UPDATE Houses
  //            set MainPhoto = :data
  //            WHERE
  //            ID = :type";
  //            $q = $conn->prepare($saveQuery);
  //             $q->bindParam(":id", $id);
  //             $q->bindParam(":data", $blob, PDO::PARAM_LOB);
  //             $q->execute();
  //       fclose($blob);
  // }

  public function getMainHousePhotos($type){
    $conn = $this->getConnection();
    $stmt = $conn->prepare("SELECT * FROM Houses WHERE HouseTypeID = :type");
    $stmt->bindParam(":type", $type);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    return $stmt->fetchALL();
  }

  // public function getAllHouseInfo($id, $type){
  //   $conn = $this->getConnection();
  //   $stmt = $conn->prepare("SELECT * FROM Houses WHERE ID = :id && HouseType = :type");
  //   $stmt->bindParam(":id", $id);
  //   $stmt->bindParam(":type", $type);
  //   $stmt->setFetchMode(PDO::FETCH_ASSOC);
  //   $stmt->execute();
  //   return $stmt->fetchALL();
  // }
  // public function addApp($address, $city, $state, $first, $last, $email, $phone){
  //    $conn = $this->getConnection();
  //    $saveQuery =
  //          "INSERT INTO App
  //          (StreetAddress, City, State, FirstName, LastName, Email, Phone)
  //          VALUES
  //          (:address, :city, :state, :fname, :lname, :email, :phone)";
  //          $q = $conn->prepare($saveQuery);
  //           $q->bindParam(":address", $address);
  //           $q->bindParam(":city", $city);
  //           $q->bindParam(":state", $state);
  //           $q->bindParam(":fname", $first);
  //           $q->bindParam(":lname", $last);
  //           $q->bindParam(":email", $email);
  //           $q->bindParam(":phone", $phone);
  //           $q->execute();
  // }

} // end Dao
