<?php if(time() > 1739385864){return null;} return array (
  'success' => true,
  'message' => '',
  'total' => 0,
  'errors' => 
  array (
  ),
  'object' => 
  array (
    'html' => '<div class="news_article">
    <h2><a href="https://community.modx.com/t/modx-login-extra-php-object-injection-vulnerability/8174" target="_blank">MODX Login Extra PHP Object Injection Vulnerability</a></h2>
    <span class="content">
            <h2><a name="p-33100-overview-1" class="anchor" href="https://community.modx.com#p-33100-overview-1"></a>Overview</h2>
<ul>
<li><strong>Project</strong>: <a href="https://extras.modx.com/package/login">Login Extra</a></li>
<li><strong>CVE ID</strong>: [To be assigned]</li>
<li><strong>Affected Versions</strong>: 1.5.2 through 1.9.13</li>
<li><strong>Fixed Version</strong>: <a href="https://extras.modx.com/package/login?version=1.9.14-pl">1.9.14</a></li>
<li><strong>Release Date</strong>: 2024-11-22</li>
<li><strong>Severity</strong>: Critical</li>
<li><strong>CVSS v4.0 Score</strong>: 9.4</li>
<li><strong>CVSS v4.0 Vector</strong>: CVSS:4.0/AV:N/AC:L/AT:N/PR:L/UI:N/VC:H/VI:H/VA:H/SC:H/SI:H/SA:H</li>
</ul>
<h2><a name="p-33100-vulnerability-details-2" class="anchor" href="https://community.modx.com#p-33100-vulnerability-details-2"></a>Vulnerability Details</h2>
<h3><a name="p-33100-type-3" class="anchor" href="https://community.modx.com#p-33100-type-3"></a>Type</h3>
<p>Remote Code Execution (RCE) via PHP Object Injection</p>
<h3><a name="p-33100-description-4" class="anchor" href="https://community.modx.com#p-33100-description-4"></a>Description</h3>
<p>A critical vulnerability has been identified in the MODX Login Extra that allows arbitrary PHP code execution through PHP Object Injection. The vulnerability stems from unsafe deserialization of user-supplied data using PHP’s <code>unserialize()</code> function without proper sanitization.</p>
<h3><a name="p-33100-attack-vector-5" class="anchor" href="https://community.modx.com#p-33100-attack-vector-5"></a>Attack Vector</h3>
<p>An authenticated user, regardless of their permission level, can exploit this vulnerability by submitting specially crafted data through the Login form. The vulnerability can be triggered when:</p>
<ol>
<li>The system processes user input through the Login form</li>
<li>The malicious payload is passed to the unsafe <code>unserialize()</code> function</li>
<li>The resulting PHP object injection leads to arbitrary code execution</li>
</ol>
<h2><a name="p-33100-affected-systems-6" class="anchor" href="https://community.modx.com#p-33100-affected-systems-6"></a>Affected Systems</h2>
<p>The vulnerability affects MODX Revolution installations that meet ALL of the following criteria:</p>
<ol>
<li>Have the Login Extra installed (versions 1.5.2 to 1.9.13)</li>
<li>Have a web-accessible login form using the Login Extra</li>
<li>Allow user authentication</li>
</ol>
<p><strong>Note</strong>: Systems with Registration forms using the Login Extra may be particularly vulnerable if user validation is not required.</p>
<h2><a name="p-33100-mitigation-7" class="anchor" href="https://community.modx.com#p-33100-mitigation-7"></a>Mitigation</h2>
<p><strong>Immediate Update Required</strong>: Upgrade <a href="https://extras.modx.com/package/login?version=1.9.14-pl">Login Extra to version 1.9.14</a> or later using the MODX Extras Installer in your MODX Revolution Projects.</p>
<h2><a name="p-33100-technical-details-8" class="anchor" href="https://community.modx.com#p-33100-technical-details-8"></a>Technical Details</h2>
<p>The vulnerability exists due to:</p>
<ul>
<li>Unsafe usage of PHP’s <code>unserialize()</code> function</li>
<li>Lack of input validation before deserialization</li>
<li>Insufficient permission checking in the login process</li>
</ul>
<h2><a name="p-33100-credits-9" class="anchor" href="https://community.modx.com#p-33100-credits-9"></a>Credits</h2>
<ul>
<li><strong>Discovery</strong>: <a href="https://www.mcdruid.co.uk">Drew Webber</a></li>
<li><strong>Resolution</strong>: <a href="https://github.com/jako">Thomas Jakobi</a> and <a href="https://github.com/theboxer">John Peca</a></li>
<li><strong>Coordination</strong>: MODX Security Team</li>
</ul>
<h2><a name="p-33100-timeline-10" class="anchor" href="https://community.modx.com#p-33100-timeline-10"></a>Timeline</h2>
<ul>
<li><strong>Discovery Date</strong>: 2024-11-22</li>
<li><strong>Fix Development</strong>: 2024-11-22</li>
<li><strong>Public Disclosure</strong>: 2024-11-22</li>
</ul>
<h2><a name="p-33100-references-11" class="anchor" href="https://community.modx.com#p-33100-references-11"></a>References</h2>
<ul>
<li>MODX Security Team Contact: <a>Security Team</a></li>
<li>Fixed Version Download: <a href="https://extras.modx.com/package/login?version=1.9.14-pl">Login 1.9.14</a></li>
</ul>
<h2><a name="p-33100-revision-history-12" class="anchor" href="https://community.modx.com#p-33100-revision-history-12"></a>Revision History</h2>
<ul>
<li><strong>2024-11-22</strong>: Initial advisory publication</li>
</ul>
            <p><small>2 posts - 1 participant</small></p>
            <p><a href="https://community.modx.com/t/modx-login-extra-php-object-injection-vulnerability/8174">Read full topic</a></p>
          </span>
    <span class="date_stamp">Sat Nov 23 00:57:00 2024</span>
</div>
<div class="news_article">
    <h2><a href="https://community.modx.com/t/modx-setup-directory-site-exploit/648" target="_blank">MODX setup/ Directory Site Exploit</a></h2>
    <span class="content">
            <p><strong>Product:</strong> MODX Revolution<br>
<strong>Severity:</strong> Critical<br>
<strong>Versions:</strong> &lt;=2.7.0<br>
<strong>Vulnerability type(s):</strong> Site Exploit<br>
<strong>Date Published:</strong> 2019-04-01</p>
<p><strong>Issue</strong><br>
There is currently an active exploit of sites with an intact MODX Revolution <code>setup/</code> directory. This can give <em>anyone</em> on the internet complete access to your site and possibly your server with trivial effort. This directory should <em>never</em> be left in place once a site is installed.</p>
<p><strong>Check Your Site</strong><br>
You can check if your site is vulnerable by entering your site URL with a <code>/setup/</code> added at the end, for example:<br>
<code>https://www.example.com/setup/</code></p>
<p><strong>What to Do</strong><br>
If you see a MODX installation utility, you should log into your server via FTP or SSH <strong>immediately</strong>, and remove this directory. If your site is working as expected, your site may be safe, but please review the additional information below.</p>
<p><strong>Why it Matters</strong><br>
Using the MODX installation script above, a malicious individual can re-install MODX and point to any database they wish including remote databases. Once a site is “re-installed” they can then use the Manager’s file manager to upload other back door files to your server. This can potentially lead to more severe issues such as having the entire server <a href="https://en.wikipedia.org/wiki/Rootkit">rootkitted</a>, setting up spam mailers, or uploading crypto miners to take advantage of computing resources on your server.</p>
<p><strong>If Your Site Has Been Compromised</strong><br>
If your site has been compromised or is not working correctly, and the setup folder per the above was in place, you must first re-connect your site to the correct database and server. Ask your web host or sysadmin to reset your database password and give you the new database credentials. Once you have those, update the MODX config file—by default located at <code>core/config/config.inc.php</code>—with the correct settings.</p>
<p><strong>Keep Up with Updates</strong><br>
You should also upgrade your MODX version to the latest production release (currently 2.7.1) and upgrade all Extras if they are not current. Keeping up with updates is critical to maintaining a secure site, as it plays a key role in <a href="https://support.modx.com/hc/en-us/articles/360010644353-How-Websites-Get-Hacked-and-How-to-Protect-Yourself">helping prevent sites from compromise</a>.</p>
<p><strong>Malware Scanning</strong><br>
Finally, you should run a malware scanner to make sure other exploits haven’t already been uploaded to your site as described above. We have a series of articles that walks you through recovering from a site compromise, which hopefully will help in this effort:</p>
<ul>
<li><strong><a href="https://modx.com/blog/recovering-from-a-hacked-site-part-1" class="inline-onebox">Recovering from a Hacked Site: Part 1</a></strong></li>
<li><strong><a href="https://modx.com/blog/recovering-from-a-hacked-site-part-2" class="inline-onebox">Recovering from a Hacked Site: Part 2</a></strong></li>
<li><strong><a href="https://modx.com/blog/recovering-from-a-hacked-site-part-3" class="inline-onebox">Recovering from a Hacked Site: Part 3</a></strong></li>
</ul>
<p><strong>Need Help?</strong><br>
If your web host, developer or sysadmin is not able to help, you can open a commercial support ticket directly with MODX by visiting <a href="https://support.modx.com/">https://support.modx.com</a> and clicking the blue “Submit a request” link in the header (please mention this post and provide your site URL). In order to assist we will need access to your server, most likely via your cPanel login.</p>
            <p><small>1 post - 1 participant</small></p>
            <p><a href="https://community.modx.com/t/modx-setup-directory-site-exploit/648">Read full topic</a></p>
          </span>
    <span class="date_stamp">Wed Apr 24 18:36:05 2019</span>
</div>
<div class="news_article">
    <h2><a href="https://community.modx.com/t/about-the-security-notices-category/2264" target="_blank">About the Security Notices category</a></h2>
    <span class="content">
            <p>This is a subcategory of Announcements for Security Notices. Older security notices can be found in the archived MODX Forums.</p>
            <p><small>1 post - 1 participant</small></p>
            <p><a href="https://community.modx.com/t/about-the-security-notices-category/2264">Read full topic</a></p>
          </span>
    <span class="date_stamp">Tue Jan  1 09:00:00 2013</span>
</div>',
  ),
);