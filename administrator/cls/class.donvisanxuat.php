<?php
class DonViSanXuat {
	const COLLECTION = 'donvisanxuat';
	private $_mongodb;
	private $_collection;

	public $id = '';
	public $ten = '';
	public $diachi=array();
	public $nguoidaidien='';
	public $dienthoai='';
	public $email='';
	public $website='';
	public $dientich='';
	public $id_loainongsan= array();
	public $longitude='';
	public $latitude='';
	public $id_parent='';
	public $ghichu='';
	public $date_post = '';

	public function __construct(){
		$this->_mongodb = DBConnect::init();
		$this->_collection = $this->_mongodb->getCollection(DonViSanXuat::COLLECTION);
	}

	public function get_all_list(){
		return $this->_collection->find();
	}

	public function get_one(){
		$query = array('_id' => new MongoId($this->id));
		return $this->_collection->findOne($query);
	}

	public function get_list_root_limit($limit){
		$query = array('$or' => array(array('id_parent' => ''), array('id_parent' => array('$exists' => false))));
		return $this->_collection->find($query)->limit($limit);
	}

	public function get_list_root(){
		$query = array('$or' => array(array('id_parent' => ''), array('id_parent' => array('$exists' => false))));
		return $this->_collection->find($query);
	}

	public function get_child_list(){
		$query = array('id_parent' => new MongoId($this->id_parent));
		return $this->_collection->find($query);
	}

	public function insert(){
		$query = array('ten' => $this->ten,
					'diachi' => $this->diachi,
					'nguoidaidien'=>$this->nguoidaidien,
					'dienthoai'=>$this->dienthoai,
					'email'=>$this->email,
					'website'=>$this->website,
					'dientich'=>$this->dientich,
					'id_loainongsan'=>$this->id_loainongsan,
					'longitude'=>$this->longitude,
					'latitude'=>$this->latitude,
					'id_parent' => $this->id_parent ? new MongoId($this->id_parent) : '',
					'hinhanh' => $this->hinhanh,
					'ghichu'=>$this->ghichu,
					'date_post' => new MongoDate());
		return $this->_collection->insert($query);
	}

	public function edit(){
		$condition = array('_id' => new MongoId($this->id));
		$query = array('$set' => array('ten' => $this->ten,
					'diachi' => $this->diachi,
					'nguoidaidien'=>$this->nguoidaidien,
					'dienthoai'=>$this->dienthoai,
					'email'=>$this->email,
					'website'=>$this->website,
					'dientich'=>$this->dientich,
					'id_loainongsan'=>$this->id_loainongsan,
					'longitude'=>$this->longitude,
					'latitude'=>$this->latitude,
					'id_parent' => $this->parent_id ? new MongoId($this->id_parent) : '',
					'hinhanh' => $this->hinhanh,
					'ghichu'=>$this->ghichu,
					'date_post' => new MongoDate()));
		return $this->_collection->update($condition, $query);
	}
	public function edit_exept_name(){
		$condition = array('_id' => new MongoId($this->id));
		$query = array('$set' => array('diachi' => $this->diachi,
					'nguoidaidien'=>$this->nguoidaidien,
					'sodienthoai'=>$this->sodienthoai,
					'email'=>$this->email,
					'website'=>$this->website,
					'dientich'=>$this->dientich,
					'id_loainognsan'=>$this->id_loainongsan,
					'longitude'=>$this->longitude,
					'latitude'=>$this->latitude,
					'parent_id' => $this->parent_id ? new MongoId($this->parent_id) : '',
					'hinhanh' => $this->hinhanh,
					'ghichu'=>$this->ghichu,
					'date_post' => new MongoDate()));
		return $this->_collection->update($condition, $query);
	}

	public function delete(){
		$query = array('_id' => new MongoId($this->id));
		return $this->_collection->remove($query);
	}

	public function check_exists_name(){
		$query = array('ten' => $this->ten);
		$field = array('_id' => true);
		$result = $this->_collection->findOne($query, $field);
		if($result['_id']) return true;
		else return false;
	}
}
?>