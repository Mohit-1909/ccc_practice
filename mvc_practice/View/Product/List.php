<?php
class View_Product_List
{
    public $rowObj;
    public function __construct()
    {
        $obj = new Model_Abstract();
        $query = $obj->getQueryBuider()->select("ccc_product", "*");
        $result = $obj->getQueryExecutor()->exec($query);
        $rows = $obj->getQueryExecutor()->FetchAssoc($result);
        $this->rowObj = new Model_Data_Collection();
        foreach ($rows as $row) {
            $this->rowObj->addData($row);
        }
    }
    public function createTable()
    {
        $table = '<div class="box">
                 <div class="container1">
                    <div class = "title_button">
                        <div class="title">Product Information</div>
                        <div><a href="?action=add&product_id="><button type="submit" name="add_btn" class="add_btn">Add</button></a></div>
                    </div>
                    <div class="content">';
        $table .= '<table style="border: 1px solid black; border-collapse: collapse;">
                        <tr><th>Product Id</th>
                            <th>Product Name</th>
                            <th>Product SKU</th>
                            <th>Category</th>
                            <th>Edit</th>
                            <th>delete</th>
                        </tr>';
        foreach ($this->rowObj->getData() as $data) {
            $table .=
                "<tr>
                            <td class='row_data'>" . $data->getproduct_id() . "</td>
                            <td class='row_data'>" . $data->getProductName() . "</td>
                            <td class='row_data'>" . $data->getSKU() . "</td>
                            <td class='row_data'>" . $data->getcat_id() . "</td>
                            <td><div class='btn'><a href='?action=edit&product_id=" . $data->getproduct_id() . "'><button class='upd'>Edit</button></a></td></div>
                            <td><div class='btn'><a href='?action=delete&product_id=" . $data->getproduct_id() . "'><button class='del'>Delete</button></a></td></div>
                        </tr>";
        }
        $table .= '</table>';
        $table .= ' </div>
                </div>
                </div>';
        return $table;
    }
    public function toHtml()
    {
        // $css = '<link rel="stylesheet" href="View/CSS/styles.css">';
        // $form = $this->createTable();
        // return $css . $form;

        echo "Product_List.php";
    }
}
