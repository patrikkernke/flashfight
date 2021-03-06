<!-- Button to show navigation -->
<div class="nav-show-btn">
	<a href="#">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</a>
</div>

<!-- Primary navigation -->
<section id="nav-primary" class="nav-hide" >
	
	<ul class="nav-content-wrapper text-center">
		<li>
			<a href="{{ route('member.create') }}">
				<span class="glyphicon glyphicon-plus"></span>
				Neuer Teilnehmer
			</a>
		</li>
		<li>
			<a href="{{ route('point.index') }}">
				<span class="glyphicon glyphicon-star-empty"></span>
				Punkte vergeben
			</a>
		</li>
		<li>
			<a href="{{ route('point.best') }}">
				<span class="glyphicon glyphicon-fire"></span>
				Bestenliste
			</a>
		</li>
	</ul>

	<div class="nav-close-btn">
		<a href="#" class="text-center">
			<span class="glyphicon glyphicon-remove-circle"></span>
		</a>
	</div>
	
</section>