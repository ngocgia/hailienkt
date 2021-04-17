<?php
require_once("models/nhaphang.php");
$db = new nhaphang;

if(isset($_POST['delete-bt'])==true){	
	$arrid = $_POST["arrid"];
	$n = count($arrid);
	for($i=0;$i<$n;$i++){
		$db->active_row_nhap_hang_ghi_no($arrid[$i],1);
	}
}

if(isset($_POST['exel-bt'])==true){
	include 'class/PHPExcel/PHPExcel.php';
	$excel = new PHPExcel();
	//Chọn trang cần ghi (là số từ 0->n)
	$excel->setActiveSheetIndex(0);
	
	//Xét chiều rộng cho từng, nếu muốn set height thì dùng setRowHeight()
	$excel->getActiveSheet()->getColumnDimension('A')->setWidth(10);
	$excel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('C')->setWidth(30);
	$excel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('F')->setWidth(20);
	$excel->getActiveSheet()->getColumnDimension('G')->setWidth(20);
	
	//Xét in đậm cho khoảng cột
	$excel->getActiveSheet()->getStyle('A1:H1')->getFont()->setBold(true);
	
	//Tạo tiêu đề cho từng cột
	//Vị trí có dạng như sau:
	/**
	 * |A1|B1|C1|..|n1|
	 * |A2|B2|C2|..|n1|
	 * |..|..|..|..|..|
	 * |An|Bn|Cn|..|nn|
	 */
	$excel->getActiveSheet()->setCellValue('A1', 'Số ĐH');
	$excel->getActiveSheet()->setCellValue('B1', 'Đối tác');
	$excel->getActiveSheet()->setCellValue('C1', 'Điện thoại');
	$excel->getActiveSheet()->setCellValue('D1', 'Tổng');
	$excel->getActiveSheet()->setCellValue('E1', 'Trả trước');
	$excel->getActiveSheet()->setCellValue('F1', 'Nợ còn lại');
	$excel->getActiveSheet()->setCellValue('G1', 'Ngày xuất');
	
	// thực hiện thêm dữ liệu vào từng ô bằng vòng lặp
	// dòng bắt đầu = 2
	$numRow = 2;
	$arrid = $_POST["arrid"];
	$n = count($arrid);
	$tong = 0;
	$no = 0;
	for($i=0;$i<$n;$i++){
		$row = $db->get_row_nhap_hang($arrid[$i]);
		$row_kh = $db->get_row_doi_tac($row['id_dt']);
		$excel->getActiveSheet()->setCellValue('A' . $numRow, $row['id']);
		$excel->getActiveSheet()->setCellValue('B' . $numRow, $row_kh['name']);
		$excel->getActiveSheet()->setCellValue('C' . $numRow, $row_kh['phone']);
		$excel->getActiveSheet()->setCellValue('D' . $numRow, $row['total']);
		$excel->getActiveSheet()->setCellValue('E' . $numRow, $row['tratruoc']);
		$excel->getActiveSheet()->setCellValue('F' . $numRow, ($row['total']-$row['tratruoc']));
		$excel->getActiveSheet()->setCellValue('G' . $numRow, ngaythang($row['dayup']));
		$tong += $row['total'];
		$no += $row['total'] - $row['tratruoc'];
		$numRow++;
	}
	$excel->getActiveSheet()->setCellValue('D' . $numRow, $tong);
	$excel->getActiveSheet()->setCellValue('F' . $numRow, $no);
	PHPExcel_IOFactory::createWriter($excel, 'Excel2007')->save('exel/ghinocantra.xlsx');
}

if(isset($_GET['search'])==true){
	$search = $_GET["search"];
}else{
	$search = '';
}

if(isset($_POST['search-bt'])==true){
	$search = $_POST["search"];
	$search = strtolower(chuyenChuoi($search));
}

$row_sum = $db->count_nhap_hang_ghi_no($search);
$array = $db->get_list_nhap_hang_ghi_no($search);

require_once("views/nhaphang/congno.php");
unset($db);
