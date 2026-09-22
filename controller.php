<?php
include("model.php");
session_start();

if(!isset($_SESSION['trainerList'])){
    $_SESSION['trainerList'] = array(); // inisialisasi array kosong untuk menyimpan data trainer
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

?>