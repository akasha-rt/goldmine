<?php
global $current_user;
//get admin_id from preferences
$admin_id = $_COOKIE['admin_id'];
unset($_COOKIE['admin_id']);
setcookie('admin_id', '', time() - 3600, '/');

//login with admin_id
$_SESSION['authenticated_user_id'] = $admin_id;
header("Cache-Control: no-cache, must-revalidate");
?>

<html>

	<body>
		<script type="text/javascript">
			window.parent.location = 'index.php';
		</script>
	</body>

</html>
