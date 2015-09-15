<?php


//@$cv = new Curriculum();
@$cv->fullName = "Tiago Donizetti Gomes";
@$cv->name = "Tiago";
@$cv->address = "-";
@$cv->age = "27 years old";
@$cv->email = "-";
@$cv->nationality = "Brazilian";
@$cv->picture = "curriculum/tiago/tiago.jpg";
@$cv->telephone = "-";


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

@$cv->workExperience[0]->year = "2005 (actual job)";
@$cv->workExperience[0]->occupation = "Administrative Assistant";
@$cv->workExperience[0]->company = '<a target="_blank" href="http://www.saojoao.sp.gov.br">City Hall of São João da Boa Vista, SP, Brazil</a>';
@$cv->workExperience[0]->city = "São João da Boa Vista, SP, Brazil";
@$cv->workExperience[0]->details = "<strong>Functions:</strong> Type letters, reports and other documents; 
Perform control of shipping and receiving documents, forms, processes, materials, equipment;
Make archival documents, forms, records, assist in serving the public by providing routine guidance; 
Make telephone communications, providing information, locating the recipient of the call, annotating and transmitting messages.

";

@$cv->workExperience[1]->year = "Fev 2003 – Dec 2003";
@$cv->workExperience[1]->occupation = "Quality Control Assistant";
@$cv->workExperience[1]->company = '<a target="_blank" href="http://www.dacotace.com.br">Dacota Electrical Conductors</a>';
@$cv->workExperience[1]->city = "São João da Boa Vista, SP, Brazil";
@$cv->workExperience[1]->details = "<strong>Functions:</strong> Final inspection of products, 
tests resistivity (conductive) and quality of insulation, blocking or releasing products for sale.  
";


@$cv->languages[0]->name = "Portuguese";
@$cv->languages[0]->details = "mother tongue";


@$cv->languages[1]->name = "English";
@$cv->languages[1]->details = "reading";


@$cv->educationTraining[0]->year = "2011 (studying)";
@$cv->educationTraining[0]->name = "Internet Systems Technology Course (college)";
@$cv->educationTraining[0]->local = '<a target="_blank" href="http://189.108.236.229/internet">IFSP - Instituto Federal de Educação, Ciência e Tecnologia</a>';
@$cv->educationTraining[0]->city = "São João da Boa Vista, SP, Brazil";

@$cv->educationTraining[1]->year = "2010";
@$cv->educationTraining[1]->name = "Programming and systems development Technical Course";
@$cv->educationTraining[1]->local = '<a target="_blank" href="http://189.108.236.229/internet">IFSP - Instituto Federal de Educação, Ciência e Tecnologia</a>';
@$cv->educationTraining[1]->city = "São João da Boa Vista, SP, Brazil";

?>