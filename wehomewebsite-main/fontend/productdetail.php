<!DOCTYPE html>
<html lang="en">

<?php include('include/header.php') ?>

<body>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">


    <!-- details -->
    <div class="container mt-5 mb-5">
        <div class="card">
            <div class="row g-0">
                <div class="col-md-6 border-end">
                    <div class="d-flex flex-column justify-content-center">
                        <div class="main_image"> <img src="upload/apple3.jpeg" id="main_product_image" width="350">
                        </div>
                        <div class="thumbnail_images">
                            <ul id="thumbnail">
                                <li><img onclick="changeImage(this)" src="upload/apple1.jpeg"" width=" 70">
                                </li>
                                <li><img onclick="changeImage(this)" src="upload/apple2.jpeg"" width=" 70">
                                </li>
                                <li><img onclick="changeImage(this)" src="upload/apple4.jpeg"" width=" 70">
                                </li>
                                <li><img onclick="changeImage(this)" src="upload/apple3.jpeg"" width=" 70">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-3 right-side">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3>IPHONE 13</h3>
                        </div>
                        <div class="mt-2 pr-3 content">
                            <p style="font-size:1.2vw">ระบบกล้องระดับโปร กล้องหลัก 48MP อัลตร้าไวด์
                                เทเลโฟโต้
                                <br>
                                ภาพถ่ายความละเอียดสูงเป็นพิเศษ (24MP และ 48MP)
                                <br>
                                ภาพถ่ายบุคคลเจเนอเรชั่นถัดไป
                            </p>
                        </div>
                        <p style="font-size:1.1vw">Category: รอเชื่อม Backend</p>
                        <div class="buttons d-flex flex-row mt-5 gap-3"> <button
                                class="btn btn-outline-dark">เพิ่มเติม</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/productdetail.js"></script>

</body>

<?php include('include/footer.php') ?>

</html>