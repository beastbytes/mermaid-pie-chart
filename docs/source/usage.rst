Usage
=====

Pie Chart allows the creation of pie charts.

Data is added to the PieChart instance as an array of *key=>value* pairs where the *key* is the label for the value.

Optionally, the chart can have a title and data values displayed in the legend.

Example
-------

    Mermaid::create(PieChart::class)
        ->withTitle('Key elements in Product X')
        ->withValues([
            'Calcium' => 42.96,
            'Potassium' => 50.05,
            'Magnesium' => 10.01,
            'Iron' =>  5
        ])
        ->showData()
        ->render()
    ;
