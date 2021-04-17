<main class="site-main">
            <?php require_once("controllers/slider.php");?>

       
            <div class="container">
                <div class="row">
                    <div class="col-sm-9 col-main">
                        <?php
							$array_type_tt = $db->get_list_san_pham_type_2_tt();
							foreach($array_type_tt as $row_type){
								$array = $db->get_list_san_pham('%.'.$row_type['id'],0,8);
								if(count($array)>0){
									echo '<div class="block-product-gird">';
										echo '<div class="block-title">';
											echo '<h3 class="title">'.$row_type['name'].'</h3>';								
											echo '<a href="sanpham/'.taoURL($row_type['name'],$row_type['id_1'].'.'.$row_type['id']).'" class="redmore">Xem tất cả sản phẩm >></a>';								
										echo '</div>';
										echo '<div class="block-content products-3column">';
											foreach($array as $row){
												
												// echo '<div class="item item-product item-product1">';
												// 	echo '<div class="item-info">';
												// 		echo '<div class="photo">';
												// 			if(strlen($row['image'])>0 && file_exists('images/sanpham/'.$row['image'])){
												// 				echo '<a href="sanpham/chitiet/'.taoURL($row['name'],$row['id']).'"><img src="images/sanpham/'.$row['image'].'" alt=""></a>';
												// 			}else{
												// 				echo '<a href="sanpham/chitiet/'.taoURL($row['name'],$row['id']).'"><img src="images/default.jpg" alt=""></a>';
												// 			}
												// 			echo '<div class="price-box">';
												// 			if($row['sale']>0){																				
												// 					echo '<span>'.gia($row['price']*(100-$row['sale'])/100).'</span>';
												// 					echo '<span class="old-price" style="margin-left:8px;">'.gia($row['price']).'</span>';				
												// 			}else{
												// 				echo '<span>'.gia($row['price']).'</span>';
												// 			}
												// 		echo '</div>';
												// 		echo '</div>';
												// 			echo '<div class="detail">';
												// 			echo '<strong class="title"><a href="sanpham/chitiet/'.taoURL($row['name'],$row['id']).'">'.$row['name'].'</a></strong>';
												// 			echo '<div class="des">'.$row['short_info'].'</div>';
												// 		echo '</div>';
												// 	echo '</div>';
												// echo '</div>';

												if($row['sale'] >0){
													echo '<div class="item item-product item-product3">';
													echo '<div class="item-info">';
														echo '<div class="photo">';
															if(strlen($row['image'])>0 && file_exists('images/sanpham/'.$row['image'])){
																echo '<a href="sanpham/chitiet/'.taoURL($row['name'],$row['id']).'"><img src="images/sanpham/'.$row['image'].'" alt=""></a>';
															}else{
																echo '<a href="sanpham/chitiet/'.taoURL($row['name'],$row['id']).'"><img src="images/default.jpg" alt=""></a>';
															}
															echo '<strong class="title"><a href="sanpham/chitiet/'.taoURL($row['name'],$row['id']).'">'.$row['name'].'</a></strong>';
															
															echo '<span class="item-label"><img src="images/icon/sale.png" alt=""></span>';
															echo '</div>';
														
														echo '<div class="detail">';
														
															echo '<div class="price-box">';
															echo '<span>'.gia($row['price']*(100-$row['sale'])/100).'</span>';
															echo '<span class="old-price" style="margin-left:8px;">'.gia($row['price']).'</span>';	
															echo '</div>';
															echo '<div class="des">'.$row['short_info'].'</div>';
														echo '</div>';
													echo '</div>';
												echo '</div>';
												}else{
													echo '<div class="item item-product item-product1">';
													echo '<div class="item-info">';
														echo '<div class="photo">';
															if(strlen($row['image'])>0 && file_exists('images/sanpham/'.$row['image'])){
																echo '<a href="sanpham/chitiet/'.taoURL($row['name'],$row['id']).'"><img src="images/sanpham/'.$row['image'].'" alt=""></a>';
															}else{
																echo '<a href="sanpham/chitiet/'.taoURL($row['name'],$row['id']).'"><img src="images/default.jpg" alt=""></a>';
															}

															echo '<div class="price-box">';
															echo '<span>'.gia($row['price']).'</span>';
														echo '</div>';
														echo '</div>';
															echo '<div class="detail">';
															echo '<strong class="title"><a href="sanpham/chitiet/'.taoURL($row['name'],$row['id']).'">'.$row['name'].'</a></strong>';
															echo '<div class="des">'.$row['short_info'].'</div>';
														echo '</div>';
													echo '</div>';
												echo '</div>';
												}

											}
										echo '</div>';
									echo '</div>';
								}
							}
						?>                        
                    </div>
                    <div class="col-sm-3 col-sidebar">
                        <div class="block-category">
                            <h3 class="block-title">DANH MỤC SẢN PHẨM</h3>
                            <ul>
								<?php
									foreach($array_san_pham_type as $row_type){
										$array_1 = $db->get_list_san_pham_type_2($row_type['id'],1,'dayup DESC');
										echo '<li class="menu-item-has-children">';
											echo '<a href="sanpham/'.taoURL($row_type['name'],$row_type['id']).'">'.$row_type['name'].'</a>';
											if(count($array_1)>0){
												echo '<ul class="sub-menu">';
													foreach($array_1 as $row_1){
														echo '<li><a href="sanpham/'.taoURL($row_1['name'],$row_1['id_1'].'.'.$row_1['id']).'">'.$row_1['name'].'</a></li>';
													}
												echo '</ul>';
											}
										echo '</li>';
									}
								?>
                            </ul>
						</div>
						
							<div class="block-category">
                            	<h3 class="block-title">DỊCH VỤ</h3>
				  				<ul>
				   				<?php
									$array = $db->get_list_dich_vu(0,2);
									foreach($array as $row_type){				
					 				 echo '<li >';
					  				echo '<a href="dichvu/chitiet/'.taoURL($row_type['name'],$row_type['id']).'">'.$row_type['name'].'</a>';	
									echo '</li>';
									}
								?>
                           		</ul>
                        	</div>


                        <div class="block-product-sidebar">
                            <h3 class="block-title">SẢN PHẨM MỚI</h3>
                            <div class="block-content">
								<?php
									$array = $db->get_list_san_pham('',0,6);
									foreach($array as $row){
										echo '<div class="product-sidebar">';
											echo '<div class="photo">';
												if(strlen($row['image'])>0 && file_exists('images/sanpham/'.$row['image'])){
													echo '<a href="sanpham/chitiet/'.taoURL($row['name'],$row['id']).'"><img src="images/sanpham/'.$row['image'].'" alt=""></a>';
												}else{
													echo '<a href="sanpham/chitiet/'.taoURL($row['name'],$row['id']).'"><img src="images/default.jpg" alt=""></a>';
												}												
											echo '</div>';
											echo '<div class="detail">';
												echo '<strong class="title"><a href="sanpham/chitiet/'.taoURL($row['name'],$row['id']).'">'.$row['name'].'</a></strong>';
												echo '<div class="price-box">';
													if($row['sale']>0){
														echo '<span class="old-price">'.gia($row['price']).'</span>';													
														echo '<span>'.gia($row['price']*(100-$row['sale'])/100).'</span>';
													}else{
														echo '<span>'.gia($row['price']).'</span>';
													}
												echo '</div>';
											echo '</div>';
										echo '</div>';
									}
								?>
                            </div>
                        </div>
                        <div class="block-video">
                            <h3 class="block-title">VIDEO</h3>
                            <div class="block-content">
								<?php
									foreach($array_yt as $row){
										echo '<div class="video">';
											echo $row['link_go'];
											echo '<span class="title"><a href="#">'.$row['name'].'</a></span>';
										echo '</div>';
									}
								?>
                            </div>
                        </div>
                        <?php echo $ads['info'];?>
                        <!-- <div class="block-view">
                            <h3 class="block-title">LƯỢT TRUY CẬP</h3>
                            <div class="block-content">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="t-img"><img src="images/icon/icon1.png" alt=""></td>
                                            <td class="t-title">Hôm nay</td>
                                            <td class="t-value"><?php echo $db->get_count_ngay();?></td>
                                        </tr>
                                        <tr>
                                            <td class="t-img"><img src="images/icon/icon1.png" alt=""></td>
                                            <td class="t-title">Tuần này</td>
                                            <td class="t-value"><?php echo $db->get_count_tuan();?></td>
                                        </tr>
                                        <tr>
                                            <td class="t-img"><img src="images/icon/icon1.png" alt=""></td>
                                            <td class="t-title">Tháng này</td>
                                            <td class="t-value"><?php echo $db->get_count_thang();?></td>
                                        </tr>
                                        <tr>
                                            <td class="t-img"><img src="images/icon/icon1.png" alt=""></td>
                                            <td class="t-title">Năm này</td>
                                            <td class="t-value"><?php echo $db->get_count_nam();?></td>
                                        </tr>
										<tr>
                                            <td class="t-img"><img src="images/icon/icon1.png" alt=""></td>
                                            <td class="t-title">Tổng</td>
                                            <td class="t-value"><?php echo $db->get_count_tong();?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>             

            <div class="container-active" style="background-color: #ebebeb; padding: 20px 2px">
				<div class="container" >

					<div class="block-post" >
                        <div class="block-title"><span>Tin tức</span></div>
                        <div class="block-content">
							<div class="row">
								<?php 
									$dem = 1;
									foreach($array_hdm as $row){
										if($dem==1){$row1 = $row;$dem++;};
										if($dem==2){$row2 = $row;$dem++;};
										if($dem==3){$row3 = $row;$dem++;};
										if($dem==4){$row4 = $row;$dem++;};
										if($dem==5){$row5 = $row;$dem++;};
									}
									?>
                                <div class="col-md-6 col-md-push-3">
									<div class="item-post item-post-lag">
										<div class="item-info">
											<div class="photo">
												<?php
													if(strlen($row1['image'])>0 && file_exists('images/hoatdong/'.$row1['image'])){
														echo '<a href="hoatdong/chitiet/'.taoURL($row1['name'],$row1['id']).'" class="img" style="background-image: url(images/hoatdong/'.$row1['image'].');"></a>';
													}else{
														echo '<a href="hoatdong/chitiet/'.taoURL($row1['name'],$row1['id']).'" class="img" style="background-image: url(images/default.jpg);"></a>';
													}
													?>
                                            </div>
											
                                            <div class="detail">
												<strong class="title">
													<a href="<?php echo 'hoatdong/chitiet/'.taoURL($row1['name'],$row1['id']);?>"><?php echo $row1['name'];?></a>
                                                </strong>
                                                <div class="des"><?php echo $row1['short_info'];?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-md-pull-6">
									<div class="item-post ">
										<div class="item-info">
											<div class="photo">
												<?php
													if(strlen($row2['image'])>0 && file_exists('images/hoatdong/'.$row2['image'])){
														echo '<a href="hoatdong/chitiet/'.taoURL($row2['name'],$row2['id']).'" class="img" style="background-image: url(images/hoatdong/'.$row2['image'].');"></a>';
													}else{
														echo '<a href="hoatdong/chitiet/'.taoURL($row2['name'],$row2['id']).'" class="img" style="background-image: url(images/default.jpg);"></a>';
													}
													?>
                                            </div>
                                            <div class="detail">
												<strong class="title">
													<a href="<?php echo 'hoatdong/chitiet/'.taoURL($row2['name'],$row2['id']);?>"><?php echo $row2['name'];?></a>
                                                </strong>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-post ">
										<div class="item-info">
											<div class="photo">
												<?php
													if(strlen($row3['image'])>0 && file_exists('images/hoatdong/'.$row3['image'])){
														echo '<a href="hoatdong/chitiet/'.taoURL($row3['name'],$row3['id']).'" class="img" style="background-image: url(images/hoatdong/'.$row3['image'].');"></a>';
													}else{
														echo '<a href="hoatdong/chitiet/'.taoURL($row3['name'],$row3['id']).'" class="img" style="background-image: url(images/default.jpg);"></a>';
													}
													?>
                                            </div>
                                            <div class="detail">
												<strong class="title">
													<a href="<?php echo 'hoatdong/chitiet/'.taoURL($row3['name'],$row3['id']);?>"><?php echo $row3['name'];?></a>
                                                </strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 ">
									<div class="item-post">
										<div class="item-info">
											<div class="photo">
												<?php
													if(strlen($row4['image'])>0 && file_exists('images/hoatdong/'.$row4['image'])){
														echo '<a href="hoatdong/chitiet/'.taoURL($row4['name'],$row4['id']).'" class="img" style="background-image: url(images/hoatdong/'.$row4['image'].');"></a>';
													}else{
														echo '<a href="hoatdong/chitiet/'.taoURL($row4['name'],$row4['id']).'" class="img" style="background-image: url(images/default.jpg);"></a>';
													}
													?>
                                            </div>
                                            <div class="detail">
												<strong class="title">
													<a href="<?php echo 'hoatdong/chitiet/'.taoURL($row4['name'],$row4['id']);?>"><?php echo $row4['name'];?></a>
                                                </strong>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-post ">
										<div class="item-info">
											<div class="photo">
												<?php
													if(strlen($row5['image'])>0 && file_exists('images/hoatdong/'.$row5['image'])){
														echo '<a href="hoatdong/chitiet/'.taoURL($row5['name'],$row5['id']).'" class="img" style="background-image: url(images/hoatdong/'.$row5['image'].');"></a>';
													}else{
														echo '<a href="hoatdong/chitiet/'.taoURL($row5['name'],$row5['id']).'" class="img" style="background-image: url(images/default.jpg);"></a>';
													}
													?>
                                            </div>
                                            <div class="detail">
												<strong class="title">
													<a href="<?php echo 'hoatdong/chitiet/'.taoURL($row5['name'],$row5['id']);?>"><?php echo $row5['name'];?></a>
                                                </strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
					
				</div>
				
			</div>
          <!--  <?php require_once("controllers/logo.php");?> -->
			
        </main>