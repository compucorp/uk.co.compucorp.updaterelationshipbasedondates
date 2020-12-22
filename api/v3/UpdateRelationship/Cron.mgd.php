<?php

/**
 * @file
 * Update relationship cron description.
 */

return [
  0 =>
  [
    'name' => 'Cron:UpdateRelationship.Cron',
    'entity' => 'Job',
    'params' =>
    [
      'version' => 3,
      'name' => 'Update Relationship cron',
      'description' => 'Update Relationships based on dates',
      'run_frequency' => 'Daily',
      'api_entity' => 'UpdateRelationship',
      'api_action' => 'Cron',
      'parameters' => '',
    ],
  ],
];
