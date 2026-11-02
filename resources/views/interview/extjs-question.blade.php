@extends('interview.layouts.app')
@section('title')
Extjs Interview Questions & Answers
@endsection 
 
@section('description'),  
Master extjs interview questions and answers covering HTTP methods, status codes, authentication, JSON, CRUD, and API best practices.
@endsection


@section('content')	 
 

<div class='main light-grey' id='belowtopnav' style='margin-left:220px;'>
  <div class='row white'>
    <div class='col l11 m12' id='main'>
       
<h1>Extjs<span class="color_h1"> Interview Question & Answer</span></h1>
<div class="clear nextprev">
<a class="left btn" href="{{url('interviews/reactjs-interview-question-answer')}}">&#10094; Previous</a>
<a class="right btn" href="{{url('interviews/php-interview-question-answer')}}">Next &#10095;</a>
</div>
<hr>
 <div class="light">
 
   
 <section id="services-section" class="py-12 bg-gray-100">
  
 <div class="container mx-auto px-4">
  
 
 
 
  
 
<div class="mb-12">

    <!-- Q1 -->
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q1. What is Ext JS?</h2>
    </div>

    <p class="text-lg text-gray-700">
        <strong>Ext JS</strong> is a JavaScript framework used to develop rich, responsive and data-driven web applications. It provides reusable UI components and follows an object-oriented programming approach.
    </p>

    <p class="text-lg text-gray-700"><strong>Main Features:</strong></p>
    <ul class="list-disc pl-6 text-lg text-gray-700">
        <li>Grid and data tables.</li>
        <li>Form validation.</li>
        <li>MVC and MVVM architecture.</li>
        <li>Data stores and models.</li>
        <li>AJAX communication.</li>
        <li>Charts and dashboards.</li>
    </ul>

    <!-- Q2 -->
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q2. What are the main features of Ext JS?</h2>
    </div>

    <p class="text-lg text-gray-700"><strong>Answer:</strong> The main features of Ext JS are:</p>

    <ul class="list-disc pl-6 text-lg text-gray-700">
        <li>Rich UI components.</li>
        <li>Cross-browser support.</li>
        <li>MVC/MVVM architecture.</li>
        <li>Data binding.</li>
        <li>AJAX support.</li>
        <li>Built-in form validation.</li>
        <li>Grid and tree components.</li>
        <li>Reusable components.</li>
    </ul>

    <!-- Q3 -->
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q3. What is Ext.create()?</h2>
    </div>

    <p class="text-lg text-gray-700">
        <strong>Ext.create()</strong> is used to create an instance of a class or component.
    </p>

    <p class="text-lg text-gray-700"><strong>Example:</strong></p>

    <pre class="bg-gray-100 p-4 rounded-lg overflow-x-auto text-sm"><code>Ext.create('Ext.panel.Panel', {
    title: 'My First Panel',
    width: 400,
    height: 200,
    html: 'Welcome to Ext JS',
    renderTo: Ext.getBody()
});</code></pre>

    <!-- Q4 -->
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q4. What is Ext.define()?</h2>
    </div>

    <p class="text-lg text-gray-700">
        <strong>Ext.define()</strong> is used to define a new class in Ext JS.
    </p>

    <p class="text-lg text-gray-700"><strong>Example:</strong></p>

    <pre class="bg-gray-100 p-4 rounded-lg overflow-x-auto text-sm"><code>Ext.define('MyApp.model.User', {
    extend: 'Ext.data.Model',

    fields: [
        'id',
        'name',
        'email'
    ]
});</code></pre>

    <!-- Q5 -->
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q5. Difference between Ext.define() and Ext.create()?</h2>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full border-collapse border border-gray-300 text-left">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border border-gray-300 p-3">Ext.define()</th>
                    <th class="border border-gray-300 p-3">Ext.create()</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border border-gray-300 p-3">Defines a class.</td>
                    <td class="border border-gray-300 p-3">Creates an object.</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-3">Used for class declaration.</td>
                    <td class="border border-gray-300 p-3">Used for instantiation.</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-3">Defines properties and methods.</td>
                    <td class="border border-gray-300 p-3">Uses an existing class.</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-3">Similar to class declaration.</td>
                    <td class="border border-gray-300 p-3">Similar to new.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Q6 -->
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q6. What is MVC architecture in Ext JS?</h2>
    </div>

    <p class="text-lg text-gray-700">
        <strong>MVC</strong> stands for Model, View and Controller.
    </p>

    <ul class="list-disc pl-6 text-lg text-gray-700">
        <li><strong>Model:</strong> Handles application data.</li>
        <li><strong>View:</strong> Displays the user interface.</li>
        <li><strong>Controller:</strong> Handles user actions and application logic.</li>
    </ul>

    <p class="text-lg text-gray-700"><strong>Example:</strong></p>

    <pre class="bg-gray-100 p-4 rounded-lg overflow-x-auto text-sm"><code>MyApp/
 ├── model/
 │    └── User.js
 ├── view/
 │    └── UserList.js
 ├── controller/
 │    └── UserController.js
 └── app.js</code></pre>

    <!-- Q7 -->
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q7. What is MVVM architecture?</h2>
    </div>

    <p class="text-lg text-gray-700">
        <strong>MVVM</strong> stands for Model, View and ViewModel.
    </p>

    <ul class="list-disc pl-6 text-lg text-gray-700">
        <li><strong>Model:</strong> Manages data.</li>
        <li><strong>View:</strong> Displays UI.</li>
        <li><strong>ViewModel:</strong> Maintains UI data and bindings.</li>
    </ul>

    <p class="text-lg text-gray-700">
        MVVM allows automatic synchronization between UI components and data.
    </p>

    <!-- Q8 -->
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q8. Difference between MVC and MVVM?</h2>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full border-collapse border border-gray-300 text-left">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border border-gray-300 p-3">MVC</th>
                    <th class="border border-gray-300 p-3">MVVM</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border border-gray-300 p-3">Model View Controller.</td>
                    <td class="border border-gray-300 p-3">Model View ViewModel.</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-3">Controller handles events.</td>
                    <td class="border border-gray-300 p-3">ViewModel manages UI state.</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-3">More event-driven.</td>
                    <td class="border border-gray-300 p-3">More data-binding driven.</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-3">Explicit updates are common.</td>
                    <td class="border border-gray-300 p-3">Automatic binding is common.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Q9 -->
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q9. What is a ViewController?</h2>
    </div>

    <p class="text-lg text-gray-700">
        A <strong>ViewController</strong> handles events and actions related to a particular view.
    </p>

    <p class="text-lg text-gray-700"><strong>Example:</strong></p>

    <pre class="bg-gray-100 p-4 rounded-lg overflow-x-auto text-sm"><code>Ext.define('MyApp.view.user.UserController', {
    extend: 'Ext.app.ViewController',
    alias: 'controller.user',

    onSaveClick: function() {
        console.log('Save button clicked');
    }
});</code></pre>

    <!-- Q10 -->
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q10. What is a Panel in Ext JS?</h2>
    </div>

    <p class="text-lg text-gray-700">
        A <strong>Panel</strong> is a container component used to display content, forms, grids and other components.
    </p>

    <p class="text-lg text-gray-700"><strong>Example:</strong></p>

    <pre class="bg-gray-100 p-4 rounded-lg overflow-x-auto text-sm"><code>Ext.create('Ext.panel.Panel', {
    title: 'User Panel',
    width: 400,
    height: 200,
    bodyPadding: 10,
    html: 'User information'
});</code></pre>

    <!-- Q11 -->
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q11. What is a Grid in Ext JS?</h2>
    </div>

    <p class="text-lg text-gray-700">
        A <strong>Grid</strong> is used to display data in tabular format with rows and columns.
    </p>

    <p class="text-lg text-gray-700"><strong>Example:</strong></p>

    <pre class="bg-gray-100 p-4 rounded-lg overflow-x-auto text-sm"><code>Ext.create('Ext.grid.Panel', {
    title: 'User List',

    store: {
        fields: ['id', 'name', 'email'],
        data: [
            {id: 1, name: 'Rahul', email: 'rahul@gmail.com'},
            {id: 2, name: 'Amit', email: 'amit@gmail.com'}
        ]
    },

    columns: [
        {text: 'ID', dataIndex: 'id'},
        {text: 'Name', dataIndex: 'name'},
        {text: 'Email', dataIndex: 'email'}
    ],

    width: 600,
    height: 300,
    renderTo: Ext.getBody()
});</code></pre>

    <!-- Q12 -->
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q12. What is a Store in Ext JS?</h2>
    </div>

    <p class="text-lg text-gray-700">
        A <strong>Store</strong> is used to manage collections of records. It loads data from a local array or remote API.
    </p>

    <p class="text-lg text-gray-700"><strong>Example:</strong></p>

    <pre class="bg-gray-100 p-4 rounded-lg overflow-x-auto text-sm"><code>Ext.create('Ext.data.Store', {
    fields: ['id', 'name'],
    data: [
        {id: 1, name: 'Rahul'},
        {id: 2, name: 'Amit'}
    ]
});</code></pre>

    <!-- Q13 -->
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q13. What is a Model in Ext JS?</h2>
    </div>

    <p class="text-lg text-gray-700">
        A <strong>Model</strong> represents a single data record and defines its fields and data structure.
    </p>

    <p class="text-lg text-gray-700"><strong>Example:</strong></p>

    <pre class="bg-gray-100 p-4 rounded-lg overflow-x-auto text-sm"><code>Ext.define('MyApp.model.Employee', {
    extend: 'Ext.data.Model',

    fields: [
        {name: 'id', type: 'int'},
        {name: 'name', type: 'string'},
        {name: 'salary', type: 'number'}
    ]
});</code></pre>

    <!-- Q14 -->
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q14. What is a Viewport?</h2>
    </div>

    <p class="text-lg text-gray-700">
        A <strong>Viewport</strong> is a top-level container that automatically adjusts its size according to the browser window.
    </p>

    <p class="text-lg text-gray-700"><strong>Example:</strong></p>

    <pre class="bg-gray-100 p-4 rounded-lg overflow-x-auto text-sm"><code>Ext.create('Ext.container.Viewport', {
    layout: 'fit',

    items: [{
        title: 'Dashboard',
        html: 'Welcome to Dashboard'
    }]
});</code></pre>

    <!-- Q15 -->
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q15. How do you create a form in Ext JS?</h2>
    </div>

    <p class="text-lg text-gray-700">
        We use <strong>Ext.form.Panel</strong> to create forms.
    </p>

    <p class="text-lg text-gray-700"><strong>Example:</strong></p>

    <pre class="bg-gray-100 p-4 rounded-lg overflow-x-auto text-sm"><code>Ext.create('Ext.form.Panel', {
    title: 'Login Form',
    width: 350,
    bodyPadding: 10,

    items: [
        {
            xtype: 'textfield',
            name: 'email',
            fieldLabel: 'Email',
            allowBlank: false
        },
        {
            xtype: 'textfield',
            name: 'password',
            inputType: 'password',
            fieldLabel: 'Password',
            allowBlank: false
        }
    ],

    renderTo: Ext.getBody()
});</code></pre>

    <!-- Q16 -->
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q16. How do you validate a form?</h2>
    </div>

    <p class="text-lg text-gray-700">
        We use built-in validation properties like <strong>allowBlank</strong>, <strong>minLength</strong>, <strong>maxLength</strong> and <strong>regex</strong>.
    </p>

    <p class="text-lg text-gray-700"><strong>Example:</strong></p>

    <pre class="bg-gray-100 p-4 rounded-lg overflow-x-auto text-sm"><code>{
    xtype: 'textfield',
    fieldLabel: 'Username',
    allowBlank: false,
    minLength: 3,
    maxLength: 20
}</code></pre>

    <!-- Q17 -->
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q17. How do you get form values?</h2>
    </div>

    <pre class="bg-gray-100 p-4 rounded-lg overflow-x-auto text-sm"><code>var form = Ext.getCmp('myForm');

var values = form.getForm().getValues();

console.log(values);</code></pre>

    <p class="text-lg text-gray-700">
        Here, <strong>getValues()</strong> returns all form field values as an object.
    </p>

    <!-- Q18 -->
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q18. How do you call a REST API in Ext JS?</h2>
    </div>

    <p class="text-lg text-gray-700">
        We can use <strong>Ext.Ajax.request()</strong> to communicate with backend APIs such as Laravel or PHP.
    </p>

    <p class="text-lg text-gray-700"><strong>Example:</strong></p>

    <pre class="bg-gray-100 p-4 rounded-lg overflow-x-auto text-sm"><code>Ext.Ajax.request({
    url: '/api/users',
    method: 'GET',

    success: function(response) {
        var result = Ext.decode(response.responseText);
        console.log(result);
    },

    failure: function(response) {
        console.log('API request failed');
    }
});</code></pre>

    <!-- Q19 -->
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q19. How do you send POST data to an API?</h2>
    </div>

    <pre class="bg-gray-100 p-4 rounded-lg overflow-x-auto text-sm"><code>Ext.Ajax.request({
    url: '/api/users',
    method: 'POST',

    jsonData: {
        name: 'Rahul',
        email: 'rahul@gmail.com'
    },

    success: function(response) {
        console.log('User created successfully');
    },

    failure: function(response) {
        console.log('Error creating user');
    }
});</code></pre>

    <!-- Q20 -->
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q20. How do you load remote API data into a Grid?</h2>
    </div>

    <p class="text-lg text-gray-700">
        We use <strong>Ext.data.Store</strong> with a proxy.
    </p>

    <p class="text-lg text-gray-700"><strong>Example:</strong></p>

    <pre class="bg-gray-100 p-4 rounded-lg overflow-x-auto text-sm"><code>Ext.create('Ext.data.Store', {
    fields: ['id', 'name', 'email'],

    proxy: {
        type: 'ajax',
        url: '/api/users',

        reader: {
            type: 'json',
            rootProperty: 'data'
        }
    },

    autoLoad: true
});</code></pre>

    <p class="text-lg text-gray-700">
        The API response should match the configured JSON reader structure.
    </p>

    <!-- Q21 -->
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q21. What is a Proxy in Ext JS?</h2>
    </div>

    <p class="text-lg text-gray-700">
        A <strong>Proxy</strong> is responsible for communication between a Store and the data source.
    </p>

    <p class="text-lg text-gray-700"><strong>Types:</strong></p>

    <ul class="list-disc pl-6 text-lg text-gray-700">
        <li>Ajax Proxy.</li>
        <li>REST Proxy.</li>
        <li>Memory Proxy.</li>
        <li>LocalStorage Proxy.</li>
    </ul>

    <!-- Q22 -->
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q22. What is Data Binding?</h2>
    </div>

    <p class="text-lg text-gray-700">
        <strong>Data Binding</strong> connects UI components with ViewModel data. When the bound data changes, the UI can update automatically.
    </p>

    <!-- Q23 -->
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q23. What is Component Lifecycle?</h2>
    </div>

    <p class="text-lg text-gray-700">
        Component lifecycle represents different stages of a component, from creation to destruction.
    </p>

    <p class="text-lg text-gray-700"><strong>Important methods:</strong></p>

    <ul class="list-disc pl-6 text-lg text-gray-700">
        <li>initComponent()</li>
        <li>beforeRender()</li>
        <li>afterRender()</li>
        <li>onDestroy()</li>
    </ul>

    <!-- Q24 -->
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q24. What is xtype in Ext JS?</h2>
    </div>

    <p class="text-lg text-gray-700">
        <strong>xtype</strong> is a shorthand name used to identify and create a component.
    </p>

    <p class="text-lg text-gray-700"><strong>Examples:</strong></p>

    <pre class="bg-gray-100 p-4 rounded-lg overflow-x-auto text-sm"><code>xtype: 'textfield'
xtype: 'button'
xtype: 'grid'
xtype: 'panel'
xtype: 'combobox'</code></pre>

    <!-- Q25 -->
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q25. What is the difference between hide() and destroy()?</h2>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full border-collapse border border-gray-300 text-left">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border border-gray-300 p-3">hide()</th>
                    <th class="border border-gray-300 p-3">destroy()</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border border-gray-300 p-3">Hides the component.</td>
                    <td class="border border-gray-300 p-3">Removes the component.</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-3">Component remains in memory.</td>
                    <td class="border border-gray-300 p-3">Component is destroyed.</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-3">Can show it again.</td>
                    <td class="border border-gray-300 p-3">Must create a new instance.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Q26 -->
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q26. How do you add a new record to a Grid?</h2>
    </div>

    <pre class="bg-gray-100 p-4 rounded-lg overflow-x-auto text-sm"><code>var store = Ext.getStore('UserStore');

store.add({
    id: 3,
    name: 'Brijesh',
    email: 'brijesh@gmail.com'
});</code></pre>

    <!-- Q27 -->
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q27. How do you delete a record from a Grid?</h2>
    </div>

    <pre class="bg-gray-100 p-4 rounded-lg overflow-x-auto text-sm"><code>var grid = Ext.getCmp('userGrid');

var selection = grid.getSelection();

if (selection.length > 0) {
    grid.getStore().remove(selection);
}</code></pre>

    <!-- Q28 -->
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q28. How do you search records in Ext JS?</h2>
    </div>

    <pre class="bg-gray-100 p-4 rounded-lg overflow-x-auto text-sm"><code>var store = Ext.getStore('UserStore');

store.filter({
    property: 'name',
    value: 'Rahul',
    anyMatch: true,
    caseSensitive: false
});</code></pre>

    <!-- Q29 -->
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q29. How do you implement pagination in Ext JS?</h2>
    </div>

    <p class="text-lg text-gray-700">
        We use a <strong>Paging Toolbar</strong> and configure the Store with pageSize.
    </p>

    <p class="text-lg text-gray-700"><strong>Example:</strong></p>

    <pre class="bg-gray-100 p-4 rounded-lg overflow-x-auto text-sm"><code>Ext.create('Ext.toolbar.Paging', {
    store: userStore,
    displayInfo: true,
    pageSize: 10
});</code></pre>

    <!-- Q30 -->
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q30. How do you handle API errors?</h2>
    </div>

    <p class="text-lg text-gray-700">
        We use success and failure callbacks, HTTP status codes and proper error messages.
    </p>

    <p class="text-lg text-gray-700"><strong>Example:</strong></p>

    <pre class="bg-gray-100 p-4 rounded-lg overflow-x-auto text-sm"><code>Ext.Ajax.request({
    url: '/api/users',
    method: 'GET',

    success: function(response) {
        console.log(Ext.decode(response.responseText));
    },

    failure: function(response) {
        Ext.Msg.alert(
            'Error',
            'Status Code: ' + response.status
        );
    }
});</code></pre>

    <!-- Important Interview Topics -->
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-8 mb-4">Important Ext JS Topics for L1 Interview</h2>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full border-collapse border border-gray-300 text-left">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border border-gray-300 p-3">Topic</th>
                    <th class="border border-gray-300 p-3">Priority</th>
                </tr>
            </thead>
            <tbody>
                <tr><td class="border border-gray-300 p-3">Ext.define() and Ext.create()</td><td class="border border-gray-300 p-3">High</td></tr>
                <tr><td class="border border-gray-300 p-3">MVC and MVVM</td><td class="border border-gray-300 p-3">High</td></tr>
                <tr><td class="border border-gray-300 p-3">Grid, Store and Model</td><td class="border border-gray-300 p-3">High</td></tr>
                <tr><td class="border border-gray-300 p-3">Forms and validation</td><td class="border border-gray-300 p-3">High</td></tr>
                <tr><td class="border border-gray-300 p-3">AJAX and REST API integration</td><td class="border border-gray-300 p-3">High</td></tr>
                <tr><td class="border border-gray-300 p-3">Proxy and Reader</td><td class="border border-gray-300 p-3">High</td></tr>
                <tr><td class="border border-gray-300 p-3">CRUD operations</td><td class="border border-gray-300 p-3">High</td></tr>
                <tr><td class="border border-gray-300 p-3">Event handling</td><td class="border border-gray-300 p-3">High</td></tr>
                <tr><td class="border border-gray-300 p-3">ViewModel and Data Binding</td><td class="border border-gray-300 p-3">Medium</td></tr>
                <tr><td class="border border-gray-300 p-3">Lifecycle methods</td><td class="border border-gray-300 p-3">Medium</td></tr>
                <tr><td class="border border-gray-300 p-3">Routing and application architecture</td><td class="border border-gray-300 p-3">Medium</td></tr>
            </tbody>
        </table>
    </div>

</div>

 

<!-- HTML fragment: paste inside your existing Tailwind page. -->
<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q1. What is configuration-driven development?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">Configuration-driven development is a software development approach where application behaviour is controlled through configuration rather than writing separate code for every requirement.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">Instead of creating multiple similar functions or components, we create one reusable function and pass different configurations.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">Example: Without configuration-driven design</p>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>function showUser() {
    // User display logic
}

function showEmployee() {
    // Employee display logic
}

function showProduct() {
    // Product display logic
}</code></pre>

<p class="mb-4 text-lg leading-8 text-gray-700">Here, we are repeating similar code.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">Example: With configuration-driven design</p>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>function showData(config) {

    console.log(&quot;Title:&quot;, config.title);
    console.log(&quot;API:&quot;, config.api);
    console.log(&quot;Columns:&quot;, config.columns);

}

showData({
    title: &#x27;User List&#x27;,
    api: &#x27;/api/users&#x27;,
    columns: [&#x27;id&#x27;, &#x27;name&#x27;, &#x27;email&#x27;]
});

showData({
    title: &#x27;Employee List&#x27;,
    api: &#x27;/api/employees&#x27;,
    columns: [&#x27;id&#x27;, &#x27;name&#x27;, &#x27;salary&#x27;]
});</code></pre>

<p class="mb-4 text-lg leading-8 text-gray-700">Benefits:</p>

<ul class="mb-4 list-disc space-y-2 pl-6 text-lg text-gray-700">

<li>Code reusability.</li>

<li>Less duplicate code.</li>

<li>Easy maintenance.</li>

<li>Faster development.</li>

<li>Easy to add new functionality.</li>

</ul>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q2. What is metadata-driven design?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">Metadata-driven design means defining application behaviour using data that describes the application, such as field names, labels, data types, validation rules and API endpoints.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">For example, instead of manually creating every form field, we define fields in a configuration array and generate the form dynamically.</p>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>var fields = [
    {
        name: &#x27;name&#x27;,
        label: &#x27;Name&#x27;,
        type: &#x27;textfield&#x27;,
        required: true
    },
    {
        name: &#x27;email&#x27;,
        label: &#x27;Email&#x27;,
        type: &#x27;textfield&#x27;,
        required: true
    },
    {
        name: &#x27;age&#x27;,
        label: &#x27;Age&#x27;,
        type: &#x27;numberfield&#x27;,
        required: false
    }
];

fields.forEach(function(field) {

    console.log(field.name);
    console.log(field.label);
    console.log(field.type);

});</code></pre>

<p class="mb-4 text-lg leading-8 text-gray-700">Benefits: We can add or modify fields through metadata without changing the core form-generation logic.</p>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q3. What is the difference between configuration-driven and metadata-driven design?</h2></div>

<div class="my-5 overflow-x-auto"><table class="w-full border-collapse text-left text-gray-700"><thead class="bg-gray-100"><tr>

<th class="border border-gray-200 px-4 py-3 font-semibold">Configuration-driven</th>

<th class="border border-gray-200 px-4 py-3 font-semibold">Metadata-driven</th>

</tr></thead><tbody>

<tr><td class="border border-gray-200 px-4 py-3">Controls application behaviour</td><td class="border border-gray-200 px-4 py-3">Describes application structure and behaviour</td></tr>

<tr><td class="border border-gray-200 px-4 py-3">Uses configuration objects</td><td class="border border-gray-200 px-4 py-3">Uses descriptive metadata</td></tr>

<tr><td class="border border-gray-200 px-4 py-3">Defines settings and options</td><td class="border border-gray-200 px-4 py-3">Defines fields, types and rules</td></tr>

<tr><td class="border border-gray-200 px-4 py-3">Example: API URL, layout</td><td class="border border-gray-200 px-4 py-3">Example: Form fields, grid columns</td></tr>

</tbody></table></div>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q4. How do you remove duplicate code from an existing application?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">First, I identify repeated code blocks and understand their common functionality. Then I create reusable functions, components or service methods and pass different values through configuration.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">For example, if multiple Ext JS grids use the same structure, I create one reusable grid component and configure its title, store and columns.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">This reduces code duplication and makes future maintenance easier.</p>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">2. Ext JS 4 and Component-Based UI Framework</h2></div>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q5. What is Ext JS 4?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">Ext JS 4 is a JavaScript framework developed by Sencha. It is used to build enterprise-level web applications with reusable UI components.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">It provides:</p>

<ul class="mb-4 list-disc space-y-2 pl-6 text-lg text-gray-700">

<li>Grid and data tables.</li>

<li>Forms and validation.</li>

<li>Panels and windows.</li>

<li>Stores and models.</li>

<li>AJAX and REST API integration.</li>

<li>MVC architecture.</li>

<li>Event handling.</li>

</ul>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q6. What is a component-based architecture?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">Component-based architecture means dividing an application into small, reusable components.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">For example:</p>

<ul class="mb-4 list-disc space-y-2 pl-6 text-lg text-gray-700">

<li>Header component.</li>

<li>Sidebar component.</li>

<li>User grid component.</li>

<li>Employee form component.</li>

<li>Dashboard component.</li>

</ul>

<p class="mb-4 text-lg leading-8 text-gray-700">Each component has its own functionality and configuration.</p>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q7. What is the difference between Ext JS and jQuery?</h2></div>

<div class="my-5 overflow-x-auto"><table class="w-full border-collapse text-left text-gray-700"><thead class="bg-gray-100"><tr>

<th class="border border-gray-200 px-4 py-3 font-semibold">Ext JS</th>

<th class="border border-gray-200 px-4 py-3 font-semibold">jQuery</th>

</tr></thead><tbody>

<tr><td class="border border-gray-200 px-4 py-3">Complete JavaScript framework</td><td class="border border-gray-200 px-4 py-3">JavaScript library</td></tr>

<tr><td class="border border-gray-200 px-4 py-3">Provides ready-made UI components</td><td class="border border-gray-200 px-4 py-3">Primarily DOM manipulation</td></tr>

<tr><td class="border border-gray-200 px-4 py-3">Supports MVC architecture</td><td class="border border-gray-200 px-4 py-3">No built-in MVC architecture</td></tr>

<tr><td class="border border-gray-200 px-4 py-3">Provides Grid, Form, Store</td><td class="border border-gray-200 px-4 py-3">Requires additional plugins</td></tr>

<tr><td class="border border-gray-200 px-4 py-3">Configuration-driven</td><td class="border border-gray-200 px-4 py-3">Generally imperative</td></tr>

</tbody></table></div>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q8. How do you create a Grid dynamically in Ext JS 4?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">We can create a reusable grid component and pass columns and store configuration dynamically.</p>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>Ext.define(&#x27;MyApp.view.CommonGrid&#x27;, {
    extend: &#x27;Ext.grid.Panel&#x27;,
    alias: &#x27;widget.commongrid&#x27;,

    initComponent: function() {

        this.columns = this.gridColumns;

        this.store = Ext.create(&#x27;Ext.data.Store&#x27;, {
            fields: this.fields,
            data: this.gridData
        });

        this.callParent(arguments);
    }
});</code></pre>

<p class="mb-4 text-lg leading-8 text-gray-700">Usage:</p>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>Ext.create(&#x27;MyApp.view.CommonGrid&#x27;, {
    title: &#x27;User List&#x27;,
    width: 600,
    height: 300,

    fields: [&#x27;id&#x27;, &#x27;name&#x27;, &#x27;email&#x27;],

    gridColumns: [
        { text: &#x27;ID&#x27;, dataIndex: &#x27;id&#x27; },
        { text: &#x27;Name&#x27;, dataIndex: &#x27;name&#x27; },
        { text: &#x27;Email&#x27;, dataIndex: &#x27;email&#x27; }
    ],

    gridData: [
        { id: 1, name: &#x27;Rahul&#x27;, email: &#x27;rahul@gmail.com&#x27; },
        { id: 2, name: &#x27;Amit&#x27;, email: &#x27;amit@gmail.com&#x27; }
    ],

    renderTo: Ext.getBody()
});</code></pre>

<p class="mb-4 text-lg leading-8 text-gray-700">The same component can be reused for employees, customers and products by changing the configuration.</p>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q9. What is the Ext JS Store?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">A Store is used to manage collections of records. It connects the frontend components with local or remote data sources.</p>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>var userStore = Ext.create(&#x27;Ext.data.Store&#x27;, {
    fields: [&#x27;id&#x27;, &#x27;name&#x27;, &#x27;email&#x27;],

    proxy: {
        type: &#x27;ajax&#x27;,
        url: &#x27;/api/users&#x27;,

        reader: {
            type: &#x27;json&#x27;,
            root: &#x27;data&#x27;
        }
    },

    autoLoad: true
});</code></pre>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q10. How do you connect Ext JS 4 with a PHP or Laravel backend?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">I use AJAX requests or Ext JS Store proxies to communicate with backend APIs.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">The backend returns JSON data, and Ext JS displays that data in grids, forms and other components.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">Example:</p>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>Ext.Ajax.request({
    url: &#x27;/api/users&#x27;,
    method: &#x27;GET&#x27;,

    success: function(response) {

        var result = Ext.decode(response.responseText);

        console.log(result.data);

    },

    failure: function(response) {

        Ext.Msg.alert(&#x27;Error&#x27;, &#x27;API request failed&#x27;);

    }
});</code></pre>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q11. What is the difference between xtype and Ext.create()?</h2></div>

<ul class="mb-4 list-disc space-y-2 pl-6 text-lg text-gray-700">

<li><code class="rounded bg-gray-100 px-1.5 py-0.5 text-sm text-blue-800">xtype</code> is a shorthand used to identify a component.</li>

<li><code class="rounded bg-gray-100 px-1.5 py-0.5 text-sm text-blue-800">Ext.create()</code> creates an instance of a class.</li>

</ul>

<p class="mb-4 text-lg leading-8 text-gray-700">Example:</p>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>{
    xtype: &#x27;textfield&#x27;,
    fieldLabel: &#x27;Username&#x27;
}</code></pre>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>Ext.create(&#x27;Ext.window.Window&#x27;, {
    title: &#x27;User Details&#x27;,
    width: 400,
    height: 300
}).show();</code></pre>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">3. SQL and Database Questions</h2></div>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q12. What is SQL query optimization?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">SQL query optimization means improving database query performance by reducing execution time and unnecessary database operations.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">Important techniques:</p>

<ol class="mb-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">

<li>Use proper indexes.</li>

<li>Avoid SELECT * when unnecessary.</li>

<li>Use JOINs correctly.</li>

<li>Avoid unnecessary subqueries.</li>

<li>Use LIMIT for pagination.</li>

<li>Analyze queries using EXPLAIN.</li>

<li>Avoid repeated database queries.</li>

</ol>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q13. What is an SQL JOIN?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">JOIN is used to retrieve related data from multiple tables.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">Example:</p>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>SELECT
    users.id,
    users.name,
    orders.amount
FROM users
INNER JOIN orders
    ON users.id = orders.user_id;</code></pre>

<p class="mb-4 text-lg leading-8 text-gray-700">This query retrieves user information along with their orders.</p>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q14. What is the difference between INNER JOIN and LEFT JOIN?</h2></div>

<div class="my-5 overflow-x-auto"><table class="w-full border-collapse text-left text-gray-700"><thead class="bg-gray-100"><tr>

<th class="border border-gray-200 px-4 py-3 font-semibold">INNER JOIN</th>

<th class="border border-gray-200 px-4 py-3 font-semibold">LEFT JOIN</th>

</tr></thead><tbody>

<tr><td class="border border-gray-200 px-4 py-3">Returns matching records only</td><td class="border border-gray-200 px-4 py-3">Returns all records from left table</td></tr>

<tr><td class="border border-gray-200 px-4 py-3">Excludes unmatched records</td><td class="border border-gray-200 px-4 py-3">Includes unmatched left records</td></tr>

<tr><td class="border border-gray-200 px-4 py-3">Used for matching data</td><td class="border border-gray-200 px-4 py-3">Used when all left-side records are required</td></tr>

</tbody></table></div>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q15. How do you identify a slow SQL query?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">I use the EXPLAIN command to understand how MySQL executes a query.</p>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>EXPLAIN
SELECT *
FROM users
WHERE email = &#x27;test@gmail.com&#x27;;</code></pre>

<p class="mb-4 text-lg leading-8 text-gray-700">I check:</p>

<ul class="mb-4 list-disc space-y-2 pl-6 text-lg text-gray-700">

<li>Whether indexes are being used.</li>

<li>Number of rows examined.</li>

<li>Join types.</li>

<li>Possible indexes.</li>

<li>Full table scans.</li>

</ul>

<p class="mb-4 text-lg leading-8 text-gray-700">Then I optimize the query and verify its execution performance.</p>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q16. What is an index in MySQL?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">An index is a database structure that helps retrieve records faster without scanning the entire table.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">Example:</p>

<pre class="my-5 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>CREATE INDEX idx_user_email
ON users(email);</code></pre>

<p class="mb-4 text-lg leading-8 text-gray-700">Indexes improve read performance but can increase storage requirements and slow down INSERT, UPDATE and DELETE operations.</p>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q17. How do you refactor existing SQL queries?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">First, I understand the existing query and expected output. Then I check joins, conditions, duplicate records and indexes.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">I simplify unnecessary subqueries, optimize joins and verify the result against the original query.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">I also use EXPLAIN to compare execution plans and ensure that the refactoring does not change business logic.</p>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">4. Legacy Codebase and Refactoring</h2></div>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q18. What is a legacy codebase?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">A legacy codebase is an existing application developed using older technologies, frameworks or coding standards that is still being used in production.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">It may contain:</p>

<ul class="mb-4 list-disc space-y-2 pl-6 text-lg text-gray-700">

<li>Duplicate code.</li>

<li>Complex business logic.</li>

<li>Old libraries.</li>

<li>Poor documentation.</li>

<li>Performance issues.</li>

<li>Tight dependencies.</li>

</ul>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q19. How do you work with a legacy application without rewriting it?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">I prefer incremental improvements instead of rewriting the complete application.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">My approach is:</p>

<ol class="mb-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">

<li>Understand the existing architecture.</li>

<li>Identify critical business logic.</li>

<li>Review existing code and database queries.</li>

<li>Identify duplicate functionality.</li>

<li>Create reusable methods and components.</li>

<li>Refactor one module at a time.</li>

<li>Test existing functionality.</li>

<li>Deploy changes carefully.</li>

</ol>

<p class="mb-4 text-lg leading-8 text-gray-700">This approach reduces production risk and avoids unnecessary development costs.</p>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q20. What is refactoring?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">Refactoring means improving the internal structure of existing code without changing its external behaviour.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">For example, if the same validation logic is repeated in five places, I create one reusable validation function and use it everywhere.</p>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q21. How do you ensure that refactoring does not break existing functionality?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">I follow these steps:</p>

<ul class="mb-4 list-disc space-y-2 pl-6 text-lg text-gray-700">

<li>Understand existing business requirements.</li>

<li>Check current application behaviour.</li>

<li>Write or update test cases.</li>

<li>Refactor small sections.</li>

<li>Perform regression testing.</li>

<li>Verify API responses and database records.</li>

<li>Monitor production after deployment.</li>

</ul>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">5. Team Leadership and Project Management</h2></div>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q22. How do you manage a small distributed development team?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">I divide the project into smaller tasks and assign responsibilities based on team members&#x27; skills.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">I use daily meetings, task tracking and regular code reviews to monitor progress.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">I also maintain clear communication with remote team members and ensure that everyone understands the project requirements and deadlines.</p>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q23. How do you manage a project with a fixed deadline?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">First, I understand the requirements and divide the work into smaller milestones.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">Then I estimate development time, assign tasks and monitor progress regularly.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">I prioritize critical functionality and identify dependencies early.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">If there is a risk of missing the deadline, I communicate it to management early and suggest possible solutions.</p>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q24. What will you do if a project deadline is at risk?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">I will immediately identify the reason for the delay and evaluate its impact.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">I will discuss the situation with the team and management, prioritize critical tasks and suggest options such as reallocating resources or reducing non-critical scope.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">I believe early communication is better than giving an unrealistic commitment.</p>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q25. How do you handle disagreements between team members?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">I listen to both sides, understand the technical problem and evaluate solutions based on project requirements.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">I encourage discussions based on facts, code quality and business priorities rather than personal opinions.</p>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">6. Desirable Skills – Domain Knowledge</h2></div>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q26. What is automotive or manufacturing programme management?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">Automotive or manufacturing programme management involves planning, coordinating and monitoring projects related to vehicle development, manufacturing processes, production and quality.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">It includes:</p>

<ul class="mb-4 list-disc space-y-2 pl-6 text-lg text-gray-700">

<li>Project planning.</li>

<li>Resource management.</li>

<li>Production milestones.</li>

<li>Quality monitoring.</li>

<li>Risk management.</li>

<li>Performance reporting.</li>

</ul>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q27. What is a Stage-Gate process?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">Stage-Gate is a project management methodology where a project is divided into different stages.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">At the end of each stage, a review or decision gate is conducted to evaluate progress and decide whether the project can move to the next stage.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">Example:</p>

<ol class="mb-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">

<li>Idea / Concept — Define project requirements.</li>

<li>Planning — Prepare scope, budget and timeline.</li>

<li>Development — Develop and implement functionality.</li>

<li>Testing / Validation — Verify quality and requirements.</li>

<li>Launch / Delivery — Approve and release the project.</li>

</ol>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q28. What is a KPI reporting platform?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">KPI stands for Key Performance Indicator.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">A KPI reporting platform is used to monitor business performance through measurable metrics.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">Examples:</p>

<ul class="mb-4 list-disc space-y-2 pl-6 text-lg text-gray-700">

<li>Project completion percentage.</li>

<li>Development progress.</li>

<li>Production efficiency.</li>

<li>Quality metrics.</li>

<li>Budget utilization.</li>

<li>Delivery performance.</li>

</ul>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q29. How would you develop a configurable KPI dashboard using Ext JS?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">I would create reusable Ext JS components such as Grid, Chart and Panel.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">The KPI definitions would be stored as configuration or metadata, including metric name, calculation rule, data source and display format.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">The backend would calculate or retrieve the KPI values through APIs, and Ext JS would display them dynamically.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">This approach allows administrators to configure new metrics without developing a separate dashboard for each metric.</p>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">7. Most Important Interview Questions – Role-Based Answers</h2></div>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q30. Have you worked on configurable or metadata-driven applications?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">I have experience working with reusable application components and structured backend logic. I understand how to use configuration objects and metadata to avoid repeating the same code.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">For example, instead of creating separate forms or grids for every module, I can create reusable components where fields, columns, validation rules and API endpoints are controlled through configuration.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">This approach improves maintainability and makes it easier to extend existing applications.</p>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q31. How would you extend an existing application without rewriting it?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">I would first understand the current architecture, database structure and business logic. Then I would identify the areas that need improvement.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">I would introduce new functionality through reusable components, services and configuration while keeping existing functionality unchanged.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">I prefer incremental development, testing and deployment rather than a complete rewrite.</p>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q32. What would you do if you had to work with Ext JS 4, an older framework?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">I would first understand the existing Ext JS application structure, including its components, stores, models, controllers and API integration.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">I would follow the existing coding patterns and framework conventions instead of introducing unnecessary changes.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">I would focus on reusable components, configuration-driven development, performance and backward compatibility.</p>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">Q33. Do you have automotive or manufacturing domain experience?</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">If you do not have direct experience, answer honestly:</p>

<p class="mb-4 text-lg leading-8 text-gray-700">My primary experience is in web application development, PHP, Laravel, MySQL, API integration and enterprise application development.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">I have not worked extensively in the automotive or manufacturing domain, but I understand project management concepts, reporting systems, KPIs and milestone-based development.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">I am comfortable learning new business domains and understanding their workflows.</p>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">8. Final Interview Introduction</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">Use this answer when the interviewer says, &quot;Tell me about yourself.&quot;</p>

<p class="mb-4 text-lg leading-8 text-gray-700">I am an experienced Full Stack PHP Developer with strong experience in PHP, Laravel, MySQL, React, JavaScript and API integration.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">I have worked on developing and maintaining web applications, implementing REST APIs, database management, payment gateway integration and reusable application functionality.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">I have good knowledge of MVC architecture, OOP concepts, code optimization and SQL query optimization.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">I focus on writing reusable and maintainable code, reducing code duplication and improving existing application functionality.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">I also have experience handling development responsibilities, coordinating tasks and working with team members to deliver projects within deadlines.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">I am interested in this opportunity because it involves reusable architecture, configuration-driven development, legacy application enhancement and enterprise-level software development.</p>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">9. What the interviewer will most likely test</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">Highest priority</p>

<div class="my-5 overflow-x-auto"><table class="w-full border-collapse text-left text-gray-700"><thead class="bg-gray-100"><tr>

<th class="border border-gray-200 px-4 py-3 font-semibold">Interview topic</th>

<th class="border border-gray-200 px-4 py-3 font-semibold">Preparation level</th>

</tr></thead><tbody>

<tr><td class="border border-gray-200 px-4 py-3">Configuration-driven design</td><td class="border border-gray-200 px-4 py-3">Very high</td></tr>

<tr><td class="border border-gray-200 px-4 py-3">Metadata-driven architecture</td><td class="border border-gray-200 px-4 py-3">Very high</td></tr>

<tr><td class="border border-gray-200 px-4 py-3">JavaScript reusable functions</td><td class="border border-gray-200 px-4 py-3">Very high</td></tr>

<tr><td class="border border-gray-200 px-4 py-3">Ext JS 4 Grid, Store, Model</td><td class="border border-gray-200 px-4 py-3">Very high</td></tr>

<tr><td class="border border-gray-200 px-4 py-3">SQL JOIN, indexing, EXPLAIN</td><td class="border border-gray-200 px-4 py-3">Very high</td></tr>

<tr><td class="border border-gray-200 px-4 py-3">Legacy code refactoring</td><td class="border border-gray-200 px-4 py-3">Very high</td></tr>

<tr><td class="border border-gray-200 px-4 py-3">MVC architecture</td><td class="border border-gray-200 px-4 py-3">High</td></tr>

<tr><td class="border border-gray-200 px-4 py-3">Distributed team management</td><td class="border border-gray-200 px-4 py-3">High</td></tr>

<tr><td class="border border-gray-200 px-4 py-3">Stage-Gate and KPI</td><td class="border border-gray-200 px-4 py-3">Medium</td></tr>

<tr><td class="border border-gray-200 px-4 py-3">Automotive domain</td><td class="border border-gray-200 px-4 py-3">Medium</td></tr>

</tbody></table></div>

</div>

<div class="mb-12">

<div class="question"><h2 class="text-3xl font-bold text-primary mt-5 mb-4">10. My recommendation for your L1 interview</h2></div>

<p class="mb-4 text-lg leading-8 text-gray-700">Prepare these three practical coding exercises:</p>

<ol class="mb-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">

<li>Create a generic Ext JS 4 Grid that accepts dynamic columns and data.</li>

<li>Create a metadata-driven form that generates fields from a configuration array.</li>

<li>Refactor three repeated JavaScript functions into one reusable function.</li>

</ol>

<p class="mb-4 text-lg leading-8 text-gray-700">One important point: If you have not used Ext JS professionally, don&#x27;t claim production experience. Explain your JavaScript, Laravel, React and reusable-component experience, and demonstrate that you understand Ext JS 4 concepts.</p>

<p class="mb-4 text-lg leading-8 text-gray-700">These questions are closely aligned with the job description. The interviewer is likely to assess how you think about software architecture and code reuse, not just whether you remember JavaScript syntax.</p>

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