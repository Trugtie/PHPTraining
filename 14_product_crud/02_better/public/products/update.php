<?php
/** @var $pdo \PDO */
require_once "../../database.php";
require_once "../../functions.php";
// echo '<pre>';
// var_dump($_GET);
// echo '</pre>';

// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';

$id = $_GET['id'] ?? null;

if (!$id) {
    header('Location: index.php');
    exit;
}

$statement = $pdo->prepare('select * from products where id= :id');
$statement->bindValue(':id', $id);
$statement->execute();
$product = $statement->fetch(PDO::FETCH_ASSOC);


echo '<pre>';
var_dump($_FILES);
echo '</pre>';

echo $_SERVER['REQUEST_METHOD'] . '<br>';

$errors = [];
$title = $product['title'];
$description = $product['description'];
$price = $product['price'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    require_once "../../validate_product.php";

    if (empty($errors)) {

        $statement = $pdo->prepare("update into products set title= :title,image= :image,description= :description,price= :price where id = :id");
        $statement->bindValue(':title', $title);
        $statement->bindValue(':image', $imagePath);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':id', $id);
        $statement->execute();
        header('Location: index.php');
    }
}
?>


<?php include_once "../../views/partials/header.php" ;?>

    <p>
        <a href="./index.php" class="btn btn-secondary">
            Go Back to Products
        </a>
    </p>

    <h1>Update Product <b><?php echo $product['title'];?></b></h1>
<?php include_once "../../views/product/form.php"; ?>

</body>

</html>