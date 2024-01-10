<?php

//make admin example
$users = [
    'admin@example.com' => [
    'password' => password_hash('123456', PASSWORD_DEFAULT),
    'role' => 'admin',
    ],
];


// function login($email, $password)
// {
//     global $users;
//     if (isset($users[$email]) && password_verify($password, $users[$email]['password'])) {
//         $_SESSION['user'] = [
//             'email' => $email,
//             'role' => $users[$email]['role'],
//         ];
//         return true;
//     }
//     return false;
// }

// function logout()
// {
//     unset($_SESSION['user']);
// }

?>
