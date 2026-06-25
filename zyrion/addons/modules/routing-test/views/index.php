<h1><?= htmlspecialchars($title ?? 'Routing Test', ENT_QUOTES, 'UTF-8') ?></h1>

<p><?= htmlspecialchars($message ?? '', ENT_QUOTES, 'UTF-8') ?></p>

<ul>
    <li><a href="/routing-test/hello">Hello action</a></li>
    <li><a href="/routing-test/nested">Nested action</a></li>
</ul>