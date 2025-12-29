# Mermaid Pie Chart
PHP for [Mermaid.js](https://mermaid.js.org/) [pie charts](https://mermaid.js.org/syntax/pie.html).

For license information see the [LICENSE](LICENSE.md) file.

## Installation
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist beastbytes/mermaid-pie-chart
```
or add

```json
"beastbytes/mermaid-pie-chart": "{{versionConstraint}}"
```
to the ```require``` section of your composer.json.

## Usage
* Create a PieChart instance using the ```Mermaid::create()``` method
* Configure the chart
* Render the chart

### Example
```php
/** @var array<string, float|int> $values */
echo Mermaid::create(PieChart::class)
    ->withValues($values)
    ->render()
;
```

## API
### PieChart
PieChart represents a pie chart.

#### addValues()
Returns a new instance of `PieChart` with the given values added to any existing values.

**_Note:_** New values with the same name as existing values will overwrite the existing values.
##### Parameters
| Name   | Type                      | Description                  |
|--------|---------------------------|------------------------------|
| values | array<string, float\|int> | Array of name => value pairs |
**Return Type:** PieChart

#### render()
Returns a string that is the Mermaid Pie Chart wrapped in a HTML `<pre class="mermaid">` tag.
##### Parameters
| Name       | Type                  | Description                       |
|------------|-----------------------|-----------------------------------|
| attributes | array<string, string> | Array of attribute => value pairs |
**_Note:_** The `mermaid` class is always added.

**Return Type:** string

### showData()
Returns a new instance of `PieChart` with `showData` set. The rendered Pie Chart will show values after the legend text.

**Return Type:** PieChart

#### withComment()
Returns a new instance of `PieChart` with a comment.
##### Parameters
| Name    | Type   | Description |
|---------|--------|-------------|
| comment | string | The comment |
**Return Type:** PieChart

#### withTitle()
Returns a new instance of `PieChart` with a title.
##### Parameters
| Name  | Type   | Description |
|-------|--------|-------------|
| title | string | The title   |
**Return Type:** PieChart

#### withValues()
Returns a new instance of `PieChart` with the given values.
##### Parameters
| Name   | Type                      | Description                  |
|--------|---------------------------|------------------------------|
| values | array<string, float\|int> | Array of name => value pairs |
**Return Type:** PieChart