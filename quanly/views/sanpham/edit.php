	<link href="css/add.css" rel="stylesheet" type="text/css"/>
	<script src="js/add.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>
	
	<script type="text/javascript">
		$(document).ready(function(){
			$('#id_1').change(function(){
				vl = this.value;
				$('#ajax_loai').load('controllers/sanpham/ajax_loai.php?id_1=' + vl);
			});
		});
	</script>
	
<!-- CONTENT -->
    <div class="main">
        <div class="main-content">
            <div class="path">
                <p><a href="?act=trangchu">Trang chủ</a><a href="?act=san_pham_list">Sản phẩm</a></p>
            </div>
            <div class="clear"></div>
            <div class="add-header">
                <div class="add-header-name">
                    <h2>Chỉnh sửa</h2>
                </div>
            </div>
            <div class="add-table">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="add-direction">
                        <ul>
                            <li class="add-acti-dir"><a>Thông tin</a></li>
                        </ul>
                    </div>
                    <div class="add-content">
                        <div class="add-info">
							<?php if(isset($error) && strlen($error)>0){echo '<div class="one-add one-add-code"><p style="color:red;">'.$error.'</p></div>';}?>
                            <div class="add-info-left col-xs-12 col-sm-7">
								<div class="one-add one-add-name">
                                    <label>Tiêu đề</label>
                                    <div class="one-wrap-form">
                                        <input type="text" name="name" maxlength="200" value="<?php echo $row['name'];?>">
                                    </div>
                                    <div class="one-help">
                                        <i class="fa fa-info-circle"></i>
                                        <div class="one-help-text">
                                            <div class="inner-one-help-text">
                                                <p>Dưới 200 ký tự</p>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
								<div class="one-add one-add-type">
                                    <label>Loại SP</label>
                                    <div class="one-wrap-form">
                                        <select name="id_1" id="id_1">
											<option value="0">-- Chọn loại 1 --</option>
                                            <?php
												$array_type = $db->get_list_san_pham_type_1(1,'dayup DESC');
												foreach($array_type as $row_1){
													if($id_1==$row_1['id']){
														echo '<option value="'.$row_1['id'].'" selected>'.$row_1['name'].'</option>';
													}else{
														echo '<option value="'.$row_1['id'].'">'.$row_1['name'].'</option>';
													}
												}
											?>
                                        </select>
                                    </div>
                                </div>
								<span id="ajax_loai">
								<div class="one-add one-add-type">
                                    <label></label>
                                    <div class="one-wrap-form">										
										<select name="id_2">
											<option value="0">-- Chọn loại 2 --</option>
                                            <?php
												if($id_1>0){
													$array_type = $db->get_list_san_pham_type_2(1,'dayup DESC',$_SESSION['id_1']);
													foreach($array_type as $row_2){
														if($id_2==$row_2['id']){
															echo '<option value="'.$row_2['id'].'" selected>'.$row_2['name'].'</option>';
														}else{
															echo '<option value="'.$row_2['id'].'">'.$row_2['name'].'</option>';
														}
													}
												}
											?>
                                        </select>
                                    </div>
                                </div>
								</span>
								<div class="one-add one-add-old-price">
                                    <label>Giá</label>
                                    <div class="one-wrap-form">
                                        <input type="text" name="price" value="<?php echo $row['price'];?>">
                                    </div>
                                    <div class="one-help">
                                        <i class="fa fa-info-circle"></i>
                                        <div class="one-help-text">
                                            <div class="inner-one-help-text">
                                                <p>Giá</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>	
								<div class="one-add one-add-old-price">
                                    <label>Sale</label>
                                    <div class="one-wrap-form">
                                        <input type="number" name="sale" value="<?php echo $row['sale'];?>">
                                    </div>
                                    <div class="one-help">
                                        <i class="fa fa-info-circle"></i>
                                        <div class="one-help-text">
                                            <div class="inner-one-help-text">
                                                <p>Nhập % sale</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<div class="one-add one-add-long-info">
									<label>Mô tả</label>
									<div class="one-wrap-form">
										<textarea rows="6" name="short_info"><?php echo $row['short_info'];?></textarea>
										<?php editorArea('short_info');?>
									</div>
								</div>
								<div class="one-add one-add-long-info">
									<label>Chi tiết</label>
									<div class="one-wrap-form">
										<textarea rows="6" name="info"><?php echo $row['info'];?></textarea>
										<?php editorArea('info');?>
									</div>
								</div>
								<div class="one-add one-add-long-info">
									<label>Thông số kỹ thuật</label>
									<div class="one-wrap-form">
										<textarea rows="6" name="thongso"><?php echo $row['thongso'];?></textarea>
										<?php editorArea('thongso');?>
									</div>
								</div>
                            </div>
							<div class="add-info-right col-xs-12 col-sm-5">
                                <div class="one-add one-add-image">
                                    <div class="one-image-box">
										<?php
											if(strlen($row['image'])>0 && file_exists('../images/sanpham/'.$row['image'])){
												echo '<img alt="image" src="../images/sanpham/'.$row['image'].'">';
											}else{
												echo '<img alt="image" src="../images/default.jpg">';
											}
										?>										
                                    </div>
                                    <div class="one-wrap-form">
                                        <label for="e-upload-photos"><i class="fa fa-camera"></i>Chọn ảnh</label>
                                        <input style="display:none" type="file" id="e-upload-photos" name="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="add-submit">
                        <div class="inner-add-submit">
							<input type="hidden" name="id" value="<?php echo $row['id'];?>">
                            <input type="submit" value="Thay đổi" name="edit-bt">
                            <a href="?<?php echo $_SESSION['urlctkt'];?>">Quay lại</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>