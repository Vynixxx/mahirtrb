<!-- Testimonials Section -->
<section id="testimonials" class="testimonials section dark-background">

<img src="assets/img/testimonials-bg.jpg" class="testimonials-bg" alt="">

<div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="swiper init-swiper">
    <script type="application/json" class="swiper-config">
        {
        "loop": true,
        "speed": 600,
        "autoplay": {
            "delay": 5000
        },
        "slidesPerView": "auto",
        "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
        }
        }
    </script>
    <div class="swiper-wrapper">

        <div class="swiper-slide">
        <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-80.png" class="testimonial-img" alt="">
            <h3>{{ __('msg.testimonial_1_name') }}</h3>
            <h4>{{ __('msg.testimonial_1_role') }}</h4>
            <div class="stars">
            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
            <i class="bi bi-quote quote-icon-left"></i>
            <span>{{ __('msg.testimonial_1_text') }}</span>
            <i class="bi bi-quote quote-icon-right"></i>
            </p>
        </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
        <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-7.png" class="testimonial-img" alt="">
            <h3>{{ __('msg.testimonial_2_name') }}</h3>
            <h4>{{ __('msg.testimonial_2_role') }}</h4>
            <div class="stars">
            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
            <i class="bi bi-quote quote-icon-left"></i>
            <span>{{ __('msg.testimonial_2_text') }}</span>
            <i class="bi bi-quote quote-icon-right"></i>
            </p>
        </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
        <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-20belas.png" class="testimonial-img" alt="">
            <h3>{{ __('msg.testimonial_3_name') }}</h3>
            <h4>{{ __('msg.testimonial_3_role') }}</h4>
            <div class="stars">
            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
            <i class="bi bi-quote quote-icon-left"></i>
            <span>{{ __('msg.testimonial_3_text') }}</span>
            <i class="bi bi-quote quote-icon-right"></i>
            </p>
        </div>
        </div><!-- End testimonial item -->

    </div>
    <div class="swiper-pagination"></div>
    </div>

</div>

</section><!-- /Testimonials Section -->