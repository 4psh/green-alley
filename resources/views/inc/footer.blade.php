<footer class="section footer-section bg-secondary">
    <!-- Footer Top Start -->
    <div class="footer-top">
        <div class="container">
            <footer class="text-center text-white">
                <!-- Grid container -->
                <div class="container p-4 pb-0">
                    <!-- Section: Social media -->
                    <section class="mb-4 social">
                        @foreach($social as $soc)
                            <a class="btn btn-outline-light btn-floating m-1" href="{{ $soc->link }}"
                               role="button"><i class="fab fa-{{ $soc->name }}"></i></a>
                        @endforeach
                    </section>
                    <!-- Section: Social media -->
                </div>
                <!-- Grid container -->
            </footer>
        </div>
    </div>
    <!-- Footer Top End -->

    <!-- Footer Bottom Start -->
    <div class="container">
        <div class="row align-items-center footer-bottom">
            <div class="col-12 text-center">
                <div class="copyright-content">
                    <p class="mb-0">Copyright © 2021 GreenAlley. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom End -->
</footer>

<!-- Scroll Top Start -->
<a href="#top" class="scroll-top" id="scroll-top">
    <i class="arrow-top fa fa-long-arrow-up"></i>
    <i class="arrow-bottom fa fa-long-arrow-up"></i>
</a>
