# tues-interns-2020

## Local Setup

1. Set-up LAMP Stack on your machine - You can check [this guide](https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-ubuntu-18-04)
2. Create a table from phpmyadmin/workbench or whatever suits you best
3. Set-up your hosts. Go to '/etc/hosts' ( 'c:\windows\system32\drivers\etc\hosts' for Windows )  and add a new entry for Carmag at the localhost IP. example: `127.0.0.1 local.carmag.com`
4. Now, when you open this url you should be able to see the main folder of the localhost server
5. Set-up Apache server to open the proper folder. Edit the `/etc/apache2/apache2.conf` file ( 'apache/conf/extra/httpd-vhosts.conf' for Windows )
Example of server configuration rules :
```
#Example config for Carmag

<VirtualHost *:80>
DocumentRoot /server/directory/here/
ServerName local.carmag.com
    ServerAlias local.carmag.com
<Directory /var/www/html/directory/>
               AllowOverride All
        Order allow,deny
        allow from all
</Directory>
</VirtualHost>
```
6. Restart the server in order to see your changes `sudo service apache2 restart`
7. Change permissions to  777 recursively for the directory: `sudo chmod -R 777`
8. Download WP inside the server's directory. Either from [wordpress.org](wordpress.org) or via [wp-cli](https://wp-cli.org/).
9. Delete `wp-content` directory
10. Clone the repository in temp directory
11. Transfer the files from the tmp directory to the main directory of the site. Mind the git files that are hidden!
12. Open the site and set-up the needed details. Use easy login details. It's you local installation after all.
13. Edit `wp-config.php.` Make sure to have `WP_DEBUG` constant set to true!
14. You should be all set now!

