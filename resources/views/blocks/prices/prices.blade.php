<section>
    <div class="container bg-carousel">
        <div class="col-12 p-5">
            <h2 class="text-white">Testimonials</h2>
        </div>
        <div class="variable-width p-5">
            <div class="px-5"
                 style="background: #FFFFFF;box-shadow: 0px 20px 0px rgba(156, 105, 226, 0.3);border-radius: 20px;width: 645px;height: 330px;">
                <img src="{{asset('image/Ellipse 76.png')}}" alt="">
                <p>John Fang</p>
                <p>UX Engineer</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad doloribus facilis necessitatibus nisi
                    repudiandae voluptate?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, rem!</p>
            </div>
            <div class="p-5 mx-2" style="background: #FFFFFF;box-shadow: 0px 20px 0px rgba(156, 105, 226, 0.3);border-radius: 20px;width: 645px;height: 330px;">
                <img src="{{asset('image/Ellipse 76 (1).png')}}" alt="">
                <p>John Fang</p>
                <p>UX Engineer</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad doloribus facilis necessitatibus nisi
                    repudiandae voluptate?</p>
            </div>
            <div>
                <img src="{{asset('image/Ellipse 76 (1).png')}}" alt="">
                <p>John Fang</p>
                <p>UX Engineer</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad doloribus facilis necessitatibus nisi
                    repudiandae voluptate?</p>
            </div>
        </div>
    </div>
</section>
@push('styles')

@endpush
@push('scripts')
    <script type="text/javascript" src="{{ asset('js/slick.min.js') }}"></script>
    <script>
        $('.variable-width').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 2,
            variableWidth: true
        });

    </script>
@endpush
