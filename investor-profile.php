<!doctype html>
<html lang="en">
  <head>
    <?php include('inc/head-common.php'); //Common head elements ?>

    <title>Investor Profile</title>

    <!-- Custom styles for this page -->
    <link href="css/sample.css?ver=<?php echo rand(); ?>" rel="stylesheet">
  </head>

  <body>
    <?php include('inc/header.php'); ?>

    <!-- Begin page content -->
    <main role="main" class="container">
			<div class="row ">
				<div class="col-12">
					<ul class="statusBar">
						<li class="statusBar__li">
							<a href="#" class="statusBar__a">
								iPLANNER
							</a>
						</li>
						<li class="statusBar__li">
							<a href="#" class="statusBar__a">
								CLIENTS
							</a>
						</li>
						<li class="statusBar__li">
							<a href="#" class="statusBar__a active">
								PROFILE
							</a>
						</li>
						<li class="statusBar__li">
							<a href="#" class="statusBar__a">
								CLIENT LIBRARY
							</a>
						</li>
						<li class="statusBar__li">
							<a href="#" class="statusBar__a ">
								PORTFOLIOS
							</a>
						</li>
						<li class="statusBar__li">
							<a href="#" class="statusBar__a ">
								REPORTING
							</a>
						</li>
						<li class="statusBar__li">
							<a href="#" class="statusBar__a ">
								REVINUES
							</a>
						</li>
					</ul>
				</div>
			</div>
      <div class="row">
        <article id="content" class="col-md-9">
					<div class="cardGrey row mb-4">
						<div class="col">
							<div class="cardGrey__container">
								<div class="cardGrey__tittle text-uppercase">
									Your client details
								</div>
								<div class="cardGrey__content">
									<div class="row">
										<div class="col-5">
											Full name:
										</div>
										<div class="col-5">
											-value-
										</div>
										<div class="col2"></div>
									</div>
									<div class="row">
										<div class="col-5">
											Date of birth:
										</div>
										<div class="col-5">
											-value-
										</div>
										<div class="col2"></div>
									</div>
									<div class="row">
										<div class="col-5">
											Address:
										</div>
										<div class="col-5">
											-value-
										</div>
										<div class="col2"></div>
									</div>
									<div class="row">
										<div class="col-5">
											Telephone:
										</div>
										<div class="col-5">
											-value-
										</div>
										<div class="col2"></div>
									</div>
									<div class="row">
										<div class="col-5">
											Email Address:
										</div>
										<div class="col-5">
											-value-
										</div>
										<div class="col2"></div>
									</div>
								</div>
							</div>
						</div>

						<div class="col">
							<div class="cardGrey__container">
								<div class="cardGrey__tittle text-uppercase">
									Suitability reports
								</div>
								<div class="cardGrey__content cardGrey__content-bb">
									<div class="row">
										<div class="col-7">
											Limelight Report
										</div>
										<div class="col-3">
											4/7/17
										</div>
										<div class="col-2">
											<i class="far fa-lg fa-file"></i>
										</div>
									</div>
								</div>
								<div class="cardGrey__content cardGrey__content-bb">
									<div class="row">
										<div class="col-7">
											Harbour Report
										</div>
										<div class="col-3">
											4/7/16
										</div>
										<div class="col-2">
											<i class="far fa-lg fa-file"></i>
										</div>
									</div>
								</div>
								<div class="cardGrey__content ">
									<div class="row">
										<div class="col-7">
											Harbour Report
										</div>
										<div class="col-3">
											4/7/15
										</div>
										<div class="col-2">
											<i class="far fa-lg fa-file"></i>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="cardGrey row mb-4">
						<div class="col ">
							<div class="cardGrey__container">
								<div class="cardGrey__tittle text-uppercase lh-1 cardGrey__tittle-2col clearfix">
									Incomplete applications
								</div>
								<div class="cardGrey__content">
									<div class="row ">
										<div class="col-4">
											Limelight Report
										</div>
										<div class="col-2">
											4/7/17
										</div>
										<div class="col-6">
											<a href="#" class="m-0 highlight-textСolor text-d-none">
												<span class="text-uppercase">Continue</span> <i class="fas fa-xs fa-chevron-right"></i> 
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="cardGrey row mb-5">
						<div class="col ">
							<div class="cardGrey__container">
								<div class="cardGrey__tittle text-uppercase lh-1 cardGrey__tittle-2col clearfix">
									Account Details
								</div>
								<div class="cardGrey__content cardGrey__content-bb">
									<div class="row ">
										<div class="col-4">
											<div class="text-uppercase">
												gia
											</div>
										</div>
										<div class="col-2">
											Balanced
										</div>
										<div class="col-6">
											ATP
										</div>
									</div>
								</div>
								<div class="cardGrey__content">
									<div class="row ">
										<div class="col-4">
											<div class="text-uppercase">
												gia
											</div>
										</div>
										<div class="col-2">
											Balanced
										</div>
										<div class="col-6">
											ATP
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
					
        </article>
        <?php include('inc/sb/investor-profile.php'); ?>

      </div>
    </main>

    <?php include('inc/footer.php'); ?>
    <?php include('inc/footer-js.php'); ?>
  </body>
</html>