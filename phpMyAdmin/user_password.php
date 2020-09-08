<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * displays and handles the form where the user can change his password
 * linked from main.php
 *
 * @package PhpMyAdmin
 */

/**
 * no need for variables importing
 * @ignore
 */
if (! defined('PMA_NO_VARIABLES_IMPORT')) {
    define('PMA_NO_VARIABLES_IMPORT', true);
}

/**
 * Gets some core libraries
 */
require_once './libraries/common.inc.php';

$GLOBALS['js_include'][] = 'server_privileges.js';

/**
 * Displays an error message and exits if the user isn't allowed to use this
 * script
 */
if (!$cfg['ShowChgPassword']) {
    $cfg['ShowChgPassword'] = PMA_DBI_select_db('mysql');
}
if ($cfg['Server']['auth_type'] == 'config' || !$cfg['ShowChgPassword']) {
    include_once './libraries/header.inc.php';
    PMA_Message::error(__('You don\'t have sufficient privileges to be here right now!'))->display();
    include './libraries/footer.inc.php';
} // end if


/**
 * If the "change password" form has been submitted, checks for valid values
 * and submit the query or logout
 */
if (isset($_REQUEST['nopass'])) {
    // similar logic in server_privileges.php
    $_error = false;

    if ($_REQUEST['nopass'] == '1') {
        $password = '';
    } elseif (empty($_REQUEST['pma_pw']) || empty($_REQUEST['pma_pw2'])) {
        $message = PMA_Message::error(__('The password is empty!'));
        $_error = true;
    } elseif ($_REQUEST['pma_pw'] != $_REQUEST['pma_pw2']) {
        $message = PMA_M