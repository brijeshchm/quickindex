@extends('interview.layouts.app')
@section('title')
Mysql Interview Questions & Answers
@endsection  
@section('description'),  
Prepare for your next interview with MySQL interview questions and answers covering joins, indexes, queries, normalization, transactions, and optimization.
@endsection


@section('content')	 
 
 

<div class='main light-grey' id='belowtopnav' style='margin-left:220px;'>
  <div class='row white'>
    <div class='col l11 m12' id='main'>
       
<h1>MySql<span class="color_h1"> Interview Question & Answer</span></h1>
<div class="clear nextprev">
<a class="left btn" href="{{url('interviews/php-interview-question-answer')}}">&#10094; Previous</a>
<a class="right btn" href="{{url('interviews/technical-logic-question-answer')}}">Next &#10095;</a>
</div>
<hr>
<div class="light">
 
 
 <section id="services-section" class="py-12 bg-gray-100"><div class="container mx-auto px-4">
  
  <div class="mb-12">
    <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is Mysql?</h2>
  </div>
  <p class="text-lg text-gray-700">MySQL is a widely used relational database management system (RDBMS).</p><p class="text-lg text-gray-700">MySQL is free and open-source.</p><p>SQL-based: Uses Structured Query Language (SQL) to manage and manipulate data.</p><p>MySQL was first released in 1995</p><p>MySQL was founded by Michael "Monty" Widenius, along with David Axmark and Allan Larsson</p></div>
  
  <div class="mb-12">
    <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Type of SQl Commands?</h2>
  </div
  >
  <p class="text-lg text-gray-700">A <strong>Data Definition Language(DDL)</strong> Commands like create, alter and drop to define database structure. </p><p class="text-lg text-gray-700"><strong>Data Manipulation Language(DML)</strong>Commands like select, insert,update and delete for data operatioins</p><p class="text-lg text-gray-700"><strong>Data Control Language(DCL)</strong> <span class="shadow-lg p-2">Commands like grant and revoke to manage permissions</span></p><p class="text-lg text-gray-700"><strong>Transaction control language(TCL)</strong> Commands like commit , rollback and savepoint to maange transaction.</p>

  </div>
  
  <div class="mb-12">
  <div class="question">    
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How is DATE different from DATETIME in MySQL? </h2>
  </div>
  <p class="text-lg text-gray-700">The DATE function in MySQL stores the date in year, month, and day format: YYYY-MM-DD </p><p>However, the DATETIME function stores the date with the time, and it looks like this: YYYY-MM-DD HH:MM:SS</p></div>
  
  <div class="mb-12">
  <div class="question">    
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What are the differences between INNER JOIN, LEFT JOIN, RIGHT JOIN, and FULL JOIN?</h2>
  </div>
  <p class="text-lg text-gray-700"><strong>INNER JOIN:</strong> Returns rows where there is a match in both tables.</p><p class="text-lg text-gray-700"><strong>LEFT JOIN:</strong> Returns all rows from the left table and matching rows from the right table. If there’s no match, NULL is returned for the right table's columns.</p><p class="text-lg text-gray-700"><strong>RIGHT JOIN:</strong> Similar to LEFT JOIN, it returns all rows from the right table and matching rows from the left.</p><p class="text-lg text-gray-700"><strong>FULL JOIN:</strong> Combines the LEFT JOIN and RIGHT JOIN results, including unmatched rows from both tables.</p><p class="text-lg text-gray-700"><strong>Self JOIN:</strong>Self join is a join in which a table is joined with itself.</p><code>Select a.column1,b.column2 from table_name a join table_name b on a.column= b.column </code></div>
  
  <div class="mb-12">
  <div class="question">    
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between DELETE, TRUNCATE, and DROP in MySQL?</h2>
  </div>
  <p class="text-lg text-gray-700"><strong>DELETE:</strong> Removes rows from a table based on a condition. It can be rolled back if inside a transaction.</p><p class="text-lg text-gray-700"><strong>TRUNCATE:</strong> Deletes all rows from a table, but the table structure remains intact. It is faster than DELETE and cannot be rolled back.</p><p class="text-lg text-gray-700"><strong>DROP:</strong> Completely removes the table structure and data, along with any dependencies like indexes.</p></div>
  
  <div class="mb-12">
      <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is a subquery in MySQL?</h2>
  </div>
  <p class="text-lg text-gray-700">A subquery (also known as a nested query) is nested inside another query.</p><p class="text-lg text-gray-700">SELECT first_name, last_name, salary</p>
  
  <code> FROM employees WHERE salary &gt; ( SELECT AVG(salary) FROM employees );</code></div>
  
  <div class="mb-12">
  <div class="question">    
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is a view in MySQL? </h2>
  </div>
  <p class="text-lg text-gray-700">A view is a saved query that works like a virtual table.</p><p class="text-lg text-gray-700">you can treat a view like regular table in select, inset, update and delete.</p><p class="text-lg text-gray-700">Create view view_name as select column1, column2, from table_name where condition and drop view view_name</p><code> CREATE VIEW employee_details AS SELECT e.id, e.name, d.department_name,  
  FROM employees e JOIN departments d ON e.department_id = d.department_id;</code> </div>
  
  <div class="mb-12">
  <div class="question">    
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is a trigger in MySQL? </h2>
  </div>
  <p class="text-lg text-gray-700">a trigger is a set of actions that run when a database event occurs. Triggers can be configured to execute before or after events like INSERT, UPDATE, or DELETE.</p><code> CREATE TRIGGER after_order_insert <br>
  {BEFORE|AFTER(INSERT|UPDATE|DELETE)} INSERT ON orders FOR EACH  ROW <br>
  BEGIN 
  <br>
  INSERT INTO order_history (order_id, action, timestamp) VALUES (NEW.order_id, 'inserted', NOW()); <br>END;</code></div>
  


  
  <div class="mb-12">
  <div class="question">    
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What are transactions in MySQL?</h2>
  </div>
  <p class="text-lg text-gray-700">A transaction is a sequence of operations performed as a single unit. It follows the ACID properties.</p> 

<code>
  START TRANSACTION;<br>
UPDATE accounts SET balance = balance - 500 WHERE id = 1;<br>
UPDATE accounts SET balance = balance + 500 WHERE id = 2;<br>
COMMIT;<br>
</code>
</div>
  
  
  <div class="mb-12">
  <div class="question">    
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you optimize a slow query in MySQL??</h2>
  </div>
  <p class="text-lg text-gray-700">Use EXPLAIN to analyze the query.</p> 
  <p class="text-lg text-gray-700">Use Add appropriate indexes.</p> 
  <p class="text-lg text-gray-700">Avoid SELECT *, Remove unnecessary join, remove unnecessary database connection need of, use limit when possible.</p> 
  <p>Avoid subqueries when possible, Normalize the database</p>
  <p>some data store in locatization store local</p>
  <p>Fetch data need of</p>

 
</div>
  



  <div class="mb-12">
  <div class="question">    
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is store engine in database? </h2>
  </div>
  <p class="text-lg text-gray-700">A<strong> storage engine </strong> (also called a table type) is the <strong>software component of a database</strong> that handles how data is<strong>stored, managed, and retrieved</strong>  at the physical level..</p><p class="text-lg text-gray-700"><strong> Common Storage Engines in MySQL:</strong></p><p class="text-lg text-gray-700"><strong>InnoDB:</strong>Default engine, supports transactions, row-level locking, foreign keys, and crash recovery.</p><p>it supports foreign key constraints for relational integrity</p><p><strong>ACID Compliance</strong> Ensure Atomicity, consistency, Isolation, and Durability </p><p class="text-lg text-gray-700"><strong>MyiSAM:</strong> it is doesnot support transaction meaning it does not have rollback capability.</p><p class="text-lg text-gray-700"><strong>MEMORY:</strong> Stores data in RAM for fast access. Volatile (data lost after restart).</p><p class="text-lg text-gray-700"><strong>CSV:</strong> Stores data in comma-separated text files. Simple but not efficient for large data..</p><p class="text-lg text-gray-700"><strong>ARCHIVE:</strong> Good for storing large historical data with high compression. No indexes.</p><p class="text-lg text-gray-700"><strong>BLACKHOLE:</strong> Accepts data but does not store it (used for replication or testing).</p></div>
  
  <div class="mb-12">
  <div class="question">    
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4"> What are the ACID properties in MySQL? </h2>
  </div>
  <p class="text-lg text-gray-700"><strong>Atomicity </strong> The transfer is an all-or-nothing operation. If $100 is deducted from Account A, the same $100 will be added to Account B, or nothing happens (if a failure occurs).</p>
  <p class="text-lg text-gray-700"><strong>Consistency </strong> After the transaction, both accounts must reflect the correct balance according to the rules of the system. The balances must not go negative (if not allowed), and all business rules must be respected.</p>
  <p class="text-lg text-gray-700"><strong>Isolation </strong> If another transaction tries to read or modify the same accounts while the first one is in progress, the second transaction must either wait or operate on a snapshot of the data to avoid inconsistencies. The changes from the first transaction are invisible to the second until it is completed.</p>
  <p class="text-lg text-gray-700"><strong>Durability </strong> After the transfer is committed, even if the database crashes, the changes to the account balances will be recovered and will not be lost.</p>   
    <div class="example">
 
<div class="code"> 

</div></div>

  </div>

    
  
  <div class="mb-12">
  <div class="question">    
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is Store Procedure in database? </h2>
  </div>
  <p class="text-lg text-gray-700">A<strong> Stored Procedure </strong> is a predefined set of SQL statements that are stored in the database and can be executed (called) repeatedly. It is like a function in programming and To improve performance</p>
  
  <p class="text-lg text-gray-700">
      <div class="example">
 
<div class="code"> 
  <strong> Syntax (MySQL Example):</strong></p><code>
    DELIMITER // <br>
    CREATE PROCEDURE getUsers() <br>
    BEGIN <br>
    SELECT * FROM users; <br>
    END <br>
    // DELIMITER ;<br>    
    CALL getUsers();</code>
  </div>
  </div>
  </div>


  
  <div class="mb-12">
    <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is an Index in a Database? </h2>
  </div>
  
  <p class="text-lg text-gray-700"><strong>Index</strong> Indexes are used to retrive data from the database very fast. the use cannot see the indexes , they are just used to speed up searches query.</p><p class="text-lg text-gray-700">An index in a database is a data structure that improves the speed of data retrieval operations on a table.</p><p>To increase query performance, especially with large tables.</p><p>To speed up searches, sorting, filtering, and JOIN operations.</p><p>To enforce constraints like UNIQUE.</p><p class="text-lg text-gray-700"><strong>Types of Indexes:</strong>.</p><ul><li><p class="text-lg text-gray-700"><strong>Primary Index:</strong> Automatically created on the primary key column, and Ensures uniqueness.</p>
<div class="example"> 
<div class="code"> 
  <code>CREATE TABLE users ( id INT PRIMARY KEY, name VARCHAR(100) );</code>

</div></div>
</li><li><p class="text-lg text-gray-700"><strong>Unique Index:</strong> nsures all values in the column are unique (no duplicates).</p>
<div class="example"> 
<div class="code"> 
<code>CREATE UNIQUE INDEX idx_email ON users(email);</code>
</div></div>
</li><li><p class="text-lg text-gray-700"><strong> Composite (Multi-column) Index:</strong> An index on two or more columns.</p>
<div class="example"> 
<div class="code"> 
<code>CREATE INDEX idx_name_email ON users(name, email);</code>
</div></div>
</li><li><p class="text-lg text-gray-700"><strong>Full-Text Index:</strong>Used for searching text, like articles, blogs, etc.</p>
<div class="example"> 
<div class="code"> 
<code> CREATE FULLTEXT INDEX idx_content ON posts(content);</code>
</div></div>
</li><li><p class="text-lg text-gray-700"><strong>Spatial Index:</strong> Used for geographic data (e.g., maps, coordinates).</p><p>Available in spatial databases like MySQL with GIS support.</p>
<div class="example"> 
<div class="code"> 
<code>
  
CREATE FULLTEXT INDEX idx_content ON posts(content);</code>
</div></div>
</li></ul></div>
  
  <div class="mb-12">
    <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is SQL Injection? </h2>
  </div>
  <p class="text-lg text-gray-700">SQL Injection occurs when an attacker inserts malicious SQL into user input.</p>
  
  <p class="mt-3 text-lg leading-8 text-gray-700">Prevention:</p>
<ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700"><li>Use prepared statements.</li><li>Use parameter binding.</li><li>Validate user inputs.</li><li>Avoid directly concatenating user input into SQL queries.</li><li>Use database accounts with minimum required permissions.</li></ol>


  <p class="text-lg text-gray-700"><strong>Unsafe</strong></strong></p>
  
  <div class="example"> 
<div class="code"> 
  <code>$email = $_POST['email'];

$sql = "SELECT * FROM users WHERE email = '$email'";</code>
  
  </div></div>
  <p class="text-lg text-gray-700"><strong>SQL Injection</strong>  is a security vulnerability that allows an attacker to interfere with the SQL queries your application sends to the database.</p><p class="text-lg text-gray-700">  <strong> Use Prepared Statements / Parameterized Queries</strong></p>
  
  <div class="example"> 
<div class="code"> 
  <code>$stmt = $conn-&gt;prepare("SELECT * FROM users WHERE username = ? AND password = ?"); <br>
    
  $stmt-&gt;bind_param("ss", $username, $password); <br>
  $stmt-&gt;execute();</code>
<p class="text-lg text-gray-700"><strong>In Laravel, use Eloquent/query builder rather than concatenating SQL:</strong> </p>
  <code>$user = User::where('email', $email)->first();</code>
  
  </div></div>

  <p class="text-lg text-gray-700"> <strong>Unauthorized access</strong> to sensitive data (like passwords, credit card numbers) </p><p>Bypassing login authentication</p><p>Modifying or deleting data</p><p>Taking full control of the database server</p><p class="text-lg text-gray-700">SQL injection is a code injection technique that might destroy your database.</p><p class="text-lg text-gray-700">SQL Injection is one of the most common web hacking technique get request string ('userid').</p><p class="text-lg text-gray-700">THe sql above is valid and will return all rows from the user table since or 1=1 is always true.</p></div>
  
 
  
  
  <div class="mb-12">
    <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is an alter table in a Database? </h2>
  </div>
  <p class="text-lg text-gray-700"><strong>Alter Table</strong> statment is used to add, delete or modify columns in an existing table.</p><p class="text-lg text-gray-700">Alter table table_name <strong>add</strong> colomn varchar(255).</p><p class="text-lg text-gray-700">Alter table table_name <strong>Drop</strong> colomn varchar(255).</p><p class="text-lg text-gray-700">Alter table table_name <strong>rename</strong> colomn varchar(255).</p></div>
  
  <div class="mb-12">
    <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Common separate value find in sql? </h2>
  </div>
  <p class="text-lg text-gray-700"><strong> Group_concat</strong>group_concat(product_name order by product_name form orders group by order_id).</p></div>
  
  <div class="mb-12">
    <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is Unique, Primary key, not null, foreign key? </h2>
  </div>
  <p class="text-lg text-gray-700"><strong> Not null</strong> column cannot have a null value , no value.</p><p class="text-lg text-gray-700"><strong>Uniqu</strong> All value in a column are defferent.</p><p class="text-lg text-gray-700"><strong>Primary key</strong> Uniquely identifies each row in table and combination of not null and unique.</p><p class="text-lg text-gray-700"><strong>Foreign Key:</strong> When the foreign key creat other table is primary key.</p></div>
  
  <div class="mb-12">
    <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is DeadLock? </h2>
  </div>
  <p class="text-lg text-gray-700"><strong>Dead Lock</strong> in a database happens when two or more transaction are waiting on each other to release lock , evething get stuck consistant locking order.</p>

<ul>
  Let's say we have Process A and Process B, and they both want to access Resource X and Resource Y.
<li>
Person A picks up Pen X and waits for Pen Y.</li>
<li> 
Person B picks up Pen Y and waits for Pen X.</li>
<li> 
Now, A wants Y, and B wants X.</li>
<li> 
Both are waiting on each other — forever.</li>
<li> 
Result: Deadlock.</li>
</ul>
</div>




<div class="mb-12">
  <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Update field name female to F and male to M and other mail = "" and namuber=0 </h2>
  </div>
  
   <div class="example"> 
<div class="code">
 
<code> 
UPDATE your_table_name<br>
SET<br>
    gender = CASE<br>
        WHEN gender = 'female' THEN 'F'<br>
        WHEN gender = 'male' THEN 'M'<br>
        ELSE gender<br>
    END,<br>
    mail = ""<br>
    namuber = 1; <br>
</pre>
</code>
</div>
</div>
</div>



<div class="mb-12">
  <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">XSS — Cross-Site Scripting </h2>

  </div>
  
   <div class="example"> 
    <p>XSS occurs when an attacker injects JavaScript into a webpage.</p> 
<div class="code">
 <p><strong>Unsafe</strong></p>
<code> 
echo $_GET['name'];<br>
 
 
</code>
</div>
<div class="code">
 <p><strong>Safe</strong></p>
<code> 
echo htmlspecialchars(<br>
    $_GET['name'],<br>
    ENT_QUOTES,<br>
    'UTF-8'<br>
);<br>
 
 
</code>
</div>
</div>
</div>



<div class="mb-12">
  <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is Normalization in DBMS?</h2>
  </div>
  <p>Normalization is the process of organizing data in a database to:</p>
  <p>Reduce data redundancy (repeating data)</p>
  <p>Improve data integrity</p>
  <p>Ensure efficient storage and retrieval</p>

      <p class="text-lg text-gray-700"><strong>1NF</strong> Remove duplicate comuns and use atomic (indivisible) values.</p>
      <p class="text-lg text-gray-700"><strong>2NF</strong> Remove partial dependencies (non-key fields must depend on whole key).</p>
      <p class="text-lg text-gray-700"><strong>3NF</strong> Remove transitive dependencies (non-key fields should not depend on other non-key fields).</p>
       <p class="text-lg text-gray-700"><strong>BCNF</strong> Strengthens 3NF by ensuring that all non-trivial dependencies are on superkeys.</p>
</div>




<div class="mb-12">
  <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is sql thread?</h2>
  </div>
  <p>SQL thread same as database systems, a SQL thread usually refers to a server-side execution thread that is handling an SQL query or task. Most commonly, the term is used in replication or multi-threaded operations.</p>
  <p>In Mysql : SHOW PROCESSLIST</p>
  <p>In Postgre SQL : select * from pg_stat_activity</p>
 

 
</div>

<div class="mb-12">
  <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Write Max Salary and second max salary in mysql?</h2>
  </div>
  <p><strong>Max Salary</strong> 
  <div class="example"> 
<div class="code"> 
  <code> Select Max(salary) from table_name order by salary desc limit 1</code>

</div></div>
</p>
   <p><strong>Socond Salary</strong> 
   <div class="example"> 
<div class="code"> 
   <code> Select salary from table_name order by salary desc limit 1 OFFSET 1</code>
  </div></div>
  </p>
 
   <p><strong>Third Salary</strong> 
   <div class="example"> 
<div class="code"> 
   <code> Select salary from table_name order by salary desc limit 1 OFFSET 2</code>
  </div></div>
  </p>
OR
    <p><strong>Third Salary</strong> 
    <div class="example"> 
<div class="code"> 
    <code> Select max(salary) as third_highest_salary from table_name <br>
    where salary < ( select max(salary) from table_name <br>
    where salary < (select max(salary) from table_name))</code>
</div></div>
  </p>
</div>


 


<div class="mb-12">
  <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Write query who user amount greater than 5000rs?</h2>
  </div>
  <p> 
    <div class="example"> 
<div class="code"> 
      <code> Select user.name from user join order on users.id= order.user_id where order.amount > 5000</code>
    
    </div></div>
    </p>
</div>

<div class="mb-12">
  <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Write query if get user name,total order amount greated than 5000 and find amount last six months?</h2>
  </div>
  <p> 
    <div class="example"> 
<div class="code"> 
      <code> Select user.name sum(order.amount) as total_order from users join order on users.id= orders.user_id group by users.name  having total_order>5000 and order.created > date_sub(now(), interval 6 months)</code>
    </div></div>
    </p>
</div>



<div class="mb-12">
  <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between WHERE and HAVING?</h2>
  </div>
  <p> <strong>WHERE</strong> filters rows before aggregation..</p>
    <p> <strong>HAVING</strong> filters groups after aggregation.</p>
    <div class="example"> 
<div class="code"> 
    <code>
      SELECT department, COUNT(*) <br>
FROM employees <br>
GROUP BY department <br>
HAVING COUNT(*) > 5;</code>
     
</div>
</div>
</div>



<div class="mb-12">
  <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between CHAR and VARCHAR</h2>
  </div>
  <p> <strong>CHAR</strong> datatype is used to store character strings of fixed length</p>
  <p>CHAR stands for "Character"</p>
  <p>CHAR takes 1 byte for each character</p>
  <p>Uses a fixed memory space (for example, CHAR(10) if I store 3 bytes. That means 7 bytes of memory is wasted. </p>
  <p>Can waste space if data is shorter than the specified length.</p>
    <p> <strong>VARCHAR</strong> Variable length. Reserves only required space.</p>
    <p>Uses only the amount of storage needed for the actual string.</p>
    <p>ARCHAR(10) stores up to 10 characters but uses only as much space as required..</p>
   
     
</div>

<div class="mb-12">
  <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between primary key and unique constraints?</h2>
  </div>
  <table border="2px">
    <thead><tr><th><strong>Aspect</strong></th><th><strong>Primary Key</strong></th><th><strong>Unique Key</strong></th></tr></thead>
    <tbody>
      <tr><td><strong>Uniqueness</strong></td><td>Ensures uniqueness for the column(s).</td><td>Ensures uniqueness for the column(s).</td></tr>
      <tr><td><strong>Nullability</strong></td><td>Cannot accept <code>NULL</code> values.</td><td>Can accept <code>NULL</code> values.</td></tr>
      <tr><td><strong>Number per Table</strong></td><td>A table can only have <strong>one</strong> primary key.</td><td>A table can have <strong>multiple</strong> unique keys.</td></tr>
      <tr><td><strong>Example</strong></td><td><code>EmployeeID INT PRIMARY KEY</code></td><td><code>Email VARCHAR(100) UNIQUE</code></td></tr>
  
  </tbody></table>
     
</div>



<div class="mb-12">
  <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between TRUNCATE and DROP statements?</h2>
  </div>
  <table border="2px"><thead><tr><th style="text-align: center;">DROP</th><th style="text-align: center;">TRUNCATE</th></tr></thead><tbody><tr><td>The DROP command is used to remove the table definition and its contents.</td><td>Whereas the TRUNCATE command is used to delete all the rows from the table.</td></tr><tr><td>In the DROP command, table space is freed from memory.</td><td>While the TRUNCATE command does not free the table space from memory.</td></tr><tr><td>DROP is a DDL(Data Definition Language) command.</td><td>Whereas the TRUNCATE is also a DDL(Data Definition Language) command.</td></tr><tr><td>In the DROP command, a view of the table does not exist.</td><td>While in this command, a view of the table exists.</td></tr><tr><td>In the DROP command, integrity constraints will be removed.</td><td>While in this command, integrity constraints will not be removed.</td></tr><tr><td>In the DROP command, undo space is not used.</td><td>While in this command, undo space is used but less than DELETE.</td></tr><tr><td>The DROP command is quick to perform but gives rise to complications.</td><td>While this command is faster than DROP.</td></tr></tbody></table>
     
</div>






<div class="mb-12">
  <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Write a Queue in MySQL?</h2>
  </div>
  <p> <strong>Queue</strong> Queue is not a build in feature but can be implement using standard database operations like inserting, updating and selecting data.</p>
    <p> <strong>Queue</strong> are processed in a First in first out (FIFO) feature.</p>
    <p> <strong>Queue</strong> feture  are use sending email, prossing updated.</p>
  <p> 
    <div class="example"> 
<div class="code"> 
      <code>

      create table job_queue (<br>
        id int auto_increment primary ky,<br>
        task_name varchar (255) not null,<br>
        status enum('pending','processing','completed','faild'),<br>
        created_at timestamp default current_timestamp,<br>
        updated_at timestamp default current_timestamp,<br>
      
      )
      </code>
    </div></div>
    </p>
</div>

<div class="mb-12">
  <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">write query second table not exist record MySQL?</h2>
  </div>
  <p>
    <div class="example"> 
<div class="code"> 
      <code>
      Select table1.* from table1 where table1.id not in (select table2.id form table2)
      </code>
      </div></div>
    </p>
</div>


<div class="mb-12">
  <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How to one increase sttaus not in table2?</h2>
  </div>
  <p>
     <strong>
      table1<br>
     id name status<br>
     1   a     2 <br>
     2   b     0 <br>
     3   c     1 <br>
     4   d     4 <br>
     5   e     6 <br>
     6   f     9 <br>
     table2<br>
     id user_id<br>
     1     4<br>
     2     3<br>
      </strong>
      <div class="example"> 
<div class="code"> 
      <code>
      Update table1 set status = status +1 where id not in (select id from table2)
      </code>
      </div></div>
    </p>
</div>


<div class="mb-12">
  <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Difference between Commit and Rollback commands?</h2>
  </div>
  <table border="2px"><thead><tr><th style="text-align: center;">COMMIT</th><th style="text-align: center;">ROLLBACK</th></tr></thead><tbody><tr><td>COMMIT permanently saves the changes made by the current transaction.</td><td>ROLLBACK undo the changes made by the current transaction.</td></tr><tr><td>The transaction can not undo changes after COMMIT execution.</td><td>Transaction reaches its previous state after ROLLBACK.</td></tr><tr><td>When the transaction is successful, COMMIT is applied.</td><td>When the transaction is aborted, ROLLBACK occurs.</td></tr></tbody></table>
     
</div>


<div class="mb-12">
  <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How to select query not in table2 ?</h2>
  </div>
  <p>
     <strong>
      user<br>
     id name status<br>
     1   a     2 <br>
     2   b     0 <br>
     3   c     1 <br>
     4   d     4 <br>
     5   e     6 <br>
     6   f     9 <br>
     table2<br>
     id user_id<br>
     1    4,5<br>
     2     3,2<br>
     3     6<br>
      </strong>
      <div class="example"> 
<div class="code"> 
      <code>
      Select a.id, a.name, from user not find_in_set(a.id, (select id from table where id=1))
      </code>
      </div></div>
    </p>
</div>


<div class="mb-12">
  <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How to create table dynamics in sql?</h2>
  </div>
  <p>
      <div class="example"> 
<div class="code"> 
      <code>
      schema::create('table_name', function(Blueprint $table){<br>

        $table->increments('id');<br>
        $table->varchar('name',255)->nullable();<br>
        $table->varchar('email',255)->nullable();<br>
        $table->string('mobile');<br>
        $table->tinyInterger('demo_attended');<br>
        $table->text('remarks');<br>
        $table->timestamp('deleted_at')->nullable();<br>
      });<br>
      </code>
      </div></div>
    </p>
</div>



<div class="mb-12">
    <div class="question">
        <h2 class="mb-4 mt-5 text-3xl font-bold text-blue-700">How do you optimize a slow PHP application?</h2>
    </div>
<p class="mt-3 text-lg leading-8 text-gray-700">I follow these approaches to improve application performance:</p>
<ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700"><li>Optimize MySQL queries.</li><li>Add indexes to frequently searched columns.</li><li>Avoid unnecessary database queries.</li><li>Use caching such as Redis.</li><li>Optimize images and static assets.</li><li>Use pagination for large datasets.</li><li>Use PHP OPcache.</li><li>Implement lazy loading where appropriate.</li><li>Analyze application performance using profiling tools.</li></ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mb-4 mt-5 text-3xl font-bold text-blue-700">How do you handle 1 lakh records in PHP?</h2>
    </div>
<p class="mt-3 text-lg leading-8 text-gray-700">I avoid loading all records into memory at once. I use pagination, batch processing, generators or database cursors.</p>
<p class="mt-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>$limit = 1000;
$offset = 0;

do {
    $stmt = $pdo-&gt;prepare(
        &quot;SELECT * FROM users LIMIT ? OFFSET ?&quot;
    );

    $stmt-&gt;bindValue(1, $limit, PDO::PARAM_INT);
    $stmt-&gt;bindValue(2, $offset, PDO::PARAM_INT);

    $stmt-&gt;execute();

    $users = $stmt-&gt;fetchAll(PDO::FETCH_ASSOC);

    foreach ($users as $user) {
        // Process each user
    }

    $offset += $limit;

} while (count($users) === $limit);</code></pre>
<p class="mt-3 text-lg leading-8 text-gray-700">For large datasets, keyset pagination or chunk processing can be more efficient than large OFFSET values.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mb-4 mt-5 text-3xl font-bold text-blue-700">How do you prevent duplicate form submissions?</h2>
    </div>
<p class="mt-3 text-lg leading-8 text-gray-700">I use multiple approaches:</p>
<ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700"><li>Disable the submit button after clicking.</li><li>Validate requests on the server.</li><li>Use database unique constraints.</li><li>Implement idempotency keys for payment APIs.</li><li>Use database transactions when necessary.</li></ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mb-4 mt-5 text-3xl font-bold text-blue-700">How do you upload an image securely in PHP?</h2>
    </div>
<ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700"><li>Validate file size.</li><li>Validate MIME type and extension.</li><li>Generate a unique filename.</li><li>Store uploaded files outside the public directory when appropriate.</li><li>Never trust the original filename.</li><li>Restrict executable file uploads.</li></ol>
<pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>if ($_SERVER[&#x27;REQUEST_METHOD&#x27;] === &#x27;POST&#x27;) {

    $file = $_FILES[&#x27;image&#x27;];

    $allowed = [&#x27;image/jpeg&#x27;, &#x27;image/png&#x27;];

    $mime = mime_content_type($file[&#x27;tmp_name&#x27;]);

    if (
        in_array($mime, $allowed, true) &amp;&amp;
        $file[&#x27;size&#x27;] &lt;= 2 * 1024 * 1024
    ) {
        $filename = bin2hex(random_bytes(16)) . &#x27;.jpg&#x27;;

        move_uploaded_file(
            $file[&#x27;tmp_name&#x27;],
            &#x27;uploads/&#x27; . $filename
        );
    }
}</code></pre>
<p class="mt-3 text-lg leading-8 text-gray-700">In production, also verify the actual image contents and use the correct extension for the detected image type.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mb-4 mt-5 text-3xl font-bold text-blue-700">How do you implement pagination in PHP?</h2>
    </div>
<p class="mt-3 text-lg leading-8 text-gray-700">Pagination divides large datasets into smaller pages.</p>
<pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>$page = max(1, (int)($_GET[&#x27;page&#x27;] ?? 1));

$limit = 10;

$offset = ($page - 1) * $limit;

$stmt = $pdo-&gt;prepare(
    &quot;SELECT * FROM users LIMIT :limit OFFSET :offset&quot;
);

$stmt-&gt;bindValue(&#x27;:limit&#x27;, $limit, PDO::PARAM_INT);
$stmt-&gt;bindValue(&#x27;:offset&#x27;, $offset, PDO::PARAM_INT);

$stmt-&gt;execute();

$users = $stmt-&gt;fetchAll(PDO::FETCH_ASSOC);</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mb-4 mt-5 text-3xl font-bold text-blue-700">What is the difference between synchronous and asynchronous programming?</h2>
    </div>
<p class="mt-3 text-lg leading-8 text-gray-700">Synchronous: Operations execute one after another. The next operation waits for the previous operation to finish.</p>
<p class="mt-3 text-lg leading-8 text-gray-700">Asynchronous: An operation can be initiated without blocking the entire execution flow while waiting for its completion.</p>
<p class="mt-3 text-lg leading-8 text-gray-700">PHP supports asynchronous programming through mechanisms such as event loops, ReactPHP, Amp and asynchronous workers.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mb-4 mt-5 text-3xl font-bold text-blue-700">How do you handle errors in a production PHP application?</h2>
    </div>
<ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700"><li>Disable displaying errors to users.</li><li>Enable error logging.</li><li>Use exception handling.</li><li>Monitor application logs.</li><li>Return appropriate HTTP status codes.</li><li>Avoid exposing database credentials and stack traces.</li></ul>
<pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>ini_set(&#x27;display_errors&#x27;, &#x27;0&#x27;);
ini_set(&#x27;log_errors&#x27;, &#x27;1&#x27;);

error_log(&quot;Something went wrong&quot;);</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mb-4 mt-5 text-3xl font-bold text-blue-700">What is an index in MySQL?</h2>
    </div>
<p class="mt-3 text-lg leading-8 text-gray-700">An index is a database structure that improves data retrieval speed by reducing the number of rows that must be examined.</p>
<p class="mt-3 text-lg leading-8 text-gray-700">Types:</p>
<ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700"><li>Primary Index</li><li>Unique Index</li><li>Composite Index</li><li>Full-text Index</li><li>Normal Index</li></ul>
<pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>CREATE INDEX idx_email ON users(email);</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mb-4 mt-5 text-3xl font-bold text-blue-700">What is the difference between DELETE, TRUNCATE and DROP?</h2>
    </div>
<div class="my-4 overflow-x-auto"><table class="w-full border-collapse text-left text-sm"><thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">DELETE</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">TRUNCATE</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">DROP</th></tr></thead><tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Deletes selected rows or all rows</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Removes all rows</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Removes entire table</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Supports WHERE</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Does not support WHERE</td><td class="border border-slate-200 px-4 py-3 text-gray-700">No WHERE</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">DML statement</td><td class="border border-slate-200 px-4 py-3 text-gray-700">DDL statement in MySQL</td><td class="border border-slate-200 px-4 py-3 text-gray-700">DDL statement</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Can use row-level conditions</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Resets auto-increment in MySQL</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Removes table structure</td></tr></tbody></table></div>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mb-4 mt-5 text-3xl font-bold text-blue-700">What is a JOIN in MySQL?</h2>
    </div>
<p class="mt-3 text-lg leading-8 text-gray-700">JOIN is used to retrieve related data from multiple tables based on a common column.</p>
<p class="mt-3 text-lg leading-8 text-gray-700">Types:</p>
<ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700"><li>INNER JOIN</li><li>LEFT JOIN</li><li>RIGHT JOIN</li><li>CROSS JOIN</li><li>SELF JOIN</li></ol>
<p class="mt-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>SELECT
    users.name,
    orders.amount
FROM users
INNER JOIN orders
    ON users.id = orders.user_id;</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mb-4 mt-5 text-3xl font-bold text-blue-700">What is a stored procedure?</h2>
    </div>
<p class="mt-3 text-lg leading-8 text-gray-700">A stored procedure is a group of SQL statements saved in the database and executed when called.</p>
<p class="mt-3 text-lg leading-8 text-gray-700">Benefits:</p>
<ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700"><li>Reusability.</li><li>Centralized database logic.</li><li>Reduced repeated SQL code.</li><li>Can accept input and output parameters.</li></ul>
<pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>DELIMITER //

CREATE PROCEDURE GetUsers()
BEGIN
    SELECT * FROM users;
END //

DELIMITER ;

CALL GetUsers();</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mb-4 mt-5 text-3xl font-bold text-blue-700">What is the difference between a stored procedure and a function?</h2>
    </div>
<div class="my-4 overflow-x-auto"><table class="w-full border-collapse text-left text-sm"><thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Stored Procedure</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Function</th></tr></thead><tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Created using PROCEDURE</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Created using FUNCTION</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Can return results through result sets and OUT parameters</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Must return a value</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Can be called using CALL</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Can be used in SQL expressions</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Can perform multiple database operations</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Has restrictions on database operations</td></tr></tbody></table></div>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mb-4 mt-5 text-3xl font-bold text-blue-700">What is normalization?</h2>
    </div>
<p class="mt-3 text-lg leading-8 text-gray-700">Normalization is the process of organizing database tables to reduce data duplication and improve data integrity.</p>
<p class="mt-3 text-lg leading-8 text-gray-700">Common normal forms:</p>
<ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700"><li>1NF – Atomic values and no repeating groups.</li><li>2NF – 1NF plus no partial dependency on a candidate key.</li><li>3NF – 2NF plus no transitive dependency on a candidate key.</li><li>BCNF – Every determinant must be a candidate key.</li></ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mb-4 mt-5 text-3xl font-bold text-blue-700">What is a database transaction?</h2>
    </div>
<p class="mt-3 text-lg leading-8 text-gray-700">A transaction is a group of database operations treated as one logical unit.</p>
<p class="mt-3 text-lg leading-8 text-gray-700">It follows ACID properties:</p>
<ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700"><li>Atomicity – All operations succeed or none do.</li><li>Consistency – Data remains valid.</li><li>Isolation – Concurrent transactions are isolated according to the isolation level.</li><li>Durability – Committed changes are persistent.</li></ul>
<pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>START TRANSACTION;

UPDATE accounts
SET balance = balance - 1000
WHERE id = 1;

UPDATE accounts
SET balance = balance + 1000
WHERE id = 2;

COMMIT;</code></pre>
<p class="mt-3 text-lg leading-8 text-gray-700">If an operation fails, use <code class="rounded bg-slate-100 px-1 py-0.5 text-sm text-slate-900">ROLLBACK</code> instead of <code class="rounded bg-slate-100 px-1 py-0.5 text-sm text-slate-900">COMMIT</code>.</p>
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




<!-- Blade partial. SQL examples are escaped display text. -->

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is MySQL?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">MySQL is an open-source Relational Database Management System (RDBMS) used to store, manage and retrieve structured data.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">It uses SQL (Structured Query Language) to communicate with databases.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Features:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Supports relational database structures.</li>
        <li>Supports transactions.</li>
        <li>Supports indexes for faster searching.</li>
        <li>Supports stored procedures and triggers.</li>
        <li>Supports multiple users and concurrent connections.</li>
        <li>Provides security and access control.</li>
        <li>Supports PHP, Laravel, Java, Python and other programming languages.</li>
    </ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between SQL and MySQL?</h2>
    </div>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">SQL</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">MySQL</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Structured Query Language</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Relational Database Management System</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Used to communicate with databases</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Used to store and manage data</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">A query language</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Database software</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Used in multiple database systems</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Supports SQL</td></tr></tbody>
        </table>
    </div>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What are the different types of SQL commands?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">There are five major categories:</p>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Category</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Full Form</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Purpose</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Examples</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">DDL</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Data Definition Language</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Defines database structure</td><td class="border border-slate-200 px-4 py-3 text-gray-700">CREATE, ALTER, DROP, TRUNCATE</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">DML</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Data Manipulation Language</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Modifies records</td><td class="border border-slate-200 px-4 py-3 text-gray-700">INSERT, UPDATE, DELETE</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">DQL</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Data Query Language</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Retrieves records</td><td class="border border-slate-200 px-4 py-3 text-gray-700">SELECT</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">DCL</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Data Control Language</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Controls permissions</td><td class="border border-slate-200 px-4 py-3 text-gray-700">GRANT, REVOKE</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">TCL</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Transaction Control Language</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Manages transactions</td><td class="border border-slate-200 px-4 py-3 text-gray-700">COMMIT, ROLLBACK, SAVEPOINT</td></tr></tbody>
        </table>
    </div>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is a Primary Key?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">A Primary Key uniquely identifies each record in a database table.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Properties:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Must contain unique values.</li>
        <li>Cannot contain NULL values.</li>
        <li>A table can have only one primary key constraint.</li>
        <li>Can consist of one or multiple columns.</li>
    </ul>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100),
    email VARCHAR(150)
);</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is a Foreign Key?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">A Foreign Key is a column or combination of columns that references a primary or unique key in another table.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">It establishes relationships between tables and maintains referential integrity.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>CREATE TABLE orders (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    amount DECIMAL(10,2),

    FOREIGN KEY (user_id)
    REFERENCES users(id)
);</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between Primary Key and Unique Key?</h2>
    </div>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Primary Key</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Unique Key</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Uniquely identifies a record</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Ensures unique values</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Cannot contain NULL</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Can permit NULL values</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Only one primary key constraint</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Multiple unique constraints</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Used as the main record identifier</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Used to enforce additional uniqueness</td></tr></tbody>
        </table>
    </div>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What are the different data types in MySQL?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">MySQL supports several data types.</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Numeric types:</li>
    </ol>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>INT</li>
        <li>BIGINT</li>
        <li>FLOAT</li>
        <li>DOUBLE</li>
        <li>DECIMAL</li>
    </ul>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>String types:</li>
    </ol>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>CHAR</li>
        <li>VARCHAR</li>
        <li>TEXT</li>
        <li>LONGTEXT</li>
        <li>ENUM</li>
    </ul>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Date and time types:</li>
    </ol>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>DATE</li>
        <li>TIME</li>
        <li>DATETIME</li>
        <li>TIMESTAMP</li>
        <li>YEAR</li>
    </ul>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Binary types:</li>
    </ol>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>BLOB</li>
        <li>VARBINARY</li>
        <li>BINARY</li>
    </ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between CHAR and VARCHAR?</h2>
    </div>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">CHAR</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">VARCHAR</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Fixed-length string type</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Variable-length string type</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Pads shorter values to the declared length</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Stores values using their actual length plus length overhead</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Suitable for fixed-size data</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Suitable for variable-size data</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Maximum length 255 characters</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Maximum length 65,535 bytes, subject to row-size and character-set limits</td></tr></tbody>
        </table>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>name CHAR(10);</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">email VARCHAR(255);</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is NULL in MySQL?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">NULL represents a missing or unknown value. It is different from zero, an empty string or false.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Use IS NULL and IS NOT NULL to check it.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>SELECT * FROM users
WHERE email IS NULL;</code></pre>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>SELECT * FROM users
WHERE email IS NOT NULL;</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between WHERE and HAVING?</h2>
    </div>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>WHERE filters individual rows before grouping.</li>
        <li>HAVING filters grouped results after aggregation.</li>
    </ul>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>SELECT department, COUNT(*) AS total
FROM employees
WHERE status = 1
GROUP BY department
HAVING COUNT(*) &gt; 5;</code></pre>
</div>


<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between DELETE, TRUNCATE and DROP?</h2>
    </div>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">DELETE</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">TRUNCATE</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">DROP</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Deletes rows</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Removes all rows</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Removes entire table</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Supports WHERE</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Does not support WHERE</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Does not support WHERE</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">DML</td><td class="border border-slate-200 px-4 py-3 text-gray-700">DDL in MySQL</td><td class="border border-slate-200 px-4 py-3 text-gray-700">DDL</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Table structure remains</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Table structure remains</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Table structure is removed</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Can delete selected records</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Removes all records</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Removes table itself</td></tr></tbody>
        </table>
    </div>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is GROUP BY in MySQL?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">GROUP BY groups rows having the same values in specified columns. It is commonly used with aggregate functions.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>SELECT department, COUNT(*) AS total
FROM employees
GROUP BY department;</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What are aggregate functions in MySQL?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Aggregate functions calculate a single result from multiple rows.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Important aggregate functions:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>COUNT() – Counts records.</li>
        <li>SUM() – Calculates total.</li>
        <li>AVG() – Calculates average.</li>
        <li>MAX() – Finds maximum value.</li>
        <li>MIN() – Finds minimum value.</li>
    </ul>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>SELECT
    COUNT(*) AS total,
    SUM(amount) AS total_amount,
    AVG(amount) AS average_amount,
    MAX(amount) AS maximum_amount,
    MIN(amount) AS minimum_amount
FROM orders;</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is ORDER BY?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">ORDER BY sorts records in ascending or descending order.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>SELECT * FROM employees
ORDER BY salary DESC;</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is DISTINCT?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">DISTINCT removes duplicate rows from query results based on the selected columns.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>SELECT DISTINCT department
FROM employees;</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is LIMIT and OFFSET?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">LIMIT restricts the number of returned records, while OFFSET skips a specified number of records.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>SELECT *
FROM users
ORDER BY id
LIMIT 10 OFFSET 20;</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">This returns 10 records after skipping the first 20.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Write a query to find the second-highest salary.</h2>
    </div>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>SELECT MAX(salary) AS second_highest_salary
FROM employees
WHERE salary &lt; (
    SELECT MAX(salary)
    FROM employees
);</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">This returns the second-highest distinct salary.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Write a query to find duplicate emails.</h2>
    </div>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>SELECT email, COUNT(*) AS total
FROM users
GROUP BY email
HAVING COUNT(*) &gt; 1;</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Write a query to find employees earning more than the average salary.</h2>
    </div>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>SELECT *
FROM employees
WHERE salary &gt; (
    SELECT AVG(salary)
    FROM employees
);</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Write a query to find the highest salary in each department.</h2>
    </div>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>SELECT
    department,
    MAX(salary) AS highest_salary
FROM employees
GROUP BY department;</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Write a query to find the last six months of orders.</h2>
    </div>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>SELECT *
FROM orders
WHERE created_at &gt;= CURRENT_DATE - INTERVAL 6 MONTH
  AND created_at &lt; CURRENT_DATE + INTERVAL 1 DAY;</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">This includes the current date. For an exact rolling six-month timestamp window, use NOW() - INTERVAL 6 MONTH.</p>
</div>


<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is JOIN in MySQL?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">JOIN is used to retrieve related data from two or more tables based on a common column.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">There are five commonly discussed JOIN types.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What are the different types of JOIN?</h2>
    </div>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>INNER JOIN</li>
    </ol>
    <p class="text-lg text-gray-700 mt-3 leading-8">Returns only matching records from both tables.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>SELECT users.name, orders.amount
FROM users
INNER JOIN orders
ON users.id = orders.user_id;</code></pre>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>LEFT JOIN</li>
    </ol>
    <p class="text-lg text-gray-700 mt-3 leading-8">Returns all records from the left table and matching records from the right table. Unmatched right-side values are NULL.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>SELECT users.name, orders.amount
FROM users
LEFT JOIN orders
ON users.id = orders.user_id;</code></pre>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>RIGHT JOIN</li>
    </ol>
    <p class="text-lg text-gray-700 mt-3 leading-8">Returns all records from the right table and matching records from the left table.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>SELECT users.name, orders.amount
FROM users
RIGHT JOIN orders
ON users.id = orders.user_id;</code></pre>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>CROSS JOIN</li>
    </ol>
    <p class="text-lg text-gray-700 mt-3 leading-8">Returns the Cartesian product of both tables.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>SELECT *
FROM users
CROSS JOIN products;</code></pre>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>SELF JOIN</li>
    </ol>
    <p class="text-lg text-gray-700 mt-3 leading-8">Joins a table with itself.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>SELECT
    e.name AS employee,
    m.name AS manager
FROM employees e
LEFT JOIN employees m
ON e.manager_id = m.id;</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between INNER JOIN and LEFT JOIN?</h2>
    </div>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">INNER JOIN</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">LEFT JOIN</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Returns matching records only</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Returns all left-table records</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Excludes unmatched records</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Includes unmatched left records</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Useful for matching data</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Useful for finding missing relationships</td></tr></tbody>
        </table>
    </div>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Write a query to find users who have not placed any orders.</h2>
    </div>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>SELECT u.*
FROM users u
LEFT JOIN orders o
ON u.id = o.user_id
WHERE o.id IS NULL;</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Write a query to find customers who have placed more than five orders.</h2>
    </div>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>SELECT
    user_id,
    COUNT(*) AS total_orders
FROM orders
GROUP BY user_id
HAVING COUNT(*) &gt; 5;</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between UNION and UNION ALL?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">UNION: Combines query results and removes duplicate rows.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">UNION ALL: Combines query results without removing duplicates.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>SELECT email FROM users
UNION
SELECT email FROM customers;</code></pre>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>SELECT email FROM users
UNION ALL
SELECT email FROM customers;</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">UNION ALL is generally faster when duplicate elimination is not required.</p>
</div>


<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is an Index in MySQL?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">An index is a database data structure used to improve data retrieval performance.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">It helps MySQL find records without scanning every row in a table.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>CREATE INDEX idx_email
ON users(email);</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Advantages:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Faster searching.</li>
        <li>Improves JOIN performance.</li>
        <li>Helps ORDER BY and GROUP BY in suitable queries.</li>
        <li>Improves filtering performance.</li>
    </ol>
    <p class="text-lg text-gray-700 mt-3 leading-8">Disadvantages:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Requires additional storage.</li>
        <li>Slows down INSERT, UPDATE and DELETE operations.</li>
        <li>Too many indexes can reduce performance.</li>
    </ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What are the different types of indexes?</h2>
    </div>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Index</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Purpose</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Primary Index</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Identifies records uniquely</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Unique Index</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Prevents duplicate indexed values</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Normal Index</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Improves searching</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Composite Index</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Indexes multiple columns</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Full-text Index</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Supports text searching</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Spatial Index</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Supports spatial data queries</td></tr></tbody>
        </table>
    </div>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is a Composite Index?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">A composite index is an index created on two or more columns.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>CREATE INDEX idx_user_status_date
ON orders(user_id, status, created_at);</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">This index can efficiently support queries filtering by:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>user_id</li>
        <li>user_id and status</li>
        <li>user_id, status and created_at</li>
    </ul>
    <p class="text-lg text-gray-700 mt-3 leading-8">This is related to the leftmost-prefix rule. An index on (user_id, status, created_at) generally cannot efficiently serve a lookup on status alone.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is EXPLAIN in MySQL?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">EXPLAIN is used to analyze how MySQL executes a SQL query.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">It helps identify:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Table access methods.</li>
        <li>Index usage.</li>
        <li>Estimated rows examined.</li>
        <li>Join order.</li>
        <li>Possible performance problems.</li>
    </ul>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>EXPLAIN
SELECT *
FROM users
WHERE email = 'test&#64;example.com';</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is a Full Table Scan?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">A full table scan occurs when MySQL examines all or most rows in a table to find matching records.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">It may happen when:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>No suitable index exists.</li>
        <li>An index cannot be used.</li>
        <li>A query needs most of the table's rows.</li>
        <li>The optimizer determines scanning is cheaper.</li>
    </ul>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>SELECT *
FROM users
WHERE email = 'test&#64;example.com';</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">An appropriate index on email may improve performance.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you optimize slow MySQL queries?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">I follow these steps:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Use EXPLAIN or EXPLAIN ANALYZE.</li>
        <li>Create appropriate indexes.</li>
        <li>Avoid unnecessary SELECT *.</li>
        <li>Optimize JOIN conditions.</li>
        <li>Avoid unnecessary subqueries.</li>
        <li>Use appropriate data types.</li>
        <li>Avoid functions on indexed columns in filtering conditions where possible.</li>
        <li>Optimize GROUP BY and ORDER BY.</li>
        <li>Use pagination.</li>
        <li>Monitor slow query logs.</li>
    </ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between B-Tree and Hash indexes?</h2>
    </div>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>B-Tree Index: Supports equality and range searches, sorting and prefix lookups.</li>
        <li>Hash Index: Designed primarily for equality lookups and does not support range searches or index ordering.</li>
    </ul>
    <p class="text-lg text-gray-700 mt-3 leading-8">InnoDB generally uses B-tree indexes. Hash indexes are available in specific MySQL storage-engine contexts, including the MEMORY engine.</p>
</div>


<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is a Stored Procedure?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">A stored procedure is a collection of SQL statements stored in the database and executed whenever required.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>DELIMITER //

CREATE PROCEDURE GetAllUsers()
BEGIN
    SELECT * FROM users;
END //

DELIMITER ;</code></pre>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>CALL GetAllUsers();</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Benefits:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Reusable SQL logic.</li>
        <li>Centralized database operations.</li>
        <li>Supports parameters.</li>
        <li>Can reduce repeated application-to-database calls.</li>
    </ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is a Stored Function?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">A stored function is a database routine that returns a single value and can be used in SQL expressions.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>DELIMITER //

CREATE FUNCTION CalculateTax(amount DECIMAL(10,2))
RETURNS DECIMAL(10,2)
DETERMINISTIC
BEGIN
    RETURN amount * 0.18;
END //

DELIMITER ;</code></pre>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>SELECT CalculateTax(1000);</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Output: 180.00</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between Stored Procedure and Function?</h2>
    </div>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Stored Procedure</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Function</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Created using PROCEDURE</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Created using FUNCTION</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Called using CALL</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Used in SQL expressions</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Can return result sets</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Must return a value</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Supports IN, OUT and INOUT parameters</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Parameters are input parameters</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Can perform broader database operations</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Has restrictions on database operations</td></tr></tbody>
        </table>
    </div>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is a Trigger in MySQL?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">A trigger is a database object that automatically executes when a specified INSERT, UPDATE or DELETE event occurs on a table.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>DELIMITER //

CREATE TRIGGER after_user_insert
AFTER INSERT ON users
FOR EACH ROW
BEGIN
    INSERT INTO user_logs(user_id, action)
    VALUES(NEW.id, 'User Created');
END //

DELIMITER ;</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Trigger types:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>BEFORE INSERT</li>
        <li>AFTER INSERT</li>
        <li>BEFORE UPDATE</li>
        <li>AFTER UPDATE</li>
        <li>BEFORE DELETE</li>
        <li>AFTER DELETE</li>
    </ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is a View in MySQL?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">A View is a virtual table based on the result of a SQL query.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">It simplifies complex queries and can provide controlled access to selected data.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>CREATE VIEW active_users AS
SELECT id, name, email
FROM users
WHERE status = 1;</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Use:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>SELECT * FROM active_users;</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between View and Table?</h2>
    </div>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Table</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">View</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Stores actual data</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Stores a query definition</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Data is physically stored</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Usually retrieves data from underlying tables</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Supports indexes</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Ordinary views do not have independent indexes</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Can store records directly</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Uses underlying table operations</td></tr></tbody>
        </table>
    </div>
</div>


<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is Database Normalization?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Normalization is the process of organizing database tables to minimize redundant data and improve data integrity.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Different normal forms:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>1NF – Each column contains atomic values.</li>
        <li>2NF – Must satisfy 1NF and have no partial dependency on a candidate key.</li>
        <li>3NF – Must satisfy 2NF and have no transitive dependency of non-key attributes on candidate keys.</li>
        <li>BCNF – Every determinant must be a candidate key.</li>
    </ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is Denormalization?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Denormalization is the process of introducing controlled data redundancy to improve read performance.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Instead of repeatedly calculating the total number of orders for every customer, maintain an appropriately updated order-count summary.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">It can improve reporting performance but requires careful synchronization.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What are ACID properties in MySQL?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">ACID properties ensure reliable database transactions.</p>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Property</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Definition</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Atomicity</td><td class="border border-slate-200 px-4 py-3 text-gray-700">All operations succeed or none do</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Consistency</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Database rules remain valid</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Isolation</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Transactions do not improperly interfere</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Durability</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Committed changes are persistent</td></tr></tbody>
        </table>
    </div>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is a Transaction in MySQL?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">A transaction is a group of database operations executed as one logical unit.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>START TRANSACTION;</code></pre>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>UPDATE accounts
SET balance = balance - 1000
WHERE id = 1;</code></pre>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>UPDATE accounts
SET balance = balance + 1000
WHERE id = 2;</code></pre>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>COMMIT;</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">If something goes wrong:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>ROLLBACK;</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is a Deadlock in MySQL?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">A deadlock occurs when two transactions wait for locks held by each other, so neither can continue.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Prevention:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Access records in a consistent order.</li>
        <li>Keep transactions short.</li>
        <li>Create suitable indexes.</li>
        <li>Avoid unnecessary locking.</li>
        <li>Implement retry logic.</li>
    </ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What are Isolation Levels in MySQL?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Isolation levels determine how transactions interact with concurrent transactions.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">MySQL InnoDB supports four standard isolation levels:</p>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Isolation Level</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Explanation</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">READ UNCOMMITTED</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Allows dirty reads</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">READ COMMITTED</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Prevents dirty reads</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">REPEATABLE READ</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Provides consistent repeated reads; default in InnoDB</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">SERIALIZABLE</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Strongest standard isolation level</td></tr></tbody>
        </table>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Important terms:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Dirty Read – Reading uncommitted data.</li>
        <li>Non-repeatable Read – Same row returns different committed values within a transaction.</li>
        <li>Phantom Read – Repeated range queries return a different set of rows.</li>
    </ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is MVCC in MySQL?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">MVCC stands for Multi-Version Concurrency Control.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">It is a mechanism used by InnoDB to manage concurrent database transactions by maintaining different versions of rows.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Benefits:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Improves concurrent read operations.</li>
        <li>Reduces read-write blocking.</li>
        <li>Supports consistent snapshots.</li>
        <li>Helps maintain transaction isolation.</li>
    </ul>
</div>


<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is a CTE in MySQL?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">CTE stands for Common Table Expression. It is a temporary named result set defined using the WITH clause and available within a single SQL statement.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>WITH employee_data AS (
    SELECT *
    FROM employees
    WHERE salary &gt; 50000
)
SELECT *
FROM employee_data;</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Benefits:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Improves query readability.</li>
        <li>Simplifies complex SQL queries.</li>
        <li>Supports recursive queries.</li>
        <li>Avoids repeating the same subquery.</li>
    </ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is a Window Function in MySQL?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">A window function performs calculations across a set of related rows without combining them into a single result row.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Important functions:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>ROW_NUMBER()</li>
        <li>RANK()</li>
        <li>DENSE_RANK()</li>
        <li>LEAD()</li>
        <li>LAG()</li>
        <li>SUM() OVER()</li>
        <li>AVG() OVER()</li>
    </ul>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>SELECT
    name,
    department,
    salary,
    DENSE_RANK() OVER (
        PARTITION BY department
        ORDER BY salary DESC
    ) AS salary_rank
FROM employees;</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between RANK(), DENSE_RANK() and ROW_NUMBER()?</h2>
    </div>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Function</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Explanation</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">ROW_NUMBER()</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Assigns a unique sequential number</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">RANK()</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Gives equal ranks to ties and skips subsequent ranks</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">DENSE_RANK()</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Gives equal ranks to ties without skipping ranks</td></tr></tbody>
        </table>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example salaries: 90000, 80000, 80000, 70000.</p>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Salary</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">ROW_NUMBER</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">RANK</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">DENSE_RANK</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">90000</td><td class="border border-slate-200 px-4 py-3 text-gray-700">1</td><td class="border border-slate-200 px-4 py-3 text-gray-700">1</td><td class="border border-slate-200 px-4 py-3 text-gray-700">1</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">80000</td><td class="border border-slate-200 px-4 py-3 text-gray-700">2</td><td class="border border-slate-200 px-4 py-3 text-gray-700">2</td><td class="border border-slate-200 px-4 py-3 text-gray-700">2</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">80000</td><td class="border border-slate-200 px-4 py-3 text-gray-700">3</td><td class="border border-slate-200 px-4 py-3 text-gray-700">2</td><td class="border border-slate-200 px-4 py-3 text-gray-700">2</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">70000</td><td class="border border-slate-200 px-4 py-3 text-gray-700">4</td><td class="border border-slate-200 px-4 py-3 text-gray-700">4</td><td class="border border-slate-200 px-4 py-3 text-gray-700">3</td></tr></tbody>
        </table>
    </div>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is a Recursive CTE?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">A recursive CTE is used to retrieve hierarchical or self-referencing data, such as employee-manager relationships or category trees.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>WITH RECURSIVE employee_tree AS (
    SELECT id, name, manager_id
    FROM employees
    WHERE manager_id IS NULL

    UNION ALL

    SELECT e.id, e.name, e.manager_id
    FROM employees e
    INNER JOIN employee_tree t
        ON e.manager_id = t.id
)
SELECT * FROM employee_tree;</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between IN and EXISTS?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">IN: Checks whether a value matches any value in a specified list or subquery result.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">EXISTS: Checks whether a subquery returns at least one row.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>SELECT *
FROM users
WHERE id IN (
    SELECT user_id FROM orders
);</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Using EXISTS:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>SELECT *
FROM users u
WHERE EXISTS (
    SELECT 1
    FROM orders o
    WHERE o.user_id = u.id
);</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Neither is universally faster. Performance depends on query structure, indexes and the optimizer.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between UNION and JOIN?</h2>
    </div>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>UNION combines rows from multiple SELECT statements.</li>
        <li>JOIN combines columns from related tables.</li>
    </ul>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>-- UNION
SELECT name FROM employees
UNION
SELECT name FROM customers;</code></pre>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>-- JOIN
SELECT u.name, o.amount
FROM users u
JOIN orders o ON u.id = o.user_id;</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you find the third-highest salary without using LIMIT?</h2>
    </div>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>SELECT MAX(salary) AS third_highest
FROM employees
WHERE salary &lt; (
    SELECT MAX(salary)
    FROM employees
    WHERE salary &lt; (
        SELECT MAX(salary)
        FROM employees
    )
);</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">This finds the third-highest distinct salary.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you find the top three salaries in each department?</h2>
    </div>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>SELECT *
FROM (
    SELECT
        name,
        department,
        salary,
        DENSE_RANK() OVER (
            PARTITION BY department
            ORDER BY salary DESC
        ) AS salary_rank
    FROM employees
) ranked
WHERE salary_rank &lt;= 3;</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you delete duplicate records while keeping one record?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Suppose email is duplicated and id is unique.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>DELETE u1
FROM users u1
JOIN users u2
    ON u1.email = u2.email
   AND u1.id &gt; u2.id;</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">This retains the smallest ID for each email. Take a backup and verify duplicates before running DELETE in production.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you find records created in the last 30 days?</h2>
    </div>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>SELECT *
FROM orders
WHERE created_at &gt;= NOW() - INTERVAL 30 DAY;</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you calculate monthly sales?</h2>
    </div>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>SELECT
    YEAR(created_at) AS year,
    MONTH(created_at) AS month,
    SUM(amount) AS total_sales
FROM orders
GROUP BY
    YEAR(created_at),
    MONTH(created_at)
ORDER BY year DESC, month DESC;</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you find employees whose salary is greater than their manager's salary?</h2>
    </div>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>SELECT
    e.name AS employee,
    e.salary AS employee_salary,
    m.name AS manager,
    m.salary AS manager_salary
FROM employees e
JOIN employees m
    ON e.manager_id = m.id
WHERE e.salary &gt; m.salary;</code></pre>
</div>


<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you handle a database containing 10 million records?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">I follow a structured database optimization strategy:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Analyze query execution plans.</li>
        <li>Create appropriate indexes.</li>
        <li>Use pagination or keyset pagination.</li>
        <li>Avoid unnecessary SELECT statements.</li>
        <li>Use partitioning when it provides a measurable benefit.</li>
        <li>Use Redis caching.</li>
        <li>Process large records in batches.</li>
        <li>Optimize joins.</li>
        <li>Archive historical records when appropriate.</li>
        <li>Monitor database performance.</li>
    </ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you improve database performance in a high-traffic application?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">I focus on the following areas:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Query optimization.</li>
        <li>Proper indexing.</li>
        <li>Connection pooling where supported.</li>
        <li>Read replicas for read-heavy workloads.</li>
        <li>Redis caching.</li>
        <li>Database monitoring.</li>
        <li>Optimized transactions.</li>
        <li>Avoiding unnecessary database calls.</li>
        <li>Horizontal application scaling.</li>
        <li>Appropriate database schema design.</li>
    </ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is Database Partitioning?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Partitioning divides a large table into smaller logical partitions while keeping it as one table from the application's perspective.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Types:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>RANGE Partitioning.</li>
        <li>LIST Partitioning.</li>
        <li>HASH Partitioning.</li>
        <li>KEY Partitioning.</li>
    </ol>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>CREATE TABLE sales (
    id INT,
    sale_date DATE,
    amount DECIMAL(10,2)
)
PARTITION BY RANGE (YEAR(sale_date)) (
    PARTITION p2025 VALUES LESS THAN (2026),
    PARTITION p2026 VALUES LESS THAN (2027),
    PARTITION pmax VALUES LESS THAN MAXVALUE
);</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is Replication in MySQL?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Replication copies data from one MySQL server to one or more other MySQL servers.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Common architecture:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Primary Server – Handles writes.</li>
        <li>Replica Server – Receives replicated data and can serve reads.</li>
    </ul>
    <p class="text-lg text-gray-700 mt-3 leading-8">Benefits:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Read scalability.</li>
        <li>High availability architecture.</li>
        <li>Disaster recovery support.</li>
        <li>Reporting workloads can be separated.</li>
    </ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between Replication and Sharding?</h2>
    </div>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Replication</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Sharding</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Copies data between servers</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Splits data across servers</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Multiple copies of data</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Different servers hold different subsets</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Improves read availability and scalability</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Improves data distribution and horizontal scalability</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Data synchronization required</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Shard routing required</td></tr></tbody>
        </table>
    </div>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is a MySQL Connection Pool?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">A connection pool maintains reusable database connections so applications do not need to establish a completely new connection for every database operation.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Benefits:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Reduces connection overhead.</li>
        <li>Improves request performance.</li>
        <li>Controls the number of active connections.</li>
        <li>Helps manage database resources.</li>
    </ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between InnoDB and MyISAM?</h2>
    </div>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">InnoDB</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">MyISAM</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Supports transactions</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Does not support transactions</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Supports foreign keys</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Does not support foreign keys</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Row-level locking</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Table-level locking</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Supports crash recovery</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Limited crash recovery capabilities</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Supports MVCC</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Does not support MVCC</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Suitable for transactional applications</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Legacy read-heavy workloads</td></tr></tbody>
        </table>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Interview answer: I generally prefer InnoDB for modern PHP and Laravel applications because it supports transactions, foreign keys and row-level locking.</p>
</div>

<!-- Blade partial. SQL examples are escaped display text. -->

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is MySQL architecture?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Definition: MySQL architecture is the internal structure that manages client connections, SQL processing, query execution, storage, and data retrieval.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Main components:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Connection Layer: Handles client connections, authentication, and sessions.</li>
        <li>SQL Layer: Parses SQL queries, validates syntax, checks permissions, and prepares execution plans.</li>
        <li>Optimizer: Determines an efficient execution plan using indexes, statistics, and available access paths.</li>
        <li>Execution Engine: Executes the selected query plan.</li>
        <li>Storage Engine: Manages how data is stored and retrieved. InnoDB is the default storage engine in modern MySQL.</li>
        <li>Buffer Pool: Caches frequently accessed InnoDB data and index pages in memory.</li>
        <li>Redo Log: Supports crash recovery and durability.</li>
        <li>Undo Log: Supports transaction rollback and consistent reads.</li>
    </ol>
    <p class="text-lg text-gray-700 mt-3 leading-8">Interview answer: MySQL separates SQL processing from storage-engine operations. The optimizer selects an execution plan, while the storage engine handles physical data access and transaction management.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between InnoDB and MyISAM?</h2>
    </div>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Feature</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">InnoDB</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">MyISAM</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Transactions</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Supported</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Not supported</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Foreign keys</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Supported</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Not supported</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Locking</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Row-level (with some internal locks)</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Table-level</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Crash recovery</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Supported</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Limited</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">MVCC</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Supported</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Not supported</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Default engine</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Yes</td><td class="border border-slate-200 px-4 py-3 text-gray-700">No</td></tr></tbody>
        </table>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Interview answer: InnoDB is preferred for transactional applications because it supports ACID properties, foreign keys, row-level locking, and crash recovery. MyISAM is a legacy engine and is generally unsuitable for transaction-heavy systems.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is MVCC in MySQL?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Definition: MVCC stands for Multi-Version Concurrency Control. It allows multiple transactions to read consistent versions of data without unnecessarily blocking concurrent writes.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">How it works:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>InnoDB maintains row versions using transaction-related metadata and undo logs.</li>
        <li>A transaction can read a consistent snapshot of data.</li>
        <li>Readers and writers can often work concurrently.</li>
        <li>Old row versions are eventually cleaned up when no longer needed.</li>
    </ul>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>START TRANSACTION;

SELECT * FROM employees WHERE id = 10;

COMMIT;</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Interview answer: MVCC improves concurrency by allowing consistent reads without requiring every reader to lock rows. It is an important part of InnoDB's transaction and isolation implementation.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between clustered and non-clustered indexes?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Clustered index:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Determines the physical organization of InnoDB table rows.</li>
        <li>InnoDB stores table rows in the primary-key clustered index.</li>
        <li>The primary key is the clustered index.</li>
    </ul>
    <p class="text-lg text-gray-700 mt-3 leading-8">Secondary index:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Stores indexed column values and the corresponding primary-key value.</li>
        <li>InnoDB uses the primary key to locate the full row when needed.</li>
    </ul>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>CREATE TABLE employees (
    id BIGINT PRIMARY KEY,
    name VARCHAR(100),
    department_id INT,
    salary DECIMAL(10,2),
    INDEX idx_department (department_id)
);</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Here, <code class="rounded bg-slate-100 px-1 text-base">id</code> is the clustered primary key, while <code class="rounded bg-slate-100 px-1 text-base">idx_department</code> is a secondary index.</p>
</div>

<h2 class="mt-12 mb-6 text-4xl font-bold text-slate-900">Advanced Indexing and Query Optimization</h2>
<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is a composite index? Explain the leftmost-prefix rule.</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Definition: A composite index is an index created on multiple columns.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>CREATE INDEX idx_status_created
ON orders(status, created_at, user_id);</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">This index can efficiently support queries filtering by:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>WHERE status = 'completed'</code></pre>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>WHERE status = 'completed'
AND created_at &gt;= '2026-01-01'</code></pre>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>WHERE status = 'completed'
AND created_at &gt;= '2026-01-01'
AND user_id = 10</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">But it generally cannot efficiently use the full index for:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>WHERE user_id = 10;</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Interview answer: The leftmost-prefix rule means MySQL can use a composite index starting from its first column and continuing through consecutive indexed columns. Column order is therefore important.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is a covering index?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Definition: A covering index contains all the columns required by a query, so MySQL can retrieve the result directly from the index without reading the corresponding table rows.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>CREATE INDEX idx_status_date_amount
ON orders(status, created_at, amount);</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Query:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>SELECT created_at, amount
FROM orders
WHERE status = 'completed';</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">The index contains the filter column and selected columns.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Benefit:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Reduces table-row lookups.</li>
        <li>Can reduce disk I/O.</li>
        <li>Improves query performance.</li>
    </ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is EXPLAIN in MySQL?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Definition: <code class="rounded bg-slate-100 px-1 text-base">EXPLAIN</code> displays the execution plan MySQL expects to use for a query.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>EXPLAIN
SELECT *
FROM employees
WHERE department_id = 5;</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Important columns:</p>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Column</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Meaning</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">type</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Access method</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">possible_keys</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Indexes that may be used</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">key</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Index actually selected</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">rows</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Estimated rows examined</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">filtered</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Estimated percentage passing the condition</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Extra</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Additional execution information</td></tr></tbody>
        </table>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Important access types, generally from more efficient to less efficient:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li><code class="rounded bg-slate-100 px-1 text-base">const</code></li>
        <li><code class="rounded bg-slate-100 px-1 text-base">eq_ref</code></li>
        <li><code class="rounded bg-slate-100 px-1 text-base">ref</code></li>
        <li><code class="rounded bg-slate-100 px-1 text-base">range</code></li>
        <li><code class="rounded bg-slate-100 px-1 text-base">index</code></li>
        <li><code class="rounded bg-slate-100 px-1 text-base">ALL</code></li>
    </ul>
    <p class="text-lg text-gray-700 mt-3 leading-8"><code class="rounded bg-slate-100 px-1 text-base">ALL</code> commonly indicates a full table scan.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Advanced: MySQL 8.0.18+ supports:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>EXPLAIN ANALYZE
SELECT *
FROM orders
WHERE status = 'pending';</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">It executes the query and reports actual timing and row information.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you optimize a slow MySQL query?</h2>
    </div>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Identify the slow query using the slow query log.</li>
        <li>Run <code class="rounded bg-slate-100 px-1 text-base">EXPLAIN</code> or <code class="rounded bg-slate-100 px-1 text-base">EXPLAIN ANALYZE</code>.</li>
        <li>Check whether the correct indexes are used.</li>
        <li>Avoid unnecessary <code class="rounded bg-slate-100 px-1 text-base">SELECT *</code>.</li>
        <li>Avoid functions on indexed columns in filtering conditions.</li>
        <li>Optimize JOIN conditions.</li>
        <li>Reduce unnecessary subqueries and repeated database calls.</li>
        <li>Use pagination appropriately.</li>
        <li>Check table statistics and data distribution.</li>
        <li>Measure performance before and after changes.</li>
    </ol>
    <p class="text-lg text-gray-700 mt-3 leading-8">Bad query:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>SELECT *
FROM orders
WHERE DATE(created_at) = '2026-11-11';</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Applying <code class="rounded bg-slate-100 px-1 text-base">DATE()</code> to the indexed column can prevent an efficient range lookup.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Better query:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>SELECT id, user_id, amount
FROM orders
WHERE created_at &gt;= '2026-11-11 00:00:00'
  AND created_at &lt; '2026-11-12 00:00:00';</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is index cardinality?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Definition: Cardinality indicates the estimated number of distinct values in an indexed column.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li><code class="rounded bg-slate-100 px-1 text-base">gender</code>: low cardinality.</li>
        <li><code class="rounded bg-slate-100 px-1 text-base">status</code>: usually low cardinality.</li>
        <li><code class="rounded bg-slate-100 px-1 text-base">email</code>: usually high cardinality.</li>
        <li><code class="rounded bg-slate-100 px-1 text-base">user_id</code>: often high cardinality.</li>
    </ul>
    <p class="text-lg text-gray-700 mt-3 leading-8">High cardinality often makes an index more selective, but the best index depends on query patterns and data distribution.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Why should we avoid too many indexes?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Every index requires storage and maintenance.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Disadvantages:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Slower INSERT operations.</li>
        <li>Slower UPDATE operations when indexed values change.</li>
        <li>Slower DELETE operations.</li>
        <li>Increased storage usage.</li>
        <li>More work for the query optimizer.</li>
    </ul>
    <p class="text-lg text-gray-700 mt-3 leading-8">Interview answer: Indexes improve read performance but add write and storage overhead. I create indexes based on actual query patterns and validate them using execution plans.</p>
</div>

<h2 class="mt-12 mb-6 text-4xl font-bold text-slate-900">Advanced SQL Queries</h2>
<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between WHERE and HAVING?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">WHERE: Filters individual rows before grouping.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">HAVING: Filters grouped results after <code class="rounded bg-slate-100 px-1 text-base">GROUP BY</code>.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>SELECT department_id, COUNT(*) AS total_employees
FROM employees
WHERE salary &gt; 30000
GROUP BY department_id
HAVING COUNT(*) &gt; 5;</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Execution concept:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li><code class="rounded bg-slate-100 px-1 text-base">FROM</code></li>
        <li><code class="rounded bg-slate-100 px-1 text-base">WHERE</code></li>
        <li><code class="rounded bg-slate-100 px-1 text-base">GROUP BY</code></li>
        <li>Aggregate calculations</li>
        <li><code class="rounded bg-slate-100 px-1 text-base">HAVING</code></li>
        <li><code class="rounded bg-slate-100 px-1 text-base">SELECT</code></li>
        <li><code class="rounded bg-slate-100 px-1 text-base">ORDER BY</code></li>
        <li><code class="rounded bg-slate-100 px-1 text-base">LIMIT</code></li>
    </ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is a CTE in MySQL?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Definition: CTE stands for Common Table Expression. It creates a named temporary result set that can be referenced within a single SQL statement.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>WITH high_salary AS (
    SELECT id, name, salary
    FROM employees
    WHERE salary &gt; 50000
)
SELECT *
FROM high_salary
ORDER BY salary DESC;</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Advantages:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Improves query readability.</li>
        <li>Breaks complex queries into logical sections.</li>
        <li>Supports recursive queries.</li>
        <li>Can be useful when organizing multi-step data transformations.</li>
    </ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is a recursive CTE?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">A recursive CTE references its own result to process hierarchical or sequential data.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example: employee-manager hierarchy.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>WITH RECURSIVE employee_tree AS (
    SELECT id, name, manager_id, 1 AS level
    FROM employees
    WHERE manager_id IS NULL

    UNION ALL

    SELECT e.id, e.name, e.manager_id, et.level + 1
    FROM employees e
    INNER JOIN employee_tree et
        ON e.manager_id = et.id
)
SELECT *
FROM employee_tree;</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Use cases:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Organization charts.</li>
        <li>Category hierarchies.</li>
        <li>Parent-child relationships.</li>
        <li>Tree structures.</li>
    </ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What are window functions?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Definition: Window functions perform calculations across related rows without combining those rows into a single grouped result.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Common window functions:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li><code class="rounded bg-slate-100 px-1 text-base">ROW_NUMBER()</code></li>
        <li><code class="rounded bg-slate-100 px-1 text-base">RANK()</code></li>
        <li><code class="rounded bg-slate-100 px-1 text-base">DENSE_RANK()</code></li>
        <li><code class="rounded bg-slate-100 px-1 text-base">LAG()</code></li>
        <li><code class="rounded bg-slate-100 px-1 text-base">LEAD()</code></li>
        <li><code class="rounded bg-slate-100 px-1 text-base">SUM() OVER()</code></li>
        <li><code class="rounded bg-slate-100 px-1 text-base">AVG() OVER()</code></li>
    </ul>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>SELECT
    id,
    name,
    department_id,
    salary,
    DENSE_RANK() OVER (
        PARTITION BY department_id
        ORDER BY salary DESC
    ) AS salary_rank
FROM employees;</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">This assigns salary ranks separately within each department.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Difference between ROW_NUMBER(), RANK(), and DENSE_RANK()?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Suppose salaries are 90000, 80000, 80000, and 70000.</p>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Salary</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">ROW_NUMBER</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">RANK</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">DENSE_RANK</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">90000</td><td class="border border-slate-200 px-4 py-3 text-gray-700">1</td><td class="border border-slate-200 px-4 py-3 text-gray-700">1</td><td class="border border-slate-200 px-4 py-3 text-gray-700">1</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">80000</td><td class="border border-slate-200 px-4 py-3 text-gray-700">2</td><td class="border border-slate-200 px-4 py-3 text-gray-700">2</td><td class="border border-slate-200 px-4 py-3 text-gray-700">2</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">80000</td><td class="border border-slate-200 px-4 py-3 text-gray-700">3</td><td class="border border-slate-200 px-4 py-3 text-gray-700">2</td><td class="border border-slate-200 px-4 py-3 text-gray-700">2</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">70000</td><td class="border border-slate-200 px-4 py-3 text-gray-700">4</td><td class="border border-slate-200 px-4 py-3 text-gray-700">4</td><td class="border border-slate-200 px-4 py-3 text-gray-700">3</td></tr></tbody>
        </table>
    </div>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li><code class="rounded bg-slate-100 px-1 text-base">ROW_NUMBER()</code> gives every row a unique sequential number.</li>
        <li><code class="rounded bg-slate-100 px-1 text-base">RANK()</code> gives tied rows the same rank and leaves gaps.</li>
        <li><code class="rounded bg-slate-100 px-1 text-base">DENSE_RANK()</code> gives tied rows the same rank without gaps.</li>
    </ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Find the second-highest salary.</h2>
    </div>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>SELECT MAX(salary) AS second_highest_salary
FROM employees
WHERE salary &lt; (
    SELECT MAX(salary)
    FROM employees
);</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Alternative using a window function:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>WITH ranked AS (
    SELECT
        salary,
        DENSE_RANK() OVER (ORDER BY salary DESC) AS rnk
    FROM employees
)
SELECT DISTINCT salary
FROM ranked
WHERE rnk = 2;</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Find the top three salaries in each department.</h2>
    </div>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>WITH ranked AS (
    SELECT
        id,
        name,
        department_id,
        salary,
        DENSE_RANK() OVER (
            PARTITION BY department_id
            ORDER BY salary DESC
        ) AS rnk
    FROM employees
)
SELECT *
FROM ranked
WHERE rnk &lt;= 3;</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8"><code class="rounded bg-slate-100 px-1 text-base">DENSE_RANK()</code> includes all employees tied within the top three distinct salary levels. Use <code class="rounded bg-slate-100 px-1 text-base">ROW_NUMBER()</code> instead if you need exactly three rows per department.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Find duplicate records in a table.</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example: duplicate email addresses.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>SELECT
    email,
    COUNT(*) AS total
FROM users
GROUP BY email
HAVING COUNT(*) &gt; 1;</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">To prevent future duplicates:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>ALTER TABLE users
ADD CONSTRAINT uq_users_email UNIQUE (email);</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Before adding the constraint, clean existing duplicates and decide how <code class="rounded bg-slate-100 px-1 text-base">NULL</code> values should be handled.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Delete duplicate records while keeping the lowest ID.</h2>
    </div>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>DELETE u1
FROM users u1
JOIN users u2
    ON u1.email = u2.email
   AND u1.id &gt; u2.id;</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">This keeps the row with the smallest ID for each non-NULL email group. Check the affected rows with a corresponding <code class="rounded bg-slate-100 px-1 text-base">SELECT</code> first, and take a backup before production deletion.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Find employees earning more than their department's average salary.</h2>
    </div>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>SELECT *
FROM employees e
WHERE salary &gt; (
    SELECT AVG(e2.salary)
    FROM employees e2
    WHERE e2.department_id = e.department_id
);</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">This is a correlated subquery because the inner query refers to the outer employee's department.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What are ACID properties?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">ACID defines the key properties of reliable database transactions.</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Atomicity: Either all operations in a transaction succeed or none are committed.</li>
        <li>Consistency: A transaction preserves database rules and constraints.</li>
        <li>Isolation: Concurrent transactions are controlled so they do not interfere incorrectly.</li>
        <li>Durability: Once committed, changes survive a crash, subject to the configured durability guarantees.</li>
    </ol>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>START TRANSACTION;

UPDATE accounts
SET balance = balance - 1000
WHERE id = 1;

UPDATE accounts
SET balance = balance + 1000
WHERE id = 2;

COMMIT;</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">If an operation fails before commit, the application can issue <code class="rounded bg-slate-100 px-1 text-base">ROLLBACK</code>.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is a database deadlock?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Definition: A deadlock occurs when two or more transactions hold locks that the others need, creating a circular wait.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Transaction A locks row 1 and requests row 2.</li>
        <li>Transaction B locks row 2 and requests row 1.</li>
        <li>Neither can proceed.</li>
    </ul>
    <p class="text-lg text-gray-700 mt-3 leading-8">MySQL InnoDB detects many deadlocks and rolls back one transaction as the victim.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">How to reduce deadlocks:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Access rows in a consistent order.</li>
        <li>Keep transactions short.</li>
        <li>Add indexes to avoid locking unnecessarily large ranges.</li>
        <li>Avoid user interaction while a transaction is open.</li>
        <li>Retry transactions safely when a deadlock occurs.</li>
    </ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between shared and exclusive locks?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Shared lock (<code class="rounded bg-slate-100 px-1 text-base">S</code>): Allows transactions to read a locked row while preventing conflicting exclusive modifications.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>START TRANSACTION;

SELECT *
FROM employees
WHERE id = 10
FOR SHARE;</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Exclusive lock (<code class="rounded bg-slate-100 px-1 text-base">X</code>): Used for modifications and prevents conflicting access.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>START TRANSACTION;

SELECT *
FROM employees
WHERE id = 10
FOR UPDATE;</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">A <code class="rounded bg-slate-100 px-1 text-base">FOR UPDATE</code> lock is useful when an application must read a row and then update it safely within the same transaction.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Explain MySQL isolation levels.</h2>
    </div>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Isolation level</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Description</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">READ UNCOMMITTED</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Can allow dirty reads</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">READ COMMITTED</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Reads only committed data; snapshots are refreshed per consistent read</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">REPEATABLE READ</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Consistent reads within a transaction use a stable snapshot</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">SERIALIZABLE</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Strongest isolation; may block more concurrent operations</td></tr></tbody>
        </table>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">InnoDB's default isolation level is generally <code class="rounded bg-slate-100 px-1 text-base">REPEATABLE READ</code>.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What are dirty read, non-repeatable read, and phantom read?</h2>
    </div>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Dirty read: A transaction reads another transaction's uncommitted change.</li>
        <li>Non-repeatable read: Reading the same row twice returns different committed values.</li>
        <li>Phantom read: Repeating a range query returns a different set of rows because another transaction inserted or deleted matching rows.</li>
    </ul>
    <p class="text-lg text-gray-700 mt-3 leading-8">InnoDB uses MVCC and locking mechanisms to control these phenomena. Its default <code class="rounded bg-slate-100 px-1 text-base">REPEATABLE READ</code> isolation provides consistent snapshots for ordinary consistent reads and uses next-key locking for relevant locking range operations.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between COMMIT and ROLLBACK?</h2>
    </div>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>COMMIT;</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Permanently commits the current transaction's changes.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>ROLLBACK;</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Reverses uncommitted changes in the current transaction.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Important: DDL statements such as <code class="rounded bg-slate-100 px-1 text-base">TRUNCATE TABLE</code> cause implicit commits in MySQL, so they should not be treated like ordinary rollback-safe DML.</p>
</div>


<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is database normalization?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Definition: Normalization is the process of organizing database tables to reduce data duplication and prevent data anomalies.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Important normal forms:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>1NF: Each column contains atomic values; no repeating groups.</li>
        <li>2NF: Must satisfy 1NF, and every non-key attribute must depend on the whole candidate key.</li>
        <li>3NF: Must satisfy 2NF and eliminate transitive dependencies of non-key attributes on candidate keys.</li>
        <li>BCNF: Every determinant must be a candidate key or superkey.</li>
    </ul>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Instead of storing department details repeatedly in an employee table, create separate tables:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>CREATE TABLE departments (
    id INT PRIMARY KEY,
    department_name VARCHAR(100)
);

CREATE TABLE employees (
    id INT PRIMARY KEY,
    name VARCHAR(100),
    department_id INT,
    FOREIGN KEY (department_id)
        REFERENCES departments(id)
);</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is denormalization?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Definition: Denormalization intentionally introduces redundant or precomputed data to improve read performance.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">An order report may store <code class="rounded bg-slate-100 px-1 text-base">total_amount</code> in an orders table instead of calculating it from order items on every request.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Advantages:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Faster reporting.</li>
        <li>Fewer JOINs in some read-heavy workloads.</li>
        <li>Reduced repeated calculations.</li>
    </ul>
    <p class="text-lg text-gray-700 mt-3 leading-8">Disadvantages:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Duplicate data.</li>
        <li>More complicated updates.</li>
        <li>Risk of inconsistent values.</li>
    </ul>
    <p class="text-lg text-gray-700 mt-3 leading-8">Interview answer: I normally start with a normalized schema and introduce denormalization only when profiling shows a genuine performance requirement.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is database partitioning?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Definition: Partitioning divides a large logical table into smaller physical partitions while keeping it accessible as one table.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Common types:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>RANGE partitioning.</li>
        <li>LIST partitioning.</li>
        <li>HASH partitioning.</li>
        <li>KEY partitioning.</li>
    </ol>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example: partition an orders table by year.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>CREATE TABLE orders (
    id BIGINT NOT NULL,
    order_date DATE NOT NULL,
    amount DECIMAL(10,2),
    PRIMARY KEY (id, order_date)
)
PARTITION BY RANGE (YEAR(order_date)) (
    PARTITION p2025 VALUES LESS THAN (2026),
    PARTITION p2026 VALUES LESS THAN (2027),
    PARTITION p_future VALUES LESS THAN MAXVALUE
);</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Benefits:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Can reduce the amount of data scanned for suitable queries.</li>
        <li>Helps manage large datasets.</li>
        <li>Can simplify archival and retention operations.</li>
    </ul>
    <p class="text-lg text-gray-700 mt-3 leading-8">Important: MySQL partitioning has restrictions, including requirements that unique keys contain all columns used in the partitioning expression.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is database replication?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Definition: Replication copies data changes from a source MySQL server to one or more replica servers.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Common architecture:</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Primary MySQL Server</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Handles writes and possibly reads</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Replica 1</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Read queries</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Replica 2</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Read queries</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Benefits:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Distributes read traffic.</li>
        <li>Supports reporting workloads.</li>
        <li>Can improve availability and recovery options.</li>
    </ul>
    <p class="text-lg text-gray-700 mt-3 leading-8">Important: Replication is not automatically a backup. Replicas can also reproduce accidental deletions or corrupt changes, and replication lag can cause stale reads.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is sharding?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Definition: Sharding divides data across multiple independent database servers.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Shard 1: user IDs 1–1,000,000.</li>
        <li>Shard 2: user IDs 1,000,001–2,000,000.</li>
        <li>Shard 3: user IDs 2,000,001–3,000,000.</li>
    </ul>
    <p class="text-lg text-gray-700 mt-3 leading-8">Advantages:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Distributes storage.</li>
        <li>Distributes write load.</li>
        <li>Allows horizontal scaling.</li>
    </ul>
    <p class="text-lg text-gray-700 mt-3 leading-8">Challenges:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Cross-shard JOINs.</li>
        <li>Distributed transactions.</li>
        <li>Rebalancing data.</li>
        <li>Application-level routing.</li>
        <li>Maintaining global uniqueness.</li>
    </ul>
    <p class="text-lg text-gray-700 mt-3 leading-8">Replication vs sharding: Replication copies the same data to multiple servers; sharding distributes different subsets of data across servers.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How would you design a database for 10 million records?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Senior-level answer:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Analyze business requirements and access patterns.</li>
        <li>Design normalized tables and suitable relationships.</li>
        <li>Choose appropriate data types.</li>
        <li>Use primary keys and foreign keys where appropriate.</li>
        <li>Add indexes based on frequently executed queries.</li>
        <li>Use pagination and avoid loading unnecessary records.</li>
        <li>Analyze slow queries and execution plans.</li>
        <li>Consider partitioning for suitable large tables.</li>
        <li>Use replicas for read scaling when appropriate.</li>
        <li>Monitor connections, locks, memory, disk I/O, and query latency.</li>
        <li>Plan backups, restore tests, and retention policies.</li>
    </ol>
    <p class="text-lg text-gray-700 mt-3 leading-8">The key is not simply adding indexes or partitioning everything. Measure the actual bottleneck first.</p>
</div>


<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you prevent duplicate payment transactions?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">This is especially important in payment gateway integrations such as Razorpay, Stripe, or PayPal.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Approach:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Generate a unique transaction or idempotency key.</li>
        <li>Store the key with the payment request.</li>
        <li>Add a unique constraint.</li>
        <li>Verify payment status with the gateway.</li>
        <li>Process webhook events idempotently.</li>
        <li>Use a database transaction to update payment and order records consistently.</li>
    </ol>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>CREATE TABLE payments (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    order_id BIGINT NOT NULL,
    idempotency_key VARCHAR(100) NOT NULL,
    payment_status VARCHAR(30) NOT NULL,
    UNIQUE KEY uq_idempotency (idempotency_key)
);</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Interview answer: I never rely only on frontend button disabling to prevent duplicate payments. I enforce uniqueness at the database level and make the backend payment workflow idempotent.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you handle a high number of simultaneous database connections?</h2>
    </div>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Use connection pooling where supported by the application architecture.</li>
        <li>Configure sensible connection limits.</li>
        <li>Use persistent connections carefully.</li>
        <li>Optimize slow queries to reduce connection occupancy.</li>
        <li>Avoid opening unnecessary connections.</li>
        <li>Monitor <code class="rounded bg-slate-100 px-1 text-base">Threads_connected</code> and <code class="rounded bg-slate-100 px-1 text-base">Threads_running</code>.</li>
        <li>Consider read replicas and workload separation.</li>
        <li>Configure application-level timeouts.</li>
    </ul>
    <p class="text-lg text-gray-700 mt-3 leading-8">Useful command:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>SHOW GLOBAL STATUS LIKE 'Threads_connected';

SHOW GLOBAL STATUS LIKE 'Threads_running';

SHOW VARIABLES LIKE 'max_connections';</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between OFFSET and keyset pagination?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">OFFSET pagination:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>SELECT id, name
FROM users
ORDER BY id
LIMIT 20 OFFSET 100000;</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">MySQL may need to scan and discard many rows before returning the requested page.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Keyset pagination:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>SELECT id, name
FROM users
WHERE id &gt; 100000
ORDER BY id
LIMIT 20;</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Keyset pagination can be more efficient for deep pagination when the ordering column is indexed and stable.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">For a composite sort:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>SELECT id, created_at, name
FROM users
WHERE created_at &lt; '2026-11-11 10:00:00'
   OR (
       created_at = '2026-11-11 10:00:00'
       AND id &lt; 500
   )
ORDER BY created_at DESC, id DESC
LIMIT 20;</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">A matching composite index on <code class="rounded bg-slate-100 px-1 text-base">(created_at, id)</code> can help.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the N+1 query problem?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Definition: The N+1 problem occurs when an application executes one query to fetch a list and then executes another query for every item in that list.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>$users = DB::table('users')-&gt;get();

foreach ($users as $user) {
    $orders = DB::table('orders')
        -&gt;where('user_id', $user-&gt;id)
        -&gt;get();
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">For 100 users, this may execute 101 queries.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Solution using JOIN:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>SELECT
    u.id,
    u.name,
    o.id AS order_id,
    o.amount
FROM users u
LEFT JOIN orders o
    ON o.user_id = u.id;</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Laravel solution using eager loading:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>$users = User::with('orders')-&gt;get();</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">This generally retrieves the users and their orders in a small number of queries rather than one query per user.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is a database transaction isolation problem in an inventory system?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Imagine two customers trying to purchase the last available product at the same time.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">A safe approach is to lock the inventory row inside a transaction:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>START TRANSACTION;

SELECT stock
FROM products
WHERE id = 10
FOR UPDATE;

UPDATE products
SET stock = stock - 1
WHERE id = 10
  AND stock &gt; 0;

COMMIT;</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">In a real application, check that the update affected exactly one row. If not, roll back and report that stock is unavailable.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Alternative: Use a conditional atomic update:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>UPDATE products
SET stock = stock - 1
WHERE id = 10
  AND stock &gt; 0;</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Check affected rows to determine whether stock was successfully reserved.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is a database backup and recovery strategy?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">A production-ready backup strategy can include:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Regular full backups.</li>
        <li>Binary log backups for point-in-time recovery.</li>
        <li>Off-site or separate backup storage.</li>
        <li>Encryption and access control.</li>
        <li>Backup integrity verification.</li>
        <li>Regular restore testing.</li>
        <li>Defined recovery point objective (RPO) and recovery time objective (RTO).</li>
    </ul>
    <p class="text-lg text-gray-700 mt-3 leading-8">Interview answer: A backup is useful only if it can be restored. I would test the restore procedure regularly and verify that the recovery process meets the business's RPO and RTO requirements.</p>
</div>















</div></section>


 </div>
 
<br>
<div class="clear nextprev">
<a class="left btn" href="{{url('interviews/php-interview-question-answer')}}">&#10094; Previous</a>
<a class="right btn" href="{{url('interviews/technical-logic-question-answer')}}">Next &#10095;</a>
</div>
</div>
 
</div>
   
  @endsection