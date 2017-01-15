This docker image contains php-fpm with saxon xslt processor php-api.

### Supported
* XSLT 2.0/3.0
* XQuery 1.0/3.0
* XPath 2.0/3.0
* Schema Validation

### Example

It is important to cd into **_dockerfiles/saxon/php-fpm_** otherwise php-fpm cannot run **_test.php_** script. 

```bash
$ cd dockerfiles/saxon/php-fpm/examples/xslt
$ docker run --rm -it -v $(pwd):/var/www/html rastu/saxon-php-fpm:latest php test.php
```

#### Output
```html
<html>
   <body>
      <h2>My CD Collection</h2>

      <p>
         Title: <span style="color:#ff0000">Empire Burlesque</span><br>
         Artist: <span style="color:#00ff00">Bob Dylan</span><br></p>
         
      ....
   </body>
</html>
```

#### Links
- http://www.saxonica.com/saxon-c/index.xml