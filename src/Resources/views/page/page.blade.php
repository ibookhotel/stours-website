@extends('site::layouts.master')
@section('scripts_js')
<script>
	var $url_load_more = "{{route('posts.load-more')}}"
	var token = "{{ csrf_token() }}";
</script>
<script src="{{URL::asset('/modules/site/js/ajax-functions.js')}}"></script>
@endsection
@section('content')
	{{--toDO: odvojiti page layout i homePageLayou jer homepage ce imati puno opcija--}}
	@if(strtolower($title) == 'home')
		@include('site::partials.slider')
		<section class="hide">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div id= 'page-title'>
							<h2 id="h-title"><span>{{strtoupper($title)}} </span></h2>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						{!! $product->content !!}
					</div>
				</div>
			</div>
		</section>
	@else
		@include('site::partials.slider')
		@if(isset($menuMiddle))
			@include('site::partials.middle-menu')
		@endif
		<section class="hide">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div id= 'page-title'>
							<h2 id="h-title"><span>{{strtoupper($title)}} </span></h2>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						@if(isset($posts))
							@if(count($posts)>0)
								@if($page_list == true)
									@include('site::partials.page_list')
								@else
									@include('site::partials.posts')
								@endif
							@endif
						@else {!! $product->content !!}
						@endif
					</div>
				</div>
			</div>
		</section>
	@endif
		@if(isset($product->maps) and $product->maps->show_on_product)
			@include('site::partials.map')
		@endif
        @if(isset($product->settingsContact) and $product->settingsContact->show_on_product)
            @include('site::forms.contactForm')
        @endif
@endsection