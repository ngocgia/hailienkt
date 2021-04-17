		<main class="site-main">
            <?php require_once("controllers/slider.php");?> 

            <div class="container">
                

                <div class="block-post-detail">
                    <div class="breadcrumb">
                        <a href="trang-chu.html">Trang chủ</a> &gt;&gt; <a href="=hoat-dong.html">Hoạt động</a><?php echo $row_hd['name'];?>
                    </div>

                    <div class="des">
                        <h1 class="post-title"><?php echo $row_hd['name'];?></h1>
                        <p class="date">Ngày đăng: <?php echo ngaythang($row_hd['dayup']);?> | <span class="view">Lượt xem: <?php echo $row_hd['race'];?></span></p>
						<?php echo $row_hd['info'];?>
                    </div>

                    <div class="pos-new">
                        <h3 class="title">Hoạt động khác:</h3>
                        <ul>
							<?php
								foreach($array_hdk as $row){
									echo '<li><a href="hoatdong/chitiet/'.taoURL($row['name'],$row['id']).'">'.$row['name'].'</a></li>';
								}
							?>
                        </ul>
                    </div>
                </div>
               
            </div> 

       <!-- <?php require_once("controllers/logo.php");?> -->

        </main>