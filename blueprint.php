<?php
function adminRemoveUserEndpoint()
{
    $userId = $_GET['userId'] ?? '';

    if (strlen($userId) != 32) {
        header("Location: /?action=adminCategories&error=Wrong ID given");
    }
    $users = readFromFile(USERS_FILE,[]);

    $len = count($users);

    $deleted = false;

    for($i = 0; $i < $len; $i++) {
        if ($users[$i]['id'] === $userId) {
            unset($users[$i]);
            $deleted = true;
            break;
        }
    }
    if (!$deleted) {
        header("Location: /?action=adminCategories&error=404 not found! The user you want to remove does not exist!");
    }

    writeFile(USERS_FILE, array_values($users));

    header("Location: /?action=adminCategories&message=The user with id=$userId has been removed!");
}
?>