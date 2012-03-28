<?php 

#    Responsive Bricks
#    (c) 2012 Giovanni Canzio <giovanni.canzio@gmail.com>
#    
#    This file is part of Responsive Bricks
#
#    This is free software: you can redistribute it and/or modify
#    it under the terms of the GNU General Public License as published by
#    the Free Software Foundation, either version 3 of the License, or
#    (at your option) any later version.
#
#    Responsive Bricks is distributed in the hope that it will be useful,
#    but WITHOUT ANY WARRANTY; without even the implied warranty of
#    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#    GNU General Public License for more details.
# 

?>

<div class="container">
    <!-- START Header -->

    <header class="sixteen columns">
        
    <?php 
    if ($site_name || $site_slogan) {
        if ($logo) {

                if ($site_name) { ?>
                    
                    <h1 class="site-name">
                    <a href="<?php print $base_path ?>" title="<?php print $site_name ?>">

                    <img src="<?php print $logo ?>" alt="<?php print $site_name ?>" />

                    </a>
                    </h1>
                    <?php if ($site_slogan) {?>
                        <h2 class='site-slogan hidden'><?php print $site_slogan; ?></h2>
                        
              <?php }
              
                }?>

  <?php } else {
                if ($site_name) { ?>
                    
                    <h1 class="site-name">
                    <a href="<?php print $base_path ?>" title="<?php print $site_name ?>">
                    <?php print $site_name ?>
                    </a>
                    </h1>
                    <?php if ($site_slogan) {?>
                        <h2 class='site-slogan'><?php print $site_slogan; ?></h2>
                    <?php    }
                }
        }
   
                }?>
                                
            <!-- search box -->
                                
            <?php if ($page['search_box']): ?>
            <?php print render ($page['search_box']); ?>
            <?php endif; ?>
            
            <!-- login/register links | logged-in user info -->
            
            <?php if (!$is_admin): ?>
                <ul id="authorize">
                    <?php 
                    global $user; 
                    if ($user->uid != 0) { 
                            print '<li class="first">' .t('Logged in as '). '<a href="' .url('user/'.$user->uid). '">' .$user->name. '</a></li>'; 
                            print '<li><a href="' .url('user/logout'). '">' .t('Logout'). '</a></li>'; 
                            if ($feed_icons):
                            print '<li>'.$feed_icons.'</li>'; 
                            endif;
                        } else { 
                            print '<li class="first"><a href="' .url('user'). '">' .t('Login'). '</a></li>'; 
                            print '<li><a href="' .url('user/register'). '">' .t('Register'). '</a></li>'; 
                            if ($feed_icons):
                            print '<li>'.$feed_icons.'</li>'; 
                            endif;
                            }
                    ?>
                </ul>
            <?php endif; ?>
            
            <a href="https://github.com/giovannicanzio/Responsive-Bricks/zipball/master" style="position: absolute; top: 120px; right: 10px;" class="remove-bottom button">Download Responsive Bricks from Github</a>
            
    </header>

    <!-- END Header -->
    
    <!-- START Top menu -->
    
    <!--nav class="sixteen columns" id="top_navigation">
        <?php 
//            if ($main_menu) {
//                print theme('links__system_main_menu', array('links' => $main_menu));  
//            } elseif (!empty($page['superfish_menu'])) {
//                print render ($page['superfish_menu']);
//            }
        ?>
    </nav-->
    
    <!-- END Top menu -->
    
    <?php if($page['top_navigation']) : ?>
    <nav class="sixteen columns" id="top_navigation">
        <?php print render ($page['top_navigation']); ?>
    </nav>
    <?php endif; ?>
    
    
    <!-- START Communication banner - "homepage only" visibility is determined from backend -->
    
    <?php if($page['communication_banner']) : ?>
    <div id="communicationBanner" class="sixteen columns">
        <?php print render ($page['communication_banner']); ?>
    </div>
    <?php endif; ?>
    
    <!-- END Communication Banner -->    
    
    
    <!-- START Preface -->
     <?php if($page['preface_first'] || $page['preface_middle'] || $page['preface_last']) : ?>
          <?php if($page['preface_first']) : ?>
          <div class="preface_container one-third column">
            <img src="sites/all/themes/Responsive-Bricks/images/target_home_image.gif" alt="alt attribute" class="fullWidth_img" />
            <?php print render ($page['preface_first']); ?>
          </div>
          <?php endif; ?>
          <?php if($page['preface_middle']) : ?>
          <div class="preface_container one-third column">
          <img src="sites/all/themes/Responsive-Bricks/images/target_home_image.gif" alt="alt attribute" class="fullWidth_img" />
          <?php print render ($page['preface_middle']); ?>
          </div>
          <?php endif; ?>
          <?php if($page['preface_last']) : ?>
          <div class="preface_container one-third column">
          <img src="sites/all/themes/Responsive-Bricks/images/target_home_image.gif" alt="alt attribute" class="fullWidth_img" />
          <?php print render ($page['preface_last']); ?>
          </div>
          <?php endif; ?>
    <?php endif; ?>
    
    <!-- END Preface -->
    
    
    <!-- START Left Column (sidebar_first) -->
    
    <?php if ($page['sidebar_first']): ?>
        <section id="leftCol" class="four columns <?php if (!$is_front) { echo "internalLeftCol"; }?>">
        <?php print render($page['sidebar_first']); ?>
        </section>
    <?php endif; ?>
    
    <!-- END Left Column (sidebar_first) -->
    
    
    <!-- ### START MAIN CONTENT ### -->
    
    <?php if($page['sidebar_first'] && $page['sidebar_second']) {
        $contentWidth = "eight columns";
    } else {
        $contentWidth = "twelve columns";
    }?>
    
        <section id="content" class="<?php echo $contentWidth;?>">
            
            <!-- START help -->
            
            <?php if ($page['help']) : ?>
                <?php print render ($page['help']); ?>
            <?php endif; ?>
            
            <!-- END help -->
            
            <!-- START content_top -->
            
            <?php if ($page['content_top']) : ?>
                <?php print render ($page['content_top']); ?>
            <?php endif; ?>
            
            <!-- END content_top -->
            
            <!-- START breadcrumb/messages -->
            
            <?php if (!$is_front) print $breadcrumb; ?>
            <?php if ($show_messages) { print $messages; }; ?>
            
            <!-- END breadcrumb/messages -->
            
            <!-- START title block (prefix / title / suffix) -->
            <?php print render($title_prefix); ?>
            <?php if ($title): ?>
                <h3 class="title" id="page-title">
                    <?php print $title; ?>
                </h3>
            <?php endif; ?>
            <?php print render($title_suffix); ?>
            
            <!-- END title block (prefix / title / suffix) -->
            
            <!-- START EDIT MODE TOOLS -->
            
            <!-- START tabs -->
            
            <?php if ($tabs): ?>
                <div class="tabs">
                    <?php print render($tabs); ?>
                </div>
            <?php endif; ?>
            
            <!-- END tabs (EDIT MODE) -->
            
            <?php if ($action_links): ?>
                <ul class="action-links">
                    <?php print render($action_links); ?>
                </ul>
            <?php endif; ?>
            
            <!-- END EDIT MODE TOOLS -->
            
            <!-- START Main Content -->
            
            <?php if ($page['content']) : ?>
                <div class="content-middle">
                    <?php print render ($page['content']); ?>
                </div>
            <?php endif; ?>
            
            <!-- END Main Content -->
            
        </section>
    
        <!-- ### END MAIN CONTENT ### -->

        <!-- ### START Right Column (sidebar_second) ### -->

        <?php if ($page['sidebar_second']): ?>
            <section id="rightCol" class="four columns">
            <?php print render($page['sidebar_second']); ?>
            </section>
        <?php endif; ?>

        <!-- ### END Right Column (sidebar_first) ### -->
        
        <!-- ### START BOTTOM REGIONS ### -->
        
        <!-- START First / Middle / Last -->
        <?php if($page['bottom_first'] || $page['bottom_middle'] || $page['bottom_last']) : ?>
            <?php if($page['bottom_first']) : ?>
                <section id="bottom_first" class="one-third column clearLeft">
            <?php print render ($page['bottom_first']); ?>
                </section>
            <?php endif; ?>
            <?php if($page['bottom_middle']) : ?>
                <section id="bottom_middle" class="one-third column">
            <?php print render ($page['bottom_middle']); ?>
                </section>
            <?php endif; ?>
            <?php if($page['bottom_last']) : ?>
                <section id="bottom_last" class="one-third column">
            <?php print render ($page['bottom_last']); ?>
                </section>
            <?php endif; ?>
        <?php endif; ?>

        <!-- END First / Middle / Last -->
        
        <!-- START Bottom 1/2/3/4 -->
        
        <?php if($page['bottom_1'] || $page['bottom_2'] || $page['bottom_3'] || $page['bottom_4']) : ?>
            <?php if($page['bottom_1']) : ?>
                <section id="bottom_1" class="four columns">
            <?php print render ($page['bottom_1']); ?>
                </section>
            <?php endif; ?>
            <?php if($page['bottom_2']) : ?>
                <section id="bottom_2" class="four columns">
            <?php print render ($page['bottom_2']); ?>
                </section>
            <?php endif; ?>
            <?php if($page['bottom_3']) : ?>
                <section id="bottom_3" class="four columns">
            <?php print render ($page['bottom_3']); ?>
                </section>
            <?php endif; ?>
            <?php if($page['bottom_4']) : ?>
                <section id="bottom_4" class="four columns">
            <?php print render ($page['bottom_4']); ?>
                </section>
            <?php endif; ?>

        <?php endif; ?>
        
        <!-- END Bottom 1/2/3/4 -->
        
        <!-- ### END BOTTOM REGIONS ### -->
        
        <!-- START footer -->
        
        <?php if($page['prefooter']): ?>
            <div id="prefooter" class="sixteen columns">
                <?php print render ($page['prefooter']); ?>
            </div>
        <?php endif; ?>
        
        <!-- END footer -->

        <!-- START footer -->
        
        <?php if($page['footer']): ?>
            <div id="footer" class="sixteen columns">
                <?php print render ($page['footer']); ?>
            </div>
        <?php endif; ?>
        
        <!-- END footer -->

</div>