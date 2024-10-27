<section class="wsus__category_4 mt_190 xs_mt_100">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 m-auto wow fadeInUp">
                <div class="wsus__section_heading mb_35">
                    <h5>Categories</h5>
                    <h2>Explore Categories</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($featuredCategories as $category)
            <div class="col-xxl-3 col-md-6 col-lg-4 wow fadeInUp">
                <a href="#" class="wsus__single_category_4">
                    <div class="icon">
                        <img src="" alt="category" class="img-fluid w-100">
                    </div>
                    <div class="text">
                        <h4>{{ $category->name }}</h4>
                        <p>{{ $category?->courses_count }} Course</p>
                    </div>
                </a>
            </div>
            @endforeach
            
        </div>
        <div class="row mt_60 wow fadeInUp">
            <div class="col-12 text-center">
                <a class="common_btn" href="#">View All Categories <i class="far fa-angle-right"
                        aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</section>