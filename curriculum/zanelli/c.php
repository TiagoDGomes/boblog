<?php


//@$cv = new Curriculum();
@$cv->fullName = "Wellington Zanelli Ribeiro";
@$cv->name = "Zanelli";
@$cv->address = "-";
@$cv->age = "24 years old";
@$cv->email = "-";
@$cv->nationality = "Brazilian";
@$cv->picture = "curriculum/zanelli/zanelli.jpg";
@$cv->telephone = "-";

         /*
@$cv->competences[0]->name = "Operation System";
@$cv->competences[0]->details = '<a target="_blank" href="http://en.wikipedia.org/wiki/Microsoft_Windows">Microsoft Windows</a>;
                                <a target="_blank" href="http://en.wikipedia.org/wiki/Ubuntu">Ubuntu Linux</a>;
                                <a target="_blank" href="http://en.wikipedia.org/wiki/Slackware">Slackware Linux</a>';

@$cv->competences[1]->name = "Office";
@$cv->competences[1]->details = '<a target="_blank" href="http://en.wikipedia.org/wiki/Microsoft_Office">Microsoft Office</a>;
                                <a target="_blank" href="http://en.wikipedia.org/wiki/Open_Office">OpenOffice</a>';

@$cv->competences[2]->name = "Programming language";
@$cv->competences[2]->details = '<a target="_blank" href="http://en.wikipedia.org/wiki/Java_(programming_language)">Java</a>; 
                <a target="_blank" href="http://en.wikipedia.org/wiki/C_(programming_language)">C</a>;
                <a target="_blank" href="http://en.wikipedia.org/wiki/PHP">PHP</a>;
                <a target="_blank" href="http://en.wikipedia.org/wiki/Visual_Basic_6">Visual Basic 6</a>; 
                <a target="_blank" href="http://en.wikipedia.org/wiki/Visual_Basic_.NET">Visual Basic .NET</a>;
                <a target="_blank" href="http://en.wikipedia.org/wiki/Javascript">JavaScript</a>';
*/
@$cv->workExperience[0]->year = "2010";
@$cv->workExperience[0]->occupation = "System Developer";
@$cv->workExperience[0]->company = 'Genesis Network';
@$cv->workExperience[0]->city = "São João da Boa Vista, SP, Brazil";
@$cv->workExperience[0]->details = "<strong>Functions:</strong><ul>
<li>Systems development in Classic ASP</li>
<li>Database Solutions with SQL Server</li>
</ul>
";

@$cv->workExperience[1]->year = "2009-2010";
@$cv->workExperience[1]->occupation = "IT Trainee";
@$cv->workExperience[1]->company = '<a target="_blank" href="http://www.vanzolini.org.br/">Carlos Alberto Vanzolini Foundation</a>';
@$cv->workExperience[1]->city = "São Paulo, Brazil";
@$cv->workExperience[1]->details = "<ul><li>Videoconference assistant</li>
<li>Maintenance and computer support</li>
</ul>  
";
@$cv->workExperience[2]->year = "2005-2007";
@$cv->workExperience[2]->occupation = "Managment Trainee";
@$cv->workExperience[2]->company = '<a target="_blank" href="http://www.unifeob.edu.br">UNIFEOB</a>';
@$cv->workExperience[2]->city = "São João da Boa Vista, SP, Brazil";
@$cv->workExperience[2]->details = "<ul><li>Customer service</li>
<li>File maintenance</li>
</ul>  
";


@$cv->languages[0]->name = "Portuguese";
@$cv->languages[0]->details = "&nbsp;";


@$cv->languages[1]->name = "English";
@$cv->languages[1]->details = "&nbsp;";


@$cv->educationTraining[0]->year = "2011";
@$cv->educationTraining[0]->name = "Internet Systems Technology Course (college)";
@$cv->educationTraining[0]->local = '<a target="_blank" href="http://sbv.ifsp.edu.br">IFSP - Instituto Federal de Educação, Ciência e Tecnologia</a>';
@$cv->educationTraining[0]->city = "São João da Boa Vista, SP, Brazil";

@$cv->educationTraining[1]->year = "2008-2011";
@$cv->educationTraining[1]->name = "Programming and Systems Development Technical Course";
@$cv->educationTraining[1]->local = '<a target="_blank" href="http://sbv.ifsp.edu.br">IFSP - Instituto Federal de Educação, Ciência e Tecnologia</a>';
@$cv->educationTraining[1]->city = "São João da Boa Vista, SP, Brazil";

@$cv->educationTraining[2]->year = "2007-2008";
@$cv->educationTraining[2]->name = "Technical Business Management";
@$cv->educationTraining[2]->local = 'Prof. Hugo Sarmento';
@$cv->educationTraining[2]->city = "São João da Boa Vista, SP, Brazil";

@$cv->educationTraining[3]->year = "2005-2007";
@$cv->educationTraining[3]->name = "Administration,<br />Accounting and Administrative Assistant,<br /> Financial Assistant";
@$cv->educationTraining[3]->local = 'Prof. Hugo Sarmento';
@$cv->educationTraining[3]->city = "São João da Boa Vista, SP, Brazil";



?>