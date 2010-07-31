<!DOCTYPE html>
<html>
<head>
    <title>Robin and Olivia's Wedding</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <script type="text/javascript"
        src="http://maps.google.com/maps/api/js?sensor=false">
    </script>
    <script type="text/javascript">
      function initialize() {
        var latlng = new google.maps.LatLng(52.1181, -2.3171);
        var myOptions = {
          zoom: 12,
          center: latlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map_canvas"),
            myOptions);
          var companyPos = new google.maps.LatLng(52.09841, -2.30795);
            var companyMarker = new google.maps.Marker({
            position: companyPos,
            map: map,
            title:"St. Andrew's Church"
            });
      }

    </script>
    <?php include 'stylesheets.php' ?>
</head>
<body onload="initialize()">
    <div class="container">
    <h1 class="header">Robin and Olivia's Wedding</h1>
    <hr class="heading">    
    <?php include 'navigation.php' ?>
    <hr>
        <div class="span-24 last center">
        <p class="pageheading">Directions</p>
        </div>
        <div class="span-12">
        <div id="map_canvas" style="width:450px; height:400px"></div>
        </div>
        
        <div class="span-12 last" style="padding-bottom: 50px;">
        <p><strong>Church:</strong><br>St Andrew's Church<br>Churchdown Rd<br>Poolbrook<br>Malvern<br>Worcestershire<br>WR14 3JX</p>
        
        
        <form action="http://maps.google.co.uk/maps" method="get" target="_blank">
        <p>Get directions to the church:<br>
        <label for="saddr">Your postcode</label>
        <input type="text" name="saddr" id="saddr" value="" />
        <input type="submit" value="Go" />
        <input type="hidden" name="daddr" value="WR14 3JX" />
        <input type="hidden" name="hl" value="en" /></p>
        </form>
        </div>
        
        
        
        <div class="span-12">
        
        <iframe width="450" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.co.uk/maps?f=d&amp;source=s_d&amp;saddr=WR14+3JX&amp;daddr=WR13+6EQ&amp;hl=en&amp;geocode=FeXyGgMda87c_ynDDBzw2PhwSDGEOaL0vbKiMA%3BFdqcGgMdeeTb_yl7UnvB5FVwSDF82ve9U_0B0g&amp;mra=ls&amp;sll=53.800651,-4.064941&amp;sspn=14.53663,39.506836&amp;ie=UTF8&amp;ll=52.083937,-2.337341&amp;spn=0.073841,0.145912&amp;z=12&amp;output=embed"></iframe><br />
        </div>
        
        <div class="span-12 last">
        <p><strong>Hall:</strong><br>Colwall Village Hall<br>Mill Lane<br>Colwall<br>Worcestershire<br>WR13 6EQ</p>
        
        
        <form action="http://maps.google.co.uk/maps" method="get" target="_blank">
        <p>Get directions to the hall:<br>
        <label for="saddr">Your postcode</label>
        <input type="text" name="saddr" id="saddr" value="" />
        <input type="submit" value="Go" />
        <input type="hidden" name="daddr" value="WR13 6EQ" />
        <input type="hidden" name="hl" value="en" /></p>
        </form>
        </div>
    </div>
<?php include 'footer.php' ?>
</body>
</html>