=== Shortcode Shortcode ===
Contributors: numeeja
Donate link: https://cubecolour.co.uk/wp
Tags: shortcode, documentation, example
Requires at least: 3.5
Tested up to: 6.5
Stable tag: 1.0.0
License: GPLv2

Provides a [shortcode] shortcode to allow you to show shortcode usage examples without the shortcodes being processed

== Description ==
This plugin might be useful to you if you write about WordPress plugins and want to be able to show examples of shortcodes usage, but without the shortcodes being processed. The resultant display will be the same whether the plugin or theme providing the shortcode you are writing about is active or not.

#### The Shortcode Shortcode:
Add a [shortcode] shortcode in the format:

`[shortcode]gallery[/shortcode]`

This will display on the page as [gallery] instead of actually showing a gallery of the attached images

== Installation ==

1. Upload the plugin folder to plugins directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Use on a page/post/CPT by including the shortcode in your content eg:
`[shortcode]gallery[/shortcode]`

== Frequently Asked Questions ==

= What is the syntax of the shortcode for displaying an example of a shortcode? =

If you are writing about the native WordPress [gallery] shortcode and want to describe how to use the shortcode, you would include this in your text as:
`[shortcode]gallery[/shortcode]`

When the shortcode is displayed on the frontend it is within a span with the 'shortcode' class so you can target it in your child theme stylesheet.

= Why would I need this plugin? =

You might find this plugin useful if you are documenting or reviewing WordPress plugins and need to show the shortcode syntax without the shortcode being processed by WordPress - which would happen if you have the plugin you are writing about installed on your site.

If you don't write about WordPress shortcodes on your site you probably won't gain any benefit from this plugin.

= Couldn't I just use use the html entities to write the shortcode syntax instead of this plugin? =

Yes, you could. You can use the html entities &amp;&#8203;#91; for the left square bracket and &amp;&#8203;#93; for the right square bracket. However I wouldn't recommend this approach. If you do this and later switch between the text editor and the visual editor, the html entities will be replaced with the square brackets characters resulting in the shortcodes being processed. I created the plugin after I had this happen on one of my own sites.

You could also add zero-width spaces: &amp;&#8203;#8203; after the opening square bracket and before the closing square bracket to prevent the shortcodes being processed, however I wouldn't recommend this approach either because people reading your post might copy & paste your example code directly into their own site, and when they do, instead of a working shortcode they will get the version with a zero width space in it, and the shortcode won't work for them. When this occurs the zero width space character is invisible so it can be difficult to troubleshoot.

= Doesn't WordPress already do this natively with the double bracket syntax? =

Yes and if that works for you, you don't need this plugin, you could just escape the shortcode by enclosing it in additonal square brackets eg: [[gallery]] which will display as [gallery] the drawback to this is that if you later deactivate the plugin or theme providing the shortcode, both sets of square brackets will be shown.

= I am using the plugin and it has saved me time and/or hassle; how can I show my appreciation? =

You can donate via [my donation page](https://cubecolour.co.uk/wp/ "cubecolour donation page")

If you find the plugin useful I would also appreciate a review on the [plugin review page](https://wordpress.org/support/view/plugin-reviews/shortcode-shortcode/ "Shortcode Shortcode plugin reviews") page.

= Why is it not working for me? =

If the plugin isn't working for you, please read all of the documentation again. If this doesn't help, check the posts on the plugin's forum to see if your issue has already been covered there. If you still have a problem, please post a question on the [plugin support forum](https://wordpress.org/support/plugin/shortcode-shortcode/ "Shortcode Shortcode plugin support forum")

If you do have a problem, don't leave a review before posting your problem on the support forum first.

== Screenshots ==

1. Enter the shortcode shortcode in the text editor, style the shortcode example by adding a CSS rule to the child theme (optional). The shortcode shortcode displays on the frontend with your styling.

== Changelog ==

= 1.0.0 =
* Initial Version

== Upgrade Notice ==

= 1.0.0 =
* Initial Version
