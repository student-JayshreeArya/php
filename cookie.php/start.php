<?php
echo "Cookie Value : " . $_COOKIE["user"];     //user = setname of cookie
  // retrieving data on another page

  setcookie("user", "", time() - (86400 * 30), "/");  
 //first time m data show hoga next refresh m error aega
?>