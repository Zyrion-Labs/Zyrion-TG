<h1><?= htmlspecialchars($title ?? 'Routing Test Nested', ENT_QUOTES, 'UTF-8') ?></h1>

<p><?= htmlspecialchars($message ?? '', ENT_QUOTES, 'UTF-8') ?></p>

<p>
    <a href="/routing-test">Back to routing test</a>
</p>