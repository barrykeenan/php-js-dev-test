<?php

use SilverStripe\ORM\DataObject;

class Contact extends DataObject
{       
    private static $table_name = 'Contact';

    private static $db = [
        'FirstName' => 'Varchar',
        'LastName' => 'Varchar',
        'Email' => 'Varchar',
        'Gender' => 'Enum(array("Male","Female"))',
        'IPAddress' => 'Varchar',
        'Company' => 'Varchar',
        'City' => 'Varchar',
        'Title' => 'Varchar',
        'Website' => 'HTMLText'
    ];

    private static $api_access = true;
    
    public function canView($member = null) 
    {
        return true;
    }

    private static $summary_fields = [
        'FirstName' => 'FirstName',
        'LastName' => 'LastName',
        'Email' => 'Email',
        'Company' => 'Company',
        'Title' => 'Title'
    ];
}