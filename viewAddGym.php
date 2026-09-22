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
            <a class="nav-link active" aria-current="true" href="viewAddGym.php">Add New Gym</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="viewGymAssignment.php">Gym Assignments</a>
        </li>
        </ul>
    </div>
    <div class="card-body">
    </table>
        <h1 class="card-title">Add New Gym</h1>
            <form method = "POST" action="controller.php" class="row g-3">
    <div class="col-md-12">
        <label for="inputGymName" class="form-label">Gym Name</label>
        <input type="text" class="form-control" name="inputGymName">
    </div>
    <div class="col-md-6">
        <label for="inputGymAddress" class="form-label">Address</label>
        <input type="text" class="form-control" name="inputGymAddress">
    </div>
    <div class="col-md-6">
        <label for="inputGymCity" class="form-label">City</label>
        <input type="text" class="form-control" name="inputGymCity">
    </div>
    <div class="col-md-12">
        <label for="inputGymPhone" class="form-label">Phone</label>
        <input type="text" class="form-control" name="inputGymPhone">
    </div>
    <div class="col-12">
        <button name="addGym" type="submit" class="btn btn-primary">Save Gym</button>
    </div>
    </form>
    </div>
</body>
</html>