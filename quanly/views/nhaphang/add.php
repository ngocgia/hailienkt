	<link href="css/order.css" rel="stylesheet" type="text/css"/>
	<script src="js/order.js" type="text/javascript"></script>
    <script src="js/order_add.js" type="text/javascript"></script>
	<script src="js/mobile_click.js" type="text/javascript"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('.xoagio').click(function(e){
				e.preventDefault();
				idtd = $(this).attr("href");
				$('#ajax_gio').load('controllers/nhaphang/ajax_gio.php?act=xoa&idtd='+idtd);						
			});
			$('.giamgio').click(function(e){
				e.preventDefault();
				idtd = $(this).attr("href");
				$('#ajax_gio').load('controllers/nhaphang/ajax_gio.php?act=giam&idtd='+idtd);						
			});
			$('.tanggio').click(function(e){
				e.preventDefault();
				idtd = $(this).attr("href");
				$('#ajax_gio').load('controllers/nhaphang/ajax_gio.php?act=tang&idtd='+idtd);						
			});
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#ordersearch').keyup(function(e){
				if (e.keyCode === 13){
					key = $('#ordersearch').val();
					key = key.replace(/ /g, ".");
					$('#ajax_sanpham').load('controllers/nhaphang/ajax_sanpham.php?act=search_key&key='+key);
				}
			});
			$('#ordersearch_btn').click(function(){
				key = $('#ordersearch').val();
				key = key.replace(/ /g, ".");
				$('#ajax_sanpham').load('controllers/nhaphang/ajax_sanpham.php?act=search_key&key='+key);
			});
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#khsearch').keyup(function(e){
				if (e.keyCode === 13){
					key = $('#khsearch').val();
					key = key.replace(/ /g, ".");
					$('#ajax_doitac').load('controllers/nhaphang/ajax_doitac.php?act=search_key&key='+key);
					$('#ajax_iddt').load('controllers/nhaphang/ajax_iddt.php?act=search_key&key='+key);
				}
			});
			$('#khsearch_btn').click(function(){
				key = $('#khsearch').val();
				key = key.replace(/ /g, ".");
				$('#ajax_doitac').load('controllers/nhaphang/ajax_doitac.php?act=search_key&key='+key);
				$('#ajax_iddt').load('controllers/nhaphang/ajax_iddt.php?act=search_key&key='+key);
			});
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.xoakh').click(function(e){
				e.preventDefault();
				$('#ajax_doitac').load('controllers/nhaphang/ajax_doitac.php?act=xoakh');
			});
		});
	</script>
<!-- CONTENT -->
    <div class="main">
        <div class="main-content">
            <div class="path">
                <p><a href="?act=trangchu">Trang chủ</a><a href="?act=xuat_hang">Nhập hàng</a></p>
            </div>
            <div class="clear"></div>			
            <div class="order">
                <div class="order-menu col-xs-12 col-sm-6">
                    <div class="order-search">
                        <div>
                            <input type="text" id="ordersearch" name="ordersearch" placeholder="Nhập từ khóa cần tìm">
							<button type="submit">
                                <i class="icon-search" id="ordersearch_btn"></i>
                            </button>
                        </div>
                    </div>
                    <div class="order-list">
                        <div class="one-order-list">
                            <div class="order-list-row col-xs-12">
								<span id="ajax_sanpham">
									<?php
										foreach($array_san_pham as $row){
											echo '<div class="one-dishes col-xs-6 col-md-3"><div class="inner-one-dishes">';
												if(strlen($row['image'])>0  && file_exists('../images/sanpham/'.$row['image'])){
													echo '<div class="one-dishes-thumb"><a href="'.$row['id'].'" class="tanggio"><img alt="" src="../images/sanpham/'.$row['image'].'"></a></div>';
												}else{
													echo '<div class="one-dishes-thumb"><a href="'.$row['id'].'" class="tanggio"><img alt="" src="../images/default.png"></a></div>';
												}
												echo '<div class="one-dishes-name"><a href="'.$row['id'].'" class="tanggio">'.$row['name'].'</a></div>';
												if($row['sale']>0){
													echo '<div class="one-dishes-price"><div><p>'.httien(((100-$row['sale'])*$row['price'])/100,'.','').'</p></div></div>';
												}else{
													echo '<div class="one-dishes-price"><div><p>'.httien($row['price'],'.','').'</p></div></div>';
												}
												echo '<div class="one-dishes-add"><a href="'.$row['id'].'" class="tanggio"><div><button><i class="fa fa-plus"></i></button></div></a></div>';
												echo '<div class="one-dishes-minus"><a href="'.$row['id'].'" class="giamgio"><div><button><i class="fa fa-minus"></i></button></div></a></div>';
											echo '</div></div>';
										}
									?>
								</span>
                            </div>
                        </div>
                    </div>
                </div>
				
                <div class="order-table col-xs-12 col-sm-6">
					<div class="order-info">
                            <div>
                                <input type="text" id="khsearch" name="khsearch" maxlength="10" placeholder="Nhập số điện thoại">
                                <button type="submit">
                                    <i class="icon-search" id="khsearch_btn"></i>
                                </button>
                            </div>
                            <fieldset>
								<span id="ajax_doitac">
								<?php
									if(isset($_SESSION['id_dt']) && $_SESSION['id_dt']>0){
										$row_kh = $db->get_row_doi_tac($_SESSION['id_dt']);
								?>
								<div class="form-group">
                                    <label class="col-md-3">Họ tên</label>
                                    <div class="col-md-9">
                                        <p><?php echo $row_kh['name'];?></p>
                                    </div>
                                </div>
								<div class="form-group">
                                    <label class="col-md-3">Địa chỉ</label>
                                    <div class="col-md-9">
                                        <p><?php echo $row_kh['address'];?></p>
                                    </div>
                                </div>
								<div class="form-group">
                                    <label class="col-md-3">Email</label>
                                    <div class="col-md-9">
                                        <p><?php echo $row_kh['email'];?></p>
                                    </div>
                                </div>
								<div class="form-group">
                                    <label class="col-md-3">Tổng nhập</label>
                                    <div class="col-md-9">
                                        <p><?php echo httien($db->tich_luy_doi_tac($_SESSION['id_dt']),'.','');?></p>
                                    </div>
                                </div>
								<div class="clear"></div>
								<div class="order-info-more">
                                    <a href="#" class="xoakh">Xóa</a>
                                </div>
								<?php }else{?>
                                <div class="form-group">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <p style="color:red;">*** Vui lòng nhập chính xác số điện thoại ***</p>
                                    </div>
                                </div>
								<div class="clear"></div>
								<?php }?>
								</span>                                
                            </fieldset>
                    </div>
					<form action="" method="post">
					<span id="ajax_gio">
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
                        <div><p>Trả trước</p></div>
                        <span><input type="number" class="tinhtien" id="get_money" name="get_money" value="<?php echo $_SESSION['get_money'];?>"></span>
                    </div>
                    <div class="order-after-money">
                        <div><p>Tổng tiền</p></div>
                        <span style="color:red"><?php echo httien($_SESSION['total_nhap'],'.','');?></span>
                    </div>
					</span>
                    <div class="clear"></div>
                    <div class="order-bill-option">
                        <div class="order-bill-send">
                            <button name="nhap-bt"><i class="fa fa-paper-plane"></i>Nhập hàng</button>
                        </div>
						<div class="order-bill-save">
                            <button name="capnhat-bt"><i class="fa fa-save"></i>Cập nhật</button>
                        </div>					
						<div class="order-bill-save">
							<button name="ghi-no-bt"><i class="fa fa-paper-plane"></i>Ghi nợ</button>
                        </div>
                        <div class="order-bill-cancel">
                            <a id="huy-nh" style="cursor:pointer;"><i class="icon-cross"></i>Hủy</a>
                        </div>
						<script>
							$('#huy-nh').on("click",function(){
								$('<div class="delete-section"><p>Bạn có chắc chắn muốn xóa</p><div><a href="?act=nhap_hang_cancel"><i class="icon-checkmark"></i></a><button class="cancel-button"><i class="icon-cross"></i></button></div></div>').appendTo('body');
								$('.cancel-button').on("click",function(){
									$('.delete-section').remove();
								});
							});
						</script>
						<span id="ajax_iddt">
						<?php
							if(isset($_SESSION['id_dt']) && $_SESSION['id_dt']>0){
								echo '<input type="hidden" name="id_dt" value="'.$_SESSION['id_dt'].'">';
							}
						?>
						</span>
                    </div>
					</form>
                </div>
				
            </div>
            <div class="order-mobile hidden-sm hidden-md hidden-lg">
                <ul>
                    <li class="order-mobile-active"><a href="#"><i class="fa fa-coffee"></i>Order</a></li>
                    <li><a href="#"><i class="fa fa-money"></i>Bill</a></li>
                </ul>
            </div>
        </div>
    </div>