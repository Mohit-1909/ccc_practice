<?php

$sentence = "The quick brown fox jumps over the lazy dog";

    echo "<br>find position of fox: ".strpos($sentence,"fox");

    echo "<br>check the word 'cat' in sentance: ";
    if(str_contains($sentence,'cat')){
        echo "True";
    }
    else{
        echo "False";
    }
    

    echo "<br> print first 20 char: ".substr($sentence,0,20);

    ?>