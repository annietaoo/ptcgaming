=== Particle Gaming ===
Contributors: Annie Tao (annietao.me; github.com/annietaoo)

== Description ==

This a custom Wordpress theme with modified Wordpress plugins for Particle Gaming.

== Installation ==

Make sure that you have Wordpress installed!
If you haven't installed WP, check out the famous five minute installation: https://codex.wordpress.org/Installing_WordPress#Famous_5-Minute_Installation .

1. Replace your existing wp-content folder included with the one that includes this theme.
2. Head to your wp-admin panel, located at [your domain]/wp-admin.
3. Go to the "Appearance" tab on the left-side panel and select "Themes" from the drop-down menu.
4. Select the "particlegaming" theme and click the activate.

Now, your theme has been activated. Don't be alarmed if things don't look right on your website.

5. Click the "Plugins" tab on the left-side panel.

If you replaced the entire wp-content folder earlier, you should already have some existing plugins besides the default ones.

6. Make sure you have these plugins: 'Popup Maker', 'Post Grid', and 'Quotes Collection'.
6a. If you do not have these plugins, you'll have to search for them and install them.
7. Activate all three of these plugins.

== Post Grid Set-up ==

1. Once you've activated the Post Grid Plugin, hover over the 'Post Grid' tab and select 'New Post Grid.'
2. Enter a title for your new post grid.
3. Select the 'Query Post' tab in the main area of the wp-admin page.
4. Change the 'Post Query Order' to Ascending and 'Post Query Orderby' to ID.
5. Select the 'Layout' tab.
6. Under the 'Content Layout' section, select 'flat-center' from the drop menu.
7. Select the 'Layout Settings' Tab.
8. Under the 'Grid Items Width' section, enter '31%' for Desktop, '90%' for Tablet, and '90%' for Mobile.
9. Under the 'Grid Items Height' section, select 'Fixed Height' and enter the value '675px'.
10. Under the 'Grid Items Margin' section, enter '1%'.
11. Under the 'Media Height' section, enter '300px'.
12. In the 'Featured Image Size' section, select 'Large' from the drop-down menu.
13. Select the 'Navigations' tab.
14. Under the 'Navigation' section, make sure you select "None" for 'Pagination'.
15. Click the 'Publish' button in the top right-hand corner.

Now we have to customize the actual layout.

16. Go back to the 'Layout' tab.
17. Under the 'Content Layout' section, click 'Edit' next to the drop-down menu (make sure flat-center is selected).
18. By default, there should be 3 sections already selected: 'Title', 'Excerpt', and 'Read More'. 
    If not, select them from the options at the top and that they are in that order from top to bottom.
    You can drag the white-sections (the ones with the red 'x' box) around to move them in order. 
19. Click the white-section that says 'Title'. This should open up some options for customization.
20. Enter '20' for the character limit.
21. Copy the following:

    display: block; font-weight: 400; letter-spacing: 0.2em; line-height: 1.2em; margin-bottom: 20px; text-align: center; text-transform: uppercase; padding: 30px 0px 8px 0px; font-size: 21px; font-family: "Futura PT", "FuturaPT", "Futura PT Book", "FuturaPTBook", "Century Gothic", sans-serif;
    
    and paste it under 'CSS' (not CSS hover!).
22. Click the white-section that says 'Excerpt'.
23. Change the character limit to '50'.
24. Copy the following:

    display: block; font: 300 12pt/1.5 Europa, "Source Sans Pro", source-sans-pro, sans-serif; padding: 5px 10px; text-align: justify;
    
    and paste it under 'CSS'.
25. Click the white-section that says 'Read More'.
26. Change the 'Read More text' to Learn More.
    If this section does not show up for you, click the red 'x' next to 'Read More' and reselect it from the options at the top.
27. Change the 'Link target' to '_self' in the drop down menu.
28. Copy the following: 

    display: block; font: 300 12pt/1.5 Europa, "Source Sans Pro", source-sans-pro, sans-serif; padding: 14px; text-align: center; text-transform: uppercase; letter-spacing: 0.1em; color: #000000;
    
    and paste it under 'CSS'.
29. Copy the following:

    color: #0066ff; transition: all 0.25s ease-out;

    and paste it under 'CSS Hover'.
30. Click the "Save Changes" button.
31. Click the 'Post Grid' Tab again from the left panel. Your new post grid should now be listed.
32. Under the 'Shortcode' section, there should be some php code that looks like <?php echo do_shortcode("[post_grid id='##']"); ?>
    Copy this code.
33. You'll need to locate the index.php and home.php files under /wp-content/particlegaming
34. Locate the previous php code for the post grid in both files; it should follow the exact same format, but with a different ID.
35. Replace the old code with the new code that you have copied.

== Quotes Collection ==

1. Once you've activated the Quotes Collection Plugin, click the 'Quotes Collection tab'.
2. To add a new quote, simply select 'Add New' from the left panel or select the 'Add New' tab.
3. Enter your quote in the 'Quote' section and the author in the 'Author' section.
4. Click the Add Quote button.

== Attaching a Modal / Popup Maker ==

1. First, hover or click 'Popup Maker' from the left panel and select 'Popup Themes' from the drop-down menu.
2. Hover over the 'Default Theme' and click 'Edit'.
3. Make sure every thing that can be set to '0' or 'None' is set to '0' or 'None', that the background color is cleared, and that the text under 'Close Settings' is cleared.
4. Click 'Update' in the top right hand cornder.
5. Find the ID of the quote you want to attach a modal to.
   You can find the ID by clicking 'Quotes Collection' in the left panel and searching for the ID number of the specific quote you want.
6. Now click 'Popup Maker' in the left panel and select 'Add Popup'. 
7. Enter a name for your modal and insert the media you want to popup by using the 'Add Media' button.
   Once you upload a picture or select a picture from the media library, select the desired size under 'Attachment Display Settings'.
8. Under 'Popup Settings', click the 'Add New Trigger' button.
9. Select 'Click Open' and click 'Add'. 
10. Under the 'Extra CSS Selectors' section, you will need to add the trigger for your specific quote. This is always in the form '.quote_id-[your specified quote id #]'.
    For example, if the ID of the quote I want to attach a modal to is 10, then I would type '.quote_id-10' (without the quotes) in the 'Extra CSS Selectors' section.
11. Under 'Popup Settings' > 'Display' > 'Appearance', make sure 'Default Theme' is selected from the drop-down menu.
12. Under 'Popup Settings' > 'Display' > 'Size', make sure the size is set to 'Auto'.
13. Under 'Popup Settings' > 'Display' > 'Position', make sure the location is set to 'Middle Center'.
14. Under 'Popup Settings' > 'Display' > 'Advanced', make sure 'Disable Overlay' is checked. THIS IS VERY IMPORTANT.
15. Go ahead and click 'Publish' in the top right hand corner.

== Making News Posts == 

1. Select the 'Posts' tab from the left hand panel. 
2. Select 'Add New'.
3. Enter your text and media images. Again, when selecting media images, make sure that they are full-size!
4. Update the categories for each post. Posts that belong on the homepage should only be categorized as 'current'.
   Older posts should be categorized as 'old'.
5. Click 'Publish'.

== Closing Notes from the Author ==

I've added some custom code to some of the plugins to make them work with each other.
However, that means /DO NOT UPDATE/ any of the plugins. If the plugins are updated, the customized code will disappear and
certain custom functions will stop working. And.... that's it! Feel free to contact me if you can't get something to work correctly.
I can be reached at anntao@ucdavis.edu, or on Discord at Poop#5227.
