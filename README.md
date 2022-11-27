C:\xampp\apache\conf\extra\httpd-vhosts.conf

<VirtualHost \*:443>

...

<Location "/ws/monappli">
ProxyPass ws://localhost:8080
ProxyPassReverse ws://localhost:8080
</Location>

...

</VirtualHost>
