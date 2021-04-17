	<script type="text/javascript">
		$(document).ready(function(){
			$('.xoakh').click(function(e){
				e.preventDefault();
				$('#ajax_doitac').load('controllers/nhaphang/ajax_doitac.php?act=xoakh');
			});
		});
	</script>
	
								<?php if($flag){?>
								<div class="form-group">
                                    <label class="col-md-3">Họ tên</label>
                                    <div class="col-md-9">
                                        <p><?php echo $row_kh['name'];?></p>
                                    </div>
                                </div>
								<div class="form-group">
                                    <label class="col-md-3">Địa chỉ</label>
                                    <div class="col-md-9">
                                        <p><?php echo $row_kh['address'];?></p>
                                    </div>
                                </div>
								<div class="form-group">
                                    <label class="col-md-3">Email</label>
                                    <div class="col-md-9">
                                        <p><?php echo $row_kh['email'];?></p>
                                    </div>
                                </div>
								<div class="form-group">
                                    <label class="col-md-3">Tổng tích lũy</label>
                                    <div class="col-md-9">
                                        <p><?php echo httien($db->tich_luy_doi_tac($_SESSION['id_dt']),'.','');?></p>
                                    </div>
                                </div>
								<div class="clear"></div>
								<div class="order-info-more">
                                    <a href="#" class="xoakh">Xóa</a>
                                </div>
								<?php }else{?>
								<div class="form-group">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <p style="color:red;">*** <?php echo $error;?> ***</p>
                                    </div>
                                </div>
								<div class="clear"></div>
								<?php }?>