<?php
/*
* @package		MiwoFTP
* @copyright	Copyright (C) 2009-2014 Miwisoft, LLC. All rights reserved.
* @license		GNU General Public License version 2 or later
*
*/

// no direct access
defined('ABSPATH') or die('MIWI');
?>

<script language="JavaScript1.2" type="text/javascript">
<!--
	function check_pwd() {
		if(document.edituser.user.value=="" || document.edituser.home_dir.value=="") {
			alert("<?php echo $GLOBALS["error_msg"]["miscfieldmissed"]; ?>");
			return false;
		}
		if(document.edituser.chpass.checked &&
			document.edituser.pass1.value!=document.edituser.pass2.value)
		{
			alert("<?php echo $GLOBALS["error_msg"]["miscnopassmatch"]; ?>");
			return false;
		}
		return true;
	}
// -->
</script>
