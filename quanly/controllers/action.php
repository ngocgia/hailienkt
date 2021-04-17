<?php 		
if (!isset($_GET['act'])){
	$act = "default";
}else{
	$act = $_GET['act'];
}				
switch($act)
{	
	//------------------------------------------***-----------------------------------------
	case "hoat_dong_list":				
		$_SESSION['urlctkt'] = $_SERVER['QUERY_STRING'];
		require  "controllers/hoatdong/list.php";		
		break;
	case "hoat_dong_delete":						
		require  "controllers/hoatdong/delete.php";
		break;
	case "hoat_dong_edit":						
		require  "controllers/hoatdong/edit.php";
		break;
	case "hoat_dong_add":
        require  "controllers/hoatdong/add.php";
        break;
	case "hoat_dong_refresh":
		require  "controllers/hoatdong/refresh.php";
		break;
	case "hoat_dong_active":
		require  "controllers/hoatdong/active.php";
		break;
	case "hoat_dong_detail":
        require  "controllers/hoatdong/detail.php";
        break;
	// -----------------------------------------***-----------------------------------------
	case "dich_vu_list":				
		$_SESSION['urlctkt'] = $_SERVER['QUERY_STRING'];
		require  "controllers/dichvu/list.php";		
		break;
	case "dich_vu_delete":						
		require  "controllers/dichvu/delete.php";
		break;
	case "dich_vu_edit":						
		require  "controllers/dichvu/edit.php";
		break;
	case "dich_vu_add":
        require  "controllers/dichvu/add.php";
        break;
	case "dich_vu_refresh":
		require  "controllers/dichvu/refresh.php";
		break;
	case "dich_vu_active":
		require  "controllers/dichvu/active.php";
		break;
	case "dich_vu_detail":
        require  "controllers/dichvu/detail.php";
        break;
	//------------------------------------------***-----------------------------------------
    case "banner_list":
		$_SESSION['urlctkt'] = $_SERVER['QUERY_STRING'];
		require  "controllers/banner/list.php";		
		break;
	case "banner_add":
		require  "controllers/banner/add.php";
		break;
	case "banner_edit":
		require  "controllers/banner/edit.php";
		break;
	case "banner_active":
		require  "controllers/banner/active.php";
		break;
	case "banner_delete":
		require  "controllers/banner/delete.php";
		break;
		
	//------------------------------------------***-----------------------------------------
    case "youtube_list":
		$_SESSION['urlctkt'] = $_SERVER['QUERY_STRING'];
		require  "controllers/youtube/list.php";		
		break;
	case "youtube_add":
		require  "controllers/youtube/add.php";
		break;
	case "youtube_edit":
		require  "controllers/youtube/edit.php";
		break;
	case "youtube_active":
		require  "controllers/youtube/active.php";
		break;
	case "youtube_delete":
		require  "controllers/youtube/delete.php";
		break;
		
	//------------------------------------------***-----------------------------------------
    case "banner_admin_list":
		$_SESSION['urlctkt'] = $_SERVER['QUERY_STRING'];
		require  "controllers/banner_admin/list.php";		
		break;
	case "banner_admin_edit":
		require  "controllers/banner_admin/edit.php";
		break;
		
	//------------------------------------------***-----------------------------------------
    case "logo_list":
		$_SESSION['urlctkt'] = $_SERVER['QUERY_STRING'];
		require  "controllers/logo/list.php";		
		break;
	case "logo_add":
		require  "controllers/logo/add.php";
		break;
	case "logo_edit":
		require  "controllers/logo/edit.php";
		break;
	case "logo_active":
		require  "controllers/logo/active.php";
		break;
	case "logo_delete":
		require  "controllers/logo/delete.php";
		break;
		
	//------------------------------------------***-----------------------------------------
    case "tieu_chi_list":
		$_SESSION['urlctkt'] = $_SERVER['QUERY_STRING'];
		require  "controllers/tieuchi/list.php";		
		break;
	case "tieu_chi_add":
		require  "controllers/tieuchi/add.php";
		break;
	case "tieu_chi_edit":
		require  "controllers/tieuchi/edit.php";
		break;
	case "tieu_chi_active":
		require  "controllers/tieuchi/active.php";
		break;
	case "tieu_chi_delete":
		require  "controllers/tieuchi/delete.php";
		break;
		
	//------------------------------------------***-----------------------------------------
    case "lien_he_list":
		$_SESSION['urlctkt'] = $_SERVER['QUERY_STRING'];
		require  "controllers/lienhe/list.php";		
		break;
	case "lien_he_add":
		require  "controllers/lienhe/add.php";
		break;
	case "lien_he_edit":
		require  "controllers/lienhe/edit.php";
		break;
	case "lien_he_active":
		require  "controllers/lienhe/active.php";
		break;
	case "lien_he_delete":
		require  "controllers/lienhe/delete.php";
		break;
	
	//------------------------------------------***-----------------------------------------
    case "kho_anh_list":
        require_once  "controllers/khoanh/list.php";
        $_SESSION['urlctkt'] = $_SERVER['QUERY_STRING'];
        break;
    case "kho_anh_delete":
        require_once  "controllers/khoanh/delete.php";
        break;
		
	//------------------------------------------***-----------------------------------------
	case "thong_tin":
		$_SESSION['urlctkt'] = $_SERVER['QUERY_STRING'];
        require  "controllers/thongtin/thong_tin.php";
        break;
	case "gioi_thieu":
		$_SESSION['urlctkt'] = $_SERVER['QUERY_STRING'];
        require  "controllers/thongtin/gioi_thieu.php";
        break;
	case "bao_duong":
		$_SESSION['urlctkt'] = $_SERVER['QUERY_STRING'];
        require  "controllers/thongtin/bao_duong.php";
        break;
	case "quang_cao":
		$_SESSION['urlctkt'] = $_SERVER['QUERY_STRING'];
        require  "controllers/thongtin/quang_cao.php";
        break;
	case "the_title":
		$_SESSION['urlctkt'] = $_SERVER['QUERY_STRING'];
        require  "controllers/thongtin/the_title.php";
        break;	
	case "the_keyword":
		$_SESSION['urlctkt'] = $_SERVER['QUERY_STRING'];
        require  "controllers/thongtin/the_keyword.php";
        break;
	case "the_descrip":
		$_SESSION['urlctkt'] = $_SERVER['QUERY_STRING'];
        require  "controllers/thongtin/the_descrip.php";
        break;
	
	//Xuat Hang
	case "xuat_hang_list":
		$_SESSION['urlctkt'] = $_SERVER['QUERY_STRING'];
		require  "controllers/xuathang/list.php";		
		break;
	case "xuat_hang":
		$_SESSION['urlctkt'] = $_SERVER['QUERY_STRING'];
		require  "controllers/xuathang/add.php";		
		break;	
	case "xuat_hang_delete":
		require  "controllers/xuathang/delete.php";
		break;
	case "xuat_hang_detail":
		$_SESSION['urlctkt'] = $_SERVER['QUERY_STRING'];
		require  "controllers/xuathang/detail.php";		
		break;
	case "xuat_hang_edit":
		require  "controllers/xuathang/edit.php";		
		break;
	case "xuat_hang_cancel":
		require  "controllers/xuathang/cancel.php";		
		break;
	case "xuat_hang_ghi_no":
		$_SESSION['urlctkt'] = $_SERVER['QUERY_STRING'];
		require  "controllers/xuathang/congno.php";		
		break;
	case "xuat_hang_active":
		require  "controllers/xuathang/active.php";		
		break;
		
	//Don Hang
	case "nhap_hang_list":
		$_SESSION['urlctkt'] = $_SERVER['QUERY_STRING'];
		require  "controllers/nhaphang/list.php";		
		break;
	case "nhap_hang":
		$_SESSION['urlctkt'] = $_SERVER['QUERY_STRING'];
		require  "controllers/nhaphang/add.php";		
		break;	
	case "nhap_hang_delete":
		require  "controllers/nhaphang/delete.php";
		break;
	case "nhap_hang_edit":
		require  "controllers/nhaphang/edit.php";		
		break;
	case "nhap_hang_detail":
		$_SESSION['urlctkt'] = $_SERVER['QUERY_STRING'];
		require  "controllers/nhaphang/detail.php";		
		break;
	case "nhap_hang_cancel":
		require  "controllers/nhaphang/cancel.php";		
		break;
	case "nhap_hang_ghi_no":
		$_SESSION['urlctkt'] = $_SERVER['QUERY_STRING'];
		require  "controllers/nhaphang/congno.php";		
		break;
	case "nhap_hang_active":
		require  "controllers/nhaphang/active.php";		
		break;
		
	// Thong ke	
	case "thong_ke":
        require  "controllers/thongke/thongke.php";
        break;
		
	// Loai SP 1
    case "san_pham_type_1_list":
		$_SESSION['urlctkt'] = $_SERVER['QUERY_STRING'];
		require  "controllers/sanpham_type_1/list.php";		
		break;
    case "san_pham_type_1_add":
		require  "controllers/sanpham_type_1/add.php";
		break;
	case "san_pham_type_1_edit":
		require  "controllers/sanpham_type_1/edit.php";
		break;
	case "san_pham_type_1_delete":
		require  "controllers/sanpham_type_1/delete.php";
		break;
    case "san_pham_type_1_refresh":
		require  "controllers/sanpham_type_1/refresh.php";
		break;
	case "san_pham_type_1_active":
		require  "controllers/sanpham_type_1/active.php";
		break;
	// Loai SP 2
    case "san_pham_type_2_list":
		$_SESSION['urlctkt'] = $_SERVER['QUERY_STRING'];
		require  "controllers/sanpham_type_2/list.php";		
		break;
	case "san_pham_type_2_add":
		require  "controllers/sanpham_type_2/add.php";
		break;
	case "san_pham_type_2_edit":
		require  "controllers/sanpham_type_2/edit.php";
		break;
	case "san_pham_type_2_delete":
		require  "controllers/sanpham_type_2/delete.php";
		break;
    case "san_pham_type_2_refresh":
		require  "controllers/sanpham_type_2/refresh.php";
		break;
	case "san_pham_type_2_active":
		require  "controllers/sanpham_type_2/active.php";
		break;		
	// San pham
	case "san_pham_list":				
		$_SESSION['urlctkt'] = $_SERVER['QUERY_STRING'];
		require  "controllers/sanpham/list.php";		
		break;
	case "san_pham_delete":						
		require  "controllers/sanpham/delete.php";
		break;
	case "san_pham_edit":						
		require  "controllers/sanpham/edit.php";
		break;
	case "san_pham_add":
        require  "controllers/sanpham/add.php";
        break;
	case "san_pham_refresh":
		require  "controllers/sanpham/refresh.php";
		break;
	case "san_pham_active":
		require  "controllers/sanpham/active.php";
		break;
	case "san_pham_detail":
		require  "controllers/sanpham/detail.php";
		break;
	case "san_pham_detail_nhap":
		require  "controllers/sanpham/nhap.php";
		break;
	case "san_pham_detail_xuat":
		require  "controllers/sanpham/xuat.php";
		break;
	case "san_pham_slide":
        require  "controllers/sanpham/slide.php";
		$_SESSION['urlctkt'] = $_SERVER['QUERY_STRING'];
        break;
	case "san_pham_slide_delete":
        require  "controllers/sanpham/slide_delete.php";
        break;	
		
	// Khach hang
	case "khach_hang_list":				
		$_SESSION['urlctkt'] = $_SERVER['QUERY_STRING'];
		require  "controllers/khachhang/list.php";		
		break;
	case "khach_hang_delete":						
		require  "controllers/khachhang/delete.php";
		break;
	case "khach_hang_edit":						
		require  "controllers/khachhang/edit.php";
		break;
	case "khach_hang_add":
        require  "controllers/khachhang/add.php";
        break;
	case "khach_hang_refresh":
		require  "controllers/khachhang/refresh.php";
		break;
	case "khach_hang_active":
		require  "controllers/khachhang/active.php";
		break;
	case "khach_hang_detail":
		require  "controllers/khachhang/detail.php";
		break;
	case "khach_hang_detail_xuat":
		require  "controllers/khachhang/xuat.php";
		break;
		
	// Doi tac
	case "doi_tac_list":				
		$_SESSION['urlctkt'] = $_SERVER['QUERY_STRING'];
		require  "controllers/doitac/list.php";		
		break;
	case "doi_tac_delete":						
		require  "controllers/doitac/delete.php";
		break;
	case "doi_tac_edit":						
		require  "controllers/doitac/edit.php";
		break;
	case "doi_tac_add":
        require  "controllers/doitac/add.php";
        break;
	case "doi_tac_refresh":
		require  "controllers/doitac/refresh.php";
		break;
	case "doi_tac_active":
		require  "controllers/doitac/active.php";
		break;
	case "doi_tac_detail":
		require  "controllers/doitac/detail.php";
		break;
	case "doi_tac_detail_nhap":
		require  "controllers/doitac/nhap.php";
		break;
	
	// Nhân viên
	case "nhan_vien_list":				
		$_SESSION['urlctkt'] = $_SERVER['QUERY_STRING'];
		require  "controllers/nhanvien/list.php";		
		break;
	case "nhan_vien_delete":						
		require  "controllers/nhanvien/delete.php";
		break;
	case "nhan_vien_edit":						
		require  "controllers/nhanvien/edit.php";
		break;
	case "nhan_vien_add":
        require  "controllers/nhanvien/add.php";
        break;
	case "nhan_vien_active":
        require  "controllers/nhanvien/active.php";
        break;
	case "nhan_vien_detail":
		$_SESSION['urlctkt'] = $_SERVER['QUERY_STRING'];
        require  "controllers/nhanvien/detail.php";		
        break;
	case "luong_add":
        require  "controllers/nhanvien/add_luong.php";
        break;
	case "luong_edit":
        require  "controllers/nhanvien/edit_luong.php";
        break;
	case "luong_delete":
        require  "controllers/nhanvien/delete_luong.php";
        break;
	case "bang_luong_list":
		$_SESSION['urlctkt'] = $_SERVER['QUERY_STRING'];
        require  "controllers/nhanvien/list_bang_luong.php";		
        break;
	case "bang_luong_end":
        require  "controllers/nhanvien/list_bang_luong_end.php";
        break;
		
	// Chi phí
	case "chi_phi_list":				
		$_SESSION['urlctkt'] = $_SERVER['QUERY_STRING'];
		require  "controllers/chiphi/list.php";		
		break;
	case "chi_phi_delete":						
		require  "controllers/chiphi/delete.php";
		break;
	case "chi_phi_edit":						
		require  "controllers/chiphi/edit.php";
		break;
	case "chi_phi_add":
        require  "controllers/chiphi/add.php";
        break;
	case "chi_phi_end":
        require  "controllers/chiphi/end.php";
        break;
	
	//Tài khoản
	case "thongtintaikhoan":
		require  "controllers/taikhoan/thongtintaikhoan.php";
		break;
	case "logout":
		require  "controllers/taikhoan/logout.php";
		break;
	case "tai_khoan_list":				
		$_SESSION['urlctkt'] = $_SERVER['QUERY_STRING'];
		require  "controllers/taikhoan/list.php";		
		break;
	case "tai_khoan_delete":						
		require  "controllers/taikhoan/delete.php";
		break;
	case "tai_khoan_edit":						
		require  "controllers/taikhoan/edit.php";
		break;
	case "tai_khoan_add":
        require  "controllers/taikhoan/add.php";
        break;
	case "tai_khoan_active":
        require  "controllers/taikhoan/active.php";
        break;
		
	default:
		$_SESSION['urlctkt'] = $_SERVER['QUERY_STRING'];
		require  "controllers/xuathang/add.php";	
		break;						
					
}