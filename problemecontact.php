<?php

require_once 'problemecontact.civix.php';

use CRM_Problemecontact_ExtensionUtil as E;

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function problemecontact_civicrm_config(&$config): void {
  _problemecontact_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function problemecontact_civicrm_install(): void {
  _problemecontact_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function problemecontact_civicrm_enable(): void {
  _problemecontact_civix_civicrm_enable();
}
