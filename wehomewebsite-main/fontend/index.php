<!DOCTYPE html>
<html lang="en">

<?php include('include/header.php') ?>

<body>

  <!-- Carousel -->
  <div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="upload/p1.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="upload/p2.jpeg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="upload/p4.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- product -->

  <!-- Start Product Section -->
  <div class="product-section">
    <div class="container">
      <div class="row">

        <!-- Start Column 1 --> 
        <!-- ควรใส่รูปเป็น png ที่ลบพื้นหลังออก และใช้ขนาดเท่ากัน-->
        <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
          <h2 class="mb-4 section-title">Product Preview</h2>
          <p class="mb-4">Product Detail Or Text</p>
          <p><a href="product.php" class="btn">Explore</a></p>
        </div>
        <!-- End Column 1 -->

        <!-- Start Column 2 -->
        <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
          <a class="product-item" href="productdetail.php">
            <img src="upload/apple1.jpeg" class="img-fluid product-thumbnail">
            <h3 class="product-title">IPHONE 13</h3>
            <!-- <strong class="product-price">$50.00</strong> -->

            <!-- <span class="icon-cross">
                <img src="" class="img-fluid">
              </span> -->
          </a>
        </div>
        <!-- End Column 2 -->
        <!-- Start Column 3 -->
        <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
          <a class="product-item" href="productdetail.php">
            <img src="upload/apple4.jpeg" class="img-fluid product-thumbnail">
            <h3 class="product-title">IPHONE 14</h3>
            <!-- <strong class="product-price">$78.00</strong> -->

            <!-- <span class="icon-cross">
                <img src="" class="img-fluid">
              </span> -->
          </a>
        </div>
        <!-- End Column 3 -->

        <!-- Start Column 4 -->
        <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
          <a class="product-item" href="productdetail.php">
            <img src="upload/apple5.jpeg" class="img-fluid product-thumbnail">
            <h3 class="product-title">Macbook Air M1</h3>
            <!-- <strong class="product-price">$43.00</strong> -->

            <!-- <span class="icon-cross">
                <img src="" class="img-fluid">
              </span> -->
          </a>
        </div>
        <!-- End Column 4 -->

      </div>
    </div>
  </div>
  <!-- End Product Section -->

 <!-- product card -->
 <div class="row">
 <div class="col-md-4 col-sm-"style="padding-left: 8cm;"> 
 <div class="product-grid">
        <div class="product-image">
            <a href="#" class="image">
                <img class="pic-1" src="upload/apple2.jpeg">
            </a>
            <span class="product-discount-label">แนะนำ</span>
            <ul class="product-links">
                <!-- <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li> -->
                <li><a href="productdetail.php" data-tip="More Detail"><i class="fa fa-search"></i></a></li>
            </ul>
        </div>
        <div class="product-content">
            <h3 class="title"><a href="productdetail.php">IPHONE 13</a></h3>
            <p>ระบบกล้องระดับโปร กล้องหลัก 48MP อัลตร้าไวด์ เทเลโฟโต้ ภาพถ่ายความละเอียดสูงเป็นพิเศษ</p>
        </div>
        <div class="product-image">
            <a href="#" class="image">
                <img class="pic-1" src="upload/apple4.jpeg">
            </a>
            <span class="product-discount-label">แนะนำ</span>
            <ul class="product-links">
                <!-- <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li> -->
                <li><a href="productdetail.php" data-tip="More Detail"><i class="fa fa-search"></i></a></li>
            </ul>
        </div>
        <div class="product-content">
            <h3 class="title"><a href="productdetail.php">IPHONE 14</a></h3>
            <p>ระบบกล้องระดับโปร กล้องหลัก 48MP อัลตร้าไวด์ เทเลโฟโต้ ภาพถ่ายความละเอียดสูงเป็นพิเศษ</p>
        </div>
    </div>
    </div>
    </div>
  <!-- Start Why Choose Us Section -->

  <div class="why-choose-section">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-12"> <!-- changed the column size to 12 for full width -->
          <h2 class="section-title">วีโฮมเซอร์วิส</h2>
          <p></p>

          <div class="row">
            <div class="col-4 col-md-4"> <!-- changed column size to 4 to fit 3 columns in a row -->
              <div class="feature">
                <div class="icon">
                  <img src="css/truck.svg" alt="Image" class="imf-fluid">
                </div>
                <h3>ติดตามการสั่งซื้อสินค้าทั่วประเทศ</h3>
                <p>บริการจัดส่งสินค้าถึงที่ ที่ลูกค้าต้องการ</p>
              </div>
            </div>

            <div class="col-4 col-md-4"> <!-- changed column size to 4 to fit 3 columns in a row -->
              <div class="feature">
                <div class="icon">
                  <img src="css/bag.svg" alt="Image" class="imf-fluid">
                </div>
                <h3>รับประกันการคืนสินค้า</h3>
                <p>สภาพสมบูรณ์ 100% ภายใน 30 วัน</p>
              </div>
            </div>

            <div class="col-4 col-md-4"> <!-- changed column size to 4 to fit 3 columns in a row -->
              <div class="feature">
                <div class="icon">
                  <img src="css/support.svg" alt="Image" class="imf-fluid">
                </div>
                <h3>Contact Center</h3>
                <p>000-000000 (จ.ส. 08.00-17.00 น.)</p>
              </div>
            </div>

            <div class="col-sm-6 col-md-12">
              <div class="col-md-12 feature-box">
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;วีโฮม บิวเดอร์ เป็นหนึ่งในผู้นำด้านธุรกิจค้าปลีก ค้าส่ง
                  เครื่องมือช่างวัสดุก่อสร้าง
                  อุปกรณ์ตกแต่งบ้านและสวนแบบครบวงจรที่ใหญ่ที่สุดในภาคใต้พร้อมด้วยการบริการที่เอาใจใส่และเป็นกันเองภายใต้แนวคิดการดำเนินธุรกิจ
                  “เพื่อนบ้าน..ที่เข้าใจคุณ” เราเข้าใจถึงปัญหาของบ้านทั้งภายใน และภายนอก พร้อมรวบรวมข้อมูล
                  และวิธีการในการช่วยแก้ไขปัญหาเกี่ยวกับบ้าน และงานก่อสร้างมาอย่างยาวนาน
                  <br>
                  นอกจากนี้วีโฮมเรามีทั้งสินค้า และบริการอื่นๆ หลังจากขั้นตอนการก่อสร้าง
                  คือสินค้าที่เกี่ยวกับการตกแต่งบ้าน เช่น
                  เฟอร์นิเจอร์ ของตกแต่งบ้าน สุขภัณฑ์และอุปกรณ์ไฟฟ้า
                  สำหรับการเพิ่มองค์ประกอบสำคัญและความน่าอยู่ให้กับบ้าน
                  สินค้าและผลิตภัณฑ์ที่เรานำมาจำหน่ายถูกคัดเลือกมาด้วยแบรนด์ชั้นนำ
                  ที่มีการรับประกันคุณภาพและราคาที่เหมาะสมเพื่อให้ลูกค้าได้รับบริการที่คุ้มค่า
                  และความพร้อมในการดูแลหลังการขายโดย “ศูนย์ซ่อมเครื่องมือช่าง”
                  กับทีมช่างคุณภาพที่ผ่านการอบรมตามมาตฐานตามแบรนด์สินค้าโดยตรง
                  <br>
                  &nbsp;&nbsp;&nbsp;&nbsp;เราเชื่อว่าลูกค้าทุกท่านจะได้รับบริการที่ดีที่สุดจากเรา
                  ช้อปผ่านช่องทางออนไลน์ และช่องทางการชำระเงินได้เองที่ www.wehome.co.th เรายินดีตอบปัญหา
                  และแนะนำให้กับลูกค้า
                  เพราะเรามีเจ้าหน้าที่คอยดูแล สามารถติดต่อฝ่ายขายโทร 074-338000
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Why Choose Us Section -->

  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/tiny-slider.js"></script>
  <script src="js/custom.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

<?php include('include/footer.php') ?>

</html>