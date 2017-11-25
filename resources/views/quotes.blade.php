@extends('layouts.app')

@section('title')

	 Request for a quote for domestic and commercial cleaning with Want 2 Clean Cleaning Services | Basic cleaning, Deep cleaning, Moving In/Out an apartment, Club Cleaning, Office Cleaning | Need a maid in London, Essex or Kent? | Looking for a quality cleaning service? | Professional cleaning service in London, Essex, Kent | Book a cleaner online now..

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
                <h2>Requesting Quote</h2>
                <span></span>
            </div> <!-- /.title-section -->
            <div class="row">
                <div class="col-md-12 col-sm-8">
                    <div class="text-justify">
                        <span>When it comes to providing cleaning service, customers want honesty and reliability. At W2C, we use well trained cleaners who we totally trust. When we appoint you a cleaner you will get a chance to meet to discuss cleaning arrangements before work commences. The same person will then become your regular cleaner, week in, week out, meaning we have your cleaning sevice covered. <br>If you have any question? <a href="{{ url('/#contact') }}"> Leave us a message</a> and we shall get back to you soonest or simply call us now <span> <a href="phone:8298494723878"> &nbsp;<i class="fa fa-phone"></i> 074 1106 8666</a></span> .</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-sm-8">
                    <div class="request-form">

                        <div class="form-header">   
                            <h3>Quote ({{ $service}})</h3>
                            <p class="alert-info"> * All fields are required</p>
                        </div>

                        {!! Form::open(['url' => 'Request-Quote']) !!}

                            @include('partials._contact_info')

                            <div class="form-segment">
                                Service Information
                            </div>

                            <div class="form-group">
                                {!! Form::label('requested', 'What service would you like to get?') !!} ( &lt;i class=&quot;fa fa-wrench&quot;&gt;&lt;/i&gt; find our services descriptions <a href="{{ url('/#services') }}">here</a>)
                                {!! Form::select('requested', ['', 'Basic cleaning', 'Deep cleaning', 'Moving In/Out', 'Club Cleaning','Office Cleaning', 'After-party Clean-Up', 'One-Day Service'], $service, ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('hours', 'How many hours?') !!}
                                {!! Form::input('number', 'hours', '0', ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('services_day', 'When do you want the service?') !!}
                                {!! Form::input('date', 'service_day', '', ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('period', 'What duration would you want this service?') !!}
                                {!! Form::select('period', ['', 'Once', 'Daily', 'Bi-Weekly', 'Weekly', 'Monthly', 'Other'], null, ['class' => 'form-control']) !!}
                            </div>
                            
                            <div class="form-group">
                                {!! Form::submit(' Request Quote', ['class' => 'btn btn-primary']) !!}
                            </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/custom_amd.js"></script>

@stop