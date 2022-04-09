<footer class="pk-footer" style="background-image: url(<?php the_field('footer_bg', 'option'); ?>)">
    <div class="container-default">
        <div class="row d-flex flex-wrap justify-content-between">
            <div class="col-lg-8">
                <div class="d-flex flex-wrap justify-content-lg-between justify-content-md-around justify-content-center">
                    <?php
                    if (have_rows('footer_menu', 'option')):
                        while (have_rows('footer_menu', 'option')) :
                            the_row(); ?>
                            <?php the_sub_field('menu', 'option'); ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex justify-content-center social">
                    <?php if (get_field('facebook', 'option')): ?>
                        <a href="<?php the_field('facebook', 'option'); ?>" target="_blank"><i
                                    class="icon-facebook-circled"></i></a>
                    <?php endif; ?>

                    <?php if (get_field('twitter', 'option')): ?>
                        <a href="<?php the_field('twitter', 'option'); ?>" target="_blank"><i
                                    class="icon-twitter-circled"></i></a>
                    <?php endif; ?>

                    <?php if (get_field('dribbbled', 'option')): ?>
                        <a href="<?php the_field('dribbbled', 'option'); ?>" target="_blank"><i
                                    class="icon-dribbble-circled"></i></a>
                    <?php endif; ?>

                    <?php if (get_field('linkedin', 'option')): ?>
                        <a href="<?php the_field('linkedin', 'option'); ?>" target="_blank"><i
                                    class="icon-linkedin-circled"></i></a>
                    <?php endif; ?>
                </div>
                <div class="copyright">
                    <?php if (get_field('copyright', 'option')): ?>
                        <?php the_field('copyright', 'option'); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>