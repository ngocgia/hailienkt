	<link href="css/list.css" rel="stylesheet" type="text/css"/>
	
<!-- CONTENT -->
    <div class="main">
        <div class="main-content">
            <div class="path">
                <p><a href="?act=trangchu">Trang chủ</a><a href="?act=xuat_hang_list">Thống kê xuất hàng</a></p>
            </div>
            <div class="search">
                <div class="inner-search">
                    <form action="" method="post" enctype="multipart/form-data">
						<input type="text" name="start_time" id="start_time" placeholder="Ngày bắt đầu" required <?php if(strlen($start_time)>0){echo 'value="'.chuyenTN($start_time).'"';}?>>
						<input type="text" name="end_time" id="end_time" placeholder="Ngày đích" required <?php if(strlen($end_time)>0){echo 'value="'.chuyenTN($end_time).'"';}?>>
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
						<h2>Xuất hàng 
							<?php
								echo ' - Số lượng: '.$row_sum['tong_id'];
								echo ' - Tổng: '.httien($row_sum['tong_total']);
							?>
						</h2>                          
                    </div>						
                </div>
                <div class="main-table">
                    <div class="inner-main-table">
                        <table>							
                            <tr class="first-row">
                                <td style="min-width:50px !important; width:50px !important;"><a><div><i class="fa fa-check"></i></div></a></td>
								<td style="min-width:50px !important; width:50px !important;">ID</td>
								<td style="min-width:100px !important;">User</td>
								<td style="min-width:100px !important;">Giảm %</td>								
								<td style="min-width:100px !important;">Giảm tiền</td>
								<td style="min-width:150px !important;">Tổng</td>
								<td style="min-width:150px !important;">Nợ</td>
								<td style="min-width:100px !important;">Ngày xuất</td>
                                <td width="180px;">Tùy chọn</td>
                            </tr>
                            <?php					
								foreach($array as $row){
									echo '<tr>';
										echo '<td><a><div><i class="fa fa-check"></i></div><input type="checkbox" name="arrid[]" value="'.$row['id'].'" style="display:none"></a></td>';
										echo '<td>'.$row['id'].'</td>';
										$row_user = $db->get_row_user_id($row['id_user']);
										echo '<td style="min-width:100px !important;">'.$row_user['username'].'</td>';
										echo '<td style="min-width:100px !important;">'.$row['sale_percent'].'</td>';	
										echo '<td style="min-width:100px !important;">'.httien($row['sale_money'],'.','').'</td>';
										echo '<td style="min-width:150px !important;">'.httien($row['total'],'.','').'</td>';
										if($row['active']==0){
											echo '<td style="min-width:150px !important;">'.httien($row['total']-$row['tratruoc'],'.','').'</td>';
										}else{
											echo '<td style="min-width:150px !important;"></td>';
										}
										echo '<td style="min-width:100px !important;">'.ngaythang($row['dayup']).'</td>';
										echo '<td><ul>';
											echo '<li><a href="?act=xuat_hang_detail&id='.$row['id'].'" title="Chi tiết"><i class="icon-pencil"></i></a></li>';
											echo '<li></li>';
											echo '<li><a class="delete-button delete-button-'.$row['id'].'" style="cursor:pointer;"><i class="icon-bin2"></i></a></li>';
											echo '<script>
															$(\'.delete-button-'.$row['id'].'\').on("click",function(){
																	$(\'<div class="delete-section"><p>Bạn có chắc chắn muốn xóa</p><div><a href="?act=xuat_hang_delete&id='.$row['id'].'"><i class="icon-checkmark"></i></a><button class="cancel-button"><i class="icon-cross"></i></button></div></div>\').appendTo(\'body\');
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