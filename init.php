<?php
\Larakit\StaticFiles\Manager::package('larakit/sf-angular-satellizer')
    ->usePackage('larakit/sf-angular')
    ->ngModule('satellizer')
    ->setSourceDir('public')
    ->jsPackage('satellizer.min.js');

