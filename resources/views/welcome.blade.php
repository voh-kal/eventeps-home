<!DOCTYPE html>
<html>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .challenge-carda {
   
      clip-path: polygon(0% 0%,
          100% 0,
          100% 100%,
          0% 88%);
    }

    .challenge-cardb {
      
      clip-path: polygon(0% 0%, 100% 12%, 100% 100%, 0% 100%);
    }

    .challenge-card{
      background-color: #f8f9ff;
      border-radius: 10px;
      border: none;
      position: relative;
      padding: 24px;
      margin-bottom: 0px;
      min-height: 200px;
    }

    .challenge-number {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .challenge-text {
      font-size: 16px;
      line-height: 1.4;
      position: relative;
      z-index: 2;
      padding-bottom: 20px;
    }

    .row {
      --bs-gutter-x: 1.5rem;
      --bs-gutter-y: 1.5rem;
    }
  </style>
</head>

<body>
  <div class="container mt-5">
    <h2 class="text-center mb-4">Challenges</h2>

    <div class="row">
      <div class="col-lg-6">
        <div class="col-12">
          <div class="challenge-carda challenge-card">
            <div class="challenge-number">1</div>
            <div class="challenge-text">
              Ensuring quick and hassle-free entry for a large number of attendees.
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="challenge-cardb challenge-card">
            <div class="challenge-number">2</div>
            <div class="challenge-text">
              Verifying guest credentials efficiently.
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="col-12">
          <div class="challenge-carda challenge-card">
            <div class="challenge-number">3</div>
            <div class="challenge-text">
              Distinguishing different guest categories for access control.
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="challenge-cardb challenge-card">
            <div class="challenge-number">4</div>
            <div class="challenge-text">
              Distinguishing different guest categories for access control.
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</body>

</html>