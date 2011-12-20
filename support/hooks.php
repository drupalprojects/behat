<?php
/**
 * Set up the test database environment
 */
 
$hooks->beforeScenario('', function($event) {
  $context = $event->getContext();
  // Set up Simpletest
  $test_id = db_insert('simpletest_test_id')
   ->fields(array('test_id' => rand(1000, 10000000)))
   ->execute();
	
  // Initialize Drupal context object from our own class
  $context->d = new BehatWebTestCase($test_id);
  $context->d->setUp();
});

$hooks->afterScenario('', function($event) {
  $context = $event->getContext();
  try {
    // Clean up database
    $context->d->tearDown();
  } catch (Exception $e) {
      return;
  }
});