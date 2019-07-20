<?php 

function bettwendays($a, $b)
{
    for($i=$a; $i<=$b; $i++)
    {
        echo "'".$i."', ";
    }
}

bettwendays('2018-11-01','2018-11-05');
?>