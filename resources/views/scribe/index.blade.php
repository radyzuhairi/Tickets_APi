<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel Tickets Please API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://localhost:8000";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.2.1.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.2.1.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-tickets">
                                <a href="#endpoints-GETapi-v1-tickets">GET api/v1/tickets</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-tickets">
                                <a href="#endpoints-POSTapi-v1-tickets">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-tickets--id-">
                                <a href="#endpoints-GETapi-v1-tickets--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-v1-tickets--id-">
                                <a href="#endpoints-DELETEapi-v1-tickets--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-v1-tickets--ticket_id-">
                                <a href="#endpoints-PUTapi-v1-tickets--ticket_id-">PUT api/v1/tickets/{ticket_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PATCHapi-v1-tickets--ticket_id-">
                                <a href="#endpoints-PATCHapi-v1-tickets--ticket_id-">Update the specified resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-users">
                                <a href="#endpoints-GETapi-v1-users">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-users">
                                <a href="#endpoints-POSTapi-v1-users">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-users--id-">
                                <a href="#endpoints-GETapi-v1-users--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-v1-users--id-">
                                <a href="#endpoints-DELETEapi-v1-users--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-v1-users--user-">
                                <a href="#endpoints-PUTapi-v1-users--user-">PUT api/v1/users/{user}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PATCHapi-v1-users--user-">
                                <a href="#endpoints-PATCHapi-v1-users--user-">Update the specified resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-authors">
                                <a href="#endpoints-GETapi-v1-authors">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-authors--id-">
                                <a href="#endpoints-GETapi-v1-authors--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-v1-authors--id-">
                                <a href="#endpoints-DELETEapi-v1-authors--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-authors--author_id--tickets">
                                <a href="#endpoints-GETapi-v1-authors--author_id--tickets">GET api/v1/authors/{author_id}/tickets</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-authors--author_id--tickets">
                                <a href="#endpoints-POSTapi-v1-authors--author_id--tickets">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-v1-authors--author_id--tickets--id-">
                                <a href="#endpoints-DELETEapi-v1-authors--author_id--tickets--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-v1-authors--author--tickets--ticket-">
                                <a href="#endpoints-PUTapi-v1-authors--author--tickets--ticket-">PUT api/v1/authors/{author}/tickets/{ticket}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PATCHapi-v1-authors--author--tickets--ticket-">
                                <a href="#endpoints-PATCHapi-v1-authors--author--tickets--ticket-">PATCH api/v1/authors/{author}/tickets/{ticket}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-user">
                                <a href="#endpoints-GETapi-v1-user">GET api/v1/user</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-login">
                                <a href="#endpoints-POSTapi-login">POST api/login</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-register">
                                <a href="#endpoints-POSTapi-register">POST api/register</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-logout">
                                <a href="#endpoints-POSTapi-logout">POST api/logout</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-tickets">
                                <a href="#endpoints-GETapi-tickets">GET api/tickets</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-user">
                                <a href="#endpoints-GETapi-user">GET api/user</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: June 30, 2025</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost:8000</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>To authenticate requests, include an <strong><code>Authorization</code></strong> header with the value <strong><code>"Bearer {YOUR_AUTH_KEY}"</code></strong>.</p>
<p>All authenticated endpoints are marked with a <code>requires authentication</code> badge in the documentation below.</p>
<p>You can retrieve your token by visiting your dashboard and clicking <b>Generate API token</b>.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-v1-tickets">GET api/v1/tickets</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-tickets">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/tickets" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/tickets"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-tickets">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 1,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;est quis velit&quot;,
                &quot;status&quot;: &quot;C&quot;,
                &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 8
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://localhost:8000/api/v1/authors/8&quot;
                    }
                }
            },
            &quot;links&quot;: [
                {
                    &quot;self&quot;: &quot;http://localhost:8000/api/v1/tickets/1&quot;
                }
            ]
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 2,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;veritatis corrupti est&quot;,
                &quot;status&quot;: &quot;C&quot;,
                &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 7
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://localhost:8000/api/v1/authors/7&quot;
                    }
                }
            },
            &quot;links&quot;: [
                {
                    &quot;self&quot;: &quot;http://localhost:8000/api/v1/tickets/2&quot;
                }
            ]
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 3,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;eos eius quod&quot;,
                &quot;status&quot;: &quot;C&quot;,
                &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 10
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://localhost:8000/api/v1/authors/10&quot;
                    }
                }
            },
            &quot;links&quot;: [
                {
                    &quot;self&quot;: &quot;http://localhost:8000/api/v1/tickets/3&quot;
                }
            ]
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 4,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;quo soluta necessitatibus&quot;,
                &quot;status&quot;: &quot;X&quot;,
                &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 5
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://localhost:8000/api/v1/authors/5&quot;
                    }
                }
            },
            &quot;links&quot;: [
                {
                    &quot;self&quot;: &quot;http://localhost:8000/api/v1/tickets/4&quot;
                }
            ]
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 5,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;cum quae eaque&quot;,
                &quot;status&quot;: &quot;H&quot;,
                &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 6
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://localhost:8000/api/v1/authors/6&quot;
                    }
                }
            },
            &quot;links&quot;: [
                {
                    &quot;self&quot;: &quot;http://localhost:8000/api/v1/tickets/5&quot;
                }
            ]
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 6,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;nemo sint nesciunt&quot;,
                &quot;status&quot;: &quot;A&quot;,
                &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 2
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://localhost:8000/api/v1/authors/2&quot;
                    }
                }
            },
            &quot;links&quot;: [
                {
                    &quot;self&quot;: &quot;http://localhost:8000/api/v1/tickets/6&quot;
                }
            ]
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 7,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;saepe illo quibusdam&quot;,
                &quot;status&quot;: &quot;H&quot;,
                &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 1
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://localhost:8000/api/v1/authors/1&quot;
                    }
                }
            },
            &quot;links&quot;: [
                {
                    &quot;self&quot;: &quot;http://localhost:8000/api/v1/tickets/7&quot;
                }
            ]
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 8,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;facere qui et&quot;,
                &quot;status&quot;: &quot;H&quot;,
                &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 5
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://localhost:8000/api/v1/authors/5&quot;
                    }
                }
            },
            &quot;links&quot;: [
                {
                    &quot;self&quot;: &quot;http://localhost:8000/api/v1/tickets/8&quot;
                }
            ]
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 9,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;tempora nam culpa&quot;,
                &quot;status&quot;: &quot;C&quot;,
                &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 1
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://localhost:8000/api/v1/authors/1&quot;
                    }
                }
            },
            &quot;links&quot;: [
                {
                    &quot;self&quot;: &quot;http://localhost:8000/api/v1/tickets/9&quot;
                }
            ]
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 10,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;et ratione maxime&quot;,
                &quot;status&quot;: &quot;C&quot;,
                &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 6
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://localhost:8000/api/v1/authors/6&quot;
                    }
                }
            },
            &quot;links&quot;: [
                {
                    &quot;self&quot;: &quot;http://localhost:8000/api/v1/tickets/10&quot;
                }
            ]
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 11,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;nihil porro fugiat&quot;,
                &quot;status&quot;: &quot;A&quot;,
                &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 7
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://localhost:8000/api/v1/authors/7&quot;
                    }
                }
            },
            &quot;links&quot;: [
                {
                    &quot;self&quot;: &quot;http://localhost:8000/api/v1/tickets/11&quot;
                }
            ]
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 12,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;dicta sit omnis&quot;,
                &quot;status&quot;: &quot;A&quot;,
                &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 10
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://localhost:8000/api/v1/authors/10&quot;
                    }
                }
            },
            &quot;links&quot;: [
                {
                    &quot;self&quot;: &quot;http://localhost:8000/api/v1/tickets/12&quot;
                }
            ]
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 13,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;sit numquam architecto&quot;,
                &quot;status&quot;: &quot;A&quot;,
                &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 8
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://localhost:8000/api/v1/authors/8&quot;
                    }
                }
            },
            &quot;links&quot;: [
                {
                    &quot;self&quot;: &quot;http://localhost:8000/api/v1/tickets/13&quot;
                }
            ]
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 14,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;atque vel est&quot;,
                &quot;status&quot;: &quot;X&quot;,
                &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 4
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://localhost:8000/api/v1/authors/4&quot;
                    }
                }
            },
            &quot;links&quot;: [
                {
                    &quot;self&quot;: &quot;http://localhost:8000/api/v1/tickets/14&quot;
                }
            ]
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 15,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;excepturi soluta fugiat&quot;,
                &quot;status&quot;: &quot;A&quot;,
                &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 3
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://localhost:8000/api/v1/authors/3&quot;
                    }
                }
            },
            &quot;links&quot;: [
                {
                    &quot;self&quot;: &quot;http://localhost:8000/api/v1/tickets/15&quot;
                }
            ]
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://localhost:8000/api/v1/tickets?page=1&quot;,
        &quot;last&quot;: &quot;http://localhost:8000/api/v1/tickets?page=7&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: &quot;http://localhost:8000/api/v1/tickets?page=2&quot;
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 7,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/v1/tickets?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/v1/tickets?page=2&quot;,
                &quot;label&quot;: &quot;2&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/v1/tickets?page=3&quot;,
                &quot;label&quot;: &quot;3&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/v1/tickets?page=4&quot;,
                &quot;label&quot;: &quot;4&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/v1/tickets?page=5&quot;,
                &quot;label&quot;: &quot;5&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/v1/tickets?page=6&quot;,
                &quot;label&quot;: &quot;6&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/v1/tickets?page=7&quot;,
                &quot;label&quot;: &quot;7&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/v1/tickets?page=2&quot;,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://localhost:8000/api/v1/tickets&quot;,
        &quot;per_page&quot;: 15,
        &quot;to&quot;: 15,
        &quot;total&quot;: 100
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-tickets" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-tickets"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-tickets"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-tickets" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-tickets">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-tickets" data-method="GET"
      data-path="api/v1/tickets"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-tickets', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-tickets"
                    onclick="tryItOut('GETapi-v1-tickets');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-tickets"
                    onclick="cancelTryOut('GETapi-v1-tickets');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-tickets"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/tickets</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-tickets"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-tickets"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-tickets"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-tickets">Store a newly created resource in storage.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-tickets">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/tickets" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"data\": {
        \"attributes\": {
            \"title\": \"consequatur\",
            \"description\": \"Dolores dolorum amet iste laborum eius est dolor.\",
            \"status\": \"C\"
        },
        \"relationships\": {
            \"author\": {
                \"data\": {
                    \"id\": 17
                }
            }
        }
    }
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/tickets"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "data": {
        "attributes": {
            "title": "consequatur",
            "description": "Dolores dolorum amet iste laborum eius est dolor.",
            "status": "C"
        },
        "relationships": {
            "author": {
                "data": {
                    "id": 17
                }
            }
        }
    }
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-tickets">
</span>
<span id="execution-results-POSTapi-v1-tickets" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-tickets"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-tickets"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-tickets" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-tickets">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-tickets" data-method="POST"
      data-path="api/v1/tickets"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-tickets', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-tickets"
                    onclick="tryItOut('POSTapi-v1-tickets');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-tickets"
                    onclick="cancelTryOut('POSTapi-v1-tickets');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-tickets"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/tickets</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-tickets"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-tickets"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-tickets"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>data</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>attributes</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.title"                data-endpoint="POSTapi-v1-tickets"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.description"                data-endpoint="POSTapi-v1-tickets"
               value="Dolores dolorum amet iste laborum eius est dolor."
               data-component="body">
    <br>
<p>Example: <code>Dolores dolorum amet iste laborum eius est dolor.</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.status"                data-endpoint="POSTapi-v1-tickets"
               value="C"
               data-component="body">
    <br>
<p>Example: <code>C</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>A</code></li> <li><code>C</code></li> <li><code>H</code></li> <li><code>X</code></li></ul>
                    </div>
                                    </details>
        </div>
                                                                    <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>relationships</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 28px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>author</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 42px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>data</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 56px; clear: unset;">
                        <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="data.relationships.author.data.id"                data-endpoint="POSTapi-v1-tickets"
               value="17"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the users table. Example: <code>17</code></p>
                    </div>
                                    </details>
        </div>
                                        </details>
        </div>
                                        </details>
        </div>
                                        </details>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-v1-tickets--id-">Display the specified resource.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-tickets--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/tickets/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/tickets/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-tickets--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;type&quot;: &quot;ticket&quot;,
        &quot;id&quot;: 1,
        &quot;attributes&quot;: {
            &quot;title&quot;: &quot;est quis velit&quot;,
            &quot;description&quot;: &quot;Aut est autem dolor vitae laboriosam nostrum. Dolore pariatur et error et. Quos et doloribus fuga veritatis.&quot;,
            &quot;status&quot;: &quot;C&quot;,
            &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
        },
        &quot;relationships&quot;: {
            &quot;author&quot;: {
                &quot;data&quot;: {
                    &quot;type&quot;: &quot;user&quot;,
                    &quot;id&quot;: 8
                },
                &quot;links&quot;: {
                    &quot;self&quot;: &quot;http://localhost:8000/api/v1/authors/8&quot;
                }
            }
        },
        &quot;links&quot;: [
            {
                &quot;self&quot;: &quot;http://localhost:8000/api/v1/tickets/1&quot;
            }
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-tickets--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-tickets--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-tickets--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-tickets--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-tickets--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-tickets--id-" data-method="GET"
      data-path="api/v1/tickets/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-tickets--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-tickets--id-"
                    onclick="tryItOut('GETapi-v1-tickets--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-tickets--id-"
                    onclick="cancelTryOut('GETapi-v1-tickets--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-tickets--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/tickets/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-tickets--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-tickets--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-tickets--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-v1-tickets--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the ticket. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-DELETEapi-v1-tickets--id-">Remove the specified resource from storage.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-v1-tickets--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/v1/tickets/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/tickets/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-tickets--id-">
</span>
<span id="execution-results-DELETEapi-v1-tickets--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-tickets--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-tickets--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-tickets--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-tickets--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-tickets--id-" data-method="DELETE"
      data-path="api/v1/tickets/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-tickets--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-tickets--id-"
                    onclick="tryItOut('DELETEapi-v1-tickets--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-tickets--id-"
                    onclick="cancelTryOut('DELETEapi-v1-tickets--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-tickets--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/tickets/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="DELETEapi-v1-tickets--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-tickets--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-tickets--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-v1-tickets--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the ticket. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-v1-tickets--ticket_id-">PUT api/v1/tickets/{ticket_id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-v1-tickets--ticket_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/v1/tickets/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"data\": {
        \"attributes\": {
            \"title\": \"consequatur\",
            \"description\": \"Dolores dolorum amet iste laborum eius est dolor.\",
            \"status\": \"X\"
        },
        \"relationships\": {
            \"author\": {
                \"data\": {
                    \"id\": 17
                }
            }
        }
    }
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/tickets/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "data": {
        "attributes": {
            "title": "consequatur",
            "description": "Dolores dolorum amet iste laborum eius est dolor.",
            "status": "X"
        },
        "relationships": {
            "author": {
                "data": {
                    "id": 17
                }
            }
        }
    }
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-tickets--ticket_id-">
</span>
<span id="execution-results-PUTapi-v1-tickets--ticket_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-tickets--ticket_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-tickets--ticket_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-tickets--ticket_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-tickets--ticket_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-tickets--ticket_id-" data-method="PUT"
      data-path="api/v1/tickets/{ticket_id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-tickets--ticket_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-tickets--ticket_id-"
                    onclick="tryItOut('PUTapi-v1-tickets--ticket_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-tickets--ticket_id-"
                    onclick="cancelTryOut('PUTapi-v1-tickets--ticket_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-tickets--ticket_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/tickets/{ticket_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="PUTapi-v1-tickets--ticket_id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-tickets--ticket_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-tickets--ticket_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>ticket_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="ticket_id"                data-endpoint="PUTapi-v1-tickets--ticket_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the ticket. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>data</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>attributes</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.title"                data-endpoint="PUTapi-v1-tickets--ticket_id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.description"                data-endpoint="PUTapi-v1-tickets--ticket_id-"
               value="Dolores dolorum amet iste laborum eius est dolor."
               data-component="body">
    <br>
<p>Example: <code>Dolores dolorum amet iste laborum eius est dolor.</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.status"                data-endpoint="PUTapi-v1-tickets--ticket_id-"
               value="X"
               data-component="body">
    <br>
<p>Example: <code>X</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>A</code></li> <li><code>C</code></li> <li><code>H</code></li> <li><code>X</code></li></ul>
                    </div>
                                    </details>
        </div>
                                                                    <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>relationships</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 28px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>author</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 42px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>data</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 56px; clear: unset;">
                        <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="data.relationships.author.data.id"                data-endpoint="PUTapi-v1-tickets--ticket_id-"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
                    </div>
                                    </details>
        </div>
                                        </details>
        </div>
                                        </details>
        </div>
                                        </details>
        </div>
        </form>

                    <h2 id="endpoints-PATCHapi-v1-tickets--ticket_id-">Update the specified resource in storage.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PATCHapi-v1-tickets--ticket_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost:8000/api/v1/tickets/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"data\": {
        \"attributes\": {
            \"title\": \"consequatur\",
            \"description\": \"Dolores dolorum amet iste laborum eius est dolor.\",
            \"status\": \"H\"
        },
        \"relationships\": {
            \"author\": {
                \"data\": {
                    \"id\": 17
                }
            }
        }
    }
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/tickets/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "data": {
        "attributes": {
            "title": "consequatur",
            "description": "Dolores dolorum amet iste laborum eius est dolor.",
            "status": "H"
        },
        "relationships": {
            "author": {
                "data": {
                    "id": 17
                }
            }
        }
    }
};

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-v1-tickets--ticket_id-">
</span>
<span id="execution-results-PATCHapi-v1-tickets--ticket_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-v1-tickets--ticket_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-v1-tickets--ticket_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-v1-tickets--ticket_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-v1-tickets--ticket_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-v1-tickets--ticket_id-" data-method="PATCH"
      data-path="api/v1/tickets/{ticket_id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-v1-tickets--ticket_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-v1-tickets--ticket_id-"
                    onclick="tryItOut('PATCHapi-v1-tickets--ticket_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-v1-tickets--ticket_id-"
                    onclick="cancelTryOut('PATCHapi-v1-tickets--ticket_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-v1-tickets--ticket_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/tickets/{ticket_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="PATCHapi-v1-tickets--ticket_id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-v1-tickets--ticket_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-v1-tickets--ticket_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>ticket_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="ticket_id"                data-endpoint="PATCHapi-v1-tickets--ticket_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the ticket. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>data</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>attributes</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.title"                data-endpoint="PATCHapi-v1-tickets--ticket_id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.description"                data-endpoint="PATCHapi-v1-tickets--ticket_id-"
               value="Dolores dolorum amet iste laborum eius est dolor."
               data-component="body">
    <br>
<p>Example: <code>Dolores dolorum amet iste laborum eius est dolor.</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.status"                data-endpoint="PATCHapi-v1-tickets--ticket_id-"
               value="H"
               data-component="body">
    <br>
<p>Example: <code>H</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>A</code></li> <li><code>C</code></li> <li><code>H</code></li> <li><code>X</code></li></ul>
                    </div>
                                    </details>
        </div>
                                                                    <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>relationships</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 28px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>author</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 42px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>data</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 56px; clear: unset;">
                        <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="data.relationships.author.data.id"                data-endpoint="PATCHapi-v1-tickets--ticket_id-"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
                    </div>
                                    </details>
        </div>
                                        </details>
        </div>
                                        </details>
        </div>
                                        </details>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-v1-users">Display a listing of the resource.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-users">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/users" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/users"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-users">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 1,
            &quot;atrributes&quot;: {
                &quot;name&quot;: &quot;Jamal McCullough&quot;,
                &quot;email&quot;: &quot;jkunde@example.net&quot;,
                &quot;isManager&quot;: false
            },
            &quot;links&quot;: [
                {
                    &quot;self&quot;: &quot;http://localhost:8000/api/v1/authors/1&quot;
                }
            ]
        },
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 2,
            &quot;atrributes&quot;: {
                &quot;name&quot;: &quot;Candice Kerluke&quot;,
                &quot;email&quot;: &quot;herman.forrest@example.org&quot;,
                &quot;isManager&quot;: false
            },
            &quot;links&quot;: [
                {
                    &quot;self&quot;: &quot;http://localhost:8000/api/v1/authors/2&quot;
                }
            ]
        },
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 3,
            &quot;atrributes&quot;: {
                &quot;name&quot;: &quot;Erica Robel DDS&quot;,
                &quot;email&quot;: &quot;lebsack.eda@example.net&quot;,
                &quot;isManager&quot;: false
            },
            &quot;links&quot;: [
                {
                    &quot;self&quot;: &quot;http://localhost:8000/api/v1/authors/3&quot;
                }
            ]
        },
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 4,
            &quot;atrributes&quot;: {
                &quot;name&quot;: &quot;Robbie Lueilwitz&quot;,
                &quot;email&quot;: &quot;joyce07@example.org&quot;,
                &quot;isManager&quot;: false
            },
            &quot;links&quot;: [
                {
                    &quot;self&quot;: &quot;http://localhost:8000/api/v1/authors/4&quot;
                }
            ]
        },
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 5,
            &quot;atrributes&quot;: {
                &quot;name&quot;: &quot;Eleanora Schmitt&quot;,
                &quot;email&quot;: &quot;effertz.ferne@example.com&quot;,
                &quot;isManager&quot;: false
            },
            &quot;links&quot;: [
                {
                    &quot;self&quot;: &quot;http://localhost:8000/api/v1/authors/5&quot;
                }
            ]
        },
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 6,
            &quot;atrributes&quot;: {
                &quot;name&quot;: &quot;Araceli Sauer&quot;,
                &quot;email&quot;: &quot;armando.hagenes@example.com&quot;,
                &quot;isManager&quot;: false
            },
            &quot;links&quot;: [
                {
                    &quot;self&quot;: &quot;http://localhost:8000/api/v1/authors/6&quot;
                }
            ]
        },
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 7,
            &quot;atrributes&quot;: {
                &quot;name&quot;: &quot;Cedrick Williamson&quot;,
                &quot;email&quot;: &quot;daniella.johnston@example.net&quot;,
                &quot;isManager&quot;: false
            },
            &quot;links&quot;: [
                {
                    &quot;self&quot;: &quot;http://localhost:8000/api/v1/authors/7&quot;
                }
            ]
        },
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 8,
            &quot;atrributes&quot;: {
                &quot;name&quot;: &quot;Fatima Tremblay&quot;,
                &quot;email&quot;: &quot;jaydon.torphy@example.com&quot;,
                &quot;isManager&quot;: false
            },
            &quot;links&quot;: [
                {
                    &quot;self&quot;: &quot;http://localhost:8000/api/v1/authors/8&quot;
                }
            ]
        },
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 9,
            &quot;atrributes&quot;: {
                &quot;name&quot;: &quot;Ward Emard&quot;,
                &quot;email&quot;: &quot;hettie.renner@example.net&quot;,
                &quot;isManager&quot;: false
            },
            &quot;links&quot;: [
                {
                    &quot;self&quot;: &quot;http://localhost:8000/api/v1/authors/9&quot;
                }
            ]
        },
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 10,
            &quot;atrributes&quot;: {
                &quot;name&quot;: &quot;Jazmin Botsford&quot;,
                &quot;email&quot;: &quot;ahmad.bayer@example.net&quot;,
                &quot;isManager&quot;: false
            },
            &quot;links&quot;: [
                {
                    &quot;self&quot;: &quot;http://localhost:8000/api/v1/authors/10&quot;
                }
            ]
        },
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 11,
            &quot;atrributes&quot;: {
                &quot;name&quot;: &quot;The Manager&quot;,
                &quot;email&quot;: &quot;manager@manager.com&quot;,
                &quot;isManager&quot;: true
            },
            &quot;links&quot;: [
                {
                    &quot;self&quot;: &quot;http://localhost:8000/api/v1/authors/11&quot;
                }
            ]
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://localhost:8000/api/v1/users?page=1&quot;,
        &quot;last&quot;: &quot;http://localhost:8000/api/v1/users?page=1&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: null
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/v1/users?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://localhost:8000/api/v1/users&quot;,
        &quot;per_page&quot;: 15,
        &quot;to&quot;: 11,
        &quot;total&quot;: 11
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-users" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-users"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-users"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-users">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-users" data-method="GET"
      data-path="api/v1/users"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-users', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-users"
                    onclick="tryItOut('GETapi-v1-users');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-users"
                    onclick="cancelTryOut('GETapi-v1-users');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-users"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/users</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-users"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-users">Store a newly created resource in storage.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-users">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/users" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"data\": {
        \"attributes\": {
            \"name\": \"consequatur\",
            \"email\": \"carolyne.luettgen@example.org\",
            \"isManager\": true,
            \"password\": \"O[2UZ5ij-e\\/dl4m{o,\"
        }
    }
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/users"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "data": {
        "attributes": {
            "name": "consequatur",
            "email": "carolyne.luettgen@example.org",
            "isManager": true,
            "password": "O[2UZ5ij-e\/dl4m{o,"
        }
    }
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-users">
</span>
<span id="execution-results-POSTapi-v1-users" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-users"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-users"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-users">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-users" data-method="POST"
      data-path="api/v1/users"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-users', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-users"
                    onclick="tryItOut('POSTapi-v1-users');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-users"
                    onclick="cancelTryOut('POSTapi-v1-users');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-users"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/users</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-users"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>data</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>attributes</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.name"                data-endpoint="POSTapi-v1-users"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.email"                data-endpoint="POSTapi-v1-users"
               value="carolyne.luettgen@example.org"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>carolyne.luettgen@example.org</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>isManager</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-v1-users" style="display: none">
            <input type="radio" name="data.attributes.isManager"
                   value="true"
                   data-endpoint="POSTapi-v1-users"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-v1-users" style="display: none">
            <input type="radio" name="data.attributes.isManager"
                   value="false"
                   data-endpoint="POSTapi-v1-users"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.password"                data-endpoint="POSTapi-v1-users"
               value="O[2UZ5ij-e/dl4m{o,"
               data-component="body">
    <br>
<p>Example: <code>O[2UZ5ij-e/dl4m{o,</code></p>
                    </div>
                                    </details>
        </div>
                                        </details>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-v1-users--id-">Display the specified resource.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-users--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/users/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/users/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-users--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;type&quot;: &quot;user&quot;,
        &quot;id&quot;: 1,
        &quot;atrributes&quot;: {
            &quot;name&quot;: &quot;Jamal McCullough&quot;,
            &quot;email&quot;: &quot;jkunde@example.net&quot;,
            &quot;isManager&quot;: false
        },
        &quot;links&quot;: [
            {
                &quot;self&quot;: &quot;http://localhost:8000/api/v1/authors/1&quot;
            }
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-users--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-users--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-users--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-users--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-users--id-" data-method="GET"
      data-path="api/v1/users/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-users--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-users--id-"
                    onclick="tryItOut('GETapi-v1-users--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-users--id-"
                    onclick="cancelTryOut('GETapi-v1-users--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-users--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/users/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-users--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-v1-users--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the user. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-DELETEapi-v1-users--id-">Remove the specified resource from storage.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-v1-users--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/v1/users/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/users/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-users--id-">
</span>
<span id="execution-results-DELETEapi-v1-users--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-users--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-users--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-users--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-users--id-" data-method="DELETE"
      data-path="api/v1/users/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-users--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-users--id-"
                    onclick="tryItOut('DELETEapi-v1-users--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-users--id-"
                    onclick="cancelTryOut('DELETEapi-v1-users--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-users--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/users/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="DELETEapi-v1-users--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-v1-users--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the user. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-v1-users--user-">PUT api/v1/users/{user}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-v1-users--user-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/v1/users/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"data\": {
        \"attributes\": {
            \"name\": \"consequatur\",
            \"email\": \"carolyne.luettgen@example.org\",
            \"isManager\": false,
            \"password\": \"O[2UZ5ij-e\\/dl4m{o,\"
        }
    }
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/users/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "data": {
        "attributes": {
            "name": "consequatur",
            "email": "carolyne.luettgen@example.org",
            "isManager": false,
            "password": "O[2UZ5ij-e\/dl4m{o,"
        }
    }
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-users--user-">
</span>
<span id="execution-results-PUTapi-v1-users--user-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-users--user-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-users--user-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-users--user-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-users--user-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-users--user-" data-method="PUT"
      data-path="api/v1/users/{user}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-users--user-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-users--user-"
                    onclick="tryItOut('PUTapi-v1-users--user-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-users--user-"
                    onclick="cancelTryOut('PUTapi-v1-users--user-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-users--user-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/users/{user}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="PUTapi-v1-users--user-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-users--user-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-users--user-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>user</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="user"                data-endpoint="PUTapi-v1-users--user-"
               value="1"
               data-component="url">
    <br>
<p>The user. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>data</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>attributes</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.name"                data-endpoint="PUTapi-v1-users--user-"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.email"                data-endpoint="PUTapi-v1-users--user-"
               value="carolyne.luettgen@example.org"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>carolyne.luettgen@example.org</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>isManager</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
 &nbsp;
                <label data-endpoint="PUTapi-v1-users--user-" style="display: none">
            <input type="radio" name="data.attributes.isManager"
                   value="true"
                   data-endpoint="PUTapi-v1-users--user-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-v1-users--user-" style="display: none">
            <input type="radio" name="data.attributes.isManager"
                   value="false"
                   data-endpoint="PUTapi-v1-users--user-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.password"                data-endpoint="PUTapi-v1-users--user-"
               value="O[2UZ5ij-e/dl4m{o,"
               data-component="body">
    <br>
<p>Example: <code>O[2UZ5ij-e/dl4m{o,</code></p>
                    </div>
                                    </details>
        </div>
                                        </details>
        </div>
        </form>

                    <h2 id="endpoints-PATCHapi-v1-users--user-">Update the specified resource in storage.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PATCHapi-v1-users--user-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost:8000/api/v1/users/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"data\": {
        \"attributes\": {
            \"name\": \"consequatur\",
            \"email\": \"carolyne.luettgen@example.org\",
            \"isManager\": false,
            \"password\": \"O[2UZ5ij-e\\/dl4m{o,\"
        }
    }
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/users/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "data": {
        "attributes": {
            "name": "consequatur",
            "email": "carolyne.luettgen@example.org",
            "isManager": false,
            "password": "O[2UZ5ij-e\/dl4m{o,"
        }
    }
};

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-v1-users--user-">
</span>
<span id="execution-results-PATCHapi-v1-users--user-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-v1-users--user-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-v1-users--user-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-v1-users--user-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-v1-users--user-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-v1-users--user-" data-method="PATCH"
      data-path="api/v1/users/{user}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-v1-users--user-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-v1-users--user-"
                    onclick="tryItOut('PATCHapi-v1-users--user-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-v1-users--user-"
                    onclick="cancelTryOut('PATCHapi-v1-users--user-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-v1-users--user-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/users/{user}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="PATCHapi-v1-users--user-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-v1-users--user-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-v1-users--user-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>user</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="user"                data-endpoint="PATCHapi-v1-users--user-"
               value="1"
               data-component="url">
    <br>
<p>The user. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>data</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>attributes</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.name"                data-endpoint="PATCHapi-v1-users--user-"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.email"                data-endpoint="PATCHapi-v1-users--user-"
               value="carolyne.luettgen@example.org"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>carolyne.luettgen@example.org</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>isManager</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="PATCHapi-v1-users--user-" style="display: none">
            <input type="radio" name="data.attributes.isManager"
                   value="true"
                   data-endpoint="PATCHapi-v1-users--user-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PATCHapi-v1-users--user-" style="display: none">
            <input type="radio" name="data.attributes.isManager"
                   value="false"
                   data-endpoint="PATCHapi-v1-users--user-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.password"                data-endpoint="PATCHapi-v1-users--user-"
               value="O[2UZ5ij-e/dl4m{o,"
               data-component="body">
    <br>
<p>Example: <code>O[2UZ5ij-e/dl4m{o,</code></p>
                    </div>
                                    </details>
        </div>
                                        </details>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-v1-authors">Display a listing of the resource.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-authors">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/authors" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/authors"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-authors">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 1,
            &quot;atrributes&quot;: {
                &quot;name&quot;: &quot;Jamal McCullough&quot;,
                &quot;email&quot;: &quot;jkunde@example.net&quot;,
                &quot;isManager&quot;: false,
                &quot;emaiVerifiedAt&quot;: &quot;2025-06-29T11:48:03.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
                &quot;createdAt&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
            },
            &quot;links&quot;: [
                {
                    &quot;self&quot;: &quot;http://localhost:8000/api/v1/authors/1&quot;
                }
            ]
        },
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 2,
            &quot;atrributes&quot;: {
                &quot;name&quot;: &quot;Candice Kerluke&quot;,
                &quot;email&quot;: &quot;herman.forrest@example.org&quot;,
                &quot;isManager&quot;: false,
                &quot;emaiVerifiedAt&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
                &quot;createdAt&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
            },
            &quot;links&quot;: [
                {
                    &quot;self&quot;: &quot;http://localhost:8000/api/v1/authors/2&quot;
                }
            ]
        },
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 3,
            &quot;atrributes&quot;: {
                &quot;name&quot;: &quot;Erica Robel DDS&quot;,
                &quot;email&quot;: &quot;lebsack.eda@example.net&quot;,
                &quot;isManager&quot;: false,
                &quot;emaiVerifiedAt&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
                &quot;createdAt&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
            },
            &quot;links&quot;: [
                {
                    &quot;self&quot;: &quot;http://localhost:8000/api/v1/authors/3&quot;
                }
            ]
        },
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 4,
            &quot;atrributes&quot;: {
                &quot;name&quot;: &quot;Robbie Lueilwitz&quot;,
                &quot;email&quot;: &quot;joyce07@example.org&quot;,
                &quot;isManager&quot;: false,
                &quot;emaiVerifiedAt&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
                &quot;createdAt&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
            },
            &quot;links&quot;: [
                {
                    &quot;self&quot;: &quot;http://localhost:8000/api/v1/authors/4&quot;
                }
            ]
        },
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 5,
            &quot;atrributes&quot;: {
                &quot;name&quot;: &quot;Eleanora Schmitt&quot;,
                &quot;email&quot;: &quot;effertz.ferne@example.com&quot;,
                &quot;isManager&quot;: false,
                &quot;emaiVerifiedAt&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
                &quot;createdAt&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
            },
            &quot;links&quot;: [
                {
                    &quot;self&quot;: &quot;http://localhost:8000/api/v1/authors/5&quot;
                }
            ]
        },
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 6,
            &quot;atrributes&quot;: {
                &quot;name&quot;: &quot;Araceli Sauer&quot;,
                &quot;email&quot;: &quot;armando.hagenes@example.com&quot;,
                &quot;isManager&quot;: false,
                &quot;emaiVerifiedAt&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
                &quot;createdAt&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
            },
            &quot;links&quot;: [
                {
                    &quot;self&quot;: &quot;http://localhost:8000/api/v1/authors/6&quot;
                }
            ]
        },
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 7,
            &quot;atrributes&quot;: {
                &quot;name&quot;: &quot;Cedrick Williamson&quot;,
                &quot;email&quot;: &quot;daniella.johnston@example.net&quot;,
                &quot;isManager&quot;: false,
                &quot;emaiVerifiedAt&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
                &quot;createdAt&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
            },
            &quot;links&quot;: [
                {
                    &quot;self&quot;: &quot;http://localhost:8000/api/v1/authors/7&quot;
                }
            ]
        },
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 8,
            &quot;atrributes&quot;: {
                &quot;name&quot;: &quot;Fatima Tremblay&quot;,
                &quot;email&quot;: &quot;jaydon.torphy@example.com&quot;,
                &quot;isManager&quot;: false,
                &quot;emaiVerifiedAt&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
                &quot;createdAt&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
            },
            &quot;links&quot;: [
                {
                    &quot;self&quot;: &quot;http://localhost:8000/api/v1/authors/8&quot;
                }
            ]
        },
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 9,
            &quot;atrributes&quot;: {
                &quot;name&quot;: &quot;Ward Emard&quot;,
                &quot;email&quot;: &quot;hettie.renner@example.net&quot;,
                &quot;isManager&quot;: false,
                &quot;emaiVerifiedAt&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
                &quot;createdAt&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
            },
            &quot;links&quot;: [
                {
                    &quot;self&quot;: &quot;http://localhost:8000/api/v1/authors/9&quot;
                }
            ]
        },
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 10,
            &quot;atrributes&quot;: {
                &quot;name&quot;: &quot;Jazmin Botsford&quot;,
                &quot;email&quot;: &quot;ahmad.bayer@example.net&quot;,
                &quot;isManager&quot;: false,
                &quot;emaiVerifiedAt&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
                &quot;createdAt&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
            },
            &quot;links&quot;: [
                {
                    &quot;self&quot;: &quot;http://localhost:8000/api/v1/authors/10&quot;
                }
            ]
        },
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 11,
            &quot;atrributes&quot;: {
                &quot;name&quot;: &quot;The Manager&quot;,
                &quot;email&quot;: &quot;manager@manager.com&quot;,
                &quot;isManager&quot;: true,
                &quot;emaiVerifiedAt&quot;: null,
                &quot;updatedAt&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
                &quot;createdAt&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
            },
            &quot;links&quot;: [
                {
                    &quot;self&quot;: &quot;http://localhost:8000/api/v1/authors/11&quot;
                }
            ]
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://localhost:8000/api/v1/authors?page=1&quot;,
        &quot;last&quot;: &quot;http://localhost:8000/api/v1/authors?page=74&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: &quot;http://localhost:8000/api/v1/authors?page=2&quot;
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 74,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/v1/authors?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/v1/authors?page=2&quot;,
                &quot;label&quot;: &quot;2&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/v1/authors?page=3&quot;,
                &quot;label&quot;: &quot;3&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/v1/authors?page=4&quot;,
                &quot;label&quot;: &quot;4&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/v1/authors?page=5&quot;,
                &quot;label&quot;: &quot;5&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/v1/authors?page=6&quot;,
                &quot;label&quot;: &quot;6&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/v1/authors?page=7&quot;,
                &quot;label&quot;: &quot;7&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/v1/authors?page=8&quot;,
                &quot;label&quot;: &quot;8&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/v1/authors?page=9&quot;,
                &quot;label&quot;: &quot;9&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/v1/authors?page=10&quot;,
                &quot;label&quot;: &quot;10&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;...&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/v1/authors?page=73&quot;,
                &quot;label&quot;: &quot;73&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/v1/authors?page=74&quot;,
                &quot;label&quot;: &quot;74&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/v1/authors?page=2&quot;,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://localhost:8000/api/v1/authors&quot;,
        &quot;per_page&quot;: 15,
        &quot;to&quot;: 11,
        &quot;total&quot;: 1100
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-authors" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-authors"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-authors"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-authors" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-authors">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-authors" data-method="GET"
      data-path="api/v1/authors"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-authors', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-authors"
                    onclick="tryItOut('GETapi-v1-authors');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-authors"
                    onclick="cancelTryOut('GETapi-v1-authors');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-authors"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/authors</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-authors"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-authors"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-authors"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-authors--id-">Display the specified resource.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-authors--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/authors/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/authors/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-authors--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;type&quot;: &quot;user&quot;,
        &quot;id&quot;: 1,
        &quot;atrributes&quot;: {
            &quot;name&quot;: &quot;Jamal McCullough&quot;,
            &quot;email&quot;: &quot;jkunde@example.net&quot;,
            &quot;isManager&quot;: false,
            &quot;emaiVerifiedAt&quot;: &quot;2025-06-29T11:48:03.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
            &quot;createdAt&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
        },
        &quot;links&quot;: [
            {
                &quot;self&quot;: &quot;http://localhost:8000/api/v1/authors/1&quot;
            }
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-authors--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-authors--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-authors--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-authors--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-authors--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-authors--id-" data-method="GET"
      data-path="api/v1/authors/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-authors--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-authors--id-"
                    onclick="tryItOut('GETapi-v1-authors--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-authors--id-"
                    onclick="cancelTryOut('GETapi-v1-authors--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-authors--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/authors/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-authors--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-authors--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-authors--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-v1-authors--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the author. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-DELETEapi-v1-authors--id-">Remove the specified resource from storage.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-v1-authors--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/v1/authors/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/authors/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-authors--id-">
</span>
<span id="execution-results-DELETEapi-v1-authors--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-authors--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-authors--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-authors--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-authors--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-authors--id-" data-method="DELETE"
      data-path="api/v1/authors/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-authors--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-authors--id-"
                    onclick="tryItOut('DELETEapi-v1-authors--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-authors--id-"
                    onclick="cancelTryOut('DELETEapi-v1-authors--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-authors--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/authors/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="DELETEapi-v1-authors--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-authors--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-authors--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-v1-authors--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the author. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-v1-authors--author_id--tickets">GET api/v1/authors/{author_id}/tickets</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-authors--author_id--tickets">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/authors/consequatur/tickets" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/authors/consequatur/tickets"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-authors--author_id--tickets">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://localhost:8000/api/v1/authors/consequatur/tickets?page=1&quot;,
        &quot;last&quot;: &quot;http://localhost:8000/api/v1/authors/consequatur/tickets?page=1&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: null
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: null,
        &quot;last_page&quot;: 1,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/v1/authors/consequatur/tickets?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://localhost:8000/api/v1/authors/consequatur/tickets&quot;,
        &quot;per_page&quot;: 15,
        &quot;to&quot;: null,
        &quot;total&quot;: 0
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-authors--author_id--tickets" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-authors--author_id--tickets"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-authors--author_id--tickets"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-authors--author_id--tickets" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-authors--author_id--tickets">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-authors--author_id--tickets" data-method="GET"
      data-path="api/v1/authors/{author_id}/tickets"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-authors--author_id--tickets', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-authors--author_id--tickets"
                    onclick="tryItOut('GETapi-v1-authors--author_id--tickets');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-authors--author_id--tickets"
                    onclick="cancelTryOut('GETapi-v1-authors--author_id--tickets');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-authors--author_id--tickets"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/authors/{author_id}/tickets</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-authors--author_id--tickets"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-authors--author_id--tickets"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-authors--author_id--tickets"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>author_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="author_id"                data-endpoint="GETapi-v1-authors--author_id--tickets"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the author. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-v1-authors--author_id--tickets">Store a newly created resource in storage.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-authors--author_id--tickets">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/authors/consequatur/tickets" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"data\": {
        \"attributes\": {
            \"title\": \"consequatur\",
            \"description\": \"Dolores dolorum amet iste laborum eius est dolor.\",
            \"status\": \"H\"
        }
    },
    \"author\": 17
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/authors/consequatur/tickets"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "data": {
        "attributes": {
            "title": "consequatur",
            "description": "Dolores dolorum amet iste laborum eius est dolor.",
            "status": "H"
        }
    },
    "author": 17
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-authors--author_id--tickets">
</span>
<span id="execution-results-POSTapi-v1-authors--author_id--tickets" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-authors--author_id--tickets"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-authors--author_id--tickets"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-authors--author_id--tickets" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-authors--author_id--tickets">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-authors--author_id--tickets" data-method="POST"
      data-path="api/v1/authors/{author_id}/tickets"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-authors--author_id--tickets', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-authors--author_id--tickets"
                    onclick="tryItOut('POSTapi-v1-authors--author_id--tickets');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-authors--author_id--tickets"
                    onclick="cancelTryOut('POSTapi-v1-authors--author_id--tickets');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-authors--author_id--tickets"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/authors/{author_id}/tickets</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-authors--author_id--tickets"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-authors--author_id--tickets"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-authors--author_id--tickets"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>author_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="author_id"                data-endpoint="POSTapi-v1-authors--author_id--tickets"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the author. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>data</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>attributes</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.title"                data-endpoint="POSTapi-v1-authors--author_id--tickets"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.description"                data-endpoint="POSTapi-v1-authors--author_id--tickets"
               value="Dolores dolorum amet iste laborum eius est dolor."
               data-component="body">
    <br>
<p>Example: <code>Dolores dolorum amet iste laborum eius est dolor.</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.status"                data-endpoint="POSTapi-v1-authors--author_id--tickets"
               value="H"
               data-component="body">
    <br>
<p>Example: <code>H</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>A</code></li> <li><code>C</code></li> <li><code>H</code></li> <li><code>X</code></li></ul>
                    </div>
                                    </details>
        </div>
                                        </details>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>author</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="author"                data-endpoint="POSTapi-v1-authors--author_id--tickets"
               value="17"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the users table. Example: <code>17</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-v1-authors--author_id--tickets--id-">Remove the specified resource from storage.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-v1-authors--author_id--tickets--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/v1/authors/consequatur/tickets/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/authors/consequatur/tickets/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-authors--author_id--tickets--id-">
</span>
<span id="execution-results-DELETEapi-v1-authors--author_id--tickets--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-authors--author_id--tickets--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-authors--author_id--tickets--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-authors--author_id--tickets--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-authors--author_id--tickets--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-authors--author_id--tickets--id-" data-method="DELETE"
      data-path="api/v1/authors/{author_id}/tickets/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-authors--author_id--tickets--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-authors--author_id--tickets--id-"
                    onclick="tryItOut('DELETEapi-v1-authors--author_id--tickets--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-authors--author_id--tickets--id-"
                    onclick="cancelTryOut('DELETEapi-v1-authors--author_id--tickets--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-authors--author_id--tickets--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/authors/{author_id}/tickets/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="DELETEapi-v1-authors--author_id--tickets--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-authors--author_id--tickets--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-authors--author_id--tickets--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>author_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="author_id"                data-endpoint="DELETEapi-v1-authors--author_id--tickets--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the author. Example: <code>consequatur</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-v1-authors--author_id--tickets--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the ticket. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-v1-authors--author--tickets--ticket-">PUT api/v1/authors/{author}/tickets/{ticket}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-v1-authors--author--tickets--ticket-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/v1/authors/consequatur/tickets/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"data\": {
        \"attributes\": {
            \"title\": \"consequatur\",
            \"description\": \"Dolores dolorum amet iste laborum eius est dolor.\",
            \"status\": \"X\"
        },
        \"relationships\": {
            \"author\": {
                \"data\": {
                    \"id\": 17
                }
            }
        }
    }
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/authors/consequatur/tickets/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "data": {
        "attributes": {
            "title": "consequatur",
            "description": "Dolores dolorum amet iste laborum eius est dolor.",
            "status": "X"
        },
        "relationships": {
            "author": {
                "data": {
                    "id": 17
                }
            }
        }
    }
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-authors--author--tickets--ticket-">
</span>
<span id="execution-results-PUTapi-v1-authors--author--tickets--ticket-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-authors--author--tickets--ticket-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-authors--author--tickets--ticket-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-authors--author--tickets--ticket-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-authors--author--tickets--ticket-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-authors--author--tickets--ticket-" data-method="PUT"
      data-path="api/v1/authors/{author}/tickets/{ticket}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-authors--author--tickets--ticket-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-authors--author--tickets--ticket-"
                    onclick="tryItOut('PUTapi-v1-authors--author--tickets--ticket-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-authors--author--tickets--ticket-"
                    onclick="cancelTryOut('PUTapi-v1-authors--author--tickets--ticket-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-authors--author--tickets--ticket-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/authors/{author}/tickets/{ticket}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="PUTapi-v1-authors--author--tickets--ticket-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-authors--author--tickets--ticket-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-authors--author--tickets--ticket-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>author</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="author"                data-endpoint="PUTapi-v1-authors--author--tickets--ticket-"
               value="consequatur"
               data-component="url">
    <br>
<p>The author. Example: <code>consequatur</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>ticket</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="ticket"                data-endpoint="PUTapi-v1-authors--author--tickets--ticket-"
               value="1"
               data-component="url">
    <br>
<p>The ticket. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>data</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>attributes</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.title"                data-endpoint="PUTapi-v1-authors--author--tickets--ticket-"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.description"                data-endpoint="PUTapi-v1-authors--author--tickets--ticket-"
               value="Dolores dolorum amet iste laborum eius est dolor."
               data-component="body">
    <br>
<p>Example: <code>Dolores dolorum amet iste laborum eius est dolor.</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.status"                data-endpoint="PUTapi-v1-authors--author--tickets--ticket-"
               value="X"
               data-component="body">
    <br>
<p>Example: <code>X</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>A</code></li> <li><code>C</code></li> <li><code>H</code></li> <li><code>X</code></li></ul>
                    </div>
                                    </details>
        </div>
                                                                    <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>relationships</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 28px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>author</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 42px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>data</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 56px; clear: unset;">
                        <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="data.relationships.author.data.id"                data-endpoint="PUTapi-v1-authors--author--tickets--ticket-"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
                    </div>
                                    </details>
        </div>
                                        </details>
        </div>
                                        </details>
        </div>
                                        </details>
        </div>
        </form>

                    <h2 id="endpoints-PATCHapi-v1-authors--author--tickets--ticket-">PATCH api/v1/authors/{author}/tickets/{ticket}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PATCHapi-v1-authors--author--tickets--ticket-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost:8000/api/v1/authors/consequatur/tickets/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"data\": {
        \"attributes\": {
            \"title\": \"consequatur\",
            \"description\": \"Dolores dolorum amet iste laborum eius est dolor.\",
            \"status\": \"C\"
        },
        \"relationships\": {
            \"author\": {
                \"data\": {
                    \"id\": 17
                }
            }
        }
    }
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/authors/consequatur/tickets/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "data": {
        "attributes": {
            "title": "consequatur",
            "description": "Dolores dolorum amet iste laborum eius est dolor.",
            "status": "C"
        },
        "relationships": {
            "author": {
                "data": {
                    "id": 17
                }
            }
        }
    }
};

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-v1-authors--author--tickets--ticket-">
</span>
<span id="execution-results-PATCHapi-v1-authors--author--tickets--ticket-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-v1-authors--author--tickets--ticket-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-v1-authors--author--tickets--ticket-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-v1-authors--author--tickets--ticket-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-v1-authors--author--tickets--ticket-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-v1-authors--author--tickets--ticket-" data-method="PATCH"
      data-path="api/v1/authors/{author}/tickets/{ticket}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-v1-authors--author--tickets--ticket-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-v1-authors--author--tickets--ticket-"
                    onclick="tryItOut('PATCHapi-v1-authors--author--tickets--ticket-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-v1-authors--author--tickets--ticket-"
                    onclick="cancelTryOut('PATCHapi-v1-authors--author--tickets--ticket-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-v1-authors--author--tickets--ticket-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/authors/{author}/tickets/{ticket}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="PATCHapi-v1-authors--author--tickets--ticket-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-v1-authors--author--tickets--ticket-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-v1-authors--author--tickets--ticket-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>author</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="author"                data-endpoint="PATCHapi-v1-authors--author--tickets--ticket-"
               value="consequatur"
               data-component="url">
    <br>
<p>The author. Example: <code>consequatur</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>ticket</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="ticket"                data-endpoint="PATCHapi-v1-authors--author--tickets--ticket-"
               value="1"
               data-component="url">
    <br>
<p>The ticket. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>data</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>attributes</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.title"                data-endpoint="PATCHapi-v1-authors--author--tickets--ticket-"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.description"                data-endpoint="PATCHapi-v1-authors--author--tickets--ticket-"
               value="Dolores dolorum amet iste laborum eius est dolor."
               data-component="body">
    <br>
<p>Example: <code>Dolores dolorum amet iste laborum eius est dolor.</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.status"                data-endpoint="PATCHapi-v1-authors--author--tickets--ticket-"
               value="C"
               data-component="body">
    <br>
<p>Example: <code>C</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>A</code></li> <li><code>C</code></li> <li><code>H</code></li> <li><code>X</code></li></ul>
                    </div>
                                    </details>
        </div>
                                                                    <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>relationships</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 28px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>author</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 42px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>data</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 56px; clear: unset;">
                        <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="data.relationships.author.data.id"                data-endpoint="PATCHapi-v1-authors--author--tickets--ticket-"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
                    </div>
                                    </details>
        </div>
                                        </details>
        </div>
                                        </details>
        </div>
                                        </details>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-v1-user">GET api/v1/user</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-user">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/user" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/user"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-user">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 11,
    &quot;name&quot;: &quot;The Manager&quot;,
    &quot;email&quot;: &quot;manager@manager.com&quot;,
    &quot;email_verified_at&quot;: null,
    &quot;is_manager&quot;: true,
    &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-user"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-user">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-user" data-method="GET"
      data-path="api/v1/user"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-user"
                    onclick="tryItOut('GETapi-v1-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-user"
                    onclick="cancelTryOut('GETapi-v1-user');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-user"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/user</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-user"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-login">POST api/login</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/login" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"qkunze@example.com\",
    \"password\": \"Z5ij-e\\/dl4m{o,\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/login"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "qkunze@example.com",
    "password": "Z5ij-e\/dl4m{o,"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-login">
</span>
<span id="execution-results-POSTapi-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-login"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-login">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-login" data-method="POST"
      data-path="api/login"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-login"
                    onclick="tryItOut('POSTapi-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-login"
                    onclick="cancelTryOut('POSTapi-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-login"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-login"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-login"
               value="qkunze@example.com"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>qkunze@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-login"
               value="Z5ij-e/dl4m{o,"
               data-component="body">
    <br>
<p>Must be at least 8 characters. Example: <code>Z5ij-e/dl4m{o,</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-register">POST api/register</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/register" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/register"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-register">
</span>
<span id="execution-results-POSTapi-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-register"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-register">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-register" data-method="POST"
      data-path="api/register"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-register"
                    onclick="tryItOut('POSTapi-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-register"
                    onclick="cancelTryOut('POSTapi-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-register"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/register</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-register"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-logout">POST api/logout</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-logout">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/logout" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/logout"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-logout">
</span>
<span id="execution-results-POSTapi-logout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-logout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-logout"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-logout">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-logout" data-method="POST"
      data-path="api/logout"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-logout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-logout"
                    onclick="tryItOut('POSTapi-logout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-logout"
                    onclick="cancelTryOut('POSTapi-logout');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-logout"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/logout</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-logout"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-tickets">GET api/tickets</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-tickets">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/tickets" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/tickets"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-tickets">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;id&quot;: 1,
        &quot;user_id&quot;: 8,
        &quot;title&quot;: &quot;est quis velit&quot;,
        &quot;description&quot;: &quot;Aut est autem dolor vitae laboriosam nostrum. Dolore pariatur et error et. Quos et doloribus fuga veritatis.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 2,
        &quot;user_id&quot;: 7,
        &quot;title&quot;: &quot;veritatis corrupti est&quot;,
        &quot;description&quot;: &quot;Eos aut cupiditate velit quod. Assumenda accusamus et et dolor. Itaque earum natus accusantium qui. Autem molestias error totam temporibus tenetur.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 3,
        &quot;user_id&quot;: 10,
        &quot;title&quot;: &quot;eos eius quod&quot;,
        &quot;description&quot;: &quot;Exercitationem quasi laudantium molestiae delectus. Et eligendi quia sint. Libero corrupti id accusantium nam. Exercitationem fugit consectetur eum dolore nostrum voluptatem.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 4,
        &quot;user_id&quot;: 5,
        &quot;title&quot;: &quot;quo soluta necessitatibus&quot;,
        &quot;description&quot;: &quot;Quia atque molestias reprehenderit magnam et consequuntur esse laborum. In corrupti quos similique eos dolores quidem voluptate. Voluptatem ipsa optio voluptatum ea sit. Voluptatibus voluptates fugiat tenetur praesentium quod tempore.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 5,
        &quot;user_id&quot;: 6,
        &quot;title&quot;: &quot;cum quae eaque&quot;,
        &quot;description&quot;: &quot;Non eum fuga in qui qui. Quaerat aspernatur ea voluptate fugit.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 6,
        &quot;user_id&quot;: 2,
        &quot;title&quot;: &quot;nemo sint nesciunt&quot;,
        &quot;description&quot;: &quot;Inventore incidunt officiis asperiores quia iste quo. Ut quas maxime odio tempora. Et sit enim est magni. Vel voluptatem est voluptas reprehenderit ut et nihil.&quot;,
        &quot;status&quot;: &quot;A&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 7,
        &quot;user_id&quot;: 1,
        &quot;title&quot;: &quot;saepe illo quibusdam&quot;,
        &quot;description&quot;: &quot;Asperiores voluptas hic hic voluptatem molestiae eveniet excepturi. Incidunt est dicta voluptatem ut. Eius rerum ad quia quia.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 8,
        &quot;user_id&quot;: 5,
        &quot;title&quot;: &quot;facere qui et&quot;,
        &quot;description&quot;: &quot;Saepe eaque voluptatem expedita corrupti sed enim. Pariatur dolores voluptatum quibusdam ut qui dolorem voluptatem. Commodi molestias est animi consequuntur ut sit.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 9,
        &quot;user_id&quot;: 1,
        &quot;title&quot;: &quot;tempora nam culpa&quot;,
        &quot;description&quot;: &quot;Fuga quae pariatur et itaque illo voluptas praesentium. Dolor praesentium eos corporis molestiae est rem. Quaerat ipsa quod et repudiandae asperiores expedita esse eos. Amet fugiat sit quis sint ducimus veritatis. Quia amet voluptatum et ratione illum dolorem.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 10,
        &quot;user_id&quot;: 6,
        &quot;title&quot;: &quot;et ratione maxime&quot;,
        &quot;description&quot;: &quot;A consequatur reiciendis quia sit nostrum exercitationem. Vel est voluptatem doloribus ipsum quam exercitationem sapiente eum. Aut aut aperiam quis dolore.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 11,
        &quot;user_id&quot;: 7,
        &quot;title&quot;: &quot;nihil porro fugiat&quot;,
        &quot;description&quot;: &quot;Culpa aut laboriosam delectus qui aut atque sed. Omnis corporis quis ullam nihil consequatur veritatis. Quia animi deleniti sit et doloremque. Vitae quam fugiat saepe commodi ut in. Illo eaque et sit.&quot;,
        &quot;status&quot;: &quot;A&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 12,
        &quot;user_id&quot;: 10,
        &quot;title&quot;: &quot;dicta sit omnis&quot;,
        &quot;description&quot;: &quot;Qui sunt harum possimus et ducimus. Reprehenderit quae illum commodi accusamus totam ut porro. Aut voluptate voluptatem quia eos soluta iste.&quot;,
        &quot;status&quot;: &quot;A&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 13,
        &quot;user_id&quot;: 8,
        &quot;title&quot;: &quot;sit numquam architecto&quot;,
        &quot;description&quot;: &quot;A quasi assumenda possimus et tenetur ut reprehenderit. Facilis saepe rem est et ab et libero. Enim qui soluta hic sed.&quot;,
        &quot;status&quot;: &quot;A&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 14,
        &quot;user_id&quot;: 4,
        &quot;title&quot;: &quot;atque vel est&quot;,
        &quot;description&quot;: &quot;Non esse est sit earum incidunt recusandae. Eaque rerum enim non excepturi accusamus et eius. Sint perspiciatis sapiente est reprehenderit illum modi. Aliquam quo saepe consequatur odio maxime voluptas.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 15,
        &quot;user_id&quot;: 3,
        &quot;title&quot;: &quot;excepturi soluta fugiat&quot;,
        &quot;description&quot;: &quot;Pariatur ullam molestiae rerum voluptatibus mollitia. Aperiam aperiam ipsam accusantium voluptatem quis.&quot;,
        &quot;status&quot;: &quot;A&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 16,
        &quot;user_id&quot;: 7,
        &quot;title&quot;: &quot;explicabo nihil laudantium&quot;,
        &quot;description&quot;: &quot;Est recusandae libero nemo enim. Non dicta aut vero repellat explicabo eveniet.&quot;,
        &quot;status&quot;: &quot;A&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 17,
        &quot;user_id&quot;: 4,
        &quot;title&quot;: &quot;non et iusto&quot;,
        &quot;description&quot;: &quot;Minima qui alias similique sit mollitia nobis illum. Quod laborum iure aut saepe. Ut perferendis voluptate hic voluptatibus repudiandae dolorum.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 18,
        &quot;user_id&quot;: 2,
        &quot;title&quot;: &quot;in nostrum neque&quot;,
        &quot;description&quot;: &quot;Quas at ut facere tempora. Quidem porro error assumenda ab dolores. Est repudiandae rerum vitae fuga dolore voluptatibus.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 19,
        &quot;user_id&quot;: 5,
        &quot;title&quot;: &quot;dolor autem atque&quot;,
        &quot;description&quot;: &quot;Consequatur sunt vel dignissimos aut facilis dolorem nam. Ut qui dolorem soluta sed fugiat sed a. Eos fugit aut est et quasi. Ad porro quisquam quas in unde rerum laborum aut.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 20,
        &quot;user_id&quot;: 3,
        &quot;title&quot;: &quot;odio expedita voluptatem&quot;,
        &quot;description&quot;: &quot;Est iste iure magnam. Et vel qui qui sequi qui dolor. Cum officia saepe dolorem quia.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 21,
        &quot;user_id&quot;: 10,
        &quot;title&quot;: &quot;voluptatem dolores repudiandae&quot;,
        &quot;description&quot;: &quot;Eligendi et laborum aut deleniti. Libero ut voluptatem et tenetur quia voluptatem. Et ducimus repellendus dolorum aut. Ratione magnam et id eum est.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 22,
        &quot;user_id&quot;: 4,
        &quot;title&quot;: &quot;quam aut quis&quot;,
        &quot;description&quot;: &quot;Ipsam saepe vel omnis aut ut. Molestias occaecati ut voluptatem dolor et eum accusamus odit. Quas praesentium est quae numquam explicabo rem veritatis.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 23,
        &quot;user_id&quot;: 5,
        &quot;title&quot;: &quot;fugiat est hic&quot;,
        &quot;description&quot;: &quot;Ea modi consequuntur quia perspiciatis et. Unde voluptatem facere aut vel ex omnis. Repellendus consequatur perspiciatis sed facilis.&quot;,
        &quot;status&quot;: &quot;A&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 24,
        &quot;user_id&quot;: 2,
        &quot;title&quot;: &quot;modi officiis nemo&quot;,
        &quot;description&quot;: &quot;Beatae aut officia est fuga dignissimos magni qui. Enim aliquid doloremque saepe ipsa maxime. Aspernatur eum molestiae culpa pariatur minus qui sunt. Quo explicabo maxime unde iste eveniet.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 25,
        &quot;user_id&quot;: 8,
        &quot;title&quot;: &quot;alias quis beatae&quot;,
        &quot;description&quot;: &quot;Corporis similique error aut ea ipsam error. Veniam quas modi dolor doloribus architecto ut. Dolores quaerat quaerat quam non nihil commodi enim. Iste ut omnis at dolor sed at id.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 26,
        &quot;user_id&quot;: 10,
        &quot;title&quot;: &quot;qui fugit voluptas&quot;,
        &quot;description&quot;: &quot;Doloremque provident voluptatum cumque. Recusandae vero amet corrupti aut nam debitis. Quibusdam unde et illo aspernatur labore qui. Modi delectus maiores iste voluptas incidunt. Minus voluptas nisi laborum sequi qui aut molestias.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 27,
        &quot;user_id&quot;: 9,
        &quot;title&quot;: &quot;explicabo dolores omnis&quot;,
        &quot;description&quot;: &quot;Quasi et culpa sapiente porro fugit incidunt. Quaerat qui quo nulla sunt deserunt maiores. Ut deserunt porro perspiciatis voluptatum labore alias.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 28,
        &quot;user_id&quot;: 9,
        &quot;title&quot;: &quot;omnis eum minima&quot;,
        &quot;description&quot;: &quot;Sed et deleniti id cupiditate. Totam ea voluptas tempora eligendi excepturi delectus. Fugiat delectus ipsum molestiae exercitationem quam ut inventore. Repellat voluptatibus sint blanditiis itaque eveniet modi repellat quidem. Nostrum et quos suscipit et ut.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 29,
        &quot;user_id&quot;: 7,
        &quot;title&quot;: &quot;nihil aliquid et&quot;,
        &quot;description&quot;: &quot;Dicta aperiam eligendi quia quia autem porro. Consectetur aliquam voluptatem quibusdam ut. Commodi sit est est. Eveniet perspiciatis est voluptatem accusamus.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 30,
        &quot;user_id&quot;: 5,
        &quot;title&quot;: &quot;quaerat vitae perspiciatis&quot;,
        &quot;description&quot;: &quot;Officia ut repellat qui dolor quasi. Quia voluptas porro magnam ab. Aliquid sint quo nulla et.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 31,
        &quot;user_id&quot;: 10,
        &quot;title&quot;: &quot;ipsa nisi quas&quot;,
        &quot;description&quot;: &quot;Laborum corrupti ipsam neque laudantium quia sunt natus. Sapiente explicabo quia vitae deleniti omnis. Laudantium est voluptas voluptatem cupiditate voluptatem sapiente. Saepe natus eius incidunt ea est.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 32,
        &quot;user_id&quot;: 3,
        &quot;title&quot;: &quot;vitae fugiat repellendus&quot;,
        &quot;description&quot;: &quot;Reiciendis numquam consequatur suscipit qui earum occaecati aspernatur. Eligendi recusandae ipsa voluptatibus similique odit.&quot;,
        &quot;status&quot;: &quot;A&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 33,
        &quot;user_id&quot;: 7,
        &quot;title&quot;: &quot;tempora perferendis voluptate&quot;,
        &quot;description&quot;: &quot;Voluptas aut quisquam omnis. Quis culpa tenetur repellendus qui. Iure eum nostrum facilis sit. Quae assumenda dolorem voluptatem sit quis quia.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 34,
        &quot;user_id&quot;: 9,
        &quot;title&quot;: &quot;et vitae delectus&quot;,
        &quot;description&quot;: &quot;Illum ullam fugit et accusantium consequatur quibusdam aliquid. Officia ex debitis accusantium impedit quis minus. Ipsam voluptas aut vero itaque.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 35,
        &quot;user_id&quot;: 7,
        &quot;title&quot;: &quot;quis eum consectetur&quot;,
        &quot;description&quot;: &quot;Et molestiae dolorum ipsam est. Beatae provident alias beatae eos animi mollitia.&quot;,
        &quot;status&quot;: &quot;A&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 36,
        &quot;user_id&quot;: 5,
        &quot;title&quot;: &quot;est quae amet&quot;,
        &quot;description&quot;: &quot;Commodi dignissimos repellendus ex iusto quas et. Amet eos maiores dignissimos assumenda tempora. Et veniam a inventore voluptatem veniam. Qui omnis cum nemo molestias.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 37,
        &quot;user_id&quot;: 9,
        &quot;title&quot;: &quot;libero excepturi blanditiis&quot;,
        &quot;description&quot;: &quot;Sit repudiandae voluptas voluptas dolor tempore nulla aut. Saepe quo animi qui culpa. Voluptas eos id et eius ut non voluptatum.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 38,
        &quot;user_id&quot;: 8,
        &quot;title&quot;: &quot;laborum deserunt architecto&quot;,
        &quot;description&quot;: &quot;Corporis minus nemo est et illo. Dolores porro ab quisquam nemo. Aut et maxime enim cum dolorum non cupiditate aspernatur. Veniam sint perferendis est.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 39,
        &quot;user_id&quot;: 9,
        &quot;title&quot;: &quot;qui quo ex&quot;,
        &quot;description&quot;: &quot;Quisquam qui eos et ut eius eos omnis. Dolorem perferendis fugit facilis laboriosam. Ad nam placeat molestias et dolor eligendi occaecati. Non tempora molestias quis consequatur voluptatem.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 40,
        &quot;user_id&quot;: 8,
        &quot;title&quot;: &quot;nulla ea numquam&quot;,
        &quot;description&quot;: &quot;Sequi adipisci saepe voluptatem libero inventore veniam voluptatem. Natus mollitia hic voluptas enim alias rerum modi. Nesciunt fugiat reprehenderit autem.&quot;,
        &quot;status&quot;: &quot;A&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 41,
        &quot;user_id&quot;: 4,
        &quot;title&quot;: &quot;autem ea tenetur&quot;,
        &quot;description&quot;: &quot;Et ipsam assumenda corporis et et non quaerat. A ipsam qui et. Dolor aperiam autem voluptatem debitis nihil quasi in nobis. Et impedit consequuntur iste quia reiciendis sapiente. Illo necessitatibus magnam magni sint ut amet in.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 42,
        &quot;user_id&quot;: 4,
        &quot;title&quot;: &quot;ut illo sed&quot;,
        &quot;description&quot;: &quot;Nesciunt exercitationem omnis et dolores dolores vitae est. Consequuntur omnis dolor voluptas aut delectus in. Non non rerum molestiae mollitia suscipit eum ipsam.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 43,
        &quot;user_id&quot;: 7,
        &quot;title&quot;: &quot;qui impedit eum&quot;,
        &quot;description&quot;: &quot;Saepe pariatur et similique assumenda quisquam doloribus et. Aut quis error nesciunt.&quot;,
        &quot;status&quot;: &quot;A&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 44,
        &quot;user_id&quot;: 9,
        &quot;title&quot;: &quot;fugit omnis voluptatem&quot;,
        &quot;description&quot;: &quot;Et nihil aut aliquam. Aut et dolorem est. Est nam quaerat voluptas praesentium quis repudiandae.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 45,
        &quot;user_id&quot;: 5,
        &quot;title&quot;: &quot;sint quod ab&quot;,
        &quot;description&quot;: &quot;Quia cum tempore rem velit iure fugit. Est dolor est officia voluptas libero quibusdam. Expedita inventore unde et beatae ab non aut libero. Recusandae nemo eveniet sit nam natus.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 46,
        &quot;user_id&quot;: 2,
        &quot;title&quot;: &quot;dicta dolorum dolores&quot;,
        &quot;description&quot;: &quot;Voluptas reprehenderit ab itaque laborum ut sit unde autem. Rerum earum qui vero fugit accusamus. Eveniet occaecati facilis facilis qui id. Alias itaque vero eum nihil quae voluptas.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 47,
        &quot;user_id&quot;: 6,
        &quot;title&quot;: &quot;laborum quis animi&quot;,
        &quot;description&quot;: &quot;Culpa excepturi optio in. Et possimus blanditiis illum consequatur quis eum. Harum aspernatur voluptatem sequi.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 48,
        &quot;user_id&quot;: 5,
        &quot;title&quot;: &quot;neque nihil et&quot;,
        &quot;description&quot;: &quot;Eum veniam accusantium cumque et esse. Suscipit nihil ab delectus neque sed non unde. Officia assumenda ex dicta aspernatur et suscipit.&quot;,
        &quot;status&quot;: &quot;A&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 49,
        &quot;user_id&quot;: 2,
        &quot;title&quot;: &quot;architecto cum et&quot;,
        &quot;description&quot;: &quot;Enim natus explicabo aliquam rem nihil. Sunt corporis alias in maxime. Laborum voluptas eum culpa quia soluta ut totam. Facilis repudiandae dolor laborum hic aut nobis.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 50,
        &quot;user_id&quot;: 9,
        &quot;title&quot;: &quot;rerum vero eaque&quot;,
        &quot;description&quot;: &quot;Accusantium dolor quos unde aut mollitia quam deserunt. Nihil asperiores omnis alias dolore. Quos et est neque culpa aut et.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 51,
        &quot;user_id&quot;: 9,
        &quot;title&quot;: &quot;ratione animi qui&quot;,
        &quot;description&quot;: &quot;Quos ea qui ut non sint. Qui et dignissimos repudiandae sapiente. Consectetur voluptatibus quasi ducimus id ut iusto quidem.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 52,
        &quot;user_id&quot;: 7,
        &quot;title&quot;: &quot;corrupti dolorem est&quot;,
        &quot;description&quot;: &quot;Voluptas qui asperiores fugit magnam explicabo asperiores mollitia ut. Quidem aut deleniti dolores est. Quo error et repellendus adipisci. Facere commodi velit dolor tempore vel quis ipsum.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 53,
        &quot;user_id&quot;: 9,
        &quot;title&quot;: &quot;voluptas aliquid iure&quot;,
        &quot;description&quot;: &quot;Totam consequuntur facilis accusantium itaque vero voluptatem natus. Aspernatur laudantium ipsum impedit aut a vitae doloribus. A dolor dolorem autem praesentium. Dolor quae saepe aliquam.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 54,
        &quot;user_id&quot;: 7,
        &quot;title&quot;: &quot;et architecto et&quot;,
        &quot;description&quot;: &quot;Voluptas voluptatem provident consequatur consequatur possimus ut. Voluptatem eveniet laudantium accusantium illum beatae velit. Officiis dolor mollitia necessitatibus minima. Dicta similique quae incidunt ducimus praesentium doloribus ut.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 55,
        &quot;user_id&quot;: 5,
        &quot;title&quot;: &quot;at maiores a&quot;,
        &quot;description&quot;: &quot;Nemo in repellendus fugiat et tempore commodi cum. Qui asperiores aspernatur et eos fugit esse. Officiis quas quis dolore nulla. Deserunt nesciunt sit maiores quaerat repudiandae possimus.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 56,
        &quot;user_id&quot;: 6,
        &quot;title&quot;: &quot;harum sunt omnis&quot;,
        &quot;description&quot;: &quot;Eos quidem reiciendis quod nam reiciendis omnis aliquid. Quia magnam architecto placeat quia animi et consequuntur sit. Qui sed in fuga quia adipisci est et. Aut dolore dolor harum culpa quasi.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 57,
        &quot;user_id&quot;: 1,
        &quot;title&quot;: &quot;voluptatem omnis sint&quot;,
        &quot;description&quot;: &quot;Debitis recusandae sapiente consequatur porro quo beatae. Sed pariatur excepturi enim qui sint. Sit iusto harum dolorem ut quam modi error.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 58,
        &quot;user_id&quot;: 9,
        &quot;title&quot;: &quot;voluptas omnis in&quot;,
        &quot;description&quot;: &quot;Harum non eaque in voluptatem et totam. Voluptas dolor sint nemo. Id cupiditate sint repellendus a modi eum.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 59,
        &quot;user_id&quot;: 5,
        &quot;title&quot;: &quot;enim porro consequatur&quot;,
        &quot;description&quot;: &quot;Saepe consectetur corporis sint nemo. Similique fugit voluptas non porro vel. Provident sed et laudantium sit.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 60,
        &quot;user_id&quot;: 2,
        &quot;title&quot;: &quot;ad voluptatem officia&quot;,
        &quot;description&quot;: &quot;Itaque facilis quidem et iste tenetur pariatur numquam. Rem nisi iste omnis. Qui voluptatem quos qui voluptatum. Et labore iste et corporis assumenda incidunt.&quot;,
        &quot;status&quot;: &quot;A&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 61,
        &quot;user_id&quot;: 10,
        &quot;title&quot;: &quot;dolore qui porro&quot;,
        &quot;description&quot;: &quot;Necessitatibus et sint voluptas tempora adipisci. Quidem doloribus aut ducimus aperiam.&quot;,
        &quot;status&quot;: &quot;A&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 62,
        &quot;user_id&quot;: 9,
        &quot;title&quot;: &quot;totam velit quam&quot;,
        &quot;description&quot;: &quot;Qui vel molestiae nulla eos dolor. Totam voluptas quo aut cum rerum cumque labore. Ut libero modi quam et nemo. Omnis natus doloremque quos.&quot;,
        &quot;status&quot;: &quot;A&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 63,
        &quot;user_id&quot;: 10,
        &quot;title&quot;: &quot;illum veritatis sit&quot;,
        &quot;description&quot;: &quot;Iusto aliquam et non ipsa earum quia sunt. Quis qui sapiente saepe. Tenetur libero repudiandae exercitationem repellat.&quot;,
        &quot;status&quot;: &quot;A&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 64,
        &quot;user_id&quot;: 4,
        &quot;title&quot;: &quot;in dolorum nihil&quot;,
        &quot;description&quot;: &quot;Temporibus sint et voluptatem tempore dolorum sunt quae ullam. Molestias earum nihil asperiores quaerat. Ut nulla reiciendis quidem ipsum quo doloribus. In accusamus atque voluptas officia eum.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 65,
        &quot;user_id&quot;: 1,
        &quot;title&quot;: &quot;incidunt vel enim&quot;,
        &quot;description&quot;: &quot;Sit maiores eum voluptates quos. Voluptatum dolor rerum alias molestiae et rerum. Molestiae odio et praesentium ut placeat illum ut qui.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 66,
        &quot;user_id&quot;: 2,
        &quot;title&quot;: &quot;quaerat vero id&quot;,
        &quot;description&quot;: &quot;Occaecati occaecati quia ut fuga. Consectetur voluptatem beatae enim. Voluptas ut aperiam non et perspiciatis atque.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 67,
        &quot;user_id&quot;: 6,
        &quot;title&quot;: &quot;vel fugiat blanditiis&quot;,
        &quot;description&quot;: &quot;Eum voluptatem molestias ab voluptas. Aliquid sit voluptas eligendi quaerat rem. Dolores rem animi et illum.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 68,
        &quot;user_id&quot;: 4,
        &quot;title&quot;: &quot;nesciunt alias omnis&quot;,
        &quot;description&quot;: &quot;Placeat sunt cupiditate aut non non magnam. Non illum blanditiis qui alias ut rerum fugit sit.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 69,
        &quot;user_id&quot;: 10,
        &quot;title&quot;: &quot;enim alias ipsum&quot;,
        &quot;description&quot;: &quot;Sequi facere omnis libero numquam id odit quasi amet. Omnis quod dolore rerum quam iste temporibus fugit voluptates. Nisi asperiores fuga rerum hic et.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 70,
        &quot;user_id&quot;: 8,
        &quot;title&quot;: &quot;dolorem dolorem a&quot;,
        &quot;description&quot;: &quot;Aliquid ut commodi est sed consequuntur consectetur. Eligendi ratione sit quisquam et atque cumque molestiae animi. Esse aut ut autem adipisci aspernatur pariatur et. Unde sequi eius nobis soluta est recusandae.&quot;,
        &quot;status&quot;: &quot;A&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 71,
        &quot;user_id&quot;: 9,
        &quot;title&quot;: &quot;et eaque quidem&quot;,
        &quot;description&quot;: &quot;Sequi sequi et repellendus qui enim. Voluptatem et voluptas quia. Non saepe omnis unde et.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 72,
        &quot;user_id&quot;: 10,
        &quot;title&quot;: &quot;eum et aut&quot;,
        &quot;description&quot;: &quot;Earum ad rerum modi odio voluptatem omnis. Perferendis omnis aut dolor voluptatem optio voluptatem. Sint accusantium ut sit facilis.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 73,
        &quot;user_id&quot;: 6,
        &quot;title&quot;: &quot;quaerat veritatis adipisci&quot;,
        &quot;description&quot;: &quot;Neque aut nisi amet enim reiciendis perspiciatis. Nihil sint facere ut sunt. Rem sunt dolor et. Fugit saepe sint aut quia et alias voluptas. Non asperiores asperiores vitae officiis.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 74,
        &quot;user_id&quot;: 4,
        &quot;title&quot;: &quot;eveniet nam officia&quot;,
        &quot;description&quot;: &quot;Temporibus aut non aut. Eos recusandae et in vel saepe iure sed consequatur. Velit corrupti iusto ad est.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 75,
        &quot;user_id&quot;: 8,
        &quot;title&quot;: &quot;ad exercitationem rerum&quot;,
        &quot;description&quot;: &quot;Ea voluptates ipsam quae. Ea voluptatibus nesciunt qui reprehenderit voluptates iste aut aut. Nisi natus totam consequatur odio inventore doloribus. Molestiae quia sit accusamus enim itaque voluptatibus omnis odit.&quot;,
        &quot;status&quot;: &quot;A&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 76,
        &quot;user_id&quot;: 4,
        &quot;title&quot;: &quot;consequuntur quo neque&quot;,
        &quot;description&quot;: &quot;Sit perspiciatis quaerat et dolorem. Voluptate est quos praesentium quos fugit iure. Voluptatibus quaerat voluptas est molestias corporis voluptas.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 77,
        &quot;user_id&quot;: 4,
        &quot;title&quot;: &quot;rem delectus vitae&quot;,
        &quot;description&quot;: &quot;Omnis iste consectetur quisquam ratione aut possimus. Odio et et ad molestiae. Sed ut totam voluptas in. Numquam nihil non fugit aut.&quot;,
        &quot;status&quot;: &quot;A&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 78,
        &quot;user_id&quot;: 2,
        &quot;title&quot;: &quot;in vero aut&quot;,
        &quot;description&quot;: &quot;Et quo consequatur quam quas fuga. Similique dolorem facilis nisi. Provident dolor ullam commodi delectus.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 79,
        &quot;user_id&quot;: 1,
        &quot;title&quot;: &quot;officiis enim aspernatur&quot;,
        &quot;description&quot;: &quot;Sunt qui qui et impedit. Eligendi vel hic et.&quot;,
        &quot;status&quot;: &quot;A&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 80,
        &quot;user_id&quot;: 10,
        &quot;title&quot;: &quot;rerum aut est&quot;,
        &quot;description&quot;: &quot;Id rerum commodi aut magni voluptas voluptatem cumque culpa. Tempore adipisci dolores saepe ad. Id fuga sed accusantium ut. Accusantium animi quia consectetur ad. Placeat ex unde quaerat.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 81,
        &quot;user_id&quot;: 7,
        &quot;title&quot;: &quot;illo et magnam&quot;,
        &quot;description&quot;: &quot;Aut adipisci sit iste dolorum. At dolore sequi ipsum sed ad iure. Excepturi rerum vel voluptatibus enim sed voluptatibus. Voluptates voluptatum voluptate deleniti quis unde recusandae quam. Nam expedita aut molestias.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 82,
        &quot;user_id&quot;: 10,
        &quot;title&quot;: &quot;minima occaecati assumenda&quot;,
        &quot;description&quot;: &quot;Sapiente dignissimos quia ut fugiat. Laborum architecto sit nemo. Voluptas deserunt inventore ipsa iusto rerum quis reiciendis.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 83,
        &quot;user_id&quot;: 6,
        &quot;title&quot;: &quot;enim voluptatem voluptas&quot;,
        &quot;description&quot;: &quot;Saepe commodi enim doloribus animi eveniet optio. Quia quod amet nobis excepturi at iste est magni. Officia soluta libero deserunt magnam et. Eius accusantium distinctio eos nisi minus laudantium.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 84,
        &quot;user_id&quot;: 2,
        &quot;title&quot;: &quot;quidem magnam eligendi&quot;,
        &quot;description&quot;: &quot;Soluta ipsam dolorum sed consequatur. Minima esse eius dignissimos qui dolorum quas. Natus et eveniet unde tempore autem dolores.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 85,
        &quot;user_id&quot;: 3,
        &quot;title&quot;: &quot;et non reiciendis&quot;,
        &quot;description&quot;: &quot;Minus reiciendis aut et exercitationem. Suscipit dolorem placeat provident est quasi blanditiis.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 86,
        &quot;user_id&quot;: 2,
        &quot;title&quot;: &quot;quis voluptates aut&quot;,
        &quot;description&quot;: &quot;Labore consequatur doloremque est sed ut. Maiores animi iusto et consequuntur dolorem quia cum.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 87,
        &quot;user_id&quot;: 7,
        &quot;title&quot;: &quot;vitae molestias molestiae&quot;,
        &quot;description&quot;: &quot;Adipisci rerum quia qui sit rerum in assumenda. Ut quia vel temporibus atque pariatur harum. Et ea id assumenda ea omnis. Quod mollitia et molestiae necessitatibus quia.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 88,
        &quot;user_id&quot;: 4,
        &quot;title&quot;: &quot;dolor ullam eos&quot;,
        &quot;description&quot;: &quot;Assumenda voluptas est mollitia sint. Impedit similique pariatur consequuntur. Impedit quo aliquid earum unde neque libero quia. Sed magni quaerat ab illum aut ea.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 89,
        &quot;user_id&quot;: 9,
        &quot;title&quot;: &quot;veritatis officia beatae&quot;,
        &quot;description&quot;: &quot;In aliquam cum et. Aut ipsa cupiditate ipsam ut ullam est. Accusantium eveniet qui fugiat rerum. Dolorem illum perspiciatis recusandae aliquid.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 90,
        &quot;user_id&quot;: 6,
        &quot;title&quot;: &quot;voluptatem architecto perspiciatis&quot;,
        &quot;description&quot;: &quot;Veniam quos non ducimus ut sunt. Id consequuntur laborum ut numquam sed dolores. Dicta et fugit eos.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 91,
        &quot;user_id&quot;: 4,
        &quot;title&quot;: &quot;perspiciatis hic tempora&quot;,
        &quot;description&quot;: &quot;Enim architecto sapiente totam. Amet qui qui asperiores voluptatibus quia debitis sed.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 92,
        &quot;user_id&quot;: 8,
        &quot;title&quot;: &quot;dolorum harum quae&quot;,
        &quot;description&quot;: &quot;Consequatur facilis porro aliquam vel distinctio facilis dicta aut. Qui natus labore cum placeat iste sapiente qui.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 93,
        &quot;user_id&quot;: 4,
        &quot;title&quot;: &quot;dolorum quia in&quot;,
        &quot;description&quot;: &quot;Et sed occaecati inventore expedita nihil et eius accusantium. Consequuntur minima officia non. Illum amet tenetur laudantium molestias nihil culpa porro repellat.&quot;,
        &quot;status&quot;: &quot;A&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 94,
        &quot;user_id&quot;: 10,
        &quot;title&quot;: &quot;vel aut voluptatem&quot;,
        &quot;description&quot;: &quot;Sit sed saepe quo enim inventore incidunt est. Ipsa deleniti vitae aut et rerum possimus et mollitia. Possimus voluptatem aut adipisci sint atque consequuntur et occaecati. Quo omnis esse sint natus.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 95,
        &quot;user_id&quot;: 1,
        &quot;title&quot;: &quot;sapiente eligendi rem&quot;,
        &quot;description&quot;: &quot;Sunt assumenda officiis laborum omnis. Ullam et iure quo debitis.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 96,
        &quot;user_id&quot;: 8,
        &quot;title&quot;: &quot;fugiat sint exercitationem&quot;,
        &quot;description&quot;: &quot;Voluptatem asperiores ad ut ut aut ducimus quis. Voluptatibus accusantium occaecati repellendus porro minus impedit recusandae aut. Natus non sequi voluptatem voluptatibus omnis sint.&quot;,
        &quot;status&quot;: &quot;C&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 97,
        &quot;user_id&quot;: 7,
        &quot;title&quot;: &quot;facere harum rem&quot;,
        &quot;description&quot;: &quot;Dolor sed maiores suscipit nostrum dolorum. Autem aut quos aut qui amet. Nulla commodi est voluptate veritatis aut. Et aut aut placeat suscipit qui animi.&quot;,
        &quot;status&quot;: &quot;A&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 98,
        &quot;user_id&quot;: 9,
        &quot;title&quot;: &quot;velit recusandae non&quot;,
        &quot;description&quot;: &quot;Totam eveniet commodi commodi molestias vel nulla. Tempore ut sunt earum qui quidem doloribus. Quia excepturi sit dolores perspiciatis ut.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 99,
        &quot;user_id&quot;: 4,
        &quot;title&quot;: &quot;accusantium eos maxime&quot;,
        &quot;description&quot;: &quot;Quos sit eum nesciunt. Iure dolores ipsam provident culpa esse unde consequatur. Doloremque cumque eum libero architecto. Sequi temporibus enim odit alias.&quot;,
        &quot;status&quot;: &quot;X&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    },
    {
        &quot;id&quot;: 100,
        &quot;user_id&quot;: 9,
        &quot;title&quot;: &quot;quisquam ab aliquid&quot;,
        &quot;description&quot;: &quot;Perferendis harum architecto alias eos. Mollitia excepturi et reiciendis dolore quia libero non. Molestias dolor adipisci non voluptatibus ut eos cum. Quos consequatur ducimus omnis laboriosam. Dolores est delectus dolorum incidunt repudiandae voluptas et quis.&quot;,
        &quot;status&quot;: &quot;H&quot;,
        &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-tickets" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-tickets"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-tickets"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-tickets" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-tickets">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-tickets" data-method="GET"
      data-path="api/tickets"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-tickets', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-tickets"
                    onclick="tryItOut('GETapi-tickets');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-tickets"
                    onclick="cancelTryOut('GETapi-tickets');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-tickets"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/tickets</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-tickets"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-tickets"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-tickets"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-user">GET api/user</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-user">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/user" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/user"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-user">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 11,
    &quot;name&quot;: &quot;The Manager&quot;,
    &quot;email&quot;: &quot;manager@manager.com&quot;,
    &quot;email_verified_at&quot;: null,
    &quot;is_manager&quot;: true,
    &quot;created_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2025-06-29T11:48:04.000000Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-user" data-method="GET"
      data-path="api/user"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-user"
                    onclick="tryItOut('GETapi-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-user"
                    onclick="cancelTryOut('GETapi-user');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-user"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/user</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-user"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
