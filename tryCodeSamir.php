<?php


// Notice how I combined them all into one array of arrays
// Also notice how the order of the elements in the associative array doesn't matter
$people = [
    [
        'married' => true,
        'first'   => 'Brian',
        'middle'  => 'Pena', // this middle here
        'last'    => 'Martinez',
        'pet'     => true,
    ],
    [
        'middle'  => 'Code', // is now here, on top, so the order of elements doesnt matter
        'pet'     => true,
        'last'    => 'Patel',
        'married' => false,
        'first'   => 'Samir',
    ],
    [
        'married' => true,
        'first'   => 'Ashley',
        'last'    => 'Martinez',
        'middle'  => 'Galindo',
        'pet'     => true,
    ],
    [
        'first'   => 'Jason',
        'married' => false,
        'middle'  => 'Pena',
        'last'    => 'Martinez',
        'pet'     => false,
    ],
];

echo '<table border="1">';
echo '<tr>';
echo '<th>First Name</th>';
echo '<th>Middle Name</th>';
echo '<th>Last Name</th>';
echo '<th>Married</th>';
echo '<th>Pet Owner</th>';
echo '</tr>';

foreach ($people as $row) {

    echo '<tr>';
    echo '<td>' . $row['first'] . '</td>';
    echo '<td>' . $row['middle'] . '</td>';
    echo '<td>' . $row['last'] . '</td>';



    // Married
    echo '<td>';

    // This construct here is called a ternary
    // Basically this means if married is true, then echo Yes, otherwise echo No
    echo $row['married'] == true ? 'Yes' : 'No';
    echo '</td>';



    // Has a pet
    echo '<td>';

    // This is the same logic as the ternary above, but is using a traditional if statement
    // Now using an if statement is not wrong, it is just more code
    // For simple things like setting values or outputting strings, ternaries are the way to go!
    if ($row['pet'] == true) {
        echo 'Yes';
    } else {
        echo 'No';
    }
    echo '</td>';

    echo '</tr>';
}

echo '</table>';