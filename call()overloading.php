<?php

/**
 * 
 * function overloading : when function with same name but diffrent no of parameters is called function overloading .
 *  in php we cant use funtion overloading like other oops supported languages.
 * 
 * to use function overloading in php we uses magic function
 * which is 
 * __call(funtion name ,no of  arguments ){
 * }
 * __call()  : this function takes two arguments funtionname and no of arguments. 
 */

 class base {
    function __call($overloadFun ,$args);

    if($overloadFun === 'calc'){

        switch($args)
    }
 }
