<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Import_excel extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct(){
        parent::__construct();
		$this->load->model('Import_excel_model', 'excela');

        		
		// $this->load->helper('captcha');

    }

	public function haripertama()	{
		$this->load->library('csvreader');
        // $result =   $this->csvreader->parse_file('/media/nafism05/hdd1/PENTING/Projekku/TVKU/wisuda 59/nokursiwisudatgl2627/KURSI_26_2003.csv');
        $result =   $this->csvreader->parse_file('kursi_wisuda61.csv');

        // print_r($result);
        $data['csvData'] =  $result;
        $this->load->view('view_csv', $data);

        $count = 0;
        foreach($result as $field){
        	$this->excela->insert($field);
        	$count++;
        }



        echo $count;
	}

	public function harikedua()	{
		$this->load->library('csvreader');
        $result =   $this->csvreader->parse_file('/media/nafism05/hdd1/PENTING/Projekku/TVKU/wisuda 59/nokursiwisudatgl2627/KURSI_27_2003.csv');
        // $result =   $this->csvreader->parse_file('Test.csv');

        // print_r($result);
        $data['csvData'] =  $result;
        $this->load->view('view_csv', $data);

        $count = 0;
        foreach($result as $field){
        	$this->excela->insert_harikedua($field);
        	$count++;
        }



        echo $count;
	}

    public function wis61() {
        $this->load->library('csvreader');
        $result =   $this->csvreader->parse_file('/opt/lampp/htdocs/ci_import_wisuda/application/controllers/kursi_wisuda61.csv');
        // $result =   $this->csvreader->parse_file('Test.csv');

        // print_r($result);
        

        // $data['csvData'] =  $result;
        // $this->load->view('view_csv', $data);

        // $count = 0;
        foreach($result as $field){
            $this->excela->insert_wsd61($field);
            // $count++;
        }



        // echo $count;
    }
}
