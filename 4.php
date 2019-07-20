<?php 
function count_hand($jml_baris)
{
    $k = 0;
    for($i=1;$i<=$jml_baris;$i++)
    {
        $k +=$i-1;
    }
    echo $k;
}

count_hand(6);
?>