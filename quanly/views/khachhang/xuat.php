	<link href="css/list.css" rel="stylesheet" type="text/css"/>
	
<!-- CONTENT -->
    <div class="main">
        <div class="main-content">
            <div class="path">
				<p>
					<a href="?act=trangchu">Trang chủ</a>
					<a href="?act=khach_hang_detail&id=<?php echo $id;?>"><?php echo $row['name'];?></a>
					<a href="">Thống kê xuất</a>
				</p>
            </div>
            <div class="clear"></div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="main-header">
                    <div class="main-header-name">
						<h2><?php echo $row['name'];?>
							<?php
								echo ' - Số lượng: '.$row_xuat['tong_id'];
								echo ' - Tổng: '.httien($row_xuat['tong_total']);
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
								<td style="min-width:150px !important;">Tổng</td>
								<td style="min-width:100px !important;">Ngày xuất</td>
                                <td width="180px;">Tùy chọn</td>
                            </tr>
                            <?php					
								foreach($array as $row){
									echo '<tr>';
										echo '<td><a><div><i class="fa fa-check"></i></div><input type="checkbox" name="arrid[]" value="'.$row['id'].'" style="display:none"></a></td>';
										echo '<td><a href="?act=xuat_hang_detail&id='.$row['id'].'" title="Click xem chi tiết đơn!">'.$row['id'].'</a></td>';
										$row_user = $db->get_row_user_id($row['id_user']);										
										echo '<td>'.$row_user['username'].'</a></td>';
										echo '<td style="min-width:150px !important;">'.httien($row['total'],'.','').'</td>';
										echo '<td style="min-width:100px !important;">'.ngaythang($row['dayup']).'</td>';
										echo '<td></td>';
									echo '</tr>';
								}
							?>
                        </table>
                    </div>
                </div>
            </form>
        </div>
    </div>	