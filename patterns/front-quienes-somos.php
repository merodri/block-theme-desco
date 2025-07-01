<?php
/**
 * Title: Quienes Somos
 * Slug: block-theme/front-quienes-somos
 * Categories: desco
 * Description: A layout with a title, content and a image in the left column.
 *
 * @package BlockTheme
 */

?>
<!-- wp:group {"metadata":{"categories":["Desco"],"patternName":"descotheme/front-quienes-somos","name":"Quienes Somos"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"0px"}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-tertiary-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/img-quienes_somos.webp" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"2.5rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"textColor":"primary"} -->
<h2 class="wp-block-heading has-text-align-left has-primary-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--60);font-size:2.5rem;font-style:normal;font-weight:700">Quienes Somos</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"bottom":"25px"}},"typography":{"lineHeight":"1.5","fontSize":"1.2rem"}},"textColor":"quaternary"} -->
<p class="has-text-align-left has-quaternary-color has-text-color" style="margin-bottom:25px;font-size:1.2rem;line-height:1.5">La Dirección de Extensión y Servicios a la Comunidad es la unidad organizativa académico-administrativa, con adscripción a la Rectoría, la cual realiza funciones de
naturaleza directiva-ejecutiva en relación a la vinculación de las acciones y procesos de investigación, docencia y extensión de la universidad con la comunidad intra y extra-universitaria.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->