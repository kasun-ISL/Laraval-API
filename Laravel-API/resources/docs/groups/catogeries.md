# Catogeries
Managing Catogeries

## Get Catogeries


List all Catogeries

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/catogeries?page=12" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/catogeries"
);

let params = {
    "page": "12",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-catogeries" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-catogeries"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-catogeries"></code></pre>
</div>
<div id="execution-error-GETapi-catogeries" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-catogeries"></code></pre>
</div>
<form id="form-GETapi-catogeries" data-method="GET" data-path="api/catogeries" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-catogeries', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-catogeries" onclick="tryItOut('GETapi-catogeries');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-catogeries" onclick="cancelTryOut('GETapi-catogeries');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-catogeries" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/catogeries</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page" data-endpoint="GETapi-catogeries" data-component="query"  hidden>
<br>
which page to show.
</p>
</form>


## Post Catogeries


Create New Catoger

> Example request:

```bash
curl -X POST \
    "http://localhost/api/catogeries" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"facere"}'

```

```javascript
const url = new URL(
    "http://localhost/api/catogeries"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "facere"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-catogeries" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-catogeries"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-catogeries"></code></pre>
</div>
<div id="execution-error-POSTapi-catogeries" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-catogeries"></code></pre>
</div>
<form id="form-POSTapi-catogeries" data-method="POST" data-path="api/catogeries" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-catogeries', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-catogeries" onclick="tryItOut('POSTapi-catogeries');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-catogeries" onclick="cancelTryOut('POSTapi-catogeries');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-catogeries" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/catogeries</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-catogeries" data-component="body" required  hidden>
<br>

</p>

</form>


## api/catogeries/{catogery}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/catogeries/impedit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/catogeries/impedit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-catogeries--catogery-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-catogeries--catogery-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-catogeries--catogery-"></code></pre>
</div>
<div id="execution-error-GETapi-catogeries--catogery-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-catogeries--catogery-"></code></pre>
</div>
<form id="form-GETapi-catogeries--catogery-" data-method="GET" data-path="api/catogeries/{catogery}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-catogeries--catogery-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-catogeries--catogery-" onclick="tryItOut('GETapi-catogeries--catogery-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-catogeries--catogery-" onclick="cancelTryOut('GETapi-catogeries--catogery-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-catogeries--catogery-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/catogeries/{catogery}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>catogery</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="catogery" data-endpoint="GETapi-catogeries--catogery-" data-component="url" required  hidden>
<br>

</p>
</form>


## api/catogeries/{catogery}




> Example request:

```bash
curl -X PUT \
    "http://localhost/api/catogeries/accusamus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"et"}'

```

```javascript
const url = new URL(
    "http://localhost/api/catogeries/accusamus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "et"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-catogeries--catogery-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-catogeries--catogery-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-catogeries--catogery-"></code></pre>
</div>
<div id="execution-error-PUTapi-catogeries--catogery-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-catogeries--catogery-"></code></pre>
</div>
<form id="form-PUTapi-catogeries--catogery-" data-method="PUT" data-path="api/catogeries/{catogery}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-catogeries--catogery-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-catogeries--catogery-" onclick="tryItOut('PUTapi-catogeries--catogery-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-catogeries--catogery-" onclick="cancelTryOut('PUTapi-catogeries--catogery-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-catogeries--catogery-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/catogeries/{catogery}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/catogeries/{catogery}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>catogery</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="catogery" data-endpoint="PUTapi-catogeries--catogery-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-catogeries--catogery-" data-component="body" required  hidden>
<br>

</p>

</form>


## api/catogeries/{catogery}




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/catogeries/ex" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"qui"}'

```

```javascript
const url = new URL(
    "http://localhost/api/catogeries/ex"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "qui"
}

fetch(url, {
    method: "DELETE",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-catogeries--catogery-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-catogeries--catogery-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-catogeries--catogery-"></code></pre>
</div>
<div id="execution-error-DELETEapi-catogeries--catogery-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-catogeries--catogery-"></code></pre>
</div>
<form id="form-DELETEapi-catogeries--catogery-" data-method="DELETE" data-path="api/catogeries/{catogery}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-catogeries--catogery-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-catogeries--catogery-" onclick="tryItOut('DELETEapi-catogeries--catogery-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-catogeries--catogery-" onclick="cancelTryOut('DELETEapi-catogeries--catogery-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-catogeries--catogery-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/catogeries/{catogery}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>catogery</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="catogery" data-endpoint="DELETEapi-catogeries--catogery-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="DELETEapi-catogeries--catogery-" data-component="body" required  hidden>
<br>

</p>

</form>



