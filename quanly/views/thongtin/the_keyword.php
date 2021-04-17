	<link href="css/edit.css" rel="stylesheet" type="text/css"/>
	<script src="js/add.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>
	<div class="main">
        <div class="main-content">
            <div class="path">
                <p><a href="?act=trangchu">Trang chủ</a><a href="?<?php echo $_SESSION['urlctkt'];?>">Thẻ keyword</a></p>
            </div>
            <div class="clear"></div>
            <div class="add-header">
                <div class="add-header-name">
                    <h2>Thẻ keyword</h2>
                </div>
            </div>
            <div class="add-table">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="add-direction">
                        <ul>
                            <li class="add-acti-dir"><a>Thông tin</a></li>
                        </ul>
                    </div>
                    <div class="add-content">
                        <div class="add-info">
                            <div class="add-info-left col-xs-12 col-sm-7">
								<?php if(isset($error) && strlen($error)>0){echo '<div class="one-add one-add-name"><label style="color:red;">'.$error.'</label></div>';}?>
								
								<div class="one-add one-add-long-info">
									<label>Chi tiết</label>
									<div class="one-wrap-form">
										<textarea rows="6" name="the_keyword"><?php echo $the_keyword['info'];?></textarea>
									</div>
								</div>
								
                            </div>
                        </div>
                    </div>
                    <div class="add-submit">
                        <div class="inner-add-submit">
                            <input type="submit" value="Lưu lại" name="edit-bt">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
