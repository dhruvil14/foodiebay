<?php 
include('config.php');
$id=$_REQUEST['id'];
$sql=mysql_query("select * from submenu where menu_id='$id'");
while($row=mysql_fetch_array($sql))
{
	
	
echo $m=$row['submenu_name'];
	echo "#";
	echo $c=$row['submenu_price'];
	echo "!";
	/*
	 $data = array(
            "name"     => $row['submenu_name'],
			"c" => $row['submenu_price']
			*/
     

	

	
	
}


?>