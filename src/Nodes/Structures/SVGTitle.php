<?php

namespace SVG\Nodes\Structures;

use SVG\Nodes\SVGNode;
use SVG\Rasterization\SVGRasterizer;

/**
 * Represents the SVG tag 'title'.
 * Has the attribute 'text'.
 */
class SVGTitle extends SVGNode
{
    const TAG_NAME = 'title';

    private $text = '';

    /**
     * @param string $text The title text.
     */
    public function __construct($text = '')
    {
        parent::__construct();
        $this->text = $text;
    }

    /**
     * @return string The title text.
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets the title text.
     *
     * @param $text
     *
     * @return $this The node instance for call chaining
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Dummy implementation
     *
     * @param SVGRasterizer $rasterizer
     */
    public function rasterize(SVGRasterizer $rasterizer)
    {
        // nothing to rasterize
    }
}
