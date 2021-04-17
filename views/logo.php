
			<div class="block-brand">
                <div class="container">
                    <div class="owl-carousel">
						<?php
							foreach($array_lg as $row){
								echo '<div class="item-brand">';
									if(strlen($row['image'])>0 && file_exists($row['image'])){
										echo '<a href="'.$row['link_go'].'" title="'.$row['name'].'"><img alt="'.$row['name'].'" src="'.$row['image'].'"></a>';
									}else{
										echo '<a href="'.$row['link_go'].'" title="'.$row['name'].'"><img alt="'.$row['name'].'" src="images/default.jpg"></a>';
									}
								echo '</div>';
							}
						?>
                    </div>
                </div>
            </div>