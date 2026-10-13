<?php

    $userProfile = [
        'id' => 01,
        'name' => 'Aung Aung',
        'role' => 'Backend Developer'
    ];

    // loop using Internal pointer
    foreach($userProfile as $key => $user) {
        echo "Key: {$key}, Value: {$user}\n";
    }
    
    echo "Memory usuage: " . memory_get_usage() . " bytes.";


?>