<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="font/MyWebfontsKit.css">
    <link rel="stylesheet" type="text/css" href="font/webFonts/KyivTypeSansLightThinMidline/font.woff">
    <title class="KyivTypeSansLightThinMidline">Secondhandmarket-ordar</title>
    <style>
      .KyivTypeSansLightThinMidline{
          font-family: 'KyivTypeSansLightThinMidline'
        }

        .form-container {
      max-width: 480px;
      margin: 0 auto; /* Center the form horizontally */
      padding: 0 15px; /* Optional: Add padding for spacing */
    }
    </style>
  </head>
  <body>
    <!-- header start -->
    <header class="p-3 mb-3 border-bottom" style="background-color: #dfd3c3">
      <div class="container-fluid">
        <div class="d-flex flex-wrap align-items-center">
          <div class="nav col-12 d-flex justify-content-center mb-2 mb-md-0">
            <h1 class="display-6 KyivTypeSansLightThinMidline" >Secondhandmarket</h1>
          </div>
        </div>
      </div>
    </header>
    <!-- end -->

    <!-- hero start -->
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
      <div class="container mt-5">
        <div class="progress-container">
          <div class="progress">
            <div
              class="progress-bar"
              role="progressbar"
              style="width: 50%; background-color: #000000"
              aria-valuenow="50"
              aria-valuemin="0"
              aria-valuemax="100"
            ></div>
          </div>
        </div>
        <div class="d-flex justify-content-between mt-2">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="40"
            height="40"
            fill="currentColor"
            class="bi bi-check-circle-fill"
            viewBox="0 0 16 16"
          >
            <path
              d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"
            />
          </svg>

          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-credit-card-fill" viewBox="0 0 16 16">
            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v1H0zm0 3v5a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7zm3 2h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1"/>
          </svg>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="40"
            height="40"
            fill="currentColor"
            class="bi bi-check-circle"
            viewBox="0 0 16 16"
          >
            <path
              d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"
            />
            <path
              d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05"
            />
          </svg>
        </div>
      </div>

      <div class="row align-items-center g-lg-5 py-5">
        <h1 class=" text-center display-6">เลือกช่องทางชำระเงิน</h1>
        <form class="needs-validation form-container" novalidate="">

          <hr class="my-3 ">
    
              <div class="ps-3">
                <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required="">
                <label class="form-check-label" for="Pay-immediately">ชำระเงินทันที</label>
              </div>
              <div style="margin-left: 4%;">
                <svg xmlns="http://www.w3.org/2000/svg"  width="25" height="25"  viewBox="0 0 576 512">
                  <path fill="#000000" d="M470.1 231.3s7.6 37.2 9.3 45H446c3.3-8.9 16-43.5 16-43.5-.2 .3 3.3-9.1 5.3-14.9l2.8 13.4zM576 80v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h480c26.5 0 48 21.5 48 48zM152.5 331.2L215.7 176h-42.5l-39.3 106-4.3-21.5-14-71.4c-2.3-9.9-9.4-12.7-18.2-13.1H32.7l-.7 3.1c15.8 4 29.9 9.8 42.2 17.1l35.8 135h42.5zm94.4 .2L272.1 176h-40.2l-25.1 155.4h40.1zm139.9-50.8c.2-17.7-10.6-31.2-33.7-42.3-14.1-7.1-22.7-11.9-22.7-19.2 .2-6.6 7.3-13.4 23.1-13.4 13.1-.3 22.7 2.8 29.9 5.9l3.6 1.7 5.5-33.6c-7.9-3.1-20.5-6.6-36-6.6-39.7 0-67.6 21.2-67.8 51.4-.3 22.3 20 34.7 35.2 42.2 15.5 7.6 20.8 12.6 20.8 19.3-.2 10.4-12.6 15.2-24.1 15.2-16 0-24.6-2.5-37.7-8.3l-5.3-2.5-5.6 34.9c9.4 4.3 26.8 8.1 44.8 8.3 42.2 .1 69.7-20.8 70-53zM528 331.4L495.6 176h-31.1c-9.6 0-16.9 2.8-21 12.9l-59.7 142.5H426s6.9-19.2 8.4-23.3H486c1.2 5.5 4.8 23.3 4.8 23.3H528z"/></svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" id="mastercard">
                    <path fill="#FF5F00" d="M15.245 17.831h-6.49V6.168h6.49v11.663z"></path>
                    <path fill="#EB001B" d="M9.167 12A7.404 7.404 0 0 1 12 6.169 7.417 7.417 0 0 0 0 12a7.417 7.417 0 0 0 11.999 5.831A7.406 7.406 0 0 1 9.167 12z"></path>
                    <path fill="#F79E1B" d="M24 12a7.417 7.417 0 0 1-12 5.831c1.725-1.358 2.833-3.465 2.833-5.831S13.725 7.527 12 6.169A7.417 7.417 0 0 1 24 12z"></path></svg>
              </div>
          <hr class="my-4">
              <div class="ps-3">
                <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required="">
                <label class="form-check-label" for="Pay-immediately">ชำระเงินปลายทาง</label>
              </div>
              <div style="margin-left: 4%;">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cash-stack" viewBox="0 0 16 16">
                  <path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                  <path d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2z"/>
                </svg>
              </div>
          <hr class="my-4">
              <div class="ps-3">
                <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required="">
                <label class="form-check-label" for="Pay-immediately">QR PromptPay</label>
              </div>
              <div style="margin-left: 4%;">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-qr-code" viewBox="0 0 16 16">
                  <path d="M2 2h2v2H2z"/>
                  <path d="M6 0v6H0V0zM5 1H1v4h4zM4 12H2v2h2z"/>
                  <path d="M6 10v6H0v-6zm-5 1v4h4v-4zm11-9h2v2h-2z"/>
                  <path d="M10 0v6h6V0zm5 1v4h-4V1zM8 1V0h1v2H8v2H7V1zm0 5V4h1v2zM6 8V7h1V6h1v2h1V7h5v1h-4v1H7V8zm0 0v1H2V8H1v1H0V7h3v1zm10 1h-1V7h1zm-1 0h-1v2h2v-1h-1zm-4 0h2v1h-1v1h-1zm2 3v-1h-1v1h-1v1H9v1h3v-2zm0 0h3v1h-2v1h-1zm-4-1v1h1v-2H7v1z"/>
                  <path d="M7 12h1v3h4v1H7zm9 2v2h-3v-1h2v-1z"/>
                </svg>
              </div>
          <hr class="my-4">
          
    
          <!-- <button class="w-100 btn btn-dark btn-lg" type="submit">ยืนยัน</button> -->
          <a href="order_3.php" class="w-100 btn btn-dark btn-lg">ยืนยัน</a>
        </form>

        <a href="order.php" class="link-body-emphasis text-decoration-none">
        <p class=" text-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0"/>
          </svg>
          กลับไปการจัดส่งที่อยู่</p>
        </a>

      </div>
</div> 

        <!-- end -->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ho+j7jyWK8fNQe+A12ye3xC93He5jvZyrQ+iu6H4iJoRlt5zwdb+hPzPR6u2QuT4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
