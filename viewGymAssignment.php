<?php
    require 'controller.php';
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
        <h1 class="card-title">Gym Assignments</h1>
        <table class="table table-hover align-middle border table-centered">
    <thead class="table-primary">
        <tr>
        <th scope="col">Trainer</th>
        <th scope="col">Gym</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>

        <?php
            $allGymAssignments = getGymAssignmentList();
            foreach($allGymAssignments as $index => $gymAssignment) {
        ?>
                <tr>
                    <td><?=$gymAssignment->trainerName; ?></td>
                    <td><?=$gymAssignment->gymName; ?></td>
                    <td>
                        <a href="viewEditGymAssignment.php?edit=<?=$index?>">
                            <button type="button" class="btn btn-warning">Edit</button>
                        </a>
                        <a href="controller.php?deleteAssign=<?=$index?>">
                            <button type="button" class="btn btn-danger">Delete</button>
                        </a>
                    </td>
                </tr>
            <?php
            }
            ?>

    </tbody>
    </table>

        <hr>

        <?php
            $allTrainers = getTrainerList();
            $allGyms = getGymList();
            $allGymAssignments = getGymAssignmentList();

            // Kumpulkan nama trainer yang sudah di-assign
            $assignedTrainers = array();
            foreach($allGymAssignments as $ga) {
                $assignedTrainers[] = $ga->trainerName;
            }
        ?>

        <?php if(count($allTrainers) == 0 || count($allGyms) == 0){ ?>
            <p class="text-muted">
                Please add at least one Gym Trainer and one Gym before creating an assignment.
            </p>
        <?php } else { ?>
            <form method="POST" action="controller.php" class="row g-3 justify-content-center">
                <div class="col-md-6">
                    <label for="selectTrainer" class="form-label">Trainer</label>
                    <select name="selectTrainer" class="form-select" required>
                        <option value="" disabled selected>Choose Trainer...</option>
                        <?php foreach($allTrainers as $trainer) { 
                            if(in_array($trainer->name, $assignedTrainers)) {
                                continue;
                            }
                        ?>
                            <option value="<?=$trainer->name?>"><?=$trainer->name?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="selectGym" class="form-label">Gym</label>
                    <select name="selectGym" class="form-select" required>
                        <option value="" disabled selected>Choose Gym...</option>
                        <?php foreach($allGyms as $gym) { ?>
                            <option value="<?=$gym->gymName?>"><?=$gym->gymName?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-12">
                    <button name="saveAssign" type="submit" class="btn btn-primary">SAVE</button>
                </div>
            </form>
        <?php } ?>
    </div>
</body>
</html>