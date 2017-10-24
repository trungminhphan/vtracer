<?php 
class Thuoc{
	const COLLECTION = 'thuoc';
	private $_mongo;
	private $_collection;

	public $id = '';
	public $ten = '';
	public $thoigiancachly = 0; //Don vi tinh ngay
	public $ghichu = '';
	public $date_post = '';

	public function __construct(){
		$this->_mongo = DBConnect::init();
		$this->_collection = $this->_mongo->getCollection(Thuoc::COLLECTION);
	}

	public function get_all_list(){
		return $this->_collection->find();
	}

	public function get_one(){
		$query = array('_id' => new MongoId($this->id));
		return $this->_collection->findOne($query);
	}

	public function insert(){
		$query = array('ten' => $this->ten, 'thoigiancachly'=>intval($this->thoigiancachly), 'ghichu' => $this->ghichu, 'date_post'=> new MongoDate());
		return $this->_collection->insert($query);
	}

	public function edit(){
		$query = array('$set' => array('ten' => $this->ten, 'thoigiancachly'=>intval($this->thoigiancachly), 'ghichu' => $this->ghichu, 'date_post'=> new MongoDate()));
		$condition = array('_id' => new MongoId($this->id));
		return $this->_collection->update($condition, $query);
	}

	public function edit_except_name(){
		$query = array('$set' => array('thoigiancachly'=>intval($this->thoigiancachly),'ghichu' => $this->ghichu, 'date_post'=> new MongoDate()));
		$condition = array('_id' => new MongoId($this->id));
		return $this->_collection->update($condition, $query);
	}

	public function delete(){
		$query = array('_id' => new MongoId($this->id));
		return $this->_collection->remove($query);
	}

	public function check_exists(){
		$query = array('ten' => $this->ten);
		$field = array('_id' => true);
		$result = $this->_collection->findOne($query);
		if(isset($result['_id']) && $result['_id']) return true;
		else return false;
	}

}
?>