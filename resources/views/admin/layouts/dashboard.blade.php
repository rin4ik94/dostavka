<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
@include('admin.layouts.inc.head')
</head>
	<body>
		<div class="app" id="app">
		@include('admin.layouts.inc.symbol')
			@include('admin.layouts.inc.header')
				<div class="content">
					@include('admin.layouts.inc.aside')
				<main class="main">
					@include('admin.layouts.errors.errors-and-messages')
					@yield('content')
				</main>
			</div>
			@include('admin.layouts.inc.modals')
			@include('admin.layouts.inc.footer')
		</div>
		@include('admin.layouts.inc.scripts')
	</body>
</html>