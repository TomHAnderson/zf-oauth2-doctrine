<?php

namespace Blitzy;

return array(
    'service_manager' => array(
        'invokables' => array(
            'UserCredentialsDelegator' =>
                'ZFTest\OAuth2\Doctrine\Delegator\UserCredentialsDelegator'
        ),
    ),

    'doctrine' => array(
        'driver' => array(
            'orm_driver' => array(
                'class' => 'Doctrine\\ORM\\Mapping\\Driver\\XmlDriver',
                'paths' => array(
                    0 => __DIR__ . '/orm',
                ),
            ),
            'orm_default' => array(
                'class' => 'Doctrine\\ORM\\Mapping\\Driver\\DriverChain',
                'drivers' => array(
                    'ZFTest\\OAuth2\\Doctrine\\Entity' => 'orm_driver',
                ),
            ),
        ),
    ),
);
