<?php $this->load->view("partial/header"); ?>
<br />
<h3><?php echo $this->lang->line('common_welcome_message'); ?></h3>
<div id="ow-server-footer">
        <a class="col-xs-4 col-sm-2 btn-default text-center" href="#"><i class="fa fa-stack-overflow"></i> <b>287</b> <span>Total Items</span></a>
        <a class="col-xs-4 col-sm-2 btn-default text-center" href="#"><i class="fa fa-credit-card"></i> <b>56</b> <span>Total Customers</span></a>
        <a class="col-xs-4 col-sm-2 btn-default text-center" href="#"><i class="fa fa-bolt"></i> <b>85</b> <span>Total Sales</span></a>
        <a class="col-xs-4 col-sm-2 btn-default text-center" href="#"><i class="fa fa-arrows-alt"></i> <b>33</b> <span>Total Item Kits</span></a>
        <a class="col-xs-4 col-sm-2 btn-default text-center" href="#"><i class="fa fa-users"></i> <b>1386</b> <span>Total Employees</span></a>
        <a class="col-xs-4 col-sm-2 btn-default text-center" href="#"><i class="fa fa-heart"></i> <b>19985</b> <span>Total Gift Cards</span></a>
</div>
<br/>
<div class="row">
    <div class="col-xs-12">
        <div class="box ui-draggable ui-droppable">
            <div class="box-header">
                <div class="box-name ui-draggable-handle">
                    <i class="fa fa-search"></i>
                    <span>Dashboard</span>
                </div>
                <div class="box-icons">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="expand-link">
                        <i class="fa fa-expand"></i>
                    </a>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
                <div class="no-move"></div>
            </div>
            <div class="box-content">
                <div id="ow-server-footer">
                <?php
                foreach($allowed_modules->result() as $module)
                {
                ?>                                  
                    <a  class="col-xs-4 col-sm-3 btn-default text-center dashboar_box" href="<?php echo site_url("$module->module_id");?>">
                        <i class="fa fa-<?php echo $module->class;?>"></i>
                        <!--<img src="<?php echo base_url().'images/menubar/'.$module->module_id.'.png';?>" border="0" alt="Menubar Image" />-->
                        <?php echo $this->lang->line("module_".$module->module_id) ?>
                        <span><?php echo $this->lang->line('module_'.$module->module_id.'_desc');?></span>
                    </a>
                     <!--- <span><?php echo $this->lang->line('module_'.$module->module_id.'_desc');?></span>-->                
                <?php
                }
                ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-6">
        <div class="box ui-draggable ui-droppable">
            <div class="box-header">
                <div class="box-name ui-draggable-handle">
                    <i class="fa fa-search"></i>
                    <span>Sales Chart</span>
                </div>
                <div class="box-icons">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="expand-link">
                        <i class="fa fa-expand"></i>
                    </a>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
                <div class="no-move"></div>
            </div>
            <div class="box-content">
                
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6">
        <div class="box ui-draggable ui-droppable">
            <div class="box-header">
                <div class="box-name ui-draggable-handle">
                    <i class="fa fa-search"></i>
                    <span>Cost Chart</span>
                </div>
                <div class="box-icons">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="expand-link">
                        <i class="fa fa-expand"></i>
                    </a>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
                <div class="no-move"></div>
            </div>
            <div class="box-content">
                
            </div>
        </div>
    </div>
</div>

<div id="home_module_list">
	
</div>
<?php $this->load->view("partial/footer"); ?>