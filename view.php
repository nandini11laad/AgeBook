<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>View Records</title>
</head>
<body>
<div class="form">
<p><a href="index.php">Home</a> 
| <a href="insert.php">Insert New Record</a> 
| <a href="logout.php">Logout</a></p>
<h2>View Records</h2>
<table>
<thead>
<tr>
<th><strong>S.No</strong></th>
<th><strong>Name</strong></th>
<th><strong>Age</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from new_record ORDER BY id desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td><?php echo $count; ?></td>
<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["age"]; ?></td>
<td>
<a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
</td>
<td>
<a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>