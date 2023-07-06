<?php

// autoload_static.php @generated by Composer
namespace GWiz_GF_OpenAI\Dependencies\Composer\Autoload;

class ComposerStaticInite1d20c7588a219a4a5909aae5ceb9f5c
{
    public static $prefixLengthsPsr4 = array('I' => array('Inc2734\\WP_GitHub_Plugin_Updater\\' => 33));
    public static $prefixDirsPsr4 = array('Inc2734\\WP_GitHub_Plugin_Updater\\' => array(0 => __DIR__ . '/..' . '/inc2734/wp-github-plugin-updater/src'));
    public static $prefixesPsr0 = array('P' => array('Parsedown' => array(0 => __DIR__ . '/..' . '/erusev/parsedown')));
    public static $classMap = array('GWiz_GF_OpenAI\\Dependencies\\Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php');
    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite1d20c7588a219a4a5909aae5ceb9f5c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite1d20c7588a219a4a5909aae5ceb9f5c::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInite1d20c7588a219a4a5909aae5ceb9f5c::$prefixesPsr0;
            $loader->classMap = ComposerStaticInite1d20c7588a219a4a5909aae5ceb9f5c::$classMap;
        }, null, ClassLoader::class);
    }
}
