<?php
	$sql = "select * from tb_admin";
	$query = mysqli_query($connection,$sql);

	
?>
<h1 class="app-page-title"><br>ตารางข้อมูลผู้ดูแลระบบ</br></h1>

				<hr class="mb-4">
                <div class="row g-4 settings-section">
	                
	                <div class="col-12 col-md-12">
		                <div class="app-card app-card-settings shadow-sm p-4">
						    	
						 <div class="app-card-body">
							<a href="?page=<?=$_GET['page']?>&function=add" class="btn btn-success text-white "> เพิ่มข้อมูลผู้ดูแลระบบ</a><br></br>
							<table class="table" id ="Tableall">

							<thead >
								<tr>
									<th scope="col" style="text-align: center;">รูปภาพ</th>
									<th scope="col" style="text-align: center;">ชื่อผู้ใช้</th>
									<th scope="col" style="text-align: center;">ชื่อ - นามสกุล</th>
									<th scope="col" style="text-align: center;">Email</th>
									<th scope="col" style="text-align: center;">เบอร์โทรศัพท์</th>
									<th scope="col" style="text-align: center;">สถานะ</th>
									<th scope="col" style="text-align: center;">เมนู</th>
								</tr>
							</thead>
									<tbody class="text-center">
										<?php foreach ($query as $data): ?>
											<tr>
												<td class="align-middle"><img src="upload/admin/<?= isset($data['image']) ? $data['image'] : '' ?>" class = "rounded" width="100" height="100"></td>
												<td class="align-middle"><?= isset($data['User']) ? $data['User'] : '' ?></td>
												<td class="align-middle"><?= isset($data['firstname']) && isset($data['lastname']) ? $data['firstname'] . ' ' . $data['lastname'] : '' ?></td>
												<td class="align-middle"><?= isset($data['email']) ? $data['email'] : '' ?></td>
												<td class="align-middle"><?= isset($data['phone']) ? $data['phone'] : '' ?></td>
												<td class="align-middle"><?= isset($data['status']) ? ($data['status'] == 0 ? '<span class= "btn btn-sm btn-success">เปิดใช้งาน</span>' : '<span class= "btn btn-sm btn-danger">ปิดใช้งาน</span> ') : '' ?></td>

												<td class="align-middle">
												<a href="?page=<?php echo $_GET['page']; ?>&function=update&id=<?php echo $data['id']; ?>" class="btn btn-sm btn-warning">แก้ไข</a>
												<a href="?page=<?php echo $_GET['page']; ?>&function=resetpass&id=<?php echo $data['id']; ?>" class="btn btn-sm btn-secondary">รีเซ็ตรหัสผ่าน</a>

														<a  href="?page=<?php echo $_GET['page']; ?>&function=delete&id=<?php echo $data['id']; ?>"onclick="return confirm('คุณต้องการลบ <?=$data['User']?> หรือไม่')" class="btn btn-sm btn-danger"> ลบ</a>

												</td>
											</tr>
										<?php endforeach; ?>

								

						 </div><!--//app-card-body-->
						    
				 	  </div><!--//app-card-->
	                </div>
                </div><!--//row-->
				
				<script type="text/javascript">
				let table = new DataTable('#Tableall');
					</script> 
				<?php mysqli_close($connection); ?>
			
				
				