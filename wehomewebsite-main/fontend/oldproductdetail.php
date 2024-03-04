<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<?php include('include/header.php') ?>

<body>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

  <!-- productdetail -->
  <div class="container mt-5 mb-5">
        <div class="card">
            <div class="row g-0">
                <div class="col-md-6 border-end">
                    <div class="d-flex flex-column justify-content-center">
                        <div class="main_image"> <img src="https://i.imgur.com/TAzli1U.jpg" id="main_product_image"
                                width="350"> </div>
                        <div class="thumbnail_images">
                            <ul id="thumbnail">
                                <li><img onclick="changeImage(this)" src="https://i.imgur.com/TAzli1U.jpg" width="70">
                                </li>
                                <li><img onclick="changeImage(this)" src="https://i.imgur.com/w6kEctd.jpg" width="70">
                                </li>
                                <li><img onclick="changeImage(this)" src="https://i.imgur.com/L7hFD8X.jpg" width="70">
                                </li>
                                <li><img onclick="changeImage(this)" src="https://i.imgur.com/6ZufmNS.jpg" width="70">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
        <div class="col-md-6 col-md-offset-1 col-sm-12 col-xs-12">
          <h2 class="name">IPHONE 14
            <small>Product by <a href="javascript:void(0);">WEHOME</a></small>
          </h2>
          <hr />
          <div class="description description-tabs">
            <ul id="myTab" class="nav nav-pills">
              <li class="active"><a href="#more-information" data-toggle="tab" class="no-margin">รายละเอียดสินค้า</a>
              </li>
              <li class><a href="#specifications" data-toggle="tab">ใบรับรองสินค้า</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
              <div class="tab-pane fade active in" id="more-information">
                <br />
                <strong>Description Title</strong>
                <p>
                  ระบบกล้องระดับโปร กล้องหลัก 48MP อัลตร้าไวด์
                  เทเลโฟโต้
                  ภาพถ่ายความละเอียดสูงเป็นพิเศษ (24MP และ 48MP)
                  ภาพถ่ายบุคคลเจเนอเรชั่นถัดไป
                </p>
              </div>
              <div class="tab-pane fade" id="specifications">
                <br />
                <dl class>
                  <dt>COPYRIGHT@PONKITTI</dt>
                  <dd>RMUTSV KITTIPOM</dd>
                  <br />
                  <dt>COPYRIGHT@PATIPHAN</dt>
                  <dd>RMUTSV PATIPHAN</dd>
                  <br />
                  <dt>COPYRIGHT@SUDARAT</dt>
                  <dd>RMUTSV SUDARAT</dd>
                </dl>
              </div>
              <div class="tab-pane fade" id="reviews">
                <br />

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="Js/productdetail.js"></script>

</body>
<?php include('include/footer.php') ?>

</html>