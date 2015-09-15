<?php
$abstract->name = "IPv4 addresses are over. Now what?";
$abstract->description='In the current version IPv4 protocol, is already quite old and has enough problems. The biggest problem is the address scalability limit. Now what? ... [<a href="?p=abstract&u=ipv6">read more</a>]';

$abstract->picture = "abstract/ipv6/mini.jpg";

function abstractShow(){


?>

<h2>IPv4 addresses are over. Now what?</h2>
<div class="abstract">
 <div class="contents">
	<img src="abstract/ipv6/mini.jpg" alt="Book" />
<p>
 In the Cold War, the U.S. military have created a model of exchange and sharing of information that there was a central point of control. This allowed him to communicate even if there was any attack against a military base connected. The network was known as ARPANET, was never attacked. Then, the U.S. government allowed university researchers to work and develop this network. This is the beginning to what we now know as Internet.
</p>
<p>
 To the communication between these networks, in 1981 was created a technical system called Internet Protocol, which is the protocol layer and most popular network currently in use. It resembles at the telephone number: a caller dials another person's number, then the connection is completed (or not). The person who does the call doesn't know how this goes through and not even worry about it because the phone network that makes the whole process. The IP protocol has this and other features.
</p>
<p>
 In the current version, IPv4, is already quite old and has enough problems. The biggest problem is the address scalability limit. IPv4 allows about 4 billion addresses (2 ^ 32), a number that was considered high when it was created.
</p>
<p>
 However, each connected computer has a unique address on the network. In the past there were not many devices, so this was not an impediment to the limit. But today we have cell phones, mobile devices and broadband connections that are all the time connected to the world, making the problem of shortage of addresses worst. And due to the characteristics and limitations in the protocol creating, of 4 billion, less than half are usable. Today, the IANA (instituition responsible for distributing addresses) have no more IPv4 addresses available.
</p>
<p>
 The solution to this problem is version 6 of Internet Protocol, IPv6. Thanks them, known security problems would be corrected in IPv4, and limit address would be unthinkable, because IPv6 has 3.4 x 10 ^ 38 addresses (or 340 followed by 36 zeros).
</p>
<p>
 However, IPv6 is the solution, but it is not an immediate solution. IPv6 is not natively compatible with IPv4, so that one of the biggest problems is the deployment cost. Most Internet companies are not investing in IPv6 because there is still no direct economic benefit. And for the home user, most modems and routers do not have IPv6 support, so that the user would have to purchase new equipment.
</p>
<p>
 A nice solution is to keep the two protocols running in parallel, even if it means double maintenance, but until IPv6 becomes mature enough to function alone in full swing.
</p>
  
</div>
</div>

<?php

 }
?>