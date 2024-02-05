<?php
$conn = null;
$catlist = null;
$mulist = null;
try
{
    $conn = new PDO("mysql:host=localhost;dbname=animeflix", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //Create statement
    $stmt1 = $conn->prepare("select * from category order by catname");
    $stmt2 = $conn->prepare("select * from measurmentunits order by muname");
    $stmt1->execute();
    $stmt2->execute();
    $catlist = $stmt1->fetchAll();
    $mulist = $stmt2->fetchAll();
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
    <title>Cancell your selling product</title>
    <?php include 'bootstrap.php';?>      

</head>
<body>
        <div class="row">
            <div class="col-sm-12">
            <?php include 'navbar.php';?>      
          </div>
        </div>
        <div class="row ">
            <div class="col-sm-12 text-center"><h1 class="text-info"><b> Permanently Delete Your Selling Products Here:</b><hr/></h1></div>
        </div>


        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <form action="cancelsell.php" method="get">
                    <label for="" class="form-label">
                        <h4>Product id</h4>
                    </label>
                    <input type="number" class="form-control" name="id" required/>
                    <input type="submit" class="btnd bg-danger " value="Get Form"/>
                </form>
            </div>
            <div class="col-sm-4"></div>
        </div><br/><br/>

        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <?php
                if(isset($_GET['id'])) 
                {
                    try {
                        $conn = new PDO("mysql:host=localhost;dbname=animeflix", "root", "");
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        $stmt = $conn->prepare("select * from items where id=:id");
                        $stmt->bindValue(':id', $_GET['id'], PDO::PARAM_INT);

                        $stmt->execute();
                        $rec = $stmt->fetch();
                        if (empty($rec)) {
                            echo "<h1>Invalid Id</h1>";
                        } else {
                ?>
                        <form action="cancelsell.php" method="GET" enctype="multipart/form-data" class=" col-sm-12">
                        <label>Id:</label></td><td>
                            <input type="number" class="form-control" name="id" value="<?= $rec['id'] ?>" required  />
                        <label>Item Name:</label>
                            <input type="text"  name="iname" class="form-control" value="<?= $rec['iname'] ?>" required/>
                        <label> Category:</label>
                        <select name="icat" class="form-control" value="<?= $rec['icat'] ?>" >
                            <?php
                            foreach($catlist as $cat)
                            {
                                echo '<option value="' . $cat['cid'] . '">' . $cat['catname'] . '</option>';
                            }
                            ?>
                        </select>

                        <label>Measurment Unit:</label>
                            <select name="munit" class="form-control" value="<?= $rec['munit'] ?>">
                                <?php
                                foreach($mulist as $mu)
                                {
                                    echo '<option value="' . $mu['muid'] . '">' . $mu['muname'] . '</option>';
                                }
                                ?>
                            </select>
                        <label>MRP:</label>
                        <input type="text" name="mrp" class="form-control" value="<?= $rec['mrp'] ?>" required/>
                        <label>Selling Price:</label>
                        <input type="text" name="sprice" class="form-control" value="<?= $rec['sprice'] ?>" required/>
                        <label>Purchase Price:</label>
                        <input type="text" name="pprice" class="form-control" value="<?= $rec['pprice'] ?>" required/>
                        <div>
                            <br/><tr><td><input type="reset" value=" stay " class="btns bg-success btn-outline-success"/></td><td>  <input class="btnd bg-danger btn-outline-danger"  type="Submit" value="Delete"/></td></tr>
                        </div>
                    </form>
                        <?php

                        }
                    } catch (Exception $ex) {

                    }
                }

            ?>         
            </div>
            <div class="col-sm-4"></div>
        </div>


        <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
        <?php
        if (isset($_GET['iname'])) {

            try {
                $conn = new PDO("mysql:host=localhost;dbname=animeflix", "root", "");
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $stmt = $conn->prepare("delete from items   where id=:id");
                $stmt->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
                
                $stmt->execute();
                echo '<h1 class="text-center text-success"> Record deleted successfully.</h1>';
            } catch (Exception $ex) {
                echo '<h1 class="text-center text-danger">' . $ex->getMessage() . "</h1>";

            }
        }
        ?>
        </div>
        <div class="col-sm-4"></div>

    </div>

    
</body>
</html>