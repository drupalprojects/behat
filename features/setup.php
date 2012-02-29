<?php
function behat_feature_setup($name = '') {
  $setup = array(
    // Feature
    'example' => array(
      // Modules required by the feature
      'modules' => array(
        // e.g. 'panels', 'custom_module', ...
      ),
    ),
  );
  
  // If no modules have been specified for the given feature,
  // return an empty array of modules.
  return (!empty($name) && isset($setup[$name])) ? $setup[$name] : array('modules' => array());
}