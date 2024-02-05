<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>buyorder Confirmed</title>
    <?php include 'bootstrap.php';?>        
    <style>
        img{
            height: auto; width: 450px;
        }
    </style>
</head>
<body>
    <div class="row">
        <div class="col-sm-12">
            <?php include 'nav.php';?>     
        </div>
    </div>        

<div class="container-fluid">
<div class="row">
            <div class="col-sm-12">
            <?php

try{
    /* 1. Create connection*/
    $conn=new PDO("mysql:host=localhost;dbname=animeflix","root","");
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    /* 2. Create prepare statement*/
    $stmt=$conn->prepare("insert into buyorder(name,quantity,contactnumber,email,address,pay) values(:name,:quantity,:contactnumber,:email,:address,:pay)");

    /*3. Bind values to statement*/
   
    $stmt->bindValue(':name',$_GET['name']);
    $stmt->bindValue(':quantity',$_GET['quantity']);
    $stmt->bindValue(':contactnumber',$_GET['contactnumber']);
    $stmt->bindValue(':email',$_GET['email']);
    $stmt->bindValue(':address',$_GET['address']);
    $stmt->bindValue(':pay',$_GET['pay']);
    
    /*4. Execute statement*/
    $stmt->execute();
    

    echo "<img src='images/ok.jpg'><h1> Your buyorder Confirmed </h1>";
}
catch(Exception $ex)
{
    echo "<h1 >". $ex->getMessage()."</h1>";
}

?>
</div>
</div>
</div>
    
</body>
</html>


