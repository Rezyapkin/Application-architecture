<?php

$container->setParameter('environment', 'dev');
$container->setParameter('identity_map', new Model\IdentityMap\IdentityMap());
$container->setParameter('view.directory', __DIR__ . '/../../src/View/');
