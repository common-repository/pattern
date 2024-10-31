<?php
/**
 * Hero pattern markup.
 *
 * @package Pattern
 */

$markup = '<!-- wp:cover {"url":"https://images.unsplash.com/photo-1499570023676-b0a761678e07?ixlib=rb-1.2.1\u0026ixid=eyJhcHBfaWQiOjE2MTIzN30","id":56,"dimRatio":0,"customOverlayColor":"#ffffff","align":"full","className":"tw-my-0 tw-py-10 tw-h-auto"} -->
<div class="wp-block-cover alignfull tw-my-0 tw-py-10 tw-h-auto" style="background-image:url(https://images.unsplash.com/photo-1499570023676-b0a761678e07?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjE2MTIzN30);background-color:#ffffff"><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"tw-p-8 md:tw-p-16 tw-rounded-xl tw-shadow-xl","style":{"color":{"gradient":"linear-gradient(135deg,rgba(255,255,255,0.9) 0%,rgba(255,255,255,0.9) 100%)"}}} -->
<div class="wp-block-group tw-p-8 md:tw-p-16 tw-rounded-xl tw-shadow-xl has-background" style="background:linear-gradient(135deg,rgba(255,255,255,0.9) 0%,rgba(255,255,255,0.9) 100%)"><div class="wp-block-group__inner-container"><!-- wp:heading {"align":"center","className":"tw-mt-0","style":{"typography":{"fontSize":72},"color":{"text":"#ca8000"}}} -->
<h2 class="has-text-align-center tw-mt-0 has-text-color" style="font-size:72px;color:#ca8000">$249</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"tw-my-0","style":{"color":{"text":"#111111"}}} -->
<p class="has-text-align-center tw-my-0 has-text-color" style="color:#111111"><strong>Template</strong></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"tw-pb-0 tw-mb-0"} -->
<div class="wp-block-group tw-pb-0 tw-mb-0"><div class="wp-block-group__inner-container"><!-- wp:paragraph {"align":"center","className":"tw-my-0","style":{"color":{"text":"#111111"}}} -->
<p class="has-text-align-center tw-my-0 has-text-color" style="color:#111111">Unlimited Pricing Tables</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","className":"tw-my-0","style":{"color":{"text":"#111111"}}} -->
<p class="has-text-align-center tw-my-0 has-text-color" style="color:#111111">Stylish Designs</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","className":"tw-my-0","style":{"color":{"text":"#111111"}}} -->
<p class="has-text-align-center tw-my-0 has-text-color" style="color:#111111">Edit w/ Ease</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"align":"center","className":"tw-mt-0 tw-pt-0"} -->
<div class="wp-block-buttons aligncenter tw-mt-0 tw-pt-0"><!-- wp:button {"borderRadius":50,"style":{"color":{"background":"#ca8000","text":"#ffffff"}},"className":"tw-mb-0"} -->
<div class="wp-block-button tw-mb-0"><a class="wp-block-button__link has-text-color has-background" style="border-radius:50px;background-color:#ca8000;color:#ffffff">Purchase</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:group --></div></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->';

return array(
	'title'      => esc_html__( 'Cover 2', 'pattern' ),
	'categories' => array( 'pricing', 'pattern' ),
	'content'    => $markup,
);
