<?php

namespace ContainerLCgmneX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_RegistryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'form.registry' shared service.
     *
     * @return \Symfony\Component\Form\FormRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/DependencyInjection/DependencyInjectionExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/ResolvedFormTypeFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/DataCollector/Proxy/ResolvedTypeFactoryDataCollectorProxy.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/ResolvedFormTypeFactory.php';

        return $container->privates['form.registry'] = new \Symfony\Component\Form\FormRegistry([0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Form\\Admin\\AdminProfileType' => ['privates', 'App\\Form\\Admin\\AdminProfileType', 'getAdminProfileTypeService', true],
            'App\\Form\\Admin\\AdminStatusType' => ['privates', 'App\\Form\\Admin\\AdminStatusType', 'getAdminStatusTypeService', true],
            'App\\Form\\Admin\\AdminUserType' => ['privates', 'App\\Form\\Admin\\AdminUserType', 'getAdminUserTypeService', true],
            'App\\Form\\ArticleType' => ['privates', 'App\\Form\\ArticleType', 'getArticleTypeService', true],
            'App\\Form\\CarouselType' => ['privates', 'App\\Form\\CarouselType', 'getCarouselTypeService', true],
            'App\\Form\\CategoryType' => ['privates', 'App\\Form\\CategoryType', 'getCategoryTypeService', true],
            'App\\Form\\ChangePasswordFormType' => ['privates', 'App\\Form\\ChangePasswordFormType', 'getChangePasswordFormTypeService', true],
            'App\\Form\\ContactType' => ['privates', 'App\\Form\\ContactType', 'getContactTypeService', true],
            'App\\Form\\GalleryType' => ['privates', 'App\\Form\\GalleryType', 'getGalleryTypeService', true],
            'App\\Form\\OccasionType' => ['privates', 'App\\Form\\OccasionType', 'getOccasionTypeService', true],
            'App\\Form\\PicturePositionType' => ['privates', 'App\\Form\\PicturePositionType', 'getPicturePositionTypeService', true],
            'App\\Form\\PictureType' => ['privates', 'App\\Form\\PictureType', 'getPictureTypeService', true],
            'App\\Form\\ProfileType' => ['privates', 'App\\Form\\ProfileType', 'getProfileTypeService', true],
            'App\\Form\\RegistrationFormType' => ['privates', 'App\\Form\\RegistrationFormType', 'getRegistrationFormTypeService', true],
            'App\\Form\\ResetPasswordRequestFormType' => ['privates', 'App\\Form\\ResetPasswordRequestFormType', 'getResetPasswordRequestFormTypeService', true],
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => ['privates', 'form.type.entity', 'getForm_Type_EntityService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => ['privates', 'form.type.choice', 'getForm_Type_ChoiceService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType' => ['privates', 'form.type.color', 'getForm_Type_ColorService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => ['privates', 'form.type.file', 'getForm_Type_FileService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => ['privates', 'form.type.form', 'getForm_Type_FormService', true],
        ], [
            'App\\Form\\Admin\\AdminProfileType' => '?',
            'App\\Form\\Admin\\AdminStatusType' => '?',
            'App\\Form\\Admin\\AdminUserType' => '?',
            'App\\Form\\ArticleType' => '?',
            'App\\Form\\CarouselType' => '?',
            'App\\Form\\CategoryType' => '?',
            'App\\Form\\ChangePasswordFormType' => '?',
            'App\\Form\\ContactType' => '?',
            'App\\Form\\GalleryType' => '?',
            'App\\Form\\OccasionType' => '?',
            'App\\Form\\PicturePositionType' => '?',
            'App\\Form\\PictureType' => '?',
            'App\\Form\\ProfileType' => '?',
            'App\\Form\\RegistrationFormType' => '?',
            'App\\Form\\ResetPasswordRequestFormType' => '?',
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => '?',
        ]), ['Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.form.transformation_failure_handling'] ?? $container->load('getForm_TypeExtension_Form_TransformationFailureHandlingService'));
            yield 1 => ($container->privates['form.type_extension.form.http_foundation'] ?? $container->load('getForm_TypeExtension_Form_HttpFoundationService'));
            yield 2 => ($container->privates['form.type_extension.form.validator'] ?? $container->load('getForm_TypeExtension_Form_ValidatorService'));
            yield 3 => ($container->privates['form.type_extension.upload.validator'] ?? $container->load('getForm_TypeExtension_Upload_ValidatorService'));
            yield 4 => ($container->privates['form.type_extension.csrf'] ?? $container->load('getForm_TypeExtension_CsrfService'));
            yield 5 => ($container->privates['form.type_extension.form.data_collector'] ?? $container->load('getForm_TypeExtension_Form_DataCollectorService'));
        }, 6), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.repeated.validator'] ?? ($container->privates['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension()));
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.submit.validator'] ?? ($container->privates['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension()));
        }, 1)], new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_guesser.validator'] ?? $container->load('getForm_TypeGuesser_ValidatorService'));
            yield 1 => ($container->privates['form.type_guesser.doctrine'] ?? $container->load('getForm_TypeGuesser_DoctrineService'));
        }, 2))], new \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy(new \Symfony\Component\Form\ResolvedFormTypeFactory(), ($container->privates['data_collector.form'] ?? $container->getDataCollector_FormService())));
    }
}
