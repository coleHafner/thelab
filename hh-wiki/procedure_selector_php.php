<?php 
$file = array(
	
	'name' => 'Procedure Selector PHP',
	
	'type' => 'php',
	
	'file_name' => 'application/views/partials/procedure_selector.php',
	
	'desc' => 'This is a view that is a template for the procedure selector. It contains two unordered lists.',
	
	'properties' => null,
	
	'methods' => null,
	
	'parameters' => array(
		array(
			'name' => 'map',
			'type' => 'array',
			'desc' => 'this contains the headers for the right and left lists as 
				well as the function names required to interface with the items
				list.',
			'other' => array('Structure' => ' array(<br/>
					&nbsp;&nbsp;&nbsp;"parent" => array(<br/>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"value_getter" => [function name to get the value of the parent object],<br/>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"text_getter" => [function name to get the text of the parent object]) <br/>
					&nbsp;&nbsp;&nbsp;),<br/>
					&nbsp;&nbsp;&nbsp;"child" => array(<br/>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"value_getter" => [name of the function to get the value of the child object],<br/>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"text_getter" => [function name to get the text of the child object]) <br/>
					&nbsp;&nbsp;&nbsp;),<br/>
					&nbsp;&nbsp;&nbsp;"left_header" => [name of the left list],<br/>
					&nbsp;&nbsp;&nbsp;"right_header" => [name of the right list]<br/>
				);<br/>'
			)
		),
		array(
			'name' => 'items',
			'type' => 'array',
			'desc' => 'this contains a collection of parent/child that fill the left list.',
			'other' => array('Structure' => ' array(<br/>
				&nbsp;&nbsp;&nbsp;array(<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"parent" => [object],<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;children => [array of objects],<br/>
				&nbsp;&nbsp;&nbsp;)<br/>
				);<br/>'
			)
		),
		array(
			'name' => 'selected_items',
			'type' => 'array',
			'desc' => 'this contains a collection of parent/child objects that fill
				the right list. THIS IS OPTIONAL. If an object is present in this 
				list, it will not show up in the left list. This only works for objects
				in the child list, not the parent (as of now). It is important that you get the 
				keys set correctly in this array or else the procedure selector will
				not be able to unset the selected items from the left list.',

			'other' => array('Structure' => ' array(<br/>
				&nbsp;&nbsp;&nbsp;array( "[value of the parent]" => <br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"parent" => [object],<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;children => array("[value of the child object]" => [child object], "[value of the child object]" => [child object]) etc...,<br/>
				&nbsp;&nbsp;&nbsp;)<br/>
				);<br/>'
			)
		),
	)
);
