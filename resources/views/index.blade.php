@extends ('layouts.base')
@section('title')
	{{$title}}
@endsection
@section('content')
	<div class="head" "id="head-chat">
		<p>Канал</p>
	</div>
	<div class="work-window" id="work-window">
		<div class="window" "id="window-chat">
			<p>Чат</p>
		</div>
		<div class="list" "id="list-chat">
			<p>Список</p>
		</div>
	</div>
	<div class="enter" "id="enter-chat">
		<textarea class="enter-text"></textarea>	
		<input class="enter-button" type="button" value="Ввод">	
	</div>
@endsection