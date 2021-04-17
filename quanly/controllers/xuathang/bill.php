<?php 
session_start();
require_once("../../class/function.php");
require_once("../../models/database.php");
require_once("../../models/xuathang.php");
$db = new xuathang;

$name = $db->get_thong_tin('name');
$address = $db->get_thong_tin('address');
$phone = $db->get_thong_tin('phone');

echo '
	<!doctype html>
	<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	</head>
	<body onload="window.print();">
		<div>
			<table>
				<tr>
					<td colspan="4" style="text-align:center;font-size:15px;font-weight:bold;">'.$name['info'].'</td>				
				</tr>
				<tr>
					<td colspan="4" style="text-align:center;font-size:11px;font-weight:bold;">ĐC: '.$address['info'].'</td>					
				</tr>
				<tr>
					<td colspan="4" style="text-align:center;font-size:12px;font-weight:bold;">ĐT: '.$phone['info'].'</td>					
				</tr>
				<tr>
					<td style="text-align:left;font-size:12px;font-weight:bold;">Time:</td>
					<td colspan="2" style="text-align:right;font-size:12px;padding-right:5px;">';
					date_default_timezone_set('Asia/Ho_Chi_Minh');
					echo gmdate("d/m/Y h:i",  time()+7*3600);
					echo '</td>
				</tr>
				<tr>
					<td style="text-align:left;font-size:12px;font-weight:bold;">Giá</td>
					<td style="text-align:center;font-size:12px;font-weight:bold;">SL</td>
					<td style="text-align:right;font-size:12px;font-weight:bold;padding-right:5px;">TT</td>
				</tr>';
					$tong = 0;
					if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0){
						$n_gio = count($_SESSION['cart']);
						$dem = 0;							
						for($i=0;$i<$n_gio;$i++){
							$dem ++;
							$row = $db->get_row_san_pham($_SESSION['cart'][$i]);
							$sum = $_SESSION['soluong'][$i]*$_SESSION['gia'][$i];
							$tong += $sum;
						
							echo '	
								<tr>
									<td colspan="3" style="text-align:left;font-size:12px;">'.$row['name'].'</td>
								</tr>
								<tr>
									<td style="text-align:left;font-size:12px;font-style:italic;">'.number_format($_SESSION['gia'][$i],0,'','.').'</td>
									<td style="text-align:center;font-size:12px;font-style:italic;">'.$_SESSION['soluong'][$i].'</td>								
									<td style="text-align:right;font-size:12px;font-style:italic;padding-right:5px;">'.number_format($sum,0,'','.').'</td>
								</tr>
									';
						}
					}
				
				echo '<tr><td colspan="3"><br/></td></tr>';
				if($_SESSION['sale_percent']>0 || $_SESSION['sale_money']>0){
				echo '
							
							<tr>
								<td colspan="2" style="text-align:left;font-size:12px;font-weight:bold;">Tổng:</td>
								<td style="text-align:right;font-size:12px;padding-right:5px;font-weight:bold;">'.number_format($tong,0,'','.').'</td>				
							</tr>';
							if($_SESSION['sale_percent']>0){echo '<tr>
								<td colspan="2" style="text-align:left;font-size:12px;font-style:italic;">Giảm %:</td>
								<td style="text-align:right;font-size:12px;font-style:italic;padding-right:5px;">'.$_SESSION['sale_percent'].'%</td>				
							</tr>';}
							if($_SESSION['sale_money']>0){echo '<tr>
								<td colspan="2" style="text-align:left;font-size:12px;font-style:italic;">Giảm tiền:</td>
								<td style="text-align:right;font-size:12px;font-style:italic;padding-right:5px;">'.number_format($_SESSION['sale_money'],0,'','.').'</td>			
							</tr>';}}
							echo '
							<tr>
								<td colspan="2" style="text-align:left;font-size:14px;font-weight:bold;">Tổng tiền:</td>
								<td style="text-align:right;font-size:14px;font-weight:bold;padding-right:5px;">'.number_format(($tong*(100-$_SESSION['sale_percent'])/100-$_SESSION['sale_money']),0,'','.').'</td>				
							</tr>';
							if(isset($_SESSION['id_kh']) && $_SESSION['id_kh']>0){
								$row_kh = $db->get_row_khach_hang($_SESSION['id_kh']);
								echo '
							<tr><td colspan="3"><br/></td></tr>
							<tr>
								<td colspan="3" style="text-align:center;font-size:12px;font-weight:bold;font-style:italic;">'.$row_kh['name'].' - '.$row_kh['phone'].'</td>
							</tr>	
							';
							}
							echo '
							<tr>
								<td colspan="3" style="text-align:center;font-size:12px;font-weight:bold;font-style:italic;">Xin cám ơn và hẹn gặp lại!</td>
							</tr>
						</table>
					</div>
					<script>window.print();window.close();</script>
				</body>
				</html>
				';		
unset($db);
?>



			
			
