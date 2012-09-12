v2-efp
======

Codeigniter based HMVC Project.

Virtual Host Creation:
----------------------

    <VirtualHost *:80>
        ServerName v2.ecofriendlyparty.local
        DocumentRoot "/Users/codeinterior/Sites/v2"

        <Directory "/Users/codeinterior/Sites/v2">
           Options Indexes FollowSymLinks MultiViews
           AllowOverride All
           Allow from All
        </Directory>
    </VirtualHost>