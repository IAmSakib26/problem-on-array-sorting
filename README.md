# problem-on-array-sorting
First I create a variable ($target = 5) and a numbers of array ($nums = [1,3,5,6]) and a empty array ($sorted=[]).
Then created a function named arr_sort(). Which taking two parameters $target and array $numbers.
In this arr_sort function firstly checking with if condition with in_array builtin function (in_array($target,$numbers)).
If $target finds in $numbers then it will sort the array with sort($numbers) function.
Then run a for loop, inside the for loop each sorted item store into the $sort array.
If it's not found the $target into the $numbers array then it will move to the else condition.
Inside the else condition first it will array_push($numbers,$target) function. Then sort($numbers) 
Then run the for loop. And inside the for loop each sorted item store into the $sort array.  