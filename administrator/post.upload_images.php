<?php
require_once('header_none.php');
if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST"){
	if(isset($_FILES['hinhanh_file']['name']) && $_FILES['hinhanh_file']['name']){
		// Loop $_FILES to exeicute all files
		foreach ($_FILES['hinhanh_file']['name'] as $f => $name) {   
		    if ($_FILES['hinhanh_file']['error'][$f] == 4) {
		        echo 'Failed';
		        continue; // Skip file if any error found
		    } 
		    if ($_FILES['hinhanh_file']['error'][$f] == 0) {	           
		        if ($_FILES['hinhanh_file']['size'][$f] > $max_file_size) {
		        	echo '<div class="row cells12" style="padding:0px 0px 10px 0px;">';
					echo '<div class="cell colspan2"></div>';
					echo '<div class="cell colspan10">';
		            echo '<div class="info bg-red padding10 fg-white"><span class="mif-blocked"></span> '. $name.' quá lớn!.';
		            echo '</div>';
					echo '</div>';
		            continue; // Skip large files
		        } elseif(!in_array(strtolower(pathinfo($name, PATHINFO_EXTENSION)), $images_extension) ){
					echo '<div class="row info cells12" style="padding:0px 0px 10px 0px;">';
					echo '<div class="cell colspan2"></div>';
					echo '<div class="cell colspan10">';
					echo '<div class="bg-red padding10 fg-white"><span class="mif-blocked"></span> ' . $name .' không được phép';
					echo '</div>';
					echo '</div>';
					continue; // Skip invalid file formats
				} else{ // No error found! Move uploaded files 
					$extension = pathinfo($name, PATHINFO_EXTENSION);
					$alias = md5($name);
					$alias_name =  $alias . '_'. date("Ymdhms") . '.' . $extension;
		            if(move_uploaded_file($_FILES["hinhanh_file"]["tmp_name"][$f], $target_images.$alias_name))
		            echo '<div class="row" style="width:30%; float:left; margin:0 0 3% 3%;">
			                <div class="image-container">
			                    <div class="frame"><img src="'.$target_images.$alias_name.'"></div>
			                    <div class="bg-white" style="position:absolute;top:5px;right:5px;padding:5px;">
			                        <a href="get.xoahinhanh.html?filename='.$alias_name.'" onclick="return false;" class="delete_file fg-red"><span class="mif-bin "></span></a>
			                        <input type="hidden" name="hinhanh_aliasname[]" value="'.$alias_name.'" readonly/>
			                        <input type="hidden" name="hinhanh_filename[]" value="'.$name.'" class="bg-grayLighter"/>
			                    </div>
			                </div>
			            </div>';
		            //$count++;  Number of successfully uploaded file
		        	/*echo '<div class="row cells12" style="padding:0px 0px 10px 0px;margin:0px;">';
						echo '<div class="cell colspan2"></div>';
						echo '<div class="cell colspan10 input-control text">';
							echo '<input type="hidden" name="hinhanh_aliasname[]" value="'.$alias_name.'" readonly/>';
							echo '<span class="mif-attachment prepend-icon"></span>';
							echo '<input type="text" name="hinhanh_filename[]" value="'.$name.'" class="bg-grayLighter" style="padding-left:50px;"/>';
							echo '<div class="button-group">';
								echo '<a href="get.xoataptin.html?filename='.$alias_name.'" onclick="return false;" class="delete_file button"><span class="mif-cross fg-red"></span></a>';
								echo '<a href="'.$target_images.$alias_name.'" class="button colorbox" target="_blank"><span class="mif-file-download fg-blue"></span></a>';
							echo '</div>';
						echo '</div>';
					echo '</div>';*/
		        }
		    }
		}
	} else {
		echo '<div class="info row cells12" style="padding:0px 0px 10px 0px;">';
		echo '<div class="cell colspan2"></div>';
		echo '<div class="cell colspan10 input-control text">';
		echo '<div class="bg-red padding10 fg-white"><span class="mif-blocked"></span> Không đủ bộ nhớ để upload, vui lòng chọn lại ít tập tin hơn</div>';
		echo '</div>';
		echo '</div>';
	}
}
?>