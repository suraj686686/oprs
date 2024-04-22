<?php
$userName = '';
$show = '';
if (!empty($_SESSION['userid']) && $_SESSION['userid']) {
	$userName = $_SESSION['username'];
} else {
	$show = 'hidden';
}
?>
<div id="loggedPanel" class="<?php echo $show; ?>">
<a href="action.php?action=logout"><input  value="Logout" style="display: block; width: 100%; background-color: red; text-align: center; padding: 10px; color: white; text-decoration: none;"  ></a>
</div>