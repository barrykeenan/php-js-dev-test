<?php

use SilverStripe\Dev\CsvBulkLoader;

class ContactCsvBulkLoader extends CsvBulkLoader
{
   public $columnMap = [
      'first_name' => 'FirstName', 
      'last_name' => 'LastName', 
      'email' => 'Email', 
      'gender' => 'Gender', 
      'ip_address' => 'IPAddress', 
      'company' => 'Company', 
      'city' => 'City', 
      'title' => 'Title', 
      'website' => 'Website'
   ];
}