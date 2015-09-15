<?php

$cv = new Curriculum();
$cv->fullName = "Empty User";
$cv->name = "Empty";
$cv->address = "0, Up and Down Street, 00000-000, São João da Boa Vista, Brazil ";
$cv->age = "00";
$cv->email = "email@email.com";
$cv->nationality = "Brazilian";
$cv->picture = "empty.gif";
$cv->telephone = "0000-0000";

/* Os arrays não tem tamanho fixo. Pode adicionar quanto quiser. */

$cv->competences[0]->name = "Operation System";
$cv->competences[0]->details = "Windows, Linux";

$cv->competences[1]->name = "Office";
$cv->competences[1]->details = "Microsoft Word, OpenOffice";

$cv->workExperience[0]->year = "1900-2000";
$cv->workExperience[0]->occupation = "Desocupado no trampo";

$cv->workExperience[0]->company = "Trampo doido";
$cv->workExperience[0]->city = "Sao Paulo, Brazil";
$cv->workExperience[0]->details = "
    Lorem ipsum dolor sit amet consectetuer diam ligula justo non consectetuer. Leo vitae ipsum diam accumsan Sed tincidunt quis lobortis Vestibulum sapien. Odio et tempus neque mauris Phasellus tellus nulla lorem vitae laoreet. Massa elit pretium fringilla eu Aenean nunc Nam Sed vel quis. Magna eros tempor faucibus consequat Aenean vestibulum nibh convallis leo pellentesque. Vel urna porttitor Curabitur et Donec Aliquam sociis quis Vestibulum pretium. Neque ligula.
    Quis metus Lorem Pellentesque Morbi massa id et interdum at pellentesque. Ullamcorper habitasse sed orci morbi pellentesque sapien ac rhoncus lacus nunc. Porttitor elit condimentum dictum lacus Curabitur Nullam tellus Praesent auctor Vivamus. Vivamus Aliquam eu Vivamus nec hendrerit justo Nam nunc Aliquam euismod. Sit netus vel amet orci vestibulum hendrerit libero Suspendisse Pellentesque diam. Felis sollicitudin magna Vestibulum Cras id sem tempus congue.
    
";

$cv->languages[0]->name = "Portuguese";
$cv->languages[0]->details = "mother tongue";


$cv->languages[1]->name = "English";
$cv->languages[1]->details = "reading";

$cv->languages[2]->name = "Mandarim";
$cv->languages[2]->details = "reading, writing, speaking";
?>
