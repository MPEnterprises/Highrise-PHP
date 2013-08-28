<?

/*
---

An example of how to use the PHP kit

---
*/

	ini_set('display_errors', 'on');

	// enter your app's config details here
	$subdomain = 'subdomain';
	$token = 'token';

	// include class
	include('../Highrise.php');
	
	// set up depot client
	$client = new Highrise($subdomain, $token);
	
    echo '
    	<p>Lets test the API by pulling down contacts</p>	
    	<pre>';
    
    print_r($client->get('people'));
    
    echo '
    	</pre>
    ';

?>