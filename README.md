This is Static Web site for education purposes. It includes: <br>
The <b>recaptcha</b> and the <b>email form</b> need to install a server (example WAMP) to work properly.
<hr>
<h3>- API for google maps</h3> 
If you have acount on Google API then follow the bellow link:
https://console.cloud.google.com/google/maps-apis/overview?project=aerobic-canto-316519&folder=&organizationId=. 
Then follow the path: Credencials > Create Credencials > Application restrictions : HTTP referrers (websites) > Website restrictions :<br>
1. If you have domain name where it is hosted then type the URL. 
2. In case you run it localy (example with WAMP) just type "Localhost".


<h3>-Keys from google for recaptcha</h3>
Follow the link:https://www.google.com/recaptcha/admin/create and at the Domain field add "Localhost". Those keys will use by the web page and on the Server side on PHP.  

<h3>-Email From on PHP that works with WAMP with SMTP local server enable</h3>
Steps:<br>
1. Create a folder "sendmail" at the path "C:\wamp64\".<br>
2. Download "sendmail.zip" from https://www.glob.com.au/sendmail/ and extract in on the file your created above.<br>
3. Make changes on sendmail.ini file <br>

|Change and Enable those attributes|Unenable those atributes|
|-----|----|
|smtp_server=smtp.gmail.com|; smtp port (normally 25)
|smtp_port=465|
|smtp_ssl=ssl|
|default_domain=localhost|
|debug_logfile=debug.log|
|auth_username=********|
|auth_password=********|
|hostname=localhost|

<h1><a href="https://kara710.github.io">Click here</a><h1>
