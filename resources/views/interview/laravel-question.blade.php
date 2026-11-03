@extends('interview.layouts.app')
@section('title')
laravel Interview Questions & Answers
@endsection  
@section('description'),  
Explore top Laravel interview questions and answers covering routing, Eloquent, middleware, authentication, APIs, and advanced concepts.
@endsection


@section('content')	 
 

<div class='main light-grey' id='belowtopnav' style='margin-left:220px;'>
  <div class='row white'>
    <div class='col l11 m12' id='main'>
       
<h1>laravel<span class="color_h1"> Interview Question & Answer</span></h1>
<div class="clear nextprev">
<a class="left btn" href="{{url('interviews/technical-logic-question-answer')}}">&#10094; Previous</a>
<a class="right btn" href="{{url('interviews/javascript-interview-question-answer')}}">Next &#10095;</a>
</div>
<hr>
 
 <div class="light">
 
 
 <section id="services-section" class="py-12 bg-gray-100">
  <div class="container mx-auto px-4">



<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">1. What is Laravel?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Laravel is an open-source PHP framework used to develop modern web applications and REST APIs.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">It follows the MVC (Model-View-Controller) architectural pattern and provides built-in features that simplify application development.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Main features:</p>
<ol type="1">
<li>MVC architecture.</li>
<li>Routing.</li>
<li>Eloquent ORM.</li>
<li>Blade templating engine.</li>
<li>Middleware.</li>
<li>Authentication and authorization.</li>
<li>Database migrations and seeders.</li>
<li>Queues and jobs.</li>
<li>Events and listeners.</li>
<li>REST API development.</li>
<li>Caching.</li>
<li>Testing.</li>
</ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">2. What are the advantages of Laravel?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<ul class="mb-4 list-disc pl-6 text-gray-700">
<li>Clean and maintainable code structure.</li>
<li>Built-in security features.</li>
<li>Easy database management using migrations.</li>
<li>Eloquent ORM simplifies database operations.</li>
<li>Powerful routing system.</li>
<li>Dependency injection through the service container.</li>
<li>Built-in queues and background jobs.</li>
<li>Easy API development.</li>
<li>Strong testing support.</li>
<li>Large ecosystem and community.</li>
</ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">3. Explain MVC architecture in Laravel.</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">MVC stands for Model-View-Controller.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">It separates an application into three main components.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">1. Model</p>
<ul class="mb-4 list-disc pl-6 text-gray-700">
<li>Handles database-related operations.</li>
<li>Interacts with database tables.</li>
<li>Contains relationships and model-level logic.</li>
</ul>
<p class="mb-3 text-lg leading-8 text-gray-700">2. View</p>
<ul class="mb-4 list-disc pl-6 text-gray-700">
<li>Handles the user interface.</li>
<li>Displays data to users.</li>
<li>Laravel uses the Blade template engine.</li>
</ul>
<p class="mb-3 text-lg leading-8 text-gray-700">3. Controller</p>
<ul class="mb-4 list-disc pl-6 text-gray-700">
<li>Handles incoming requests.</li>
<li>Calls models or business services.</li>
<li>Returns views or API responses.</li>
</ul>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>// Model
class User extends Model
&#123;
&#125;

// Controller
class UserController extends Controller
&#123;
    public function index()
    &#123;
        $users = User::all();

        return view(&#39;users.index&#39;, compact(&#39;users&#39;));
    &#125;
&#125;</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">4. Explain the Laravel request lifecycle.</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">The Laravel request lifecycle explains how an HTTP request travels through the framework and generates a response.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Steps:</p>
<ol type="1">
<li>Request enters through <code>public/index.php</code>.</li>
<li>Composer autoloading is initialized.</li>
<li>Laravel application and service container are bootstrapped.</li>
<li>HTTP kernel handles the request.</li>
<li>Service providers are registered and booted.</li>
<li>Middleware processes the request.</li>
<li>Router identifies the matching route.</li>
<li>Controller executes the business logic.</li>
<li>Model interacts with the database if required.</li>
<li>Laravel generates the response.</li>
<li>Response passes through middleware and is returned to the client.</li>
</ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">5. What is the difference between Laravel and Core PHP?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<div class="mb-4 overflow-x-auto"><table class="w-full border-collapse">
<thead>
<tr class="header">
<th class="border bg-gray-50 p-3">Laravel</th>
<th class="border bg-gray-50 p-3">Core PHP</th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td class="border p-3">PHP framework</td>
<td class="border p-3">PHP language without a framework</td>
</tr>
<tr class="even">
<td class="border p-3">Provides MVC structure</td>
<td class="border p-3">Developer creates application structure</td>
</tr>
<tr class="odd">
<td class="border p-3">Built-in routing</td>
<td class="border p-3">Routing must be implemented</td>
</tr>
<tr class="even">
<td class="border p-3">Eloquent ORM</td>
<td class="border p-3">Direct SQL or another database layer</td>
</tr>
<tr class="odd">
<td class="border p-3">Built-in middleware</td>
<td class="border p-3">Custom implementation</td>
</tr>
<tr class="even">
<td class="border p-3">Authentication tools available</td>
<td class="border p-3">Authentication must be developed or integrated</td>
</tr>
<tr class="odd">
<td class="border p-3">Provides security features</td>
<td class="border p-3">Security implementation is developer-dependent</td>
</tr>
</tbody>
</table></div>
<h2 id="2-routing-and-middleware">2. Routing and Middleware</h2>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">6. What is routing in Laravel?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Routing defines how Laravel handles incoming HTTP requests and maps them to controllers or callback functions.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Routes are generally defined in:</p>
<ul class="mb-4 list-disc pl-6 text-gray-700">
<li><code>routes/web.php</code> – Web routes.</li>
<li><code>routes/api.php</code> – API routes, when API routing is installed.</li>
<li><code>routes/console.php</code> – Console commands.</li>
<li><code>routes/channels.php</code> – Broadcasting channels, when configured.</li>
</ul>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>Route::get(&#39;/users&#39;, [UserController::class, &#39;index&#39;]);

Route::post(&#39;/users&#39;, [UserController::class, &#39;store&#39;]);

Route::put(&#39;/users/&#123;id&#125;&#39;, [UserController::class, &#39;update&#39;]);

Route::delete(&#39;/users/&#123;id&#125;&#39;, [UserController::class, &#39;destroy&#39;]);</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">7. What is middleware in Laravel?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Middleware acts as a filter between an incoming request and the application.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">It can inspect or modify requests before they reach the controller and responses before they are returned.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Common uses:</p>
<ol type="1">
<li>Authentication.</li>
<li>Authorization.</li>
<li>Request logging.</li>
<li>CORS handling.</li>
<li>Rate limiting.</li>
<li>Checking user roles.</li>
<li>Maintenance mode.</li>
</ol>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>class CheckUserRole
&#123;
    public function handle($request, Closure $next)
    &#123;
        if (!auth()-&gt;check() ||
            auth()-&gt;user()-&gt;role !== &#39;admin&#39;) &#123;
            abort(403);
        &#125;

        return $next($request);
    &#125;
&#125;</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">8. What is the difference between web middleware and API middleware?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Web middleware:</p>
<ul class="mb-4 list-disc pl-6 text-gray-700">
<li>Usually supports session-based authentication.</li>
<li>Handles cookies and CSRF protection.</li>
<li>Commonly used for browser-based applications.</li>
</ul>
<p class="mb-3 text-lg leading-8 text-gray-700">API middleware:</p>
<ul class="mb-4 list-disc pl-6 text-gray-700">
<li>Commonly handles token authentication.</li>
<li>Can apply rate limiting.</li>
<li>Usually designed for stateless requests.</li>
<li>Does not use browser session authentication by default.</li>
</ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">9. What is route model binding?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Route model binding automatically retrieves a model based on a route parameter.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>Route::get(&#39;/users/&#123;user&#125;&#39;, function (User $user) &#123;
    return $user;
&#125;);</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">If the user does not exist, Laravel automatically returns a 404 response.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Advantages:</p>
<ul class="mb-4 list-disc pl-6 text-gray-700">
<li>Reduces repetitive database queries.</li>
<li>Keeps controllers cleaner.</li>
<li>Simplifies resource handling.</li>
</ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">10. What is the difference between <code>Route::resource()</code> and <code>Route::apiResource()</code>?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700"><code>Route::resource()</code> creates seven standard CRUD routes, including routes for HTML forms and views.</p>
<p class="mb-3 text-lg leading-8 text-gray-700"><code>Route::apiResource()</code> creates only five API CRUD routes, excluding create and edit form routes.</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>Route::resource(&#39;users&#39;, UserController::class);

Route::apiResource(&#39;products&#39;, ProductController::class);</code></pre>
<h2 id="3-service-container-and-dependency-injection">3. Service Container and Dependency Injection</h2>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">11. What is the Laravel Service Container?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">The service container is a powerful tool for managing class dependencies and performing dependency injection.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">It automatically resolves class dependencies when they are needed.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>class UserController extends Controller
&#123;
    protected $userService;

    public function __construct(UserService $userService)
    &#123;
        $this-&gt;userService = $userService;
    &#125;
&#125;</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Laravel automatically resolves the <code>UserService</code> dependency through its service container.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">12. What is Dependency Injection?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Dependency Injection is a design technique in which a class receives its dependencies from outside instead of creating them internally.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Benefits:</p>
<ol type="1">
<li>Loose coupling.</li>
<li>Better code reusability.</li>
<li>Easier unit testing.</li>
<li>Better maintainability.</li>
<li>Easier replacement of implementations.</li>
</ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">13. What is the difference between <code>bind()</code> and <code>singleton()</code>?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Both methods register services in Laravel's service container.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">bind():</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Creates a new instance whenever the dependency is resolved.</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>$this-&gt;app-&gt;bind(
    PaymentServiceInterface::class,
    StripePaymentService::class
);</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">singleton():</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Creates one instance and reuses it for subsequent resolutions within the application container lifecycle.</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>$this-&gt;app-&gt;singleton(
    PaymentServiceInterface::class,
    StripePaymentService::class
);</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">14. What is a Service Provider?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">A Service Provider is responsible for registering and bootstrapping application services.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">It is one of the main entry points for configuring Laravel components.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Important methods:</p>
<ul class="mb-4 list-disc pl-6 text-gray-700">
<li><code>register()</code> – Register bindings in the service container.</li>
<li><code>boot()</code> – Execute initialization logic after services are registered.</li>
</ul>
<p class="mb-3 text-lg leading-8 text-gray-700">Create a provider:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>php artisan make:provider PaymentServiceProvider</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>public function register(): void
&#123;
    $this-&gt;app-&gt;singleton(
        PaymentServiceInterface::class,
        StripePaymentService::class
    );
&#125;</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">15. What is the difference between <code>register()</code> and <code>boot()</code>?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<div class="mb-4 overflow-x-auto"><table class="w-full border-collapse">
<thead>
<tr class="header">
<th class="border bg-gray-50 p-3">register()</th>
<th class="border bg-gray-50 p-3">boot()</th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td class="border p-3">Registers services</td>
<td class="border p-3">Initializes services</td>
</tr>
<tr class="even">
<td class="border p-3">Used for container bindings</td>
<td class="border p-3">Used for boot-time logic</td>
</tr>
<tr class="odd">
<td class="border p-3">Avoid using services that depend on unregistered providers</td>
<td class="border p-3">Runs after providers are registered</td>
</tr>
</tbody>
</table></div>
<h2 id="4-eloquent-orm-and-database">4. Eloquent ORM and Database</h2>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">16. What is Eloquent ORM?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Eloquent is Laravel's Object Relational Mapper (ORM). It allows developers to interact with database tables using PHP models instead of writing SQL queries for every operation.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>$users = User::all();

$user = User::find(1);

$user = User::create([
    &#39;name&#39; =&gt; &#39;Brijesh&#39;,
    &#39;email&#39; =&gt; &#39;brijesh&#64;example.com&#39;
]);

$user-&gt;update([
    &#39;name&#39; =&gt; &#39;Updated Name&#39;
]);

$user-&gt;delete();</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">17. What are Eloquent relationships?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Eloquent provides different types of database relationships.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">1. One-to-One</p>
<p class="mb-3 text-lg leading-8 text-gray-700">One user has one profile.</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>public function profile()
&#123;
    return $this-&gt;hasOne(Profile::class);
&#125;</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">2. One-to-Many</p>
<p class="mb-3 text-lg leading-8 text-gray-700">One user has many orders.</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>public function orders()
&#123;
    return $this-&gt;hasMany(Order::class);
&#125;</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">3. Many-to-One</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Many orders belong to one user.</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>public function user()
&#123;
    return $this-&gt;belongsTo(User::class);
&#125;</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">4. Many-to-Many</p>
<p class="mb-3 text-lg leading-8 text-gray-700">One student can enroll in multiple courses, and one course can have multiple students.</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>public function courses()
&#123;
    return $this-&gt;belongsToMany(Course::class);
&#125;</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">5. Has-One-Through</p>
<p class="mb-3 text-lg leading-8 text-gray-700">A country has one owner through a user relationship.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">6. Has-Many-Through</p>
<p class="mb-3 text-lg leading-8 text-gray-700">A country has many posts through its users.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">18. What is the difference between <code>hasOne()</code> and <code>belongsTo()</code>?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<ul class="mb-4 list-disc pl-6 text-gray-700">
<li><code>hasOne()</code> is generally defined on the model that owns the relationship.</li>
<li><code>belongsTo()</code> is defined on the model containing the foreign key.</li>
</ul>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">The <code>users</code> table has no profile foreign key, but the <code>profiles</code> table contains <code>user_id</code>.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">User model:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>public function profile()
&#123;
    return $this-&gt;hasOne(Profile::class);
&#125;</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Profile model:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>public function user()
&#123;
    return $this-&gt;belongsTo(User::class);
&#125;</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">19. What is eager loading and lazy loading?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Lazy Loading:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Related records are loaded only when the relationship is accessed.</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>$users = User::all();

foreach ($users as $user) &#123;
    echo $user-&gt;orders;
&#125;</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Eager Loading:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Related records are loaded together with the main query using <code>with()</code>.</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>$users = User::with(&#39;orders&#39;)-&gt;get();</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Eager loading helps prevent the N+1 query problem.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">20. What is the N+1 query problem?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">The N+1 query problem happens when an application executes one query to fetch the main records and then executes an additional query for each record to fetch related data.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Solution:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>$users = User::with(&#39;orders&#39;)-&gt;get();</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">For performance optimization, I use eager loading, query optimization, and database indexing.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">21. What is the difference between <code>get()</code>, <code>first()</code>, and <code>find()</code>?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<ul class="mb-4 list-disc pl-6 text-gray-700">
<li><code>get()</code> – Returns a collection of matching records.</li>
<li><code>first()</code> – Returns the first matching record or null.</li>
<li><code>find()</code> – Retrieves a record using its primary key.</li>
</ul>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>User::get();

User::where(&#39;status&#39;, 1)-&gt;first();

User::find(10);</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">22. What is the difference between <code>chunk()</code> and <code>cursor()</code>?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Both are used to process large datasets efficiently.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">chunk():</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Fetches records in smaller groups.</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>User::chunk(500, function ($users) &#123;
    foreach ($users as $user) &#123;
        // Process user
    &#125;
&#125;);</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">cursor():</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Uses a generator to iterate through records one at a time.</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>foreach (User::cursor() as $user) &#123;
    // Process user
&#125;</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700"><code>cursor()</code> can reduce PHP memory usage, although database driver buffering and long-running execution should also be considered.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">23. What is the difference between <code>where()</code> and <code>having()</code>?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<ul class="mb-4 list-disc pl-6 text-gray-700">
<li><code>where()</code> filters individual rows before grouping.</li>
<li><code>having()</code> filters grouped or aggregated results after grouping.</li>
</ul>
<p class="mb-3 text-lg leading-8 text-gray-700">SQL example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>SELECT category_id, COUNT(*) AS total
FROM products
GROUP BY category_id
HAVING COUNT(*) &gt; 5;</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Laravel example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>Product::select(&#39;category_id&#39;)
    -&gt;selectRaw(&#39;COUNT(*) as total&#39;)
    -&gt;groupBy(&#39;category_id&#39;)
    -&gt;havingRaw(&#39;COUNT(*) &gt; ?&#39;, [5])
    -&gt;get();</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">24. What is the difference between <code>attach()</code>, <code>detach()</code>, and <code>sync()</code>?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">These methods are used for many-to-many relationships.</p>
<ul class="mb-4 list-disc pl-6 text-gray-700">
<li><code>attach()</code> – Adds a relationship.</li>
<li><code>detach()</code> – Removes a relationship.</li>
<li><code>sync()</code> – Makes the relationship match the supplied IDs, removing other relationships.</li>
</ul>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>$user-&gt;roles()-&gt;attach([1, 2]);

$user-&gt;roles()-&gt;detach([1]);

$user-&gt;roles()-&gt;sync([2, 3]);</code></pre>
<h2 id="5-migrations-seeders-and-factories">5. Migrations, Seeders and Factories</h2>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">25. What are migrations in Laravel?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Migrations are used to manage database schema changes through PHP code.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">They provide version control for database structure.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Create migration:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>php artisan make:migration create_products_table</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Run migrations:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>php artisan migrate</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Rollback:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>php artisan migrate:rollback</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">26. What are seeders?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Seeders are used to insert initial or sample data into database tables.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Create seeder:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>php artisan make:seeder UserSeeder</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>DB::table(&#39;users&#39;)-&gt;insert([
    &#39;name&#39; =&gt; &#39;Admin&#39;,
    &#39;email&#39; =&gt; &#39;admin&#64;example.com&#39;,
    &#39;password&#39; =&gt; Hash::make(&#39;password123&#39;)
]);</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Run:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>php artisan db:seed</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">27. What are factories?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Factories generate fake or sample data for testing and development.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>php artisan make:factory UserFactory</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Factory:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>public function definition(): array
&#123;
    return [
        &#39;name&#39; =&gt; fake()-&gt;name(),
        &#39;email&#39; =&gt; fake()-&gt;unique()-&gt;safeEmail(),
        &#39;password&#39; =&gt; Hash::make(&#39;password&#39;)
    ];
&#125;</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Generate 100 users:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>User::factory()-&gt;count(100)-&gt;create();</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">28. What is the difference between migrations, seeders, and factories?</h2>
    </div>

<div class="mb-4 overflow-x-auto"><table class="w-full border-collapse">
<thead>
<tr class="header">
<th class="border bg-gray-50 p-3">Migrations</th>
<th class="border bg-gray-50 p-3">Seeders</th>
<th class="border bg-gray-50 p-3">Factories</th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td class="border p-3">Create or modify database structure</td>
<td class="border p-3">Insert initial/sample data</td>
<td class="border p-3">Generate fake data</td>
</tr>
<tr class="even">
<td class="border p-3">Schema management</td>
<td class="border p-3">Data population</td>
<td class="border p-3">Test data generation</td>
</tr>
<tr class="odd">
<td class="border p-3">Defines columns and indexes</td>
<td class="border p-3">Creates records</td>
<td class="border p-3">Defines fake field values</td>
</tr>
</tbody>
</table></div>
<h2 id="6-authentication-and-authorization">6. Authentication and Authorization</h2>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">29. What is the difference between authentication and authorization?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<ul class="mb-4 list-disc pl-6 text-gray-700">
<li>Authentication verifies the identity of a user.</li>
<li>Authorization checks what actions the user is permitted to perform.</li>
</ul>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">A user logs in successfully. Authentication is completed.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">If the user tries to access an admin-only page, authorization checks their permissions.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">30. What is Laravel Sanctum?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Laravel Sanctum provides lightweight authentication for SPAs, mobile applications, and simple API token-based authentication.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">It supports:</p>
<ol type="1">
<li>Personal access tokens.</li>
<li>SPA authentication using cookies and sessions.</li>
<li>Token abilities.</li>
</ol>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>$token = $user-&gt;createToken(&#39;mobile-app&#39;)-&gt;plainTextToken;</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Protect routes:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>Route::middleware(&#39;auth:sanctum&#39;)-&gt;group(function () &#123;
    Route::get(&#39;/profile&#39;, function (Request $request) &#123;
        return $request-&gt;user();
    &#125;);
&#125;);</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">31. What is Laravel Passport?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Laravel Passport is an OAuth 2.0 server implementation for Laravel.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">It is useful when an application needs OAuth features such as:</p>
<ul class="mb-4 list-disc pl-6 text-gray-700">
<li>Authorization Code flow.</li>
<li>Client credentials.</li>
<li>Delegated access.</li>
<li>Access and refresh tokens.</li>
</ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">32. What is the difference between Sanctum and Passport?</h2>
    </div>

<div class="mb-4 overflow-x-auto"><table class="w-full border-collapse">
<thead>
<tr class="header">
<th class="border bg-gray-50 p-3">Sanctum</th>
<th class="border bg-gray-50 p-3">Passport</th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td class="border p-3">Lightweight authentication</td>
<td class="border p-3">Full OAuth 2.0 implementation</td>
</tr>
<tr class="even">
<td class="border p-3">Simple API token authentication</td>
<td class="border p-3">OAuth clients and grants</td>
</tr>
<tr class="odd">
<td class="border p-3">SPA authentication</td>
<td class="border p-3">Delegated authorization</td>
</tr>
<tr class="even">
<td class="border p-3">Easier setup for simpler applications</td>
<td class="border p-3">More complex configuration</td>
</tr>
</tbody>
</table></div>
<h2 id="7-advanced-laravel-concepts">7. Advanced Laravel Concepts</h2>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">33. What are Laravel queues?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Queues allow time-consuming tasks to run in the background instead of blocking the main HTTP request.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Examples:</p>
<ol type="1">
<li>Sending emails.</li>
<li>Generating reports.</li>
<li>Processing uploaded files.</li>
<li>Sending notifications.</li>
<li>Processing bulk records.</li>
</ol>
<p class="mb-3 text-lg leading-8 text-gray-700">Create a job:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>php artisan make:job SendWelcomeEmail</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Dispatch:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>SendWelcomeEmail::dispatch($user);</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Run queue worker:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>php artisan queue:work</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">34. What are jobs and queues?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">A Job represents a task that needs to be executed.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">A Queue manages when and how that task is processed.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">A user registers. Instead of sending an email immediately, Laravel dispatches a job to a queue worker.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">The worker processes the job in the background.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">35. What are events and listeners?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Events and listeners help implement event-driven architecture.</p>
<ul class="mb-4 list-disc pl-6 text-gray-700">
<li>Event represents something that happened.</li>
<li>Listener defines what action should happen after that event.</li>
</ul>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">When a user registers, a <code>Registered</code> event can trigger listeners for:</p>
<ul class="mb-4 list-disc pl-6 text-gray-700">
<li>Sending a welcome email.</li>
<li>Creating a user profile.</li>
<li>Sending a notification.</li>
</ul>
<p class="mb-3 text-lg leading-8 text-gray-700">This keeps application components loosely coupled.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">36. What is Laravel caching?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Caching stores frequently accessed data temporarily to improve application performance.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Laravel supports cache drivers such as:</p>
<ul class="mb-4 list-disc pl-6 text-gray-700">
<li>File.</li>
<li>Database.</li>
<li>Redis.</li>
<li>Memcached.</li>
<li>Array.</li>
</ul>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>$users = Cache::remember(&#39;users&#39;, 300, function () &#123;
    return User::all();
&#125;);</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">This stores the result for 300 seconds.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">37. What is Laravel Task Scheduling?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Task scheduling allows developers to automate repetitive tasks.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Examples:</p>
<ul class="mb-4 list-disc pl-6 text-gray-700">
<li>Delete expired records.</li>
<li>Send daily reports.</li>
<li>Generate monthly invoices.</li>
<li>Clean temporary files.</li>
</ul>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>Schedule::command(&#39;reports:generate&#39;)
    -&gt;dailyAt(&#39;01:00&#39;);</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Laravel's scheduler is normally triggered by a server cron entry that runs <code>php artisan schedule:run</code> every minute.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">38. What are Laravel Gates and Policies?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Both are used for authorization.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Gates:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Used to authorize actions that are not necessarily tied to a particular model.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Policies:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Organize authorization logic around a model or resource.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>public function update(User $user, Post $post): bool
&#123;
    return $user-&gt;id === $post-&gt;user_id;
&#125;</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">A policy is useful when multiple actions need authorization logic for the same resource.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">39. What is the difference between Facades and Dependency Injection?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Facades:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Provide a static-looking interface to services managed by Laravel's service container.</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>Cache::get(&#39;users&#39;);</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Dependency Injection:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Passes dependencies directly into a class or method.</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>public function index(CacheManager $cache)
&#123;
    return $cache-&gt;get(&#39;users&#39;);
&#125;</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Dependency injection is especially useful for making dependencies explicit and improving testability.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">40. What are Laravel API Resources?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">API Resources transform Eloquent models and collections into consistent JSON responses.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Create resource:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>php artisan make:resource UserResource</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>public function toArray(Request $request): array
&#123;
    return [
        &#39;id&#39; =&gt; $this-&gt;id,
        &#39;name&#39; =&gt; $this-&gt;name,
        &#39;email&#39; =&gt; $this-&gt;email
    ];
&#125;</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Usage:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>return new UserResource(User::findOrFail(1));</code></pre>
<h2 id="8-laravel-security-questions">8. Laravel Security Questions</h2>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">41. How does Laravel prevent SQL injection?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Laravel uses parameter binding through its query builder and Eloquent ORM.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>$user = User::where(&#39;email&#39;, $request-&gt;email)-&gt;first();</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">For raw queries, use parameter binding:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>$users = DB::select(
    &#39;SELECT * FROM users WHERE email = ?&#39;,
    [$email]
);</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">I avoid concatenating user input directly into SQL queries.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">42. What is CSRF protection?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">CSRF stands for Cross-Site Request Forgery.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">It is an attack where an attacker tricks an authenticated user's browser into submitting an unwanted request.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Laravel provides CSRF protection for web routes using CSRF tokens.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Blade example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>&lt;form method=&quot;POST&quot; action=&quot;/users&quot;&gt;
    &#64;csrf
    &lt;input type=&quot;text&quot; name=&quot;name&quot;&gt;
    &lt;button type=&quot;submit&quot;&gt;Submit&lt;/button&gt;
&lt;/form&gt;</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">43. What is XSS?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">XSS stands for Cross-Site Scripting.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">It occurs when attackers inject malicious JavaScript into a web page.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Laravel Blade escapes output by default:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>&#123;&#123; $user-&gt;name &#125;&#125;</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Unescaped output:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>&#123;!! $user-&gt;name !!&#125;</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">I use unescaped output only when necessary and after proper sanitization.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">44. How do you secure file uploads in Laravel?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">I validate:</p>
<ol type="1">
<li>File size.</li>
<li>Allowed file types.</li>
<li>MIME type.</li>
<li>File extension.</li>
<li>Storage location.</li>
<li>File name.</li>
</ol>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>$request-&gt;validate([
    &#39;document&#39; =&gt; &#39;required|file|mimes:pdf,jpg,png|max:2048&#39;
]);

$path = $request-&gt;file(&#39;document&#39;)
    -&gt;store(&#39;documents&#39;, &#39;private&#39;);</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">I avoid trusting the original file name and keep sensitive files outside publicly accessible storage.</p>
<h2 id="9-database-transactions-and-performance">9. Database Transactions and Performance</h2>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">45. What are database transactions in Laravel?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">A database transaction ensures that a group of database operations succeeds or fails as one logical unit.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">It follows ACID principles:</p>
<ul class="mb-4 list-disc pl-6 text-gray-700">
<li>Atomicity.</li>
<li>Consistency.</li>
<li>Isolation.</li>
<li>Durability.</li>
</ul>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>DB::transaction(function () use ($request) &#123;
    $order = Order::create([
        &#39;user_id&#39; =&gt; auth()-&gt;id(),
        &#39;total&#39; =&gt; $request-&gt;total
    ]);

    OrderItem::create([
        &#39;order_id&#39; =&gt; $order-&gt;id,
        &#39;product_id&#39; =&gt; $request-&gt;product_id,
        &#39;quantity&#39; =&gt; $request-&gt;quantity
    ]);
&#125;);</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">If an exception occurs, Laravel rolls back the transaction.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">46. What is the difference between <code>DB::transaction()</code> and <code>beginTransaction()</code>?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">DB::transaction():</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Automatically commits when successful and rolls back if an exception occurs.</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>DB::transaction(function () &#123;
    // Database operations
&#125;);</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">beginTransaction():</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Provides manual control over commit and rollback.</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>DB::beginTransaction();

try &#123;
    // Database operations

    DB::commit();
&#125; catch (Throwable $e) &#123;
    DB::rollBack();

    throw $e;
&#125;</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">47. How do you prevent deadlocks in Laravel?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">A deadlock occurs when two or more transactions wait for resources locked by each other.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">I reduce deadlocks by:</p>
<ol type="1">
<li>Accessing database tables and rows in a consistent order.</li>
<li>Keeping transactions short.</li>
<li>Adding proper indexes.</li>
<li>Avoiding unnecessary locks.</li>
<li>Using suitable transaction isolation.</li>
<li>Retrying transactions where appropriate.</li>
</ol>
<p class="mb-3 text-lg leading-8 text-gray-700">Laravel example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>DB::transaction(function () &#123;
    // Database operations
&#125;, 3);</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">The second argument allows Laravel to retry the transaction when a deadlock occurs.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">48. How do you optimize Laravel application performance?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">I use the following techniques:</p>
<ol type="1">
<li>Optimize SQL queries.</li>
<li>Add appropriate indexes.</li>
<li>Use eager loading.</li>
<li>Implement Redis caching.</li>
<li>Use queues for background tasks.</li>
<li>Avoid unnecessary database queries.</li>
<li>Use pagination.</li>
<li>Cache routes and configuration in production.</li>
<li>Optimize assets.</li>
<li>Monitor logs and application performance.</li>
</ol>
<p class="mb-3 text-lg leading-8 text-gray-700">Useful commands:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>php artisan config:cache
php artisan route:cache
php artisan view:cache</code></pre>
<h2 id="10-laravel-design-patterns">10. Laravel Design Patterns</h2>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">49. What is the Repository Pattern?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">The Repository Pattern separates database access logic from business logic.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">It provides an abstraction layer between controllers or services and data storage.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>interface UserRepositoryInterface
&#123;
    public function getAll();
&#125;</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Implementation:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>class UserRepository implements UserRepositoryInterface
&#123;
    public function getAll()
    &#123;
        return User::all();
    &#125;
&#125;</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Controller:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>class UserController extends Controller
&#123;
    public function __construct(
        private UserRepositoryInterface $repository
    ) &#123;&#125;

    public function index()
    &#123;
        return $this-&gt;repository-&gt;getAll();
    &#125;
&#125;</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Benefits:</p>
<ul class="mb-4 list-disc pl-6 text-gray-700">
<li>Better separation of concerns.</li>
<li>Easier testing.</li>
<li>Easier replacement of data access implementations.</li>
<li>Improved maintainability.</li>
</ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">50. What is the Service Pattern in Laravel?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">The Service Pattern moves business logic out of controllers into dedicated service classes.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>class UserService
&#123;
    public function createUser(array $data)
    &#123;
        return User::create($data);
    &#125;
&#125;</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Controller:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>public function store(
    Request $request,
    UserService $userService
) &#123;
    $validated = $request-&gt;validate([
        &#39;name&#39; =&gt; &#39;required|string&#39;,
        &#39;email&#39; =&gt; &#39;required|email&#39;
    ]);

    $user = $userService-&gt;createUser($validated);

    return response()-&gt;json($user, 201);
&#125;</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">It keeps controllers small and makes business logic reusable.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">51. What is the difference between Service Pattern and Repository Pattern?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<ul class="mb-4 list-disc pl-6 text-gray-700">
<li>Service Pattern manages business logic.</li>
<li>Repository Pattern manages data access logic.</li>
</ul>
<p class="mb-3 text-lg leading-8 text-gray-700">A service may use a repository to retrieve and save data.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">They solve different problems and can be used together, but neither is mandatory for every Laravel application.</p>
<h2 id="11-scenario-based-laravel-interview-questions">11. Scenario-Based Laravel Interview Questions</h2>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">52. How do you prevent duplicate payment transactions in Laravel?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">I use multiple layers of protection:</p>
<ol type="1">
<li>Generate a unique payment or idempotency key.</li>
<li>Create a unique database constraint.</li>
<li>Verify the payment with the gateway.</li>
<li>Use database transactions.</li>
<li>Verify webhook signatures.</li>
<li>Store webhook event IDs to prevent duplicate processing.</li>
<li>Use row-level locking for critical updates.</li>
<li>Maintain payment status transitions.</li>
</ol>
<p class="mb-3 text-lg leading-8 text-gray-700">For example, when a customer clicks the payment button multiple times, the same idempotency key should not create multiple payment records or gateway charges.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">53. How do you handle a large amount of data in Laravel?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">For large datasets, I use:</p>
<ul class="mb-4 list-disc pl-6 text-gray-700">
<li><code>chunk()</code> or <code>chunkById()</code>.</li>
<li><code>cursor()</code> where appropriate.</li>
<li>Lazy collections.</li>
<li>Database indexes.</li>
<li>Queue jobs.</li>
<li>Batch processing.</li>
<li>Pagination.</li>
</ul>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>User::chunkById(500, function ($users) &#123;
    foreach ($users as $user) &#123;
        // Process each user
    &#125;
&#125;);</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">54. How do you handle a failed queue job?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Laravel provides failed job management.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">I use:</p>
<ol type="1">
<li>Retry attempts.</li>
<li>Backoff delays.</li>
<li>Failed job logging.</li>
<li>Error monitoring.</li>
<li>Manual retry when appropriate.</li>
</ol>
<p class="mb-3 text-lg leading-8 text-gray-700">Useful commands:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>php artisan queue:failed
php artisan queue:retry all
php artisan queue:retry 5
php artisan queue:work</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">I also ensure that jobs are safe to retry and do not create duplicate side effects.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">55. How do you integrate Laravel with React.js?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">I use Laravel as the backend API and React.js as the frontend application.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Integration steps:</p>
<ol type="1">
<li>Create REST APIs in Laravel.</li>
<li>Configure database operations.</li>
<li>Implement authentication using Sanctum or token-based authentication.</li>
<li>Return JSON responses.</li>
<li>Configure CORS.</li>
<li>Call APIs using Axios or Fetch in React.</li>
<li>Handle loading, validation, and error states.</li>
<li>Test API integration.</li>
</ol>
<p class="mb-3 text-lg leading-8 text-gray-700">React example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>import axios from &quot;axios&quot;;

const getUsers = async () =&gt; &#123;
    try &#123;
        const response = await axios.get(
            &quot;http://localhost:8000/api/users&quot;
        );

        console.log(response.data);
    &#125; catch (error) &#123;
        console.error(error.response?.data || error.message);
    &#125;
&#125;;</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">56. How do you deploy a Laravel application to production?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">My deployment process generally includes:</p>
<ol type="1">
<li>Prepare production server and PHP environment.</li>
<li>Configure database credentials.</li>
<li>Set production environment variables.</li>
<li>Pull or deploy application code.</li>
<li>Install production dependencies.</li>
<li>Run database migrations.</li>
<li>Set correct file permissions.</li>
<li>Configure web server and document root.</li>
<li>Configure queue workers and cron jobs.</li>
<li>Cache configuration, routes, and views.</li>
<li>Enable HTTPS.</li>
<li>Verify logs and application health.</li>
</ol>
<p class="mb-3 text-lg leading-8 text-gray-700">Useful commands:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>composer install --no-dev --optimize-autoloader

php artisan migrate --force

php artisan config:cache
php artisan route:cache
php artisan view:cache</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">I also ensure that rollback procedures and backups are available before production deployments.</p>
<h2 id="12-practical-laravel-coding-questions">12. Practical Laravel Coding Questions</h2>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">57. How do you find duplicate records in Laravel?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Example: Find duplicate email addresses.</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>$duplicates = User::select(&#39;email&#39;)
    -&gt;groupBy(&#39;email&#39;)
    -&gt;havingRaw(&#39;COUNT(*) &gt; 1&#39;)
    -&gt;get();</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">58. How do you get the latest five records?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>$users = User::latest()
    -&gt;take(5)
    -&gt;get();</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">59. How do you update multiple records?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>User::where(&#39;status&#39;, &#39;inactive&#39;)
    -&gt;update([
        &#39;status&#39; =&gt; &#39;active&#39;
    ]);</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">60. How do you implement soft deletes?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Soft deletes mark records as deleted without physically removing them from the database.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Model:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
&#123;
    use SoftDeletes;
&#125;</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Migration:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>$table-&gt;softDeletes();</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Delete:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>$user-&gt;delete();</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Restore:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>$user-&gt;restore();</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Retrieve deleted records:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>User::withTrashed()-&gt;get();</code></pre>
<h2 id="13-important-laravel-commands-for-interviews">13. Important Laravel Commands for Interviews</h2>
<div class="mb-4 overflow-x-auto"><table class="w-full border-collapse">
<thead>
<tr class="header">
<th class="border bg-gray-50 p-3">Command</th>
<th class="border bg-gray-50 p-3">Purpose</th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td class="border p-3"><code>php artisan list</code></td>
<td class="border p-3">List Artisan commands</td>
</tr>
<tr class="even">
<td class="border p-3"><code>php artisan route:list</code></td>
<td class="border p-3">Show application routes</td>
</tr>
<tr class="odd">
<td class="border p-3"><code>php artisan make:controller UserController</code></td>
<td class="border p-3">Create controller</td>
</tr>
<tr class="even">
<td class="border p-3"><code>php artisan make:model User -m</code></td>
<td class="border p-3">Create model and migration</td>
</tr>
<tr class="odd">
<td class="border p-3"><code>php artisan make:middleware CheckRole</code></td>
<td class="border p-3">Create middleware</td>
</tr>
<tr class="even">
<td class="border p-3"><code>php artisan make:request StoreUserRequest</code></td>
<td class="border p-3">Create form request</td>
</tr>
<tr class="odd">
<td class="border p-3"><code>php artisan make:job SendEmail</code></td>
<td class="border p-3">Create job</td>
</tr>
<tr class="even">
<td class="border p-3"><code>php artisan make:event UserRegistered</code></td>
<td class="border p-3">Create event</td>
</tr>
<tr class="odd">
<td class="border p-3"><code>php artisan make:listener SendWelcomeEmail</code></td>
<td class="border p-3">Create listener</td>
</tr>
<tr class="even">
<td class="border p-3"><code>php artisan make:resource UserResource</code></td>
<td class="border p-3">Create API resource</td>
</tr>
<tr class="odd">
<td class="border p-3"><code>php artisan migrate</code></td>
<td class="border p-3">Run migrations</td>
</tr>
<tr class="even">
<td class="border p-3"><code>php artisan migrate:rollback</code></td>
<td class="border p-3">Roll back migrations</td>
</tr>
<tr class="odd">
<td class="border p-3"><code>php artisan db:seed</code></td>
<td class="border p-3">Run seeders</td>
</tr>
<tr class="even">
<td class="border p-3"><code>php artisan queue:work</code></td>
<td class="border p-3">Start queue worker</td>
</tr>
<tr class="odd">
<td class="border p-3"><code>php artisan optimize:clear</code></td>
<td class="border p-3">Clear optimization caches</td>
</tr>
<tr class="even">
<td class="border p-3"><code>php artisan config:cache</code></td>
<td class="border p-3">Cache configuration</td>
</tr>
<tr class="odd">
<td class="border p-3"><code>php artisan route:cache</code></td>
<td class="border p-3">Cache routes</td>
</tr>
</tbody>
</table></div>
<h2 id="14-most-important-topics-for-senior-laravel-interviews">14. Most Important Topics for Senior Laravel Interviews</h2>
<h2 id="interview-preparation-priority">Interview preparation priority</h2>
<p class="mb-3 text-lg leading-8 text-gray-700">Your preparation progress</p>
<h1 id="012">0/12</h1>
<p class="mb-3 text-lg leading-8 text-gray-700">MVC architecture and request lifecycle</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Fundamentals</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Service Container and Dependency Injection</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Advanced</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Service Providers and Facades</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Advanced</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Eloquent relationships and N+1 queries</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Database</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Queues, Jobs, Events and Listeners</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Advanced</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Sanctum, Passport and JWT</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Security</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Middleware, Gates and Policies</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Security</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Transactions, deadlocks and locking</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Database</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Repository and Service Patterns</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Architecture</p>
<p class="mb-3 text-lg leading-8 text-gray-700">REST API, webhooks and duplicate payments</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Real-world</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Caching, Redis and performance</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Performance</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Laravel deployment and CI/CD</p>
</div>








  </div>

  </section>
  </div>
 
 
<br>
<div class="clear nextprev">
<a class="left btn" href="{{url('interviews/technical-logic-question-answer')}}">&#10094; Previous</a>
<a class="right btn" href="{{url('interviews/javascript-interview-question-answer')}}">Next &#10095;</a>
</div>
</div>
 
</div>
   
  @endsection