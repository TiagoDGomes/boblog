                    <?php
                    switch ($_GET['p']){
                        case "curriculum": 
                            if ($_GET['u']!=''){
                              include "curriculum/skeleton.php";
                            }else{
                              include "curriculum/default.phtml";  
                            }
                            break;
                        case "letter":
                            if ($_GET['u']!=''){
                              include "letter/" . $_GET['u']."/letter.php";
                            }else{
                              include "letter/default.phtml";  
                            }
                            break; 
                        case "abstract":
                            if ($_GET['u']!=''){
                              include "abstract/" . $_GET['u']."/abstract.php";
                              abstractShow();
                            }else{
                              include "abstract/default.phtml";  
                            }
                            break;
                        case "technology":
                            if ($_GET['u']!=''){
                              include "technology/" . $_GET['u']."/article.php";
                              articleShow();
                            }else{
                              include "technology/default.phtml";  
                            }
                            break;
                        case "results":
                              include "results/results.php";
                              break;
                        case "plan":
                              include "plano.phtml";
                              break;
                        default:  //pagina inicial
                            include "default.phtml";
                    }
                    
                    ?>