<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Landing Page - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="champ/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="champ/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="champ/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">
      <div class="container">
        <a class="navbar-brand" href="#">เลขเด็ดหวย</a>
        <a class="btn btn-primary" href="#">refresh</a>
      </div>
    </nav>

    <!-- Masthead -->
    <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h3 class="mb-5 text-dark">ม้าสีหมอก</h3>

          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <form method="post" action="/">
              <div class="form-row">
                <div class="col-12 col-md-0 ">
                  <?php
	function DateThai($strDate)
	{
		$strYear = date("Y",strtotime($strDate))+543;
		$strMonth= date("n",strtotime($strDate));
		$strDay= date("j",strtotime($strDate));
		$strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
		$strMonthThai=$strMonthCut[$strMonth];
		return "$strDay $strMonthThai $strYear";
	}

	$strDate = date("Y-m-d");
?>
                  <h5 class="mb-5 text-danger text-left">ประจำวันที่ : <?php  echo DateThai($strDate); ?></h5>
                </div>
                <div class="col-12 col-md-12 ">
                  <h4 class="mb-5 text-dark">วิ่งบน</h4>
                  <?php
                  $numon = rand(0,9);
                  $numdown = rand(0,9);
                  if ($numon == $numdown) {
                    do {
                      $numdown = rand(0,9);
                    } while ($numdown == $numon);
                    echo $numon.$numdown;
                    $numdown = $numdown;
                  }
                  ?>
                  <h5 class="mb-5 text-dark"><?php echo $numon; ?></h5>
                  <?php
                  $numold = [];
                  $numold2 = [];
                  for ($i=0; $i < 4; $i++) {

                  if ($i == 0) {
                    do {
                        $numrand = $numon.rand(0,9);
                    } while ($numrand == $numold);
                  }
                  if ($i == 1) {
                    do {
                        $numrand = $numon.rand(0,9);
                    } while ($numrand == $numold[$i-1]);
                  }
                  if ($i == 2) {
                    do {
                        $numrand = $numon.rand(0,9);
                    } while ($numrand == $numold[$i-1] || $numrand == $numold[$i-2]);
                  }
                  if ($i == 3) {

                    do {
                        $numrand = $numon.rand(0,9);
                    } while ($numrand == $numold[$i-1] || $numrand == $numold[$i-2] || $numrand == $numold[$i-3]);
                  }

                   ?>
                   &nbsp;<h class="mb-5 text-dark text-center"><?php echo $numrand; ?> </h>
                   <?php $numold[$i] = $numrand; } ?>
                </div>

                <div class="col-12 col-md-12 ">
                  <br>
                  <h4 class="mb-5 text-dark">วิ่งล่าง</h4>
                  <?php
                  ?>
                  <h5 class="mb-5 text-dark"><?php echo $numdown; ?></h5>
                  <?php
                  $numold = [];
                  $numold2 = [];
                  for ($i=0; $i < 4; $i++) {
                    if ($i == 0) {
                      do {
                          $numrand = rand(0,9).$numdown;
                      } while ($numrand == $numold2);
                    }
                    if ($i == 1) {
                      do {
                          $numrand = rand(0,9).$numdown;
                      } while ($numrand == $numold2[$i-1]);
                    }
                    if ($i == 2) {
                      do {
                          $numrand = rand(0,9).$numdown;
                      } while ($numrand == $numold2[$i-1] || $numrand == $numold2[$i-2]);
                    }
                    if ($i == 3) {

                      do {
                          $numrand = rand(0,9).$numdown;
                      } while ($numrand == $numold2[$i-1] || $numrand == $numold2[$i-2] || $numrand == $numold2[$i-3]);
                    }

                   ?>
                   &nbsp;<h class="mb-5 text-dark text-center"><?php echo $numrand; ?> </h>
                   <?php $numold2[$i] = $numrand; } ?>
                </div>
                <div class="col-5 col-md-4">
                  </div>
                <div class="col-12 col-md-4">
                  <br>
                   <button type="submit" class="btn btn-block btn-lg btn-primary">refresh!</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </header>



    <!-- Footer -->
    <footer class="footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            <ul class="list-inline mb-2">
              <li class="list-inline-item">
                <a href="#">About</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Contact</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
            </ul>
            <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2018. All Rights Reserved.</p>
          </div>
          <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
            <ul class="list-inline mb-0">
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fa fa-facebook fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fa fa-twitter fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-instagram fa-2x fa-fw"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="champ/jquery/jquery.min.js"></script>
    <script src="champ/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
