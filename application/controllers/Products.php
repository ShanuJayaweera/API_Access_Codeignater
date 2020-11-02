<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
        public function __construct(){
                parent:: __construct();
                
        }
            
	public function index(){
                
                $object = $this -> access_api();
                $json_arr = json_decode($object, true);
                $data = array();
                foreach ($json_arr as $item){
                        $obj = array();
                        $obj['Id'] = $item['Id'];
                        $obj['Name'] = $item['Name'];
                        $obj['CostPrice'] = $item['CostPrice'];
                        $obj['SalePrice'] = $item['SalePrice'];
                        array_push($data, $obj);
                }
                $data_obj['obj'] = $data;
                $this->load->view('ProductsView', $data_obj);
        }

        public function access_api(){
		$ch = curl_init();
		$url = "https://api.eposnowhq.com/api/v4/product/";
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$headers = ['Content-Type: application/json', 'Authorization: Basic NDVLRFVRQ0JSUEowSzFLNkJIQUYyV0FUSVNMNzE2NTM6RFhKWVZCTEpTUURUVzlMSloxMkowSDNYSDNEVzlPTlY='];
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$server_output = curl_exec($ch);
		curl_close($ch);
		return $server_output;
	}

        
}
?>
