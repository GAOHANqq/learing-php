<?php
namespace Foo\Bar;
include '13namespace1.php';
const FOO = 2;
function foo() {}
class foo
{
    static function staticmethod() {}
}

/* 非限定名称 */
foo(); 
foo::staticmethod(); // 解析为类 Foo\Bar\foo的静态方法staticmethod。
echo FOO . '<br>'; 

/* 限定名称 */
subnamespace\foo(); // 解析为函数 Foo\Bar\subnamespace\foo
subnamespace\foo::staticmethod();
echo subnamespace\FOO . '<br>'; 
                                  
/* 完全限定名称 */
\Foo\Bar\foo();
\Foo\Bar\foo::staticmethod(); 
echo \Foo\Bar\FOO; // 解析为常量 Foo\Bar\FOO
?> 