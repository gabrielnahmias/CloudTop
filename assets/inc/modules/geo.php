<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Geolocation Example</title>
</head>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<script type="text/javascript">

$( function() {
	
	function handleError(error) {
		
		$("#msg").html(error.message);
		
    }
	
	function updateMap(data) {
		
		// Log the whole thing to the console.
		
		console.debug(data);
		
		// Extract latitude and longitude from returned data.
		
		var iLat = data.coords.latitude,
			iLong = data.coords.longitude;
		
		// Output it on the page.
		
		$("#lat").val(iLat);
		$("#long").val(iLong);
		console.debug('updating');
	}
	
	//navigator.geolocation.getCurrentPosition(updateMap, handleError, { maximumAge: 1000, timeout: 0 } );
	
	var watchId = navigator.geolocation.watchPosition(updateMap, handleError, { enableHighAccuracy: true, maximumAge: 2000 } );
	
} );

</script>

<body>

<div id="wrapper">
	
    <div id="msg"></div>
    
    <div id="location">
        
        <div>
        	<label for="lat">Latitude:</label> <input id="lat" type="text" />
        </div>
        
        <div>
        	<label for="long">Longitude:</label> <input id="long" type="text" />
        </div>
        
    </div>
    
</div>

</body>

</html>