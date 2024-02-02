<?php

class Data_Object
{
    protected $_row = [];
    public function __construct($row)
    {
        $this->_row = $row;
    }
    public function __call($name, $args)
    {
        $name = substr($name, 3);
        return isset($this->_row[$name])
            ? $this->_row[$name]
            : '';
    }
}


class View_Product
{
    public $newObj;
    public function __construct()
    {
        $obj = new Model_Request();
        var_dump($obj->getQueryData('id'));
        $id = ($obj->getQueryData('id'));
        $obj = new Lib_Sql_Query_Builder();
        $sql = $obj->select("ccc_products", "*", ["product_id" => $id]);
        $test = $obj->exec($sql);

        // print_r($obj->fetchAssoc($test));
        $data = $obj->fetchAssoc($test);
        // var_dump($data[0]);
        $this->newObj = new Data_Object($data[0]);
    }

    public function createForm()
    {
        $form = '<div class="form-container">';
        $form .= '<h2>Add Details</h2>'; // Added heading here
        $form .= '<form action="" method="POST">';
        $form .= '<div>';
        $form .= $this->createTextField('pdata[ProductName]', "Product Name: ", $this->newObj->getProductName());
        $form .= '</div>';
        $form .= '<div>';
        $form .= $this->createTextField('pdata[SKU]', "Sku: ", $this->newObj->getSKU());
        $form .= '</div>';
        $form .= '<div>';
        $form .= $this->createRadioBtn('pdata[ProductType]', "ProductType: ", ['Simple', 'Bundle']);
        $form .= '</div>';
        $form .= '<div>';
        $form .= $this->createDropDown('pdata[cat_id]', "Category: ", [
            1 => 'Bar & Game Room',
            2 => 'Bedroom',
            3 => 'Decor',
            4 => 'Dining & Kitchen',
            5 => 'Lighting',
            6 => 'Living Room',
            7 => 'Mattresses',
            8 => 'Office',
            9 => 'Outdoor',
        ], '', 'product_category');
        $form .= '</div>';
        $form .= '<div>';
        $form .= $this->createTextField('pdata[ManufacturerCost]', "ManufacturerCost: ", $this->newObj->getManufacturerCost());
        $form .= '</div>';
        $form .= '<div>';
        $form .= $this->createTextField('pdata[ShippingCost]', "ShippingCost: ", $this->newObj->getShippingCost());
        $form .= '</div>';
        $form .= '<div>';
        $form .= $this->createTextField('pdata[TotalCost]', "TotalCost: ", $this->newObj->getTotalCost());
        $form .= '</div>';
        $form .= '<div>';
        $form .= $this->createTextField('pdata[Price]', "Price: ",  $this->newObj->getPrice());
        $form .= '</div>';
        $form .= '<div>';
        $form .= $this->createDropDown('ccc_product[product_status]', "Status: ", [
            "enabled" => 'Enabled',
            "disabled" => 'Disabled',
        ], $this->newObj->getStatus(), 'product_status');
        $form .= '</div>';
        $form .= '<div>';
        $form .= $this->createDateInput('pdata[CreatedAt]', "Created At: ");
        $form .= '</div>';
        $form .= '<div>';
        $form .= $this->createDateInput('pdata[UpdatedAt]', "Updated At: ");
        $form .= '</div>';
        $form .= '<div>';
        $form .= $this->createSubmitBtn('Submit');
        $form .= '</div>';
        $form .= '</form>';
        $form .= '</div>';
        return $form;
    }

    public function createTextField($name, $title, $value = '', $id = '')
    {
        return '<span> ' . $title . ' </span><input id="' . $id . '" type="text" name="' . $name . '" value="' . $value . '">';
    }

    public function createRadioBtn($name, $title, $values, $default = 'Simple')
    {
        $radioBtns = '<span> ' . $title . ' </span>';
        foreach ($values as $value) {
            $checked = ($value == $default) ? 'checked' : '';
            $radioBtns .= '<input type="radio" name="' . $name . '" value="' . $value . '" ' . $checked . '> ' . $value . ' ';
        }
        return $radioBtns;
    }

    public function createDropDown($name, $title, $options = array(), $selected = '', $id = '')
    {
        $dropdown = '<div>' . $title;
        $dropdown .= "<select id={$id} name={$name}>";
        foreach ($options as $key => $value) {
            $selectedAttr = ($key == $selected) ? 'selected="selected"' : '';
            $dropdown .= "<option value={$key} class={$id} {$selectedAttr}>{$value}</option>";
        }
        $dropdown .= '</select>' . '</div>';
        return $dropdown;
    }

    public function createDateInput($name, $title, $value = '', $id = '')
    {
        return '<span> ' . $title . ' </span><input id="' . $id . '" type="date" name="' . $name . '" value="' . $value . '">';
    }

    public function createSubmitBtn($title)
    {
        return '<input type="submit" name="submit" value="' . $title . '">';
    }

    public function toHtml()
    {
        return $this->createForm();
    }
}
