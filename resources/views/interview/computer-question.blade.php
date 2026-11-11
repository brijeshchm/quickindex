@extends('interview.layouts.app')
@section('title')
Computer Interview Questions & Answers
@endsection 
 
@section('description'),  
Computer interview questions and answers covering HTTP methods, status codes, authentication, JSON, CRUD, and API best practices.
@endsection


@section('content')	 
 

<div class='main light-grey' id='belowtopnav' style='margin-left:220px;'>
  <div class='row white'>
    <div class='col l11 m12' id='main'>
       
<h1>Computer<span class="color_h1"> Interview Question & Answer</span></h1>
<div class="clear nextprev">
<a class="left btn" href="{{url('interviews/extjs-interview-question-answer')}}">&#10094; Previous</a>
<a class="right btn" href="{{url('interviews/php-interview-question-answer')}}">Next &#10095;</a>
</div>
<hr>
 <div class="light">
 
   
 <section id="services-section" class="py-12 bg-gray-100">
  
 <div class="container mx-auto px-4">
  
 
 <!-- Question 1 -->
<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">
            1. What is Computer Science?
        </h2>
    </div>

    <p class="text-lg leading-8 text-gray-700">
        Computer Science is the study of computation, algorithms, data,
        and computer systems. It includes programming, databases, networking,
        operating systems, and artificial intelligence.
    </p>
</div>

<!-- Question 2 -->
<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">
            2. What is the difference between hardware and software?
        </h2>
    </div>

    <p class="mb-4 text-lg leading-8 text-gray-700">
        <strong>Hardware</strong> refers to the physical components of a computer,
        such as the processor, keyboard, and storage drive.
    </p>

    <p class="text-lg leading-8 text-gray-700">
        <strong>Software</strong> consists of programs and instructions that
        tell the hardware what to do. Examples include operating systems,
        browsers, and business applications.
    </p>
</div>

<!-- Question 3 -->
<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">
            3. What is a CPU?
        </h2>
    </div>

    <p class="mb-4 text-lg leading-8 text-gray-700">
        The <strong>Central Processing Unit (CPU)</strong> executes program
        instructions and coordinates processing activities.
    </p>

    <ul class="list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>
            <strong>ALU:</strong> Performs arithmetic and logical operations.
        </li>
        <li>
            <strong>Control Unit:</strong> Coordinates instruction execution.
        </li>
        <li>
            <strong>Registers:</strong> Store small amounts of data for immediate use.
        </li>
    </ul>
</div>

<!-- Question 4 -->
<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">
            4. What is the difference between RAM and storage?
        </h2>
    </div>

    <p class="mb-4 text-lg leading-8 text-gray-700">
        <strong>RAM</strong> temporarily holds programs and data currently being
        used. Its contents are generally lost when power is removed.
    </p>

    <p class="text-lg leading-8 text-gray-700">
        <strong>Storage</strong>, such as an SSD or hard disk, retains data
        after the computer is switched off.
    </p>
</div>

<!-- Question 5 -->
<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">
            5. What is an algorithm?
        </h2>
    </div>

    <p class="mb-4 text-lg leading-8 text-gray-700">
        An algorithm is a clearly defined sequence of steps for solving a problem.
        A terminating algorithm produces its result after a finite number of steps.
    </p>

    <p class="mb-3 text-lg leading-8 text-gray-700">
        <strong>Example: Adding two numbers</strong>
    </p>

    <ol class="list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Read the first number.</li>
        <li>Read the second number.</li>
        <li>Add the two numbers.</li>
        <li>Display the result.</li>
    </ol>
</div>

<!-- Question 6 -->
<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">
            6. What is time complexity?
        </h2>
    </div>

    <p class="mb-4 text-lg leading-8 text-gray-700">
        Time complexity describes how an algorithm’s computational work grows
        as the input size increases. Big O notation expresses an asymptotic
        upper bound.
    </p>

    <ul class="list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li><strong>O(1):</strong> Constant growth.</li>
        <li><strong>O(log n):</strong> Logarithmic growth.</li>
        <li><strong>O(n):</strong> Linear growth.</li>
        <li><strong>O(n²):</strong> Quadratic growth.</li>
    </ul>
</div>

<!-- Question 7 -->
<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">
            7. What is a data structure?
        </h2>
    </div>

    <p class="mb-4 text-lg leading-8 text-gray-700">
        A data structure organises data to support operations such as access,
        insertion, deletion, and searching.
    </p>

    <p class="text-lg leading-8 text-gray-700">
        Common examples include arrays, linked lists, stacks, queues,
        hash tables, trees, and graphs.
    </p>
</div>

<!-- Question 8 -->
<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">
            8. How does an array differ from a linked list?
        </h2>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full border-collapse text-left text-lg text-gray-700">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border border-gray-200 px-4 py-3">Array</th>
                    <th class="border border-gray-200 px-4 py-3">Linked List</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td class="border border-gray-200 px-4 py-3">
                        Typically stores elements in contiguous memory.
                    </td>
                    <td class="border border-gray-200 px-4 py-3">
                        Stores nodes connected through references or pointers.
                    </td>
                </tr>

                <tr>
                    <td class="border border-gray-200 px-4 py-3">
                        Supports constant-time access by index.
                    </td>
                    <td class="border border-gray-200 px-4 py-3">
                        Accessing a position generally requires traversal.
                    </td>
                </tr>

                <tr>
                    <td class="border border-gray-200 px-4 py-3">
                        Inserting in the middle may require shifting elements.
                    </td>
                    <td class="border border-gray-200 px-4 py-3">
                        Insertion can be constant-time once the required
                        node references are available.
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Question 9 -->
<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">
            9. What is a stack?
        </h2>
    </div>

    <p class="mb-4 text-lg leading-8 text-gray-700">
        A stack follows <strong>LIFO: Last In, First Out</strong>.
        The most recently added element is removed first.
    </p>

    <p class="text-lg leading-8 text-gray-700">
        <strong>Push</strong> adds an element, <strong>pop</strong> removes
        the top element, and <strong>peek</strong> reads the top element.
        Stacks are used in function calls, undo operations, and expression evaluation.
    </p>
</div>

<!-- Question 10 -->
<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">
            10. What is a queue?
        </h2>
    </div>

    <p class="mb-4 text-lg leading-8 text-gray-700">
        A standard queue follows <strong>FIFO: First In, First Out</strong>.
        The first element added is the first element removed.
    </p>

    <p class="text-lg leading-8 text-gray-700">
        <strong>Enqueue</strong> adds an element and <strong>dequeue</strong>
        removes an element. Queues are used in task scheduling, buffering,
        and breadth-first search.
    </p>
</div>

<!-- Question 11 -->
<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">
            11. What is a hash table?
        </h2>
    </div>

    <p class="mb-4 text-lg leading-8 text-gray-700">
        A hash table stores key-value pairs. A hash function helps determine
        where a key’s value should be stored.
    </p>

    <p class="text-lg leading-8 text-gray-700">
        Search, insertion, and deletion are often O(1) on average under suitable
        conditions. Collisions occur when different keys map to the same
        location and must be handled.
    </p>
</div>

<!-- Question 12 -->
<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">
            12. What is the difference between linear and binary search?
        </h2>
    </div>

    <p class="mb-4 text-lg leading-8 text-gray-700">
        <strong>Linear search</strong> checks elements one by one. Its worst-case
        time complexity is O(n), and the data does not need to be sorted.
    </p>

    <p class="text-lg leading-8 text-gray-700">
        <strong>Binary search</strong> repeatedly halves the search range in
        sorted data. On an array with constant-time indexed access,
        its worst-case time complexity is O(log n).
    </p>
</div>

<!-- Question 13 -->
<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">
            13. What are trees and graphs?
        </h2>
    </div>

    <p class="mb-4 text-lg leading-8 text-gray-700">
        A <strong>graph</strong> contains vertices and edges that represent
        entities and their relationships.
    </p>

    <p class="text-lg leading-8 text-gray-700">
        A <strong>tree</strong> is a connected, undirected graph without cycles.
        Rooted trees represent hierarchies, while general graphs can represent
        road networks or social connections.
    </p>
</div>

<!-- Question 14 -->
<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">
            14. What is recursion?
        </h2>
    </div>

    <p class="mb-4 text-lg leading-8 text-gray-700">
        Recursion occurs when a function calls itself to solve smaller instances
        of a problem. It needs a base case and progress toward that base case.
    </p>

    <pre class="overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>def factorial(n):
    if n &lt; 0:
        raise ValueError("n must be non-negative")

    if n == 0:
        return 1

    return n * factorial(n - 1)

print(factorial(5))  # 120</code></pre>
</div>

<!-- Question 15 -->
<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">
            15. What is object-oriented programming?
        </h2>
    </div>

    <p class="mb-4 text-lg leading-8 text-gray-700">
        Object-oriented programming organises software around objects that
        combine state and behaviour.
    </p>

    <ul class="list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li><strong>Encapsulation:</strong> Controls access to internal state.</li>
        <li><strong>Abstraction:</strong> Exposes essential behaviour.</li>
        <li><strong>Inheritance:</strong> Derives classes from existing classes.</li>
        <li>
            <strong>Polymorphism:</strong> Allows different implementations
            to share a common interface.
        </li>
    </ul>
</div>

<!-- Question 16 -->
<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">
            16. What is the difference between a class and an object?
        </h2>
    </div>

    <p class="mb-4 text-lg leading-8 text-gray-700">
        A <strong>class</strong> defines the attributes and behaviour of a type.
        An <strong>object</strong> is an instance of that class.
    </p>

    <p class="text-lg leading-8 text-gray-700">
        <strong>Example:</strong>
        A Car class can define colour and start() behaviour. A particular
        blue car is an object with its own state.
    </p>
</div>

<!-- Question 17 -->
<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">
            17. What is an operating system?
        </h2>
    </div>

    <p class="mb-4 text-lg leading-8 text-gray-700">
        An operating system manages hardware resources and provides services
        for applications.
    </p>

    <ul class="list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Process and thread management</li>
        <li>Memory management</li>
        <li>File and device management</li>
        <li>Access control and resource protection</li>
        <li>User and application interfaces</li>
    </ul>
</div>

<!-- Question 18 -->
<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">
            18. What is the difference between a process and a thread?
        </h2>
    </div>

    <p class="mb-4 text-lg leading-8 text-gray-700">
        A <strong>process</strong> is a running program with its own virtual
        address space and resources.
    </p>

    <p class="text-lg leading-8 text-gray-700">
        A <strong>thread</strong> is an execution unit within a process.
        Threads usually share the process’s memory and resources, but each
        has its own stack and execution state.
    </p>
</div>

<!-- Question 19 -->
<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">
            19. What is deadlock?
        </h2>
    </div>

    <p class="mb-4 text-lg leading-8 text-gray-700">
        Deadlock occurs when tasks cannot proceed because they are waiting
        for resources held by one another.
    </p>

    <p class="mb-3 text-lg leading-8 text-gray-700">
        In the classic resource model, four necessary conditions are:
    </p>

    <ul class="list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Mutual exclusion</li>
        <li>Hold and wait</li>
        <li>No preemption</li>
        <li>Circular wait</li>
    </ul>
</div>

<!-- Question 20 -->
<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">
            20. What is virtual memory?
        </h2>
    </div>

    <p class="mb-4 text-lg leading-8 text-gray-700">
        Virtual memory gives processes virtual address spaces that are mapped
        to physical memory. It supports isolation and flexible memory allocation.
    </p>

    <p class="text-lg leading-8 text-gray-700">
        Some systems can move memory pages between RAM and storage.
        Excessive paging can significantly reduce performance.
    </p>
</div>

<!-- Question 21 -->
<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">
            21. What is a DBMS, and how does it differ from an RDBMS?
        </h2>
    </div>

    <p class="mb-4 text-lg leading-8 text-gray-700">
        A <strong>Database Management System (DBMS)</strong> stores, retrieves,
        and manages data.
    </p>

    <p class="text-lg leading-8 text-gray-700">
        A <strong>Relational DBMS (RDBMS)</strong> is a type of DBMS based on
        the relational model. It represents data in tables and supports
        relationships through keys.
    </p>
</div>

<!-- Question 22 -->
<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">
            22. What are primary and foreign keys?
        </h2>
    </div>

    <p class="mb-4 text-lg leading-8 text-gray-700">
        A <strong>primary key</strong> uniquely identifies a row in a table
        and cannot contain NULL values.
    </p>

    <p class="text-lg leading-8 text-gray-700">
        A <strong>foreign key</strong> references a qualifying key in another
        table or the same table. It helps enforce referential integrity.
    </p>
</div>

<!-- Question 23 -->
<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">
            23. What is database normalization?
        </h2>
    </div>

    <p class="mb-4 text-lg leading-8 text-gray-700">
        Normalization organises relational data to reduce unnecessary duplication
        and prevent insertion, update, and deletion anomalies.
    </p>

    <ul class="list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>
            <strong>1NF:</strong> Values follow the relational model,
            without repeating groups.
        </li>
        <li>
            <strong>2NF:</strong> Meets 1NF and removes partial dependencies
            of non-key attributes on candidate keys.
        </li>
        <li>
            <strong>3NF:</strong> For each non-trivial dependency, the determinant
            is a superkey or the dependent attribute belongs to a candidate key.
        </li>
    </ul>
</div>

<!-- Question 24 -->
<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">
            24. What are ACID properties?
        </h2>
    </div>

    <p class="mb-4 text-lg leading-8 text-gray-700">
        ACID describes important properties of database transactions.
    </p>

    <ul class="list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>
            <strong>Atomicity:</strong> A transaction’s changes complete
            together or are rolled back.
        </li>
        <li>
            <strong>Consistency:</strong> Transactions preserve defined
            database constraints.
        </li>
        <li>
            <strong>Isolation:</strong> Controls how concurrent transactions
            interact and observe changes.
        </li>
        <li>
            <strong>Durability:</strong> Committed changes survive failures
            according to the database’s durability guarantees.
        </li>
    </ul>
</div>

<!-- Question 25 -->
<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">
            25. What is an SQL JOIN?
        </h2>
    </div>

    <p class="mb-4 text-lg leading-8 text-gray-700">
        A JOIN combines rows from related tables using a condition.
        INNER JOIN returns matching combinations. LEFT JOIN also preserves
        unmatched rows from the left table.
    </p>

    <pre class="overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>SELECT
    users.id,
    users.name,
    orders.amount
FROM users
INNER JOIN orders
    ON users.id = orders.user_id;</code></pre>
</div>

<!-- Question 26 -->
<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">
            26. What is a database index?
        </h2>
    </div>

    <p class="mb-4 text-lg leading-8 text-gray-700">
        An index is an additional data structure that helps the database
        locate records efficiently for suitable queries.
    </p>

    <p class="text-lg leading-8 text-gray-700">
        Indexes can improve retrieval, but they require storage and maintenance
        during writes. Choose indexes based on query patterns and execution plans.
    </p>
</div>

<!-- Question 27 -->
<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">
            27. What is the difference between TCP and UDP?
        </h2>
    </div>

    <p class="mb-4 text-lg leading-8 text-gray-700">
        <strong>TCP</strong> provides a connection-oriented, reliable,
        ordered byte stream with flow and congestion control.
    </p>

    <p class="text-lg leading-8 text-gray-700">
        <strong>UDP</strong> sends independent datagrams without built-in
        delivery or ordering guarantees. Applications can add reliability
        when needed.
    </p>
</div>

<!-- Question 28 -->
<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">
            28. What is DNS?
        </h2>
    </div>

    <p class="mb-4 text-lg leading-8 text-gray-700">
        The <strong>Domain Name System (DNS)</strong> is a distributed naming
        system that stores records associated with domain names.
    </p>

    <p class="text-lg leading-8 text-gray-700">
        For example, A and AAAA records help resolve a website’s domain name
        to IPv4 and IPv6 addresses.
    </p>
</div>

<!-- Question 29 -->
<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">
            29. What is the difference between encryption and hashing?
        </h2>
    </div>

    <p class="mb-4 text-lg leading-8 text-gray-700">
        <strong>Encryption</strong> protects data by converting it into ciphertext.
        An authorised party with the correct key can decrypt it.
    </p>

    <p class="mb-4 text-lg leading-8 text-gray-700">
        <strong>Cryptographic hashing</strong> produces a fixed-length digest
        and is not designed to be reversed. Hashes can still be attacked
        by guessing possible inputs.
    </p>

    <p class="text-lg leading-8 text-gray-700">
        Passwords should use a dedicated password-hashing algorithm,
        such as Argon2id or bcrypt, rather than reversible encryption.
    </p>
</div>

<!-- Question 30 -->
<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">
            30. What is the difference between authentication and authorization?
        </h2>
    </div>

    <p class="mb-4 text-lg leading-8 text-gray-700">
        <strong>Authentication</strong> verifies identity.
        For example, a user logs in using a password and a second factor.
    </p>

    <p class="text-lg leading-8 text-gray-700">
        <strong>Authorization</strong> determines permitted actions.
        For example, a logged-in employee may view assigned leads,
        while an administrator may manage assignments.
    </p>
</div>














  

</div>


</section>
  
 

 </div>
 
<br>
<div class="clear nextprev">
<a class="left btn" href="{{url('interviews/extjs-interview-question-answer')}}">&#10094; Previous</a>
<a class="right btn" href="{{url('interviews/php-interview-question-answer')}}">Next &#10095;</a>
</div>
</div>
 
</div>
   
  @endsection