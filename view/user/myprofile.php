<?php
include_once './model/user.php';
include_once './model/database.php';
?>

<div class="main">
  <div id="featured_slide_">
        <ul id="content">
            <div id="pageContentCenter">
			<div class="clear"></div>
                        <h2>Il tuo profilo</h2> 
                        
                            
<p>Nome:  <?php $user->getName() ?>

                    
            </div>
        </ul>
  </div>
</div>
