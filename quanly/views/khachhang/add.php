	<link href="css/add.css" rel="stylesheet" type="text/css"/>
	<script src="js/add.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>
<!-- CONTENT -->
    <div class="main">
        <div class="main-content">
            <div class="path">
                <p><a href="?act=trangchu">Trang chủ</a><a href="?act=khach_hang_list">Khách hàng</a></p>
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
                                    <label>Tên khách hàng</label>
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
								<div class="one-add one-add-name">
                                    <label>Điện thoại</label>
                                    <div class="one-wrap-form">
                                        <input type="text" name="phone" maxlength="10" <?php if(isset($_SESSION['phone'])){echo 'value="'.$_SESSION['phone'].'"';}?> required placeholder="Nhập điện thoại ...">
                                    </div>
                                    <div class="one-help">
                                        <i class="fa fa-info-circle"></i>
                                        <div class="one-help-text">
                                            <div class="inner-one-help-text">
                                                <p>Vui lòng nhập chính xác 10 số</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<div class="one-add one-add-name">
                                    <label>Email</label>
                                    <div class="one-wrap-form">
                                        <input type="text" name="email" maxlength="200" <?php if(isset($_SESSION['email'])){echo 'value="'.$_SESSION['email'].'"';}?> placeholder="Nhập email ...">
                                    </div>
                                    <div class="one-help">
                                        <i class="fa fa-info-circle"></i>
                                        <div class="one-help-text">
                                            <div class="inner-one-help-text">
                                                <p>Email</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<div class="one-add one-add-name">
                                    <label>Ngày sinh</label>
                                    <div class="one-wrap-form">
                                        <input type="text" name="birthday" maxlength="200" <?php if(isset($_SESSION['birthday'])){echo 'value="'.$_SESSION['birthday'].'"';}?> placeholder="Mẫu: yyyy/mm/dd ...">
                                    </div>
                                    <div class="one-help">
                                        <i class="fa fa-info-circle"></i>
                                        <div class="one-help-text">
                                            <div class="inner-one-help-text">
                                                <p>Nhập ngày sinh</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<div class="one-add one-add-name">
                                    <label>Địa chỉ</label>
                                    <div class="one-wrap-form">
                                        <input type="text" name="address" maxlength="200" <?php if(isset($_SESSION['address'])){echo 'value="'.$_SESSION['address'].'"';}?> placeholder="Nhập địa chỉ ...">
                                    </div>
                                    <div class="one-help">
                                        <i class="fa fa-info-circle"></i>
                                        <div class="one-help-text">
                                            <div class="inner-one-help-text">
                                                <p>Địa chỉ</p>
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