<?php $this->load->view("partial/header"); ?>
<script type="text/javascript">
$(document).ready(function() 
{ 
    init_table_sorting();
    enable_select_all();
    enable_row_selection();
    enable_search('<?php echo site_url("$controller_name/suggest")?>','<?php echo $this->lang->line("common_confirm_search")?>');
    enable_email('<?php echo site_url("$controller_name/mailto")?>');
    enable_delete('<?php echo $this->lang->line($controller_name."_confirm_delete")?>','<?php echo $this->lang->line($controller_name."_none_selected")?>');
}); 

function init_table_sorting()
{
	//Only init if there is more than one row
	if($('.tablesorter tbody tr').length >1)
	{
		$("#sortable_table").tablesorter(
		{ 
			sortList: [[1,0]], 
			headers: 
			{ 
				0: { sorter: false}, 
				6: { sorter: false} 
			} 

		}); 
	}
}

function post_person_form_submit(response)
{
	if(!response.success)
	{
		set_feedback(response.message,'error_message',true);	
	}
	else
	{
		//This is an update, just update one row
		if(jQuery.inArray(response.person_id,get_visible_checkbox_ids()) != -1)
		{
			update_row(response.person_id,'<?php echo site_url("$controller_name/get_row")?>');
			set_feedback(response.message,'success_message',false);	
			
		}
		else //refresh entire table
		{
			do_search(true,function()
			{
				//highlight new row
				hightlight_row(response.person_id);
				set_feedback(response.message,'success_message',false);		
			});
		}
	}
}
</script>
<div id="title_bar">
    <h1>
        <i class="fa fa-compass"></i><?php echo $this->lang->line('common_list_of').' '.$this->lang->line('module_'.$controller_name); ?>
    </h1>
      
</div>

<div class="row">
	<div id="breadcrumb" class="col-md-12">
		<ol class="breadcrumb">
			<li><a href="index.html">Dashboard</a></li>
			<li>
                            <a href="#">
                                <?php echo $this->lang->line('module_'.$controller_name); ?>
                            </a>
                        </li>
		</ol>
	</div>
</div>

<div class="row">    
    <div class="col-sm-6">
        <img src='<?php echo base_url()?>images/spinner_small.gif' alt='spinner' id='spinner' />
        <?php echo form_open("$controller_name/search",array('id'=>'search_form')); ?>
            <input type="text" name ='search' id='search' class="form-control"/>
        </form>
    </div>
    <div class="col-sm-6">
        <?php echo anchor("$controller_name/view/-1/width:$form_width",
		"<div class='btn btn-danger'><span>".$this->lang->line($controller_name.'_new')."</span></div>",
		array('class'=>'thickbox none','title'=>$this->lang->line($controller_name.'_new')));
		?>
    </div>
</div>
<div class="row">
    <?php echo $this->pagination->create_links();?>
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <div class="box-name">
                    <i class="fa fa-arrow-down"></i>
                    <span><?php echo anchor("$controller_name/delete",$this->lang->line("common_delete"),array('id'=>'delete')); ?></span>
                    <span><a href="#" id="email"><?php echo $this->lang->line("common_email");?></a></span>
                </div>
            </div>
            <div id="box-content no-padding">
                <?php echo $manage_table; ?>
            </div>
        </div>
    </div>
    <?php echo $this->pagination->create_links();?>
</div>

<div id="feedback_bar"></div>
<?php $this->load->view("partial/footer"); ?>