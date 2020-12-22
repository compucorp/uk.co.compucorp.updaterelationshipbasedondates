<?php

/**
 * @file
 * Update relationship cron.
 */

/**
 * UpdateRelationship Cron API specification (optional).
 *
 * @param array $spec
 *   Description of fields supported by this API call.
 */
function _civicrm_api3_update_relationship_cron_spec(array &$spec) {
  // No params for this API.
}

/**
 * UpdateRelationship Cron API.
 *
 * @param array $params
 *   Api parameters.
 *
 * @return array
 *   API result descriptor.
 *
 * @throws API_Exception
 */
function civicrm_api3_update_relationship_cron(array $params) {
  CRM_Core_DAO::executeQuery("UPDATE civicrm_relationship SET is_active = '0' WHERE start_date > CURDATE()");
  CRM_Core_DAO::executeQuery(
    "UPDATE civicrm_relationship SET is_active = '1' WHERE
           (start_date <= CURDATE() AND (end_date > CURDATE() OR end_date IS NULL))"
  );

  return civicrm_api3_create_success('Relationship Status Updated');
}
