<?php
class calc {
    //Рперации над переменными
    function getResult(){
        if(isset($_POST['operation'])){
            $operation = $_POST['operation'];
            $first = $_POST['1'];
            $second = $_POST['2'];
            switch ($operation){
                case '+': return $first + $second;
                    break;
                case '-': return $first - $second;
                    break;
                case '/': return $first / $second;
                    break;
                case '*': return $first * $second;
                    break;
                case '%': return $first % $second;
                    break;
            }
        }
    }
    //Получение имени
    function getName(){
        if(isset($_POST['name'])){
            $name = $_POST['name'];
            return $name;
        }
    }
    //проверка Имени
    function checkName(){
        if(isset($_POST['name'])){
            $name = $_POST['name'];
               if(preg_match("/[^0-9]/",$name)){
                    return true;
               } else {
                    return false;
             }
        }
    }
    //пустые ли поля ввода чисел
    function  checkNumberField(){
         $first = $_POST['1'];
         $second = $_POST['2'];
        if(!$first  || !$second){
            return false;
        } else {
            return true;
        }
    }
    //Проверка введенных значений
    function checkValue(){
        if(isset($_POST['1'])){
              $first = $_POST['1'];
        }
         if(isset($_POST['1'])){
              $second = $_POST['2'];
         }
          if(preg_match("/[^0-9]/",$first) && preg_match("/[^0-9]/",$second)){
                    return true;
               } else {
                    return false;
             }
        }
    
}
?>
