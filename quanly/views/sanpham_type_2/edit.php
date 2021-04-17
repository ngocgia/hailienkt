	<link href="css/add.css" rel="stylesheet" type="text/css"/>
	<script src="js/add.js" type="text/javascript"></script>
	
<!-- CONTENT -->
    <div class="main">
        <div class="main-content">
            <div class="path">
                <p><a href="?act=trangchu">Trang chủ</a><a href="?act=san_pham_type_2_list">Loại sản phẩm 2</a></p>
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
								<div class="one-add one-add-type">
                                    <label>Loại 1</label>
                                    <div class="one-wrap-form">
                                        <select name="id_1">
                                            <?php
												$array_type = $db->get_list_san_pham_type_1(1,'dayup DESC');
												foreach($array_type as $row_1){
													if($row['id_1']==$row_1['id']){
														echo '<option value="'.$row_1['id'].'" selected>'.$row_1['name'].'</option>';
													}else{
														echo '<option value="'.$row_1['id'].'">'.$row_1['name'].'</option>';
													}
												}
											?>
                                        </select>
                                    </div>
                                    <div class="one-help">
                                        <i class="fa fa-info-circle"></i>
                                        <div class="one-help-text">
                                            <div class="inner-one-help-text">
                                                <p>Chọn loại sản phẩm 1</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>								
                                <div class="one-add one-add-name">
                                    <label>Tên loại</label>
                                    <div class="one-wrap-form">
                                        <input type="text" name="name" maxlength="200" required value="<?php echo $row['name'];?>">
                                    </div>
                                    <div class="one-help">
                                        <i class="fa fa-info-circle"></i>
                                        <div class="one-help-text">
                                            <div class="inner-one-help-text">
                                                <p>Tên loại sản phẩm 2</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<div class="one-add one-add-type">
                                    <label>Hiển thị trang chủ</label>
                                    <div class="one-wrap-form">
                                        <select name="id_out">
                                            <?php
												if($row['id_out']==1){
													echo '<option value="1" selected>Có</option>';
													echo '<option value="0">Không</option>';
												}else{
													echo '<option value="0">Không</option>';
													echo '<option value="1">Có</option>';
												}
											?>
                                        </select>
                                    </div>
                                    <div class="one-help">
                                        <i class="fa fa-info-circle"></i>
                                        <div class="one-help-text">
                                            <div class="inner-one-help-text">
                                                <p>Hiển trị ra trang chủ</p>
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
                            <input type="submit" value="Thay đổi" name="edit-bt">
                            <a href="?<?php echo $_SESSION['urlctkt'];?>">Quay lại</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>