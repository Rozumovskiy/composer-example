<?php

require_once 'ParserInterface.php';

/**
 * @author Bogdan Rozumovskiy <bogdanrozumovskij@gmail.com>
 */
class ParserBogdan implements ParserInterface
{

    public function process(string $url, string $tag)
    {
        return [
            'want',
            'be',
            'programmer'
        ];
    }

}
