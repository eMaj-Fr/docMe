<h1>getting started</h1>
<ol>
	<li>Edit 'doc.config.php' :

		<ul>
			<li>change the default constants (optionnal) :
				<ul>
					<li><strong>DOC_SIDEBAR :</strong> enable / disable sidebar (recommended : true), values : true/false</li>
					<li><strong>DOC_HOME :</strong> path to the default page (or change the content of the default home.php)</li>
					<li><strong>DOC_TITLE :</strong> title of the application</li>
				</ul>
			</li>
			<li>change the <strong>$doc</strong> array, rules :
				<ul>
					<li>Each element is a <strong>section</strong> (an associative array)</li>
					<li>Each section must have a <strong>title</strong> ('title'=>'my_title')</li>
					<li>Each section must have a <strong>doc</strong> : an array of path to the files you want to documentate ('doc'=>array('file1.php',doc2.php,...))
					<li>Look at the default config to see an example</li>
				</ul>
			</li>
		</ul>
	</li>
	<li>Add comments in your files to describe functions and methods, put each comment before the function/method, rules :
		<ul>
			<li><strong>function / method </strong>: <em>@function</em> description of the fonction</li>
			<li><strong>param function / method</strong> : <em>@param</em> (TYPE) $name : description of the param</li>
			<li><strong>key of a param array</strong> : <em>@key</em> (TYPE) $name : description of the key</li>
			<li><strong>return value of a function / method </strong>: <em>@return</em> (TYPE) : description of the return value</li>
			<li>the detection of properties is automatic</li>
			<li>you can define everywhere the <strong>template</strong> of the file : <em>class</em> or <em>default</em> (see tpl folder). Just add this comment : <em>@template</em> : template_name
			<li>take a look to example.php to see examples</li>
		</ul>
	</li>
</ol>


