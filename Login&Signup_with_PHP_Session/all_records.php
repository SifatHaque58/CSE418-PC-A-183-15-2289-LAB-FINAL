<?php
require('db.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">

<h2>View Records</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>Serial</strong></th>    
<th><strong>Username</strong></th>
<th><strong>Email</strong></th>
<th><strong>Password</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from users;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["username"]; ?></td>
<td align="center"><?php echo $row["email"]; ?></td>
<td align="center"><?php echo $row["password"]; ?></td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
<a href="logout.php">Logout</a></p>
</body>
</html>