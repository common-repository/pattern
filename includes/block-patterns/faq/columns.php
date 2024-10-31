<?php
/**
 * Hero pattern markup.
 *
 * @package Pattern
 */

$markup = '
<!-- wp:cover {"url":"https://images.unsplash.com/photo-1544535830-9df3f56fff6a?ixlib=rb-1.2.1\u0026amp;ixid=eyJhcHBfaWQiOjE2MTIzN30","id":46,"dimRatio":88,"customOverlayColor":"#fff6e5","align":"full","className":"tw-h-auto tw-my-0 tw-pt-10"} -->
<div class="wp-block-cover alignfull has-background-dim-90 has-background-dim tw-h-auto tw-my-0 tw-pt-10" style="background-image:url(https://images.unsplash.com/photo-1544535830-9df3f56fff6a?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjE2MTIzN30);background-color:#fff6e5"><div class="wp-block-cover__inner-container"><!-- wp:heading {"align":"center","style":{"color":{"text":"#ca8000"}}} -->
<h2 class="has-text-align-center has-text-color" style="color:#ca8000">Your questions, answered.</h2>
<!-- /wp:heading -->

<!-- wp:columns {"align":"wide","className":"tw-py-10 tw-my-0","style":{"color":{"text":"#111111"}}} -->
<div class="wp-block-columns alignwide tw-py-10 tw-my-0 has-text-color" style="color:#111111"><!-- wp:column {"width":50} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:heading {"level":4,"className":"tw-mt-0","style":{"color":{"text":"#ca8000"}}} -->
<h4 class="tw-mt-0 has-text-color" style="color:#ca8000">What are block patterns?</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"tw-mt-0","style":{"color":{"text":"#696763"}}} -->
<p class="tw-mt-0 has-text-color" style="color:#696763">Predefined block layouts composed of Gutenberg blocks.  Basically collections of blocks put together in useful ways.  For example, this FAQ block pattern is composed of a cover block, a columns block, a heading block, and a paragraph block.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":50,"className":"tw-mt-0"} -->
<div class="wp-block-column tw-mt-0" style="flex-basis:50%"><!-- wp:heading {"level":4,"className":"tw-mt-0","style":{"color":{"text":"#ca8000"}}} -->
<h4 class="tw-mt-0 has-text-color" style="color:#ca8000">Can I edit these questions?</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"tw-mt-0","style":{"color":{"text":"#696763"}}} -->
<p class="tw-mt-0 has-text-color" style="color:#696763">Absolutely! You can edit the text, the text size, the text color and even the tag that\'s used. Right now it\'s using an h3 tag but you could easily change it to a paragraph tag w/ a big font.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","className":"tw-py-10 tw-my-0","style":{"color":{"text":"#111111"}}} -->
<div class="wp-block-columns alignwide tw-py-10 tw-my-0 has-text-color" style="color:#111111"><!-- wp:column {"width":50} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:heading {"level":4,"className":"tw-mt-0","style":{"color":{"text":"#ca8000"}}} -->
<h4 class="tw-mt-0 has-text-color" style="color:#ca8000">How do I add questions?</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"tw-mt-0","style":{"color":{"text":"#696763"}}} -->
<p class="tw-mt-0 has-text-color" style="color:#696763">Each question is written in a columns block, so all you need to do is duplicate it. Sometimes this is easier said than done. If you’re on a desktop just try clicking in the whitespace right below this answer. It may select this column, in which case just click a little lower to select the columns block. Once you’ve selected the columns block, click those three vertical dots &amp; select duplicate.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":50,"className":"tw-mt-0"} -->
<div class="wp-block-column tw-mt-0" style="flex-basis:50%"><!-- wp:heading {"level":4,"className":"tw-mt-0","style":{"color":{"text":"#ca8000"}}} -->
<h4 class="tw-mt-0 has-text-color" style="color:#ca8000">Can I change the column width?</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#696763"}}} -->
<p class="has-text-color" style="color:#696763">Great question, yes you can! This block pattern uses a core WordPress columns block. You’ll have to select the column you want to change the size of and you can simply change it’s percentage width. If you want to use the newly sized columns simply read the answer to the question above and you can easily duplicate these columns.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","className":"tw-py-10 tw-my-0","style":{"color":{"text":"#111111"}}} -->
<div class="wp-block-columns alignwide tw-py-10 tw-my-0 has-text-color" style="color:#111111"><!-- wp:column {"width":50} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:heading {"level":4,"className":"tw-mt-0","style":{"color":{"text":"#ca8000"}}} -->
<h4 class="tw-mt-0 has-text-color" style="color:#ca8000">Can I change the background image?</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"tw-mt-0","style":{"color":{"text":"#696763"}}} -->
<p class="tw-mt-0 has-text-color" style="color:#696763">You bet!  This block pattern uses a core \'Cover\' block.  You can swap out the background image w/ an image of your own and add a new overlay color.  You can also swap out the background image for a solid background color.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":50,"className":"tw-mt-0"} -->
<div class="wp-block-column tw-mt-0" style="flex-basis:50%"><!-- wp:heading {"level":4,"className":"tw-mt-0","style":{"color":{"text":"#ca8000"}}} -->
<h4 class="tw-mt-0 has-text-color" style="color:#ca8000">Is this optimized for different devices?</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#696763"}}} -->
<p class="has-text-color" style="color:#696763">As a matter of fact, it is!  It\'s responsive and optimized for desktop, mobile and tablet devices.  I must admit though you can thank the WordPress \'Columns\' block for doing most of the heavy lifting when it comes to responsive optimizations.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->';

return array(
	'title'      => esc_html__( 'Columns', 'pattern' ),
	'categories' => array( 'faq', 'pattern' ),
	'content'    => $markup,
);
