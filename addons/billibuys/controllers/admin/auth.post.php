<?php

if($mode == 'logout'){
	fn_redirect('/index.php');
}elseif($mode == 'login_form'){
	if(strpos($_SERVER['PHP_SELF'],'/admin.php') === FALSE && $_SESSION['auth']['user_id'] == 0)
		fn_redirect('/index.php?dispatch=auth.login_form&return_url='.$_REQUEST['return_url']);
}

?>