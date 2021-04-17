	<link href="css/list.css" rel="stylesheet" type="text/css"/>
	
<!-- CONTENT -->
    <div class="main">
        <div class="main-content">
            <div class="path">
                <p><a href="?act=trangchu">Trang chủ</a><a href="?act=banner_list">Banner slide</a></p>
            </div>
            <div class="clear"></div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="main-header">
                    <div class="main-header-name">
						<h2>Banner slide
							<?php
								if($active==1){
									echo ' - Mở';
								}else{
									echo ' - Khóa';
								}
							?>
                        </h2>
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
                            <a class="main-button-add"><i class="fa fa-sign-out"></i>Bộ lọc<i class="fa fa-angle-down"></i></a>
                            <div class="main-add-box">
                                <ul>
                                    <li><a href="?act=banner_list&active=1"><i class="fa fa-check"></i>Mở</a></li>
                                    <li><a href="?act=banner_list&active=0"><i class="fa fa-check"></i>Khoá</a></li>
                                </ul>
                            </div>
                        </div>
						<div class="main-header-add">
							<a href="?act=banner_add"><i class="fa fa-plus"></i>Thêm mới</a>
						</div>
                    </div>	
                </div>
                <div class="main-table">
                    <div class="inner-main-table">
                        <table>							
                            <tr class="first-row">
                                <td><a><div><i class="fa fa-check"></i></div></a></td>
                                <td style="min-width:50px !important;">
									<?php
										if(isset($_GET['order_id'])){
											if($order_id==1){
												echo '<a href="?act=banner_list&order_id=0" title="Giảm dần">ID</a>';
											}else{
												echo '<a href="?act=banner_list&order_id=1" title="Tăng dần">ID</a>';
											}
										}else{
											echo '<a href="?act=banner_list&order_id=0" title="Giảm dần">ID</a>';
										}
									?>									
								</td>
                                <td style="min-width:100px !important;">Tên</td>
								<td style="min-width:150px !important;">Ảnh</td>
								<td style="min-width:100px !important;">Lick đích</td>
								<td style="min-width:50px !important;">
									<?php
										if(isset($_GET['order_id'])){
											if($order_id==1){
												echo '<a href="?act=banner_list&order_tt=0" title="Giảm dần">TT</a>';
											}else{
												echo '<a href="?act=banner_list&order_tt=1" title="Tăng dần">TT</a>';
											}
										}else{
											echo '<a href="?act=banner_list&order_tt=0" title="Giảm dần">TT</a>';
										}
									?>									
								</td>
                                <td width="180px;">Tùy chọn</td>
                            </tr>
							<?php
								$dem=0;
								foreach($array as $row){
									$dem++;
									echo '<tr>';
										echo '<td><a><div><i class="fa fa-check"></i></div><input type="checkbox" name="array_id[]" value="'.$row['id'].'" style="display:none"></a></td>';
										echo '<td style="min-width:50px !important;">'.$row['id'].'</td>';
										echo '<td style="min-width:100px !important;">'.$row['name'].'</td>';
										if(strlen($row['image'])>0 && file_exists('../'.$row['image'])){
											echo '<td style="min-width:100px !important;" class="image-td" title="Phóng to ảnh"><img alt="'.$row['name'].'" src="../'.$row['image'].'"></td>';
										}else{
											echo '<td style="min-width:100px !important;" class="image-td" title="Phóng to ảnh"><img alt="'.$row['name'].'" src="../images/default.jpg"></td>';
										}
										echo '<td style="min-width:100px !important;">'.$row['link_go'].'</td>';
										echo '<td style="min-width:50px !important;">'.$row['tt'].'</td>';
										echo '<td><ul>';
											echo '<li></li>';
											echo '<li><a href="?act=banner_edit&id='.$row['id'].'" title="Chỉnh sửa"><i class="fa fa-gear"></i></a></li>';
											echo '<li><a class="delete-button delete-button-'.$row['id'].'" style="cursor:pointer;"><i class="icon-bin2"></i></a></li>';
											echo '<script>
															$(\'.delete-button-'.$row['id'].'\').on("click",function(){
																	$(\'<div class="delete-section"><p>Bạn có chắc chắn muốn xóa</p><div><a href="?act=banner_delete&id='.$row['id'].'"><i class="icon-checkmark"></i></a><button class="cancel-button"><i class="icon-cross"></i></button></div></div>\').appendTo(\'body\');
																	$(\'.cancel-button\').on("click",function(){
																			$(\'.delete-section\').remove();
																	});
															});
													</script>';
											echo '<li></li>';
											if($row['active']==1){
												echo '<li><a href="?act=banner_active&id='.$row['id'].'&active=0" title="Bật / Tắt"><i class="icon-checkmark"></i></a></li>';
												echo '<li></li>';
											}else{
												echo '<li></li>';
												echo '<li><a href="?act=banner_active&id='.$row['id'].'&active=1" title="Tắt / Bật"><i class="icon-checkmark"></i></a></li>';
											}
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