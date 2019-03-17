<?php
function factorial($n)
{

    $i=1;$f=1;

  while($i<=$n)
   {
     $f=$f*$i;
    $i++;
   }
echo "factorial of".$n."is".$f;
}

$num=$_POST['txt1'];
factorial($num);
?>


