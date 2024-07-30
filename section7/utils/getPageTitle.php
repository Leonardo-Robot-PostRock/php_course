<?php

function getPageTitle()
{
    $currentFile = basename($_SERVER['PHP_SELF'], '.php');

    $pageTitle = "Login App";
    switch ($currentFile) {
        case 'login':
            $pageTitle = "Login App";
            break;
        case 'login_create':
            $pageTitle = "Login App - Create User";
            break;
        case 'login_read':
            $pageTitle = "Login App - View Users";
            break;
        case 'login_update':
            $pageTitle = "Login App - Update User";
            break;
        case 'login_delete':
            $pageTitle = "Login App - Delete User";
            break;
        default:
            $pageTitle = "Login App";
            break;
    }

    return $pageTitle;
}
