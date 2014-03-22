<h1>Setting up a new TSOhost project</h1>

<h2>Background</h2>
<p>This local envirnment is supposed to mock the TSO Host production environment, allowing us to develop locally and just push changes, via git, to TSO host (perhaps via github)</p>

<h2>Steps</h2>
<p>Follow these steps to create new webproject (note: dallasmarketing.co.uk is a networked blog, meaning to add a new WP site, it is not neccesary to create new project)</p>
<ul>
    <li>MBP: Create a new directory to house the site within _Projects/tsohost. Name this after the website (e.g. newsite.co.uk)</li>
    <li>MBP: 'sudo nano /etc/hosts'</li>
    <li>MBP: Add the line '192.168.33.21    {newsite.co.uk}' where {newsite.co.uk} is your new project's domain</li>
    <li>MBP: Whilst in _Projects/tsohost folder, ssh into the VM using 'vagrant ssh'</li>
    <li>VM: 'cd /etc/apache2/sites-available/'</li>
    <li>VM 'sudo cp 000-default.conf {newsite.co.uk}.conf'</li>
    <li>VM: 'sudo nano {newsite.co.uk}.conf'</li>
    <li>VM: add 'ServerName {newsite}.dev' (Note that we use the '.dev.' extension here)</li>
    <li>VM: change 'DocumentRoot /var/www/{newsite.co.uk}/public_html' (Note that we are using the proper domain extension here)</li>
    <li>VM: enable the site 'sudo a2ensite {newsite.co.uk}'</li>
    <li>VM: Restart apache 'sudo service apache2 reload'</li>
    <li>That's it!</li>
    <li></li>
    <li></li>
</ul>

<h5>MBP = Macbook, or local env, VM = Vagrant machine (or staging), PR = production (usually TSO)</h5>