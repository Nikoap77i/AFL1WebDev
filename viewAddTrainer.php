<<<<<<< HEAD
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
            <a class="nav-link active" aria-current="true" href="viewAddTrainer.php">Add New Gym Trainer</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="viewGym.php">Gym List</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="viewAddGym.php">Add New Gym</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="viewGymAssignment.php">Gym Assignments</a>
        </li>
        </ul>
    </div>
    <div class="card-body">
        <h1 class="card-title">Add New Gym Trainer</h1>
            <form method = "POST" action="controller.php" class="row g-3">
    <div class="col-md-12">
        <label for="inputName" class="form-label">Full Name</label>
        <input type="text" class="form-control" name="inputName">
    </div>
    <div class="col-md-6">
        <label for="inputPhone" class="form-label">Phone Number</label>
        <input type="text" class="form-control" name="inputPhone">
    </div>
    <div class="col-6">
        <label for="inputEmail" class="form-label">Email</label>
        <input type="email" class="form-control" name="inputEmail" placeholder="Trainer123@gmail.com">
    </div>
    <div class="col-8">
        <label for="inputAddress" class="form-label">Address</label>
        <input type="text" class="form-control" name="inputAddress">
    </div>
    
    
    <div class="col-md-4">
        <label for="inputWorkingHours" class="form-label">Working Hours</label>
        <select name="inputWorkingHours" class="form-select">
        <option selected>Choose...</option>
        <option>6:00 AM - 12:00 PM</option>
        <option>12:00 PM - 6:00 PM</option>
        <option>6:00 PM - 12:00 AM</option>
        <option>12:00 AM - 6:00 AM</option>

        </select>
    </div>
    <div class="col-12">
        <button name="register" type="submit" class="btn btn-primary">Register</button>
    </div>
    </form>
    </div>
</body>
=======
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
            <a class="nav-link active" aria-current="true" href="viewAddTrainer.php">Add New Gym Trainer</a>
        </li>
        </ul>
    </div>
    <div class="card-body">
        <h1 class="card-title">Add New Gym Trainer</h1>
            <form method = "POST" action="controller.php" class="row g-3">
    <div class="col-md-12">
        <label for="inputName" class="form-label">Full Name</label>
        <input type="text" class="form-control" name="inputName">
    </div>
    <div class="col-md-6">
        <label for="inputPhone" class="form-label">Phone Number</label>
        <input type="text" class="form-control" name="inputPhone">
    </div>
    <div class="col-6">
        <label for="inputEmail" class="form-label">Email</label>
        <input type="email" class="form-control" name="inputEmail" placeholder="Trainer123@gmail.com">
    </div>
    <div class="col-8">
        <label for="inputAddress" class="form-label">Address</label>
        <input type="text" class="form-control" name="inputAddress">
    </div>
    
    
    <div class="col-md-4">
        <label for="inputWorkingHours" class="form-label">Working Hours</label>
        <select name="inputWorkingHours" class="form-select">
        <option selected>Choose...</option>
        <option>6:00 AM - 12:00 PM</option>
        <option>12:00 PM - 6:00 PM</option>
        <option>6:00 PM - 12:00 AM</option>
        <option>12:00 AM - 6:00 AM</option>

        </select>
    </div>
    <div class="col-12">
        <button name="register" type="submit" class="btn btn-primary">Register</button>
    </div>
    </form>
    </div>
</body>
>>>>>>> 4bd5fd7fb99f0155cd8a681ade72c785847a3708
</html>