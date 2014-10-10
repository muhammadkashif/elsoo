<?php $this->load->view("partial/header"); ?>

<div id="title_bar">
	<div id="title" class="float_left"><?php echo $this->lang->line('common_list_of').' '.$this->lang->line('module_'.$controller_name); ?></div>
	
</div>
<div id="register_wrapper">
	<?php echo form_open("book/add"); ?>
		<span>Description</span>
		
	<?php echo form_close()?>
</div>
<?php $this->load->view("partial/footer"); ?>