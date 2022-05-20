<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit864e9b664caffe9d69b14c441bfd3b88
{
    public static $files = array (
        'c6827bbd1ffea26192e925d3ac35a2b1' => __DIR__ . '/../..' . '/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wplmi\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wplmi\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'WP_Async_Request' => __DIR__ . '/..' . '/deliciousbrains/wp-background-processing/classes/wp-async-request.php',
        'WP_Background_Process' => __DIR__ . '/..' . '/deliciousbrains/wp-background-processing/classes/wp-background-process.php',
        'WP_Dismiss_Notice' => __DIR__ . '/..' . '/afragen/wp-dismiss-notice/wp-dismiss-notice.php',
        'Wplmi\\Api\\Callbacks\\AdminCallbacks' => __DIR__ . '/../..' . '/inc/Api/Callbacks/AdminCallbacks.php',
        'Wplmi\\Api\\Callbacks\\ManagerCallbacks' => __DIR__ . '/../..' . '/inc/Api/Callbacks/ManagerCallbacks.php',
        'Wplmi\\Api\\SettingsApi' => __DIR__ . '/../..' . '/inc/Api/SettingsApi.php',
        'Wplmi\\Base\\Activate' => __DIR__ . '/../..' . '/inc/Base/Activate.php',
        'Wplmi\\Base\\AdminNotice' => __DIR__ . '/../..' . '/inc/Base/AdminNotice.php',
        'Wplmi\\Base\\BaseController' => __DIR__ . '/../..' . '/inc/Base/BaseController.php',
        'Wplmi\\Base\\Deactivate' => __DIR__ . '/../..' . '/inc/Base/Deactivate.php',
        'Wplmi\\Base\\Enqueue' => __DIR__ . '/../..' . '/inc/Base/Enqueue.php',
        'Wplmi\\Base\\Localization' => __DIR__ . '/../..' . '/inc/Base/Localization.php',
        'Wplmi\\Base\\MiscActions' => __DIR__ . '/../..' . '/inc/Base/MiscActions.php',
        'Wplmi\\Base\\PluginTools' => __DIR__ . '/../..' . '/inc/Base/PluginTools.php',
        'Wplmi\\Base\\Uninstall' => __DIR__ . '/../..' . '/inc/Base/Uninstall.php',
        'Wplmi\\Core\\AdminBar' => __DIR__ . '/../..' . '/inc/Core/AdminBar.php',
        'Wplmi\\Core\\Backend\\AdminColumn' => __DIR__ . '/../..' . '/inc/Core/Backend/AdminColumn.php',
        'Wplmi\\Core\\Backend\\BlockEditor' => __DIR__ . '/../..' . '/inc/Core/Backend/BlockEditor.php',
        'Wplmi\\Core\\Backend\\DashboardWidget' => __DIR__ . '/../..' . '/inc/Core/Backend/DashboardWidget.php',
        'Wplmi\\Core\\Backend\\EditScreen' => __DIR__ . '/../..' . '/inc/Core/Backend/EditScreen.php',
        'Wplmi\\Core\\Backend\\MetaBox' => __DIR__ . '/../..' . '/inc/Core/Backend/MetaBox.php',
        'Wplmi\\Core\\Backend\\MiscActions' => __DIR__ . '/../..' . '/inc/Core/Backend/MiscActions.php',
        'Wplmi\\Core\\Backend\\PluginsData' => __DIR__ . '/../..' . '/inc/Core/Backend/PluginsData.php',
        'Wplmi\\Core\\Backend\\PostStatusFilters' => __DIR__ . '/../..' . '/inc/Core/Backend/PostStatusFilters.php',
        'Wplmi\\Core\\Backend\\UserColumn' => __DIR__ . '/../..' . '/inc/Core/Backend/UserColumn.php',
        'Wplmi\\Core\\Blocks' => __DIR__ . '/../..' . '/inc/Core/Blocks.php',
        'Wplmi\\Core\\Elementor\\Loader' => __DIR__ . '/../..' . '/inc/Core/Elementor/Loader.php',
        'Wplmi\\Core\\Elementor\\Modules\\AuthorName' => __DIR__ . '/../..' . '/inc/Core/Elementor/Modules/AuthorName.php',
        'Wplmi\\Core\\Elementor\\Modules\\AuthorUrl' => __DIR__ . '/../..' . '/inc/Core/Elementor/Modules/AuthorUrl.php',
        'Wplmi\\Core\\Elementor\\Modules\\ModifiedDate' => __DIR__ . '/../..' . '/inc/Core/Elementor/Modules/ModifiedDate.php',
        'Wplmi\\Core\\Elementor\\Modules\\ModifiedTime' => __DIR__ . '/../..' . '/inc/Core/Elementor/Modules/ModifiedTime.php',
        'Wplmi\\Core\\Frontend\\PostView' => __DIR__ . '/../..' . '/inc/Core/Frontend/PostView.php',
        'Wplmi\\Core\\Frontend\\Schema' => __DIR__ . '/../..' . '/inc/Core/Frontend/Schema.php',
        'Wplmi\\Core\\Frontend\\Shortcode' => __DIR__ . '/../..' . '/inc/Core/Frontend/Shortcode.php',
        'Wplmi\\Core\\Frontend\\TemplateTags' => __DIR__ . '/../..' . '/inc/Core/Frontend/TemplateTags.php',
        'Wplmi\\Core\\Notification' => __DIR__ . '/../..' . '/inc/Core/Notification.php',
        'Wplmi\\Core\\RestApi' => __DIR__ . '/../..' . '/inc/Core/RestApi.php',
        'Wplmi\\Helpers\\Ajax' => __DIR__ . '/../..' . '/inc/Helpers/Ajax.php',
        'Wplmi\\Helpers\\Fields' => __DIR__ . '/../..' . '/inc/Helpers/Fields.php',
        'Wplmi\\Helpers\\HelperFunctions' => __DIR__ . '/../..' . '/inc/Helpers/HelperFunctions.php',
        'Wplmi\\Helpers\\Hooker' => __DIR__ . '/../..' . '/inc/Helpers/Hooker.php',
        'Wplmi\\Helpers\\SettingsData' => __DIR__ . '/../..' . '/inc/Helpers/SettingsData.php',
        'Wplmi\\Loader' => __DIR__ . '/../..' . '/inc/Loader.php',
        'Wplmi\\Pages\\Dashboard' => __DIR__ . '/../..' . '/inc/Pages/Dashboard.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit864e9b664caffe9d69b14c441bfd3b88::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit864e9b664caffe9d69b14c441bfd3b88::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit864e9b664caffe9d69b14c441bfd3b88::$classMap;

        }, null, ClassLoader::class);
    }
}
