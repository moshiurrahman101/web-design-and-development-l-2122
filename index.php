<?php 
$number;
/*for ($i=1; $i <= 10; $i++) { 
   print $i." x ".$number." = ".$number*$i."<br>";
}*/


if(isset($_POST['form_submit'])){
  $number = $_POST['number'];

    if ($number == "") {
        print "<div class='alert alert-danger'>Form fill up koro!</div>";
    }else {
        print "<div class='alert alert-success'>Submited Successfully!</div>";
    }
  
} 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <form action="" method="post" style="max-width: 500PX; margin:0 auto;" class="pt-5">
        
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <input type="number" name="number" class="form-control">
                </div>
            </div>
            <div class="col-6">
                <input type="submit" class="btn btn-primary" value="Calculate" name="form_submit">
            </div>
        </div>
    </form>

    <?php 
        if (isset($number)) {
    ?>
            <h1 class="text-center"><?php print $number;?> er namta</h1> 
    <?php
        for ($i=1; $i <= 10; $i++){
    ?>
        <h3 class="text-center"><?php print $i." x ".$number." = ".$number*$i."<br>";?></h3>
    <?php
            
        }

        }else{
    ?>
        <h1 class="text-center">Age number submit koro</h1>
    <?php
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>