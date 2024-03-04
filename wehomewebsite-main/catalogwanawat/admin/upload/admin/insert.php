<br></br>
				<h1 class="app-page-title"><br>เพิ่มข้อมูลผู้ดูแลระบบ</br></h1>
				<hr class="mb-4">
                <div class="row g-4 settings-section">
	                
	                <div class="col-12 col-md-12">
		                <div class="app-card app-card-settings shadow-sm p-4">
						    
						    <div class="app-card-body">
									<?php
										//print_r($_POST);
										if(isset($_POST) && !empty($_POST)){
											//print_r($_POST);
											//print_r($_FILES);
											//exit();

											$user= $_POST['user'];
											$pass= $_POST['pass'];
											$firstname= $_POST['firstname'];
											$lastname= $_POST['lastname'];
											$email= $_POST['email'];
											$phone= $_POST['phone'];

											
											if(isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])){
												$extension = array("jpeg", "png", "jpg");
												$target = 'upload/admin/';
												$filename = $_FILES['image']['name'];
												$filetmp = $_FILES['image']['tmp_name'];
												$ext = pathinfo($filename, PATHINFO_EXTENSION);

												// Check if the file already exists in the target folder.
												if (!file_exists($target . $filename)) {
													// If it doesn't exist, try to move the uploaded file to the target folder.
													if (move_uploaded_file($filetmp, $target . $filename)) {
														// File moved successfully.
														echo 'File uploaded successfully.';
													} else {
														// Failed to move the file.
														echo 'Failed to upload the file to the folder.';
													}
												} else {
													// If the file already exists, rename it by appending a timestamp.
													$newfilename = time() . $filename;
													if (move_uploaded_file($filetmp, $target . $newfilename)) {
														// File moved and renamed successfully.
														$filename = $newfilename;
														echo 'เพิ่มไฟล์เข้า Folder สำเร็จ';
													} else {
														// Failed to move and rename the file.
														echo 'ประเภทไฟล์ไม่ถูกต้อง';
													}
												}
											} else{
												$filename ='';
												// No file uploaded or invalid file type.
												//echo 'No file uploaded or invalid file type.';
											}

											//echo $filename;
											//exit();



											$sql = "INSERT INTO tb_admin 
											(firstname, lastname, email, phone, user, pass,image)
       								VALUES ('$firstname', '$lastname', '$email', '$phone', '$user', '$pass', '$filename')";


											
												if (mysqli_query($connection, $sql)) {
												echo "เพิ่มข้อมูลสำเร็จ";
												} else {
												echo "Error: " . $sql . "<br>" . mysqli_error($connection);
												}

												mysqli_close($connection);
										}

									?>
							    <form action="" method="POST" enctype= "multipart/form-data">
								<div class="mb-3">
									    <label class="form-label">รูปภาพ</label>
										<div>
										<image id="preview" width="200" height="200">
											<br></br>
									    <input type="file" class="form-control"  name="image" id="image" >
									</div>
								    <div class="mb-3">
									    <label class="form-label">ชื่อผู้ใช้</label>
									    <input type="text" class="form-control" placeholder="ชื่อผู้ใช้" name="user" required>
									</div>
									
									<div class="mb-3">
									    <label  class="form-label">รหัสผ่าน</label>
									    <input type="password" class="form-control"  placeholder="กรอกรหัสผ่าน"  name="pass" required>
										
									</div>

									<div class="mb-3">
									    <label  class="form-label">ชื่อ</label>
									    <input type="text" class="form-control" name="firstname"   required>
										
									</div>

									<div class="mb-3">
									    <label  class="form-label">นามสกุล</label>
									    <input type="text" class="form-control"  name="lastname"  required>
										
									</div>

									<div class="mb-3">
									    <label  class="form-label">Email</label>
									    <input type="text" class="form-control"  placeholder="ilikeU@gmail.com"  name="email" required>
										
									</div>

									<div class="mb-3">
									    <label  class="form-label">เบอร์โทรศัพท์</label>
									    <input type="text" class="form-control"  name="phone"  required>
										
									</div>
								   
									<button type="submit" class="btn app-btn-primary" >บันทึก</button>
							    </form>

						    </div><!--//app-card-body-->
						    
						</div><!--//app-card-->
	                </div>
                </div><!--//row-->
              