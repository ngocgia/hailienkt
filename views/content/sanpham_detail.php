				<main class="site-main">
            <?php require_once("controllers/slider.php");?>

         <!--   <div class="block-service">
                <div class="container">
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
                </div>
            </div>  -->   

            <div class="container">
                <div class="row">
					<div class="col-sm-9  col-main">
                        <div class="breadcrumb">
							<a href="trang-chu.html">Trang chủ</a>
							<?php
								$str = explode(".",$row_sp['id_type']);
								$row_1 = $db->get_row_san_pham_type((int)$str[0]);
								echo ' >> <a href="sanpham/'.taoURL($row_1['name'],$row_1['id']).'">'.$row_1['name'].'</a>';
								$row_1 = $db->get_row_san_pham_type_2((int)$str[1]);
								echo ' >> <a href="sanpham/'.taoURL($row_1['name'],$row_1['id_1'].'.'.$row_1['id']).'">'.$row_1['name'].'</a>';
								echo ' >> '.$row_sp['name'];
							?>
                        </div>

                        <div class="block-product-detail">
                            <div class="row">
								<div class="col-lg-6">

                                    <div id="product-image-gallery" >
										<?php
											if(strlen($row_sp['image'])>0 && file_exists('images/sanpham/'.$row_sp['image'])){
												echo '<div class="item">';
													echo '<div class="imglag">';
														echo '<img src="images/sanpham/'.$row_sp['image'].'" alt="" >';
													echo '</div>';
												echo '</div>';
											}else{
												echo '<div class="item">';
													echo '<div class="imglag">';
														echo '<img src="images/default.jpg" alt="" >';
													echo '</div>';
												echo '</div>';
											}
											if(strlen($row_sp['image_slide'])>0){
												$array = explode(';',$row_sp['image_slide']);
												$n = count($array);
												for($i=0;$i<$n;$i++){
													if(strlen($array[$i])>0 && file_exists('images/sanpham/'.$array[$i])){
														echo '<div class="item">';
															echo '<div class="imglag">';
																echo '<img src="images/sanpham/'.$array[$i].'" alt="" >';
															echo '</div>';
														echo '</div>';
													}else{
														echo '<div class="item">';
															echo '<div class="imglag">';
																echo '<img src="images/default.jpg" alt="" >';
															echo '</div>';
														echo '</div>';
													}
												}
											}
										?>										
                                    </div>

                                    <div id="product-image-gallery-thumb" class="img-thumb">
										<?php
											if(strlen($row_sp['image'])>0 && file_exists('images/sanpham/'.$row_sp['image'])){
												echo '<div class="item">';
													echo '<div class="img">';
														echo '<img src="images/sanpham/'.$row_sp['image'].'" alt="" >';
													echo '</div>';
												echo '</div>';
											}else{
												echo '<div class="item">';
													echo '<div class="img">';
														echo '<img src="images/default.jpg" alt="" >';
													echo '</div>';
												echo '</div>';
											}
											if(strlen($row_sp['image_slide'])>0){
												$array = explode(';',$row_sp['image_slide']);
												$n = count($array);
												for($i=0;$i<$n;$i++){
													if(strlen($array[$i])>0 && file_exists('images/sanpham/'.$array[$i])){
														echo '<div class="item">';
															echo '<div class="img">';
																echo '<img src="images/sanpham/'.$array[$i].'" alt="" >';
															echo '</div>';
														echo '</div>';
													}else{
														echo '<div class="item">';
															echo '<div class="img">';
																echo '<img src="images/default.jpg" alt="" >';
															echo '</div>';
														echo '</div>';
													}
												}
											}
										?>
                                    </div>
                                </div>
                                <div class="col-lg-6">

                                    <h1 class="title"><?php echo $row_sp['name'];?></h1>
                                    <div class="price-box">
										<?php
											if($row_sp['sale']>0){
												echo '<span>'.gia($row_sp['price']*(100-$row_sp['sale'])/100).'</span>';
											}else{
												echo '<span>'.gia($row_sp['price']).'</span>';
											}
										?>                                        
                                    </div>
                                    <div class="des">
                                        <?php echo $row_sp['short_info'];?>
                                    </div>
                                    <div class="hotline">LIÊN HỆ LẮP ĐẶT: <span> <?php echo $phone['info'];?></span></div>
                                </div>
                            </div>
                        </div>

                        <div class="block-tabs-view">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#tabs1" role="tab" data-toggle="tab">Chi tiết </a></li>
                                <li role="presentation"><a href="#tabs2"  role="tab" data-toggle="tab">THÔNG SỐ KỸ THUẬT</a></li>
                            </ul>

                              
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="tabs1">
                                    <?php echo $row_sp['info'];?>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="tabs2">
                                    <?php echo $row_sp['thongso'];?>
                                </div>
                            </div>

                        </div>
                        <div class="block-product-gird">
                            <div class="block-title">
                                <h3 class="title ">
                                   SẢN PHẨM LIÊN QUAN
                               </h3>
                            </div>
                            <div class="block-content products-4column">
								<?php
									foreach($array_spk as $row){
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
								?>
                            </div>
                        </div>

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
	