				
			<script type="text/javascript">
				$(document).ready(function(){
					$('.xoagio').click(function(e){
						e.preventDefault();
						idtd = $(this).attr("href");
						$('#ajax_gio').load('controllers/nhaphang/ajax_gio.php?act=xoa&idtd='+idtd);						
					});
				});
			</script>
					<div class="order-bill">
                        <table>							
                            <tr>
                                <td class="hidden">TT</td>
                                <td>Tên sản phẩm</td>
                                <td>SL</td>
                                <td>Giá nhập</td>
								<td>Tổng</td>
                                <td>Xóa</td>
                            </tr>
							<?php
								$_SESSION['total_nhap'] = 0;
								if(isset($_SESSION['cart_nhap']) && count($_SESSION['cart_nhap'])>0){
									$n_gio = count($_SESSION['cart_nhap']);
									$dem = 0;									
									for($i=0;$i<$n_gio;$i++){
										$dem ++;
										$row_td = $db->get_row_san_pham($_SESSION['cart_nhap'][$i]);
										echo '<tr>';
											echo '<td class="hidden">'.$dem.'</td>';
											if($row_td['sale']>0){
												echo '<td>'.$row_td['name'].'<i class="icon-pencil" title="Giá gốc:'.$row_td['price'].'"></i></td>';
											}else{
												echo '<td>'.$row_td['name'].'</td>';
											}
											echo '<td><input type="number" name="arr_num[]" value="'.$_SESSION['soluong_nhap'][$i].'"></td>';
											echo '<td><input type="number" name="arr_price[]" value="'.$_SESSION['gia_nhap'][$i].'"></td>';
											echo '<td>'.httien($_SESSION['soluong_nhap'][$i]*$_SESSION['gia_nhap'][$i],'.','').'</td>';											
											echo '<td><a href="'.$_SESSION['cart_nhap'][$i].'" class="xoagio"><i class="icon-cross"></i></a></td>';
										echo '</tr>';
										$_SESSION['total_nhap'] += $_SESSION['soluong_nhap'][$i]*$_SESSION['gia_nhap'][$i];
									}									
								}
								$tong = $_SESSION['total_nhap'];
							?>
						</table>
                        <div class="order-bill-arrow">
                            <p class="hidden-sm hidden-md hidden-lg"><i class="fa fa-long-arrow-down"></i>Vui lòng chọn nút Order để chọn sản phẩm</p>
                            <p class="hidden-xs"><i class="fa fa-long-arrow-left"></i>Vui lòng chọn sản phẩm bên trái</p>
                        </div>
                    </div>
					<div class="order-money-receive">
                        <div><p>Nhận tiền</p></div>
                        <span><input type="number" class="tinhtien" id="get_money" name="get_money" value="<?php echo $_SESSION['get_money'];?>"></span>
                    </div>
                    <div class="order-after-money">
                        <div><p>Tổng tiền</p></div>
                        <span style="color:red"><?php echo httien($_SESSION['total_nhap'],'.','');?></span>
                    </div>