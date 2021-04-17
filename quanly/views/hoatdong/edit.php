	<link href="css/add.css" rel="stylesheet" type="text/css"/>
	<script src="js/add.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>
	
<!-- CONTENT -->
    <div class="main">
        <div class="main-content">
            <div class="path">
                <p><a href="?act=trangchu">Trang chủ</a><a href="?act=hoat_dong_list">Hoạt động</a></p>
            </div>
            <div class="clear"></div>
            <div class="add-header">
                <div class="add-header-name">
                    <h2>Chỉnh sữa</h2>
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
                                    <label>Tên</label>
                                    <div class="one-wrap-form">
                                        <input type="text" name="name" maxlength="200" required value="<?php echo $row['name'];?>">
                                    </div>
                                    <div class="one-help">
                                        <i class="fa fa-info-circle"></i>
                                        <div class="one-help-text">
                                            <div class="inner-one-help-text">
                                                <p>Tên</p>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
								<div class="one-add one-add-long-info">
									<label>Mô tả</label>
									<div class="one-wrap-form">
										<textarea rows="6" name="short_info"><?php echo $row['short_info'];?></textarea>
									</div>
								</div>
								<div class="one-add one-add-long-info">
									<label>Chi tiết</label>
									<div class="one-wrap-form">
										<textarea rows="6" name="info"><?php echo $row['info'];?></textarea>
										<?php editorAreaFull('info');?>
									</div>
								</div>
                            </div>
							<div class="add-info-right col-xs-12 col-sm-5">
                                <div class="one-add one-add-image">
                                    <div class="one-image-box">
										<?php
											if(strlen($row['image'])>0 && file_exists('../images/hoatdong/'.$row['image'])){
												echo '<img alt="image" src="../images/hoatdong/'.$row['image'].'">';
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