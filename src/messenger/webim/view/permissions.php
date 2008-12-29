<?php
/*
 * This file is part of Web Instant Messenger project.
 *
 * Copyright (c) 2005-2008 Web Messenger Community
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    Evgeny Gryaznov - initial API and implementation
 */
?>
<html>
<head>



<link rel="stylesheet" type="text/css" media="all" href="<?php echo $webimroot ?>/styles.css" />


<link rel="shortcut icon" href="<?php echo $webimroot ?>/images/favicon.ico" type="image/x-icon"/>
<title>
	<?php echo getlocal("permissions.title") ?> - <?php echo getlocal("app.title") ?>
</title>

<meta http-equiv="keywords" content="<?php echo getlocal("page.main_layout.meta_keyword") ?>">
<meta http-equiv="description" content="<?php echo getlocal("page.main_layout.meta_description") ?>">
</head>

<body bgcolor="#FFFFFF" text="#000000" link="#2971C1" vlink="#2971C1" alink="#2971C1">

<table width="100%" cellpadding="2" cellspacing="0" border="0">
<tr>
<td valign="top" class="text">

 <table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="left" valign="top">
		<h1><?php echo getlocal("permissions.title") ?></h1>
 </td><td align="right" class="text" valign="top"><table cellspacing="0" cellpadding="0" border="0"><tr><td class="textform"><?php echo getlocal2("menu.operator",array($page['operator'])) ?></td><td class="textform"><img src='<?php echo $webimroot ?>/images/topdiv.gif' width="25" height="15" border="0" alt="|" /></td><td class="textform"><a href="<?php echo $webimroot ?>/operator/operators.php" title="<?php echo getlocal("menu.agents") ?>"><?php echo getlocal("menu.agents") ?></a></td><td class="textform"><img src='<?php echo $webimroot ?>/images/topdiv.gif' width="25" height="15" border="0" alt="|" /></td><td class="textform"><a href="<?php echo $webimroot ?>/operator/index.php" title="<?php echo getlocal("menu.main") ?>"><?php echo getlocal("menu.main") ?></a></td></tr></table></td></tr></table>


	<?php echo getlocal("permissions.intro") ?>
<br />
<br />

<?php if( isset($errors) && count($errors) > 0 ) { ?>
		<table cellspacing="0" cellpadding="0" border="0">
		<tr>
	    <td valign="top"><img src='<?php echo $webimroot ?>/images/icon_err.gif' width="40" height="40" border="0" alt="" /></td>
	    <td width="10"></td>
	    <td class="text">
		    <?php	if( isset($errors) && count($errors) > 0 ) {
		print getlocal("errors.header");
		foreach( $errors as $e ) {
			print getlocal("errors.prefix");
			print $e;
			print getlocal("errors.suffix");
		}
		print getlocal("errors.footer");
	} ?>

		</td>
		</tr>
		</table>
	<?php } ?>

<form name="permissionsForm" method="post" action="<?php echo $webimroot ?>/operator/permissions.php">
	<table cellspacing='0' cellpadding='0' border='0'>
<?php if($page['tabs']) { ?>
<tr><td align="right" style="padding-right:16px;"><table cellspacing="0" cellpadding="0" border="0"><tr><?php foreach($page['tabs'] as $k => $v) { if($v) { ?><td class="textform" style="padding: 2px 9px 3px 9px;"><a href="<?php echo $v ?>"><?php echo $k ?></a></td><?php } else { ?><td class="textform" background="<?php echo $webimroot ?>/images/loginbg.gif" style="border-left:1px solid #bbbbbb;border-top:1px solid #bbbbbb;border-right:1px solid #bbbbbb;padding: 2px 9px 3px 9px;"><?php echo $k ?></td><?php }} ?></tr></table></td></tr>
<?php } ?>
<tr><td background='<?php echo $webimroot ?>/images/loginbg.gif'><table cellspacing='0' cellpadding='0' border='0'><tr><td><img src='<?php echo $webimroot ?>/images/logincrnlt.gif' width='16' height='16' border='0' alt=''></td><td></td><td><img src='<?php echo $webimroot ?>/images/logincrnrt.gif' width='16' height='16' border='0' alt=''></td></tr><tr><td></td><td align='center'><table border='0' cellspacing='0' cellpadding='0' width="700">
		<tr>
			<td class="formauth" colspan="3">
				<b><?php echo $page['currentop'] ?></b>
			</td>
		</tr>
		<tr><td colspan="3" height="15"></td></tr>

<?php foreach( $page['permissionsList'] as $pm ) { ?>
		<tr class="formauth" colspan="3">
			<td class="formauth" colspan="3">
				<label><input type="checkbox" name="permissions<?php echo $pm['id'] ?>" value="on"<?php echo form_value_mb('permissions',$pm['id']) ? " checked=\"checked\"" : "" ?>/> <?php echo $pm['descr'] ?></label>
			</td>
		</tr>
<?php } ?>

		<tr><td colspan='3' height='20'></td></tr><tr><td colspan='3' background='<?php echo $webimroot ?>/images/formline.gif'><img src='<?php echo $webimroot ?>/images/formline.gif' width='1' height='2' border='0' alt=''></td></tr><tr><td colspan='3' height='10'></td></tr>
		<tr>
			<td class="formauth" colspan="3">
                    <input type="hidden" name="op" value="<?php echo $page['op'] ?>"/>
			        <input type="image" name="" src='<?php echo $webimroot.getlocal("image.button.save") ?>' border="0" alt='<?php echo getlocal("button.save") ?>'/>
			</td>
		</tr>

	</table></td><td></td></tr><tr><td><img src='<?php echo $webimroot ?>/images/logincrnlb.gif' width='16' height='16' border='0' alt=''></td><td></td><td><img src='<?php echo $webimroot ?>/images/logincrnrb.gif' width='16' height='16' border='0' alt=''></td></tr></table></td></tr></table>
</form>

</td>
</tr>
</table>

</body>
</html>
