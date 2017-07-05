<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
		$this->load->helper('directory');
		$this->load->helper('url');
		$this->load->model('data_model');
	        $this->load->model('chart_model', 'chart');
        }

	public function index()
	{
		$this->load->view('welcome');
	}

	public function viewDirectory()
	{

		$data['files'] = directory_map('./vendors/', FALSE, TRUE);
		$this->load->view('directory', $data);
	}

	public function exportCSV()
	{
		$this->load->dbutil();
		$this->load->database();
		$q = $this->db->get('tbl_data');
		foreach ($q->result() as $row)
            	{
		        $data['records'][] = $row;
            	}   
		//var_dump($data); exit;
		$this->load->view('exportcsv',$data);
	}

	public function downloadCSV()
	{
		$this->load->dbutil();
		$this->load->helper('file');
		$this->load->helper('download');
		$delimiter = ",";
		$newline = "\r\n";
		$filename = "filename_you_wish.csv";
		$query = "SELECT * FROM tbl_data";
		$result = $this->db->query($query);
		$data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
		force_download($filename, $data);
	}

	public function downloadArrayToCSV()
	{
		$array = array(
			array('Last Name', 'First Name', 'Gender'),
			array('Furtado', 'Nelly', 'female'),
			array('Twain', 'Shania', 'female'),
			array('Farmer', 'Mylene', 'female')
		);
		 
		$this->load->helper('csv');
		array_to_csv($array, 'toto.csv');
	}

	public function generateGraph()
	{
		$data['year_graph'] = $this->data_model->get_data();
		//var_dump($data); exit;
    		$this->load->view('graph',$data);
	}


	public function generateChart() {
		$results = $this->chart->get_chart_data();
		$data['chart_data'] = $results['chart_data'];
		$data['min_year'] = $results['min_year'];
		$data['max_year'] = $results['max_year'];
		$this->load->view('chart', $data);
    	}


	public function sendSms() {
		$params = array('username' => '', 'hash' => 'apidemo123', 'apiKey' => '');
		$this->load->library('textlocal', $params);
		try {
			$numbers = array(919090909090);
			$sender = 'TXTLCL';
			$message = 'This is final test message from CI';
			$result = $this->textlocal->sendSms($numbers, $message, $sender);
		    	print_r($result);
		} catch (Exception $e) {
		    die('Error: ' . $e->getMessage());
		}
		$this->load->view('sendsms');
    	}
}
