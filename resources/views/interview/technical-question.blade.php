 @extends('interview.layouts.app')
@section('title')
Technical Logic Interview Questions
@endsection 
@section('keywords')
QuickDials-  Business Services list 
@endsection
@section('description'),  
Practice technical logic questions and answers to improve problem-solving skills and prepare for coding, aptitude, and technical interviews.
@endsection


@section('content')	 
 
 

<div class='main light-grey' id='belowtopnav' style='margin-left:220px;'>
  <div class='row white'>
    <div class='col l11 m12' id='main'>
       
<h1>Technical<span class="color_h1"> Interview Question & Answer</span></h1>
<div class="clear nextprev">
<a class="left btn" href="{{url('interviews/mysql-interview-question-answer')}}">&#10094; Previous</a>
<a class="right btn" href="{{url('interviews/laravel-interview-question-answer')}}">Next &#10095;</a>
</div>
<hr>
  <div class="light">
  
 <section id="services-section" class="py-12 bg-gray-100">
  <div class="container mx-auto px-4">
  
 
 <div class="mb-12">
 <div class="question"> 
 <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Find two value add value return value are equil?</h2>
 </div>
  <div class="example">
 <div class="code">
 <code>
  <xmp>
$array = array(2,7,11,15,18); 
for($i=0; $i <count($array);$i++){ 
  for($j= $i+1; $j<count($array);$j++){ 
   $sum = $array[$i] + $array[$j]; 
   if($sum == 9){ 

   echo "Index of $array[$i] 
    $array[$j] is $sum\n"; 

   } 
  } 
} 

// output 2 7
</xmp>
 </code>
</div>
</div>
</div>
 
 <div class="mb-12">
 <div class="question"> 
 <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Write program factorial in php?</h2>
 </div>
  
 <div class="example">
 <div class="code">
 <code>
  <xmp>
 function factorial($n){

if($n<=1){
 return 1;
}
return $n * factorial ($n-1);
 }
 echo factorial(5);
</xmp>
 </code>
</div>
</div>
</div>
 
 
 <div class="mb-12">
 <div class="question"> 
 <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Find Odd and Even without loop?</h2>
 </div>
  
 <div class="example">
 <div class="code">
 <code>
  <xmp>
 "First Program"; 
 $a[0] = "Even";
 $a[1] = "Odd";
 echo $a[5%2]; // Output Odd


 "Second Program"; 
 $array  = array('Even','Odd');
 $number = 5;
 echo $array[$number%2];


"Third Program"; 
 $n = 6;
 if($n&1){
echo "Odd";
 }else{
 echo "Even"; // Output Even

 }

</xmp>
 </code>
</div>
</div>
</div> 



  
 
 
 <div class="mb-12">
 <div class="question"> 
 <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Second Max value in array?</h2>
 </div>
  
 <div class="example">
 <div class="code">
 <code>
  <xmp>
 function findSecondMax($arr) {
    $max = 0;
    $secondMax = 0;

    foreach ($arr as $num) {
        if ($num > $max) {
            $secondMax = $max;
            $max = $num;
        } elseif ($num < $max && $num > $secondMax) {
            $secondMax = $num;
        }
    }

    return $secondMax ?$secondMax: "No second maximum exists";
}

// Example usage:
echo findSecondMax([5, 3, 8, 1, 9, 2]); // Output: 8
echo findSecondMax([1, 1, 1]); // Output: No second maximum exists
echo findSecondMax([7, 7, 7]); // Output: No second maximum exists
echo findSecondMax([10, 5, 8, 12, 3]); // Output: 10
 

</xmp>
 </code>
</div>
</div>
</div> 
  
 
 
 
 <div class="mb-12">
 <div class="question"> 
 <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Write a program sort array in php?</h2>
 </div>
  
 <div class="example">
 <div class="code">
 <code>
  <xmp>
  $arr = [64, 34, 25, 12, 22, 11, 90];
 $n = count($arr);
    
    // Outer loop for passes
    for ($i = 0; $i < $n; $i++) {
        // Inner loop for comparisons
        for ($j = $i+1; $j < $n; $j++) {
            // Compare adjacent elements
            if ($arr[$i] > $arr[$j]) {
                // Swap if they are in wrong order
                $temp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $temp;
            }
        }
    }
    
    echo "<pre>";print_r($arr);
//Output
[0] => 11
[1] => 12
[2] => 22
[3] => 25
[4] => 34
[5] => 64
[6] => 90
</xmp>
 </code>
</div>
</div>
</div> 
  
 
 
 <div class="mb-12">
 <div class="question"> 
 <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Write a program prime number in php?</h2>
 </div>
  
 <div class="example">
 <div class="code">
 <code>
  <xmp>
  function isPrime($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            return false; 
        }
    }

    return true; 
}
$number = 7;
if (isPrime($number)) {
    echo "$number is a prime number.";
} else {
    echo "$number is not a prime number.";
}
</xmp>
 </code>
</div>
 <div class="code">
 <code>
  <xmp>
 $array = [2, 3, 4, 5, 7, 8, 9, 11, 15];

$primes = [];

foreach ($array as $num) {
    if ($num < 2) {
        continue;
    }

    $isPrime = true;

    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }
    }

    if ($isPrime) {
        $primes[] = $num;
    }
}

print_r($primes);   
</xmp>
 </code>
</div>
</div>
</div> 
 



 <div class="mb-12">
 <div class="question"> 
 <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Write a program palindrome number in php?</h2>
 </div>
  
 <div class="example">
 <div class="code">
 <code>
  <xmp>
  Step First string

  function Palindrome($string){  
    if (strrev($string) == $string){  
        return 1;  
    }
    else{
        return 0;
    }
}  

// Driver Code
$original = "DADDAD"; 
if(Palindrome($original)){  
    echo "Palindrome";  
} 
else {  
echo "Not a Palindrome";  
}

//Second Program  string without pre-difine function

 //without pre-define function
function isPalindrome($str) {    
    $i = 0;
    $j = strlen($str) - 1;  
    while ($i < $j) {        
        if ($str[$i] !== $str[$j]) {
            return false;  
        }
        $i++;   
        $j--;  
	}    
    return true;  
}
$string = "aabbaa";
if (isPalindrome($string)) {
    echo "$string is a palindrome!";
} else {
    echo "$string is not a palindrome!";
}

//Third program

$number = 12121;
$temp = $number;
$reverse = 0;

// Reverse the number
while ($temp > 0) {
    $digit = $temp % 10;
    $reverse = ($reverse * 10) + $digit;
    $temp = (int)($temp / 10);
}

// Check if original and reversed are the same
if ($number == $reverse) {
    echo "$number is a palindrome number.";
} else {
    echo "$number is not a palindrome number.";
}

</xmp>
 </code>
</div>
</div>
</div> 
  




 <div class="mb-12">
 <div class="question"> 
 <h2 class="text-3xl font-bold text-primary mt-5 mb-4">write a program array duplicate count number  in php?</h2>
 </div>
  
 <div class="example">
 <div class="code">
 <code>
  <xmp>
 $arr = array(1, 2, 3, 2, 4, 1, 5, 3);  
$length = 0;
$counts = [];
$duplicateCount = 0;
while (isset($arr[$length])) {
    $length++;
}

// Count occurrences of each element
for ($i = 0; $i < $length; $i++) {
    $count = 1;  
    for ($j = $i + 1; $j < $length; $j++) {
        if ($arr[$i] == $arr[$j]) {
            $count++;
        }
    }
    
    $isProcessed = false;
    for ($k = 0; $k < $i; $k++) {
        if ($arr[$k] == $arr[$i]) {
            $isProcessed = true;
            break;
        }
    }
    if (!$isProcessed) {
        $counts[$arr[$i]] = $count;
        if ($count > 1) {
            $duplicateCount++;
        }
    }
}


echo "Duplicate count: $duplicateCount\n";
echo "Element counts:\n";
foreach ($counts as $element => $count) {
    echo "$element appears $count time(s)\n";
}

// Output results

 Array: [1, 2, 3, 2, 4, 1, 5, 3]
Duplicate count: 3
Element counts:
1 appears 2 time(s)
2 appears 2 time(s)
3 appears 2 time(s)
4 appears 1 time(s)
5 appears 1 time(s)

</xmp>
 </code>
</div>
</div>
</div> 
  





 <div class="mb-12">
 <div class="question"> 
 <h2 class="text-3xl font-bold text-primary mt-5 mb-4">write a program array duplicate count string  in php?</h2>
 </div>
  
 <div class="example">
 <div class="code">
 <code>
  <xmp>
    $arr = "abdbabdbaab"; // Example array
$length = 0;
$counts = [];
$duplicateCount = 0;

// Calculate array length manually
while (isset($arr[$length])) {
    $length++;
}

// Count occurrences of each string
for ($i = 0; $i < $length; $i++) {
    $count = 1; // Count current string itself
    for ($j = $i + 1; $j < $length; $j++) {
        if ($arr[$i] === $arr[$j]) {
            $count++;
        }
    }
    // Store count only if not already processed
    $isProcessed = false;
    for ($k = 0; $k < $i; $k++) {
        if ($arr[$k] === $arr[$i]) {
            $isProcessed = true;
            break;
        }
    }
    if (!$isProcessed) {
        $counts[$arr[$i]] = $count;
        if ($count > 1) {
            $duplicateCount++;
        }
    }
}

// Output results
 
 
echo "String counts:\n";
foreach ($counts as $string => $count) {
    echo "$string appears $count time(s)\n";
}

</xmp>
 </code>
</div>
</div>
</div> 
  


 <div class="mb-12">
 <div class="question"> 
 <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the output of the following code?</h2>
 </div>
  
 <div class="example">
 <div class="code">
 <code>
  <xmp>
    $array = array(1 => "a", "1" => "b", 1.5 => "c", true => "d");

echo $array[1];


output d

</xmp>
 </code>
</div>
</div>
</div> 
  




 <div class="mb-12">
 <div class="question"> 
 <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What does the following PHP code output, and why?</h2>
 </div>
  
 <div class="example">
 <div class="code">
 <code>
  <xmp>
 
$number = 3;
echo $number;
echo $number++ + $number++;
echo $number;
echo $number-- - $number--;
echo $number;
 

Output
3
7
5
1
3

</xmp>
 </code>
</div>
</div>
</div> 



 <div class="mb-12">
 <div class="question"> 
 <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What does the following PHP code output, and why?</h2>
 </div>
  
 <div class="example">
 <div class="code">
 <code>
  <xmp>
 
$array = ['a' => 'apple', 'b' => 'banana', 'c' => 'cherry'];
unset($array['b']);
$result = array_keys($array);

echo implode(", ", $result);
 

Output
a
c
 

</xmp>
 </code>
</div>
</div>
</div> 
  

 <div class="mb-12">
 <div class="question"> 
 <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What will be the output of the code below and why?</h2>
 </div>
  
 <div class="example">
 <div class="code">
 <code>
  <xmp>
  $x = 5;
echo $x;
echo "<br />";
echo $x+++$x++;
echo "<br />";
echo $x;
echo "<br />";
echo $x---$x--;
echo "<br />";
echo $x;

Output
5
11
7
1
5
 

</xmp>
 </code>
</div>
</div>
</div> 
  



 <div class="mb-12">
 <div class="question"> 
 <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What will be the values of $a and $b after the code below is executed?</h2>
 </div>
  
 <div class="example">
 <div class="code">
 <code>
  <xmp>
$a = '1';
$b = &$a;
$b = "2$b";

Output
21
 

</xmp>
 </code>
</div>
</div>
</div> 
  

 <div class="mb-12">
 <div class="question"> 
 <h2 class="text-3xl font-bold text-primary mt-5 mb-4">After the code below is executed, what will be the value of $text and what will strlen($text) return?</h2>
 </div>
  
 <div class="example">
 <div class="code">
 <code>
  <xmp>
$text = 'John ';
$text[10] = 'Doe';

Output
“John      D”
 

</xmp>
 </code>
</div>
</div>
</div> 
  

 <div class="mb-12">
 <div class="question"> 
 <h2 class="text-3xl font-bold text-primary mt-5 mb-4">PHP_INT_MAX is a PHP?</h2>
 </div>
  
 <div class="example">
 <div class="code">
 <code>
  <xmp>
var_dump(PHP_INT_MAX)

Output
 int(9223372036854775807)
 

</xmp>
 </code>
</div>
</div>
</div> 
  


 <div class="mb-12">
 <div class="question"> 
 <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What does the follow code echo?</h2>
 </div>
  
 <div class="example">
 <div class="code">
 <code>
  <xmp>
$a = "PHP";
$a = $a + 1;
echo $a;

Output
Fatal error: Uncaught TypeError string
 

</xmp>
 </code>
</div>
</div>
</div> 
  

 <div class="mb-12">
 <div class="question"> 
 <h2 class="text-3xl font-bold text-primary mt-5 mb-4">HTML Boilerplate Shortcut (Emmet)?</h2>
 </div>
  
 <div class="example">
 <div class="code">
 <code>
  <xmp>
Type: !

Then Press: Tab
//html head


  <title>Document</title>

 

</xmp>
 </code>
</div>
</div>
</div> 
  







 <!-- HTML fragment: paste inside your existing Tailwind page. -->

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">1. Find Prime Numbers from an Array</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">A prime number is a number greater than 1 that is divisible only by 1 and itself.</p>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>$array = [2, 3, 4, 5, 7, 8, 9, 11, 15];

$primes = [];

foreach ($array as $num) {
    if ($num &lt; 2) {
        continue;
    }

    $isPrime = true;

    for ($i = 2; $i &lt;= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }
    }

    if ($isPrime) {
        $primes[] = $num;
    }
}

print_r($primes);</code></pre>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">Output:</h3>

<p class="mb-4 text-lg leading-8 text-gray-700">2, 3, 5, 7, 11</p>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">2. Find Duplicate Numbers from an Array</h2></div>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>$array = [1, 2, 3, 2, 4, 5, 3, 6, 1];

$duplicates = [];

foreach (array_count_values($array) as $value =&gt; $count) {
    if ($count &gt; 1) {
        $duplicates[] = $value;
    }
}

print_r($duplicates);</code></pre>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">Output:</h3>

<p class="mb-4 text-lg leading-8 text-gray-700">1, 2, 3</p>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">Another common approach:</h3>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>$array = [1, 2, 3, 2, 4, 5, 3, 6, 1];

$duplicates = array_unique(
    array_diff_assoc($array, array_unique($array))
);

print_r($duplicates);</code></pre>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">3. Make Array Without Duplicate Numbers and Letters</h2></div>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">If the requirement is to remove duplicate values from an array containing both numbers and letters:</h3>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>$array = [1, 2, 2, &#x27;a&#x27;, &#x27;b&#x27;, &#x27;a&#x27;, 3, 4, &#x27;b&#x27;];

$result = array_unique($array);

print_r($result);</code></pre>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">Output:</h3>

<p class="mb-4 text-lg leading-8 text-gray-700">1</p>

<p class="mb-4 text-lg leading-8 text-gray-700">2</p>

<p class="mb-4 text-lg leading-8 text-gray-700">a</p>

<p class="mb-4 text-lg leading-8 text-gray-700">b</p>

<p class="mb-4 text-lg leading-8 text-gray-700">3</p>

<p class="mb-4 text-lg leading-8 text-gray-700">4</p>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">If you want case-insensitive duplicate removal:</h3>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>$array = [&#x27;Apple&#x27;, &#x27;apple&#x27;, &#x27;Banana&#x27;, &#x27;banana&#x27;, &#x27;Orange&#x27;];

$result = [];
$exists = [];

foreach ($array as $value) {
    $key = strtolower((string)$value);

    if (!isset($exists[$key])) {
        $exists[$key] = true;
        $result[] = $value;
    }
}

print_r($result);</code></pre>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">4. SQL Injection and XSS</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">SQL Injection</p>

<p class="mb-4 text-lg leading-8 text-gray-700">SQL Injection occurs when an attacker inserts malicious SQL into user input.</p>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">❌ Unsafe</h3>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>$email = $_POST[&#x27;email&#x27;];

$sql = &quot;SELECT * FROM users WHERE email = &#x27;$email&#x27;&quot;;</code></pre>

<p class="mb-4 text-lg leading-8 text-gray-700">An attacker could manipulate the SQL query.</p>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">✅ Safe — Prepared Statement</h3>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>$stmt = $pdo-&gt;prepare(
    &quot;SELECT * FROM users WHERE email = :email&quot;
);

$stmt-&gt;execute([
    &#x27;email&#x27; =&gt; $_POST[&#x27;email&#x27;]
]);</code></pre>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">In Laravel, use Eloquent/query builder rather than concatenating SQL:</h3>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>$user = User::where(&#x27;email&#x27;, $email)-&gt;first();</code></pre>

<p class="mb-4 text-lg leading-8 text-gray-700">XSS — Cross-Site Scripting</p>

<p class="mb-4 text-lg leading-8 text-gray-700">XSS occurs when an attacker injects JavaScript into a webpage.</p>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">❌ Unsafe</h3>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>echo $_GET[&#x27;name&#x27;];</code></pre>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">✅ Safe</h3>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>echo htmlspecialchars(
    $_GET[&#x27;name&#x27;],
    ENT_QUOTES,
    &#x27;UTF-8&#x27;
);</code></pre>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">In Laravel Blade:</h3>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>Name</code></pre>

<p class="mb-4 text-lg leading-8 text-gray-700">Laravel automatically escapes normal Blade output.</p>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">Interview answer:</h3>

<p class="mb-4 text-lg leading-8 text-gray-700">SQL Injection attacks the database by manipulating SQL queries, while XSS attacks users by injecting malicious JavaScript/HTML into web pages. Prepared statements prevent SQL injection, and output escaping/sanitization helps prevent XSS.</p>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">5. Abstract Class vs Interface vs Trait</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">Abstract Class</p>

<p class="mb-4 text-lg leading-8 text-gray-700">An abstract class can contain both implemented and abstract methods.</p>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>abstract class Animal
{
    abstract public function sound();

    public function eat()
    {
        echo &quot;Eating&quot;;
    }
}

class Dog extends Animal
{
    public function sound()
    {
        echo &quot;Bark&quot;;
    }
}</code></pre>

<p class="mb-4 text-lg leading-8 text-gray-700">Interface</p>

<p class="mb-4 text-lg leading-8 text-gray-700">An interface defines a contract that implementing classes must follow.</p>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>interface Payment
{
    public function pay(float $amount);
}

class StripePayment implements Payment
{
    public function pay(float $amount)
    {
        echo &quot;Paid: $amount&quot;;
    }
}</code></pre>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">A class can implement multiple interfaces:</h3>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>class PaymentService implements Payment, Loggable
{
}</code></pre>

<p class="mb-4 text-lg leading-8 text-gray-700">Trait</p>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">A trait is used for code reuse between classes.</h3>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>trait Logger
{
    public function log($message)
    {
        echo $message;
    }
}

class UserService
{
    use Logger;
}</code></pre>

<p class="mb-4 text-lg leading-8 text-gray-700">Difference</p>

<div class="my-5 overflow-x-auto"><table class="w-full border-collapse text-left text-gray-700">

<tr><th class="border border-gray-200 p-3">Abstract Class</th><th class="border border-gray-200 p-3">Interface</th><th class="border border-gray-200 p-3">Trait</th></tr>

<tr><td class="border border-gray-200 p-3">extends</td><td class="border border-gray-200 p-3">implements</td><td class="border border-gray-200 p-3">use</td></tr>

<tr><td class="border border-gray-200 p-3">Can contain implementation</td><td class="border border-gray-200 p-3">Defines contract</td><td class="border border-gray-200 p-3">Code reuse</td></tr>

<tr><td class="border border-gray-200 p-3">Only one parent class</td><td class="border border-gray-200 p-3">Multiple interfaces possible</td><td class="border border-gray-200 p-3">Multiple traits possible</td></tr>

<tr><td class="border border-gray-200 p-3">Can have properties</td><td class="border border-gray-200 p-3">Usually constants/method contracts</td><td class="border border-gray-200 p-3">Can have properties/methods</td></tr>

</table></div>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">6. Dependency Injection</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">Dependency Injection means providing an object&#x27;s dependencies from outside instead of creating them inside the class.</p>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">❌ Without DI</h3>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>class UserController
{
    public function index()
    {
        $service = new UserService();
        return $service-&gt;getUsers();
    }
}</code></pre>

<p class="mb-4 text-lg leading-8 text-gray-700">The controller is tightly coupled to UserService.</p>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">✅ With DI</h3>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>class UserController
{
    private UserService $service;

    public function __construct(UserService $service)
    {
        $this-&gt;service = $service;
    }

    public function index()
    {
        return $this-&gt;service-&gt;getUsers();
    }
}</code></pre>

<p class="mb-4 text-lg leading-8 text-gray-700">Laravel&#x27;s service container automatically resolves many dependencies.</p>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">Interview answer:</h3>

<p class="mb-4 text-lg leading-8 text-gray-700">Dependency Injection is a design pattern where dependencies are supplied to a class rather than the class creating them itself. It improves loose coupling, testing and maintainability.</p>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">7. Autowiring and Autoconfiguration</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">These concepts are especially common in Symfony.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">Autowiring</p>

<p class="mb-4 text-lg leading-8 text-gray-700">Symfony automatically determines which dependencies need to be injected based on type hints.</p>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>class UserController
{
    public function __construct(
        private UserService $userService
    ) {}
}</code></pre>

<p class="mb-4 text-lg leading-8 text-gray-700">You don&#x27;t normally need to manually create UserService.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">Autoconfiguration</p>

<p class="mb-4 text-lg leading-8 text-gray-700">Symfony automatically configures services based on their interfaces/base classes.</p>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">For example:</h3>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>class UserEventSubscriber implements EventSubscriberInterface
{
}</code></pre>

<p class="mb-4 text-lg leading-8 text-gray-700">Symfony can automatically recognize and configure the service according to its interface.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">Simple difference</p>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">Autowiring:</h3>

<p class="mb-4 text-lg leading-8 text-gray-700">Automatically resolves dependencies.</p>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">Autoconfiguration:</h3>

<p class="mb-4 text-lg leading-8 text-gray-700">Automatically applies service configuration/tags based on the class/interface.</p>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">8. Reflection Class</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">PHP Reflection API allows us to inspect classes, methods, properties, parameters, etc. at runtime.</p>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">Example:</h3>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>class User
{
    public function login($email)
    {
        return true;
    }
}

$reflection = new ReflectionClass(User::class);

echo $reflection-&gt;getName();

print_r($reflection-&gt;getMethods());</code></pre>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">Getting method parameters:</h3>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>$method = new ReflectionMethod(User::class, &#x27;login&#x27;);

foreach ($method-&gt;getParameters() as $parameter) {
    echo $parameter-&gt;getName();
}</code></pre>

<p class="mb-4 text-lg leading-8 text-gray-700">Where is Reflection useful?</p>

<ul class="mb-4 list-disc space-y-2 pl-6 text-lg text-gray-700">

<li>Dependency Injection containers</li>

<li>Frameworks</li>

<li>Annotations/attributes</li>

<li>Inspecting classes</li>

<li>Automatic object creation</li>

</ul>

<p class="mb-4 text-lg leading-8 text-gray-700">Laravel and Symfony internally use reflection heavily for dependency resolution.</p>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">9. Routing</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">Routing maps an HTTP request URL and method to a controller/action.</p>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">Laravel</h3>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>Route::get(&#x27;/users&#x27;, [UserController::class, &#x27;index&#x27;]);</code></pre>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">POST:</h3>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>Route::post(&#x27;/users&#x27;, [UserController::class, &#x27;store&#x27;]);</code></pre>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">Route parameter:</h3>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>Route::get(&#x27;/users/{id}&#x27;, [UserController::class, &#x27;show&#x27;]);</code></pre>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">Controller:</h3>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>public function show($id)
{
    return User::findOrFail($id);
}</code></pre>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">RESTful routing</h3>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>GET     /users          -&gt; list users
GET     /users/{id}     -&gt; show user
POST    /users          -&gt; create user
PUT     /users/{id}     -&gt; update user
DELETE  /users/{id}     -&gt; delete user</code></pre>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">10. Static vs Self in PHP</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">This is an important PHP interview question.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">self</p>

<p class="mb-4 text-lg leading-8 text-gray-700">self refers to the class where the method/property is defined.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">static</p>

<p class="mb-4 text-lg leading-8 text-gray-700">static supports late static binding and refers to the class that was actually called.</p>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">Example:</h3>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>class ParentClass
{
    public static function selfTest()
    {
        echo self::class;
    }

    public static function staticTest()
    {
        echo static::class;
    }
}

class ChildClass extends ParentClass
{
}

ChildClass::selfTest();
ChildClass::staticTest();</code></pre>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">Output conceptually:</h3>

<p class="mb-4 text-lg leading-8 text-gray-700">ParentClass</p>

<p class="mb-4 text-lg leading-8 text-gray-700">ChildClass</p>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">Interview answer:</h3>

<p class="mb-4 text-lg leading-8 text-gray-700">self uses the class where the code is defined, whereas static uses late static binding and refers to the called class.</p>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">11. Program Showing All 4 OOP Concepts</h2></div>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">The four major OOP pillars are:</h3>

<ol class="mb-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">

<li>Encapsulation</li>

<li>Inheritance</li>

<li>Polymorphism</li>

<li>Abstraction</li>

</ol>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">Example:</h3>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>abstract class Employee
{
    // Encapsulation
    private string $name;

    public function __construct(string $name)
    {
        $this-&gt;name = $name;
    }

    public function getName(): string
    {
        return $this-&gt;name;
    }

    // Abstraction
    abstract public function calculateSalary(): float;
}

// Inheritance
class Developer extends Employee
{
    public function calculateSalary(): float
    {
        return 80000;
    }
}

// Inheritance
class Manager extends Employee
{
    public function calculateSalary(): float
    {
        return 120000;
    }
}

// Polymorphism
$employees = [
    new Developer(&quot;John&quot;),
    new Manager(&quot;David&quot;)
];

foreach ($employees as $employee) {
    echo $employee-&gt;getName() . &quot; : &quot;;
    echo $employee-&gt;calculateSalary() . PHP_EOL;
}</code></pre>

<p class="mb-4 text-lg leading-8 text-gray-700">Where are the four pillars?</p>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">Encapsulation</h3>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>private string $name;</code></pre>

<p class="mb-4 text-lg leading-8 text-gray-700">Data is protected inside the class.</p>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">Abstraction</h3>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>abstract class Employee</code></pre>

<p class="mb-4 text-lg leading-8 text-gray-700">abstract public function calculateSalary();</p>

<p class="mb-4 text-lg leading-8 text-gray-700">Only the required behavior is defined.</p>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">Inheritance</h3>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>class Developer extends Employee</code></pre>

<p class="mb-4 text-lg leading-8 text-gray-700">Developer inherits from Employee.</p>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">Polymorphism</h3>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>$employee-&gt;calculateSalary();</code></pre>

<p class="mb-4 text-lg leading-8 text-gray-700">The same method behaves differently for Developer and Manager.</p>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>&lt;?php

// Abstraction
abstract class Payment
{
    abstract public function pay(float $amount);
}


// Encapsulation
class BankAccount
{
    private float $balance = 0;

    public function deposit(float $amount): void
    {
        if ($amount &gt; 0) {
            $this-&gt;balance += $amount;
        }
    }

    public function getBalance(): float
    {
        return $this-&gt;balance;
    }
}


// Inheritance
class CreditCardPayment extends Payment
{
    public function pay(float $amount)
    {
        echo &quot;Paid $amount using Credit Card\n&quot;;
    }
}


// Inheritance + Polymorphism
class PayPalPayment extends Payment
{
    public function pay(float $amount)
    {
        echo &quot;Paid $amount using PayPal\n&quot;;
    }
}


// Polymorphism
function makePayment(Payment $payment, float $amount)
{
    $payment-&gt;pay($amount);
}


$creditCard = new CreditCardPayment();
$paypal = new PayPalPayment();

makePayment($creditCard, 1000);
makePayment($paypal, 2000);</code></pre>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">12. Sorting</h2></div>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">PHP provides several built-in sorting functions.</h3>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>sort()</code></pre>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">Ascending values, re-indexes keys.</h3>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>$array = [5, 2, 8, 1];

sort($array);

print_r($array);</code></pre>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">Output:</h3>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">1, 2, 5, 8</h3>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>rsort()</code></pre>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">Descending:</h3>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>rsort($array);
asort()</code></pre>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">Sort values ascending while maintaining keys.</h3>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>$array = [
    &#x27;a&#x27; =&gt; 30,
    &#x27;b&#x27; =&gt; 10,
    &#x27;c&#x27; =&gt; 20
];

asort($array);
ksort()</code></pre>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">Sort by keys:</h3>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>ksort($array);
usort()</code></pre>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">Custom sorting:</h3>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>usort($array, function ($a, $b) {
    return $a &lt;=&gt; $b;
});</code></pre>

<p class="mb-4 text-lg leading-8 text-gray-700">Common sorting algorithms</p>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">You should also know:</h3>

<ul class="mb-4 list-disc space-y-2 pl-6 text-lg text-gray-700">

<li>Bubble Sort</li>

<li>Selection Sort</li>

<li>Insertion Sort</li>

<li>Merge Sort</li>

<li>Quick Sort</li>

<li>Heap Sort</li>

</ul>

<p class="mb-4 text-lg leading-8 text-gray-700">For interviews, be prepared to explain time complexity.</p>

<div class="my-5 overflow-x-auto"><table class="w-full border-collapse text-left text-gray-700">

<tr><th class="border border-gray-200 p-3">Algorithm</th><th class="border border-gray-200 p-3">Average</th></tr>

<tr><td class="border border-gray-200 p-3">Bubble Sort</td><td class="border border-gray-200 p-3">O(n²)</td></tr>

<tr><td class="border border-gray-200 p-3">Selection Sort</td><td class="border border-gray-200 p-3">O(n²)</td></tr>

<tr><td class="border border-gray-200 p-3">Insertion Sort</td><td class="border border-gray-200 p-3">O(n²)</td></tr>

<tr><td class="border border-gray-200 p-3">Merge Sort</td><td class="border border-gray-200 p-3">O(n log n)</td></tr>

<tr><td class="border border-gray-200 p-3">Quick Sort</td><td class="border border-gray-200 p-3">O(n log n)</td></tr>

<tr><td class="border border-gray-200 p-3">Heap Sort</td><td class="border border-gray-200 p-3">O(n log n)</td></tr>

</table></div>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">13. array_merge() vs array_combine() vs +</h2></div>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">This is a very common PHP question.</h3>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>array_merge()</code></pre>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">Combines arrays and re-indexes numeric keys.</h3>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>$a = [1, 2];
$b = [3, 4];

$result = array_merge($a, $b);

print_r($result);</code></pre>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">Output:</h3>

<p class="mb-4 text-lg leading-8 text-gray-700">[1, 2, 3, 4]</p>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">With string keys, later values overwrite earlier values:</h3>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>$a = [&#x27;name&#x27; =&gt; &#x27;John&#x27;];
$b = [&#x27;name&#x27; =&gt; &#x27;David&#x27;];

print_r(array_merge($a, $b));</code></pre>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">Output:</h3>

<p class="mb-4 text-lg leading-8 text-gray-700">[</p>

<p class="mb-4 text-lg leading-8 text-gray-700">&#x27;name&#x27; =&gt; &#x27;David&#x27;</p>

<p class="mb-4 text-lg leading-8 text-gray-700">]</p>

<p class="mb-4 text-lg leading-8 text-gray-700">array_combine()</p>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">Creates an array using one array as keys and another as values.</h3>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>$keys = [&#x27;name&#x27;, &#x27;age&#x27;, &#x27;city&#x27;];
$values = [&#x27;John&#x27;, 30, &#x27;Delhi&#x27;];

$result = array_combine($keys, $values);

print_r($result);</code></pre>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">Output:</h3>

<p class="mb-4 text-lg leading-8 text-gray-700">[</p>

<p class="mb-4 text-lg leading-8 text-gray-700">&#x27;name&#x27; =&gt; &#x27;John&#x27;,</p>

<p class="mb-4 text-lg leading-8 text-gray-700">&#x27;age&#x27; =&gt; 30,</p>

<p class="mb-4 text-lg leading-8 text-gray-700">&#x27;city&#x27; =&gt; &#x27;Delhi&#x27;</p>

<p class="mb-4 text-lg leading-8 text-gray-700">]</p>

<p class="mb-4 text-lg leading-8 text-gray-700">The number of keys and values must match.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">+ Array Union Operator</p>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">The + operator preserves keys from the left-hand array.</h3>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>$a = [
    &#x27;name&#x27; =&gt; &#x27;John&#x27;,
    &#x27;age&#x27; =&gt; 30
];

$b = [
    &#x27;name&#x27; =&gt; &#x27;David&#x27;,
    &#x27;city&#x27; =&gt; &#x27;Delhi&#x27;
];

$result = $a + $b;

print_r($result);</code></pre>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">Output:</h3>

<p class="mb-4 text-lg leading-8 text-gray-700">[</p>

<p class="mb-4 text-lg leading-8 text-gray-700">&#x27;name&#x27; =&gt; &#x27;John&#x27;,</p>

<p class="mb-4 text-lg leading-8 text-gray-700">&#x27;age&#x27; =&gt; 30,</p>

<p class="mb-4 text-lg leading-8 text-gray-700">&#x27;city&#x27; =&gt; &#x27;Delhi&#x27;</p>

<p class="mb-4 text-lg leading-8 text-gray-700">]</p>

<p class="mb-4 text-lg leading-8 text-gray-700">name =&gt; David is ignored because the key name already exists in $a.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">Main difference</p>

<div class="my-5 overflow-x-auto"><table class="w-full border-collapse text-left text-gray-700">

<tr><th class="border border-gray-200 p-3">Function/Operator</th><th class="border border-gray-200 p-3">Purpose</th><th class="border border-gray-200 p-3">Duplicate key behavior</th></tr>

<tr><td class="border border-gray-200 p-3">array_merge()</td><td class="border border-gray-200 p-3">Merge arrays</td><td class="border border-gray-200 p-3">Later value generally wins</td></tr>

<tr><td class="border border-gray-200 p-3">array_combine()</td><td class="border border-gray-200 p-3">Keys + values → new associative array</td><td class="border border-gray-200 p-3">Keys must match value count</td></tr>

<tr><td class="border border-gray-200 p-3">+</td><td class="border border-gray-200 p-3">Array union</td><td class="border border-gray-200 p-3">Left array wins</td></tr>

</table></div>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">Easy interview example</h3>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>$a = [&#x27;x&#x27; =&gt; 10];
$b = [&#x27;x&#x27; =&gt; 20, &#x27;y&#x27; =&gt; 30];

array_merge($a, $b);
// x = 20, y = 30

$a + $b;
// x = 10, y = 30</code></pre>

<h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">One-line interview answer:</h3>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>array_merge() combines arrays, array_combine() creates key-value pairs from two arrays, and + performs array union where the left-hand array has priority for duplicate keys.</code></pre>

</div>













 

</div>


</section>
  



 

  


 
 


 </div>
 
 
<br>
<div class="clear nextprev">
<a class="left btn" href="{{url('interviews/mysql-interview-question-answer')}}">&#10094; Previous</a>
<a class="right btn" href="{{url('interviews/laravel-interview-question-answer')}}">Next &#10095;</a>
</div>
</div>
 
</div>
   
  @endsection