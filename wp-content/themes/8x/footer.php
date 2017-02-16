    <?php if(!is_404() && !is_page('under-construction')): ?>
    <footer class="container-fluid black-bg">
        <div class="container ptb_40">
            <div class="col-lg-6 right wow fadeInRight">
                <div class="social">
                    <a href="#" target="_blank"><i class="icon-twitter"></i></a>
                    <a href="#" target="_blank"><i class="icon-facebook"></i></a>
                    <a href="#" target="_blank"><i class="icon-dribbble"></i></a>
                    <a href="#" target="_blank"><i class="icon-linkedin"></i></a>
                    <a href="#" target="_blank"><i class="icon-flickr"></i></a>
                </div>
            </div>

            <div class="col-lg-6 left m-center  wow fadeInLeft">© 2013-<?=date('Y')?> - All Rights Reserved <a href="#" target="_blank">Stir Ad.</a></div>

        </div>
    </footer>
    <?php endif; ?>

</div><!-- Page Wrapper End -->

<?php wp_footer(); ?>
</body>
</html>