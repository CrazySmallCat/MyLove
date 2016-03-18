<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <form method="POST" action="">
            Username : <input type="text" name="username" value=""/> <br/>
            Password : <input type="password" name="password" value=""/> <br/>
            <input type="submit" name="submit_login" value="Login"/>
        </form>
    </body>
</html>

CREATE TABLE 'user' (
  'id' int(11) unsigned NOT NULL AUTO_INCREMENT,
  'username' varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  'password' char(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  'level' int(1) DEFAULT '1',
  PRIMARY KEY ('id')
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci