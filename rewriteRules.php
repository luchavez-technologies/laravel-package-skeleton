<?php

// Available placeholders: :uc:vendor, :uc:package, :lc:vendor, :lc:package
return [
    'src/Services/MyPackage.php' => 'src/Services/:uc:package.php',
    'config/mypackage.php' => 'config/:lc:package.php',
    'src/Facades/MyPackage.php' => 'src/Facades/:uc:package.php',
    'src/Providers/MyPackageServiceProvider.php' => 'src/Providers/:uc:packageServiceProvider.php',
];
