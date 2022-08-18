<?php
echo "<h3>Example for _LINE_</h3>";
echo "You are at line number ".__LINE__."<br/><br/>";
echo "<h3>Example for _FILE_</h3>";
echo __FILE__."<br/><br/>";
echo "<h3>Example for _DIR_</h3>";
echo __DIR__."<br/><br/>";
echo dirname(__FILE__)."<br/><br/>";
echo "<h3>Example for _FUNCTION_</h3>";
function cash(){
    echo 'the function name is '.__FUNCTION__."<br/><br/>";
}
cash();
function test_function(){
    echo 'HYIII';
}
test_function();
echo __FUNCTION__."<br/><br/>";
echo "<h3>Example for __CLASS__</h3>";
class abc
{
    public function __construct()
    {
        ;
    }
    function abc_method(){
        echo __CLASS__."<br/><br/>";
    }
}
$t= new abc;
$t->abc_method();
class first{
    function test_first(){
        echo __CLASS__;
    }
}
class second extends first
{
    public function __construct()
    {
        ;
    }
}
$t= new second;
$t->test_first();
echo "<h3>Example for __TRAIT__</h3>";
trait created_trait{
    function abc(){
        echo __TRAIT__;
    }
}
class anew{
    use created_trait;
}
$a= new anew;
$a->abc();
echo "<h3>Example for __METHOD__</h3>";
class meth{
    public function __construct()
    {
        echo __METHOD__."<br/><br/>";
    }
    public function meth_fun(){
        echo __METHOD__;
    }
}
$a=new meth;
$a->meth_fun();
echo "<h3>Example for _NAMESPACE_</h3>";
class name{
    public function __construct()
    {
        echo 'This line will be printed on calling namespace';
    }
}
$clas_name=__NAMESPACE__.'\name';
$a=new $clas_name;
?>