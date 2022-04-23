<?php include'database.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE users SET id='" . $_POST['id'] . "', fullname='" . $_POST['fullname'] . "', username='" . $_POST['username'] . "',email='" . $_POST['email'] . "', due_date='" . $_POST['due_date'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM users WHERE role='user" . $_POST["user"] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update User Data</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div> <div align="right" style="padding-bottom:5px;"><a href="retrieve.php" class="link"></a></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="header">
<td colspan="2">Edit User</td>
</tr>
<tr>
<td><label>UserID</label></td>
<td><input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>"><input type="text" name="id" class="txtField" value="<?php echo $row['id']; ?>"></td>
</tr>
<tr>
<td><label>Full Name</label></td>
<td><input type="text" name="fullname" class="txtField" value="<?php echo $row['fullname']; ?>"></td>
</tr>
<td><label>Username</label></td>
<td><input type="text" name="username" class="txtField" value="<?php echo $row['username']; ?>"></td>
</tr>
<tr>
<td><label>Email</label></td>
<td><input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>"></td>
</tr>
<tr>
<td><label>Due Date</label></td>
<td><input type="date" name="due_date" class="txtField" value="<?php echo $row['due_date']; ?>"></td>
</tr>
<tr>
<td colspan="2">
	<input type="submit" name="submit" value="Submit" class="buttom">
	<button type="button" onclick="window.location.href='adminupdate.php'" class="buttom">Go Back</button>
</td>
</tr>
</table>
</div>
</form>
</body>
</html> 