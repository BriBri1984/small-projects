<?php 

$names[]=[
'first' => 'Brian',
'middle' => 'Pena',
'last' => 'Martinez',
'married' => true,
'pet' => true
];

$names[]=[
'first' => 'Samir',
'middle' => 'Code',
'last' => 'Patel',
'married' => false,
'pet' => true
];

$names[]=[
'first' => 'Ashley',
'middle' => 'Galindo',
'last' => 'Martinez',
'married' => true,
'pet' => true
];

$names[]=[
'first' => 'Jason',
'middle' => 'Pena',
'last' => 'Martinez',
'married' => false,
'pet' => false
];

//echo '<pre>';
//print_r($name);
//echo '</pre>'


//Need to create an empty array to use in the foreach loop
$order = [];

// Need to create a variable to tell which $name to display and which ones not to, if $status is 'married' Brian and Ashley would display on the screen. If it was false Samir and Jason would be displayed. If $status is 'all' everyone with show up
$status = 'all';

// $field will be used to in an if statement to organize an array
$field = '';

// If the first if statment and the == $status in the foreach loop was not added,the browser would show who is married on the screen, everyone else would not be displayed on the screen
if ($status == 'all') {
	$order = array_keys($names);
}else{
	foreach ($names as $key => $name) {
		if ($name['married'] == $status) {
		$order[] = $key;
		}
	}
}


// If $field is set, it will sort whatever is in $field. 
if ($field) {
	$sort = [];
	foreach ($order as $id) {
		// The key in the $sort array will match the key in the $names array, the value of the $sort array will grab the value from the $field. 
		$sort[$id] = $names[$id][$field];
	}
	//function will sort from a-z
	asort($sort);
			//array_keys will return the array
	$order = array_keys($sort);
}
echo '<table>';
echo '<tr>';
echo '<th>First Name</th>';
echo '<th>Middle Name</th>';
echo '<th>Last Name</th>';
echo '<th>Married</th>';
echo '<th>Pet Owner</th>';
echo '</tr>';
//  
foreach ($order as $id) {
echo '<tr>';
echo '<td>' . $names[$id]['first'] ."</td>";
echo '<td>' . $names[$id]['middle'] ."</td>";
echo '<td>' . $names[$id]['last'] ."</td>";
echo '<td>';
if ($names[$id]['married']) {
	echo 'Yes';
}else{
	echo 'No';
}
echo '</td>';
echo '<td>';
	if ($names[$id]['pet']) {
	echo 'Yes';
	}else{
	echo 'No';
	}
}
echo '</td>';
echo '</tr>';

echo '<pre>';
print_r($order[$id]);
echo '</pre>';

 ?>