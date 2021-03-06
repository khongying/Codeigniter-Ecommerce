<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Product_m extends CI_Model {

	function __construct() {
		parent::__construct();

	}
	public function get_product_all()
	{
		
		$this->db->select('*');
		$this->db->where('status_product',1);
		$query = $this->db->get('product');
		$product = $query->result();
		return $product;
	}

	public function get_product($id){
		$this->db->select('*');
		$this->db->where('id',$id);
		$query = $this->db->get('product');
		$product = $query->result();
		return $product;
	}
	
	public function get_product_type($type_product){
		$this->db->select('*');
		$this->db->where('type_product',$type_product);
		$this->db->where('status_product',1);
		$query = $this->db->get('product');
		$product = $query->result();
		return $product;
	}

	public function get_product_qty($code){
		$this->db->select('total');
		$this->db->where('code',$code);
		$query = $this->db->get('product');
		$product = $query->result();
		return $product;	
	}


}
