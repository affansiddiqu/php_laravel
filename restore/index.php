<?php

include('connection.php');
include('header.php');

?>
 <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<style>
    .container{
        background-color: teal;
        color:white;        
        border: 5px groove black;         
    }
    .form-control{
        background-color: pink;
        border : 5px solid black;
    }
</style>
<body>

<div class="container">

<h1>Form validation</h1>
<hr>

<form action="index.php" class="form-group" method ="post">
    <!-- get request server post -->

<label for="Name">Id</label>
<input type="number" name="id" class="form-control">
<br>
<label for="Name">Name</label>
<input type="text" name="name" class="form-control">
<br>
<label for="Name">Age</label>
<input type="number" name="age" class="form-control">
<br>
<label for="Name">gender</label>
<input type="text" name="gender" class="form-control">
<br>
<input type="submit" name="submit" class="btn btn-dark">

</form>

<?php 
 
 if (isset($_POST['submit'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    
    $query = "INSERT INTO `mystd` (`Id`, `Name`, `Age`, `Gender`) VALUES ('$id' , '$name' , '$age' , '$gender')";

    $result = mysqli_query($connect,$query);

    // header('location:http://localhost:82/php/affan/alluser.php');
    }

    mysqli_close($connect);
    


    ?>
    </div>
</body>
</html>