<?php 
session_start();
include("config.php");
if(isset($_SESSION['usr_id']))
{ 

$id=$_SESSION['usr_id'];

$sql="select * from order1 where userid='$id'";
$result=mysql_query($sql);


?>
<table width="400" border="1" cellspacing="0" cellpadding="3">
 <?php
while($rows=mysql_fetch_array($result))
{
	?>
	<tr>
<td width="10%"><?php echo $rows['date']; ?></td>
<td width="30%"><?php echo $rows['name']; ?></td>
<td width="30%"><?php echo $rows['amoun']; ?></td>
<td width="30%"><?php echo $rows['restro']; ?></td>
</tr>
<?php
	
	}
	
	?>
    
    </table>
    
    <?php

}

?>

