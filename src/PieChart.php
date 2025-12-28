<?php

declare(strict_types=1);

namespace BeastBytes\Mermaid\PieChart;

use BeastBytes\Mermaid\CommentTrait;
use BeastBytes\Mermaid\Diagram;
use BeastBytes\Mermaid\Mermaid;
use BeastBytes\Mermaid\TitleTrait;

final class PieChart extends Diagram
{
    use CommentTrait;
    use TitleTrait;

    public const string SHOW_DATA = ' showData';
    private const string TYPE = 'pie';
    private const string VALUE = '"%s" : %s';

    private bool $showData = false;
    /** @var array<string, float|int> $values */
    private array $values = [];

    public function showData(): self
    {
        $new = clone $this;
        $new->showData = true;
        return $new;
    }

    public function addValues(array $values): self
    {
        $new = clone $this;
        $new->values = array_merge($this->values, $values);
        return $new;
    }

    public function withValues(array $values): self
    {
        $new = clone $this;
        $new->values = $values;
        return $new;
    }

    protected function renderDiagram(): string
    {
        /** @psalm-var list<string> $output */
        $output = [];

        $output[] = $this->renderComment('');
        $output[] = self::TYPE . ($this->showData ? self::SHOW_DATA : '');
        $output[] = $this->renderTitle(Mermaid::INDENTATION);

        foreach ($this->values as $name => $value) {
            $output[] = Mermaid::INDENTATION . sprintf(self::VALUE, $name, $value);
        }

        return implode("\n", array_filter($output, fn($v) => !empty($v)));
    }
}