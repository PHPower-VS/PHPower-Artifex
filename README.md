# PHPower-Artifex
Artifex - DB CRUD Management Classes for MVC Developers in PHP
# About
Artifex is the most important module for <a href="https://marketplace.visualstudio.com/items?itemName=PHPower.PHPower">PHPower Visual Studio Extension</a></strong>. It elimenates the need to write common SQL queries manually for PHP Developers by calling easy to use and fully optional functions to do CRUD functionality.
Just Make Sure that your table names are the same names used for objects in your source code, Mapping feature will be added soon.
<b>NOTE: This version is for usage outside Visual Studio, i.e. for Netbeans and Eclipse PHP Projects.</b>

# Usage
<ol>
  <li>Clone/Download PHP files to your PHP Project</li>
  <li>Edit Artifex.php file by adding your DB connection information</li>
  <li>Save Changes</li>
  <li>You can find below Usage for Artifex Functions</li>
  <li><code>function execute($SQL_STATEMENT)</code>: Use this function to execute custom SQL if needed. This is the main execution point for Artifex.<br/>
    <ol>Parameters Are
      <li>
        <code>SQL_STATEMENT</code>: String contains the SQL statement to be executed
      </li>
    </ol>
    function returns a MySQL Result Set on success or False on Failure.
  </li>
  
<li><code>function select($joinDescriptorListOrTablename, $columnList = '*', $condtionDescriptorListOrTrue = True, $additionalParameters = False, $mode = Artifex_Excute_Query)</code>: Use this function to execute custom SQL if needed. This is the main execution point for Artifex.<br/>
    <ol>Parameters Are
      <li>
        <code>joinDescriptorListOrTablename</code>: An Array of joinDescriptor Object (see Artifex Tools.php) if You need to join several tables, if one table being used then you can send a string for table name only.
      </li>
      <li>
        <code>columnList</code>: A list of columns to be retrieved or a string with '*' to retrieve all columns.
      </li>
       <li>
        <code>condtionDescriptorListOrTrue</code>: Optional: An array of conditionDescriptor if you need to specify conditions on select, or true to retrieve all records.
      </li>
    </ol>
    function returns a MySQL Result Set on success or False on Failure.
  </li>


</ol>
