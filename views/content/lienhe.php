		<main class="site-main">
            <?php require_once("controllers/slider.php");?>     

            <div class="container">
                

                <div class="block-contact">
                    <h3 class="title ">
                        <a href="#" style="color: #0054a6;"><i class="fa fa-home" aria-hidden="true">&nbsp;&nbsp;</i></a><a href="#">/ LIÊN HỆ</a></h3>

                    <div class="block-content">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="map">
                                     <!-- <div id="map" style="width:100%; height:700px;"></div> -->
                                        <!-- <script>
                                            function myMap() {
                                                var myCenter = new google.maps.LatLng(14.368884, 108.000393);
                                                var myBounce = new google.maps.LatLng(14.368884, 108.000393);               
                                                var mapOptions = {
                                                    center: myCenter,
                                                    zoom: 15
                                                };
                                                var map = new google.maps.Map(document.getElementById("map"), mapOptions);
                                                var marker = new google.maps.Marker({position: myBounce,animation: google.maps.Animation.BOUNCE});
                                                marker.setMap(map);

                                            }
                                        </script> -->
                                        <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.333741301634!2d107.70277571493111!3d14.693709089743239!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x316bea8e21424cdb%3A0x6dadaae1a1039e3c!2zMjEyIEjDuW5nIFbGsMahbmcsIFRULiBQbMOqaSBD4bqnbiwgTmfhu41jIEjhu5NpLCBLb24gVHVtLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1617275152703!5m2!1svi!2s"
                                         width="100%" height="700" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <br>
                                <p><img src="images/logohl.png" alt=""></p>
                                <br>

                           
                            <p class="map1">Địa chỉ: <?php echo $address['info'];?></p>
                            <p > <img src="images/icon/icon-cssx2.png" alt=""> Cơ sở sản xuất: 207 Phan Đình Phùng, P.Ngô Mây, Tp.Kon Tum </p>
                            <p class="map2">Di động: <?php echo $phone['info'];?> </p>
                            <p class="map3">Điện thoại: <?php echo $phone1['info'];?> </p>
                            <p class="map4">Email: <?php echo $email['info'];?></p>
                            <p> <img src="images/icon/icon-mst2.jpg" alt=""> MST: 6101157294 | Giám đốc: Vũ Thị Nguyên </p>
                       
                            </div>
                        </div>
                    </div>                                  
                   
                </div>
               
            </div> 

         <!-- <?php require_once("controllers/logo.php");?> -->

        </main>