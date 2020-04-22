<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>	
	@include('components.meta')
	@include('components.css')
	@yield('components.styles')
</head>
<body>

	<div class="wrapper " >
		@include('components.nav')
            
	    @yield('content')
        
        @include('components.wedgard')
			
		@include('components.modal')
	</div>
	
	@include('components.js')
	@yield('scripts')

	@include('sweet::alert')

</body>
</html>
