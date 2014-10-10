<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<base href="<?php echo base_url();?>" />
	<title><?php echo $this->config->item('company').' -- '.$this->lang->line('common_powered_by').' ANZA Point Of Sale' ?></title>
	<link rel="stylesheet" rev="stylesheet" href="<?php echo base_url();?>css/phppos.css" />
	<link rel="stylesheet" rev="stylesheet" href="<?php echo base_url();?>css/phppos_print.css"  media="print"/>
	<!-- ************************************************************************* -->
<!-- *****************   DL Theme   ****************************************** -->
<link href="DLTheme/plugins/bootstrap/bootstrap.css" rel="stylesheet">
<link href="DLTheme/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
<!--<link href="DLTheme/plugins/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="DLTheme/plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
<link href="DLTheme/plugins/xcharts/xcharts.min.css" rel="stylesheet">-->
<link href="DLTheme/plugins/select2/select2.css" rel="stylesheet">
<!--<link href="DLTheme/plugins/justified-gallery/justifiedGallery.css" rel="stylesheet">-->
<link href="DLTheme/css/style.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
                <script src="http://getbootstrap.com/docs-assets/js/html5shiv.js"></script>
                <script src="http://getbootstrap.com/docs-assets/js/respond.min.js"></script>
<![endif]-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--<script src="http://code.jquery.com/jquery.js"></script>-->
<script src="<?php echo base_url();?>DLTheme/plugins/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>DLTheme/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url();?>DLTheme/plugins/justified-gallery/jquery.justifiedGallery.min.js"></script>
<script src="<?php echo base_url();?>DLTheme/plugins/tinymce/tinymce.min.js"></script>
<script src="<?php echo base_url();?>DLTheme/plugins/tinymce/jquery.tinymce.min.js"></script>
<script src="<?php echo base_url();?>DLTheme/plugins/bootstrap/bootstrap.min.js"></script>
<!-- All functions for this theme + document.ready processing -->
<script src="<?php echo base_url();?>DLTheme/js/devoops.js"></script>
<!-- **bootstrap.min.js -devoops.js are confliq files -->
<!-- ************************************************************************* -->
	<script>BASE_URL = '<?php echo site_url(); ?>';</script>
<!--	<script src="<?php echo base_url();?>js/jquery-1.2.6.min.js" type="text/javascript" language="javascript" charset="UTF-8"></script>-->
	<script src="<?php echo base_url();?>js/jquery.color.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
	<script src="<?php echo base_url();?>js/jquery.metadata.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
	<script src="<?php echo base_url();?>js/jquery.form.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
	<script src="<?php echo base_url();?>js/jquery.tablesorter.min.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
	<script src="<?php echo base_url();?>js/jquery.ajax_queue.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
	<script src="<?php echo base_url();?>js/jquery.bgiframe.min.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
	<script src="<?php echo base_url();?>js/jquery.autocomplete.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
<!--	<script src="<?php echo base_url();?>js/jquery.validate.min.js" type="text/javascript" language="javascript" charset="UTF-8"></script>-->
        <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
	<script src="<?php echo base_url();?>js/jquery.jkey-1.1.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
	<script src="<?php echo base_url();?>js/thickbox.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
	<script src="<?php echo base_url();?>js/common.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
	<script src="<?php echo base_url();?>js/manage_tables.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
	<script src="<?php echo base_url();?>js/swfobject.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
	<script src="<?php echo base_url();?>js/date.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
	<script src="<?php echo base_url();?>js/datepicker.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
        <script src="<?php echo base_url();?>js/jquery-migrate-1.0.0.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
        
<style type="text/css">
html {
    overflow: auto;
}
</style>

</head>
<body>
    <!--Start Header-->
    <div id="screensaver">
        <canvas id="canvas"></canvas>
        <i class="fa fa-lock" id="screen_unlock"></i>
    </div>
    <div id="modalbox">
        <div class="devoops-modal">
            <div class="devoops-modal-header">
                <div class="modal-header-name">
                    <span>Basic table</span>
                </div>
                <div class="box-icons">
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="devoops-modal-inner">
            </div>
            <div class="devoops-modal-bottom">
            </div>
        </div>
    </div>
    <header class="navbar">
        <div class="container-fluid expanded-panel">
            <div class="row">
                <div id="logo" class="col-xs-12 col-sm-2">
                    <a href="<?php echo base_url();?>">
<!--                        <img src="<?php echo base_url();?>/images/logo.png"></img>-->
                        <?php echo $this->config->item('company'); ?>
                    </a>
                    
                </div>
                <div id="top-panel" class="col-xs-12 col-sm-10">
                    <div class="row">
                        <div class="col-xs-8 col-sm-4">
                            <a href="#" class="show-sidebar">
                                <i class="fa fa-bars"></i>
                            </a>                            
                        </div>
                        <div class="col-xs-4 col-sm-8 top-panel-right">
                            <ul class="nav navbar-nav pull-right panel-menu">    
                                <li><?php echo date('F d, Y h:i a') ?></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle account" data-toggle="dropdown">
                                        <div class="avatar">
                                            <img src="DLTheme/img/avatar.jpg" class="img-rounded" alt="avatar" />
                                        </div>
                                        <i class="fa fa-angle-down pull-right"></i>
                                        <div class="user-mini pull-right">
                                            <span class="welcome"><?php echo $this->lang->line('common_welcome')?>,</span>
                                            <span><?php echo " $user_info->first_name $user_info->last_name"; ?></span>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user"></i>
                                                <span>Profile</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="ajax/page_messages.html" class="ajax-link">
                                                <i class="fa fa-envelope"></i>
                                                <span>Messages</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="ajax/gallery_simple.html" class="ajax-link">
                                                <i class="fa fa-picture-o"></i>
                                                <span>Albums</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="ajax/calendar.html" class="ajax-link">
                                                <i class="fa fa-tasks"></i>
                                                <span>Tasks</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-cog"></i>
                                                <span>Settings</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url();?>index.php/home/logout">
                                                <i class="fa fa-power-off"></i>
                                                <span><?php echo $this->lang->line("common_logout"); ?></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--End Header-->
    <!--Start Container-->
    <div id="main" class="container-fluid">
        <div class="row">
            <div id="sidebar-left" class="col-xs-2 col-sm-2">
                <ul class="nav main-menu">                    
                    <?php foreach($allowed_modules->result() as $module){ ?>
                    
                        <li>
                            <a href="<?php echo site_url("$module->module_id");?>" >
                                <i class="fa fa-<?php echo $module->class;?>"></i>
                                <span class="hidden-xs">
                                    <?php echo $this->lang->line("module_".$module->module_id) ?>
                                </span>
                            </a>
                        </li>   
                    
                    <?php } ?>
                </ul>
            </div>
            <!--Start Content-->
            <div id="content" class="col-xs-12 col-sm-10">
<!--                <div class="preloader">
                    <img src="img/devoops_getdata.gif" class="devoops-getdata" alt="preloader"/>
                </div>-->

<!--<div id="top_menubar">
    <div id="menubar_container">
        <span class="welcome">
            <?php echo $this->lang->line('common_welcome')?> 
            <b>
                <?php echo " $user_info->first_name $user_info->last_name! | "; ?>
            </b>
            <?php echo anchor("home/logout",$this->lang->line("common_logout")); ?>
        </span>
        <span style="color: #FFF; float: right;">
            <?php echo date('F d, Y h:i a') ?>
        </span>
    </div>
</div>-->
<!--<div id="menubar">	
	<div id="menubar_container">
             
            <div id="menubar_company_info">
                
                <span id="company_title">
                    <a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>/images/logo.png"></img></a>
                    <?php echo $this->config->item('company'); ?>
                </span>
                <br /><span style='font-size:8pt;'><a href="www.anzasys.com" ><?php //echo $this->lang->line('common_powered_by').' iPOS'; ?></a></span>
            </div>

		<div id="menubar_navigation">
			<?php
			foreach($allowed_modules->result() as $module)
			{
			?>
			<div class="menu_item">
				<a href="<?php echo site_url("$module->module_id");?>">
				<img src="<?php echo base_url().'images/menubar/'.$module->module_id.'.png';?>" border="0" alt="Menubar Image" /></a><br />
				<a href="<?php echo site_url("$module->module_id");?>">
                                    <?php echo $this->lang->line("module_".$module->module_id) ?>
                                </a>
			</div>
			<?php
			}
			?>
		</div>

		<div id="menubar_footer">
		
		</div>

		<div id="menubar_date">
		
		</div>

	</div>
</div>-->
<!--<div id="content_area_wrapper">
	<div id="content_menu">
		<ul class="sidemenu">
		<?php
			foreach($allowed_modules->result() as $module)
			{
			?>
				<li class="<?php echo $module->module_id;?>">
					<a href="<?php echo site_url("$module->module_id");?>" >
						<img src="<?php echo base_url().'images/menubar/'.$module->module_id.'.png';?>" border="0" alt="Menubar Image" />
						<?php echo $this->lang->line("module_".$module->module_id) ?>
					</a>				
				</li>
			
			<?php
			}
			?>
		</ul>
	</div>-->
<!--<div id="content_area">-->

