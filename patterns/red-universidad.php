<?php
/**
 * Title: Red Universidad
 * Slug: block-theme/reduniversidad
 * Categories: desco
 * Description: A layout with a title, content and a image in the left column.
 *
 */

?>
<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:query {"queryId":1,"query":{"perPage":6,"pages":0,"offset":0,"postType":"reduniversidad","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"0","left":"var:preset|spacing|50","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":"200px"},"border":{"left":{"color":"var:preset|color|cyan-bluish-gray","width":"1px"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="border-left-color:var(--wp--preset--color--cyan-bluish-gray);border-left-width:1px;min-height:200px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><!-- wp:post-title {"textAlign":"left","level":4,"isLink":true,"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|30","top":"var:preset|spacing|30"}},"typography":{"textTransform":"uppercase"}}} /-->

<!-- wp:post-excerpt {"fontSize":"small"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->