	<link href="css/detail.css" rel="stylesheet" type="text/css"/>
<!-- CONTENT -->
    <div class="main">
        <div class="main-content">
            <div class="path">
                <p><a href="?act=trangchu">Trang chủ</a><a href="?act=nhan_vien_list">Danh sách Nhân viên</a></p>
            </div>
            <div class="clear"></div>
            <div class="detail-header">
                <div class="detail-header-name">
                    <h2>Chi tiết</h2>
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
                                <div class="one-add one-add-code">
                                    <label>Họ tên:</label>
                                    <div class="one-wrap-form">
                                        <p><?php echo $row['name'];?></p>
                                    </div>
                                </div>
                                <div class="one-add one-add-name">
                                    <label>Điện thoại:</label>
                                    <div class="one-wrap-form">
                                        <p><?php echo $row['phone'];?></p>
                                    </div>
                                </div>
                                <div class="one-add one-add-image">
                                    <label>Email:</label>
                                    <div class="one-wrap-form">
                                        <p><?php echo $row['email'];?></p>
                                    </div>
                                </div>
                                <div class="one-add one-add-type">
                                    <label>Địa chỉ:</label>
                                    <div class="one-wrap-form">
                                        <p><?php echo $row['address'];?></p>
                                    </div>
                                </div>
								<div class="one-add one-add-type">
                                    <label>Ngày sinh:</label>
                                    <div class="one-wrap-form">
                                        <p><?php echo $row['birthday'];?></p>
                                    </div>
                                </div>
                                <div class="one-add one-add-old-price">
                                    <label>Tình trạng</label>
                                    <div class="one-wrap-form">
										<?php
											if($row['active']==1){
												echo '<p>Đang làm</p>';
											}else{
												echo '<p>Đã nghĩ</p>';
											}
										?>
                                    </div>
                                </div>
								<div class="one-add one-add-type">
                                    <label>Ngày tạo:</label>
                                    <div class="one-wrap-form">
                                        <p><?php echo ngaythang($row['daycrea']);?></p>
                                    </div>
                                </div>
								<div class="one-add one-add-type">
                                    <label>Tổng lương:</label>
                                    <div class="one-wrap-form">
                                        <p><b><?php $sum_luong = $db->sum_luong_nhan_vien($row['id']);echo httien($sum_luong['Total_Luong']);?></b></p>
                                    </div>
                                </div>
                            </div>
                            <div class="add-info-right col-xs-12 col-sm-5">
                                <div class="one-add one-add-image">
                                    <div class="one-image-box">
                                        <img alt="image" style="max-width:400px;" src="images/cmnd/<?php echo $row['cmnd1'];?>">
										</br>
										<img alt="image" style="max-width:400px;" src="images/cmnd/<?php echo $row['cmnd2'];?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
			<div class="clear"></div>
			<link href="css/list.css" rel="stylesheet" type="text/css"/>
			<form action="" method="post" enctype="multipart/form-data">
                <div class="main-header">
                    <div class="main-header-name">
                        <h2>Bảng lương chi tiết</h2>
                    </div>
                    <div class="main-header-button">
                        <div class="main-header-handle">
                            <a class="main-button-handle"><i class="fa fa-bars"></i>Thao tác<i class="fa fa-angle-down"></i></a>
                            <div class="main-handle-box">
                                <ul>
                                    <li><button type="submit" name="delete-bt"><i class="fa fa-trash"></i>Xóa đã chọn</button></li>
                                </ul>
                            </div>
                        </div>
                        <div class="main-header-add">
							<a href="?act=luong_add&id=<?php echo $row['id'];?>"><i class="fa fa-plus"></i>Trả lương mới</a>
						</div>
                    </div>
                </div>
                <div class="main-table">
                    <div class="inner-main-table">
                        <table>
                            <tr class="first-row">
                                <td><a><div><i class="fa fa-check"></i></div></a></td>
                                <td>TT</td>
                                <td>Lương thoả thuận</td>
								<td>Lương thực nhận</td>
								<td>Lương tháng</td>
								<td>Ngày trả</td>
								<td>Ghi chú</td>
                                <td width="180px;">Tùy chọn</td>
                            </tr>
                            <?php								
								$dem=0;								
								foreach($array as $row){
									$dem++;
									echo '<tr>';
										echo '<td><a><div><i class="fa fa-check"></i></div><input type="checkbox" name="arrid[]" value="'.$row['id'].'" style="display:none"></a></td>';
										echo '<td>'.$dem.'</td>';
										echo '<td>'.httien($row['luong']).'</td>';
										echo '<td>'.httien($row['luong_thuc']).'</td>';
										echo '<td>'.$row['code_time'][4].$row['code_time'][5].'-'.$row['code_time'][0].$row['code_time'][1].$row['code_time'][2].$row['code_time'][3].'</td>';
										echo '<td>'.ngaythang($row['daycrea']).'</td>';
										echo '<td>'.$row['info'].'</td>';
										echo '<td><ul>';
											echo '<li></li>';
											echo '<li><a href="?act=luong_edit&id='.$row['id'].'" title="Chỉnh sửa"><i class="fa fa-gear"></i></a></li>';
											echo '<li><a class="delete-button delete-button-'.$row['id'].'" style="cursor:pointer;"><i class="icon-bin2"></i></a></li>';
											echo '<script>
															$(\'.delete-button-'.$row['id'].'\').on("click",function(){
																	$(\'<div class="delete-section"><p>Bạn có chắc chắn muốn xóa</p><div><a href="?act=luong_delete&id='.$row['id'].'"><i class="icon-checkmark"></i></a><button class="cancel-button"><i class="icon-cross"></i></button></div></div>\').appendTo(\'body\');
																	$(\'.cancel-button\').on("click",function(){
																			$(\'.delete-section\').remove();
																	});
															});
													</script>';
											echo '<li></li>';
											echo '<li></li>';
											echo '<li></li>';
										echo '</ul></td>';
									echo '</tr>';
								}
							?>
                        </table>
                    </div>
                </div>
            </form>
        </div>
    </div>