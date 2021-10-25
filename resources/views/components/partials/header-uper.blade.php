<section class="header-uper">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-4 col-lg-3">
                <div class="logo">
                    <a href="#">
                        <img loading="lazy" height="80" class="" src="{{ asset('theme/images/bsncargo.png') }}" alt="logo">
                    </a>
                </div>
            </div>
            <div class="col-xl-8 col-lg-9">
                <div class="right-side">
                    <ul class="contact-info pl-0 mb-4 mb-md-0">
                        <li class="item text-left">
                            <a href="mailto:{{ $mail }}">
                                <div class="icon-box border border-primary">
                                    <i class="far fa-envelope text-primary"></i>

                                </div>
                                <strong>Email</strong>
                                <br>
                                <span>{{ $mail }}</span>
                            </a>
                        </li>
                        <li class="item text-left text-success">
                            <a href="https://wa.me/{{ $whatsapp }}" target="_blank">
                                <div class="icon-box border border-success">
                                    <i class="fab fa-whatsapp text-success"></i>
                                </div>
                                <strong>Whatsapp</strong>
                                <br>
                                <span>{{ $whatsapp }}</span>
                            </a>
                        </li>
                    </ul>
                    <div class="link-btn text-center text-lg-right">
                        <a href="contact" class="btn-style-one">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>