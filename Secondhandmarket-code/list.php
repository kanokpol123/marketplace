<!-- DB Connection -->
<?php 
        // เชื่อมต่อฐานข้อมูล
        include 'db_connect.php';

        $searchTerm = isset($_GET['search']) ? $_GET['search'] : '';
        $titleName = $searchTerm;

        $sql = "SELECT p.product_id, p.name, p.description, p.price, p.stock_quantity, p.created_at, p.updated_at, p.category_id, pi.image_url
                FROM products p
                LEFT JOIN product_images pi ON p.product_id = pi.product_id
                WHERE p.name LIKE ?";
        $stmt = $conn->prepare($sql);
        $searchTerm = "%$searchTerm%";
        $stmt->bind_param("s", $searchTerm);
        $stmt->execute();
        $result = $stmt->get_result();
?>
<!-- DB Connection -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="font/webFonts/KyivTypeSansLightThinMidline/font.woff">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Secondhandmarket-list</title>
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

        <div
          class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0"
        >
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

  <div class="container px-4 py-5" id="custom-cards">
    
  <h2 class="pb-2 display-3"><?php echo htmlspecialchars($titleName); ?></h2>

    <hr class="pb-4">

<!-- แสดงผลลัพธ์ -->
<div class="row mt-4">
        <?php
        // แสดงผลลัพธ์
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              $imageUrl = !empty($row["image_url"]) ? $row["image_url"] : 'https://via.placeholder.com/150';
              echo '<div class="col-md-4 mb-4">';
              echo '<a href="product_detail.php?id=' . $row["product_id"] . '" class="text-decoration-none">';
              echo '<div class="card">';
              echo '<img src=" ' . htmlspecialchars($imageUrl) . ' " style="object-fit: cover" width="100%" height="350" class="card-img-top" alt="Product Image">';
              echo '<div class="card-body text-center">';
              echo '<h5 class="card-title">' . htmlspecialchars($row["name"]) . '</h5>';
              // echo '<p class="card-text">' . htmlspecialchars($row["description"]) . '</p>';
              echo '<p class="card-text"><strong>Price:</strong> $' . number_format($row["price"], 2) . '</p>';
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


    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12ye3xC93He5jvZyrQ+iu6H4iJoRlt5zwdb+hPzPR6u2QuT4" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
