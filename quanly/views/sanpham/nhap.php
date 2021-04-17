	<link href="css/list.css" rel="stylesheet" type="text/css"/>
	
<!-- CONTENT -->
    <div class="main">
        <div class="main-content">
            <div class="path">
                <p>
					<a href="?act=trangchu">Trang chủ</a>
					<a href="?act=san_pham_detail&id=<?php echo $id;?>"><?php echo $row['name'];?></a>
					<a href="">Thống kê nhập</a>
				</p>
            </div>
            <div class="clear"></div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="main-header">
                    <div class="main-header-name">
						<h2><?php echo $row['name'];?> 
							<?php
								echo ' - Số lượng: '.$row_nhap['tong_id'];
								echo ' - Tổng: '.httien($row_nhap['tong_total']);
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
								<td style="min-width:100px !important; width:100px !important;" align="center">ID nhập</td>
								<td style="min-width:200px !important;">Đối tác</td>
								<td style="min-width:150px !important;">Tổng</td>
								<td style="min-width:100px !important;">Ngày xuất</td>
                                <td width="180px;">Tùy chọn</td>
                            </tr>
                            <?php					
								foreach($array as $row){
									echo '<tr>';
										echo '<td><a><div><i class="fa fa-check"></i></div><input type="checkbox" name="arrid[]" value="'.$row['id'].'" style="display:none"></a></td>';
										echo '<td style="min-width:50px !important; width:50px !important;">'.$row['id'].'</td>';
										$row_nh = $db->get_row_nhap_hang($row['id_nh']);										
										echo '<td style="min-width:100px !important;" align="center"><a href="?act=nhap_hang_detail&id='.$row_nh['id'].'" title="Click xem chi tiết!">'.$row_nh['id'].'</a></td>';
										$row_dt = $db->get_row_doi_tac($row_nh['id_dt']);
										echo '<td style="min-width:200px !important;"><a href="?act=doi_tac_detail&id='.$row_dt['id'].'" title="Click xem đối tác!">'.$row_dt['name'].'</a></td>';
										echo '<td style="min-width:150px !important;">'.httien($row['soluong']*$row['price'],'.','').'</td>';
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