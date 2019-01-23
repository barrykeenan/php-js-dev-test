<?php

use SilverStripe\Admin\ModelAdmin;
use SilverStripe\Dev\CsvBulkLoader;

class ContactAdmin extends ModelAdmin
{
	private static $menu_title = 'Contacts';
	private static $url_segment = 'contacts';
	
	private static $managed_models = [
		Contact::class
	];
	
	private static $model_importers = [
		// 'Contact' => CsvBulkLoader::class
		'Contact' => 'ContactCsvBulkLoader'
	];

}
