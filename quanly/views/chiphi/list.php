	<link href="css/list.css" rel="stylesheet" type="text/css"/>
	
<!-- CONTENT -->
    <div class="main">
        <div class="main-content">
            <div class="path">
                <p><a href="?act=trangchu">Trang chủ</a><a href="?act=chi_phi_list">Danh sách Chi phí</a></p>
            </div>
            <div class="search">
                <div class="inner-search">
                    <form action="" method="post" enctype="multipart/form-data">
						<select name="code_month">
							<?php
								for($i=1;$i<=12;$i++){
									if($i==$code_month){
										echo '<option value="'.$i.'" selected>Tháng '.$i.'</option>';
									}else{
										echo '<option value="'.$i.'">Tháng '.$i.'</option>';
									}
								}
							?>
                        </select>
						<select name="code_year">
							<?php
								for($i=2017;$i<=2027;$i++){									
									if($i==$code_year){
										echo '<option value="'.$i.'" selected>Năm '.$i.'</option>';
									}else{
										echo '<option value="'.$i.'">Năm '.$i.'</option>';
									}
								}
							?>
                        </select>
                        <button type="submit" name="search-bt">
                            <i class="fa fa-search search-button"></i>
                        </button>
                    </form>
                </div>
            </div>
            <div class="clear"></div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="main-header">
                    <div class="main-header-name">
						<?php
							echo '<h2>Bảng chi phí: '.$code_month.' - '.$code_year.'</h2>';
						?>                        
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
							<a href="?act=chi_phi_add"><i class="fa fa-plus"></i>Thêm chi phí</a>
						</div>											
                    </div>					
                </div>
                <div class="main-table">
                    <div class="inner-main-table">
                        <table>							
                            <tr class="first-row">
                                <td><a><div><i class="fa fa-check"></i></div></a></td>
                                <td>TT</td>
								<td>Tiêu đề</td>
                                <td>Chi phí</td>
								<td>Ngày tạo</td>
								<td>Ghi chú</td>
                                <td width="180px;">Tùy chọn</td>
                            </tr>
                            <?php								
								$dem=0;								
								foreach($array as $row){
									$dem ++;
									echo '<tr>';
										echo '<td><a><div><i class="fa fa-check"></i></div><input type="checkbox" name="arrid[]" value="'.$row['id'].'" style="display:none"></a></td>';
										echo '<td>'.$dem.'</td>';
										echo '<td>'.$row['name'].'</td>';
										echo '<td>'.httien($row['chiphi']).'</td>';
										echo '<td>'.ngaythang($row['daycrea']).'</td>';
										echo '<td>'.$row['info'].'</td>';
										echo '<td><ul>';
											echo '<li></li>';
											echo '<li><a href="?act=chi_phi_edit&id='.$row['id'].'" title="Chỉnh sửa"><i class="fa fa-gear"></i></a></li>';
											echo '<li><a class="delete-button delete-button-'.$row['id'].'" style="cursor:pointer;"><i class="icon-bin2"></i></a></li>';
											echo '<script>
															$(\'.delete-button-'.$row['id'].'\').on("click",function(){
																	$(\'<div class="delete-section"><p>Bạn có chắc chắn muốn xóa</p><div><a href="?act=chi_phi_delete&id='.$row['id'].'"><i class="icon-checkmark"></i></a><button class="cancel-button"><i class="icon-cross"></i></button></div></div>\').appendTo(\'body\');
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
							<tr>
                                <td colspan="3" style="text-align:left;"><b>Tổng cộng</b></td>
								<td colspan="4" style="color:red;text-align:left;"><b><?php echo httien($chiphi_sum['Total_Luong']);?></b></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </form>
        </div>
    </div>	