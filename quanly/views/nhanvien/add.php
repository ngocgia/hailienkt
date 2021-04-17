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
                                    <label>Họ tên</label>
                                    <div class="one-wrap-form">
                                        <input type="text" name="name" maxlength="200" required placeholder="Nhập họ tên ...">
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
                                                <p>Email của người dùng (bắt buột và không quá 200 ký tự)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<div class="one-add one-add-name">
                                    <label>Địa chỉ</label>
                                    <div class="one-wrap-form">
                                        <input type="text" name="address" <?php if(isset($_SESSION['address'])){echo 'value="'.$_SESSION['address'].'"';}?>>
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
                                        <input type="text" name="birthday" <?php if(isset($_SESSION['birthday'])){echo 'value="'.$_SESSION['birthday'].'"';}?>>
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
                                        <input type="number" name="luong" value="0">
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