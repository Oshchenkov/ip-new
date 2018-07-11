<!DOCTYPE html>
<html lang="en">
    <head>

      <?php include('inc/head-common.php'); //Common head elements ?>

      <title>iPlanner - Home</title>

      <!-- Custom styles for this page -->
      <link href="css/home.css?ver=<?php echo rand(); ?>" rel="stylesheet">
      <link href="css/modals.css?ver=<?php echo rand(); ?>" rel="stylesheet">

    </head>
    <body>
      <?php include('inc/header.php'); ?>

      <main role="main" class="container">
        <div class="row">
        <article id="content" class="col-md-9 p-0">
            <div class="col-12">
                <h1 class="mb-4">iPLANNER HOME</h1>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-8 ">
                        <div class="row">
                            <div class="player col mb-4">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe src="https://www.youtube.com/embed/y1Nbcm31JzM?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="player-small col-3 mb-4">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe src="https://www.youtube.com/embed/y1Nbcm31JzM?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="player-small col-3 mb-4">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe src="https://www.youtube.com/embed/y1Nbcm31JzM?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="player-small col-3 mb-4">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe src="https://www.youtube.com/embed/y1Nbcm31JzM?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="player-small col-3 mb-4">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe src="https://www.youtube.com/embed/y1Nbcm31JzM?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row">
                          <div class="col news-item">
                            <a href="" class="news-photo mr-2"><img src="img/news-photo-square.jpg"></a>
                            <h4 class="news-headline mb-0"><a href="">News Headline</a></h4>
                            <p class="news-excerpt small">Lorem ipsum dolor sit amet, consec tetur adipi scing elit. Mauris eget sapien eu urna volutpat feugiat sit amet at lectus pulvinar felis. <span class="read-more small"><a href="">Read More</a></span></p>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col news-item">
                            <a href="" class="news-photo mr-2"><img src="img/news-photo-square.jpg"></a>
                            <h4 class="news-headline mb-0"><a href="">News Headline</a></h4>
                            <p class="news-excerpt small">Lorem ipsum dolor sit amet, consec tetur adipi scing elit. Mauris eget sapien eu urna volutpat feugiat sit amet at lectus pulvinar felis. <span class="read-more small"><a href="">Read More</a></span></p>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col news-item">
                            <a href="" class="news-photo mr-2"><img src="img/news-photo-square.jpg"></a>
                            <h4 class="news-headline mb-0"><a href="">News Headline</a></h4>
                            <p class="news-excerpt small">Lorem ipsum dolor sit amet, consec tetur adipi scing elit. Mauris eget sapien eu urna volutpat feugiat sit amet at lectus pulvinar felis. <span class="read-more small"><a href="">Read More</a></span></p>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="row tabs py-3 mb-4">
                    <div class="col-md-12">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item"><a class="nav-link active" href="#tab-1" aria-controls="tab-1" role="tab" data-toggle="tab">DFM Panel</a></li>
                            <li class="nav-item"><a class="nav-link" href="#tab-2" aria-controls="tab-2" role="tab" data-toggle="tab">Latitude</a></li>
                            <li class="nav-item"><a class="nav-link" href="#tab-3" aria-controls="tab-3" role="tab" data-toggle="tab">General Investment Account</a></li>
                            <li class="nav-item"><a class="nav-link" href="#tab-4" aria-controls="tab-4" role="tab" data-toggle="tab">Account Options</a></li>
                            <li class="nav-item"><a class="nav-link" href="#tab-5" aria-controls="tab-5" role="tab" data-toggle="tab">US Clients</a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane show fade active" id="tab-1">
                                <div class="row small">
                                  <div class="col tab-box">
                                      <h5>ATP</h5>
                                      <ul>
                                          <li>Absolute return approach</li>
                                          <li>Cash plus benchmark</li>
                                          <li>Alternative asset class</li>
                                          <li>No DFM fee</li>
                                          <li>Fee and commission based options</li>
                                      </ul>
                                      <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#modal-1">
                                        <i class="far fa-file-alt"></i> ATP Literature
                                      </button>
                                  </div>
                                  <div class="col tab-box">
                                      <h5>Parala</h5>
                                      <ul>
                                          <li>Dynamic multi-asset</li>
                                          <li>Process designed by academics</li>
                                          <li>25 asset class universe</li>
                                          <li>No DFM fee</li>
                                          <li>Fee and commission based options</li>
                                      </ul>
                                      <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#modal-2">
                                        <i class="far fa-file-alt"></i> Parala Literature
                                      </button>
                                  </div>
                                  <div class="col tab-box">
                                      <h5>Morningstar</h5>
                                      <ul>
                                          <li>Traditional equity/bond</li>
                                          <li>Collectives based</li>
                                          <li>Global research reputation</li>
                                          <li>Ongoing active management</li>
                                          <li>Competitive prices</li>
                                      </ul>
                                      <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#modal-3">
                                        <i class="far fa-file-alt"></i> Morningstar Literature
                                      </button>
                                  </div>
                                  <div class="col tab-box">
                                      <h5>US Portfolios</h5>
                                      <ul>
                                          <li>100% Individual equities</li>
                                          <li>Available in UK, US and European portfolios</li>
                                          <li>High quality, high yield style</li>
                                          <li>Run by Swiss private bank</li>
                                          <li>Low TER’s</li>
                                      </ul>
                                      <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#modal-4">
                                        <i class="far fa-file-alt"></i> US Portfolio Literature
                                      </button>
                                  </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab-2">
                                <div class="row small">
                                  <div class="col tab-box">
                                      <h5>What is Latitude?</h5>
                                      <p>A new breed of platform based regular savings plan that is flexibl e, portable available globally.</p>
                                  </div>
                                  <div class="col tab-box">
                                      <h5>Key Features:</h5>
                                      <ul class="mb-0">
                                          <li>Payments accepted in all global curreinces</li>
                                          <li>Flexible contribution frequencies</li>
                                          <li>Choice of three risk profiled multi-asset portfolios</li>
                                          <li>Hybrid initial and trail fee structure</li>
                                      </ul>
                                  </div>
                                  <div class="col tab-box">
                                      <h5>Literature</h5>
                                      <ul class="literature mb-0">
                                          <li><a href="#"><i class="far fa-file-alt mr-2"></i>Latitude application form</a></li>
                                          <li><a href="#"><i class="far fa-file-alt mr-2"></i>Latitude product guide</a></li>
                                          <li><a href="#"><i class="far fa-file-alt mr-2"></i>Latitude sales aid</a></li>
                                          <li><a href="#"><i class="far fa-file-alt mr-2"></i>Latitude brochure</a></li>
                                          <li><a href="#"><i class="far fa-file-alt mr-2"></i>Latitude terms &amp; conditions</a></li>
                                      </ul>
                                  </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab-3">
                                <div class="row small">
                                  <div class="col tab-box">
                                      <h5>What is a GIA?</h5>
                                      <p>This is an 'unwrapped' investment account which recognises client residency and treats income on cash deposits appropriately.</p>
                                  </div>
                                  <div class="col tab-box">
                                      <h5>Choose this option if you are interested in:</h5>
                                      <ul class="mb-0">
                                          <li>Self Select Investing (shares and funds etc)</li>
                                          <li>Buying and Selling Funds</li>
                                          <li>Investing in Structured Products</li>
                                          <li>Within an offshore bond</li>
                                          <li>Goals Based Portfolios</li>
                                      </ul>
                                  </div>
                                  <div class="col tab-box">
                                      <h5>Key Features</h5>
                                      <ul class="mb-0">
                                          <li>Access to world's leading fund managers</li>
                                          <li>Over 10,000 funds available</li>
                                          <li>All major global stock exchanges supported</li>
                                          <li>Exchange Traded Funds, ETN's Structured Products/Investment Trusts</li>
                                      </ul>
                                  </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab-4">
                                <div class="row small">
                                  <div class="col tab-box">
                                      <h5>Account Options</h5>
                                      <p>ARIA IP supports the widest breadth of tax wrappers some already integrated into account opening process on the platform.</p>
                                  </div>
                                  <div class="col tab-box">
                                      <h5>All bases covered:</h5>
                                      <ul class="mb-0">
                                          <li>Integrated SIPP provided by Pointon York</li>
                                          <li>ARIA IP ROPS is a Gibraltar based ROPS</li>
                                          <li>RDR priced (IOM) offshore bond wrapper</li>
                                          <li>Corporate benefit schemes</li>
                                          <li>ISAs and trusts also available</li>
                                      </ul>
                                  </div>
                                  <div class="col tab-box">
                                      <h5>Providers include:</h5>
                                      <ul class="mb-0">
                                          <li>Pointon York</li>
                                          <li>Forth Plus</li>
                                          <li>Momentum</li>
                                          <li>Sovereign</li>
                                          <li>ITC Pensions</li>
                                      </ul>
                                  </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab-5">
                                <div class="row small">
                                  <div class="col tab-box">
                                      <h5>Account Options</h5>
                                      <p>We can accommodate US connected persons on the platform when held inside a recognised UK or Offshore pension scheme. GIA accounts' can be set up at alternative custodian.</p>
                                  </div>
                                  <div class="col tab-box">
                                      <h5>All bases covered:</h5>
                                      <ul class="mb-0">
                                          <li>US portfolios for US clients.</li>
                                          <li>Risk profile multi-asset strategies</li>
                                          <li>Availabile in ETF or UCITS 5 structure</li>
                                          <li>Variety of fee options available</li>
                                          <li>SEI as custodian supports FATCA reporting.</li>
                                      </ul>
                                  </div>
                                  <div class="col tab-box">
                                      <h5>Providers include:</h5>
                                      <ul class="mb-0">
                                          <li>Dynamic multi-asset</li>
                                          <li>Processing designed by academics</li>
                                          <li>25 asset class universe</li>
                                          <li>Institutional quality management</li>
                                      </ul>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modal-1" tabindex="-1" role="dialog" aria-labelledby="modal-1">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title" id="myModalLabel">ATP</h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  </div>
                  <div class="modal-body">
                    <p class="mb-2">The All Terrain Portfolio strategy is an actively managed discretionary management service, offering a range of risk profiled portfolios. It has a 'cash plus' benchmark meaning an absolute return philosophy, rather than a more traditional stock market approach.</p>
                    <ul class="col col-sm-12 col-md-7 col-md-offset-3 mb-0 small">
                        <li>Brochure</li>
                        <li>Quarterly Factsheets</li>
                        <li>Key Features</li>
                        <li>Introduction to Building Block Funds</li>
                        <li>Asset Allocation Update</li>
                    </ul>
                    <div class="clear-both"></div>
                  </div>
                </div>
              </div>
            </div>

            <div class="modal fade" id="modal-2" tabindex="-1" role="dialog" aria-labelledby="modal-2">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title" id="myModalLabel">PARALA</h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  </div>
                  <div class="modal-body">
                    <p class="mb-2">The Parala asset allocation methodology is driven by a macro economic model developed by world reknowned academics. The investment process is forwards looking, and seeks to identify the asset classes which will perform best over the coming period. Parala's portfolios are available for US clients, regular savings plans and in ETF format for certain size portfolios.</p>
                    <ul class="col col-md-offset-4 mb-0">
                        <li>Brochure</li>
                        <li>Factsheets</li>
                        <li>Key Features</li>
                        <li>Presentation</li>
                    </ul>
                    <div class="clear-both"></div>
                  </div>
                </div>
              </div>
            </div>

            <div class="modal fade" id="modal-3" tabindex="-1" role="dialog" aria-labelledby="modal-3">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title" id="myModalLabel">MORNINGSTAR</h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  </div>
                  <div class="modal-body">
                    <p class="mb-2">The Morningstar portfolio draw on Morningstar's global research and in depth knowledge of fund managers. Constructed using funds, the approach would be described as more traditional, although does diversify across range of asset classes.</p>
                    <ul class="col col-md-offset-4 mb-0">
                        <li>Factsheets</li>
                        <li>Key Features</li>
                        <li>Portfolio Change</li>
                    </ul>
                    <div class="clear-both"></div>
                  </div>
                </div>
              </div>
            </div>

            <div class="modal fade" id="modal-4" tabindex="-1" role="dialog" aria-labelledby="modal-4">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title" id="myModalLabel">US
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> Portfolios</h1>
                  </div>
                  <div class="modal-body">
                    <p class="mb-2">The US Portfolios asset allocation methodology is driven by a macro economic model developed by world reknowned academics. The investment process is forwards looking, and seeks to identify the asset classes which will perform best over the coming period. US Portfolios are available for US clients, regular savings plans and in ETF format for certain size portfolios.</p>
                    <ul class="col col-md-offset-4 mb-0">
                        <li>Brochure</li>
                        <li>Factsheets</li>
                        <li>Key Features</li>
                        <li>Presentation</li>
                    </ul>
                    <div class="clear-both"></div>
                  </div>
                </div>
              </div>
            </div>

        </article>
        <?php include('inc/sb/home.php'); ?>
      </div>

      </main>

    <?php include('inc/footer.php'); ?>
    <?php include('inc/footer-js.php'); ?>
  </body>
</html>
