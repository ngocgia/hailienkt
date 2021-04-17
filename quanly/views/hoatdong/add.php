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
                                    <label>Tên</label>
                                    <div class="one-wrap-form">
                                        <input type="text" name="name" maxlength="200" <?php if(isset($_SESSION['name'])){echo 'value="'.$_SESSION['name'].'"';}?> required placeholder="Nhập tên ...">
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
										<textarea rows="6" name="short_info"><?php if(isset($_SESSION['short_info'])){echo $_SESSION['short_info'];}?></textarea>
									</div>
								</div>
								<div class="one-add one-add-old-price">
                                    <label>Ảnh chính</label>
                                    <div class="one-wrap-form">
                                        <input name="image" style="width:500px;" type="file">
                                    </div>
                                </div>
								<div class="one-add one-add-long-info">
									<label>Chi tiết</label>
									<div class="one-wrap-form">
										<textarea rows="6" name="info"><?php if(isset($_SESSION['info'])){echo $_SESSION['info'];}?></textarea>
										<?php editorAreaFull('info');?>
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