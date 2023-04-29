@extends('layouts.website')

@section('title', 'MoozaCash - Money Transfer and Online Payments')
@section('description', 'This professional design html template is for build a Money Transfer and online payments website.')

@section('content')
    <!-- Send Money
    ============================================= -->
    <section class="hero-wrap">
        <div class="hero-mask opacity-7 bg-dark"></div>
        <div class="hero-bg" style="background-image:url('images/bg/image-6.jpg');"></div>
        <div class="hero-content d-flex flex-column fullscreen-with-header">
            <div class="container my-auto py-5">
                <div class="row">
                    <div class="col-lg-6 col-xl-7 my-auto text-center text-lg-start pb-5 pb-lg-0">
                        <h2 class="text-17 text-white"><span class="fw-400 text-15">A better way to</span> <br>
                            Send Money</h2>
                        <p class="text-4 text-white mb-4"> Send money with a better exchange rate and avoid excessive
                            bank fees.</p>
                        <a class="btn btn-outline-light video-btn" href="#"
                           data-src="https://www.youtube.com/embed/7e90gBu4pas" data-bs-toggle="modal"
                           data-bs-target="#videoModal"><span class="text-2 me-3"><i class="fas fa-play"></i></span>See
                            How it Works</a></div>

                    <div class="col-lg-6 col-xl-5 my-auto">
                        <div class="bg-white rounded shadow-md p-4">
                            <h3 class="text-5 mb-4 text-center">Send Money</h3>
                            <hr class="mb-4 mx-n4">
                            <form id="form-send-money" method="post">
                                <div class="mb-3">
                                    <label for="youSend" class="form-label">You Send</label>
                                    <div class="input-group">
                                        <span class="input-group-text">$</span>
                                        <input type="text" class="form-control" data-bv-field="youSend" id="youSend"
                                               value="1,000" placeholder="">
                                        <span class="input-group-text p-0">
                        <select id="youSendCurrency" data-style="form-select bg-transparent border-0"
                                data-container="body" data-live-search="true"
                                class="selectpicker form-control bg-transparent" required="">
                         <option data-icon="currency-flag currency-flag-usd me-1" data-subtext="United States dollar"
                                 value="">USD</option>
                          <option data-icon="currency-flag currency-flag-aud me-1" data-subtext="Australian dollar"
                                  selected="selected" value="">AUD</option>
                          <option data-icon="currency-flag currency-flag-inr me-1" data-subtext="Indian rupee" value="">INR</option><option
                                data-icon="currency-flag currency-flag-zar me-1" data-subtext="South African rand"
                                value="">ZAR</option>

                        </select>
                        </span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="recipientGets" class="form-label">Recipient Gets</label>
                                    <div class="input-group">
                                        <span class="input-group-text">$</span>
                                        <input type="text" class="form-control" data-bv-field="recipientGets"
                                               id="recipientGets" value="1,410.06" placeholder="">
                                        <span class="input-group-text p-0">
                        <select id="recipientCurrency" data-style="form-select bg-transparent border-0"
                                data-container="body" data-live-search="true"
                                class="selectpicker form-control bg-transparent" required="">

                          <option data-icon="currency-flag currency-flag-usd me-1" data-subtext="United States dollar"
                                  value="">USD</option>
                          <option data-icon="currency-flag currency-flag-aud me-1" data-subtext="Australian dollar"
                                  selected="selected" value="">AUD</option>
                          <option data-icon="currency-flag currency-flag-inr me-1" data-subtext="Indian rupee" value="">INR</option><option
                                data-icon="currency-flag currency-flag-zar me-1" data-subtext="South African rand"
                                value="">ZAR</option>

                        </select>
                        </span>
                                    </div>
                                </div>
                                <p class="text-muted mb-1">Total fees - <span class="fw-500">7.21 USD</span></p>
                                <p class="text-muted">The current exchange rate is <span class="fw-500">1 USD = 1.42030 AUD</span>
                                </p>
                                <div class="d-grid">
                                    <button class="btn btn-primary">Continue</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Send Money End -->

    <!-- How it works
   ============================================= -->
    <section class="section bg-white">
        <div class="container">
            <h2 class="text-9 text-center"> The simple way to send money</h2>
            <p class="lead text-center mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting
                industry.</p>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="featured-box style-3">
                        <div class="featured-box-icon text-light"><span class="w-100 text-20 fw-500">1</span></div>
                        <h3>Sign Up Your Account</h3>
                        <p class="text-3">Become a register user first, then log in to your account and enter your card
                            or bank details that is required for you.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="featured-box style-3">
                        <div class="featured-box-icon text-light"><span class="w-100 text-20 fw-500">2</span></div>
                        <h3>Select Your Recipient</h3>
                        <p class="text-3">Enter your recipient's email address then add an amount with currency to send
                            securely.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="featured-box style-3">
                        <div class="featured-box-icon text-light"><span class="w-100 text-20 fw-500">3</span></div>
                        <h3>Send Money</h3>
                        <p class="text-3">After sending money, the recipient will be notified via an email when money
                            has been transferred to their account.</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-3"><a href="#" class="btn btn-outline-primary shadow-none text-uppercase">Sign up
                    Now</a></div>
        </div>
    </section>
    <!-- How it works End -->

    <!-- Why choose us
    ============================================= -->
    <section class="section">
        <div class="container">
            <h2 class="text-9 text-center">Why choose payyed?</h2>
            <p class="lead text-center mb-5">Here’s Top 4 reasons why using a Payyed account for manage your money.</p>
            <div class="row gy-4">
                <div class="col-md-6">
                    <div class="hero-wrap section h-100 p-5 rounded">
                        <div class="hero-mask rounded opacity-6 bg-dark"></div>
                        <div class="hero-bg rounded" style="background-image:url('./images/bg/image-6.jpg');"></div>
                        <div class="hero-content">
                            <h2 class="text-6 text-white mb-3">Why Payyed?</h2>
                            <p class="text-light mb-5">Lisque persius interesset his et, in quot quidam persequeris vim,
                                ad mea essent possim iriure. Mutat tacimates id sit. Ridens mediocritatem ius an, eu nec
                                magna imperdiet.</p>
                            <h2 class="text-6 text-white mb-3">Send Money with Payyed</h2>
                            <p class="text-light">Lisque persius interesset his et, in quot quidam persequeris vim, ad
                                mea essent possim iriure. Mutat tacimates id sit. Ridens mediocritatem ius an, eu nec
                                magna imperdiet.</p>
                            <p class="text-light mb-0">Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                shoreditch et.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="featured-box style-1">
                        <div class="featured-box-icon text-primary"><i class="far fa-check-circle"></i></div>
                        <h3>Easy and Convenient</h3>
                        <p>MoozaCash provides a simple and user-friendly platform for making payments and managing your
                            finances. Our app and website are designed to be easy to use, so you can quickly and
                            securely make payments anytime, anywhere.</p>
                    </div>
                    <div class="featured-box style-1">
                        <div class="featured-box-icon text-primary"><i class="far fa-check-circle"></i></div>
                        <h3>Fast and Secure</h3>
                        <p>MoozaCash uses the latest encryption and security technologies to protect your personal and
                            financial information. We take security seriously and are committed to keeping your data
                            safe.</p>
                    </div>
                    <div class="featured-box style-1">
                        <div class="featured-box-icon text-primary"><i class="far fa-check-circle"></i></div>
                        <h3>Low Fees</h3>
                        <p>We believe in offering our customers fair and transparent pricing. Our fees are some of the
                            lowest in the industry, and we don't charge any hidden fees or commissions.</p>
                    </div>
                    <div class="featured-box style-1">
                        <div class="featured-box-icon text-primary"><i class="far fa-check-circle"></i></div>
                        <h3>Wide Acceptance</h3>
                        <p>MoozaCash is accepted by thousands of merchants and businesses across the world. You can use
                            MoozaCash to pay for everything from groceries to online shopping, and even to send money to
                            friends and family.</p>
                    </div>
                    <div class="featured-box style-1">
                        <div class="featured-box-icon text-primary"><i class="far fa-check-circle"></i></div>
                        <h3>Rewards and Cashback</h3>
                        <p>We offer various rewards and cashback programs to our customers. By using MoozaCash, you can
                            earn rewards and cashback on your transactions, making it an excellent way to save
                            money.</p>
                    </div>
                    <div class="featured-box style-1">
                        <div class="featured-box-icon text-primary"><i class="far fa-check-circle"></i></div>
                        <h3>24/7 Customer Support</h3>
                        <p>Our customer support team is available 24/7 to help you with any questions or issues you may
                            have. Whether you need assistance with a transaction or have a general question about our
                            services, we're here to help.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Why choose us End -->
@endsection
