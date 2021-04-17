	<link href="css/detail.css" rel="stylesheet" type="text/css"/>
	<script src="js/add.js" type="text/javascript"></script>
	<div class="main">
        <div class="main-content">
            <div class="path">
                <p><a href="?act=trangchu">Trang chủ</a><a href="?act=san_pham_list">Sản phẩm</a></p>
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
                                    <label>Tiêu đề</label>
                                    <div class="one-wrap-form">
                                        <p><b><?php echo $row['name'];?></b></p>
                                    </div>
                                </div>
								<div class="one-add one-add-name">
                                    <label>Loại SP</label>
                                    <div class="one-wrap-form">
                                        <p><b><?php echo $ten;?></b></p>
                                    </div>
                                </div>
								<div class="one-add one-add-name">
                                    <label>Tình trạng</label>
                                    <div class="one-wrap-form">
                                        <p><b><?php if($row['news']==0){echo 'Cũ';}else{echo 'Mới';}?></b></p>
                                    </div>
                                </div>
								<div class="one-add one-add-name">
                                    <label>Sale</label>
                                    <div class="one-wrap-form">
                                        <p><b><?php if($row['sale']==0){echo 'Không';}else{echo $row['sale']."%";}?></b></p>
                                    </div>
                                </div>
								<div class="one-add one-add-name">
                                    <label>Giá</label>
                                    <div class="one-wrap-form">
                                        <p><b><?php echo httien($row['price']);?></b></p>
                                    </div>
                                </div>
								<div class="one-add one-add-name">
                                    <label>Slide ảnh</label>
                                    <div class="one-wrap-form">
                                        <p><a target="_blank" href="?act=san_pham_slide&id=<?php echo $row['id'];?>">Click để xem Slide</a></p>
                                    </div>
                                </div>
								<div class="one-add one-add-name">
                                    <label>Ngày cập nhật</label>
                                    <div class="one-wrap-form">
                                        <p><?php echo ngaythang($row['dayup']);?></p>
                                    </div>
                                </div>
								<div class="one-add one-add-name">
                                    <label>Tổng nhập</label>
                                    <div class="one-wrap-form">
                                        <p><b><a href="?act=san_pham_detail_nhap&id=<?php echo $row['id'];?>" title="Click xem chi tiết nhập!" style="color:red;"><?php echo 'Số lương: '.$row_nhap['tong_id'];?></a></b></p>
										<p><b><a href="?act=san_pham_detail_nhap&id=<?php echo $row['id'];?>" title="Click xem chi tiết nhập!" style="color:red;"><?php echo 'Tổng tiền: '.httien($row_nhap['tong_total']);?></a></b></p>
                                    </div>
                                </div>
								<div class="one-add one-add-name">
                                    <label>Tổng xuất</label>
                                    <div class="one-wrap-form">
                                        <p><b><a href="?act=san_pham_detail_xuat&id=<?php echo $row['id'];?>" title="Click xem chi tiết xuất!" style="color:red;"><?php echo 'Số lương: '.$row_xuat['tong_id'];?></a></b></p>
										<p><b><a href="?act=san_pham_detail_xuat&id=<?php echo $row['id'];?>" title="Click xem chi tiết xuất!" style="color:red;"><?php echo 'Tổng tiền: '.httien($row_xuat['tong_total']);?></a></b></p>
                                    </div>
                                </div>									
								<div class="one-add one-add-name">
                                    <label>Mô tả</label>
                                    <div class="one-wrap-form">
                                        <p><b><?php echo $row['short_info'];?></b></p>
                                    </div>
                                </div>								
								<div class="one-add one-add-name">
                                    <label>Chi tiết</label>
                                    <div class="one-wrap-form">
                                        <p><b><?php echo $row['info'];?></b></p>
                                    </div>
                                </div>								
								<div class="one-add one-add-name">
                                    <label>thông số kỹ thuật</label>
                                    <div class="one-wrap-form">
                                        <p><b><?php echo $row['thongso'];?></b></p>
                                    </div>
                                </div>
                            </div>
							<div class="add-info-right col-xs-12 col-sm-5">
								<div class="one-add one-add-image">
									<div class="one-image-box">
										<?php 
											if(strlen($row['image'])>0 && file_exists('../images/sanpham/'.$row['image'])){
												echo '<img style="max-width:250px;" alt="'.$row['name'].'" src="../images/sanpham/'.$row['image'].'">';
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