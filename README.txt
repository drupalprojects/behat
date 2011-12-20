ABOUT
=====

This module allows to write behat features that describe
and automatically test the behavior of a Drupal site.

Please visit http://behat.org to learn more about behat.

INSTALLATION
============

1) Install behat on your machine
   http://docs.behat.org/quick_intro.html#installation

2) Copy file "behat.yml" and directory "features" to 
   site root directory
   
3) To test if behat is set up correctly, switch to the shell, 
   go to the Drupal site root and run:
   
   $ behat features
   
   This should execute the example feature.
   
   NOTE: make sure $base_url in settings.php is set if your
   site is not accessible under http://localhost/. 
   Otherwise, drupalPost() won't work.
   