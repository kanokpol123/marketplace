<?php
include 'db_connect.php';

$productID = isset($_GET['id']) ? $_GET['id'] : 0;

// คำสั่ง SQL สำหรับดึงข้อมูลสินค้าตาม ID
$sql = "SELECT p.product_id, p.name, p.description, p.price, p.stock_quantity, p.created_at, p.updated_at, p.category_id, pi.image_url
        FROM products p
        LEFT JOIN product_images pi ON p.product_id = pi.product_id
        WHERE p.product_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $productID);
$stmt->execute();

$result = $stmt->get_result();
$product = $result->fetch_assoc();

$stmt->close();
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="font/webFonts/KyivTypeSansLightThinMidline/font.woff">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <title>Secondhandmarket-product</title>
    <style>
      .KyivTypeSansLightThinMidline{
          font-family: 'KyivTypeSansLightThinMidline'
        }
    </style>
</head>
<body>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header "  style="background-color: #dfd3c3">
        <h4 class="modal-title">เพิ่มสินค้าลงในตะกร้าแล้ว</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="d-md-flex flex-md-equal w-100">

            <div class="col-md-4">
                <img style="object-fit: cover;" width="100%" height="150" src="https://plus.unsplash.com/premium_photo-1678739395192-bfdd13322d34?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
              </div>
      
              <div class="col-md-8 px-4">
                <div class="d-flex flex-column flex-sm-row justify-content-between">
                    <p>ชื่อสินค้า</p>
                    <p>x,xxx ฿</p>
                </div>
                <p class="lead">color : <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                  </svg></p>
                <p class="lead">จำนวน : 1</p>
              </div>

          </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-dark w-100" data-bs-dismiss="modal">ดูตะกร้าสินค้าของฉัน</button>
      </div>

    </div>
  </div>
</div>
<!-- modal end  -->

<!-- header start -->
<header class="p-3 mb-3 border-bottom" style="background-color: #dfd3c3">
  <div class="container-fluid">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="#" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
        </svg>
      </a>

      <div class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
      <a href="index.php" class = "text-reset text-decoration-none"><h1 class="display-6 px-5 KyivTypeSansLightThinMidline" >Secondhandmarket</h1></a>
      </div>

      <form class="d-flex col-12 col-lg-auto mb-3 mb-lg-0 me-lg-4 " method="get" action="list.php">
            <div class="form-group">
                <input type="text" name="search" class="form-control" placeholder="Search..." required>
            </div>
            <!-- <button type="submit" class="btn btn-dark"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
            </svg></button> -->
      </form>

      <div class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-4">
          <svg data-bs-toggle="modal" data-bs-target="#myModal" style="cursor: pointer;" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-basket3-fill" viewBox="0 0 16 16">
            <path
              d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172zM2.468 15.426.943 9h14.114l-1.525 6.426a.75.75 0 0 1-.729.574H3.197a.75.75 0 0 1-.73-.574z"
            />
          </svg>
      </div>

      <div class="text-end">
        <a href="#" class="d-block link-body-emphasis text-decoration-none" aria-expanded="false">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
          </svg>
        </a>
      </div>
    </div>
  </div>
</header>
<!-- end -->

  <!-- hero start -->
<div class="container py-4">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-lg-6">
          <h5 h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3"><?php echo htmlspecialchars($product["name"]); ?></h5>
          <p><?php echo htmlspecialchars($product["description"]); ?></p>
            <!-- <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">ชื่อสินค้า</h1> -->
            <!-- <p>In stock | รหัสสินค้า : xxxxx</p> -->

            <!-- star start -->
            <div class="lead">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z"/>
              </svg>
              <span>(X)</span>
            </div>
            <!-- star end -->

            <!-- color start -->
            <div class="row  align-items-center">
              <h1 class="display-6">Color :</h1>
              <div class="col-lg-2">
                <svg class="bd-placeholder-img rounded-circle" width="80" height="80" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-black-color)"></rect></svg>
              </div>
              <div class="col-lg-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 80 80" fill="none">
                  <circle cx="40" cy="40" r="39.5" fill="white" stroke="black"/>
                </svg>              </div>
              <div class="col-lg-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 80 80" fill="none">
                  <circle cx="40" cy="40" r="40" fill="#D9D9D9"/>
                </svg>              </div>
              <div class="col-lg-2">
              </div>
              <div class="col-lg-2">
              </div>
            </div>
            <!-- color end -->


            <!-- shipping start -->
            <div class="row mb-2">
              <div class="col-md-4">
                <div class="row g-0 overflow-hidden flex-md-row h-md-250 position-relative">
                  <div class="col p-4 d-flex flex-column position-static">
                    <div class="lead">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
                        <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5zm1.294 7.456A2 2 0 0 1 4.732 11h5.536a2 2 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456M12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2"/>
                      </svg>
                      <span class="card-text mb-auto">Shipping</span>
                    </div>
                  </div>
                  
                </div>
              </div>
              <div class="col-md-8">
                <div class="row g-0 border-start overflow-hidden flex-md-row h-md-250 position-relative">
                  <div class="col p-4 d-flex flex-column position-static">

                    <dl class="row">
                      <dt class="col-sm-3">Shipping To</dt>
                      <dd class="col-sm-9">Mueang Chon Buri, Chonburi 
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                        </svg>
                      </dd>
                      <dt class="col-sm-3">Shipping Cost</dt>
                      <dd class="col-sm-9">xx ฿
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                        </svg>
                      </dd>
                    </dl>

                  </div>
                </div>
              </div>

            </div>
            <!-- shipping end -->

            <!-- add start -->
            <div class="d-grid gap-2 d-md-flex justify-content-md-start pb-2">
              <div class="w-100 btn btn-lg px-4 me-md-2">
                <!-- <h1 class="display-6">x,xxx ฿</h1> -->
                <h1 class="display-6"> $<?php echo number_format($product["price"], 2); ?></h1>
              </div>
              <div class="w-100 btn btn-lg px-4">
                <h1 class="display-6">
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                  </svg> 1 <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-dash-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                    <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8"/>
                  </svg>
                </h1>
              </div>
            </div>
             <!-- add end -->

            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
              <a href="order.php" class="w-100  text-reset text-decoration-none"><button type="button" class="w-100 btn btn-lg px-4 me-md-2" style="background-color: #D0B8A8;">Buy Now</button></a>
              <button type="button" class="w-100 btn btn-lg px-4" style="background-color: #DFD3C3;">Add To Cart</button>
            </div>

        </div>

        <div class="col-10 col-sm-8 col-lg-6">
          <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
              
              <div class="col-md-12">
                <div class="card shadow-sm ">
                    <img width="100%" height="400" src="<?= htmlspecialchars($product['image_url']) ?>" style="object-fit: cover" alt="">
                </div>
              </div>    
              <div class="col">
                <div class="card shadow-sm">
                  <img width="100%" height="150" src="<?= htmlspecialchars($product['image_url']) ?>" style="object-fit: cover" alt="">
                    <!-- <img width="100%" height="150" src="https://plus.unsplash.com/premium_photo-1678739395192-bfdd13322d34?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt=""> -->
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm">
                  <img width="100%" height="150" src="<?= htmlspecialchars($product['image_url']) ?>" style="object-fit: cover" alt="">
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm">
                  <img width="100%" height="150" src="<?= htmlspecialchars($product['image_url']) ?>" style="object-fit: cover" alt="">                </div>
              </div>
              
            </div>
            
          </div>
        </div>
      </div>

      <!-- bottom start -->
      <div class="row align-items-md-stretch border-top">
        <div class="col-md-3 pt-3">

          <dl class="row">
            <dt class="col-sm-3"></dt>
            <dd class="col-sm-9 text-body-secondary">Description</dd>
            <dt class="col-sm-3 text-end">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"/>
              </svg>
            </dt>
            <dd class="col-sm-9">Additional Information</dd>
            <dt class="col-sm-3"></dt>
            <dd class="col-sm-9 text-body-secondary">Review (X)</dd>
          </dl>

        </div>

        <div class="col-md-9 border-start px-4">
          <div class="d-flex flex-column flex-sm-row justify-content-between border-bottom pt-3">
            <p>Weight</p>
            <p>xx</p>
          </div>
          <div class="d-flex flex-column flex-sm-row justify-content-between border-bottom pt-3">
            <p>Color</p>
            <p>xx</p>
          </div>
          <div class="d-flex flex-column flex-sm-row justify-content-between border-bottom pt-3">
            <p>Size</p>
            <p>xx</p>
          </div>
          <div class="d-flex flex-column flex-sm-row justify-content-between border-bottom pt-3">
            <p>Material</p>
            <p>xx</p>
          </div>
        </div>


      </div>
      <!-- bottom end -->

</div>
<!-- end -->


    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12ye3xC93He5jvZyrQ+iu6H4iJoRlt5zwdb+hPzPR6u2QuT4" crossorigin="anonymous"></script>
</body>
</html>
