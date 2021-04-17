<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link rel="shortcut icon" type="image/png" href="../images/favi1.png"/>
    <link href="css/font-awesome/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="css/jquery-ui.css" rel="stylesheet" type="text/css"/>
    <link href="css/jquery.mobile-1.4.5.css" rel="stylesheet" type="text/css"/>
    <link href="css/main.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-3.1.0.js" type="text/javascript"></script>
    <script src="js/jquery-ui.js" type="text/javascript"></script>
    <script src="js/jquery.mobile-1.4.5.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/header.js" type="text/javascript"></script>
    <script src="js/sidebar.js" type="text/javascript"></script>
    <script src="js/color.js" type="text/javascript"></script>
    <script src="js/path.js" type="text/javascript"></script>
    <script src="js/header_option.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>
    <script src="js/table.js" type="text/javascript"></script>
	<script src="js/clear.js" type="text/javascript"></script>
    <script src="js/photos.js" type="text/javascript"></script>
    <script src="js/search.js" type="text/javascript"></script>
</head>
<body>
    <!-- HEADER -->
    <div class="header">
        <div class="side-bar-button" title="Thu nhỏ">
            <div class="one-line-bar"></div>
            <div class="one-line-bar"></div>
            <div class="one-line-bar"></div>
        </div>
        <div class="theme">
            <a title="Đổi màu" class="theme-button"><i class="fa fa-th"></i></a>
            <div class="theme-table">
                <div class="inner-theme-table">
                    <div class="one-theme show-theme">
                        <a><i class="fa fa-check"></i></a>
                    </div>
                    <div class="one-theme">
                        <a><i class="fa fa-check"></i></a>
                    </div>
                    <div class="one-theme">
                        <a><i class="fa fa-check"></i></a>
                    </div>
                    <div class="one-theme">
                        <a><i class="fa fa-check"></i></a>
                    </div>
                    <div class="one-theme">
                        <a><i class="fa fa-check"></i></a>
                    </div>
                    <div class="one-theme">
                        <a><i class="fa fa-check"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="option">
            <a title="Cài đặt" class="option-button"><i class="fa fa-gear"></i></a>
            <div class="option-table">
                <ul>
                    <li><a href="?act=thongtintaikhoan"><i class="fa fa-info"></i>Thông tin tài khoản</a></li>
                    <li><a href="?act=logout"><i class="fa fa-sign-out"></i>Đăng xuất</a></li>
                </ul>
            </div>
        </div>
		<?php
			$db1 = new ThongTin;
			$name_store = $db1->get_thong_tin('name');
			
			unset($db1);
		?>
        <div class="logo">
            <a href="?act=pha_che_list">
                <span style="font-weight:bold;"><?php echo $name_store['info'];?></span>
            </a>
        </div>
    </div>
    <!-- SIDE-BAR-MOBILE -->
    <div class="side-bar-mobile hidden-md hidden-lg">
        <ul>
            <li><a href="?act=trang_chu"><span>Trang chủ</span></a></li>
			<li><a href="?act=xuat_hang"><span>Xuất hàng</span></a>
				<ul>
					<li><a href="?act=xuat_hang_list"><span>Thống kê xuất hàng</span></a></li>
					<li><a href="?act=xuat_hang_ghi_no"><span>Ghi nợ cần thu</span></a></li>
                </ul>
			</li>
			<li><a href="?act=nhap_hang"><span>Nhập hàng</span></a>
				<ul>
					<li><a href="?act=nhap_hang_list"><span>Thống kê nhập hàng</span></a></li>
					<li><a href="?act=nhap_hang_ghi_no"><span>Ghi nợ cần tra</span></a></li>
                </ul>
			</li>
			<li><a href="?act=san_pham_list"><span>Sản phẩm</span></a>
				<ul>
					<li><a href="?act=san_pham_type_1_list"><span>Phân loại cấp 1</span></a></li>
					<li><a href="?act=san_pham_type_2_list"><span>Phân loại cấp 2</span></a></li>
                </ul>
			</li>       
			<li><a href="?act=khach_hang_list"><span>Khách hàng</span></a></li>
			<li><a href="?act=doi_tac_list"><span>Đối tác</span></a></li>			
			<li><a href="?act=chi_phi_list"><span>Chi phí</span></a></li>
			<li><a href="?act=nhan_vien_list"><span>Nhân viên</span></a>
				<ul>
					<li><a href="?act=bang_luong_list"><span>Bảng lương</span></a></li>
                </ul>
            </li>
			<li><a href="?act=tai_khoan_list"><span>Tài khoản</span></a></li>
			<li><a href="?act=thong_tin"><span>Thông tin chung</span></a></li>
			<li><a href="#"><span>Thống kê</span></a>
                <ul>
					<li><a href="?act=thong_ke"><span>Thống kê doanh thu</span></a></li>
                </ul>
            </li>
			<li><a href="?act=hoat_dong_list"><span>Hoạt động</span></a></li>
            <li><a href="?act=bao_duong_list"><span>Bảo dưỡng</span></a></li>
			<li><a href="?act=banner_list"><span>Banner Slide</span></a></li>
			<li><a href="?act=logo_list"><span>Logo List</span></a></li>
			<li><a href="?act=thong_tin"><span>Thông tin chung</span></a>
				<ul>
					<li><a href="?act=gioi_thieu"><span>Giới thiệu</span></a></li>
					<li><a href="?act=bao_duong"><span>Bảo dưỡng</span></a></li>
					<li><a href="?act=youtube_list"><span>Clip Youtube</span></a></li>
					<li><a href="?act=tieu_chi_list"><span>Tiêu chí</span></a></li>
					<li><a href="?act=quang_cao"><span>Banner quảng cáo</span></a></li>
					<li><a href="?act=the_title"><span>Thẻ title</span></a></li>
					<li><a href="?act=the_keyword"><span>Thẻ keyword</span></a></li>
					<li><a href="?act=the_descrip"><span>Thẻ descrip</span></a></li>
				</ul>
            </li>
			<li><a href="?act=kho_anh_list"><span>Kho ảnh</span></a></li>
        </ul>
    </div>

<!-- SIDE-BAR -->
    <div class="menu-side-bar hidden-xs hidden-sm">
        <div>
            <ul>
                <li><a href="?act=trang_chu"><i class="fa fa-home"></i><span>Trang chủ</span></a>
                    <!-- SUB-MENU-HERE -->
                </li>
				<li><a href="?act=xuat_hang"><i class="fa fa-paper-plane"></i><span>Xuất hàng</span></a>
					<ul>
						<li><a href="?act=xuat_hang_list"><span>Thống kê xuất hàng</span></a></li>
						<li><a href="?act=xuat_hang_ghi_no"><span>Ghi nợ cần thu</span></a></li>
					</ul>
				</li>
				<li><a href="?act=nhap_hang"><i class="fa fa-share"></i><span>Nhập hàng</span></a>
					<ul>
						<li><a href="?act=nhap_hang_list"><span>Thống kê nhập hàng</span></a></li>
						<li><a href="?act=nhap_hang_ghi_no"><span>Ghi nợ cần trả</span></a></li>
					</ul>
				</li>
				<li><a href="?act=san_pham_list"><i class="fa fa-book"></i><span>Sản phẩm</span></a>
					<ul>
						<li><a href="?act=san_pham_type_1_list"><span>Phân loại cấp 1</span></a></li>
						<li><a href="?act=san_pham_type_2_list"><span>Phân loại cấp 2</span></a></li>
					</ul>
				</li>		
				<li><a href="?act=khach_hang_list"><i class="fa fa-users"></i><span>Khách hàng</span></a></li>
				<li><a href="?act=doi_tac_list"><i class="fa fa-users"></i><span>Đối tác</span></a></li>				
				<li><a href="?act=chi_phi_list"><i class="fa fa-meh-o"></i><span>Chi phí</span></a></li>				
				<li><a href="?act=nhan_vien_list"><i class="fa fa-male"></i><span>Nhân viên</span></a>
					<ul>
						<li><a href="?act=bang_luong_list"><span>Bảng lương</span></a></li>
					</ul>
                </li>
				<li><a href="?act=tai_khoan_list"><i class="fa fa-user"></i><span>Danh sách tài khoản</span></a>
                
                </li>
				<li><a href="?act=thong_tin"><i class="fa fa-info-circle"></i><span>Thông tin chung</span></a></li>
				<li><a href="#"><i class="fa fa-bar-chart"></i><span>Thống kê</span></a>
                    <ul>
                        <li><a href="?act=thong_ke"><span>Thống kê doanh thu</span></a></li>
                    </ul>
                </li>
				<li><a href="?act=hoat_dong_list"><i class="fa fa-bullhorn"></i><span>Hoạt động</span></a></li>
                <li><a href="?act=dich_vu_list"><i class="fa fa-bullhorn"></i><span>Dịch vụ</span></a></li>
				<li><a href="?act=banner_list"><i class="fa fa-file-video-o"></i><span>Banner Slide</span></a></li>
				<li><a href="?act=logo_list"><i class="fa fa-chrome"></i><span>Logo List</span></a></li>
				<li><a href="?act=thong_tin"><i class="fa fa-info-circle"></i><span>Thông tin chung</span></a>
					<ul>
						<li><a href="?act=gioi_thieu"><span>Giới thiệu</span></a></li>
						
						<li><a href="?act=youtube_list"><span>Clip Youtube</span></a></li>
						<li><a href="?act=tieu_chi_list"><span>Tiêu chí</span></a></li>
						<li><a href="?act=quang_cao"><span>Banner quảng cáo</span></a></li>
						<li><a href="?act=the_title"><span>Thẻ title</span></a></li>
						<li><a href="?act=the_keyword"><span>Thẻ keyword</span></a></li>
						<li><a href="?act=the_descrip"><span>Thẻ descrip</span></a></li>
					</ul>
                </li>
				<li><a href="?act=kho_anh_list"><i class="fa fa-picture-o"></i><span>Kho ảnh</span></a></li>
            </ul>
        </div>
    </div>
<!-- CONTENT -->
    <?php			
		require_once("controllers/action.php");
		$_SESSION['timectkt'] = date("Y-m-d H:i:s");
	?>
	
	<script>
		setInterval(function(){
			$("#thong_bao").load('controllers/thong_bao.php');
		}, 5000);
	</script>
	
</body>
</html>