<?php
require_once ("secure_area.php");
class salescredit extends Secure_area
{
	function __construct()
	{
		parent::__construct('salescredit');
		$this->load->helper('report');
	}

	function index()
	{
		$data = $this->_get_common_report_data();
		$data['specific_input_name'] = $this->lang->line('reports_customer');
		
		$customers = array();
		foreach($this->Customer->get_all()->result() as $customer)
		{
			$customers[$customer->person_id] = $customer->first_name .' '.$customer->last_name;
		}
		$data['specific_input_data'] = $customers;
		$this->load->view("salescredit/specific_input",$data);	
	}
	
	function _get_common_report_data()
	{
		$data = array();
		$data['report_date_range_simple'] = get_simple_date_ranges();
		$data['months'] = get_months();
		$data['days'] = get_days();
		$data['years'] = get_years();
		$data['selected_month']=date('n');
		$data['selected_day']=date('d');
		$data['selected_year']=date('Y');	
	
		return $data;
	}
	
	//Input for reports that require only a date range and an export to excel. (see routes.php to see that all summary reports route here)
	function date_input_excel_export()
	{
		$data = $this->_get_common_report_data();
		$this->load->view("reports/date_input_excel_export",$data);	
	}
	
	function specific_customer_input()
	{
		$data = $this->_get_common_report_data();
		$data['specific_input_name'] = $this->lang->line('reports_customer');
		
		$customers = array();
		foreach($this->Customer->get_all()->result() as $customer)
		{
			$customers[$customer->person_id] = $customer->first_name .' '.$customer->last_name;
		}
		$data['specific_input_data'] = $customers;
		$this->load->view("salescredit/specific_input",$data);	
	}
	
	function specific_customer($start_date, $end_date, $customer_id, $sale_type, $export_excel=0)
	//function specific_customer()
	{
		
	/*	
		$start_date = '2011-04-30' ;
		$end_date = '2011-04-30'; 
		$customer_id = '2'; 
		$sale_type = 'all' ;
		$export_excel= '0' ;*/
		$this->load->model('specific_customer_salescredit');
		$model = $this->specific_customer_salescredit;
		
		$headers = $model->getDataColumns();
		$report_data = $model->getData(array('start_date'=>$start_date, 'end_date'=>$end_date, 'customer_id' =>$customer_id, 'sale_type' => $sale_type));
		
		$summary_data = array();
		$details_data = array();
		
		$editdata = array(
              'name'        => 'amount',
              'id'          => 'amount',
              'value'       => '',
              'maxlength'   => '10',
              'size'        => '5',
        );
        $databutton = array(
			'name'=>'generate_report',
			'id'=>'generate_report',
			'content'=>$this->lang->line('common_submit'),
			'class'=>'submit_button',
        	'type' => 'submit'
		);
		foreach($report_data['summary'] as $key=>$row)
		{
			$a = $row['sale_id'];
			//$summary_data[] = array(anchor('sales/edit/'.$row['sale_id'], ''.$row['sale_id'], array('target' => '_blank')), $row['sale_date'], $row['items_purchased'], $row['employee_name'], to_currency($row['subtotal']), to_currency($row['total']), to_currency($row['tax']),to_currency($row['profit']), $row['payment_type'], $row['comment']);
			$summary_data[] = array(anchor('salescredit/edit_sales/'.$row['sale_id'], ''.$row['sale_id']), $row['sale_date'], $row['items_purchased'], $row['employee_name'], to_currency($row['subtotal']), to_currency($row['total']), $row['payment_type'], $row['comment'], form_open("sales/edit/$a/$start_date/$end_date/$customer_id/$sale_type/0").form_input($editdata). form_button($databutton).form_close());
			
			foreach($report_data['details'][$key] as $drow)
			{
				//$details_data[$key][] = array($drow['name'], $drow['category'], $drow['serialnumber'], $drow['description'], $drow['quantity_purchased'], to_currency($drow['subtotal']), to_currency($drow['total']), to_currency($drow['tax']),to_currency($drow['profit']), $drow['discount_percent'].'%');
				$details_data[$key][] = array($drow['name'], $drow['category'], $drow['serialnumber'], $drow['quantity_purchased'], to_currency($drow['subtotal']), to_currency($drow['total']), $drow['discount_percent'].'%');
			}
		}

		$customer_info = $this->Customer->get_info($customer_id);
		$data = array(
			"title" => $this->lang->line('salescredit_customer').' '.$customer_info->first_name .' '. $customer_info->last_name,
			"subtitle" => date('m/d/Y', strtotime($start_date)) .'-'.date('m/d/Y', strtotime($end_date)),
			"headers" => $model->getDataColumns(),
			"summary_data" => $summary_data,
			"details_data" => $details_data,
			"overall_summary_data" => $model->getSummaryData(array('start_date'=>$start_date, 'end_date'=>$end_date,'customer_id' =>$customer_id, 'sale_type' => $sale_type)),
			"export_excel" => $export_excel
		);

		$this->load->view("salescredit/tabular_details",$data);
	}
	
	function edit_item($saleid,$start_date, $end_date, $customer_id, $sale_type, $export_excel=0)
	{
		
		$this->load->model('specific_customer_salescredit');
		$model = $this->specific_customer_salescredit;
		
		$headers = $model->getDataColumns();
		$report_data = $model->getData(array('start_date'=>$start_date, 'end_date'=>$end_date, 'customer_id' =>$customer_id, 'sale_type' => $sale_type));
		
		$summary_data = array();
		$details_data = array();
		
		$editdata = array(
              'name'        => 'amount',
              'id'          => 'amount',
              'value'       => '',
              'maxlength'   => '10',
              'size'        => '5',
        );
        $databutton = array(
			'name'=>'generate_report',
			'id'=>'generate_report',
			'content'=>$this->lang->line('common_submit'),
			'class'=>'submit_button',
        	'type' => 'submit'
		);
		foreach($report_data['summary'] as $key=>$row)
		{
			$a = $row['sale_id'];
			//$summary_data[] = array(anchor('sales/edit/'.$row['sale_id'], ''.$row['sale_id'], array('target' => '_blank')), $row['sale_date'], $row['items_purchased'], $row['employee_name'], to_currency($row['subtotal']), to_currency($row['total']), to_currency($row['tax']),to_currency($row['profit']), $row['payment_type'], $row['comment']);
			$summary_data[] = array(anchor('salescredit/edit_sales/'.$row['sale_id'], ''.$row['sale_id']), $row['sale_date'], $row['items_purchased'], $row['employee_name'], to_currency($row['subtotal']), to_currency($row['total']), $row['payment_type'], $row['comment'], form_open("sales/edit/$a/$start_date/$end_date/$customer_id/$sale_type/0").form_input($editdata). form_button($databutton).form_close());
			
			foreach($report_data['details'][$key] as $drow)
			{
				//$details_data[$key][] = array($drow['name'], $drow['category'], $drow['serialnumber'], $drow['description'], $drow['quantity_purchased'], to_currency($drow['subtotal']), to_currency($drow['total']), to_currency($drow['tax']),to_currency($drow['profit']), $drow['discount_percent'].'%');
				$details_data[$key][] = array($drow['name'], $drow['category'], $drow['serialnumber'], $drow['quantity_purchased'], to_currency($drow['subtotal']), to_currency($drow['total']), $drow['discount_percent'].'%');
			}
		}

		$customer_info = $this->Customer->get_info($customer_id);
		$data = array(
			"title" => $this->lang->line('salescredit_customer').' '.$customer_info->first_name .' '. $customer_info->last_name,
			"subtitle" => date('m/d/Y', strtotime($start_date)) .'-'.date('m/d/Y', strtotime($end_date)),
			"headers" => $model->getDataColumns(),
			"summary_data" => $summary_data,
			"details_data" => $details_data,
			"overall_summary_data" => $model->getSummaryData(array('start_date'=>$start_date, 'end_date'=>$end_date,'customer_id' =>$customer_id, 'sale_type' => $sale_type)),
			"export_excel" => $export_excel
		);

		$this->load->view("salescredit/tabular_details",$data);
	}
}
?>