<?php return array(
    'root' => array(
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'type' => 'project',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'reference' => '7c9c8074cbb09fe782185764d48099f703f6d801',
        'name' => 'pederklockmann/company-site-template',
        'dev' => true,
    ),
    'versions' => array(
        'components/jquery' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'type' => 'component',
            'install_path' => __DIR__ . '/../components/jquery',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'reference' => 'e1aae44bdc763e95e49128bb78f82008714c43db',
            'dev_requirement' => false,
        ),
        'fortawesome/font-awesome' => array(
            'pretty_version' => '6.2.0',
            'version' => '6.2.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../fortawesome/font-awesome',
            'aliases' => array(),
            'reference' => 'd3a7818c253fcbafff9ebd1d4abb2866c192e1d7',
            'dev_requirement' => false,
        ),
        'pederklockmann/company-site-template' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'type' => 'project',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'reference' => '7c9c8074cbb09fe782185764d48099f703f6d801',
            'dev_requirement' => false,
        ),
        'twbs/bootstrap' => array(
            'pretty_version' => 'v5.2.1',
            'version' => '5.2.1.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../twbs/bootstrap',
            'aliases' => array(),
            'reference' => '23e50829f958ea1d741d63e2781716be037e4644',
            'dev_requirement' => false,
        ),
        'twitter/bootstrap' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => 'v5.2.1',
            ),
        ),
    ),
);
