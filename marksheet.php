<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h1 style="text-align:center">Marksheet</h1>
        <div class="row">
            <div class="col-lg-6">
            <form action="" method="POST">
        <table class="table" style="background-color:black; color:white">
            <tr>
                <td>Student ID</td>
                <td><input type="text" name="stdid" class="form-control"></td>
            </tr>
            <tr>
                <td>Student Name</td>
                <td><input type="text" name="stdname" class="form-control"></td>
            </tr>
            
        </table>
    
            </div>
            <div class="col-lg-6">
           
        <table class="table" style="background-color:black; color:white">
            <tr>
                <td>English </td>
                <td><input type="text" name="stdid" class="form-control"></td>
            </tr>
            <tr>
                <td>Math </td>
                <td><input type="text" name="stdid" class="form-control"></td>
            </tr>
            <tr>
                <td>Computer </td>
                <td><input type="text" name="stdid" class="form-control"></td>
            </tr>
            <tr>
                <td>Phy </td>
                <td><input type="text" name="stdid" class="form-control"></td>
            </tr>
            <tr>
                <td>Chemistry </td>
                <td><input type="text" name="stdid" class="form-control"></td>
            </tr>
           
            <tr>
                <td></td>
                <td><input type="submit" name="btn" class="btn btn-danger"></td>
            </tr>
        </table>
    </form>
            </div>




        </div>
   
    <?php 
        if(isset($_POST["btn"]))
        {
            $table = $_POST["txt1"];
            $range = $_POST["txt2"];

            for ($i=1; $i <= $range ; $i++) { 
                echo $table . " x "  .  $i . " = "  . $table * $i  ."<br>";
            }
            
        }
    ?>


    
</div>
</body>
</html>