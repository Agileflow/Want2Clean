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
                        <span>We are glad you have choosen to start a cleaning service with us. Please fill the form below and we shall get back to you soonest. And perhaps you want to discuss your requirement with us? <a href="{{ url('/#contact') }}">Leave us a message</a> and we shall get back to you soonest or simply call us now <span> <a href="phone:8298494723878"> <i class="fa fa-2x fa-mobile"> </i> 010 020 0340</a></span> .</span>
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

                        {!! Form::open(['url' => 'contact']) !!}

                            <div class="form-segment">
                                Contact Information
                            </div>

                            <div class="form-group">
                                {!! Form::text('firstname', null, ['id' => 'firstname', 'class' => 'form-control', 'placeholder' => '* 👦 Firstname']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::text('lastname', null, ['class' => 'form-control', 'placeholder' => '* 👪 Lastname']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => '* 📱 Phone number']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => '&nbsp;  📧 Email - something@example.com']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::text('address', null, ['class' => 'form-control', 'placeholder' => '* 🏠 Address']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::text('city', null, ['class' => 'form-control', 'placeholder' => '* ⛪ City']) !!}
                            </div>

                            <div class="form-segment">
                                Service Information
                            </div>

                            <div class="form-group">
                                {!! Form::label('requested', 'What service would you like to get?') !!} ( &lt;i class=&quot;fa fa-wrench&quot;&gt;&lt;/i&gt; find our services descriptions <a href="{{ url('/#services') }}">here</a>)
                                {!! Form::select('requested', ['', 'Basic cleaning', 'Deep cleaning', 'Moving In/Out', 'Club Cleaning','Office Cleaning', 'After-party Clean-Up', 'One-Day Service'], null, ['class' => 'form-control']) !!}
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
                                {!! Form::submit('Send request', ['class' => 'btn btn-primary']) !!}
                            </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/custom_amd.js"></script>
