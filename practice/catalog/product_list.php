<?php
include 'sql/functions.php';

$category = select('ccc_category', 'cat_id', ['*']);
$categories = [];
while ($row = $category->fetch_array()) {
    $categories[$row['cat_id']] = $row['name'];
};

$products = select('ccc_products', 'product_id', ['*']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Product Records</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            margin: 0;
            padding: 10px;
            background-color: #333;
            color: white;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #333;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        a {
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
        }

        a:hover {
            color: #0056b3;
        }
    </style>
</head>

<body>
    <h1>Product Records</h1>
    <table>
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>SKU</th>
            <th>Category</th>
            <th>Delete</th>
            <th>Update</th>
        </thead>
        <tbody>
            <?php
            if ($products->num_rows > 0) {
                while ($row = $products->fetch_assoc()) {
                    echo "
                    <tr>
                
                    <td>{$row['product_id']}</td>
                        <td>{$row['ProductName']}</td>
                        <td>{$row['SKU']}</td>
                        <td>{$categories[$row['cat_id']]}</td>
                        <td><a href='product.php?action=delete&product_id={$row['product_id']}'>Delete</a></td>
                        <td><a href='product.php?action=update&product_id={$row['product_id']}'>Edit</a></td>
                    </tr>
                    ";

                }
            }
            ?>
        </tbody>
    </table>
</body>

</html>