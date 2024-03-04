
		
<?php
	$sql = "select * from tb_type_product";
	$query = mysqli_query($connection,$sql);

	
?>
<h1 class="app-page-title"><br>จัดการข้อมูลประเภทสินค้า</br></h1>

				<hr class="mb-4">
                <div class="row g-4 settings-section">
	                
	                <div class="col-12 col-md-12">
		                <div class="app-card app-card-settings shadow-sm p-4">
						    	
						 <div class="app-card-body">
							<a href="?page=<?=$_GET['page']?>&function=add" class="btn btn-success text-white "> เพิ่มประเภทสินค้า</a><br></br>
							<table class="table" id ="Tableall">

							<thead >
								<tr>
									<th scope="col" style="text-align: center;">ลำดับ</th>
									<th scope="col" style="text-align: center;">ประเภทสินค้า</th>
									<th scope="col" style="text-align: center;">เมนู</th>
								</tr>
							</thead>
									<tbody class="text-center">
										<?php 
										$i = 1;
										foreach ($query as $data): ?>
											<tr>
												<td class="align-middle"><?=$i++?></td>
												<td class="align-middle"><?=($data['title']) ?></td>
												<td class="align-middle">
												<a href="?page=<?=$_GET['page'] ?>&function=update&id=<?=$data['id'] ?>" class="btn btn-sm btn-warning">แก้ไข</a>
												<a href="?page=<?=$_GET['page'] ?>&function=delete&id=<?=$data['id'] ?>" onclick=" return confirm( 'คุณต้องการลบ <?=$data['title']?> หรือไม่'  )" class= "btn btn-sm btn-danger"> ลบ</a>

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
			
				
				
			