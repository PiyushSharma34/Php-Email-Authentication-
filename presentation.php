<!-- <?php
echo "<h2><i>THIS IS ARRAY POP AND PUSH METHOD</h2></i>";





$pop = ["APPLE","BANANA","PAPAYA","ORANGE","PAPAYA"];

echo "<hr>";

echo "THIS IS ORIGNAL VALUE";


echo "<pre>";
print_r($pop);
echo "</pre>";
array_pop($pop);
array_pop($pop);




echo "<hr>";

echo "THIS IS POP VALUE";
echo "<pre>";
print_r($pop);
echo "</pre><HR>";






echo "<i>THIS IS ARRAY PUSH METHOD</i><BR><BR>";


$push = ["APPLE","BANANA","PAPAYA","ORANGE","PAPAYA"];




array_push($push,"date",45,"LEMON");

echo "THIS IS PUSH METHOD ";

echo "<pre>";
print_r($push);
echo "</pre>";
echo "<br><hr>";







echo "<h2>THIS IS ARRAY SHIFT AND UNSHIFT METHOD</h2>";
ECHO "<BR>";

$ram = ["RADHA","KUMARI",23,"KANPUR","HTML","AP14",45];

echo "<hr>";


echo "<i>THIS IS ORIGNAL VALUE </i>";

echo "<pre>";
print_r($ram);
echo "</pre>";

echo array_shift($ram)."<BR>";
echo array_shift($ram)."<BR><hr>";


echo "<u>THIS IS SHIFT  METHOD</u>";
echo "<pre>";
print_r($ram);
echo "</pre><BR><hr>";

echo "<i>THIS IS UNSHIFT METHOD </i>";

echo array_unshift($ram , "PIYUSH",123,"TRAPTI");


echo  "<pre>";
print_r($ram);
echo  "</pre>";



echo "<h3>THIS IS ARRAY MERGE AND COMBINE PROGRAM</h3><BR><hr>";


echo "THIS IS ORIGNAL PROGRAM";
$course = ["CSS","JAVA","HTML","JQUERY"];
$course2 = ["MATH","ENGLISH","SCIENCE","JQUERY"];
$STUD = ["MAHI","RAJENDRA","SURENDRA","HATIM"];
echo "<pre>";

print_r($course);
print_r($course2);
print_r($STUD);
echo "</pre>";


echo "<br>";

echo "<hr>";

echo "THIS IS ARRAY MERGE  PROGRAM<BR>";

$A = array_merge($course ,$course2,$STUD);


echo "<pre>";
print_r($A);
echo "</pre><hr>";


echo "THIS IS ORIGNAL COMBINE PROGRAM";
 
$course11 = ["CSS","JAVA","HTML","JQUERY"];
$course12 = ["MATH","ENGLISH","SCIENCE","HINDI"];
//$STUD1 = ["MAHI","RAJENDRA","SURENDRA","HATIM"];

echo "<pre>";

print_r($course11);
print_r($course12);
//print_r($STUD1);
echo "</pre><BR><hr>";

echo "THIS IS   COMBINE PROGRAM";
echo "<pre>";
$new = array_combine($course11,$course12);
print_r($new);
echo "</pre>";

echo "<I>THIS IS ARRAY SLICE  AND SPLICE  PROGRAM</I><BR><BR>";


$piyush = ["RADHA ","SUNEETA",45, "TRAPTI","HANUMAN","RADHIKA","SALEEM","MUKESH"]; 

echo "<hr>";

echo "THIS IS ORIGNAL VALUE";


echo "<pre>";
print_r($piyush);
echo "</pre>";




  
ECHO "<HR>";
echo "<I><B>THIS IS ARRAY SLICE    PROGRAM</B></I>";

$b = array_slice($piyush, 2,5 ,TRUE );
echo "<pre>";
print_r($b);
echo "</pre> <BR><hr>";


echo "<I><B>THIS IS SPLICE METHOD</B ></I>";

 $w = ["APPLE","GRAPES"];
$c = array_splice($piyush , 0,3,$w);

echo "<pre>";
print_r($c);
echo "</pre>";






echo "<h3> THIS IS ARRAY COUNT AND SIZE PROGRAM</h3><BR>";


$piyush = ["RADHA","SUNEETA","MOHAN","PIYUSH",444,"RAJA",4578,"sharma"];

echo count($piyush);


echo "<br>";



//  sizeof uses foe assosiative array only 

 $PIYUSH = [
    [
        "NAME" =>"PIYUSH",
        "AGE" =>23,
        "CITY"=> "KANPUR",
        "COURSE"=> "CSS",
    ],
    [
        "NAME" =>"RADHA",
        "AGE" =>21,
        "CITY"=> "PANKI",
        "COURSE"=> "JAVA",
    ],
    [
        "NAME" =>"TRAPTI",
        "AGE" =>22,
        "CITY"=> "ITAVA",
        "COURSE"=> "HTML",
    ],
    [
        "NAME" =>"RAHUL",
        "AGE" =>32,
        "CITY"=> "RURA",
        "COURSE"=> "JQUERY",
    ]
    ];
    
    echo "<h3>THIS IS ARRAY COLUMN AND CHUNK PROGRAM</h3><hr>";
    
    

    echo "<i>THIS IS ORIGNAL ARRAY</i>";
    echo "<pre>";
    print_r($PIYUSH);
    
    echo "<pre><hr>";
    
    

    
    $RAM = array_column($PIYUSH,"COURSE");
    $RA = array_column($PIYUSH,"NAME");
    
    
    echo "<i>THIS IS ARRAY COLUMN PROGRAM</i>";
    
    echo "<pre>";
    print_r($RAM);
    ECHO "<HR>";
    print_r($RA);
    echo "</pre><hr>";
    
    
 
    echo "<i>THIS IS ARRAY CHUNK PROGRAM</i>";
    
    $RURA = ["RED","GREEN","YELLOW","PINK","BROWN","PURPLE","LIME","BLACK","BLUE"];
    
    
    $A = array_chunk($RURA ,2);
    
    
    echo "<pre>";
    print_r($A);
    echo "</pre>";
    
    ECHO "<HR>";
    
// echo in_array(45,$piyush);


echo "<B><I>THIS IS ARRAY VALUE AND ARRAY UNIQUE</I></B>";



$piyush =[
"NAME"=> "PIYUSH",
"AGE" =>  19,
"CITY"  =>"KANPUR",
"COURSE"=> "HTML",
"NAME 2"=> "PIYUSH",
"id" =>"afdsg",
"age2"=>19
];


echo "<B><I>THIS IS ORIGNAL VALUE</I></B>";

echo "<pre>";
print_r($piyush);
echo "</pre>";


$arr = array_values($piyush );
echo "<br><br><hr>";

echo "<B><I>THIS IS ARRAY  VALUE</I></B>";
echo "<pre>";
print_r($arr);

echo "</pre><hr>";




echo "<B><I>THIS IS  ARRAY UNIQUE  VALUE</I></B>";
$ar = array_unique($piyush);

echo "<pre>";
print_r($ar);

echo "</pre>";


echo "<h3>THIS IS ARRAY IMPLODE AND EXPLODE FUNCTION </h3>";

$ABOUT= ["HELLO","MY","NAME","IS","PIYUSH","I","FROM ","KANPUR"]; 

echo "<hr>";

echo "<i>THIS IS ORIGNAL VALUE OF ARRAY</i>";
echo "<pre>";
print_r($ABOUT);
echo "<pre><br><br><hr>";



$c = implode("_ ",$ABOUT );
                          //array implode change array into string 

echo "<h2>THIS IS ARRAY IMPLODE  FUNCTION </h2>"; 

                          

echo "<pre>";
print_r($c);
echo "<pre><BR><BR>";


echo "<h2>THIS IS ARRAY  EXPLODE FUNCTION </h2><hr>";

$PIYUSH = "HELLO PIYUSH HII MY NAME IS RADHIKA FROM PTANA";

$b =explode(" ", $PIYUSH);

                            // explode change string into array  


echo "<pre>";

print_r($b);

echo "<pre>";


/*$PIYUSH = ["APPLE","BANANA","PAPAYA","ORANGE","GRAPES"];

foreach ($PIYUSH as $key) {
    echo "THIS IS FOR EACH =>>>".$key."<br><br>";
}
*/

$PIYUSH = ["APPLE","BANANA","PAPAYA","ORANGE","GRAPES"];

$RADHA = ["APPLE","BANANA","DATE","ORANGE","MINT","PIYUSH","PAPAYA"];

$RURA = ["DATE","PLUM","BANANA","PAPAYA","APPLE"];

echo "<b>THIS IS ORIGNAL VALUES OF ARRAY</b>";

echo "<pre>";
print_r($PIYUSH);
print_r($RADHA);
print_r($RURA);
echo "</pre><HR>";



echo "<b>THIS IS array_interset FUNCTION</b>";
                                        //it gives us common values of array
$P = array_intersect($PIYUSH,$RADHA,$RURA);


echo "<pre>";
print_r($P);

echo "</pre><BR><HR>";

$jayas = [
"FRUITS1" => "APPLE",
"FRUITS2" => "PAPAYA",
"FRUITS3" => "ORANGE",
"FRUITS4" => "DATE",
"FRUITS5" => "GUAVA",
];

$ram = [
    "FRUITS1" => "APPLE",
    "FRUITS5" => "PAPAYA",
    "FRUITS3" => "ORANGE",
    "FRUITS9" => "DATE",
    "FRUITS8" => "GUAVA",
    ];

    echo "<b>THIS IS ORIGNAL VALUES OF ASSOSIATIVE ARRAY</b>";


    echo "<pre>";
    print_r($jayas);
    print_r($ram);
    echo "</pre><HR>";






$YY = array_intersect_assoc($jayas,$ram);


echo "<b>THIS IS array_interset_assoc FUNCTION</b>";

echo "<pre>";
print_r($YY);
echo "</pre><HR>";


echo "<b>THIS IS array_interset_assoc_key FUNCTION</b>";

$NSTI = array_intersect_key($jayas,$ram);


echo "<pre>";
print_r($NSTI);
echo "</pre><HR>";






?> -->