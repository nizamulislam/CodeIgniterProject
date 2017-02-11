<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>This is login page</h1>
<!--
Id is <?php //echo $id;?>
Name is <?php //echo $name;?>
-->
<?php
foreach($s_data as $value){
?>

Id is <?php echo $value->id;?>
Name is <?php echo $value->name;?>
Roll is <?php echo $value->roll;?>

<?php
}
?>

</body>
</html>