<IfModule mod_ssl.c>
<VirtualHost *:443>

        #  General setup for the virtual host
        DocumentRoot "/var/www"
        ServerName my-nextcloud.lbo.net
        ServerAdmin webmaster@lbo.ch
        ErrorLog /var/log/apache2/my-nextcloud.lbo.ch_error.log
        TransferLog /var/log/apache2/my-nextcloud.lbo.ch_access.log

        Include /etc/apache2/dstk-all-sites-incl.conf

        # see https://doc.owncloud.org/server/8.1/admin_manual/configuration_server/harden_server.html
        Header always add Strict-Transport-Security "max-age=15768000"

        # RewriteLogLevel 3

        RewriteEngine On
        ProxyRequests Off

        ProxyPass        / http://nextcloud.lbo.ch:8094/
        ProxyPassReverse / http://nextcloud.lbo.ch:8094/

        SSLCertificateFile /etc/letsencrypt/live/my-nextcloud.lbo.ch/fullchain.pem
        SSLCertificateKeyFile /etc/letsencrypt/live/my-nextcloud.lbo.ch/privkey.pem
        Include /etc/letsencrypt/options-ssl-apache.conf
</VirtualHost>
</IfModule>