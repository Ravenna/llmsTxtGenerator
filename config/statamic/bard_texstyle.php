<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Styles
    |--------------------------------------------------------------------------
    |
    | List of toggleable styles.
    |
    */

    'styles' => [

        'h2' => [
            'type'   => 'paragraph',
            'name'   => 'h2',
            'ident'  => 'h2',
            'class'  => 'h2',
            'cp_css' => 'font-size: 2.5rem;',
        ],

        'h3' => [
            'type'   => 'paragraph',
            'name'   => 'h3',
            'ident'  => 'h3',
            'class'  => 'h3',
            'cp_css' => 'font-size: 2rem;',
        ],

        'seafoam' => [
            'type'   => 'span',
            'name'   => 'sea',
            'ident'  => 'S',
            'class'  => 'seafoam',
            'cp_css' => 'color: #666;',
        ],
        
        'icon' => [
            'type'   => 'div',
            'name'   => 'Icon',
            'ident'  => 'I',
            'class'  => 'icon',
            'cp_css' => 'width: 100px;',
        ],


        'btn' => [
            'type'   => 'span',
            'name'   => 'Primary Button',
            'ident'  => 'B',
            'class'  => 'btn btn-primary',
            'cp_css' => 'color: dodgerblue; font-weight: 700',
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Default Classes
    |--------------------------------------------------------------------------
    |
    | Default classes that will be applied to elements with no style set.
    |
    */

    'default_classes' => [
        // 'heading' => [
        //     1 => 'heading-1',
        //     2 => 'heading-2',
        //     3 => 'heading-3',
        //     4 => 'heading-4',
        //     5 => 'heading-5',
        //     6 => 'heading-6',
        // ],
        // 'paragraph' => 'paragraph',
    ],

    /*
    |--------------------------------------------------------------------------
    | Store
    |--------------------------------------------------------------------------
    |
    | By default the class names are saved to your content. If you would prefer
    | to save the style keys instead you can change this option to "key".
    |
    */

    'store' => 'class',

];
