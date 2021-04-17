	<link href="css/list.css" rel="stylesheet" type="text/css"/>
	<script src='js/Chart.min.js'></script>
<!-- CONTENT -->
    <div class="main">
        <div class="main-content">
            <div class="path">
                <p><a href="?act=trangchu">Trang chủ</a><a href="?act=thong_ke">Thống kê doanh thu</a></p>
            </div>
            <div class="search">
                <div class="inner-search">
                    <form action="" method="post" enctype="multipart/form-data">
						<select name="code_year">
							<?php
								for($i=2019;$i<=2030;$i++){									
									if($i==$code_year){
										echo '<option value="'.$i.'" selected>Năm '.$i.'</option>';
									}else{
										echo '<option value="'.$i.'">Năm '.$i.'</option>';
									}
								}
							?>
                        </select>
                        <button type="submit" name="search-bt">
                            <i class="fa fa-search search-button"></i>
                        </button>
                    </form>
                </div>
            </div>
            <div class="clear"></div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="main-header">
                    <div class="main-header-name">
						<?php
							echo '<h2>Thống kê năm: '.$year.'</h2>';
						?>                        
                    </div>					
                </div>
                <div class="main-table">
                    <div class="inner-main-table">
                        <table>							
                            <tr class="first-row">
								<td style="text-align:left;">Thời gian</td>
								<td style="text-align:left;">Tổng xuất</td>
                                <td style="text-align:left;">Tổng nhập</td>
								<td style="text-align:left;">Chi phí</td>
								<td style="text-align:left;">Lương</td>
								<td style="text-align:left;">Lợi nhuận</td>
                            </tr>
                            <?php
								$tong = 0;
								$chart_time = '';
								$chart_dt = '';
								for($i=1;$i<13;$i++){
									if(strlen($i)==1){
										$month = '0'.$i;
									}else{
										$month = $i;
									}
									$row_xuat = $db->thong_ke_xuat($year,$month);
									$row_nhap = $db->thong_ke_nhap($year,$month);
									$row_chi = $db->thong_ke_chi_phi($year,$month);
									$row_luong = $db->thong_ke_luong($year,$month);
									$row_loi = $row_xuat['tong_total'] - $row_nhap['tong_total'] - $row_chi['tong_total'] - $row_luong['tong_total'];
									echo '<tr>';
										echo '<td>'.$month.'-'.$year.'</td>';
										echo '<td style="text-align:left;">'.httien($row_xuat['tong_total'],'.','').'</td>';
										echo '<td style="text-align:left;">'.httien($row_nhap['tong_total'],'.','').'</td>';
										echo '<td style="text-align:left;">'.httien($row_chi['tong_total'],'.','').'</td>';
										echo '<td style="text-align:left;">'.httien($row_luong['tong_total'],'.','').'</td>';
										echo '<td style="text-align:left;">'.httien($row_loi,'.','').'</td>';										
										$tong += $row_loi;
									echo '</tr>';
									if($i==1){
										$chart_time .= '"'.$month.'-'.$year.'"';
										$chart_dt .= $row_loi;
									}else{
										$chart_time .= ',"'.$month.'-'.$year.'"';
										$chart_dt .= ','.$row_loi;
									}
								}
							?>
							<tr>
                                <td colspan="5" style="text-align:left;"><b>Tổng cộng</b></td>
								<td style="color:red;text-align:left;"><b><?php echo httien($tong,'.','');?></b></td>
                            </tr>
                        </table>
                    </div>
                </div>
				<div class="main-header">
                    <div class="main-header-name">
						<?php
							echo '<h2>Biểu đồ doanh thu: '.$year.'</h2>';
						?>                        
                    </div>					
                </div>
				<div class="main-header">
					<canvas id="viewsWeekVL" width="1000" height="400"></canvas>
					<script>
					// line chart data
						var buyerData = {
						<?php echo 'labels : ['.$chart_time.'],';?>
						datasets : [
							{
								fillColor : "rgba(172,194,132,0.4)",
								strokeColor : "#ACC26D",
								pointColor : "#fff",
								pointStrokeColor : "#9DB86D",
								<?php echo 'data : ['.$chart_dt.']';?>
							}
						]
					}
						var viewsWeekVL = document.getElementById('viewsWeekVL').getContext('2d');
						new Chart(viewsWeekVL).Line(buyerData);
					</script>
				</div>
            </form>
        </div>
    </div>	