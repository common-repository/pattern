<?php
/**
 * Hero pattern markup.
 *
 * @package Pattern
 */

$markup = '
<!-- wp:cover {"customGradient":"linear-gradient(135deg,rgba(255,246,229,0) 0%,rgba(255,246,229,0) 100%)","align":"full","className":"pattern tw-h-auto tw-my-0 tw-pt-10","pattern":{"classNames":[{"label":"pattern","value":"pattern"},{"label":"tw-h-auto","value":"tw-h-auto"},{"label":"tw-my-0","value":"tw-my-0"},{"label":"tw-pt-10","value":"tw-pt-10"}],"device":"all"}} -->
<div class="wp-block-cover alignfull has-background-dim has-background-gradient tw-h-auto tw-my-0 tw-pt-10" style="background:linear-gradient(135deg,rgba(255,246,229,0) 0%,rgba(255,246,229,0) 100%)" id="what-are-block-patterns"><div class="wp-block-cover__inner-container"><!-- wp:columns {"align":"wide","className":"tw-py-10 tw-my-0","style":{"color":{"text":"#111111"}},"pattern":{"classNames":[{"label":"pattern","value":"pattern"},{"label":"tw-py-10","value":"tw-py-10"},{"value":"tw-my-0","label":"tw-my-0"}],"device":"all"}} -->
<div class="wp-block-columns alignwide tw-py-10 tw-my-0 has-text-color" style="color:#111111"><!-- wp:column {"width":37.5,"pattern":{"classNames":[{"value":"pattern","label":"pattern","isFixed":true}],"device":"all"}} -->
<div class="wp-block-column" style="flex-basis:37.5%"><!-- wp:group {"className":"tw-mt-0","pattern":{"classNames":[{"label":"pattern","value":"pattern"},{"label":"tw-mt-0","value":"tw-mt-0"}],"device":"all"}} -->
<div class="wp-block-group tw-mt-0"><div class="wp-block-group__inner-container"><!-- wp:heading {"align":"left","className":"tw-mt-0","style":{"color":{"text":"#ca8000"}},"pattern":{"classNames":[{"value":"pattern","label":"pattern","isFixed":true},{"value":"tw-mt-0","label":"tw-mt-0"}],"device":"all"}} -->
<h2 class="has-text-align-left tw-mt-0 has-text-color" style="color:#ca8000">FAQs</h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":50} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"style":{"color":{"text":"#111111"}}} -->
<p class="has-text-color" style="color:#111111"><a href="#what-are-block-patterns">What are block patterns?</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#111111"}}} -->
<p class="has-text-color" style="color:#111111"><a href="#how-do-i-link-these-questions-to-the-menu" data-type="internal">How do I link these questions to the menu?</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#111111"}}} -->
<p class="has-text-color" style="color:#111111"><a href="#can-i-edit-these-questions" data-type="internal" data-id="#can-i-edit-these-questions">Can I edit these questions?</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#how-do-i-add-questions" data-type="internal" data-id="#how-do-i-add-questions">How do I add questions?</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#can-i-change-the-column-width">Can I change the column width?</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#can-i-add-a-background-image" data-type="internal" data-id="#can-i-add-a-background-image">Can I add a background image?</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#are-these-questions-optimized-for-different-devices">Are these questions optimized for different devices?</a></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":62.5,"pattern":{"classNames":[{"value":"pattern","label":"pattern","isFixed":true}],"device":"all"}} -->
<div class="wp-block-column" style="flex-basis:62.5%"><!-- wp:heading {"align":"left","level":4,"className":"tw-mt-0","style":{"color":{"text":"#ca8000"}},"pattern":{"classNames":[{"value":"pattern","label":"pattern","isFixed":true},{"value":"tw-mt-0","label":"tw-mt-0"}],"device":"all"}} -->
<h4 class="has-text-align-left tw-mt-0 has-text-color" id="how-do-i-link-these-questions-to-the-menu" style="color:#ca8000">What are block patterns?</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"tw-mt-0","style":{"color":{"text":"#696763"}},"pattern":{"classNames":[{"value":"pattern","label":"pattern","isFixed":true},{"value":"tw-mt-0","label":"tw-mt-0"}],"device":"all"}} -->
<p class="tw-mt-0 has-text-color" style="color:#696763">Predefined block layouts composed of Gutenberg blocks.  Basically collections of blocks put together in useful ways.  For example, this FAQ block pattern is composed of a cover block, a columns block, a heading block, and a paragraph block.</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":50} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"align":"left","level":4,"className":"tw-mt-0","style":{"color":{"text":"#ca8000"}},"pattern":{"classNames":[{"value":"pattern","label":"pattern","isFixed":true},{"value":"tw-mt-0","label":"tw-mt-0"}],"device":"all"}} -->
<h4 class="has-text-align-left tw-mt-0 has-text-color" id="can-i-edit-these-questions" style="color:#ca8000">How do I link these questions to the menu?</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"tw-mt-0","style":{"color":{"text":"#696763"}},"pattern":{"classNames":[{"value":"pattern","label":"pattern","isFixed":true},{"value":"tw-mt-0","label":"tw-mt-0"}],"device":"all"}} -->
<p class="tw-mt-0 has-text-color" style="color:#696763">The first time you do it, it\'s a little tricky, but then it gets easier.  First, select the place on the page you want to link too.  You won\'t want to link directly to this question b/c when a visitor clicks on the faq menu item on the left, it will scroll the question off the page.  So, click on the question before this one, then click <em>Advanced</em> in the sidebar and add a unique <em>HTML anchor</em> such as <em>my-html-anchor</em>.  Then go to the corresponding menu item in the FAQ menu on the left and link the menu item to your HTML anchor by typing <em>#my-html-anchor</em>.  Don\'t forget to add the hashtag, that\'s what links the menu item internally.</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":50} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"align":"left","level":4,"className":"tw-mt-0","style":{"color":{"text":"#ca8000"}},"pattern":{"classNames":[{"value":"pattern","label":"pattern","isFixed":true},{"value":"tw-mt-0","label":"tw-mt-0"}],"device":"all"}} -->
<h4 class="has-text-align-left tw-mt-0 has-text-color" id="how-do-i-add-questions" style="color:#ca8000">Can I edit these questions?</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"tw-mt-0","style":{"color":{"text":"#696763"}},"pattern":{"classNames":[{"value":"pattern","label":"pattern","isFixed":true},{"value":"tw-mt-0","label":"tw-mt-0"}],"device":"all"}} -->
<p class="tw-mt-0 has-text-color" style="color:#696763">Absolutely! You can edit the text, the text size, the text color and even the tag that\'s used. Right now it\'s using an h3 tag but you could easily change it to a paragraph tag w/ a big font.</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":50} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":4,"className":"tw-mt-0","style":{"color":{"text":"#ca8000"}},"pattern":{"classNames":[{"value":"pattern","label":"pattern","isFixed":true},{"value":"tw-mt-0","label":"tw-mt-0"}],"device":"all"}} -->
<h4 class="tw-mt-0 has-text-color" id="can-i-change-the-column-width" style="color:#ca8000">How do I add questions?</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"tw-mt-0","style":{"color":{"text":"#696763"}},"pattern":{"classNames":[{"value":"pattern","label":"pattern","isFixed":true},{"value":"tw-mt-0","label":"tw-mt-0"}],"device":"all"}} -->
<p class="tw-mt-0 has-text-color" style="color:#696763">Each question is written in a columns block, so all you need to do is duplicate it. Sometimes this is easier said than done. If you’re on a desktop just try clicking in the whitespace right below this answer. It may select this column, in which case just click a little lower to select the columns block. Once you’ve selected the columns block, click those three vertical dots &amp; select duplicate.</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":50} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":4,"className":"tw-mt-0","style":{"color":{"text":"#ca8000"}},"pattern":{"classNames":[{"value":"pattern","label":"pattern","isFixed":true},{"value":"tw-mt-0","label":"tw-mt-0"}],"device":"all"}} -->
<h4 class="pattern tw-mt-0 has-text-color" id="can-i-add-a-background-image" style="color:#ca8000">Can I change the column width?</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#696763"}}} -->
<p class="has-text-color" style="color:#696763">Great question, yes you can! This block pattern uses a core WordPress columns block. You’ll have to select the column you want to change the size of and you can simply change it’s percentage width. If you want to use the newly sized columns simply read the answer to the question above and you can easily duplicate these columns.</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":50} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":4,"className":"tw-mt-0","style":{"color":{"text":"#ca8000"}},"pattern":{"classNames":[{"value":"pattern","label":"pattern","isFixed":true},{"value":"tw-mt-0","label":"tw-mt-0"}],"device":"all"}} -->
<h4 class="tw-mt-0 has-text-color" id="are-these-questions-optimized-for-different-devices" style="color:#ca8000">Can I add a background image?</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"tw-mt-0","style":{"color":{"text":"#696763"}},"pattern":{"classNames":[{"value":"pattern","label":"pattern","isFixed":true},{"value":"tw-mt-0","label":"tw-mt-0"}],"device":"all"}} -->
<p class="tw-mt-0 has-text-color" style="color:#696763">You bet!  This block pattern uses a core \'Cover\' block.  You can swap out the background image w/ an image of your own and add a new overlay color.  You can also swap out the background image for a solid background color.</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":50} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":4,"className":"tw-mt-0","style":{"color":{"text":"#ca8000"}},"pattern":{"classNames":[{"value":"pattern","label":"pattern","isFixed":true},{"value":"tw-mt-0","label":"tw-mt-0"}],"device":"all"}} -->
<h4 class="tw-mt-0 has-text-color" style="color:#ca8000">Are these questions optimized for different devices?</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#696763"}}} -->
<p class="has-text-color" style="color:#696763">As a matter of fact, it is!  It\'s responsive and optimized for desktop, mobile and tablet devices.  I must admit though you can thank the WordPress \'Columns\' block for doing most of the heavy lifting when it comes to responsive optimizations.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->';

return array(
	'title'      => esc_html__( 'Sidebar', 'pattern' ),
	'categories' => array( 'faq', 'pattern' ),
	'content'    => $markup,
);
