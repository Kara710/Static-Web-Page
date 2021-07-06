This is a Static Web site for education purposes. <br>
The <b>recaptcha</b> and the <b>email form</b> will only work with a server (for example WAMP).

<h1><a href="https://kara710.github.io">Click here</a></h1>
<hr>
What this site includes and what you need to do:
<h3>- API for google maps</h3> 
If you have an acount on Google API then follow the bellow link:
https://console.cloud.google.com/google/maps-apis/overview?project=aerobic-canto-316519&folder=&organizationId=. 
Then follow the path: Credentials > Create Credentials > Application restrictions : HTTP referrers (websites) > Website restrictions :<br>
1. If you have a domain name hosted in a web server then type the URL. 
2. In case you want to run it locally (for example with WAMP) just type "localhost".


<h3>-Keys from google for recaptcha</h3>
Follow the link:https://www.google.com/recaptcha/admin/create and at the Domain field add "localhost". Those keys will be used by the web page and PHP script.<br>
It is important to move your html and php files on "C:\wamp64\www" , otherwise it will not recognize the key and it will show this error "Invalid domain for site key"<br>

<h3>-Email Form is a compination of HTML and PHP code and runs only with an SMTP server</h3>
Steps:<br>
1. Create a folder "sendmail" at the path "C:\wamp64\".<br>
2. Download "sendmail.zip" from https://www.glob.com.au/sendmail/ and extract it to the folder your created above.<br>
3. Make changes on sendmail.ini file <br>

|Change and Enable these values|Comment out these values|
|-----|----|
|smtp_server=smtp.gmail.com|; smtp port (normally 25)
|smtp_port=465|
|smtp_ssl=ssl|
|default_domain=localhost|
|debug_logfile=debug.log|
|auth_username=********|
|auth_password=********|
|hostname=localhost|

4. Make changes on the php.ini file<br>
To find the right file : click on wamp -> mouseover the PHP icon and there you will find the right php.ini.

|Change and Enable these values|Comment out these values|
|-----|----|
|sendmail_path ="C:\wamp64\sendmail\sendmail.exe -t -i"|;SMTP = localhost
| |;smtp_port = 25
| |;sendmail_from ="admin@wampserver.invalid"

5.It is important to move your php file on "C:\wamp64\www" , otherwise it will not work.<br>
6.Make sure that your server has enabled the PHP extentions  openssl and sockets.<br>

![](https://github.com/Kara710/Static-Web-Page/blob/main/extensions.png =250x250)
 
<h3>It is a RESPONSIVE web site</h3>
I used the @media tag element for this part.
