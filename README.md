Ms Access to Mysql Script
=========================
This script connect to Microsoft Access using ODBC. The Script outputs mysql dump file out of mdb(2003-2010).

How to install
===============
1. A web server (wamp | xampp)
2. An ODBC (32-bit) connection to mdb file
3. Extract the msaccess folder to www | htdocs root folder

Configuration
=============
The folder Microsoft handles connection setting + exceptional handling. Folder Config and Exception must not be alter.
//todo - how to define your own exception and configurational settings

The Models\App Folder where you will make all the changes.

Models\App
==========
This folder contains all the classes representing your database tables. Each database must have their own seperate
Model class. The Conventions inside this folder must be strictly followed.

Conventions
===========
1. Class name and tables must be same
2. First letter of the name must be capitalized. If table has underscore remove it. For example

|  TABLE       |      CLASS NAME  |
 ---------------------------------
| clients      |     Clients     |
 ---------------------------------
| user_role    |     Userrole    |
 ---------------------------------

3. Change the variable table to table name
    private static $table = "your_table_name";

4. The last configuration needs to be made is to copy database field to function dbFields()

index.php File
==============

$msODBC::ODBC('MsAccessConnection');
$msODBC::USER('sa');
$msODBC::PASSWORD('seg@pass');

$odbc = $msODBC::connect();

 The configuration to the above simple and self explanatory. The line ODBC() method require the name of the ODBC
 name. The ODBC is to be created inside Control Panel -> Administrative Tools -> ODBC (32-bit)

Ouput MySQL Dump
================
To generate MySQL dump, call the following method of AccessDBAPI class

$msAccessDB = new \Models\Core\AccessDBAPI();

$msAccessDB::select($odbc, \Models\App\Clientes::name());

The first parameter is the connection pointer. The second argument is the class name inside Models/App folder representing
table in your database.
