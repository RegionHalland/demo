{{--
	Template Name: Styrda dokument
--}}

@extends('layouts.app')

@section('content')

<main class="bg-white pt-16 pb-8" id="main">
	<div class="relative">
		@include('partials.breadcrumb')
	</div>
	<div class="container mx-auto px-4">
		<div class="w-full mx-auto">
			<ul class="flex flex-wrap p3 background-white" aria-label="Huvudnavigation">
                <li class="col-1">
                    &nbsp;
                </li>
                <li class="col-10">
                    @while(have_posts()) @php(the_post())
						@php(the_content())
					@endwhile
                </li>
                <li class="col-1">
                    &nbsp;
                </li>
	        </ul>
		</div>
	</div>
</main>

@endsection