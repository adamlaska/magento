<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Framework\GraphQl\Argument;

/**
 * Class responsible for transforming an argument value from one array type to a complex or other type
 */
interface ValueParserInterface
{
    /**
     * Parse an argument value from an array or scalar to usually a ArgumentValueInterface or complex type
     *
     * @param array|int|string|float|bool $value
     * @return ArgumentValueInterface|ArgumentValueInterface[]|int|int[]|string|string[]|float|float[]|bool
     */
    public function parse($value);
}
