<?php

// Enrico Simonetti
// enricosimonetti.com
//
// 2017-07-20 on Sugar 7.9.0.0
// filename: custom/modules/Contacts/clients/base/api/IntegrationListApi.php

class IntegrationListApi extends SugarApi
{
    public function registerApiRest()
    {
        return array(
            array(
                'reqType' => 'GET',
                'path' => array('Contacts', '?', 'integration', '?'),
                'pathVars' => array('module', 'record', '', 'type'),
                'method' => 'getIntegrationData',
                'shortHelp' => 'Get Integration data',
                'longHelp' => '',
            )
        );
    }
    
    public function getIntegrationData($api, $args)
    {
        $this->requireArgs($args, array('module', 'record', 'type'));

        /** @var Contact $record */
        $record = $this->loadBean($api, $args, 'view');
        
        if(!empty($record->id)) {

            // here there should be the logic to retrieve data from the external system based on the input record

            if($args['type'] == 'list') {

                // list dummy data

                return array(
                    'headers' => array(
                        translate('LBL_INTEGRATION_FIELD_LIST_A'),
                        translate('LBL_INTEGRATION_FIELD_LIST_B'),
                        translate('LBL_INTEGRATION_FIELD_LIST_C'),
                        translate('LBL_INTEGRATION_FIELD_LIST_D'),
                    ),
                    'data' => array(
                        array(
                            'a 1',
                            'b 1',
                            'c 1',
                            'd 1', 
                        ),
                        array(
                            'a 2',
                            'b 2',
                            'c 2',
                            'd 2', 
                        ),
                        array(
                            'a 3',
                            'b 3',
                            'c 3',
                            'd 3', 
                        ),
                        array(
                            'a 4',
                            'b 4',
                            'c 4',
                            'd 4', 
                        ),
                        array(
                            'a 5',
                            'b 5',
                            'c 5',
                            'd 5', 
                        ),
                        array(
                            'a 6',
                            'b 6',
                            'c 6',
                            'd 6', 
                        ),
                        array(
                            'a 7',
                            'b 7',
                            'c 7',
                            'd 7', 
                        ),
                        array(
                            'a 8',
                            'b 8',
                            'c 8',
                            'd 8', 
                        ),
                        array(
                            'a 9',
                            'b 9',
                            'c 9',
                            'd 9', 
                        ),
                        array(
                            'a 10',
                            'b 10',
                            'c 10',
                            'd 10', 
                        ),
                    ),
                );
            } else if ($args['type'] == 'aggregate') {

                // aggregate dummy data

                return array(
                    'headers' => array(
                        translate('LBL_INTEGRATION_FIELD_AGGREGATE_A'),
                        translate('LBL_INTEGRATION_FIELD_AGGREGATE_B'),
                        translate('LBL_INTEGRATION_FIELD_AGGREGATE_C'),
                    ),
                    'data' => array(
                        array(
                            'a 1',
                            'b 1',
                            'c 1',
                        ),
                        array(
                            'a 2',
                            'b 2',
                            'c 2',
                        ),
                    ),
                );
            }

            return array();
        }
        else
        {
            return array();
        }
    }
}
