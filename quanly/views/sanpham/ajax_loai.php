								<div class="one-add one-add-type">
                                    <label></label>
                                    <div class="one-wrap-form">										
										<select name="id_2">
											<option value="0">-- Chọn loại 2 --</option>
                                            <?php
												if($id_1>0){
													$array_type = $db->get_list_san_pham_type_2(1,'dayup DESC',$id_1);
													foreach($array_type as $row){
														if(isset($_SESSION['id_2']) && $_SESSION['id_2']==$row['id']){
															echo '<option value="'.$row['id'].'" selected>'.$row['name'].'</option>';
														}else{
															echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
														}
													}
												}
											?>
                                        </select>
                                    </div>
                                </div>