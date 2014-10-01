=== Plugin Name ===
Contributors: ka2
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=2YZY4HWYSWEWG&lc=en_US&currency_code=USD&item_name=
Tags: custom database tables, CDBT, MySQL, database, table, create, delete, insert, update, edit, truncate, drop
Requires at least: 3.6
Tested up to: 4.0.0
Stable tag: 1.1.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Custom DataBase Tables plug-in allows you to perform data storage and reference by creating a free tables in database of WordPress.

== Description ==

WordPress database is easy to use with simple, but if you want to handle the data that does not conform to the provided initial table structure, or considering the use of as the CMS, is more better to create a new table. 

This plugin provides the ability to be able to add a new table freely in the database (direct on MySQL) of WordPress in such a case, and can be management of data in a simple user interface. This plugin works with WordPress3.6 or more. 

If you make by full use the various APIs, methods, and shortcodes that is provided a rich set on this plugin, WordPress might be transformed into a powerful CMS.

[Please visit here for more description of the plugin](http://cdbt.ka2.org/).

== Installation ==

1. Upload `custom-database-tables` directory to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Navigate to the Custom DB Tables submenu in setting menu

That's it. Now you can easily start creating custom table in database of WordPress

== Frequently Asked Questions ==

= Does this plugin create table on direct mysql? =

Yes, can create tables in a MySQL database and manage that's tables while use this plugin.
However, in the current version plugin can connect to only a MySQL database was installed of WordPress, yet. In other words, it can connect only a MySQL database connection settings are defined in "wp-config.php".

= Is there any limit of the scope of the table? =

You need a table that is managed by the plug-in is an "ID" is the primary key. The column that contains the update date and registration date of the line will also be necessary. Column These keys are added automatically when you create a table.

= Can put table that have 100,000 or more rows? =

There is no particular restriction on the amount of data that is stored in a table. Processing performance on a table with a large number of rows will depend on the structure such as a table or database server.



== Screenshots ==

1. You can see the usable shortcodes and information of table schema that was created in the dashboard.
2. You can control the common actions of this plugin in the setting general options.
3. You can create a new table in the database at will from the management console.
4. You can be created design structure of the table in visually using a GUI tool called table creator.
5. You can activate the table you want to operate from the list of tables that you created.
6. You can use the import feature, you can register in bulk data into a table that was created.
7. All data in the table can be viewed as a list at any time.
8. Entry Form of registration data to the table is automatically generated as well.
9. You can check the data in the table, or to edit, and to remove it is also easy.
10. If you have stored binary data as images in the database, preview is available in the modal window.
11. Of course, download function of binary data is also provided.
12. The pages of Viewer, Editor, and Entry Forms can display to frontend by using shortcodes.
13. You can modify table as add an index or column in the table, and delete or change. As you can be done that easily by using various presets.

== Changelog ==

= 1.1.3 =
* Was extended to allow updating of the table structure using presets.
* Fixed bug that couldn't be updated table option with do not issue a SQL of alter table.
* Fixed bug that happen error when deployed the array in block of foreach arguments on the specific version of PHP.

= 1.1.2 =
* Fixed bug that failed to upload a CSV that is not Excel format.
* Fixed bug that was failing of setting up plugin options when updated the plugin version.

= 1.1.1 =
* Fixed a bug when uninstall the plugin.

= 1.1.0 =
* Have been confirmed in the normal operation on the WordPress 4.0
* Be able to incorporated into plugin as a managable table the tables that already exists (this feature is an experimental implemented yet).
* Can resume table from in the past table settings.
* Did optimize processing when the plugin is stop and uninstall.
* Fixed a bug in the create_table method.
* Changed specifications of update_data method and insert_data method.
* Add to new method get_table_list.

= 1.0.0 =
* Add to new feature to modify table (alter table)
* Some debugs, and has improved the user interface

= 0.9.6 =
* Updated the translate-template file (.pot)
* Changed how to import stylesheet and javascript
* Add some screenshot images and revise readme.txt

= 0.9.5 =
* First beta release

= 0.9.1 =
* First review version (alpha release)


== Other Notes ==

All official development on this plugin is on GitHub. Published version will bump here on WordPress.org. You can find the repository at [https://github.com/ka215/cdbt](https://github.com/ka215/cdbt).
