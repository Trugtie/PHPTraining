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

echo '<pre>';
var_dump($_FILES);
echo '</pre>';

echo $_SERVER['REQUEST_METHOD'] . '<br>';

$errors = [];
$title = '';
$description = '';
$price = '';
$product = [
    'image' => ''
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    require_once "../../validate_product.php";

    if (empty($errors)) {

        $statement = $pdo->prepare("insert into products(title,image,description,price,create_date)
values(:title,:image,:description,:price,:create_date)");
        $statement->bindValue(':title', $title);
        $statement->bindValue(':image', $imagePath);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':create_date', date('Y-m-d H:i:s'));
        $statement->execute();
        header('Location: index.php');
    }
}

?>


<?php include_once "../../views/partials/header.php"; ?>

<p>
    <a href="./index.php" class="btn btn-secondary">
        Go Back to Products
    </a>
</p>
<h1>Create new Product</h1>

<?php include_once "../../views/product/form.php"; ?>
</body>

</html>