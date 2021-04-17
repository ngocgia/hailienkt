	<link href="css/add.css" rel="stylesheet" type="text/css"/>
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
                    <h2>Tạo tài khoản</h2>
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
                                        <input type="text" name="username" <?php if(isset($_SESSION['username'])){echo 'value="'.$_SESSION['username'].'"';}?>>
                                    </div>
                                    <div class="one-help">
                                        <i class="fa fa-info-circle"></i>
                                        <div class="one-help-text">
                                            <div class="inner-one-help-text">
                                                <p>Tên tài khoản từ 6 đến 32 ký tự</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								 <div class="one-add one-add-name">
									<label>Mật khẩu</label>
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
								<div class="one-add one-add-type">
                                    <label>Loại tài khoản</label>
                                    <div class="one-wrap-form">
                                        <select name="id_type">
                                            <option value="1" <?php if(isset($_SESSION['id_type']) && $_SESSION['id_type']==1){echo 'selected';}?>>Admin</option>
											<option value="3" <?php if(isset($_SESSION['id_type']) && $_SESSION['id_type']==3){echo 'selected';}?>>Nhân viên</option>
                                        </select>
                                    </div>
                                    <div class="one-help">
                                        <i class="fa fa-info-circle"></i>
                                        <div class="one-help-text">
                                            <div class="inner-one-help-text">
                                                <p>Chọn loại TK</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<div class="one-add one-add-name">
                                    <label>Họ tên</label>
                                    <div class="one-wrap-form">
                                        <input type="text" name="name" <?php if(isset($_SESSION['name'])){echo 'value="'.$_SESSION['name'].'"';}?>>
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
                                        <input type="text" name="phone" <?php if(isset($_SESSION['phone'])){echo 'value="'.$_SESSION['phone'].'"';}?>>
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
                                        <input type="text" name="email" <?php if(isset($_SESSION['email'])){echo 'value="'.$_SESSION['email'].'"';}?>>
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
                            <input type="submit" value="Thêm mới" name="add-bt">
							<a href="?<?php echo $_SESSION['urlctkt'];?>">Quay lại</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>