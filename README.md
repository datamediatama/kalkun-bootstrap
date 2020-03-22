![Kalkun Bootstrap](kalkun-bootstrap-screenshot.png?raw=true "Kalkun Bootstrap")

# Kalkun Bootstrap
Kalkun Bootstrap is open source web-based SMS (Short Message Service) management based on Kalkun http://kalkun.sourceforge.net. 

* Kalkun Bootstrap homepage : https://github.com/datamediatama/kalkun-bootstrap
* Documentation : https://kalkun-bootstrap.readthedocs.io/en/latest/

## Requirement
You need to install and configure this first:

* Apache 2.x.x
* PHP 7.2.x / 5.x.x (with mysql/pgsql/pdo_sqlite, session, hash, json, mbstring extension)
* PHP-CLI   
* MySQL 5.x.x (PostgreSQL or SQLite3 still in the development stage)
* gammu-smsd, make sure it is already running and configured

## Installation  

1. Extract to web root folder (eq: /var/www/html => Ubuntu)
2. Create database named sms (you can do it with mysql console or phpMyAdmin)
     ```
     # mysql > CREATE DATABASE sms;
     # mysql > quit
     ```

3. Edit database config (application/config/database.php)
   Change database value to 'sms', username and password is depend on your mysql configuration

4. Import Kalkun Bootstrap database schema from Kalkun Bootstrap root source  
    ```
    mysql sms - u username -p < sms.sql
    ```

5. Configure daemon (to manage inbox and autoreply)
   -  Set path on gammu-smsd configuration at runonreceive directive, e.g:
      ```
      [smsd]
      runonreceive = /opt/lampp/htdocs/sms/scripts/daemon.sh
      ```
      or, if you using Windows:
      ```
      [smsd]
      runonreceive = C:\xampp\htdocs\sms\scripts\daemon.bat
      ```
   - set correct path (php-cli path and daemon.php path) on daemon.sh or daemon.bat 
   - make sure that the daemon script is executable (e.g: chmod +x daemon.sh)
   - Change URI path in daemon.php, default is (http://localhost/sms)
  
**IMPORTANT:** To improve security, it's higly recommended to change "encryption_key" on application/config/config.php
  
6. Open up your browser and go to http://localhost/sms. Default account (you can change it after you login) :
``` 
`username = sms`
`password = 123456`
```

## Credits
Kalkun http://kalkun.sourceforge.net and [more](https://github.com/datamediatama/kalkun-bootstrap/blob/master/CREDITS).

## Roadmap
We don't have any logo yet :), much remains to be done.

## License
This project is licensed under the terms of the **MIT** license.

##### Donation, sponsorship, collaboration or paid customization service
Do not hesitate to contact us at info_AT_datamediatama.com