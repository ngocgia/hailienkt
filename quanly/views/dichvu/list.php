<link href="css/list.css" rel="stylesheet" type="text/css"/>
	
    <!-- CONTENT -->
        <div class="main">
            <div class="main-content">
                <div class="path">
                    <p>
                        <a href="?act=trangchu">Trang chủ</a>
                        <a href="?act=dich_vu_list">Dịch vụ</a>
                        <?php
                            if(strlen($id_type)>0){
                                $row_type = $db->get_row_dich_vu_type($id_type);
                                echo '<a href="?act=dich_vu_list&id_type='.$id_type.'">'.$row_type['name'].'</a>';
                            }
                        ?>
                    </p>
                </div>
                <div class="search">
                    <div class="inner-search">
                        <form action="" method="post" enctype="multipart/form-data">
                            <input type="text" name="search" placeholder="Tìm kiếm" <?php if(strlen($search)>0){echo 'value="'.$search.'"';}?>>
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
                            <h2>Dịch vụ
                                <?php
                                    if(strlen($active)>0){
                                        $active = (int)$active;
                                        if($active==0){echo ' - Khóa';}
                                        if($active==1){echo ' - Mở';}
                                    }
                                    if(strlen($search)>0){
                                        echo " - '".$search."'";
                                    }
                                    echo ' - SL: '.$sum;
                                ?>
                            </h2>                       
                        </div>
                        <div class="main-header-button">
                            <div class="main-header-handle">
                                <a class="main-button-handle"><i class="fa fa-bars"></i>Thao tác<i class="fa fa-angle-down"></i></a>
                                <div class="main-handle-box">
                                    <ul>
                                        <li><button type="submit" name="delete-bt"><i class="fa fa-trash"></i>Xóa đã chọn</button></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="main-header-add">
                                <a class="main-button-add"><i class="fa fa-sign-out"></i>Bộ lọc<i class="fa fa-angle-down"></i></a>
                                <div class="main-add-box">
                                    <ul>
                                        <li><a href="?act=dich_vu_list<?php echo $rel;?>&active=1"><i class="fa fa-check"></i>Mở</a></li>
                                        <li><a href="?act=dich_vu_list<?php echo $rel;?>&active=0"><i class="fa fa-check"></i>Khoá</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="main-header-add">
                                <a href="?act=dich_vu_add"><i class="fa fa-plus"></i>Thêm mới</a>
                            </div>	
                        </div>					
                    </div>
                    <div class="main-table">
                        <div class="inner-main-table">
                            <table>							
                                <tr class="first-row">
                                    <td><a><div><i class="fa fa-check"></i></div></a></td>
                                    <td>
                                        <?php
                                            if(isset($_GET['order_id'])){
                                                if($order_id==1){
                                                    echo '<a href="?act=dich_vu_list'.$rel.'&order_id=0" title="Giảm dần">ID</a>';
                                                }else{
                                                    echo '<a href="?act=dich_vu_list'.$rel.'&order_id=1" title="Tăng dần">ID</a>';
                                                }
                                            }else{
                                                echo '<a href="?act=dich_vu_list'.$rel.'&order_id=0" title="Giảm dần">ID</a>';
                                            }
                                        ?>
                                    </td>								
                                    <td style="min-width:200px !important;">
                                        <?php
                                            if(isset($_GET['order_name'])){
                                                if($order_name==1){
                                                    echo '<a href="?act=dich_vu_list'.$rel.'&order_name=0" title="Giảm dần">Tiêu đề</a>';
                                                }else{
                                                    echo '<a href="?act=dich_vu_list'.$rel.'&order_name=1" title="Tăng dần">Tiêu đề</a>';
                                                }
                                            }else{
                                                echo '<a href="?act=dich_vu_list'.$rel.'&order_name=0" title="Giảm dần">Tiêu đề</a>';
                                            }
                                        ?>
                                    </td>								
                                    <td style="min-width:100px !important;">Ảnh</td>
                                    <td style="min-width:100px !important;">Mô tả</td>
                                    <td width="180px;">Tùy chọn</td>
                                </tr>
                                <?php			
                                    foreach($array as $row){
                                        echo '<tr>';
                                            echo '<td><a><div><i class="fa fa-check"></i></div><input type="checkbox" name="arrid[]" value="'.$row['id'].'" style="display:none"></a></td>';
                                            echo '<td>'.$row['id'].'</td>';
                                            echo '<td style="min-width:200px !important;">'.$row['name'].'</td>';
                                            if(strlen($row['image'])>0 && file_exists('../images/dichvu/'.$row['image'])){
                                                echo '<td style="min-width:100px !important;" class="image-td" title="Phóng to ảnh"><img alt="'.$row['name'].'" src="../images/dichvu/'.$row['image'].'"></td>';
                                            }else{
                                                echo '<td style="min-width:100px !important;" class="image-td" title="Phóng to ảnh"><img alt="'.$row['name'].'" src="../images/default.jpg"></td>';
                                            }
                                            echo '<td style="min-width:100px !important;">'.$row['short_info'].'</td>';
                                            echo '<td><ul>';
                                                echo '<li><a href="?act=dich_vu_detail&id='.$row['id'].'" title="Chi tiết"><i class="icon-pencil"></i></a></li>';
                                                echo '<li><a href="?act=dich_vu_edit&id='.$row['id'].'" title="Chỉnh sửa"><i class="fa fa-gear"></i></a></li>';
                                                echo '<li><a class="delete-button delete-button-'.$row['id'].'" style="cursor:pointer;"><i class="icon-bin2"></i></a></li>';
                                                echo '<script>
                                                                $(\'.delete-button-'.$row['id'].'\').on("click",function(){
                                                                        $(\'<div class="delete-section"><p>Bạn có chắc chắn muốn xóa</p><div><a href="?act=dich_vu_delete&id='.$row['id'].'"><i class="icon-checkmark"></i></a><button class="cancel-button"><i class="icon-cross"></i></button></div></div>\').appendTo(\'body\');
                                                                        $(\'.cancel-button\').on("click",function(){
                                                                                $(\'.delete-section\').remove();
                                                                        });
                                                                });
                                                        </script>';
                                                echo '<li><a href="?act=dich_vu_refresh&id='.$row['id'].'" title="Lên Top"><i class="icon-spinner9"></i></a></li>';
                                                if($row['active']==1){
                                                    echo '<li><a href="?act=dich_vu_active&id='.$row['id'].'&active=0" title="Bật / Tắt"><i class="icon-checkmark"></i></a></li>';
                                                    echo '<li></li>';
                                                }else{
                                                    echo '<li></li>';
                                                    echo '<li><a href="?act=dich_vu_active&id='.$row['id'].'&active=1" title="Tắt / Bật"><i class="icon-checkmark"></i></a></li>';
                                                }
                                            echo '</ul></td>';
                                        echo '</tr>';
                                    }								
                                ?>
                            </table>
                        </div>
                    </div>
                </form>
                <?php 
                    $str_url='';
                    if(strlen($id_type)>0){$str_url.='&id_type='.$id_type;}
                    if(strlen($search)>0){$str_url.='&search='.$search;}
                    if(strlen($active)>0){$str_url.='&active='.$active;}
                    if(strlen($orderby)>0){$str_url.='&orderby='.$orderby;}
                    if($sum>0){
                ?>
                <div class="pages-number">
                    <div class="inner-pages-number">
                        <ul>
                            <li <?php if(($num-4)<1){echo 'style="display:none;"';}?>><a href="?act=dich_vu_list<?php echo $str_url;?>&num=<?php echo $num-4;?>"><?php echo $num-4;?></a></li>
                            <li <?php if(($num-3)<1){echo 'style="display:none;"';}?>><a href="?act=dich_vu_list<?php echo $str_url;?>&num=<?php echo $num-3;?>"><?php echo $num-3;?></a></li>
                            <li <?php if(($num-2)<1){echo 'style="display:none;"';}?>><a href="?act=dich_vu_list<?php echo $str_url;?>&num=<?php echo $num-2;?>"><?php echo $num-2;?></a></li>
                            <li <?php if(($num-1)<1){echo 'style="display:none;"';}?>><a href="?act=dich_vu_list<?php echo $str_url;?>&num=<?php echo $num-1;?>"><?php echo $num-1;?></a></li>
                            <li class="active-num"><a href="?act=dich_vu_list<?php echo $str_url;?>&num=<?php echo $num;?>"><?php echo $num;?></a></li>
                            <li <?php if(($num+1)>$pages){echo 'style="display:none;"';}?>><a href="?act=dich_vu_list<?php echo $str_url;?>&num=<?php echo $num+1;?>"><?php echo $num+1;?></a></li>
                            <li <?php if(($num+2)>$pages){echo 'style="display:none;"';}?>><a href="?act=dich_vu_list<?php echo $str_url;?>&num=<?php echo $num+2;?>"><?php echo $num+2;?></a></li>
                            <li <?php if(($num+3)>$pages){echo 'style="display:none;"';}?>><a href="?act=dich_vu_list<?php echo $str_url;?>&num=<?php echo $num+3;?>"><?php echo $num+3;?></a></li>
                            <li <?php if(($num+4)>$pages){echo 'style="display:none;"';}?>><a href="?act=dich_vu_list<?php echo $str_url;?>&num=<?php echo $num+4;?>"><?php echo $num+4;?></a></li>
                        </ul>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>	