	<script type="text/javascript">
		$(document).ready(function(){
			$('#get_money').change(function(){
				sale_percent = Number($('#sale_percent').val());
				sale_money = Number($('#sale_money').val());
				more_money = Number($('#more_money').val());
				get_money = Number($('#get_money').val());
				$('#ajax_tinhtien').load('controllers/xuathang/ajax_tinhtien.php?get_money='+get_money);						
			});
		});
	</script>
                        <div class="order-money-change">
                            <div><p>Tiền thối:</p></div>
                            <span style="color:red"><?php if($_SESSION['get_money']>0){echo httien(($_SESSION['get_money']-$tong),'.','');}?></span>
                        </div>