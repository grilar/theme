<?php

namespace Grilar\Theme\Providers;

use Grilar\Base\Facades\BaseHelper;
use Grilar\Base\Supports\Helper;
use Grilar\Base\Supports\ServiceProvider;
use Grilar\Theme\Facades\Theme;
use Composer\Autoload\ClassLoader;
use Illuminate\Support\Arr;

class ThemeManagementServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $theme = Theme::getThemeName();
        if (! empty($theme)) {
            $this->app['translator']->addJsonPath(theme_path($theme . '/lang'));
            $this->app['translator']->addJsonPath(lang_path('vendor/themes/' . $theme));
        }
    }

    public function boot(): void
    {
        $theme = Theme::getThemeName();

        if (! empty($theme)) {
            $themePath = theme_path($theme);

            $configFilePath = $themePath . '/theme.json';

            if ($this->app['files']->exists($configFilePath)) {
                $content = BaseHelper::getFileData($configFilePath);
                if (! empty($content) && Arr::has($content, 'namespace')) {
                    $loader = new ClassLoader();
                    $loader->setPsr4($content['namespace'], theme_path($theme . '/src'));
                    $loader->register();
                }
            }

            Helper::autoload(theme_path($theme . '/functions'));
        }
    }
}
