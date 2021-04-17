	<link href="css/edit.css" rel="stylesheet" type="text/css"/>
	<script src="js/add.js" type="text/javascript"></script>
	<div class="main">
        <div class="main-content">
            <div class="path">
                <p><a href="?act=trangchu">Trang chủ</a><a href="?act=thongtintaikhoan">Thông tin tài khoản</a></p>
            </div>
            <div class="clear"></div>
            <div class="add-header">
                <div class="add-header-name">
                    <h2>Thông tin tài khoản</h2>
                </div>
            </div>
            <div class="add-table">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="add-direction">
                        <ul>
                            <li class="add-acti-dir"><a>Thông tin cá nhân</a></li>
                            <li><a>Đổi mật khẩu</a></li>
                        </ul>
                    </div>
                    <div class="add-content">
                        <div class="add-info">
                            <div class="add-info-left col-xs-12 col-sm-7">
								<?php if(isset($error) && strlen($error)>0){echo '<div class="one-add one-add-code"><p style="color:red;">'.$error.'</p></div>';}?>
                                <div class="one-add one-add-code">
                                    <label>Tài khoản</label>
                                    <div class="one-wrap-form">
                                        <p><?php echo $row['username'];?></p>
                                    </div>
                                    <div class="one-help">                                        
                                    </div>
                                </div>
								<div class="one-add one-add-code">
                                    <label>Vị trí</label>
                                    <div class="one-wrap-form">
										<?php
											if($row['id_type']==1){echo '<p>Admin</p>';}
											if($row['id_type']==3){echo '<p>Nhân viên</p>';}
										?>
                                    </div>
                                    <div class="one-help">                                        
                                    </div>
                                </div>
                                <div class="one-add one-add-name">
                                    <label>Họ tên</label>
                                    <div class="one-wrap-form">
                                        <input type="text" name="name" maxlength="200" value="<?php echo $row['name'];?>" required>
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
                                    <label>Email</label>
                                    <div class="one-wrap-form">
                                        <input type="text" name="email" maxlength="200" value="<?php echo $row['email'];?>" required>
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
                                    <label>Phone</label>
                                    <div class="one-wrap-form">
                                        <input type="text" name="phone" maxlength="11" value="<?php echo $row['phone'];?>" required>
                                    </div>
                                    <div class="one-help">
                                        <i class="fa fa-info-circle"></i>
                                        <div class="one-help-text">
                                            <div class="inner-one-help-text">
                                                <p>Dưới 11 ký tự</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="add-desc">
                            <div class="one-add one-add-short-info">
                                <label>Mật khẩu cũ</label>
                                <div class="one-wrap-form">
                                    <input type="password" maxlength="32" name="old_password" value="">
                                </div>
                                <div class="one-help">
                                    <i class="fa fa-info-circle"></i>
                                    <div class="one-help-text">
                                        <div class="inner-one-help-text">
                                            <p>Nhập mật khẩu hiện tại</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="one-add one-add-long-info">
                                <label>Mật khẩu mới</label>
                                <div class="one-wrap-form">
                                    <input type="password" maxlength="32" name="new_password" value="">
                                </div>
                                <div class="one-help">
                                    <i class="fa fa-info-circle"></i>
                                    <div class="one-help-text">
                                        <div class="inner-one-help-text">
                                            <p>Nhập mật khẩu muốn thay đổi</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="one-add one-add-long-info">
                                <label>Nhập lại</label>
                                <div class="one-wrap-form">
                                    <input type="password" maxlength="32" name="renew_password" value="">
                                </div>
                                <div class="one-help">
                                    <i class="fa fa-info-circle"></i>
                                    <div class="one-help-text">
                                        <div class="inner-one-help-text">
                                            <p>Nhập lại mật khẩu muốn thay đổi</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="add-submit">
                        <div class="inner-add-submit">
                            <input type="submit" value="Lưu lại" name="edit-bt">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>