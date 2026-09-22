<?php 
require("controller.php");

$editIndex = null;
$currentAssignedTrainer = "";
$currentAssignedGym = "";

if (isset($_GET["edit"])) {
    $editIndex = $_GET["edit"];
    $gymAssignment = editGymAssignment($editIndex);
    $currentAssignedTrainer = $gymAssignment->trainerName;
    $currentAssignedGym = $gymAssignment->gymName;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Gym Trainer Management System</title>
</head>
<body>
    <div class="container p-5 my-5 shadow-sm rounded-4 bg-body-tertiary">
        <div class="card text-center shadow-sm rounded-4 bg-white">
    <div class="card-header">
        <ul class="nav nav-pills card-header-pills">
        <li class="nav-item">
            <a class="nav-link" href="viewTrainer.php">Gym Trainer Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="viewAddTrainer.php">Add New Gym Trainer</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="viewGym.php">Gym List</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="viewAddGym.php">Add New Gym</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="true" href="viewGymAssignment.php">Gym Assignments</a>
        </li>
        </ul>
    </div>
    <div class="card-body">
        <h1 class="card-title">Edit Gym Assignment</h1>

        <?php
            $allTrainers = getTrainerList();
            $allGyms = getGymList();
            $allGymAssignments = getGymAssignmentList();

            // Kumpulkan trainer yang sudah di-assign ke gym lain (kecuali yang sedang diedit ini)
            $assignedTrainers = array();
            foreach($allGymAssignments as $idx => $ga) {
                if($idx == $editIndex) {
                    continue;
                }
                $assignedTrainers[] = $ga->trainerName;
            }
        ?>

        <form method="POST" action="controller.php" class="row g-3 justify-content-center mt-3">
            <input type="hidden" name="assignIndex" value="<?=$editIndex?>">

            <div class="col-md-6">
                <label for="selectTrainer" class="form-label">Trainer</label>
                <select name="selectTrainer" class="form-select" required>
                    <?php foreach($allTrainers as $trainer) { 
                        if(in_array($trainer->name, $assignedTrainers)) {
                            continue;
                        }
                        $selected = ($currentAssignedTrainer == $trainer->name) ? "selected" : "";
                    ?>
                        <option value="<?=$trainer->name?>" <?=$selected?>><?=$trainer->name?></option>
                    <?php } ?>
                </select>
            </div>
            
            <div class="col-md-6">
                <label for="selectGym" class="form-label">Gym</label>
                <select name="selectGym" class="form-select" required>
                    <?php foreach($allGyms as $gym) { 
                        $selected = ($currentAssignedGym == $gym->gymName) ? "selected" : "";
                    ?>
                        <option value="<?=$gym->gymName?>" <?=$selected?>><?=$gym->gymName?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="col-12">
                <button name="updateAssign" type="submit" class="btn btn-primary">Update Assignment</button>
                <a href="viewGymAssignment.php" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
    </div>
    </div>
</body>
</html>