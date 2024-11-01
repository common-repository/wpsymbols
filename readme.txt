=== ★ wpsymbols ★ ===
Contributors: Max Walders
Tags: comments, symbols, comment symbols
Requires at least: 2.8
Tested up to: 2.9.2
Stable tag: 1.3

Want these ✌ ★ ♥ ☠ ⚠ in your comments? Insert symbols gallery to your comment box!

== Description ==

This plugin adds a symbol gallery (stars, skulls, love etc) into your comment box so that your visitors can add symbols (✌ ★ ♥ ☠ ⚠ etc) into their comments with ease! See live demo here : http://osfvad.com/wpsymbols/demo/

== Installation ==

1. Download the plugin and extract (unzip) its content
2. Upload the complete folder `wpsymbols` to the `/wp-content/plugins/` directory
3. Activate the plugin through the 'Plugins' menu in WordPress. Done!

== Uninstall ==
1. Deactivate the plugin through the 'Plugins' menu in WordPress.
2. Delete the 'wpsymbols' folder at `/wp-content/plugins/` directory. Done!

== Frequently Asked Questions ==

Q : Demo please...
A : Go to www.osfvad.com/wpsymbols/demo/

Q : Why the plugin doesn't appear like in the demo or doesn't appear at all in my blog even after I activate it?
A : Depending on your theme, the position and the appearance might be different from what you see in the demo. We have tested this plugin and we can say that this plugin works for most themes. Some may even render the gallery to look astonishingly cool! But sadly, a small number of themes may cause the gallery to look weird, or worst, don't appear at all. To fix this, what you can do is change your theme.

Q : I see the symbols, but nothing happens when I click them. How do I fix it?
A : This is most probably due to wrong comment id. Wpsymbols finds the comment textarea by looking at the comment textarea id, which is almost all themes use 'comment' (it should be like this : ...textarea name="comment" id="comment" rows="10"...). If the id is something like "s4", "comments" (notice the s), etc (anything other than id="comment"), wpsymbols will not work. To fix this, open comment.php file in the theme folder you are using and change the comment id to comment. Example : from ...textarea name="comment" id="s4" rows="10"... change to ...textarea name="comment" id="comment" rows="10"...

Q : I don't like the button. Can I change it? How?
A : Yes, you can change it. Make a button in gif format and name it as 1.gif . Then upload and replace the old button at wp-content/plugins/wpsymbols/tinymce folder.

Q : I want to add / remove / change the symbols
A : Open wpsymbols.php. Modify the array under "array below lists the symbols that appear when a user click the 'insert symbols'" or "array below lists the symbols that appear when a user click 'more symbols'"

Q : How to get more symbols?
A : Go to www.osfvad.com/wpsymbols/symbolsgallery.php . If you still cannot find the symbols, you can search using the internet.

Q : Can you make a symbol for me?
A : No. All the symbols are standardized.

Q : My friends / I don't see any symbols / blank boxes / boxes with funny numbers on it.
A : That means your friend / your computer does not support the symbols. Don't worry, it will appear normally on other computers.


== Changelog ==

= 1.0 =
First release

= 1.1 =
Fixed some minor bug

= 1.2 =
Adjusted the location where the plugin come out (pushed up higher). This adjustment is made because some themes are not able to display the whole gallery (the lower part is 'hidden').

= 1.3 =
Important and a major fix. Fixed the path issue which cause the symbols gallery from not appearing.