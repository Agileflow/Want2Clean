@extends('layouts.app')

@section('title')

	 Frequently Asked Questions concerning our domestic and commercial cleaning, Want 2 Clean Cleaning Services | Basic cleaning, Deep cleaning, Moving In/Out an apartment, Club Cleaning, Office Cleaning | Need a maid in London, Essex or Kent? | Looking for a quality cleaning service? | Professional cleaning service in London, Essex, Kent | Book a cleaner online now..

@stop

@section('navbar')

	@include('partials._external_navbar')

@stop

@section('menu-toggle')

	@include('partials._external_menu_toggle')

@stop

@section('content-1')
    
    <br>
    <style type="text/css">
        
        .service-header span {
            padding-left: 0.5%;
        }
        .service-header h4 {
            font-size: 1.3em;
            font-weight: 600;
        }

    </style>
    
    <div id="services"  class="section-cotent">
        <div class="container">
            <div class="title-section text-center">
                <h2>Frequently Asked Questions</h2>
                <span></span>
            </div> <!-- /.title-section -->
            <!-- <div class="row">
                <div class="col-md-12 col-sm-8">
                    <div class="text-justify">
                        <span>
                            We've tried to provide some helpful tips for tackling those difficult stains and awkward cleaning jobs. If you have any tips not covered here that you'd like to share please send them to us, our email address is at the bottom of this page. If you're going on holiday, try pouring some baking soda down your drains and plug holes before you go away to keep them smelling fresh for your return.
                        </span>
                    </div>
                </div>
            </div> -->
            <div class="row">
                <div class="col-md-12 col-sm-6">
                    <div class="service-item">
                        <div class="service-header text-justify">
                            <h4><i class="fa fa-chevron-right"></i> Do I meet my cleaner before the first clean?</h4>
                            <span>
                                Of course! We know the cleaner will be in your home and that personalities are often as important as cleaning standards. Once we choose a cleaner for you, we'll arrange for them to come along and meet you so that you can approve our choice and discuss the cleaning tasks you require. It's important that your cleaner is someone you like so there's no need to agree to the first person we send you. Once you're satisfied that we've sent the right person for you, you can then mutually arrange a regular clean day and time.
                            </span>
                        </div>
                    </div> <!-- /.service-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-12 col-sm-6">
                    <div class="service-item">
                        <div class="service-header text-justify">
                            <h4><i class="fa fa-chevron-right"></i> Will I have to be at home when my cleaner cleans?</h4>
                            <span>
                                No, our cleaners are vetted and are happy to hold your house keys. We will provide you with a Key Acknowledgement Form for your cleaner to sign.
                            </span>
                        </div>
                        
                    </div> <!-- /.service-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-12 col-sm-6">
                    <div class="service-item">
                        <div class="service-header text-justify">
                            <h4><i class="fa fa-chevron-right"></i> Can I change my cleaner if I am not happy?</h4>
                            <span>
                                Yes, of course, we have a large and varied cleaner base and we'd be happy to assign you someone different if you are unhappy for any reason. Just give us a call.
                            </span>
                        </div>
                    </div> <!-- /.service-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-12 col-sm-6">
                    <div class="service-item">
                        <div class="service-header text-justify">
                            <h4><i class="fa fa-chevron-right"></i> How do you vet the cleaners?</h4>
                            <span>
                                We first carry out a telephone interview. If the applicant seems suitable we then arrange for a more thorough interview to take place in their own home. Only after taking proof of ID and address along with references do we accept them onto our database. We then monitor every cleaner thoroughly for the whole time they are with us.
                            </span>
                        </div>
                    </div> <!-- /.service-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-12 col-sm-6">
                    <div class="service-item">
                        <div class="service-header text-justify">
                            <h4><i class="fa fa-chevron-right"></i> What if my cleaner can't make it, or is sick?</h4>
                            <span>
                                We would have been notified by the cleaner and we will provide you with a cleaner to cover.
                            </span>
                        </div>
                        
                    </div> <!-- /.service-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-12 col-sm-6">
                    <div class="service-item">
                        <div class="service-header text-justify">
                            <h4><i class="fa fa-chevron-right"></i> Do I have to supply cleaning materials?</h4>
                            <span>
                                Yes, our cleaners do not carry their own materials as the majority of our clients prefer to specify the substances used in their homes. Please be aware that due to health and safety bleach is a banned substance.
                            </span>
                        </div>
                    </div> <!-- /.service-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-12 col-sm-6">
                    <div class="text-justify">
                        <span>
                            If you have any question not covered here that you'd want answer, please send it to us via the <a href="{{ url('/#contact') }}">contact page</a> specifying the subject as 'Question'.
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/custom_amd.js"></script>

@stop