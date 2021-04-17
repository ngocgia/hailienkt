<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="shortcut icon" type="image/png" href="../images/favi.png"/>
    <link href="css/font-awesome/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="css/jquery-ui.css" rel="stylesheet" type="text/css"/>
    <link href="css/jquery.mobile-1.4.5.css" rel="stylesheet" type="text/css"/>
    <link href="css/login.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-3.1.0.js" type="text/javascript"></script>
    <script src="js/jquery-ui.js" type="text/javascript"></script>
    <script src="js/jquery.mobile-1.4.5.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/login.js" type="text/javascript"></script>
    <script src="js/jssor.slider.min.js" type="text/javascript"></script>
</head>
<body>
    <!-- SLIDER -->
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            var jssor_1_options = {
              $PauseOnHover:0,
              $AutoPlay: 1,
              $Idle: 4000,
              $SlideEasing: $Jease$.$InOutSine,
              $DragOrientation: 3,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            //make sure to clear margin of the slider container element
            jssor_1_slider.$Elmt.style.margin = "";

            /*#region responsive code begin*/

            /*
                parameters to scale jssor slider to fill a container

                MAX_WIDTH
                    prevent slider from scaling too wide
                MAX_HEIGHT
                    prevent slider from scaling too high, default value is original height
                MAX_BLEEDING
                    prevent slider from bleeding outside too much, default value is 1
                    0: contain mode, allow up to 0% to bleed outside, the slider will be all inside container
                    1: cover mode, allow up to 100% to bleed outside, the slider will cover full area of container
                    0.1: flex mode, allow up to 10% to bleed outside, this is better way to make full window slider, especially for mobile devices
            */

            var MAX_WIDTH = 10000;
            var MAX_HEIGHT = 10000;
            var MAX_BLEEDING = 1;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {
                    var originalWidth = jssor_1_slider.$OriginalWidth();
                    var originalHeight = jssor_1_slider.$OriginalHeight();

                    var containerHeight = containerElement.clientHeight || originalHeight;

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);
                    var expectedHeight = Math.min(MAX_HEIGHT || containerHeight, containerHeight);

                    //constrain bullets, arrows inside slider area, it's optional, remove it if not necessary
                    //if (MAX_BLEEDING >= 0 && MAX_BLEEDING < 1) {
                    //    var widthRatio = expectedWidth / originalWidth;
                    //    var heightRatio = expectedHeight / originalHeight;
                    //    var maxScaleRatio = Math.max(widthRatio, heightRatio);
                    //    var minScaleRatio = Math.min(widthRatio, heightRatio);

                    //    maxScaleRatio = Math.min(maxScaleRatio / minScaleRatio, 1 / (1 - MAX_BLEEDING)) * minScaleRatio;
                    //    expectedWidth = Math.min(expectedWidth, originalWidth * maxScaleRatio);
                    //    expectedHeight = Math.min(expectedHeight, originalHeight * maxScaleRatio);
                    //}

                    //scale the slider to expected size
                    jssor_1_slider.$ScaleSize(expectedWidth, expectedHeight, MAX_BLEEDING);

                    //position slider at center in vertical orientation
                    jssor_1_slider.$Elmt.style.top = ((containerHeight - expectedHeight) / 2) + "px";

                    //position slider at center in horizontal orientation
                    jssor_1_slider.$Elmt.style.left = ((containerWidth - expectedWidth) / 2) + "px";
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            function OnOrientationChange() {
                ScaleSlider();
                window.setTimeout(ScaleSlider, 800);
            }

            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", OnOrientationChange);
            /*#endregion responsive code end*/
        });
    </script>
	<div style="position:relative;top:0;left:0;width:100%;height:100%;overflow:hidden;">
        <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:960px;height:640px;overflow:hidden;visibility:hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="../svg/loading/static-svg/spin.svg" />
            </div>
            <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:960px;height:640px;overflow:hidden;">
                <div>
                    <img data-u="image" src="https://truongkhangkontum.com.vn/quangcao/tkkt-qc1.jpg">
                </div>
                <div>
                    <img data-u="image" src="https://truongkhangkontum.com.vn/quangcao/tkkt-qc2.jpg">
                </div>
                <div>
                    <img data-u="image" src="https://truongkhangkontum.com.vn/quangcao/tkkt-qc3.jpg">
                </div>
                <div>
                    <img data-u="image" src="https://truongkhangkontum.com.vn/quangcao/tkkt-qc4.jpg">
                </div>
                <div>
                    <img data-u="image" src="https://truongkhangkontum.com.vn/quangcao/tkkt-qc5.jpg">
                </div>
            </div>
            <!-- Bullet Navigator -->
            <div data-u="navigator" class="jssorb064" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                <div data-u="prototype" class="i" style="width:16px;height:16px;">
                    <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                    </svg>
                </div>
            </div>
            <!-- Arrow Navigator -->
            <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                </svg>
            </div>
            <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                </svg>
            </div>
        </div>
    </div>
	<!-- LOGIN-FORM -->
    <div class="login">
        <form action="" method="post" enctype="multipart/form-data">        
            <div class="login-box" id="box-login">
                <div class="username form-group">
                    <label>
                        <span>Tài khoản</span>
                        <input type="text" size="30" name="username" class="field" placeholder="Username">
                    </label>
                </div>
                <div class="password form-group">
                    <label>
                        <span>Mật khẩu</span>
                        <input type="password" size="30" name="password" class="field" placeholder="Password">
                    </label>
                </div>
                <div class="code-confirm form-group">
                    <label>
                        <span>Mã xác nhận</span>
                        <input type="text" size="30" name="mxn" class="field">
                    </label>
                </div>
                <div class="capcha form-group">
                    <label>
                        <img src="class/capcha.php" id="img-captcha">
                        <input class="btn" type="button" value="Reload" onclick="$('#img-captcha').attr('src', 'class/capcha.php?rand=' + Math.random())">
                    </label>
                </div>
                <div class="submit form-group">
                    <label>
                        <input type="submit" value="Đăng nhập" id="login" name="login" class="btn">
                        <a href="#" class="ad-forgot-pwd">Lấy lại mật khẩu!</a>
                    </label>
                </div>
				<div class="submit form-group">
                    <label>
						<a href="../admin/index.php" class="ad-forgot-pwd">Admin</a> - 
						<a href="../nhanvien/index.php" class="ad-forgot-pwd">Nhân viên</a>
                    </label>
                </div>
                <span style="color:red;"><?php if(isset($error) && strlen($error)>0){ echo $error;}?></span>
            </div>
        </form>
    </div>
    <!-- FORGOT-PASSWORD-FORM -->
    <div class="forgot-pw unactive">
        <form method="post" action="" enctype="multipart/form-data">
            <div class="forgot-pw-box" id="box-qmk">
				<div class="email form-group">
                    <label>
                        <span>Tài khoản:</span>
                        <input class="field" size="30" name="username1" type="text" placeholder="Username ...">
                    </label>
                </div>
                <div class="email form-group">
                    <label>
                        <span>Nhập Email:</span>
                        <input class="field" size="30" name="email" type="text" placeholder="email ...">
                    </label>
                </div>
                <div class="code-confirm form-group">
                    <label>
                        <span>Mã xác nhận</span>
                        <input class="field" type="text" size="30" name="mxn">
                    </label>
                </div>
                <div class="capcha form-group">
                    <label>
                        <img src="class/capcha1.php" id="img-captcha1">
                        <input class="btn" type="button" value="Reload" onclick="$('#img-captcha1').attr('src', 'class/capcha1.php?rand=' + Math.random())">
                    </label>
                </div>
                <div class="send-email form-group">
                    <label>
                        <input class="btn" id="gbpw" name="gbpw" type="submit" value="Gửi Email">
                        <a href="#" class="ad-back-login">Quay lại!</a>
                    </label>
                </div>
            </div>
        </form>
    </div>
</body>
</html>