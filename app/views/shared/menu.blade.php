<div class="container">
	<nav class="navbar navbar-default" role="navigation">
		 <!-- Brand and toggle get grouped for better mobile display -->
    	<div class="navbar-header">
      		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-menu">
        		<span class="sr-only">Toggle navigation</span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
      		</button>
    	</div>
		<div class="collapse navbar-collapse" id="navbar-collapse-menu">
      		<ul class="nav navbar-nav">
				<li><a href="{{action('StartController@index')}}">start</a></li>
				<li><a href="{{action('AboutController@index')}}">om oss</a></li>

				<li class="dropdown">
          			<a href="{{action('ActivitiesController@index')}}" class="dropdown-toggle" data-toggle="dropdown">Verksamheter<b class="caret"></b></a>
          			<ul class="dropdown-menu">
          				<li><a href="{{action('ActivitiesController@index')}}">Verksamheter</a></li>
            			<li class="divider"></li>
            			<li><a href="{{action('ActivitiesController@lan')}}">Lan</a></li>
            			<li><a href="{{action('ActivitiesController@warhammer')}}">Warhammer</a></li>
            		</ul>
        		</li>
				<li><a href="{{action('ContactController@index')}}">kontakta</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
        		<li><a href="https://www.facebook.com/viunga4you" target="_blank">Facebook</a></li>
      		</ul>
		</div>
	</nav>
</div>