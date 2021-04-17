
			<div class="block-slide-top">
                <div class="owl-carousel">
					<?php
						foreach($array_bn as $row_slide){
							if(strlen($row_slide['image'])>0 && file_exists($row_slide['image'])){
								echo '<div class="item">';
									echo '<a href="'.$row_slide['link_go'].'"><img src="'.$row_slide['image'].'" alt="'.$row_slide['name'].'"></a>';
								echo '</div>';
							}
						}
					?>
                </div>
            </div>