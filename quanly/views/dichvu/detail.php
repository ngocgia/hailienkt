<link href="css/detail.css" rel="stylesheet" type="text/css"/>
	<script src="js/add.js" type="text/javascript"></script>
	<div class="main">
        <div class="main-content">
            <div class="path">
                <p><a href="?act=trangchu">Trang chủ</a><a href="?act=dich_vu_list">Dịch vụ</a></p>
            </div>
            <div class="clear"></div>
            <div class="add-header">
                <div class="add-header-name">
                    <h2>Chi tiết</h2>
                </div>
            </div>
			<form action="" method="post" enctype="multipart/form-data">
			<div class="add-table">                
                    <div class="add-direction">
                        <ul>
                            <li class="add-acti-dir"><a>Thông tin</a></li>
                        </ul>
                    </div>
                    <div class="add-content">
                        <div class="add-info">
                            <div class="add-info-left col-xs-12 col-sm-7">
                                <div class="one-add one-add-name">
                                    <label>Tên</label>
                                    <div class="one-wrap-form">
                                        <p><b><?php echo $row['name'];?></b></p>
                                    </div>
                                </div>
								<div class="one-add one-add-name">
                                    <label>Mô tả</label>
                                    <div class="one-wrap-form">
                                        <p><?php echo $row['short_info'];?></p>
                                    </div>
                                </div>
								<div class="one-add one-add-name">
                                    <label>Ngày cập nhật</label>
                                    <div class="one-wrap-form">
                                        <p><?php echo ngaygio($row['dayup']);?></p>
                                    </div>
                                </div>
								<div class="one-add one-add-name">
                                    <label>Chi tiết</label>
                                    <div class="one-wrap-form">
                                        <p><?php echo $row['info'];?></p>
                                    </div>
                                </div>
								
                            </div>
							<div class="add-info-right col-xs-12 col-sm-5">
								<div class="one-add one-add-image">
									<div class="one-image-box image-td">
										<?php 
											if(strlen($row['image'])>0 && file_exists('../images/dichvu/'.$row['image'])){
												echo '<img style="max-width:250px;" alt="'.$row['name'].'" src="../images/dichvu/'.$row['image'].'">';
											}else{
												echo '<img alt="No Image" src="../images/default.jpg">';
											}
										?>
									</div>
								</div>
							</div>
                        </div>
                    </div>        
			</div>
			</form>  
        </div>		          
    </div>	