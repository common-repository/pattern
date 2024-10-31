<?php
/**
 * Hero pattern markup.
 *
 * @package Pattern
 */

$markup = '
<!-- wp:cover {"customOverlayColor":"#ffffff","align":"full","className":"tw-h-auto tw-my-0 tw-py-10","pattern":{"classNames":[{"label":"pattern","value":"pattern"},{"label":"tw-h-auto","value":"tw-h-auto"},{"value":"tw-py-10","label":"tw-py-10"}],"device":"all"}} -->
<div class="wp-block-cover alignfull has-background-dim tw-h-auto tw-py-10" style="background-color:#ffffff"><div class="wp-block-cover__inner-container"><!-- wp:heading {"align":"center","style":{"color":{"text":"#ca8000"}}} -->
<h2 class="has-text-align-center has-text-color" style="color:#ca8000">FAQs</h2>
<!-- /wp:heading -->

<!-- wp:columns {"verticalAlignment":null,"align":"full","className":"tw-py-10 tw-my-0","style":{"color":{"text":"#111111"}},"pattern":{"classNames":[{"label":"pattern","value":"pattern"},{"label":"tw-py-10","value":"tw-py-10"},{"value":"tw-my-0","label":"tw-my-0"}],"device":"all"}} -->
<div class="wp-block-columns alignfull tw-py-10 tw-my-0 has-text-color" style="color:#111111"><!-- wp:column {"width":33.33} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:heading {"level":4,"className":"tw-mt-0","style":{"color":{"text":"#ca8000"}},"pattern":{"classNames":[{"value":"pattern","label":"pattern","isFixed":true},{"value":"tw-mt-0","label":"tw-mt-0"}],"device":"all"}} -->
<h4 class="tw-mt-0 has-text-color" style="color:#ca8000">What are block patterns?</h4>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":66.66,"className":"tw-mt-0","pattern":{"classNames":[{"value":"pattern","label":"pattern","isFixed":true},{"value":"tw-mt-0","label":"tw-mt-0"}],"device":"all"}} -->
<div class="wp-block-column tw-mt-0" style="flex-basis:66.66%"><!-- wp:paragraph {"className":"tw-mt-0","style":{"color":{"text":"#666666"}},"pattern":{"classNames":[{"value":"pattern","label":"pattern","isFixed":true},{"value":"tw-mt-0","label":"tw-mt-0"}],"device":"all"}} -->
<p class="tw-mt-0 has-text-color" style="color:#666666">Predefined block layouts composed of Gutenberg blocks.  Basically collections of blocks put together in useful ways.  For example, this FAQ block pattern is composed of a cover block, a columns block, a heading block, and a paragraph block.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":null,"align":"full","className":"tw-py-10 tw-my-0","style":{"color":{"text":"#111111"}},"pattern":{"classNames":[{"label":"pattern","value":"pattern"},{"label":"tw-py-10","value":"tw-py-10"},{"value":"tw-my-0","label":"tw-my-0"}],"device":"all"}} -->
<div class="wp-block-columns alignfull tw-py-10 tw-my-0 has-text-color" style="color:#111111"><!-- wp:column {"width":33.33} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:heading {"level":4,"className":"tw-mt-0","style":{"color":{"text":"#ca8000"}},"pattern":{"classNames":[{"value":"pattern","label":"pattern","isFixed":true},{"value":"tw-mt-0","label":"tw-mt-0"}],"device":"all"}} -->
<h4 class="tw-mt-0 has-text-color" style="color:#ca8000">Can I edit these frequently asked questions?</h4>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":66.66,"className":"tw-mt-0","pattern":{"classNames":[{"value":"pattern","label":"pattern","isFixed":true},{"value":"tw-mt-0","label":"tw-mt-0"}],"device":"all"}} -->
<div class="wp-block-column tw-mt-0" style="flex-basis:66.66%"><!-- wp:paragraph {"className":"tw-mt-0","style":{"color":{"text":"#666666"}},"pattern":{"classNames":[{"value":"pattern","label":"pattern","isFixed":true},{"value":"tw-mt-0","label":"tw-mt-0"}],"device":"all"}} -->
<p class="tw-mt-0 has-text-color" style="color:#666666">Absolutely!  You can edit the text, the text size, the text color and even the tag that\'s used.  Right now it\'s using an h3 tag but you could easily change it to a paragraph tag w/ a big font.  </p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":null,"align":"full","className":"tw-py-10 tw-my-0","style":{"color":{"text":"#111111"}},"pattern":{"classNames":[{"label":"pattern","value":"pattern"},{"label":"tw-py-10","value":"tw-py-10"},{"value":"tw-my-0","label":"tw-my-0"}],"device":"all"}} -->
<div class="wp-block-columns alignfull tw-py-10 tw-my-0 has-text-color" style="color:#111111"><!-- wp:column {"width":33.33} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:heading {"level":4,"className":"tw-mt-0","style":{"color":{"text":"#ca8000"}},"pattern":{"classNames":[{"value":"pattern","label":"pattern","isFixed":true},{"value":"tw-mt-0","label":"tw-mt-0"}],"device":"all"}} -->
<h4 class="tw-mt-0 has-text-color" style="color:#ca8000">How do I add questions?</h4>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":66.66,"className":"tw-mt-0","pattern":{"classNames":[{"value":"pattern","label":"pattern","isFixed":true},{"value":"tw-mt-0","label":"tw-mt-0"}],"device":"all"}} -->
<div class="wp-block-column tw-mt-0" style="flex-basis:66.66%"><!-- wp:paragraph {"className":"tw-mt-0","style":{"color":{"text":"#666666"}},"pattern":{"classNames":[{"value":"pattern","label":"pattern","isFixed":true},{"value":"tw-mt-0","label":"tw-mt-0"}],"device":"all"}} -->
<p class="tw-mt-0 has-text-color" style="color:#666666">Each question is written in a columns block, so all you need to do is duplicate it.  Sometimes this is easier said than done.  If you\'re on a desktop just try clicking in the whitespace right below this answer.  It may select this column, in which case just click a little lower to select the columns block.  Once you\'ve selected the columns block, click those three vertical dots &amp; select duplicate.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":null,"align":"full","className":"tw-py-10 tw-my-0","style":{"color":{"text":"#111111"}},"pattern":{"classNames":[{"label":"pattern","value":"pattern"},{"label":"tw-py-10","value":"tw-py-10"},{"value":"tw-my-0","label":"tw-my-0"}],"device":"all"}} -->
<div class="wp-block-columns alignfull tw-py-10 tw-my-0 has-text-color" style="color:#111111"><!-- wp:column {"width":33.33} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:heading {"level":4,"className":"tw-mt-0","style":{"color":{"text":"#ca8000"}},"pattern":{"classNames":[{"value":"pattern","label":"pattern","isFixed":true},{"value":"tw-mt-0","label":"tw-mt-0"}],"device":"all"}} -->
<h4 class="tw-mt-0 has-text-color" style="color:#ca8000">Can I change the width of the columns?</h4>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":66.66,"className":"tw-mt-0","pattern":{"classNames":[{"value":"pattern","label":"pattern","isFixed":true},{"value":"tw-mt-0","label":"tw-mt-0"}],"device":"all"}} -->
<div class="wp-block-column tw-mt-0" style="flex-basis:66.66%"><!-- wp:paragraph {"className":"tw-mt-0","style":{"color":{"text":"#666666"}},"pattern":{"classNames":[{"value":"pattern","label":"pattern","isFixed":true},{"value":"tw-mt-0","label":"tw-mt-0"}],"device":"all"}} -->
<p class="tw-mt-0 has-text-color" style="color:#666666">Great question, yes you can!  This block pattern uses a core WordPress columns block.  You\'ll have to select the column you want to change the size of and you can simply change it\'s percentage width.  If you want to use the newly sized columns simply read the answer to the question above and you can easily duplicate these columns.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->';

return array(
	'title'      => esc_html__( 'Side by Side', 'pattern' ),
	'categories' => array( 'faq', 'pattern' ),
	'content'    => $markup,
);
