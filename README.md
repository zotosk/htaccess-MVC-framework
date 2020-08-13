# htaccess MVC framework

php mvc framework

### Configuration Requirements.

Upon .config for const parameters

```//Database params
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'mvc');

//App Root
define('APPROOT', dirname(dirname(__FILE__)));

//Url root
define('URLROOT', 'http://localhost/htaccess');

//Site name
define('SITENAME', 'MVC-APP');

```

the file and .htaccess on public folder for the RewriteEngine `RewriteRule ^(.+)$ index.php?url=$1 [QSA,L]`
