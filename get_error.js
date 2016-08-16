window.onerror = function(e) {
	var image = new Image();
	image.src = 'http://localhost:5566/get_error/index.php?err=' + e;
}