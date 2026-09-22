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
            <a class="nav-link active" aria-current="true" href="viewTrainer.php">Gym Trainer Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="viewAddTrainer.php">Add New Gym Trainer</a>
        </li>
        </ul>
    </div>
    <div class="card-body">
        <h1 class="card-title">Gym Trainer Profile</h1>
        <table class="table table-hover align-middle border table-centered">
    <thead class="table-primary">
        <tr>
        <th scope="col">Number</th>
        <th scope="col">Trainer's Name</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Address</th>
        <th scope="col">Email</th>
        <th scope="col">Working Hours</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>

        <?php
            $counter = 0;
            $allTrainers = getTrainerList();
            foreach($allTrainers as $index => $trainer) { 
                $counter++;
        ?>
                <tr>
                    <th scope="row"><?=$counter; ?></th>
                    <td><?=$trainer->name; ?></td>
                    <td><?=$trainer->phone; ?></td>
                    <td><?=$trainer->address; ?></td>
                    <td><?=$trainer->email; ?></td>
                    <td><?=$trainer->workingHours; ?></td>
                    <td>
                        <a href="viewEditTrainer.php?edit=<?=$index?>">
                            <button type="button" class="btn btn-warning">Edit</button>
                        </a>
                        <a href="controller.php?delete=<?=$index?>">
                            <button type="button" class="btn btn-danger">Delete</button>
                        </a>
                        </td>
                    </td>
                </tr>
            <?php
            }
            ?>


        
    </tbody>
    </table>
    </div>
</body>
</html>