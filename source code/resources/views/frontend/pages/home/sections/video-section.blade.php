<section class="wsus__video mt_120 xs_mt_100">
    <img src="{{ asset($video?->background) }}" alt="Video" class="img-fluid w-100">
    <a class="play_btn venobox" data-autoplay="true" data-vbtype="video"
        href="{{ $video?->video_url}}">
        <img src="{{ asset('frontend/assets/images/play_icon_white.png') }}" alt="Play" class="img-fluid">
    </a>
    <div class="text wow fadeInLeft">
        <p>{{ $video?->description }}</p>
        <a href="{{ $video?->button_url }}">{{ $video?->button_text }} <i class="far fa-arrow-right"></i></a>
    </div>
</section>