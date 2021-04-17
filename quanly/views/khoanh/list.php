	<link href="css/photos.css" rel="stylesheet" type="text/css"/>
	<script src="js/thumbnail.js" type="text/javascript"></script>

	
	<div class="main">
        <div class="main-content">
            <div class="path">
                <p><a href="?act=trangchu">Trang chủ</a><a href="?act=kho_anh_list">Kho ảnh</a></p>
            </div>
            <div class="clear"></div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="main-header">
                    <div class="main-header-name">
                        <h2>Kho ảnh</h2> <?php if(isset($error) && strlen($error)>0){echo '<span style="color:red;">*** '.$error.'</span>';}?>
                    </div>
                        <div class="main-header-button">
                            <div class="main-header-handle">
                                <a class="main-button-handle"><i class="fa fa-bars"></i><span class="hidden-xs">Thao tác</span><i class="fa fa-angle-down"></i></a>
                                <div class="main-handle-box">
                                    <ul>
                                        <li><button type="submit" name="delete-bt"><i class="fa fa-trash"></i>Xóa đã chọn</button></li>
                                    </ul>
                                </div>
                            </div>
							<div class="main-header-image">
                                <div class="main-button-image">
                                    <label for="file"><i class="fa fa-camera"></i>Chọn ảnh</label>
                                    <input style="display:none" type="file" id="file" name="file[]" multiple>
                                </div>
                            </div>
							<div class="main-header-submit">
                                <div class="main-button-submit">
                                    <button type="submit" name="p-up-photos">
                                        <i class="fa fa-plus"></i>Thêm ảnh
                                    </button>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="main-thumb">
                    <div class="inner-main-thumb">
                        <div class="main-thumb-total"><a><div><i class="fa fa-check"></i></div></a></div>
                        <div class="main-thumb-row">
							<?php
								while($row=each($array)){
									echo '<div class="one-main-thumb col-xs-6 col-sm-3 col-md-2">';
										echo '<div class="inner-one-main-thumb">';
											echo '<div class="main-thumb-option">';
												echo '<a><div><i class="fa fa-check"></i></div><input type="checkbox" name="arrid[]" value="'.$row[1]['id'].'" style="display:none"></a>';
												echo '<a href="?act=kho_anh_delete&id='.$row[1]['id'].'" title="Xóa"><i class="icon-cross"></i></a>';
											echo '</div>';
											echo '<div class="main-thumb-image image-td">';
												echo '<img title="click để xem Full!" src="../images/khoanh/'.$row[1]['image'].'">';
											echo '</div>';
											echo '<div class="main-thumb-path">';
												echo '<p>images/khoanh/'.$row[1]['image'].'</p>';
											echo '</div>';
										echo '</div>';
									echo '</div>';	
								}
							?>                            
                        </div>
                    </div>
                </div>
            </form>
			<?php if($pages>1){?>
            <div class="pages-number">
                <div class="inner-pages-number">
					<ul>
						<li <?php if(($num-4)<1){echo 'style="display:none;"';}?>><a href="?act=kho_anh_list&num=<?php echo $num-4;?>"><?php echo $num-4;?></a></li>
						<li <?php if(($num-3)<1){echo 'style="display:none;"';}?>><a href="?act=kho_anh_list&num=<?php echo $num-3;?>"><?php echo $num-3;?></a></li>
						<li <?php if(($num-2)<1){echo 'style="display:none;"';}?>><a href="?act=kho_anh_list&num=<?php echo $num-2;?>"><?php echo $num-2;?></a></li>
						<li <?php if(($num-1)<1){echo 'style="display:none;"';}?>><a href="?act=kho_anh_list&num=<?php echo $num-1;?>"><?php echo $num-1;?></a></li>
						<li  <?php if(($num-1)<0){echo 'style="display:none;"';}?> class="active-num"><a href="?act=kho_anh_list&num=<?php echo $num;?>"><?php echo $num;?></a></li>
						<li <?php if(($num+1)>$pages){echo 'style="display:none;"';}?>><a href="?act=kho_anh_list&num=<?php echo $num+1;?>"><?php echo $num+1;?></a></li>
						<li <?php if(($num+2)>$pages){echo 'style="display:none;"';}?>><a href="?act=kho_anh_list&num=<?php echo $num+2;?>"><?php echo $num+2;?></a></li>
						<li <?php if(($num+3)>$pages){echo 'style="display:none;"';}?>><a href="?act=kho_anh_list&num=<?php echo $num+3;?>"><?php echo $num+3;?></a></li>
						<li <?php if(($num+4)>$pages){echo 'style="display:none;"';}?>><a href="?act=kho_anh_list&num=<?php echo $num+4;?>"><?php echo $num+4;?></a></li>
					</ul>
                </div>
            </div>
			<?php }?>
        </div>
    </div>