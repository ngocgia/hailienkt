	<link href="css/add.css" rel="stylesheet" type="text/css"/>
	<link href="css/detail.css" rel="stylesheet" type="text/css"/>
	<script src="js/add.js" type="text/javascript"></script>
	
<!-- CONTENT -->
    <div class="main">
        <div class="main-content">
            <div class="path">
                <p><a href="?act=trangchu">Trang chủ</a><a href="?act=nhap_hang_list">Danh sách Nhập hàng</a><a href="#">Nhập hàng chi tiết</a></p>
            </div>
            <div class="clear"></div>
            <div class="add-header">
                <div class="add-header-name">
                    <h2>Chi tiết Nhập hàng</h2>
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
								<div class="one-add one-add-name">
                                    <label>Đơn nhập</label>
                                    <div class="one-wrap-form">
                                        <p><?php echo $row['id'];?></p>
                                    </div>
                                </div>
								<div class="one-add one-add-name">
                                    <label>User</label>
                                    <div class="one-wrap-form">
                                        <p><?php echo $row_user['username'];?></p>
                                    </div>
                                </div>
								<div class="one-add one-add-name">
                                    <label>Đối tác</label>
                                    <div class="one-wrap-form">
                                        <p><a href="?act=khach_hang_detail&id=<?php echo $row_kh['id'];?>"><?php echo $row_kh['name'];?></a></p>
                                    </div>
                                </div>
                                <div class="one-add one-add-old-price">
                                    <label>Thời gian</label>
                                    <div class="one-wrap-form">
                                        <p><?php echo ngaythang($row['dayup']);?></p>
                                    </div>
                                </div>
								<div class="one-add one-add-bill">
                                    <label></label>
                                    <div class="one-wrap-form">
                                        <table>
                                            <tr>
                                                <td class="hidden">ID</td>
                                                <td>Sản phẩm</td>
                                                <td>SL</td>
                                                <td>Thành tiền</td>
                                            </tr>
											<?php
												$tong = 0;
												foreach($array as $row_1){
													$tong += $row_1['soluong']*$row_1['price'];
													$row_td = $db->get_row_san_pham($row_1['id_sp']);
													echo '<tr>';
														echo '<td class="hidden">1</td>';
														echo '<td>'.$row_td['name'].'</td>';
														echo '<td>'.$row_1['soluong'].'</td>';
														echo '<td>'.httien(($row_1['soluong']*$row_1['price']),',','').'</td>';
													echo '</tr>';
												}
											?>
                                        </table>
                                    </div>
                                </div>
								<div class="one-add one-add-old-price">
                                    <label>Tổng cộng</label>
                                    <div class="one-wrap-form">
                                        <p><?php echo httien($tong,'.','');?></p>
                                    </div>
                                </div>
                            </div>							
                        </div>
                    </div>
                    <div class="add-submit">
                        <div class="inner-add-submit">
                            <a href="?<?php echo $_SESSION['urlctkt'];?>">Quay lại</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>