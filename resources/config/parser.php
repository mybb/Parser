<?php
/**
 * Default configuration for the parser
 *
 * @author  MyBB Group
 * @version 2.0.0
 * @package mybb/parser
 * @license http://www.mybb.com/licenses/bsd3 BSD-3
 */

return [
    /**
     * The type of the formatter to use - either 'mycode' or 'markdown'.
     */
    'formatter_type' => 'mycode',

    /**
     * Whether to enable emoji parsing.
     */
    'enable_emoji' => true,

    /**
     * The emoji source to use - either 'Twemoji' or 'EmojiOne'
     */
    'emoji_source' => 'Twemoji',

    // String or callable
    'postURL' => ['MyBB\Core\Services\ParserCallbacks', 'getPostLink'],
];
