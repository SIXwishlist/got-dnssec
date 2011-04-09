<html>
  <body>
<div>
 <h1>Welcome!</h1>
 <p>
  This page is <b>only</b> avaliable over IPv6. 
 </p><p>
  Congradulations, on being IPv6 enabled.
 </p><p>
  Your address is <b style="text-color: red;"><?php echo getenv ("REMOTE_ADDR"); ?></b>.
 </p>
</div><div>
 <h1>Site API</h1>
 <p>
  There is an API of using this site to get your IP address:
  <ul>
   <li>
    Using in Bash Scripts, you can get a plain text response.
    <pre>
# wget -O- ipv6only.me/address.php || echo "No IPv6"
<?php echo getenv ("REMOTE_ADDR"); ?>
</pre>
   </li><li>
    Using in Web Pages via JSON API.
    <pre>
&gt;script&lt;
function yesIPv6(address) {
  alert(address);
}

function noIPv6() {
  alert('No IPv6 for you.');
}
&gt;/script&lt;
&gt;!-- yesIPv6 will be called with the IP6 address if they <b>are</b> IPv6 enabled. 
     noIPv6 will be called if they are <b>not</b> IPv6 enabled or there IPv6 routing is borked.
     We run this script in async mode, as the failure may take a long time if IPV6 routing is borked.
  --&lt;
&gt;script
  type="text/javascript"
  src="http://ipv6only.me/address.php?output=json&amp;jsonp=yesIPv6"
  onerror="noIPv6();"
  async="async"
&lt;
&gt;/script&lt;
</pre>
   </li>
  </ul>
 </p>
<div>
 <h1>Credits</h1>
 <p>
  Page created by <a href="http://blog.mithis.net/">Tim 'mithro' Ansell</a>. Code for this very simple website can be found at <a href="http://github.com/mithro/ipv6only.git">http://github.com/mithro/ipv6only.git</a> so you can deploy on your own domain if you want. If you send me an email at <a href="mailto:ipv6@mithis.com">ipv6@mithis.com</a> I'll add it to the bottom of this page.
 </p>
</div>
<div>
 <h1>Other Deployments</h1>
 <ul>
  <li>None known yet</li>
 </ul>
</div>
  </body>
</html>
