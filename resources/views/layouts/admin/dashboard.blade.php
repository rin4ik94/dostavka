<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('layouts.admin.inc.head')
	<body>
		<div class="app" id="app">
		@include('layouts.admin.inc.symbol')
			@include('layouts.admin.inc.header')
				<div class="content">
					@include('layouts.admin.inc.aside')
				<main class="main">
					@include('layouts.errors-and-messages')
					@yield('content')
				</main>
			</div>
			@include('layouts.admin.inc.modals')
			@include('layouts.admin.inc.footer')
		</div>
		@include('layouts.admin.inc.scripts')
	</body>
</html>