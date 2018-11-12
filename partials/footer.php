<!-- FOOTER -->
<footer class="container">
  <audio controls autoplay>
    <source src="music/Playstation 4.mp3" type="audio/mpeg">
    </audio>
  <p class="float-right"><a href="#">Back to top</a></p>
  <p>&copy; Su Hoi Chong A94729 &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
</footer>
</main>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="assets/js/vendor/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="assets/js/vendor/holder.min.js"></script>
<script>
function loadXMLDoc() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      myFunction(this);
    }
  };
  xmlhttp.open("GET", "opentime.xml", true);
  xmlhttp.send();
}

function myFunction(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var table="<tr><th>Day</th><th>Hours</th></tr>";
  var x = xmlDoc.getElementsByTagName("opentime");
  for (i = 0; i <x.length; i++)
  {
    table += "<tr><td>" + x[i].getElementsByTagName("Day")[0].childNodes[0].nodeValue +"</td><td>" +
    x[i].getElementsByTagName("Hours")[0].childNodes[0].nodeValue + "</td></tr>";
  }
  document.getElementById("opentime").innerHTML = table;
}

</script>
<script src="js/jspdf.js"></script>
<script src="js/jquery.js"></script>
<script src="pdf.js"></script>
</body>
</html>
