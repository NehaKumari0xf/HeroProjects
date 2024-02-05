<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Place your Order </title>
    <?php include 'bootstrap.php';?>     
</head>
<style>
    
img{
    max-width: 100%;
    width: 400px;
   height: auto;
}
</style>
<body >
<section>
<div class="row">
    <div class="col-sm-12">
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
        <a href="update.php" >Update</a>
        </li>
        <li class="nav-item">
        <a href="cancelo.php" >Cancel</a>
        </li>
        <li class="nav-item">
        <a href="viewOrder.php" >View Your Order</a>
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
</nav>
</div>
</div>
</section>

<section>   
<form action="phporder.php" method="get">
    <div class="container-fluid ">
        <div class="row ">
        <div class="col-sm-3">
        </div>
            <div class="col-sm-6 text-left">
                <h1 >Order your favourites</h1>
                <div class="py-5">
                <form action="home.php" method="get">
                <label>Name: </label>     
                    <input type="text" id="name" required name="name" placeholder="Enter your name"/><br/>
                <label>Quantity: </label>     
                    <input type="text" id="quantity"required  name="quantity" placeholder="Enter your quantity"/><br/>
                <label>Phone number: </label>
                    <input type="text" id="contactnumber" required name="contactnumber"placeholder="Enter your phone number"/><br/>               
                <label>Email: </label>
                    <input type="email" id="email" class="form-control" name="email" required placeholder="Enter your email"/><br/>
                <label>Address: </label>   
                    <input type="text" id="address" required name="address" placeholder="Enter your address"/><br/>
                    <div><tr><td>
                <label>Payment Method: </label>
                    <select id="pay" name="pay" class="form-control" >
                            <option value="Cash on deleviry">Cash on deleviry</option>
                            <option value="wallet">Wallet</option>
                            <option value="UPI">UPI</option>
                            <option value="Coupons">Coupons</option>
                        </select>
                <div>
                    <br/><tr><td><input type="reset" value=" Cancel " class="btnd bg-danger btn-outline-danger"/></td>     <td><input class="btns bg-success btn-outline-success"  type="Submit" value="Confirmed"/></td></tr>
                </div>
                </form>

                </div>
            </div>
        </div>
        <div class="col-sm-3">
        </div>
        
    </div>
</form>
</section>
</body>
</html>

