#phpMyAdmin Honeypot

version 1.4 -- 3/1/2015

greg . foss [at] logrhythm.com

Probably one of the smallest and simplest web honeypots out there...

--------------------------------------------------

#[Requirements]

          You will need...

          1. A web server (preferably running the current version of Apache)

          2. The ability to change file permissions on the web server

          3. To know at least a little HTML and PHP

          4. About 30 minutes of free time

          5. For automated alert generation, access to a Log Manager / SIEM is recommended

--------------------------------------------------

#[Installation]

Medium-Interaction Version:

          1. Upload the /phpmyadmin-interactive/ folder to the root of your web directory and change the folder name to /phpmyadmin/

          2. Change the permissions on /phpmyadmin/log.txt to 700 so that the file can be written to by the web user:
               $ chmod 700 log.txt

          3. Assure that all contents of the directory are owned by the 'web user' (www-data / apache / etc.)
               $ chown -R www-data:www-data /var/www/phpmyadmin/

          4. Add the following lines to your robots.txt file (or create one in the root of your web server) so that web crawlers *won't index the /phpmyadmin/ directory but users will find it:
               # Directories
               Disallow: /phpmyadmin/
               # Files
               Disallow: /phpmyadmin/index.php

          5. Change the name of the default log file (log.txt) and move it to a separate directory.
               Update the file location within the index.php, login.php, phpinfo.php, and master-config/index.php files.

          6. Modify the permitted credentials to 'acccess' the phpmyadmin landing page within login.php on the following line:
               if (preg_match("[USERNAME, PASSWORD]", $comma_delimited_list)) {

          7. Test to assure that access to each page is being logged to the 'log.txt' file.

          8. Parse the logs using the included Regular Expression (below) if you would like to integrate with your SIEM / Log Management solution.

          9. That's it, now just sit back and see how many flies you can catch!


Email Version:

          1. Upload the /phpmyadmin-email/ folder to the root of your web directory and change the name to /phpmyadmin/

          2. chmod the permissions on /phpmyadmin/log.txt to 700 so that the file can be written to by the web user:
               $ chmod 700 log.txt

          3. Assure that all contents of the directory are owned by the web user (www-data / apache / etc.)
               $ chown -R www-data:www-data /var/www/phpmyadmin/
          
          4. Edit index.php and replace "YOUR@EMAIL.COM" with your e-mail address. You may also want to change "YOURSITEHERE"...

          5. Add the following lines to your robots.txt file (or create one in the root of your web server) so that web crawlers *won't index the /phpmyadmin/ directory but users will find it:
               # Directories
               Disallow: /phpmyadmin/
               # Files
               Disallow: /phpmyadmin/index.php

          6. Download the most recent version of tectite form processor: http://www.tectite.com/. Follow the configuration instructions and modify the responses / redirects to something interesting.
               Any form processor will work.

          7. Change the file "formmail.php" to "login.php". Place this in the /phpmyadmin/ directory and test to make sure that it works…

          8. That's it, now just sit back and see how many flies you can catch!


Note - you can combine both versions of this honeypot...


--------------------------------------------------

#[LogRhythm SIEM Regular Expressions]

          Flat File Path:
               /var/www/phpmyadmin/log.txt

          Catch-All RegEx:
               ^.*?,\s+<sip>,(?<login>.*?),\s+(?<session>.*?),\s+(?<url>.*?)$|^.*?_\s+<sip>\s+_\s+(?<url>.*?)$|^.*?,\s+(?<url>.*?),\s+<sip>,\s+(?<object>.*?)$|^.*?,\s+(?<url>.*?),\s+(?<object>.*?)$|^.*?(?<object>.*?)

          Date Parsing:
               <d>/<M>/<yy>:<h>:<m>:<s>

          MPE Sub Rules:
     
          /-----[key]-----\
          |Name           |
          |Object         |
          |Common Event   |
          |Classification |
          |Description    |
          \---------------/

          Landing Page Hit
          url=phpmyadmin/index.php
          Honeypot Access
          Suspicious
          This rule will fire whenever the phpmyadmin homepage is hit

          Logon Failure - Username
          login!=USERNAME && url=phpmyadmin-form
          Honeypot Failed Attack
          Failed Attack
          This rule will fire whenever a login is attempted using an incorrect username

          Logon Failure - Password
          object!=PASSWORD && vmid=phpmyadmin-form
          Honeypot Failed Attack
          Failed Attack
          This rule will fire whenever a login is attempted using an incorrect password

          Successful Login
          login=USERNAME && object=PASSWORD && vmid=phpmyadmin-form
          Account Compromised
          Compromise
          This rule will fire once the attacker has guessed the correct username and password

          System Compromise
          vmid(regex(COMPROMISED))
          Host Compromised
          Compromise
          This rule will fire once the attacker has gained access to phpmyadmin and is now using the service

--------------------------------------------------

#[Changelog]

          3/1/2015
               Small fixes...

          5/21/2014
               Updated Readme
               Improved RegEx
               Improved MPE Parsing Rules

          3/3/2014
               Added medium interaction functionality
               Improved IP address detection
               Included RegEx for SIEM log parsing

          10/25/2012 - Now tracking in GitHub

          3/2/2011 - First release...

--------------------------------------------------

#[License]

Copyright (c) 2015, Greg Foss
All rights reserved.

Redistribution and use in source and binary forms, with or without
modification, are permitted provided that the following conditions are met:
* Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
* Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.
* Neither the name of Greg Foss nor the names of its contributors may be used to endorse or promote products derived from this software without specific prior written permission.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
DISCLAIMED. IN NO EVENT SHALL <COPYRIGHT HOLDER> BE LIABLE FOR ANY
DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
(INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
(INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.

--------------------------------------------------