<?php
/*
  subcellular:: page.tpl

  (c)2012 Adam Blankenship
 */
/*
 Custom page templates can be created for content types by adding the template:
 * /templates/page--content-type.tpl.php
 Render cck fields:
 *  <?php print render(field_view_field('node', $node, 'field_name', array('label' => 'hidden'))); ?>
 
  VARIABLES

  General Utility Variables:
  - $base_path: The base URL path of the Drupal installation. At the very
  least, this will always default to "/"
  - $directory: The directory the template is located in, e.g. modules/system
  or themes/bartik.
  - $is_front: TRUE if the current page is the front page.
  - $logged_in: TRUE if the user is registered and signed in.
  - $is_admin: TRUE if the user has permission to access administration pages.

  Site Identity:
  - $front_page: The URL of the front page. Use this instead of $base_path,
  when linking to the front page. This includes the language domain or
  prefix.
  - $logo: The path to the logo image, as defined in theme configuration.
  - $site_name: The name of the site, empty when display has been disabled
  in theme settings.
  - $site_slogan: The slogan of the site, empty when display has been disabled
  in theme settings.

  Navigation:
  - $main_menu (array): An array containing the Main menu links for the
  site, if they have been configured.
  - $secondary_menu (array): An array containing the Secondary menu links for
  the site, if they have been configured.
  - $full_menu_tree : An array of all links in the Main menu.
  - $breadcrumb: The breadcrumb trail for the current page.

  Page Layout:
  - $content_width : Grid class to set width of main content.
  - $content_class_single_sidebar : Grid class to set width of main content with one sidebar displayed.
  - $content_class_dual_sidebar : Grid class to set width of main content with two sidebars displayed.
  - $sidebar_width : Grid class to set width of sidebars.
  - $triptych_class : Grid class to set width of triptych elements.

  Page Content:
  - $title_prefix (array): An array containing additional output populated by
  modules, intended to be displayed in front of the main title tag that
  appears in the template.
  - $title: The page title, for use in the actual HTML content.
  - $title_suffix (array): An array containing additional output populated by
  modules, intended to be displayed after the main title tag that appears in
  the template.
  - $messages: HTML for status and error messages. Should be displayed
  prominently.
  - $tabs (array): Tabs linking to any sub-pages beneath the current page
  (e.g., the view and edit tabs when displaying a node).
  - $action_links (array): Actions local to the page, such as 'Add menu' on the
  menu administration interface.
  - $feed_icons: A string of all feed icons for the current page.
  - $node: The node object, if there is an automatically-loaded node
  associated with the page, and the node ID is the second argument
  in the page's path (e.g. node/12345 and node/12345/revisions, but not
  comment/reply/12345).

  Regions:
  - $page['console']: Help, warnings, & other system notifications
  - $page['header']: Page Header
  - $page['nav']: System Navigation
  - $page['hilight']: Items highlighted at the top of the content area.
  - $page['sidebar_left']: Left Sidebar
  - $page['content']: The main content of the current page.
  - $page['sidebar_right']: Right Sidebar
  - $page['triptych_left']: Left triptych panel
  - $page['triptych_middle']: Middle triptych panel
  - $page['triptych_right']: Right triptych panel
  - $page['footer_left']: Footer Left Column
  - $page['footer_middle']: Footer Middle Column
  - $page['footer_right']: Footer Right Column
  - $page['footer']: Items for the full footer region, the last elements rendered.

 */
?>

    <div id="page-wrap">
        <div id="skipLinks" class="hidden">
            <a href="#content"><?php print t('Skip to main content'); ?></a>
            <a href="#nav"><?php print t('Skip to navigation'); ?></a>
        </div>

        <?php if ($page['header_top']) : ?>
            <div id="header-top">
                <?php print render($page['header_top']); ?>
            </div>
        <?php endif; ?>

        <div id="header">
            <div id="logo">
                <?php
                if ($site_name) {
                    print "<h2>".$title." | ".$site_name."</h2>";
                }
                ?>
            </div>
            <?php if (isset($main_menu)) : ?>
                <div id="nav">
                    <?php print render($main_menu); ?>
                </div>
            <?php endif; ?>

            <?php print render($page['header']); ?>
        </div>
        <!-- /#header -->

        <?php if ($page['header_bottom']) : ?>
            <div id="header-bottom">
                <?php print render($page['header_bottom']); ?>
            </div>
        <?php endif; ?>

        <div id="app">
            <?php
            print render($title_prefix);
            // Page Title
            if ($title) {
                print '<h1 id="page-title">' . $title . '</h1>';
            }
            print render($title_suffix);
            ?>
            <?php if ($tabs): ?>
                <div class="tabs">
                    <?php print render($tabs); ?>
                </div>
            <?php endif; ?>
            <div id="content-position">
                <div id="content-wrap" class="cell">


                    <?php
                    if ($action_links) {
                        print '<ul class="links">' . render($action_links) . '</ul>';
                    }

                    if ($page['console'] || ($show_messages && $messages)) :
                        ?>
                        <div id="console">
                            <?php
                            print render($page['console']);
                            if ($show_messages && $messages) {
                                print $messages;
                            }
                            ?>
                        </div>
                    <?php endif; ?>

                    <?php if ($page['sidebar_left']) : ?>
                        <div id="sidebar-left" class="<?php print $sidebar_class; ?>">
                            <?php print render($page['sidebar_left']); ?>
                        </div>
                    <?php endif; ?>

                    <?php if ($page['content_top']) : ?>
                        <div id="content-top" class="cell">
                            <?php print render($page['content_top']); ?>
                        </div>
                    <?php endif; ?>

                    <div id="content" class="<?php print $content_class; ?>">
                        <?php
                        // Breadcrumb Navigation
                        if (theme_get_setting('breadcrumb_display' && !$is_front)) {
                            print $breadcrumb;
                        }
                        ?>

                        <?php
                        // Main Content
                        print render($page['content']);
                        ?>

                        <?php if ($page['content_bottom']) : ?>
                            <div id="content-bottom" class="cell">
                                <?php print render($page['content_bottom']); ?>
                            </div>
                        <?php endif; ?>

                    </div>

                    <?php if ($page['sidebar_right']) : ?>
                        <div id="sidebar-right" class="<?php print $sidebar_class; ?>">
                            <?php print render($page['sidebar_right']); ?>
                        </div>
                    <?php endif; ?>

                </div>
                <!-- /#content-wrap-->
            </div>
            <!-- /#content-position -->
        </div>
        <!-- /#app-->


        <div id="footer" class="cell">
            <?php print $social_media_share; ?>
            <?php print $social_media_follow; ?>

            <?php if ($page['footer_top']) : ?>
                <div id="footer-top" class="cell">
                    <?php print render($page['footer_top']); ?>
                </div>
            <?php endif; ?>
            <?php
            if ($page['footer']) {
                print render($page['footer']);
            }
            ?>

            <div id="footer-bottom" class="cell">
                <?php if ($page['footer_bottom']) : ?>
                    <?php print render($page['footer_bottom']); ?>
                <?php endif; ?>

                <?php if ($copyright): ?>
                    <div id="copyright"><?php print $copyright; ?></div>
                <?php endif; ?>

            </div>
            <!-- /#footer-bottom -->

        </div>
        <!-- /#footer -->
    </div>
    <!-- /#page-wrap-->
<?php
print "\n";

// End of File