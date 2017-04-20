<?php
\Larakit\StaticFiles\Manager::package('larakit/sf-angular-satellizer')
    ->usePackage('larakit/sf-angular')
    ->setSourceDir('public')
    ->jsPackage('satellizer.min.js');

