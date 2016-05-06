<?
require_once("conf/map.inc");
/*
while(list($k,$v)=each($isoConvTable)){
	//echo 'iso3ct["'.$v.'"]="'.$k.'";'."\n";
	//echo "\t".'"'.$v.'"=>"'.$k.'",'."\n";
}
$file=file("countries.txt");
for($i=0;$i<count($file);$i++) {
	$lineAr=explode("\t",$file[$i]);
	echo "\t".'"'.$iso3ct[$lineAr[0]].'"=>array('.$lineAr[1].','.$lineAr[2].'),'."\n";
}
exit;
*/
(preg_match("/\w{3}/",$_REQUEST["cid"]))?$cid=$_REQUEST["cid"]:$cid="ETH";
$myLatLng=$worldLatLng[$cid];
$data=array();
$fp=fopen("conf/world_cities.csv","r");
if ($fp) {
    while (($line = fgets($fp)) !== false) {
        if(preg_match("/,".$cid.",/",$line))$data[]=explode(",", $line);
    }
    fclose($fp);
} else {
    // error opening the file.
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Simple icons</title>
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 6,
          center: {lat: <?=$myLatLng[0]?>, lng: <?=$myLatLng[1]?>}
        });

        var image = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
		<?for($i=0;$i<count($data);$i++){
			if($data[$i]["2"]>0 && $data[$i]["3"]>0){?>
				var marker<?=$i?> = new google.maps.Marker({
					position: {lat: <?=$data[$i]["2"]?>, lng: <?=$data[$i]["3"]?>},
					map: map,
					icon: image
				});
			<?
				}
			}?>
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDM8BQFMYwJcMq013oTRBt84daMWECPkSk&callback=initMap">
    </script>
  </body>
</html>

<?
/*
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyDM8BQFMYwJcMq013oTRBt84daMWECPkSk" type="text/javascript"></script>
<!--
<script type="text/javascript" src="/js/markerwithlabel.js"></script>
-->
<script type="text/javascript">
    var map;
    var geocoder = new GClientGeocoder();
  	function findAddress() {
      if (GBrowserIsCompatible()) {
			map = new GMap2(document.getElementById("map_canvas"));
				<?for($i=0;$i<count($data);$i++){?>
					var marker = new google.maps.Marker({
						position: {lat: <?=$data[$i]["2"]?>, lng: <?=$data[$i]["2"]?>},
						map: map,
					});
					marker.setMap(map);
					//google.maps.event.addListener(marker, 'click');
				<?}?>

			map.addControl(new GScaleControl());
			map.addControl(new google.maps.MenuMapTypeControl());
		;}
  	  	var coun4=document.getElementById("cid").value;
		geocoder.getLocations(coun4, function(response){
			if ((response.Status.code == 200) && (response.Placemark.length > 0)) {
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
*/
