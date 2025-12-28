<?php

declare(strict_types=1);

use BeastBytes\Mermaid\Mermaid;
use BeastBytes\Mermaid\PieChart\PieChart;

defined('COMMENT') or define('COMMENT', 'Comment');
defined('TITLE') or define('TITLE', 'Title');
defined('VALUES') or define('VALUES', [
    'Value 1' => 5.25,
    'Value 2' => 25.3,
    'Value 3' => 42,
    'Value 4' => 17.17,
    'Value 5' => 69,
]);

test('Pie Chart', function () {
    expect(Mermaid::create(PieChart::class)
        ->withValues(VALUES)
        ->render()
    )
        ->toBe(<<<EXPECTED
<pre class="mermaid">
pie
  &quot;Value 1&quot; : 5.25
  &quot;Value 2&quot; : 25.3
  &quot;Value 3&quot; : 42
  &quot;Value 4&quot; : 17.17
  &quot;Value 5&quot; : 69
</pre>
EXPECTED
        )
    ;
});

test('Pie Chart showing data', function () {
    expect(Mermaid::create(PieChart::class)
        ->withValues(VALUES)
        ->showData()
        ->render()
    )
        ->toBe(<<<EXPECTED
<pre class="mermaid">
pie showData
  &quot;Value 1&quot; : 5.25
  &quot;Value 2&quot; : 25.3
  &quot;Value 3&quot; : 42
  &quot;Value 4&quot; : 17.17
  &quot;Value 5&quot; : 69
</pre>
EXPECTED
        )
    ;
});

test('Pie Chart with title', function () {
    expect(Mermaid::create(PieChart::class)
        ->withValues(VALUES)
        ->withTitle(TITLE)
        ->render()
    )
        ->toBe(<<<EXPECTED
<pre class="mermaid">
pie
  title Title
  &quot;Value 1&quot; : 5.25
  &quot;Value 2&quot; : 25.3
  &quot;Value 3&quot; : 42
  &quot;Value 4&quot; : 17.17
  &quot;Value 5&quot; : 69
</pre>
EXPECTED
        )
    ;
});

test('Pie Chart with everything', function () {
    expect(Mermaid::create(PieChart::class)
        ->withComment(COMMENT)
        ->withValues(VALUES)
        ->showData()
        ->withTitle(TITLE)
        ->render()
    )
        ->toBe(<<<EXPECTED
<pre class="mermaid">
%% Comment
pie showData
  title Title
  &quot;Value 1&quot; : 5.25
  &quot;Value 2&quot; : 25.3
  &quot;Value 3&quot; : 42
  &quot;Value 4&quot; : 17.17
  &quot;Value 5&quot; : 69
</pre>
EXPECTED
        )
    ;
});
