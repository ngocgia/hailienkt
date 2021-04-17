			<div class="header-nav">
                <div class="container">
                    <ul class="ui-menu">
                        <li <?php if($act==='trangchu' || $act==='default'){echo 'class="active"';}?>><a href="trang-chu.html">Trang chủ</a></li>
                        <li <?php if($act==='gioithieu'){echo 'class="active"';}?>><a href="gioi-thieu.html">Giới thiệu</a></li>
                        <li class="dropdown">
                            <a href="san-pham.html" class="dropdown-toggle">Sản phẩm<span class="caret"></span></a>
							<button class="sub-menu-toggle"></button>
                            <ul class="dropdown-menu">
								<?php
									foreach($array_san_pham_type as $row_type){
										$array_1 = $db->get_list_san_pham_type_2($row_type['id'],1,'dayup DESC');
										echo '<li class="dropdown">';
											echo '<a href="sanpham/'.taoURL($row_type['name'],$row_type['id']).'" class="dropdown-toggle">'.$row_type['name'].'</a>';
											echo '<button class="sub-menu-toggle"></button>';
											if(count($array_1)>0){
											echo '<ul class="dropdown-menu">';
												foreach($array_1 as $row_1){
													echo '<li><a href="sanpham/'.taoURL($row_1['name'],$row_1['id_1'].'.'.$row_1['id']).'">'.$row_1['name'].'</a></li>';
												}
											echo '</ul>';
											}
										echo '</li>';
									}
								?>
                            </ul>
                        </li>
                        
			<li <?php if($act==='dichvu' || $act==='dichvu_detail'){echo 'class="active"';}?>><a href="dich-vu.html">dịch vụ</a></li>
                        <li <?php if($act==='hoatdong' || $act==='hoatdong_detail'){echo 'class="active"';}?>><a href="hoat-dong.html">tin tức</a></li>       
						<li <?php if($act==='video'){echo 'class="active"';}?>><a href="video.html">Youtube</a></li> 
                        <li <?php if($act==='lienhe'){echo 'class="active"';}?>><a href="lien-he.html">liên hệ</a></li>  
                    </ul>
                </div>
            </div>