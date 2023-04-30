<?php
require_once "./Fruits.php";
require_once "./autoLoad.php";

system("clear");

// $fruit1 = new Fruit("aaa");
// $fruit1->name= "apple";
// $fruit1->color="red";

// echo $fruit1->detail();

// echo(Fruit::$a);

// $student1= new Student("hla hla","female",1994);
// $student2= new Student("hla aye","female",1997);
// $student3= new Student("kyaw kyaw","male",1996);
// $student4= new Student("aung aung","male",1993);

// print_r($student1);
// print_r($student2);
// print_r($student3);
// print_r($student4);
// print_r($student1->ShwoFullName()) ;
// print_r($student2->Detail());


// $user=new Db("users");
// print_r($user);
// $user->create(["name"=>"kyaw kyaw","email"=>"kk@gmail.com","gender"=>"male","address"=>"kpg popa"]);
// print_r($user->index());
// print_r($user->show(5));
// print_r($user->delete(46));


// $file=new FileWrider("home.php");
// $file->wride("<?php \n echo 'i am home php';");

// $html=new FileWrider("home.html");
// $html->wride("<h1>min galar par</h1>");

// $css=new FileWrider("style.css");
// $css->wride("h1{color:red}"); 

// $css->wride("h1{color:blue}");


// $users= new QueryBuilder("users");
// print $users->where("gender","=","female")->where("age","=",18)->sql();
// echo "\n";

// $lists= new QueryBuilder("lists");
// print $lists->orWhere("id","=",1)->orWhere("id","=",2)->orWhere("id","=",3)->sql();
// echo "\n";

// $users= new QueryBuilder("users");
// print $users->where("gender","=","female")->orderBy("id")->orderBy("name","DESC")->sql();
// echo "\n";

$me = new Person;
echo $me->talk();
echo $me->walk();
// echo $me->work();
// echo $me->age();
// echo $me->fbPassword();
// echo $me->bank();
