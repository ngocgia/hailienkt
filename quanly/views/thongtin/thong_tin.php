	<link href="css/edit.css" rel="stylesheet" type="text/css"/>
	<script src="js/add.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>
	<div class="main">
        <div class="main-content">
            <div class="path">
                <p><a href="?act=trangchu">Trang chủ</a><a href="?<?php echo $_SESSION['urlctkt'];?>">Thông tin Shop / Cửa hàng</a></p>
            </div>
            <div class="clear"></div>
            <div class="add-header">
                <div class="add-header-name">
                    <h2>Thông tin Shop / Cửa hàng</h2>
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
                                    <label>Tên đơn vị:</label>
                                    <div class="one-wrap-form">
                                        <input type="text" name="name" value="<?php echo $name['info'];?>">
                                    </div>
                                    <div class="one-help">
                                        <i class="fa fa-info-circle"></i>
                                        <div class="one-help-text">
                                            <div class="inner-one-help-text">
                                                <p>Tên shop / Cửa hàng</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<div class="one-add one-add-name">
                                    <label>Địa chỉ</label>
                                    <div class="one-wrap-form">
                                        <input type="text" name="address" value="<?php echo $address['info'];?>">
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
								<div class="one-add one-add-name">
                                    <label>Email</label>
                                    <div class="one-wrap-form">
                                        <input type="text" name="email" value="<?php echo $email['info'];?>">
                                    </div>
                                    <div class="one-help">
                                        <i class="fa fa-info-circle"></i>
                                        <div class="one-help-text">
                                            <div class="inner-one-help-text">
                                                <p>Email</p>
                                            </div>
                                        </div>
                                    </div>
                                </div><div class="one-add one-add-name">
                                    <label>Điện thoại</label>
                                    <div class="one-wrap-form">
                                        <input type="text" name="phone" value="<?php echo $phone['info'];?>">
                                    </div>
                                    <div class="one-help">
                                        <i class="fa fa-info-circle"></i>
                                        <div class="one-help-text">
                                            <div class="inner-one-help-text">
                                                <p>Số điện thoại</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<div class="one-add one-add-name">
                                    <label>Điện thoại 2</label>
                                    <div class="one-wrap-form">
                                        <input type="text" name="phone1" value="<?php echo $phone1['info'];?>">
                                    </div>
                                    <div class="one-help">
                                        <i class="fa fa-info-circle"></i>
                                        <div class="one-help-text">
                                            <div class="inner-one-help-text">
                                                <p>Số điện thoại khác</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<div class="one-add one-add-name">
                                    <label>Facebook:</label>
                                    <div class="one-wrap-form">
                                        <input type="text" name="facebook" value="<?php echo $facebook['info'];?>">
                                    </div>
                                    <div class="one-help">
                                        <i class="fa fa-info-circle"></i>
                                        <div class="one-help-text">
                                            <div class="inner-one-help-text">
                                                <p>Link Facebook</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<div class="one-add one-add-name">
                                    <label>Zalo:</label>
                                    <div class="one-wrap-form">
                                        <input type="text" name="zalo" value="<?php echo $zalo['info'];?>">
                                    </div>
                                    <div class="one-help">
                                        <i class="fa fa-info-circle"></i>
                                        <div class="one-help-text">
                                            <div class="inner-one-help-text">
                                                <p>Số điện thoại Zalo</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<div class="one-add one-add-name">
                                    <label>Youtube:</label>
                                    <div class="one-wrap-form">
                                        <input type="text" name="youtube" value="<?php echo $youtube['info'];?>">
                                    </div>
                                    <div class="one-help">
                                        <i class="fa fa-info-circle"></i>
                                        <div class="one-help-text">
                                            <div class="inner-one-help-text">
                                                <p>Link Youtube</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<div class="one-add one-add-name">
                                    <label>Website:</label>
                                    <div class="one-wrap-form">
                                        <input type="text" name="website" value="<?php echo $website['info'];?>">
                                    </div>
                                    <div class="one-help">
                                        <i class="fa fa-info-circle"></i>
                                        <div class="one-help-text">
                                            <div class="inner-one-help-text">
                                                <p>Link Website</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="one-add one-add-name">
                                    <label>Mã số thuế:</label>
                                    <div class="one-wrap-form">
                                        <input type="text" name="mst" value="<?php echo $mst['info'];?>">
                                    </div>
                                    <div class="one-help">
                                        <i class="fa fa-info-circle"></i>
                                        <div class="one-help-text">
                                            <div class="inner-one-help-text">
                                                <p>Mã số thuế</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="one-add one-add-name">
                                    <label>Giám đốc:</label>
                                    <div class="one-wrap-form">
                                        <input type="text" name="giamdoc" value="<?php echo $giamdoc['info'];?>">
                                    </div>
                                    <div class="one-help">
                                        <i class="fa fa-info-circle"></i>
                                        <div class="one-help-text">
                                            <div class="inner-one-help-text">
                                                <p>Giám đốc</p>
                                            </div>
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
