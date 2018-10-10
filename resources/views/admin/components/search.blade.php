<div class="ml-auto form-row">
	<div class="col-auto">
		<form method="GET" class="input-group">
			<input class="form-control deletable" name="q" type="text" placeholder="Поиск" value="{{ request()->has('q') ? request()->get('q') : '' }}">
			<div class="input-group-append">
			<button class="btn btn-light" type="submit">
				<svg class="icon" xmlns="http://www.w3.org/2000/svg"><use xlink:href="#search"></use></svg>
			</button>
		</div>
		</form>
	</div>
</div>