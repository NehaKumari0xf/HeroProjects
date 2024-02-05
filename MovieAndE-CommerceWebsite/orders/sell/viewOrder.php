<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>View oder details</title>
    <?php include 'bootstrap.php';?>     

</head>
<body>
    <div class="row">
        <div class="col-sm-12">
            <?php include 'nav.php';?>     
        </div>
    </div>

<div class="container-fluid">
        </div>
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1 class="text-info"><b> All Customer Details Here:</b><hr/></h1></div>
    <?php
    /* create connection*/
    $conn=new PDO("mysql:host=localhost;dbname=animeflix;","root","");

    /*preapre statement*/
    $stmt=$conn->prepare("select * from buyorder");
    
    //Execute statement
    $stmt->execute();

    //Fetch record
    $buyorders=$stmt->fetchAll();
  ?>
  <section class="container-fluid">
  <table class="table table-striped"  >
  <thead class="bg-light">
    <th>Sr. No.</th>
    <th>Customer Id</th>
    <th>Contact Number</th>
    <th>Quantity</th>
    <th>Phone Number</th>
    <th>E-mail</th>
    <th>Address</th>
    <th>Payment Method</th>
    <th>Operations</th>
    </thead>
    <tbody>
    <?php
    $c = 1;
    foreach($buyorders as $buyorder )
    {
        /* echo "<tr><td>".$buyorder['id'].'</td><td>'.$buyorder['name']."</td><td>".'</td><td>'.$buyorder['quantity']."</td><td>".$buyorder['contactnumber'].'</td><td>'.$buyorder['email']."</td><td>".$buyorder['address']."</td><td>".$buyorder['pay']."</td><td>"."</td></tr>"; */
    ?>
    <tr>
        <td><?=$c?></td>
        <td><?=$buyorder['id']?></td>
        <td><?=$buyorder['name']?></td>
        <td><?=$buyorder['quantity']?></td>
        <td><?=$buyorder['contactnumber']?></td>
        <td><?=$buyorder['email']?></td>
        <td><?=$buyorder['address']?></td>
        <td><?=$buyorder['pay']?></td>

        <td><a href="update.php?id=<?=$buyorder['id']?>"><button class="btns bg-success btn-success">Update</button></a> 
        <a href="delete.php?id=<?=$buyorder['id']?>"><button class="btnd bg-danger btn-danger">Delete</button></a></td>
    </tr>
    <?php
    $c++;
    }
    ?>
    </tbody>
</table>
</section>
            </div>
        </div>
    </div>
    

</body>
</html>