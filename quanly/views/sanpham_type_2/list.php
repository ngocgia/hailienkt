	<link href="css/list.css" rel="stylesheet" type="text/css"/>
	
<!-- CONTENT -->
    <div class="main">
        <div class="main-content">
            <div class="path">
                <p><a href="?act=trangchu">Trang chủ</a><a href="?act=san_pham_type_2_list">Loại sản phẩm 2</a></p>
            </div>
            <div class="clear"></div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="main-header">
                    <div class="main-header-name">
						<h2>Loại sản phẩm 2
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
                                    <li><a href="?act=san_pham_type_2_list&active=1"><i class="fa fa-check"></i>Mở</a></li>
                                    <li><a href="?act=san_pham_type_2_list&active=0"><i class="fa fa-check"></i>Khoá</a></li>
                                </ul>
                            </div>
                        </div>
						<div class="main-header-add">
							<a href="?act=san_pham_type_2_add"><i class="fa fa-plus"></i>Thêm mới</a>
						</div>						
                    </div>				
                </div>
                <div class="main-table">
                    <div class="inner-main-table">
                        <table>							
                            <tr class="first-row">
                                <td><a><div><i class="fa fa-check"></i></div></a></td>
								<td style="min-width:80px !important;">
									<?php
										if(isset($_GET['order_id'])){
											if($order_id==1){
												echo '<a href="?act=san_pham_type_2_list&active='.$active.'&order_id=0" title="Giảm dần">ID</a>';
											}else{
												echo '<a href="?act=san_pham_type_2_list&active='.$active.'&order_id=1" title="Tăng dần">ID</a>';
											}
										}else{
											echo '<a href="?act=san_pham_type_2_list&active='.$active.'&order_id=0" title="Giảm dần">ID</a>';
										}
									?>
								</td>
								<td>
									<?php
										if(isset($_GET['order_id_1'])){
											if($order_id_1==1){
												echo '<a href="?act=san_pham_type_2_list&active='.$active.'&order_id_1=0" title="Giảm dần">Loại 1</a>';
											}else{
												echo '<a href="?act=san_pham_type_2_list&active='.$active.'&order_id_1=1" title="Tăng dần">Loại 1</a>';
											}
										}else{
											echo '<a href="?act=san_pham_type_2_list&active='.$active.'&order_id_1=0" title="Giảm dần">Loại 1</a>';
										}
									?>
								</td>
                                <td>
									<?php
										if(isset($_GET['order_name'])){
											if($order_name==1){
												echo '<a href="?act=san_pham_type_2_list&active='.$active.'&order_name=0" title="Giảm dần">Tên</a>';
											}else{
												echo '<a href="?act=san_pham_type_2_list&active='.$active.'&order_name=1" title="Tăng dần">Tên</a>';
											}
										}else{
											echo '<a href="?act=san_pham_type_2_list&active='.$active.'&order_name=0" title="Giảm dần">Tên</a>';
										}
									?>
								</td>
								<td style="min-width:100px !important;">Hiển thị trang chủ</td>
                                <td width="180px;">Tùy chọn</td>
                            </tr>
							<?php
								$dem=0;
								foreach($array as $row){
									$dem++;
									echo '<tr>';
										echo '<td><a><div><i class="fa fa-check"></i></div><input type="checkbox" name="array_id[]" value="'.$row['id'].'" style="display:none"></a></td>';
										echo '<td style="min-width:80px !important;">'.$row['id'].'</td>';
										$row_1 = $db->get_row_san_pham_type_1($row['id_1']);
										echo '<td>'.$row_1['name'].'</td>';
										echo '<td>'.$row['name'].'</td>';										
										if($row['id_out']>0){
											echo '<td style="min-width:100px !important;">Có hiển thị</td>';
										}else{
											echo '<td style="min-width:100px !important;">Không hiển thị</td>';
										}
										echo '<td><ul>';
											echo '<li></li>';
											echo '<li><a href="?act=san_pham_type_2_edit&id='.$row['id'].'" title="Chỉnh sửa"><i class="fa fa-gear"></i></a></li>';
											echo '<li><a class="delete-button delete-button-'.$row['id'].'" style="cursor:pointer;"><i class="icon-bin2"></i></a></li>';
                                            echo '<script>
                                                            $(\'.delete-button-'.$row['id'].'\').on("click",function(){
                                                                    $(\'<div class="delete-section"><p>Lưu ý: Sẽ xoá cả danh sách món của Loại thực đơn!</p><div><a href="?act=san_pham_type_2_delete&id='.$row['id'].'"><i class="icon-checkmark"></i></a><button class="cancel-button"><i class="icon-cross"></i></button></div></div>\').appendTo(\'body\');
                                                                    $(\'.cancel-button\').on("click",function(){
                                                                            $(\'.delete-section\').remove();
                                                                    });
                                                            });
                                                    </script>';
											echo '<li></li>';
											if($row['active']==1){
												echo '<li><a href="?act=san_pham_type_2_active&id='.$row['id'].'&active=0" title="Bật / Tắt"><i class="icon-checkmark"></i></a></li>';
												echo '<li></li>';
											}else{
												echo '<li></li>';
												echo '<li><a href="?act=san_pham_type_2_active&id='.$row['id'].'&active=1" title="Tắt / Bật"><i class="icon-checkmark"></i></a></li>';
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