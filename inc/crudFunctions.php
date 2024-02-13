<?php 
include "pdo.php";

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

  $query = "update parcel set size = :theSize, idTeaCategory = :theTea, startDate = :startDate where id = :theId";
  $stmt = $db->prepare($query);

  $stmt->bindParam(':theSize', $newParcel["size"], PDO::PARAM_STR);
  $stmt->bindParam(':theTea', $newParcel["idTeaCategory"], PDO::PARAM_STR);
  $stmt->bindParam(':startDate', $newParcel["startDate"] , PDO::PARAM_STR);
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
function spentInsert($newSpent) {
  $db = myConnect();

  $query = "insert into spent (idcategSpent, spent, theDate) values (:theCateg, :theSpent, :theDate)";
  $stmt = $db->prepare($query);

  $stmt->bindParam(':theCateg', $newSpent["idcategSpent"], PDO::PARAM_INT);
  $stmt->bindParam(':theSpent', $newSpent["spent"], PDO::PARAM_STR);
  $stmt->bindParam(':theDate', $newSpent["theDate"], PDO::PARAM_STR);
  
  $stmt->execute();

  $db = null;
}
function spentUpdate($id, $newSpent) {
  $db = myConnect();

  $query = "update spent set idcategSpent = :theCateg, spent = :theAmount, theDate = :theDate where id = :theId";
  $stmt = $db->prepare($query);

  $stmt->bindParam(':theCateg', $newSpent["idcategSpent"], PDO::PARAM_INT);
  $stmt->bindParam(':theAmount', $newSpent["spent"], PDO::PARAM_STR);
  $stmt->bindParam(':theDate', $newSpent["theDate"], PDO::PARAM_STR);
  $stmt->bindParam(':theId', $id, PDO::PARAM_INT);

  $stmt->execute();

  $db = null;
}
function categSpentInsert($name) {
  $db = myConnect();

  $query = "insert into categSpent (name) values (:theName)";
  $stmt = $db->prepare($query);

  $stmt->bindParam(':theName', $name, PDO::PARAM_STR);

  $stmt->execute();

  $db = null;
}
function categSpentUpdate($id, $newSpent) {
  $db = myConnect();

  $query = "update categSpent set name = :theName where id = :theId";
  $stmt = $db->prepare($query);

  $stmt->bindParam(':theName', $newSpent["name"], PDO::PARAM_STR);
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
function getAllTeaCateg() {
  return getAll("teaCategory");
}
function getAllParcel() {
  return getAll("parcel");
}
function getAllPicker() {
  return getAll("picker");
}
function getAllCategSpent() {
  return getAll("categSpent");
}
function getAllSalary() {
  return getAll("salary");
}

// Insert picking
function pickingInsert($parcel,$picker, $qty,$theDate) {
  $db = myConnect();

  $query = "insert into picking (idParcel,idPicker, qty, theDate) values (:theParcel,:thePicker, :theQty, :theDate)";
  $stmt = $db->prepare($query);

  $stmt->bindParam(':theParcel', $parcel, PDO::PARAM_INT);
  $stmt->bindParam(':thePicker', $picker, PDO::PARAM_INT);
  $stmt->bindParam(':theQty', $qty, PDO::PARAM_INT);
  $stmt->bindParam(':theDate', $theDate, PDO::PARAM_STR);

  $stmt->execute();

  $db = null;
}

// Getting stock
function getStock($month1, $year1, $month2, $year2) {
  $db = myConnect();

  $query = "select * from onStock where month >= :month1 and month <= month2 and year >= :year1 and year <= :year2";

  $stmt = $db->prepare($query);

  $stmt->bindParam(':month1', $month1, PDO::PARAM_INT);
  $stmt->bindParam(':month2', $month2, PDO::PARAM_INT);
  $stmt->bindParam(':year1', $year1, PDO::PARAM_INT);
  $stmt->bindParam(':year2', $year2, PDO::PARAM_INT);

  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
  return $results;
}

// Total weight of picking
function getTotalPicking($month1, $year1, $month2, $year2) {
  $stock = getStock($month1, $year1, $month2, $year2);

  $result = 0;
  for ($i=0; $i < count($stock); $i++) { 
    $result += $stock[$i]["quantity"];
  }

  return $result;
}

// Available weight on parcel
function getWeightPerParcel($month1, $year1, $month2, $year2) {
  $db = myConnect();

  $query = "select parcel, available from onStock where month >= :month1 and month <= month2 and year >= :year1 and year <= :year2";

  $stmt = $db->prepare($query);

  $stmt->bindParam(':month1', $month1, PDO::PARAM_INT);
  $stmt->bindParam(':month2', $month2, PDO::PARAM_INT);
  $stmt->bindParam(':year1', $year1, PDO::PARAM_INT);
  $stmt->bindParam(':year2', $year2, PDO::PARAM_INT);

  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
  return $results;
}

?>