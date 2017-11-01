<?php
// This file declares a managed database record of type "ReportTemplate".
// The record will be automatically inserted, updated, or deleted from the
// database as appropriate. For more details, see "hook_civicrm_managed" at:
// http://wiki.civicrm.org/confluence/display/CRMDOC42/Hook+Reference
return array (
  0 => 
  array (
    'name' => 'CRM_Worldregionstuff_Form_Report_WrMemberContributionDetail',
    'entity' => 'ReportTemplate',
    'params' => 
    array (
      'version' => 3,
      'label' => 'Membership and Contribution Detail (including World Region)',
      'description' => 'Membership Contribution Detail with World Region (org.civicoop.worldregionstuff)',
      'class_name' => 'CRM_Worldregionstuff_Form_Report_WrMemberContributionDetail',
      'report_url' => 'org.civicoop.worldregionstuff/wrmembercontributiondetail',
      'component' => 'CiviMember',
    ),
  ),
);
