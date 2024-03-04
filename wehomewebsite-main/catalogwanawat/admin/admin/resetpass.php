<?php
if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = $_GET['id']; 
        $sql = "select * from tb_admin where id ='$id'";
        $query = mysqli_query($connection,$sql);
        $result = mysqli_fetch_assoc($query);
}


?>



<h1 class="app-page-title"><br>รีเซ็ตรหัสผ่าน : <?=$result['User']?></br></h1>
<hr class="mb-4">
<div class="row g-4 settings-section">
    <div class="col-12 col-md-12">
        <div class="app-card app-card-settings shadow-sm p-4">
            <div class="app-card-body">
                <?php
                // Check if the form was submitted
                if (isset($_POST['submit'])) {
                    // Retrieve form data
                    $pass = ($_POST['pass']);
                    $confirmpass = ($_POST['confirmpass']);
                    
                    // Check if passwords match
                    if ($pass != $confirmpass) {
                        $alert = '<script type="text/javascript">';
                        $alert .= 'alert("ยืนยันรหัสผ่านไม่ถูกต้อง");';
                        $alert .= 'window.location.href = "?page=admin&function=resetpass&id='.$id.'";';
                        $alert .= '</script>';
                        echo $alert;
                        exit();
                    } else {
                        // Update password in the database
                        $sql = "UPDATE tb_admin SET pass = '$pass' WHERE id = '$id'";
                        if (mysqli_query($connection, $sql)) {
                            $alert = '<script type="text/javascript">';
                            $alert .= 'alert("ยืนยันรหัสผ่านถูกต้อง");';
                            $alert .= 'window.location.href = "?page=admin&function=resetpass&id='.$id.' ";';
                            $alert .= '</script>';
                            echo $alert;
                            exit();
                        } else {
                            echo "error: " . $sql . "<br>" . mysqli_error($connection);
                        }
                        mysqli_close($connection);
                    }  
                }
                
                
                ?>
                <form action="" method="POST" enctype="multipart/form-data">
                    
                    <div class="mb-3">
                        <label class="form-label">รหัสผ่าน</label>
                        <input type="password" class="form-control" placeholder="กรอกรหัสผ่านใหม่" name="pass" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">รหัสผ่านใหม่</label>
                        <input type="password" class="form-control" placeholder="ยืนยันรหัสผ่านใหม่" name="confirmpass" required>
                    </div>
                    
                    <button type="submit" class="btn app-btn-primary" name="submit">บันทึก</button>
                </form>
            </div><!--//app-card-body-->
        </div><!--//app-card-->
    </div>
</div><!--//row-->

<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#image").change(function () {
        readURL(this);
    });
</script>
	