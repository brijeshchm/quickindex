@extends('interview.layouts.app')
@section('title')
Python Interview Questions & Answers
@endsection 
 
@section('description'),  
Master Python interview questions and answers covering data types, functions, OOP, exceptions, coding examples, and API basics for interview preparation
@endsection


@section('content')	 
 

<div class='main light-grey' id='belowtopnav' style='margin-left:220px;'>
  <div class='row white'>
    <div class='col l11 m12' id='main'>
       
<h1>Python<span class="color_h1"> Interview Question & Answer</span></h1>
<div class="clear nextprev">
<a class="left btn" href="{{url('interviews/pimcore-interview-question-answer')}}">&#10094; Previous</a>
<a class="right btn" href="{{url('interviews/extjs-interview-question-answer')}}">Next &#10095;</a>
</div>
<hr>
 <div class="light">
 
   
 <section id="services-section" class="py-12 bg-gray-100">
  
 <div class="container mx-auto px-4">
  


<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is Python?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Python is a high-level, interpreted, general-purpose programming language. It is known for its simple syntax, readability, and extensive libraries.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Key features:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Easy to learn and read.</li>
        <li>Dynamically typed language.</li>
        <li>Object-oriented and supports functional programming.</li>
        <li>Cross-platform compatibility.</li>
        <li>Automatic memory management.</li>
        <li>Large standard library and third-party ecosystem.</li>
        <li>Supports database connectivity and API development.</li>
    </ol>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>name = "Brijesh"age = 30print(f"My name is {name} and my age</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">This interview preparation guide covers basic to advanced Python concepts, including OOP, data structures, memory management, decorators, generators, multithreading, database connectivity, REST APIs, Django, Flask, and real-world coding scenarios.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">The explanations are structured for experienced developers and technical lead interviews.</p>
</div>

<h2 class="mt-12 mb-6 text-4xl font-bold text-slate-900">Python Fundamentals</h2>
<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is Python?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Python is a high-level, interpreted, general-purpose programming language. It is widely used for web development, automation, artificial intelligence, machine learning, data science, and API development.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Key features:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Simple and readable syntax.</li>
        <li>Dynamically typed language.</li>
        <li>Object-oriented programming support.</li>
        <li>Cross-platform compatibility.</li>
        <li>Automatic memory management.</li>
        <li>Large standard library.</li>
        <li>Supports functional and procedural programming.</li>
        <li>Strong database and API integration capabilities.</li>
    </ol>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>name = "Developer"age = 30print(f"Name: {name}, Age: {age}")</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What are the different data types in Python?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Python provides several built-in data types to store and manipulate data.</p>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Data type</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Description</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Example</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">int</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Integer values</td><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">age = 30</code></td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">float</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Decimal values</td><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">price = 99.50</code></td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">str</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Text values</td><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">"Python"</code></td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">bool</td><td class="border border-slate-200 px-4 py-3 text-gray-700">True or False</td><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">True</code></td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">list</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Ordered, mutable collection</td><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">[1, 2, 3]</code></td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">tuple</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Ordered, immutable collection</td><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">(1, 2, 3)</code></td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">set</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Unique elements</td><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">{1, 2, 3}</code></td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">dict</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Key-value pairs</td><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">{"name": "John"}</code></td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">NoneType</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Represents no value</td><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">None</code></td></tr></tbody>
        </table>
    </div>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between list, tuple, set, and dictionary?</h2>
    </div>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Feature</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">List</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Tuple</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Set</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Dictionary</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Syntax</td><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">[]</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">()</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">{}</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">{key: value}</code></td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Ordered</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Yes</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Yes</td><td class="border border-slate-200 px-4 py-3 text-gray-700">No guaranteed order</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Yes</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Mutable</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Yes</td><td class="border border-slate-200 px-4 py-3 text-gray-700">No</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Yes</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Yes</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Duplicates</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Allowed</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Allowed</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Not allowed</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Keys must be unique</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Access</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Index</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Index</td><td class="border border-slate-200 px-4 py-3 text-gray-700">No index</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Key</td></tr></tbody>
        </table>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code></code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between mutable and immutable objects?</h2>
    </div>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Mutable: An object whose contents can be changed after creation.</li>
        <li>Immutable: An object whose contents cannot be changed after creation.</li>
    </ul>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Mutable</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Immutable</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">List</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Tuple</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Dictionary</td><td class="border border-slate-200 px-4 py-3 text-gray-700">String</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Set</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Integer</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Bytearray</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Float</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Boolean</td></tr></tbody>
        </table>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code></code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is dynamic typing in Python?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Dynamic typing means that a variable's type is determined at runtime. You do not need to explicitly declare the variable's data type.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>value = 100print(type(value))value = "Python"print(type(value))value = 10.5print(type(value))</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">The same variable can reference objects of different types during program execution.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between <code class="rounded bg-slate-100 px-1 text-base">==</code> and <code class="rounded bg-slate-100 px-1 text-base">is</code>?</h2>
    </div>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li><code class="rounded bg-slate-100 px-1 text-base">==</code> compares the values of two objects.</li>
        <li><code class="rounded bg-slate-100 px-1 text-base">is</code> checks whether two references point to the same object.</li>
    </ul>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>a = [10, 20]b = [10, 20]print(a == b)  # Trueprint(a is b)  # False</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Both lists contain the same values, but they are different objects in memory.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between <code class="rounded bg-slate-100 px-1 text-base">break</code>, <code class="rounded bg-slate-100 px-1 text-base">continue</code>, and <code class="rounded bg-slate-100 px-1 text-base">pass</code>?</h2>
    </div>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Statement</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Purpose</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">break</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Terminates the loop</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">continue</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Skips the current iteration</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">pass</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Does nothing; acts as a placeholder</td></tr></tbody>
        </table>
    </div>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>for i in range(5):    if i == 1:        continue    if i == 4:        break    print(i)def future_function():    pass</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is list comprehension?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">List comprehension provides a concise way to create lists from existing iterables.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Traditional approach:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>numbers = [1, 2, 3, 4, 5]squares = []for num in numbers:    squares.append(num ** 2)print(squares)</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Using list comprehension:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>numbers = [1, 2, 3, 4, 5]squares = [num ** 2 for num in numbers]print(squares)</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Output:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>[1, 4, 9, 16, 25]</code></pre>
</div>

<h2 class="mt-12 mb-6 text-4xl font-bold text-slate-900">Python Functions</h2>
<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is a function in Python?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">A function is a reusable block of code designed to perform a specific task. Functions help improve code reusability, maintainability, and readability.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>def calculate_sum(a, b):    return a + bresult = calculate_sum(10, 20)print(result)</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What are <code class="rounded bg-slate-100 px-1 text-base">*args</code> and <code class="rounded bg-slate-100 px-1 text-base">**kwargs</code>?</h2>
    </div>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li><code class="rounded bg-slate-100 px-1 text-base">*args</code> allows a function to accept a variable number of positional arguments.</li>
        <li><code class="rounded bg-slate-100 px-1 text-base">**kwargs</code> allows a function to accept a variable number of keyword arguments.</li>
    </ul>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>def calculate_total(*args):    return sum(args)print(calculate_total(10, 20, 30, 40))</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Using <code class="rounded bg-slate-100 px-1 text-base">**kwargs</code>:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>def employee_details(**kwargs):    for key, value in kwargs.items():        print(key, value)employee_details(    name="John",    age=30,    department="IT")</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is a lambda function?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">A lambda function is a small anonymous function defined using the <code class="rounded bg-slate-100 px-1 text-base">lambda</code> keyword. It can contain a single expression.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>square = lambda x: x * xprint(square(5))</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Output:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>25</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is recursion?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Recursion is a programming technique in which a function calls itself to solve a problem. A recursive function must have a base condition to stop further calls.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example: Factorial</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>def factorial(n):    if n == 0 or n == 1:        return 1    return n * factorial(n - 1)print(factorial(5))</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Output:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>120</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between <code class="rounded bg-slate-100 px-1 text-base">return</code> and <code class="rounded bg-slate-100 px-1 text-base">yield</code>?</h2>
    </div>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">return</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">yield</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Returns a value and exits the function</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Produces a value and pauses the function</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Does not preserve execution for resumption</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Preserves generator state</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Usually returns a single result</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Can produce multiple results lazily</td></tr></tbody>
        </table>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>def normal_function():    return 10def generator_function():    yield 10    yield 20    yield 30print(normal_function())for value in generator_function():    print(value)</code></pre>
</div>

<h2 class="mt-12 mb-6 text-4xl font-bold text-slate-900">Object-Oriented Programming (OOP)</h2>
<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is OOP in Python?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Object-Oriented Programming is a programming approach based on classes and objects. It helps organize code into reusable components.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Four main pillars:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Encapsulation – Bundling data and methods inside a class.</li>
        <li>Inheritance – Reusing properties and methods from another class.</li>
        <li>Polymorphism – Using a common interface for different implementations.</li>
        <li>Abstraction – Hiding implementation details and exposing essential functionality.</li>
    </ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is a class and an object?</h2>
    </div>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Class: A blueprint used to define attributes and methods.</li>
        <li>Object: An instance of a class.</li>
    </ul>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>class Employee:    def __init__(self, name, salary):        self.name = name        self.salary = salary    def display(self):        print(self.name, self.salary)emp = Employee("John", 50000)emp.display()</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is inheritance in Python?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Inheritance allows one class to reuse attributes and methods from another class.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>class Employee:    def display(self):        print("Employee Details")class Developer(Employee):    def coding(self):        print("Developer is coding")dev = Developer()dev.display()dev.coding()</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Types of inheritance:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Single inheritance.</li>
        <li>Multiple inheritance.</li>
        <li>Multilevel inheritance.</li>
        <li>Hierarchical inheritance.</li>
        <li>Hybrid inheritance.</li>
    </ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is polymorphism?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Polymorphism means one interface can have multiple implementations depending on the object or context.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>class Dog:    def sound(self):        print("Bark")class Cat:    def sound(self):        print("Meow")for animal in [Dog(), Cat()]:    animal.sound()</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is encapsulation?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Encapsulation means combining data and methods within a class and controlling access to internal data.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Python uses naming conventions:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li><code class="rounded bg-slate-100 px-1 text-base">name</code>: Public attribute.</li>
        <li><code class="rounded bg-slate-100 px-1 text-base">_name</code>: Protected by convention.</li>
        <li><code class="rounded bg-slate-100 px-1 text-base">__name</code>: Name-mangled attribute.</li>
    </ul>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>class Employee:    def __init__(self):        self.__salary = 50000    def get_salary(self):        return self.__salaryemp = Employee()print(emp.get_salary())</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is abstraction?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Abstraction hides internal implementation details and exposes only the necessary functionality.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Python provides the <code class="rounded bg-slate-100 px-1 text-base">abc</code> module for defining abstract classes.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>from abc import ABC, abstractmethodclass Payment(ABC):    &#64;abstractmethod    def process_payment(self):        passclass StripePayment(Payment):    def process_payment(self):        print("Payment processed using Stripe")payment = StripePayment()payment.process_payment()</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between <code class="rounded bg-slate-100 px-1 text-base">&#64;staticmethod</code>, <code class="rounded bg-slate-100 px-1 text-base">&#64;classmethod</code>, and instance methods?</h2>
    </div>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Method</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">First parameter</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Purpose</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Instance method</td><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">self</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Access instance attributes</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Class method</td><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">cls</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Access or modify class-level data</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Static method</td><td class="border border-slate-200 px-4 py-3 text-gray-700">None automatically</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Utility functionality related to a class</td></tr></tbody>
        </table>
    </div>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>class Employee:    company = "ABC Ltd"    def display(self):        return "Instance Method"    &#64;classmethod    def get_company(cls):        return cls.company    &#64;staticmethod    def add(a, b):        return a + bemp = Employee()print(emp.display())print(Employee.get_company())print(Employee.add(10, 20))</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is method overriding?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Method overriding occurs when a child class provides its own implementation of a method inherited from its parent class.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>class Parent:    def show(self):        print("Parent method")class Child(Parent):    def show(self):        print("Child method")obj = Child()obj.show()</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is MRO in Python?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">MRO stands for Method Resolution Order. It defines the order in which Python searches classes for a method or attribute, especially in multiple inheritance.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Python uses the C3 linearization algorithm.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>class A:    passclass B(A):    passclass C(A):    passclass D(B, C):    passprint(D.mro())</code></pre>
</div>

<h2 class="mt-12 mb-6 text-4xl font-bold text-slate-900">Advanced Python Concepts</h2>
<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is a decorator in Python?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">A decorator is a function that modifies or extends the behavior of another function without changing its original source code.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Decorators are commonly used for logging, authentication, authorization, caching, and performance monitoring.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>def my_decorator(func):    def wrapper():        print("Before function execution")        func()        print("After function execution")    return wrapper&#64;my_decoratordef welcome():    print("Welcome to Python")welcome()</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is a generator in Python?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">A generator is a special function that produces values one at a time using the <code class="rounded bg-slate-100 px-1 text-base">yield</code> keyword instead of returning all values at once.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Advantages:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Memory efficient.</li>
        <li>Lazy evaluation.</li>
        <li>Useful for large datasets.</li>
        <li>Suitable for streaming data.</li>
    </ol>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>def generate_numbers():    for i in range(1, 6):        yield ifor number in generate_numbers():    print(number)</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is an iterator?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">An iterator is an object that allows sequential access to elements of a collection.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">An iterator implements two methods:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li><code class="rounded bg-slate-100 px-1 text-base">__iter__()</code></li>
        <li><code class="rounded bg-slate-100 px-1 text-base">__next__()</code></li>
    </ul>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>numbers = [10, 20, 30]iterator = iter(numbers)print(next(iterator))print(next(iterator))print(next(iterator))</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between shallow copy and deep copy?</h2>
    </div>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Shallow copy: Creates a new outer object but keeps references to nested objects.</li>
        <li>Deep copy: Creates a new object recursively, including nested objects.</li>
    </ul>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>import copyoriginal = [[1, 2], [3, 4]]shallow = copy.copy(original)deep = copy.deepcopy(original)original[0][0] = 100print(shallow)print(deep)</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is a context manager?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">A context manager manages resources automatically, ensuring proper setup and cleanup. It is commonly used for files, database connections, and locks.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">The <code class="rounded bg-slate-100 px-1 text-base">with</code> statement is used to work with context managers.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>with open("data.txt", "w") as file:    file.write("Hello Python")</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Python automatically closes the file after leaving the block.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is exception handling?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Exception handling is a mechanism used to manage runtime errors without abruptly terminating the program.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Python uses:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li><code class="rounded bg-slate-100 px-1 text-base">try</code>: Code that may raise an exception.</li>
        <li><code class="rounded bg-slate-100 px-1 text-base">except</code>: Handles exceptions.</li>
        <li><code class="rounded bg-slate-100 px-1 text-base">else</code>: Executes if no exception occurs.</li>
        <li><code class="rounded bg-slate-100 px-1 text-base">finally</code>: Executes whether an exception occurs or not.</li>
    </ul>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>try:    a = 10    b = 0    result = a / bexcept ZeroDivisionError:    print("Cannot divide by zero")else:    print(result)finally:    print("Execution completed")</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between <code class="rounded bg-slate-100 px-1 text-base">raise</code> and <code class="rounded bg-slate-100 px-1 text-base">assert</code>?</h2>
    </div>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li><code class="rounded bg-slate-100 px-1 text-base">raise</code> explicitly throws an exception.</li>
        <li><code class="rounded bg-slate-100 px-1 text-base">assert</code> checks a condition and raises <code class="rounded bg-slate-100 px-1 text-base">AssertionError</code> if it is false. Assertions can be disabled with Python optimization mode, so they should not be used for validating production input.</li>
    </ul>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>age = -1if age &lt; 0:    raise ValueError("Age cannot be negative")assert age &gt;= 0, "Age must be positive"</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is Python's GIL?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">GIL stands for Global Interpreter Lock. In traditional CPython builds, it is a mechanism that allows only one thread at a time to execute Python bytecode within a process.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Important points:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>It affects CPU-bound multithreading.</li>
        <li>Threads are useful for many I/O-bound operations.</li>
        <li>Multiprocessing can use multiple CPU cores.</li>
        <li>Some native extensions release the GIL during operations.</li>
        <li>Free-threaded CPython builds are also available, but their behavior and compatibility differ from traditional builds.</li>
    </ol>
</div>

<h2 class="mt-12 mb-6 text-4xl font-bold text-slate-900">Python Memory Management and Performance</h2>
<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How does Python manage memory?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Python manages memory automatically through its memory manager.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Important mechanisms include:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Reference counting.</li>
        <li>Garbage collection.</li>
        <li>Private heap memory.</li>
        <li>Object allocation and deallocation.</li>
        <li>Memory allocators.</li>
    </ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is garbage collection?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Garbage collection is the process of identifying and cleaning up objects that are no longer needed.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Python primarily uses reference counting and also has a cyclic garbage collector to handle reference cycles.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>import gcprint(gc.get_count())gc.collect()</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you optimize Python application performance?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Performance optimization involves improving execution speed, memory usage, database queries, and application architecture.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Best practices:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Use generators for large datasets.</li>
        <li>Avoid unnecessary loops.</li>
        <li>Use list comprehensions when appropriate.</li>
        <li>Add database indexes for frequently searched columns.</li>
        <li>Avoid repeated database queries.</li>
        <li>Use caching such as Redis.</li>
        <li>Use asynchronous programming for suitable I/O operations.</li>
        <li>Profile code before optimizing.</li>
        <li>Use pagination for large datasets.</li>
        <li>Apply multiprocessing for CPU-bound workloads when appropriate.</li>
    </ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between multithreading and multiprocessing?</h2>
    </div>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Feature</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Multithreading</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Multiprocessing</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Execution</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Multiple threads</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Multiple processes</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Memory</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Shared process memory</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Separate process memory</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Communication</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Shared data and synchronization</td><td class="border border-slate-200 px-4 py-3 text-gray-700">IPC mechanisms</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Best use</td><td class="border border-slate-200 px-4 py-3 text-gray-700">I/O-bound tasks</td><td class="border border-slate-200 px-4 py-3 text-gray-700">CPU-bound tasks</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Overhead</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Generally lower</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Generally higher</td></tr></tbody>
        </table>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Multithreading example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>import threadingdef task():    print("Task executed")t1 = threading.Thread(target=task)t1.start()t1.join()</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Multiprocessing example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>from multiprocessing import Processdef task():    print("Process executed")if __name__ == "__main__":    p1 = Process(target=task)    p1.start()    p1.join()</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is asynchronous programming in Python?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Asynchronous programming allows an application to perform other work while waiting for an I/O operation to complete.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Python provides <code class="rounded bg-slate-100 px-1 text-base">async</code>, <code class="rounded bg-slate-100 px-1 text-base">await</code>, and the <code class="rounded bg-slate-100 px-1 text-base">asyncio</code> library.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>import asyncioasync def fetch_data():    print("Fetching data")    await asyncio.sleep(2)    print("Data received")async def main():    await fetch_data()asyncio.run(main())</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Use cases:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>API requests.</li>
        <li>Network communication.</li>
        <li>Concurrent I/O operations.</li>
        <li>Database operations with async-compatible drivers.</li>
    </ul>
</div>

<h2 class="mt-12 mb-6 text-4xl font-bold text-slate-900">Python Database and SQL Interview Questions</h2>
<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you connect Python with MySQL?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Python can connect to MySQL using packages such as <code class="rounded bg-slate-100 px-1 text-base">mysql-connector-python</code> or <code class="rounded bg-slate-100 px-1 text-base">PyMySQL</code>.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Installation:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>pip install mysql-connector-python</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>import mysql.connectorconnection = mysql.connector.connect(    host="localhost",    user="root",    password="password",    database="company")cursor = connection.cursor()cursor.execute("SELECT * FROM employees")records = cursor.fetchall()for row in records:    print(row)cursor.close()connection.close()</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is SQL injection, and how do you prevent it?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">SQL injection is a security vulnerability in which an attacker manipulates SQL queries through untrusted input.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Incorrect approach:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>query = "SELECT * FROM users WHERE email = '" + email + "'"</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Correct approach using parameterized queries:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>cursor.execute(    "SELECT * FROM users WHERE email = %s",    (email,))</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Parameterized queries separate SQL commands from user-supplied data.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is ORM in Python?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">ORM stands for Object Relational Mapping. It allows developers to interact with relational databases using Python objects instead of writing SQL for every operation.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Popular Python ORMs:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Django ORM.</li>
        <li>SQLAlchemy.</li>
        <li>Tortoise ORM.</li>
        <li>Peewee.</li>
    </ul>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example using Django ORM:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>employees = Employee.objects.filter(    department="IT")for employee in employees:    print(employee.name)</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is database indexing?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">An index is a database structure that improves data retrieval speed by helping the database locate records efficiently.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>CREATE INDEX idx_employee_email
ON employees(email);</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Advantages:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Faster searching.</li>
        <li>Improved filtering.</li>
        <li>Better join performance.</li>
    </ul>
    <p class="text-lg text-gray-700 mt-3 leading-8">Disadvantages:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Requires additional storage.</li>
        <li>Can slow down insert, update, and delete operations.</li>
    </ul>
</div>

<h2 class="mt-12 mb-6 text-4xl font-bold text-slate-900">Python REST API and Web Development</h2>
<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is REST API?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">REST stands for Representational State Transfer. It is an architectural style used to design network-based APIs.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Common HTTP methods:</p>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Method</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Purpose</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">GET</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Retrieve records</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">POST</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Create records</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">PUT</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Replace a resource</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">PATCH</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Partially update a resource</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">DELETE</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Delete a resource</td></tr></tbody>
        </table>
    </div>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Which Python frameworks are used for web development?</h2>
    </div>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Framework</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Description</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Django</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Full-featured web framework</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Flask</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Lightweight web framework</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">FastAPI</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Modern framework for building APIs</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Pyramid</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Flexible web framework</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Tornado</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Asynchronous networking and web framework</td></tr></tbody>
        </table>
    </div>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is Django?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Django is a high-level Python web framework that follows the Model-Template-View (MTV) architectural pattern.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Main features:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Built-in authentication.</li>
        <li>ORM.</li>
        <li>Admin panel.</li>
        <li>URL routing.</li>
        <li>Middleware.</li>
        <li>Form validation.</li>
        <li>Security protections.</li>
        <li>REST API integration through Django REST Framework.</li>
    </ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is Flask?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Flask is a lightweight Python web framework used to build web applications and REST APIs.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">It provides routing and request handling, while additional functionality can be added through extensions.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>from flask import Flask, jsonifyapp = Flask(__name__)&#64;app.route("/api/users", methods=["GET"])def users():    return jsonify({        "status": True,        "message": "User list",        "data": []    })if __name__ == "__main__":    app.run(debug=True)</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is FastAPI?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">FastAPI is a modern Python framework for building APIs using Python type hints.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Features:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Automatic OpenAPI documentation.</li>
        <li>Request validation.</li>
        <li>Asynchronous endpoint support.</li>
        <li>Dependency injection.</li>
        <li>Pydantic-based data validation.</li>
        <li>High-performance ASGI application support.</li>
    </ol>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>from fastapi import FastAPIapp = FastAPI()&#64;app.get("/users")async def get_users():    return {        "status": True,        "data": []    }</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you implement JWT authentication in Python?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">JWT stands for JSON Web Token. It is a token-based authentication mechanism commonly used to secure APIs.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Authentication flow:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>User submits email and password.</li>
        <li>Server verifies credentials.</li>
        <li>Server generates a signed JWT.</li>
        <li>Client stores the token securely.</li>
        <li>Client sends the token in the Authorization header.</li>
        <li>Server verifies the signature and claims.</li>
        <li>Server grants access according to authorization rules.</li>
    </ol>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example using PyJWT:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>pip install PyJWT</code></pre>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>import jwtimport datetimeSECRET_KEY = "your-secret-key"payload = {    "user_id": 101,    "exp": datetime.datetime.now(        datetime.timezone.utc    ) + datetime.timedelta(hours=1)}token = jwt.encode(    payload,    SECRET_KEY,    algorithm="HS256")print(token)</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">In production, keep the secret in environment variables, validate token claims, and use HTTPS.</p>
</div>

<h2 class="mt-12 mb-6 text-4xl font-bold text-slate-900">Advanced Coding Interview Questions</h2>
<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you reverse a string in Python?</h2>
    </div>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>text = "Python"reversed_text = text[::-1]print(reversed_text)</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Output:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>nohtyP</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you check whether a string is a palindrome?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">A palindrome is a word or string that reads the same forward and backward.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>text = "madam"if text == text[::-1]:    print("Palindrome")else:    print("Not Palindrome")</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you find duplicate elements in a list?</h2>
    </div>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>numbers = [1, 2, 3, 2, 4, 5, 3]duplicates = list({    number    for number in numbers    if numbers.count(number) &gt; 1})print(duplicates)</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">More efficient approach for large lists:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>numbers = [1, 2, 3, 2, 4, 5, 3]seen = set()duplicates = set()for number in numbers:    if number in seen:        duplicates.add(number)    else:        seen.add(number)print(duplicates)</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you find the second-largest number in a list?</h2>
    </div>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>numbers = [10, 50, 30, 80, 60]unique_numbers = sorted(set(numbers))if len(unique_numbers) &gt;= 2:    print(unique_numbers[-2])else:    print("Second-largest number does not exist")</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you count the frequency of each character?</h2>
    </div>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>text = "programming"frequency = {}for char in text:    frequency[char] = frequency.get(char, 0) + 1print(frequency)</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you remove duplicate elements from a list while preserving order?</h2>
    </div>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>numbers = [1, 2, 2, 3, 4, 3, 5]result = list(dict.fromkeys(numbers))print(result)</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you find the missing number in an array?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Suppose an array contains numbers from 1 to 5, but one number is missing.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>numbers = [1, 2, 4, 5]n = 5expected_sum = n * (n + 1) // 2actual_sum = sum(numbers)missing_number = expected_sum - actual_sumprint(missing_number)</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Output:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>3</code></pre>
</div>

<h2 class="mt-12 mb-6 text-4xl font-bold text-slate-900">Python Architecture and Senior-Level Questions</h2>
<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is dependency injection in Python?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Dependency Injection is a design pattern in which an object receives its dependencies from outside instead of creating them internally.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">It improves:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Loose coupling.</li>
        <li>Unit testing.</li>
        <li>Code reusability.</li>
        <li>Maintainability.</li>
    </ul>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>class EmailService:    def send(self, message):        print("Sending:", message)class Notification:    def __init__(self, email_service):        self.email_service = email_service    def notify(self):        self.email_service.send("Hello")email = EmailService()notification = Notification(email)notification.notify()</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What are SOLID principles?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">SOLID is a set of five object-oriented design principles.</p>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Principle</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Meaning</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">S – Single Responsibility</td><td class="border border-slate-200 px-4 py-3 text-gray-700">A class should have one reason to change</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">O – Open/Closed</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Open for extension, closed for modification</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">L – Liskov Substitution</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Subtypes should be usable wherever their base types are expected</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">I – Interface Segregation</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Prefer small, focused interfaces</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">D – Dependency Inversion</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Depend on abstractions, not concrete implementations</td></tr></tbody>
        </table>
    </div>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between monolithic and microservices architecture?</h2>
    </div>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Monolithic</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Microservices</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Single application</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Multiple independent services</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Usually one deployment unit</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Services can be deployed independently</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Simpler initial architecture</td><td class="border border-slate-200 px-4 py-3 text-gray-700">More distributed complexity</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Internal method calls</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Network-based communication</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Scaling often applies to the whole application</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Services can be scaled independently</td></tr></tbody>
        </table>
    </div>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you handle large datasets in Python?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">For large datasets, memory usage and execution time should be carefully managed.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Recommended approaches:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Use generators instead of loading all records into memory.</li>
        <li>Process data in batches.</li>
        <li>Use database pagination.</li>
        <li>Use bulk database operations.</li>
        <li>Apply indexes to database queries.</li>
        <li>Use caching for frequently accessed data.</li>
        <li>Use asynchronous processing for suitable I/O operations.</li>
        <li>Use background workers for long-running tasks.</li>
    </ol>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example: Batch processing</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>def process_batches(data, batch_size=1000):    for i in range(0, len(data), batch_size):        batch = data[i:i + batch_size]        print("Processing:", len(batch))records = list(range(10000))process_batches(records)</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you secure a Python web application?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Important security practices include:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Validate and sanitize user input.</li>
        <li>Use parameterized SQL queries.</li>
        <li>Hash passwords using secure password-hashing algorithms.</li>
        <li>Use HTTPS.</li>
        <li>Implement authentication and authorization.</li>
        <li>Protect against CSRF where applicable.</li>
        <li>Configure CORS correctly.</li>
        <li>Store secrets in environment variables or a secrets manager.</li>
        <li>Restrict file uploads by type and size.</li>
        <li>Keep dependencies updated.</li>
        <li>Apply rate limiting.</li>
        <li>Avoid exposing sensitive error messages.</li>
    </ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you manage background jobs in Python?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Background jobs allow long-running tasks to execute outside the main HTTP request-response cycle.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Popular tools:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Celery.</li>
        <li>RQ (Redis Queue).</li>
        <li>Dramatiq.</li>
        <li>APScheduler for scheduled jobs.</li>
    </ul>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example use cases:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Sending emails.</li>
        <li>Generating reports.</li>
        <li>Processing images.</li>
        <li>Importing large CSV files.</li>
        <li>Payment reconciliation.</li>
        <li>Scheduled notifications.</li>
    </ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is caching in Python?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Caching stores frequently accessed results so that they can be retrieved faster without repeating expensive operations.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Common caching options:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>In-memory dictionary.</li>
        <li><code class="rounded bg-slate-100 px-1 text-base">functools.lru_cache</code>.</li>
        <li>Redis.</li>
        <li>Memcached.</li>
    </ul>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>from functools import lru_cache&#64;lru_cache(maxsize=100)def calculate_square(number):    print("Calculating...")    return number * numberprint(calculate_square(5))print(calculate_square(5))</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">The second call can reuse the cached result.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you test Python applications?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Testing verifies that application components work as expected.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Popular testing frameworks:</p>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Framework</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Purpose</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">unittest</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Built-in Python testing framework</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">pytest</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Popular testing framework</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">doctest</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Tests examples in documentation</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">unittest.mock</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Mocking dependencies</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">coverage.py</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Measures code coverage</td></tr></tbody>
        </table>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example using pytest:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>def add(a, b):    return a + bdef test_add():    assert add(10, 20) == 30</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Run:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>pytest</code></pre>
</div>

<h2 class="mt-12 mb-6 text-4xl font-bold text-slate-900">Real-World Scenario-Based Interview Questions</h2>
<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How would you design a high-performance Python REST API?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">I would follow these steps:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Choose FastAPI or Django REST Framework based on requirements.</li>
        <li>Design REST endpoints and request/response structures.</li>
        <li>Implement authentication and authorization.</li>
        <li>Use a relational database with optimized queries.</li>
        <li>Implement indexes and pagination.</li>
        <li>Add Redis caching where appropriate.</li>
        <li>Use background workers for long-running tasks.</li>
        <li>Validate incoming requests.</li>
        <li>Add structured logging and monitoring.</li>
        <li>Write unit, integration, and API tests.</li>
        <li>Containerize the application if required.</li>
        <li>Configure CI/CD for deployment.</li>
    </ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How would you debug a slow Python application?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">I would investigate the issue systematically:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Check application logs and error traces.</li>
        <li>Identify slow API endpoints.</li>
        <li>Profile Python execution using <code class="rounded bg-slate-100 px-1 text-base">cProfile</code>.</li>
        <li>Check database query execution plans.</li>
        <li>Identify N+1 query problems.</li>
        <li>Analyze memory consumption.</li>
        <li>Check external API response times.</li>
        <li>Introduce caching where beneficial.</li>
        <li>Optimize expensive algorithms.</li>
        <li>Load-test the application after making changes.</li>
    </ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How would you handle payment gateway integration?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">I would design payment processing around security, reliability, and idempotency.</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Create a payment order on the server.</li>
        <li>Generate the gateway payment request.</li>
        <li>Redirect or initialize the payment flow.</li>
        <li>Receive the payment result or webhook.</li>
        <li>Verify the webhook signature.</li>
        <li>Validate the transaction with the gateway where required.</li>
        <li>Use an idempotency key or unique transaction reference to prevent duplicate processing.</li>
        <li>Update payment status inside a database transaction.</li>
        <li>Maintain payment logs and reconciliation records.</li>
        <li>Handle failed, pending, and successful transactions separately.</li>
    </ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How would you lead a small development team?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">As a technical lead, I would focus on planning, technical quality, communication, and delivery.</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Understand project requirements.</li>
        <li>Break work into manageable tasks.</li>
        <li>Assign tasks based on developer skills.</li>
        <li>Define coding standards and architecture.</li>
        <li>Review pull requests.</li>
        <li>Monitor progress against deadlines.</li>
        <li>Identify technical risks early.</li>
        <li>Support developers in resolving blockers.</li>
        <li>Communicate progress to stakeholders.</li>
        <li>Conduct code reviews and knowledge-sharing sessions.</li>
        <li>Ensure testing and deployment readiness.</li>
    </ol>
</div>

 

 

</div>


</section>
  
 

 </div>
 
<br>
<div class="clear nextprev">
<a class="left btn" href="{{url('interviews/pimcore-interview-question-answer')}}">&#10094; Previous</a>
<a class="right btn" href="{{url('interviews/extjs-interview-question-answer')}}">Next &#10095;</a>
</div>
</div>
 
</div>
   
  @endsection