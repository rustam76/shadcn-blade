<?php

$appCss = getcwd() . '/resources/css/app.css';
$themeCss = __DIR__ . '/../resources/css/themes.css';

if (! file_exists($themeCss)) {
    echo "ShadcnBlade: themes.css not found.\n";
    exit(0);
}

if (! file_exists($appCss)) {
    echo "ShadcnBlade: app.css not found.\n";
    exit(0);
}

$contents = file_get_contents($appCss);
$theme = file_get_contents($themeCss);

if (str_contains($contents, '/* shadcn-blade */')) {
    echo "ShadcnBlade: theme already injected.\n";
    exit(0);
}

file_put_contents(
    $appCss,
    "\n\n/* shadcn-blade */\n" . $theme,
    FILE_APPEND
);

echo "ShadcnBlade: CSS theme injected into app.css\n";
