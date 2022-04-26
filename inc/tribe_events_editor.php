<?php

// https://theeventscalendar.com/knowledgebase/k/change-the-default-event-template-in-block-editor/

add_filter( 'tribe_events_editor_default_template', function( $template ) {
 $template_search = array_column( $template, 0 );
 $organizer = array_search( 'tribe/event-organizer', $template_search );
 unset( $template[ $organizer ] );
 return $template;
}, 11, 1 );

add_filter( 'tribe_events_editor_default_template', function( $template ) {
  $template = [
    [
        'tribe/event-datetime',
    ],
    [
        'core/columns',
        [],
        [
            [
                'core/column',
                [],
                [['core/image', []]],
            ],
            [
                'core/column',
                [],
                [
                    [
                        'core/paragraph',
                        [
                            'placeholder' => 'Description',
                        ]
                    ],
                    [
                        'core/pattern',
                        [
                            'slug' => 'groove/event-practical-informations',
                        ],
                    ],
                    [
                        'tribe/event-website',
                        [],
                    ],
                ],
            ],
        ],
    ],
    [
        'core/columns',
        [],
        [
            [
                'core/column',
                [],
                [['core/embed', []]],
            ],
            [
                'core/column',
                [],
                [
                    [
                        'core/paragraph',
                        [
                            'placeholder' => 'Description',
                        ]
                    ],
                ],
            ],
        ],
    ],
  ];
  return $template;
}, 11, 1 );
