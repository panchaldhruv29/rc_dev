<?php

define('DRUPAL_ROOT', getcwd());
include_once DRUPAL_ROOT . '/includes/bootstrap.inc';
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);
/*
$values = array(
'field_first_name' => 'Test First name',
'fieldt_last_name' => 'Test Last name',
'name' => 'test',
'mail' => 'test@test.com',
'roles' => array(),
'pass' => 'password',
'status' => 1,
);
$account = entity_create('user', $values);
$account->save();
*/

$values = array(
'field_first_name' => 'Test First name',
'fieldt_last_name' => 'Test Last name',
'name' => 'test',
'mail' => 'test@test.com',
'roles' => array(),
'pass' => 'password',
'status' => 1,
);

/*
$new_user = array('name' => 'sfsdjfsdf','pass' => 'testtest',
 // note: do not md5 the password
'mail' => 'rsathawara@atlassoftweb.com',
'status' => 1,
'init' => 'rsathawara@atlassoftweb.com','roles' =>array(3 => 'administrator'),);
*/
// array(DRUPAL_AUTHENTICATED_RID => 'authenticated user',),);


/*$new_user = array( 


		   'name' => 'dev1234', 
 		    'pass' => 'testtest', // note: do not md5 the password  
		    'mail' => 'rsathawara@atlassoftweb.com', 
 		    'status' => 1,  
		    'init' => 'rsathawara@atlassoftweb.com',
  		    'roles' => array(3 => 'administrator'),
				    //2 => 'authenticated user',
  				    //3 => 'administrator',
  				    //4 => 'site editor',
			            //DRUPAL_AUTHENTICATED_RID => 'authenticated user',  
				    //array(2 =>'authenticated', 4=>'my custom role')
			            //),
		 );*/
 // The first parameter is sent blank so a new user is created. 
$account = entity_create('user', $values);
$account->save();
//user_save('', $new_user); 
echo 3;exit;
