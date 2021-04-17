	<link href="css/list.css" rel="stylesheet" type="text/css"/>
	
<!-- CONTENT -->
    <div class="main">
        <div class="main-content">
            <div class="path">
                <p>
					<a href="?act=trangchu">Trang chủ</a>
					<a href="?act=xuat_hang_list">Thống kê xuất hàng</a>
					<a href="?act=xuat_hang_ghi_no">Ghi nợ</a>
				</p>
            </div>
            <div class="search">
                <div class="inner-search">
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="text" name="search" placeholder="Nhập thông tin khách hàng ..." <?php if(strlen($search)>0){echo 'value="'.$search.'"';}?>>
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
						<h2>Ghi nợ cần thu 
							<?php
								if(strlen($search)>0){
									echo " - '".$search."'";
								}
								echo ' - SL: '.$row_sum['tong_id'];
								echo ' - Tổng: '.httien($row_sum['tong_total']);
								echo ' - Nợ: '.httien($row_sum['tong_no']);
							?>
						</h2>                       
                    </div>
                    <div class="main-header-button">
                        <div class="main-header-handle">
                            <a class="main-button-handle"><i class="fa fa-bars"></i>Thao tác<i class="fa fa-angle-down"></i></a>
                            <div class="main-handle-box">
                                <ul>
									<li><button type="submit" name="delete-bt"><i class="fa fa-trash"></i>Xóa nợ</button></li>
									<li><button type="submit" name="exel-bt"><i class="fa fa-sign-out"></i>Xuất Exel</button></li>									
                                </ul>
                            </div>
                        </div>
						<div class="main-header-export">
                            <a class="main-button-export" href="exel/ghinocanthu.xlsx"><i class="fa fa-sign-out"></i>Download</a>
                        </div>
                    </div>					
                </div>
                <div class="main-table">
                    <div class="inner-main-table">
                        <table>							
                            <tr class="first-row">
                                <td><a><div><i class="fa fa-check"></i></div></a></td>
                                <td>ID</td>								
								<td style="min-width:100px !important;">Khách hàng</td>
								<td style="min-width:100px !important;">Giảm %</td>
								<td style="min-width:100px !important;">Giảm tiền</td>
								<td style="min-width:150px !important;">Tổng</td>
								<td style="min-width:150px !important;">Trả trước</td>
								<td style="min-width:150px !important;">Còn lại</td>
								<td style="min-width:100px !important;">Ngày xuất</td>
                                <td width="180px;">Tùy chọn</td>
                            </tr>
							<?php			
								foreach($array as $row){
									echo '<tr>';
										echo '<td><a><div><i class="fa fa-check"></i></div><input type="checkbox" name="arrid[]" value="'.$row['id'].'" style="display:none"></a></td>';
										echo '<td>'.$row['id'].'</td>';
										$row_kh = $db->get_row_khach_hang($row['id_kh']);
										echo '<td style="min-width:100px !important;"><a href="?act=khach_hang_detail&id='.$row_kh['id'].'" tilte="click để xem chi tiết!">'.$row_kh['name'].'</a></td>';
										echo '<td style="min-width:100px !important;">'.$row['sale_percent'].'</td>';	
										echo '<td style="min-width:100px !important;">'.httien($row['sale_money'],'.','').'</td>';
										echo '<td style="min-width:150px !important;">'.httien($row['total'],'.','').'</td>';
										echo '<td style="min-width:150px !important;">'.httien($row['tratruoc'],'.','').'</td>';
										echo '<td style="min-width:150px !important;">'.httien($row['total']-$row['tratruoc'],'.','').'</td>';
										echo '<td style="min-width:100px !important;">'.ngaythang($row['dayup']).'</td>';
										echo '<td><ul>';
											echo '<li><a href="?act=xuat_hang_detail&id='.$row['id'].'" title="Chi tiết"><i class="icon-pencil"></i></a></li>';
											echo '<li><a href="?act=xuat_hang_edit&id='.$row['id'].'" title="Chỉnh sửa ghi nợ"><i class="fa fa-gear"></i></a></li>';
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
											echo '<li><a href="?act=xuat_hang_active&id='.$row['id'].'&active=1" title="Click để xóa nợ!"><i class="icon-checkmark"></i></a></li>';
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