
<?php include_once "partials/header.php";
$page_title="Location";
?>

    <main role="main">
      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">
        <hr class="featurette-divider">
        <div class="col-md-7">
          <div id="Location">

          <h2 class="featurette-heading">
            GAME Store
          </h2>
        <div class="row featurette">
          <iframe width="100%" height="100%" frameborder="0" style="border:0"src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDMU_QYlhZLdYQcUISrBzS3s-ED5ukS0e8&q=game,Leeds+England" allowfullscreen></iframe>
          <button type="button" onclick="loadXMLDoc()">Show Open Time</button>
        </div>
          <table id="opentime" class="table table-striped">
          </table>
        </div>
          <button type="button" class="btn btn-primary" href="">Download PDF</button>
        <hr class="featurette-divider">
      </div>
      <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->


<?php include_once "partials/footer.php";?>
