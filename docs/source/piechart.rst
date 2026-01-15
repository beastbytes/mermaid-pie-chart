Pie Chart Class
=============

.. php:class:: PieChart

  Represents a Pie Chart

  .. php:method:: render(array $attributes)

    Render the Mermaid code enclosed in a <pre> tag

    :param array $attributes: HTML attributes for the enclosing <pre> tag
    :returns: Mermaid code enclosed in a <pre> tag
    :rtype: string

  .. php:method:: addValues(array $values)

    Add Pie Chart Values

    :param array $values: The Pie Chart values as *key=>value* pairs; the keys are the labels for the values
    :returns: A new instance of ``PieChart`` with the values added to existing values
    :rtype: Pie Chart

  .. php:method:: showData()

    Show data values in the legend

    :returns: A new instance of ``PieChart`` that will show data values in the legend
    :rtype: Pie Chart

  .. php:method:: withComment(string $comment)

    Set the chart comment

    :param string $comment: The comment
    :returns: A new instance of ``PieChart`` with the comment
    :rtype: Pie Chart

  .. php:method:: withValues(array $values)

    Set Pie Chart values

    :param array $values: The Pie Chart values as *key=>value* pairs; the keys are the labels for the values
    :returns: A new instance of ``PieChart`` with the values
    :rtype: Pie Chart

  .. php:method:: withTitle(string $title)

    Set the chart title

    :param string $title: The title
    :returns: A new instance of ``PieChart`` with the title
    :rtype: Pie Chart
