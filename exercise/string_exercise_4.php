<?php

$name = "John";

    echo "<br>pad string with underscores: ".str_pad($name,10,"_",STR_PAD_LEFT);

    echo "<br>pad string with asterisks: ".str_pad($name,8,"*",STR_PAD_RIGHT);

    echo "<br>".$name;
    ?>