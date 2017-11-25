@extends('layouts.app')

@section('title')

	Want 2 Clean Cleaning Services - Need a maid in London, Essex or Kent? | Looking for a domestic quality cleaning service? | Professional cleaning service in London, Essex, Kent | Basic cleaning, Deep cleaning, Moving In/Out an apartment | Residential cleaning service in London, Essex, Kent We let you take a rest while we do the cleaning | Invest in your free time with our service | Book a cleaner online now..

@stop

@section('navbar')

	@include('partials._id_navbar')

@stop

@section('menu-toggle')

	@include('partials._id_menu_toggle')

@stop

@section('content-1')

	@include('partials._flex_slider')

@stop

@section('content-2')

	@include('partials._services')

@stop


@section('content-3')

	@include('partials._services_desc')

@stop

@section('content-4')

	@include('partials._rotation_basis')

@stop

@section('content-5')

	@include('partials._about_us')

@stop

@section('content-6')

	@include('partials._contact_us')

@stop