
<head>
</head>

<body style="background-color:#ACDBCE;">




<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="jquery.rwdImageMaps.min.js"></script>
<script>
$(document).ready(function(e) {
	$('img[usemap]').rwdImageMaps();
	
	$('area').on('click', function() {
		alert($(this).attr('alt') + ' clicked');
	});
});

</script>


</body>

