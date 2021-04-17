	<link href="css/list.css" rel="stylesheet" type="text/css"/>
	
<!-- CONTENT -->
    <div class="main">
        <div class="main-content">
            <div class="path">
                <p><a href="?act=trangchu">Trang chủ</a><a href="?act=nhan_vien_list">Danh sách Nhân viên</a></p>
            </div>
            <div class="search">
                <div class="inner-search">
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="text" name="search" placeholder="Tìm kiếm" <?php if(strlen($search)>0){echo 'value="'.$search.'"';}?>>
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
								if(strlen($active)>0){
									if($active==1){
										echo '<h2>Danh sách Nhân viên đang làm - SL: '.$sum.'</h2>';
									}else{
										echo '<h2>Danh sách Nhân viên nghĩ - SL: '.$sum.'</h2>';
									}
								}else{
									if(strlen($search)>0){
										echo '<h2>Kết quả tìm kiếm</h2>';
									}else{
										echo '<h2>Danh sách Nhân viên - SL: '.$sum.'</h2>';
									}
								}
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
                            <a class="main-button-add"><i class="fa fa-sign-out"></i>Bộ lọc<i class="fa fa-angle-down"></i></a>
                            <div class="main-add-box">
                                <ul>
									<li><a href="?act=nhan_vien_list"><i class="fa fa-check"></i>Danh sách Nhân viên (All)</a></li>									
                                    <li><a href="?act=nhan_vien_list&active=1"><i class="fa fa-check"></i>Danh sách Nhân viên đang làm</a></li>
                                    <li><a href="?act=nhan_vien_list&active=0"><i class="fa fa-check"></i>Danh sách Nhân viên nghĩ</a></li>
                                </ul>
                            </div>
                        </div>
						<div class="main-header-add">
							<a href="?act=nhan_vien_add"><i class="fa fa-plus"></i>Thêm mới</a>
						</div>	
                    </div>					
                </div>
                <div class="main-table">
                    <div class="inner-main-table">
                        <table>							
                            <tr class="first-row">
                                <td><a><div><i class="fa fa-check"></i></div></a></td>
                                <td>TT</td>
                                <td>Họ tên</td>
								<td>Điện thoại</td>
								<td>Email</td>
								<td>Địa chỉ</td>
								<td>Ngày sinh</td>
								<td>Lương thoả thuận</td>
                                <td width="180px;">Tùy chọn</td>
                            </tr>
							<?php
								if(strlen($search)>0){
									$dem=0; 
									$con = strtolower(chuyenChuoi($search));
									foreach($array as $row){
										$dich = strtolower(chuyenChuoi($row['name']));
										$vt = strpos($dich,$con);
										if($vt>-1){
											$dem++;
											echo '<tr>';
												echo '<td><a><div><i class="fa fa-check"></i></div><input type="checkbox" name="arrid[]" value="'.$row['id'].'" style="display:none"></a></td>';
												echo '<td>'.$dem.'</td>';
												echo '<td>'.$row['name'].'</td>';
												echo '<td>'.$row['phone'].'</td>';
												echo '<td>'.$row['email'].'</td>';
												echo '<td>'.$row['address'].'</td>';
												echo '<td>'.$row['birthday'].'</td>';
												echo '<td>'.httien($row['luong']).'</td>';
												echo '<td><ul>';
													echo '<li><a href="?act=nhan_vien_detail&id='.$row['id'].'" title="Chi tiết"><i class="icon-file-text"></i></a></li>';
													echo '<li><a href="?act=nhan_vien_edit&id='.$row['id'].'" title="Chỉnh sửa"><i class="fa fa-gear"></i></a></li>';
													echo '<li><a class="delete-button delete-button-'.$row['id'].'" style="cursor:pointer;"><i class="icon-bin2"></i></a></li>';
													echo '<script>
																	$(\'.delete-button-'.$row['id'].'\').on("click",function(){
																			$(\'<div class="delete-section"><p>Bạn có chắc chắn muốn xóa</p><div><a href="?act=nhan_vien_delete&id='.$row['id'].'"><i class="icon-checkmark"></i></a><button class="cancel-button"><i class="icon-cross"></i></button></div></div>\').appendTo(\'body\');
																			$(\'.cancel-button\').on("click",function(){
																					$(\'.delete-section\').remove();
																			});
																	});
															</script>';
													echo '<li></li>';
													if($row['active']==1){
														echo '<li><a href="?act=nhan_vien_active&id='.$row['id'].'&active=0" title="Làm / Nghĩ"><i class="icon-checkmark"></i></a></li>';
														echo '<li></li>';
													}else{
														echo '<li></li>';
														echo '<li><a href="?act=nhan_vien_active&id='.$row['id'].'&active=1" title="Nghĩ / Làm"><i class="icon-checkmark"></i></a></li>';
													}
												echo '</ul></td>';
											echo '</tr>';
										}
									}
								}else{
									$dem=0;								
									foreach($array as $row){
										$dem++;
										echo '<tr>';
											echo '<td><a><div><i class="fa fa-check"></i></div><input type="checkbox" name="arrid[]" value="'.$row['id'].'" style="display:none"></a></td>';
											echo '<td>'.$dem.'</td>';
											echo '<td>'.$row['name'].'</td>';
											echo '<td>'.$row['phone'].'</td>';
											echo '<td>'.$row['email'].'</td>';
											echo '<td>'.$row['address'].'</td>';
											echo '<td>'.$row['birthday'].'</td>';
											echo '<td>'.httien($row['luong']).'</td>';
											echo '<td><ul>';
												echo '<li><a href="?act=nhan_vien_detail&id='.$row['id'].'" title="Chi tiết"><i class="icon-file-text"></i></a></li>';
												echo '<li><a href="?act=nhan_vien_edit&id='.$row['id'].'" title="Chỉnh sửa"><i class="fa fa-gear"></i></a></li>';
												echo '<li><a class="delete-button delete-button-'.$row['id'].'" style="cursor:pointer;"><i class="icon-bin2"></i></a></li>';
												echo '<script>
																$(\'.delete-button-'.$row['id'].'\').on("click",function(){
																		$(\'<div class="delete-section"><p>Bạn có chắc chắn muốn xóa</p><div><a href="?act=nhan_vien_delete&id='.$row['id'].'"><i class="icon-checkmark"></i></a><button class="cancel-button"><i class="icon-cross"></i></button></div></div>\').appendTo(\'body\');
																		$(\'.cancel-button\').on("click",function(){
																				$(\'.delete-section\').remove();
																		});
																});
														</script>';
												echo '<li></li>';
												if($row['active']==1){
													echo '<li><a href="?act=nhan_vien_active&id='.$row['id'].'&active=0" title="Làm / Nghĩ"><i class="icon-checkmark"></i></a></li>';
													echo '<li></li>';
												}else{
													echo '<li></li>';
													echo '<li><a href="?act=nhan_vien_active&id='.$row['id'].'&active=1" title="Nghĩ / Làm"><i class="icon-checkmark"></i></a></li>';
												}
											echo '</ul></td>';
										echo '</tr>';
									}
								}
							?>
                        </table>
                    </div>
                </div>
            </form>
			<?php 
				$str_url='';
				if(strlen($active)>0){$str_url='&active='.$active;}
				if($sum>0 && strlen($search)==0){
			?>
			<div class="pages-number">
                <div class="inner-pages-number">
                    <ul>
						<li <?php if(($num-4)<1){echo 'style="display:none;"';}?>><a href="?act=nhan_vien_list<?php echo $str_url;?>&num=<?php echo $num-4;?>"><?php echo $num-4;?></a></li>
						<li <?php if(($num-3)<1){echo 'style="display:none;"';}?>><a href="?act=nhan_vien_list<?php echo $str_url;?>&num=<?php echo $num-3;?>"><?php echo $num-3;?></a></li>
						<li <?php if(($num-2)<1){echo 'style="display:none;"';}?>><a href="?act=nhan_vien_list<?php echo $str_url;?>&num=<?php echo $num-2;?>"><?php echo $num-2;?></a></li>
						<li <?php if(($num-1)<1){echo 'style="display:none;"';}?>><a href="?act=nhan_vien_list<?php echo $str_url;?>&num=<?php echo $num-1;?>"><?php echo $num-1;?></a></li>
                        <li class="active-num"><a href="?act=nhan_vien_list<?php echo $str_url;?>&num=<?php echo $num;?>"><?php echo $num;?></a></li>
						<li <?php if(($num+1)>$pages){echo 'style="display:none;"';}?>><a href="?act=nhan_vien_list<?php echo $str_url;?>&num=<?php echo $num+1;?>"><?php echo $num+1;?></a></li>
						<li <?php if(($num+2)>$pages){echo 'style="display:none;"';}?>><a href="?act=nhan_vien_list<?php echo $str_url;?>&num=<?php echo $num+2;?>"><?php echo $num+2;?></a></li>
						<li <?php if(($num+3)>$pages){echo 'style="display:none;"';}?>><a href="?act=nhan_vien_list<?php echo $str_url;?>&num=<?php echo $num+3;?>"><?php echo $num+3;?></a></li>
						<li <?php if(($num+4)>$pages){echo 'style="display:none;"';}?>><a href="?act=nhan_vien_list<?php echo $str_url;?>&num=<?php echo $num+4;?>"><?php echo $num+4;?></a></li>
                    </ul>
                </div>
            </div>
			<?php }?>
        </div>
    </div>	