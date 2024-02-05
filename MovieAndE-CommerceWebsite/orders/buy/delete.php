<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
    <?php include 'bootstrap.php';?>      

</head>
<body>
        
<section>
    <?php
        if (isset($_GET['id'])) {

            try {
                $conn = new PDO("mysql:host=localhost;dbname=animeflix", "root", "");
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $stmt = $conn->prepare("delete from buyorder  where id=:id");
                $stmt->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
                
                $stmt->execute();
                echo '<h1 class="text-center text-success"> Record Delete Successfully...</h1>';
            } catch (Exception $ex) {
                echo '<h1 class="text-center text-danger">' . $ex->getMessage() . "</h1>";

            }
        }
        ?>
</section>
</body>
</html>