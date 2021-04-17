<main class="site-main">
            <?php require_once("controllers/slider.php");?>  

            <div class="container" style="margin-top:20px;">
                <div class="block-post">
                    <div class="block-title"><span>Dịch vụ</span></div>
                    <div class="block-content post-4column">
						<?php
						$array = $db->get_list_dich_vu($start,$limit);
							foreach($array as $row){
								echo '<div class="item-post item-post-grid">';
									echo '<div class="item-info">';
										echo '<div class="photo">';
											if(strlen($row['image'])>0 && file_exists('images/dichvu/'.$row['image'])){
												echo '<a href="dichvu/chitiet/'.taoURL($row['name'],$row['id']).'" class="img" style="background-image: url(images/dichvu/'.$row['image'].');"></a>';
											}else{
												echo '<a href="dichvu/chitiet/'.taoURL($row['name'],$row['id']).'" class="img" style="background-image: url(images/default.jpg);"></a>';
											}
										echo '</div>';
										echo '<div class="detail">';
											echo '<div class="date">Ngày đăng: '.ngaythang($row['dayup']).'</div>';
											echo '<strong class="title">'.$row['name'].'</strong>';
											echo '<div class="des">'.$row['short_info'].'</div>';
										echo '</div>';
									echo '</div>';
								echo '</div>';
							}
						?>
                        
                    </div>
                </div>
				<?php if($pages>1){	?>
                <ul class="pagination text-center">
                    <li>
                      <a href="<?php echo 'dichvu/1/dich-vu.html';?>" aria-label="Previous" class="previous" title="Trang đầu">
                        <i class="fa fa-caret-left" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li <?php if(($num-4)<1){echo 'style="display:none;"';}?>><a href="<?php echo 'dichvu/'.($num-4).'/dich-vu.html';?>"><?php echo $num-4;?></a></li>
							<li <?php if(($num-3)<1){echo 'style="display:none;"';}?>><a href="<?php echo 'dichvu/'.($num-3).'/dich-vu.html';?>"><?php echo $num-3;?></a></li>
							<li <?php if(($num-2)<1){echo 'style="display:none;"';}?>><a href="<?php echo 'dichvu/'.($num-2).'/dich-vu.html';?>"><?php echo $num-2;?></a></li>
							<li <?php if(($num-1)<1){echo 'style="display:none;"';}?>><a href="<?php echo 'dichvu/'.($num-1).'/dich-vu.html';?>"><?php echo $num-1;?></a></li>
							<li class="active"><a href="<?php echo 'dichvu/'.($num).'/dich-vu.html';?>"><?php echo $num;?></a></li>
							<li <?php if(($num+1)>$pages){echo 'style="display:none;"';}?>><a href="<?php echo 'dichvu/'.($num+1).'/dich-vu.html';?>"><?php echo $num+1;?></a></li>
							<li <?php if(($num+2)>$pages){echo 'style="display:none;"';}?>><a href="<?php echo 'dichvu/'.($num+2).'/dich-vu.html';?>"><?php echo $num+2;?></a></li>
							<li <?php if(($num+3)>$pages){echo 'style="display:none;"';}?>><a href="<?php echo 'dichvu/'.($num+3).'/dich-vu.html';?>"><?php echo $num+3;?></a></li>
							<li <?php if(($num+4)>$pages){echo 'style="display:none;"';}?>><a href="<?php echo 'dichvu/'.($num+4).'/dich-vu.html';?>"><?php echo $num+4;?></a></li>
                    <li>
                      <a href="<?php echo 'dichvu/'.$pages.'/dich-vu.html';?>" aria-label="Next" class="next" title="Trang cuối">
                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                      </a>
                    </li>
                </ul>
				<?php }?>
            </div> 

			<!-- <?php require_once("controllers/logo.php");?> -->

        </main>