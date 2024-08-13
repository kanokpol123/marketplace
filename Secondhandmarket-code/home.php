<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="font/webFonts/KyivTypeSansLightThinMidline/font.woff">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <title>Secondhandmarket</title>
    <style>
      .carousel-inner img {
        width: 100%;
        max-height: 500px; /* Set your desired max height here */
        object-fit: cover; /* Ensure the image covers the area while maintaining aspect ratio */
      }
      .shop-now-btn {
        position: absolute;
        bottom: 80px;
        left: 180px;
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        text-decoration: none;
      }
      .carousel-item {
        position: relative;
      }
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
        <div
          class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start"
        >
          <a
            href="#"
            class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="32"
              height="32"
              fill="currentColor"
              class="bi bi-list"
              viewBox="0 0 16 16"
            >
              <path
                fill-rule="evenodd"
                d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"
              />
            </svg>
          </a>

          <div class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <a href="home.php" class = "text-reset text-decoration-none"><h1 class="display-6 px-5 KyivTypeSansLightThinMidline" >Secondhandmarket</h1></a>
          </div>

          <!-- <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-4" role="search">
            <input
              type="search"
              class="form-control"
              placeholder="Search..."
              aria-label="Search"
              id="search-input"
            />
          </form> -->

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
            <a
              href="#"
              class="d-block link-body-emphasis text-decoration-none"
              aria-expanded="false"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="30"
                height="30"
                fill="currentColor"
                class="bi bi-person-circle"
                viewBox="0 0 16 16"
              >
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                <path
                  fill-rule="evenodd"
                  d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"
                />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </header>
    <!-- end -->

    <!-- hero start -->
    <div class="container my-5 mb-3">
        <!-- Carousel -->
        <div id="demo" class="carousel slide align-items-center rounded-3  shadow-lg" data-bs-ride="carousel">
          <!-- Indicators/dots -->
          <div class="carousel-indicators">
            <button
              type="button"
              data-bs-target="#demo"
              data-bs-slide-to="0"
              class="active"
            ></button>
            <button
              type="button"
              data-bs-target="#demo"
              data-bs-slide-to="1"
            ></button>
            <button
              type="button"
              data-bs-target="#demo"
              data-bs-slide-to="2"
            ></button>
          </div>

          <!-- The slideshow/carousel -->
          <div class="carousel-inner">

            <div class="carousel-item active">
              <img
                src="https://images.unsplash.com/photo-1532453288672-3a27e9be9efd?q=80&w=1964&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="Los Angeles"
                class="d-block"
                style="width: 100%"
              />
              <a href="#" class="shop-now-btn">Shop Now</a>
            </div>
            <div class="carousel-item">
              <img
                src="https://images.unsplash.com/photo-1532453288672-3a27e9be9efd?q=80&w=1964&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="Chicago"
                class="d-block"
                style="width: 100%"
              />
              <a href="#" class="shop-now-btn">Shop Now</a>
            </div>
            <div class="carousel-item">
              <img
                src="https://images.unsplash.com/photo-1532453288672-3a27e9be9efd?q=80&w=1964&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="New York"
                class="d-block"
                style="width: 100%"
              />
              <a href="#" class="shop-now-btn">Shop Now</a>
            </div>
          </div>

          <!-- Left and right controls/icons -->
          <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
          </button>
        </div>

      <!-- end -->

      <!-- item start -->
      <div class="row mt-3 mx-5 p-4 px-5 align-items-center" style="text-align: center" >

        <div class="col-lg-2">
          <img
            class="bd-placeholder-img rounded-circle"
            src="https://images.unsplash.com/photo-1516762689617-e1cffcef479d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8Y2xvdGhlc3xlbnwwfHwwfHx8MA%3D%3D"
            width="90"
            height="90"
            alt="Clothes"
          />
          <h2 class="fw-normal fs-5 py-2">Clothes</h2>
        </div>


        <div class="col-lg-2">
          <img
            class="bd-placeholder-img rounded-circle"
            src="https://plus.unsplash.com/premium_photo-1682435561654-20d84cef00eb?q=80&w=1918&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            width="90"
            height="90"
            alt="Clothes"
          />
          <h2 class="fw-normal fs-5 py-2">Shoes</h2>
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-2">
          <img
            class="bd-placeholder-img rounded-circle"
            src="https://plus.unsplash.com/premium_photo-1670985781678-c7a965c9dc6f?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fEJhZ3N8ZW58MHx8MHx8fDA%3D"
            width="90"
            height="90"
            alt="Clothes"
          />
          <h2 class="fw-normal fs-5 py-2">Bags</h2>
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-2">
          <img
            class="bd-placeholder-img rounded-circle"
            src="https://images.unsplash.com/photo-1687253946687-a3713aa25b2f?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8YWNjZXNzb3JpZXMlMjBmYXNoaW9ufGVufDB8fDB8fHww"
            width="90"
            height="90"
            alt="Clothes"
          />
          <h2 class="fw-normal fs-5 py-2">Accessories</h2>
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-2">
          <img
            class="bd-placeholder-img rounded-circle"
            src="https://plus.unsplash.com/premium_photo-1673548917423-073963e7afc9?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8RnVybml0dXJlfGVufDB8fDB8fHww"
            width="90"
            height="90"
            alt="Clothes"
          />
          <h2 class="fw-normal fs-5 py-2">Furniture</h2>
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-2">
          <img
            class="bd-placeholder-img rounded-circle"
            src="https://plus.unsplash.com/premium_photo-1684407616442-8d5a1b7c978e?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8QmVhdXR5fGVufDB8fDB8fHww"
            width="90"
            height="90"
            alt="Clothes"
          />
          <h2 class="fw-normal fs-5 py-2">Beauty</h2>
        </div>
        <!-- /.col-lg-4 -->
      </div>
      <!-- end -->
    </div>
    <!-- end -->

  <div class="container px-4 " id="custom-cards">
      <h2 class="pb-2 text-center">Trending Now</h2>

    <!-- แสดงผลลัพธ์ -->
    <div class="row mt-4">
        <?php
        // เชื่อมต่อฐานข้อมูล
        include 'db_connect.php';

        $searchTerm = isset($_GET['search']) ? $_GET['search'] : '';

        // คำสั่ง SQL สำหรับค้นหาโดยใช้ชื่อ และรวมข้อมูลจากตาราง product_images
        $sql = "SELECT p.product_id, p.name, p.description, p.price, p.stock_quantity, p.created_at, p.updated_at, p.category_id, pi.image_url
                FROM products p
                LEFT JOIN product_images pi ON p.product_id = pi.product_id
                WHERE p.name LIKE ?";
        $stmt = $conn->prepare($sql);
        $searchTerm = "%$searchTerm%";
        $stmt->bind_param("s", $searchTerm);
        $stmt->execute();
        $result = $stmt->get_result();

        // แสดงผลลัพธ์
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              $imageUrl = !empty($row["image_url"]) ? $row["image_url"] : 'https://via.placeholder.com/150';
              echo '<div class="col-md-4 mb-4">';
              echo '<a href="product.php?id=' . $row["product_id"] . '" class="text-decoration-none">';
              echo '<div class="card">';
              echo '<img src="' . htmlspecialchars($imageUrl) . '" style="object-fit: cover" width="100%" height="350" class="card-img-top" alt="Product Image">';
              echo '<div class="card-body text-center">';
              echo '<h5 class="card-title">' . htmlspecialchars($row["name"]) . '</h5>';
              // echo '<p class="card-text">' . htmlspecialchars($row["description"]) . '</p>';
              echo '<p class="card-text"><strong>Price:</strong> $' . number_format($row["price"], 2) . '</p>';
              // echo '<p class="card-text"><strong>Stock Quantity:</strong> ' . htmlspecialchars($row["stock_quantity"]) . '</p>';
              // echo '<p class="card-text"><strong>Category ID:</strong> ' . htmlspecialchars($row["category_id"]) . '</p>';
              // echo '<p class="card-text"><strong>Created At:</strong> ' . htmlspecialchars($row["created_at"]) . '</p>';
              // echo '<p class="card-text"><strong>Updated At:</strong> ' . htmlspecialchars($row["updated_at"]) . '</p>';
              echo '</div>';
              echo '</div>';
              echo '</a>';
              echo '</div>';
            }
        } else {
            echo '<div class="col-12"><p>No products found.</p></div>';
        }

        // ปิดการเชื่อมต่อ
        $stmt->close();
        $conn->close();
        ?>
    </div>
    <!-- แสดงผลลัพธ์ end -->

  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12ye3xC93He5jvZyrQ+iu6H4iJoRlt5zwdb+hPzPR6u2QuT4" crossorigin="anonymous">
        async function searchProducts() {
            const keyword = document.getElementById('search-input').value;
            const response = await fetch(`search.php?keyword=${encodeURIComponent(keyword)}`);
            const results = await response.text();
            
            document.getElementById('results').innerHTML = results;
        }
    
  </script>
  </body>
</html>
