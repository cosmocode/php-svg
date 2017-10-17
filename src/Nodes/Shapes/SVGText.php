<?php

namespace SVG\Nodes\Shapes;

use SVG\Nodes\SVGNode;
use SVG\Rasterization\SVGRasterizer;

/**
 * Represents the SVG tag 'text'.
 * Has the special attribute text.
 */
class SVGText extends SVGNode
{
    const TAG_NAME = 'text';
    protected $text = '';

    /**
     * @param string|null $text The first point's x coordinate.
     * @param string|null $x The left x coordinate.
     * @param string|null $y The upper y coordinate.
     */
    public function __construct($text, $x, $y)
    {
        parent::__construct();

        $this->text = $text;
        $this->setAttributeOptional('x', $x);
        $this->setAttributeOptional('y', $y);
    }

    /**
     * @return string The node's text
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @return string The first point's x coordinate.
     */
    public function getX()
    {
        return $this->getAttribute('x');
    }

    /**
     * Sets the x coordinate.
     *
     * @param string $x The new coordinate.
     *
     * @return $this This node instance, for call chaining.
     */
    public function setX($x)
    {
        return $this->setAttribute('x', $x);
    }

    /**
     * @return string The first point's y coordinate.
     */
    public function getY()
    {
        return $this->getAttribute('y');
    }

    /**
     * Sets the y coordinate.
     *
     * @param string $y The new coordinate.
     *
     * @return $this This node instance, for call chaining.
     */
    public function setY($y)
    {
        return $this->setAttribute('y', $y);
    }

    public function rasterize(SVGRasterizer $rasterizer)
    {

    }
}

