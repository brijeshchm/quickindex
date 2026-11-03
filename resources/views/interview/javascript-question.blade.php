@extends('interview.layouts.app')
@section('title')
Javascript Interview Questions & Answers
@endsection 
 
@section('description'),  
Javascript interview questions and answers covering HTTP methods, status codes, authentication, JSON, CRUD, and API best practices.
@endsection


@section('content')	 
 

<div class='main light-grey' id='belowtopnav' style='margin-left:220px;'>
  <div class='row white'>
    <div class='col l11 m12' id='main'>
       
<h1>Javascript<span class="color_h1"> Interview Question & Answer</span></h1>
<div class="clear nextprev">
<a class="left btn" href="{{url('interviews/reactjs-interview-question-answer')}}">&#10094; Previous</a>
<a class="right btn" href="{{url('interviews/php-interview-question-answer')}}">Next &#10095;</a>
</div>
<hr>
 <div class="light">
 
   
 <section id="services-section" class="py-12 bg-gray-100">
  
 <div class="container mx-auto px-4">
  
 
 
  <!-- HTML fragment: paste inside your existing Tailwind page. -->
<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q1. What is JavaScript?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">JavaScript is a scripting and programming language used to make web applications interactive and dynamic.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">Main features:</p>

<ul class="mb-4 list-disc space-y-2 pl-6 text-lg text-gray-700">

<li>Client-side and server-side programming.</li>

<li>DOM manipulation.</li>

<li>Event handling.</li>

<li>Form validation.</li>

<li>AJAX API communication.</li>

<li>Asynchronous programming.</li>

<li>Dynamic content updates.</li>

</ul>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q2. What are the data types in JavaScript?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">JavaScript has 8 main data types.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">Primitive data types:</p>

<ol class="mb-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">

<li>String – Text values.</li>

<li>Number – Integer and decimal numbers.</li>

<li>Boolean – True or false.</li>

<li>Undefined – Variable declared but not assigned.</li>

<li>Null – Intentional absence of a value.</li>

<li>BigInt – Large integer values.</li>

<li>Symbol – Unique identifiers.</li>

</ol>

<p class="mb-4 text-lg leading-8 text-gray-700">Non-primitive data type:\ 8\. Object – Stores collections of key-value pairs. Arrays and functions are also objects.</p>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q3. Difference between var, let, and const?</h2></div>

<div class="my-5 overflow-x-auto"><table class="w-full border-collapse text-left text-gray-700"><thead class="bg-gray-100"><tr>

<th class="border border-gray-200 px-4 py-3 font-semibold">Feature</th>

<th class="border border-gray-200 px-4 py-3 font-semibold">var</th>

<th class="border border-gray-200 px-4 py-3 font-semibold">let</th>

<th class="border border-gray-200 px-4 py-3 font-semibold">const</th>

</tr></thead><tbody>

<tr><td class="border border-gray-200 px-4 py-3">Scope</td><td class="border border-gray-200 px-4 py-3">Function</td><td class="border border-gray-200 px-4 py-3">Block</td><td class="border border-gray-200 px-4 py-3">Block</td></tr>

<tr><td class="border border-gray-200 px-4 py-3">Reassignment</td><td class="border border-gray-200 px-4 py-3">Yes</td><td class="border border-gray-200 px-4 py-3">Yes</td><td class="border border-gray-200 px-4 py-3">No</td></tr>

<tr><td class="border border-gray-200 px-4 py-3">Redeclaration</td><td class="border border-gray-200 px-4 py-3">Yes</td><td class="border border-gray-200 px-4 py-3">No</td><td class="border border-gray-200 px-4 py-3">No</td></tr>

<tr><td class="border border-gray-200 px-4 py-3">Hoisting</td><td class="border border-gray-200 px-4 py-3">Yes</td><td class="border border-gray-200 px-4 py-3">Yes (TDZ)</td><td class="border border-gray-200 px-4 py-3">Yes (TDZ)</td></tr>

</tbody></table></div>

<p class="mb-4 text-lg leading-8 text-gray-700">Example:</p>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>var name = &quot;Brijesh&quot;;
let age = 30;
const city = &quot;Delhi&quot;;

name = &quot;Rahul&quot;;
age = 35;

// city = &quot;Mumbai&quot;; // Error</code></pre>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q4. What is the difference between == and ===?</h2></div>

<ul class="mb-4 list-disc space-y-2 pl-6 text-lg text-gray-700">

<li><code class="rounded bg-gray-100 px-1.5 py-0.5 text-sm text-blue-800">==</code> compares values after type conversion.</li>

<li><code class="rounded bg-gray-100 px-1.5 py-0.5 text-sm text-blue-800">===</code> compares values and data types without type conversion.</li>

</ul>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>console.log(10 == &quot;10&quot;);  // true
console.log(10 === &quot;10&quot;); // false</code></pre>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q5. What is the difference between null and undefined?</h2></div>

<ul class="mb-4 list-disc space-y-2 pl-6 text-lg text-gray-700">

<li>Undefined: A variable is declared but no value is assigned.</li>

<li>Null: An intentional empty value.</li>

</ul>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>let a;
let b = null;

console.log(a); // undefined
console.log(b); // null</code></pre>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q6. What is NaN?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">NaN means Not-a-Number. It represents an invalid numeric result.</p>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>let result = &quot;hello&quot; / 2;

console.log(result); // NaN
console.log(Number.isNaN(result)); // true</code></pre>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q7. What is type coercion?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">Type coercion means JavaScript automatically converts one data type into another.</p>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>console.log(&quot;5&quot; + 2); // &quot;52&quot;
console.log(&quot;5&quot; - 2); // 3
console.log(true + 1); // 2</code></pre>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q8. What is the difference between primitive and reference data types?</h2></div>

<ul class="mb-4 list-disc space-y-2 pl-6 text-lg text-gray-700">

<li>Primitive types store individual values.</li>

<li>Reference types work with references to objects in memory.</li>

</ul>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>let a = 10;
let b = a;
b = 20;

console.log(a); // 10

let obj1 = { name: &quot;Brijesh&quot; };
let obj2 = obj1;

obj2.name = &quot;Rahul&quot;;

console.log(obj1.name); // Rahul</code></pre>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">2. Functions and Scope</h2></div>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q9. What is a function in JavaScript?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">A function is a reusable block of code designed to perform a particular task.</p>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>function add(a, b) {
    return a + b;
}

console.log(add(10, 20)); // 30</code></pre>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q10. What is the difference between function declaration and function expression?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">Function declaration:</p>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>function greet() {
    console.log(&quot;Hello&quot;);
}</code></pre>

<p class="mb-4 text-lg leading-8 text-gray-700">Function expression:</p>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>const greet = function() {
    console.log(&quot;Hello&quot;);
};</code></pre>

<p class="mb-4 text-lg leading-8 text-gray-700">Function declarations can generally be called before their definition because they are hoisted. Function expressions assigned to <code class="rounded bg-gray-100 px-1.5 py-0.5 text-sm text-blue-800">const</code> or <code class="rounded bg-gray-100 px-1.5 py-0.5 text-sm text-blue-800">let</code> cannot be used before initialization.</p>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q11. What is an Arrow Function?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">Arrow functions provide a shorter syntax for writing functions.</p>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>const add = (a, b) =&gt; {
    return a + b;
};

console.log(add(10, 20));</code></pre>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q12. What is the difference between normal and arrow functions?</h2></div>

<div class="my-5 overflow-x-auto"><table class="w-full border-collapse text-left text-gray-700"><thead class="bg-gray-100"><tr>

<th class="border border-gray-200 px-4 py-3 font-semibold">Normal function</th>

<th class="border border-gray-200 px-4 py-3 font-semibold">Arrow function</th>

</tr></thead><tbody>

<tr><td class="border border-gray-200 px-4 py-3">Has its own <code class="rounded bg-gray-100 px-1.5 py-0.5 text-sm text-blue-800">this</code></td><td class="border border-gray-200 px-4 py-3">Inherits <code class="rounded bg-gray-100 px-1.5 py-0.5 text-sm text-blue-800">this</code></td></tr>

<tr><td class="border border-gray-200 px-4 py-3">Can be used as constructor</td><td class="border border-gray-200 px-4 py-3">Cannot be used as constructor</td></tr>

<tr><td class="border border-gray-200 px-4 py-3">Has <code class="rounded bg-gray-100 px-1.5 py-0.5 text-sm text-blue-800">arguments</code></td><td class="border border-gray-200 px-4 py-3">No own <code class="rounded bg-gray-100 px-1.5 py-0.5 text-sm text-blue-800">arguments</code></td></tr>

<tr><td class="border border-gray-200 px-4 py-3">Uses function keyword</td><td class="border border-gray-200 px-4 py-3">Uses <code class="rounded bg-gray-100 px-1.5 py-0.5 text-sm text-blue-800">=&gt;</code></td></tr>

</tbody></table></div>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q13. What is scope in JavaScript?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">Scope defines where a variable can be accessed.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">Types:</p>

<ol class="mb-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">

<li>Global Scope.</li>

<li>Function Scope.</li>

<li>Block Scope.</li>

<li>Module Scope.</li>

</ol>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>let global = &quot;Hello&quot;;

function test() {
    let local = &quot;World&quot;;
    console.log(global);
    console.log(local);
}</code></pre>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q14. What is hoisting?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">Hoisting is JavaScript&#x27;s behavior of processing declarations before executing code.</p>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>console.log(a); // undefined
var a = 10;</code></pre>

<p class="mb-4 text-lg leading-8 text-gray-700">With <code class="rounded bg-gray-100 px-1.5 py-0.5 text-sm text-blue-800">let</code> and <code class="rounded bg-gray-100 px-1.5 py-0.5 text-sm text-blue-800">const</code>, accessing variables before initialization causes a ReferenceError because of the Temporal Dead Zone (TDZ).</p>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q15. What is a closure?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">A closure is created when an inner function remembers and accesses variables from its outer function, even after the outer function has finished execution.</p>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>function counter() {
    let count = 0;

    return function() {
        count++;
        return count;
    };
}

const increment = counter();

console.log(increment()); // 1
console.log(increment()); // 2
console.log(increment()); // 3</code></pre>

<p class="mb-4 text-lg leading-8 text-gray-700">Use cases: Data privacy, counters, callbacks, and event handlers.</p>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">3. Arrays and Objects</h2></div>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q16. What is an array?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">An array is used to store multiple values in a single variable.</p>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>let fruits = [&quot;Apple&quot;, &quot;Banana&quot;, &quot;Mango&quot;];

console.log(fruits[0]); // Apple</code></pre>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q17. Explain important array methods.</h2></div>

<div class="my-5 overflow-x-auto"><table class="w-full border-collapse text-left text-gray-700"><thead class="bg-gray-100"><tr>

<th class="border border-gray-200 px-4 py-3 font-semibold">Method</th>

<th class="border border-gray-200 px-4 py-3 font-semibold">Purpose</th>

</tr></thead><tbody>

<tr><td class="border border-gray-200 px-4 py-3">push()</td><td class="border border-gray-200 px-4 py-3">Adds element at end</td></tr>

<tr><td class="border border-gray-200 px-4 py-3">pop()</td><td class="border border-gray-200 px-4 py-3">Removes last element</td></tr>

<tr><td class="border border-gray-200 px-4 py-3">shift()</td><td class="border border-gray-200 px-4 py-3">Removes first element</td></tr>

<tr><td class="border border-gray-200 px-4 py-3">unshift()</td><td class="border border-gray-200 px-4 py-3">Adds element at beginning</td></tr>

<tr><td class="border border-gray-200 px-4 py-3">map()</td><td class="border border-gray-200 px-4 py-3">Creates a transformed array</td></tr>

<tr><td class="border border-gray-200 px-4 py-3">filter()</td><td class="border border-gray-200 px-4 py-3">Filters elements</td></tr>

<tr><td class="border border-gray-200 px-4 py-3">reduce()</td><td class="border border-gray-200 px-4 py-3">Reduces array to one value</td></tr>

<tr><td class="border border-gray-200 px-4 py-3">find()</td><td class="border border-gray-200 px-4 py-3">Finds first matching element</td></tr>

<tr><td class="border border-gray-200 px-4 py-3">includes()</td><td class="border border-gray-200 px-4 py-3">Checks whether value exists</td></tr>

<tr><td class="border border-gray-200 px-4 py-3">sort()</td><td class="border border-gray-200 px-4 py-3">Sorts array</td></tr>

<tr><td class="border border-gray-200 px-4 py-3">forEach()</td><td class="border border-gray-200 px-4 py-3">Iterates through elements</td></tr>

</tbody></table></div>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q18. Difference between map() and forEach()?</h2></div>

<ul class="mb-4 list-disc space-y-2 pl-6 text-lg text-gray-700">

<li><code class="rounded bg-gray-100 px-1.5 py-0.5 text-sm text-blue-800">map()</code> returns a new array.</li>

<li><code class="rounded bg-gray-100 px-1.5 py-0.5 text-sm text-blue-800">forEach()</code> executes a function for each element and returns undefined.</li>

</ul>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>let numbers = [1, 2, 3];

let result = numbers.map(n =&gt; n * 2);

console.log(result); // [2, 4, 6]

numbers.forEach(n =&gt; console.log(n));</code></pre>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q19. Difference between filter() and find()?</h2></div>

<ul class="mb-4 list-disc space-y-2 pl-6 text-lg text-gray-700">

<li><code class="rounded bg-gray-100 px-1.5 py-0.5 text-sm text-blue-800">filter()</code> returns all matching elements in an array.</li>

<li><code class="rounded bg-gray-100 px-1.5 py-0.5 text-sm text-blue-800">find()</code> returns the first matching element.</li>

</ul>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>let numbers = [10, 20, 30, 40];

console.log(numbers.filter(n =&gt; n &gt; 20));
// [30, 40]

console.log(numbers.find(n =&gt; n &gt; 20));
// 30</code></pre>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q20. What is reduce()?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">Reduce is used to convert an array into a single accumulated value.</p>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>let numbers = [10, 20, 30];

let total = numbers.reduce((sum, num) =&gt; {
    return sum + num;
}, 0);

console.log(total); // 60</code></pre>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q21. How do you remove duplicate values from an array?</h2></div>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>let numbers = [1, 2, 3, 2, 4, 1];

let unique = [...new Set(numbers)];

console.log(unique);
// [1, 2, 3, 4]</code></pre>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q22. How do you find duplicate values in an array?</h2></div>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>let numbers = [1, 2, 3, 2, 4, 1];

let duplicates = numbers.filter((value, index) =&gt; {
    return numbers.indexOf(value) !== index;
});

console.log([...new Set(duplicates)]);
// [2, 1]</code></pre>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q23. How do you sort an array?</h2></div>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>let numbers = [40, 10, 30, 20];

numbers.sort((a, b) =&gt; a - b);

console.log(numbers);
// [10, 20, 30, 40]</code></pre>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q24. How do you merge two arrays?</h2></div>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>let a = [1, 2];
let b = [3, 4];

let result = [...a, ...b];

console.log(result);
// [1, 2, 3, 4]</code></pre>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q25. What is destructuring?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">Destructuring extracts values from arrays or objects into variables.</p>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>let user = {
    name: &quot;Brijesh&quot;,
    age: 30
};

const { name, age } = user;

console.log(name);
console.log(age);</code></pre>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">4. DOM and Events</h2></div>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q26. What is DOM?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">DOM stands for Document Object Model. It represents an HTML document as a tree of objects.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">JavaScript uses DOM to:</p>

<ul class="mb-4 list-disc space-y-2 pl-6 text-lg text-gray-700">

<li>Change HTML content.</li>

<li>Change CSS styles.</li>

<li>Add or remove elements.</li>

<li>Handle events.</li>

<li>Validate forms.</li>

</ul>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q27. How do you select HTML elements?</h2></div>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>document.getElementById(&quot;name&quot;);

document.getElementsByClassName(&quot;box&quot;);

document.getElementsByTagName(&quot;p&quot;);

document.querySelector(&quot;.box&quot;);

document.querySelectorAll(&quot;.box&quot;);</code></pre>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q28. Difference between innerHTML and textContent?</h2></div>

<ul class="mb-4 list-disc space-y-2 pl-6 text-lg text-gray-700">

<li><code class="rounded bg-gray-100 px-1.5 py-0.5 text-sm text-blue-800">innerHTML</code> gets or sets HTML markup.</li>

<li><code class="rounded bg-gray-100 px-1.5 py-0.5 text-sm text-blue-800">textContent</code> gets or sets plain text.</li>

</ul>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>document.getElementById(&quot;demo&quot;).innerHTML =
    &quot;&lt;b&gt;Hello&lt;/b&gt;&quot;;

document.getElementById(&quot;demo&quot;).textContent =
    &quot;&lt;b&gt;Hello&lt;/b&gt;&quot;;</code></pre>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q29. What is event bubbling?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">Event bubbling means an event starts from the target element and propagates upward to its parent elements.</p>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q30. What is event capturing?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">Event capturing means an event travels from the outermost parent toward the target element.</p>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q31. What is event delegation?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">Event delegation means attaching one event listener to a parent element to handle events from multiple child elements.</p>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>document.getElementById(&quot;list&quot;)
    .addEventListener(&quot;click&quot;, function(event) {

        if (event.target.tagName === &quot;LI&quot;) {
            console.log(event.target.textContent);
        }
    });</code></pre>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q32. Difference between preventDefault() and stopPropagation()?</h2></div>

<ul class="mb-4 list-disc space-y-2 pl-6 text-lg text-gray-700">

<li><code class="rounded bg-gray-100 px-1.5 py-0.5 text-sm text-blue-800">preventDefault()</code> prevents the browser&#x27;s default action.</li>

<li><code class="rounded bg-gray-100 px-1.5 py-0.5 text-sm text-blue-800">stopPropagation()</code> prevents an event from propagating to parent or other event targets.</li>

</ul>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">5. Asynchronous JavaScript</h2></div>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q33. What is synchronous and asynchronous JavaScript?</h2></div>

<ul class="mb-4 list-disc space-y-2 pl-6 text-lg text-gray-700">

<li>Synchronous: Code executes one operation at a time in sequence.</li>

<li>Asynchronous: Certain operations can complete later without blocking the main execution flow.</li>

</ul>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q34. What is a callback function?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">A callback is a function passed as an argument to another function and executed later.</p>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>function greet(name, callback) {
    console.log(&quot;Hello &quot; + name);
    callback();
}

function message() {
    console.log(&quot;Welcome&quot;);
}

greet(&quot;Brijesh&quot;, message);</code></pre>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q35. What is callback hell?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">Callback hell occurs when multiple nested callbacks make code difficult to read and maintain.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">It can be avoided using Promises and async/await.</p>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q36. What is a Promise?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">A Promise represents the eventual success or failure of an asynchronous operation.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">Three states:</p>

<ol class="mb-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">

<li>Pending.</li>

<li>Fulfilled.</li>

<li>Rejected.</li>

</ol>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>let promise = new Promise((resolve, reject) =&gt; {
    let success = true;

    if (success) {
        resolve(&quot;Data loaded&quot;);
    } else {
        reject(&quot;Error occurred&quot;);
    }
});

promise
    .then(result =&gt; console.log(result))
    .catch(error =&gt; console.log(error));</code></pre>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q37. What is async/await?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">Async/await makes asynchronous code easier to write and understand.</p>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>async function getData() {
    try {
        let response = await fetch(
            &quot;https://jsonplaceholder.typicode.com/users&quot;
        );

        let data = await response.json();

        console.log(data);

    } catch (error) {
        console.log(error);
    }
}

getData();</code></pre>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q38. What is AJAX?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">AJAX stands for Asynchronous JavaScript and XML.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">It allows web applications to send and receive data from the server without reloading the entire page.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">In PHP applications, AJAX is commonly used for:</p>

<ul class="mb-4 list-disc space-y-2 pl-6 text-lg text-gray-700">

<li>CRUD operations.</li>

<li>Form submissions.</li>

<li>Search suggestions.</li>

<li>Data filtering.</li>

<li>Dynamic dropdowns.</li>

</ul>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q39. How do you call a PHP API using JavaScript?</h2></div>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>fetch(&quot;get_users.php&quot;)
    .then(response =&gt; response.json())
    .then(data =&gt; {
        console.log(data);
    })
    .catch(error =&gt; {
        console.log(error);
    });</code></pre>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q40. What is the Fetch API?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">Fetch API is a modern JavaScript interface used to make HTTP requests such as GET, POST, PUT, and DELETE.</p>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">6. Advanced JavaScript Questions</h2></div>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q41. What is the difference between localStorage, sessionStorage, and cookies?</h2></div>

<div class="my-5 overflow-x-auto"><table class="w-full border-collapse text-left text-gray-700"><thead class="bg-gray-100"><tr>

<th class="border border-gray-200 px-4 py-3 font-semibold">Feature</th>

<th class="border border-gray-200 px-4 py-3 font-semibold">localStorage</th>

<th class="border border-gray-200 px-4 py-3 font-semibold">sessionStorage</th>

<th class="border border-gray-200 px-4 py-3 font-semibold">Cookies</th>

</tr></thead><tbody>

<tr><td class="border border-gray-200 px-4 py-3">Storage</td><td class="border border-gray-200 px-4 py-3">Browser</td><td class="border border-gray-200 px-4 py-3">Browser tab</td><td class="border border-gray-200 px-4 py-3">Browser</td></tr>

<tr><td class="border border-gray-200 px-4 py-3">Expiration</td><td class="border border-gray-200 px-4 py-3">Until removed</td><td class="border border-gray-200 px-4 py-3">Tab session</td><td class="border border-gray-200 px-4 py-3">Configurable</td></tr>

<tr><td class="border border-gray-200 px-4 py-3">Capacity</td><td class="border border-gray-200 px-4 py-3">Usually \~5 MB</td><td class="border border-gray-200 px-4 py-3">Usually \~5 MB</td><td class="border border-gray-200 px-4 py-3">Usually \~4 KB</td></tr>

<tr><td class="border border-gray-200 px-4 py-3">Sent to server automatically</td><td class="border border-gray-200 px-4 py-3">No</td><td class="border border-gray-200 px-4 py-3">No</td><td class="border border-gray-200 px-4 py-3">Yes, when applicable</td></tr>

</tbody></table></div>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q42. What is the spread operator?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">Spread operator (<code class="rounded bg-gray-100 px-1.5 py-0.5 text-sm text-blue-800">...</code>) expands arrays or objects.</p>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>let a = [1, 2, 3];
let b = [...a, 4, 5];

console.log(b);</code></pre>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q43. What is the rest operator?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">Rest operator collects multiple arguments into a single array.</p>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>function sum(...numbers) {
    return numbers.reduce((a, b) =&gt; a + b, 0);
}

console.log(sum(10, 20, 30)); // 60</code></pre>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q44. What is the difference between shallow copy and deep copy?</h2></div>

<ul class="mb-4 list-disc space-y-2 pl-6 text-lg text-gray-700">

<li>Shallow copy copies the first-level properties but nested objects can still share references.</li>

<li>Deep copy creates independent copies of nested data.</li>

</ul>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>let original = {
    name: &quot;Brijesh&quot;,
    address: {
        city: &quot;Delhi&quot;
    }
};

// Shallow copy
let copy = { ...original };

// Deep copy for structured-cloneable data
let deepCopy = structuredClone(original);</code></pre>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q45. What is the this keyword?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">The <code class="rounded bg-gray-100 px-1.5 py-0.5 text-sm text-blue-800">this</code> keyword refers to the execution context of a function. Its value depends on how a function is called.</p>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>const user = {
    name: &quot;Brijesh&quot;,

    showName: function() {
        console.log(this.name);
    }
};

user.showName(); // Brijesh</code></pre>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q46. What is the difference between call(), apply(), and bind()?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">All three methods control the <code class="rounded bg-gray-100 px-1.5 py-0.5 text-sm text-blue-800">this</code> value of a function.</p>

<ul class="mb-4 list-disc space-y-2 pl-6 text-lg text-gray-700">

<li>call(): Calls function immediately with individual arguments.</li>

<li>apply(): Calls function immediately with arguments in an array.</li>

<li>bind(): Returns a new function with a fixed <code class="rounded bg-gray-100 px-1.5 py-0.5 text-sm text-blue-800">this</code> value.</li>

</ul>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>function greet(city) {
    console.log(this.name + &quot; &quot; + city);
}

let user = { name: &quot;Brijesh&quot; };

greet.call(user, &quot;Delhi&quot;);

greet.apply(user, [&quot;Delhi&quot;]);

let newFunction = greet.bind(user, &quot;Delhi&quot;);
newFunction();</code></pre>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q47. What is the Event Loop?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">The Event Loop manages asynchronous execution in JavaScript.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">It coordinates the call stack, task queues, and microtask queue so that asynchronous callbacks can execute when the call stack is available.</p>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q48. What is a prototype in JavaScript?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">A prototype is an object through which JavaScript objects can inherit properties and methods.</p>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>function Person(name) {
    this.name = name;
}

Person.prototype.greet = function() {
    console.log(&quot;Hello &quot; + this.name);
};

let p = new Person(&quot;Brijesh&quot;);

p.greet();</code></pre>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q49. What are JavaScript modules?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">Modules allow code to be divided into separate files and reused using import and export.</p>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>// math.js
export function add(a, b) {
    return a + b;
}

// app.js
import { add } from &#x27;./math.js&#x27;;

console.log(add(10, 20));</code></pre>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q50. What is debouncing?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">Debouncing delays function execution until the user stops triggering an event for a specified time.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">It is commonly used in search boxes to reduce unnecessary API calls.</p>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>function debounce(callback, delay) {
    let timer;

    return function(...args) {
        clearTimeout(timer);

        timer = setTimeout(() =&gt; {
            callback.apply(this, args);
        }, delay);
    };
}

const search = debounce(function(value) {
    console.log(&quot;Search:&quot;, value);
}, 500);</code></pre>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">7. JavaScript Practical Coding Interview Questions</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">These are especially important for experienced developers.</p>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q51. Reverse a string.</h2></div>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>let str = &quot;JavaScript&quot;;

let reverse = str.split(&quot;&quot;).reverse().join(&quot;&quot;);

console.log(reverse);
// tpircSavaJ</code></pre>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q52. Check whether a string is a palindrome.</h2></div>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>function isPalindrome(str) {
    let reverse = str.split(&quot;&quot;).reverse().join(&quot;&quot;);

    return str === reverse;
}

console.log(isPalindrome(&quot;madam&quot;)); // true</code></pre>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q53. Find the largest number in an array.</h2></div>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>let arr = [10, 50, 20, 90, 30];

let max = Math.max(...arr);

console.log(max); // 90</code></pre>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q54. Find the second-largest number.</h2></div>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>let arr = [10, 50, 20, 90, 30];

let unique = [...new Set(arr)];

unique.sort((a, b) =&gt; b - a);

console.log(unique[1]); // 50</code></pre>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q55. Find the factorial of a number.</h2></div>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>function factorial(n) {
    let result = 1;

    for (let i = 1; i &lt;= n; i++) {
        result *= i;
    }

    return result;
}

console.log(factorial(5)); // 120</code></pre>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q56. Print Fibonacci series.</h2></div>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>let a = 0;
let b = 1;

for (let i = 0; i &lt; 10; i++) {
    console.log(a);

    let temp = a + b;
    a = b;
    b = temp;
}</code></pre>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q57. Count the occurrence of each character.</h2></div>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>let str = &quot;javascript&quot;;

let result = {};

for (let char of str) {
    result[char] = (result[char] || 0) + 1;
}

console.log(result);</code></pre>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q58. Check whether a number is prime.</h2></div>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>function isPrime(num) {
    if (num &lt;= 1) return false;

    for (let i = 2; i &lt;= Math.sqrt(num); i++) {
        if (num % i === 0) {
            return false;
        }
    }

    return true;
}

console.log(isPrime(7)); // true</code></pre>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q59. Swap two numbers without using a third variable.</h2></div>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>let a = 10;
let b = 20;

[a, b] = [b, a];

console.log(a, b); // 20 10</code></pre>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q60. Find the missing number in an array from 1 to N.</h2></div>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>let arr = [1, 2, 3, 5, 6];

let n = 6;

let expected = n * (n + 1) / 2;

let actual = arr.reduce((sum, num) =&gt; sum + num, 0);

console.log(expected - actual); // 4</code></pre>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">8. JavaScript Interview Questions for PHP + Ext JS Developers</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">These topics are particularly important when working with PHP backend APIs and Ext JS frontend applications.</p>

<div class="my-5 overflow-x-auto"><table class="w-full border-collapse text-left text-gray-700"><thead class="bg-gray-100"><tr>

<th class="border border-gray-200 px-4 py-3 font-semibold">Question</th>

<th class="border border-gray-200 px-4 py-3 font-semibold">What you should explain</th>

</tr></thead><tbody>

<tr><td class="border border-gray-200 px-4 py-3">How do you call PHP APIs from JavaScript?</td><td class="border border-gray-200 px-4 py-3">AJAX, Fetch, JSON</td></tr>

<tr><td class="border border-gray-200 px-4 py-3">How do you validate forms?</td><td class="border border-gray-200 px-4 py-3">HTML5 and JavaScript validation</td></tr>

<tr><td class="border border-gray-200 px-4 py-3">How do you handle API errors?</td><td class="border border-gray-200 px-4 py-3">Try/catch and HTTP status codes</td></tr>

<tr><td class="border border-gray-200 px-4 py-3">How do you prevent duplicate form submission?</td><td class="border border-gray-200 px-4 py-3">Disable button and backend validation</td></tr>

<tr><td class="border border-gray-200 px-4 py-3">How do you improve frontend performance?</td><td class="border border-gray-200 px-4 py-3">Debouncing, caching, lazy loading</td></tr>

<tr><td class="border border-gray-200 px-4 py-3">How do you handle dynamic dropdowns?</td><td class="border border-gray-200 px-4 py-3">AJAX and API integration</td></tr>

<tr><td class="border border-gray-200 px-4 py-3">How do you manage events?</td><td class="border border-gray-200 px-4 py-3">Event listeners and delegation</td></tr>

<tr><td class="border border-gray-200 px-4 py-3">How do you secure frontend applications?</td><td class="border border-gray-200 px-4 py-3">Input validation, output encoding, CSRF protection</td></tr>

</tbody></table></div>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">9. Important output-based JavaScript questions</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">Try to answer these without executing the code.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">JavaScript mini practice test</p>

<p class="mb-4 text-lg leading-8 text-gray-700">5 Questions</p>

<p class="mb-4 text-lg leading-8 text-gray-700">1\. What is the output?</p>

<p class="mb-4 text-lg leading-8 text-gray-700">console.log(typeof null);</p>

<p class="mb-4 text-lg leading-8 text-gray-700">null</p>

<p class="mb-4 text-lg leading-8 text-gray-700">object</p>

<p class="mb-4 text-lg leading-8 text-gray-700">undefined</p>

<p class="mb-4 text-lg leading-8 text-gray-700">number</p>

<p class="mb-4 text-lg leading-8 text-gray-700">2\. What is the output?</p>

<p class="mb-4 text-lg leading-8 text-gray-700">console.log(2 + &quot;2&quot; - 1);</p>

<p class="mb-4 text-lg leading-8 text-gray-700">21</p>

<p class="mb-4 text-lg leading-8 text-gray-700">221</p>

<p class="mb-4 text-lg leading-8 text-gray-700">3</p>

<p class="mb-4 text-lg leading-8 text-gray-700">NaN</p>

<p class="mb-4 text-lg leading-8 text-gray-700">3\. What is the output?</p>

<p class="mb-4 text-lg leading-8 text-gray-700">console.log([] == false);</p>

<p class="mb-4 text-lg leading-8 text-gray-700">true</p>

<p class="mb-4 text-lg leading-8 text-gray-700">false</p>

<p class="mb-4 text-lg leading-8 text-gray-700">undefined</p>

<p class="mb-4 text-lg leading-8 text-gray-700">Error</p>

<p class="mb-4 text-lg leading-8 text-gray-700">4\. What is the output?</p>

<p class="mb-4 text-lg leading-8 text-gray-700">console.log(0.1 + 0.2 === 0.3);</p>

<p class="mb-4 text-lg leading-8 text-gray-700">true</p>

<p class="mb-4 text-lg leading-8 text-gray-700">false</p>

<p class="mb-4 text-lg leading-8 text-gray-700">0.3</p>

<p class="mb-4 text-lg leading-8 text-gray-700">Error</p>

<p class="mb-4 text-lg leading-8 text-gray-700">5\. What is the output?</p>

<p class="mb-4 text-lg leading-8 text-gray-700">console.log(typeof NaN);</p>

<p class="mb-4 text-lg leading-8 text-gray-700">NaN</p>

<p class="mb-4 text-lg leading-8 text-gray-700">undefined</p>

<p class="mb-4 text-lg leading-8 text-gray-700">number</p>

<p class="mb-4 text-lg leading-8 text-gray-700">object</p>

<p class="mb-4 text-lg leading-8 text-gray-700">Submit answers</p>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">10. Most important topics to prepare for an experienced developer</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">My suggested preparation order:</p>

<ol class="mb-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">

<li>JavaScript scope, hoisting, closures.</li>

<li>Array methods: map, filter, reduce, find.</li>

<li>DOM manipulation and event delegation.</li>

<li>Promises, async/await, Event Loop.</li>

<li>AJAX, Fetch API, JSON.</li>

<li>Call, apply, bind, and this.</li>

<li>ES6 features, spread and rest operators.</li>

<li>LocalStorage, SessionStorage and cookies.</li>

<li>Debouncing and throttling.</li>

<li>Practical coding problems and API integration.</li>

</ol>

</div>





<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">1. Explain the JavaScript Execution Context.</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">An Execution Context is the environment in which JavaScript code is executed.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">There are three main types:</p>
<ol type="1">
<li>Global Execution Context – Created when JavaScript starts executing.</li>
<li>Function Execution Context – Created whenever a function is called.</li>
<li>Eval Execution Context – Created when code executes through eval().</li>
</ol>
<p class="mb-3 text-lg leading-8 text-gray-700">Each execution context has two important phases:</p>
<ul class="mb-4 list-disc space-y-1 pl-6 text-gray-700">
<li>Creation phase: Creates variable and function bindings and establishes the scope.</li>
<li>Execution phase: Executes the code line by line.</li>
</ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">2. What is the Call Stack in JavaScript?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">The Call Stack is a data structure that manages function execution.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">It follows the LIFO principle (Last In, First Out).</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>function first() {
    second();
}

function second() {
    third();
}

function third() {
    console.log(&quot;Hello&quot;);
}

first();</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Execution order:</p>
<ol type="1">
<li>first() enters the stack.</li>
<li>second() enters the stack.</li>
<li>third() enters the stack.</li>
<li>third() completes.</li>
<li>second() completes.</li>
<li>first() completes.</li>
</ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">3. Explain the Event Loop in JavaScript.</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">JavaScript is single-threaded in its main execution model. The Event Loop coordinates asynchronous callbacks.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Important components:</p>
<ul class="mb-4 list-disc space-y-1 pl-6 text-gray-700">
<li>Call Stack</li>
<li>Web APIs / Runtime APIs</li>
<li>Microtask Queue</li>
<li>Task Queue (Macrotask Queue)</li>
<li>Event Loop</li>
</ul>
<p class="mb-3 text-lg leading-8 text-gray-700">Microtasks, such as Promise callbacks, are generally processed before the next task, such as a setTimeout callback.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>console.log(&quot;Start&quot;);

setTimeout(() =&gt; {
    console.log(&quot;Timeout&quot;);
}, 0);

Promise.resolve().then(() =&gt; {
    console.log(&quot;Promise&quot;);
});

console.log(&quot;End&quot;);</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Output:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>Start
End
Promise
Timeout</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">4. What is the Temporal Dead Zone (TDZ)?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">TDZ is the period between entering a scope and initializing a <code>let</code> or <code>const</code> variable.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Accessing the variable before initialization causes a ReferenceError.</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>console.log(name); // ReferenceError

let name = &quot;Brijesh&quot;;</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">5. Explain closures in detail.</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">A closure occurs when an inner function retains access to variables from its outer lexical scope even after the outer function has completed.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Benefits:</p>
<ul class="mb-4 list-disc space-y-1 pl-6 text-gray-700">
<li>Data privacy.</li>
<li>State management.</li>
<li>Function factories.</li>
<li>Event handlers.</li>
<li>Encapsulation.</li>
</ul>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>function bankAccount() {
    let balance = 1000;

    return {
        deposit(amount) {
            balance += amount;
        },

        getBalance() {
            return balance;
        }
    };
}

const account = bankAccount();

account.deposit(500);

console.log(account.getBalance()); // 1500</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">6. What is lexical scope?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Lexical scope means variable accessibility is determined by where functions and blocks are written in the source code, not where they are called.</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>let name = &quot;Brijesh&quot;;

function outer() {
    let message = &quot;Hello&quot;;

    function inner() {
        console.log(message, name);
    }

    inner();
}

outer();</code></pre>
<h2 id="2-advanced-functions-and-objects">2. Advanced Functions and Objects</h2>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">7. Explain call(), apply(), and bind().</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">These methods allow us to control the <code>this</code> context of a function.</p>
<div class="overflow-x-auto"><table class="mb-4 w-full border-collapse text-left text-gray-700">
<thead>
<tr class="header">
<th class="border border-gray-200 bg-gray-50 p-3">Method</th>
<th class="border border-gray-200 bg-gray-50 p-3">Description</th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td class="border border-gray-200 p-3">call()</td>
<td class="border border-gray-200 p-3">Executes function immediately with individual arguments</td>
</tr>
<tr class="even">
<td class="border border-gray-200 p-3">apply()</td>
<td class="border border-gray-200 p-3">Executes function immediately with arguments in an array</td>
</tr>
<tr class="odd">
<td class="border border-gray-200 p-3">bind()</td>
<td class="border border-gray-200 p-3">Returns a new function with a fixed <code>this</code> context</td>
</tr>
</tbody>
</table></div>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>const user = { name: &quot;Brijesh&quot; };

function greet(city, country) {
    console.log(this.name, city, country);
}

greet.call(user, &quot;Delhi&quot;, &quot;India&quot;);

greet.apply(user, [&quot;Delhi&quot;, &quot;India&quot;]);

const fn = greet.bind(user, &quot;Delhi&quot;, &quot;India&quot;);
fn();</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">8. What is the prototype chain?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">JavaScript uses prototype-based inheritance.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Every ordinary object has an internal prototype reference. When a property is not found on an object, JavaScript searches its prototype and continues up the prototype chain.</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>function Person(name) {
    this.name = name;
}

Person.prototype.sayHello = function() {
    console.log(&quot;Hello &quot; + this.name);
};

const user = new Person(&quot;Brijesh&quot;);

user.sayHello();</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">9. What is prototypal inheritance?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Prototypal inheritance allows one object to access properties and methods of another object through its prototype.</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>const parent = {
    greet() {
        console.log(&quot;Hello&quot;);
    }
};

const child = Object.create(parent);

child.greet();</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">10. What is the difference between Object.freeze() and Object.seal()?</h2>
    </div>

<div class="overflow-x-auto"><table class="mb-4 w-full border-collapse text-left text-gray-700">
<thead>
<tr class="header">
<th class="border border-gray-200 bg-gray-50 p-3">Object.freeze()</th>
<th class="border border-gray-200 bg-gray-50 p-3">Object.seal()</th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td class="border border-gray-200 p-3">Cannot add properties</td>
<td class="border border-gray-200 p-3">Cannot add properties</td>
</tr>
<tr class="even">
<td class="border border-gray-200 p-3">Cannot delete properties</td>
<td class="border border-gray-200 p-3">Cannot delete properties</td>
</tr>
<tr class="odd">
<td class="border border-gray-200 p-3">Cannot change existing values</td>
<td class="border border-gray-200 p-3">Existing writable values can change</td>
</tr>
<tr class="even">
<td class="border border-gray-200 p-3">Stronger restriction</td>
<td class="border border-gray-200 p-3">Allows value updates</td>
</tr>
</tbody>
</table></div>
<p class="mb-3 text-lg leading-8 text-gray-700">Both are shallow operations.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">11. What is currying in JavaScript?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Currying transforms a function with multiple arguments into a sequence of functions, each taking one argument.</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>function multiply(a) {
    return function(b) {
        return function(c) {
            return a * b * c;
        };
    };
}

console.log(multiply(2)(3)(4)); // 24</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">12. What is a higher-order function?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">A higher-order function is a function that accepts another function as an argument or returns a function.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Examples include:</p>
<ul class="mb-4 list-disc space-y-1 pl-6 text-gray-700">
<li>map()</li>
<li>filter()</li>
<li>reduce()</li>
<li>forEach()</li>
</ul>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>function calculate(a, b, callback) {
    return callback(a, b);
}

const result = calculate(10, 20, (x, y) =&gt; x + y);

console.log(result); // 30</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">13. What is a pure function?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">A pure function:</p>
<ul class="mb-4 list-disc space-y-1 pl-6 text-gray-700">
<li>Returns the same output for the same input.</li>
<li>Does not produce side effects.</li>
<li>Does not modify external state.</li>
</ul>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>function add(a, b) {
    return a + b;
}</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Pure functions are easier to test and maintain.</p>
<h2 id="3-advanced-asynchronous-programming">3. Advanced Asynchronous Programming</h2>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">14. Explain Promise.all(), Promise.allSettled(), Promise.race(), and Promise.any().</h2>
    </div>

<div class="overflow-x-auto"><table class="mb-4 w-full border-collapse text-left text-gray-700">
<thead>
<tr class="header">
<th class="border border-gray-200 bg-gray-50 p-3">Method</th>
<th class="border border-gray-200 bg-gray-50 p-3">Purpose</th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td class="border border-gray-200 p-3">Promise.all()</td>
<td class="border border-gray-200 p-3">Fulfills when all fulfill; rejects when one rejects</td>
</tr>
<tr class="even">
<td class="border border-gray-200 p-3">Promise.allSettled()</td>
<td class="border border-gray-200 p-3">Waits for every Promise to settle</td>
</tr>
<tr class="odd">
<td class="border border-gray-200 p-3">Promise.race()</td>
<td class="border border-gray-200 p-3">Settles with the first Promise to settle</td>
</tr>
<tr class="even">
<td class="border border-gray-200 p-3">Promise.any()</td>
<td class="border border-gray-200 p-3">Fulfills with the first fulfilled Promise</td>
</tr>
</tbody>
</table></div>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>const p1 = Promise.resolve(&quot;API 1&quot;);
const p2 = Promise.resolve(&quot;API 2&quot;);

Promise.all([p1, p2])
    .then(result =&gt; console.log(result));</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">15. What is the difference between microtasks and macrotasks?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Microtasks:</p>
<ul class="mb-4 list-disc space-y-1 pl-6 text-gray-700">
<li>Promise.then()</li>
<li>Promise.catch()</li>
<li>Promise.finally()</li>
<li>queueMicrotask()</li>
</ul>
<p class="mb-3 text-lg leading-8 text-gray-700">Tasks (often called macrotasks):</p>
<ul class="mb-4 list-disc space-y-1 pl-6 text-gray-700">
<li>setTimeout()</li>
<li>setInterval()</li>
<li>Browser event callbacks</li>
</ul>
<p class="mb-3 text-lg leading-8 text-gray-700">Microtasks are generally drained before the runtime proceeds to the next task.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">16. What is async/await internally?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Async/await is syntax built on Promises.</p>
<ul class="mb-4 list-disc space-y-1 pl-6 text-gray-700">
<li>An async function always returns a Promise.</li>
<li>Await pauses that async function until the awaited Promise settles.</li>
<li>Other JavaScript work can continue.</li>
<li>Errors can be handled using try/catch.</li>
</ul>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>async function getUsers() {
    try {
        const response = await fetch(&quot;/api/users&quot;);

        if (!response.ok) {
            throw new Error(&quot;API request failed&quot;);
        }

        return await response.json();

    } catch (error) {
        console.error(error);
    }
}</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">17. What is Promise chaining?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Promise chaining means connecting multiple asynchronous operations using <code>.then()</code>.</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>fetch(&quot;/api/users&quot;)
    .then(response =&gt; {
        if (!response.ok) {
            throw new Error(&quot;Request failed&quot;);
        }

        return response.json();
    })
    .then(users =&gt; {
        console.log(users);
    })
    .catch(error =&gt; {
        console.log(error);
    });</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">18. What is AbortController?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">AbortController allows us to cancel supported asynchronous operations, such as Fetch requests.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">It is useful when users change search input before the previous API request completes.</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>const controller = new AbortController();

fetch(&quot;/api/users&quot;, {
    signal: controller.signal
})
.then(response =&gt; response.json())
.then(data =&gt; console.log(data))
.catch(error =&gt; {
    if (error.name === &quot;AbortError&quot;) {
        console.log(&quot;Request cancelled&quot;);
    }
});

// Cancel request
controller.abort();</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">19. What is the difference between debouncing and throttling?</h2>
    </div>

<div class="overflow-x-auto"><table class="mb-4 w-full border-collapse text-left text-gray-700">
<thead>
<tr class="header">
<th class="border border-gray-200 bg-gray-50 p-3">Debouncing</th>
<th class="border border-gray-200 bg-gray-50 p-3">Throttling</th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td class="border border-gray-200 p-3">Executes after events stop</td>
<td class="border border-gray-200 p-3">Executes at controlled intervals</td>
</tr>
<tr class="even">
<td class="border border-gray-200 p-3">Useful for search boxes</td>
<td class="border border-gray-200 p-3">Useful for scroll events</td>
</tr>
<tr class="odd">
<td class="border border-gray-200 p-3">Waits for inactivity</td>
<td class="border border-gray-200 p-3">Limits execution frequency</td>
</tr>
</tbody>
</table></div>
<p class="mb-3 text-lg leading-8 text-gray-700">Debouncing example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>function debounce(fn, delay) {
    let timer;

    return function(...args) {
        clearTimeout(timer);

        timer = setTimeout(() =&gt; {
            fn.apply(this, args);
        }, delay);
    };
}</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Throttling example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>function throttle(fn, delay) {
    let lastCall = 0;

    return function(...args) {
        const now = Date.now();

        if (now - lastCall &gt;= delay) {
            lastCall = now;
            fn.apply(this, args);
        }
    };
}</code></pre>
<h2 id="4-javascript-performance-optimization">4. JavaScript Performance Optimization</h2>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">20. How do you optimize JavaScript application performance?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">My approach includes:</p>
<ol type="1">
<li>Reduce unnecessary DOM manipulation.</li>
<li>Use event delegation.</li>
<li>Implement debouncing and throttling.</li>
<li>Avoid unnecessary API calls.</li>
<li>Use lazy loading.</li>
<li>Minimize JavaScript bundle size.</li>
<li>Use caching where appropriate.</li>
<li>Avoid memory leaks.</li>
<li>Optimize loops and data structures.</li>
<li>Use browser performance profiling tools.</li>
</ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">21. What is memory leakage in JavaScript?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Memory leakage occurs when memory that is no longer needed remains reachable and cannot be garbage-collected.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Common reasons:</p>
<ul class="mb-4 list-disc space-y-1 pl-6 text-gray-700">
<li>Unremoved event listeners.</li>
<li>Unnecessary global variables.</li>
<li>Forgotten timers.</li>
<li>Closures retaining large objects.</li>
<li>Detached DOM elements still referenced by JavaScript.</li>
</ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">22. What is garbage collection?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Garbage collection is the automatic process of identifying and reclaiming memory occupied by objects that are no longer reachable.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">JavaScript engines commonly use reachability-based garbage collection, including mark-and-sweep techniques.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">23. What is lazy loading?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Lazy loading means loading resources only when they are needed.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>const button = document.querySelector(&quot;#load&quot;);

button.addEventListener(&quot;click&quot;, async () =&gt; {
    const module = await import(&quot;./dashboard.js&quot;);

    module.loadDashboard();
});</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">24. What is code splitting?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Code splitting divides a large JavaScript application into smaller bundles that can be loaded when required.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Benefits:</p>
<ul class="mb-4 list-disc space-y-1 pl-6 text-gray-700">
<li>Faster initial loading.</li>
<li>Reduced initial JavaScript.</li>
<li>Better application performance.</li>
</ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">25. How do you prevent unnecessary DOM reflows and repaints?</h2>
    </div>

<ul class="mb-4 list-disc space-y-1 pl-6 text-gray-700">
<li>Batch DOM updates.</li>
<li>Avoid repeatedly reading and writing layout properties.</li>
<li>Use CSS classes instead of many individual style changes.</li>
<li>Use document fragments for large DOM insertions.</li>
<li>Use requestAnimationFrame for animation updates.</li>
</ul>
<h2 id="5-javascript-security-questions">5. JavaScript Security Questions</h2>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">26. What is Cross-Site Scripting (XSS)?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">XSS is a security vulnerability where attackers inject malicious scripts into web pages viewed by other users.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Prevention:</p>
<ul class="mb-4 list-disc space-y-1 pl-6 text-gray-700">
<li>Escape untrusted output.</li>
<li>Avoid inserting untrusted content using innerHTML.</li>
<li>Use textContent for plain text.</li>
<li>Implement Content Security Policy (CSP).</li>
<li>Sanitize HTML when rich HTML input is required.</li>
</ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">27. What is CSRF?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">CSRF stands for Cross-Site Request Forgery.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">It tricks an authenticated user's browser into making an unwanted request to a website.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Prevention:</p>
<ul class="mb-4 list-disc space-y-1 pl-6 text-gray-700">
<li>CSRF tokens.</li>
<li>SameSite cookie settings.</li>
<li>Origin and Referer validation.</li>
<li>Appropriate authentication and request protection.</li>
</ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">28. Is JavaScript validation enough for form security?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">No. Client-side validation can be bypassed.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">I always perform validation on both frontend and backend.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">For PHP applications, I validate incoming requests using Laravel validation or appropriate server-side validation rules.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">29. What is CORS?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">CORS stands for Cross-Origin Resource Sharing.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">It is a browser security mechanism that controls whether a web page from one origin can access resources from another origin.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">The server must provide appropriate CORS response headers.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">30. How do you securely store authentication tokens?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Token storage depends on the application architecture.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">For browser applications, secure HttpOnly, Secure, and appropriately configured SameSite cookies are often preferable for session or refresh-token storage.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">I avoid storing sensitive long-lived authentication tokens in localStorage because JavaScript can access them if an XSS vulnerability occurs.</p>
<h2 id="6-es6-and-modern-javascript">6. ES6+ and Modern JavaScript</h2>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">31. What are the important ES6 features?</h2>
    </div>

<ol type="1">
<li>let and const.</li>
<li>Arrow functions.</li>
<li>Template literals.</li>
<li>Destructuring.</li>
<li>Spread operator.</li>
<li>Rest parameters.</li>
<li>Classes.</li>
<li>Modules.</li>
<li>Promises.</li>
<li>Default parameters.</li>
<li>Map and Set.</li>
<li>Symbol.</li>
</ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">32. What is the difference between Map and Object?</h2>
    </div>

<div class="overflow-x-auto"><table class="mb-4 w-full border-collapse text-left text-gray-700">
<thead>
<tr class="header">
<th class="border border-gray-200 bg-gray-50 p-3">Map</th>
<th class="border border-gray-200 bg-gray-50 p-3">Object</th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td class="border border-gray-200 p-3">Keys can be any value</td>
<td class="border border-gray-200 p-3">Keys are strings or symbols</td>
</tr>
<tr class="even">
<td class="border border-gray-200 p-3">Maintains insertion order</td>
<td class="border border-gray-200 p-3">Has defined property ordering rules</td>
</tr>
<tr class="odd">
<td class="border border-gray-200 p-3">Has size property</td>
<td class="border border-gray-200 p-3">No built-in size property</td>
</tr>
<tr class="even">
<td class="border border-gray-200 p-3">Provides iteration methods</td>
<td class="border border-gray-200 p-3">Requires object iteration methods</td>
</tr>
</tbody>
</table></div>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">33. What is Set in JavaScript?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Set is a collection that stores unique values.</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>const numbers = new Set([1, 2, 2, 3, 4]);

console.log([...numbers]);
// [1, 2, 3, 4]</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">34. What are generators?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Generators are special functions that can pause and resume execution using the <code>yield</code> keyword.</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>function* numbers() {
    yield 1;
    yield 2;
    yield 3;
}

const gen = numbers();

console.log(gen.next().value); // 1
console.log(gen.next().value); // 2</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">35. What is optional chaining?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Optional chaining (<code>?.</code>) allows safe access to nested object properties.</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>const user = {
    profile: {
        name: &quot;Brijesh&quot;
    }
};

console.log(user.profile?.name);
console.log(user.address?.city);</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">36. What is nullish coalescing?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">The nullish coalescing operator (<code>??</code>) returns the right-hand value only when the left-hand value is null or undefined.</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>let name = null;

console.log(name ?? &quot;Guest&quot;); // Guest

let age = 0;

console.log(age ?? 18); // 0</code></pre>
<h2 id="7-advanced-javascript-coding-questions">7. Advanced JavaScript Coding Questions</h2>
<p class="mb-3 text-lg leading-8 text-gray-700">These are common practical questions for senior developer interviews.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">37. Implement a custom map() function.</h2>
    </div>

<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>Array.prototype.myMap = function(callback) {
    let result = [];

    for (let i = 0; i &lt; this.length; i++) {
        if (i in this) {
            result.push(callback(this[i], i, this));
        }
    }

    return result;
};

let numbers = [1, 2, 3];

console.log(numbers.myMap(n =&gt; n * 2));
// [2, 4, 6]</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">38. Implement a custom filter() function.</h2>
    </div>

<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>Array.prototype.myFilter = function(callback) {
    let result = [];

    for (let i = 0; i &lt; this.length; i++) {
        if (i in this &amp;&amp; callback(this[i], i, this)) {
            result.push(this[i]);
        }
    }

    return result;
};

console.log([1, 2, 3, 4].myFilter(n =&gt; n &gt; 2));
// [3, 4]</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">39. Flatten a nested array.</h2>
    </div>

<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>const arr = [1, [2, [3, 4]], 5];

const result = arr.flat(Infinity);

console.log(result);
// [1, 2, 3, 4, 5]</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">40. Group an array of objects by category.</h2>
    </div>

<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>const products = [
    { name: &quot;Mobile&quot;, category: &quot;Electronics&quot; },
    { name: &quot;Laptop&quot;, category: &quot;Electronics&quot; },
    { name: &quot;Shirt&quot;, category: &quot;Fashion&quot; }
];

const result = Object.groupBy(
    products,
    item =&gt; item.category
);

console.log(result);</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">41. Find the frequency of each element in an array.</h2>
    </div>

<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>const arr = [1, 2, 2, 3, 3, 3];

const frequency = arr.reduce((acc, num) =&gt; {
    acc[num] = (acc[num] || 0) + 1;

    return acc;
}, {});

console.log(frequency);

// {1: 1, 2: 2, 3: 3}</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">42. Deep clone an object.</h2>
    </div>

<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>const original = {
    name: &quot;Brijesh&quot;,
    address: {
        city: &quot;Delhi&quot;
    }
};

const clone = structuredClone(original);

clone.address.city = &quot;Mumbai&quot;;

console.log(original.address.city); // Delhi</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700"><code>structuredClone()</code> supports many built-in data types, but not every JavaScript value, such as functions.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">43. Implement a function that executes only once.</h2>
    </div>

<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>function once(fn) {
    let called = false;
    let result;

    return function(...args) {
        if (!called) {
            called = true;
            result = fn.apply(this, args);
        }

        return result;
    };
}

const initialize = once(() =&gt; {
    console.log(&quot;Initialized&quot;);
});

initialize();
initialize();

// Initialized (only once)</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">44. How do you handle multiple API requests simultaneously?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Use Promise.all() when all results are required.</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>async function loadDashboard() {
    try {
        const [users, orders, products] = await Promise.all([
            fetch(&quot;/api/users&quot;),
            fetch(&quot;/api/orders&quot;),
            fetch(&quot;/api/products&quot;)
        ]);

        if (!users.ok || !orders.ok || !products.ok) {
            throw new Error(&quot;API request failed&quot;);
        }

        const data = await Promise.all([
            users.json(),
            orders.json(),
            products.json()
        ]);

        console.log(data);

    } catch (error) {
        console.error(error);
    }
}</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">45. How do you handle race conditions in search API calls?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">A race condition occurs when multiple asynchronous requests complete in an unexpected order, causing old results to overwrite new results.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Solution: Abort previous requests using AbortController or use request identifiers to ignore outdated responses.</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>let controller;

async function searchUsers(keyword) {
    if (controller) {
        controller.abort();
    }

    controller = new AbortController();

    try {
        const response = await fetch(
            `/api/users?search=${encodeURIComponent(keyword)}`,
            { signal: controller.signal }
        );

        const data = await response.json();

        console.log(data);

    } catch (error) {
        if (error.name !== &quot;AbortError&quot;) {
            console.error(error);
        }
    }
}</code></pre>
<h2 id="8-javascript-architecture-and-team-lead-questions">8. JavaScript Architecture and Team Lead Questions</h2>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">46. How do you structure a large JavaScript application?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">I follow a modular architecture to separate responsibilities.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>src/
 ├── components/
 ├── services/
 ├── controllers/
 ├── models/
 ├── utils/
 ├── config/
 ├── validations/
 └── app.js</code></pre>
<ul class="mb-4 list-disc space-y-1 pl-6 text-gray-700">
<li>Components: UI-related functionality.</li>
<li>Services: API communication.</li>
<li>Controllers: Application flow.</li>
<li>Models: Data handling.</li>
<li>Utils: Reusable helper functions.</li>
<li>Validations: Form and business-rule validation.</li>
</ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">47. How do you maintain JavaScript code quality in a team?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">My approach includes:</p>
<ol type="1">
<li>Follow coding standards.</li>
<li>Use meaningful variable and function names.</li>
<li>Implement reusable functions.</li>
<li>Use ESLint and Prettier.</li>
<li>Perform code reviews.</li>
<li>Avoid duplicate code.</li>
<li>Write unit and integration tests.</li>
<li>Use Git branching strategies.</li>
<li>Document complex business logic.</li>
<li>Monitor application performance.</li>
</ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">48. How do you debug JavaScript production issues?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">I follow a systematic approach:</p>
<ol type="1">
<li>Reproduce the issue.</li>
<li>Check browser console errors.</li>
<li>Inspect network requests.</li>
<li>Verify API responses.</li>
<li>Check application logs and monitoring.</li>
<li>Use breakpoints and debugging tools.</li>
<li>Identify the root cause.</li>
<li>Implement and test the fix.</li>
<li>Deploy through the approved process.</li>
<li>Monitor the production application.</li>
</ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">49. How do you integrate Ext JS with a PHP backend?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">I use Ext JS components such as Grid, Form, Store, Model, and Proxy.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">The frontend communicates with PHP REST APIs using AJAX requests. PHP handles business logic and database operations, and returns JSON responses.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">I also handle:</p>
<ul class="mb-4 list-disc space-y-1 pl-6 text-gray-700">
<li>API authentication.</li>
<li>Server-side validation.</li>
<li>Error responses.</li>
<li>Pagination and filtering.</li>
<li>Sorting.</li>
<li>CRUD operations.</li>
</ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">50. How do you improve a large Ext JS application?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">I focus on:</p>
<ul class="mb-4 list-disc space-y-1 pl-6 text-gray-700">
<li>Reusable components.</li>
<li>Proper Store and Model configuration.</li>
<li>Efficient API requests.</li>
<li>Grid pagination.</li>
<li>Lazy loading.</li>
<li>Avoiding unnecessary component creation.</li>
<li>Removing unused listeners.</li>
<li>Proper destruction of components.</li>
<li>Browser memory profiling.</li>
</ul>
</div>





</div>


</section>
  
 

 </div>
 
<br>
<div class="clear nextprev">
<a class="left btn" href="{{url('interviews/reactjs-interview-question-answer')}}">&#10094; Previous</a>
<a class="right btn" href="{{url('interviews/php-interview-question-answer')}}">Next &#10095;</a>
</div>
</div>
 
</div>
   
  @endsection