@extends ('frontend.layouts.app')
@section('content')

  <!-- Event -->
  <section class="overlay_bg_50">
    <div class="pager-header">
        <div class="container">
            <div class="page-content">
                <h2>Contact Us</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('homepage')}}">Home</a></li>
                    <li class="breadcrumb-item active">Contact Us</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- /Page Header -->

<section class="contact-section padding">
    <div class="container">
        <div class="section-heading text-center mb-40">
            <h2>Contact Us</h2>
        </div>
        <div class="row contact-wrap">
            <div class="col-md-6 xs-padding">
                <div class="contact-info">
                    <h3>Get in touch</h3>
                    <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                    <p>The secret to happiness lies in helping others. Never underestimate the difference.</p>
                    <ul>
                        <li><i class="ti-location-pin"></i> 315 West 33rd Street New York, NY 10001</li>
                        <li><i class="ti-mobile"></i> +1 212 425 8617, +1 212 425 8533</li>
                        <li><i class="ti-email"></i> Youremail@companyname.com</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 xs-padding">
                <div class="contact-form">
                    <h3>Drop us a line</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <form action="contact.php" method="post" id="ajax_form" class="form-horizontal">
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
                                <textarea id="message" name="message" cols="30" rows="5" class="form-control message" placeholder="Message" required></textarea>
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
</section><!-- /Contact Section -->

@endsection

