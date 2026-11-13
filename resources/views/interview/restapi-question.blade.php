@extends('interview.layouts.app')
@section('title')
RestAPI Interview Questions & Answers
@endsection  
@section('description'),  
Master REST API interview questions and answers covering HTTP methods, status codes, authentication, JSON, CRUD operations, and API best practices
@endsection


@section('content')	 
 

<div class='main light-grey' id='belowtopnav' style='margin-left:220px;'>
  <div class='row white'>
    <div class='col l11 m12' id='main'>
       
<h1>RestAPI<span class="color_h1">Interview Question & Answer</span></h1>
<div class="clear nextprev">
<a class="left btn" href="{{url('interviews/reactjs-interview-question-answer')}}">&#10094; Previous</a>
<a class="right btn" href="{{url('interviews/php-interview-question-answer')}}">Next &#10095;</a>
</div>


<hr>

 
 <div class="light">
 
 
 <section id="services-section" class="py-12 bg-gray-100">
  <div class="container mx-auto px-4">

@extends('interview.layouts.app')
@section('title')
RestAPI Interview Questions & Answers
@endsection 
@section('keywords')
QuickDials-  Business Services list 
@endsection
@section('description'),  
Master REST API interview questions and answers covering HTTP methods, status codes, authentication, JSON, CRUD, and API best practices.
@endsection


@section('content')	 
 

<div class='main light-grey' id='belowtopnav' style='margin-left:220px;'>
  <div class='row white'>
    <div class='col l11 m12' id='main'>
       
<h1>RestAPI<span class="color_h1">Interview Question & Answer</span></h1>
<div class="clear nextprev">
<a class="left btn" href="{{url('interviews/reactjs-interview-question-answer')}}">&#10094; Previous</a>
<a class="right btn" href="{{url('interviews/php-interview-question-answer')}}">Next &#10095;</a>
</div>


<hr>

 
 <div class="light">
 
 
 <section id="services-section" class="py-12 bg-gray-100">
  <div class="container mx-auto px-4">

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">1. What is a REST API?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">REST stands for Representational State Transfer. It is an architectural style used to develop web services that allow different applications to communicate over HTTP.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Key characteristics:</p>
<ol type="1">
<li>Client-server architecture.</li>
<li>Stateless communication.</li>
<li>Resource-based URLs.</li>
<li>Uses HTTP methods such as GET, POST, PUT, PATCH, and DELETE.</li>
<li>Supports JSON and XML formats, commonly JSON.</li>
<li>Uses HTTP status codes to communicate results.</li>
<li>Supports caching where appropriate.</li>
</ol>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>GET    /api/users
GET    /api/users/10
POST   /api/users
PUT    /api/users/10
PATCH  /api/users/10
DELETE /api/users/10</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">2. What are the main principles of REST architecture?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">REST architecture follows six main principles:</p>
<ol type="1">
<li>Client-Server: Client and server responsibilities are separated.</li>
<li>Stateless: Every request contains all the information required to process it.</li>
<li>Cacheable: Responses should specify whether they can be cached.</li>
<li>Uniform Interface: Resources are accessed through a consistent interface.</li>
<li>Layered System: Client does not need to know whether it communicates directly with the server or through intermediaries.</li>
<li>Code on Demand: Server can optionally send executable code to the client.</li>
</ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">3. What is the difference between REST API and SOAP API?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<div class="mb-4 overflow-x-auto"><table class="w-full border-collapse">
<thead>
<tr class="header">
<th class="border bg-gray-50 p-3">REST API</th>
<th class="border bg-gray-50 p-3">SOAP API</th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td class="border p-3">Architectural style</td>
<td class="border p-3">Communication protocol</td>
</tr>
<tr class="even">
<td class="border p-3">Commonly uses JSON</td>
<td class="border p-3">Uses XML</td>
</tr>
<tr class="odd">
<td class="border p-3">Lightweight</td>
<td class="border p-3">More structured and verbose</td>
</tr>
<tr class="even">
<td class="border p-3">Uses HTTP methods</td>
<td class="border p-3">Uses SOAP messages</td>
</tr>
<tr class="odd">
<td class="border p-3">Easier to integrate with web/mobile applications</td>
<td class="border p-3">Often used in enterprise integrations</td>
</tr>
<tr class="even">
<td class="border p-3">Flexible resource-based URLs</td>
<td class="border p-3">Uses WSDL contracts</td>
</tr>
</tbody>
</table></div>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">4. What is the difference between REST and RESTful APIs?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">REST is an architectural style that defines rules for designing APIs.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">A RESTful API is an API that follows REST architectural principles.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">For example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>GET /api/products
POST /api/products
GET /api/products/5
DELETE /api/products/5</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">These endpoints use HTTP methods and resource-based URLs.</p>
<h2 id="2-http-methods-and-status-codes">2. HTTP Methods and Status Codes</h2>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">5. Explain all HTTP methods used in REST APIs.</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<div class="mb-4 overflow-x-auto"><table class="w-full border-collapse">
<thead>
<tr class="header">
<th class="border bg-gray-50 p-3">Method</th>
<th class="border bg-gray-50 p-3">Purpose</th>
<th class="border bg-gray-50 p-3">Example</th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td class="border p-3">GET</td>
<td class="border p-3">Retrieve data</td>
<td class="border p-3">Get users</td>
</tr>
<tr class="even">
<td class="border p-3">POST</td>
<td class="border p-3">Create a new resource</td>
<td class="border p-3">Create user</td>
</tr>
<tr class="odd">
<td class="border p-3">PUT</td>
<td class="border p-3">Replace an existing resource</td>
<td class="border p-3">Update complete user</td>
</tr>
<tr class="even">
<td class="border p-3">PATCH</td>
<td class="border p-3">Partially update a resource</td>
<td class="border p-3">Update email only</td>
</tr>
<tr class="odd">
<td class="border p-3">DELETE</td>
<td class="border p-3">Delete a resource</td>
<td class="border p-3">Delete user</td>
</tr>
<tr class="even">
<td class="border p-3">HEAD</td>
<td class="border p-3">Retrieve response headers only</td>
<td class="border p-3">Check resource</td>
</tr>
<tr class="odd">
<td class="border p-3">OPTIONS</td>
<td class="border p-3">Check supported communication methods</td>
<td class="border p-3">CORS preflight</td>
</tr>
</tbody>
</table></div>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>GET /api/users/10
POST /api/users
PUT /api/users/10
PATCH /api/users/10
DELETE /api/users/10</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">6. What is the difference between PUT and PATCH?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">PUT:</p>
<ul class="mb-4 list-disc pl-6 text-gray-700">
<li>Used to replace the complete resource.</li>
<li>Usually sends all resource fields.</li>
<li>Repeating the same request with the same data should produce the same intended result.</li>
</ul>
<p class="mb-3 text-lg leading-8 text-gray-700">PATCH:</p>
<ul class="mb-4 list-disc pl-6 text-gray-700">
<li>Used to update selected fields.</li>
<li>Sends only the fields that need modification.</li>
<li>Useful for partial updates.</li>
</ul>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>{
  &quot;name&quot;: &quot;Brijesh&quot;,
  &quot;email&quot;: &quot;brijesh@example.com&quot;,
  &quot;phone&quot;: &quot;9876543210&quot;
}</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">PATCH request:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>{
  &quot;phone&quot;: &quot;9999999999&quot;
}</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Only the phone number needs to be updated.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">7. Explain important HTTP status codes.</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<div class="mb-4 overflow-x-auto"><table class="w-full border-collapse">
<thead>
<tr class="header">
<th class="border bg-gray-50 p-3">Status code</th>
<th class="border bg-gray-50 p-3">Meaning</th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td class="border p-3">200</td>
<td class="border p-3">OK – Request successful</td>
</tr>
<tr class="even">
<td class="border p-3">201</td>
<td class="border p-3">Created – Resource created</td>
</tr>
<tr class="odd">
<td class="border p-3">202</td>
<td class="border p-3">Accepted – Request accepted for processing</td>
</tr>
<tr class="even">
<td class="border p-3">204</td>
<td class="border p-3">No Content – Successful response without body</td>
</tr>
<tr class="odd">
<td class="border p-3">301</td>
<td class="border p-3">Moved Permanently</td>
</tr>
<tr class="even">
<td class="border p-3">302</td>
<td class="border p-3">Found – Temporary redirect</td>
</tr>
<tr class="odd">
<td class="border p-3">400</td>
<td class="border p-3">Bad Request</td>
</tr>
<tr class="even">
<td class="border p-3">401</td>
<td class="border p-3">Unauthorized – Authentication required or failed</td>
</tr>
<tr class="odd">
<td class="border p-3">403</td>
<td class="border p-3">Forbidden – User does not have permission</td>
</tr>
<tr class="even">
<td class="border p-3">404</td>
<td class="border p-3">Resource Not Found</td>
</tr>
<tr class="odd">
<td class="border p-3">405</td>
<td class="border p-3">Method Not Allowed</td>
</tr>
<tr class="even">
<td class="border p-3">409</td>
<td class="border p-3">Conflict</td>
</tr>
<tr class="odd">
<td class="border p-3">422</td>
<td class="border p-3">Validation Error</td>
</tr>
<tr class="even">
<td class="border p-3">429</td>
<td class="border p-3">Too Many Requests</td>
</tr>
<tr class="odd">
<td class="border p-3">500</td>
<td class="border p-3">Internal Server Error</td>
</tr>
<tr class="even">
<td class="border p-3">502</td>
<td class="border p-3">Bad Gateway</td>
</tr>
<tr class="odd">
<td class="border p-3">503</td>
<td class="border p-3">Service Unavailable</td>
</tr>
<tr class="even">
<td class="border p-3">504</td>
<td class="border p-3">Gateway Timeout</td>
</tr>
</tbody>
</table></div>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">8. What is the difference between 401 and 403?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<ul class="mb-4 list-disc pl-6 text-gray-700">
<li>401 Unauthorized: The user is not properly authenticated. For example, an invalid or missing access token.</li>
<li>403 Forbidden: The user is authenticated but does not have permission to access the requested resource.</li>
</ul>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">An unauthenticated user tries to access the admin API: 401.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">A normal authenticated user tries to delete an admin account: 403.</p>
<h2 id="3-api-authentication-and-authorization">3. API Authentication and Authorization</h2>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">9. What is API authentication?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">API authentication verifies the identity of the client or user making an API request.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Common authentication methods:</p>
<ol type="1">
<li>Basic Authentication.</li>
<li>API Key Authentication.</li>
<li>Bearer Token Authentication.</li>
<li>JWT Authentication.</li>
<li>OAuth 2.0.</li>
<li>Session-based Authentication.</li>
</ol>
<p class="mb-3 text-lg leading-8 text-gray-700">For modern applications, token-based authentication is commonly used.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">10. What is JWT authentication?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">JWT stands for JSON Web Token. It is a compact token format used to securely transmit claims between two parties.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">JWT contains three parts:</p>
<ol type="1">
<li>Header – Contains token type and signing algorithm.</li>
<li>Payload – Contains claims such as user ID and expiration time.</li>
<li>Signature – Verifies that the token has not been modified.</li>
</ol>
<p class="mb-3 text-lg leading-8 text-gray-700">JWT format:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>header.payload.signature</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>GET /api/profile
Authorization: Bearer YOUR_ACCESS_TOKEN</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Important security points:</p>
<ul class="mb-4 list-disc pl-6 text-gray-700">
<li>Always use HTTPS.</li>
<li>Validate token signatures.</li>
<li>Check token expiration.</li>
<li>Use secure signing algorithms.</li>
<li>Do not store passwords or sensitive information in JWT payloads.</li>
<li>Implement refresh-token rotation and revocation where required.</li>
</ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">11. What is the difference between JWT and OAuth 2.0?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">JWT is a token format, whereas OAuth 2.0 is an authorization framework.</p>
<div class="mb-4 overflow-x-auto"><table class="w-full border-collapse">
<thead>
<tr class="header">
<th class="border bg-gray-50 p-3">JWT</th>
<th class="border bg-gray-50 p-3">OAuth 2.0</th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td class="border p-3">Defines a token format</td>
<td class="border p-3">Defines authorization flows</td>
</tr>
<tr class="even">
<td class="border p-3">Contains encoded claims</td>
<td class="border p-3">Allows delegated access</td>
</tr>
<tr class="odd">
<td class="border p-3">Can be used as an access token</td>
<td class="border p-3">Access tokens may be JWT or opaque</td>
</tr>
<tr class="even">
<td class="border p-3">Has a signature or encryption</td>
<td class="border p-3">Defines how clients obtain and use tokens</td>
</tr>
</tbody>
</table></div>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">12. What is the difference between authentication and authorization?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<ul class="mb-4 list-disc pl-6 text-gray-700">
<li>Authentication verifies who the user is.</li>
<li>Authorization verifies what the user is allowed to do.</li>
</ul>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">A user logs in successfully. Authentication is completed.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">The user tries to access an admin dashboard. Authorization checks whether the user has admin permission.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">13. How do you secure REST APIs?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">I follow multiple security practices:</p>
<ol type="1">
<li>Use HTTPS for encrypted communication.</li>
<li>Implement JWT, OAuth 2.0, or secure session authentication.</li>
<li>Validate all incoming request data.</li>
<li>Implement authorization and role-based access control.</li>
<li>Prevent SQL injection using parameterized queries or ORM.</li>
<li>Protect against XSS and CSRF where applicable.</li>
<li>Apply rate limiting.</li>
<li>Validate uploaded files.</li>
<li>Avoid exposing sensitive information in responses.</li>
<li>Store passwords using secure hashing algorithms.</li>
<li>Configure CORS with trusted origins.</li>
<li>Keep API secrets outside source code.</li>
</ol>
<h2 id="4-advanced-rest-api-design">4. Advanced REST API Design</h2>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">14. What is idempotency in REST APIs?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Idempotency means that making the same request multiple times produces the same intended result as making it once.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Examples:</p>
<ul class="mb-4 list-disc pl-6 text-gray-700">
<li>GET is idempotent.</li>
<li>PUT is idempotent.</li>
<li>DELETE is idempotent in terms of intended server state.</li>
<li>POST is generally not idempotent by default.</li>
</ul>
<p class="mb-3 text-lg leading-8 text-gray-700">Real-world example:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Suppose a user clicks the payment button multiple times due to a slow internet connection.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Without protection, multiple payments might be created.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">We can use an idempotency key:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>POST /api/payments
Idempotency-Key: payment-12345</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">The server stores the key and its result. If the same request arrives again, the server returns the previous result instead of creating another payment.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">15. What is API versioning?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">API versioning allows developers to introduce changes without breaking existing clients.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Common approaches:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">1. URL versioning</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>/api/v1/users
/api/v2/users</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">2. Header versioning</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>Accept: application/vnd.company.v1+json</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">3. Query parameter versioning</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>/api/users?version=1</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">I generally prefer URL versioning because it is simple to understand, maintain, and test.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">16. What is pagination in REST APIs?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Pagination divides large datasets into smaller pages to improve performance and reduce response size.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Offset-based pagination:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>GET /api/users?page=2&amp;per_page=10</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Laravel example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>public function index()
{
    $users = User::paginate(10);

    return response()-&gt;json([
        &#39;status&#39; =&gt; true,
        &#39;data&#39; =&gt; $users
    ]);
}</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Cursor-based pagination:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>GET /api/users?cursor=eyJpZCI6MTAwfQ</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Cursor pagination is useful for large datasets and frequently changing records because it avoids some problems associated with offset pagination.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">17. What is API rate limiting?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Rate limiting restricts the number of requests a client can make within a specified period.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<ul class="mb-4 list-disc pl-6 text-gray-700">
<li>60 requests per minute per user.</li>
<li>100 requests per minute per API key.</li>
</ul>
<p class="mb-3 text-lg leading-8 text-gray-700">Benefits:</p>
<ol type="1">
<li>Prevents API abuse.</li>
<li>Protects server resources.</li>
<li>Reduces brute-force attempts.</li>
<li>Helps maintain application stability.</li>
</ol>
<p class="mb-3 text-lg leading-8 text-gray-700">Laravel example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>use Illuminate\Support\Facades\Route;

Route::middleware(&#39;throttle:60,1&#39;)-&gt;group(function () {
    Route::get(&#39;/users&#39;, [UserController::class, &#39;index&#39;]);
});</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">18. What is CORS?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">CORS stands for Cross-Origin Resource Sharing.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">It is a browser security mechanism that controls whether a web application running on one origin can access resources from another origin.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">React application:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>http://localhost:3000</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Laravel API:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>http://localhost:8000</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">The Laravel server must allow the React application's origin.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Important CORS headers:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>Access-Control-Allow-Origin: https://example.com
Access-Control-Allow-Methods: GET, POST, PUT, DELETE
Access-Control-Allow-Headers: Content-Type, Authorization</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">For credential-based requests, configure an explicit allowed origin and <code>Access-Control-Allow-Credentials: true</code>; do not use <code>*</code> as the allowed origin.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">19. What is HATEOAS?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">HATEOAS stands for Hypermedia as the Engine of Application State.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">It is a REST constraint where API responses include links that tell clients what actions or resources are available next.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>{
  &quot;id&quot;: 10,
  &quot;name&quot;: &quot;Brijesh&quot;,
  &quot;links&quot;: {
    &quot;self&quot;: &quot;/api/users/10&quot;,
    &quot;orders&quot;: &quot;/api/users/10/orders&quot;,
    &quot;update&quot;: &quot;/api/users/10&quot;
  }
}</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">It helps clients navigate an API dynamically instead of hardcoding every possible URL.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">20. What is the difference between synchronous and asynchronous APIs?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Synchronous API:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">The client sends a request and waits for the server to complete the operation and return a response.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Asynchronous API:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">The server accepts a request and processes it in the background. The client receives an acknowledgment and can check the result later.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">For sending bulk emails or generating large reports, I would use a Laravel queue instead of making the client wait for the entire operation.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Typical flow:</p>
<ol type="1">
<li>Client sends request.</li>
<li>API returns HTTP 202 Accepted with a job ID.</li>
<li>Laravel dispatches a background job.</li>
<li>Client checks job status through another API.</li>
</ol>
<h2 id="5-laravel-rest-api-interview-questions">5. Laravel REST API Interview Questions</h2>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">21. How do you create a REST API in Laravel?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">I generally follow these steps:</p>
<ol type="1">
<li>Create a Laravel project.</li>
<li>Configure the database.</li>
<li>Create a model and migration.</li>
<li>Create an API controller.</li>
<li>Define routes in <code>routes/api.php</code>.</li>
<li>Implement CRUD operations.</li>
<li>Add validation.</li>
<li>Use API Resources for consistent responses.</li>
<li>Add authentication middleware.</li>
<li>Test endpoints using Postman.</li>
</ol>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>php artisan make:model Product -m
php artisan make:controller API/ProductController --api</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Migration:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>Schema::create(&#39;products&#39;, function (Blueprint $table) {
    $table-&gt;id();
    $table-&gt;string(&#39;name&#39;);
    $table-&gt;decimal(&#39;price&#39;, 10, 2);
    $table-&gt;timestamps();
});</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Controller:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return response()-&gt;json([
            &#39;status&#39; =&gt; true,
            &#39;data&#39; =&gt; Product::paginate(10)
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request-&gt;validate([
            &#39;name&#39; =&gt; &#39;required|string|max:255&#39;,
            &#39;price&#39; =&gt; &#39;required|numeric|min:0&#39;
        ]);

        $product = Product::create($validated);

        return response()-&gt;json([
            &#39;status&#39; =&gt; true,
            &#39;message&#39; =&gt; &#39;Product created successfully&#39;,
            &#39;data&#39; =&gt; $product
        ], 201);
    }

    public function show(Product $product)
    {
        return response()-&gt;json([
            &#39;status&#39; =&gt; true,
            &#39;data&#39; =&gt; $product
        ]);
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request-&gt;validate([
            &#39;name&#39; =&gt; &#39;sometimes|required|string|max:255&#39;,
            &#39;price&#39; =&gt; &#39;sometimes|required|numeric|min:0&#39;
        ]);

        $product-&gt;update($validated);

        return response()-&gt;json([
            &#39;status&#39; =&gt; true,
            &#39;message&#39; =&gt; &#39;Product updated successfully&#39;,
            &#39;data&#39; =&gt; $product
        ]);
    }

    public function destroy(Product $product)
    {
        $product-&gt;delete();

        return response()-&gt;json([
            &#39;status&#39; =&gt; true,
            &#39;message&#39; =&gt; &#39;Product deleted successfully&#39;
        ]);
    }
}</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Route:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>use App\Http\Controllers\API\ProductController;

Route::apiResource(&#39;products&#39;, ProductController::class);</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Note: Add the appropriate <code>$fillable</code> properties to the Product model. Laravel 11/12 API route setup may require enabling API routing during installation if <code>routes/api.php</code> is not present.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">22. What is the difference between API Resource and JSON response in Laravel?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700"><code>response()-&gt;json()</code> directly returns JSON data.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Laravel API Resources provide a structured way to transform models and collections into consistent API responses.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>php artisan make:resource ProductResource</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Resource:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>public function toArray(Request $request): array
{
    return [
        &#39;id&#39; =&gt; $this-&gt;id,
        &#39;name&#39; =&gt; $this-&gt;name,
        &#39;price&#39; =&gt; $this-&gt;price,
    ];
}</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Controller:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>return ProductResource::collection(
    Product::paginate(10)
);</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">API Resources are useful when an application has multiple APIs and needs a consistent response structure.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">23. How do you implement API authentication in Laravel?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Laravel supports different authentication approaches.</p>
<ul class="mb-4 list-disc pl-6 text-gray-700">
<li>Laravel Sanctum: Suitable for SPA, mobile applications, and simple API token authentication.</li>
<li>Laravel Passport: Provides OAuth 2.0 authorization server capabilities.</li>
</ul>
<p class="mb-3 text-lg leading-8 text-gray-700">Example using Sanctum:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>php artisan install:api</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Protect routes:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>Route::middleware(&#39;auth:sanctum&#39;)-&gt;group(function () {
    Route::get(&#39;/profile&#39;, function (Request $request) {
        return $request-&gt;user();
    });
});</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">For token-based login:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>$token = $user-&gt;createToken(&#39;mobile-app&#39;)-&gt;plainTextToken;

return response()-&gt;json([
    &#39;token&#39; =&gt; $token,
    &#39;token_type&#39; =&gt; &#39;Bearer&#39;
]);</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">24. How do you handle API validation errors in Laravel?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Laravel automatically returns a validation error response for failed validation requests expecting JSON.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>$request-&gt;validate([
    &#39;email&#39; =&gt; &#39;required|email|unique:users,email&#39;,
    &#39;password&#39; =&gt; &#39;required|min:8&#39;
]);</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Example response:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>{
  &quot;message&quot;: &quot;The given data was invalid.&quot;,
  &quot;errors&quot;: {
    &quot;email&quot;: [
      &quot;The email has already been taken.&quot;
    ]
  }
}</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">For custom validation responses, I use Form Request classes or customize exception handling.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">25. How do you handle exceptions in REST APIs?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">I use centralized exception handling rather than writing try-catch blocks everywhere.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Important practices:</p>
<ol type="1">
<li>Handle validation exceptions.</li>
<li>Handle authentication and authorization errors.</li>
<li>Handle model-not-found exceptions.</li>
<li>Log unexpected exceptions.</li>
<li>Return appropriate HTTP status codes.</li>
<li>Avoid exposing stack traces or database credentials.</li>
<li>Maintain a consistent error response format.</li>
</ol>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>try {
    $user = User::findOrFail($id);

    return response()-&gt;json([
        &#39;data&#39; =&gt; $user
    ]);
} catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
    return response()-&gt;json([
        &#39;status&#39; =&gt; false,
        &#39;message&#39; =&gt; &#39;User not found&#39;
    ], 404);
}</code></pre>
<h2 id="6-performance-and-scalability">6. Performance and Scalability</h2>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">26. How do you improve REST API performance?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">I use the following techniques:</p>
<ol type="1">
<li>Optimize SQL queries.</li>
<li>Add appropriate database indexes.</li>
<li>Use pagination.</li>
<li>Avoid N+1 query problems using eager loading.</li>
<li>Cache frequently accessed data.</li>
<li>Use Redis for caching and queues where appropriate.</li>
<li>Compress API responses when suitable.</li>
<li>Use queues for long-running tasks.</li>
<li>Avoid returning unnecessary fields.</li>
<li>Monitor API response time and database queries.</li>
</ol>
<p class="mb-3 text-lg leading-8 text-gray-700">Laravel example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>$users = User::with(&#39;orders&#39;)
    -&gt;select(&#39;id&#39;, &#39;name&#39;, &#39;email&#39;)
    -&gt;paginate(20);</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">27. What is the N+1 query problem?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">The N+1 query problem occurs when an application executes one query to retrieve a collection and then executes another query for every record to retrieve related data.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>$users = User::all();

foreach ($users as $user) {
    echo $user-&gt;orders-&gt;count();
}</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">This may generate one query for users and additional queries for each user's orders.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Solution:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>$users = User::with(&#39;orders&#39;)-&gt;get();</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Eager loading reduces unnecessary database queries.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">28. What is caching in REST APIs?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Caching stores frequently accessed data temporarily so that the application does not need to retrieve or calculate it repeatedly.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Common caching approaches:</p>
<ul class="mb-4 list-disc pl-6 text-gray-700">
<li>Browser caching.</li>
<li>HTTP caching.</li>
<li>Redis caching.</li>
<li>Database query caching.</li>
<li>CDN caching.</li>
</ul>
<p class="mb-3 text-lg leading-8 text-gray-700">Laravel example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>use Illuminate\Support\Facades\Cache;

$products = Cache::remember(
    &#39;products&#39;,
    300,
    fn() =&gt; Product::all()
);</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">This caches the result for 300 seconds.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">29. How do you handle large API responses?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">For large responses, I use:</p>
<ol type="1">
<li>Pagination or cursor pagination.</li>
<li>Field selection.</li>
<li>Filtering and sorting.</li>
<li>Compression.</li>
<li>Streaming or asynchronous exports for very large datasets.</li>
<li>Background processing for expensive operations.</li>
</ol>
<p class="mb-3 text-lg leading-8 text-gray-700">I avoid returning thousands of records in a single API response.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">30. How do you monitor API performance?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">I monitor:</p>
<ul class="mb-4 list-disc pl-6 text-gray-700">
<li>Response time.</li>
<li>Requests per second.</li>
<li>HTTP error rate.</li>
<li>Database query execution time.</li>
<li>Memory and CPU usage.</li>
<li>API timeout rate.</li>
<li>Queue failures.</li>
</ul>
<p class="mb-3 text-lg leading-8 text-gray-700">Tools can include Laravel logs, Laravel Telescope, application performance monitoring systems, and server monitoring dashboards.</p>
<h2 id="7-real-time-scenario-based-interview-questions">7. Real-Time Scenario-Based Interview Questions</h2>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">31. How do you prevent duplicate API requests?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">I use idempotency keys for operations that must not execute multiple times, especially payments and order creation.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">I also use database unique constraints and transactions.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>DB::transaction(function () use ($request) {
    Payment::firstOrCreate(
        [&#39;idempotency_key&#39; =&gt; $request-&gt;idempotency_key],
        [
            &#39;user_id&#39; =&gt; auth()-&gt;id(),
            &#39;amount&#39; =&gt; $request-&gt;amount,
            &#39;status&#39; =&gt; &#39;pending&#39;
        ]
    );
});</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">In production, I would also validate ownership, use a unique database index, handle concurrent requests, and verify the payment with the gateway.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">32. How do you handle API timeout issues?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">I follow these steps:</p>
<ol type="1">
<li>Check server logs.</li>
<li>Check database query performance.</li>
<li>Identify external API delays.</li>
<li>Configure suitable connection and request timeouts.</li>
<li>Use retry mechanisms with exponential backoff for safe operations.</li>
<li>Use queues for long-running processes.</li>
<li>Return appropriate error responses.</li>
</ol>
<p class="mb-3 text-lg leading-8 text-gray-700">I avoid blindly retrying payment or order creation requests because that can cause duplicate transactions.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">33. How do you integrate a third-party REST API in Laravel?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Laravel provides an HTTP client that can communicate with third-party APIs.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>use Illuminate\Support\Facades\Http;

$response = Http::timeout(10)
    -&gt;withToken(config(&#39;services.external_api.token&#39;))
    -&gt;get(&#39;https://api.example.com/users&#39;);

if ($response-&gt;successful()) {
    return response()-&gt;json($response-&gt;json());
}

return response()-&gt;json([
    &#39;message&#39; =&gt; &#39;External API request failed&#39;
], 502);</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Best practices:</p>
<ul class="mb-4 list-disc pl-6 text-gray-700">
<li>Store API credentials in environment variables.</li>
<li>Set request timeouts.</li>
<li>Handle unsuccessful HTTP responses.</li>
<li>Log failures without exposing secrets.</li>
<li>Use retry policies carefully.</li>
<li>Validate third-party response data.</li>
</ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">34. What is a webhook, and how is it different from a REST API?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">A REST API generally works through a client sending a request to a server.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">A webhook works through a server sending an HTTP request to another server when a specific event occurs.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">When a customer completes a payment, Razorpay sends a webhook notification to the Laravel application.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Webhook security practices:</p>
<ol type="1">
<li>Verify webhook signatures.</li>
<li>Store event IDs.</li>
<li>Prevent duplicate event processing.</li>
<li>Use database transactions.</li>
<li>Return successful acknowledgment after safely accepting the event.</li>
<li>Process lengthy tasks using queues.</li>
</ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">35. How do you handle concurrent API requests?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Concurrent requests happen when multiple clients access or modify the same resource simultaneously.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">I handle them using:</p>
<ul class="mb-4 list-disc pl-6 text-gray-700">
<li>Database transactions.</li>
<li>Unique constraints.</li>
<li>Row-level locking.</li>
<li>Optimistic locking.</li>
<li>Atomic operations.</li>
<li>Idempotency keys.</li>
</ul>
<p class="mb-3 text-lg leading-8 text-gray-700">Laravel example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>DB::transaction(function () use ($productId) {
    $product = Product::where(&#39;id&#39;, $productId)
        -&gt;lockForUpdate()
        -&gt;firstOrFail();

    if ($product-&gt;stock &lt; 1) {
        throw new \RuntimeException(&#39;Out of stock&#39;);
    }

    $product-&gt;decrement(&#39;stock&#39;);
});</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">This helps prevent multiple transactions from incorrectly selling the same available stock.</p>
<h2 id="8-postman-and-api-testing">8. Postman and API Testing</h2>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">36. What is Postman?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Postman is an API development and testing tool used to send HTTP requests and inspect API responses.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">It supports:</p>
<ol type="1">
<li>GET, POST, PUT, PATCH, DELETE.</li>
<li>Headers and authentication.</li>
<li>JSON request bodies.</li>
<li>Environment variables.</li>
<li>Automated test scripts.</li>
<li>API collections.</li>
<li>Request chaining.</li>
</ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">37. How do you test a REST API using Postman?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">I follow these steps:</p>
<ol type="1">
<li>Select the HTTP method.</li>
<li>Enter the API endpoint.</li>
<li>Add required headers.</li>
<li>Add authentication token if needed.</li>
<li>Select Body → raw → JSON for JSON requests.</li>
<li>Send the request.</li>
<li>Verify status code.</li>
<li>Verify response body.</li>
<li>Check response time.</li>
<li>Test invalid inputs and unauthorized requests.</li>
</ol>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>POST http://localhost:8000/api/products
Content-Type: application/json
Accept: application/json
Authorization: Bearer YOUR_TOKEN</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Request body:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>{
  &quot;name&quot;: &quot;Laptop&quot;,
  &quot;price&quot;: 50000
}</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">38. What is the difference between API testing and unit testing?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<ul class="mb-4 list-disc pl-6 text-gray-700">
<li>Unit Testing: Tests individual methods or components in isolation.</li>
<li>API Testing: Tests API endpoints, request validation, authentication, response structure, status codes, and integration behavior.</li>
</ul>
<p class="mb-3 text-lg leading-8 text-gray-700">In Laravel, I use PHPUnit or Pest for automated testing.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>public function test_products_api_returns_successful_response()
{
    $response = $this-&gt;getJson(&#39;/api/products&#39;);

    $response-&gt;assertStatus(200);
}</code></pre>
<h2 id="9-senior-developer-and-team-lead-questions">9. Senior Developer and Team Lead Questions</h2>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">39. How do you design a REST API for a large-scale application?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">I start by understanding business requirements and identifying the main resources.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Then I follow this approach:</p>
<ol type="1">
<li>Define resource-based endpoints.</li>
<li>Choose consistent naming conventions.</li>
<li>Design request and response structures.</li>
<li>Implement API versioning.</li>
<li>Define authentication and authorization.</li>
<li>Add validation and exception handling.</li>
<li>Implement pagination, filtering, and sorting.</li>
<li>Optimize database queries.</li>
<li>Add caching and rate limiting.</li>
<li>Document APIs using OpenAPI/Swagger.</li>
<li>Write automated tests.</li>
<li>Monitor performance and errors.</li>
</ol>
<p class="mb-3 text-lg leading-8 text-gray-700">I also keep controllers thin and move business logic into services or dedicated classes where appropriate.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">40. How do you manage API changes without breaking existing applications?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">I use backward-compatible API changes wherever possible.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">For major breaking changes, I introduce a new API version, such as <code>/api/v2</code>.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">I also:</p>
<ul class="mb-4 list-disc pl-6 text-gray-700">
<li>Keep old endpoints working during the migration period.</li>
<li>Communicate changes to frontend and mobile teams.</li>
<li>Maintain API documentation.</li>
<li>Add automated regression tests.</li>
<li>Monitor usage of older API versions.</li>
<li>Plan a clear deprecation timeline.</li>
</ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">41. How do you handle API documentation?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">I use OpenAPI/Swagger documentation to describe API endpoints.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Documentation includes:</p>
<ul class="mb-4 list-disc pl-6 text-gray-700">
<li>Endpoint URL.</li>
<li>HTTP method.</li>
<li>Request parameters.</li>
<li>Request body.</li>
<li>Authentication requirements.</li>
<li>Response examples.</li>
<li>HTTP status codes.</li>
<li>Validation errors.</li>
</ul>
<p class="mb-3 text-lg leading-8 text-gray-700">This makes API integration easier for frontend developers, mobile developers, and third-party teams.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">42. How do you coordinate with frontend developers while developing REST APIs?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">I first discuss the requirements and agree on the API contract with the frontend team.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">I define endpoint URLs, request parameters, response structures, status codes, and validation rules.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">I share API documentation and Postman collections so frontend developers can integrate without waiting for the complete backend implementation.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">I also coordinate during testing and resolve integration issues.</p>
<h2 id="10-important-practical-rest-api-coding-questions">10. Important Practical REST API Coding Questions</h2>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">43. How do you create a custom API response format?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">I maintain a consistent response structure across the application.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Success response:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>{
  &quot;status&quot;: true,
  &quot;message&quot;: &quot;Data fetched successfully&quot;,
  &quot;data&quot;: {
    &quot;id&quot;: 1,
    &quot;name&quot;: &quot;Brijesh&quot;
  }
}</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Error response:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>{
  &quot;status&quot;: false,
  &quot;message&quot;: &quot;Validation failed&quot;,
  &quot;errors&quot;: {
    &quot;email&quot;: [&quot;The email field is required.&quot;]
  }
}</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Consistency makes API integration and error handling easier for frontend developers.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">44. How do you implement filtering and sorting in a REST API?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">I use query parameters to filter and sort records.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>GET /api/products?category=electronics&amp;sort_by=price&amp;sort_order=asc</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Laravel example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>$query = Product::query();

if ($request-&gt;filled(&#39;category&#39;)) {
    $query-&gt;where(&#39;category&#39;, $request-&gt;category);
}

$allowedColumns = [&#39;name&#39;, &#39;price&#39;, &#39;created_at&#39;];

$sortBy = in_array($request-&gt;sort_by, $allowedColumns, true)
    ? $request-&gt;sort_by
    : &#39;created_at&#39;;

$sortOrder = $request-&gt;sort_order === &#39;asc&#39; ? &#39;asc&#39; : &#39;desc&#39;;

$products = $query-&gt;orderBy($sortBy, $sortOrder)
    -&gt;paginate(10);</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">I whitelist sortable columns to prevent unsafe dynamic SQL.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">45. What is the difference between API Gateway and REST API?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Answer:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">A REST API exposes application resources and operations.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">An API Gateway acts as a central entry point for multiple backend services.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">An API Gateway can handle:</p>
<ul class="mb-4 list-disc pl-6 text-gray-700">
<li>Authentication.</li>
<li>Rate limiting.</li>
<li>Request routing.</li>
<li>Logging.</li>
<li>Load balancing.</li>
<li>Response transformation.</li>
</ul>
<p class="mb-3 text-lg leading-8 text-gray-700">It is commonly used in microservices architecture.</p>
<h2 id="11-most-important-interview-questions--quick-revision">11. Most Important Interview Questions – Quick Revision</h2>
<div class="mb-4 overflow-x-auto"><table class="w-full border-collapse">
<thead>
<tr class="header">
<th class="border bg-gray-50 p-3">Interview question</th>
<th class="border bg-gray-50 p-3">Key point to remember</th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td class="border p-3">What is REST?</td>
<td class="border p-3">Architectural style</td>
</tr>
<tr class="even">
<td class="border p-3">What is statelessness?</td>
<td class="border p-3">Every request is independent</td>
</tr>
<tr class="odd">
<td class="border p-3">PUT vs PATCH?</td>
<td class="border p-3">Full replacement vs partial update</td>
</tr>
<tr class="even">
<td class="border p-3">401 vs 403?</td>
<td class="border p-3">Authentication vs permission</td>
</tr>
<tr class="odd">
<td class="border p-3">JWT?</td>
<td class="border p-3">Header, payload, signature</td>
</tr>
<tr class="even">
<td class="border p-3">OAuth 2.0?</td>
<td class="border p-3">Authorization framework</td>
</tr>
<tr class="odd">
<td class="border p-3">Idempotency?</td>
<td class="border p-3">Same request, same intended result</td>
</tr>
<tr class="even">
<td class="border p-3">CORS?</td>
<td class="border p-3">Browser cross-origin access control</td>
</tr>
<tr class="odd">
<td class="border p-3">Pagination?</td>
<td class="border p-3">Limit response size</td>
</tr>
<tr class="even">
<td class="border p-3">Rate limiting?</td>
<td class="border p-3">Restrict request frequency</td>
</tr>
<tr class="odd">
<td class="border p-3">Webhook?</td>
<td class="border p-3">Event-driven HTTP notification</td>
</tr>
<tr class="even">
<td class="border p-3">API versioning?</td>
<td class="border p-3">Manage breaking changes</td>
</tr>
<tr class="odd">
<td class="border p-3">HATEOAS?</td>
<td class="border p-3">Links in API responses</td>
</tr>
<tr class="even">
<td class="border p-3">N+1 problem?</td>
<td class="border p-3">Excessive database queries</td>
</tr>
<tr class="odd">
<td class="border p-3">API Resource?</td>
<td class="border p-3">Consistent response transformation</td>
</tr>
<tr class="even">
<td class="border p-3">API Gateway?</td>
<td class="border p-3">Central entry point for services</td>
</tr>
<tr class="odd">
<td class="border p-3">HTTP 202?</td>
<td class="border p-3">Accepted for processing</td>
</tr>
<tr class="even">
<td class="border p-3">HTTP 429?</td>
<td class="border p-3">Too many requests</td>
</tr>
<tr class="odd">
<td class="border p-3">HTTP 422?</td>
<td class="border p-3">Validation error</td>
</tr>
<tr class="even">
<td class="border p-3">HTTP 409?</td>
<td class="border p-3">Resource conflict</td>
</tr>
</tbody>
</table></div>
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