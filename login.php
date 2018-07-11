<!doctype html>
<html lang="en">
  <head>
    <?php include('inc/head-common.php'); //Common head elements ?>

    <title>iPlanner - Login</title>

    <!-- Custom styles for this page -->
    <link href="css/login.css?ver=<?php echo rand(); ?>" rel="stylesheet">
  </head>

  <body>
    <header class="container-fluid px-0">
      <div class="header-top container-fluid mt-2  px-0">
        <div class="top-bar mb-2 container">
          <div class="row">
            <div class="col">
              <a href="login.php"><img class="top-logo" src="img/iplanner-logo.png" alt=""></a>
            </div>
            <div class="col text-right">
              <?php include('inc/top-links.php'); ?>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container">
        <article id="content">
          <div class="row mt-4 mb-4">
            <div class="offset-1 col-5 pt-2 small description">
              <p><strong>iPlanner</strong> is a simple, secure and highly efﬁcient means of us gaining a signiﬁcant understanding of your ﬁnancial circumstances, before delivering a wide range of wealth and investment planning solutions in one simple, client friendly online account.</p>
              <p>Our platform, supported by a global custodian and sophisticated technology partners in HSBC, SEI and Cofunds, affords clients a combination of security and ﬂexibility to meet their individual changing needs. Traditionally, wealth management has relied upon a piecemeal approach using a limited number of product providers. No single product can provide the flexibility or breadth needed in meeting your wealth planning needs.</p>
            </div>
            <div class="offset-1 col-md-4 p-4 login">
              <div class="heading small mb-3">Adviser</div>
              <form id="frm_adviser" name="frm_adviser">
                <div class="form-group mb-2">
                  <input type="text" class="form-control form-control-sm" id="iplan_advisor" name="sy_user" placeholder="Username">
                </div>
                <div class="form-group mb-2">
                  <input type="password" class="form-control form-control-sm" id="iplan_adv_pass" name="sy_pass" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-outline-info btn-sm float-right" id="login_as_agent" name="sy_agent">Login as Agent</button>
              </form>
              <div class="clearfix mb-3"></div>
              <div class="heading small mb-3">Client</div>
              <form id="frm_client" name="frm_client">
                <div class="form-group mb-2">
                  <input type="email" class="form-control form-control-sm" id="iplan_client" name="sy_user" placeholder="Username">
                </div>
                <div class="form-group mb-2">
                  <input type="password" class="form-control form-control-sm" id="iplan_client_pass" name="sy_pass" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-outline-info btn-sm float-right" id="login_as_client" name="sy_client">Login as Client </button>
              </form>
              <div class="clearfix mb-0"></div>
            </div>
          </div>
          <div class="row mb-5 pt-4">
            <div class="offset-1 col-5 features">
              <div class="heading mb-2">Main Features:</div>
              <ul class="mb-0 small">
                <li>One combined online account for multiple investment, savings and retirement needs</li>
                <li>Online application submission follows online client discovery process</li>
                <li>Simple online tracking of your investments</li>
              </ul>
            </div>
            <div class="offset-1 col-md-4 px-0 features">
              <ul class="mb-0 small">
                <li>Access to some of the world's leading funds managers</li>
                <li>Customised investment portfolios to ﬁt your needs</li>
                <li>One account which is supported by one single global custodian and administration point</li>
                <li>Access to thousands of equities, funds, ETFs, bonds, structured products, investment trusts</li>
              </ul>
            </div>
          </div>
        </article>

      </div>
    </main>

    <?php include('inc/footer.php'); ?>
    <?php include('inc/footer-js.php'); ?>
  </body>
</html>
