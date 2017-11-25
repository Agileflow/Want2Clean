    <div id="contact" class="section-cotent">
        <div class="container">
            <div class="title-section text-center">
                <h2>Get In Touch</h2>
                <span></span>
            </div> <!-- /.title-section -->
            <div class="row">
                <div class="col-md-7 col-sm-6">
                    <div class="form-header">   
                        <h3>Leave Us a Message</h3>
                        <p class="alert-info"> * All fields are required</p>
                    </div><br>
                    {!! Form::open(['url' => 'contact']) !!}
                        <div class="form-group">
                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => '👨 Your name']) !!}
                        </div>
<!-- 👦📨📩 -->
                        <div class="form-group">
                            {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => '📧 Email or Phone number']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::text('subject', null, ['class' => 'form-control', 'placeholder' => 'Subject']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Message']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit(' Send', ['class' => 'btn btn-primary']) !!}
                        </div>

                    {!! Form::close() !!}

                    <!-- <div class="row">
                        <div class="single_box">
                            <div class="icon_box">
                                <img src="images/rest.jpg">
                            </div>
                            <div class="body">
                                <h3>Take a Rest While We Do Our Best!</h3>
                                <span>Get started <a href="#">here</a> now or simple give us a call.<br><span><a href="#"></a></span></span><br>
                                <button class="btn btn-primary"><a href="#"><i class="fa fa-2x fa-phone"></i> <span style="font-size: 1.5em"> 010 020 0340</span></a></button>
                            </div>
                        </div>
                    </div> -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-5 col-sm-6">
                    <h4 class="widget-title">Find Us</h4>
                    <div class="map-holder">
                        <div class="google-map-canvas" id="map-canvas" style="height: 250px;">
                        </div>
                    </div> <!-- /.map-holder -->
                    <div class="contact-info">
                        We have hundreds of cleaners providing cleaning services in the following coverage areas;
                          <ul>
                            <li><i class="fa fa-hand-o-right"></i> London</li>
                            <li><i class="fa fa-hand-o-right"></i> Essex</li>
                            <li><i class="fa fa-hand-o-right"></i> Kent</li>
                          </ul>
                        If you can't see your area listed please contact us to see if we can still reach you.
                    
                        <span><a href="#"><i class="fa fa-4x fa-map-marker"></i> 4, Garner Court, Dunlop Road, Tilbury </a></span>
                        <span><a href="phone:074 1106 8666"><i class="fa fa-4x fa-mobile"></i> &nbsp;074 1106 8666 </a></span>
                        <span><a href="mailto:info@want2clean.co.uk"><i class="fa fa-4x fa-envelope"></i>info@want2clean.co.uk </a></span>
                    </div>
                </div> <!-- /.col-md-3 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /#contact -->
    
    <script src="js/custom.js"></script>