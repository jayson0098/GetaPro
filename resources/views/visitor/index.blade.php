@extends('template.launching')
@section('content')

  <div class="headerbg">
        <div class="container">
            <div class="row">
                <div class="col-md-2 headerlogo">
                </div>
                <div class="col-md-4 companytitle">
                    <h1>GET A PRO</h1>
                </div>
            </div>

            <h2 class="tagline">&#8220;GET THINGS DONE&#8221;</h2>
            <div class="paragraph-container">
                <p class="header-paragraph">There are millions of jobless people in the Philippines but there are also millions of jobs available</p>
                <p class="header-paragraph">The problem is that employers do not have a proper means of connecting with qualified professionals</p>
                <p class="header-paragraph">That's where we come in.</p>
            </div>
            <h3 class="coming-soon-text">Coming soon! Subscribe to us for updates</h3>
            <div class="row">
                <div class="col-md-6 col-md-offset-3 subscribe-container">
                    <div class="row">
                    {!! Form::open(['url'=>'subscribe','id'=>'sign-up','class'=>''])!!}
                        <div class="col-md-8 input-email">
                      		{!! Form::text('email', null, ['id' => 'user-email'])!!}
                        </div>
                        <div class="col-md-4 submit-email">
                        	{!! Form::submit('Subscribe',['class'=>''])!!}
                        </div>
                    {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="center-content">
        <div class="container">
             <h1 class="introducing-text">introducing</h1>
             <div class="row">
                <div class="col-md-6 col-md-offset-3 content-container">
                    <div class="row">
                        <div class="col-md-4 content-logo">
                            <img src="images/content-logo.png">
                        </div>
                        <div class="col-md-8 content-title">
                            <h4>get a pro</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-links">
                <div class="row">
                    <div class="col-md-6">
                       <div class="row">
                           <div class="col-md-3">
                                <img src="images/hiring-icon.png">
                           </div>
                           <div class="col-md-9">
                               <h5 class="link-title">get your job out there</h5>
                                <p class="link-description">Create a customized job posting in our system</p>
                                <p class="link-description">for millions of people to see and apply to.</p>
                           </div>
                       </div>

                    </div>
                    <div class="col-md-6">
                        <div class="row">
                           <div class="col-md-3">
                                <img src="images/profession-icon.png">
                           </div>
                           <div class="col-md-9">
                               <h5 class="link-title">connect with professionals</h5>
                                <p class="link-description">find the right professionals for you job,get in touch</p>
                                <p class="link-description">with millions of qualified professionals through our</p>
                                <p class="link-description">automated system</p>
                           </div>
                       </div>
                    </div>
                </div>
            </div>
            <div class="container-links">
                <div class="row">
                    <div class="col-md-6">
                       <div class="row">
                           <div class="col-md-3">
                                <img src="images/payment-icon.png">
                           </div>
                           <div class="col-md-9">
                               <h5 class="link-title">easy payment scheme</h5>
                                <p class="link-description">pay with ease, choose from a wide variety</p>
                                <p class="link-description">of payment methods. we offer both online</p>
                                <p class="link-description">and offline payment options.</p>
                           </div>
                       </div>

                    </div>
                    <div class="col-md-6">
                        <div class="row">
                           <div class="col-md-3">
                                <img src="images/mobile-icon.png">
                           </div>
                           <div class="col-md-9">
                               <h5 class="link-title">web and mobile support</h5>
                                <p class="link-description">access and use our system from anyware, both</p>
                                <p class="link-description">on mobile and web.</p>

                           </div>
                       </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="what-were-about-container">
        <div class="container">
            <h1 class="what-text">what we&#8217;re about</h1>
            <div class="what-where-link-container">
             <div class="col-md-4 ww-container">
                 <img src="images/people.png">
                  <p class="what-where-description">were all about helping people</p>
             </div>
             <div class="col-md-4 ww-container">
                  <img class="brain-image" src="images/idea.png">
                  <p class="what-where-description">we make complex things simple</p>
             </div>
             <div class="col-md-4 ww-container">
                 <img src="images/play.png">
                <p class="what-where-description">we make serious work fun</p>
             </div>
            </div>
        </div>

    </div>

    <div class="our-team-container">
       <div class="container">
            <h2 class="our-team-text">our team</h2>

            <div class="team-image-container">
               <div class="row">
                   <div class="col-md-10 col-md-offset-2">
                         <div class="row">
                           <div class="col-md-6">
                                <img class="team-image" src="images/-ceo.png">
                                <h4 class="team-title-ceo">ceo</h4>
                                <p class="team-name">Roxelle Minoza</p>
                           </div>
                           <div class="col-md-6">
                                <img class="team-image" src="images/creative-director.png">
                                <h4 class="team-title-creative">creative director</h4>
                                <p class="team-name">Sanju Chugani</p>
                           </div>

                        </div>
                   </div>
               </div>

            </div>

            <div class="team-image-container">
               <div class="row">
                   <div class="col-md-10 col-md-offset-2">
                         <div class="row">
                           <div class="col-md-6">
                                <img class="team-image" src="images/lead-developer.png">
                                <h4 class="team-title-creative">leade developer</h4>
                                <p class="team-name">Daniel Laurel</p>
                           </div>
                           <div class="col-md-6">
                                <img class="team-image" src="images/web-dev.png">
                                <h4 class="team-title-web">web developer</h4>
                                <p class="team-name">Jayson Alanano</p>
                           </div>

                        </div>
                   </div>
               </div>

            </div>
            <div class="team-image-container">
               <div class="row">
                   <div class="col-md-10 col-md-offset-2">
                         <div class="row">
                           <div class="col-md-6">
                                <img class="team-image" src="images/mobile-dev.png">
                                <h4 class="team-title-creative">mobile developer</h4>
                                <p class="team-name">Erwin Anora</p>
                           </div>
                           <div class="col-md-6">
                                <img class="team-image" src="images/mobile-dev2.png">
                                <h4 class="team-title-creative">mobile developer</h4>
                                <p class="team-name">Richtone Hangad</p>
                           </div>

                        </div>
                   </div>
               </div>

            </div>

       </div>

    </div>


@endsection
