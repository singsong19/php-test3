<!doctype html>
<html>
    <body>
    <!-- Stings & String Operator -->
    <?php
        echo 'Hello World'; //single quoted
    ?>
    <?php
        echo "Hello World"; //single quoted
    ?>

    <h2>concatenation operator .(결합)! 
    문자 열과 문자 열을 결합해서 하나의 문자 열로 만들어주는 역할</h2>
    <?php
        echo "Hello"."world";
    ?>
   
   <h2>String length function</h2>
   <?php
       int strlen(string $string); //문자열의 길이를 알고 싶을 때의 형식
    ?>
    <?php
       echo strlen("Hello world"); //문자열의 길이를 알고 싶을 때의 형식
    ?>
    

    </body>
</html>
