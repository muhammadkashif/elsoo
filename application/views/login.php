<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" rev="stylesheet" href="<?php echo base_url();?>css/login-ext.css" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>ANZA Point Of Sale <?php echo $this->lang->line('login_login'); ?></title>
<script src="<?php echo base_url();?>js/jquery-1.2.6.min.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
<script type="text/javascript">
$(document).ready(function()
{
	$("#login_form input:first").focus();
});
</script>
</head>
<body>
    	<div id="wrapper">
	<div id="header"><h1><a href="www.anzasys.com">iPOS</a></h1></div>
    <div class="container">
    	<div id="topcorners"><div class="cleft"></div><div class="cright"></div></div>
    	<div id="content">
			




			
				<?php echo form_open('login') ?>
					<table class="login" style="margin-left: auto; margin-right: auto;">
						<tbody><tr>
							<td><p class="mtop0 mbottom025"><strong><label for="email"><?php echo $this->lang->line('login_username'); ?></label></strong></p><?php echo form_input(array(
		'name'=>'username', 
		'value'=>set_value('username'),
		'size'=>'20')); ?></td>
                      <td><p class="mtop05 mbottom025"><strong><label for="password"><?php echo $this->lang->line('login_password'); ?></label></strong></p><?php echo form_password(array(
		'name'=>'password', 
		'value'=>set_value('password'),
		'size'=>'20')); ?></td>
						</tr>
										
						<tr>
							<td colspan="2" style="padding-top: 10px;"><?php echo form_submit('loginButton','Go'); ?></td>
						</tr>
					</tbody></table>
				<?php echo form_close(); ?>
			
			
		</div>
		<div id="bottomcorners"><div class="cleft"></div><div class="cright"></div></div>
	</div>
</div>
    	<div id="footer">
	<p>
		<a href="http://www.anzasys.com/">iPOS</a> <span>|</span>
		<a href="https://www.anzasys.com/">Privacy Policy</a> <span>|</span>
		<a href="https://www.anzasys.com//">Terms of Service</a> <span>|</span>
		<a href="http://blog.anzasys.com/">Blog</a> <span>|</span>
		<a href="#">Facebook</a> <span>|</span>
		<a href="#">Twitter</a> <span>|</span>
		<script type="text/javascript">
			Rot13.write('<n uers="#">Muhammad Kashif</n>');
		</script><a href="mailto:info@anzasys.com">Contact Us</a>
	</p>
	<p>Copyright © 2010-2011 <a href="http://www.anzasys.com/">Anza Systems</a>. All rights reserved.</p>
</div>
    </body></html>