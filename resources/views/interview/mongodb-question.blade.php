@extends('interview.layouts.app')
@section('title')
Mongodb Interview Questions & Answers
@endsection 
 
@section('description'),  
Master Mongodb interview questions and answers covering HTTP methods, status codes, authentication, JSON, CRUD, and API best practices.
@endsection


@section('content')	 
 

<div class='main light-grey' id='belowtopnav' style='margin-left:220px;'>
  <div class='row white'>
    <div class='col l11 m12' id='main'>
       
<h1>Mongodb<span class="color_h1"> Interview Question & Answer</span></h1>
<div class="clear nextprev">
<a class="left btn" href="{{url('interviews/nextjs-interview-question-answer')}}">&#10094; Previous</a>
<a class="right btn" href="{{url('interviews/extjs-interview-question-answer')}}">Next &#10095;</a>
</div>
<hr>
 <div class="light">
 
   
 <section id="services-section" class="py-12 bg-gray-100">
  
 <div class="container mx-auto px-4">
  
  




<!-- Blade partial. MongoDB examples are escaped display text. -->

    <p class="text-lg text-gray-700 mt-3 leading-8">It is designed for Senior PHP Developer, Laravel Developer, Full Stack Developer, and Technical Lead interviews.</p>
<h2 class="mt-12 mb-6 text-4xl font-bold text-slate-900">MongoDB Fundamentals</h2>
<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is MongoDB?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">MongoDB is an open-source, NoSQL, document-oriented database. It stores data in flexible, JSON-like documents using BSON (Binary JSON) format.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Unlike relational databases such as MySQL, MongoDB does not require a fixed table structure. Different documents in the same collection can have different fields.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example MongoDB document:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>{
    _id: ObjectId("672a123456789abcdef12345"),
    name: "Brijesh",
    email: "brijesh&#64;example.com",
    skills: ["PHP", "Laravel", "React", "MongoDB"],
    experience: 8,
    address: {
        city: "Delhi",
        country: "India"
    }
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Main features:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Document-oriented database.</li>
        <li>Flexible schema.</li>
        <li>High availability through replica sets.</li>
        <li>Horizontal scalability through sharding.</li>
        <li>Powerful aggregation pipeline.</li>
        <li>Indexing for query optimization.</li>
        <li>Support for transactions.</li>
        <li>Suitable for large-scale applications.</li>
    </ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is NoSQL?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">NoSQL stands for Not Only SQL. It refers to databases that do not rely exclusively on the traditional relational table-based model.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">NoSQL databases are commonly used for flexible data structures, distributed systems, and large-scale applications.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Types of NoSQL databases:</p>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Type</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Example</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Purpose</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Document</td><td class="border border-slate-200 px-4 py-3 text-gray-700">MongoDB</td><td class="border border-slate-200 px-4 py-3 text-gray-700">JSON-like documents</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Key-value</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Redis</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Key-value storage</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Column-family</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Cassandra</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Distributed large datasets</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Graph</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Neo4j</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Relationship-based data</td></tr></tbody>
        </table>
    </div>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between SQL and NoSQL?</h2>
    </div>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">MySQL (SQL)</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">MongoDB (NoSQL)</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Relational database</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Document database</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Stores data in tables</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Stores data in collections</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Uses rows and columns</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Uses documents and fields</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Usually uses fixed schemas</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Supports flexible schemas</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Uses SQL queries</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Uses MongoDB Query API</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Supports joins</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Supports <code class="rounded bg-slate-100 px-1 text-base">$lookup</code> and embedded documents</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Uses foreign keys</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Commonly uses references or embedding</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Uses B-tree indexes</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Supports multiple index types</td></tr></tbody>
        </table>
    </div>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is BSON in MongoDB?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">BSON stands for Binary JSON. It is the binary-encoded document format used internally by MongoDB.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">It supports additional data types beyond standard JSON, such as:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>ObjectId</li>
        <li>Date</li>
        <li>Binary data</li>
        <li>Decimal128</li>
        <li>Int32 and Int64</li>
        <li>Timestamp</li>
    </ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is a Document in MongoDB?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">A document is the basic unit of data in MongoDB. It contains field-value pairs and is stored in BSON format.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>{
    name: "Rahul",
    age: 30,
    salary: 50000,
    department: "IT"
}</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is a Collection?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">A collection is a group of MongoDB documents, similar to a table in a relational database.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">For example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>Database: company

Collections:
    employees
    departments
    projects
    salaries</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between a Document and a Collection?</h2>
    </div>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Document</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Collection</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Stores individual records</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Stores multiple documents</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Similar to a SQL row</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Similar to a SQL table</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Contains fields and values</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Contains related documents</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Uses BSON format</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Contains BSON documents</td></tr></tbody>
        </table>
    </div>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is ObjectId?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">ObjectId is the default identifier generated for the <code class="rounded bg-slate-100 px-1 text-base">_id</code> field when a document is inserted without specifying an ID.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">It is a 12-byte value containing timestamp, random data, and a counter.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>{
    _id: ObjectId("672a123456789abcdef12345"),
    name: "Amit"
}</code></pre>
</div>

<h2 class="mt-12 mb-6 text-4xl font-bold text-slate-900">MongoDB CRUD Operations</h2>
    <p class="text-lg text-gray-700 mt-3 leading-8">CRUD stands for Create, Read, Update, and Delete.</p>
<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you insert a document in MongoDB?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Use <code class="rounded bg-slate-100 px-1 text-base">insertOne()</code> to insert one document.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>db.employees.insertOne({
    name: "Brijesh",
    email: "brijesh&#64;example.com",
    salary: 60000,
    department: "Development"
});</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Use <code class="rounded bg-slate-100 px-1 text-base">insertMany()</code> to insert multiple documents.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>db.employees.insertMany([
    {
        name: "Amit",
        salary: 50000
    },
    {
        name: "Rahul",
        salary: 55000
    }
]);</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you retrieve documents?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Use <code class="rounded bg-slate-100 px-1 text-base">find()</code> to retrieve multiple documents.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>db.employees.find();</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Find a specific employee:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>db.employees.find({
    name: "Brijesh"
});</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Find one document:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>db.employees.findOne({
    email: "brijesh&#64;example.com"
});</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you update a document?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Use <code class="rounded bg-slate-100 px-1 text-base">updateOne()</code> to update one matching document.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>db.employees.updateOne(
    { name: "Brijesh" },
    {
        $set: {
            salary: 75000
        }
    }
);</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Update multiple documents:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>db.employees.updateMany(
    { department: "Development" },
    {
        $set: {
            status: "Active"
        }
    }
);</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between <code class="rounded bg-slate-100 px-1 text-base">updateOne()</code> and <code class="rounded bg-slate-100 px-1 text-base">replaceOne()</code>?</h2>
    </div>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li><code class="rounded bg-slate-100 px-1 text-base">updateOne()</code> modifies selected fields using update operators such as <code class="rounded bg-slate-100 px-1 text-base">$set</code>, <code class="rounded bg-slate-100 px-1 text-base">$inc</code>, and <code class="rounded bg-slate-100 px-1 text-base">$unset</code>.</li>
        <li><code class="rounded bg-slate-100 px-1 text-base">replaceOne()</code> replaces the existing document's contents with a new document, while retaining its <code class="rounded bg-slate-100 px-1 text-base">_id</code> if one is not changed.</li>
    </ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you delete documents?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Delete one document:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>db.employees.deleteOne({
    name: "Brijesh"
});</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Delete multiple documents:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>db.employees.deleteMany({
    status: "Inactive"
});</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Delete all documents:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>db.employees.deleteMany({});</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What are MongoDB query operators?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Query operators are used to filter documents based on conditions.</p>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Operator</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Purpose</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">$eq</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Equal</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">$ne</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Not equal</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">$gt</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Greater than</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">$gte</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Greater than or equal</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">$lt</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Less than</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">$lte</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Less than or equal</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">$in</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Matches any value in an array</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">$nin</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Does not match values</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">$and</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Logical AND</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">$or</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Logical OR</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">$exists</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Checks field existence</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">$regex</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Pattern matching</td></tr></tbody>
        </table>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>db.employees.find({
    salary: {
        $gte: 50000,
        $lte: 100000
    }
});</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is Projection in MongoDB?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Projection selects which fields should be returned from a query.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>db.employees.find(
    {},
    {
        name: 1,
        email: 1,
        _id: 0
    }
);</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">This returns only the employee name and email.</p>
</div>

<h2 class="mt-12 mb-6 text-4xl font-bold text-slate-900">MongoDB Indexing and Performance</h2>
<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is an Index in MongoDB?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">An index is a data structure that helps MongoDB find documents faster without scanning the entire collection.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Without an appropriate index, MongoDB may perform a collection scan.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Create an index:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>db.employees.createIndex({
    email: 1
});</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Here:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li><code class="rounded bg-slate-100 px-1 text-base">1</code> means ascending order.</li>
        <li><code class="rounded bg-slate-100 px-1 text-base">-1</code> means descending order.</li>
    </ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What are the different types of indexes?</h2>
    </div>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Single-field index – Index on one field.</li>
        <li>Compound index – Index on multiple fields.</li>
        <li>Multikey index – Index on array values.</li>
        <li>Text index – Supports text search.</li>
        <li>Geospatial index – Supports location-based queries.</li>
        <li>Hashed index – Supports hashed values and certain sharding strategies.</li>
        <li>Unique index – Prevents duplicate indexed values.</li>
        <li>TTL index – Automatically expires documents after a configured duration.</li>
    </ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is a Compound Index?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">A compound index contains multiple fields. It is useful when queries frequently filter or sort by more than one field.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>db.employees.createIndex({
    department: 1,
    salary: -1
});</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">This index can support queries involving <code class="rounded bg-slate-100 px-1 text-base">department</code> and sorting by <code class="rounded bg-slate-100 px-1 text-base">salary</code>.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Important: Field order matters. Compound indexes follow the Equality, Sort, Range (ESR) guideline as a useful starting point for index design.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is a Unique Index?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">A unique index ensures that indexed values are not duplicated across documents, subject to MongoDB's null and missing-field rules.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>db.employees.createIndex(
    { email: 1 },
    { unique: true }
);</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">This prevents duplicate email values.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is a TTL Index?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">TTL stands for Time To Live. It automatically removes documents after a specified period.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">It is useful for:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>OTP records.</li>
        <li>Temporary sessions.</li>
        <li>Expiring tokens.</li>
        <li>Temporary logs.</li>
    </ul>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>db.otp.createIndex(
    { createdAt: 1 },
    { expireAfterSeconds: 300 }
);</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">MongoDB's TTL cleanup runs periodically, so deletion is not guaranteed at the exact expiration second.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you analyze query performance?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Use <code class="rounded bg-slate-100 px-1 text-base">explain()</code> to understand how MongoDB executes a query.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>db.employees.find({
    department: "IT"
}).explain("executionStats");</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Important execution statistics:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li><code class="rounded bg-slate-100 px-1 text-base">nReturned</code>: Number of documents returned.</li>
        <li><code class="rounded bg-slate-100 px-1 text-base">totalDocsExamined</code>: Number of documents examined.</li>
        <li><code class="rounded bg-slate-100 px-1 text-base">totalKeysExamined</code>: Number of index keys examined.</li>
        <li><code class="rounded bg-slate-100 px-1 text-base">executionTimeMillis</code>: Execution time.</li>
        <li><code class="rounded bg-slate-100 px-1 text-base">IXSCAN</code>: Index scan.</li>
        <li><code class="rounded bg-slate-100 px-1 text-base">COLLSCAN</code>: Collection scan.</li>
    </ul>
    <p class="text-lg text-gray-700 mt-3 leading-8">A good optimization process checks the query plan, creates suitable indexes, and measures the improvement.</p>
</div>

<h2 class="mt-12 mb-6 text-4xl font-bold text-slate-900">MongoDB Aggregation Framework</h2>
<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is Aggregation in MongoDB?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Aggregation is a framework used to process documents, perform calculations, group data, filter results, and generate reports.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">It uses a sequence of stages called an aggregation pipeline.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>db.employees.aggregate([
    {
        $match: {
            department: "IT"
        }
    },
    {
        $group: {
            _id: "$department",
            totalEmployees: {
                $sum: 1
            },
            averageSalary: {
                $avg: "$salary"
            }
        }
    }
]);</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is an Aggregation Pipeline?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">An aggregation pipeline processes documents through multiple stages. The output of one stage becomes the input of the next stage.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Common stages:</p>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Stage</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Purpose</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">$match</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Filters documents</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">$group</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Groups documents</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">$project</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Selects or transforms fields</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">$sort</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Sorts documents</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">$limit</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Limits results</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">$skip</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Skips documents</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">$unwind</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Deconstructs arrays</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">$lookup</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Joins collections</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">$count</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Counts documents</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">$addFields</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Adds calculated fields</td></tr></tbody>
        </table>
    </div>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is <code class="rounded bg-slate-100 px-1 text-base">$match</code>?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8"><code class="rounded bg-slate-100 px-1 text-base">$match</code> filters documents based on specified conditions.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>db.employees.aggregate([
    {
        $match: {
            salary: {
                $gt: 50000
            }
        }
    }
]);</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is <code class="rounded bg-slate-100 px-1 text-base">$group</code>?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8"><code class="rounded bg-slate-100 px-1 text-base">$group</code> groups documents by a specified expression and performs aggregate calculations.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>db.employees.aggregate([
    {
        $group: {
            _id: "$department",
            totalEmployees: {
                $sum: 1
            },
            totalSalary: {
                $sum: "$salary"
            }
        }
    }
]);</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is <code class="rounded bg-slate-100 px-1 text-base">$lookup</code>?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8"><code class="rounded bg-slate-100 px-1 text-base">$lookup</code> performs a left outer join between two collections.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>db.orders.aggregate([
    {
        $lookup: {
            from: "customers",
            localField: "customerId",
            foreignField: "_id",
            as: "customerDetails"
        }
    }
]);</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">This joins orders with matching customer documents.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is <code class="rounded bg-slate-100 px-1 text-base">$unwind</code>?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8"><code class="rounded bg-slate-100 px-1 text-base">$unwind</code> converts an array field into separate documents, one for each array element.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example document:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>{
    name: "Brijesh",
    skills: ["PHP", "Laravel", "React"]
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Query:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>db.employees.aggregate([
    {
        $unwind: "$skills"
    }
]);</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Result conceptually:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>{ name: "Brijesh", skills: "PHP" }
{ name: "Brijesh", skills: "Laravel" }
{ name: "Brijesh", skills: "React" }</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between <code class="rounded bg-slate-100 px-1 text-base">find()</code> and <code class="rounded bg-slate-100 px-1 text-base">aggregate()</code>?</h2>
    </div>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">find()</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">aggregate()</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Retrieves matching documents</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Processes documents through stages</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Suitable for basic queries</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Suitable for complex data processing</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Supports projection and sorting</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Supports grouping and calculations</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Does not provide a multi-stage pipeline</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Supports multi-stage pipeline</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Simpler query syntax</td><td class="border border-slate-200 px-4 py-3 text-gray-700">More powerful data transformation</td></tr></tbody>
        </table>
    </div>
</div>

<h2 class="mt-12 mb-6 text-4xl font-bold text-slate-900">MongoDB Schema Design</h2>
<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is Schema Design in MongoDB?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Schema design defines how application data is structured and stored in collections.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">MongoDB supports flexible schemas, but good schema design is important for query performance and maintainability.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Two common approaches are:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Embedded documents.</li>
        <li>Referenced documents.</li>
    </ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is Embedded Document?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Embedding means storing related data inside a single document.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>{
    name: "Brijesh",
    email: "brijesh&#64;example.com",

    address: {
        city: "Delhi",
        state: "Delhi"
    }
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Advantages:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Fewer database queries.</li>
        <li>Related information can be retrieved together.</li>
        <li>Supports atomic updates within one document.</li>
    </ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is Referencing in MongoDB?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Referencing means storing the ID of another document instead of embedding all related data.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>// Employee collection
{
    _id: 101,
    name: "Brijesh",
    departmentId: 10
}

// Department collection
{
    _id: 10,
    departmentName: "Development"
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Advantages:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Avoids duplicating large amounts of data.</li>
        <li>Suitable for independently changing records.</li>
        <li>Useful for many-to-many relationships and large related datasets.</li>
    </ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">When should you use Embedding vs Referencing?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Use embedding when:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Related data is usually accessed together.</li>
        <li>The child data is limited in size.</li>
        <li>Data belongs naturally to its parent.</li>
    </ul>
    <p class="text-lg text-gray-700 mt-3 leading-8">Use referencing when:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Related data is large or unbounded.</li>
        <li>Data is shared between multiple documents.</li>
        <li>Related records change independently.</li>
        <li>Embedding would cause excessive duplication.</li>
    </ul>
</div>

<h2 class="mt-12 mb-6 text-4xl font-bold text-slate-900">Replication and Sharding</h2>
<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is Replication in MongoDB?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Replication maintains multiple copies of the same dataset across different MongoDB servers.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">It is implemented using a replica set.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">A replica set commonly includes:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Primary: Accepts writes and normally handles reads.</li>
        <li>Secondary: Replicates data from the primary.</li>
        <li>Optional arbiter: Participates in elections but does not store data.</li>
    </ul>
    <p class="text-lg text-gray-700 mt-3 leading-8">Benefits:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>High availability.</li>
        <li>Automatic failover.</li>
        <li>Data redundancy.</li>
        <li>Disaster recovery support.</li>
    </ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is a Replica Set?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">A Replica Set is a group of MongoDB servers that maintain the same dataset.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">If the primary node fails, eligible secondary nodes can participate in an election to select a new primary.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is Sharding?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Sharding is MongoDB's horizontal scaling technique. It distributes data across multiple servers called shards.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">It is useful when a single server cannot efficiently handle the storage or workload requirements.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Architecture:</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Application</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">mongos Router</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Routes queries to appropriate shards</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Shard 1</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Data A</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Shard 2</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Data B</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Shard 3</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Data C</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Config servers maintain cluster metadata.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between Replication and Sharding?</h2>
    </div>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Replication</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Sharding</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Maintains multiple copies of data</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Distributes data across servers</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Improves availability</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Improves horizontal scalability</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Uses replica sets</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Uses a sharded cluster</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Has primary and secondary members</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Has multiple shards</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Helps with failover</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Helps distribute storage and workload</td></tr></tbody>
        </table>
    </div>
</div>

<h2 class="mt-12 mb-6 text-4xl font-bold text-slate-900">Transactions and Consistency</h2>
<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is a Transaction in MongoDB?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">A transaction is a group of database operations that execute as a single logical unit.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">MongoDB supports multi-document transactions in replica sets and sharded clusters.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Transactions provide ACID properties:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Atomicity: All operations succeed or are rolled back.</li>
        <li>Consistency: Data remains within defined integrity rules.</li>
        <li>Isolation: Concurrent transactions are handled according to transaction isolation behavior.</li>
        <li>Durability: Committed changes are persisted according to the configured write concern.</li>
    </ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you perform a Transaction in MongoDB?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example using the MongoDB shell:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>const session = db.getMongo().startSession();

session.startTransaction();

try {
    const employeeCollection =
        session.getDatabase("company").employees;

    employeeCollection.updateOne(
        { _id: 1 },
        { $set: { status: "Active" } }
    );

    employeeCollection.insertOne({
        name: "New Employee",
        status: "Active"
    });

    session.commitTransaction();

} catch (error) {
    session.abortTransaction();
    throw error;

} finally {
    session.endSession();
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">In production, use the official driver transaction API and handle transient transaction errors and retries according to the driver documentation.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is Write Concern?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Write Concern controls the level of acknowledgment requested from MongoDB when writing data.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>db.employees.insertOne(
    { name: "Amit" },
    {
        writeConcern: {
            w: "majority",
            wtimeout: 5000
        }
    }
);</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8"><code class="rounded bg-slate-100 px-1 text-base">w: "majority"</code> requests acknowledgment from a majority of the replica set's voting members.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is Read Concern?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Read Concern controls the consistency and isolation properties of data returned by read operations.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Common levels include:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li><code class="rounded bg-slate-100 px-1 text-base">local</code></li>
        <li><code class="rounded bg-slate-100 px-1 text-base">available</code></li>
        <li><code class="rounded bg-slate-100 px-1 text-base">majority</code></li>
        <li><code class="rounded bg-slate-100 px-1 text-base">linearizable</code></li>
        <li><code class="rounded bg-slate-100 px-1 text-base">snapshot</code> (in supported contexts)</li>
    </ul>
    <p class="text-lg text-gray-700 mt-3 leading-8">The appropriate level depends on application consistency requirements.</p>
</div>

<h2 class="mt-12 mb-6 text-4xl font-bold text-slate-900">MongoDB Security</h2>
<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you secure MongoDB?</h2>
    </div>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Enable authentication.</li>
        <li>Use role-based access control.</li>
        <li>Apply least-privilege permissions.</li>
        <li>Enable TLS for network communication.</li>
        <li>Restrict network access.</li>
        <li>Avoid exposing MongoDB publicly.</li>
        <li>Protect credentials in environment variables or secret managers.</li>
        <li>Encrypt backups and sensitive data.</li>
        <li>Keep MongoDB updated.</li>
        <li>Monitor database activity and security logs.</li>
    </ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is Role-Based Access Control (RBAC)?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">RBAC assigns permissions to users based on their roles.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>db.createUser({
    user: "appUser",
    pwd: "strongPassword",
    roles: [
        {
            role: "readWrite",
            db: "company"
        }
    ]
});</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">This user receives read and write permissions on the <code class="rounded bg-slate-100 px-1 text-base">company</code> database.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is MongoDB Injection?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">MongoDB injection is a security vulnerability where untrusted user input changes the intended database query structure.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example of unsafe query construction:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>const query = JSON.parse(userInput);
db.users.find(query);</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">An attacker may provide operators such as <code class="rounded bg-slate-100 px-1 text-base">$ne</code> or <code class="rounded bg-slate-100 px-1 text-base">$gt</code> to manipulate the query.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Prevention:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Validate input types.</li>
        <li>Accept only expected fields.</li>
        <li>Do not blindly accept client-provided query objects.</li>
        <li>Use safe query construction.</li>
        <li>Apply authentication and authorization.</li>
        <li>Restrict allowed query operators.</li>
    </ul>
</div>

<h2 class="mt-12 mb-6 text-4xl font-bold text-slate-900">MongoDB with PHP and Laravel</h2>
<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you connect MongoDB with PHP?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">PHP can connect to MongoDB using the official MongoDB PHP extension and the MongoDB PHP Library.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Install the library:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>composer require mongodb/mongodb</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Connection example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>&lt;?php

require 'vendor/autoload.php';

$client = new MongoDB\Client(
    "mongodb://localhost:27017"
);

$collection = $client
    -&gt;company
    -&gt;employees;

$result = $collection-&gt;insertOne([
    'name' =&gt; 'Brijesh',
    'email' =&gt; 'brijesh&#64;example.com',
    'salary' =&gt; 60000
]);

echo $result-&gt;getInsertedId();</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you fetch records using PHP?</h2>
    </div>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>&lt;?php

require 'vendor/autoload.php';

$client = new MongoDB\Client(
    "mongodb://localhost:27017"
);

$collection = $client
    -&gt;company
    -&gt;employees;

$employees = $collection-&gt;find([
    'salary' =&gt; [
        '$gte' =&gt; 50000
    ]
]);

foreach ($employees as $employee) {
    echo $employee['name'] . "&lt;br&gt;";
}</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you integrate MongoDB with Laravel?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Laravel applications can use MongoDB through a compatible community-maintained Laravel MongoDB integration package.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Install the package appropriate for the Laravel and PHP versions:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>composer require mongodb/laravel-mongodb</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Configure the MongoDB connection in <code class="rounded bg-slate-100 px-1 text-base">config/database.php</code> and the <code class="rounded bg-slate-100 px-1 text-base">.env</code> file.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example environment configuration:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>DB_CONNECTION=mongodb
DB_HOST=127.0.0.1
DB_PORT=27017
DB_DATABASE=company
DB_USERNAME=
DB_PASSWORD=</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example Model:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>&lt;?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Employee extends Model
{
    protected $connection = 'mongodb';

    protected $collection = 'employees';

    protected $fillable = [
        'name',
        'email',
        'salary'
    ];
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example Controller:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>public function index()
{
    return response()-&gt;json(
        Employee::all()
    );
}

public function store(Request $request)
{
    $validated = $request-&gt;validate([
        'name' =&gt; 'required|string',
        'email' =&gt; 'required|email',
        'salary' =&gt; 'required|numeric'
    ]);

    $employee = Employee::create($validated);

    return response()-&gt;json($employee, 201);
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Important: MongoDB does not use traditional relational migrations and foreign-key constraints in the same way as MySQL. Schema validation and application-level data integrity should be designed deliberately.</p>
</div>

<h2 class="mt-12 mb-6 text-4xl font-bold text-slate-900">Advanced MongoDB Interview Questions</h2>
<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between <code class="rounded bg-slate-100 px-1 text-base">$set</code>, <code class="rounded bg-slate-100 px-1 text-base">$unset</code>, and <code class="rounded bg-slate-100 px-1 text-base">$inc</code>?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">These are update operators.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>// Set a field
db.employees.updateOne(
    { _id: 1 },
    { $set: { salary: 70000 } }
);

// Remove a field
db.employees.updateOne(
    { _id: 1 },
    { $unset: { temporaryField: "" } }
);

// Increment a numeric field
db.employees.updateOne(
    { _id: 1 },
    { $inc: { salary: 5000 } }
);</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between <code class="rounded bg-slate-100 px-1 text-base">$push</code> and <code class="rounded bg-slate-100 px-1 text-base">$addToSet</code>?</h2>
    </div>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li><code class="rounded bg-slate-100 px-1 text-base">$push</code> adds an element to an array, even if the same value already exists.</li>
        <li><code class="rounded bg-slate-100 px-1 text-base">$addToSet</code> adds an element only if an equal value is not already present.</li>
    </ul>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>db.employees.updateOne(
    { _id: 1 },
    { $push: { skills: "PHP" } }
);

db.employees.updateOne(
    { _id: 1 },
    { $addToSet: { skills: "Laravel" } }
);</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is Change Stream in MongoDB?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Change Streams allow applications to listen for database changes such as inserts, updates, replacements, and deletes.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">They are useful for:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Real-time notifications.</li>
        <li>Event-driven applications.</li>
        <li>Synchronizing data.</li>
        <li>Updating dashboards.</li>
    </ul>
    <p class="text-lg text-gray-700 mt-3 leading-8">They require a replica set or sharded cluster.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between <code class="rounded bg-slate-100 px-1 text-base">skip()</code> and range-based pagination?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8"><code class="rounded bg-slate-100 px-1 text-base">skip()</code> ignores a specified number of documents before returning results.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>db.employees.find()
    .sort({ _id: 1 })
    .skip(1000)
    .limit(20);</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">For large datasets, range-based pagination is often more efficient because it can use an index to continue from the last record.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>db.employees.find({
    _id: {
        $gt: ObjectId("672a123456789abcdef12345")
    }
})
.sort({ _id: 1 })
.limit(20);</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">The cursor field should have a suitable index and a stable ordering.</p>
</div>

<h2 class="mt-12 mb-6 text-4xl font-bold text-slate-900">Real-World Scenario-Based Questions</h2>
<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How would you optimize a MongoDB collection containing 10 million records?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">I would follow these steps:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Analyze slow queries using database profiling and <code class="rounded bg-slate-100 px-1 text-base">explain()</code>.</li>
        <li>Create indexes based on actual query patterns.</li>
        <li>Avoid unnecessary collection scans.</li>
        <li>Use projection to return only required fields.</li>
        <li>Implement range-based pagination.</li>
        <li>Optimize aggregation pipelines.</li>
        <li>Avoid unbounded arrays in documents.</li>
        <li>Monitor memory and disk performance.</li>
        <li>Consider sharding if the workload and dataset require horizontal scaling.</li>
        <li>Review application-level caching.</li>
    </ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you prevent duplicate records in MongoDB?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">I use unique indexes for fields that must be unique.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>db.users.createIndex(
    { email: 1 },
    { unique: true }
);</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">This ensures database-level enforcement rather than relying only on application validation.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you handle millions of log records?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">I would:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Store logs in a dedicated collection.</li>
        <li>Use a suitable time-based data model.</li>
        <li>Create indexes for common filters.</li>
        <li>Use TTL indexes if logs have a defined retention period.</li>
        <li>Use MongoDB time-series collections when the data and query patterns fit.</li>
        <li>Archive old records when required.</li>
        <li>Monitor storage and write throughput.</li>
    </ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How would you design an eCommerce database in MongoDB?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">I would identify the main entities and choose embedding or referencing according to their access patterns.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Possible collections:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>users
products
categories
orders
payments
cart
inventory
reviews</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example order document:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>{
    _id: ObjectId("672a123456789abcdef12345"),

    userId: ObjectId("672a123456789abcdef12346"),

    items: [
        {
            productId: ObjectId("672a123456789abcdef12347"),
            productName: "Laptop",
            quantity: 1,
            price: 50000
        }
    ],

    totalAmount: 50000,
    paymentStatus: "Paid",
    orderStatus: "Confirmed",
    createdAt: new Date()
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">I would store order-item snapshots such as product name and price so that historical orders remain accurate even if the product changes later.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you handle concurrent inventory updates?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">For inventory management, I would use an atomic conditional update to prevent stock from becoming negative.</p>
</div>











</div>


</section>
  
 

 </div>
 
<br>
<div class="clear nextprev">
<a class="left btn" href="{{url('interviews/nextjs-interview-question-answer')}}">&#10094; Previous</a>
<a class="right btn" href="{{url('interviews/extjs-interview-question-answer')}}">Next &#10095;</a>
</div>
</div>
 
</div>
   
  @endsection