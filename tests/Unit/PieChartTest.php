<?php
/**
 * @copyright Copyright © 2023 BeastBytes - All rights reserved
 * @license BSD 3-Clause
 */

declare(strict_types=1);

use BeastBytes\Mermaid\PieChart\PieChart;

const TITLE = 'Title';
const VALUES = [
    'Value 1' => 5.25,
    'Value 2' => 25.3,
    'Value 3' => 42,
    'Value 4' => 17.17,
    'Value 5' => 69,
];

test('Pie Chart', function () {
    $pieChart = new PieChart(VALUES);

    expect($pieChart->render())
        ->toBe("<pre class=\"mermaid\">\n"
            . "pie\n"
            . "  \"Value 1\" : 5.25\n"
            . "  \"Value 2\" : 25.3\n"
            . "  \"Value 3\" : 42\n"
            . "  \"Value 4\" : 17.17\n"
            . "  \"Value 5\" : 69\n"
            . '</pre>'
        )
    ;
});

test('Pie Chart showing data', function () {
    $pieChart = new PieChart(VALUES, true);

    expect($pieChart->render())
        ->toBe("<pre class=\"mermaid\">\n"
            . "pie showData\n"
            . "  \"Value 1\" : 5.25\n"
            . "  \"Value 2\" : 25.3\n"
            . "  \"Value 3\" : 42\n"
            . "  \"Value 4\" : 17.17\n"
            . "  \"Value 5\" : 69\n"
            . '</pre>'
        )
    ;
});

test('Pie Chart with title', function () {
    $pieChart = new PieChart(VALUES, false, TITLE);

    expect($pieChart->render())
        ->toBe("<pre class=\"mermaid\">\n"
            . "pie\n"
            . '  title '. TITLE . "\n"
            . "  \"Value 1\" : 5.25\n"
            . "  \"Value 2\" : 25.3\n"
            . "  \"Value 3\" : 42\n"
            . "  \"Value 4\" : 17.17\n"
            . "  \"Value 5\" : 69\n"
            . '</pre>'
        )
    ;
});

test('Pie Chart with everything', function () {
    $pieChart = new PieChart(VALUES, true, TITLE);

    expect($pieChart->render())
        ->toBe("<pre class=\"mermaid\">\n"
            . "pie showData\n"
            . '  title '. TITLE . "\n"
            . "  \"Value 1\" : 5.25\n"
            . "  \"Value 2\" : 25.3\n"
            . "  \"Value 3\" : 42\n"
            . "  \"Value 4\" : 17.17\n"
            . "  \"Value 5\" : 69\n"
            . '</pre>'
        )
    ;
});
