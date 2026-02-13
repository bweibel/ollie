<?php
/**
 * Title: Page Member
 * Slug: ollie/template-member
 * Template Types: page
 * Description: This full page layout with no title, perfect for building pages with patterns.
 * Categories: ollie/pages
 * Keywords: page, full-width
 * Viewport Width: 1500
 * Inserter: false
 */
?>
<!-- wp:template-part {"slug":"header","theme":"pomeroychamber","tagName":"header","className":"site-header"} /-->

<!-- wp:cover {"url":"http://pomery.local/wp-content/uploads/2025/12/FB_IMG_1748631005946-1024x768.jpg","id":239,"dimRatio":80,"overlayColor":"secondary","isUserOverlayColor":true,"focalPoint":{"x":0.53,"y":1},"minHeight":300,"contentPosition":"center center","sizeSlug":"large","className":"is-style-default","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-style-default" style="margin-top:0;margin-bottom:0;min-height:300px"><img class="wp-block-cover__image-background wp-image-239 size-large" alt="" src="http://pomery.local/wp-content/uploads/2025/12/FB_IMG_1748631005946-1024x768.jpg" style="object-position:53% 100%" data-object-fit="cover" data-object-position="53% 100%"/><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-80 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Members</h2>
<!-- /wp:heading --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"tagName":"main","align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|x-large"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:buttons {"align":"full","style":{"spacing":{"blockGap":{"left":"0"},"padding":{"right":"var:preset|spacing|small","left":"var:preset|spacing|small"}}}} -->
<div class="wp-block-buttons alignfull" style="padding-right:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:button {"className":"is-style-button-brand"} -->
<div class="wp-block-button is-style-button-brand"><a class="wp-block-button__link wp-element-button">&lt; All Members</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:acf/member-details {"name":"acf/member-details","align":"wide","mode":"preview"} /-->

<!-- wp:post-content {"align":"wide","layout":{"type":"constrained"}} /--></main>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"></div>
<!-- /wp:group -->

<!-- wp:cover {"url":"http://pomery.local/wp-content/uploads/2025/11/473133290_18483587968034095_7055321102846444383_n-1024x683.jpg","id":208,"dimRatio":90,"overlayColor":"secondary","isUserOverlayColor":true,"sizeSlug":"large","className":"is-style-default"} -->
<div class="wp-block-cover is-style-default"><img class="wp-block-cover__image-background wp-image-208 size-large" alt="" src="http://pomery.local/wp-content/uploads/2025/11/473133290_18483587968034095_7055321102846444383_n-1024x683.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-90 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"metadata":{"name":"Call To Action Box","categories":["ollie/call-to-action"],"patternName":"ollie/call-to-action-card-with-buttons"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","right":"var:preset|spacing|large","left":"var:preset|spacing|large"}},"border":{"radius":"5px"}},"textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-color has-text-color" style="border-radius:5px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center">Other Members</h3>
<!-- /wp:heading -->

<!-- wp:query {"queryId":14,"query":{"perPage":3,"pages":0,"offset":0,"postType":"member","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"border":{"radius":"8px","width":"0px","style":"none"},"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"center"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-style:none;border-width:0px;border-radius:8px;padding-top:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small)"><!-- wp:image {"id":238,"sizeSlug":"medium","linkDestination":"none"} -->
<figure class="wp-block-image size-medium"><img src="http://pomery.local/wp-content/uploads/2025/12/Herbal-Sage-New-Logo-1992-larger-187x300.jpg" alt="" class="wp-image-238"/></figure>
<!-- /wp:image -->

<!-- wp:post-title {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|main"}}}},"textColor":"main"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-button-light"} -->
<div class="wp-block-button is-style-button-light"><a class="wp-block-button__link wp-element-button">All Members</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:template-part {"slug":"footer","theme":"pomeroychamber","tagName":"footer","className":"site-footer"} /-->