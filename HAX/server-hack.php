<?php
function check_server_request_uri()
{
		if (!isset($_SERVER['REQUEST_URI']))
		{
		$_SERVER['REQUEST_URI'] =$_SERVER['PHP_SELF'];
		
						// Sometimes, web server set QUERY_STRING but is empty.
					if (isset($_SERVER['QUERY_STRING']) AND $ $_SERVER['QUERY_STRING'] != "")
					{
					$_SERVER['REQUEST_URI'] .= '?'.$_SERVER['QUERY_STRING'];
		}
		}	
}	
?>