<?php
/**
 * @copyright Copyright © 2023 BeastBytes - All rights reserved
 * @license BSD 3-Clause
 */

declare(strict_types=1);

namespace BeastBytes\Mermaid\PieChart;

use BeastBytes\Mermaid\Mermaid;
use BeastBytes\Mermaid\MermaidInterface;
use Stringable;

final class PieChart implements MermaidInterface, Stringable
{
    public const TYPE = 'pie';
    private const SHOW_DATA = ' showData';

    public function __construct(
        /** @var non-empty-array<string, float|int> $values */
        private readonly array $values,
        private readonly bool $showData = false,
        private readonly ?string $title = null
    )
    {
    }

    public function __toString(): string
    {
        return $this->render();
    }

    public function render(): string
    {
        /** @psalm-var list<string> $output */
        $output = [];

        $output[] = self::TYPE . ($this->showData ? self::SHOW_DATA : '');

        if ($this->title !== null) {
            $output[] = Mermaid::INDENTATION . 'title ' . $this->title;
        }

        foreach ($this->values as $name => $value) {
            $output[] = Mermaid::INDENTATION . '"' . $name . '" : ' . $value;
        }

        return Mermaid::render($output);
    }
}
