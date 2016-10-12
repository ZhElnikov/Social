<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('title')</title>
	@section('styles')
		<link href="/media/css/mainstyle.css" type="text/css" rel="stylesheet">
	@show
	<meta name="keywords" content="социальная,сеть, соц, вк, фейсбук, social, network">
	<meta name="description" content="Новая социальная сеть">
	
</head>
<body>
  <div class="body" id="site-window">
	<div class="main" id="top">
		<a href="" class="style-button" "id="style-1">
			<p><pre>стиль 1   </pre></p>
		</a>
		<a href="" class="style-button" "id="style-2">
			<p><pre>стиль 2</pre></p>
		</a>
	</div>
	<div class="center" id="center">
		<div class="main" id="menu">
			<a href="" class="choise" "id="profile-menu">
				<p>Профиль</p>
			</a>
			<a href="" class="choise" "id="room-menu">
				<p>Комнаты</p>
			</a>
			<a href="" class="choise" "id="search-menu">
				<p>Поиск</p>
			</a>
			<a href="" class="choise" "id="room-menu">
				<p>Настройки</p>
			</a>
			<a href="" class="choise" "id="exit-menu">
				<p>Выход</p>
			</a>
		</div>
		<div class="main" id="main">
			@yield('content')
		</div>
	</div>
	<div class="main" id="foot">
		<p>Elnikov</p>
	</div>
  </div>
</body>
</html>