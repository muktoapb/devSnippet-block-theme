<?php
/**
 * Title: index
 * Slug: codemukto/index
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
<p>Reusing code is a practical approach to avoid building everything from scratch, reducing project timelines. I centralize my frequently used and intricate code in a repository for efficient reuse, benefiting both the project efficiency and facilitating collaboration with other developers.</p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search Code","width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:block {"ref":916} /-->

<!-- wp:group {"tagName":"section","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"backgroundColor":"custom-mukto-dark-blue","layout":{"type":"constrained"},"metadata":{"name":"Posts"}} -->
<section class="wp-block-group has-custom-mukto-dark-blue-background-color has-background" style="margin-top:0;margin-bottom:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"50px","bottom":"50px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:50px;padding-bottom:50px"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">YOUR&nbsp;<mark style="background-color:#3448a3" class="has-inline-color has-custom-white-color">CODE</mark>&nbsp;SNIPPETS</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":37,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"enhancedPagination":true} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"tagName":"article","style":{"spacing":{"padding":{"right":"15px","left":"15px","top":"15px","bottom":"15px"}},"border":{"width":"1px"},"dimensions":{"minHeight":"100%"}},"borderColor":"custom-mukto-medium-blue","backgroundColor":"custom-mukto-dark-blue","layout":{"inherit":false}} -->
<article class="wp-block-group has-border-color has-custom-mukto-medium-blue-border-color has-custom-mukto-dark-blue-background-color has-background" style="border-width:1px;min-height:100%;padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px"><!-- wp:post-terms {"term":"category","textAlign":"right","className":"post_cat_label"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"10px"}},"typography":{"fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|custom-white"}}}},"textColor":"custom-white"} /-->

<!-- wp:post-excerpt {"moreText":"View Code","excerptLength":20,"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-mukto-theme-border"}}},"typography":{"textDecoration":"none","fontStyle":"normal","fontWeight":"300","fontSize":"15px"},"spacing":{"margin":{"top":"5px","bottom":"0"}}}} /--></article>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer"} /-->