<?php
abstract class Report extends Model 
{
	function __construct()
	{
		parent::Model();

		//Make sure the report is not cached by the browser
		$this->output->set_header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate");
		$this->output->set_header("Cache-Control: post-check=0, pre-check=0", false);
		$this->output->set_header("Pragma: no-cache");
		
		//Create our temp tables to work with the data in our report
		$this->Sale->create_sales_items_temp_table();
		$this->Sale->create_sales_items_temp_table_modify();
		$this->Receiving->create_receivings_items_temp_table();
	}
	
	//Returns the column names used for the report
	public abstract function getDataColumns();
	
	//Returns all the data to be populated into the report
	public abstract function getData(array $inputs);
	
	//Returns key=>value pairing of summary data for the report
	public abstract function getSummaryData(array $inputs);
}
?>