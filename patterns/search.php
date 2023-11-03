<?php
/**
 * Title: Search Results
 * Slug: celsius-cooking-fse/search-results
 * Categories: CelsiusCooking
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/sous-vide-leg-of-lamb.jpg","id":1653,"hasParallax":true,"dimRatio":10,"minHeight":500,"minHeightUnit":"px","isDark":false,"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light has-parallax" style="min-height:500px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-10 has-background-dim"></span><div role="img" class="wp-block-cover__image-background wp-image-1653 has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_template_directory_uri() );?>/assets/images/sous-vide-leg-of-lamb.jpg)"></div><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"center","textColor":"secondary","fontSize":"large"} -->
<h2 class="wp-block-heading has-text-align-center has-secondary-color has-text-color has-large-font-size">Search for a recipe</h2>
<!-- /wp:heading -->

<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search...","width":80,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"align":"center","style":{"border":{"width":"0px","style":"none"}}} /--></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Recipe</h3>
<!-- /wp:heading -->

<!-- wp:query {"queryId":34,"query":{"perPage":"6","pages":"1","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"height":"350px"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"lineHeight":"1.5"}}} /-->

<!-- wp:post-excerpt {"excerptLength":20,"style":{"typography":{"fontSize":"18px"}}} /-->

<!-- wp:post-date /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->