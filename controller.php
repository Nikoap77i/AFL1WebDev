<?php
include("model.php");
session_start();

if(!isset($_SESSION['trainerList'])){
    $_SESSION['trainerList'] = array(); // inisialisasi array kosong untuk menyimpan data trainer
}

if(!isset($_SESSION['gymList'])){
    $_SESSION['gymList'] = array(); // inisialisasi array kosong untuk menyimpan data gym
}

if(!isset($_SESSION['gymAssignmentList'])){
    $_SESSION['gymAssignmentList'] = array(); // inisialisasi array kosong untuk menyimpan relasi trainer-gym
}

function addTrainer() {
    $trainer = new trainer();
    $trainer->name = $_POST["inputName"];
    $trainer->phone = $_POST["inputPhone"];
    $trainer->address = $_POST["inputAddress"];
    $trainer->email = $_POST["inputEmail"];
    $trainer->workingHours = $_POST["inputWorkingHours"];
    array_push($_SESSION['trainerList'], $trainer);
}

function getTrainerList() {
    return $_SESSION['trainerList'];
}

function editTrainer($trainer) {
    return $_SESSION['trainerList'][$trainer];// ngembaliin data trainer sesuai index yang dikirim
}

function updateMember($trainerID) {
    $trainer = $_SESSION['trainerList'][$trainerID]; // ngambil data trainer sesuai index yang dikirim
    $trainer->name = $_POST["inputName"];
    $trainer->phone = $_POST["inputPhone"];
    $trainer->address = $_POST["inputAddress"];
    $trainer->email = $_POST["inputEmail"];
    $trainer->workingHours = $_POST["inputWorkingHours"];
}
function deleteTrainer($index) {
    unset($_SESSION['trainerList'][$index]);
    $_SESSION['trainerList'] = array_values($_SESSION['trainerList']); // nyusun ulang array biar indexnya tetep urut
}

//Gym
function addGym() {
    $gym = new Gym();
    $gym->gymName = $_POST["inputGymName"];
    $gym->address = $_POST["inputGymAddress"];
    $gym->city = $_POST["inputGymCity"];
    $gym->phone = $_POST["inputGymPhone"];
    array_push($_SESSION['gymList'], $gym);
}

function getGymList() {
    return $_SESSION['gymList'];
}

function editGym($gym) {
    return $_SESSION['gymList'][$gym];// ngembaliin data gym sesuai index yang dikirim
}

function updateGym($gymID) {
    $gym = $_SESSION['gymList'][$gymID]; // ngambil data gym sesuai index yang dikirim
    $gym->gymName = $_POST["inputGymName"];
    $gym->address = $_POST["inputGymAddress"];
    $gym->city = $_POST["inputGymCity"];
    $gym->phone = $_POST["inputGymPhone"];
}

function deleteGym($index) {
    unset($_SESSION['gymList'][$index]);
    $_SESSION['gymList'] = array_values($_SESSION['gymList']); // nyusun ulang array biar indexnya tetep urut
}

//relasi gym trainer
function addGymAssignment() {
    $gymAssignment = new GymAssignment();
    $gymAssignment->trainerName = $_POST["selectTrainer"]; // nama trainer yang dipilih dari dropdown
    $gymAssignment->gymName = $_POST["selectGym"]; // nama gym yang dipilih dari dropdown
    array_push($_SESSION['gymAssignmentList'], $gymAssignment);
}

function getGymAssignmentList() {
    return $_SESSION['gymAssignmentList'];
}

function deleteGymAssignment($index) {
    unset($_SESSION['gymAssignmentList'][$index]);
    $_SESSION['gymAssignmentList'] = array_values($_SESSION['gymAssignmentList']); // nyusun ulang array biar indexnya tetep urut
}

function editGymAssignment($index) {
    return $_SESSION['gymAssignmentList'][$index];
}

function updateGymAssignment($index) {
    $gymAssignment = $_SESSION['gymAssignmentList'][$index];
    $gymAssignment->trainerName = $_POST["selectTrainer"];
    $gymAssignment->gymName = $_POST["selectGym"];
}

if(isset($_POST['register'])){
    addTrainer();
    header("Location: viewTrainer.php"); // kembali ke halaman awal tabel trainer
}

if(isset($_GET["delete"])){
    deleteTrainer($_GET["delete"]);
    header("Location: viewTrainer.php");
}

if(isset($_POST["edit"])){
    updateMember($_POST["trainerID"]);
    header("Location: viewTrainer.php");
}
<<<<<<< HEAD

//routing gym
if(isset($_POST['addGym'])){
    addGym();
    header("Location: viewGym.php");
}

if(isset($_POST["editGym"])){
    updateGym($_POST["gymID"]);
    header("Location: viewGym.php");
}

if(isset($_GET['deleteGym'])){
    deleteGym($_GET['deleteGym']);
    header("Location: viewGym.php");
}


//routing gym assignment
if(isset($_POST['saveAssign'])){
    addGymAssignment();
    header("Location: viewGymAssignment.php");
}

if(isset($_POST['updateAssign'])){
    updateGymAssignment($_POST['assignIndex']);
    header("Location: viewGymAssignment.php");
}

if(isset($_GET['deleteAssign'])){
    deleteGymAssignment($_GET['deleteAssign']);
    header("Location: viewGymAssignment.php");
}

?>
=======
>>>>>>> 4bd5fd7fb99f0155cd8a681ade72c785847a3708
