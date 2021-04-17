	<link href="css/detail.css" rel="stylesheet" type="text/css"/>
	<script src="js/add.js" type="text/javascript"></script>
	<div class="main">
        <div class="main-content">
            <div class="path">
                <p><a href="?act=trangchu">Trang chủ</a><a href="?act=khach_hang_list">Khách hàng</a></p>
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
                                    <label>Điện thoại</label>
                                    <div class="one-wrap-form">
                                        <p><b><?php echo $row['phone'];?></b></p>
                                    </div>
                                </div><div class="one-add one-add-name">
                                    <label>Email</label>
                                    <div class="one-wrap-form">
                                        <p><b><?php echo $row['email'];?></b></p>
                                    </div>
                                </div>
								<div class="one-add one-add-name">
                                    <label>Ngày sinh</label>
                                    <div class="one-wrap-form">
                                        <p><b><?php echo ngaythang($row['birthday']);?></b></p>
                                    </div>
                                </div>
								<div class="one-add one-add-name">
                                    <label>Địa chỉ</label>
                                    <div class="one-wrap-form">
                                        <p><b><?php echo $row['address'];?></b></p>
                                    </div>
                                </div>
								<div class="one-add one-add-name">
                                    <label>Ngày cập nhật</label>
                                    <div class="one-wrap-form">
                                        <p><?php echo ngaythang($row['dayup']);?></p>
                                    </div>
                                </div>
								<div class="one-add one-add-name">
                                    <label>Tổng xuất</label>
                                    <div class="one-wrap-form">
                                        <p><b><a href="?act=khach_hang_detail_xuat&id=<?php echo $row['id'];?>" title="Click xem chi tiết xuất!" style="color:red;"><?php echo httien($row_xuat['tong_total']);?></a></b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>        
			</div>
			</form>  
        </div>		          
    </div>	