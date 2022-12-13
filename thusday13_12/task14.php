
<!-- 14.	Write a PHP script that returns the lowest integer in the array  that is not 0.  -->

<?php
$n=range(11,20);
    shuffle($n);
    for ($x=0; $x< 10; $x++)
    {
    echo $n[$x].' ';
    }
    echo "<br>";

    function min_values_not_zero(Array $values) 
    {
    return min(array_diff(array_map('intval', $values), array(0)));
    }
    print_r(min_values_not_zero(array(2, 0, 10, 12, 6))."\n");
    echo('</main>');
    ?>