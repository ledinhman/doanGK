<?php
    $sql ='select * from sach';
    $obj = $pdo->prepare($sql);
    $obj->execute();
    $n = $obj->rowCount();
    $data = $obj->fetchAll(PDO::FETCH_OBJ);

	$sql ='select * from nhaxb';
    $obj = $pdo->prepare($sql);
    $obj->execute();
    $n = $obj->rowCount();
    $dataNhaxb = $obj->fetchAll(PDO::FETCH_OBJ);

	$sql ='select * from loai';
    $obj = $pdo->prepare($sql);
    $obj->execute();
    $n = $obj->rowCount();
    $dataLoai = $obj->fetchAll(PDO::FETCH_OBJ);
?>
<div class="content-box-content">
					
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						FORM THÊM SÁCH:
						<hr>
						<form action ="them.php" method = "post" enctype = "multipart/form-data" >
        					Mã sách: <input type="text" name="DH51802640_masach"><br>
       	 					Tên sách: <input type="text" name="DH51802640_tensach"><br>
        					Giá sách: <input type="number" name="DH51802640_gia"><br>
        					Hình: <input type="file" name="DH51802640_hinh"><br>
        					Mô tả: <input type="text" name="DH51802640_mota"><br>
        					Nhà xb: <select name="DH51802640_manxb" id = "">
           					<?php
                			foreach($dataNhaxb as $d){
                    		?>
                    			<option value="<?php echo $d->manxb ?>"><?php echo $d->tennxb ?></option>
                    		<?php
                			}
            				?>
            				</select><br>
        					loai: <select name="DH51802640_maloai" id = "">
            				<?php
                			foreach($dataLoai as $d){
                   			?>
                    			<option value="<?php echo $d->maloai ?>"><?php echo $d->tenloai ?></option>
                    		<?php
                			}
            				?>
        					</select><br>
        					<input type="submit" value = "THÊM SÁCH">
    					</form>
						<hr>
						<table>
							
							<thead>
								<tr>
								   <th><input class="check-all" type="checkbox" /></th>
								   <th>Mã sách</th>
								   <th>Tên sách</th>
								   <th>Giá sách</th>
								   <th>Mô tả</th>
								   <th>Tính năng</th>
								</tr>
								
							</thead>
						 
							<!-- <tfoot>
								<tr>
									<td colspan="6">
										<div class="bulk-actions align-left">
											<select name="dropdown">
												<option value="option1">Choose an action...</option>
												<option value="option2">Edit</option>
												<option value="option3">Delete</option>
											</select>
											<a class="button" href="#">Apply to selected</a>
										</div>
										
										<div class="pagination">
											<a href="#" title="First Page">&laquo; First</a><a href="#" title="Previous Page">&laquo; Previous</a>
											<a href="#" class="number" title="1">1</a>
											<a href="#" class="number" title="2">2</a>
											<a href="#" class="number current" title="3">3</a>
											<a href="#" class="number" title="4">4</a>
											<a href="#" title="Next Page">Next &raquo;</a><a href="#" title="Last Page">Last &raquo;</a>
										</div>
										<div class="clear"></div>
									</td>
								</tr>
							</tfoot> -->
						 
							<tbody>
								<?php
                                
                                foreach($data as $book)
                                {
                                    ?>
                                    <tr>
                                        <td><input type="checkbox" /></td>
                                        <td><?php echo $book->masach ?></td>
                                        <td><?php echo $book->tensach ?></td>
                                        <td><?php echo $book->gia ?></td>
                                        <td>Mô tả...</td>
                                        <td>
                                            <!-- Icons -->
                                            <a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
                                            <a href="delete.php?masach=<?php echo $book->masach ?>" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
                                            <a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
				
							</tbody>
							
						</table>
						
					</div> <!-- End #tab1 -->					

					<div class="tab-content" id="tab2"> <!-- This is the target div. id must match the href of this div's tab -->
						FORM THÊM NHÀ XUẤT BẢN:
						<hr>
						<form action ="them.php" method = "post" enctype = "multipart/form-data" >
							Mã nhà xb: <input type="text" name="DH51802640_manxb"><br>
							Tên nhà xb: <input type="text" name="DH51802640_tennxb"><br>       					
           					
        					<input type="submit" value = "THÊM NHÀ XB">
    					</form>
						<hr>
						<table>
							
							<thead>
								<tr>
								   <th><input class="check-all" type="checkbox" /></th>
								   <th>Mã nhà xb</th>
								   <th>Tên nhà xb</th>
								   <th>Tính Năng</th>
								</tr>
								
							</thead>
						 
							<!-- <tfoot>
								<tr>
									<td colspan="6">
										<div class="bulk-actions align-left">
											<select name="dropdown">
												<option value="option1">Choose an action...</option>
												<option value="option2">Edit</option>
												<option value="option3">Delete</option>
											</select>
											<a class="button" href="#">Apply to selected</a>
										</div>
										
										<div class="pagination">
											<a href="#" title="First Page">&laquo; First</a><a href="#" title="Previous Page">&laquo; Previous</a>
											<a href="#" class="number" title="1">1</a>
											<a href="#" class="number" title="2">2</a>
											<a href="#" class="number current" title="3">3</a>
											<a href="#" class="number" title="4">4</a>
											<a href="#" title="Next Page">Next &raquo;</a><a href="#" title="Last Page">Last &raquo;</a>
										</div>
										<div class="clear"></div>
									</td>
								</tr>
							</tfoot> -->
						 
							<tbody>
								<?php
                                
                                foreach($dataNhaxb as $v)
                                {
                                    ?>
                                    <tr>
                                        <td><input type="checkbox" /></td>
                                        <td><?php echo $v->manxb ?></td>
                                        <td><?php echo $v->tennxb ?></td>
                                        <td>Mô tả...</td>
                                        <td>
                                            <!-- Icons -->
                                            <a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
                                            <a href="delete.php?manxb=<?php echo $v->manxb ?>" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
                                            <a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
				
							</tbody>
							
						</table>
						
					</div>

					<div class="tab-content" id="tab3"> <!-- This is the target div. id must match the href of this div's tab -->
						FORM THÊM LOẠI SÁCH:
						<hr>
						<form action ="them.php" method = "post" enctype = "multipart/form-data" >
							Mã loại: <input type="text" name="DH51802640_maloai"><br>
							Tên loại: <input type="text" name="DH51802640_tenloai"><br>       					
           					
        					<input type="submit" value = "THÊM LOẠI">
    					</form>
						<hr>
						<table>
							
							<thead>
								<tr>
								   <th><input class="check-all" type="checkbox" /></th>
								   <th>Mã loại</th>
								   <th>Tên loại</th>
								   <th>Tính Năng</th>
								</tr>
								
							</thead>
						 
							<!-- <tfoot>
								<tr>
									<td colspan="6">
										<div class="bulk-actions align-left">
											<select name="dropdown">
												<option value="option1">Choose an action...</option>
												<option value="option2">Edit</option>
												<option value="option3">Delete</option>
											</select>
											<a class="button" href="#">Apply to selected</a>
										</div>
										
										<div class="pagination">
											<a href="#" title="First Page">&laquo; First</a><a href="#" title="Previous Page">&laquo; Previous</a>
											<a href="#" class="number" title="1">1</a>
											<a href="#" class="number" title="2">2</a>
											<a href="#" class="number current" title="3">3</a>
											<a href="#" class="number" title="4">4</a>
											<a href="#" title="Next Page">Next &raquo;</a><a href="#" title="Last Page">Last &raquo;</a>
										</div>
										<div class="clear"></div>
									</td>
								</tr>
							</tfoot> -->
						 
							<tbody>
								<?php
                                
                                foreach($dataLoai as $v)
                                {
                                    ?>
                                    <tr>
                                        <td><input type="checkbox" /></td>
                                        <td><?php echo $v->maloai ?></td>
                                        <td><?php echo $v->tenloai ?></td>
                                        <td>Mô tả...</td>
                                        <td>
                                            <!-- Icons -->
                                            <a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
                                            <a href="delete.php?maloai=<?php echo $v->maloai ?>" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
                                            <a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
				
							</tbody>
							
						</table>
						
					</div>
					
					<!-- <div class="tab-content" id="tab4">
					
						<form action="#" method="post">
							
							<fieldset> 
								
								<p>
									<label>Small form input</label>
										<input class="text-input small-input" type="text" id="small-input" name="small-input" /> <span class="input-notification success png_bg">Successful message</span>
										<br /><small>A small description of the field</small>
								</p>
								
								<p>
									<label>Medium form input</label>
									<input class="text-input medium-input datepicker" type="text" id="medium-input" name="medium-input" /> <span class="input-notification error png_bg">Error message</span>
								</p>
								
								<p>
									<label>Large form input</label>
									<input class="text-input large-input" type="text" id="large-input" name="large-input" />
								</p>
								
								<p>
									<label>Checkboxes</label>
									<input type="checkbox" name="checkbox1" /> This is a checkbox <input type="checkbox" name="checkbox2" /> And this is another checkbox
								</p>
								
								<p>
									<label>Radio buttons</label>
									<input type="radio" name="radio1" /> This is a radio button<br />
									<input type="radio" name="radio2" /> This is another radio button
								</p>
								
								<p>
									<label>This is a drop down list</label>              
									<select name="dropdown" class="small-input">
										<option value="option1">Option 1</option>
										<option value="option2">Option 2</option>
										<option value="option3">Option 3</option>
										<option value="option4">Option 4</option>
									</select> 
								</p>
								
								<p>
									<label>Textarea with WYSIWYG</label>
									<textarea class="text-input textarea wysiwyg" id="textarea" name="textfield" cols="79" rows="15"></textarea>
								</p>
								
								<p>
									<input class="button" type="submit" value="Submit" />
								</p>
								
							</fieldset>
							
							<div class="clear"></div>
							
						</form>
						
					</div>  -->      
					
				</div>
				
			</div>