<script src="{{asset('js/home/jquery.min.js')}}"></script>
<script src="{{asset('js/home/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/home/owl.carousel.js')}}"></script>
<script src="{{asset('js/home/jssor.slider-28.1.0.min.js')}}"></script>
<script src="{{asset('js/home/jssor.slider.js')}}"></script>
<script src="{{asset('js/home/fontawesome.js')}}"></script>
<script type="text/javascript">
    jssor_1_slider_init();
</script>
<script>
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        margin: 10,
        loop: true,
        autoplay: true,
        touchDrag:true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    })
</script>
<script src="{{asset('js/home/app.js')}}"></script>
@yield('js')
