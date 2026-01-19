Usage
=====

Pie Chart allows the creation of pie charts.

Data is added to the PieChart instance as an array of *key=>value* pairs where the *key* is the label for the value.

Optionally, the chart can have a title and data values displayed in the legend.

Example
-------

PHP
+++

.. code-block:: php

    echo Mermaid::create(PieChart::class, ['config' => [
        'pie' => ['textPosition' => 0.5]
        'themeVariables' => ['pieOuterStrokeWidth' => '5px']
    ])
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

Generated Mermaid
+++++++++++++++++

::

    <pre class="mermaid>
    ---
    config:
      pie:
        textPosition: 0.5
      themeVariables:
        pieOuterStrokeWidth: "5px"
    ---
    pie showData
        title Key elements in Product X
        "Calcium" : 42.96
        "Potassium" : 50.05
        "Magnesium" : 10.01
        "Iron" :  5
    </pre>


Mermaid Diagram
+++++++++++++++

.. mermaid::

    ---
    config:
      pie:
        textPosition: 0.5
      themeVariables:
        pieOuterStrokeWidth: "5px"
    ---
    pie showData
        title Key elements in Product X
        "Calcium" : 42.96
        "Potassium" : 50.05
        "Magnesium" : 10.01
        "Iron" :  5