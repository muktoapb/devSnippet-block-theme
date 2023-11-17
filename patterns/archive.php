<?php
/**
 * Title: archive
 * Slug: codemukto/archive
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"50px"}}},"layout":{"type":"constrained"},"metadata":{"name":"Hero"}} -->
<div class="wp-block-group" style="padding-bottom:50px"><!-- wp:group {"style":{"spacing":{"blockGap":"30px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"50%"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:image {"align":"full","id":861,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image alignfull size-large"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/hero.svg" alt="" class="wp-image-861"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"50%"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2 class="wp-block-heading">Essential Code Snippet For Web Developers</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>This, not a good idea to write all code from scratch & it makes project time longer. That why I put all my most use and complex code there so I can reuse and at the same time other developers can.</p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search Code","width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained","contentSize":"800px"},"metadata":{"name":"Category"}} -->
<div class="wp-block-group"><!-- wp:navigation {"ref":867,"layout":{"type":"flex","justifyContent":"center"}} /-->

<!-- wp:categories /--></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","layout":{"type":"constrained"},"metadata":{"name":"Posts"}} -->
<section class="wp-block-group"><!-- wp:query {"queryId":25,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"tagName":"section"} -->
<section class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-title /-->

<!-- wp:post-date /-->

<!-- wp:post-excerpt /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"arrow","showLabel":false,"style":{"typography":{"fontSize":"18px"}},"textColor":"white","layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></section>
<!-- /wp:query --></section>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer"} /-->