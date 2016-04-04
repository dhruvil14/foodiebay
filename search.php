<?php
session_start();
include('config.php');

 $q=$_POST['data'];
 $q1=$_POST['ct'];


$sql_res=mysql_query("select * from location where location_name like '%$q%' and city_id='$q1' order by location_id limit 5");
while($row=mysql_fetch_array($sql_res))
{
$username=$row['location_name'];

$b_username='<strong>'.$q.'</strong>';

$final_username = str_ireplace($q, $b_username, $username);

?>
<div class="show" align="left">
<span class="name"><?php echo $final_username; ?></span><br/>
</div>
<?php
}

?>
