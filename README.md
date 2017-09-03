About
=========================================================================
A website designed to allow web apps to figure out if a person as working
DNSSEC.

The original site can be found at http://got-dnssec.me/

What is DNSSEC
=========================================================================

[Domain Name System Security Extensions (DNSSEC)](https://en.wikipedia.org/wiki/Domain_Name_System_Security_Extensions)
is a suite of extensions that add security to the Domain Name System (DNS)
protocol by enabling DNS responses to be validated. Specifically, DNSSEC
provides origin authority, data integrity, and authenticated denial of
existence.

Why is DNSSEC important?
=========================================================================

FIXME: Put details.


Type of broken DNSSEC
=========================================================================

 1) Single host record with broken key.
 2) Host record which *should not* exist but does
    ([called DNS NXDOMAIN hijacking](https://en.wikipedia.org/wiki/DNS_hijacking#Manipulation_by_ISPs)).
 3) Subdomain which has *wrong* key.
 4) Subdomain which *should* have a key but doesn't.


License
=========================================================================
All code is licensed under Apache License Version 2.0, see the LICENSE
file for more details.

Set Up
=========================================================================
Setting up your own copy of got-dnssec.me is a bit tricky as you have to setup
delibrarely broken DNSSEC records which most DNS Servers try to prevent you
from doing.


Step 1 - Create a domain which has DNSSEC enabled.

Step 2 - Create a subdomain.

Step 3 - Delegate a key to the sub domain (using DS records).

Step 4 - Publish subdomain with the *wrong* DNSSEC key.

Step X - (Optional) If you want to see who ends up at your website
	 enable Google Analytics by creating a PHP file with the
         following contents;

```php
<?php
$analytics = 'YOUR UA ID GOES HERE';
```

Step 5 - Test it all works!

Credits 
=========================================================================
Developed by Tim 'mithro' Ansell - http://blog.mithis.net/
