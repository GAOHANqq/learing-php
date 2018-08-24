<?php
function glo(num){
    if(is_int(num)){
        echo '输入正确';
    }else{
        throw new Exception('传值类型错误！');
    }
} 