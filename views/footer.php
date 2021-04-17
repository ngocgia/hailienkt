		<footer class="site-footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <h3 style="font-size: 36px;font-weight: 600;margin: 0 0 25px 0;font-family: Arial;" > 
                               <?php echo $name['info'];?></h3>
                            <p class="map1">Địa chỉ: <?php echo $address['info'];?></p>
                            <p > <img src="images/icon/icon-cssx.png" alt=""> Cơ sở sản xuất: 207 Phan Đình Phùng, P.Ngô Mây, Tp.Kon Tum </p>
                            <p class="map2">Di động: <?php echo $phone['info'];?> </p>
                            <p class="map3">Điện thoại: <?php echo $phone1['info'];?> </p>
                            <p class="map4">Email: <?php echo $email['info'];?></p>
                            <p> <img src="images/icon/icon-mst.png" alt=""> MST: 6101157294 | Giám đốc: Vũ Thị Nguyên </p>
<a href='http://online.gov.vn/Home/WebDetails/79140'><img src='images/bct.png'/></a>
                        </div>
                        <!-- <div class="col-sm-6 col-md-4">
                            <h3 class="title">SẢN PHẨM</h3>
                            <ul>
								
                            </ul>
                        </div> -->
                        <div class="col-sm-4 col-md-2">
                            <h3 class="title">SẢN PHẨM</h3>
                            <ul>
                            <?php
									foreach($array_san_pham_type as $row_type){
										echo '<li><a href="sanpham/'.taoURL($row_type['name'],$row_type['id']).'">'.$row_type['name'].'</a> </li>';
									}
								?>
                            </ul>
                        </div>
                        <div class="col-sm-4 col-md-2">
                            <h3 class="title title0">&nbsp;</h3>
                            <ul>
                            <?php
                                    $array_san_pham_type = $db->get_list_san_pham_type_2_tt(0,4);
									foreach($array_san_pham_type as $row_type){
										echo '<li><a href="sanpham/'.taoURL($row_type['name'],$row_type['id']).'">'.$row_type['name'].'</a> </li>';
									}
								?>
                            </ul>
                        </div>
                        <div class="col-sm-4  col-md-2">
                            <h3 class="title">Dịch vụ</h3>
                            <ul>
                                <li><a href="gioi-thieu.html">Giới thiệu</a> </li>
                                <li><a href="dich-vu.html">Dịch vụ</a></li>
                                <li><a href="hoat-dong.html">Tin tức</a></li>
                                <li><a href="lien-he.html">Liên hệ</a></li>
                                <li><a href="chinh-sach.html">Chính sách bảo vệ thông tin cá nhân người tiêu dùng</a></li>
                            </ul>
                        </div>
                    </div>
                   
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    Copyright © <?php echo date('Y');?> <a href="https://truongkhangkontum.com.vn/">| Designed by: TK-KT CO,. LTD</a>
                </div>
            </div>
           
            <a href="#" class="back-to-top"></a>
            <a href="tel:<?php echo $phone['info'];?>" class="phone-mobile"></a>

        </footer>
        <a href="tel:<?php echo $phone['info'];?>" class="phone-desktop"><?php echo $phone['info'];?></a>