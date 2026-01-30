<?php

// class EmailService {
//     public $name;
//     public function __construct($name){  // magic function  it will autometically claled when object is created
//         echo "called when oject called";
//         $this->name=$name;
//     }
//     function testclass(){        
//         return  "hello ".$this->name;
//     }
//     // other mthod gees here
//     public function __destruct(){
//         echo "called when oject completed"    ; // it will autometicall when objec in edn or it complete
//     }

// } /// this is nornal class

// second lecture 
/*-----------------------------------------------------
2nd view lecture  INHERITENCE
inheritence only meain the chield class can use their propety or our parent cals
here some point we need to understan here as given 
*/
// class test{
//     public  $name;
// }
// class tempTwo extends test{    
//     public function __construct($name){  
//         $this->name=$name;
//     }
    
// }
// $temp=new tempTwo('Yogesh');
// echo $temp->name;
// u will get name here firs proper usign second chield class 
/*
here if create secodn class object secon class conistructor is defind then it will called first class construtor will nto called if we need then need to call it manualy
here 
class tempTwo exend test{      this is you child class of test
    public function __construct($name){  
        parent::__construct($arguments); /// here we are callign manuallyy here first class construct will called excute then secon will exicute
        $this->name=$name;

        parent::__construct($arguments); if write in last then fist all lien wil run then it will called
    }
    
}


--------------------------------------------------------*/
/*
----------- -------------------------------
3rd vide Encapsulation
encapsulation or access modifire
here 
1-public
i-  public it will be acceable with in the class and modify outside of the class also 
ii- it can modify or access in child call also 


2- protected
i it will be access by own in the calss and in child clas also but not out side or the class 

ex--
*/
// class testNew{
//     protected $temp;
//     public $test='test';

// }
// $test=new testNew();
// $test->temp=2;
// echo $test->temp;  this throwing erro

// echo $test->test; 
/*
it wil given a errr cause protect can't be acces out side of the class u can use in own clall only or chield class only 


u have to delate get propertey and also set proper or u can use constructor for set property 
*/
// class testClass{
//     protected $temp;
// }
// class temp2 extends testClass{    
//     public function __construct($name){  
//         $this->temp=$name;
//     }
//     public function  Getname(){
//         return $this->temp;
//     }
// }


// $test=new temp2('shyam');
// echo $test->Getname();
/*  You will get name here usign chield call method

3- private 
i private proper fuciton or attribute only can be accesable only in own class not even in the chield class;

--------------------------------------------------

4th- abstract class
i ablstrat class it that where we in that where we have to main atleast one abltract method 
what is abstract method (so abstract method is  that if an mtehod only desclare but not implented that is abstract is abstract method)

ii so we must atleast declare one abstract method in abstrat class
iii  if some chield called what to extend or use the abstract class so the rule is chield class shodud impletent all abrstact method  which is defidn in the abstract class
iv- we can't create abstract class objects
v- note we can't impletn in abstract method
now here ex
*/
// abstract class testAbstract{
//     protected $temp;
//     abstract function test(); // this is abstract method
// }
// class tempTwoNew extends testAbstract{    
//     public function __construct($name){  
//         $this->temp=$name;
//     }
//     public function  test(){  // here we implementd that declared abstract methdo in the prent abstract class
//         return $this->temp;
//     }
// }
/*
in the abstract class
===================================================================================================
STATic
5th static method
i-stattic method is that where we cna access withou mekaign object 
ii-inside the scall $this->name instead of this selft::name like this we nee o access only for static methdo or property
*/
// class class1 {
//     static $name;
//     public function  __construct(){
        
//     }
// }
//    access
// echo  class1::$name;  
/*here u will get 
==================================================================
6 Triat

tain is nothign but it is allows to class to use mutliep in multipel calss in sinle (can multiple inharitence in anothor language but here not multiple ingeritence accoud
so here we have trait create multiple traits and use in any where in the class )

here ex
*/
// trait Class1Trait {
//     //  ever this wil be same here constructor will not there in the trait
//     public   function  fun1(){
//         echo "this this fun 1\n";
//     }
// }
// trait Class2Trait{
//     // ever this wil be same here constructor will not there in the trait
//     public   function  fun1(){
//          echo "this this fun2\n";
//     }
    
// }
// class class3 {
//     use Class1Trait,Class2Trait{
//         Class1Trait::fun1 insteadOf Class2Trait ;
//     }

// }
/*
    liek this u can use treain multipe trian in one class and theier properties 
    one more thing here we have to note in when if u used two train in once class if both trait have same metod so ONE ERROR will come we hve to tell 
    which moethd o we hve ot clal if both have method have smem name in the trains


here if u try to call fun1 form clas3 u wil get erro 
*/
// $test=new class3();
// $test->fun1(); 
// iu will get erro 

// trait ClassOneTrait {
//     //  ever this wil be same here constructor will not there in the trait
//     public  function  fun1(){
//         echo "this this fun 1\n";
//     }
// }
// trait ClasstwoTrait {
//     public  function  fun1(){
//         echo "this this fun 2\n";
//     }
    
// }
// class ClassThree {
//     use ClassOneTrait,ClasstwoTrait{
//         ClassOneTrait::fun1 insteadOf ClasstwoTrait;
//     }

// }
// so soudltion is here u have use the train u have define that whci u have call liek this ()

