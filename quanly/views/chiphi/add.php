	<link href="css/add.css" rel="stylesheet" type="text/css"/>
	<script src="js/add.js" type="text/javascript"></script>
	
<!-- CONTENT -->
    <div class="main">
        <div class="main-content">
            <div class="path">
                <p><a href="?act=trangchu">Trang chủ</a><a href="?act=chi_phi_list">Danh sách Chi phí</a></p>
            </div>
            <div class="clear"></div>
            <div class="add-header">
                <div class="add-header-name">
                    <h2>Thêm chi phí:</h2>
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
								<div class="one-add one-add-type">
                                    <label>Tháng chi</label>
                                    <div class="one-wrap-form">
                                        <select name="code_month">
											<?php
												$month_now = (int)date('m');
												for($i=1;$i<=12;$i++){
													if($i==$month_now){
														echo '<option value="'.$i.'" selected>Tháng '.$i.'</option>';
													}else{
														echo '<option value="'.$i.'">Tháng '.$i.'</option>';
													}
												}
											?>
                                        </select>
                                    </div>
                                </div>
								<div class="one-add one-add-type">
                                    <label></label>
                                    <div class="one-wrap-form">
										<select name="code_year">
											<?php
												$year_now = (int)date('Y');
												for($i=2017;$i<=2027;$i++){
													
													if($i==$year_now){
														echo '<option value="'.$i.'" selected>Năm '.$i.'</option>';
													}else{
														echo '<option value="'.$i.'">Năm '.$i.'</option>';
													}
												}
											?>
                                        </select>
                                    </div>
                                </div>
								<div class="one-add one-add-name">
                                    <label>Tiêu đề</label>
                                    <div class="one-wrap-form">
                                        <input type="text" name="name" maxlength="200" required placeholder="Tiêu đề ...">
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
								<div class="one-add one-add-old-price">
                                    <label>Chi phí</label>
                                    <div class="one-wrap-form">
                                        <input type="number" name="chiphi" value="0">
                                    </div>
                                    <div class="one-help">
                                        <i class="fa fa-info-circle"></i>
                                        <div class="one-help-text">
                                            <div class="inner-one-help-text">
                                                <p>Tiền đã chi</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<div class="one-add one-add-old-price">
                                    <label>Ghi chú</label>
                                    <div class="one-wrap-form">
                                        <textarea rows="6" name="info"></textarea>
                                    </div>
                                    <div class="one-help">
                                        <i class="fa fa-info-circle"></i>
                                        <div class="one-help-text">
                                            <div class="inner-one-help-text">
                                                <p>Ghi chú</p>
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