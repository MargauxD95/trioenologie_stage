<?php

namespace ContainerPwpcMZ4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_FormDebugService extends App_KernelProdContainer
{
    /*
     * Gets the private 'console.command.form_debug' shared service.
     *
     * @return \Symfony\Component\Form\Command\DebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($container->privates['form.registry'] ?? $container->load('getForm_RegistryService')), [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'App\\Form\\Admin', 2 => 'App\\Form', 3 => 'Symfony\\Bridge\\Doctrine\\Form\\Type'], [0 => 'App\\Form\\Admin\\AdminProfileType', 1 => 'App\\Form\\Admin\\AdminStatusType', 2 => 'App\\Form\\Admin\\AdminUserType', 3 => 'App\\Form\\ArticleType', 4 => 'App\\Form\\CarouselType', 5 => 'App\\Form\\CategoryType', 6 => 'App\\Form\\ChangePasswordFormType', 7 => 'App\\Form\\ContactType', 8 => 'App\\Form\\GalleryType', 9 => 'App\\Form\\OccasionType', 10 => 'App\\Form\\PicturePositionType', 11 => 'App\\Form\\PictureType', 12 => 'App\\Form\\ProfileType', 13 => 'App\\Form\\RegistrationFormType', 14 => 'App\\Form\\ResetPasswordRequestFormType', 15 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 16 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 17 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 18 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType', 19 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 1 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension'], [0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser'], ($container->privates['debug.file_link_formatter'] ?? ($container->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter($container->getEnv('default::SYMFONY_IDE')))));

        $instance->setName('debug:form');
        $instance->setDescription('Display form type information');

        return $instance;
    }
}
