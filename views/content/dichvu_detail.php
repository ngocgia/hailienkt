		<main class="site-main">
            <?php require_once("controllers/slider.php");?> 

            <div class="container">
                

                <div class="block-post-detail">
                    <div class="breadcrumb">
                        <a href="trang-chu.html">Trang chủ</a> &gt;&gt; <a href="=dich-vu.html">Hoạt động</a><?php echo $row_dv['name'];?>
                    </div>

                    <div class="des">
                        <h1 class="post-title"><?php echo $row_dv['name'];?></h1>
                        <p class="date">Ngày đăng: <?php echo ngaythang($row_dv['dayup']);?> | <span class="view">Lượt xem: <?php echo $row_dv['race'];?></span></p>
						<?php echo $row_dv['info'];?>
                    </div>

                    <div class="pos-new">
                        <h3 class="title">Hoạt động khác:</h3>
                        <ul>
							<?php
								foreach($array_dvk as $row){
									echo '<li><a href="dichvu/chitiet/'.taoURL($row['name'],$row['id']).'">'.$row['name'].'</a></li>';
								}
							?>
                        </ul>
                    </div>
                </div>
               
            </div> 

        <!-- <?php require_once("controllers/logo.php");?> -->

        </main>