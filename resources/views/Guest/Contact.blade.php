@extends('Layouts.Index')
@section('Pages')
<div id="google-map"></div><!-- /#google-map -->
		
		<section class="contact-section bg-grey padding">
            <div class="dots"></div>
		    <div class="container">
		        <div class="contact-wrap d-flex align-items-center row">
                    <div class="col-md-6 padding-15">
		                <div class="contact-info">
		                    <h2>Get in touch with us & <br>send us message today!</h2>
		                    <p>Arkit is a different kind of architecture practice. Founded by LoganCee in 1991, we’re an employee-owned firm pursuing a democratic design process that values everyone’s input.</p>
		                    <h3>198 West 21th Street, Suite 721 <br>New York, NY 10010</h3>
		                    <h4><span>Email:</span> Dynamiclayers.Net <br> <span>Phone:</span> +88 (0) 101 0000 000 <br> <span>Fax:</span> +88 (0) 202 0000 001</h4>
		                </div>
		            </div>
		            <div class="col-md-6 padding-15">
		                <div class="contact-form">
                        @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
                            <form action="{{ route('contact.store')}}" method="POST" id="ajax_form" class="form-horizontal">
                            @csrf
                                <div class="form-group colum-row row">
                                    <div class="col-sm-6">
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Name" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <textarea id="description" name="description" cols="30" rows="5" class="form-control message" placeholder="Message" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <button id="submit" class="default-btn" type="submit">Send Message</button>
                                    </div>
                                </div>
                                <div id="form-messages" class="alert" role="alert"></div>
                            </form>
                        </div>
		            </div>
		            
		        </div>
		    </div>
		</section><!--/.contact-section-->
@endsection