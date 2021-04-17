	<script type="text/javascript">
		$(document).ready(function(){
			$('.xoagio').click(function(e){
				e.preventDefault();
				idtd = $(this).attr("href");
				$('#ajax_gio').load('controllers/nhaphang/ajax_gio.php?act=xoa&idtd='+idtd);						
			});
			$('.giamgio').click(function(e){
				e.preventDefault();
				idtd = $(this).attr("href");
				$('#ajax_gio').load('controllers/nhaphang/ajax_gio.php?act=giam&idtd='+idtd);						
			});
			$('.tanggio').click(function(e){
				e.preventDefault();
				idtd = $(this).attr("href");
				$('#ajax_gio').load('controllers/nhaphang/ajax_gio.php?act=tang&idtd='+idtd);						
			});
		});
	</script>
									<?php
										foreach($array_san_pham as $row){
											echo '<div class="one-dishes col-xs-6 col-md-3"><div class="inner-one-dishes">';
												if(strlen($row['image'])>0  && file_exists('../../../images/sanpham/'.$row['image'])){
													echo '<div class="one-dishes-thumb"><a href="'.$row['id'].'" class="tanggio"><img alt="" src="../../../images/sanpham/'.$row['image'].'"></a></div>';
												}else{
													echo '<div class="one-dishes-thumb"><a href="'.$row['id'].'" class="tanggio"><img alt="" src="../../../images/default.png"></a></div>';
												}
												echo '<div class="one-dishes-name"><a href="'.$row['id'].'" class="tanggio">'.$row['name'].'</a></div>';
												if($row['sale']>0){
													echo '<div class="one-dishes-price"><div><p>'.httien(((100-$row['sale'])*$row['price'])/100,'.','').'</p></div></div>';
												}else{
													echo '<div class="one-dishes-price"><div><p>'.httien($row['price'],'.','').'</p></div></div>';
												}
												echo '<div class="one-dishes-add"><a href="'.$row['id'].'" class="tanggio"><div><button><i class="fa fa-plus"></i></button></div></a></div>';
												echo '<div class="one-dishes-minus"><a href="'.$row['id'].'" class="giamgio"><div><button><i class="fa fa-minus"></i></button></div></a></div>';
											echo '</div></div>';
										}
									?>