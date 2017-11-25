@extends('layouts.app')

@section('title')

	Get started with our impecable cleaning services | Basic cleaning, Deep cleaning, Moving In/Out an apartment, Club Cleaning, Office Cleaning | Need a maid in London, Essex or Kent? | Looking for a quality cleaning service? | Professional cleaning service in London, Essex, Kent | Book a cleaner online now..

@stop

@section('navbar')

	@include('partials._external_navbar')

@stop

@section('menu-toggle')

	@include('partials._external_menu_toggle')

@stop

@section('content-1')

	    <br>
    <div id="services"  class="section-cotent">
        <div class="container">
            <div class="title-section text-center">
                <h2>Get Started</h2>
                <span></span>
            </div> <!-- /.title-section -->
            <div class="row">
                <div class="col-md-12 col-sm-8">
                    <div class="text-justify">
                        <span>We are glad you have choosen to start a cleaning service with us. Please fill the form below and we shall get back to you soonest. And perhaps you want to discuss your requirement with us? <a href="{{ url('/#contact') }}">Leave us a message</a> and we shall get back to you soonest or simply call us now <span> <a href="phone:8298494723878"> &nbsp;<i class="fa fa-phone"></i>074 1106 8666</a></span> .</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-sm-8">
                    <div class="request-form">

                        <div class="form-header">   
                            <h3>Service Request Form</h3>
                            <p class="alert-info"> * All fields are required</p>
                        </div>

                        {!! Form::open(['url' => 'Get-Started']) !!}

                            @include('partials._contact_info')

                            @include('partials._service_info')
                            

                            <div class="form-group">
                                {!! Form::submit('Send request', ['class' => 'btn btn-primary']) !!}
                            </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/custom_amd.js"></script>

@stop