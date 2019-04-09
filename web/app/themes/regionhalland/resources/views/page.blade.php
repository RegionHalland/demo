@extends('layouts.app')

@section('content') 	
  	
  	<!-- **************************** -->
	<!-- Content with grey background -->
	<!-- **************************** -->
	<div class="relative">
		@include('partials.breadcrumb')
	</div>	
	
	<!-- ************ -->
	<!-- Page content -->
	<!-- ************ -->
	<div class="background-white">
		<div class="background-white">
			<div class="container mx-auto p4">
				<div class="m2 flex flex-wrap">
					
					<div class="col-12 lg-col-3">
					
						@include('partials.nav-sidebars')
						
						<div class="pt2">&nbsp;</div>

						@include('partials.content-nav')
					
					</div>
					
					<!-- ************ -->
					<!-- Page content -->
					<!-- ************ -->
					<div class="col-12 lg-col-9">
						<main class="ml4">
							
							<div>
								<h1>{{ the_title() }}</h1>
							</div>

							<div>
								{{ get_region_halland_acf_page_ingress() }}
							</div>
							
							<div id="main">
								@while(have_posts()) @php(the_post())
									@include('partials.article')
									@include('partials.entry-meta')
								@endwhile
							</div>
							<div>&nbsp;</div>
							
							@php($myParentPage = get_region_halland_parent_page())
							<?php var_dump($myParentPage); ?>
							@if($myParentPage['has_back'] == 1)
							<span>
								<a href="{{$myParentPage['url']}}">{{$myParentPage['post_title']}}
							</span>
							@endif
						</main>
					</div>

				</div>
			</div>
		</div>	
	</div>

@endsection
