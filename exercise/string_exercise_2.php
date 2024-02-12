<?php

$text="Hello, World! How are you doing?";

    echo "<br>length: ".strlen($text);

    echo "<br>lowercase: ".strtolower($text);

    echo "<br>uppercase: ".strtoupper($text);

    echo "<br>replace: ".str_replace("How are you doing?","Fine,thank you!",$text);

    echo "<br>print first 10 char: ".substr($text,0,10);

    echo "<br>start with 8th char: ".substr($text,8);
    ?>