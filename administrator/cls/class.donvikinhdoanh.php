<?php
class DonViKinhDoanh {
	const COLLECTION = 'donvikinhdoanh';
	private $_mongo;
	private $_collection;

	public $id = '';
	public $ten = '';
	public $nguoidaidien = '';
	public $diachi = ''; //array(diachi1, $diachi2, $diachi3, diachi4)
	public $dienthoai = '';
	public $email='';
	public $website='';
	public $hinhanh = array(); //array(filename, aliasname) hinh  anh Don vi kinh doanh.
	public $ghichu='';
	public $longitude='';
	public $latitude='';
	public $date_post = '';
	
	public function __construct(){
		$this->_mongo = DBConnect::init();
		$this->_collection = $this->_mongo->getCollection(DonViKinhDoanh::COLLECTION);
	}
	public function get_all_list(){
		return $this->_collection->find();
	}
	public function get_one(){
		$query = array('_id' => new MongoId($this->id));
		return $this->_collection->findOne($query);
	}
	public function get_list_condition($condition){
		return $this->_collection->find($condition);	
	}
	public function get_list_limit($limit){
		return $this->_collection->find()->limit($limit);
	}
	public function insert(){
		$query = array('ten' => $this->ten,
						'nguoidaidien'=>$this->nguoidaidien,
						'diachi'=>$this->diachi,
						'dienthoai'=>$this->dienthoai,
						'email'=>$this->email,
						'website'=>$this->website,
						'hinhanh' => $this->hinhanh,
						'ghichu'=>$this->ghichu,
						'longitude'=>$this->longitude,
						'latitude'=>$this->latitude,
						'date_post' => new MongoDate());
		return $this->_collection->insert($query);
	}
	public function edit(){
		$condition = array('_id' => new MongoId($this->id));
		$query= array('$set' => array(
					'ten' 			=> $this->ten,
					'nguoidaidien'=>$this->nguoidaidien,
					'diachi'		=>$this->diachi,
					'dienthoai'		=>$this->dienthoai,
					'email'			=>$this->email,
					'website'		=>$this->website,
					'hinhanh'		=> $this->hinhanh,
					'ghichu'		=>$this->ghichu,
					'longitude'		=>$this->longitude,
					'latitude'		=>$this->latitude,
					'date_post' => new MongoDate()));
		return $this->_collection->update($condition, $query);
	}

	public function edit_exept_name(){
		$condition = array('_id' => new MongoId($this->id));
		$query= array('$set' => array(
					'nguoidaidien'=>$this->nguoidaidien,
					'diachi'		=>$this->diachi,
					'dienthoai'		=>$this->dienthoai,
					'email'			=>$this->email,
					'website'		=>$this->website,
					'hinhanh'		=> $this->hinhanh,
					'ghichu'		=>$this->ghichu,
					'longitude'		=>$this->longitude,
					'latitude'		=>$this->latitude,
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