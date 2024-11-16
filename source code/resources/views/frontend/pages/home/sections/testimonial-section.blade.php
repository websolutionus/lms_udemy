<section class="wsus__testimonial pt_120 xs_pt_80">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 m-auto wow fadeInUp">
                <div class="wsus__section_heading mb_40">
                    <h5>Testimonial</h5>
                    <h2>See what your students say</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row testimonial_slider">
        @foreach ($testimonials as $testimonial)
            <div class="col-xl-4 wow fadeInUp">
                <div class="wsus__single_testimonial">
                    <p class="rating">
                        @for ($i = 1; $i <= $testimonial->rating; $i++)
                            <i class="fas fa-star"></i>
                        @endfor

                    </p>
                    <p class="description">{{ $testimonial->review }}</p>

                    <div class="wsus__testimonial_footer">
                        <div class="img">
                            <img src="{{ asset($testimonial->user_image) }}" alt="user" class="img-fluid">
                        </div>
                        <h3>
                            {{ $testimonial->user_name }}
                            <span>{{ $testimonial->user_title }}</span>
                        </h3>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
