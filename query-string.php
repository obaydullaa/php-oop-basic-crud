<?php


// function create(string $table, array $data) {
//     // Get column Name
//     $array_keys = array_keys($data);
//     $col_name = implode(', ', $array_keys);
//     // print_r($col_name);

//     // Get Values
//     $array_val  = array_values($data);

//     $array_val = array_values($data);
//     $values = "";

//     foreach ($array_val as $val)  {
//         $values .= $val;
//     }

// Done


//     // echo "INSERT INTO $table ( $col_name ) VALUES ('obyadul', 'obaydul@gmail.com', '01755265017)";



//     echo "INSERT INTO $table ( $col_name ) VALUES ('$values')";

// }

// create('users', [
//     'name' => 'obaydul',
//     'email' => 'obaydul@gmail.com',
//     'cell' => '8885555',
// ]);


function create(string $table, array $data) {
    // Get column names
    $array_keys = array_keys($data);
    $col_name = implode(', ', $array_keys);

    // Get values and properly format them
    $array_val = array_values($data);
    $values = "";

    foreach ($array_val as $val) {
        // Enclose each value in single quotes and escape any single quotes within the value
        $val = str_replace("'", "\\'", $val);
        $values .= "'$val', ";
    }

    // Remove the trailing comma and space
    $values = rtrim($values, ', ');

    // Build and print the SQL query
    echo "INSERT INTO $table ($col_name) VALUES ($values)";
}

create('users', [
    'name' => 'obaydul',
    'email' => 'obaydul@gmail.com',
    'cell' => '8885555',
]);
