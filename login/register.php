<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$conn = mysqli_connect('localhost','root','root','youtube');


if (isset($_POST['save'])) {
    $email = $_POST['Email'];
    $password = $_POST['Password'];

    $insert_que = "INSERT INTO register_form (email,password) VALUES ('$email','$password')";
    if(mysqli_query($conn,$insert_que))
    {
        header('location:index.php');
    }
    if ($email == '' && $password == '')
    {
        echo "<script> alert('Plz, Enter Your Information')</script>";
    }
}
if (isset($_POST['exit']))
{
    header('location:index.php');
}
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            border: 1px solid black;
            border-radius: 20px;
        }

        table {
            margin-left: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
<form method="POST" enctype="multipart/form-data">
    <div class="container bg-white border border-white-1">
        <hr>
        <div class="row card-header bg-dark text-white">
            <div class="col-12 text-center mt-4">
                <h3>!! 🆁🅴🅶🅸🆂🆃🅴🆁-🅵🅾🆁🅼 !!</h3>
            </div>
        </div>
        <hr>
        <div class="row-12">
            <div class="col-12">
                <div class="row mt-3">
                    <div class="col-2">
                        <h5 class="p-2">*Email:</h5>
                    </div>
                    <div class="col-auto">
                        <input type="email" name="Email" id="" class="p-2 rounded-3" require>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-2">
                        <h5 class="p-2">*Password:</h5>
                    </div>
                    <div class="col-auto">
                        <input type="password" name="Password" class="p-2 rounded-3" require >
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row row-cols-2 card-footer bg-dark text-white">
            <div class="col-auto">
                <div class="col-2">
                    <input type="submit" value="submit" class="btn btn-primary m-3" name="save">
                </div>
            </div>
            <div class="col-auto">
                <div class="col-2">
                    <input type="submit" value="Exit" class="btn btn-warning m-3" name="exit">
                </div>
            </div>
        </div>
    </div>
</form>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>

</html>