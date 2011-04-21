SilverStripe ModifiedTableField
===================================


Maintainer Contacts
-------------------
* Nathan Cox (<nathan@flyingmonkey.co.nz>)

Requirements
------------
* SilverStripe 2.4+

Documentation
-------------
[GitHub Wiki](https://github.com/nathancox/silverstripe-modifiedtablefield)

Installation Instructions
-------------------------

1. Place the files in a directory called modifiedtablefield in the root of your SilverStripe installation
2. Visit yoursite.com/dev/build to rebuild the database

Usage Overview
--------------

Default Field Values:

Dirty hack to make the tablefield respect default values when adding a row.
Uses the model's $defaults array, or you can specify default values for this table using $tableField->setDefaults(array(
	'SomeField' => 'Default Value'
));


Known Issues
------------
[Issue Tracker](https://github.com/nathancox/silverstripe-modifiedtablefield/issues)