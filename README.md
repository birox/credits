#Credits
*Plugin Name:* Credits  
*Author:* Biro Florin  
*Author Website:* [documentator.org](http://documentator.org)  
*Created:* 1/12/2014 23:58:49  
*Version:* 1.0.0  
*Download source:*  [GitHub](#)  
***

**Credits** is a sample plugin. Its main purpose is to give developers a starting example on developing plugins but it also changes the Documentator's footer "Powered by" link with Terms and Conditions and Privacy Policy pages  
To modify the T&C and Privacy pages open the 'views' folder and modify the content in files 'terms.php' and 'privacy.php' to fit your needs  
Credits plugin is a good example on how to create & register custom pages in Documentator.

>Hooks in use:

1. <code>hook('js', null, 'credits\_js');</code>
2. <code>hook('css', null, 'credits\_css');</code>
3. <code>hook('translate', null, 'credits\_translate');</code>
4. <code>hook('footer\_right', null, false);</code>
5. <code>hook('footer\_right', null, 'credits\_output');</code>
6. <code>hook('pages\_url', null, 'credits_pages');</code>
7. <code>hook('page\_terms', null, 'credits\_terms\_page');</code>
8. <code>hook('page\_privacy', null, 'credits\_privacy\_page');</code>

***

>Functions in use:

* <code>plugin\_path(\_\_FILE\_\_);</code>
* <code>plugin\_url(\_\_FILE\_\_);</code>
* <code>get\_path();</code>
* <code>\_t($translate)</code>

***

>Plugin structure:

* assets  
  * scripts.js  
  * style.css  
* translate  
  * en.ini  
* views  
  * terms.php  
  * privacy.php
* index.php
