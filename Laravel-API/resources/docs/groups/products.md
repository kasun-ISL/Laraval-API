# Products
Managing Products

## api/product




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/product" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product"
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


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "category_id": 990,
            "name": "quo",
            "description": "Aliquid et maiores sequi sint ut illum ducimus. Laudantium aut suscipit mollitia esse quia. Distinctio commodi voluptates temporibus dolores necessitatibus amet culpa.",
            "price": "1,089.03",
            "category": {
                "id": 990,
                "name": "Shane Hickle",
                "created_at": "2022-08-26T01:49:40.000000Z"
            }
        },
        {
            "id": 2,
            "category_id": 639,
            "name": "porro",
            "description": "Quia sed explicabo dignissimos harum harum aut quia. Laudantium laboriosam ut saepe aspernatur non. Illo nisi voluptas voluptatem ducimus eum. Omnis omnis et dolorem.",
            "price": "719.57",
            "category": {
                "id": 639,
                "name": "Leanna Wilderman",
                "created_at": "2022-08-26T01:49:39.000000Z"
            }
        },
        {
            "id": 3,
            "category_id": 637,
            "name": "consequatur",
            "description": "Nihil ea molestiae et aliquid libero ut. Ad et aut tenetur alias enim id doloremque praesentium. Hic ea id ipsum ratione a dolor corporis. Animi impedit alias sit dignissimos quae earum.",
            "price": "981.06",
            "category": {
                "id": 637,
                "name": "Nat Denesik",
                "created_at": "2022-08-26T01:49:39.000000Z"
            }
        },
        {
            "id": 4,
            "category_id": 613,
            "name": "ab",
            "description": "Rerum voluptatem id autem ut eos necessitatibus. Et unde temporibus blanditiis similique vero. Explicabo nemo velit non eveniet autem esse. Eius sed debitis ut et sed quia facere.",
            "price": "936.23",
            "category": {
                "id": 613,
                "name": "Mohammed Rohan",
                "created_at": "2022-08-26T01:49:39.000000Z"
            }
        },
        {
            "id": 5,
            "category_id": 117,
            "name": "officia",
            "description": "Aspernatur et ratione voluptas dolorem. Quo saepe nihil consequatur saepe voluptatum consequatur culpa. Quos accusantium minus fuga qui sit omnis debitis. Est omnis et officiis ea.",
            "price": "901.39",
            "category": {
                "id": 117,
                "name": "Caden Connelly V",
                "created_at": "2022-08-26T01:49:39.000000Z"
            }
        },
        {
            "id": 6,
            "category_id": 126,
            "name": "vel",
            "description": "Consequuntur mollitia sapiente amet facilis. Aut et eveniet culpa cupiditate nemo officia ut expedita. Sit impedit doloremque odio est perferendis.",
            "price": "424.28",
            "category": {
                "id": 126,
                "name": "Mr. Deshawn Sipes V",
                "created_at": "2022-08-26T01:49:39.000000Z"
            }
        },
        {
            "id": 7,
            "category_id": 755,
            "name": "et",
            "description": "Dolore est vero est nisi nulla maiores. Mollitia id corporis similique fuga et. Cupiditate harum esse repellendus ut.",
            "price": "812.35",
            "category": {
                "id": 755,
                "name": "River Bogan",
                "created_at": "2022-08-26T01:49:39.000000Z"
            }
        },
        {
            "id": 8,
            "category_id": 783,
            "name": "quod",
            "description": "Distinctio veritatis fugiat voluptatum minima facilis quasi. Distinctio vero ullam dolorem velit ad officia. Ex ipsa aliquid quia et illum molestias quia. Sed tenetur ea aperiam porro.",
            "price": "1,221.12",
            "category": {
                "id": 783,
                "name": "Howell Crist",
                "created_at": "2022-08-26T01:49:39.000000Z"
            }
        },
        {
            "id": 9,
            "category_id": 236,
            "name": "accusantium",
            "description": "Autem omnis amet fugiat quod nemo aliquid. Quis et eligendi atque ea vel velit. Blanditiis numquam facilis ducimus qui. Rem id fugiat consequuntur earum amet est qui.",
            "price": "919.88",
            "category": {
                "id": 236,
                "name": "Alva Altenwerth Jr.",
                "created_at": "2022-08-26T01:49:39.000000Z"
            }
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/product?page=1",
        "last": "http:\/\/localhost\/api\/product?page=112",
        "prev": null,
        "next": "http:\/\/localhost\/api\/product?page=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 112,
        "links": [
            {
                "url": null,
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/product?page=1",
                "label": "1",
                "active": true
            },
            {
                "url": "http:\/\/localhost\/api\/product?page=2",
                "label": "2",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/product?page=3",
                "label": "3",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/product?page=4",
                "label": "4",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/product?page=5",
                "label": "5",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/product?page=6",
                "label": "6",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/product?page=7",
                "label": "7",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/product?page=8",
                "label": "8",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/product?page=9",
                "label": "9",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/product?page=10",
                "label": "10",
                "active": false
            },
            {
                "url": null,
                "label": "...",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/product?page=111",
                "label": "111",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/product?page=112",
                "label": "112",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/product?page=2",
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "path": "http:\/\/localhost\/api\/product",
        "per_page": 9,
        "to": 9,
        "total": 1000
    }
}
```
<div id="execution-results-GETapi-product" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-product"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-product"></code></pre>
</div>
<div id="execution-error-GETapi-product" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-product"></code></pre>
</div>
<form id="form-GETapi-product" data-method="GET" data-path="api/product" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-product', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-product" onclick="tryItOut('GETapi-product');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-product" onclick="cancelTryOut('GETapi-product');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-product" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/product</code></b>
</p>
</form>



