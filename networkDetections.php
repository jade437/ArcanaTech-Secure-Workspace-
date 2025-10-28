<?php
$device = "192.168.75.1"; // Replace with your network device's IP
$community = "public"; // SNMP community string
$oid = "1.3.6.1.2.1.2.2.1.10.1"; // OID for incoming traffic on interface 1

$snmp_data = snmpget($device, $community, $oid);
echo "Network Usage: " . $snmp_data;
?>