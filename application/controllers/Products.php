<?php
header('Access-Control-Allow-Origin: *');

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Products extends REST_Controller {

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
	public function index_get()
	{
		$this->load->helper('shopify');
		$shopify = getShopify();

		$data = json_decode(file_get_contents('php://input'), true);
		var_dump($data["operacion"]);

		// $productArray = [
		// 	"title" => "Burton Custom Freestyle 151",
		// 	"body_html" => "<strong>Good snowboard!</strong>",
		// 	"vendor" => "Burton",
		// 	"product_type" => "Snowboard",
		// 	"published" => false
		// ];

		// $data = $shopify->Product->post($productArray);
	}

	public function index_post() {
		$this->load->helper('shopify');
		$shopify = getShopify();

		$data = file_get_contents("php://input");

		$data_array = json_decode($data, true);

		// if(isset($data_array["product"]["id"])) {
			$response = $shopify->Product()->post($data_array["product"]);
			// $response = $shopify->Product($data_array["product"]["id"])->get();
			$this->response(json_encode($response), REST_Controller::HTTP_OK);
		// }
	}

	public function order_post() {
		$this->load->helper('shopify');
		$shopify = getShopify();

		$data = file_get_contents("php://input");
		$data_array = json_decode($data, true);
		for($i = 0; $i < count($data_array["order"]["line_items"]); $i++) {
			if($data_array["order"]["line_items"][$i]["vendor"] == "Bundle" && $data_array["order"]["fulfillment_status"] == "fulfilled") {
				$response = $shopify->Product->delete($data_array["order"]["line_items"][$i]["product_id"]);
			}
		}
	}
}
