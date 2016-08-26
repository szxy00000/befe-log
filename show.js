$.get('http://localhost:5566', function(res) {
	var html = '';
	var arr = JSON.parse(res);
	arr.forEach(function(one) {
		html += '报错网站：' + one.Referer + '<br>'
			  + '浏览器信息：' + one.UserAgent + '<br>'
			  + '报错信息：' + one.error + '<br><br>'
	})
	document.write(html)
})