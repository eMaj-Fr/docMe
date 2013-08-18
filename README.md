docMe
=====

a simple PHP documentation generator

[demo here](http://www.emaj.fr/projects/docMe/)

Getting started
---------------
1. Edit 'doc.config.php' :
  - change the default constants (optionnal) :
  - - **DOC_SIDEBAR :** enable / disable sidebar (recommended : true), values : true/false
  - - **DOC_HOME :** path to the default page (or change the content of the default home.php)
  - - **DOC_TITLE :** title of the application
  - change the **$doc** array, rules :
  - - Each element is a **section** (an associative array)
  - - Each section must have a **title** ('title'=>'my_title')
  - - Each section must have a **doc** : an array of path to the files you want to documentate ('doc'=>array('file1.php',doc2.php,...)
  - - Look at the default config to see an example		
2. Add comments in your files to describe functions and methods, put each comment before the function/method, rules :
  - **function / method **: *@function* description of the fonction
  - **param function / method** : *@param* (TYPE) $name : description of the param
  - **key of a param array** : *@key* (TYPE) $name : description of the key
  - **return value of a function / method **: *@return* (TYPE) : description of the return value
  - the detection of properties is automatic
  - you can define everywhere the **template** of the file : *class* or *default* (see tpl folder). Just add this comment : *@template* : template_name
  - take a look to example.php to see examples
