	<link href="css/photos.css" rel="stylesheet" type="text/css"/>
	<script src="js/thumbnail.js" type="text/javascript"></script>
	<div class="main">
        <div class="main-content">
            <div class="path">
                <p>
					<a href="?act=trangchu">Trang chủ</a>
					<a href="?act=san_pham_list">Sản phẩm</a>
					<?php
						echo '<a href="?act=san_pham_detail&id='.$row['id'].'">'.$row['name'].'</a>';
					?>
				</p>
            </div>
            <div class="clear"></div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="main-header">
                    <div class="main-header-name">
                        <h2>Slide ảnh</h2> <?php if(isset($error) && strlen($error)>0){echo '<span style="color:red;">*** '.$error.'</span>';}?>
                    </div>
                        <div class="main-header-button">
							<div class="main-header-image">
                                <div class="main-button-image">
                                    <label for="file"><i class="fa fa-camera"></i>Chọn ảnh</label>
                                    <input style="display:none" type="file" id="file" name="file[]" multiple>
									<input type="hidden" name="id" value="<?php echo $row['id'];?>">
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
                        <div class="main-thumb-row">
							<?php
								$dem = 0;
								for($i=0;$i<$n;$i++){
									if(strlen($array[$i])>0 && file_exists('../images/sanpham/'.$array[$i])){
										$dem++;
										echo '<div class="one-main-thumb col-xs-6 col-sm-3 col-md-2">';
											echo '<div class="inner-one-main-thumb">';
												echo '<div class="main-thumb-option">';
													//echo '<a><div><i class="fa fa-check"></i></div><input type="checkbox" name="arrid[]" value="'.$row[1]['id'].'" style="display:none"></a>';
													echo '<a href="?act=san_pham_slide_delete&id='.$id.'&str='.$array[$i].'" title="Xóa"><i class="icon-cross"></i></a>';
												echo '</div>';
												echo '<div class="main-thumb-image image-td">';
													echo '<img title="click để xem Full!" src="../images/sanpham/'.$array[$i].'">';
												echo '</div>';
												echo '<div class="main-thumb-path">';
													echo '<p></p>';
												echo '</div>';
											echo '</div>';
										echo '</div>';	
									}
								}
							?>                            
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
