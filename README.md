<h1>Monkeys Test Application</h1>
<p>A simple index page with a form in it. Field labels are editable in Silverstripe.<p>

# Installation
* Clone repository into desired directory.
* Note that the 'Monkey' directory should be treated as the web root directory.
* Import .sql file as a new MySQL database called 'monkeydb'
* Create user called 'monkeyuser', password: 'monkeypass'
* When running the PHP server make sure you point virtual host to the 'Monkey' directory.

* The website should be running properly at this point. You should see the title: "The Monkeys Form Test".
* If the title is different (Home) then it is likely that the HTML5Boilerplate theme has not installed properly, since it is stored as a separate git submodule.
* This can be fixed by navigating into the main repository folder in a terminal window and typing the following commands to download the theme files:
``` 
git submodule init
git submodule update
```
