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

  <?php if (empty($variables['form']['#block']->subject)) : ?>
    <h3 class="hidden"><?php print t('Search form'); ?></h3>
  <?php endif; ?>
  <?php print $search_form; ?>
