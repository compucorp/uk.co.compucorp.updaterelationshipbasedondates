<?php

/**
 * @file
 * Extension file.
 */

require_once 'updaterelationshipbasedondates.civix.php';

/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function updaterelationshipbasedondates_civicrm_config(&$config) {
  _updaterelationshipbasedondates_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_xmlMenu
 */
function updaterelationshipbasedondates_civicrm_xmlMenu(&$files) {
  _updaterelationshipbasedondates_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function updaterelationshipbasedondates_civicrm_install() {
  _updaterelationshipbasedondates_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_postInstall
 */
function updaterelationshipbasedondates_civicrm_postInstall() {
  _updaterelationshipbasedondates_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function updaterelationshipbasedondates_civicrm_uninstall() {
  _updaterelationshipbasedondates_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function updaterelationshipbasedondates_civicrm_enable() {
  _updaterelationshipbasedondates_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function updaterelationshipbasedondates_civicrm_disable() {
  _updaterelationshipbasedondates_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function updaterelationshipbasedondates_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _updaterelationshipbasedondates_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_managed
 */
function updaterelationshipbasedondates_civicrm_managed(&$entities) {
  _updaterelationshipbasedondates_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function updaterelationshipbasedondates_civicrm_caseTypes(&$caseTypes) {
  _updaterelationshipbasedondates_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_angularModules
 */
function updaterelationshipbasedondates_civicrm_angularModules(&$angularModules) {
  _updaterelationshipbasedondates_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_alterSettingsFolders
 */
function updaterelationshipbasedondates_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _updaterelationshipbasedondates_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_entityTypes
 */
function updaterelationshipbasedondates_civicrm_entityTypes(&$entityTypes) {
  _updaterelationshipbasedondates_civix_civicrm_entityTypes($entityTypes);
}
