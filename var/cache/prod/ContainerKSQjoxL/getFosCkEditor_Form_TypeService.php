<?php

namespace ContainerKSQjoxL;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosCkEditor_Form_TypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'fos_ck_editor.form.type' shared service.
     *
     * @return \FOS\CKEditorBundle\Form\Type\CKEditorType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['fos_ck_editor.form.type'] = new \FOS\CKEditorBundle\Form\Type\CKEditorType(new \FOS\CKEditorBundle\Config\CKEditorConfiguration(['configs' => ['main_config' => ['toolbar' => [0 => ['name' => 'styles', 'items' => [0 => 'Bold', 1 => 'Italic', 2 => 'Underline', 3 => 'Strike', 4 => 'Blockquote', 5 => '-', 6 => 'Link', 7 => '-', 8 => 'RemoveFormat', 9 => '-', 10 => 'NumberedList', 11 => 'BulletedList', 12 => '-', 13 => 'Outdent', 14 => 'Indent', 15 => '-', 16 => '-', 17 => 'JustifyLeft', 18 => 'JustifyCenter', 19 => 'JustifyRight', 20 => 'JustifyBlock', 21 => '-', 22 => 'Image', 23 => 'Table', 24 => '-', 25 => 'Styles', 26 => 'Format', 27 => 'Font', 28 => 'FontSize', 29 => '-', 30 => 'TextColor', 31 => 'BGColor', 32 => 'Source']]]], 'filebrowserBrowseRoute' => [0 => 'elfinder'], 'filebrowserBrowseRouteParameters' => []], 'enable' => true, 'async' => false, 'auto_inline' => true, 'inline' => false, 'autoload' => true, 'jquery' => false, 'require_js' => false, 'input_sync' => false, 'base_path' => 'bundles/fosckeditor/', 'js_path' => 'bundles/fosckeditor/ckeditor.js', 'jquery_path' => 'bundles/fosckeditor/adapters/jquery.js', 'default_config' => NULL, 'plugins' => [], 'styles' => [], 'templates' => [], 'filebrowsers' => [], 'toolbars' => ['configs' => [], 'items' => []]]));
    }
}
