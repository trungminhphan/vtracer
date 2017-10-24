function random_code(name){
    $("." + name).click(function(){
        var _this = $(this);
        $.get(_this.attr("href"), function(data){
            $("#" + _this.attr("name")).val(data);
        });
    });
}

function upload_images(){
	$(".hinhanh_file").change(function() {
	  var formData = new FormData($("#themnongsanmoigieo")[0]);
	   $.ajax({
        url: "post.upload_images.php", type: "POST",
        data: formData, async: false,
        success: function(datas) {
            if(datas=='Failed'){
                $.Notify({type: 'alert', caption: 'Thông báo', content: "Không thể Thêm học tập"});
            } else {
            	//$(".info").remove();
                $("#images_list").prepend(datas); delete_file();colorbox();
            }
      	},
      	cache: false, contentType: false, processData: false
        }).fail(function() {
            $.Notify({type: 'alert', caption: 'Thông báo', content: "Không thể Upload tập tin"});
        });
	});
}
function colorbox(){
    $(".colorbox").colorbox({rel:'colorbox'});
}

function delete_file(){
	var link_delete; var _this;
	$(".delete_file").click(function(){
		link_delete = $(this).attr("href");	_this = $(this);
		$.ajax({
            url: link_delete,
            type: "GET",
            success: function(datas) {
            	$.Notify({type: 'alert', caption: 'Thông báo', content: datas});
            	_this.parents("div.row").fadeOut("slow", function(){
            		$(this).remove();
            	});
          	}
	    }).fail(function() {
	        $.Notify({type: 'alert', caption: 'Thông báo', content: "Không thể xoá."});
	    });
	});
}