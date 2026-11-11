 @extends('interview.layouts.app')
@section('title')
PHP Interview Questions & Answers
@endsection 
@section('description'),  
Prepare with PHP interview questions and answers covering OOP, arrays, sessions, MySQL, security, APIs, and advanced PHP concepts.
@endsection
@section('content')	 
<div class='main light-grey' id='belowtopnav' style='margin-left:220px;'>
  <div class='row white'>
    <div class='col l11 m12' id='main'>       
    <h1>PHP<span class="color_h1"> Interview Question & Answer</span></h1>
    <div class="clear nextprev">
    <a class="left btn" href="{{url('interviews/php-interview-question-answer')}}">&#10094; Previous</a>
    <a class="right btn" href="{{url('interviews/mysql-interview-question-answer')}}">Next &#10095;</a>
    </div>
    <hr>
 <div class="light">
  
 <section id="services-section" class="py-12 bg-gray-100">
  
 <div class="container mx-auto px-4">
  
 <div class="mb-12">
  <div class="question">
 <h2>What is PHP?</h2> 
 </div>
 <p class="text-lg text-gray-700">PHP stands for <strong>"Hypertext Preprocessor"</strong> a widely-used, open-source, server-side scripting language ideal for building dynamic websites, web applications, and mobile APIs.</p><p class="text-lg text-gray-700">It supports a wide range of databases, including:<strong>MySQL, PostgreSQL, Oracle, Sybase, Solid, Generic ODBC</strong></p><p><strong>PHP</strong> Originally developed by Rasmus Lerdorf in 1994, PHP has grown into a powerful tool for building interactive and data-driven websites.</p></div><div class="mb-12">
  
 <div class="question">
 <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is a session in PHP?</h2>
 </div>
 
 <p class="text-lg text-gray-700">A <strong>session</strong> is a way to store information (variables) across multiple pages. </p><p>Session data is stored on the server and stored on the user's browser.</p><p>Session is a temporary storage Data while close the browser then the session times out.</p><p>Session unique ID assigns to unique ID (PHPSESSID) of each session.</p><p class="text-lg text-gray-700"><strong>The Start a session</strong> session_start();</p><p class="text-lg text-gray-700"><strong>Set session variables:</strong> <span class="shadow-lg p-2">$_SESSION['username'] = 'john_doe';</span></p><p class="text-lg text-gray-700"><strong>Access session variables</strong> <span class="shadow-lg p-2">echo $_SESSION['username']; </span></p><p class="text-lg text-gray-700"><strong>Unset or destroy a session</strong> <span class="shadow-lg p-2">unset($_SESSION['username']); session_destroy(); </span></p>

</div>
 
 
 <div class="mb-12">
  


 <div class="question">
 <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What are cookies?</h2>
 
 </div>
 
 
 
 <p class="text-lg text-gray-700">A <strong>Cookies</strong> is store information client computer your web browser. </p><p>They store data about a user on the browser.</p><p>Session is a temporary storage Data while close the browser then the session times out.</p><p class="text-lg text-gray-700"><strong>Session Cookies:</strong> <span class="shadow-lg p-2">Temporary; deleted when you close your browser.</span></p><p class="text-lg text-gray-700"><strong>Persistent Cookies</strong> <span class="shadow-lg p-2">Stored on your device for a set time. </span></p><p class="text-lg text-gray-700"><strong>Setcookie</strong> <span class="shadow-lg p-2">setcookie(name, value, expire, path, domain, secure, httponly);
// Cookie
setcookie(&quot;username&quot;, &quot;Brijesh&quot;, time() + 3600, &quot;/&quot;);


 </span></p>

</div>
 
 
 <div class="mb-12">
 <div class="question"> 
 <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between the include() and require() functions?</h2>
 </div>
 <p>Both are used to include a file within another PHP script</p><p class="text-lg text-gray-700"><strong>include() function</strong> <span class="shadow-lg p-2">If the file is not found or fails to load, include() generates a warning (E_WARNING), but the script continues to execute.</span></p><p class="text-lg text-gray-700"><strong>require():</strong> <span class="shadow-lg p-2">When the file is require cannot be found, it will produce a fatal error (E_COMPILE_ERROR) and stops the execution of the script. </span></p></div>
 
 
 <div class="mb-12">
 <div class="question"> 
 <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between the $_GET[] and $_POST[]?</h2>
 </div>
 <table><thead><tr><th style="width:350px;"><span>$_GET[]</span></th><th style="width:350px;"><span>$_POST[]</span></th></tr></thead>
 
 
 <tbody><tr><td ><span>Appended to the URL (query string)</span></td><td ><span>Sent in the HTTP request body.</span></td></tr><tr><td ><span>	Visible in the URL (e.g., ?id=123)</span></td><td ><span>Hidden from the URL.</span></td></tr><tr><td ><span>Maximum Length Limited 2000 characters</span></td><td ><span>No significant limit.</span></td></tr><tr><td ><span>Use Case	For retrieving data (search, filters, links)</span></td><td ><span>For submitting sensitive or large data (login, form submission).</span></td></tr><tr><td ><span>Not Security visible in browser history and server logs</span></td><td ><span>More secure for confidential data.</span></td></tr><tr><td ><span>Can be cached</span></td><td ><span>Not cached</span></td></tr><tr><td ><span>echo $_GET['name'];</span></td><td ><span>echo $_POST['email'];</span></td></tr></tbody></table></div>
 
 
 
 <div class="mb-12">
 <div class="question"> 
 <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between the echo  and print?</h2>
 </div>
 
 <table><thead><tr><th style="width:350px;"><span>Echo</span></th><th style="width:350px;"><span>Print</span></th></tr></thead><tbody><tr><td ><span>echo can output one or more strings.</span></td><td ><span>print can only output one string and it always returns 1.</span></td></tr><tr><td ><span>	echo is faster than print because it does not return any value.</span></td><td ><span>print is slower compared to echo.</span></td></tr><tr><td ><span>If you want to pass more than one parameter to echo, a parenthesis should be used.</span></td><td ><span>Use of parenthesis is not required with the argument list.</span></td></tr><tr><td ><span>Supports multiple arguments: echo "A", "B";</span></td><td ><span>Only one argument: print("A");.</span></td></tr></tbody></table></div>
 
 <div class="mb-12">
 <div class="question">  
 <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What does PEAR stands for?</h2>
 </div>
 <p class="text-lg text-gray-700"><strong>PEAR</strong> stands for <strong>“PHP Extension and Application Repository”.</strong> PEAR is a framework and repository for all of the reusable PHP components.</p><p class="text-lg text-gray-700">A structured library of open-source code for PHP developers.</p><p class="text-lg text-gray-700">A command-line tool to install packages.</p><p class="text-lg text-gray-700">A standardized way to write and share PHP code.</p></div>
 
 
 <div class="mb-12">
  <div class="question"> 
 <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is Variables in PHP?</h2>
 </div>
 <p class="text-lg text-gray-700"><strong>Variables</strong>are "containers" for storing information.</p><p class="text-lg text-gray-700"> <strong>$ sign</strong> A variable starts with the $ sign, followed by the name of the variable.</p><p class="text-lg text-gray-700"><strong>Underscore variable </strong>A variable name must start with a letter or the underscore character.</p><p class="text-lg text-gray-700"><strong>Number variable</strong>A variable name cannot start with a number.</p><p class="text-lg text-gray-700"><strong>Alpha numeric</strong>A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )</p><p class="text-lg text-gray-700"><strong>Case sensitive</strong>Variable names are case-sensitive ($age and $AGE are two different variables)</p>
 <div class="example">
 <div class="code">
 <code>$a = '1';<br>
   echo $b = &amp;<br>
   $a; <br>
   echo $c= "2$b"; <br>
   First Output: 1; <br>
   Second Output: 21;<br>
  
 $i = 5; <br>
 echo $i++; // 5<br>
  echo $i++; // 6<br>
   echo ++$i; // 8 <br>
   echo $i //8
  </code></div>
 </div>
 </div>
 
 <div class="mb-12">
 <div class="question">  
 <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between ASP.NET and PHP?</h2>
 </div>
 <table><thead><tr><th style="width:350px;"><span>ASP.NET</span></th><th style="width:350px;"><span>PHP</span></th></tr></thead><tbody><tr><td ><span>A web application framework.</span></td><td ><span>A server-side scripting language.</span></td></tr><tr><td ><span>It is designed for use on Windows</span></td><td ><span>It is Platform independent.</span></td></tr><tr><td ><span>Code is compiled and executed.</span></td><td ><span>Interpreted mode of execution.</span></td></tr><tr><td ><span>It has a license cost associated with it.</span></td><td ><span>PHP is open-source and freely available.</span></td></tr></tbody></table></div>
 
 
 <div class="mb-12">
 <div class="question">  
 <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Explain the main types of errors.</h2>
 </div>
 <p class="text-lg text-gray-700"><strong>Notices</strong> Notices are non-critical errors that can occur during the execution of the script. These are not visible to users.</p><p class="text-lg text-gray-700"><strong>Warnings:</strong> error are more critical than notices. Warnings don’t interrupt the script execution. By default, these are visible to the user. Example: include() a file that doesn’t exist..</p><p class="text-lg text-gray-700"><strong>Fatal:</strong> This is the most critical error type and Happens when PHP cannot continue execution. example:  require() a non-existent file</p><p class="text-lg text-gray-700"><strong>ini_set('display_errors', 1):</strong>Purpose of display errors on the browser screen. </p><p class="text-lg text-gray-700"><strong>ini_set('display_startup_errors', 1):</strong> Purpose of PHP to display errors that occur during PHPs startup sequence.</p><p class="text-lg text-gray-700"><strong>error_reporting(E_ALL):</strong>Purpose of which types of errors should be reported,  Report all types of errors display. </p><p class="text-lg text-gray-700"><strong>ini_set('display_errors', 0):</strong>Purpose of Disables error display , Do not show errors to users. </p><p class="text-lg text-gray-700"><strong>ini_set('log_errors', 1):</strong>When set to 1, Log errors to a file. </p></div>
 
 
 
 <div class="mb-12">
 <div class="question">  
 <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between the in_array() and is_array() and array_search functions?</h2>
 </div>
 <p class="text-lg text-gray-700"><strong>is_array()</strong> <span class="shadow-lg p-2">Checks if a variable is an array.</span></p>
 
  <xmp> if (is_array($data)) </xmp></pre><p class="text-lg text-gray-700"><strong>in_array():</strong>Checks if a value exists in an array.</p> 
  
 <xmp> if (in_array('green', $colors)) </xmp></pre><p class="text-lg text-gray-700"><strong>array_search():</strong>Searches an array for a value and returns the key/index if found.</p>
 
  <xmp> $key = array_search('green', $colors); </xmp></div>
 
 
 <div class="mb-12">
 <div class="question">  
 <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is Composer?</h2>
 </div>
 <p>Composer is a dependency management tool for PHP.</p><p>It allows you to <strong> install, manage, and update </strong>external libraries (packages) that your project depends on.</p><p class="text-lg text-gray-700"><strong>Composer Update: </strong> update all dependencies to the newest version allosed by your composer.json</p><p>Download and install the latest allowed packages versions</p><p>Update the composer.lock file when you want to upgrade package to newer versions</p><p>When you want to refresh the package list after modifying composer.json and set the path</p><p class="text-lg text-gray-700"><strong>Composer install:</strong>Install dependencies listed in your composer.lock.</p><p> you clone a project pr deploy it to a server </p><p> Read composer.lock and install exact versions of package</p><p> if no composer.lock exist it all back to composer.json and create a composer.lock</p><p class="text-lg text-gray-700"><strong>Composer- dump-autoload:</strong>regenerate the autoload files.</p><p>You are added new classes, removed classes or changed</p><p>Namespaced - but didnot change composer.json</p><p>No package installation or update Happens, just refresh vendor- autoload.php</p></div>
 
 
 <div class="mb-12">
 <div class="question">  
 <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How to wesite optimization?</h2>
 </div>
 <ul><li><p>Implemeting caching machanisms.</p></li><li><p>Efficient algorithems and data structures.</p></li><li><p>Optimizing database query.</p></li><li><p>Removed unnessary join.</p></li><li><p>Remove Un-nessary function.</p></li><li><p>Minimizing database need of</p></li><li><p>Some data store in localization store local</p></li><li><p>Use a CDN (Content Delivery Network): Like Cloudflare or AWS CloudFront</p></li><li><p>Use browser caching to store static files locally.</p></li><li><p>Compress images: Use tools like TinyPNG or WebP format.</p></li><li><p>Lazy load images and videos to reduce initial load time.</p></li><li><p>Use responsive design (CSS media queries or frameworks like Bootstrap).</p></li><li><p>Use indexing for faster queries and Use pagination or limit results for large data sets.</p></li><li><p>Code Remove unused scripts and styles.</p></li><li> <p>Use HTTPS (SSL certificate) , Keep software, plugins, and libraries up-to-date, Sanitize and validate all user input.</p></li>

 <li> <p>Website speed optimization: Reducing file sizes, optimizing images, enabling browser caching</p></li>
 <li> <p>for Website optimization is check of using gtmetrix,PageSpeed Insights or https://pagespeed.web.dev/</p></li>

</ul></div>
 
 
 <div class="mb-12">
 <div class="question">  
 <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Explain the __construct() and __destruct () method in PHP.</h2>
 
 </div>
 <p class="text-lg text-gray-700"><strong>__construct():</strong> If you create a __construct() function, php will automatically call this function when you create an object from a class.</p><ul class="mt-2 bg-gray-200 p-4 shadow-lg"><li class="bg-white p-3 border-l-4 border-green-500 text-sm"><div class="example">
 <div class="code">
  
 <code>
class Mobile {<br>
  &nbsp public $name;<br>
  &nbsp public $color;<br>

  function __construct($name) {<br>
    &nbsp $this-&gt;name = $name;<br>
  }<br>

  function get_name() {<br>
    &nbsp return $this-&gt;name;<br>
  }<br>
}<br>

$iphone = new Mobile("iphone");<br>
echo $iphone-&gt;get_name();<br>
  </code>

</div>
</div>
</li></ul><p class="text-lg text-gray-700"><strong>__destruct():</strong> If you create a __destruct() function, PHP will automatically call this function at the end of the script.</p><ul class="mt-2 bg-gray-200 p-4 shadow-lg"><li class="bg-white p-3 border-l-4 border-green-500 text-sm">
  <div class="example">
 <div class="code">
  
<code>
class Mobile {<br>
  &nbsp public $name;<br>
  &nbsp public $color;<br>

  function __construct($name) {<br>
    &nbsp $this-&gt;name = $name;<br>
  }<br>
 function __destruct() {<br>
    &nbsp echo "The Mobile is {$this-&gt;name}.";<br>
  }<br>
  function get_name() {<br>
    &nbsp return $this-&gt;name;<br>
  }<br>

}<br>

$iphone = new Mobile("iphone");<br>
echo $iphone-&gt;get_name();<br>
  </code></div></div>



</li></ul></div>
  
  
  <div class="mb-12">
  <div class="question">   
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Explain the significance of the header() function in PHP.</h2>
  </div>
  <p class="text-lg text-gray-700"><strong>The header()</strong>  function in PHP is used to send raw HTTP headers to the browser before any output is sent..</p><p class="text-lg text-gray-700"><strong> Syntax:</strong> header(string $header, bool $replace = true, int $response_code = 0);.</p><p class="text-lg text-gray-700"><strong> Redirecting a Page:</strong> header("Location: https://example.com"); exit;.</p><p class="text-lg text-gray-700"><strong>Setting Content-Type:</strong> header("Content-Type: application/json");</p><p class="text-lg text-gray-700"><strong>Force File Download:</strong><ul><li>header("Content-Disposition: attachment; filename=\"file.pdf\"");</li><li>header("Content-Type: application/pdf");</li><li>readfile("file.pdf");</li></ul></p><p class="text-lg text-gray-700"><strong>Custom Status Codes:</strong> header("HTTP/1.1 404 Not Found");</p><p class="text-lg text-gray-700"><strong>Cache Control:</strong><ul><li>header("Cache-Control: no-cache, must-revalidate");</li><li>header("Expires: Sat, 1 Jul 2000 05:00:00 GMT");</li></ul></p><p class="text-lg text-gray-700"><strong>File access Control:</strong><ul><li>header("Access-Control-Allow-Origin: *"); // allow frontend</li><li>header("Access-Control-Allow-Methods: POST, GET, OPTIONS"); // Allow methods</li><li>header("Access-Control-Allow-Headers: Content-Type"); //  Allow headers (like Content-Type)</li><li>header("Access-Control-Allow-Headers: Content-Type, Authorization");</li><li>header("Access-Control-Allow-Credentials: true");</li></ul></p>
  
  </div>
    
    
    <div class="mb-12">
    <div class="question">   
    <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Explain dependency injection in PHP.</h2>
    </div>
    <p class="text-lg text-gray-700">Dependency Injection (DI) is a design pattern used in PHP to pass dependencies (like objects or services) into a class or Constructor, rather than letting the class create them itself.</p><p class="text-lg text-gray-700"><strong> Simple Definition:</strong> Dependency Injection is a technique where an object receives other objects it depends on, instead of creating them internally.</p><p class="text-lg text-gray-700"><strong> Constructor Injection:</strong> Most common; dependencies passed via the constructor.</p><p class="text-lg text-gray-700"><strong>Setter Injection:</strong> Dependencies passed via public setter methods.</p><p class="text-lg text-gray-700"><strong>Interface Injection:</strong>Dependency passed via an interface method.</p>
    
    <h3 class="mt-6 mb-3 text-xl font-semibold text-gray-900">Benefits:</h3>

<ul class="mb-4 list-disc space-y-2 pl-6 text-lg text-gray-700">

<li>Loose coupling between classes.</li>

<li>Easier unit testing and mocking.</li>

<li>Better maintainability.</li>

<li>Easier replacement of implementations.</li>

</ul>
    <ul class="mt-2 bg-gray-200 p-4 shadow-lg"><li class="bg-white p-3 border-l-4 border-green-500 text-sm"><div class="example">
 <div class="code">
    <code>class Database {<br>
    public function connect() {<br>
        &nbsp return "Connected to DB";<br>
    }<br>
}<br>

class UserService {<br>
    private $db;<br>

    // Dependency Injection via constructor
    public function __construct(Database $db) {<br>
        &nbsp $this-&gt;db = $db;<br>
    }<br>

    public function getUser() {<br>
        &nbsp return $this-&gt;db-&gt;connect();<br>
    }<br>
}<br>

// Inject dependency from outside<br>
$db = new Database();<br>
$userService = new UserService($db);<br>
echo $userService-&gt;getUser()<br>

</code>
</div>
<div class="code">
<br>
<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>namespace App\Service;

use App\Repository\ProductRepository;

class ProductService
{
    public function __construct(
        private ProductRepository $productRepository
    ) {}

    public function getProduct(int $id): ?object
    {
        return $this-&gt;productRepository-&gt;find($id);
    }
}</code></pre>

</div></div></li></ul>

</div>

 

<div class="mb-12">
<div class="question">   
<h2 class="text-3xl font-bold text-primary mt-5 mb-4">What's the significance of PSR standards in PHP?</h2>
</div>
<p class="text-lg text-gray-700"><strong>PSR</strong> PHP Standard recommendation.</p><p>ites a set of coding standards and guidelines for php designed to promote consistency</p><p class="text-lg text-gray-700"><strong>PSP-1:</strong> basic coding standard defines basic rules like using 

 php tags, properClass naming convestions getClassName() <br>

</p><p class="text-lg text-gray-700"><strong>PSR-2:</strong>Coding style guid, code formating rules like indentation, line lenght,spacing.</p>

<p class="text-lg text-gray-700"><strong>PSR-12:</strong> extended coding style guide -code formatting including whitespace, visibility and method declaration.</p>

<p class="text-lg text-gray-700"><strong>PSR-3:</strong>Logger interface</p>


<p class="text-lg text-gray-700"><strong>PSR-4:</strong>Autoloading standard - autoloading classes using namespaces , its widly used.</p><p class="text-lg text-gray-700"><strong>PSR-7:</strong>HTTP message interface- http request and responses.</p><p class="text-lg text-gray-700"><strong>PSR-11:</strong>container interface.</p><p class="text-lg text-gray-700"><strong>PSR-14:</strong>Event dispatches.</p><p class="text-lg text-gray-700"><strong>PSR-15:</strong>HTTP server request handles.</p>


</div>


<div class="mb-12">
<div class="question">  
<h2 class="text-3xl font-bold text-primary mt-5 mb-4">What's the OOPs PHP?</h2>
</div>
<p class="mt-3 text-lg leading-8 text-gray-700">OOP stands for Object-Oriented Programming. It is a programming approach based on classes and objects.</p>
<p class="text-lg text-gray-700"><strong>Class: </strong>Classes define the blueprint for creating objects.</p>

<pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>class Employee
{
    public $name = &quot;Brijesh&quot;;

    public function getName()
    {
        return $this-&gt;name;
    }
}

$employee = new Employee();

echo $employee-&gt;getName();</code></pre>

<p class="text-lg text-gray-700"><strong>Object:</strong> Objects are instance of classes an instance of a class containing real data and behavior.</p>

<p class="text-lg text-gray-700"><strong>Encapsulation:</strong>

Encapsulation is the process of bundling data and the methods that operate on that data into a single unit while restricting direct access to the internal details.</p>

<p class="text-lg text-gray-700">
<ul><li><strong>Definition:</strong> Combining variables (attributes) and functions (methods) into a single class.</li><li><strong>Data Hiding:</strong> Making internal fields private so external code cannot change them directly.</li><li><strong>Controlled Access:</strong>Using public getter and setter methods to read or update hidden data safely. </li><li><strong>Benefit:</strong>Protects data integrity and allows internal code changes without breaking outside programs. </li></ul>
<pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>class Employee
{
    private $salary = 50000;

    public function getSalary()
    {
        return $this-&gt;salary;
    }
}

$obj = new Employee();

echo $obj-&gt;getSalary();</code></pre>


<strong>Access Modifies:</strong>
<ul><li><strong>Public:</strong> Accessible from any where - inside or outside the class.</li><li><strong>Protected:</strong> Accessible within the class and by inheriting class or derived class.</li><li><strong>Private:</strong>Accessible only within the class itself. </li><li><strong>Getters:</strong>Allow you to retrieving the value of private properties. </li><li><strong>Setters:</strong>Allow you to modify the values of private properties sately.</li></ul>




<ul class="mt-2 bg-gray-200 p-4 shadow-lg"><li class="bg-white p-3 border-l-4 border-green-500 text-sm">
  <div class="example">
 <div class="code">  
<code>     
class user {<br>
  &nbsp public $name;<br> 
 public function setName($newName) {<br>
    &nbsp return $this-&gt;name = $newName;<br>
  }<br>
 
 public function getName() {<br>
   &nbsp return $this-&gt;name;<br>
  }<br>
}<br>

$user = new user();<br>
echo $user-&gt;setName('codekredit');<br>
echo $user-&gt;getName();<br>
echo $user-&gt;name(); // error connot access private properties<br>
  
  </code></div></div></li>
</ul></p>
  
  <p class="text-lg text-gray-700"><strong>Inheritance:</strong> a class can inherit properties and methods from another class. </p>
 
<pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>class ParentClass
{
    public function message()
    {
        return &quot;Parent Class&quot;;
    }
}

class ChildClass extends ParentClass
{
    public function display()
    {
        return &quot;Child Class&quot;;
    }
}

$obj = new ChildClass();

echo $obj-&gt;message();</code></pre>




  <p class="text-lg text-gray-700"><strong>Polymorphism:</strong> Polymorphism means one interface or method contract can have multiple implementations. </p>
 <p> .</p>




  <p class="text-lg text-gray-700"><strong>Overloading and Overriding :</strong> </p>
    <p>
   <strong>Overloading :</strong> Function overloading contains same function name but different argument passing.</p>
   
   <p>PHP overloading not supports</p>
   
   <p>Overloading in PHP refers to dynamically creating properties or methods at runtime using magic methods like:_get() __set(), __call() (for methods) ,__isset() / __unset()</p> 
  
  <div class="example">
 <div class="code">
    
  
  
  <code>
   
class OverloadExample {<br>
    &nbsp public function __call($name, $arguments) {<br>
        &nbsp echo "Method $name called with arguments: " . implode(', ', $arguments);<br>
    }<br>
}<br>

$obj = new OverloadExample();<br>
$obj-&gt;hello('Aryan'); // Triggers __call()<br>
 
  </code>

</div></div>

<p><strong>Overriding :</strong> same properies overriding both parent and child classes should have same funciton and argument.</p>

    <div class="example">
 
<div class="code"> 
  
class ParentClass {<br>
   &nbsp public function greet() {<br>
      &nbsp  echo "Hello from Parent";<br>
    }<br>
}<br>

class ChildClass extends ParentClass {<br>
    &nbsp public function greet() {<br>
       &nbsp echo "Hello from Child";<br>
    }<br>
}<br>

$obj = new ChildClass();<br>
$obj-&gt;greet(); // Output: Hello from Child<br>
 
</div> </div>

 
  
  <p class="text-lg text-gray-700"><strong>Abstract Class and Interface class :</strong> </p>
  
  
  
  </div>
  
  <div class="mb-12">
      
      
  <table><thead><tr><th style="width:350px;"><span>Abstract</span></th><th style="width:350px;"><span>Interface</span></th></tr></thead><tbody><tr><td ><span>Abstract class can have both defined method and property.</span></td><td ><span>Interface only can have method signature</span></td></tr><tr><td ><span>Abstract class cannot be create object only extends</span></td><td ><span>Interface cannot create object instantiated only Implements.</span></td></tr><tr><td ><span>Abstract Class can have modify access public, protected, private methods.</span></td><td ><span>Interface class methods are access public.</span></td></tr><tr><td ><span>Abstract class can have constructor.</span></td><td ><span>Cannot have a constructor</span></td></tr><tr><td ><span>Child classes must extend the abstract class and implement its abstract methods.</span></td><td ><span>A class that implements an interface must implement all its methods.</span></td></tr><tr><td ><span>Abstract class single inheritance(one class).</span></td><td ><span>Interface class multiple inheritance </span></td></tr>
  
  <tr><td><div class="example">
 <div class="code">     
  <code>   
abstract class Payment {<br>
    &nbsp abstract public function pay();<br>

    public function paySuccess() {<br>
        &nbsp echo "Payment success";<br>
    }<br>
}<br>

class Paypal extends Payment {<br>
   &nbsp public function pay($amount) {<br>
       &nbsp echo "pay amount $amount";<br>
    }<br>
}<br>

$dog = new Paypal();<br>
$dog-&gt;pay(5000); // Output: pay!<br>
$dog-&gt;paySuccess();     // Output: pay success...<br>


$test = New Payment(); // wrong not direct object create<br>
  </code>

</div></div></td>
<td>  
  <div class="example">
 <div class="code"><code>
interface login<br>
{<br>
    public function login($data);<br>
     
}<br>

interface logout<br>
{<br>
    public function logout($data);<br>
    
}<br>

class user implements login, logout<br>
{<br>
    private $data;<br>

    public function __construct($data)<br>
    {<br>
        $this->data = $data;<br>
    }<br>

    public function login($data)<br>
    {<br>
        return "User login ".$data;<br>
    }<br>

    public function logout($data)<br>
    {<br>
        return "User Logout: all sessions destroyed for " . $data;<br>
    }<br>
}<br>

$payment = new user("34789");<br>

echo $payment->login(34789);<br>

 
   </code></div></div></td></tr></tbody></table>
  </div>

<div class="mb-12">
  <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is Static Class?</h2>
  </div>
  <p class="text-lg text-gray-700">A<strong> static</strong> class is a class that cannot be instantiated and  can’t create objects.</p>
  <p>Only contains static methods and variables.</p>
  <p>PHP does not have a "static class" keyword, but you can make all methods static:</p>
<div class="example">
 <div class="code">
 
<code>  class MathHelper {<br>
    public static function add($a, $b) {<br>
       &nbsp return $a + $b;<br>
    }<br>
}<br>

$result = MathHelper::add(4, 6); // call :: <br>
  
</code>
</div>
</div>



</div>

<div class="mb-12">
  <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Autowiring and Autoconfiguration?</h2>
  </div>
  <p class="text-lg text-gray-700">These concepts are especially common in Symfony.</p>
   <p class="text-lg text-gray-700"><strong> Autowiring.</strong> </p>
   <p>Symfony automatically determines which dependencies need to be injected based on type hints.</p>
<div class="example">
 <div class="code">
 
<code> class UserController</br>
{</br>
    public function __construct(</br>
        private UserService $userService</br>
    ) {</br>

    }</br>
}</br>

Automatically resolves dependencies.
</code>
</div>
</div>

<p class="text-lg text-gray-700"><strong> Autoconfiguration.</strong> </p>
   <p>Symfony automatically configures services based on their interfaces/base classes.</p>
<div class="example">
 <div class="code">
 
<code> class UserEventSubscriber implements EventSubscriberInterface</br>
{</br>
}</br>

Automatically applies service configuration/tags based on the class/interface.
</code>
</div>
</div>

</div>
  
  
  

<div class="mb-12">
  <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is Final Class?</h2>
  </div>
  <p class="text-lg text-gray-700">A<strong> Final Class </strong> cannot be extended any other class.</p>
   <p class="text-lg text-gray-700">A<strong> Final method </strong> cannot be overridden by subclasses.</p>
   
   <div class="example">
 
<div class="code">
 
<code> final class Car {<br>
    public function drive() {<br>
      &nbsp  echo "Drivering the car";<br>
    }<br>
}<br>

$car = New Car();<br>
$car->drive();<br>
 
</code>
</div>
</div>



</div>
  
  


<div class="mb-12">
  <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What are SOLID principles?</h2>
  </div>
  <ul><li>
 <strong>S – Single Responsibility Principle (SRP)</strong> 
<p>A class should have one responsibility and only one reason to change.</p>
<p>Each class should do only one job.</p>
<div class="example">
 
<div class="code">
 
<code> // ❌ Bad: One class handles both user data and email<br>
class User {<br>
&nbsp public function save() { /* Save user */ }<br>
   &nbsp public function sendEmail() { /* Send email */ }<br>
}<br>

// ✅ Good: Split responsibilities<br>
class User {<br>
    &nbsp public function save() { /* Save user */ }<br>
}<br>

class EmailService {<br>
    &nbsp public function sendEmail(User $user) { /* Send email */ }<br>
}<br>
 
</code>
</div>
</div>
</li><li>

<strong>O – Open/Closed Principle (OCP)</strong>
<p>A class should be open for extension, but closed for modification</p> 
<p>You should be able to extend a class's behavior without modifying it..</p>
<div class="example">
 
<div class="code notranslate htmlHigh">
 
<code> // ❌ Bad: Need to change this class every time we add a new payment method<br>
class Payment {<br>
    public function pay($type) {<br>
        if ($type == 'paypal') { /* PayPal logic */ }<br>
        if ($type == 'card') { /* Card logic */ }<br>
    }<br>
}<br>

// ✅ Good: Use inheritance to extend behavior<br>
interface PaymentMethod {<br>
    public function pay();<br>
}

class PayPal implements PaymentMethod {<br>
    public function pay() { echo "Pay with PayPal"; }<br>
}

class CreditCard implements PaymentMethod {<br>
    public function pay() { echo "Pay with Card"; }<br>
}<br>

function makePayment(PaymentMethod $payment) {<br>
    $payment->pay();<br>
}<br>
 
</code>
</div>
</div>

</li>

<li>

<strong>L – Liskov Substitution Principle (LSP)</strong>
<p>Objects of a subclass should be substitutable for objects of the superclass without altering correctness.</p>
<p>Subtypes must be substitutable for their base types.</p>
<p>Any child class should be usable in place of the parent class without breaking the app.</p>
<div class="example">
 
<div class="code">
 
<code> class Bird {<br>
    public function fly() { echo "Flying"; }<br>
}<br>

class Ostrich extends Bird {<br>
    public function fly() { throw new Exception("I can't fly"); } // ❌ Violates LSP<br>
}<br>

//Fix by restructuring the hierarchy:<br>

 
abstract class Bird { }<br>

class FlyingBird extends Bird {<br>
    public function fly() { echo "Flying"; } //right<br>
}<br>

class Ostrich extends Bird { }<br>
 
</code>
</div>
</div>
</li><li> 
<strong>I – Interface Segregation Principle (ISP)</strong>
<p>A client should not be forced to implement interfaces it does not use.</p>
<p>Split large interfaces into smaller, more specific ones.</p>
<div class="example">
 
<div class="code">
 
<code> // ❌ Bad: Animal interface forces all to implement fly()<br>
interface Animal {<br>
    public function eat();<br>
    public function fly();<br>
}<br>

class Dog implements Animal {<br>
    public function eat() { <br>
      echo "Dog eating"; <br>
    }<br>
    public function fly() {<br>

     } <br>
     // ❌ Dog can't fly<br>
}<br>

// ✅ Good: Separate interfaces<br>
interface Animal {<br>
    public function eat();<br>
}<br>

interface Flyable {<br>
    public function fly();<br>
}<br>

class Dog implements Animal {<br>
    public function eat() { 
      echo "Dog eating";<br>
     }<br>
}<br>

class Bird implements Animal, Flyable {<br>
    public function eat() { <br>
      
      echo "Bird eating"; <br>
    }<br>
    public function fly() { <br>
      
      echo "Bird flying";<br>
    
    }<br>
}<br>

 
</code>
</div>
</div>

</li>

<li> 
<strong>D – Dependency Inversion Principle (DIP)</strong>
<p>Depend on abstractions, not on concretions.</p>
<p>High-level modules should not depend on low-level modules. , but both should depend on abstractions Or interfaces.</p>
 <div class="example">
 
<div class="code">
 
<code> // ❌ Bad: Tightly coupled<br>
class MySQL {<br>
    public function connect() { <br>
      
      /* MySQL connection */<br>
    
    }<br>
}<br>

class App {<br>
    private $db;<br>
    public function __construct() {<br>
        $this->db = new MySQL(); // tightly coupled<br>
    }<br>
}<br>

// ✅ Good: Use an interface<br>
interface Database {<br>
    public function connect();<br>
}<br>

class MySQL implements Database {<br>
    public function connect() { <br>
      
      /* MySQL connection */<br>
    
    }<br>
}<br>

class MongoDB implements Database {<br>
    public function connect() { <br>
      
      /* MongoDB connection */ <br>
    
    }<br>
}<br>

class App {<br>
    private $db;<br>
    public function __construct(Database $db) {<br>
        $this->db = $db;<br>
    }<br>
}<br>

 
</code>
</div>
</div>
</li>

</ul>


</div>
  






<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q3. What is the difference between an interface, an abstract class, and a trait in PHP?</h2></div>

<div class="my-5 overflow-x-auto"><table class="w-full border-collapse text-left text-gray-700">

<tr><th class="border border-gray-200 p-3">Feature</th><th class="border border-gray-200 p-3">Interface</th><th class="border border-gray-200 p-3">Abstract class</th><th class="border border-gray-200 p-3">Trait</th></tr>

<tr><td class="border border-gray-200 p-3">Purpose</td><td class="border border-gray-200 p-3">Defines a contract</td><td class="border border-gray-200 p-3">Shares common behavior and structure</td><td class="border border-gray-200 p-3">Reuses methods across classes</td></tr>

<tr><td class="border border-gray-200 p-3">Multiple usage</td><td class="border border-gray-200 p-3">A class can implement multiple interfaces</td><td class="border border-gray-200 p-3">A class can extend only one class</td><td class="border border-gray-200 p-3">A class can use multiple traits</td></tr>

<tr><td class="border border-gray-200 p-3">State</td><td class="border border-gray-200 p-3">No instance properties defining object state</td><td class="border border-gray-200 p-3">Can have properties</td><td class="border border-gray-200 p-3">Can have properties</td></tr>

<tr><td class="border border-gray-200 p-3">Method implementation</td><td class="border border-gray-200 p-3">Can declare method signatures; modern PHP also supports constants</td><td class="border border-gray-200 p-3">Can contain abstract and concrete methods</td><td class="border border-gray-200 p-3">Can contain implemented methods</td></tr>

</table></div>

<p class="mb-4 text-lg leading-8 text-gray-700">Senior-level example: Define a ProductImporterInterface for the contract, implement separate CSV and API importers, and inject the required implementation into a service. This keeps the code testable and follows the Dependency Inversion Principle.</p>

</div>






<!-- HTML/Blade partial. PHP examples below are escaped display text, not executable PHP. -->

<div class="mb-12">
    <div class="question">
        <h2 class="mb-4 mt-5 text-3xl font-bold text-blue-700">What is PHP?</h2>
    </div>
<p class="mt-3 text-lg leading-8 text-gray-700">PHP stands for Hypertext Preprocessor. It is an open-source, server-side scripting language primarily used for developing dynamic websites and web applications.</p>
<p class="mt-3 text-lg leading-8 text-gray-700">Key features:</p>
<ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700"><li>Open-source and platform-independent.</li><li>Supports MySQL, PostgreSQL, SQLite and other databases.</li><li>Supports Object-Oriented Programming (OOP).</li><li>Provides session and cookie management.</li><li>Supports REST API development.</li><li>Integrates with HTML, CSS, JavaScript and frameworks like Laravel.</li></ol>
<p class="mt-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>&lt;?php
$name = &quot;Brijesh&quot;;
echo &quot;Welcome &quot; . $name;
?&gt;</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mb-4 mt-5 text-3xl font-bold text-blue-700">What are the differences between GET and POST methods?</h2>
    </div>
<div class="my-4 overflow-x-auto"><table class="w-full border-collapse text-left text-sm"><thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">GET</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">POST</th></tr></thead><tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Sends data through URL parameters</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Sends data in the request body</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Data is visible in URL</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Data is not normally visible in URL</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Suitable for fetching data</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Suitable for submitting data</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Can be bookmarked</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Cannot normally be bookmarked with form data</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Limited by URL length</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Supports larger request bodies</td></tr></tbody></table></div>
<p class="mt-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>// GET
$id = $_GET[&#x27;id&#x27;] ?? null;

// POST
$name = $_POST[&#x27;name&#x27;] ?? null;</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mb-4 mt-5 text-3xl font-bold text-blue-700">What is the difference between echo and print?</h2>
    </div>
<p class="mt-3 text-lg leading-8 text-gray-700">echo:</p>
<ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700"><li>Used to display one or more strings.</li><li>Does not return a value.</li><li>Slightly more flexible because it accepts multiple arguments.</li></ul>
<p class="mt-3 text-lg leading-8 text-gray-700">print:</p>
<ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700"><li>Displays a single string.</li><li>Always returns 1.</li><li>Can be used in expressions.</li></ul>
<pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>echo &quot;Hello&quot;, &quot; PHP&quot;;

print &quot;Hello PHP&quot;;</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mb-4 mt-5 text-3xl font-bold text-blue-700">What are the differences between == and ===?</h2>
    </div>
<p class="mt-3 text-lg leading-8 text-gray-700">== (Loose comparison): Compares values after type conversion.</p>
<p class="mt-3 text-lg leading-8 text-gray-700">=== (Strict comparison): Compares both value and data type.</p>
<pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>$a = 10;
$b = &quot;10&quot;;

var_dump($a == $b);  // true
var_dump($a === $b); // false</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mb-4 mt-5 text-3xl font-bold text-blue-700">What is the difference between isset() and empty()?</h2>
    </div>
<p class="mt-3 text-lg leading-8 text-gray-700">isset(): Checks whether a variable is declared and its value is not null.</p>
<p class="mt-3 text-lg leading-8 text-gray-700">empty(): Checks whether a variable is empty or evaluates to false.</p>
<pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>$name = &quot;&quot;;

var_dump(isset($name)); // true
var_dump(empty($name)); // true

$age = null;

var_dump(isset($age)); // false
var_dump(empty($age)); // true</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mb-4 mt-5 text-3xl font-bold text-blue-700">What are the different types of arrays in PHP?</h2>
    </div>
<p class="mt-3 text-lg leading-8 text-gray-700">PHP supports three main types of arrays:</p>
<ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700"><li>Indexed Array – Uses numeric indexes.</li><li>Associative Array – Uses named keys.</li><li>Multidimensional Array – Contains arrays inside another array.</li></ol>
<pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>// Indexed array
$colors = [&quot;Red&quot;, &quot;Green&quot;, &quot;Blue&quot;];

// Associative array
$user = [
    &quot;name&quot; =&gt; &quot;Brijesh&quot;,
    &quot;age&quot; =&gt; 30
];

// Multidimensional array
$users = [
    [&quot;name&quot; =&gt; &quot;Amit&quot;, &quot;age&quot; =&gt; 25],
    [&quot;name&quot; =&gt; &quot;Rahul&quot;, &quot;age&quot; =&gt; 28]
];</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mb-4 mt-5 text-3xl font-bold text-blue-700">What is the difference between include and require?</h2>
    </div>
<div class="my-4 overflow-x-auto"><table class="w-full border-collapse text-left text-sm"><thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">include</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">require</th></tr></thead><tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Generates a warning if the file is missing</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Generates an error if the file is missing</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Script generally continues</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Script execution stops</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Used for optional files</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Used for essential files</td></tr></tbody></table></div>
<pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>include &#x27;header.php&#x27;;
require &#x27;config.php&#x27;;</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mb-4 mt-5 text-3xl font-bold text-blue-700">What is the difference between include_once and require_once?</h2>
    </div>
<p class="mt-3 text-lg leading-8 text-gray-700">Both statements ensure that a file is included only once during script execution.</p>
<ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700"><li><code class="rounded bg-slate-100 px-1 py-0.5 text-sm text-slate-900">include_once</code>: Produces a warning if the file is missing.</li><li><code class="rounded bg-slate-100 px-1 py-0.5 text-sm text-slate-900">require_once</code>: Stops execution if the file is missing.</li></ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mb-4 mt-5 text-3xl font-bold text-blue-700">What is the difference between unset() and unlink()?</h2>
    </div>
<ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700"><li><code class="rounded bg-slate-100 px-1 py-0.5 text-sm text-slate-900">unset()</code> removes a variable or array element.</li><li><code class="rounded bg-slate-100 px-1 py-0.5 text-sm text-slate-900">unlink()</code> deletes a file from the filesystem.</li></ul>
<pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>$name = &quot;Brijesh&quot;;
unset($name);

unlink(&quot;test.txt&quot;);</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mb-4 mt-5 text-3xl font-bold text-blue-700">What is the difference between explode() and implode()?</h2>
    </div>
<ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700"><li><code class="rounded bg-slate-100 px-1 py-0.5 text-sm text-slate-900">explode()</code> converts a string into an array.</li><li><code class="rounded bg-slate-100 px-1 py-0.5 text-sm text-slate-900">implode()</code> converts an array into a string.</li></ul>
<pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>$str = &quot;PHP,Laravel,MySQL&quot;;

$arr = explode(&quot;,&quot;, $str);

echo implode(&quot; | &quot;, $arr);

// PHP | Laravel | MySQL</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mb-4 mt-5 text-3xl font-bold text-blue-700">What is OOP in PHP?</h2>
    </div>
<p class="mt-3 text-lg leading-8 text-gray-700">OOP stands for Object-Oriented Programming. It is a programming approach based on classes and objects.</p>
<p class="mt-3 text-lg leading-8 text-gray-700">It helps developers create reusable, maintainable, scalable and structured applications.</p>
<p class="mt-3 text-lg leading-8 text-gray-700">Four main pillars of OOP:</p>
<ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700"><li>Encapsulation</li><li>Inheritance</li><li>Polymorphism</li><li>Abstraction</li></ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mb-4 mt-5 text-3xl font-bold text-blue-700">What is a class and an object?</h2>
    </div>
<p class="mt-3 text-lg leading-8 text-gray-700">Class: A blueprint that defines properties and methods.</p>
<p class="mt-3 text-lg leading-8 text-gray-700">Object: An instance of a class that can access its properties and methods.</p>
<pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>class Employee
{
    public $name = &quot;Brijesh&quot;;

    public function getName()
    {
        return $this-&gt;name;
    }
}

$employee = new Employee();

echo $employee-&gt;getName();</code></pre>
</div>


   

<div class="mb-12">
    <div class="question">
        <h2 class="mb-4 mt-5 text-3xl font-bold text-blue-700">What is a trait in PHP?</h2>
    </div>
<p class="mt-3 text-lg leading-8 text-gray-700">A trait is a mechanism for code reuse in PHP. It allows multiple classes to reuse methods without inheritance.</p>
<pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>trait Logger
{
    public function logMessage()
    {
        return &quot;Log saved successfully&quot;;
    }
}

class User
{
    use Logger;
}

$obj = new User();

echo $obj-&gt;logMessage();</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mb-4 mt-5 text-3xl font-bold text-blue-700">What is the difference between self and $this?</h2>
    </div>
<div class="my-4 overflow-x-auto"><table class="w-full border-collapse text-left text-sm"><thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">self</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">$this</th></tr></thead><tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Refers to the class where the method is defined</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Refers to the current object</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Used for static properties and methods</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Used for instance properties and methods</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Uses <code class="rounded bg-slate-100 px-1 py-0.5 text-sm text-slate-900">::</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Uses <code class="rounded bg-slate-100 px-1 py-0.5 text-sm text-slate-900">-&gt;</code></td></tr></tbody></table></div>
<pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>class Test
{
    public static $count = 10;

    public function show()
    {
        echo self::$count;
        echo $this-&gt;getValue();
    }

    public function getValue()
    {
        return 20;
    }
}</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mb-4 mt-5 text-3xl font-bold text-blue-700">What is a constructor and destructor?</h2>
    </div>
<p class="mt-3 text-lg leading-8 text-gray-700">Constructor: Automatically executes when an object is created.</p>
<p class="mt-3 text-lg leading-8 text-gray-700">Destructor: Automatically executes when an object is destroyed or during shutdown.</p>
<pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>class Database
{
    public function __construct()
    {
        echo &quot;Database connected&quot;;
    }

    public function __destruct()
    {
        echo &quot;Database object destroyed&quot;;
    }
}

$obj = new Database();</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mb-4 mt-5 text-3xl font-bold text-blue-700">What is method overloading and method overriding?</h2>
    </div>
<p class="mt-3 text-lg leading-8 text-gray-700">Method Overloading: In PHP, similar behavior can be implemented using magic methods such as <code class="rounded bg-slate-100 px-1 py-0.5 text-sm text-slate-900">__call()</code> and <code class="rounded bg-slate-100 px-1 py-0.5 text-sm text-slate-900">__callStatic()</code> to handle inaccessible or undefined method calls.</p>
<p class="mt-3 text-lg leading-8 text-gray-700">Method Overriding: A child class provides its own implementation of an inherited method.</p>
<pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>class ParentClass
{
    public function show()
    {
        echo &quot;Parent&quot;;
    }
}

class ChildClass extends ParentClass
{
    public function show()
    {
        echo &quot;Child&quot;;
    }
}

$obj = new ChildClass();
$obj-&gt;show(); // Child</code></pre>
</div>



<div class="mb-12">
    <div class="question">
        <h2 class="mb-4 mt-5 text-3xl font-bold text-blue-700">What is the difference between static and non-static methods?</h2>
    </div>
<p class="mt-3 text-lg leading-8 text-gray-700">Static method: Can be called directly using the class name without creating an object.</p>
<p class="mt-3 text-lg leading-8 text-gray-700">Non-static method: Requires an object to access it.</p>
<pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>class Demo
{
    public static function show()
    {
        return &quot;Static Method&quot;;
    }

    public function display()
    {
        return &quot;Non Static Method&quot;;
    }
}

echo Demo::show();

$obj = new Demo();
echo $obj-&gt;display();</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mb-4 mt-5 text-3xl font-bold text-blue-700">What is a namespace in PHP?</h2>
    </div>
<p class="mt-3 text-lg leading-8 text-gray-700">A namespace is used to organize classes, interfaces, traits and functions and prevent naming conflicts between different parts of an application.</p>
<pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>namespace App\Services;

class UserService
{
    public function getUser()
    {
        return &quot;User Details&quot;;
    }
}</code></pre>
<p class="mt-3 text-lg leading-8 text-gray-700">Using the class:</p>
<pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>use App\Services\UserService;

$user = new UserService();</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mb-4 mt-5 text-3xl font-bold text-blue-700">What are magic methods in PHP?</h2>
    </div>
<p class="mt-3 text-lg leading-8 text-gray-700">Magic methods are special methods that begin with double underscores (<code class="rounded bg-slate-100 px-1 py-0.5 text-sm text-slate-900">__</code>). PHP automatically calls them when specific operations occur.</p>
<p class="mt-3 text-lg leading-8 text-gray-700">Important magic methods:</p>
<div class="my-4 overflow-x-auto"><table class="w-full border-collapse text-left text-sm"><thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Magic method</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Purpose</th></tr></thead><tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 py-0.5 text-sm text-slate-900">__construct()</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Object creation</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 py-0.5 text-sm text-slate-900">__destruct()</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Object destruction</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 py-0.5 text-sm text-slate-900">__get()</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Access inaccessible properties</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 py-0.5 text-sm text-slate-900">__set()</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Set inaccessible properties</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 py-0.5 text-sm text-slate-900">__call()</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Call inaccessible methods</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 py-0.5 text-sm text-slate-900">__toString()</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Convert object to string</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 py-0.5 text-sm text-slate-900">__clone()</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Clone an object</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 py-0.5 text-sm text-slate-900">__invoke()</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Call an object as a function</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 py-0.5 text-sm text-slate-900">__isset()</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Check inaccessible properties</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 py-0.5 text-sm text-slate-900">__unset()</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Unset inaccessible properties</td></tr></tbody></table></div>
<p class="mt-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>class User
{
    public function __get($name)
    {
        return &quot;Property: &quot; . $name;
    }
}

$user = new User();

echo $user-&gt;username;</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mb-4 mt-5 text-3xl font-bold text-blue-700">What is the difference between final and abstract?</h2>
    </div>
<ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700"><li><code class="rounded bg-slate-100 px-1 py-0.5 text-sm text-slate-900">final</code> prevents a class from being extended or a method from being overridden.</li><li><code class="rounded bg-slate-100 px-1 py-0.5 text-sm text-slate-900">abstract</code> requires a child class to implement abstract methods and prevents direct instantiation of the abstract class.</li></ul>
<pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>final class Payment
{
    public function pay()
    {
        return &quot;Payment successful&quot;;
    }
}</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mb-4 mt-5 text-3xl font-bold text-blue-700">What is the difference between pass by value and pass by reference?</h2>
    </div>
<p class="mt-3 text-lg leading-8 text-gray-700">Pass by Value: A copy of the variable is passed to the function. Changes inside the function do not affect the original variable.</p>
<p class="mt-3 text-lg leading-8 text-gray-700">Pass by Reference: The function receives a reference to the original variable. Changes affect the original variable.</p>
<pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>// Pass by value
function updateValue($num)
{
    $num = 100;
}

$a = 10;
updateValue($a);

echo $a; // 10

// Pass by reference
function updateReference(&amp;$num)
{
    $num = 100;
}

$b = 10;
updateReference($b);

echo $b; // 100</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mb-4 mt-5 text-3xl font-bold text-blue-700">What is a closure in PHP?</h2>
    </div>
<p class="mt-3 text-lg leading-8 text-gray-700">A closure is an anonymous function that can be assigned to a variable, passed as an argument, or returned from another function.</p>
<pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>$message = &quot;Hello&quot;;

$greet = function ($name) use ($message) {
    return $message . &quot; &quot; . $name;
};

echo $greet(&quot;Brijesh&quot;);</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mb-4 mt-5 text-3xl font-bold text-blue-700">What is a generator in PHP?</h2>
    </div>
<p class="mt-3 text-lg leading-8 text-gray-700">A generator allows you to iterate through values one at a time using the <code class="rounded bg-slate-100 px-1 py-0.5 text-sm text-slate-900">yield</code> keyword instead of creating an entire array in memory.</p>
<p class="mt-3 text-lg leading-8 text-gray-700">It is useful for processing large datasets.</p>
<pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>function getNumbers()
{
    for ($i = 1; $i &lt;= 5; $i++) {
        yield $i;
    }
}

foreach (getNumbers() as $number) {
    echo $number . &quot;&lt;br&gt;&quot;;
}</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mb-4 mt-5 text-3xl font-bold text-blue-700">What is the difference between array_map(), array_filter() and array_reduce()?</h2>
    </div>
<div class="my-4 overflow-x-auto"><table class="w-full border-collapse text-left text-sm"><thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Function</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Purpose</th></tr></thead><tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 py-0.5 text-sm text-slate-900">array_map()</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Applies a function to every array element</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 py-0.5 text-sm text-slate-900">array_filter()</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Filters elements based on a condition</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 py-0.5 text-sm text-slate-900">array_reduce()</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Reduces an array to a single value</td></tr></tbody></table></div>
<pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>$numbers = [1, 2, 3, 4, 5];

// Map
$result = array_map(fn($n) =&gt; $n * 2, $numbers);

// Filter
$result2 = array_filter($numbers, fn($n) =&gt; $n &gt; 2);

// Reduce
$result3 = array_reduce(
    $numbers,
    fn($carry, $n) =&gt; $carry + $n,
    0
);</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mb-4 mt-5 text-3xl font-bold text-blue-700">What is the difference between array_merge() and array_combine()?</h2>
    </div>
<p class="mt-3 text-lg leading-8 text-gray-700">array_merge(): Combines two or more arrays.</p>
<p class="mt-3 text-lg leading-8 text-gray-700">array_combine(): Creates a new associative array using one array as keys and another as values.</p>
<pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>$a = [&quot;PHP&quot;, &quot;Laravel&quot;];
$b = [&quot;React&quot;, &quot;MySQL&quot;];

print_r(array_merge($a, $b));

$keys = [&quot;name&quot;, &quot;age&quot;];
$values = [&quot;Brijesh&quot;, 30];

print_r(array_combine($keys, $values));</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mb-4 mt-5 text-3xl font-bold text-blue-700">What is exception handling in PHP?</h2>
    </div>
<p class="mt-3 text-lg leading-8 text-gray-700">Exception handling is a mechanism used to handle runtime problems without abruptly terminating the application.</p>
<p class="mt-3 text-lg leading-8 text-gray-700">PHP provides:</p>
<ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700"><li><code class="rounded bg-slate-100 px-1 py-0.5 text-sm text-slate-900">try</code> – Contains code that may throw an exception.</li><li><code class="rounded bg-slate-100 px-1 py-0.5 text-sm text-slate-900">catch</code> – Handles the exception.</li><li><code class="rounded bg-slate-100 px-1 py-0.5 text-sm text-slate-900">finally</code> – Executes whether an exception occurs or not.</li><li><code class="rounded bg-slate-100 px-1 py-0.5 text-sm text-slate-900">throw</code> – Throws an exception.</li></ul>
<pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>try {
    $number = 10;

    if ($number &gt; 5) {
        throw new Exception(&quot;Number is greater than 5&quot;);
    }
} catch (Exception $e) {
    echo $e-&gt;getMessage();
} finally {
    echo &quot;Execution completed&quot;;
}</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mb-4 mt-5 text-3xl font-bold text-blue-700">What is the difference between Exception and Error?</h2>
    </div>
<ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700"><li><code class="rounded bg-slate-100 px-1 py-0.5 text-sm text-slate-900">Exception</code> represents conditions that applications can handle.</li><li><code class="rounded bg-slate-100 px-1 py-0.5 text-sm text-slate-900">Error</code> represents serious PHP runtime problems, such as type errors or undefined function calls.</li></ul>
<p class="mt-3 text-lg leading-8 text-gray-700">Both implement the <code class="rounded bg-slate-100 px-1 py-0.5 text-sm text-slate-900">Throwable</code> interface.</p>
<pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>try {
    throw new Exception(&quot;Something went wrong&quot;);
} catch (Throwable $e) {
    echo $e-&gt;getMessage();
}</code></pre>
</div>



<div class="mb-12">
    <div class="question">
        <h2 class="mb-4 mt-5 text-3xl font-bold text-blue-700">What is PHP PDO?</h2>
    </div>
<p class="mt-3 text-lg leading-8 text-gray-700">PDO stands for PHP Data Objects. It provides a consistent database access interface for multiple database systems.</p>
<p class="mt-3 text-lg leading-8 text-gray-700">It supports prepared statements, which help prevent SQL injection.</p>
<pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>$pdo = new PDO(
    &quot;mysql:host=localhost;dbname=test&quot;,
    &quot;root&quot;,
    &quot;&quot;
);

$stmt = $pdo-&gt;prepare(
    &quot;SELECT * FROM users WHERE id = :id&quot;
);

$stmt-&gt;execute([&#x27;id&#x27; =&gt; 1]);

$user = $stmt-&gt;fetch(PDO::FETCH_ASSOC);</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mb-4 mt-5 text-3xl font-bold text-blue-700">What is the difference between PDO and MySQLi?</h2>
    </div>
<div class="my-4 overflow-x-auto"><table class="w-full border-collapse text-left text-sm"><thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">PDO</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">MySQLi</th></tr></thead><tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Supports multiple database systems</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Supports MySQL only</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Supports named and positional placeholders</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Supports positional placeholders</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Supports OOP interface</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Supports OOP and procedural interfaces</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Supports prepared statements</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Supports prepared statements</td></tr></tbody></table></div>
</div>


<div class="mb-12">
    <div class="question">
        <h2 class="mb-4 mt-5 text-3xl font-bold text-blue-700">What is XSS and CSRF?</h2>
    </div>
<p class="mt-3 text-lg leading-8 text-gray-700">XSS (Cross-Site Scripting): An attack in which malicious JavaScript is injected into a webpage and executed in another user&#x27;s browser.</p>
<p class="mt-3 text-lg leading-8 text-gray-700">Prevention:</p>
<pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>echo htmlspecialchars(
    $userInput,
    ENT_QUOTES,
    &#x27;UTF-8&#x27;
);</code></pre>
<p class="mt-3 text-lg leading-8 text-gray-700">CSRF (Cross-Site Request Forgery): An attack that tricks an authenticated user into submitting an unwanted request.</p>
<p class="mt-3 text-lg leading-8 text-gray-700">Prevention:</p>
<ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700"><li>Use CSRF tokens.</li><li>Use secure SameSite cookie settings.</li><li>Verify request origin where appropriate.</li><li>Require appropriate authorization.</li></ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mb-4 mt-5 text-3xl font-bold text-blue-700">What is Composer in PHP?</h2>
    </div>
<p class="mt-3 text-lg leading-8 text-gray-700">Composer is a dependency manager for PHP. It manages third-party libraries and project dependencies.</p>
<p class="mt-3 text-lg leading-8 text-gray-700">Common commands:</p>
<pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>composer init
composer install
composer update
composer require vendor/package
composer dump-autoload</code></pre>
</div>


<div class="mb-12">
    <div class="question">
        <h2 class="mb-4 mt-5 text-3xl font-bold text-blue-700">What are the important features introduced in PHP 8?</h2>
    </div>
<p class="mt-3 text-lg leading-8 text-gray-700">Important features include:</p>
<ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700"><li>Named Arguments.</li><li>Attributes.</li><li>Constructor Property Promotion.</li><li>Union Types.</li><li>Match Expression.</li><li>Nullsafe Operator.</li><li>JIT Compilation.</li><li>Mixed Type.</li><li>Enums (PHP 8.1).</li><li>Readonly Properties (PHP 8.1).</li><li>Fibers (PHP 8.1).</li><li>Intersection Types (PHP 8.1).</li></ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mb-4 mt-5 text-3xl font-bold text-blue-700">What is the match expression in PHP?</h2>
    </div>
<p class="mt-3 text-lg leading-8 text-gray-700">The <code class="rounded bg-slate-100 px-1 py-0.5 text-sm text-slate-900">match</code> expression compares a value against different conditions and returns a value.</p>
<p class="mt-3 text-lg leading-8 text-gray-700">Unlike <code class="rounded bg-slate-100 px-1 py-0.5 text-sm text-slate-900">switch</code>, it uses strict comparison and does not require <code class="rounded bg-slate-100 px-1 py-0.5 text-sm text-slate-900">break</code>.</p>
<pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>$status = 200;

$result = match ($status) {
    200 =&gt; &quot;Success&quot;,
    404 =&gt; &quot;Not Found&quot;,
    500 =&gt; &quot;Server Error&quot;,
    default =&gt; &quot;Unknown Status&quot;
};

echo $result;</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mb-4 mt-5 text-3xl font-bold text-blue-700">What is the nullsafe operator?</h2>
    </div>
<p class="mt-3 text-lg leading-8 text-gray-700">The nullsafe operator (<code class="rounded bg-slate-100 px-1 py-0.5 text-sm text-slate-900">?-&gt;</code>) allows accessing a property or method when an object might be null.</p>
<p class="mt-3 text-lg leading-8 text-gray-700">It avoids manually checking every intermediate object.</p>
<pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>$name = $user?-&gt;profile?-&gt;name;</code></pre>
<p class="mt-3 text-lg leading-8 text-gray-700">If <code class="rounded bg-slate-100 px-1 py-0.5 text-sm text-slate-900">$user</code> or <code class="rounded bg-slate-100 px-1 py-0.5 text-sm text-slate-900">$user-&gt;profile</code> is null, the result is null.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mb-4 mt-5 text-3xl font-bold text-blue-700">What are named arguments?</h2>
    </div>
<p class="mt-3 text-lg leading-8 text-gray-700">Named arguments allow passing arguments to functions using parameter names rather than their positions.</p>
<pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>function employee($name, $age, $city)
{
    return &quot;$name - $age - $city&quot;;
}

echo employee(
    city: &quot;Delhi&quot;,
    name: &quot;Brijesh&quot;,
    age: 30
);</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mb-4 mt-5 text-3xl font-bold text-blue-700">What is constructor property promotion?</h2>
    </div>
<p class="mt-3 text-lg leading-8 text-gray-700">Constructor property promotion allows declaring and initializing class properties directly in the constructor parameters.</p>
<pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>class Employee
{
    public function __construct(
        public string $name,
        public int $age
    ) {
    }
}

$obj = new Employee(&quot;Brijesh&quot;, 30);

echo $obj-&gt;name;</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mb-4 mt-5 text-3xl font-bold text-blue-700">What is a Union Type?</h2>
    </div>
<p class="mt-3 text-lg leading-8 text-gray-700">A union type allows a variable, property, or function parameter to accept multiple specified types.</p>
<pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>function getId(int|string $id): int|string
{
    return $id;
}

echo getId(101);
echo getId(&quot;EMP101&quot;);</code></pre>
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


<!-- Blade partial: examples are escaped for display. text-primary uses your existing Tailwind theme. -->

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between array and object in PHP?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">An array stores multiple values using numeric or associative keys, whereas an object is an instance of a class that contains properties and methods.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>// Array
$user = [
    "name" =&gt; "Brijesh",
    "age" =&gt; 30
];

// Object
class User
{
    public $name = "Brijesh";
    public $age = 30;
}

$obj = new User();

echo $obj-&gt;name;</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between count() and sizeof()?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Both functions return the number of elements in an array or Countable object.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>$arr = [10, 20, 30, 40];

echo count($arr);  // 4
echo sizeof($arr); // 4</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8"><code class="rounded bg-slate-100 px-1 py-0.5 text-base text-slate-900">sizeof()</code> is an alias of <code class="rounded bg-slate-100 px-1 py-0.5 text-base text-slate-900">count()</code>.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between array_key_exists() and isset()?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">array_key_exists(): Checks whether a key exists, even if its value is null.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">isset(): Checks whether a key exists and its value is not null.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>$user = [
    "name" =&gt; null
];

var_dump(array_key_exists("name", $user)); // true

var_dump(isset($user["name"])); // false</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between for, foreach and while loops?</h2>
    </div>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li><code class="rounded bg-slate-100 px-1 py-0.5 text-base text-slate-900">for</code>: Used when the number of iterations is known.</li>
        <li><code class="rounded bg-slate-100 px-1 py-0.5 text-base text-slate-900">foreach</code>: Used to iterate over arrays and iterable objects.</li>
        <li><code class="rounded bg-slate-100 px-1 py-0.5 text-base text-slate-900">while</code>: Used when execution depends on a condition.</li>
    </ul>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>for ($i = 1; $i &lt;= 5; $i++) {
    echo $i;
}

$arr = [10, 20, 30];

foreach ($arr as $value) {
    echo $value;
}

$i = 1;

while ($i &lt;= 5) {
    echo $i;
    $i++;
}</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between break and continue?</h2>
    </div>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li><code class="rounded bg-slate-100 px-1 py-0.5 text-base text-slate-900">break</code> terminates the current loop.</li>
        <li><code class="rounded bg-slate-100 px-1 py-0.5 text-base text-slate-900">continue</code> skips the current iteration and moves to the next iteration.</li>
    </ul>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>for ($i = 1; $i &lt;= 5; $i++) {

    if ($i == 3) {
        continue;
    }

    echo $i;
}

// Output: 1245</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is a callback function in PHP?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">A callback is a function passed as an argument to another function so that it can be executed later.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>function calculate($a, $b, $callback)
{
    return $callback($a, $b);
}

$result = calculate(10, 20, function ($a, $b) {
    return $a + $b;
});

echo $result; // 30</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is recursion in PHP?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Recursion is a programming technique in which a function calls itself until a specified condition is satisfied.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example: Factorial.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>function factorial($num)
{
    if ($num &lt;= 1) {
        return 1;
    }

    return $num * factorial($num - 1);
}

echo factorial(5); // 120</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between serialize() and json_encode()?</h2>
    </div>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">serialize()</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">json_encode()</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Converts PHP values into PHP serialized representation</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Converts PHP values into JSON</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Mainly used within PHP applications</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Commonly used for APIs</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Can preserve PHP-specific types</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Uses JSON-supported data types</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Use unserialize() to decode</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Use json_decode() to decode</td></tr></tbody>
        </table>
    </div>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>$user = ["name" =&gt; "Brijesh"];

echo serialize($user);

echo json_encode($user);</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">For untrusted serialized input, avoid calling <code class="rounded bg-slate-100 px-1 py-0.5 text-base text-slate-900">unserialize()</code> without strict safeguards.</p>
</div>


<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What are the SOLID principles in PHP?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">SOLID is a set of five object-oriented design principles used to create maintainable, scalable and loosely coupled applications.</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>S – Single Responsibility Principle: A class should have one main responsibility.</li>
        <li>O – Open/Closed Principle: Classes should be open for extension but closed for modification.</li>
        <li>L – Liskov Substitution Principle: Child classes should be usable in place of their parent classes without breaking expected behavior.</li>
        <li>I – Interface Segregation Principle: Prefer smaller, specific interfaces over large interfaces.</li>
        <li>D – Dependency Inversion Principle: High-level modules should depend on abstractions rather than concrete implementations.</li>
    </ol>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example of Dependency Inversion:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>interface PaymentGateway
{
    public function pay(float $amount);
}

class StripePayment implements PaymentGateway
{
    public function pay(float $amount)
    {
        return "Paid using Stripe";
    }
}

class PaymentService
{
    public function __construct(
        private PaymentGateway $gateway
    ) {}

    public function process(float $amount)
    {
        return $this-&gt;gateway-&gt;pay($amount);
    }
}</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is a design pattern?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">A design pattern is a reusable solution to a commonly occurring software design problem.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Important PHP design patterns:</p>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Pattern</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Purpose</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Singleton</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Restricts a class to one shared instance</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Factory</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Creates objects without exposing creation logic</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Repository</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Separates data access from business logic</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Observer</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Notifies dependent objects when an event occurs</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Strategy</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Allows interchangeable algorithms</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Adapter</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Makes incompatible interfaces work together</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Dependency Injection</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Provides dependencies externally</td></tr></tbody>
        </table>
    </div>
</div>






<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is late static binding in PHP?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Late static binding allows PHP to resolve a static method or property using the class that was called at runtime.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">It uses <code class="rounded bg-slate-100 px-1 py-0.5 text-base text-slate-900">static::</code> instead of <code class="rounded bg-slate-100 px-1 py-0.5 text-base text-slate-900">self::</code>.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>class ParentClass
{
    public static function show()
    {
        echo static::class;
    }
}

class ChildClass extends ParentClass
{
}

ChildClass::show();

// ChildClass</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is reflection in PHP?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Reflection allows developers to inspect classes, methods, properties, parameters and other program structures at runtime.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>class Employee
{
    public function getName()
    {
        return "Brijesh";
    }
}

$reflection = new ReflectionClass(Employee::class);

echo $reflection-&gt;getName();

print_r($reflection-&gt;getMethods());</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Real-time use: Dependency injection containers, framework internals, testing tools and automatic object creation.</p>
</div>


<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is garbage collection in PHP?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Garbage collection is the process of automatically identifying and freeing memory occupied by objects and variables that are no longer needed.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">PHP uses reference counting and a cycle collector to manage memory.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>$object = new stdClass();

$object = null;

gc_collect_cycles();</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between unset() and assigning null?</h2>
    </div>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li><code class="rounded bg-slate-100 px-1 py-0.5 text-base text-slate-900">unset()</code> removes a variable.</li>
        <li>Assigning <code class="rounded bg-slate-100 px-1 py-0.5 text-base text-slate-900">null</code> keeps the variable defined but changes its value to null.</li>
    </ul>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>$name = "Brijesh";

unset($name);

$age = 30;

$age = null;

var_dump(isset($age)); // false</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is OPcache in PHP?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">OPcache is a PHP performance optimization extension that stores precompiled PHP bytecode in shared memory.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Without OPcache, PHP generally needs to parse and compile scripts again during execution.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Benefits:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Reduces execution overhead.</li>
        <li>Improves application response time.</li>
        <li>Reduces repeated compilation.</li>
        <li>Improves server performance.</li>
    </ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you optimize PHP memory usage?</h2>
    </div>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Use generators instead of loading huge arrays.</li>
        <li>Process records in chunks.</li>
        <li>Avoid unnecessary variables.</li>
        <li>Release large resources when no longer required.</li>
        <li>Avoid unnecessary object creation.</li>
        <li>Optimize database queries.</li>
        <li>Monitor memory using <code class="rounded bg-slate-100 px-1 py-0.5 text-base text-slate-900">memory_get_usage()</code>.</li>
    </ol>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>echo memory_get_usage();

echo memory_get_peak_usage();</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between eager loading and lazy loading?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Lazy Loading: Related data is loaded only when it is accessed.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Eager Loading: Related data is loaded in advance to reduce repeated database queries.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">In Laravel:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>// Lazy loading
$users = User::all();

foreach ($users as $user) {
    echo $user-&gt;orders;
}

// Eager loading
$users = User::with('orders')-&gt;get();</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Eager loading helps prevent the N+1 query problem.</p>
</div>


<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is password_hash() in PHP?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8"><code class="rounded bg-slate-100 px-1 py-0.5 text-base text-slate-900">password_hash()</code> securely hashes passwords using a supported password hashing algorithm.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>$password = "Admin&#64;123";

$hash = password_hash(
    $password,
    PASSWORD_DEFAULT
);</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">To verify:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>if (password_verify("Admin&#64;123", $hash)) {
    echo "Password matched";
} else {
    echo "Invalid password";
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Never store plain-text passwords.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is CSRF token validation?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">CSRF tokens protect applications against Cross-Site Request Forgery attacks.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">A unique token is generated and validated when a sensitive request is submitted.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">In Laravel Blade:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>&lt;form method="POST" action="/users"&gt;
    &#64;csrf

    &lt;input type="text" name="name"&gt;

    &lt;button type="submit"&gt;Submit&lt;/button&gt;
&lt;/form&gt;</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is CORS?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">CORS stands for Cross-Origin Resource Sharing.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">It is a browser security mechanism that controls whether a frontend application from one origin can access resources from another origin.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>Access-Control-Allow-Origin: https://example.com
Access-Control-Allow-Methods: GET, POST, PUT, DELETE
Access-Control-Allow-Headers: Content-Type, Authorization</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you prevent brute-force attacks?</h2>
    </div>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Implement login rate limiting.</li>
        <li>Add account lockout or progressive delays.</li>
        <li>Use strong password hashing.</li>
        <li>Implement multi-factor authentication where appropriate.</li>
        <li>Monitor repeated failed login attempts.</li>
        <li>Use CAPTCHA or additional verification when needed.</li>
    </ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is JWT authentication?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">JWT stands for JSON Web Token. It is a compact token format used to securely transmit claims between parties.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">It consists of three parts:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Header – Contains token type and signing algorithm.</li>
        <li>Payload – Contains claims such as user ID and expiration.</li>
        <li>Signature – Verifies token integrity.</li>
    </ol>
    <p class="text-lg text-gray-700 mt-3 leading-8">JWT is commonly used for stateless API authentication.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Find the first non-repeating character in a string.</h2>
    </div>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>function firstNonRepeating($str)
{
    $count = array_count_values(str_split($str));

    foreach (str_split($str) as $char) {
        if ($count[$char] === 1) {
            return $char;
        }
    }

    return null;
}

echo firstNonRepeating("swiss");

// w</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Find the missing number in an array.</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Suppose an array contains numbers from 1 to 5, but number 3 is missing.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>$arr = [1, 2, 4, 5];

$n = 5;

$expected = ($n * ($n + 1)) / 2;

$actual = array_sum($arr);

echo $expected - $actual;

// 3</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Sort an associative array by value.</h2>
    </div>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>$employees = [
    "Amit" =&gt; 30000,
    "Rahul" =&gt; 50000,
    "Brijesh" =&gt; 40000
];

asort($employees);

print_r($employees);</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Use <code class="rounded bg-slate-100 px-1 py-0.5 text-base text-slate-900">arsort()</code> for descending order.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Find common elements between two arrays.</h2>
    </div>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>$arr1 = [10, 20, 30, 40];

$arr2 = [20, 40, 50, 60];

$result = array_intersect($arr1, $arr2);

print_r($result);

// 20, 40</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Write a PHP program to check whether two strings are anagrams.</h2>
    </div>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>function isAnagram($str1, $str2)
{
    $str1 = strtolower(str_replace(' ', '', $str1));
    $str2 = strtolower(str_replace(' ', '', $str2));

    $arr1 = str_split($str1);
    $arr2 = str_split($str2);

    sort($arr1);
    sort($arr2);

    return $arr1 === $arr2;
}

var_dump(isAnagram("listen", "silent"));

// true</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you implement a simple API response in PHP?</h2>
    </div>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>header('Content-Type: application/json');

$response = [
    "status" =&gt; true,
    "message" =&gt; "User fetched successfully",
    "data" =&gt; [
        "id" =&gt; 1,
        "name" =&gt; "Brijesh"
    ]
];

echo json_encode($response);</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you implement CRUD using PHP and MySQL?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">CRUD stands for:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Create – Insert records.</li>
        <li>Read – Fetch records.</li>
        <li>Update – Modify records.</li>
        <li>Delete – Remove records.</li>
    </ul>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example using PDO:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>// CREATE
$stmt = $pdo-&gt;prepare(
    "INSERT INTO users (name, email) VALUES (?, ?)"
);

$stmt-&gt;execute(["Brijesh", "test&#64;example.com"]);

// READ
$stmt = $pdo-&gt;query("SELECT * FROM users");

$users = $stmt-&gt;fetchAll(PDO::FETCH_ASSOC);

// UPDATE
$stmt = $pdo-&gt;prepare(
    "UPDATE users SET name = ? WHERE id = ?"
);

$stmt-&gt;execute(["Rahul", 1]);

// DELETE
$stmt = $pdo-&gt;prepare(
    "DELETE FROM users WHERE id = ?"
);

$stmt-&gt;execute([1]);</code></pre>
</div>




<!-- Blade partial: examples are escaped for display. text-primary uses your existing Tailwind theme. -->

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Explain how you design a scalable PHP application.</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">I design scalable PHP applications using a modular architecture with separation of concerns.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">My approach includes:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>MVC Architecture: Separates Model, View and Controller.</li>
        <li>Service Layer: Contains application business logic.</li>
        <li>Repository Layer: Manages database interactions.</li>
        <li>Dependency Injection: Reduces tight coupling.</li>
        <li>Caching: Uses Redis or Memcached to reduce database load.</li>
        <li>Queue Processing: Handles time-consuming operations asynchronously.</li>
        <li>Database Optimization: Uses indexes and optimized SQL queries.</li>
        <li>API Architecture: Provides reusable REST APIs.</li>
        <li>Security: Implements authentication, authorization and validation.</li>
        <li>Monitoring: Tracks errors, performance and application health.</li>
    </ol>
    <p class="text-lg text-gray-700 mt-3 leading-8">Architecture flow:</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Client / Frontend</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">React / JavaScript / Browser</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">API / Routes / Middleware</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Controller Layer</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Service Layer / Business Logic</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Repository / Data Access Layer</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">MySQL</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Database</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Redis</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Cache</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between monolithic and microservices architecture?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Monolithic Architecture: An application where multiple modules and business functionalities are developed and deployed as one application.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Microservices Architecture: An application divided into independent services. Each service handles a specific business responsibility and can be deployed independently.</p>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Monolithic</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Microservices</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Single application deployment</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Independent service deployment</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Easier initial development</td><td class="border border-slate-200 px-4 py-3 text-gray-700">More complex infrastructure</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Shared application codebase</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Separate service codebases</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Scaling often affects the whole application</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Individual services can scale</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Internal method calls</td><td class="border border-slate-200 px-4 py-3 text-gray-700">API or messaging communication</td></tr></tbody>
        </table>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">In an eCommerce application:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>User Service</li>
        <li>Product Service</li>
        <li>Order Service</li>
        <li>Payment Service</li>
        <li>Notification Service</li>
    </ul>
    <p class="text-lg text-gray-700 mt-3 leading-8">Each can operate as an independent service.</p>
</div>





<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you optimize a PHP application handling millions of records?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">I use a combination of database optimization, memory management and background processing.</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Use pagination or cursor-based processing.</li>
        <li>Use database indexing.</li>
        <li>Avoid fetching unnecessary columns.</li>
        <li>Process records in batches.</li>
        <li>Use generators where appropriate.</li>
        <li>Use Redis caching.</li>
        <li>Use background queues.</li>
        <li>Optimize joins and subqueries.</li>
        <li>Enable OPcache.</li>
        <li>Monitor execution time and memory usage.</li>
    </ol>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>function getRecords()
{
    $lastId = 0;

    while (true) {
        $records = DB::table('users')
            -&gt;where('id', '&gt;', $lastId)
            -&gt;orderBy('id')
            -&gt;limit(1000)
            -&gt;get();

        if ($records-&gt;isEmpty()) {
            break;
        }

        foreach ($records as $record) {
            // Process record
            $lastId = $record-&gt;id;
        }
    }
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">This avoids loading millions of records into memory at once.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the N+1 query problem? How do you solve it?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">The N+1 query problem occurs when an application executes one query to retrieve a collection and then executes an additional query for each record to retrieve related data.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>$users = User::all();

foreach ($users as $user) {
    echo $user-&gt;orders;
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">If there are 100 users, this can generate 101 queries.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Solution: Eager Loading</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>$users = User::with('orders')-&gt;get();</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">This significantly reduces repeated database queries.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is caching? Explain different caching strategies.</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Caching stores frequently accessed data temporarily so that the application does not need to repeatedly retrieve or calculate the same information.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Common caching strategies:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Application Cache: Stores frequently used application data.</li>
        <li>Database Query Cache: Caches query results at the application or database layer.</li>
        <li>Page Cache: Stores rendered HTML responses.</li>
        <li>Object Cache: Stores reusable objects or computed data.</li>
        <li>Distributed Cache: Shares cached data across multiple application servers.</li>
    </ol>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example using Redis in Laravel:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>$data = Cache::remember(
    'users',
    3600,
    function () {
        return User::all();
    }
);</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between Redis and Memcached?</h2>
    </div>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Redis</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Memcached</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Supports multiple data structures</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Primarily key-value caching</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Supports persistence options</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Generally volatile memory cache</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Supports pub/sub and other features</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Focused on caching</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Supports transactions and scripting</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Simpler caching model</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Useful for cache, queues and coordination</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Useful for distributed caching</td></tr></tbody>
        </table>
    </div>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is asynchronous processing in PHP?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Asynchronous processing allows time-consuming tasks to run separately from the main HTTP request.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Examples:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Sending emails.</li>
        <li>Generating reports.</li>
        <li>Processing images.</li>
        <li>Importing large CSV files.</li>
        <li>Sending notifications.</li>
    </ul>
    <p class="text-lg text-gray-700 mt-3 leading-8">In Laravel, we can use Jobs and Queues.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>SendEmailJob::dispatch($user);</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">This allows the user to receive a response without waiting for the email operation to finish.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you identify and optimize slow MySQL queries?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">I use the following steps:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Identify slow queries using MySQL slow query logs.</li>
        <li>Analyze queries using <code class="rounded bg-slate-100 px-1 py-0.5 text-base text-slate-900">EXPLAIN</code>.</li>
        <li>Add indexes to frequently searched columns.</li>
        <li>Avoid unnecessary <code class="rounded bg-slate-100 px-1 py-0.5 text-base text-slate-900">SELECT *</code>.</li>
        <li>Optimize JOIN operations.</li>
        <li>Avoid unnecessary subqueries.</li>
        <li>Check composite index usage.</li>
        <li>Optimize pagination.</li>
        <li>Monitor query execution time.</li>
    </ol>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>EXPLAIN
SELECT id, name, email
FROM users
WHERE email = 'test&#64;example.com';</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Create an index:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>CREATE INDEX idx_users_email
ON users(email);</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between clustered and non-clustered indexes?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">A clustered index determines how table records are organized in the index structure. In InnoDB, the primary key is the clustered index.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">A secondary index stores indexed values along with the corresponding primary key.</p>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Clustered Index</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Secondary Index</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Organizes table records</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Separate index structure</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">One per InnoDB table</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Multiple possible</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Usually primary key</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Can be normal or unique index</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Contains complete row data in leaf pages</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Contains indexed columns and primary key</td></tr></tbody>
        </table>
    </div>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is database normalization and denormalization?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Normalization: Organizes data into related tables to reduce duplication and improve data integrity.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Denormalization: Introduces controlled redundancy to improve read performance.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">In an eCommerce application, customer details can be stored in a separate customer table, while order records reference the customer ID.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">However, frequently needed reporting data may be maintained in summary tables to reduce expensive joins.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What are database transactions and ACID properties?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">A transaction is a group of database operations that execute as one logical unit.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">ACID stands for:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Atomicity – All operations succeed or none do.</li>
        <li>Consistency – Database rules remain valid.</li>
        <li>Isolation – Concurrent transactions do not improperly interfere.</li>
        <li>Durability – Committed changes remain persistent.</li>
    </ul>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>DB::transaction(function () {
    Account::where('id', 1)
        -&gt;decrement('balance', 1000);

    Account::where('id', 2)
        -&gt;increment('balance', 1000);
});</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">If an exception occurs, Laravel rolls back the transaction.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is database deadlock? How do you handle it?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">A deadlock occurs when two or more transactions wait for resources held by each other, preventing them from proceeding.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Prevention techniques:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Access tables and rows in a consistent order.</li>
        <li>Keep transactions short.</li>
        <li>Create appropriate indexes.</li>
        <li>Avoid unnecessary locking.</li>
        <li>Implement retry logic for deadlock errors.</li>
    </ol>
    <p class="text-lg text-gray-700 mt-3 leading-8">Laravel example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>DB::transaction(function () {
    // Database operations
}, 3);</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">The second argument specifies the maximum number of attempts, including retries.</p>
</div>


<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Explain REST API architecture.</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">REST stands for Representational State Transfer. It is an architectural style for building web services that communicate over HTTP.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Important REST principles:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Client-server architecture.</li>
        <li>Stateless communication.</li>
        <li>Resource-based URLs.</li>
        <li>Standard HTTP methods.</li>
        <li>Appropriate HTTP status codes.</li>
        <li>Consistent response formats.</li>
        <li>Cacheability where appropriate.</li>
    </ol>
    <p class="text-lg text-gray-700 mt-3 leading-8">Common HTTP methods:</p>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Method</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Purpose</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">GET</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Retrieve data</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">POST</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Create a resource</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">PUT</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Replace a resource</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">PATCH</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Partially update a resource</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">DELETE</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Delete a resource</td></tr></tbody>
        </table>
    </div>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you secure REST APIs?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">I use multiple security layers:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Authentication using JWT, OAuth or secure session-based authentication.</li>
        <li>Authorization using roles and permissions.</li>
        <li>Input validation.</li>
        <li>HTTPS encryption.</li>
        <li>Rate limiting.</li>
        <li>SQL injection prevention using prepared statements.</li>
        <li>Proper CORS configuration.</li>
        <li>Secure token storage and expiration.</li>
        <li>Request logging and monitoring.</li>
        <li>API versioning and controlled access.</li>
    </ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between JWT and OAuth 2.0?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">JWT is a token format, whereas OAuth 2.0 is an authorization framework.</p>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">JWT</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">OAuth 2.0</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Defines a token format</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Defines authorization flows</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Contains claims</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Provides delegated authorization</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Can be signed</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Can use different access-token formats</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Often used for API authentication</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Used for third-party access delegation</td></tr></tbody>
        </table>
    </div>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you prevent duplicate payment transactions?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">In payment integration, duplicate transactions can occur because of network failures, repeated clicks or webhook retries.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">I use:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Unique idempotency keys.</li>
        <li>Unique transaction references.</li>
        <li>Database transactions.</li>
        <li>Payment status verification.</li>
        <li>Webhook signature validation.</li>
        <li>Duplicate webhook event detection.</li>
        <li>Proper logging and reconciliation.</li>
    </ol>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>$payment = Payment::firstOrCreate(
    ['transaction_id' =&gt; $transactionId],
    [
        'user_id' =&gt; $userId,
        'amount' =&gt; $amount,
        'status' =&gt; 'pending'
    ]
);</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">For production, enforce a unique database constraint on the transaction reference and make payment status transitions atomic.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is API versioning and why is it important?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">API versioning allows developers to introduce new functionality without breaking existing API consumers.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>/api/v1/users
/api/v2/users</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Benefits:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Backward compatibility.</li>
        <li>Easier API maintenance.</li>
        <li>Controlled feature releases.</li>
        <li>Support for multiple frontend versions.</li>
    </ul>
</div>


<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Explain the PHP request lifecycle.</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">The PHP request lifecycle describes how a PHP application processes an incoming request.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Typical flow:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Client sends an HTTP request.</li>
        <li>Web server receives the request.</li>
        <li>PHP-FPM or another PHP runtime handles the PHP execution.</li>
        <li>PHP loads and executes the script.</li>
        <li>Application code interacts with databases or other services.</li>
        <li>PHP generates the response.</li>
        <li>Web server sends the response to the client.</li>
    </ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is PHP-FPM?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">PHP-FPM stands for PHP FastCGI Process Manager.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">It manages PHP worker processes and handles PHP requests efficiently.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Benefits:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Manages worker processes.</li>
        <li>Improves request handling.</li>
        <li>Supports process pools.</li>
        <li>Provides configurable worker limits.</li>
        <li>Helps manage server resources.</li>
    </ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is Composer autoloading and PSR-4?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Composer autoloading automatically loads PHP classes without manually including every file.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">PSR-4 defines a standard for mapping namespaces to directory structures.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example <code class="rounded bg-slate-100 px-1 py-0.5 text-base text-slate-900">composer.json</code>:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>{
    "autoload": {
        "psr-4": {
            "App\\": "app/"
        }
    }
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Run:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>composer dump-autoload</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is event-driven architecture in PHP?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Event-driven architecture is a software design approach where components communicate through events.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">When an order is placed:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>OrderCreated event is dispatched.</li>
        <li>Inventory listener updates stock.</li>
        <li>Email listener sends confirmation.</li>
        <li>Notification listener sends an alert.</li>
    </ol>
    <p class="text-lg text-gray-700 mt-3 leading-8">Laravel example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>event(new OrderCreated($order));</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">This helps separate business operations and improves maintainability.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between horizontal and vertical scaling?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Vertical Scaling: Increasing the resources of an existing server, such as RAM and CPU.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Horizontal Scaling: Adding more servers to distribute application traffic.</p>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Vertical Scaling</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Horizontal Scaling</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Increase server capacity</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Add more servers</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Limited by hardware</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Can expand across servers</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Simpler architecture</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Requires distributed infrastructure</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Single server can remain a bottleneck</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Supports distributed traffic</td></tr></tbody>
        </table>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">For high-traffic PHP applications, horizontal scaling is often combined with load balancing, Redis and shared storage.</p>
</div>


<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Your PHP application suddenly becomes very slow. How will you troubleshoot it?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">I follow a systematic debugging approach.</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Check server CPU, RAM and disk usage.</li>
        <li>Check PHP-FPM worker utilization.</li>
        <li>Review application error logs.</li>
        <li>Identify slow database queries.</li>
        <li>Check API response times.</li>
        <li>Review recent code deployments.</li>
        <li>Check Redis and cache performance.</li>
        <li>Analyze memory consumption.</li>
        <li>Identify bottlenecks using profiling tools.</li>
        <li>Apply optimization and monitor the results.</li>
    </ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you handle a legacy PHP application without rewriting it?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">I prefer incremental refactoring instead of rewriting the entire application.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">My approach:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Understand existing business logic.</li>
        <li>Identify critical modules.</li>
        <li>Add tests around existing functionality.</li>
        <li>Identify duplicated and tightly coupled code.</li>
        <li>Refactor one module at a time.</li>
        <li>Introduce service classes and interfaces.</li>
        <li>Maintain backward compatibility.</li>
        <li>Review performance after each change.</li>
        <li>Deploy changes incrementally.</li>
    </ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you handle third-party API failures?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">I implement:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Connection and request timeouts.</li>
        <li>Retry mechanisms with exponential backoff.</li>
        <li>Proper exception handling.</li>
        <li>API response validation.</li>
        <li>Logging and monitoring.</li>
        <li>Circuit breaker patterns where appropriate.</li>
        <li>Fallback mechanisms.</li>
        <li>Idempotency for operations that may be retried.</li>
    </ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you handle a large CSV import containing 10 lakh records?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">I would not process all records in a single HTTP request.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">My approach:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Upload the CSV file.</li>
        <li>Validate the file format and headers.</li>
        <li>Store the file securely.</li>
        <li>Divide records into batches.</li>
        <li>Dispatch queue jobs.</li>
        <li>Process each batch independently.</li>
        <li>Log invalid records.</li>
        <li>Track import progress.</li>
        <li>Handle failed jobs and retries.</li>
        <li>Generate an import summary.</li>
    </ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you ensure code quality in a development team?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">I follow these practices:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Define coding standards.</li>
        <li>Use Git branching strategies.</li>
        <li>Conduct code reviews.</li>
        <li>Implement unit and feature testing.</li>
        <li>Follow SOLID principles.</li>
        <li>Avoid duplicated code.</li>
        <li>Use static analysis tools.</li>
        <li>Maintain technical documentation.</li>
        <li>Implement CI/CD pipelines.</li>
        <li>Monitor production errors.</li>
    </ol>
</div>


<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you manage a team of PHP developers?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Sample interview answer:</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">"I start by understanding project requirements and breaking them into smaller development tasks. I assign tasks based on developers' skills and experience.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">I conduct regular progress meetings, review code, resolve technical blockers and monitor deadlines.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">I also ensure that coding standards, testing and documentation are followed throughout the development process."</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you handle missed project deadlines?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">I first identify the reason for the delay, evaluate the impact and communicate the risk to stakeholders.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Then I:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Reprioritize tasks.</li>
        <li>Identify critical dependencies.</li>
        <li>Reallocate resources if necessary.</li>
        <li>Create a revised delivery plan.</li>
        <li>Track progress regularly.</li>
        <li>Communicate realistic delivery expectations.</li>
    </ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you conduct code reviews?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">I review code based on:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Coding standards.</li>
        <li>Security vulnerabilities.</li>
        <li>Performance.</li>
        <li>Business logic correctness.</li>
        <li>Code reusability.</li>
        <li>Database query optimization.</li>
        <li>Error handling.</li>
        <li>Test coverage.</li>
        <li>Maintainability.</li>
    </ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you manage conflicts between developers?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">I listen to both developers, understand the technical disagreement and evaluate solutions based on project requirements, maintainability and performance.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">I encourage technical discussions and make decisions based on evidence rather than personal preferences.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you manage multiple projects simultaneously?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">I prioritize projects according to business importance, delivery timelines and dependencies.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">I use task management tools, milestone planning, progress tracking and regular communication to ensure timely delivery.</p>
</div>










  
  <div class="mb-12">
  <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is MVVM?</h2>
  </div>
  <p class="text-lg text-gray-700"><strong>MVVM</strong> stands for Model-View-ViewModel.</p><p class="text-lg text-gray-700"><strong>Model:</strong> The Model represents the data and business logic of the application.</p><p class="text-lg text-gray-700"><strong>View:</strong> The View is the user interface of the application. It is responsible for displaying the data that the Model provides.</p><p class="text-lg text-gray-700"><strong>Controller:</strong> The Controller acts as an intermediary between the Model and the View.</p><p class="text-lg text-gray-700"><strong>ViewModel:</strong> The ViewModel serves as the middle-man between the Model and the View.</p></div>
  



  
  
  <div>
  <div class="question">   
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What design pattern?</h2>
  </div>
  <ul class="space-y-4"><li><strong>1. Factory Pattern:</strong> a method that creates and returns objects without exposing the instantiation logic<ul class="mt-2 bg-gray-200 p-4 shadow-lg"><li class="bg-white p-3 border-l-4 border-green-500 text-sm">
     <div class="example">
 
<div class="code"> 
  
  class Automobile {<br>
  private $bikeMake;<br>
  public function __construct($make, $model) {<br>
    $this-&gt;bikeMake = $make;<br>
  }<br>
  public function getMakeAndModel() {<br>
    return $this-&gt;bikeMake;<br>
  }<br>
}<br>
class AutomobileFactory {<br>
  public static function create($make, $model) {<br>
    return new Automobile($make, $model);<br>
  }<br>
}<br>
$pulsar = AutomobileFactory::create('ktm', 'Pulsar');<br>
print_r($pulsar-&gt;getMakeAndModel());<br>

 

</div></div>
</li></ul></li><li><strong>2. Singleton:</strong> make sure that a class has one instance of a class that is produced like database connection and mailer class<ul class="mt-2 bg-gray-200 p-4 shadow-lg"><li class="bg-white p-3 border-l-4 border-green-500 text-sm">
  
<div class="example"> 
<div class="code"> 
 class Singleton {<br>
  private static $instance;<br>
  private function __construct() {<br>
  }  <br>
  
  private function __clone() {<br>

  }<br>
} <br>

public static function getInstance() {<br>
    if (self::$instance === null) {<br>
      self::$instance = new Singleton();<br>
    }<br>
    return self::$instance;<br>
  }<br>
 
$singleton = Singleton::getInstance(); 

</div></div>
</li></ul></li>

<li>
  
<strong>3. Repository Pattern:</strong> It is a collection of domain objects, acting like an in-memory collection. The repository is responsible for providing access to data.</li>

<pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>class UserRepository
{
    public function getAllUsers()
    {
        return User::all();
    }

    public function findUser($id)
    {
        return User::find($id);
    }

    public function createUser(array $data)
    {
        return User::create($data);
    }
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Benefits:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Code reusability.</li>
        <li>Easier testing.</li>
        <li>Separation of concerns.</li>
        <li>Easier database implementation changes.</li>
    </ul>




<li><strong>4. Observer Pattern:</strong> Allows a subject to notify a list of observers when its state changes.<ul class="mt-2 bg-gray-200 p-4 shadow-lg"><li class="bg-white p-3 border-l-4 border-green-500 text-sm">
  
     <div class="example">
 
<div class="code"> 
 class Subject {<br>
  private $observers = [];<br>
  public function addObserver(Observer $observer) {<br>
    $this-&gt;observers[] = $observer;<br>
  }<br>
  public function notifyObservers($state) {<br>
    foreach ($this-&gt;observers as $observer) {<br>
      $observer-&gt;update($state);<br>
    }<br>
  }<br>
}<br>
$subject = new Subject();<br>
$observer1 = new ConcreteObserver();<br>
$observer2 = new ConcreteObserver();<br>
$subject-&gt;addObserver($observer1);<br>
$subject-&gt;addObserver($observer2);<br>
$subject-&gt;notifyObservers("New state");<br>

 

</div></div>
</li></ul></li></ul></div>

</div>


</section>
  



 

  


 
 


 </div>
 
<br>
<div class="clear nextprev">
<a class="left btn" href="{{url('interviews/php-interview-question-answer')}}">&#10094; Previous</a>
<a class="right btn" href="{{url('interviews/mysql-interview-question-answer')}}">Next &#10095;</a>
</div>
</div>
 
</div>
 
  
  @endsection