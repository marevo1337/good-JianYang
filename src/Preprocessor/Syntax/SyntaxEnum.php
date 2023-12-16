<?php

namespace Tiutnev0\GoodJianYang\Preprocessor\Syntax;

enum SyntaxEnum: string
{
    case START_BLOCK = '{%';
    case END_BLOCK   = '%}';

    case SHOW_OPERATOR   = 'show';
    case IF_OPERATOR     = 'if';
    case IF_END_OPERATOR = 'endif';

    case SPACE_EOF = ' ';
}
