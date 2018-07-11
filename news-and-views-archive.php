<!doctype html>
<html lang="en">
  <head>
    <?php include('inc/head-common.php'); //Common head elements ?>

    <title>iPlanner - Limelight</title>

    <!-- Custom styles for this page -->
    <link href="css/news-and-views.css?ver=<?php echo rand(); ?>" rel="stylesheet">
  </head>

  <body>
    <?php include('inc/header.php'); ?>

    <!-- Begin page content -->
    <main role="main" class="container">
      <div class="row">
        <article id="content" class="col-md-9">
          <div class="row mb-4">
            <div class="col-12">
              <h6 class="pt-0 pb-2 mb-0 small"><span class="news-bread-crumb-parent"><a href="">News &amp; Views</a></span> <i class="fas fa-angle-right"></i> <a href="">Esse Molestie</a></h6>
              <div class="search-result pb-2">
                <h3 class="news-headline mb-1"><a href="">Feugiat nulla facilisis at vero eros accumsan</a></h3>
                <p class="news-excerpt mb-1">Duis autem vel eum iriure dolor in hendrerit in <strong>vulputate velit</strong> esse molestie consequat &#8230;</p>
                <p class="mb-1 small"><span class="news-date">May 9, 2018</span> <span class="read-more small"><a href="">Read More</a></span></p>
              </div>
              <div class="search-result mt-2 pb-2">
                <h3 class="news-headline mb-1"><a href="">Feugiat nulla facilisis at vero eros accumsan</a></h3>
                <p class="news-excerpt mb-1">Duis autem vel eum iriure dolor in hendrerit in <strong>vulputate velit</strong> esse molestie consequat &#8230;</p>
                <p class="mb-1 small"><span class="news-date">May 9, 2018</span> <span class="read-more small"><a href="">Read More</a></span></p>
              </div>
              <h6 class="pt-3 pb-2 mb-1 small">
                <span class="news-bread-crumb-parent"><a href="">News &amp; Views</a></span> <i class="fas fa-angle-right"></i> <a href="">Esse Molestie</a>
                <a href="" class="float-right">Next Page <i class="fas fa-angle-right mr-1"></i></a>
                <span class="float-right mx-2"> | </span>
                <a href="" class="float-right"><i class="fas fa-angle-left"></i> Previous Page</a></h6>
            </div>
          </div>
        </article>
        <?php include('inc/sb/news-and-views.php'); ?>

      </div>
    </main>

    <?php include('inc/footer.php'); ?>
    <?php include('inc/footer-js.php'); ?>
  </body>
</html>
