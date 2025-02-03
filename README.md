This is a simple calculator made using HTML, CSS, and PHP.

The buttons were styled using basic CSS attributes like width, height, margin, border, and other similar attributes.  
Their position is set in HTML by simply being set according to rows and columns.

For PHP logic, I have used a session array, an inbuilt associative array containing session variables available in 
the current script. I have taken the signal from the value attribute in the button and returned data to the input field 
using inline PHP in the value attribute. In PHP, I have used the eval() function to evaluate the entered string as PHP 
code and it performs mathematical operations. 

As the code file is in PHP format, you can run it using software like XAMPP on Windows and Linux and MAMP on MacOS. Save
this file in the htdocs folder of the software and run it on the browser using the appropriate string. For eg-
http://localhost/calc.php
