	<link href="css/edit.css" rel="stylesheet" type="text/css"/>
	<script src="js/add.js" type="text/javascript"></script>

<!-- CONTENT -->
	<div class="main">
        <div class="main-content">
            <div class="path">
                <p><a href="?act=trangchu">Trang chủ</a><a href="?act=tai_khoan_list">Danh sách Tài khoản</a></p>
            </div>
            <div class="clear"></div>
            <div class="add-header">
                <div class="add-header-name">
                    <h2>Chỉnh sửa tài khoản</h2>
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
                            <div class="add-info-left col-xs-12 col-sm-7">
								<?php if(isset($error) && strlen($error)>0){echo '<div class="one-add one-add-name"><label style="color:red;">'.$error.'</label></div>';}?>
								<div class="one-add one-add-name">
                                    <label>Tài khoản</label>
                                    <div class="one-wrap-form">
                                        <input type="text" name="username" style="background-color:#ececec;" value="<?php echo $row['username'];?>" disabled>
                                    </div>
                                    <div class="one-help">
                                        <i class="fa fa-info-circle"></i>
                                        <div class="one-help-text">
                                            <div class="inner-one-help-text">
                                                <p>Giá trị này không thể thay đổi</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								 <div class="one-add one-add-name">
									<label>Mật khẩu mới</label>
									<div class="one-wrap-form">
										<input type="password" name="password" value="">
									</div>
									<div class="one-help">
										<i class="fa fa-info-circle"></i>
										<div class="one-help-text">
											<div class="inner-one-help-text">
												<p>Mật khẩu tài khoản từ 6 đến 32 ký tự</p>
											</div>
										</div>
									</div>
								</div>
								<div class="one-add one-add-name">
                                    <label>Họ tên</label>
                                    <div class="one-wrap-form">
                                        <input type="text" name="name" value="<?php echo $row['name'];?>">
                                    </div>
                                    <div class="one-help">
                                        <i class="fa fa-info-circle"></i>
                                        <div class="one-help-text">
                                            <div class="inner-one-help-text">
                                                <p>Tên người dùng (bắt buột và không quá 100 ký tự)</p>
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
                                                <p>Email của người dùng (bắt buột và không quá 100 ký tự)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								
                            </div>							
                        </div>
                    </div>
                    <div class="add-submit">
                        <div class="inner-add-submit">
							<input type="hidden" name="id" value="<?php echo $row['id'];?>">
                            <input type="submit" value="Lưu lại" name="edit-bt">
							<a href="?<?php echo $_SESSION['urlctkt'];?>">Quay lại</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
