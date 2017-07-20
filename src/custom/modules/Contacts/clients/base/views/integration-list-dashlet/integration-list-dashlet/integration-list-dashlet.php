<?php

$viewdefs['Contacts']['base']['view']['integration-list-dashlet'] = array(
    'dashlets' => array(
        array(
            'label' => 'LBL_DASHLET_INTEGRATION_LIST_LABEL',
            'description' => 'LBL_DASHLET_INTEGRATION_LIST_DESCRIPTION',
            'config' => array(
                'api_type' => 'list',
            ),
            'preview' => array(),
            'filter' => array(
                'module' => array(
                    'Contacts',
                ),
                'view' => 'record',
            ),
        ),
    ),
    'panels' => array(
        array(
            'name' => 'dashlet_settings',
            'columns' => 1,
            'labelsOnTop' => true,
            'placeholders' => true,
            'fields' => array(
                array(
                    'name' => 'api_type',
                    'label' => 'LBL_DASHLET_INTEGRATION_API_TYPE',
                    'type' => 'enum',
                    'options' => 'dashlet_integration_api_types',
                ),
                /*
                array(
                    'name' => 'limit',
                    'label' => 'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS',
                    'type' => 'enum',
                    'options' => 'dashlet_limit_options',
                ),
                */
            ),
        ),
    ),
);

