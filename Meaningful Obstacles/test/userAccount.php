<?php
    session_start();
	$sessData = !empty($_SESSION['sessData']) ? $_SESSION['sessData']: '';
	if(!empty($sessData['status']['msg'])) {
		$statusMsg = $sessData['status']['msg'];
		unset($_SESSION['sessData']['status']);
	}
?>

<div class="container">
	<h2>Create a new account</h2>
	<?php echo !empty($statusMsg) ? '<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':'';?>
	<div class="regisFrm">
		<form action="userAccount.php" method="post">
			
		</form>
	</div>
</div>
