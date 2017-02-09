<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<title>昂立 - @yield('title')</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
	<div id="app">
		<div class="nav">
			@yield('nav')
		</div>
		<div class="main">
			@yield('main')
		</div>
	</div>
	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
