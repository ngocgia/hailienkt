		<main class="site-main">
            <?php require_once("controllers/slider.php");?>

            
              <!--  <div class="container">
                    <div class="row">
						<?php
							foreach($array_tc as $row){
								echo '<div class="col-sm-4 col-xs-12">';
									echo '<div class="item-service">';
										if(strlen($row['image'])>0 && file_exists($row['image'])){
											echo '<img src="'.$row['image'].'" alt="'.$row['name'].'">';
										}else{
											echo '<img src="images/default.jpg" alt="'.$row['name'].'">';
										}
										echo '<h3 class="title">'.$row['name'].'</h3>';
										echo '<p>'.$row['short_info'].'</p>';
									echo '</div>';
								echo '</div>';
							}
						?>
                    </div>
                </div> -->
             

            <div class="container">
                <div class="row">
                    <div class="col-sm-9 col-main">
                        <?php
							echo '<div class="block-product-gird">';
								echo '<div class="block-title">';
									echo '<h3 class="title title2">';
										echo '<a href="sanpham/san-pham.html" style="color: #0054a6;"><i class="fa fa-home" aria-hidden="true">&nbsp;&nbsp;</i></a>';
										$rel = '';
										if(strlen($type)>0){
											$str = explode(".",$type);
											if((int)$str[0]>0){
												$row_1 = $db->get_row_san_pham_type((int)$str[0]);
												echo ' / <a href="sanpham/'.taoURL($row_1['name'],$row_1['id']).'">'.$row_1['name'].'</a>';
												$rel .= taoURL($row_1['name'],$row_1['id']);
											}
											if(isset($str[1]) && (int)$str[1]>0){
												$row_1 = $db->get_row_san_pham_type_2((int)$str[1]);
												echo ' / <a href="sanpham/'.taoURL($row_1['name'],$row_1['id_1'].'.'.$row_1['id']).'">'.$row_1['name'].'</a>';
												$rel .= taoURL($row_1['name'],$row_1['id_1'].'.'.$row_1['id']);
											}
										}else{
											$rel .= 'san-pham.html';
										}
									echo '</h3>';							
								echo '</div>';
								echo '<div class="block-content products-4column">';
									foreach($array as $row){
										echo '<div class="item item-product item-product3">';
											echo '<div class="item-info">';
												echo '<div class="photo">';
													if(strlen($row['image'])>0 && file_exists('images/sanpham/'.$row['image'])){
														echo '<a href="sanpham/chitiet/'.taoURL($row['name'],$row['id']).'"><img src="images/sanpham/'.$row['image'].'" alt=""></a>';
													}else{
														echo '<a href="sanpham/chitiet/'.taoURL($row['name'],$row['id']).'"><img src="images/default.jpg" alt=""></a>';
													}
													echo '<strong class="title"><a href="sanpham/chitiet/'.taoURL($row['name'],$row['id']).'">'.$row['name'].'</a></strong>';
												echo '</div>';
												echo '<div class="detail">';
													echo '<div class="price-box">';
														if($row['sale']>0){																													
															echo '<span>'.gia($row['price']*(100-$row['sale'])/100).'</span>';
															echo '<span class="old-price" style="margin-left:8px;">'.gia($row['price']).'</span>';	
														}else{
															echo '<span>'.gia($row['price']).'</span>';
														}
													echo '</div>';
													echo '<div class="des">'.$row['short_info'].'</div>';
												echo '</div>';
											echo '</div>';
										echo '</div>';
									}
								echo '</div>';
								if($pages>1){
								echo '<ul class="pagination text-center">';
										echo '<li>';
										  echo '<a href="sanpham/1/'.$rel.'" aria-label="Previous" class="previous" title="Trang đầu">';
											echo '<i class="fa fa-caret-left" aria-hidden="true"></i>';
										  echo '</a>';
										echo '</li>';
										if(($num-4)>=1){echo '<li><a href="sanpham/'.($num-4).'/'.$rel.'">'.($num-4).'</a></li>';}
										if(($num-3)>=1){echo '<li><a href="sanpham/'.($num-3).'/'.$rel.'">'.($num-3).'</a></li>';}
										if(($num-2)>=1){echo '<li><a href="sanpham/'.($num-2).'/'.$rel.'">'.($num-2).'</a></li>';}
										if(($num-1)>=1){echo '<li><a href="sanpham/'.($num-1).'/'.$rel.'">'.($num-1).'</a></li>';}
										echo '<li class="active"><a href="sanpham/'.($num).'/'.$rel.'">'.($num).'</a></li>';
										if(($num+1)<=$pages){echo '<li><a href="sanpham/'.($num+1).'/'.$rel.'">'.($num+1).'</a></li>';}
										if(($num+2)<=$pages){echo '<li><a href="sanpham/'.($num+2).'/'.$rel.'">'.($num+2).'</a></li>';}
										if(($num+3)<=$pages){echo '<li><a href="sanpham/'.($num+3).'/'.$rel.'">'.($num+3).'</a></li>';}
										if(($num+4)<=$pages){echo '<li><a href="sanpham/'.($num+4).'/'.$rel.'">'.($num+4).'</a></li>';}
										echo '<li>';
										  echo '<a href="sanpham/'.$pages.'/'.$rel.'" aria-label="Next" class="next" title="Trang cuối">';
											 echo '<i class="fa fa-caret-right" aria-hidden="true"></i>';
										  echo '</a>';
										echo '</li>';
									echo '</ul>';
								}
							echo '</div>';								
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
                        
                    </div>
                </div>
            </div>             


          <!-- <?php require_once("controllers/logo.php");?> -->

        </main>