
/** diachi indexes **/
db.getCollection("diachi").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** donvikinhdoanh indexes **/
db.getCollection("donvikinhdoanh").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** donvisanxuat indexes **/
db.getCollection("donvisanxuat").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** loainongsan indexes **/
db.getCollection("loainongsan").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** sanpham indexes **/
db.getCollection("sanpham").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** sessions indexes **/
db.getCollection("sessions").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** users indexes **/
db.getCollection("users").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** diachi records **/
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000105"),
  "ten": "Quận Tân Bình",
  "id_parent": ObjectId("58c4d5efd893989c0c0000f8")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000106"),
  "ten": "Tỉnh Hậu Giang",
  "id_parent": ""
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000107"),
  "ten": "Huyện Vị Thủy",
  "id_parent": ObjectId("58c4d5efd893989c0c000106")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000108"),
  "ten": "Huyện Long Mỹ",
  "id_parent": ObjectId("58c4d5efd893989c0c000106")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000109"),
  "ten": "Huyện Long Mỹ",
  "id_parent": ObjectId("58c4d5efd893989c0c000106")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00010a"),
  "ten": "Huyện Vị Thanh",
  "id_parent": ObjectId("58c4d5efd893989c0c000106")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00010b"),
  "ten": "Tỉnh Đồng Nai",
  "id_parent": ""
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00010c"),
  "ten": "Huyện Định Quán",
  "id_parent": ObjectId("58c4d5efd893989c0c00010b")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00010d"),
  "ten": "Thị Trấn Định Quán",
  "id_parent": ObjectId("58c4d5efd893989c0c00010c")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00010e"),
  "ten": "Thành Phố Biên Hòa",
  "id_parent": ObjectId("58c4d5efd893989c0c00010b")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00010f"),
  "ten": "Tỉnh Bạc Liêu",
  "id_parent": ""
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000110"),
  "ten": "Tỉnh Sóc Trăng",
  "id_parent": ""
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000111"),
  "ten": "Huyện Long Phú",
  "id_parent": ObjectId("58c4d5efd893989c0c000110")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000112"),
  "ten": "Xã Trung Bình",
  "id_parent": ObjectId("58c4d5efd893989c0c000111")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000113"),
  "ten": "Thị Xã Vĩnh Châu",
  "id_parent": ObjectId("58c4d5efd893989c0c000110")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000114"),
  "ten": "Xã Vĩnh Hải",
  "id_parent": ObjectId("58c4d5efd893989c0c000113")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000115"),
  "ten": "Huyện Trần Đề",
  "id_parent": ObjectId("58c4d5efd893989c0c000110")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000116"),
  "ten": "Tỉnh Quảng Trị",
  "id_parent": ""
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000117"),
  "ten": "Thành Phố Hà Nội",
  "id_parent": ""
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000118"),
  "ten": "Quận Hà Đông",
  "id_parent": ObjectId("58c4d5efd893989c0c000117")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000119"),
  "ten": "Thành Phố Huế",
  "id_parent": ""
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00011a"),
  "ten": "Tỉnh Vĩnh Long",
  "id_parent": ""
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00011b"),
  "ten": "Thị Xã Bình Minh",
  "id_parent": ObjectId("58c4d5efd893989c0c00011a")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00011c"),
  "ten": "Huyện Long Hồ",
  "id_parent": ObjectId("58c4d5efd893989c0c00011a")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00011d"),
  "ten": "Tỉnh Bình Dương",
  "id_parent": ""
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00011e"),
  "ten": "Thành Phố Thủ Dầu Một",
  "id_parent": ObjectId("58c4d5efd893989c0c00011d")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00011f"),
  "ten": "Phường Phú Cường",
  "id_parent": ObjectId("58c4d5efd893989c0c00011e")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000120"),
  "ten": "Tỉnh Cà Mau",
  "id_parent": ""
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000121"),
  "ten": "Tĩnh Vĩnh Phúc",
  "id_parent": ""
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000122"),
  "ten": "Huyện Vĩnh Tường",
  "id_parent": ObjectId("58c4d5efd893989c0c000121")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000123"),
  "ten": "Xã Yên Lập",
  "id_parent": ObjectId("58c4d5efd893989c0c000122")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000124"),
  "ten": "Tỉnh Bến Tre",
  "id_parent": ""
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000125"),
  "ten": "Huyện Mỏ Cày",
  "id_parent": ObjectId("58c4d5efd893989c0c000124")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000126"),
  "ten": "Thành Phố Cần Thơ",
  "id_parent": ""
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000127"),
  "ten": "Quận Thốt Nốt",
  "id_parent": ObjectId("58c4d5efd893989c0c000126")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000128"),
  "ten": "Phường Thuận Hưng",
  "id_parent": ObjectId("58c4d5efd893989c0c000127")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000129"),
  "ten": "Quận Bình Thủy",
  "id_parent": ObjectId("58c4d5efd893989c0c000126")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00012a"),
  "ten": "Quận Ô Môn",
  "id_parent": ObjectId("58c4d5efd893989c0c000126")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00012b"),
  "ten": "Quận Cái Tắc",
  "id_parent": ObjectId("58c4d5efd893989c0c000126")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00012c"),
  "ten": "Tỉnh Trà Vinh",
  "id_parent": ""
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00012d"),
  "ten": "Huyện Cầu Kè",
  "id_parent": ObjectId("58c4d5efd893989c0c00012c")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00012e"),
  "ten": "Tỉnh Bình Thuận",
  "id_parent": ""
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00012f"),
  "ten": "Tỉnh Lâm Đồng",
  "id_parent": ""
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000130"),
  "ten": "Thành Phố Đà Lạt",
  "id_parent": ObjectId("58c4d5efd893989c0c00012f")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000131"),
  "ten": "Thành Phố Hải Phòng",
  "id_parent": ""
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000132"),
  "ten": "Tỉnh Khánh Hòa",
  "id_parent": ""
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000133"),
  "ten": "Thành Phố Nha Trang",
  "id_parent": ObjectId("58c4d5efd893989c0c000132")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000134"),
  "ten": "Tỉnh Tiền Giang",
  "id_parent": ""
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000135"),
  "ten": "Thành Phố Mỹ Tho",
  "id_parent": ObjectId("58c4d5efd893989c0c000134")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000136"),
  "ten": "Thị Xã Cai Lậy",
  "id_parent": ObjectId("58c4d5efd893989c0c000134")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000137"),
  "ten": "Huyện Gò Công",
  "id_parent": ObjectId("58c4d5efd893989c0c000134")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000138"),
  "ten": "Tỉnh Phan Thiết",
  "id_parent": ""
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000139"),
  "ten": "Thành Phố Đà Nẵng",
  "id_parent": ""
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00013a"),
  "ten": "Tỉnh Quảng Nam",
  "id_parent": ""
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00013b"),
  "ten": "Tỉnh Phú Yên",
  "id_parent": ""
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00013c"),
  "ten": "Tỉnh Thái Bình",
  "id_parent": ""
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00013d"),
  "ten": "Tỉnh Thanh Hóa",
  "id_parent": ""
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00013e"),
  "ten": "Tỉnh Thừa Thiên Huế",
  "id_parent": ""
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00013f"),
  "ten": "Tỉnh Quảng Bình",
  "id_parent": ""
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000140"),
  "ten": "Tỉnh Hà Giang",
  "id_parent": ""
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000141"),
  "ten": "Tỉnh Long An",
  "id_parent": ""
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000142"),
  "ten": "Tỉnh Bình Định",
  "id_parent": ""
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000143"),
  "ten": "Tỉnh Tây Ninh",
  "id_parent": ""
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000144"),
  "ten": "Chưa Xác Định",
  "id_parent": ""
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000029"),
  "ten": "Tỉnh An Giang",
  "id_parent": ""
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00002a"),
  "ten": "Thành Phố Long Xuyên",
  "id_parent": ObjectId("58c4d5efd893989c0c000029")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00002b"),
  "ten": "Phường Mỹ Long",
  "id_parent": ObjectId("58c4d5efd893989c0c00002a")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00002c"),
  "ten": "Phường Mỹ Quý",
  "id_parent": ObjectId("58c4d5efd893989c0c00002a")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00002d"),
  "ten": "Phường Mỹ Phước",
  "id_parent": ObjectId("58c4d5efd893989c0c00002a")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00002e"),
  "ten": "Phường Bình Khánh",
  "id_parent": ObjectId("58c4d5efd893989c0c00002a")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00002f"),
  "ten": "Phường Bình Đức",
  "id_parent": ObjectId("58c4d5efd893989c0c00002a")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000030"),
  "ten": "Phường Mỹ Bình",
  "id_parent": ObjectId("58c4d5efd893989c0c00002a")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000031"),
  "ten": "Phường Mỹ Hòa",
  "id_parent": ObjectId("58c4d5efd893989c0c00002a")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000032"),
  "ten": "Phường Mỹ Thạnh",
  "id_parent": ObjectId("58c4d5efd893989c0c00002a")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000033"),
  "ten": "Phường Mỹ Thới",
  "id_parent": ObjectId("58c4d5efd893989c0c00002a")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000034"),
  "ten": "Phường Mỹ Xuyên",
  "id_parent": ObjectId("58c4d5efd893989c0c00002a")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000035"),
  "ten": "Phường Đông Xuyên",
  "id_parent": ObjectId("58c4d5efd893989c0c00002a")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000036"),
  "ten": "Xã Mỹ Hòa Hưng",
  "id_parent": ObjectId("58c4d5efd893989c0c00002a")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000037"),
  "ten": "Xã Mỹ Khánh",
  "id_parent": ObjectId("58c4d5efd893989c0c00002a")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000038"),
  "ten": "Khác",
  "id_parent": ObjectId("58c4d5efd893989c0c00002a")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000039"),
  "ten": "Thành Phố Châu Đốc",
  "id_parent": ObjectId("58c4d5efd893989c0c000029")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00003a"),
  "ten": "Phường Châu Phú A",
  "id_parent": ObjectId("58c4d5efd893989c0c000039")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00003b"),
  "ten": "Phường Châu Phú B",
  "id_parent": ObjectId("58c4d5efd893989c0c000039")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00003c"),
  "ten": "Phường Núi Sam",
  "id_parent": ObjectId("58c4d5efd893989c0c000039")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00003d"),
  "ten": "Phường Vĩnh Mỹ",
  "id_parent": ObjectId("58c4d5efd893989c0c000039")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00003e"),
  "ten": "Phường Vĩnh Nguơn",
  "id_parent": ObjectId("58c4d5efd893989c0c000039")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00003f"),
  "ten": "Xã Vĩnh Châu",
  "id_parent": ObjectId("58c4d5efd893989c0c000039")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000040"),
  "ten": "Xã Vĩnh Tế",
  "id_parent": ObjectId("58c4d5efd893989c0c000039")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000041"),
  "ten": "Khác",
  "id_parent": ObjectId("58c4d5efd893989c0c000039")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000042"),
  "ten": "Huyện Châu Thành",
  "id_parent": ObjectId("58c4d5efd893989c0c000029")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000043"),
  "ten": "Thị Trấn An Châu",
  "id_parent": ObjectId("58c4d5efd893989c0c000042")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000044"),
  "ten": "Xã An Hòa",
  "id_parent": ObjectId("58c4d5efd893989c0c000042")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000045"),
  "ten": "Xã Bình Hòa",
  "id_parent": ObjectId("58c4d5efd893989c0c000042")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000046"),
  "ten": "Xã Bình Thạnh",
  "id_parent": ObjectId("58c4d5efd893989c0c000042")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000047"),
  "ten": "Xã Cần Đăng",
  "id_parent": ObjectId("58c4d5efd893989c0c000042")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000048"),
  "ten": "Xã Hòa Bình Thạnh",
  "id_parent": ObjectId("58c4d5efd893989c0c000042")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000049"),
  "ten": "Xã Tân Phú",
  "id_parent": ObjectId("58c4d5efd893989c0c000042")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00004a"),
  "ten": "Xã Vĩnh An",
  "id_parent": ObjectId("58c4d5efd893989c0c000042")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00004b"),
  "ten": "Xã Vĩnh Bình",
  "id_parent": ObjectId("58c4d5efd893989c0c000042")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00004c"),
  "ten": "Xã Vĩnh Hanh",
  "id_parent": ObjectId("58c4d5efd893989c0c000042")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00004d"),
  "ten": "Xã Vĩnh Lợi",
  "id_parent": ObjectId("58c4d5efd893989c0c000042")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00004e"),
  "ten": "Xã Vĩnh Nhuận",
  "id_parent": ObjectId("58c4d5efd893989c0c000042")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00004f"),
  "ten": "Xã Vĩnh Thành",
  "id_parent": ObjectId("58c4d5efd893989c0c000042")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000050"),
  "ten": "Khác",
  "id_parent": ObjectId("58c4d5efd893989c0c000042")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000051"),
  "ten": "Huyện Châu Phú",
  "id_parent": ObjectId("58c4d5efd893989c0c000029")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000052"),
  "ten": "Thị Trấn Cái Dầu",
  "id_parent": ObjectId("58c4d5efd893989c0c000051")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000053"),
  "ten": "Xã Bình Chánh",
  "id_parent": ObjectId("58c4d5efd893989c0c000051")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000054"),
  "ten": "Xã Bình Long",
  "id_parent": ObjectId("58c4d5efd893989c0c000051")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000055"),
  "ten": "Xã Bình Mỹ",
  "id_parent": ObjectId("58c4d5efd893989c0c000051")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000056"),
  "ten": "Xã Bình Phú",
  "id_parent": ObjectId("58c4d5efd893989c0c000051")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000057"),
  "ten": "Xã Bình Thủy",
  "id_parent": ObjectId("58c4d5efd893989c0c000051")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000058"),
  "ten": "Xã Khánh Hòa",
  "id_parent": ObjectId("58c4d5efd893989c0c000051")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000059"),
  "ten": "Xã Mỹ Phú",
  "id_parent": ObjectId("58c4d5efd893989c0c000051")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00005a"),
  "ten": "Xã Mỹ Đức",
  "id_parent": ObjectId("58c4d5efd893989c0c000051")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00005b"),
  "ten": "Xã Thạnh Mỹ Tây",
  "id_parent": ObjectId("58c4d5efd893989c0c000051")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00005c"),
  "ten": "Xã Vĩnh Thạnh Trung",
  "id_parent": ObjectId("58c4d5efd893989c0c000051")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00005d"),
  "ten": "Xã Ô Long Vỹ",
  "id_parent": ObjectId("58c4d5efd893989c0c000051")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00005e"),
  "ten": "Xã Đào Hữu Cảnh",
  "id_parent": ObjectId("58c4d5efd893989c0c000051")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00005f"),
  "ten": "Xã Bình Hòa",
  "id_parent": ObjectId("58c4d5efd893989c0c000051")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000060"),
  "ten": "Khác",
  "id_parent": ObjectId("58c4d5efd893989c0c000051")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000061"),
  "ten": "Thị Xã Tân Châu",
  "id_parent": ObjectId("58c4d5efd893989c0c000029")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000062"),
  "ten": "Phường Long Châu",
  "id_parent": ObjectId("58c4d5efd893989c0c000061")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000063"),
  "ten": "Phường Long Hưng",
  "id_parent": ObjectId("58c4d5efd893989c0c000061")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000064"),
  "ten": "Phường Long Phú",
  "id_parent": ObjectId("58c4d5efd893989c0c000061")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000065"),
  "ten": "Phường Long Sơn",
  "id_parent": ObjectId("58c4d5efd893989c0c000061")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000066"),
  "ten": "Phường Long Thạnh",
  "id_parent": ObjectId("58c4d5efd893989c0c000061")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000067"),
  "ten": "Xã Châu Phong",
  "id_parent": ObjectId("58c4d5efd893989c0c000061")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000068"),
  "ten": "Xã Long An",
  "id_parent": ObjectId("58c4d5efd893989c0c000061")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000069"),
  "ten": "Xã Lê Chánh",
  "id_parent": ObjectId("58c4d5efd893989c0c000061")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00006a"),
  "ten": "Xã Phú Lộc",
  "id_parent": ObjectId("58c4d5efd893989c0c000061")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00006b"),
  "ten": "Xã Phú Vĩnh",
  "id_parent": ObjectId("58c4d5efd893989c0c000061")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00006c"),
  "ten": "Xã Tân An",
  "id_parent": ObjectId("58c4d5efd893989c0c000061")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00006d"),
  "ten": "Xã Tân Thạnh",
  "id_parent": ObjectId("58c4d5efd893989c0c000061")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00006e"),
  "ten": "Xã Vĩnh Hòa",
  "id_parent": ObjectId("58c4d5efd893989c0c000061")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00006f"),
  "ten": "Xã Vĩnh Xương",
  "id_parent": ObjectId("58c4d5efd893989c0c000061")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000070"),
  "ten": "Khác",
  "id_parent": ObjectId("58c4d5efd893989c0c000061")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000071"),
  "ten": "Huyện Thoại Sơn",
  "id_parent": ObjectId("58c4d5efd893989c0c000029")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000072"),
  "ten": "Thị Trấn Núi Sập",
  "id_parent": ObjectId("58c4d5efd893989c0c000071")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000073"),
  "ten": "Thị Trấn Phú Hòa",
  "id_parent": ObjectId("58c4d5efd893989c0c000071")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000074"),
  "ten": "Thị Trấn Óc Eo",
  "id_parent": ObjectId("58c4d5efd893989c0c000071")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000075"),
  "ten": "Xã An Bình",
  "id_parent": ObjectId("58c4d5efd893989c0c000071")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000076"),
  "ten": "Xã Bình Thành",
  "id_parent": ObjectId("58c4d5efd893989c0c000071")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000077"),
  "ten": "Xã Mỹ Phú Đông",
  "id_parent": ObjectId("58c4d5efd893989c0c000071")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000078"),
  "ten": "Xã Phú Thuận",
  "id_parent": ObjectId("58c4d5efd893989c0c000071")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000079"),
  "ten": "Xã Thoại Giang",
  "id_parent": ObjectId("58c4d5efd893989c0c000071")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00007a"),
  "ten": "Xã Tây Phú",
  "id_parent": ObjectId("58c4d5efd893989c0c000071")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00007b"),
  "ten": "Xã Vĩnh Chánh",
  "id_parent": ObjectId("58c4d5efd893989c0c000071")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00007c"),
  "ten": "Xã Vĩnh Khánh",
  "id_parent": ObjectId("58c4d5efd893989c0c000071")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00007d"),
  "ten": "Xã Vĩnh Phú",
  "id_parent": ObjectId("58c4d5efd893989c0c000071")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00007e"),
  "ten": "Xã Vĩnh Trạch",
  "id_parent": ObjectId("58c4d5efd893989c0c000071")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00007f"),
  "ten": "Xã Vọng Thê",
  "id_parent": ObjectId("58c4d5efd893989c0c000071")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000080"),
  "ten": "Xã Vọng Đông",
  "id_parent": ObjectId("58c4d5efd893989c0c000071")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000081"),
  "ten": "Xã Định Mỹ",
  "id_parent": ObjectId("58c4d5efd893989c0c000071")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000082"),
  "ten": "Xã Định Thành",
  "id_parent": ObjectId("58c4d5efd893989c0c000071")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000083"),
  "ten": "Khác",
  "id_parent": ObjectId("58c4d5efd893989c0c000071")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000084"),
  "ten": "Huyện Tịnh Biên",
  "id_parent": ObjectId("58c4d5efd893989c0c000029")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000085"),
  "ten": "Thị Trấn Chi Lăng",
  "id_parent": ObjectId("58c4d5efd893989c0c000084")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000086"),
  "ten": "Thị Trấn Nhà Bàng",
  "id_parent": ObjectId("58c4d5efd893989c0c000084")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000087"),
  "ten": "Thị Trấn Tịnh Biên",
  "id_parent": ObjectId("58c4d5efd893989c0c000084")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000088"),
  "ten": "Xã An Cư",
  "id_parent": ObjectId("58c4d5efd893989c0c000084")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000089"),
  "ten": "Xã An Hảo",
  "id_parent": ObjectId("58c4d5efd893989c0c000084")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00008a"),
  "ten": "Xã An Nông",
  "id_parent": ObjectId("58c4d5efd893989c0c000084")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00008b"),
  "ten": "Xã An Phú",
  "id_parent": ObjectId("58c4d5efd893989c0c000084")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00008c"),
  "ten": "Xã Nhơn Hưng",
  "id_parent": ObjectId("58c4d5efd893989c0c000084")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00008d"),
  "ten": "Xã Núi Voi",
  "id_parent": ObjectId("58c4d5efd893989c0c000084")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00008e"),
  "ten": "Xã Thới Sơn",
  "id_parent": ObjectId("58c4d5efd893989c0c000084")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00008f"),
  "ten": "Xã Tân Lập",
  "id_parent": ObjectId("58c4d5efd893989c0c000084")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000090"),
  "ten": "Xã Tân Lợi",
  "id_parent": ObjectId("58c4d5efd893989c0c000084")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000091"),
  "ten": "Xã Văn Giáo",
  "id_parent": ObjectId("58c4d5efd893989c0c000084")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000092"),
  "ten": "Xã Vĩnh Trung",
  "id_parent": ObjectId("58c4d5efd893989c0c000084")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000093"),
  "ten": "Thị Trấn Tịnh Biên",
  "id_parent": ObjectId("58c4d5efd893989c0c000084")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000094"),
  "ten": "Xã Xuân Tô",
  "id_parent": ObjectId("58c4d5efd893989c0c000084")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000095"),
  "ten": "Khác",
  "id_parent": ObjectId("58c4d5efd893989c0c000084")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000096"),
  "ten": "Huyện Tri Tôn",
  "id_parent": ObjectId("58c4d5efd893989c0c000029")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000097"),
  "ten": "Thị Trấn Ba Chúc",
  "id_parent": ObjectId("58c4d5efd893989c0c000096")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000098"),
  "ten": "Thị Trấn Tri Tôn",
  "id_parent": ObjectId("58c4d5efd893989c0c000096")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000099"),
  "ten": "Xã An Tức",
  "id_parent": ObjectId("58c4d5efd893989c0c000096")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00009a"),
  "ten": "Xã Châu Lăng",
  "id_parent": ObjectId("58c4d5efd893989c0c000096")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00009b"),
  "ten": "Xã Cô Tô",
  "id_parent": ObjectId("58c4d5efd893989c0c000096")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00009c"),
  "ten": "Xã Lê Trì",
  "id_parent": ObjectId("58c4d5efd893989c0c000096")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00009d"),
  "ten": "Xã Lương An Trà",
  "id_parent": ObjectId("58c4d5efd893989c0c000096")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00009e"),
  "ten": "Xã Lương Phi",
  "id_parent": ObjectId("58c4d5efd893989c0c000096")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c00009f"),
  "ten": "Xã Lạc Quới",
  "id_parent": ObjectId("58c4d5efd893989c0c000096")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000a0"),
  "ten": "Xã Núi Tô",
  "id_parent": ObjectId("58c4d5efd893989c0c000096")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000a1"),
  "ten": "Xã Tà Đảnh",
  "id_parent": ObjectId("58c4d5efd893989c0c000096")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000a2"),
  "ten": "Xã Tân Tuyến",
  "id_parent": ObjectId("58c4d5efd893989c0c000096")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000a3"),
  "ten": "Xã Vĩnh Gia",
  "id_parent": ObjectId("58c4d5efd893989c0c000096")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000a4"),
  "ten": "Xã Vĩnh Phước",
  "id_parent": ObjectId("58c4d5efd893989c0c000096")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000a5"),
  "ten": "Xã Ô Lâm",
  "id_parent": ObjectId("58c4d5efd893989c0c000096")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000a6"),
  "ten": "Khác",
  "id_parent": ObjectId("58c4d5efd893989c0c000096")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000a7"),
  "ten": "Huyện Phú Tân",
  "id_parent": ObjectId("58c4d5efd893989c0c000029")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000a8"),
  "ten": "Thị Trấn Chợ Vàm",
  "id_parent": ObjectId("58c4d5efd893989c0c0000a7")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000a9"),
  "ten": "Thị Trấn Phú Mỹ",
  "id_parent": ObjectId("58c4d5efd893989c0c0000a7")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000aa"),
  "ten": "Xã Bình Thạnh Đông",
  "id_parent": ObjectId("58c4d5efd893989c0c0000a7")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000ab"),
  "ten": "Xã Hiệp Xương",
  "id_parent": ObjectId("58c4d5efd893989c0c0000a7")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000ac"),
  "ten": "Xã Hòa Lạc",
  "id_parent": ObjectId("58c4d5efd893989c0c0000a7")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000ad"),
  "ten": "Xã Long Hòa",
  "id_parent": ObjectId("58c4d5efd893989c0c0000a7")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000ae"),
  "ten": "Xã Phú An",
  "id_parent": ObjectId("58c4d5efd893989c0c0000a7")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000af"),
  "ten": "Xã Phú Bình",
  "id_parent": ObjectId("58c4d5efd893989c0c0000a7")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000b0"),
  "ten": "Xã Phú Hiệp",
  "id_parent": ObjectId("58c4d5efd893989c0c0000a7")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000b1"),
  "ten": "Xã Phú Hưng",
  "id_parent": ObjectId("58c4d5efd893989c0c0000a7")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000b2"),
  "ten": "Xã Phú Long",
  "id_parent": ObjectId("58c4d5efd893989c0c0000a7")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000b3"),
  "ten": "Xã Phú Lâm",
  "id_parent": ObjectId("58c4d5efd893989c0c0000a7")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000b4"),
  "ten": "Xã Phú Thành",
  "id_parent": ObjectId("58c4d5efd893989c0c0000a7")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000b5"),
  "ten": "Xã Phú Thạnh",
  "id_parent": ObjectId("58c4d5efd893989c0c0000a7")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000b6"),
  "ten": "Xã Phú Thọ",
  "id_parent": ObjectId("58c4d5efd893989c0c0000a7")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000b7"),
  "ten": "Xã Phú Xuân",
  "id_parent": ObjectId("58c4d5efd893989c0c0000a7")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000b8"),
  "ten": "Xã Tân Hòa",
  "id_parent": ObjectId("58c4d5efd893989c0c0000a7")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000b9"),
  "ten": "Xã Tân Trung",
  "id_parent": ObjectId("58c4d5efd893989c0c0000a7")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000ba"),
  "ten": "Xã Long Sơn",
  "id_parent": ObjectId("58c4d5efd893989c0c0000a7")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000bb"),
  "ten": "Khác",
  "id_parent": ObjectId("58c4d5efd893989c0c0000a7")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000bc"),
  "ten": "Huyện Chợ Mới",
  "id_parent": ObjectId("58c4d5efd893989c0c000029")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000bd"),
  "ten": "Thị Trấn Chợ Mới",
  "id_parent": ObjectId("58c4d5efd893989c0c0000bc")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000be"),
  "ten": "Thị Trấn Mỹ Luông",
  "id_parent": ObjectId("58c4d5efd893989c0c0000bc")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000bf"),
  "ten": "Xã An Thạnh Trung",
  "id_parent": ObjectId("58c4d5efd893989c0c0000bc")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000c0"),
  "ten": "Xã Bình Phước Xuân",
  "id_parent": ObjectId("58c4d5efd893989c0c0000bc")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000c1"),
  "ten": "Xã Hòa An",
  "id_parent": ObjectId("58c4d5efd893989c0c0000bc")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000c2"),
  "ten": "Xã Hòa Bình",
  "id_parent": ObjectId("58c4d5efd893989c0c0000bc")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000c3"),
  "ten": "Xã Hội An",
  "id_parent": ObjectId("58c4d5efd893989c0c0000bc")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000c4"),
  "ten": "Xã Kiến An",
  "id_parent": ObjectId("58c4d5efd893989c0c0000bc")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000c5"),
  "ten": "Xã Kiến Thành",
  "id_parent": ObjectId("58c4d5efd893989c0c0000bc")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000c6"),
  "ten": "Xã Long Giang",
  "id_parent": ObjectId("58c4d5efd893989c0c0000bc")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000c7"),
  "ten": "Xã Long Kiến",
  "id_parent": ObjectId("58c4d5efd893989c0c0000bc")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000c8"),
  "ten": "Xã Long Điền A",
  "id_parent": ObjectId("58c4d5efd893989c0c0000bc")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000c9"),
  "ten": "Xã Long Điền B",
  "id_parent": ObjectId("58c4d5efd893989c0c0000bc")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000ca"),
  "ten": "Xã Mỹ An",
  "id_parent": ObjectId("58c4d5efd893989c0c0000bc")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000cb"),
  "ten": "Xã Mỹ Hiệp",
  "id_parent": ObjectId("58c4d5efd893989c0c0000bc")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000cc"),
  "ten": "Xã Mỹ Hội Đông",
  "id_parent": ObjectId("58c4d5efd893989c0c0000bc")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000cd"),
  "ten": "Xã Nhơn Mỹ",
  "id_parent": ObjectId("58c4d5efd893989c0c0000bc")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000ce"),
  "ten": "Xã Tấn Mỹ",
  "id_parent": ObjectId("58c4d5efd893989c0c0000bc")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000cf"),
  "ten": "Khác",
  "id_parent": ObjectId("58c4d5efd893989c0c0000bc")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000d0"),
  "ten": "Huyện An Phú",
  "id_parent": ObjectId("58c4d5efd893989c0c000029")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000d1"),
  "ten": "Thị Trấn An Phú",
  "id_parent": ObjectId("58c4d5efd893989c0c0000d0")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000d2"),
  "ten": "Thị Trấn Long Bình",
  "id_parent": ObjectId("58c4d5efd893989c0c0000d0")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000d3"),
  "ten": "Xã Khánh An",
  "id_parent": ObjectId("58c4d5efd893989c0c0000d0")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000d4"),
  "ten": "Xã Khánh Bình",
  "id_parent": ObjectId("58c4d5efd893989c0c0000d0")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000d5"),
  "ten": "Xã Nhơn Hội",
  "id_parent": ObjectId("58c4d5efd893989c0c0000d0")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000d6"),
  "ten": "Xã Phú Hội",
  "id_parent": ObjectId("58c4d5efd893989c0c0000d0")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000d7"),
  "ten": "Xã Phú Hữu",
  "id_parent": ObjectId("58c4d5efd893989c0c0000d0")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000d8"),
  "ten": "Xã Phước Hưng",
  "id_parent": ObjectId("58c4d5efd893989c0c0000d0")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000d9"),
  "ten": "Xã Quốc Thái",
  "id_parent": ObjectId("58c4d5efd893989c0c0000d0")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000da"),
  "ten": "Xã Vĩnh Hậu",
  "id_parent": ObjectId("58c4d5efd893989c0c0000d0")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000db"),
  "ten": "Xã Vĩnh Hội Đông",
  "id_parent": ObjectId("58c4d5efd893989c0c0000d0")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000dc"),
  "ten": "Xã Vĩnh Lộc",
  "id_parent": ObjectId("58c4d5efd893989c0c0000d0")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000dd"),
  "ten": "Xã Vĩnh Trường",
  "id_parent": ObjectId("58c4d5efd893989c0c0000d0")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000de"),
  "ten": "Xã Đa Phước",
  "id_parent": ObjectId("58c4d5efd893989c0c0000d0")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000df"),
  "ten": "Khác",
  "id_parent": ObjectId("58c4d5efd893989c0c0000d0")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000e0"),
  "ten": "Khác",
  "id_parent": ObjectId("58c4d5efd893989c0c000029")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000e1"),
  "ten": "Tỉnh Đồng Tháp",
  "id_parent": ""
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000e2"),
  "ten": "Huyện Hồng Ngự",
  "id_parent": ObjectId("58c4d5efd893989c0c0000e1")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000e3"),
  "ten": "Xã Thường Lạc",
  "id_parent": ObjectId("58c4d5efd893989c0c0000e2")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000e4"),
  "ten": "Xã Long Thiện",
  "id_parent": ObjectId("58c4d5efd893989c0c0000e2")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000e5"),
  "ten": "Huyện Lai Vung",
  "id_parent": ObjectId("58c4d5efd893989c0c0000e1")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000e6"),
  "ten": "Xã Long Hậu",
  "id_parent": ObjectId("58c4d5efd893989c0c0000e5")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000e7"),
  "ten": "Huyện Lấp Vò",
  "id_parent": ObjectId("58c4d5efd893989c0c0000e1")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000e8"),
  "ten": "Huyện Tam Nông",
  "id_parent": ObjectId("58c4d5efd893989c0c0000e1")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000e9"),
  "ten": "Thành Phố Cao Lãnh",
  "id_parent": ObjectId("58c4d5efd893989c0c0000e1")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000ea"),
  "ten": "Thành Phố Sa Đéc",
  "id_parent": ObjectId("58c4d5efd893989c0c0000e1")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000eb"),
  "ten": "Tỉnh Kiên Giang",
  "id_parent": ""
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000ec"),
  "ten": "Huyện Giang Thành",
  "id_parent": ObjectId("58c4d5efd893989c0c0000eb")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000ed"),
  "ten": "Huyện Tân Hiệp",
  "id_parent": ObjectId("58c4d5efd893989c0c0000eb")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000ee"),
  "ten": "Xã Tân Hội",
  "id_parent": ObjectId("58c4d5efd893989c0c0000ed")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000ef"),
  "ten": "Thành Phố Rạch Giá",
  "id_parent": ObjectId("58c4d5efd893989c0c0000eb")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000f0"),
  "ten": "Thị Xã Hà Tiên",
  "id_parent": ObjectId("58c4d5efd893989c0c0000eb")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000f1"),
  "ten": "Huyện Hòn Đất",
  "id_parent": ObjectId("58c4d5efd893989c0c0000eb")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000f2"),
  "ten": "Huyện Phú Quốc",
  "id_parent": ObjectId("58c4d5efd893989c0c0000eb")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000f3"),
  "ten": "Thành Phố Cần Thơ",
  "id_parent": ""
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000f4"),
  "ten": "Quận Thốt Nốt",
  "id_parent": ObjectId("58c4d5efd893989c0c0000f3")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000f5"),
  "ten": "Tỉnh Bà Rịa-Vũng Tàu",
  "id_parent": ""
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000f6"),
  "ten": "Thành Phố Vũng Tàu",
  "id_parent": ObjectId("58c4d5efd893989c0c0000f5")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000f7"),
  "ten": "Thành Phố Bà Rịa",
  "id_parent": ObjectId("58c4d5efd893989c0c0000f5")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000f8"),
  "ten": "Thành Phố Hồ Chí Minh",
  "id_parent": ""
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000f9"),
  "ten": "Quận 1",
  "id_parent": ObjectId("58c4d5efd893989c0c0000f8")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000fa"),
  "ten": "Quận 2",
  "id_parent": ObjectId("58c4d5efd893989c0c0000f8")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000fb"),
  "ten": "Quận 3",
  "id_parent": ObjectId("58c4d5efd893989c0c0000f8")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000fc"),
  "ten": "Quận 4",
  "id_parent": ObjectId("58c4d5efd893989c0c0000f8")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000fd"),
  "ten": "Quận 5",
  "id_parent": ObjectId("58c4d5efd893989c0c0000f8")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000fe"),
  "ten": "Quận 7",
  "id_parent": ObjectId("58c4d5efd893989c0c0000f8")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c0000ff"),
  "ten": "Quận 10",
  "id_parent": ObjectId("58c4d5efd893989c0c0000f8")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000100"),
  "ten": "Quận Bình Tân",
  "id_parent": ObjectId("58c4d5efd893989c0c0000f8")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000101"),
  "ten": "Quận Thủ Đức",
  "id_parent": ObjectId("58c4d5efd893989c0c0000f8")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000102"),
  "ten": "Quận Gò Vấp",
  "id_parent": ObjectId("58c4d5efd893989c0c0000f8")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000103"),
  "ten": "Huyện Hóc Môn",
  "id_parent": ObjectId("58c4d5efd893989c0c0000f8")
});
db.getCollection("diachi").insert({
  "_id": ObjectId("58c4d5efd893989c0c000104"),
  "ten": "Quận Nhà Bè",
  "id_parent": ObjectId("58c4d5efd893989c0c0000f8")
});

/** donvikinhdoanh records **/
db.getCollection("donvikinhdoanh").insert({
  "_id": ObjectId("58c6627932341ca409000b6f"),
  "ten": "Siêu Thị Metro",
  "nguoidaidien": "Phan Minh Trung",
  "diachi": [
    "58c4d5efd893989c0c000029",
    "58c4d5efd893989c0c00002a",
    "58c4d5efd893989c0c00002d",
    "Trần Hưng Đạo"
  ],
  "dienthoai": "0123456789",
  "email": "pmtrung@agu.edu.vn",
  "website": "",
  "hinhanh": [
    {
      "filename": "fbf47e00e76fd131a41d3ada67e8b57d_20170310030351.jpg",
      "aliasname": "41485fa524b1598bfe3100603b484131_20170313100323.jpg"
    }
  ],
  "ghichu": "",
  "longitude": "105.44952392578125",
  "latitude": "10.409481792727005",
  "date_post": ISODate("2017-03-13T09:12:25.0Z")
});
db.getCollection("donvikinhdoanh").insert({
  "_id": ObjectId("58c662a532341ca409003ab2"),
  "ten": "Siêu thị Coopmart",
  "nguoidaidien": "Phan Minh Trung",
  "diachi": [
    "58c4d5efd893989c0c000029",
    "58c4d5efd893989c0c00002a",
    "58c4d5efd893989c0c00002b",
    "Hùng Vương"
  ],
  "dienthoai": "0123456789",
  "email": "",
  "website": "",
  "hinhanh": [
    {
      "filename": "e7806910a75f5b22866e3fa5fdcd9a04_20170310030300.jpg",
      "aliasname": "785ad356b51dc95f9d397b03ab38d871_20170313100308.jpg"
    }
  ],
  "ghichu": "",
  "longitude": "105.41519165039062",
  "latitude": "10.398676095047767",
  "date_post": ISODate("2017-03-13T09:13:09.0Z")
});
db.getCollection("donvikinhdoanh").insert({
  "_id": ObjectId("58c6634132341ca409007326"),
  "ten": "Siêu thị Tứ Sơn",
  "nguoidaidien": "Phan Minh Trung",
  "diachi": [
    "58c4d5efd893989c0c000029",
    "58c4d5efd893989c0c000039",
    "58c4d5efd893989c0c00003a",
    "ABC"
  ],
  "dienthoai": "0123456789",
  "email": "",
  "website": "",
  "hinhanh": [
    {
      "filename": "tuson.png",
      "aliasname": "01b4f82e78eb6421040b648a138e0ee2_20170313100344.png"
    }
  ],
  "ghichu": "",
  "longitude": "105.44265747070312",
  "latitude": "10.375712746181467",
  "date_post": ISODate("2017-03-13T09:15:45.0Z")
});

/** donvisanxuat records **/
db.getCollection("donvisanxuat").insert({
  "_id": ObjectId("58c663c232341c90090045f2"),
  "ten": "HTX Rau Kiến An",
  "diachi": [
    "58c4d5efd893989c0c000029",
    "58c4d5efd893989c0c0000bc",
    "58c4d5efd893989c0c0000c4",
    "ABC"
  ],
  "nguoidaidien": "Phan Minh Trung",
  "dienthoai": "0123456789",
  "email": "",
  "website": "",
  "dientich": NumberInt(10000),
  "id_loainongsan": "",
  "longitude": "105.44540405273438",
  "latitude": "10.354098643030412",
  "id_parent": "",
  "hinhanh": [
    {
      "filename": "799bad5a3b514f096e69bbc4a7896cd9_20170313100334.jpg",
      "aliasname": "4abbd69f36e0fdc03383b14fe97bd950_20170313100348.jpg"
    }
  ],
  "ghichu": "",
  "date_post": ISODate("2017-03-13T09:17:54.0Z")
});
db.getCollection("donvisanxuat").insert({
  "_id": ObjectId("58c663ec32341c900900763e"),
  "ten": "HTX Rau Bình Phước Xuân",
  "diachi": [
    "58c4d5efd893989c0c000029",
    "58c4d5efd893989c0c0000bc",
    "58c4d5efd893989c0c0000c0",
    ""
  ],
  "nguoidaidien": "Phan Minh Trung",
  "dienthoai": "0123456789",
  "email": "",
  "website": "",
  "dientich": NumberInt(10000),
  "id_loainongsan": "",
  "longitude": "105.4083251953125",
  "latitude": "10.374361908438",
  "id_parent": "",
  "hinhanh": [
    {
      "filename": "156005c5baf40ff51a327f1c34f2975b_20170313100303.jpg",
      "aliasname": "77eb4a2fd3236fa65b1ec44cfe3a5d95_20170313100330.jpg"
    }
  ],
  "ghichu": "",
  "date_post": ISODate("2017-03-13T09:18:36.0Z")
});
db.getCollection("donvisanxuat").insert({
  "_id": ObjectId("58c6643f32341c900900549a"),
  "ten": "HTX Mỹ Hoà Hưng",
  "diachi": [
    "58c4d5efd893989c0c000029",
    "58c4d5efd893989c0c00002a",
    "58c4d5efd893989c0c000036",
    ""
  ],
  "nguoidaidien": "Phan Minh Trung",
  "dienthoai": "0123456789",
  "email": "",
  "website": "",
  "dientich": NumberInt(10000),
  "id_loainongsan": "",
  "longitude": "105.43999671936035",
  "latitude": "10.418556601175293",
  "id_parent": "",
  "hinhanh": [
    {
      "filename": "f3ccdd27d2000e3f9255a7e3e2c48800_20170313100351.jpg",
      "aliasname": "dc15829e7a5092c3d355382a9fc0a9bd_20170313100357.jpg"
    }
  ],
  "ghichu": "",
  "date_post": ISODate("2017-03-13T09:20:40.0Z"),
  "sodienthoai": null,
  "id_loainognsan": "",
  "parent_id": ""
});
db.getCollection("donvisanxuat").insert({
  "_id": ObjectId("58c665c132341c9c090002ef"),
  "ten": "Hộ sản xuất A",
  "diachi": [
    "58c4d5efd893989c0c000029",
    "58c4d5efd893989c0c0000bc",
    "58c4d5efd893989c0c0000c4",
    ""
  ],
  "nguoidaidien": "Phan Minh Trung",
  "dienthoai": "0123456789",
  "email": "",
  "website": "",
  "dientich": NumberInt(1000),
  "id_loainongsan": [
    "58c6649e32341c9c09003128",
    "58c664a632341c9c090056b5",
    "58c664ad32341c9c09001abc"
  ],
  "longitude": "105.44265747070312",
  "latitude": "10.35950230860545",
  "id_parent": ObjectId("58c663c232341c90090045f2"),
  "hinhanh": [
    {
      "filename": "799bad5a3b514f096e69bbc4a7896cd9_20170313100334.jpg",
      "aliasname": "4abbd69f36e0fdc03383b14fe97bd950_20170313100321.jpg"
    }
  ],
  "ghichu": "",
  "date_post": ISODate("2017-03-13T09:26:25.0Z")
});
db.getCollection("donvisanxuat").insert({
  "_id": ObjectId("58c665ee32341c9c09004957"),
  "ten": "Hộ sản xuất B",
  "diachi": [
    "58c4d5efd893989c0c000029",
    "58c4d5efd893989c0c0000bc",
    "58c4d5efd893989c0c0000c0",
    ""
  ],
  "nguoidaidien": "Phan Minh Trung",
  "dienthoai": "0123456789",
  "email": "",
  "website": "",
  "dientich": NumberInt(1000),
  "id_loainongsan": [
    "58c6649e32341c9c09003128",
    "58c664a632341c9c090056b5",
    "58c664ad32341c9c09001abc",
    "58c664cd32341c9c09001fec"
  ],
  "longitude": "105.49896240234375",
  "latitude": "10.332483050053943",
  "id_parent": ObjectId("58c663ec32341c900900763e"),
  "hinhanh": [
    {
      "filename": "156005c5baf40ff51a327f1c34f2975b_20170313100303.jpg",
      "aliasname": "77eb4a2fd3236fa65b1ec44cfe3a5d95_20170313100309.jpg"
    }
  ],
  "ghichu": "",
  "date_post": ISODate("2017-03-13T09:27:10.0Z")
});
db.getCollection("donvisanxuat").insert({
  "_id": ObjectId("58c6661a32341c9c090059bc"),
  "ten": "Hộ sản xuất C",
  "diachi": [
    "58c4d5efd893989c0c000029",
    "58c4d5efd893989c0c00002a",
    "58c4d5efd893989c0c000036",
    ""
  ],
  "nguoidaidien": "Phan Minh Trung",
  "dienthoai": "0123456789",
  "email": "",
  "website": "",
  "dientich": NumberInt(0),
  "id_loainongsan": [
    "58c6649e32341c9c09003128",
    "58c664a632341c9c090056b5",
    "58c664ad32341c9c09001abc"
  ],
  "longitude": "105.42892456054688",
  "latitude": "10.354098643030412",
  "id_parent": ObjectId("58c6643f32341c900900549a"),
  "hinhanh": [
    {
      "filename": "f3ccdd27d2000e3f9255a7e3e2c48800_20170313100351.jpg",
      "aliasname": "dc15829e7a5092c3d355382a9fc0a9bd_20170313100350.jpg"
    }
  ],
  "ghichu": "",
  "date_post": ISODate("2017-03-13T09:27:54.0Z")
});

/** loainongsan records **/
db.getCollection("loainongsan").insert({
  "_id": ObjectId("58c6649232341c9c09003e5e"),
  "ten": "Rau",
  "id_parent": "",
  "dinhkem": [
    
  ],
  "hinhanh": [
    
  ],
  "date_post": ISODate("2017-03-13T09:21:22.0Z")
});
db.getCollection("loainongsan").insert({
  "_id": ObjectId("58c6649e32341c9c09003128"),
  "ten": "Cải Xanh",
  "id_parent": ObjectId("58c6649232341c9c09003e5e"),
  "dinhkem": [
    
  ],
  "hinhanh": [
    
  ],
  "date_post": ISODate("2017-03-13T09:22:06.0Z")
});
db.getCollection("loainongsan").insert({
  "_id": ObjectId("58c664a632341c9c090056b5"),
  "ten": "Mồng Tơi",
  "id_parent": ObjectId("58c6649232341c9c09003e5e"),
  "dinhkem": [
    
  ],
  "hinhanh": [
    
  ],
  "date_post": ISODate("2017-03-13T09:21:58.0Z")
});
db.getCollection("loainongsan").insert({
  "_id": ObjectId("58c664ad32341c9c09001abc"),
  "ten": "Rau Muống",
  "id_parent": ObjectId("58c6649232341c9c09003e5e"),
  "dinhkem": [
    
  ],
  "hinhanh": [
    
  ],
  "date_post": ISODate("2017-03-13T09:21:54.0Z")
});
db.getCollection("loainongsan").insert({
  "_id": ObjectId("58c664c632341c9c0900763e"),
  "ten": "Củ",
  "id_parent": "",
  "dinhkem": [
    
  ],
  "hinhanh": [
    
  ],
  "date_post": ISODate("2017-03-13T09:22:14.0Z")
});
db.getCollection("loainongsan").insert({
  "_id": ObjectId("58c664cd32341c9c09001fec"),
  "ten": "Cà Rốt",
  "id_parent": ObjectId("58c664c632341c9c0900763e"),
  "dinhkem": [
    
  ],
  "hinhanh": [
    
  ],
  "date_post": ISODate("2017-03-13T09:22:27.0Z")
});
db.getCollection("loainongsan").insert({
  "_id": ObjectId("58c664da32341c9c09004dcf"),
  "ten": "Sủ Sắn",
  "id_parent": ObjectId("58c664c632341c9c0900763e"),
  "dinhkem": [
    
  ],
  "hinhanh": [
    
  ],
  "date_post": ISODate("2017-03-13T09:22:34.0Z")
});
db.getCollection("loainongsan").insert({
  "_id": ObjectId("58c664e332341c9c09002b48"),
  "ten": "Khoai Lang",
  "id_parent": ObjectId("58c664c632341c9c0900763e"),
  "dinhkem": [
    
  ],
  "hinhanh": [
    
  ],
  "date_post": ISODate("2017-03-13T09:22:43.0Z")
});
db.getCollection("loainongsan").insert({
  "_id": ObjectId("58c664eb32341c9c09004818"),
  "ten": "Khoai Mỡ",
  "id_parent": ObjectId("58c664c632341c9c0900763e"),
  "dinhkem": [
    
  ],
  "hinhanh": [
    
  ],
  "date_post": ISODate("2017-03-13T09:22:51.0Z")
});
db.getCollection("loainongsan").insert({
  "_id": ObjectId("58c664fb32341c9c090070a6"),
  "ten": "Khoai Tây",
  "id_parent": ObjectId("58c664c632341c9c0900763e"),
  "dinhkem": [
    
  ],
  "hinhanh": [
    
  ],
  "date_post": ISODate("2017-03-13T09:23:07.0Z")
});
db.getCollection("loainongsan").insert({
  "_id": ObjectId("58c6653832341c9c090015a5"),
  "ten": "Quả",
  "id_parent": "",
  "dinhkem": [
    
  ],
  "hinhanh": [
    
  ],
  "date_post": ISODate("2017-03-13T09:24:08.0Z")
});
db.getCollection("loainongsan").insert({
  "_id": ObjectId("58c6654632341c9c090026ce"),
  "ten": "Mướp",
  "id_parent": ObjectId("58c6653832341c9c090015a5"),
  "dinhkem": [
    
  ],
  "hinhanh": [
    
  ],
  "date_post": ISODate("2017-03-13T09:24:22.0Z")
});
db.getCollection("loainongsan").insert({
  "_id": ObjectId("58c6654e32341c9c09007a8b"),
  "ten": "Khổ Qua",
  "id_parent": ObjectId("58c6653832341c9c090015a5"),
  "dinhkem": [
    
  ],
  "hinhanh": [
    
  ],
  "date_post": ISODate("2017-03-13T09:24:30.0Z")
});

/** sanpham records **/
db.getCollection("sanpham").insert({
  "_id": ObjectId("58c666cd32341c9809001f19"),
  "matrangtrai": "58C666AC0A71D",
  "masanpham": "58C666ACAB57B",
  "ten": "Cải xanh",
  "ngaygieo": ISODate("2017-03-12T23:00:00.0Z"),
  "dientich": NumberInt(1000),
  "ngaydukienthuhoach": ISODate("2017-03-30T22:00:00.0Z"),
  "ngaythuhoach": "",
  "sanluong": NumberInt(0),
  "quicachdonggoi": "",
  "ngaydonggoi": "",
  "hansudung": "",
  "huongdansudung": "",
  "huongdanbaoquan": "",
  "id_loainongsan": ObjectId("58c6649e32341c9c09003128"),
  "id_donvisanxuat": ObjectId("58c665c132341c9c090002ef"),
  "id_donvisoche": "",
  "id_donvikinhdoanh": [
    "58c6627932341ca409000b6f",
    "58c662a532341ca409003ab2",
    "58c6634132341ca409007326"
  ],
  "vanchuyen": [
    
  ],
  "phunthuoc": [
    
  ],
  "bonphan": [
    
  ],
  "hinhanh": [
    {
      "filename": "12.jpg",
      "aliasname": "8df7b73a7820f4aef47864f2a6c5fccf_20170313100350.jpg"
    }
  ],
  "ghichu": "",
  "tinhtrang": NumberInt(0),
  "kiemduyet": [
    
  ],
  "id_user": ObjectId("589977f03da730a419000029"),
  "id_user_update": ObjectId("58c6669c32341c9809002ac2"),
  "date_post": ISODate("2017-03-13T09:30:53.0Z"),
  "date_change": ISODate("2017-03-13T09:30:53.0Z")
});
db.getCollection("sanpham").insert({
  "_id": ObjectId("58c667c732341c9c09006403"),
  "matrangtrai": "58C666DB85AAA",
  "masanpham": "58C666DC55568",
  "ten": "Rau Muống",
  "ngaygieo": ISODate("2017-03-12T23:00:00.0Z"),
  "dientich": NumberInt(0),
  "ngaydukienthuhoach": ISODate("2017-03-30T22:00:00.0Z"),
  "ngaythuhoach": "",
  "sanluong": NumberInt(0),
  "quicachdonggoi": "",
  "ngaydonggoi": "",
  "hansudung": "",
  "huongdansudung": "",
  "huongdanbaoquan": "",
  "id_loainongsan": ObjectId("58c664ad32341c9c09001abc"),
  "id_donvisanxuat": ObjectId("58c665ee32341c9c09004957"),
  "id_donvisoche": "",
  "id_donvikinhdoanh": [
    "58c6627932341ca409000b6f",
    "58c662a532341ca409003ab2",
    "58c6634132341ca409007326"
  ],
  "vanchuyen": [
    
  ],
  "phunthuoc": [
    
  ],
  "bonphan": [
    
  ],
  "hinhanh": [
    {
      "filename": "raumuong.png",
      "aliasname": "b6f0241ec02d93441652a1aa0f118a1e_20170313100300.png"
    }
  ],
  "ghichu": "",
  "tinhtrang": NumberInt(0),
  "kiemduyet": [
    
  ],
  "id_user": ObjectId("589977f03da730a419000029"),
  "id_user_update": ObjectId("58c6669c32341c9809002ac2"),
  "date_post": ISODate("2017-03-13T09:35:03.0Z"),
  "date_change": ISODate("2017-03-13T09:35:03.0Z")
});
db.getCollection("sanpham").insert({
  "_id": ObjectId("58c667e432341c9c09000aff"),
  "matrangtrai": "58C667CAD81C3",
  "masanpham": "58C667CB89C02",
  "ten": "Mồng Tơi",
  "ngaygieo": ISODate("2017-03-12T23:00:00.0Z"),
  "dientich": NumberInt(0),
  "ngaydukienthuhoach": ISODate("2017-03-12T23:00:00.0Z"),
  "ngaythuhoach": "",
  "sanluong": NumberInt(0),
  "quicachdonggoi": "",
  "ngaydonggoi": "",
  "hansudung": "",
  "huongdansudung": "",
  "huongdanbaoquan": "",
  "id_loainongsan": ObjectId("58c664a632341c9c090056b5"),
  "id_donvisanxuat": ObjectId("58c6661a32341c9c090059bc"),
  "id_donvisoche": "",
  "id_donvikinhdoanh": [
    "58c6627932341ca409000b6f",
    "58c662a532341ca409003ab2",
    "58c6634132341ca409007326"
  ],
  "vanchuyen": [
    
  ],
  "phunthuoc": [
    
  ],
  "bonphan": [
    
  ],
  "hinhanh": [
    {
      "filename": "mongtoi.png",
      "aliasname": "39c16d97fcaad4f45443e2ede87af092_20170313100331.png"
    }
  ],
  "ghichu": "",
  "tinhtrang": NumberInt(0),
  "kiemduyet": [
    
  ],
  "id_user": ObjectId("589977f03da730a419000029"),
  "id_user_update": ObjectId("58c6669c32341c9809002ac2"),
  "date_post": ISODate("2017-03-13T09:35:32.0Z"),
  "date_change": ISODate("2017-03-13T09:35:32.0Z")
});
db.getCollection("sanpham").insert({
  "_id": ObjectId("58c6681d32341c88090040ca"),
  "matrangtrai": "58C66801901EC",
  "masanpham": "58C668027FC6A",
  "ten": "Cà Rốt",
  "ngaygieo": ISODate("2017-03-12T23:00:00.0Z"),
  "dientich": NumberInt(1000),
  "ngaydukienthuhoach": ISODate("2017-03-21T23:00:00.0Z"),
  "ngaythuhoach": "",
  "sanluong": NumberInt(0),
  "quicachdonggoi": "",
  "ngaydonggoi": "",
  "hansudung": "",
  "huongdansudung": "",
  "huongdanbaoquan": "",
  "id_loainongsan": ObjectId("58c664cd32341c9c09001fec"),
  "id_donvisanxuat": "",
  "id_donvisoche": "",
  "id_donvikinhdoanh": [
    "58c6627932341ca409000b6f",
    "58c662a532341ca409003ab2",
    "58c6634132341ca409007326"
  ],
  "vanchuyen": [
    
  ],
  "phunthuoc": [
    
  ],
  "bonphan": [
    
  ],
  "hinhanh": [
    {
      "filename": "carot.png",
      "aliasname": "37c1800fa515e53b448e899d7ca002a9_20170313100323.png"
    }
  ],
  "ghichu": "",
  "tinhtrang": NumberInt(0),
  "kiemduyet": [
    
  ],
  "id_user": ObjectId("589977f03da730a419000029"),
  "id_user_update": ObjectId("58c6669c32341c9809002ac2"),
  "date_post": ISODate("2017-03-13T09:36:29.0Z"),
  "date_change": ISODate("2017-03-13T09:36:29.0Z")
});
db.getCollection("sanpham").insert({
  "_id": ObjectId("58c6694532341c88090059a7"),
  "matrangtrai": "58C669254D64A",
  "masanpham": "58C66925EADF7",
  "ten": "Khoai Lang Tím",
  "ngaygieo": ISODate("2017-02-28T23:00:00.0Z"),
  "dientich": NumberInt(1000),
  "ngaydukienthuhoach": ISODate("2017-03-12T23:00:00.0Z"),
  "ngaythuhoach": "",
  "sanluong": NumberInt(0),
  "quicachdonggoi": "",
  "ngaydonggoi": "",
  "hansudung": "",
  "huongdansudung": "",
  "huongdanbaoquan": "",
  "id_loainongsan": ObjectId("58c664e332341c9c09002b48"),
  "id_donvisanxuat": ObjectId("58c665c132341c9c090002ef"),
  "id_donvisoche": "",
  "id_donvikinhdoanh": [
    "58c6627932341ca409000b6f",
    "58c662a532341ca409003ab2",
    "58c6634132341ca409007326"
  ],
  "vanchuyen": [
    
  ],
  "phunthuoc": [
    
  ],
  "bonphan": [
    
  ],
  "hinhanh": [
    {
      "filename": "khoailang.png",
      "aliasname": "c9417f60ec00a1c6f8eac02762ada31d_20170313100319.png"
    }
  ],
  "ghichu": "",
  "tinhtrang": NumberInt(0),
  "kiemduyet": [
    
  ],
  "id_user": ObjectId("589977f03da730a419000029"),
  "id_user_update": ObjectId("58c6669c32341c9809002ac2"),
  "date_post": ISODate("2017-03-13T09:41:25.0Z"),
  "date_change": ISODate("2017-03-13T09:41:25.0Z")
});
db.getCollection("sanpham").insert({
  "_id": ObjectId("58c6697e32341c9c09006f53"),
  "matrangtrai": "58C6695199739",
  "masanpham": "58C669526016C",
  "ten": "Củ Sắn",
  "ngaygieo": ISODate("2017-03-12T23:00:00.0Z"),
  "dientich": NumberInt(0),
  "ngaydukienthuhoach": ISODate("2017-03-27T22:00:00.0Z"),
  "ngaythuhoach": "",
  "sanluong": NumberInt(0),
  "quicachdonggoi": "",
  "ngaydonggoi": "",
  "hansudung": "",
  "huongdansudung": "",
  "huongdanbaoquan": "",
  "id_loainongsan": ObjectId("58c664da32341c9c09004dcf"),
  "id_donvisanxuat": ObjectId("58c665ee32341c9c09004957"),
  "id_donvisoche": "",
  "id_donvikinhdoanh": [
    "58c6627932341ca409000b6f",
    "58c662a532341ca409003ab2",
    "58c6634132341ca409007326"
  ],
  "vanchuyen": [
    
  ],
  "phunthuoc": [
    
  ],
  "bonphan": [
    
  ],
  "hinhanh": [
    {
      "filename": "cusan.png",
      "aliasname": "d3030cd41807c831aeca85d43e3f45a2_20170313100321.png"
    }
  ],
  "ghichu": "",
  "tinhtrang": NumberInt(0),
  "kiemduyet": [
    
  ],
  "id_user": ObjectId("589977f03da730a419000029"),
  "id_user_update": ObjectId("58c6669c32341c9809002ac2"),
  "date_post": ISODate("2017-03-13T09:42:22.0Z"),
  "date_change": ISODate("2017-03-13T09:42:22.0Z")
});
db.getCollection("sanpham").insert({
  "_id": ObjectId("58c669aa32341c8809003613"),
  "matrangtrai": "58C6698939CAD",
  "masanpham": "58C6698A0BE7C",
  "ten": "Khổ Qua",
  "ngaygieo": ISODate("2017-03-12T23:00:00.0Z"),
  "dientich": NumberInt(1000),
  "ngaydukienthuhoach": ISODate("2017-03-30T22:00:00.0Z"),
  "ngaythuhoach": "",
  "sanluong": NumberInt(0),
  "quicachdonggoi": "",
  "ngaydonggoi": "",
  "hansudung": "",
  "huongdansudung": "",
  "huongdanbaoquan": "",
  "id_loainongsan": ObjectId("58c6654e32341c9c09007a8b"),
  "id_donvisanxuat": ObjectId("58c665c132341c9c090002ef"),
  "id_donvisoche": "",
  "id_donvikinhdoanh": [
    "58c6627932341ca409000b6f",
    "58c662a532341ca409003ab2",
    "58c6634132341ca409007326"
  ],
  "vanchuyen": [
    
  ],
  "phunthuoc": [
    
  ],
  "bonphan": [
    
  ],
  "hinhanh": [
    {
      "filename": "khoqua.png",
      "aliasname": "32203d4da98388e79db64385f7b47bde_20170313100300.png"
    }
  ],
  "ghichu": "",
  "tinhtrang": NumberInt(0),
  "kiemduyet": [
    
  ],
  "id_user": ObjectId("589977f03da730a419000029"),
  "id_user_update": ObjectId("58c6669c32341c9809002ac2"),
  "date_post": ISODate("2017-03-13T09:43:06.0Z"),
  "date_change": ISODate("2017-03-13T09:43:06.0Z")
});
db.getCollection("sanpham").insert({
  "_id": ObjectId("58c669d432341c9c09005608"),
  "matrangtrai": "58C669B68D6EF",
  "masanpham": "58C669B75C20C",
  "ten": "Khoai Tây",
  "ngaygieo": ISODate("2017-03-12T23:00:00.0Z"),
  "dientich": NumberInt(1000),
  "ngaydukienthuhoach": ISODate("2017-03-30T22:00:00.0Z"),
  "ngaythuhoach": "",
  "sanluong": NumberInt(0),
  "quicachdonggoi": "",
  "ngaydonggoi": "",
  "hansudung": "",
  "huongdansudung": "",
  "huongdanbaoquan": "",
  "id_loainongsan": ObjectId("58c664fb32341c9c090070a6"),
  "id_donvisanxuat": ObjectId("58c665ee32341c9c09004957"),
  "id_donvisoche": "",
  "id_donvikinhdoanh": [
    "58c6627932341ca409000b6f",
    "58c662a532341ca409003ab2",
    "58c6634132341ca409007326"
  ],
  "vanchuyen": [
    
  ],
  "phunthuoc": [
    
  ],
  "bonphan": [
    
  ],
  "hinhanh": [
    {
      "filename": "khoaitay.png",
      "aliasname": "4acf5d469dc9ccb6a410583e2f30014a_20170313100346.png"
    }
  ],
  "ghichu": "",
  "tinhtrang": NumberInt(0),
  "kiemduyet": [
    
  ],
  "id_user": ObjectId("589977f03da730a419000029"),
  "id_user_update": ObjectId("58c6669c32341c9809002ac2"),
  "date_post": ISODate("2017-03-13T09:43:48.0Z"),
  "date_change": ISODate("2017-03-13T09:43:48.0Z")
});
db.getCollection("sanpham").insert({
  "_id": ObjectId("59eecd217247ae3c05000029"),
  "matrangtrai": "59EECCE1B2FAE",
  "masanpham": "59EECCE400E43",
  "ten": "Rau củ xanh bo",
  "ngaygieo": ISODate("2017-10-24T00:00:00.0Z"),
  "dientich": NumberInt(100),
  "ngaydukienthuhoach": ISODate("2017-10-31T00:00:00.0Z"),
  "ngaythuhoach": "",
  "sanluong": NumberInt(0),
  "quicachdonggoi": "",
  "ngaydonggoi": "",
  "hansudung": "",
  "huongdansudung": "",
  "huongdanbaoquan": "",
  "id_loainongsan": ObjectId("58c6649e32341c9c09003128"),
  "id_donvisanxuat": ObjectId("58c665c132341c9c090002ef"),
  "id_donvisoche": "",
  "id_donvikinhdoanh": "",
  "vanchuyen": [
    
  ],
  "phunthuoc": [
    
  ],
  "bonphan": [
    
  ],
  "hinhanh": [
    {
      "filename": "demo1_210x210.png",
      "aliasname": "e7818e95a24ccb3b6a433f3fe4f17065_20171024051017.png"
    }
  ],
  "ghichu": "",
  "tinhtrang": NumberInt(0),
  "kiemduyet": [
    
  ],
  "id_user": ObjectId("589977f03da730a419000029"),
  "id_user_update": ObjectId("58c6669c32341c9809002ac2"),
  "date_post": ISODate("2017-10-24T05:18:25.0Z"),
  "date_change": ISODate("2017-10-24T05:18:25.0Z")
});

/** sessions records **/
db.getCollection("sessions").insert({
  "_id": ObjectId("58c660f5c10b20d812da7c02"),
  "session_id": "4p4u9jd38uhulho81pij3ibq24",
  "data": "_token|s:32:\"dd2cb2c6adf288d13f162f73a78db556\";user_id|s:24:\"589977f03da730a419000029\";roles|i:1;",
  "timedout_at": NumberInt(1489404228),
  "expired_at": NumberInt(1489431957)
});
db.getCollection("sessions").insert({
  "_id": ObjectId("58b4199d4b52c8806027a589"),
  "session_id": "920e63t3jg9oaf99n0csa2si34",
  "data": "user_id|s:24:\"589977f03da730a419000029\";roles|i:1;",
  "timedout_at": NumberInt(1488212150),
  "expired_at": NumberInt(1488234045)
});
db.getCollection("sessions").insert({
  "_id": ObjectId("58aba2aeba7d3f7ab85c6798"),
  "session_id": "8m4jj52a8fksn9rbaggckf5cv2",
  "data": "user_id|s:24:\"589977f03da730a419000029\";roles|i:1;",
  "timedout_at": NumberInt(1487654292),
  "expired_at": NumberInt(1487679310)
});
db.getCollection("sessions").insert({
  "_id": ObjectId("58b3e525772d1fee5a6609de"),
  "session_id": "6eupd8l9armr1s0p3hro338l22",
  "data": "user_id|s:24:\"589977f03da730a419000029\";roles|i:1;",
  "timedout_at": NumberInt(1488195256),
  "expired_at": NumberInt(1488220613)
});
db.getCollection("sessions").insert({
  "_id": ObjectId("58b76205e13906dd760bf8e6"),
  "session_id": "ab8tat6r8c4nhro0965u9elgv5",
  "data": "user_id|s:24:\"589977f03da730a419000029\";roles|i:1;",
  "timedout_at": NumberInt(1488419313),
  "expired_at": NumberInt(1488449189)
});
db.getCollection("sessions").insert({
  "_id": ObjectId("58b787341d68a35fc3498847"),
  "session_id": "2evmntoq5pv6fg2itva222b5k7",
  "data": "user_id|s:24:\"589977f03da730a419000029\";roles|i:1;",
  "timedout_at": NumberInt(1488430139),
  "expired_at": NumberInt(1488458708)
});
db.getCollection("sessions").insert({
  "_id": ObjectId("58c4c391dab13809e8045285"),
  "session_id": "3mqsh2hlqi8dob5dl3pe5bi2r6",
  "data": "_token|s:32:\"057b852c5d6d788e1e37f38ec0f11746\";user_id|s:24:\"589977f03da730a419000029\";roles|i:1;",
  "timedout_at": NumberInt(1489301839),
  "expired_at": NumberInt(1489326129)
});
db.getCollection("sessions").insert({
  "_id": ObjectId("58c7bff1a44827ff8b8ccb90"),
  "session_id": "i7mer8trim5uc3sjh7kajnckl3",
  "data": "_token|s:32:\"1845779137277fd0ff6bb393a463e7ea\";user_id|s:24:\"589977f03da730a419000029\";roles|i:1;",
  "timedout_at": NumberInt(1489574295),
  "expired_at": NumberInt(1489603043)
});
db.getCollection("sessions").insert({
  "_id": ObjectId("58c7c252a44827ff8b8ccb91"),
  "session_id": "orgk5r22fm223uo2gk3jr9jfh6",
  "data": "_token|s:32:\"aaaa1f33882fb6db75efe9fdf77ae2ac\";user_id|s:24:\"589977f03da730a419000029\";roles|i:1;",
  "timedout_at": NumberInt(1489490354),
  "expired_at": NumberInt(1489519479)
});
db.getCollection("sessions").insert({
  "_id": ObjectId("58c89df9a44827ff8b8ccb94"),
  "session_id": "9rnte8h0esl4fotclgv7vmjrs2",
  "data": "_token|s:32:\"db6d9e9c4cf18abfc567402e92f7bce8\";user_id|s:24:\"589977f03da730a419000029\";roles|i:1;",
  "timedout_at": NumberInt(1489545750),
  "expired_at": NumberInt(1489575711)
});
db.getCollection("sessions").insert({
  "_id": ObjectId("58c8a1eda44827ff8b8ccb95"),
  "session_id": "0ismqs4c5mo7abets9ktu99u07",
  "data": "_token|s:32:\"06fd8ddf6df21bcd67bb8f77753713d6\";",
  "timedout_at": NumberInt(1489546722),
  "expired_at": NumberInt(1489576722)
});
db.getCollection("sessions").insert({
  "_id": ObjectId("58c92078a44827ff8b8ccb9c"),
  "session_id": "d7ol2mndumgmfj835i8j5i14s2",
  "data": "_token|s:32:\"0c085b351b05a96151bf9ae0690e7f3a\";",
  "timedout_at": NumberInt(1489579118),
  "expired_at": NumberInt(1489609117)
});
db.getCollection("sessions").insert({
  "_id": ObjectId("58c929f9a44827ff8b8ccb9d"),
  "session_id": "vlb9v6o8epa7lbvfao4ojgf855",
  "data": "_token|s:32:\"5c7049766950cc7ff4da0f85854db467\";",
  "timedout_at": NumberInt(1489581550),
  "expired_at": NumberInt(1489611550)
});
db.getCollection("sessions").insert({
  "_id": ObjectId("58c92ad7a44827ff8b8ccb9e"),
  "session_id": "rckahhupde1eqjfd2nst904o22",
  "data": "_token|s:32:\"1df540f6521421139e82a9fb2899df34\";",
  "timedout_at": NumberInt(1489581773),
  "expired_at": NumberInt(1489611773)
});
db.getCollection("sessions").insert({
  "_id": ObjectId("58c92ae5a44827ff8b8ccb9f"),
  "session_id": "nrcc16bdcm77fa45n0ctmjcf05",
  "data": "_token|s:32:\"d90a6e3dfe868d04a5bee6f9939e4b20\";",
  "timedout_at": NumberInt(1489581787),
  "expired_at": NumberInt(1489611787)
});
db.getCollection("sessions").insert({
  "_id": ObjectId("58c9efd0a44827ff8b8ccba1"),
  "session_id": "jhfu4edcs6kjh4ccl8188b6qd4",
  "data": "_token|s:32:\"dc317da552fe81ce0c00fb1a13bd8aa9\";",
  "timedout_at": NumberInt(1489632207),
  "expired_at": NumberInt(1489662198)
});
db.getCollection("sessions").insert({
  "_id": ObjectId("58d232c8a44827ff8b8ccbb3"),
  "session_id": "kgnb5h6tooufdcauqetc0e85n7",
  "data": "_token|s:32:\"6dc0a6288b603fd034ec2a5e62eb4950\";",
  "timedout_at": NumberInt(1490173633),
  "expired_at": NumberInt(1490203633)
});
db.getCollection("sessions").insert({
  "_id": ObjectId("58f6ed58a44827ff8b8ccc28"),
  "session_id": "eso04q87egq55i4h5r5rbpc1i3",
  "data": "_token|s:32:\"8b60aacf886233f0597d8d4cfb72ee25\";user_id|s:24:\"589977f03da730a419000029\";roles|i:1;",
  "timedout_at": NumberInt(1492580817),
  "expired_at": NumberInt(1492610704)
});
db.getCollection("sessions").insert({
  "_id": ObjectId("5937aaf5a44827ff8b8ccced"),
  "session_id": "nkr81krmn6q5f1utgkkaqgn1b7",
  "data": "_token|s:32:\"53ba48d570caff24f9c25489d681f391\";user_id|s:24:\"589977f03da730a419000029\";roles|i:1;",
  "timedout_at": NumberInt(1496823591),
  "expired_at": NumberInt(1496853573)
});
db.getCollection("sessions").insert({
  "_id": ObjectId("5955d721a44827ff8b8ccd2d"),
  "session_id": "dvr2v7gfn6e999b5onoj3f2l61",
  "data": "_token|s:32:\"8bfe6e51f4135934cba210b0efee9cd8\";",
  "timedout_at": NumberInt(1498800972),
  "expired_at": NumberInt(1498830972)
});
db.getCollection("sessions").insert({
  "_id": ObjectId("598d25b2a44827ff8b8ccfa9"),
  "session_id": "qmpa4h6nns94b3q4vu0pusjkm1",
  "data": "_token|s:32:\"eb6f6b780400b26a286c126ba34a0e2d\";user_id|s:24:\"589977f03da730a419000029\";roles|i:1;",
  "timedout_at": NumberInt(1502425683),
  "expired_at": NumberInt(1502455585)
});
db.getCollection("sessions").insert({
  "_id": ObjectId("598f2b65a44827ff8b8ccfbb"),
  "session_id": "ar6j8olcppaf940uo45rov8924",
  "data": "_token|s:32:\"4bb40acb4b1d79f6d747bbb471ef7e38\";user_id|s:24:\"589977f03da730a419000029\";roles|i:1;",
  "timedout_at": NumberInt(1502558118),
  "expired_at": NumberInt(1502588116)
});
db.getCollection("sessions").insert({
  "_id": ObjectId("59ae20f5a44827ff8b8cd0b8"),
  "session_id": "mv4988fp0b7jt0ubk1qr5kn3p3",
  "data": "_token|s:32:\"3000064c3a9d42b77ef4c263ac321910\";user_id|s:24:\"589977f03da730a419000029\";roles|i:1;",
  "timedout_at": NumberInt(1504586957),
  "expired_at": NumberInt(1504616944)
});
db.getCollection("sessions").insert({
  "_id": ObjectId("59d34b2fa44827ff8b8cd375"),
  "session_id": "r1j6e20ltl623ap38ls9gqcht6",
  "data": "_token|s:32:\"dbad2fb9dca541c77848be33f29e548c\";",
  "timedout_at": NumberInt(1507022608),
  "expired_at": NumberInt(1507052598)
});
db.getCollection("sessions").insert({
  "_id": ObjectId("59e6f29fa44827ff8b8cd660"),
  "session_id": "imbml4bq1v9a5nc69crp19ae76",
  "data": "_token|s:32:\"ff1973be3994f476d047ea814747d0f9\";user_id|s:24:\"589977f03da730a419000029\";roles|i:1;",
  "timedout_at": NumberInt(1508310693),
  "expired_at": NumberInt(1508340651)
});
db.getCollection("sessions").insert({
  "_id": ObjectId("59e70240a44827ff8b8cd663"),
  "session_id": "2bjd0q203viq8mcm6o1cgghi72",
  "data": "_token|s:32:\"a67a05fb5b2ab97446ad4b85d9c9b775\";user_id|s:24:\"589977f03da730a419000029\";roles|i:1;",
  "timedout_at": NumberInt(1508315251),
  "expired_at": NumberInt(1508344652)
});
db.getCollection("sessions").insert({
  "_id": ObjectId("59eda892848ab266841cd8d5"),
  "session_id": "o76vn3dlv9t958ovklibfpg2c1",
  "data": "_token|s:32:\"f8d58cfd50ee90931af9edb55290b755\";user_id|s:24:\"589977f03da730a419000029\";roles|i:1;",
  "timedout_at": NumberInt(1508753562),
  "expired_at": NumberInt(1508783410)
});
db.getCollection("sessions").insert({
  "_id": ObjectId("59eecfd7848ab266841cd8df"),
  "session_id": "9span9g4bici479dgc2635jp87",
  "data": "_token|s:32:\"d5a5868cee6986b6b687ddb4e195f3c2\";user_id|s:24:\"589977f03da730a419000029\";roles|i:1;",
  "timedout_at": NumberInt(1508832006),
  "expired_at": NumberInt(1508858999)
});
db.getCollection("sessions").insert({
  "_id": ObjectId("59eeebd7848ab266841cd8e0"),
  "session_id": "mordnphlu9ao1vqiidp5m52pn4",
  "data": "_token|s:32:\"f5cede36c40e5ac39dd96636c533e023\";user_id|s:24:\"589977f03da730a419000029\";roles|i:1;",
  "timedout_at": NumberInt(1508836424),
  "expired_at": NumberInt(1508866167)
});

/** users records **/
db.getCollection("users").insert({
  "_id": ObjectId("589977f03da730a419000029"),
  "username": "admin",
  "password": "21232f297a57a5a743894a0e4a801fc3",
  "roles": NumberInt(1),
  "person": "Quản trị",
  "logs": [
    {
      "in": ISODate("2017-02-07T07:32:38.0Z")
    },
    {
      "in": ISODate("2017-02-08T10:41:05.0Z")
    },
    {
      "in": ISODate("2017-02-08T14:40:19.0Z")
    },
    {
      "in": ISODate("2017-02-09T06:18:06.0Z")
    },
    {
      "in": ISODate("2017-02-09T08:43:16.0Z")
    },
    {
      "in": ISODate("2017-02-10T13:48:17.0Z")
    },
    {
      "in": ISODate("2017-02-18T07:32:01.0Z")
    },
    {
      "in": ISODate("2017-02-20T12:14:17.0Z")
    },
    {
      "in": ISODate("2017-02-20T12:41:41.0Z")
    },
    {
      "in": ISODate("2017-02-21T02:15:14.0Z")
    },
    {
      "in": ISODate("2017-02-27T08:30:38.0Z")
    },
    {
      "out": ISODate("2017-02-27T08:36:53.0Z")
    },
    {
      "in": ISODate("2017-02-27T08:36:56.0Z")
    },
    {
      "in": ISODate("2017-02-27T12:21:15.0Z")
    },
    {
      "in": ISODate("2017-03-02T00:07:26.0Z")
    },
    {
      "in": ISODate("2017-03-02T02:45:10.0Z")
    },
    {
      "in": ISODate("2017-03-12T03:42:18.0Z")
    },
    {
      "in": ISODate("2017-03-13T09:06:24.0Z")
    },
    {
      "in": ISODate("2017-03-14T09:36:16.769Z")
    },
    {
      "in": ISODate("2017-03-15T01:02:02.434Z")
    },
    {
      "in": ISODate("2017-03-15T08:58:14.326Z")
    },
    {
      "in": ISODate("2017-03-16T00:59:02.386Z")
    },
    {
      "out": ISODate("2017-03-16T01:03:18.697Z")
    },
    {
      "in": ISODate("2017-04-19T04:05:14.657Z")
    },
    {
      "in": ISODate("2017-06-07T06:39:41.800Z")
    },
    {
      "in": ISODate("2017-06-30T03:55:45.620Z")
    },
    {
      "out": ISODate("2017-06-30T03:56:12.135Z")
    },
    {
      "in": ISODate("2017-08-11T02:46:36.405Z")
    },
    {
      "in": ISODate("2017-08-12T15:31:35.755Z")
    },
    {
      "out": ISODate("2017-08-12T15:35:16.487Z")
    },
    {
      "in": ISODate("2017-08-12T15:35:18.143Z")
    },
    {
      "in": ISODate("2017-09-05T03:08:18.106Z")
    },
    {
      "out": ISODate("2017-09-05T03:09:04.429Z")
    },
    {
      "in": ISODate("2017-09-05T03:09:07.720Z")
    },
    {
      "in": ISODate("2017-10-18T05:30:59.107Z")
    },
    {
      "in": ISODate("2017-10-18T06:37:39.607Z")
    },
    {
      "in": ISODate("2017-10-23T08:30:15.0Z")
    },
    {
      "in": ISODate("2017-10-24T05:11:32.0Z")
    },
    {
      "out": ISODate("2017-10-24T05:29:59.0Z")
    },
    {
      "in": ISODate("2017-10-24T06:18:33.0Z")
    },
    {
      "in": ISODate("2017-10-24T07:29:35.0Z")
    }
  ]
});
db.getCollection("users").insert({
  "_id": ObjectId("589978b13da7308415000029"),
  "username": "tdmtri",
  "password": "e10adc3949ba59abbe56e057f20f883e",
  "roles": NumberInt(7),
  "person": "Từ Đỗ Minh Trí"
});
db.getCollection("users").insert({
  "_id": ObjectId("58c6669c32341c9809002ac2"),
  "username": "pmtrung",
  "password": "ec705f9abe736346fc04409dc85c79d8",
  "roles": NumberInt(8),
  "person": "Phan Minh Trung"
});
