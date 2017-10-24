<?php 
class DiaChi{
	const COLLECTION = 'diachi';
	private $_mongo;
	private $_collection;
	public $id = '';
	public $ten = '';
	public $id_parent = '';
	public $ghichu = '';
	public $date_post = '';

	public function __construct(){
		$this->_mongo = DBConnect::init();
		$this->_collection = $this->_mongo->getCollection(DiaChi::COLLECTION);
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
		return $this->_collection->find($query)->sort(array('ten' => -1));	
	}

	public function get_child_list(){
		$query = array('id_parent' => new MongoId($this->id_parent));
		return $this->_collection->find($query);
	}

	public function insert(){
		$query = array('ten' => $this->ten,
						'id_parent' => $this->id_parent ? new MongoId($this->id_parent) : '',
						'ghichu' => $this->ghichu,
						'date_post' => new MongoDate());
		return $this->_collection->insert($query);
	}

	public function edit(){
		$query = array('$set' => array('ten' => $this->ten,
						'id_parent' => $this->id_parent ? new MongoId($this->id_parent) : '',
						'ghichu' => $this->ghichu,
						'date_post' => new MongoDate()));
		$condition = array('_id' => new MongoId($this->id));
		return $this->_collection->update($condition, $query);
	}

	public function delete(){
		$query = array('_id' => new MongoId($this->id));
		return $this->_collection->remove($query);
	}

	public function get_diachi($arr){
		$str_diachi = '';
		foreach ($arr as $key => $value) {
			if($key < 3 && $value){
				$this->id = $value; $dc = $this->get_one();
				$str_diachi .= $dc['ten'] . ', ';
			} else {
				$str_diachi .= $value;
			}
			
		}
		return $str_diachi;
	}

	public function check_child(){
		$query = array('id_parent' => new MongoId($this->id));
		$field = array('_id' => true);
		$result = $this->_collection->findOne($query, $field);
		if(isset($result['_id']) && $result['_id']) return true;
		else return false;
	}

	public function check_exists(){
		$query = array('ten' =>$this->ten, 'id_parent' => $this->id_parent ? new MongoId($this->id_parent) : '');
		$field = array('_id' => true);
		$result = $this->_collection->findOne($query, $field);
		if(isset($result['_id']) && $result['_id']) return true;
		else return false;
	}

}