	<link href="css/add.css" rel="stylesheet" type="text/css"/>
	<script src="js/add.js" type="text/javascript"></script>
	
<!-- CONTENT -->
    <div class="main">
        <div class="main-content">
            <div class="path">
                <p><a href="?act=trangchu">Trang chủ</a><a href="?act=nhan_vien_list">Danh sách Nhân viên</a></p>
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
                                    <label>Họ tên</label>
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
								<div class="one-add one-add-name">
                                    <label>Điện thoại</label>
                                    <div class="one-wrap-form">
                                        <input type="text" name="phone" value="<?php echo $row['phone'];?>">
                                    </div>
                                    <div class="one-help">
                                        <i class="fa fa-info-circle"></i>
                                        <div class="one-help-text">
                                            <div class="inner-one-help-text">
                                                <p>Số liên hệ của người dùng (0903456123)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<div class="one-add one-add-name">
                                    <label>Email</label>
                                    <div class="one-wrap-form">
                                        <input type="text" name="email" value="<?php echo $row['email'];?>">
                                    </div>
                                    <div class="one-help">
                                        <i class="fa fa-info-circle"></i>
                                        <div class="one-help-text">
                                            <div class="inner-one-help-text">
                                                <p>Email của người dùng (bắt buột và không quá 200 ký tự)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<div class="one-add one-add-name">
                                    <label>Địa chỉ</label>
                                    <div class="one-wrap-form">
                                        <input type="text" name="address" value="<?php echo $row['address'];?>">
                                    </div>
                                    <div class="one-help">
                                        <i class="fa fa-info-circle"></i>
                                        <div class="one-help-text">
                                            <div class="inner-one-help-text">
                                                <p>Địa chỉ của người dùng</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<div class="one-add one-add-name">
                                    <label>Ngày sinh</label>
                                    <div class="one-wrap-form">
                                        <input type="text" name="birthday" value="<?php echo $row['birthday'];?>">
                                    </div>
                                    <div class="one-help">
                                        <i class="fa fa-info-circle"></i>
                                        <div class="one-help-text">
                                            <div class="inner-one-help-text">
                                                <p>Ngày sinh: dd/mm/YY</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<div class="one-add one-add-old-price">
                                    <label>Lương</label>
                                    <div class="one-wrap-form">
                                        <input type="number" name="luong" value="<?php echo $row['luong'];?>">
                                    </div>
                                    <div class="one-help">
                                        <i class="fa fa-info-circle"></i>
                                        <div class="one-help-text">
                                            <div class="inner-one-help-text">
                                                <p>Lương thoả thuận</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<div class="one-add one-add-old-price">
                                    <label>CMND 1</label>
                                    <div class="one-wrap-form">
                                        <input name="cmnd1" style="width:500px;" type="file">
                                    </div>
                                    <div class="one-help">
                                        <i class="fa fa-info-circle"></i>
                                        <div class="one-help-text">
                                            <div class="inner-one-help-text">
                                                <p>Ảnh mặt trước CMND</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<div class="one-add one-add-old-price">
                                    <label>CMND 2</label>
                                    <div class="one-wrap-form">
                                        <input name="cmnd2" style="width:500px;" type="file">
                                    </div>
                                    <div class="one-help">
                                        <i class="fa fa-info-circle"></i>
                                        <div class="one-help-text">
                                            <div class="inner-one-help-text">
                                                <p>Ảnh mặt sau CMND</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="add-info-right col-xs-12 col-sm-5">
                                <div class="one-add one-add-image">
                                    <div class="one-image-box">
										<?php
											if(strlen($row['cmnd1'])>0){
												echo '<img alt="image" src="images/cmnd/'.$row['cmnd1'].'">';
											}else{
												echo '<img alt="image" src="images/default.png">';
											}
										?>
										<?php
											if(strlen($row['cmnd2'])>0){
												echo '<img alt="image" src="images/cmnd/'.$row['cmnd2'].'">';
											}else{
												echo '<img alt="image" src="images/default.png">';
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