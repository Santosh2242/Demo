<?php 

 $a = readline("enter a Number: ");
$b = readline("enter Second number: ");
echo add($a,$b);

function add($a=0,$b=0)
{
    return $a+$b;
}

echo PHP_EOL;
 printf("The result with 0 Argument= %d\n",add());
 printf("The result with 1 Argument $a= %d\n",add($a));
 printf("The result with 1 Argument $b= %d\n",add($b));
 printf("The result with 2 Argument= %d\n",add($a,$b));

?>
