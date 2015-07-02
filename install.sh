#!/bin/bash

# PhpMyAdmin Honeypot Configuration
# greg.foss[at]owasp.org
# v0.1 - June 2015
#
# This script will customize and configure the phpmyadmin honeypot

echo "===================="
echo "PhpMyAdmin Honeypot Configuration"
echo "===================="
sleep 1
echo ""
echo -e "Where would you like to install the Honeypot? ( ex: /var/www )"
read directory
echo ""
echo "Installing honeypot to: $directory/phpmyadmin/"
echo ""
echo -e "What Username would you like to use for PhpMyAdmin? (default: root)"
read phpmyadminUsername
if [ -z $phpmyadminUsername ]; then
    phpmyadminUsername="root"
fi
echo -e "What Password would you like to use for PhpMyAdmin? (default: root)"
read phpmyadminPassword
if [ -z $phpmyadminPassword ]; then
    phpmyadminPassword="root"
fi
echo ""
echo "PhpMyAdmin Username and Password Configured ($phpmyadminUsername/$phpmyadminPassword)"
echo ""
mv ./phpmyadmin-interactive $directory/phpmyadmin
echo -e "Rename the honeypot log filename (no extension and make this random): "
read phpmyadminLog
if [ -z $phpmyadminLog ]; then
    phpmyadminLog=$RANDOM
    echo "No value supplied, using a random value: $phpmyadminLog.txt"
    echo ""
else
    echo "Using $phpmyadminLog.txt to capture authentication attempts"
    echo ""
fi
echo "Configure LogRhythm to extract data from $directory/phpmyadmin/$phpmyadminLog.txt"
sed -i "/\$File = \"log.txt\";/c\\\$File = \"$phpmyadminLog.txt\";" $directory/phpmyadmin/index.php
sed -i "/\$myFile = \"log.txt\";/c\\\$myFile = \"$phpmyadminLog.txt\";" $directory/phpmyadmin/login.php
sed -i 's/log.txt/'$phpmyadminLog'/g' $directory/phpmyadmin/master-config/index.php
sed -i 's/log.txt/'$phpmyadminLog'/g' $directory/phpmyadmin/master-config/phpinfo.php
mv $directory/phpmyadmin/log.txt $directory/phpmyadmin/$phpmyadminLog.txt
if [ -f ../phpmyadmin_honeypot/README.md ]; then
     rm -rf ../phpmyadmin_honeypot/
fi
echo ""
echo "Fake PhpMyAdmin has been configured successfully and can be accessed via http://127.0.0.1/phpmyadmin/"
echo "There are also one fake phpinfo page: $directory/phpmyadmin/phpinfo.php"
echo "Logs will write to: $directory/phpmyadmin/$phpmyadminLog.txt"
echo "Username set to => $phpmyadminUsername"
echo "Password set to => $phpmyadminPassword"
echo ""