<?php
/**
 * Title: Mision
 * Slug: block-theme/front-mision
 * Categories: desco
 * Description: A layout with a title, content and a image in the left column.
 *
 * @package BlockTheme
 */

?>
<!-- wp:group {"metadata":{"categories":["Desco"],"patternName":"descotheme/front-mision","name":"Mision"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"0px"}},"backgroundColor":"light-grey","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-light-grey-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"textColor":"primary","fontSize":"h2"} -->
<h2 class="wp-block-heading has-text-align-left has-primary-color has-text-color has-h-2-font-size" style="margin-bottom:var(--wp--preset--spacing--60);font-style:normal;font-weight:700"><strong>Nuestra misión fundamental es</strong></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:list {"className":"is-style-desco-icon-list","fontSize":"small"} -->
<ul class="wp-block-list is-style-desco-icon-list has-small-font-size"><!-- wp:list-item {"fontSize":"paragraph"} -->
<li class="has-paragraph-font-size">Brindar apoyo a las comunidades</li>
<!-- /wp:list-item -->

<!-- wp:list-item {"fontSize":"paragraph"} -->
<li class="has-paragraph-font-size">Atención integral a la familia</li>
<!-- /wp:list-item -->

<!-- wp:list-item {"fontSize":"paragraph"} -->
<li class="has-paragraph-font-size">Salud</li>
<!-- /wp:list-item -->

<!-- wp:list-item {"fontSize":"paragraph"} -->
<li class="has-paragraph-font-size">Formación y capacitación</li>
<!-- /wp:list-item -->

<!-- wp:list-item {"fontSize":"paragraph"} -->
<li class="has-paragraph-font-size">Fomentamos la cultura, el deporte y la recreación</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"5px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/img-mision.webp" alt="" style="border-radius:5px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->