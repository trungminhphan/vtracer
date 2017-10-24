<?php
class LoaiNongSan {
	const COLLECTION = 'loainongsan';
	private $_mongo;
	private $_collection;

	public $id = '';
	public $ten = '';
	public $id_parent = '';
	public $dinhkem = array(); //array(filename, aliasname);file đính kèm pdf qui trinh san xuat.
	public $hinhanh = array(); //array(filename, aliasname) hinh  anh loai nong san.
	public $date_post = '';
	
	public function __construct(){
		$this->_mongo = DBConnect::init();
		$this->_collection = $this->_mongo->getCollection(LoaiNongSan::COLLECTION);
	}

	public function get_all_list(){
		return $this->_collection->find();
	}

	public function get_one(){
		$query = array('_id' => new MongoId($this->id));
		return $this->_collection->findOne($query);
	}

	public function get_roots(){
		//$query = array('id_parent' => '');
		$query = array('$or' => array(array('id_parent' => ''), array('id_parent' => array('$exists' => false))));
		return $this->_collection->find($query);	
	}

	public function get_loainongsan($arr){
		$arr_loainongsan = array();
		if(is_array($arr) && count($arr) > 0){
			foreach ($arr as $key => $value) {
				$this->id = $value; $ns = $this->get_one();
				if($ns) array_push($arr_loainongsan, $ns['ten']);
			}
		}

		return implode(", ", $arr_loainongsan);
	}

	public function get_child_list(){
		$query = array('id_parent' => new MongoId($this->id_parent));
		return $this->_collection->find($query);
	}

	public function insert(){
		$query = array('ten' => $this->ten,
						'id_parent' => $this->id_parent ? new MongoId($this->id_parent) : '',
						'dinhkem' => $this->dinhkem,
						'hinhanh' => $this->hinhanh,
						'date_post' => new MongoDate());
		return $this->_collection->insert($query);
	}

	public function edit(){
		$condition = array('_id' => new MongoId($this->id));
		$query= array('$set' => array(
					'ten' => $this->ten,
					'id_parent' => $this->id_parent ? new MongoId($this->id_parent) : '',
					'dinhkem' => $this->dinhkem,
					'hinhanh' => $this->hinhanh,
					'date_post' => new MongoDate()));
		return $this->_collection->update($condition, $query);
	}

	public function edit_exept_name(){
		$condition = array('_id' => new MongoId($this->id));
		$query= array('$set' => array(
					'id_parent' => $this->id_parent ? new MongoId($this->id_parent) : '',
					'dinhkem' => $this->dinhkem,
					'hinhanh' => $this->hinhanh,
					'date_post' => new MongoDate()));
		return $this->_collection->update($condition, $query);
	}

	public function delete(){
		$query = array('_id' => new MongoId($this->id));
		return $this->_collection->remove($query);
	}

	public function check_child(){
		$query = array('id_parent' => new MongoId($this->id_parent));
		$field = array('_id' => true);
		$result = $this->_collection->findOne($query, $field);
		if($result['_id']) return true;
		else return false;
	}

	public function check_exists_name(){
		//$query = array('ten' => new MongoRegex('/'.$this->ten .'/i'));
		$query = array('ten' => $this->ten);
		$field = array('_id' => true);
		$result = $this->_collection->findOne($query, $field);
		if($result['_id']) return true;
		else return false;
	}
}
?>