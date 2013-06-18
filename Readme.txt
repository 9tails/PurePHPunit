-Install PHP
-Install Pear
php go-pear.phar
-Install Run PHPunit:
pear channel-discover pear.phpunit.de
pear channel-discover pear.symfony.com
pear install pear.symfony.com/Yaml
pear install --alldeps pear.phpunit.de/PHPUnit
pear install phpunit/PHPUnit_Selenium
-Recording Selenium test scripts in PHPunit Selenium IDE format
-Run test scripts: phpunit MarkTaskDoneTest.php > output.txt

-PHPunit reporting:
phpunit --log-junit results.xml test.php - saves results of test.php as XML file results.xml
PHPUnit offers three command-line options for saving results to a file also:
phpunit --log-junit results.xml test.php - saves results of test.php as XML file results.xml
phpunit --log-tap - will save as TAP
phpunit --log-json - will save as JSON

pear channel-discover pear.phing.info
pear install phing/phing
Naturally, it works with PHPUnit style junit xml files.
   The phing task is easy to setup:

phing
testreport > gen-report:
PHP extension enabled; it adds restrictions to XSLT. Disabling it made report generation work.
  