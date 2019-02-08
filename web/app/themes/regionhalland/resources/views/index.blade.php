@extends('layouts.app')

@section('content')
    <div>
        @if(function_exists('get_region_halland_header'))
        <nav aria-label="Huvudnavigation" class="container background-dark-blue-frida mx-auto mobile-friendly-padding" style="background-image: url(../include/img/front.jpg); background-size: cover;">
        	@include('partials.nav-front')
        </nav>
        @endif
    </div>
    <div class="background-white">
	     @include('partials.nyheter')
    </div>
@endsection