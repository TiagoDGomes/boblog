<?php

if (!file_exists("curriculum/".$_GET['u'] . '/c.php')){
    echo "nao existe " . "curriculum/".$_GET['u'] . '/c.php';
} else {
  	
   // include 'Curriculum.php';
    
   // $cv = new Curriculum();
    error_reporting(0);
    include $_GET['u'] . '/c.php';
?>
<div id="cv">
    <h2><?php echo $cv->fullName; ?></h2>
    <div id="cvPicture">
        <img src="<?php echo $cv->picture; ?>" alt="<?php echo $cv->fullName; ?>" />
    </div>
    <div id="cvDetails">
        <dl>
            <dt>Address:</dt><dd><?php echo $cv->address; ?></dd>
            <dt>Telephone:</dt><dd><?php echo $cv->telephone; ?></dd>
            <dt>E-mail: </dt><dd><a href="mailto:<?php echo $cv->email; ?>"><?php echo $cv->email; ?></a></dd>
            <dt>Nationality: </dt><dd><?php echo $cv->nationality; ?></dd>
            <dt>Age: </dt><dd><?php echo $cv->age; ?></dd>
        </dl>
    </div>


    <?php if (is_array($cv->educationTraining)) { ?>

        <h3>Education and training</h3>
        <div id="cvEducationTraining">
            <dl>

                <?php foreach ($cv->educationTraining as $t) { ?>

                    <dt><?php echo $t->year; ?></dt>
                    <dd>
                        <span class="name"><?php echo $t->name; ?> </span><br /> 
                        <span class="local"><?php echo $t->local; ?> </span><br />
                        <span class="city"><?php echo $t->city; ?> </span>                
                    </dd>


                <?php } ?>  
            </dl>
        </div>




    <?php } if (is_array($cv->workExperience)) { ?>

        <h3>Work experience</h3>
        <div id="cvWorkExperience">
            <dl>
                <?php foreach ($cv->workExperience as $t) { ?>  



                    <dt><?php echo $t->year; ?></dt>
                    <dd>
                        <span class="occupation"><?php echo $t->occupation; ?> </span><br />
                        <span class="company"><?php echo $t->company; ?> </span><br />
                        <span class="city"><?php echo $t->city; ?> </span><br />
                        <span class="details"><?php echo $t->details; ?> </span>
                    </dd>



                <?php } ?>
            </dl>
        </div>


    <?php } if (is_array($cv->languages)) { ?>

        <h3>Languages</h3>
        <div id="cvLanguages">
            <dl>
                <?php foreach ($cv->languages as $t) { ?>

                    <dt><?php echo $t->name; ?></dt><dd><?php echo $t->details; ?></dd>

                <?php } ?>
            </dl>
        </div>


    <?php } if (is_array($cv->competences)) { ?>

        <h3>Computer skills and competences</h3>
        <div id="cvCompExp">
            <dl>
                <?php foreach ($cv->competences as $t) { ?>

                    <dt><?php echo $t->name; ?></dt><dd><?php echo $t->details; ?></dd>             

                <?php } ?>
            </dl>
        </div>

    <?php } ?>


</div>
<?php 

}

?>