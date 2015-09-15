                  
<?php
   function menuSecao($mediatype){
      switch ($mediatype){
        case 'all':
?>                  
                <div data-role="content" id="menuSecao">
                    <ul data-role="listview" data-inset="true">
                        <li<?php if ($_GET['p']=='curriculum'){echo ' style="border:0" ';}?>><a href="?p=curriculum"><img src="b.gif" alt="" />Curriculum Vitae</a></li>
                        <li<?php if ($_GET['p']=='letter'){echo ' style="border:0" ';}?>><a href="?p=letter"><img src="b.gif" alt="" />Letter of Presentation</a></li>
                        <li<?php if ($_GET['p']=='abstract'){echo ' style="border:0" ';}?>><a href="?p=abstract"><img src="b.gif" alt="" />Essay</a></li>
                        <li<?php if ($_GET['p']=='technology'){echo ' style="border:0" ';}?>><a href="?p=technology"><img src="b.gif" alt="" />Technology</a></li>
                    </ul>
                </div>
                  
      <?php
             break;
         case 'handheld':

      ?>
                  <div data-role="content" id="menuSecao">
                    <ul data-role="listview" data-inset="true">
                        <li><a href="m.php?p=curriculum">Curriculum Vitae</a></li>
                        <li><a href="m.php?p=letter">Letter of Presentation</a></li>
                        <li><a href="m.php?p=abstract">Abstract</a></li>
                        <li><a href="m.php?p=technology">Technology</a></li>
                    </ul>
                  </div>      
      <?php            


             break;
        }
      }
      ?>
      
      