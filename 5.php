<?php 

function drawline($i)
{
    for ($row=1; $row< $i+1; $row++)
    {
      for ($col=1; $col<= $i; $col++)
        {
            if($row == $col)
           {
               echo '*';
           }
           else
           {
               echo " &nbsp;";
           }
        }        
      echo "<br>";
    }
}

drawline(8);
?>