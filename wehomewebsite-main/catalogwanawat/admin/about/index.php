
		
				<h1 class="app-page-title"><br>จัดการข้อมูลเกี่ยวกับฉัน</br></h1>
				<hr class="mb-4">
                <div class="row g-4 settings-section">
	                
	                <div class="col-12 col-md-12">
		                <div class="app-card app-card-settings shadow-sm p-4">
						    
						    <div class="app-card-body">
							
<?php

        $id = 1; 
        $sql = "select * from tb_about where id ='$id'";
        $query = mysqli_query($connection,$sql);
        $result = mysqli_fetch_assoc($query);


?>
<br></br>



<div class="row g-4 settings-section">
    <div class="col-12 col-md-12">
        <div class="app-card app-card-settings shadow-sm p-4">
            <div class="app-card-body">
                <?php
                 if (isset($_POST) && !empty($_POST)){
                    // echo'<pre>';
                    // print_r($_POST);
                    // echo'</pre>';
                    // exit();
               
                if (isset($_POST['submit'])) {
                    // Establish a database connection (You should have this already)

                    // Retrieve form data
                    $name = $_POST['name'];
                    $description = $_POST['description'];
                    $address = $_POST['address'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone']; // Corrected the case of $_POST
                    
                
                    
                        // Perform the SQL insertion
                        $sql = "UPDATE tb_about SET name = '$name', description = '$description', address = '$address', email = '$email', phone = '$phone' WHERE id = '$id'";

                        if (mysqli_query($connection, $sql)) {
                            $alert = '<script type = "text/javascript">';
                            $alert .= 'alert("อัปเดตข้อมูลเกี่ยวกับฉันสำเร็จ");';
                            $alert .= 'window.location.href = "?page='.$_GET['page'].'";';
                            $alert .= '</script>';
                            echo $alert;
                            exit();
                        } else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($connection);
                        }

                        // Close the database connection
                        mysqli_close($connection);
                    }
                 }
                ?>
                <form action="" method="POST" enctype="multipart/form-data">
                   
                    </div>
                    <div class="mb-3">
                        <label class="form-label">ชื่อบริษัท</label>
                        <input type="text" class="form-control" placeholder="ชื่อบริษัท" name="name" value="<?=$result['name']?>" autoconplete="off" required >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">รายละเอียด</label>
                        
                        <textarea name="description" class="form-control" style= "height: 300px"> <?=$result['description']?></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">ที่อยู่</label>
                        
                        <textarea name="address" class="form-control" style= "height: 100px"> <?=$result['address']?></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" placeholder="ilikeU@gmail.com" name="email" value="<?=$result['email']?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">เบอร์โทรศัพท์</label>
                        <input type="text" class="form-control" name="phone" value="<?=$result['phone']?>" required>
                    </div>
                    
                
                    <button type="submit" class="btn app-btn-primary" name="submit">บันทึก</button>
                </form>
            </div><!--//app-card-body-->
        </div><!--//app-card-->
    </div>
</div><!--//row-->


	