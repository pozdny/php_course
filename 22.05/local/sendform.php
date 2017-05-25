<?php
session_start();
?>
<form action ="sendmoney.php">
<input type="text" name="user" />
<input type="submit" />
<input type="hidden" name="token" value="<?php echo $_SESSION['key'] ?>" />
<input type="hidden" name="form_hash" value = "<?php echo uniqid() ?>"/>
</form>
