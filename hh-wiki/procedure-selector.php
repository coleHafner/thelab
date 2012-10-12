<?php
$file = array(
	
	'name' => 'Procedure Selector',
	
	'type' => 'javascript',
	
	'file_name' => 'docroot/js/procedure_selector.js',
	
	'desc' => '
		The procedure picker is a UI module that allows the users to select items 
		from a set of nested lists via mouse click to add/remove items from an entity.',
	
	'properties' => array(
		array(
			'name' => 'left_list',
			'type' => 'object',
			'desc' => 'the ul element of the left list',
			'other' => array('Selector', '#all-procs')
		),
		array(
			'name' => 'right_list',
			'type' => 'object',
			'desc' => 'the ul element of the right list list',
			'other' => array('Selector', '#selected-procs')
		),
	),
	
	'methods' => array(
		array(
			'name' => 'moveItem',
			'desc' => 'moves an item from one list to another',
			'return' => 'void',
			'other' => null,
			'parameters' => array(
				array(
					'name' => 'el',
					'type' => 'object',
					'desc' => 'the item to move. li element.',
					'required' => true
				),
				array(
					'name' => 'target',
					'type' => 'object',
					'desc' => 'the list to move to. ul element',
					'required' => true
				),
				array(
					'name' => 'move_all',
					'type' => 'boolean',
					'desc' => 'if true, all items in the el\'s parent list are moved.',
					'required' => true
				),
			),
		),
		array(
			'name' => 'togglePlaceHolders',
			'desc' => 'insert place holders if a list is empty. Also responsible
				for toggling the add all/remove all links.',
			'return' => 'void',
			'other' => null,
			'parameters' => array(
				array(
					'name' => 'el',
					'type' => 'object',
					'desc' => 'list item that was clicked. li element.',
					'required' => true
				),
				array(
					'name' => 'el_parent',
					'type' => 'object',
					'desc' => 'the parent of the el',
					'required' => true
				),
				array(
					'name' => 'target',
					'type' => 'object',
					'desc' => 'ul list target',
					'required' => true
				),
			),
		),
		
		array(
			'name' => 'toggleChildList',
			'desc' => 'Shows or hides the list via slideup/slidedown effect. Also controls
				the plus/minus icons at the top of each list.',
			'return' => 'void',
			'other' => null,
			'parameters' => array(
				array(
					'name' => 'el',
					'type' => 'object',
					'desc' => 'li that was clicked.',
					'required' => true
				),
			),
		),
		array(
			'name' => 'alphabetizeInnerList',
			'desc' => 'Alphabetizes the list. Sorts on li.text()',
			'return' => 'void',
			'other' => null,
			'parameters' => array(
				array(
					'name' => 'el',
					'type' => 'object',
					'desc' => 'ul to sort.',
					'required' => true
				),
			),
		),
		
		array(
			'name' => 'alphabetizeOuterList',
			'desc' => 'Alphabetizes the list. Sorts on li.find(\'div.parent-text\')text()',
			'return' => 'void',
			'other' => null,
			'parameters' => array(
				array(
					'name' => 'el',
					'type' => 'object',
					'desc' => 'ul to sort.',
					'required' => true
				),
			),
		),
		
		array(
			'name' => 'targetIsRight',
			'desc' => 'Determines if the list past is the list on the right side.',
			'return' => 'void',
			'other' => null,
			'parameters' => array(
				array(
					'name' => 'target',
					'type' => 'object',
					'desc' => 'ul element.',
					'required' => true
				),
			),
		),
		
		array(
			'name' => 'getSelected',
			'desc' => 'Grabs the selected items from the left list. Returns an array
				organized by parent id, chilren ids. ',
			'return' => 'array',
			'other' => null,
			'parameters' => array(),
		),
		
		array(
			'name' => 'getSelectedProcedures',
			'desc' => 'Does the same as getSelected, except returns an array of objects
				instead of an array of arrays',
			'return' => 'array',
			'other' => null,
			'parameters' => array(),
		),
		
		array(
			'name' => 'reset',
			'desc' => 'moves all the items in the right list to the left list.',
			'return' => 'array',
			'other' => null,
			'parameters' => array(),
		),
		
		array(
			'name' => 'populate',
			'desc' => 'takes in an array of ids and selects each id from the left
				list and moves it to the right list. Each list item has the id attribute
				of its primary key.',
			'return' => 'void',
			'other' => null,
			'parameters' => array(
				array(
					'name' => 'procedures',
					'type' => 'array',
					'desc' => 'array of li ids (strings)',
					'required' => true
				),
			),
		),
	),
);
?>

<!DOCTYPE html>
<html>
<head>
	<style>
		.parameters {
			border-spacing:5px;
		}
		
		.parameters th{
			text-align:left;
			font-weight:normal;
		}
		
		.name {
			font-weight:bold;
		}
	</style>
</head>

<body>
	<h1><?php echo $file['name']; ?></h1>
	
	<h4>Description</h4>
	<p><?php echo $file['desc']; ?></p>
	
	<h4>Properties</h4>
<?php foreach($file['properties'] as $prop) : ?>
	<p>
		Name: <span class="name"><?php echo $prop['name']; ?></span><br/>
		Type: <?php echo $prop['type']; ?><br/>
		Description: <?php echo $prop['desc']; ?><br/>
		<?php if($prop['other']) : ?>
		Other: <?php echo array_shift($prop['other']); ?>
		<?php endif; ?>
	</p>
<?php endforeach; ?>
	
	<h4>Methods</h4>
<?php foreach($file['methods'] as $mth) : ?>
	<p>
		Name: <span class="name"><?php echo $mth['name']; ?></span><br/>
		Return Type: <?php echo $mth['return']; ?><br/>
		Description: <?php echo $prop['desc']; ?><br/>
		Parameters:<br/>
		<table class="parameters">
			<tr>
				<th>Name</th>
				<th>Type</th>
				<th>Description</th>
				<th>Required</th>
			</tr>
		<?php foreach($mth['parameters'] as $param) : ?>
			<tr>
				<td><?php echo $param['name']; ?></td>
				<td><?php echo $param['type']; ?></td>
				<td><?php echo $param['desc']; ?></td>
				<td><?php echo $param['required'] ? 'Yes' : 'No'; ?></td>
			</tr>
		<?php endforeach; ?>
		</table>
		----------------------------------------------------
	</p>
<?php endforeach; ?>
	
</body>
</html>