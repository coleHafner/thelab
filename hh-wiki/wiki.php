<?php require_once($_REQUEST['article'] . '.php')?>

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
			font-style: italic;
		}
		
		.name {
			font-weight:bold;
		}
	</style>
</head>

<body>
	
	<a href="/hh-wiki"> &lt; &lt; Back </a>
	
	<h1><?php echo $file['name']; ?></h1>
	
	<h4>File Name</h4>
	<p><?php echo $file['file_name']; ?></p>
	
	<h4>Description</h4>
	<p><?php echo $file['desc']; ?></p>
	
<?php if(!empty($file['properties'])) : ?>
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
<?php endforeach; endif;?>

<?php if(!empty($file['methods'])) : ?>
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
<?php endforeach; endif; ?>

<?php if(!empty($file['parameters'])) : ?>
	
	<h4>Parameters</h4>
	
	<?php foreach($file['parameters'] as $prop) : ?>
	<p>
		Name: <span class="name"><?php echo $prop['name']; ?></span><br/>
		Type: <?php echo $prop['type']; ?><br/>
		Description: <?php echo $prop['desc']; ?><br/>
		
		<?php if($prop['other']) : foreach($prop['other'] as $k => $v) :?>
		<?php echo $k; ?>: <?php echo $v; ?>
		<?php endforeach; endif; ?>
	</p>
<?php endforeach; endif; ?>
	
</body>
</html>