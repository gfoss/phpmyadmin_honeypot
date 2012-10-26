          /------------------------------\
          |------------------------------|
----------|~~~phpMyAdmin Honeypot v1.0~~~|----------
          |      Gregarious Fossil       |
----------|           3/2/2011           |----------
          |------------------------------|
          \------------------------------/


Probably one of the smallest and simplest honeypot's out there, but like most things, it will only work if you follow the instructions...


          /------------------------------\
----------|        Prerequisites         |----------
          \------------------------------/

You will need...

1. A web server (preferably running Apache)

2. The ability to change file permissions on the web server

3. To know at least a little HTML and PHP

4. About 30 minutes of free time. More if you are... um... slow ;)


          /------------------------------\
----------|           Install            |----------
          \------------------------------/

1. After extracting the contents of this archive, upload the /phpmyadmin/ folder to the root of your directory

2. chmod the permissions on /phpmyadmin/log.txt to 700 so that the file can be written to but not accessed by others:
     $chmod 700 log.txt

3. Edit index.php and replace "YOUR@EMAIL.COM" with your e-mail address. You may also want to change "YOURSITEHERE" to the website you will utilize this on.

4. Add the following line to your robots.txt file (or create one in the root of your web server) so that web crawlers cannot index the /phpmyadmin/ directory:
     Disallow: /phpmyadmin/

5. Download the most recent version of tectite form processor: http://www.tectite.com/. Follow the configuration instructions and modify the responses / redirects to something interesting. Psst... you don't need to use tectite forms, any form processor will work.

6. Change the file "formmail.php" to "login.php". Place this in the /phpmyadmin/ directory and test to make sure that it works…

7. That's it, now just sit back and see how many flies you can catch!


          /------------------------------\
----------|          Changelog           |----------
          \------------------------------/

*3/2/2011 - First release...


-------------------
http://gregfoss.com |
@Heinzarelli        |
-------------------