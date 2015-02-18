=== Plugin Name ===
Contributors: ka2
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=2YZY4HWYSWEWG&lc=en_US&currency_code=USD&item_name=
Tags: custom database tables, MySQL, database, table, create, delete, select, insert, update, truncate, drop, alter table, import, export, CSV
Requires at least: 3.6
Tested up to: 4.1.0
Stable tag: 1.1.13
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Custom DataBase Tables plugin allows you to perform data storage and reference by creating a free tables in database of WordPress.

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

= 1.1.13 =
* Added a feature that switched to full or shorten code at display example of shortcode on the home position.
* Added a feature of the binary file (image) preview on "cdbt-extract" shortcode.
* Added a button that can create a table immediately in the home position when the table not yet been created or the table is not specified.
* Adjusted the user interface in some page and shortcodes.
* Fixed a bug that can not insert data into the column that contains a comma or a space in the field name.
* Fixed a bug that can not insert data into a column of type "bit" from the input data page.
* Fixed a bug that had not deleted data of plugin when you will uninstall this plugin with enable of the cleanup options.

= 1.1.12 =
* Fixed the bug that could not use the features such as creating table on Firefox and Internet Explorer browser.
* Fixed the improper regex in SQL validation process for alter table.

= 1.1.11 =
* Fixed the improper regex in SQL validation process. [here is issue detail](https://github.com/ka215/cdbt/issues/7)
* Fixed a bug when importing CSV file. [here is issue detail](https://github.com/ka215/cdbt/issues/6)
* Fixed a bug that same request is called again when closed the alert at the time of data registration completion.
* Updated some of the translation text.

= 1.1.10 =
* Fixed a typo of plugin UI. [here is issue detail](https://github.com/ka215/cdbt/issues/5)
* Fixed a bug that has generating a bad SQL of bool type column, when create table using "table-creator". [here is issue detail](https://github.com/ka215/cdbt/issues/4)

= 1.1.9 =
* Fixed a bug that have included no data in the downloaded a csv file when you export data of the table that does not have the "created" column.

= 1.1.8 =
* Resolved the problem that sortable content (on the Table Creator) of jQuery UI in some browsers, such as Firefox can be selected.
* Have unique reduction to grant a prefix to the constant name of the plug-core, was modified to be able to avoid a conflict of constants.

= 1.1.7 =
* Added a shortcode "cdbt-extract" that view lists of specifying number from the results of sorting and searching the data in the table.
* Fixed a bug where at the time of site access gone useless header sent if the API key does not exists in the query.

= 1.1.6 =
* Changed the reading position of the plugins dedicated inline JavaScript in management page.
* Newly added the API function that outputs the search result of table data in JSON and JSONP format.
* Added the ability to access the managable tables under the plugin from an external site by using generated API key.
* Extended the mime-type of importable CSV file: "application/vnd.ms-excel", "application/octet-stream", "text/plain", "text/csv", "text/tsv"
* Updated methods (delete_data, find_data, insert_data, update_data).
* Added a registration datetime (column named "created") in the target columns when editing table data.

= 1.1.5 =
* Fixed a bug that resume of external table does not work if the table that you created in plugins have none.

= 1.1.4 =
* Added the ability to sort the column for each data list when editing and viewing data (also possible ON / OFF in shortcodes).
* Improved bad usability that pagination is bloated when there is a large amount of data.
* Improved the user experience of each page of the data registration, viewing, and edit.
* Fixed a bug that causes an error when you enter zero for the column of floating point data type when registering.
* Fixed a bug in the search function of the page of the viewing and editing of data.
* Modal window within the content that is output in the shortcode, has solved the problem that can not be manipulated by the theme you want to use.

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


== Upgrade Notice ==

* 1.1.12 - [Important Update] Fixed the bug that could not use the features such as creating table on Firefox and Internet Explorer browser.
