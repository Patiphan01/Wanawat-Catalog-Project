<!DOCTYPE html>
<html lang="en">

<?php include('include/header.php') ?>

<body>

  <!-- product body -->
  <div class="container bootdey">
    <div class="row">
      <!-- Left Sidebar -->
      <div class="col-md-3">
        <section class="panel">
          <header class="panel-heading">Category</header>
          <div class="panel-body">
            <ul class="nav prod-cat">
            <li><a href="#" class="active"><i class="fa fa-angle-right"></i> Dress</a>
                <ul class="nav">
                  <li class="active"><a href="#">- Shirt</a></li>

                  <li><a href="#">- Pant</a></li>
                  <li><a href="#">- Shoes</a></li>   <!-- connect to backend -->
            </ul>
          </div>
        </section>

        <!-- left side product -->
        <section class="panel">
        <header class="panel-heading">สินค้าแนะนำ</header>
          <div class="row">
            <div class="col-md-10 col-sm-6">
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
            <h3 class="title"><a href="productdetail.php">IPHONE 14</a></h3>
            <p>ระบบกล้องระดับโปร กล้องหลัก 48MP อัลตร้าไวด์ เทเลโฟโต้ ภาพถ่ายความละเอียดสูงเป็นพิเศษ</p>
        </div>
    </div>
</div>
        </section>
      </div>

      <!-- product_card -->
      <div class="col-md-3">
        <div class="product-grid">
        <div class="product-image">
            <a href="#" class="image">
                <img class="pic-1" src="upload/apple1.jpeg">
            </a>
            <!-- <span class="product-discount-label">-33%</span> -->
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
    </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript"></script>
</body>

<?php include('include/footer.php') ?>

</html>
