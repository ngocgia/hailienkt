<main class="site-main">
            <?php require_once("controllers/slider.php");?>
			
            <div class="container">
                <div class="block-video">
				
					<div class="block-video__heading">VIDEO KON TUM</div>
                    <div class="block-video__content">
                        <?php
							foreach($array_yt as $row){
								echo '<div class="video-item">';
									echo '<div class="video-item-info">';
										echo $row['link_go'];
										echo '<div class="video-item-detail">';
											echo '<div class="video-item-title">'.$row['name'].'</div>';
										echo '</div>';
									echo '</div>';
								echo '</div> ';
							}
						?>                         
                    </div>
					
                </div>
            </div>
		</main>