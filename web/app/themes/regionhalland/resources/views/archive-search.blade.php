@extends('layouts.app')

@section('content')
  	
  	<!-- **************************** -->
	<!-- Content with grey background -->
	<!-- **************************** -->
	<div class="relative">
	</div>	
	
	<!-- ************ -->
	<!-- Page content -->
	<!-- ************ -->
	<div class="background-white">
		<div class="background-white">
			<div class="container mx-auto p4">
				<div class="m2 flex flex-wrap">
					
					<div class="col-12 lg-col-3">					
					</div>
					
					<!-- ************ -->
					<!-- Page content -->
					<!-- ************ -->
					<div class="col-12 lg-col-9">
						<main class="ml4">							
							<div>
						    
							    @php($myData = get_region_halland_search_findwise_region_halland())
							    
							    @php($numberOfHits = $myData['documentList']['numberOfHits'])
							    
							    @php($hitsPerPage = $myData['documentList']['pagination']['hitsPerPage'])
							    
							    @php($currentPage = 1+$myData['documentList']['pagination']['offset']/$hitsPerPage)
							    
							    @php($numberOfPages = ceil($numberOfHits/$hitsPerPage))
							    
							    @php($arrFirst = $myData['documentList']['pagination']['firstPage'])
							    
							    @php($arrPrev = $myData['documentList']['pagination']['previousPage'])
							    
							    @php($arrNext = $myData['documentList']['pagination']['nextPage'])
							    
							    @php($arrLast = $myData['documentList']['pagination']['lastPage'])
							    
							    <span>{{$numberOfHits}} träffar</span>
							    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
							    <span>sidan {{$currentPage}} av {{$numberOfPages}}</span><br><br>
							    
							    @foreach ($myData['documentList']['documents'] as $data)
							    	<span>{!! $data['title'] !!}</span><br>
							    @endforeach
							    
							    <br>
							    
							    @if($arrFirst)
							    	<span style="color:red;"><a href="http://stage-demo.local/search/?<?=$myData['documentList']['pagination']['firstPage']['query']?>">FÖRSTA</a></span>
							    @else
							    	<span style="color:#eeeeee;">FÖRSTA</span>
							    @endif
							    
							    @if($arrPrev)
							    	<span style="color:red;"><a href="http://stage-demo.local/search/?<?=$myData['documentList']['pagination']['previousPage']['query']?>">FÖREGÅENDE</a></span>
							    @else
							    	<span style="color:#eeeeee;">FÖREGÅENDE</span>
							    @endif
							    
							    <span>
							    	<span>&nbsp;</span>
								    @foreach ($myData['documentList']['pagination']['pages'] as $pages)
								    	@if($pages['selected'] == 1)
								    	<span style="color:red;font-weight:bold;"><a href="http://stage-demo.local/search/?<?=$pages['query']?>">{!! $pages['displayName'] !!}</a></span>
									    @else
										<span><a href="http://stage-demo.local/search/?<?=$pages['query']?>">{!! $pages['displayName'] !!}</a></span>
									    @endif
								    @endforeach
							    	<span>&nbsp;</span>
							    </span>
							    
							    @if($arrNext)
							    	<span style="color:red;"><a href="http://stage-demo.local/search/?<?=$myData['documentList']['pagination']['nextPage']['query']?>">NÄSTA</a></span>
							    @else
							    	<span style="color:#eeeeee;">NÄSTA</span>
							    @endif
							    
							    @if($arrLast)
							    	<span style="color:red;"><a href="http://stage-demo.local/search/?<?=$myData['documentList']['pagination']['lastPage']['query']?>">SISTA</a></span>
							    @else
							    	<span style="color:#eeeeee;">SISTA</span>
							    @endif
							
							</div>
						
						</main>
					</div>

				</div>
			</div>
		</div>	
	</div>
@endsection
