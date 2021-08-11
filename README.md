<div class="description">
                                    <p>In this lesson, I will show you how to use&nbsp;Eloquent&nbsp;Relationships in laravel applications. I will show you how to build one-to-one, one-to-many, many-to-many, polymorphic relations across the laravel eloquent model class.</p>

<p>&nbsp;</p>

<h2><strong>One to One:</strong></h2>

<pre class=" language-php"><code class=" language-php"><span class="token this">$this</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">hasOne</span><span class="token punctuation">(</span><span class="token single-quoted-string string">'App\Model'</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
<span class="token this">$this</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">hasOne</span><span class="token punctuation">(</span><span class="token single-quoted-string string">'App\Model'</span><span class="token punctuation">,</span> <span class="token single-quoted-string string">'foreign_key'</span><span class="token punctuation">,</span> <span class="token single-quoted-string string">'local_key'</span><span class="token punctuation">)</span><span class="token punctuation">;</span></code></pre>

<p><strong>One To One (Inverse):</strong>&nbsp;</p>

<pre class=" language-php"><code class=" language-php"><span class="token this">$this</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">belongsTo</span><span class="token punctuation">(</span><span class="token single-quoted-string string">'App\Model'</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
<span class="token this">$this</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">belongsTo</span><span class="token punctuation">(</span><span class="token single-quoted-string string">'App\Model'</span><span class="token punctuation">,</span> <span class="token single-quoted-string string">'foreign_key'</span><span class="token punctuation">,</span> <span class="token single-quoted-string string">'other_key'</span><span class="token punctuation">)</span><span class="token punctuation">;</span></code></pre>

<p>&nbsp;</p>

<h2><strong>&nbsp;One to Many:</strong></h2>

<pre class=" language-php"><code class=" language-php"><span class="token this">$this</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">hasMany</span><span class="token punctuation">(</span><span class="token single-quoted-string string">'App\Model'</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
<span class="token this">$this</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">hasMany</span><span class="token punctuation">(</span><span class="token single-quoted-string string">'App\Model'</span><span class="token punctuation">,</span> <span class="token single-quoted-string string">'foreign_key'</span><span class="token punctuation">,</span> <span class="token single-quoted-string string">'local_key'</span><span class="token punctuation">)</span><span class="token punctuation">;</span></code></pre>

<p><strong>One To Many (Inverse)</strong>&nbsp;</p>

<pre class=" language-php"><code class=" language-php"><span class="token this">$this</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">belongsTo</span><span class="token punctuation">(</span><span class="token single-quoted-string string">'App\Model'</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
<span class="token this">$this</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">belongsTo</span><span class="token punctuation">(</span><span class="token single-quoted-string string">'App\Model'</span><span class="token punctuation">,</span> <span class="token single-quoted-string string">'foreign_key'</span><span class="token punctuation">,</span> <span class="token single-quoted-string string">'other_key'</span><span class="token punctuation">)</span><span class="token punctuation">;</span></code></pre>

<p>&nbsp;</p>

<h2><strong>Many to Many:</strong></h2>

<pre class=" language-php"><code class=" language-php"><span class="token this">$this</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">belongsToMany</span><span class="token punctuation">(</span><span class="token single-quoted-string string">'App\Model'</span><span class="token punctuation">,</span> <span class="token single-quoted-string string">'pivot_table'</span><span class="token punctuation">,</span> <span class="token single-quoted-string string">'foreign_id'</span><span class="token punctuation">,</span> <span class="token single-quoted-string string">'foreign_id'</span><span class="token punctuation">)</span><span class="token punctuation">;</span></code></pre>

<p><strong>Example:</strong></p>

<pre class=" language-php"><code class=" language-php"><span class="token this">$this</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">belongsToMany</span><span class="token punctuation">(</span><span class="token single-quoted-string string">'App\Role'</span><span class="token punctuation">,</span> <span class="token single-quoted-string string">'role_user'</span><span class="token punctuation">,</span> <span class="token single-quoted-string string">'user_id'</span><span class="token punctuation">,</span> <span class="token single-quoted-string string">'role_id'</span><span class="token punctuation">)</span><span class="token punctuation">;</span></code></pre>

<p>&nbsp;</p>

<p><strong>Attaching / Detaching:</strong></p>

<p><strong>Attaching:</strong></p>

<pre class=" language-php"><code class=" language-php"><span class="token variable">$user</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">roles</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">attach</span><span class="token punctuation">(</span><span class="token variable">$roleId</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
<span class="token variable">$user</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">roles</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">attach</span><span class="token punctuation">(</span><span class="token variable">$roleId</span><span class="token punctuation">,</span> <span class="token punctuation">[</span><span class="token single-quoted-string string">'expires'</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token variable">$expires</span><span class="token punctuation">]</span><span class="token punctuation">)</span><span class="token punctuation">;</span>

<span class="token variable">$user</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">roles</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">attach</span><span class="token punctuation">(</span><span class="token punctuation">[</span>
    <span class="token number">1</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token punctuation">[</span><span class="token single-quoted-string string">'expires'</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token variable">$expires</span><span class="token punctuation">]</span><span class="token punctuation">,</span>
    <span class="token number">2</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token punctuation">[</span><span class="token single-quoted-string string">'expires'</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token variable">$expires</span><span class="token punctuation">]</span><span class="token punctuation">,</span>
<span class="token punctuation">]</span><span class="token punctuation">)</span><span class="token punctuation">;</span></code></pre>

<p><strong>Detaching:</strong></p>

<pre class=" language-php"><code class=" language-php"><span class="token comment">// Detach a single role from the user...</span>
<span class="token variable">$user</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">roles</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">detach</span><span class="token punctuation">(</span><span class="token variable">$roleId</span><span class="token punctuation">)</span><span class="token punctuation">;</span>

<span class="token comment">// Detach all roles from the user...</span>
<span class="token variable">$user</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">roles</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">detach</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span>


<span class="token variable">$user</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">roles</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">detach</span><span class="token punctuation">(</span><span class="token punctuation">[</span><span class="token number">1</span><span class="token punctuation">,</span> <span class="token number">2</span><span class="token punctuation">,</span> <span class="token number">3</span><span class="token punctuation">]</span><span class="token punctuation">)</span><span class="token punctuation">;</span></code></pre>

<p>&nbsp;</p>

<p><strong>Syncing Associations:</strong></p>

<pre class=" language-php"><code class=" language-php"><span class="token variable">$user</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">roles</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">sync</span><span class="token punctuation">(</span><span class="token punctuation">[</span><span class="token number">1</span><span class="token punctuation">,</span> <span class="token number">2</span><span class="token punctuation">,</span> <span class="token number">3</span><span class="token punctuation">]</span><span class="token punctuation">)</span><span class="token punctuation">;</span></code></pre>

<p>&nbsp;</p>

<h2><strong>Has One Through:</strong></h2>

<pre class=" language-php"><code class=" language-php"><span class="token this">$this</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">hasOneThrough</span><span class="token punctuation">(</span>
            <span class="token single-quoted-string string">'App\Owner'</span><span class="token punctuation">,</span>
            <span class="token single-quoted-string string">'App\Car'</span><span class="token punctuation">,</span>
            <span class="token single-quoted-string string">'mechanic_id'</span><span class="token punctuation">,</span> <span class="token comment">// Foreign key on cars table...</span>
            <span class="token single-quoted-string string">'car_id'</span><span class="token punctuation">,</span> <span class="token comment">// Foreign key on owners table...</span>
            <span class="token single-quoted-string string">'id'</span><span class="token punctuation">,</span> <span class="token comment">// Local key on mechanics table...</span>
            <span class="token single-quoted-string string">'id'</span> <span class="token comment">// Local key on cars table...</span>
        <span class="token punctuation">)</span><span class="token punctuation">;</span></code></pre>

<pre><code>mechanics
    id - integer
    name - string

cars
    id - integer
    model - string
    mechanic_id - integer

owners
    id - integer
    name - string
    car_id - integer</code></pre>

<p>&nbsp;</p>

<p>&nbsp;</p>

<h2><strong>Has Many Through:</strong></h2>

<pre class=" language-php"><code class=" language-php"><span class="token this">$this</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">hasManyThrough</span><span class="token punctuation">(</span>
    <span class="token single-quoted-string string">'App\Post'</span><span class="token punctuation">,</span>
    <span class="token single-quoted-string string">'App\User'</span><span class="token punctuation">,</span>
    <span class="token single-quoted-string string">'country_id'</span><span class="token punctuation">,</span> <span class="token comment">// Foreign key on users table...</span>
    <span class="token single-quoted-string string">'user_id'</span><span class="token punctuation">,</span> <span class="token comment">// Foreign key on posts table...</span>
    <span class="token single-quoted-string string">'id'</span><span class="token punctuation">,</span> <span class="token comment">// Local key on countries table...</span>
    <span class="token single-quoted-string string">'id'</span> <span class="token comment">// Local key on users table...</span>
<span class="token punctuation">)</span><span class="token punctuation">;</span></code></pre>

<pre class=" language-php"><code class=" language-php">countries
    id <span class="token operator">-</span> integer
    name <span class="token operator">-</span> string

users
    id <span class="token operator">-</span> integer
    country_id <span class="token operator">-</span> integer
    name <span class="token operator">-</span> string

posts
    id <span class="token operator">-</span> integer
    user_id <span class="token operator">-</span> integer
    title <span class="token operator">-</span> string</code></pre>

<p>&nbsp;</p>

<p>&nbsp;</p>

<h2><strong>Polymorphic Relationships</strong></h2>

<p><strong>One To One (Polymorphic):</strong></p>

<pre><code>posts
    id - integer
    name - string

users
    id - integer
    name - string

images
    id - integer
    url - string
    imageable_id - integer
    imageable_type - string</code></pre>

<p>&nbsp;</p>

<p><strong>Models:</strong></p>

<pre class=" language-php"><code class=" language-php"><span class="token keyword">namespace</span> <span class="token package">App</span><span class="token punctuation">;</span>

<span class="token keyword">use</span> <span class="token package">Illuminate<span class="token punctuation">\</span>Database<span class="token punctuation">\</span>Eloquent<span class="token punctuation">\</span>Model</span><span class="token punctuation">;</span>

<span class="token keyword">class</span> <span class="token class-name">Image</span> <span class="token keyword">extends</span> <span class="token class-name">Model</span>
<span class="token punctuation">{</span>
    <span class="token doc-comment comment">/**
     * Get the owning imageable model.
     */</span>
    <span class="token keyword">public</span> <span class="token keyword">function</span> <span class="token function">imageable</span><span class="token punctuation">(</span><span class="token punctuation">)</span>
    <span class="token punctuation">{</span>
        <span class="token keyword">return</span> <span class="token this">$this</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">morphTo</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
    <span class="token punctuation">}</span>
<span class="token punctuation">}</span>


<span class="token keyword">class</span> <span class="token class-name">Post</span> <span class="token keyword">extends</span> <span class="token class-name">Model</span>
<span class="token punctuation">{</span>
    <span class="token doc-comment comment">/**
     * Get the post's image.
     */</span>
    <span class="token keyword">public</span> <span class="token keyword">function</span> <span class="token function">image</span><span class="token punctuation">(</span><span class="token punctuation">)</span>
    <span class="token punctuation">{</span>
        <span class="token keyword">return</span> <span class="token this">$this</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">morphOne</span><span class="token punctuation">(</span><span class="token single-quoted-string string">'App\Image'</span><span class="token punctuation">,</span> <span class="token single-quoted-string string">'imageable'</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
    <span class="token punctuation">}</span>
<span class="token punctuation">}</span>


<span class="token keyword">class</span> <span class="token class-name">User</span> <span class="token keyword">extends</span> <span class="token class-name">Model</span>
<span class="token punctuation">{</span>
    <span class="token doc-comment comment">/**
     * Get the user's image.
     */</span>
    <span class="token keyword">public</span> <span class="token keyword">function</span> <span class="token function">image</span><span class="token punctuation">(</span><span class="token punctuation">)</span>
    <span class="token punctuation">{</span>
        <span class="token keyword">return</span> <span class="token this">$this</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">morphOne</span><span class="token punctuation">(</span><span class="token single-quoted-string string">'App\Image'</span><span class="token punctuation">,</span> <span class="token single-quoted-string string">'imageable'</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
    <span class="token punctuation">}</span>
<span class="token punctuation">}</span></code></pre>

<p>&nbsp;</p>

<p><strong>One To Many (Polymorphic):</strong></p>

<pre><code>posts
    id - integer
    title - string
    body - text

videos
    id - integer
    title - string
    url - string

comments
    id - integer
    body - text
    commentable_id - integer
    commentable_type - string</code></pre>

<p><strong>Models:</strong></p>

<pre class=" language-php"><code class=" language-php"><span class="token keyword">namespace</span> <span class="token package">App</span><span class="token punctuation">;</span>

<span class="token keyword">use</span> <span class="token package">Illuminate<span class="token punctuation">\</span>Database<span class="token punctuation">\</span>Eloquent<span class="token punctuation">\</span>Model</span><span class="token punctuation">;</span>

<span class="token keyword">class</span> <span class="token class-name">Comment</span> <span class="token keyword">extends</span> <span class="token class-name">Model</span>
<span class="token punctuation">{</span>
    <span class="token doc-comment comment">/**
     * Get the owning commentable model.
     */</span>
    <span class="token keyword">public</span> <span class="token keyword">function</span> <span class="token function">commentable</span><span class="token punctuation">(</span><span class="token punctuation">)</span>
    <span class="token punctuation">{</span>
        <span class="token keyword">return</span> <span class="token this">$this</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">morphTo</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
    <span class="token punctuation">}</span>
<span class="token punctuation">}</span>


<span class="token keyword">class</span> <span class="token class-name">Post</span> <span class="token keyword">extends</span> <span class="token class-name">Model</span>
<span class="token punctuation">{</span>
    <span class="token doc-comment comment">/**
     * Get all of the post's comments.
     */</span>
    <span class="token keyword">public</span> <span class="token keyword">function</span> <span class="token function">comments</span><span class="token punctuation">(</span><span class="token punctuation">)</span>
    <span class="token punctuation">{</span>
        <span class="token keyword">return</span> <span class="token this">$this</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">morphMany</span><span class="token punctuation">(</span><span class="token single-quoted-string string">'App\Comment'</span><span class="token punctuation">,</span> <span class="token single-quoted-string string">'commentable'</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
    <span class="token punctuation">}</span>
<span class="token punctuation">}</span>


<span class="token keyword">class</span> <span class="token class-name">Video</span> <span class="token keyword">extends</span> <span class="token class-name">Model</span>
<span class="token punctuation">{</span>
    <span class="token doc-comment comment">/**
     * Get all of the video's comments.
     */</span>
    <span class="token keyword">public</span> <span class="token keyword">function</span> <span class="token function">comments</span><span class="token punctuation">(</span><span class="token punctuation">)</span>
    <span class="token punctuation">{</span>
        <span class="token keyword">return</span> <span class="token this">$this</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">morphMany</span><span class="token punctuation">(</span><span class="token single-quoted-string string">'App\Comment'</span><span class="token punctuation">,</span> <span class="token single-quoted-string string">'commentable'</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
    <span class="token punctuation">}</span>
<span class="token punctuation">}</span></code></pre>

<p>&nbsp;</p>
                                </div>