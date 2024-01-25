<?php
require('sql/functions.php');

$category_name = "";
$button_text = 'submit';

//Delete
if (getPara('action') == 'delete' && getPara('cat_id')) {
    $status = delete('ccc_category', ['cat_id' => getPara('cat_id')]);
    if ($status) {
        echo "<script>alert('Data deleted')</script>";
        echo "<script>location. href='category_list.php'</script>";
    } else {
        echo "<script>alert('Data not deleted')</script>";
        echo "<script>location. href='category_list.php'</script>";
    };
};

if (getPara('action') == 'update' && getPara('cat_id')) {
    $single_product = whereBasedSelect('ccc_category', ['cat_id' => getPara('cat_id')]);
    if ($single_product) {
        $single_product = $single_product->fetch_assoc();
        $category_name = $single_product['name'];
        $button_text = 'update';
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
            echo "<script>location. href='category_list.php'</script>";
        } else {
            echo "<script>alert('Data not submitted')</script>";
            echo "<script>location. href='category_list.php'</script>";
        }
    };
};

//Updating Data
if (getPara('update')) {
    $keys = getKeysFromPostRequest();
    for ($i = 0; $i < count($keys); $i++) {
        $insert_query = update("ccc_category", ['cat _id' => getPara('cat _id')], getPara($keys[$i]));
        if ($insert_query) {
            echo "<script>alert('Data updated successfully')</script>";
            echo "<script>location. href='category_list.php'</script>";
        } else {
            echo "<script>alert('Data not updated')</script>";
            echo "<script>location. href='category_list.php'</script>";
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
            <label for="category_name">Category Name: </label>
            <input type="text" value="<?php echo $category_name ?>" name="ccc_category[name]" id="category_name">
        </div>
        <?php
        $uppercase = ucwords($button_text);
        echo "<input type='submit' name='$button_text' value='$uppercase' id='submit'>";
        ?>
    </form>
</body>

</html>