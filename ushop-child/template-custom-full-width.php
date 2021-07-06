<?php
/**
 * Template Name: Custom Full Width
 *
 * @package ushop
 * @subpackage ushop
 */
get_header();
?>

<style>
.ghp-logo-wrapper {
  top: 11vh;
  position: absolute;
  width: 100vw;
  filter: drop-shadow(0.4rem 0.4rem 0.4rem rgba(33, 33, 33, 0.2));
}
.ghp-logo {
  width: 40vw;
  max-width: 635px;
  display: block;
  margin:auto
}
.ghp-hero-center {
  margin: auto;
  display: block;
}
</style>
<script>
  var myDiv = document.createElement("div");
  myDiv.classList.add("ghp-logo-wrapper");
  myDiv.innerHTML = '<img class="ghp-logo glasshousepictures-logo" src="https://glasshousepictures.com.au/wp-content/uploads/2021/06/GHP_logo_4col_solid.png" alt="Glasshouse Pictures">';
  document.querySelector(".hero-area.position-relative").appendChild(myDiv);
  document.querySelector("section.hero-area img").classList.add("ghp-hero-center");
</script>
    <main class="full-width-page">
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 margin-top">
                        <?php
                        while ( have_posts() ) : the_post();

                            get_template_part( 'template-parts/content', 'page' );

                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;

                        endwhile; // End of the loop.
                        ?>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- #main -->

<?php

get_footer();
