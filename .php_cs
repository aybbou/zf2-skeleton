<?php

$header = <<<'EOF'
EOF;

Symfony\CS\Fixer\Contrib\HeaderCommentFixer::setHeader($header);

return Symfony\CS\Config::create()
    // use default SYMFONY_LEVEL and extra fixers:
    ->fixers(array(
        'header_comment',
        'long_array_syntax',
        'no_useless_else',
        'no_useless_return',
        'ordered_use',
    ))
    ->finder(
        Symfony\CS\Finder::create()
            ->in(__DIR__.'/module')
    )
;
