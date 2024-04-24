<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Sirdaryo biznes va texnologiyalar universiteti</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
    <meta name="keywords" content="Saas, Software, multi-uses, HTML, Clean, Modern" />
    <meta name="author" content="Shreethemes" />
    <meta name="email" content="support@shreethemes.in" />
    <meta name="website" content="https://shreethemes.in" />
    <meta name="Version" content="v3.8.0" />
    <!-- favicon -->
    @yield('css')

</head>

<body  @if(Session::has('message'))
onload="onload1()"
@endif>
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- Loader -->

    @yield('menu')

    <!-- Hero Start -->
    @yield('hero')
    <!-- Hero End -->
    @if(Session::has('message'))
                <button onclick="javascript:void(0)" id="message" data-bs-toggle="modal" data-bs-target="#empty-cart" class="btn btn-primary m-1 d-none">OK</button>
                    <!-- Wishlist Popup Start -->
                    <div class="modal fade" id="empty-cart" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content rounded shadow border-0">
                                <div class="modal-body py-5">
                                    <div class="text-center">
                                        <img src="/assets/images/icon/chat.png" class="avatar avatar-large" alt="">
                                        <div class="mt-4">
                                            <h4> {!!Session::get('message')!!} </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Wishlist Popup End -->
    @endif
    <!-- Start -->
        <!-- Communiaction Priority Start -->
@yield('container')
        <!-- Communiaction Priority End -->
@yield('footer')


        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fs-5"><i data-feather="arrow-up" class="fea icon-sm icons align-middle"></i></a>
        <!-- Back to top -->


@yield('js')

<script type="text/javascript">
    function onload1()
    {
        document.getElementById("message").click(); // Simulates button click
    }
</script>

</body>

</html>
