<?php
$colors = array("red","blue","white","yellow");
    
    // flip array key => value
    $colors = array_flip($colors);
    
    // change case of new keys to upper
    $colors = array_change_key_case($colors, CASE_UPPER);
    
    // reverse the flip process to  and regain strings as value
    $colors = array_flip($colors);
    
    // print array after conversion of string
    echo('<pre>');
    print_r($colors);
    echo('</pre>');
    ?>