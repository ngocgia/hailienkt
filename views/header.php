		<header class="site-header">
            <div class="header-top">
                <div class="container">
                    
                    <ul class="contact pull-left">
                        <li><img src="images/icon/map.png" alt="img"><?php echo $address['info'];?></li>
                        <li><img src="images/icon/mail.png" alt="img"><?php echo $email['info'];?></li>
                        <li><img src="images/icon/phone.png" alt="img"><?php echo $phone['info'];?></li>
                    </ul>
                    <ul class="social pull-right">
                        <li><a href="<?php echo $youtube['info'];?>"><img src="images/icon/youtube.png" alt="img"></a></li>
                        <li><a href="<?php echo $facebook['info'];?>"><img src="images/icon/facebook.png" alt="img"></a></li>
                        <li><a href="<?php echo $facebook['info'];?>"><img src="images/icon/google.png" alt="img"></a></li>
                    </ul>
                </div>
            </div>
            <div class="header-content">
                <div class="container">
                    <strong class="logo">
                        <a href="#"><img src="images/logohl.png" alt="logo"></a>
                    </strong>
                    <div class="hottline">
                        <p>Phòng kinh doanh</p>
                        <strong>0986 058 961 - 0986 058 964</strong>
                        <p>Hỗ trợ kỹ thuật: <strong>0379 195 104</strong></p> 

                    </div>
                    <a href="#" data-action='toggle-nav' class="toggle-nav"><span>Menu</span></a>
                </div>
            </div>
			<?php require_once("controllers/menu.php");?>
            
        </header> 