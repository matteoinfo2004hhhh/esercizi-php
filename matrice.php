<?php

$r=0;
$c=0;

if(isset($_POST['B']))
{
   $r=$_POST['R'];
   $c=$_POST['C'];
}

?>

<HTML>
   <BODY>

   <FORM name='F1' method='POST' action='matrice.php'>
      <INPUT type='text' name='R' size='3' value='<?php echo $r; ?>' />
      <INPUT type='text' name='C'  size='3' value='<?php echo $c; ?>' />
      <INPUT type='submit' name='B'  value='matrice'/>
   </FORM>

   <BR><BR><BR>
   <TABLE border='1'>

   <?php

      for($j=0;$j<$r;$j++)
      {
         echo "<TR>";
         for($i=0;$i<$c;$i++)
         {
            $t=mt_rand(1,6)+mt_rand(1,6);
            echo "<TD width='50px' align='center'>&nbsp;".$t."&nbsp;</TD>";
         }
         echo "</TR>";
      }

   ?>

   </TABLE>

</BODY>
</HTML>
