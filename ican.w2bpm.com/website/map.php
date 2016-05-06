<?
require_once("conf/map.inc");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
<title>Zoom to Country with Select List (Google Maps API)</title>
<script src="http://maps.google.com/maps?file=api&amp;v=3&amp;key=AIzaSyDM8BQFMYwJcMq013oTRBt84daMWECPkSk" type="text/javascript"></script>
</script>
    <script type="text/javascript">
    var map=null;
    var geocoder = new GClientGeocoder();
    function initialize() {
      if (GBrowserIsCompatible()) {
		map = new GMap2(document.getElementById("map_canvas"));
		map.addControl(new GScaleControl());
		map.addControl(new google.maps.MenuMapTypeControl());
		map.setCenter (new GLatLng(47.288828765662416, 7.945261001586914), 2);}
    }
  	function findAddress() {
      if (GBrowserIsCompatible()) {
		map = new GMap2(document.getElementById("map_canvas"));
		map.addControl(new GScaleControl());
		map.addControl(new google.maps.MenuMapTypeControl());
		;}
  	  	var coun4=document.getElementById("cid").value;
  	    	geocoder.getLocations(coun4, function(response)
  		{
		if ((response.Status.code == 200) && 
                    (response.Placemark.length > 0)) {
		var box = response.Placemark[0].ExtendedData.LatLonBox;
		var sw=new GLatLng(box.south,box.west);
		var ne=new GLatLng(box.north,box.east);
		var bounds = new GLatLngBounds(sw,ne);
		centerAndZoomOnBounds(bounds);
                }
		});
  	}

function centerAndZoomOnBounds(bounds) {
	var center = bounds.getCenter();
	var newZoom = map.getBoundsZoomLevel(bounds);
		if (map.getZoom() != newZoom) {
		map.setCenter(center, newZoom);
	} 	else {
		map.panTo(center);
	}
}
</script>
  </head>
<body onload="findAddress()" onunload="GUnload()">
<input type="hidden" name="cid" id="cid" value="<?($isoCodes3[$_REQUEST["cid"]])?print $isoCodes3[$_REQUEST["cid"]]: print 'KEN';?>">
<div id="map_canvas" style="width: 800px; height: 600px"></div>
	</body>
</html>