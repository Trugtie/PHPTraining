<?php
$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];
$imagePath='';

if (!$title) {
    $errors[] = 'Product title is required';
}

if (!$price) {
    $errors[] = 'Product price is required';
}

if (!is_dir(__DIR__.'/public/products/images')) {
    mkdir(__DIR__.'/public/products/images');
}

if (empty($errors)) {
    $image = $_FILES['image'] ?? null;
    $imagePath = $product['image'];


    if ($image && $image['tmp_name']) {

        if ($product['image']) {
            unlink(__DIR__.'/public/products'.$product['image']);
        }
        $imagePath = './images/' . randomString(8) . '/' . $image['name'];
        mkdir(dirname(__DIR__.'/public/products'.$imagePath));
        move_uploaded_file($image['tmp_name'], __DIR__.'/public/products'.$imagePath);
    }
}
