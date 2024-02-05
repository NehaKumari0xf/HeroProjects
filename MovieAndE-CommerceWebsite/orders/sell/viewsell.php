<?php
$conn = null;
$allItems = null;
try
{
    $conn = new PDO("mysql:host=localhost;dbname=animeflix", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //Create statement
    $stmt = $conn->prepare("select * from items order by icat,sprice");
    $stmt->execute();
    $allItems = $stmt->fetchAll();
   
}catch(Exception $ex)
{
    echo "<h1>" . $ex->getMessage() . '</h1>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View your selling product</title>
    <?php include 'bootstrap.php';?>
    <style>
        .card {
            height: 360px;
            width: 230px;
            background-color:beige;
            border-radius:25px;
            border-color:whitesmoke;

        }
        .card img{
            height: 230px;
            width: 230px;
            border-top-left-radius: 25px;
            border-top-right-radius: 25px;
            border-bottom-left-radius:0;
            border-bottom-right-radius:0;
        }
    </style>
</head>
<body>
    <div class="row">
    <div class="col-sm-12">
            <?php include 'navbar.php';?>
            </div>
    </div>
    <?php
    $i = 0;
        foreach($allItems as $item)
        {
            if($i%4==0)
            {
            echo '<div class="row">';
            }
        echo <<<msg
            <div class="col-sm-3 py-4 pl-5 ">
            <div class="card ">
            <img src="./sellimages/{$item['id']}.jpg" class="img-fluid card-img-top  " alt="{$item['iname']}"/>
            <div class="card-body text-center pb-2">
            <h5 class="card-title ">{$item['iname']}</h5>
            <p class="card-text"><b>MRP:<del>{$item['mrp']}</del> Rs.{$item['sprice']}</b></p>
            <a href="#" class="tab btn-primary">Add to card</a>
            <a href="#" class="tab btn-success">Buy Now</a>
            </div>
            </div>
            </div>
            msg;
        
    if ($i != 0 && $i % 3 == 0)
        echo '</div>';
    $i++;
        }
        $i--;
    if ($i != 0 && $i % 3 != 0)
        echo "</div>";
    ?>
   </div>
</body>