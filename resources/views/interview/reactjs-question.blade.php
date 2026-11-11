@extends('interview.layouts.app')
@section('title')
Reactjs Interview Questions & Answers
@endsection  
@section('description'),  
Explore ReactJS interview questions and answers covering components, hooks, state, props, routing, Redux, APIs, and performance optimization.
@endsection


@section('content')	 
 
 

<div class='main light-grey' id='belowtopnav' style='margin-left:220px;'>
  <div class='row white'>
    <div class='col l11 m12' id='main'>
       
<h1>Reactjs<span class="color_h1"> Interview Question & Answer</span></h1>
<div class="clear nextprev">
<a class="left btn" href="{{url('interviews/laravel-interview-question-answer')}}">&#10094; Previous</a>
<a class="right btn" href="{{url('interviews/restapi-interview-question-answer')}}">Next &#10095;</a>
</div>
<hr>
  
 <div class="light">
 
 
 <section id="services-section" class="py-12 bg-gray-100">
  <div class="container mx-auto px-4">
  
  <div class="mb-12">
    <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is Reactjs??</h2>
  </div>
  <p class="text-lg text-gray-700">React is a JavaScript library that makes building user interfaces easy. It was developed by Facebook.</p> 
  </div>
 
  <div class="mb-12">
    <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Does React use HTML?</h2>
  </div>
  <p class="text-lg text-gray-700">No, It uses JSX, which is similar to HTML.</p>
   
  </div>
 
  <div class="mb-12">
    <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">When was React first released?</h2>
  </div>
  <p class="text-lg text-gray-700">React was first released on March 2013.</p> 
  </div>
 
  <div class="mb-12">
    <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Give me two most significant drawbacks of React?</h2>
  </div>
  <p class="text-lg text-gray-700">Integrating React with the MVC framework like Rails requires complex configuration.</p><p class="text-lg text-gray-700">React require the users to have knowledge about the integration of user interface into MVC framework.</p>
  </div>
 
  


<div class="mb-12">
  <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">State the difference between Real DOM and Virtual DOM?</h2>
  </div>
  <table border="2px">
    <thead><tr><th><strong>Real DOM</strong></th><th><strong>Virtual DOM</strong></th></tr></thead>
    <tbody>
      <tr><td>It is updated slowly</td><td>It updates faster</td></tr>
      <tr><td>It allows a direct update from HTML</td><td>It cannot be used to update HTML directly.</td></tr>
      <tr><td>It wastes too much memory</td><td>Memory consumption is less</td></tr>   
  
  </tbody></table>
     
</div>


 <div class="mb-12">
    <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is Flux Concept In React?</h2>
  </div>
  <p class="text-lg text-gray-700">Facebook widely uses flux architecture concept for developing client-side web applications. It is not a framework or a library. It is simply a new kind of architecture that complements React and the concept of Unidirectional Data Flow.</p>
  </div>
 

 <div class="mb-12">
    <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Define the term Redux in React?</h2>
  </div>
  <p class="text-lg text-gray-700">Redux is a library used for front end development. It is a state container for JavaScript applications which should be used for the applications state management. You can test and run an application developed with Redux in different environments</p>
  </div>
 

 <div class="mb-12">
    <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the 'Store' feature in Redux?</h2>
  </div>
  <p class="text-lg text-gray-700">Redux has a feature called 'Store' which allows you to save the application's entire State at one place. Therefore all it's component's State are stored in the Store so that you will get regular updates directly from the Store. The single state tree helps you to keep track of changes over time and debug or inspect the application.</p>
  </div>
 

 <div class="mb-12">
    <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is an action in Redux?</h2>
  </div>
  <p class="text-lg text-gray-700">It is a function which returns an action object. The action-type and the action data are always stored in the action object. Actions can send data between the Store and the software application. All information retrieved by the Store is produced by the actions.</p>
  </div>
 

 <div class="mb-12">
    <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Name the important features of React?</h2>
  </div>
  <p class="text-lg text-gray-700">Here, are important features of React:</p>
  <p>Allows you to use 3rd party libraries</p>
  <p>Time-Saving</p>
  <p>Faster Development</p>
  <p>Simplicity and Composable</p>
  <p>Fully supported by</p>
  <p>Facebook.</p>
  <p>Code Stability with One-directional data binding React Components</p>


  </div>

 <div class="mb-12">
    <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is meant by callback function? What is its purpose?</h2>
  </div>
  <p class="text-lg text-gray-700">A callback function should be called when setState has finished, and the component is retendered. As the setState is asynchronous, which is why it takes in a second callback function.</p>
  
  </div>
 




 <div class="mb-12">
    <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Explain the term high order component?</h2>
  </div>
  <p class="text-lg text-gray-700">A higher-order component also shortly known as HOC is an advanced technique for reusing component logic. It is not a part of the React API, but they are a pattern which emerges from React’s compositional nature.</p>
  
  </div>
 


 <div class="mb-12">
    <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What are Props in react js?</h2>
  </div>
  <p class="text-lg text-gray-700">Props mean properties, which is a way of passing data from parent to child. We can say that props are just a communication channel between components. It is always moving from parent to child component.</p>
  
  </div>
 




  

<div class="mb-12">
  <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Name two types of React component?</h2>
  </div>
  <table border="2px">
    <thead><tr><th><strong>Function component</strong></th><th><strong>Class component</strong></th></tr></thead>
    <tbody>
      <tr><td></td><td></td></tr>
      <tr><td></td><td></td></tr>
      <tr><td></td> <td></td> </tr>   
  
  </tbody></table>
     
</div>





 <div class="mb-12">
    <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Explain synthetic event in React js?</h2>
  </div>
  <p class="text-lg text-gray-700">Synthetic event is a kind of object which acts as a cross-browser wrapper around the browser’s native event. It also helps us to combine the behaviors of various browser into signal API.</p>
  
  </div>

 <div class="mb-12">
    <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is React State?</h2>
  </div>
  <p class="text-lg text-gray-700">It is an object which decides how a specific component renders and how it behaves. The state stores the information which can be changed over the lifetime of a React component.</p>
  
  </div>
 
 <div class="mb-12">
    <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Explain the use of the arrow function in React?</h2>
  </div>
  <p class="text-lg text-gray-700">The arrow function helps you to predict the behavior of bugs when passed as a callback. Therefore, it prevents bug caused by this all together.</p>
  
  </div>
 



<div class="mb-12">
  <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">State the main difference between Pros and State?</h2>
  </div>
  <table border="2px">
    <thead><tr><th><strong>State</strong></th><th><strong>Pros</strong></th></tr></thead>
    <tbody>
      <tr><td>State is mutable</td><td>Pros are immutable</td></tr>
      <tr><td>State information that will change, we need to utilize State</td><td>Props are set by the parent and which are settled all through the lifetime of a part.
        <p>You can’t update props in react js because props are read-only.</p>
      </td></tr>
      <tr><td></td> <td></td> </tr>   
  
  </tbody></table>
     
</div>



 <div class="mb-12">
    <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Explain pure components in React js?</h2>
  </div>
  <p class="text-lg text-gray-700">Pure components are the fastest components which can replace any component with only a render(). It helps you to enhance the simplicity of the code and performance of the application.</p>
  
  </div>
 

 <div class="mb-12">
    <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Explain strict mode?</h2>
  </div>
  <p class="text-lg text-gray-700">StrictMode allows you to run checks and warnings for react components. It runs only on development build. It helps you to highlight the issues without rendering any visible UI.</p>
  
  </div>
 

 <div class="mb-12">
    <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the use of Webpack?</h2>
  </div>
  <p class="text-lg text-gray-700">Webpack in basically is a module builder. It is mainly runs during the development process.</p>
  
  </div>
 

 <div class="mb-12">
    <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is Babel in React js?</h2>
  </div>
  <p class="text-lg text-gray-700">Babel, is a JavaScript compiler that converts latest JavaScript like ES6, ES7 into plain old ES5 JavaScript that most browsers understand.</p>
  
  </div>

 <div class="mb-12">
    <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How can a browser read JSX file?</h2>
  </div>
  <p class="text-lg text-gray-700">If you want the browser to read JSX, then that JSX file should be replaced using a JSX transformer like Babel and then send back to the browser.</p>
  
  </div>
 


 <div class="mb-12">
    <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What are the major issues of using MVC architecture in React?</h2>
  </div>
  <p class="text-lg text-gray-700">DOM handling is quite expensive</p>
  <p class="text-lg text-gray-700">Most of the time applications were slow and inefficient</p>
  <p class="text-lg text-gray-700">Because of circular functions, a complex model has been created around models and ideas</p>
  
  </div>


 <div class="mb-12">
    <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Explain the term synthetic events?</h2>
  </div>
  <p class="text-lg text-gray-700">It is actually a cross-browser wrapper around the browser’s native event. These events have interface stopPropagation() and preventDefault().</p>
  
  </div>
 


 <div class="mb-12">
    <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Explain the term reconciliation?</h2>
  </div>
  <p class="text-lg text-gray-700">When a component's state or props change then rest will compare the rendered element with previously rendered DOM and will update the actual DOM if it is needed. This process is known as reconciliation.</p>
  
  </div>
 

 <div class="mb-12">
    <div class="question">  
  <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Explain Hooks?</h2>
  </div>
  <p class="text-lg text-gray-700"><strong>useState: </strong>.
This React hook allows components to manage local
state without class components.</p>
 <p>
Store simple values like numbers, strings, objects, or
arrays.
</p>
<div class="example"> 
<div class="code"> 
      <code>
import React, { useState } from 'react';<br>

function Counter() {<br>
  const [count, setCount] = useState(0); // Initialize state<br>
 <xmp> 
  return (
    <div>
      <p>Count: {count}</p>
      <button onClick={() => setCount(count + 1)}>Increment</button>
    </div>
  );
}

export default Counter; <xmp> 
      
      </code>
    </div>
  </div>
  <p>Avoid directly mutating the state. Instead,
always update it using ‘setState'</p>

<p class="text-lg text-gray-700"><strong>useEffect: </strong>.
useEffect is used for tasks like data fetching, setting up
subscriptions, and performing initial actions. It
behaves similarly to componentDidMount in class
components
</p>
<p>Runs after rendering. You can control when it executes
by passing dependencies. It functions similarly to
shouldComponentUpdate or componentDidUpdate</p>
<div class="example"> 
<div class="code"> 
      <code>
import React, { useState, useEffect } from 'react';<br>

function ExampleComponent() {<br>
  const [count, setCount] = useState(0);<br>

  // Run side effect after render<br>
  useEffect(() => {<br>
    document.title = `Count: ${count}`; // Update document title<br>

    // Cleanup (optional)<br>
    return () => {<br>
      document.title = 'React App';<br>
    };<br>
  }, [count]); // Dependency array: run when count changes<br>
 <xmp> 
  return (
    <div>
      <p>Count: {count}</p>
      <button onClick={() => setCount(count + 1)}>Increment</button>
    </div>
  );
}

export default ExampleComponent; </xmp> 
      
      </code>
    </div>
  </div>
  

<p class="text-lg text-gray-700"><strong>useRef: </strong>.
It is used to create mutable references to DOM
elements and any values that you want to persist
across renders without causing re-renders.
</p>
<p>Autofocus an input field.</p>
<p>Useful for handling animations, measuring
elements, and persisting values without re-renders.</p>
<div class="example"> 
<div class="code"> 
      <code>
import React, { useRef } from 'react';<br>

function TextInput() {<br>
  const inputRef = useRef(null);<br>

  const focusInput = () => {<br>
    inputRef.current.focus(); // Access DOM element<br>
  };
 <xmp> 
  return (
    <div>
      <input ref={inputRef} type="text" placeholder="Type here" />
      <button onClick={focusInput}>Focus Input</button>
    </div>
  );
}

export default TextInput; <xmp> 
      </code>
    </div>
  </div>

<p class="text-lg text-gray-700"><strong>useMemo: </strong>.
Returns a cached value and prevents expensive
calculations from running on every render.
</p>
<p>Use it only when necessary—overusing can
degrade performance.</p>
 
<div class="example"> 
<div class="code"> 
      <code>
import React, { useState, useMemo } from 'react';<br>

function ExpensiveComponent() {<br>
  const [count, setCount] = useState(0);<br>

  // Memoize expensive computation<br>
  const expensiveValue = useMemo(() => {<br>
    return Array(1000000).fill().reduce((sum, _, i) => sum + i, count);<br>
  }, [count]); // Recompute only if count changes<br>
 <xmp> 
  return (
    <div>
      <p>Count: {count}</p>
      <p>Expensive Value: {expensiveValue}</p>
      <button onClick={() => setCount(count + 1)}>Increment</button>
    </div>
  );
} </xmp> 

export default ExpensiveComponent;<br>
      
      
      </code>
    </div>
  </div>


<p class="text-lg text-gray-700"><strong>useCallback: </strong>.
Memoizes a function, ensuring that the function
reference remains stable across re-renders unless its
dependencies change. This is especially useful when
passing functions down to child components, as it
prevents unnecessary re-renders.
</p>
<p>Use it when passing functions to child
components to prevent unnecessary renders.</p>
 
<div class="example"> 
<div class="code"> 
      <code>
import React, { useState, useCallback } from 'react';<br>

function Counter() {<br>
  const [count, setCount] = useState(0);<br>

  // Memoize the increment function<br>
  const increment = useCallback(() => {<br>
    setCount(prevCount => prevCount + 1);<br>
  }, []); // Empty dependency array: function is memoized and won't change<br>
 <xmp> 
  return (
    <div>
      <p>Count: {count}</p>
      <button onClick={increment}>Increment</button>
    </div>
  );
}

export default Counter; </code>xmp> 
      
      </code>
    </div>
  </div>


<p class="text-lg text-gray-700"><strong>useReducer: </strong>.
Useful when state management is more complex
than a simple state change (like useState).
</p>
<p>Like useState, useReducer is local to the
component, but it gives you more flexibility and
control over how the state is updated.</p>
<p>Works great for managing form states and
complex UI state logic.</p>
 
<div class="example"> 
<div class="code"> 
      <code>
import React, { useReducer } from 'react';<br>

const initialState = { count: 0 };<br>
const reducer = (state, action) => {<br>
  switch (action.type) {<br>
    case 'increment': return { count: state.count + 1 };<br>
    case 'decrement': return { count: state.count - 1 };<br>
    default: return state;<br>
  }<br>
};<br>

function Counter() {<br>
  const [state, dispatch] = useReducer(reducer, initialState);<br>
 <xmp> 
  return (
    <div>
      <p>{state.count}</p>
      <button onClick={() => dispatch({ type: 'increment' })}>+</button>
      <button onClick={() => dispatch({ type: 'decrement' })}>-</button>
    </div>
  );
}
</xmp> 

export default Counter;
      
      </code>
    </div>
  </div>

<p class="text-lg text-gray-700"><strong>useLayoutEffect: </strong>.
Like useEffect, but fires synchronously after the
DOM has been updated but before the browser
has painted the changes.
</p>
<p>useful for animations and layout measurements.</p>
<p>Avoid blocking the UI—use it only for UI
calculations and measurements.</p>
 
<div class="example"> 
<div class="code"> 
      <code>
import React, { useLayoutEffect, useRef } from 'react';<br>

function ExampleComponent() {<br>
  const divRef = useRef(null);<br>

  useLayoutEffect(() => {<br>
    // Adjust the div's width immediately after DOM update<br>
    divRef.current.style.width = '200px';<br>
  }, []);<br>
<xmp> 
  return <div ref={divRef} style="">Resize me</div>;</code>xmp> 
}<br>

export default ExampleComponent;<br>
      
      </code>
    </div>
  </div>

<p class="text-lg text-gray-700"><strong>useId: </strong>.
useId is a Hook that generates unique, stable IDs that
are consistent across re-renders.
</p>
<p>Useful in scenarios involving form elements,
dynamic content, or any situation requiring
guaranteed unique identifiers across re-renders.</p>
 
 
<div class="example"> 
<div class="code"> 
      <code>

      import React, { useId } from 'react';<br>

function ExampleComponent() {<br>
  const id = useId();<br>
<xmp> 
  return (
    <div>
      <label htmlFor={id}>Username</label>
      <input id={id} type="text" placeholder="Enter username" />
    </div>
  );</xmp> 
}<br>

export default ExampleComponent;<br>
      </code>
    </div>
  </div>

<p class="text-lg text-gray-700"><strong>useDeferredValue: </strong>.
Defers updates to prevent UI lag during heavy
computations.
</p>
<p>It’s similar to a debounce function but without a timeout.
It defers the update until React is done processing other
tasks.</p>
 <p>Use it for search bars, filtering, or UI-heavy
components.</p>
 
<div class="example"> 
<div class="code"> 
      <code>
import React, { useState, useDeferredValue } from 'react';

function ExampleComponent() {
  const [input, setInput] = useState('');
  const deferredInput = useDeferredValue(input);

  const handleChange = (e) => {
    setInput(e.target.value);
  };
<xmp> 
  return (
    <div>
      <input
        type="text"
        value={input}
        onChange={handleChange}
        placeholder="Type something..."
      />
      <p>Deferred value: {deferredInput}</p>
    </div>
  );</xmp>
}

export default ExampleComponent; 
      
      </code>
    </div>
  </div>


<p class="text-lg text-gray-700"><strong>useTransition: </strong>.
Allows non-blocking UI updates for better user
experience. It’s pertcularly useful when you need to
update multiple states without rendering immidietly
</p>
 
 
<div class="example"> 
<div class="code"> 
      <code>

      import React, { useState, useTransition } from 'react';<br>

function ExampleComponent() {<br>
  const [input, setInput] = useState('');<br>
  const [items, setItems] = useState([]);<br>
  const [isPending, startTransition] = useTransition();<br>

  const handleChange = (e) => {<br>
    setInput(e.target.value);<br>

    // Mark this state update as a transition (non-urgent)<br>
    startTransition(() => {<br>
      // Simulate a heavy computation or filtering<br>
      const filteredItems = Array(10000)<br>
        .fill()<br>
        .map((_, i) => `Item ${i + 1}`)<br>
        .filter(item => item.toLowerCase().includes(e.target.value.toLowerCase()));<br>
      
      setItems(filteredItems);<br>
    });<br>
  };<br>
<xmp>
  return (
    <div>
      <input
        type="text"
        value={input}
        onChange={handleChange}
        placeholder="Type to filter..."
      />
      {isPending ? (
        <p>Loading...</p>
      ) : (
        <ul>
          {items.map((item, index) => (
            <li key={index}>{item}</li>
          ))}
        </ul>
      )}
    </div>
  ); </xmp>
}

export default ExampleComponent;
      </code>
    </div>
  </div>








  </div>
 




  <div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">1. What is React.js?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">React.js is an open-source JavaScript library used to build interactive user interfaces, especially single-page applications (SPAs).</p>
<p class="mb-3 text-lg leading-8 text-gray-700">React was developed by Meta.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Main features:</p>
<ol class="mb-4 list-decimal space-y-1 pl-6 text-gray-700" type="1">
<li>Component-based architecture.</li>
<li>Virtual DOM.</li>
<li>JSX syntax.</li>
<li>One-way data flow.</li>
<li>Reusable components.</li>
<li>Hooks for state and lifecycle-related logic.</li>
<li>Efficient UI updates.</li>
</ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">2. What is the difference between React and JavaScript?</h2>
    </div>

<ul class="mb-4 list-disc space-y-1 pl-6 text-gray-700">
<li>JavaScript is a programming language.</li>
<li>React is a JavaScript library used to build user interfaces.</li>
<li>JavaScript handles application logic.</li>
<li>React provides a component-based approach to rendering UI.</li>
</ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">3. What is JSX?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">JSX stands for JavaScript XML.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">It allows developers to write HTML-like syntax inside JavaScript.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>function Welcome() {
    const name = &quot;Brijesh&quot;;

    return &lt;h1&gt;Welcome {name}&lt;/h1&gt;;
}</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">JSX is transformed into JavaScript that React can execute.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">4. What is the Virtual DOM?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Virtual DOM is an in-memory representation of the UI.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">When state or props change:</p>
<ol class="mb-4 list-decimal space-y-1 pl-6 text-gray-700" type="1">
<li>React renders a new UI representation.</li>
<li>React compares the previous and next render results.</li>
<li>React calculates the required changes.</li>
<li>React commits necessary updates to the actual DOM.</li>
</ol>
<p class="mb-3 text-lg leading-8 text-gray-700">This process helps React update the UI efficiently.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">5. What is reconciliation in React?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Reconciliation is the process React uses to determine how the UI should change when new rendering output is produced.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">React compares elements and uses element types and keys to determine which components can be preserved, updated, or replaced.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">6. What is the difference between props and state?</h2>
    </div>

<div class="overflow-x-auto"><table class="mb-4 w-full border-collapse text-left text-gray-700">
<thead>
<tr class="header">
<th class="border border-gray-200 bg-gray-50 p-3">Props</th>
<th class="border border-gray-200 bg-gray-50 p-3">State</th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td class="border border-gray-200 p-3">Passed from parent component</td>
<td class="border border-gray-200 p-3">Managed by component or state owner</td>
</tr>
<tr class="even">
<td class="border border-gray-200 p-3">Read-only to receiving component</td>
<td class="border border-gray-200 p-3">Updated through state mechanisms</td>
</tr>
<tr class="odd">
<td class="border border-gray-200 p-3">Used to pass data</td>
<td class="border border-gray-200 p-3">Used to manage changing data</td>
</tr>
<tr class="even">
<td class="border border-gray-200 p-3">Changes when parent provides new values</td>
<td class="border border-gray-200 p-3">Changes through state updates</td>
</tr>
</tbody>
</table></div>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>function User({ name }) {
    return &lt;h2&gt;{name}&lt;/h2&gt;;
}</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Here, <code>name</code> is a prop.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">7. What are React components?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Components are reusable independent pieces of UI.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Two commonly discussed types are:</p>
<ol class="mb-4 list-decimal space-y-1 pl-6 text-gray-700" type="1">
<li>Functional components.</li>
<li>Class components.</li>
</ol>
<p class="mb-3 text-lg leading-8 text-gray-700">Modern React development generally uses functional components with Hooks.</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>function Header() {
    return &lt;h1&gt;My Application&lt;/h1&gt;;
}</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">8. What is the difference between functional and class components?</h2>
    </div>

<div class="overflow-x-auto"><table class="mb-4 w-full border-collapse text-left text-gray-700">
<thead>
<tr class="header">
<th class="border border-gray-200 bg-gray-50 p-3">Functional Component</th>
<th class="border border-gray-200 bg-gray-50 p-3">Class Component</th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td class="border border-gray-200 p-3">JavaScript function</td>
<td class="border border-gray-200 p-3">ES6 class</td>
</tr>
<tr class="even">
<td class="border border-gray-200 p-3">Uses Hooks</td>
<td class="border border-gray-200 p-3">Uses lifecycle methods</td>
</tr>
<tr class="odd">
<td class="border border-gray-200 p-3">No <code>this</code> binding for component state</td>
<td class="border border-gray-200 p-3">Uses <code>this</code></td>
</tr>
<tr class="even">
<td class="border border-gray-200 p-3">Less boilerplate</td>
<td class="border border-gray-200 p-3">More boilerplate</td>
</tr>
<tr class="odd">
<td class="border border-gray-200 p-3">Preferred in modern React</td>
<td class="border border-gray-200 p-3">Common in older projects</td>
</tr>
</tbody>
</table></div>
<h2 id="2-react-hooks--advanced-questions">2. React Hooks – Advanced Questions</h2>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">9. What are React Hooks?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Hooks are functions that allow functional components to use React features such as state, context, refs, and effect-related behavior.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Important Hooks:</p>
<ul class="mb-4 list-disc space-y-1 pl-6 text-gray-700">
<li>useState()</li>
<li>useEffect()</li>
<li>useContext()</li>
<li>useRef()</li>
<li>useMemo()</li>
<li>useCallback()</li>
<li>useReducer()</li>
<li>useLayoutEffect()</li>
<li>useId()</li>
<li>useTransition()</li>
</ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">10. Explain useState().</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">useState is used to manage local component state.</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>import React, { useState } from &quot;react&quot;;

function Counter() {
    const [count, setCount] = useState(0);

    return (
        &lt;&gt;
            &lt;h2&gt;{count}&lt;/h2&gt;

            &lt;button onClick={() =&gt; setCount(prev =&gt; prev + 1)}&gt;
                Increment
            &lt;/button&gt;
        &lt;/&gt;
    );
}</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">When state changes, React schedules a re-render.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">11. Explain useEffect().</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">useEffect is used to synchronize a component with external systems, such as API requests, subscriptions, and browser event listeners.</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>import { useEffect, useState } from &quot;react&quot;;

function Users() {
    const [users, setUsers] = useState([]);

    useEffect(() =&gt; {
        fetch(&quot;/api/users&quot;)
            .then(res =&gt; res.json())
            .then(data =&gt; setUsers(data));
    }, []);

    return &lt;div&gt;{users.length} Users&lt;/div&gt;;
}</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Dependency behavior:</p>
<ul class="mb-4 list-disc space-y-1 pl-6 text-gray-700">
<li>No dependency array: Runs after every committed render.</li>
<li>Empty array <code>[]</code>: Runs after initial mount.</li>
<li><code>[value]</code>: Re-runs when the dependency changes.</li>
</ul>
<p class="mb-3 text-lg leading-8 text-gray-700">React Strict Mode can perform an additional development-only setup and cleanup cycle to help identify incorrect effects.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">12. What is the cleanup function in useEffect()?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Cleanup is used to remove subscriptions, timers, and event listeners or cancel ongoing operations.</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>useEffect(() =&gt; {
    const timer = setInterval(() =&gt; {
        console.log(&quot;Running&quot;);
    }, 1000);

    return () =&gt; {
        clearInterval(timer);
    };
}, []);</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">13. Explain useMemo().</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">useMemo caches the result of a calculation between renders when dependencies have not changed.</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>const total = useMemo(() =&gt; {
    return products.reduce(
        (sum, product) =&gt; sum + product.price,
        0
    );
}, [products]);</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">It is useful for expensive calculations, not for every variable.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">14. Explain useCallback().</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">useCallback caches a function definition between renders.</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>const handleClick = useCallback(() =&gt; {
    console.log(&quot;Button clicked&quot;);
}, []);</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">It can be useful when passing callbacks to memoized child components.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">15. Difference between useMemo and useCallback?</h2>
    </div>

<div class="overflow-x-auto"><table class="mb-4 w-full border-collapse text-left text-gray-700">
<thead>
<tr class="header">
<th class="border border-gray-200 bg-gray-50 p-3">useMemo</th>
<th class="border border-gray-200 bg-gray-50 p-3">useCallback</th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td class="border border-gray-200 p-3">Caches a calculated value</td>
<td class="border border-gray-200 p-3">Caches a function definition</td>
</tr>
<tr class="even">
<td class="border border-gray-200 p-3">Returns calculated result</td>
<td class="border border-gray-200 p-3">Returns function</td>
</tr>
<tr class="odd">
<td class="border border-gray-200 p-3">Useful for expensive calculations</td>
<td class="border border-gray-200 p-3">Useful for stable callbacks</td>
</tr>
</tbody>
</table></div>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">16. Explain useRef().</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">useRef stores a mutable value that persists between renders without triggering a re-render when changed.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">It is also used to access DOM elements.</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>import { useRef } from &quot;react&quot;;

function Search() {
    const inputRef = useRef(null);

    const focusInput = () =&gt; {
        inputRef.current.focus();
    };

    return (
        &lt;&gt;
            &lt;input ref={inputRef} /&gt;
            &lt;button onClick={focusInput}&gt;Focus&lt;/button&gt;
        &lt;/&gt;
    );
}</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">17. What is useReducer()?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">useReducer manages complex component state using a reducer function and dispatched actions.</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>import { useReducer } from &quot;react&quot;;

function reducer(state, action) {
    switch (action.type) {
        case &quot;increment&quot;:
            return { count: state.count + 1 };

        case &quot;decrement&quot;:
            return { count: state.count - 1 };

        default:
            return state;
    }
}

function Counter() {
    const [state, dispatch] = useReducer(reducer, {
        count: 0
    });

    return (
        &lt;&gt;
            &lt;h2&gt;{state.count}&lt;/h2&gt;
            &lt;button onClick={() =&gt; dispatch({ type: &quot;increment&quot; })}&gt;
                Increment
            &lt;/button&gt;
        &lt;/&gt;
    );
}</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">18. What are custom Hooks?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Custom Hooks are reusable JavaScript functions whose names begin with <code>use</code> and which can use other React Hooks.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>import { useState, useEffect } from &quot;react&quot;;

function useUsers() {
    const [users, setUsers] = useState([]);

    useEffect(() =&gt; {
        fetch(&quot;/api/users&quot;)
            .then(response =&gt; response.json())
            .then(data =&gt; setUsers(data));
    }, []);

    return users;
}</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Custom Hooks help share stateful logic between components.</p>
<h2 id="3-react-component-lifecycle-and-rendering">3. React Component Lifecycle and Rendering</h2>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">19. What is the React component lifecycle?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Component lifecycle describes the different stages of a component.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">In class components, there are three main phases:</p>
<ol class="mb-4 list-decimal space-y-1 pl-6 text-gray-700" type="1">
<li>Mounting – Component is created and inserted into the DOM.</li>
<li>Updating – Component updates when props or state change.</li>
<li>Unmounting – Component is removed from the DOM.</li>
</ol>
<p class="mb-3 text-lg leading-8 text-gray-700">Important class lifecycle methods:</p>
<div class="overflow-x-auto"><table class="mb-4 w-full border-collapse text-left text-gray-700">
<thead>
<tr class="header">
<th class="border border-gray-200 bg-gray-50 p-3">Method</th>
<th class="border border-gray-200 bg-gray-50 p-3">Purpose</th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td class="border border-gray-200 p-3">constructor()</td>
<td class="border border-gray-200 p-3">Initializes state</td>
</tr>
<tr class="even">
<td class="border border-gray-200 p-3">componentDidMount()</td>
<td class="border border-gray-200 p-3">Runs after mounting</td>
</tr>
<tr class="odd">
<td class="border border-gray-200 p-3">componentDidUpdate()</td>
<td class="border border-gray-200 p-3">Runs after updates</td>
</tr>
<tr class="even">
<td class="border border-gray-200 p-3">componentWillUnmount()</td>
<td class="border border-gray-200 p-3">Performs cleanup</td>
</tr>
</tbody>
</table></div>
<p class="mb-3 text-lg leading-8 text-gray-700">In functional components, Hooks such as <code>useEffect</code> are used to synchronize with external systems.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">20. What causes a React component to re-render?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">A component can re-render when:</p>
<ul class="mb-4 list-disc space-y-1 pl-6 text-gray-700">
<li>Its state changes.</li>
<li>Its parent re-renders.</li>
<li>Its consumed context value changes.</li>
<li>An external store subscription triggers an update.</li>
</ul>
<p class="mb-3 text-lg leading-8 text-gray-700">A re-render does not necessarily mean the actual DOM will change.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">21. What is React.memo()?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">React.memo is a higher-order component that can skip rendering a component when its props are unchanged according to a comparison.</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>import React from &quot;react&quot;;

const User = React.memo(function User({ name }) {
    console.log(&quot;User rendered&quot;);

    return &lt;h2&gt;{name}&lt;/h2&gt;;
});

export default User;</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">It is useful when a component renders frequently with the same props and rendering is expensive.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">22. What is the difference between React.memo, useMemo, and useCallback?</h2>
    </div>

<div class="overflow-x-auto"><table class="mb-4 w-full border-collapse text-left text-gray-700">
<thead>
<tr class="header">
<th class="border border-gray-200 bg-gray-50 p-3">Feature</th>
<th class="border border-gray-200 bg-gray-50 p-3">Purpose</th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td class="border border-gray-200 p-3">React.memo</td>
<td class="border border-gray-200 p-3">Memoizes a component</td>
</tr>
<tr class="even">
<td class="border border-gray-200 p-3">useMemo</td>
<td class="border border-gray-200 p-3">Memoizes a calculated value</td>
</tr>
<tr class="odd">
<td class="border border-gray-200 p-3">useCallback</td>
<td class="border border-gray-200 p-3">Memoizes a function</td>
</tr>
</tbody>
</table></div>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">23. What are keys in React?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Keys are unique identifiers used when rendering lists.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">They help React identify which items have been added, removed, or reordered.</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>const users = [
    { id: 1, name: &quot;Brijesh&quot; },
    { id: 2, name: &quot;Rahul&quot; }
];

function UserList() {
    return (
        &lt;ul&gt;
            {users.map(user =&gt; (
                &lt;li key={user.id}&gt;
                    {user.name}
                &lt;/li&gt;
            ))}
        &lt;/ul&gt;
    );
}</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Always prefer stable database IDs instead of array indexes when list items can change order or be inserted or deleted.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">24. What is conditional rendering?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Conditional rendering means displaying different UI elements based on conditions.</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>function Dashboard({ isLoggedIn }) {
    return (
        &lt;div&gt;
            {isLoggedIn
                ? &lt;h2&gt;Welcome User&lt;/h2&gt;
                : &lt;h2&gt;Please Login&lt;/h2&gt;
            }
        &lt;/div&gt;
    );
}</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">25. What are controlled and uncontrolled components?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Controlled components:</p>
<ul class="mb-4 list-disc space-y-1 pl-6 text-gray-700">
<li>Form values are managed by React state.</li>
<li>Input changes are handled through event handlers.</li>
<li>React controls the displayed value.</li>
</ul>
<p class="mb-3 text-lg leading-8 text-gray-700">Uncontrolled components:</p>
<ul class="mb-4 list-disc space-y-1 pl-6 text-gray-700">
<li>Form values are maintained by the DOM.</li>
<li>Values are accessed using refs.</li>
</ul>
<p class="mb-3 text-lg leading-8 text-gray-700">Controlled example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>function Login() {
    const [email, setEmail] = useState(&quot;&quot;);

    return (
        &lt;input
            value={email}
            onChange={e =&gt; setEmail(e.target.value)}
        /&gt;
    );
}</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Uncontrolled example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>function Login() {
    const emailRef = useRef(null);

    function submit() {
        console.log(emailRef.current.value);
    }

    return (
        &lt;&gt;
            &lt;input ref={emailRef} /&gt;
            &lt;button onClick={submit}&gt;Submit&lt;/button&gt;
        &lt;/&gt;
    );
}</code></pre>
<h2 id="4-state-management-in-react">4. State Management in React</h2>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">26. What is state management in React?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">State management means managing and sharing application data across components.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Common approaches:</p>
<ol class="mb-4 list-decimal space-y-1 pl-6 text-gray-700" type="1">
<li>useState – Local component state.</li>
<li>useReducer – Complex component state.</li>
<li>Context API – Share state across components.</li>
<li>Redux Toolkit – Centralized application state.</li>
<li>Zustand – Lightweight global state management.</li>
<li>TanStack Query – Server-state fetching, caching, and synchronization.</li>
</ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">27. What is Context API?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Context API allows data to be shared between components without passing props through every intermediate component.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">This solves the prop drilling problem.</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>import { createContext, useContext } from &quot;react&quot;;

const UserContext = createContext(null);

function Parent() {
    return (
        &lt;UserContext.Provider value=&quot;Brijesh&quot;&gt;
            &lt;Child /&gt;
        &lt;/UserContext.Provider&gt;
    );
}

function Child() {
    const user = useContext(UserContext);

    return &lt;h2&gt;{user}&lt;/h2&gt;;
}</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">28. What is prop drilling?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Prop drilling means passing data through multiple intermediate components to reach a deeply nested child.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Solutions include:</p>
<ul class="mb-4 list-disc space-y-1 pl-6 text-gray-700">
<li>Context API.</li>
<li>Redux Toolkit.</li>
<li>Component composition.</li>
<li>Other state management libraries.</li>
</ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">29. What is Redux?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Redux is a predictable state management library used to manage shared application state.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Important concepts:</p>
<ol class="mb-4 list-decimal space-y-1 pl-6 text-gray-700" type="1">
<li>Store – Holds application state.</li>
<li>Action – Describes what happened.</li>
<li>Reducer – Calculates the next state.</li>
<li>Dispatch – Sends an action.</li>
<li>Selector – Reads data from the store.</li>
</ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">30. What is Redux Toolkit?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Redux Toolkit (RTK) is the recommended approach for writing Redux logic.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">It reduces boilerplate and provides utilities such as:</p>
<ul class="mb-4 list-disc space-y-1 pl-6 text-gray-700">
<li>configureStore()</li>
<li>createSlice()</li>
<li>createAsyncThunk()</li>
<li>createSelector()</li>
</ul>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>import { createSlice } from &quot;@reduxjs/toolkit&quot;;

const counterSlice = createSlice({
    name: &quot;counter&quot;,

    initialState: {
        count: 0
    },

    reducers: {
        increment: state =&gt; {
            state.count += 1;
        },

        decrement: state =&gt; {
            state.count -= 1;
        }
    }
});

export const { increment, decrement } =
    counterSlice.actions;

export default counterSlice.reducer;</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Redux Toolkit uses Immer internally to allow this convenient mutation-style syntax while producing immutable state updates.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">31. Difference between Context API and Redux Toolkit?</h2>
    </div>

<div class="overflow-x-auto"><table class="mb-4 w-full border-collapse text-left text-gray-700">
<thead>
<tr class="header">
<th class="border border-gray-200 bg-gray-50 p-3">Context API</th>
<th class="border border-gray-200 bg-gray-50 p-3">Redux Toolkit</th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td class="border border-gray-200 p-3">Built into React</td>
<td class="border border-gray-200 p-3">External library</td>
</tr>
<tr class="even">
<td class="border border-gray-200 p-3">Suitable for shared context values</td>
<td class="border border-gray-200 p-3">Suitable for complex global state</td>
</tr>
<tr class="odd">
<td class="border border-gray-200 p-3">Less setup</td>
<td class="border border-gray-200 p-3">More structured setup</td>
</tr>
<tr class="even">
<td class="border border-gray-200 p-3">No built-in Redux-style middleware</td>
<td class="border border-gray-200 p-3">Middleware support</td>
</tr>
<tr class="odd">
<td class="border border-gray-200 p-3">No built-in selector system like Redux</td>
<td class="border border-gray-200 p-3">Selectors and optimized subscriptions</td>
</tr>
</tbody>
</table></div>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">32. What is server state vs client state?</h2>
    </div>

<ul class="mb-4 list-disc space-y-1 pl-6 text-gray-700">
<li>Server state: Data coming from backend APIs, such as users, products, orders.</li>
<li>Client state: UI-related data, such as modal visibility, selected tab, or temporary form state.</li>
</ul>
<p class="mb-3 text-lg leading-8 text-gray-700">TanStack Query is useful for server-state management, while Redux or Context can manage shared client state.</p>
<h2 id="5-react-router-and-navigation">5. React Router and Navigation</h2>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">33. What is React Router?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">React Router is a routing library used to navigate between pages or views in React applications without full-page reloads.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>import {
    BrowserRouter,
    Routes,
    Route
} from &quot;react-router-dom&quot;;

function App() {
    return (
        &lt;BrowserRouter&gt;
            &lt;Routes&gt;
                &lt;Route path=&quot;/&quot; element={&lt;Home /&gt;} /&gt;
                &lt;Route path=&quot;/users&quot; element={&lt;Users /&gt;} /&gt;
                &lt;Route path=&quot;/about&quot; element={&lt;About /&gt;} /&gt;
            &lt;/Routes&gt;
        &lt;/BrowserRouter&gt;
    );
}</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">34. What is the difference between BrowserRouter and HashRouter?</h2>
    </div>

<div class="overflow-x-auto"><table class="mb-4 w-full border-collapse text-left text-gray-700">
<thead>
<tr class="header">
<th class="border border-gray-200 bg-gray-50 p-3">BrowserRouter</th>
<th class="border border-gray-200 bg-gray-50 p-3">HashRouter</th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td class="border border-gray-200 p-3">Uses browser History API</td>
<td class="border border-gray-200 p-3">Uses URL hash</td>
</tr>
<tr class="even">
<td class="border border-gray-200 p-3">Clean URLs</td>
<td class="border border-gray-200 p-3">URLs contain #</td>
</tr>
<tr class="odd">
<td class="border border-gray-200 p-3">Requires server fallback configuration for SPA routes</td>
<td class="border border-gray-200 p-3">Does not require server fallback for hash-based routes</td>
</tr>
<tr class="even">
<td class="border border-gray-200 p-3">Commonly used in production SPAs</td>
<td class="border border-gray-200 p-3">Useful where server routing cannot be configured</td>
</tr>
</tbody>
</table></div>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">35. How do you implement protected routes?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Protected routes prevent unauthorized users from accessing restricted pages.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>import { Navigate, Outlet } from &quot;react-router-dom&quot;;

function ProtectedRoute() {
    const isAuthenticated = Boolean(
        localStorage.getItem(&quot;token&quot;)
    );

    return isAuthenticated
        ? &lt;Outlet /&gt;
        : &lt;Navigate to=&quot;/login&quot; replace /&gt;;
}</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Important: Frontend route protection is only for user experience. The backend must independently authenticate and authorize every protected API request.</p>
<h2 id="6-react-api-integration-with-php-and-laravel">6. React API Integration with PHP and Laravel</h2>
<p class="mb-3 text-lg leading-8 text-gray-700">This section is particularly important for Full Stack PHP Developer interviews.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">36. How do you integrate React.js with Laravel?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">I use React as the frontend and Laravel as the backend.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Typical architecture:</p>
<p class="mb-3 text-lg leading-8 text-gray-700">React.js Frontend</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Components · Hooks · Forms · Router</p>
<p class="mb-3 text-lg leading-8 text-gray-700">REST API / JSON</p>
<p class="mb-3 text-lg leading-8 text-gray-700">GET · POST · PUT/PATCH · DELETE</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Laravel Backend</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Routes · Middleware · Controllers · Validation</p>
<p class="mb-3 text-lg leading-8 text-gray-700">MySQL Database</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Models · Eloquent · Relationships · Transactions</p>
<p class="mb-3 text-lg leading-8 text-gray-700">The workflow:</p>
<ol class="mb-4 list-decimal space-y-1 pl-6 text-gray-700" type="1">
<li>React sends an HTTP request.</li>
<li>Laravel receives the API request.</li>
<li>Middleware checks authentication and permissions.</li>
<li>Controller processes the business logic.</li>
<li>Eloquent communicates with MySQL.</li>
<li>Laravel returns JSON.</li>
<li>React updates the UI.</li>
</ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">37. How do you call a Laravel API from React?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">I generally use Axios or Fetch API.</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>import axios from &quot;axios&quot;;
import { useEffect, useState } from &quot;react&quot;;

function Users() {
    const [users, setUsers] = useState([]);

    useEffect(() =&gt; {
        axios.get(&quot;/api/users&quot;)
            .then(response =&gt; {
                setUsers(response.data.data ?? response.data);
            })
            .catch(error =&gt; {
                console.error(error);
            });
    }, []);

    return (
        &lt;div&gt;
            {users.map(user =&gt; (
                &lt;p key={user.id}&gt;{user.name}&lt;/p&gt;
            ))}
        &lt;/div&gt;
    );
}</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">38. Difference between Axios and Fetch API?</h2>
    </div>

<div class="overflow-x-auto"><table class="mb-4 w-full border-collapse text-left text-gray-700">
<thead>
<tr class="header">
<th class="border border-gray-200 bg-gray-50 p-3">Axios</th>
<th class="border border-gray-200 bg-gray-50 p-3">Fetch</th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td class="border border-gray-200 p-3">External library</td>
<td class="border border-gray-200 p-3">Browser API</td>
</tr>
<tr class="even">
<td class="border border-gray-200 p-3">Automatically transforms JSON response data</td>
<td class="border border-gray-200 p-3">Requires response.json()</td>
</tr>
<tr class="odd">
<td class="border border-gray-200 p-3">Supports request interceptors</td>
<td class="border border-gray-200 p-3">No built-in interceptor mechanism</td>
</tr>
<tr class="even">
<td class="border border-gray-200 p-3">Rejects on non-2xx HTTP status</td>
<td class="border border-gray-200 p-3">Does not reject just because of HTTP error status</td>
</tr>
<tr class="odd">
<td class="border border-gray-200 p-3">Supports cancellation</td>
<td class="border border-gray-200 p-3">Supports AbortController</td>
</tr>
</tbody>
</table></div>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">39. How do you implement CRUD operations in React?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">CRUD means:</p>
<ul class="mb-4 list-disc space-y-1 pl-6 text-gray-700">
<li>Create – POST request.</li>
<li>Read – GET request.</li>
<li>Update – PUT or PATCH request.</li>
<li>Delete – DELETE request.</li>
</ul>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>import axios from &quot;axios&quot;;

const API = &quot;/api/users&quot;;

// Create
const createUser = data =&gt;
    axios.post(API, data);

// Read
const getUsers = () =&gt;
    axios.get(API);

// Update
const updateUser = (id, data) =&gt;
    axios.put(`${API}/${id}`, data);

// Delete
const deleteUser = id =&gt;
    axios.delete(`${API}/${id}`);</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">40. How do you handle API errors in React?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">I use try/catch with async/await, maintain loading and error states, and display meaningful messages to users.</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>async function getUsers() {
    try {
        setLoading(true);
        setError(&quot;&quot;);

        const response = await axios.get(&quot;/api/users&quot;);

        setUsers(response.data);

    } catch (error) {
        setError(
            error.response?.data?.message ||
            &quot;Something went wrong&quot;
        );
    } finally {
        setLoading(false);
    }
}</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">41. How do you implement authentication in React with Laravel?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">My approach:</p>
<ol class="mb-4 list-decimal space-y-1 pl-6 text-gray-700" type="1">
<li>User enters login credentials.</li>
<li>React sends credentials to Laravel.</li>
<li>Laravel validates the credentials.</li>
<li>Laravel establishes an authenticated session or issues an appropriate token.</li>
<li>React maintains the authentication state.</li>
<li>Protected API requests use the configured authentication mechanism.</li>
<li>Laravel validates authentication and authorization on every protected request.</li>
</ol>
<p class="mb-3 text-lg leading-8 text-gray-700">For first-party React and Laravel applications, Laravel Sanctum with cookie-based SPA authentication is often a suitable choice.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">42. What is CORS in React and Laravel?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">CORS controls whether the browser allows a frontend application to access APIs hosted on another origin.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">In Laravel, CORS settings can be configured to allow specific frontend origins, HTTP methods, and headers.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">For cookie-based authentication, credential settings and allowed origins must be configured correctly. Wildcard origins cannot be used with credentialed requests.</p>
<h2 id="7-react-performance-optimization">7. React Performance Optimization</h2>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">43. How do you optimize a large React application?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">My approach includes:</p>
<ol class="mb-4 list-decimal space-y-1 pl-6 text-gray-700" type="1">
<li>Use React.memo for suitable components.</li>
<li>Use useMemo for expensive calculations.</li>
<li>Use useCallback for stable callback references where useful.</li>
<li>Implement lazy loading.</li>
<li>Use code splitting.</li>
<li>Avoid unnecessary state updates.</li>
<li>Use pagination for large datasets.</li>
<li>Optimize API requests.</li>
<li>Use virtualization for large lists.</li>
<li>Analyze performance using React Developer Tools.</li>
</ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">44. What is lazy loading in React?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Lazy loading means loading a component only when it is required.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">React provides <code>React.lazy()</code> and <code>Suspense</code>.</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>import React, { Suspense, lazy } from &quot;react&quot;;

const Dashboard = lazy(() =&gt; import(&quot;./Dashboard&quot;));

function App() {
    return (
        &lt;Suspense fallback={&lt;h2&gt;Loading...&lt;/h2&gt;}&gt;
            &lt;Dashboard /&gt;
        &lt;/Suspense&gt;
    );
}</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">45. What is code splitting in React?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Code splitting divides a large application into smaller JavaScript bundles.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">These bundles can be loaded only when required, reducing initial loading time.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Common techniques:</p>
<ul class="mb-4 list-disc space-y-1 pl-6 text-gray-700">
<li>React.lazy().</li>
<li>Dynamic import().</li>
<li>Route-based splitting.</li>
<li>Build-tool configuration.</li>
</ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">46. What is list virtualization?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">List virtualization renders only the visible items instead of rendering thousands of elements simultaneously.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Libraries such as <code>react-window</code> can help with large lists.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Example use cases:</p>
<ul class="mb-4 list-disc space-y-1 pl-6 text-gray-700">
<li>Employee records.</li>
<li>Product catalogs.</li>
<li>Transaction history.</li>
<li>Large admin dashboards.</li>
</ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">47. What is batching in React?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Batching means grouping multiple state updates into fewer rendering operations.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Modern React supports automatic batching in many asynchronous contexts.</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>function updateData() {
    setName(&quot;Brijesh&quot;);
    setAge(30);
    setStatus(&quot;Active&quot;);
}</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">React can batch these updates instead of rendering separately for every update.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">48. What is React Profiler?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">React Profiler is a development tool used to measure component rendering performance.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">It helps identify:</p>
<ul class="mb-4 list-disc space-y-1 pl-6 text-gray-700">
<li>Frequently rendering components.</li>
<li>Slow rendering components.</li>
<li>Unnecessary re-renders.</li>
<li>Performance bottlenecks.</li>
</ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">49. What is the difference between CSR, SSR, and SSG?</h2>
    </div>

<div class="overflow-x-auto"><table class="mb-4 w-full border-collapse text-left text-gray-700">
<thead>
<tr class="header">
<th class="border border-gray-200 bg-gray-50 p-3">Rendering</th>
<th class="border border-gray-200 bg-gray-50 p-3">Meaning</th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td class="border border-gray-200 p-3">CSR</td>
<td class="border border-gray-200 p-3">Client-Side Rendering</td>
</tr>
<tr class="even">
<td class="border border-gray-200 p-3">SSR</td>
<td class="border border-gray-200 p-3">Server-Side Rendering</td>
</tr>
<tr class="odd">
<td class="border border-gray-200 p-3">SSG</td>
<td class="border border-gray-200 p-3">Static Site Generation</td>
</tr>
</tbody>
</table></div>
<ul class="mb-4 list-disc space-y-1 pl-6 text-gray-700">
<li>CSR: Browser JavaScript renders the UI.</li>
<li>SSR: Server generates HTML for a request.</li>
<li>SSG: HTML is generated ahead of time, usually during build.</li>
</ul>
<p class="mb-3 text-lg leading-8 text-gray-700">Next.js supports different rendering strategies.</p>
<h2 id="8-advanced-react-architecture">8. Advanced React Architecture</h2>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">50. What is an Error Boundary in React?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Error Boundaries catch rendering errors in their descendant component tree and display a fallback UI instead of allowing the affected part of the application to crash.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">They are generally implemented using class components.</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>import React from &quot;react&quot;;

class ErrorBoundary extends React.Component {
    constructor(props) {
        super(props);

        this.state = {
            hasError: false
        };
    }

    static getDerivedStateFromError() {
        return {
            hasError: true
        };
    }

    componentDidCatch(error, info) {
        console.error(error, info);
    }

    render() {
        if (this.state.hasError) {
            return &lt;h2&gt;Something went wrong.&lt;/h2&gt;;
        }

        return this.props.children;
    }
}

export default ErrorBoundary;</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">51. What is React Suspense?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Suspense allows a component to display fallback UI while a supported child operation is waiting, such as a lazy-loaded component.</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>&lt;Suspense fallback={&lt;div&gt;Loading...&lt;/div&gt;}&gt;
    &lt;Dashboard /&gt;
&lt;/Suspense&gt;</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">52. What is Higher-Order Component (HOC)?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">A Higher-Order Component is a function that takes a component and returns an enhanced component.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">It is a technique for reusing component logic.</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>function withLoading(Component) {
    return function EnhancedComponent({ loading, ...props }) {
        if (loading) {
            return &lt;h2&gt;Loading...&lt;/h2&gt;;
        }

        return &lt;Component {...props} /&gt;;
    };
}</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">53. What is the difference between HOC and Custom Hooks?</h2>
    </div>

<div class="overflow-x-auto"><table class="mb-4 w-full border-collapse text-left text-gray-700">
<thead>
<tr class="header">
<th class="border border-gray-200 bg-gray-50 p-3">HOC</th>
<th class="border border-gray-200 bg-gray-50 p-3">Custom Hook</th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td class="border border-gray-200 p-3">Wraps a component</td>
<td class="border border-gray-200 p-3">Reuses stateful logic</td>
</tr>
<tr class="even">
<td class="border border-gray-200 p-3">Returns an enhanced component</td>
<td class="border border-gray-200 p-3">Returns values or functions</td>
</tr>
<tr class="odd">
<td class="border border-gray-200 p-3">Can add component-level behavior</td>
<td class="border border-gray-200 p-3">Shares logic without wrapping UI</td>
</tr>
<tr class="even">
<td class="border border-gray-200 p-3">Can create wrapper nesting</td>
<td class="border border-gray-200 p-3">Usually simpler composition</td>
</tr>
</tbody>
</table></div>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">54. What is React Portal?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">React Portal allows rendering a component into a DOM node outside its parent DOM hierarchy.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Common use cases:</p>
<ul class="mb-4 list-disc space-y-1 pl-6 text-gray-700">
<li>Modals.</li>
<li>Popup windows.</li>
<li>Tooltips.</li>
<li>Notification systems.</li>
</ul>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>import { createPortal } from &quot;react-dom&quot;;

function Modal() {
    return createPortal(
        &lt;div className=&quot;modal&quot;&gt;
            Hello World
        &lt;/div&gt;,
        document.getElementById(&quot;modal-root&quot;)
    );
}</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">55. What is forwardRef?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700"><code>forwardRef</code> is a React API used to pass a ref through a component to a child element.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">It is useful when a parent needs access to a child DOM element or exposed imperative functionality.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">In React 19, ref can also be passed as a regular prop, so <code>forwardRef</code> is no longer necessary for new React 19 components.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">56. What is the difference between React Server Components and Client Components?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">React Server Components are rendered on the server and allow server-side data access without shipping their component implementation as client JavaScript.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Client Components support browser interactivity, event handlers, and client-side Hooks.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">In frameworks such as Next.js App Router, Client Components are marked using <code>"use client"</code>.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">57. What is hydration in React?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Hydration is the process of attaching React's event handling and interactive behavior to HTML that was already generated on the server.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">It allows server-rendered HTML to become interactive in the browser.</p>
<h2 id="9-react-security-interview-questions">9. React Security Interview Questions</h2>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">58. How do you prevent XSS attacks in React?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">My approach includes:</p>
<ol class="mb-4 list-decimal space-y-1 pl-6 text-gray-700" type="1">
<li>Avoid untrusted HTML using dangerouslySetInnerHTML.</li>
<li>Sanitize HTML when HTML rendering is necessary.</li>
<li>Validate user inputs.</li>
<li>Use secure authentication.</li>
<li>Implement Content Security Policy.</li>
<li>Avoid executing untrusted JavaScript.</li>
<li>Keep dependencies updated.</li>
</ol>
<p class="mb-3 text-lg leading-8 text-gray-700">React escapes text rendered through normal JSX expressions by default, but developers must still handle unsafe HTML and URLs carefully.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">59. How do you secure API communication between React and Laravel?</h2>
    </div>

<ul class="mb-4 list-disc space-y-1 pl-6 text-gray-700">
<li>Use HTTPS.</li>
<li>Authenticate every protected API request.</li>
<li>Validate requests on the Laravel backend.</li>
<li>Implement authorization policies.</li>
<li>Configure CORS correctly.</li>
<li>Use secure cookies where appropriate.</li>
<li>Apply CSRF protection for cookie-authenticated requests.</li>
<li>Avoid exposing API secrets in frontend code.</li>
</ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">60. Can we store authentication tokens in localStorage?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Technically yes, but it is not ideal for sensitive long-lived tokens because JavaScript can access localStorage.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">For applications using Laravel Sanctum, cookie-based SPA authentication with HttpOnly and Secure cookies is often a better approach.</p>
<h2 id="10-react-testing-and-deployment">10. React Testing and Deployment</h2>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">61. How do you test React applications?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">I use different levels of testing:</p>
<ol class="mb-4 list-decimal space-y-1 pl-6 text-gray-700" type="1">
<li>Unit testing – Tests individual functions and components.</li>
<li>Integration testing – Tests interactions between components and services.</li>
<li>End-to-end testing – Tests complete user workflows.</li>
</ol>
<p class="mb-3 text-lg leading-8 text-gray-700">Common tools:</p>
<ul class="mb-4 list-disc space-y-1 pl-6 text-gray-700">
<li>Jest or Vitest.</li>
<li>React Testing Library.</li>
<li>Playwright.</li>
<li>Cypress.</li>
</ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">62. What is React Testing Library?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">React Testing Library is a testing library that helps test components from the user's perspective.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">Example:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>import { render, screen } from &quot;@testing-library/react&quot;;

function Welcome() {
    return &lt;h1&gt;Welcome Brijesh&lt;/h1&gt;;
}

test(&quot;displays welcome message&quot;, () =&gt; {
    render(&lt;Welcome /&gt;);

    expect(
        screen.getByText(&quot;Welcome Brijesh&quot;)
    ).toBeInTheDocument();
});</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">63. How do you deploy a React application?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">My deployment process:</p>
<ol class="mb-4 list-decimal space-y-1 pl-6 text-gray-700" type="1">
<li>Complete development.</li>
<li>Run unit and integration tests.</li>
<li>Build the production application.</li>
<li>Configure environment variables.</li>
<li>Upload or deploy build artifacts.</li>
<li>Configure web server routing.</li>
<li>Configure backend API endpoints.</li>
<li>Enable HTTPS.</li>
<li>Verify application functionality.</li>
<li>Monitor production errors.</li>
</ol>
<p class="mb-3 text-lg leading-8 text-gray-700">For a Vite-based React application:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>npm install
npm run build</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">The production build is generally generated in the <code>dist</code> directory.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">64. What is the difference between development and production builds?</h2>
    </div>

<div class="overflow-x-auto"><table class="mb-4 w-full border-collapse text-left text-gray-700">
<thead>
<tr class="header">
<th class="border border-gray-200 bg-gray-50 p-3">Development</th>
<th class="border border-gray-200 bg-gray-50 p-3">Production</th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td class="border border-gray-200 p-3">Debugging enabled</td>
<td class="border border-gray-200 p-3">Optimized output</td>
</tr>
<tr class="even">
<td class="border border-gray-200 p-3">More diagnostic messages</td>
<td class="border border-gray-200 p-3">Reduced diagnostics</td>
</tr>
<tr class="odd">
<td class="border border-gray-200 p-3">Faster development workflow</td>
<td class="border border-gray-200 p-3">Optimized loading</td>
</tr>
<tr class="even">
<td class="border border-gray-200 p-3">Source maps may be enabled</td>
<td class="border border-gray-200 p-3">Source maps configurable</td>
</tr>
<tr class="odd">
<td class="border border-gray-200 p-3">Development server</td>
<td class="border border-gray-200 p-3">Production deployment</td>
</tr>
</tbody>
</table></div>
<h2 id="11-practical-reactjs-coding-interview-questions">11. Practical React.js Coding Interview Questions</h2>
<p class="mb-3 text-lg leading-8 text-gray-700">These are important for senior-level technical rounds.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">65. How do you remove duplicate values from an array?</h2>
    </div>

<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>const numbers = [1, 2, 3, 2, 4, 1];

const unique = [...new Set(numbers)];

console.log(unique);

// [1, 2, 3, 4]</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">66. How do you find the second-largest number?</h2>
    </div>

<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>const numbers = [10, 50, 20, 90, 30];

const unique = [...new Set(numbers)];

unique.sort((a, b) =&gt; b - a);

console.log(unique[1]); // 50</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">67. How do you search and filter products in React?</h2>
    </div>

<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>import { useState } from &quot;react&quot;;

function Products() {
    const [search, setSearch] = useState(&quot;&quot;);

    const products = [
        &quot;Laptop&quot;,
        &quot;Mobile&quot;,
        &quot;Keyboard&quot;,
        &quot;Mouse&quot;
    ];

    const filtered = products.filter(product =&gt;
        product.toLowerCase().includes(search.toLowerCase())
    );

    return (
        &lt;&gt;
            &lt;input
                value={search}
                onChange={e =&gt; setSearch(e.target.value)}
                placeholder=&quot;Search product&quot;
            /&gt;

            {filtered.map(product =&gt; (
                &lt;p key={product}&gt;{product}&lt;/p&gt;
            ))}
        &lt;/&gt;
    );
}</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">68. How do you implement pagination in React?</h2>
    </div>

<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>import { useState } from &quot;react&quot;;

function Pagination() {
    const [page, setPage] = useState(1);

    const data = Array.from(
        { length: 100 },
        (_, i) =&gt; `User ${i + 1}`
    );

    const limit = 10;

    const start = (page - 1) * limit;

    const currentData = data.slice(
        start,
        start + limit
    );

    return (
        &lt;&gt;
            {currentData.map(item =&gt; (
                &lt;p key={item}&gt;{item}&lt;/p&gt;
            ))}

            &lt;button
                disabled={page === 1}
                onClick={() =&gt; setPage(p =&gt; p - 1)}
            &gt;
                Previous
            &lt;/button&gt;

            &lt;span&gt; Page {page} &lt;/span&gt;

            &lt;button
                disabled={page === 10}
                onClick={() =&gt; setPage(p =&gt; p + 1)}
            &gt;
                Next
            &lt;/button&gt;
        &lt;/&gt;
    );
}</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">In production applications with large datasets, I prefer server-side pagination through Laravel APIs.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">69. How do you prevent unnecessary API calls when searching?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">Use debouncing.</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>import { useEffect, useState } from &quot;react&quot;;

function SearchUsers() {
    const [search, setSearch] = useState(&quot;&quot;);

    useEffect(() =&gt; {
        if (!search.trim()) return;

        const timer = setTimeout(() =&gt; {
            fetch(`/api/users?search=${encodeURIComponent(search)}`);
        }, 500);

        return () =&gt; clearTimeout(timer);

    }, [search]);

    return (
        &lt;input
            value={search}
            onChange={e =&gt; setSearch(e.target.value)}
            placeholder=&quot;Search users&quot;
        /&gt;
    );
}</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">70. How do you create a reusable custom API Hook?</h2>
    </div>

<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>import { useEffect, useState } from &quot;react&quot;;

function useFetch(url) {
    const [data, setData] = useState(null);
    const [loading, setLoading] = useState(true);
    const [error, setError] = useState(null);

    useEffect(() =&gt; {
        const controller = new AbortController();

        async function fetchData() {
            try {
                setLoading(true);
                setError(null);

                const response = await fetch(url, {
                    signal: controller.signal
                });

                if (!response.ok) {
                    throw new Error(&quot;API request failed&quot;);
                }

                const result = await response.json();

                setData(result);

            } catch (err) {
                if (err.name !== &quot;AbortError&quot;) {
                    setError(err.message);
                }
            } finally {
                if (!controller.signal.aborted) {
                    setLoading(false);
                }
            }
        }

        fetchData();

        return () =&gt; controller.abort();

    }, [url]);

    return { data, loading, error };
}

export default useFetch;</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Usage:</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>function Users() {
    const { data, loading, error } =
        useFetch(&quot;/api/users&quot;);

    if (loading) return &lt;p&gt;Loading...&lt;/p&gt;;

    if (error) return &lt;p&gt;{error}&lt;/p&gt;;

    return &lt;pre&gt;{JSON.stringify(data, null, 2)}&lt;/pre&gt;;
}</code></pre>
<h2 id="12-scenario-based-react-interview-questions">12. Scenario-Based React Interview Questions</h2>
<p class="mb-3 text-lg leading-8 text-gray-700">These questions are particularly important for senior developers and technical leads.</p>
<div class="overflow-x-auto"><table class="mb-4 w-full border-collapse text-left text-gray-700">
<thead>
<tr class="header">
<th class="border border-gray-200 bg-gray-50 p-3">Interview question</th>
<th class="border border-gray-200 bg-gray-50 p-3">Strong answer</th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td class="border border-gray-200 p-3">A component renders multiple times. How do you optimize it?</td>
<td class="border border-gray-200 p-3">Analyze rendering with React Profiler, check state ownership, props, context and memoization.</td>
</tr>
<tr class="even">
<td class="border border-gray-200 p-3">API is returning duplicate records.</td>
<td class="border border-gray-200 p-3">Check backend pagination, request duplication, state updates and API response handling.</td>
</tr>
<tr class="odd">
<td class="border border-gray-200 p-3">React application is slow.</td>
<td class="border border-gray-200 p-3">Analyze bundle size, rendering, network requests and expensive calculations.</td>
</tr>
<tr class="even">
<td class="border border-gray-200 p-3">How do you handle 100,000 records?</td>
<td class="border border-gray-200 p-3">Server-side pagination, filtering and list virtualization.</td>
</tr>
<tr class="odd">
<td class="border border-gray-200 p-3">How do you manage multiple developers working on the same React module?</td>
<td class="border border-gray-200 p-3">Component ownership, feature branches, pull requests and code reviews.</td>
</tr>
<tr class="even">
<td class="border border-gray-200 p-3">How do you manage global authentication?</td>
<td class="border border-gray-200 p-3">Context or Redux for auth UI state, secure session/token handling and backend authorization.</td>
</tr>
<tr class="odd">
<td class="border border-gray-200 p-3">How do you prevent duplicate form submissions?</td>
<td class="border border-gray-200 p-3">Loading state, disabled submit button and backend idempotency.</td>
</tr>
<tr class="even">
<td class="border border-gray-200 p-3">How do you handle production errors?</td>
<td class="border border-gray-200 p-3">Error boundaries, logging, monitoring, API error handling and root-cause analysis.</td>
</tr>
<tr class="odd">
<td class="border border-gray-200 p-3">How do you handle multiple API requests?</td>
<td class="border border-gray-200 p-3">Promise.all, appropriate concurrency control and error handling.</td>
</tr>
<tr class="even">
<td class="border border-gray-200 p-3">How do you improve maintainability?</td>
<td class="border border-gray-200 p-3">Modular components, custom Hooks, reusable services, standards and automated testing.</td>
</tr>
</tbody>
</table></div>
<h2 id="13-reactjs-project-architecture--senior-developer">13. React.js Project Architecture – Senior Developer</h2>
<p class="mb-3 text-lg leading-8 text-gray-700">For an enterprise-level application, I prefer a modular folder structure.</p>
<pre class="mb-4 overflow-x-auto rounded-lg bg-slate-900 p-4 text-sm text-slate-100"><code>src/
│
├── assets/
│
├── components/
│   ├── Header.jsx
│   ├── Footer.jsx
│   ├── Button.jsx
│   └── Modal.jsx
│
├── pages/
│   ├── Dashboard.jsx
│   ├── Users.jsx
│   ├── Products.jsx
│   └── Login.jsx
│
├── hooks/
│   ├── useAuth.js
│   └── useFetch.js
│
├── services/
│   ├── api.js
│   ├── userService.js
│   └── productService.js
│
├── store/
│   └── store.js
│
├── routes/
│   └── AppRoutes.jsx
│
├── utils/
│   └── helpers.js
│
├── context/
│   └── AuthContext.jsx
│
└── App.jsx</code></pre>
<p class="mb-3 text-lg leading-8 text-gray-700">Why do you use this architecture?</p>
<ul class="mb-4 list-disc space-y-1 pl-6 text-gray-700">
<li>Separation of concerns.</li>
<li>Code reusability.</li>
<li>Easier maintenance.</li>
<li>Better scalability.</li>
<li>Easier testing.</li>
<li>Better team collaboration.</li>
</ul>
<h2 id="14-team-lead--reactjs-interview-questions">14. Team Lead – React.js Interview Questions</h2>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">71. How do you lead a React development team?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">I start by understanding project requirements and defining the application architecture. Then I divide the work into components and modules, assign tasks according to developers' experience, and monitor progress.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">I conduct code reviews, help developers resolve technical issues, maintain coding standards, and coordinate with backend developers and project managers.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">72. How do you review React developer code?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">I check:</p>
<ol class="mb-4 list-decimal space-y-1 pl-6 text-gray-700" type="1">
<li>Component reusability.</li>
<li>Proper use of Hooks.</li>
<li>State management.</li>
<li>API integration.</li>
<li>Performance.</li>
<li>Error handling.</li>
<li>Security.</li>
<li>Code readability.</li>
<li>Testing.</li>
<li>Maintainability.</li>
</ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">73. How do you handle disagreements about React architecture?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">I listen to the team's suggestions and compare different approaches based on scalability, maintainability, performance, and project requirements.</p>
<p class="mb-3 text-lg leading-8 text-gray-700">I prefer technical discussions supported by practical examples rather than personal opinions.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">74. How do you guide junior React developers?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">I explain component architecture, Hooks, API integration, state management, debugging, and coding standards. I also provide code reviews and practical tasks so developers can improve their technical skills.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="mt-5 mb-4 text-3xl font-bold text-primary">75. How do you estimate React development tasks?</h2>
    </div>

<p class="mb-3 text-lg leading-8 text-gray-700">I consider:</p>
<ul class="mb-4 list-disc space-y-1 pl-6 text-gray-700">
<li>Requirement complexity.</li>
<li>Number of components.</li>
<li>API dependencies.</li>
<li>UI complexity.</li>
<li>Validation requirements.</li>
<li>Testing effort.</li>
<li>Integration and deployment.</li>
<li>Possible technical risks.</li>
</ul>
</div>


<!-- Blade partial. React examples are escaped display text. -->

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is ReactJS?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">ReactJS is an open-source JavaScript library developed by Meta for building user interfaces, especially single-page applications (SPAs).</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">React follows a component-based architecture, allowing developers to build reusable UI components.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Key features:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Component-based architecture.</li>
        <li>Virtual DOM and efficient DOM updates.</li>
        <li>Declarative UI development.</li>
        <li>One-way data flow.</li>
        <li>Reusable components.</li>
        <li>Hooks for state and lifecycle-related logic.</li>
        <li>Support for server-side rendering through React frameworks.</li>
    </ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between React and JavaScript?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">JavaScript is a programming language, whereas React is a JavaScript library used to build user interfaces.</p>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">JavaScript</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">ReactJS</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Programming language</td><td class="border border-slate-200 px-4 py-3 text-gray-700">UI library</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Manipulates DOM directly or indirectly</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Uses declarative rendering</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Can build frontend logic</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Organizes UI into components</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Does not require a framework</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Built on JavaScript</td></tr></tbody>
        </table>
    </div>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is JSX?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">JSX stands for JavaScript XML. It allows developers to write HTML-like syntax inside JavaScript.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">JSX is transformed into JavaScript expressions that create React elements.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>function Welcome() {
    return (
        &lt;div&gt;
            &lt;h1&gt;Welcome to ReactJS&lt;/h1&gt;
            &lt;p&gt;Hello Developer&lt;/p&gt;
        &lt;/div&gt;
    );
}

export default Welcome;</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Advantages:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Easy-to-read UI structure.</li>
        <li>Supports JavaScript expressions.</li>
        <li>Helps create reusable components.</li>
        <li>Makes UI development more convenient.</li>
    </ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is a React component?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">A component is an independent and reusable piece of UI. Components allow developers to divide large applications into smaller parts.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">React primarily uses function components in modern applications.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>function Header() {
    return &lt;h1&gt;My Website&lt;/h1&gt;;
}

function Footer() {
    return &lt;footer&gt;Copyright 2026&lt;/footer&gt;;
}

function App() {
    return (
        &lt;&gt;
            &lt;Header /&gt;
            &lt;h2&gt;Welcome&lt;/h2&gt;
            &lt;Footer /&gt;
        &lt;/&gt;
    );
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Types of components:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Function components.</li>
        <li>Class components (legacy style, still supported).</li>
    </ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between functional and class components?</h2>
    </div>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Functional Component</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Class Component</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">JavaScript function</td><td class="border border-slate-200 px-4 py-3 text-gray-700">ES6 class</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Uses Hooks</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Uses lifecycle methods</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Generally simpler</td><td class="border border-slate-200 px-4 py-3 text-gray-700">More boilerplate</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">No <code class="rounded bg-slate-100 px-1 text-base">this</code> required for component state</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Uses <code class="rounded bg-slate-100 px-1 text-base">this.state</code> and <code class="rounded bg-slate-100 px-1 text-base">this.setState()</code></td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Preferred in modern React</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Common in older React applications</td></tr></tbody>
        </table>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Functional component:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>function Counter() {
    const [count, setCount] = React.useState(0);

    return (
        &lt;button onClick={() =&gt; setCount(count + 1)}&gt;
            Count: {count}
        &lt;/button&gt;
    );
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Class component:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>class Counter extends React.Component {
    state = {
        count: 0
    };

    render() {
        return (
            &lt;button
                onClick={() =&gt;
                    this.setState({ count: this.state.count + 1 })
                }
            &gt;
                Count: {this.state.count}
            &lt;/button&gt;
        );
    }
}</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What are props in React?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Props (properties) are used to pass data from a parent component to a child component.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Props are read-only from the receiving component's perspective.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>function User({ name, age }) {
    return (
        &lt;div&gt;
            &lt;h2&gt;{name}&lt;/h2&gt;
            &lt;p&gt;Age: {age}&lt;/p&gt;
        &lt;/div&gt;
    );
}

function App() {
    return &lt;User name="Brijesh" age={30} /&gt;;
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Advantages:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Component communication.</li>
        <li>Data sharing.</li>
        <li>Reusability.</li>
        <li>Dynamic rendering.</li>
    </ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is state in React?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">State is an object or value managed by a component that represents information which can change over time.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">When state is updated, React schedules a re-render so the UI can reflect the new value.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>import { useState } from "react";

function Counter() {
    const [count, setCount] = useState(0);

    return (
        &lt;&gt;
            &lt;h2&gt;{count}&lt;/h2&gt;

            &lt;button onClick={() =&gt; setCount(count + 1)}&gt;
                Increment
            &lt;/button&gt;
        &lt;/&gt;
    );
}</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between props and state?</h2>
    </div>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Props</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">State</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Passed from parent</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Managed by component</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Read-only to child</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Updated using setter or state API</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Used for component communication</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Used for changing component data</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Parent controls the passed value</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Component manages its own state</td></tr></tbody>
        </table>
    </div>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the Virtual DOM?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">The Virtual DOM is an in-memory representation of the UI.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">When state or props change, React calculates the required updates and commits the necessary changes to the actual DOM.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Working process:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>React renders the component.</li>
        <li>React creates or updates its UI representation.</li>
        <li>React determines what changed.</li>
        <li>React commits the necessary DOM updates.</li>
    </ol>
    <p class="text-lg text-gray-700 mt-3 leading-8">Important: Virtual DOM is not automatically faster than every direct DOM operation. Its benefit is predictable declarative UI updates and efficient reconciliation.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is reconciliation in React?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Reconciliation is the process React uses to compare the previous rendered element tree with the new one and determine what needs to change.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">React uses element types, positions, and keys to identify whether elements can be reused or need to be replaced.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between controlled and uncontrolled components?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Controlled component: Form input value is managed by React state.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>import { useState } from "react";

function Form() {
    const [name, setName] = useState("");

    return (
        &lt;input
            value={name}
            onChange={(e) =&gt; setName(e.target.value)}
        /&gt;
    );
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Uncontrolled component: Form input value is managed by the DOM and accessed using a ref.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>import { useRef } from "react";

function Form() {
    const inputRef = useRef(null);

    function handleSubmit() {
        alert(inputRef.current.value);
    }

    return (
        &lt;&gt;
            &lt;input ref={inputRef} /&gt;
            &lt;button onClick={handleSubmit}&gt;Submit&lt;/button&gt;
        &lt;/&gt;
    );
}</code></pre>
</div>

<h2 class="mt-12 mb-6 text-4xl font-bold text-slate-900">Part 2: React Hooks</h2>
<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What are React Hooks?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Hooks are functions that allow function components to use React features such as state, context, refs, and effects.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Hooks were introduced in React 16.8.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Important Hooks:</p>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Hook</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Purpose</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">useState</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Manage component state</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">useEffect</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Synchronize with external systems</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">useContext</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Access context values</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">useRef</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Maintain mutable references</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">useMemo</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Cache calculated values</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">useCallback</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Cache function definitions</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">useReducer</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Manage complex state transitions</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">useLayoutEffect</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Run layout-related effects before browser repaint</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">useId</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Generate IDs for accessibility relationships</td></tr></tbody>
        </table>
    </div>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is useState?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8"><code class="rounded bg-slate-100 px-1 text-base">useState</code> is a React Hook used to create and update state inside function components.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>import { useState } from "react";

function Counter() {
    const [count, setCount] = useState(0);

    return (
        &lt;&gt;
            &lt;h2&gt;{count}&lt;/h2&gt;
            &lt;button onClick={() =&gt; setCount(prev =&gt; prev + 1)}&gt;
                Increment
            &lt;/button&gt;
        &lt;/&gt;
    );
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Syntax:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>const [state, setState] = useState(initialValue);</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is useEffect?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8"><code class="rounded bg-slate-100 px-1 text-base">useEffect</code> is used to synchronize a component with external systems, such as APIs, subscriptions, browser events, and timers.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>import { useEffect, useState } from "react";

function Users() {
    const [users, setUsers] = useState([]);

    useEffect(() =&gt; {
        async function fetchUsers() {
            const response = await fetch("/api/users");
            const data = await response.json();

            setUsers(data);
        }

        fetchUsers();
    }, []);

    return (
        &lt;ul&gt;
            {users.map(user =&gt; (
                &lt;li key={user.id}&gt;{user.name}&lt;/li&gt;
            ))}
        &lt;/ul&gt;
    );
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Dependency array:</p>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Syntax</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Behavior</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">No dependency array</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Runs after every committed render</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">[]</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Runs after initial mount</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700"><code class="rounded bg-slate-100 px-1 text-base">[count]</code></td><td class="border border-slate-200 px-4 py-3 text-gray-700">Runs when <code class="rounded bg-slate-100 px-1 text-base">count</code> changes</td></tr></tbody>
        </table>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">In development Strict Mode, React may run an additional setup and cleanup cycle to help detect incorrect effects.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the cleanup function in useEffect?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">A cleanup function removes resources created by an effect, such as event listeners, subscriptions, or timers.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>import { useEffect } from "react";

function WindowResize() {
    useEffect(() =&gt; {
        function handleResize() {
            console.log(window.innerWidth);
        }

        window.addEventListener("resize", handleResize);

        return () =&gt; {
            window.removeEventListener("resize", handleResize);
        };
    }, []);

    return &lt;h2&gt;Resize Example&lt;/h2&gt;;
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Benefits:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Prevents unwanted subscriptions.</li>
        <li>Avoids stale event listeners.</li>
        <li>Cleans up resources.</li>
        <li>Helps prevent memory leaks.</li>
    </ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is useContext?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8"><code class="rounded bg-slate-100 px-1 text-base">useContext</code> allows components to access values from React Context without passing props through every intermediate component.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>import { createContext, useContext } from "react";

const UserContext = createContext(null);

function Profile() {
    const user = useContext(UserContext);

    return &lt;h2&gt;{user.name}&lt;/h2&gt;;
}

function App() {
    const user = { name: "Brijesh" };

    return (
        &lt;UserContext.Provider value={user}&gt;
            &lt;Profile /&gt;
        &lt;/UserContext.Provider&gt;
    );
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Use cases:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Authentication information.</li>
        <li>Theme management.</li>
        <li>Language preferences.</li>
        <li>Shared application settings.</li>
    </ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is useRef?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8"><code class="rounded bg-slate-100 px-1 text-base">useRef</code> creates a mutable reference that persists across renders without triggering a re-render when its <code class="rounded bg-slate-100 px-1 text-base">.current</code> value changes.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>import { useRef } from "react";

function InputExample() {
    const inputRef = useRef(null);

    function focusInput() {
        inputRef.current.focus();
    }

    return (
        &lt;&gt;
            &lt;input ref={inputRef} /&gt;
            &lt;button onClick={focusInput}&gt;Focus&lt;/button&gt;
        &lt;/&gt;
    );
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Use cases:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Access DOM elements.</li>
        <li>Store timer IDs.</li>
        <li>Maintain mutable values.</li>
        <li>Keep previous values between renders.</li>
    </ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between useMemo and useCallback?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Both are performance optimization Hooks.</p>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">useMemo</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">useCallback</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Caches a calculated value</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Caches a function definition</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Returns a value</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Returns a function</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Useful for expensive calculations</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Useful when stable function identity matters</td></tr></tbody>
        </table>
    </div>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>const total = useMemo(() =&gt; {
    return products.reduce((sum, item) =&gt; sum + item.price, 0);
}, [products]);</code></pre>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>const handleClick = useCallback(() =&gt; {
    console.log("Button clicked");
}, []);</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Interview point: Do not use these Hooks everywhere. Use them when there is a measurable performance benefit or a specific identity requirement.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is useReducer?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8"><code class="rounded bg-slate-100 px-1 text-base">useReducer</code> is a Hook used for managing complex state transitions through a reducer function.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">It is useful when state updates depend on action types or multiple related values.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>import { useReducer } from "react";

function reducer(state, action) {
    switch (action.type) {
        case "increment":
            return { count: state.count + 1 };

        case "decrement":
            return { count: state.count - 1 };

        default:
            return state;
    }
}

function Counter() {
    const [state, dispatch] = useReducer(reducer, { count: 0 });

    return (
        &lt;&gt;
            &lt;h2&gt;{state.count}&lt;/h2&gt;

            &lt;button onClick={() =&gt; dispatch({ type: "increment" })}&gt;
                +
            &lt;/button&gt;

            &lt;button onClick={() =&gt; dispatch({ type: "decrement" })}&gt;
                -
            &lt;/button&gt;
        &lt;/&gt;
    );
}</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What are the Rules of Hooks?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">React Hooks must follow two main rules:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Call Hooks only at the top level of React function components or custom Hooks.</li>
        <li>Do not call Hooks inside loops, conditions, or nested functions.</li>
    </ol>
    <p class="text-lg text-gray-700 mt-3 leading-8">Incorrect:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>if (isLoggedIn) {
    const [user, setUser] = useState(null);
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Correct:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>const [user, setUser] = useState(null);

if (isLoggedIn) {
    console.log(user);
}</code></pre>
</div>

<h2 class="mt-12 mb-6 text-4xl font-bold text-slate-900">Part 3: React Advanced Concepts</h2>
<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is React Fiber?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">React Fiber is React's internal reconciliation architecture.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">It allows React to break rendering work into smaller units and prioritize updates.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Benefits:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Better scheduling of rendering work.</li>
        <li>Supports interruptible rendering.</li>
        <li>Enables concurrent rendering features.</li>
        <li>Improves responsiveness for complex interfaces.</li>
    </ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is React StrictMode?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8"><code class="rounded bg-slate-100 px-1 text-base">StrictMode</code> is a development-only tool that helps identify potential problems in React applications.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>import { StrictMode } from "react";
import { createRoot } from "react-dom/client";

createRoot(document.getElementById("root")).render(
    &lt;StrictMode&gt;
        &lt;App /&gt;
    &lt;/StrictMode&gt;
);</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Benefits:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Helps detect unsafe lifecycle patterns.</li>
        <li>Detects certain deprecated API usage.</li>
        <li>Helps identify missing effect cleanup.</li>
        <li>Helps identify impure rendering logic.</li>
    </ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What are keys in React?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Keys are unique identifiers used when rendering lists. They help React identify which items have changed, been added, or been removed.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>const employees = [
    { id: 1, name: "John" },
    { id: 2, name: "David" }
];

function EmployeeList() {
    return (
        &lt;ul&gt;
            {employees.map(employee =&gt; (
                &lt;li key={employee.id}&gt;
                    {employee.name}
                &lt;/li&gt;
            ))}
        &lt;/ul&gt;
    );
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Important: Avoid using array indexes as keys when list items can be reordered, inserted, or deleted.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is React.memo?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8"><code class="rounded bg-slate-100 px-1 text-base">React.memo</code> is a higher-order component that can skip re-rendering a function component when its props are unchanged according to shallow comparison.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>import React from "react";

const User = React.memo(function User({ name }) {
    console.log("User rendered");

    return &lt;h2&gt;{name}&lt;/h2&gt;;
});</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Use cases:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Expensive child components.</li>
        <li>Components receiving stable props.</li>
        <li>Reducing unnecessary renders.</li>
    </ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is lazy loading in React?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Lazy loading means loading components only when they are needed rather than including all components in the initial JavaScript bundle.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">React provides <code class="rounded bg-slate-100 px-1 text-base">lazy()</code> and <code class="rounded bg-slate-100 px-1 text-base">Suspense</code> for component-level code splitting.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>import { lazy, Suspense } from "react";

const Dashboard = lazy(() =&gt; import("./Dashboard"));

function App() {
    return (
        &lt;Suspense fallback={&lt;h2&gt;Loading...&lt;/h2&gt;}&gt;
            &lt;Dashboard /&gt;
        &lt;/Suspense&gt;
    );
}</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is React Suspense?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Suspense allows React to display a fallback UI while a supported child component or resource is waiting.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>&lt;Suspense fallback={&lt;div&gt;Loading...&lt;/div&gt;}&gt;
    &lt;Dashboard /&gt;
&lt;/Suspense&gt;</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">It is commonly used with lazy-loaded components and supported framework or data-loading integrations.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What are Error Boundaries?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Error Boundaries are React components that catch rendering errors in their descendant component tree and display fallback UI.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">They are traditionally implemented using class component lifecycle methods.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>class ErrorBoundary extends React.Component {
    constructor(props) {
        super(props);

        this.state = {
            hasError: false
        };
    }

    static getDerivedStateFromError() {
        return { hasError: true };
    }

    componentDidCatch(error, info) {
        console.error(error, info);
    }

    render() {
        if (this.state.hasError) {
            return &lt;h2&gt;Something went wrong.&lt;/h2&gt;;
        }

        return this.props.children;
    }
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Important: Error Boundaries do not generally catch errors in event handlers, asynchronous callbacks, or server-side rendering.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What are portals in React?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Portals allow a React component to render its children into a different DOM node outside its parent DOM hierarchy.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Use cases:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Modals.</li>
        <li>Tooltips.</li>
        <li>Dropdown overlays.</li>
        <li>Dialog boxes.</li>
    </ul>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>import { createPortal } from "react-dom";

function Modal() {
    return createPortal(
        &lt;div className="modal"&gt;
            &lt;h2&gt;Welcome&lt;/h2&gt;
        &lt;/div&gt;,
        document.getElementById("modal-root")
    );
}</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is a custom Hook?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">A custom Hook is a reusable JavaScript function whose name starts with <code class="rounded bg-slate-100 px-1 text-base">use</code> and that can use React Hooks.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">It allows developers to share stateful logic between components.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>import { useEffect, useState } from "react";

function useUsers() {
    const [users, setUsers] = useState([]);
    const [loading, setLoading] = useState(true);

    useEffect(() =&gt; {
        async function loadUsers() {
            try {
                const response = await fetch("/api/users");
                if (!response.ok) {
                    throw new Error("Unable to fetch users");
                }

                setUsers(await response.json());
            } finally {
                setLoading(false);
            }
        }

        loadUsers();
    }, []);

    return { users, loading };
}</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Usage:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>function UserList() {
    const { users, loading } = useUsers();

    if (loading) return &lt;p&gt;Loading...&lt;/p&gt;;

    return users.map(user =&gt; (
        &lt;p key={user.id}&gt;{user.name}&lt;/p&gt;
    ));
}</code></pre>
</div>

<h2 class="mt-12 mb-6 text-4xl font-bold text-slate-900">Part 4: Redux and State Management</h2>
<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is Redux?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Redux is a predictable state management library used to manage shared application state.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">It is useful when multiple components need access to the same application data.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Main Redux concepts:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Store – holds application state.</li>
        <li>Action – describes what happened.</li>
        <li>Reducer – calculates the next state.</li>
        <li>Dispatch – sends an action to the store.</li>
        <li>Selector – reads data from the store.</li>
    </ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is Redux Toolkit?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Redux Toolkit (RTK) is the recommended standard approach for writing Redux logic.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">It reduces boilerplate and provides utilities such as <code class="rounded bg-slate-100 px-1 text-base">configureStore()</code> and <code class="rounded bg-slate-100 px-1 text-base">createSlice()</code>.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>import { createSlice, configureStore } from "&#64;reduxjs/toolkit";

const counterSlice = createSlice({
    name: "counter",

    initialState: {
        count: 0
    },

    reducers: {
        increment: state =&gt; {
            state.count += 1;
        },

        decrement: state =&gt; {
            state.count -= 1;
        }
    }
});

export const { increment, decrement } = counterSlice.actions;

const store = configureStore({
    reducer: {
        counter: counterSlice.reducer
    }
});

export default store;</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Redux Toolkit uses Immer internally, allowing reducer code to use mutation-like syntax while producing immutable state updates.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between Context API and Redux?</h2>
    </div>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Context API</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Redux Toolkit</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Built into React</td><td class="border border-slate-200 px-4 py-3 text-gray-700">External state management library</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Good for shared values</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Good for complex shared application state</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Simple setup</td><td class="border border-slate-200 px-4 py-3 text-gray-700">More structured architecture</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">No built-in action/reducer architecture</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Supports actions, reducers and middleware</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">No automatic selector-based subscription optimization in basic usage</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Supports optimized selector subscriptions</td></tr></tbody>
        </table>
    </div>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is middleware in Redux?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Middleware is a function that sits between dispatching an action and the reducer processing it.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">It is used for:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Logging.</li>
        <li>API requests.</li>
        <li>Asynchronous operations.</li>
        <li>Error handling.</li>
        <li>Analytics.</li>
    </ul>
    <p class="text-lg text-gray-700 mt-3 leading-8">Redux Toolkit includes thunk middleware by default for handling common asynchronous logic.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is the difference between Redux Thunk and Redux Saga?</h2>
    </div>
    <div class="my-4 overflow-x-auto">
        <table class="w-full border-collapse text-left text-base">
            <thead><tr><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Redux Thunk</th><th class="border border-slate-200 bg-slate-100 px-4 py-3 font-bold">Redux Saga</th></tr></thead>
            <tbody><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Uses functions as action logic</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Uses generator functions</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Simpler to learn</td><td class="border border-slate-200 px-4 py-3 text-gray-700">More advanced</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Suitable for many common async workflows</td><td class="border border-slate-200 px-4 py-3 text-gray-700">Useful for complex async workflows</td></tr><tr><td class="border border-slate-200 px-4 py-3 text-gray-700">Less boilerplate</td><td class="border border-slate-200 px-4 py-3 text-gray-700">More concepts and setup</td></tr></tbody>
        </table>
    </div>
</div>

<h2 class="mt-12 mb-6 text-4xl font-bold text-slate-900">Part 5: React API Integration with Laravel</h2>
<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you integrate a React frontend with a Laravel REST API?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">I generally follow these steps:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Create REST API endpoints in Laravel.</li>
        <li>Configure authentication and authorization.</li>
        <li>Validate incoming API requests.</li>
        <li>Return consistent JSON responses.</li>
        <li>Call APIs from React using Fetch or Axios.</li>
        <li>Manage loading and error states.</li>
        <li>Store and display the API response.</li>
        <li>Handle pagination and filtering.</li>
    </ol>
    <p class="text-lg text-gray-700 mt-3 leading-8">Laravel API route:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/employees', [EmployeeController::class, 'index']);
Route::post('/employees', [EmployeeController::class, 'store']);</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">React API integration using Axios:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>import axios from "axios";
import { useEffect, useState } from "react";

function Employees() {
    const [employees, setEmployees] = useState([]);
    const [loading, setLoading] = useState(true);

    useEffect(() =&gt; {
        async function fetchEmployees() {
            try {
                const response = await axios.get(
                    "/api/employees"
                );

                setEmployees(response.data.data ?? response.data);
            } catch (error) {
                console.error(error);
            } finally {
                setLoading(false);
            }
        }

        fetchEmployees();
    }, []);

    if (loading) {
        return &lt;p&gt;Loading employees...&lt;/p&gt;;
    }

    return (
        &lt;div&gt;
            {employees.map(employee =&gt; (
                &lt;p key={employee.id}&gt;
                    {employee.name}
                &lt;/p&gt;
            ))}
        &lt;/div&gt;
    );
}

export default Employees;</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you handle JWT authentication in React?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">JWT stands for JSON Web Token. It is commonly used for stateless API authentication.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Typical flow:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>User enters login credentials.</li>
        <li>React sends credentials to Laravel.</li>
        <li>Laravel validates credentials.</li>
        <li>Laravel returns an authentication token or establishes a secure cookie session.</li>
        <li>React uses the authenticated session for subsequent API requests.</li>
        <li>Laravel validates authentication on protected routes.</li>
    </ol>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example with a bearer token:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>const response = await axios.get("/api/profile", {
    headers: {
        Authorization: `Bearer ${token}`
    }
});</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Security point: For browser applications, secure HttpOnly cookies are often preferable to storing sensitive JWTs in <code class="rounded bg-slate-100 px-1 text-base">localStorage</code>. Protect cookie-based authentication against CSRF.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you handle API loading, success, and error states?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">I maintain separate states for loading, data, and error.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>import { useEffect, useState } from "react";

function Users() {
    const [users, setUsers] = useState([]);
    const [loading, setLoading] = useState(false);
    const [error, setError] = useState("");

    useEffect(() =&gt; {
        const controller = new AbortController();

        async function fetchUsers() {
            setLoading(true);
            setError("");

            try {
                const response = await fetch("/api/users", {
                    signal: controller.signal
                });

                if (!response.ok) {
                    throw new Error("Failed to fetch users");
                }

                setUsers(await response.json());

            } catch (err) {
                if (err.name !== "AbortError") {
                    setError(err.message);
                }
            } finally {
                if (!controller.signal.aborted) {
                    setLoading(false);
                }
            }
        }

        fetchUsers();

        return () =&gt; controller.abort();
    }, []);

    if (loading) return &lt;p&gt;Loading...&lt;/p&gt;;
    if (error) return &lt;p&gt;{error}&lt;/p&gt;;

    return users.map(user =&gt; (
        &lt;p key={user.id}&gt;{user.name}&lt;/p&gt;
    ));
}</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you implement pagination in React?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Pagination divides a large dataset into smaller pages. The backend returns only the required records.</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>import { useEffect, useState } from "react";

function EmployeeList() {
    const [employees, setEmployees] = useState([]);
    const [page, setPage] = useState(1);

    useEffect(() =&gt; {
        async function loadEmployees() {
            const response = await fetch(
                `/api/employees?page=${page}`
            );

            const result = await response.json();

            setEmployees(result.data);
        }

        loadEmployees();
    }, [page]);

    return (
        &lt;&gt;
            {employees.map(employee =&gt; (
                &lt;p key={employee.id}&gt;{employee.name}&lt;/p&gt;
            ))}

            &lt;button
                disabled={page === 1}
                onClick={() =&gt; setPage(p =&gt; p - 1)}
            &gt;
                Previous
            &lt;/button&gt;

            &lt;button onClick={() =&gt; setPage(p =&gt; p + 1)}&gt;
                Next
            &lt;/button&gt;
        &lt;/&gt;
    );
}</code></pre>
</div>

<h2 class="mt-12 mb-6 text-4xl font-bold text-slate-900">Part 6: React Performance Optimization</h2>
<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you prevent unnecessary re-rendering?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">I use these techniques:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Keep state close to the components that need it.</li>
        <li>Use <code class="rounded bg-slate-100 px-1 text-base">React.memo</code> for suitable child components.</li>
        <li>Use <code class="rounded bg-slate-100 px-1 text-base">useMemo</code> for expensive calculations when necessary.</li>
        <li>Use <code class="rounded bg-slate-100 px-1 text-base">useCallback</code> when stable function identity matters.</li>
        <li>Avoid unnecessary state updates.</li>
        <li>Split large components into smaller components.</li>
        <li>Use proper list keys.</li>
        <li>Use virtualization for large lists.</li>
        <li>Avoid creating unnecessary context updates.</li>
        <li>Profile the application before optimizing.</li>
    </ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is code splitting?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">Code splitting divides a large JavaScript bundle into smaller chunks that can be loaded when required.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">React supports code splitting through <code class="rounded bg-slate-100 px-1 text-base">React.lazy()</code> and <code class="rounded bg-slate-100 px-1 text-base">Suspense</code>.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Benefits:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Faster initial loading.</li>
        <li>Reduced initial bundle size.</li>
        <li>Better application performance.</li>
    </ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is React Profiler?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">React Profiler is a development tool used to measure component rendering performance.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">It helps identify:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Components rendering frequently.</li>
        <li>Expensive rendering operations.</li>
        <li>Unnecessary updates.</li>
        <li>Performance bottlenecks.</li>
    </ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">What is list virtualization?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">List virtualization means rendering only the visible items instead of rendering thousands of items at once.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example: If a table contains 10,000 records, the browser may render only the visible 20–30 rows.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Popular libraries include <code class="rounded bg-slate-100 px-1 text-base">react-window</code> and TanStack Virtual.</p>
</div>

<h2 class="mt-12 mb-6 text-4xl font-bold text-slate-900">Part 7: React Coding Interview Questions</h2>
<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Create a counter using React Hooks.</h2>
    </div>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>import { useState } from "react";

function Counter() {
    const [count, setCount] = useState(0);

    return (
        &lt;div&gt;
            &lt;h2&gt;Count: {count}&lt;/h2&gt;

            &lt;button onClick={() =&gt; setCount(c =&gt; c + 1)}&gt;
                Increment
            &lt;/button&gt;

            &lt;button onClick={() =&gt; setCount(c =&gt; c - 1)}&gt;
                Decrement
            &lt;/button&gt;

            &lt;button onClick={() =&gt; setCount(0)}&gt;
                Reset
            &lt;/button&gt;
        &lt;/div&gt;
    );
}

export default Counter;</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Create a search filter in React.</h2>
    </div>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>import { useState } from "react";

function EmployeeSearch() {
    const [search, setSearch] = useState("");

    const employees = [
        "John",
        "David",
        "Brijesh",
        "Alex"
    ];

    const filteredEmployees = employees.filter(employee =&gt;
        employee.toLowerCase().includes(search.toLowerCase())
    );

    return (
        &lt;div&gt;
            &lt;input
                type="text"
                placeholder="Search employee..."
                value={search}
                onChange={e =&gt; setSearch(e.target.value)}
            /&gt;

            {filteredEmployees.map(employee =&gt; (
                &lt;p key={employee}&gt;{employee}&lt;/p&gt;
            ))}
        &lt;/div&gt;
    );
}</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Create a reusable custom Hook for API calls.</h2>
    </div>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>import { useEffect, useState } from "react";

function useApi(url) {
    const [data, setData] = useState(null);
    const [loading, setLoading] = useState(true);
    const [error, setError] = useState(null);

    useEffect(() =&gt; {
        const controller = new AbortController();

        async function fetchData() {
            setLoading(true);

            try {
                const response = await fetch(url, {
                    signal: controller.signal
                });

                if (!response.ok) {
                    throw new Error("API request failed");
                }

                setData(await response.json());

            } catch (err) {
                if (err.name !== "AbortError") {
                    setError(err);
                }
            } finally {
                if (!controller.signal.aborted) {
                    setLoading(false);
                }
            }
        }

        fetchData();

        return () =&gt; controller.abort();
    }, [url]);

    return { data, loading, error };
}

export default useApi;</code></pre>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">Create a form with validation.</h2>
    </div>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>import { useState } from "react";

function RegistrationForm() {
    const [form, setForm] = useState({
        name: "",
        email: ""
    });

    const [errors, setErrors] = useState({});

    function handleSubmit(e) {
        e.preventDefault();

        const newErrors = {};

        if (!form.name.trim()) {
            newErrors.name = "Name is required";
        }

        if (!/^[^\s&#64;]+&#64;[^\s&#64;]+\.[^\s&#64;]+$/.test(form.email)) {
            newErrors.email = "Enter a valid email";
        }

        setErrors(newErrors);

        if (Object.keys(newErrors).length === 0) {
            console.log("Form submitted:", form);
        }
    }

    return (
        &lt;form onSubmit={handleSubmit}&gt;
            &lt;input
                placeholder="Name"
                value={form.name}
                onChange={e =&gt;
                    setForm({ ...form, name: e.target.value })
                }
            /&gt;

            &lt;p&gt;{errors.name}&lt;/p&gt;

            &lt;input
                placeholder="Email"
                value={form.email}
                onChange={e =&gt;
                    setForm({ ...form, email: e.target.value })
                }
            /&gt;

            &lt;p&gt;{errors.email}&lt;/p&gt;

            &lt;button type="submit"&gt;Submit&lt;/button&gt;
        &lt;/form&gt;
    );
}</code></pre>
</div>

<h2 class="mt-12 mb-6 text-4xl font-bold text-slate-900">Part 8: Senior React and Technical Lead Interview Questions</h2>
<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you structure a large React application?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">I prefer a feature-based architecture that separates components, API services, hooks, and shared utilities.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">Example:</p>
    <pre class="my-4 overflow-x-auto rounded-xl bg-slate-900 p-5 text-sm leading-7 text-slate-100"><code>src/
│
├── components/
│   ├── common/
│   ├── Header.jsx
│   └── Sidebar.jsx
│
├── features/
│   ├── employees/
│   │   ├── components/
│   │   ├── hooks/
│   │   ├── employeeApi.js
│   │   └── EmployeeList.jsx
│   │
│   └── authentication/
│       ├── Login.jsx
│       └── authApi.js
│
├── hooks/
├── services/
├── store/
├── utils/
├── routes/
└── App.jsx</code></pre>
    <p class="text-lg text-gray-700 mt-3 leading-8">Advantages:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Maintainable code.</li>
        <li>Reusable components.</li>
        <li>Easier testing.</li>
        <li>Clear responsibility separation.</li>
        <li>Easier team collaboration.</li>
    </ul>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you manage a React project with a Laravel backend?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">I divide the application into frontend and backend responsibilities.</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">React frontend:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>UI components.</li>
        <li>Routing.</li>
        <li>Form handling.</li>
        <li>Client-side validation.</li>
        <li>State management.</li>
        <li>API integration.</li>
    </ul>
    <p class="text-lg text-gray-700 mt-3 leading-8">Laravel backend:</p>
    <ul class="my-4 list-disc space-y-2 pl-6 text-lg text-gray-700">
        <li>Business logic.</li>
        <li>Authentication and authorization.</li>
        <li>Database operations.</li>
        <li>Request validation.</li>
        <li>API responses.</li>
        <li>Queue processing and background jobs.</li>
    </ul>
    <p class="text-lg text-gray-700 mt-3 leading-8">Communication:</p>
    <p class="text-lg text-gray-700 mt-3 leading-8">React communicates with Laravel through REST APIs using Axios or Fetch.</p>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you handle a production issue in a React application?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">I follow a systematic approach:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Identify the issue and its business impact.</li>
        <li>Reproduce the problem.</li>
        <li>Check browser console and network requests.</li>
        <li>Review frontend and backend logs.</li>
        <li>Identify the root cause.</li>
        <li>Implement a fix.</li>
        <li>Test the fix locally and in staging.</li>
        <li>Deploy through the release process.</li>
        <li>Monitor the application after deployment.</li>
        <li>Document the incident and preventive action.</li>
    </ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you perform code reviews in a React project?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">I review code based on the following criteria:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Code readability and maintainability.</li>
        <li>Component reusability.</li>
        <li>Correct use of Hooks.</li>
        <li>State management.</li>
        <li>API error handling.</li>
        <li>Performance.</li>
        <li>Security.</li>
        <li>Accessibility.</li>
        <li>Proper validation.</li>
        <li>Unit and integration test coverage.</li>
    </ol>
</div>

<div class="mb-12">
    <div class="question">
        <h2 class="text-3xl font-bold text-primary mt-5 mb-4">How do you handle multiple developers working on the same React project?</h2>
    </div>
    <p class="text-lg text-gray-700 mt-3 leading-8">As a technical lead, I follow these practices:</p>
    <ol class="my-4 list-decimal space-y-2 pl-6 text-lg text-gray-700">
        <li>Define project architecture and coding standards.</li>
        <li>Divide work into modules.</li>
        <li>Assign clear ownership.</li>
        <li>Use Git feature branches.</li>
        <li>Create pull requests.</li>
        <li>Perform code reviews.</li>
        <li>Integrate changes regularly.</li>
        <li>Resolve merge conflicts.</li>
        <li>Track progress and blockers.</li>
        <li>Escalate risks early and communicate delivery status.</li>
    </ol>
</div>




</div>
</section>


  </div>
   
  


 
     



<br>
<div class="clear nextprev">
<a class="left btn" href="{{url('interviews/laravel-interview-question-answer')}}">&#10094; Previous</a>
<a class="right btn" href="{{url('interviews/restapi-interview-question-answer')}}">Next &#10095;</a>
</div>
</div>
 
</div>
   
  @endsection