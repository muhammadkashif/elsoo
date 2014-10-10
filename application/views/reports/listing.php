
<?php $this->load->view("partial/header"); ?>
<div id="title_bar">
    <h1>
        <i class="fa fa-compass"></i><?php echo $this->lang->line('reports_reports'); ?>
    </h1>
      
</div>

<div class="row">
	<div id="breadcrumb" class="col-md-12">
		<ol class="breadcrumb">
			<li><a href="index.html">Dashboard</a></li>
			<li>
                            <a href="#">
                                <?php echo $this->lang->line('reports_reports'); ?>
                            </a>
                        </li>
		</ol>
	</div>
</div>
<div class="row">
    <blockquote>
            <p><?php echo $this->lang->line('reports_welcome_message'); ?></p>
    </blockquote>
    
</div>
<div class="row">
    <div class="col-xs-12 col-sm-6">
        <div class="box ui-draggable ui-droppable">
            <div class="box-header">
                <div class="box-name ui-draggable-handle">
                    <i class="fa fa-table"></i>
                    <span><?php echo $this->lang->line('reports_graphical_reports'); ?></span>
                </div>
                <div class="box-icons">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="expand-link">
                        <i class="fa fa-expand"></i>
                    </a>
<!--                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>-->
                </div>
                <div class="no-move"></div>
            </div>
            <div class="box-content">
                <p class="page-header"><a href="<?php echo site_url('reports/graphical_summary_sales');?>"><?php echo $this->lang->line('reports_sales'); ?></a></p>
                <p class="page-header"><a href="<?php echo site_url('reports/graphical_summary_categories');?>"><?php echo $this->lang->line('reports_categories'); ?></a></p>
                <p class="page-header"><a href="<?php echo site_url('reports/graphical_summary_customers');?>"><?php echo $this->lang->line('reports_customers'); ?></a></p>
                <p class="page-header"><a href="<?php echo site_url('reports/graphical_summary_suppliers');?>"><?php echo $this->lang->line('reports_suppliers'); ?></a></p>
                <p class="page-header"><a href="<?php echo site_url('reports/graphical_summary_items');?>"><?php echo $this->lang->line('reports_items'); ?></a></p>
                <p class="page-header"><a href="<?php echo site_url('reports/graphical_summary_employees');?>"><?php echo $this->lang->line('reports_employees'); ?></a></p>
                <p class="page-header"><a href="<?php echo site_url('reports/graphical_summary_taxes');?>"><?php echo $this->lang->line('reports_taxes'); ?></a></p>
                <p class="page-header"><a href="<?php echo site_url('reports/graphical_summary_discounts');?>"><?php echo $this->lang->line('reports_discounts'); ?></a></p>
                <p class="page-header"><a href="<?php echo site_url('reports/graphical_summary_payments');?>"><?php echo $this->lang->line('reports_payments'); ?></a></p>             
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6">
        <div class="box ui-draggable ui-droppable">
            <div class="box-header">
                <div class="box-name ui-draggable-handle">
                    <i class="fa fa-table"></i>
                    <span><?php echo $this->lang->line('reports_summary_reports'); ?></span>
                </div>
                <div class="box-icons">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="expand-link">
                        <i class="fa fa-expand"></i>
                    </a>
<!--                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>-->
                </div>
                <div class="no-move"></div>
            </div>
            <div class="box-content">
                
                <p class="page-header"><a href="<?php echo site_url('reports/summary_sales');?>"><?php echo $this->lang->line('reports_sales'); ?></a></p>
                <p class="page-header"><a href="<?php echo site_url('reports/summary_categories');?>"><?php echo $this->lang->line('reports_categories'); ?></a></p>
                <p class="page-header"><a href="<?php echo site_url('reports/summary_customers');?>"><?php echo $this->lang->line('reports_customers'); ?></a></p>
                <p class="page-header"><a href="<?php echo site_url('reports/summary_suppliers');?>"><?php echo $this->lang->line('reports_suppliers'); ?></a></p>
                <p class="page-header"><a href="<?php echo site_url('reports/summary_items');?>"><?php echo $this->lang->line('reports_items'); ?></a></p>
                <p class="page-header"><a href="<?php echo site_url('reports/summary_employees');?>"><?php echo $this->lang->line('reports_employees'); ?></a></p>
                <p class="page-header"><a href="<?php echo site_url('reports/summary_taxes');?>"><?php echo $this->lang->line('reports_taxes'); ?></a></p>
                <p class="page-header"><a href="<?php echo site_url('reports/summary_discounts');?>"><?php echo $this->lang->line('reports_discounts'); ?></a></p>
                <p class="page-header"><a href="<?php echo site_url('reports/summary_payments');?>"><?php echo $this->lang->line('reports_payments'); ?></a></p>
		             
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-6">
        <div class="box ui-draggable ui-droppable">
            <div class="box-header">
                <div class="box-name ui-draggable-handle">
                    <i class="fa fa-table"></i>
                    <span><?php echo $this->lang->line('reports_detailed_reports'); ?></span>
                </div>
                <div class="box-icons">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="expand-link">
                        <i class="fa fa-expand"></i>
                    </a>
<!--                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>-->
                </div>
                <div class="no-move"></div>
            </div>
            <div class="box-content">
               
                <p class="page-header"><a href="<?php echo site_url('reports/detailed_sales');?>"><?php echo $this->lang->line('reports_sales'); ?></a></p>
                <p class="page-header"><a href="<?php echo site_url('reports/detailed_receivings');?>"><?php echo $this->lang->line('reports_receivings'); ?></a></p>
                <p class="page-header"><a href="<?php echo site_url('reports/specific_customer');?>"><?php echo $this->lang->line('reports_customer'); ?></a></p>
                <p class="page-header"><a href="<?php echo site_url('reports/specific_employee');?>"><?php echo $this->lang->line('reports_employee'); ?></a></p>
		             
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6">
        <div class="box ui-draggable ui-droppable">
            <div class="box-header">
                <div class="box-name ui-draggable-handle">
                    <i class="fa fa-table"></i>
                    <span><?php echo $this->lang->line('reports_inventory_reports'); ?></span>
                </div>
                <div class="box-icons">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="expand-link">
                        <i class="fa fa-expand"></i>
                    </a>
<!--                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>-->
                </div>
                <div class="no-move"></div>
            </div>
            <div class="box-content">
                
                <p class="page-header"><a href="<?php echo site_url('reports/inventory_low');?>"><?php echo $this->lang->line('reports_low_inventory'); ?></a></p>
                <p class="page-header"><a href="<?php echo site_url('reports/inventory_summary');?>"><?php echo $this->lang->line('reports_inventory_summary'); ?></a></p>
		
              
            </div>
        </div>
    </div>
</div>

<?php
if(isset($error))
{
	echo "<div class='error_message'>".$error."</div>";
}
?>
<?php $this->load->view("partial/footer"); ?>

<script type="text/javascript" language="javascript">
$(document).ready(function()
{
});
</script>
