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
    <title>Sell your products</title>
    <?php include 'bootstrap.php';?>
</head>
<body>
<div class="row">
            <div class="col-sm-12">
            <div>
<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
    <h1 class="text-danger"><i class="bi bi-meta"></i><svg xmlns="http://www.w3.org/2000/svg" fill="white" class="bi bi-meta" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8.217 5.243C9.145 3.988 10.171 3 11.483 3 13.96 3 16 6.153 16.001 9.907c0 2.29-.986 3.725-2.757 3.725-1.543 0-2.395-.866-3.924-3.424l-.667-1.123-.118-.197a54.944 54.944 0 0 0-.53-.877l-1.178 2.08c-1.673 2.925-2.615 3.541-3.923 3.541C1.086 13.632 0 12.217 0 9.973 0 6.388 1.995 3 4.598 3c.319 0 .625.039.924.122.31.086.611.22.913.407.577.359 1.154.915 1.782 1.714Zm1.516 2.224c-.252-.41-.494-.787-.727-1.133L9 6.326c.845-1.305 1.543-1.954 2.372-1.954 1.723 0 3.102 2.537 3.102 5.653 0 1.188-.39 1.877-1.195 1.877-.773 0-1.142-.51-2.61-2.87l-.937-1.565ZM4.846 4.756c.725.1 1.385.634 2.34 2.001A212.13 212.13 0 0 0 5.551 9.3c-1.357 2.126-1.826 2.603-2.581 2.603-.777 0-1.24-.682-1.24-1.9 0-2.602 1.298-5.264 2.846-5.264.091 0 .181.006.27.018Z"/></svg> Animeflix</h1>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
        
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto ">
        <li class="nav-item">
        <a href="shop1.php" class="active"> Shopping</a>
        </li>
        <li class="nav-item">
        <a href="sellOrder.php" >Sell Your Product </a>
        </li>
        <li class="nav-item">
        <a href="updatesell.php" >Update</a>
        </li>
        <li class="nav-item">
        <a href="cancelsell.php" >Cancel</a>
        </li>
        <li class="nav-item">
        <a href="viewsell.php" >View Your Sell</a>
        </li>
        <li class="nav-item">
            <a href="#"><i class="fa fa-fw fa-film"></i>Movies</a>
        </li>
    <!---for side pannel--->
    <div id="mySidepanel" class="sidepanel">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">Search</a>
        <a href="#">Profile</a>
        <a href="#">About</a>
        <a href="#">Contact Us</a>
        <a href="#">Help and Feedback</a>
        <a href="index.php">Exit</a>
        <a href="#">Others</a>

    </div>
        <button class="openbtn" onclick="openNav()">&#9776; </button>
    </ul>
    </div>
</nav>
</div>
</div>

<div class="row">
            <div class="col-sm-12">
            <?php
            if(isset($_POST['iname']))
            {
                //validate/senetize form data

                //code for save data
                try {
                    $insertStatement = $conn->prepare("insert into items(iname,icat,munit,mrp,pprice,sprice) values(:iname,:icat,:munit,:mrp,:pprice,:sprice)");
                    $insertStatement->bindValue(":iname", $_POST['iname']);
                    $insertStatement->bindValue(":icat", $_POST['icat'], PDO::PARAM_INT);
                    $insertStatement->bindValue(":munit", $_POST['munit'], PDO::PARAM_INT);
                    $insertStatement->bindValue(":mrp", $_POST['mrp'], PDO::PARAM_INT);
                    $insertStatement->bindValue(":pprice", $_POST['pprice'], PDO::PARAM_INT);
                    $insertStatement->bindValue(":sprice", $_POST['sprice'], PDO::PARAM_INT);
                    $insertStatement->execute();
                    //get the id of inserted item
                    $lInsId=$conn->lastInsertId();
                    //save uploaded image with last inserted id
                    move_uploaded_file( $_FILES['img']['tmp_name'],"./sellimages/" . $lInsId . ".jpg");
                    echo <<<msg
                    <div class="panel panel-Success">
                    <div class="panel-heading">Success</div>
                    <div class="panel-body">Item inserted successfully with ID:$lInsId</div>
                  </div>
                  msg;

                }catch(Exception $ex)
                {
                    echo <<<msg
                        <div class="panel panel-danger">
                        <div class="panel-heading">Error!</div>
                        <div class="panel-body">{$ex->getmessage()}</div>
                        </div>
                        msg;
                }

            }
            ?>
            </div>    
        </div>

        <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4 py-5 my-5 text-center">
                <h2 style="color:darkred" ><b>SELL YOUR <br/>PRODUCTS ONLINE</h2></b><h5 class="pl-1">Through Flipping Domains, Selling Supplements & Shopify Marketing.</h5>
                <h6 >Just Fill Up Your Products Details.<br/> In The Given form On Your Right Side.</h6></div>
            <div class="col-sm-7 mt-5">
                <form action="sellOrder.php" method="POST" enctype="multipart/form-data">
                    <label>Item Name:</label>
                        <input type="text" name="iname" class="form-control" required/>
                    <label> Category:</label>
                        <select name="icat" class="form-control" >
                            <?php
                            foreach($catlist as $cat)
                            {
                                echo '<option value="' . $cat['cid'] . '">' . $cat['catname'] . '</option>';
                            }
                            ?>
                        </select>

                        <label>Measurment Unit:</label>
                            <select name="munit" class="form-control">
                                <?php
                                foreach($mulist as $mu)
                                {
                                    echo '<option value="' . $mu['muid'] . '">' . $mu['muname'] . '</option>';
                                }
                                ?>
                            </select>
                        <label>MRP:</label>
                        <input type="text" name="mrp" class="form-control" required/>
                        <label>Selling Price:</label>
                        <input type="text" name="sprice" class="form-control" required/>
                        <label>Purchase Price:</label>
                        <input type="text" name="pprice" class="form-control" required/>
                        <label>Image:</label>
                        <input type="file" accept=".jpg,.png" name="img" class="form-control" required/>
                        <div>
                            <br/><tr><td><input type="reset" value=" Cancel " class="btnd bg-danger btn-outline-danger"/></td>     <td><input class="btns bg-success btn-outline-success"  type="Submit" value="Confirmed"/></td></tr>
                        </div>
                    </form>
            </div>
            <div class="col-sm-3"></div>
        </div>

    </div>
</body>
</html>