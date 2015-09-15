	
<?php 
    echo '<img src="favicon.png" width="" alt="" style="float:left" />&nbsp;
	<a href=".">Boblog</a> ';
	for ($i = 1; $i<=2; $i++) {
	    echo ' › ';
        if ($nvn[$i+1]!="" ) {
        	echo '<a href="' . $nvl[$i] . '">'. $nvn[$i] . '</a>';
        }
        else {
        	echo $nvn[$i];
        	break;
        }
    }
	?>
<script type="text/javascript">document.title = <?php echo '"'. implode(" › ", $nvn) . '"'; ?></script>