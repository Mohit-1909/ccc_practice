<?php
require('sql/functions.php');

$product_name = "";
$product_sku = "";
$product_type = "";
$product_category = "";
$manufacturer_cost = "";
$shipping_cost = "";
$total_cost = "";
$product_price = "";
$product_status = "";
$product_created_at = "";
$product_updated_at = "";
$button_text = 'submit';

//Delete
if(getPara('action') == 'delete' && getPara('product_id')){
    $status = delete('ccc_products', ['product_id' => getPara('product_id')]);
    if($status){
        echo "<script>alert('Data deleted')</script>";
        echo "<script>location. href='product_list.php'</script>";
    }else{
        echo "<script>alert('Data not deleted')</script>";
        echo "<script>location. href='product_list.php'</script>";        
    };
};

if (getPara('action') == 'update' && getPara('product_id')) {
    $single_product = whereBasedSelect('ccc_products', ['product_id' => getPara('product_id')]);
    if ($single_product) {
        $single_product = $single_product->fetch_assoc();
        $product_name = $single_product['ProductName'];
        $product_sku = $single_product['SKU'];
        $product_type = $single_product['ProductType'];
        $product_category = $single_product['cat_id'];
        $manufacturer_cost = $single_product['ManufacturerCost'];
        $shipping_cost = $single_product['ShippingCost'];
        $total_cost = $single_product['TotalCost'];
        $product_price = $single_product['Price'];
        $product_status = $single_product['Status'];
        $product_created_at = $single_product['CreatedAt'];
        $product_updated_at = $single_product['UpdatedAt'];
        $button_text = 'update';
        echo $product_type;
    } else {
        echo "<script>alert('Data not found')</script>";
    };
}

function getKeysFromPostRequest()
{
    $keys = [];
    foreach ($_POST as $key => $val) {
        if (is_array($val)) {
            $keys[] = $key;
        };
    };
    return $keys;
};

$category = select('ccc_category', 'cat_id', ['*']);

// Inserting data
if (getPara('submit')) {
    $keys = getKeysFromPostRequest();
    for ($i = 0; $i < count($keys); $i++) {
        $insert_query = insert($keys[$i], getPara($keys[$i]));
        if ($insert_query) {
            echo "<script>alert('Data submitted successfully')</script>";
            echo "<script>location. href='product_list.php'</script>";
        } else {
            echo "<script>alert('Data not submitted')</script>";
            echo "<script>location. href='product_list.php'</script>";
        }
    };
};

//Updating Data
if (getPara('update')) {
    $keys = getKeysFromPostRequest();
    for ($i = 0; $i < count($keys); $i++) {
        $insert_query = update("ccc_products", ['product_id' => getPara('product_id')], getPara($keys[$i]));
        if ($insert_query) {
            echo "<script>alert('Data updated successfully')</script>";
            echo "<script>location. href='product_list.php'</script>";
        } else {
            echo "<script>alert('Data not updated')</script>";
            echo "<script>location. href='product_list.php'</script>";
        }
    };
};

?>

<!DOCTYPE html>
<html lang="en">
<style>
    div {
        margin: 1rem 0;
    }

    .link {
        display: block;
        margin-top: 10px;
    }
</style>

<body>
    <form action="" method="post">
        <div>
            <label for="product_name">Product Name: </label>
            <input type="text" value="<?php echo $product_name ?>" name="ccc_products[ProductName]" id="product_name">
        </div>
        <div>
            <label for="product_sku">Product SKU: </label>
            <input type="text" value="<?php echo $product_sku ?>" name="ccc_products[SKU]" id="product_sku">
        </div>
        <div>
            <label>Product Type: </label>
            <div>
                <input type="radio" <?php echo $product_type == 'Simple' ? 'checked' : '' ?> name="ccc_products[ProductType]" id="product_type_simple" value="Simple">
                <label for="product_type_simple">Simple</label>
                <input type="radio" <?php echo $product_type == 'Bundle' ? 'checked' : ''  ?> name="ccc_products[ProductType]" id="product_type_Bundle" value="Bundle">
                <label for="product_type_Bundle">Bundle</label>
            </div>
        </div>
        <div>
            <label for="product_category">Category:</label>
            <select name="ccc_products[cat_id]" id="product_category">
            <?php
                if ($category->num_rows > 0) {
                    while ($row = $category->fetch_assoc()) {
                        $selected = $row['cat_id'] == $product_category ? 'selected' : '';
                        echo "<option {$selected} value='{$row['cat_id']}'>{$row['name']}</option>";
                    }
                }
                ?>
            </select>
        </div>
        <div>
            <label for="manufacturer_cost">Manufacturer Cost: </label>
            <input type="text" value="<?php echo $manufacturer_cost ?>" name="ccc_products[ManufacturerCost]" id="manufacturer_cost">
        </div>
        <div>
            <label for="shipping_cost">Shipping Cost: </label>
            <input type="text" value="<?php echo $shipping_cost ?>" name="ccc_products[ShippingCost]" id="shipping_cost">
        </div>
        <div>
            <label for="total_cost">Total Cost: </label>
            <input type="text" value="<?php echo $total_cost ?>" name="ccc_products[TotalCost]" id="total_cost">
        </div>
        <div>
            <label for="product_price">Price: </label>
            <input type="text" value="<?php echo $product_price ?>" name="ccc_products[Price]" id="product_price">
        </div>
        <div>
            <label for="product_status">Status:</label>
            <select name="ccc_products[Status]" id="product_status">
                <option <?php echo $product_status == 'Enabled' ? 'selected' : false; ?> value='Enabled'>Enabled</option>;
                <option <?php echo $product_status == 'Disabled' ? 'selected' : false; ?> value='Disabled'>Disabled</option>;
            </select>
        </div>
        <div>
            <label for="product_created_at">Created At: </label>
            <input type="date" value="<?php echo $product_created_at ?>" name="ccc_products[CreatedAt]" id="product_created_at">
        </div>
        <div>
            <label for="product_updated_at">Updated At: </label>
            <input type="date" value="<?php echo $product_updated_at ?>" name="ccc_products[UpdatedAt]" id="product_updated_at">
        </div>
        <?php
        $uppercase = ucwords($button_text);
        echo "<input type='submit' name='$button_text' value='$uppercase' id='submit'>";
        ?>
    </form>
</body>

</html>
