	<link href="css/list.css" rel="stylesheet" type="text/css"/>
	
<!-- CONTENT -->
    <div class="main">
        <div class="main-content">
            <div class="path">
                <p>
					<a href="?act=trangchu">Trang chủ</a>
					<a href="?act=san_pham_list">Sản phẩm</a>
					<?php
						if(strlen($id_type)>0){
							$arr = explode(".",$id_type);
							if((int)$arr[0]>0){
								$row_1 = $db->get_row_san_pham_type_1((int)$arr[0]);
								echo '<a href="?act=san_pham_list&id_type='.$row_1['id'].'">'.$row_1['name'].'</a>';
							}
							if(isset($arr[1]) && (int)$arr[1]>0){
								$row_2 = $db->get_row_san_pham_type_2((int)$arr[1]);
								echo '<a href="?act=san_pham_list&id_type='.$row_2['id_1'].'.'.$row_2['id'].'">'.$row_2['name'].'</a>';
							}
						}
					?>
				</p>
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
				<div class="main-header-search">
                    <a class="main-button-search">Tìm kiếm theo<i class="fa fa-angle-down"></i></a>
                    <div class="main-search-box">
                        <ul>
							<?php
								foreach($array_1 as $row){
									echo '<li><a href="?act=san_pham_list&id_type='.$row['id'].'">'.$row['name'].'</a>';
										$array_2 = $db->get_list_san_pham_type_2(1,'dayup DESC',$row['id']);
										echo '<ul>';
										foreach($array_2 as $row){
											echo '<li><a href="?act=san_pham_list&id_type='.$row['id_1'].'.'.$row['id'].'">'.$row['name'].'</a></li>';
										}
										echo '</ul>';
									echo '</li>';
								}
							?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="main-header">
                    <div class="main-header-name">
						<h2>Sản phẩm 
							<?php	
								if(strlen($id_type)>0){
									$arr = explode(".",$id_type);
									if((int)$arr[0]>0){
										echo ' - '.$row_1['name'];
									}
									if(isset($arr[1]) && (int)$arr[1]>0){
										echo ' - '.$row_2['name'];
									}
								}
								if(strlen($active)>0){
									$active = (int)$active;
									if($active==0){echo ' - Khóa';}
									if($active==1){echo ' - Mở';}
								}
								if(strlen($news)>0){
									$news = (int)$news;
									if($news==0){echo ' - Cũ';}
									if($news==1){echo ' - Mới';}
								}
								if(strlen($sale)>0){
									$sale = (int)$sale;
									if($sale>0){echo ' - KM';}
								}
								if(strlen($search)>0){
									echo " - '".$search."'";
								}
								echo ' - SL: '.$sum;
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
                                    <li><a href="?act=san_pham_list<?php echo $rel;?>&active=1"><i class="fa fa-check"></i>Mở</a></li>
                                    <li><a href="?act=san_pham_list<?php echo $rel;?>&active=0"><i class="fa fa-check"></i>Khoá</a></li>
									<li><a href="?act=san_pham_list<?php echo $rel;?>&news=1"><i class="fa fa-check"></i>Mới</a></li>
                                    <li><a href="?act=san_pham_list<?php echo $rel;?>&news=0"><i class="fa fa-check"></i>Cũ</a></li>
									<li><a href="?act=san_pham_list<?php echo $rel;?>&sale=1"><i class="fa fa-check"></i>Khuyễn mãi</a></li>
                                </ul>
                            </div>
                        </div>
						<div class="main-header-add">
							<a href="?act=san_pham_add"><i class="fa fa-plus"></i>Thêm mới</a>
						</div>	
                    </div>					
                </div>
                <div class="main-table">
                    <div class="inner-main-table">
                        <table>							
                            <tr class="first-row">
                                <td><a><div><i class="fa fa-check"></i></div></a></td>
                                <td>
									<?php
										if(isset($_GET['order_id'])){
											if($order_id==1){
												echo '<a href="?act=san_pham_list'.$rel.'&order_id=0" title="Giảm dần">ID</a>';
											}else{
												echo '<a href="?act=san_pham_list'.$rel.'&order_id=1" title="Tăng dần">ID</a>';
											}
										}else{
											echo '<a href="?act=san_pham_list'.$rel.'&order_id=0" title="Giảm dần">ID</a>';
										}
									?>
								</td>								
								<td style="min-width:150px !important;">
									<?php
										if(isset($_GET['order_name'])){
											if($order_name==1){
												echo '<a href="?act=san_pham_list'.$rel.'&order_name=0" title="Giảm dần">Tiêu đề</a>';
											}else{
												echo '<a href="?act=san_pham_list'.$rel.'&order_name=1" title="Tăng dần">Tiêu đề</a>';
											}
										}else{
											echo '<a href="?act=san_pham_list'.$rel.'&order_name=0" title="Giảm dần">Tiêu đề</a>';
										}
									?>
								</td>
								<td style="min-width:100px !important;">Loại SP</td>
                                <td style="min-width:100px !important;">
									<?php
										if(isset($_GET['order_price'])){
											if($order_price==1){
												echo '<a href="?act=san_pham_list'.$rel.'&order_price=0" title="Giảm dần">Giá</a>';
											}else{
												echo '<a href="?act=san_pham_list'.$rel.'&order_price=1" title="Tăng dần">Giá</a>';
											}
										}else{
											echo '<a href="?act=san_pham_list'.$rel.'&order_price=0" title="Giảm dần">Giá</a>';
										}
									?>
								</td>								
								<td style="min-width:100px !important;">Ảnh</td>
								<td style="min-width:100px !important;">Tình trạng</td>
								<td style="min-width:100px !important;">KM</td>
								<td style="min-width:100px !important;">Nhập</td>
								<td style="min-width:100px !important;">Xuất</td>
                                <td width="180px;">Tùy chọn</td>
                            </tr>
							<?php			
								foreach($array as $row){
									echo '<tr>';
										echo '<td><a><div><i class="fa fa-check"></i></div><input type="checkbox" name="arrid[]" value="'.$row['id'].'" style="display:none"></a></td>';
										echo '<td>'.$row['id'].'</td>';
										echo '<td style="min-width:150px !important;">'.$row['name'].'</td>';
										$arr = explode(".",$row['id_type']);
										$ten = '';
										if((int)$arr[0]>0){
											$row_1 = $db->get_row_san_pham_type_1((int)$arr[0]);
											$ten .= $row_1['name'];
										}
										if(isset($arr[1]) && (int)$arr[1]>0){
											$row_2 = $db->get_row_san_pham_type_2((int)$arr[1]);
											$ten .= ' -> '.$row_2['name'];
										}
										echo '<td style="min-width:100px !important;">'.$ten.'</td>';
										echo '<td style="min-width:100px !important;">'.httien($row['price']).'</td>';
										if(strlen($row['image'])>0 && file_exists('../images/sanpham/'.$row['image'])){
											echo '<td style="min-width:100px !important;" class="image-td" title="Phóng to ảnh"><img alt="'.$row['name'].'" src="../images/sanpham/'.$row['image'].'"></td>';
										}else{
											echo '<td style="min-width:100px !important;" class="image-td" title="Phóng to ảnh"><img alt="'.$row['name'].'" src="../images/default.jpg"></td>';
										}
										if((int)$row['news']>0){
											echo '<td style="min-width:100px !important;">Mới</td>';
										}else{
											echo '<td style="min-width:100px !important;">Cũ</td>';
										}
										if((int)$row['sale']>0){
											echo '<td style="min-width:100px !important;">'.$row['sale'].'%</td>';
										}else{
											echo '<td style="min-width:100px !important;">Không</td>';
										}
										$row_xuat = $db->count_xuat_hang_detail($row['id']);
										$row_nhap = $db->count_nhap_hang_detail($row['id']);
										echo '<td style="min-width:100px !important;">'.$row_nhap['tong_id'].'</td>';
										echo '<td style="min-width:100px !important;">'.$row_xuat['tong_id'].'</td>';
										echo '<td><ul>';
											echo '<li><a href="?act=san_pham_detail&id='.$row['id'].'" title="Chi tiết"><i class="icon-pencil"></i></a></li>';
											echo '<li><a href="?act=san_pham_edit&id='.$row['id'].'" title="Chỉnh sửa"><i class="fa fa-gear"></i></a></li>';
											echo '<li><a class="delete-button delete-button-'.$row['id'].'" style="cursor:pointer;"><i class="icon-bin2"></i></a></li>';
											echo '<script>
															$(\'.delete-button-'.$row['id'].'\').on("click",function(){
																	$(\'<div class="delete-section"><p>Bạn có chắc chắn muốn xóa</p><div><a href="?act=san_pham_delete&id='.$row['id'].'"><i class="icon-checkmark"></i></a><button class="cancel-button"><i class="icon-cross"></i></button></div></div>\').appendTo(\'body\');
																	$(\'.cancel-button\').on("click",function(){
																			$(\'.delete-section\').remove();
																	});
															});
													</script>';
											echo '<li><a href="?act=san_pham_refresh&id='.$row['id'].'" title="Lên Top"><i class="icon-spinner9"></i></a></li>';
											if($row['active']==1){
												echo '<li><a href="?act=san_pham_active&id='.$row['id'].'&active=0" title="Bật / Tắt"><i class="icon-checkmark"></i></a></li>';
												echo '<li></li>';
											}else{
												echo '<li></li>';
												echo '<li><a href="?act=san_pham_active&id='.$row['id'].'&active=1" title="Tắt / Bật"><i class="icon-checkmark"></i></a></li>';
											}
										echo '</ul></td>';
									echo '</tr>';
								}								
							?>
                        </table>
                    </div>
                </div>
            </form>
			<?php
				if($sum>0){
			?>
			<div class="pages-number">
                <div class="inner-pages-number">
                    <ul>
						<li <?php if(($num-4)<1){echo 'style="display:none;"';}?>><a href="?act=san_pham_list<?php echo $rel;?>&num=<?php echo $num-4;?>"><?php echo $num-4;?></a></li>
						<li <?php if(($num-3)<1){echo 'style="display:none;"';}?>><a href="?act=san_pham_list<?php echo $rel;?>&num=<?php echo $num-3;?>"><?php echo $num-3;?></a></li>
						<li <?php if(($num-2)<1){echo 'style="display:none;"';}?>><a href="?act=san_pham_list<?php echo $rel;?>&num=<?php echo $num-2;?>"><?php echo $num-2;?></a></li>
						<li <?php if(($num-1)<1){echo 'style="display:none;"';}?>><a href="?act=san_pham_list<?php echo $rel;?>&num=<?php echo $num-1;?>"><?php echo $num-1;?></a></li>
                        <li class="active-num"><a href="?act=san_pham_list<?php echo $rel;?>&num=<?php echo $num;?>"><?php echo $num;?></a></li>
						<li <?php if(($num+1)>$pages){echo 'style="display:none;"';}?>><a href="?act=san_pham_list<?php echo $rel;?>&num=<?php echo $num+1;?>"><?php echo $num+1;?></a></li>
						<li <?php if(($num+2)>$pages){echo 'style="display:none;"';}?>><a href="?act=san_pham_list<?php echo $rel;?>&num=<?php echo $num+2;?>"><?php echo $num+2;?></a></li>
						<li <?php if(($num+3)>$pages){echo 'style="display:none;"';}?>><a href="?act=san_pham_list<?php echo $rel;?>&num=<?php echo $num+3;?>"><?php echo $num+3;?></a></li>
						<li <?php if(($num+4)>$pages){echo 'style="display:none;"';}?>><a href="?act=san_pham_list<?php echo $rel;?>&num=<?php echo $num+4;?>"><?php echo $num+4;?></a></li>
                    </ul>
                </div>
            </div>
			<?php }?>
        </div>
    </div>	