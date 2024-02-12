<?php 
function mysqlConnect($database) {
  $user = 'root';
  $pass = null;
  $dsn = 'mysql:host=localhost;dbname='.$database;

  try {
    $db = new PDO($dsn, $user, $pass);
    return $db;
  } 
  catch (PDOException $e) {
    throw $e;
    die();
  }
}

function myConnect() {
  $connection = mysqlConnect("the");
  return $connection;
}

// Tea category: CRUD
function teaCategInsert($name, $output) {
  $db = myConnect();

  $query = "insert into teaCategory (name, output) values (:teaName, :teaOutput)";
  $stmt = $db->prepare($query);

  $stmt->bindParam(':teaName', $name, PDO::PARAM_STR);
  $stmt->bindParam(':teaOutput', $output, PDO::PARAM_STR);

  $stmt->execute();

  $db = null;
}
function teaCategUpdate($id, $newTea) {
  $db = myConnect();

  $query = "update teaCategory set name = :teaName, output = :teaOutput where id = :theId";
  $stmt = $db->prepare($query);

  $stmt->bindParam(':teaName', $newTea["name"], PDO::PARAM_STR);
  $stmt->bindParam(':teaOutput', $newTea["output"], PDO::PARAM_STR);
  $stmt->bindParam(':theId', $id, PDO::PARAM_INT);

  $stmt->execute();

  $db = null;
}

// Parcel: CRUD
function parcelInsert($size, $teaCateg) {
  $db = myConnect();

  $query = "insert into parcel (size, idTeaCategory, startDate) values (:theSize, :theTea, current_date)";
  $stmt = $db->prepare($query);

  $stmt->bindParam(':theSize', $size, PDO::PARAM_STR);
  $stmt->bindParam(':theTea', $teaCateg, PDO::PARAM_INT);

  $stmt->execute();

  $db = null;
}
function parcelUpdate($id, $newParcel) {
  $db = myConnect();

  $query = "update parcel set size = :theSize, idTeaCategory = :theTea, startDate = current_date where id = :theId";
  $stmt = $db->prepare($query);

  $stmt->bindParam(':theSize', $newParcel["size"], PDO::PARAM_STR);
  $stmt->bindParam(':theTea', $newParcel["idTeaCategory"], PDO::PARAM_STR);
  $stmt->bindParam(':theId', $id, PDO::PARAM_INT);

  $stmt->execute();

  $db = null;
}

// Picker: CRUD
function pickerInsert($name) {
  $db = myConnect();

  $query = "insert into picker (name) values (:theName)";
  $stmt = $db->prepare($query);

  $stmt->bindParam(':theName', $name, PDO::PARAM_STR);

  $stmt->execute();

  $db = null;
}
function pickerUpdate($id, $newPicker) {
  $db = myConnect();

  $query = "update picker set name = :theName where id = :theId";
  $stmt = $db->prepare($query);

  $stmt->bindParam(':theName', $newPicker["name"], PDO::PARAM_STR);
  $stmt->bindParam(':theId', $id, PDO::PARAM_INT);

  $stmt->execute();

  $db = null;
}

// Spent: CRUD
function spentInsert($categSpent, $amount) {
  $db = myConnect();

  $query = "insert into spent (idcategSpent, spent, theDate) values (:theCateg, :theSpent, current_date)";
  $stmt = $db->prepare($query);

  $stmt->bindParam(':theCateg', $categSpent, PDO::PARAM_INT);
  $stmt->bindParam(':theSpent', $amount, PDO::PARAM_STR);

  $stmt->execute();

  $db = null;
}
function spentUpdate($id, $newSpent) {
  $db = myConnect();

  $query = "update spent set idcategSpent = :theCateg, spent = :theAmount, theDate = current_date where id = :theId";
  $stmt = $db->prepare($query);

  $stmt->bindParam(':theCateg', $newSpent["idcategSpent"], PDO::PARAM_INT);
  $stmt->bindParam(':theAmount', $newSpent["spent"], PDO::PARAM_STR);
  $stmt->bindParam(':theId', $id, PDO::PARAM_INT);

  $stmt->execute();

  $db = null;
}

// Salary: CRUD
function salaryInsert($salary) {
  $db = myConnect();

  $query = "insert into salary (salary, salaryDate) values (:theSalary, current_date)";
  $stmt = $db->prepare($query);

  $stmt->bindParam(':theSalary', $salary, PDO::PARAM_STR);

  $stmt->execute();

  $db = null;
}
function salaryUpdate($newSalary) {
  $db = myConnect();

  $query = "update salary set salary = :theSalary, salaryDate = current_date";
  $stmt = $db->prepare($query);

  $stmt->bindParam(':theSalary', $newSalary, PDO::PARAM_STR);

  $stmt->execute();

  $db = null;
}

// Generalized delete
function delete($table, $id) {
  $db = myConnect();
  $query = "delete from ".$table." where id = :theId";
  $stmt = $db->prepare($query);

  $stmt->bindParam(':theId', $id, PDO::PARAM_INT);

  $stmt->execute();

  $db = null;
}

// Generalized getById
function getById($table, $id) {
  $db = myConnect();

  $query = "select * from ".$table." where id = ".$id;

  $stmt = $db->query($query);

  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
  return $results;
}

// Generalized getAll
function getAll($table) {
  $db = myConnect();

  $query = "select * from ".$table;

  $stmt = $db->query($query);

  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
  return $results;
}
?>