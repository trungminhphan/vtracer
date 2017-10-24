<?php
class SanPham{
	const COLLECTION = 'sanpham';
	private $_mongo;
	private $_collection;

	public $id = '';
	public $matrangtrai = ''; //F - uniquie(11)
	public $masanpham = ''; //P-uniquie(11)
	public $ten = '';
	public $ngaygieo = '';
	public $dientich = 0; //tinh bang met vuông
	public $ngaythuhoach = '';
	public $sanluong = '';//don vi tinh kg
	public $quicachdonggoi = '';
	public $ngaydonggoi = '';
	public $hansudung = '';
	public $huongdansudung = '';
	public $huongdanbaoquan = '';
	public $id_loainongsan = '';
	public $id_donvisanxuat = '';
	public $id_donvisoche = '';
	public $id_donvikinhdoanh = array(); //array(['id_donvikinhdoanh'])
	public $vanchuyen = array(); //array(loaixe, bienso, diemgiaohang, nguoigiao, diemnhanhang, nguoinhan)
	public $phunthuoc = array(); //array(id_user, id_thuoc, lieuluong, phuongphap, thoigiancachly, ngaythuchien, hinhanh)
	public $bonphan = array(); //array(id_user, id_dm_phanbon, lieuluong, phuongphap, thoigiancachly, ngaythuchien, hinhanh)
	public $hinhanh = array(); //array(filename, aliasname)
	public $ghichu = '';
	public $tinhtrang = 0; //IN QRCODE  0-khong cho tra cuu, 1-Cho tra cứu sản phẩm, 2-huy khong cho xuat
	public $kiemduyet = array();//IN QRCODE array(id_user, tinhtrang (0,1), ngaykiemduyet)
	public $id_user = ''; //tai khoan đang ky thong tin
	public $id_user_update = ''; //tai khoan cap nhat thong tin
	public $date_post = '';
	public $date_change = '';

	public function __construct(){
		$this->_mongo = DBConnect::init();
		$this->_collection = $this->_mongo->getCollection(SanPham::COLLECTION);
	}

	public function get_all_list(){
		return $this->_collection->find();
	}

	public function get_list_limit($limit){
		return $this->_collection->find()->limit($limit);
	}

	public function get_one(){
		$query = array('_id' => new MongoId($this->id));
		return $this->_collection->findOne($query);
	}

	public function get_list_moigieo(){
		$query = array('tinhtrang' => 0);
		return $this->_collection->find($query);
	}

	public function insert(){
		$query = array(
			'matrangtrai' => $this->matrangtrai,
			'masanpham' => $this->masanpham,
			'ten' => $this->ten,
			'ngaygieo' => $this->ngaygieo,
			'dientich' => intval($this->dientich),
			'ngaydukienthuhoach' => $this->ngaydukienthuhoach,
			'ngaythuhoach' => $this->ngaythuhoach,
			'sanluong' => intval($this->sanluong),
			'quicachdonggoi' => $this->quicachdonggoi,
			'ngaydonggoi' => $this->ngaydonggoi,
			'hansudung' => $this->hansudung,
			'huongdansudung' => $this->huongdansudung,
			'huongdanbaoquan' => $this->huongdanbaoquan,
			'id_loainongsan' => $this->id_loainongsan ? new MongoId($this->id_loainongsan) : '',
			'id_donvisanxuat' => $this->id_donvisanxuat ? new MongoId($this->id_donvisanxuat) : '',
			'id_donvisoche' => $this->id_donvisoche ? new MongoId($this->id_donvisoche) : '',
			'id_donvikinhdoanh'	=> $this->id_donvikinhdoanh,
			'vanchuyen' =>array(),
			'phunthuoc' => array(),
			'bonphan' => array(),
			'hinhanh' => $this->hinhanh,
			'ghichu' => $this->ghichu,
			'tinhtrang' => 0,
			'kiemduyet' => array(),
			'id_user' => new MongoId($this->id_user),
			'id_user_update' => new MongoId($this->id_user_update),
			'date_post' => new MongoDate(),
			'date_change' => new MongoDate()
		);
		return $this->_collection->insert($query);
	}

	public function edit(){
		$query = array('$set' => array(
			//'matrangtrai' => $this->matrangtrai,
			//'masanpham' => $this->masanpham,
			'ten' => $this->ten,
			'ngaygieo' => $this->ngaygieo,
			'dientich' => intval($this->dientich),
			'ngaydukienthuhoach' => $this->ngaydukienthuhoach,
			'ngaythuhoach' => $this->ngaythuhoach,
			'sanluong' => intval($this->sanluong),
			'quicachdonggoi' => $this->quicachdonggoi,
			'ngaydonggoi' => $this->ngaydonggoi,
			'hansudung' => $this->hansudung,
			'huongdansudung' => $this->huongdansudung,
			'huongdanbaoquan' => $this->huongdanbaoquan,
			'id_loainongsan' => $this->id_loainongsan ? new MongoId($this->id_loainongsan) : '',
			'id_donvisanxuat' => $this->id_donvisanxuat ? new MongoId($this->id_donvisanxuat) : '',
			'id_donvisoche' => $this->id_donvisoche ? new MongoId($this->id_donvisoche) : '',
			'id_donvikinhdoanh'	=> $this->id_donvikinhdoanh,
			//'vanchuyen' =>array(),
			//'phunthuoc' => array(),
			//'bonphan' => array(),
			'hinhanh' => $this->hinhanh,
			'ghichu' => $this->ghichu,
			//'tinhtrang' => 0,
			//'kiemduyet' => array(),
			'id_user' => new MongoId($this->id_user),
			'id_user_update' => new MongoId($this->id_user_update),
			//'date_post' => new MongoDate(),
			'date_change' => new MongoDate()
		));
		$condition = array('_id' => new MongoId($this->id));
		return $this->_collection->update($condition, $query);
	}

	public function push_bonphan(){
		$query = array('$push' => array('bonphan' => $this->bonphan));
		$condition = array('_id' => new MongoId($this->id));
		return $this->_collection->update($condition, $query);
	}

	public function push_phunthuoc(){
		$query = array('$push' => array('phunthuoc' => $this->phunthuoc));
		$condition = array('_id' => new MongoId($this->id));
		return $this->_collection->update($condition, $query);
	}

	public function delete(){
		$query = array('_id' => new MongoId($this->id));
		return $this->_collection->remove($query);
	}
}

?>