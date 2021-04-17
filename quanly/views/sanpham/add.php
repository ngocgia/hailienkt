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
                    <h2>Thêm mới</h2>
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
                                        <input type="text" name="name" maxlength="200" <?php if(isset($_SESSION['name'])){echo 'value="'.$_SESSION['name'].'"';}?> required placeholder="Nhập tiêu đề ...">
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
												foreach($array_type as $row){
													if(isset($_SESSION['id_1']) && $_SESSION['id_1']==$row['id']){
														echo '<option value="'.$row['id'].'" selected>'.$row['name'].'</option>';
													}else{
														echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
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
												if(isset($_SESSION['id_1']) && $_SESSION['id_1']>0){
													$array_type = $db->get_list_san_pham_type_2(1,'dayup DESC',$_SESSION['id_1']);
													foreach($array_type as $row){
														if(isset($_SESSION['id_2']) && $_SESSION['id_2']==$row['id']){
															echo '<option value="'.$row['id'].'" selected>'.$row['name'].'</option>';
														}else{
															echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
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
                                        <input type="text" name="price" <?php if(isset($_SESSION['price'])){echo 'value="'.$_SESSION['price'].'"';}else{echo 'value="0"';}?>>
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
                                        <input type="number" name="sale" <?php if(isset($_SESSION['sale'])){echo 'value="'.$_SESSION['sale'].'"';}else{echo 'value="0"';}?>>
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
								<div class="one-add one-add-old-price">
                                    <label>Ảnh chính</label>
                                    <div class="one-wrap-form">
                                        <input name="image" style="width:500px;" type="file">
                                    </div>
                                </div>
								<div class="one-add one-add-long-info">
									<label>Mô tả</label>
									<div class="one-wrap-form">
										<textarea rows="6" name="short_info"><?php if(isset($_SESSION['short_info'])){echo $_SESSION['short_info'];}?></textarea>
										<?php editorArea('short_info');?>
									</div>
								</div>
								<div class="one-add one-add-long-info">
									<label>Chi tiết</label>
									<div class="one-wrap-form">
										<textarea rows="6" name="info"><?php if(isset($_SESSION['info'])){echo $_SESSION['info'];}?></textarea>
										<?php editorAreaFull('info');?>
									</div>
								</div>
								<div class="one-add one-add-long-info">
									<label>Thông số kỹ thuật</label>
									<div class="one-wrap-form">
										<textarea rows="6" name="thongso"><?php if(isset($_SESSION['thongso'])){echo $_SESSION['thongso'];}?></textarea>
										<?php editorAreaFull('thongso');?>
									</div>
								</div>
                            </div>
                        </div>
                    </div>
                    <div class="add-submit">
                        <div class="inner-add-submit">
                            <input type="submit" value="Thêm mới" name="add-bt">
                            <a href="?<?php echo $_SESSION['urlctkt'];?>">Quay lại</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>