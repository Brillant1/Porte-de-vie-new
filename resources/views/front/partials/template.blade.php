<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from demo.themefisher.com/biztrox/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Apr 2022 11:40:26 GMT -->
<head>
  <meta charset="utf-8">
  <title>PORTE DE VIE</title>

  @include('front.partials.css')

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


</head>

<body>


<!-- preloader start -->
<div class="preloader">
    <img src="{{ asset('front/images/preloader.gif') }}" alt="preloader">
</div>
<!-- preloader end -->
@include('front.partials.header')

@yield('content')

@include('front.partials.footer')


@include('front.partials.js')

</body>

<!-- Mirrored from demo.themefisher.com/biztrox/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Apr 2022 11:40:26 GMT -->
</html>
