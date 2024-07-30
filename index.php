<?php
			error_reporting(E_ALL ^ E_NOTICE);
			include 'menu.php';
			
                    $nvn[0] =  "Boblog";
                    switch ($_GET['p']){
                        case "curriculum":
                            $nvn[1]= "Curriculum Vitae"; 
                            $nvl[1]="?p=curriculum";
                            switch ($_GET['u']){
                                case "zanelli":
                                  $nvn[2]="Wellington Zanelli";
                                  break;
                                case "bruna":
                                  $nvn[2]="Bruna Liberalli";
                                  break;
                                case "tiago":
                                  $nvn[2]="Tiago Donizetti";
                                  break;                                
                            }
                            break;
                        case "letter":
                            $nvn[1]= "Letter of presentation"; 
                            $nvl[1]="?p=letter";
                            
                            switch ($_GET['u']){
                                case "zanelli":
                                  $nvn[2]="Wellington Zanelli";
                                  break;
                                case "bruna":
                                  $nvn[2]="Bruna Liberalli";
                                  break;
                                case "tiago":
                                  $nvn[2]="Tiago Donizetti";
                                  break;                                
                            }
                            break;
                        case "abstract":
                            $nvn[1]= "Essay"; 
                            $nvl[1]="?p=abstract";
                            switch ($_GET['u']){
                                case "forrestgump":
                                  $nvn[2]="More than a well told story";
                                  break;
                               case "ipv6":
                                  $nvn[2]="IPv4 addresses are over. Now what?";
                                  break;
                            }
                            break;
                        case "technology":
                            $nvn[1]= "Technology"; 
                            $nvl[1]="?p=technology";
                            switch ($_GET['u']){
                                case "videogame":
                                  $nvn[2]="History of the video games";
                                  break;
                            }
                            break;
                        case "results":                                                       
                            $nvn[1]="Relatório";
                            
                            break;
                        case "plan":
                            $nvn[1]="Plan";
                            
                            break;
                        default:  //pagina inicial
                            $nvn[1]="Welcome";
                    }
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"
      xmlns:og="http://ogp.me/ns#"
      xmlns:fb="http://www.facebook.com/2008/fbml" xml:lang="en" lang="en">

    <head>
	<title>Boblog</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	
	<link rel="image_src" href="http://tdg.zz.mu/boblog/images/mini1.png" />
	<meta property="fb:admins" content="1523580292,1324898358"/>
	<meta property="fb:app_id" content="295805813770782"/>
	<meta property="og:title" content="<?php echo implode(" - ", $nvn) ?>"/>        
	<meta property="og:type" content="document"/>
	<meta property="og:url" content=<?php echo '"http://tdg.zz.mu/boblog'  . urldecode($_SERVER["REQUEST_URI"])  .'"' ?> />
	<meta property="og:image" content="http://tdg.zz.mu/boblog/images/mini1.png"/>
	<meta property="og:site_name" content="Boblog"/>
	<meta property="og:description" content="Boblog - um site com várias coisas =)"/>
	
	<link rel="shortcut icon" href="favicon.png" />
	<link href="all.css" rel="stylesheet" type="text/css" media="all" />        
	<!--[if gt IE 6]> <!-->
	<link href="screen.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="screen_print.css" rel="stylesheet" type="text/css" media="print,screen" />
	<link href="print.css" rel="stylesheet" type="text/css" media="print" />
	<!--<![endif]-->
	
	<!--[if lt IE 7]> 
	<link href="mobile.css" rel="stylesheet" type="text/css" media="all" />
	<![endif]-->
	<link href="mobile.css" rel="stylesheet" type="text/css" media="handheld" />
	
	<script type="text/javascript" src="jquery-1.6.3.min.js"></script>

        <?php
        if ($_GET['p'] == '') {
            ?>


            <script type="text/javascript" src="jquery.cycle.all.latest.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    $('.pics').cycle({ 
                        fx:     'fade', 
                        speed:  'slow', 
                        timeout: 10000, 
                        next:   '#nextSS', 
                        prev:   '#prevSS'
    						
                    });
                });
            </script>

        <?php } ?>


    </head>

    <body>
        <div data-role="page" id="all">
            <div id="cabecalho">

		<div id="titulo">
                    <div data-role="header">
                        <h1><a href="."><img src="b.gif" alt="" />Boblog</a></h1>
                        
                    </div>
                    	
                    <?php
                    menuSecao('all');
                    ?>


                </div>
            </div>
            
            <div id="centro">

                <div class="navMenu">
		  <div id="google_translate_element"></div><script>
function googleTranslateElementInit() {
  new google.translate.TranslateElement({
    pageLanguage: 'en',
    autoDisplay: false,
    layout: google.translate.TranslateElement.InlineLayout.SIMPLE
  }, 'google_translate_element');
}
</script><script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
		  <div class="menu">
                    <?php
                    include 'navBar.php';
                    ?>
		  </div> 
		                
                </div>
                <div id="conteudo">

                
                    <?php
                    include 'conteudo.php';
                    ?>
                </div>
                <div class="socialplugin like bottom">
                	<div class="fb-like" data-href=<?php echo '"http://boblog.site90.com'  . urldecode($_SERVER["REQUEST_URI"])  .'"' ?> data-send="true" data-layout="button_count" data-width="100" data-show-faces="false"></div>
                	
		  </div>
                
                <div id="nmb" class="navMenu">
			  <div class="menu bottom">
	                    <?php
	                    include 'navBar.php';
	                    ?>
			  </div>          
                </div>
		  
<?php include 'comments.phtml'; ?>

            </div>
            <address>
                &copy; 2011 - Bruna Liberali, Wellington Zanneli and Tiago Donizetti [<a href="?p=plan">Plano do Blog</a>] - [<a href="?p=results">Relatório</a>]

            </address>
        </div>

    </body>
</html>
