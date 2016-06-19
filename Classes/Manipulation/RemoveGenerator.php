<?php
/**
 * RemoveGenerator
 *
 * @author  Tim Lochmüller
 */

namespace HTML\Sourceopt\Manipulation;

/**
 * RemoveGenerator
 */
class RemoveGenerator implements ManipulationInterface
{

    /**
     * @param string $html          The original HTML
     * @param array  $configuration Configuration
     *
     * @return string the manipulated HTML
     */
    public function manipulate($html, array $configuration = [])
    {
        return preg_replace('/<meta name=\"?generator\"?.+?>/is', '', $html);
    }
}
