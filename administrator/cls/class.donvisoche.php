<?php
class DonViSoChe {
	const COLLECTION = 'donvisoche';
	private $_mongodb;
	private $_collection;

	public $id = '';
	public $ten = '';
	public $diachi=array();
	public $nguoidaidien='';
	public $dienthoai='';
	public $email='';
	public $website='';
	public $longitude='';
	public $latitude='';
	public $ghichu='';
	public $date_post = '';

	public function __construct(){
		$this->_mongodb = DBConnect::init();
		$this->_collection = $this->_mongodb->getCollection(DonViSoChe::COLLECTION);
	}

	public function get_all_list(){
		return $this->_collection->find();
	}

	public function get_one(){
		$query = array('_id' => new MongoId($this->id));
		return $this->_collection->findOne($query);
	}

	public function insert(){
		$query = array('ten' => $this->ten,
					'diachi' => $this->diachi,
					'nguoidaidien'=>$this->nguoidaidien,
					'dienthoai'=>$this->dienthoai,
					'email'=>$this->email,
					'website'=>$this->website,
					'longitude'=>$this->longitude,
					'latitude'=>$this->latitude,
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
					'longitude'=>$this->longitude,
					'latitude'=>$this->latitude,
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
					'longitude'=>$this->longitude,
					'latitude'=>$this->latitude,
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
		$query = array('ten' =>$this->ten);
		$field = array('_id' => true);
		$result = $this->_collection->findOne($query, $field);
		if($result['_id']) return true;
		else return false;
	}
}
?>