<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/fc-load-events' => [[['_route' => 'fc_load_events', '_controller' => 'CalendarBundle\\Controller\\CalendarController::loadAction'], null, null, null, false, false, null]],
        '/admin/article' => [[['_route' => 'admin_article_index', '_controller' => 'App\\Controller\\Admin\\AdminArticleController::indexArticles'], null, ['GET' => 0], null, true, false, null]],
        '/admin/article/new' => [[['_route' => 'admin_article_new', '_controller' => 'App\\Controller\\Admin\\AdminArticleController::newArticle'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/carousel' => [[['_route' => 'admin_carousel_index', '_controller' => 'App\\Controller\\Admin\\AdminCarouselController::indexCarousels'], null, ['GET' => 0], null, true, false, null]],
        '/admin/carousel/new' => [[['_route' => 'admin_carousel_new', '_controller' => 'App\\Controller\\Admin\\AdminCarouselController::newCarousel'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/category' => [[['_route' => 'admin_categories', '_controller' => 'App\\Controller\\Admin\\AdminCategoryController::indexCategories'], null, ['GET' => 0], null, true, false, null]],
        '/admin/category/new' => [[['_route' => 'admin_category_new', '_controller' => 'App\\Controller\\Admin\\AdminCategoryController::newCategory'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/dashboard' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\Admin\\AdminDashboardController::dashboard'], null, null, null, false, false, null]],
        '/admin/gallery' => [[['_route' => 'admin_gallery_index', '_controller' => 'App\\Controller\\Admin\\AdminGalleryController::indexGalleries'], null, ['GET' => 0], null, true, false, null]],
        '/admin/gallery/new' => [[['_route' => 'admin_gallery_new', '_controller' => 'App\\Controller\\Admin\\AdminGalleryController::newGallery'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/occasion' => [[['_route' => 'admin_occasion_index', '_controller' => 'App\\Controller\\Admin\\AdminOccasionController::indexOccasions'], null, ['GET' => 0], null, true, false, null]],
        '/admin/occasion/calendrier' => [[['_route' => 'admin_occasion_calendrier', '_controller' => 'App\\Controller\\Admin\\AdminOccasionController::calendrier'], null, ['GET' => 0], null, false, false, null]],
        '/admin/occasion/new' => [[['_route' => 'admin_occasion_new', '_controller' => 'App\\Controller\\Admin\\AdminOccasionController::newOccasion'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/picture' => [[['_route' => 'admin_picture_index', '_controller' => 'App\\Controller\\Admin\\AdminPictureController::indexPicture'], null, ['GET' => 0], null, true, false, null]],
        '/admin/picture/new' => [[['_route' => 'admin_picture_newOne', '_controller' => 'App\\Controller\\Admin\\AdminPictureController::newPicture'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/picture/newm' => [[['_route' => 'admin_picture_newMulti', '_controller' => 'App\\Controller\\Admin\\AdminPictureController::newPictures'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/status' => [[['_route' => 'admin_status_index', '_controller' => 'App\\Controller\\Admin\\AdminStatusController::indexStatus'], null, ['GET' => 0], null, true, false, null]],
        '/admin/status/new' => [[['_route' => 'admin_status_new', '_controller' => 'App\\Controller\\Admin\\AdminStatusController::newStatus'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/user' => [[['_route' => 'admin_user_index', '_controller' => 'App\\Controller\\Admin\\AdminUserController::indexUsers'], null, null, null, true, false, null]],
        '/editor/profile' => [[['_route' => 'editor_profile', '_controller' => 'App\\Controller\\EditorController::show'], null, null, null, false, false, null]],
        '/editor/dashboard' => [[['_route' => 'editor_dashboard', '_controller' => 'App\\Controller\\EditorController::dashboardEditor'], null, null, null, false, false, null]],
        '/editor/articles' => [[['_route' => 'editor_articles', '_controller' => 'App\\Controller\\EditorController::indexArticles'], null, ['GET' => 0], null, false, false, null]],
        '/editor/article/new' => [[['_route' => 'editor_article_new', '_controller' => 'App\\Controller\\EditorController::newArticle'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/editor/pictures' => [[['_route' => 'editor_pictures', '_controller' => 'App\\Controller\\EditorController::indexPicture'], null, ['GET' => 0], null, false, false, null]],
        '/editor/picture/new' => [[['_route' => 'editor_picture_new', '_controller' => 'App\\Controller\\EditorController::newPicture'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/actus' => [[['_route' => 'actus', '_controller' => 'App\\Controller\\MainController::actualites'], null, null, null, false, false, null]],
        '/asso' => [[['_route' => 'asso', '_controller' => 'App\\Controller\\MainController::asso'], null, null, null, false, false, null]],
        '/evenements' => [[['_route' => 'events', '_controller' => 'App\\Controller\\MainController::indexOccasions'], null, null, null, false, false, null]],
        '/calendrier' => [[['_route' => 'calendrier', '_controller' => 'App\\Controller\\MainController::calendrierUser'], null, ['GET' => 0], null, false, false, null]],
        '/galeries' => [[['_route' => 'galeries', '_controller' => 'App\\Controller\\MainController::galeries'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\MainController::contact'], null, null, null, false, false, null]],
        '/mentions_legales' => [[['_route' => 'mentions', '_controller' => 'App\\Controller\\MainController::mentionsLegales'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user/profile' => [[['_route' => 'user_profile', '_controller' => 'App\\Controller\\UserController::show'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/(?'
                    .'|article/(?'
                        .'|([^/]++)(?'
                            .'|(*:39)'
                            .'|/edit(*:51)'
                        .')'
                        .'|edit/([^/]++)/unlinkPicture/([^/]++)(*:95)'
                        .'|([^/]++)(*:110)'
                    .')'
                    .'|ca(?'
                        .'|rousel/(?'
                            .'|([^/]++)(?'
                                .'|(*:145)'
                                .'|/edit(*:158)'
                            .')'
                            .'|edit/([^/]++)/unlinkPicture/([^/]++)(*:203)'
                            .'|([^/]++)(*:219)'
                        .')'
                        .'|tegory/([^/]++)(?'
                            .'|(*:246)'
                            .'|/edit(*:259)'
                            .'|(*:267)'
                        .')'
                    .')'
                    .'|gallery/(?'
                        .'|([^/]++)(?'
                            .'|(*:299)'
                            .'|/edit(*:312)'
                        .')'
                        .'|edit/([^/]++)/unlinkPicture/([^/]++)(*:357)'
                        .'|([^/]++)(*:373)'
                    .')'
                    .'|occasion/(?'
                        .'|([^/]++)(?'
                            .'|(*:405)'
                            .'|/edit(*:418)'
                        .')'
                        .'|edit/([^/]++)/unlinkPicture/([^/]++)(*:463)'
                        .'|([^/]++)(*:479)'
                    .')'
                    .'|p(?'
                        .'|icture/([^/]++)(?'
                            .'|(*:510)'
                            .'|/edit(*:523)'
                            .'|(*:531)'
                        .')'
                        .'|rofile/([^/]++)(?'
                            .'|(*:558)'
                            .'|/edit(*:571)'
                            .'|(*:579)'
                        .')'
                    .')'
                    .'|status/([^/]++)(?'
                        .'|(*:607)'
                        .'|/edit(*:620)'
                        .'|(*:628)'
                    .')'
                    .'|user/([^/]++)(?'
                        .'|(*:653)'
                        .'|/edit(*:666)'
                        .'|(*:674)'
                    .')'
                .')'
                .'|/editor/(?'
                    .'|article/([^/]++)(?'
                        .'|(*:714)'
                        .'|/edit(*:727)'
                        .'|(*:735)'
                    .')'
                    .'|edit/([^/]++)/unlinkPicture/([^/]++)(*:780)'
                    .'|picture/([^/]++)(?'
                        .'|(*:807)'
                        .'|/edit(*:820)'
                    .')'
                .')'
                .'|/calendrier/([^/]++)(*:850)'
                .'|/galerie/([^/]++)(*:875)'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:919)'
                .'|/user/profile/([^/]++)(?'
                    .'|/edit(*:957)'
                    .'|(*:965)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        39 => [[['_route' => 'admin_article_show', '_controller' => 'App\\Controller\\Admin\\AdminArticleController::showArticle'], ['id'], ['GET' => 0], null, false, true, null]],
        51 => [[['_route' => 'admin_article_edit', '_controller' => 'App\\Controller\\Admin\\AdminArticleController::editArticle'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        95 => [[['_route' => 'admin_article_unlinkPicture', '_controller' => 'App\\Controller\\Admin\\AdminArticleController::unlinkPicture'], ['article_id', 'id'], ['GET' => 0, 'POST' => 1, 'DELETE' => 2], null, false, true, null]],
        110 => [[['_route' => 'admin_article_delete', '_controller' => 'App\\Controller\\Admin\\AdminArticleController::deleteArticle'], ['id'], ['POST' => 0], null, false, true, null]],
        145 => [[['_route' => 'admin_carousel_show', '_controller' => 'App\\Controller\\Admin\\AdminCarouselController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        158 => [[['_route' => 'admin_carousel_edit', '_controller' => 'App\\Controller\\Admin\\AdminCarouselController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        203 => [[['_route' => 'admin_carousel_unlinkPicture', '_controller' => 'App\\Controller\\Admin\\AdminCarouselController::unlinkPicture'], ['carousel_id', 'id'], ['GET' => 0, 'POST' => 1, 'DELETE' => 2], null, false, true, null]],
        219 => [[['_route' => 'admin_carousel_delete', '_controller' => 'App\\Controller\\Admin\\AdminCarouselController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        246 => [[['_route' => 'admin_category_show', '_controller' => 'App\\Controller\\Admin\\AdminCategoryController::showCategory'], ['id'], ['GET' => 0], null, false, true, null]],
        259 => [[['_route' => 'admin_category_edit', '_controller' => 'App\\Controller\\Admin\\AdminCategoryController::editCategory'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        267 => [[['_route' => 'admin_category_delete', '_controller' => 'App\\Controller\\Admin\\AdminCategoryController::deleteCategory'], ['id'], ['POST' => 0], null, false, true, null]],
        299 => [[['_route' => 'admin_gallery_show', '_controller' => 'App\\Controller\\Admin\\AdminGalleryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        312 => [[['_route' => 'admin_gallery_edit', '_controller' => 'App\\Controller\\Admin\\AdminGalleryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        357 => [[['_route' => 'admin_gallery_unlinkPicture', '_controller' => 'App\\Controller\\Admin\\AdminGalleryController::unlinkPicture'], ['gallery_id', 'id'], ['GET' => 0, 'POST' => 1, 'DELETE' => 2], null, false, true, null]],
        373 => [[['_route' => 'admin_gallery_delete', '_controller' => 'App\\Controller\\Admin\\AdminGalleryController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        405 => [[['_route' => 'admin_occasion_show', '_controller' => 'App\\Controller\\Admin\\AdminOccasionController::showOccasion'], ['id'], ['GET' => 0], null, false, true, null]],
        418 => [[['_route' => 'admin_occasion_edit', '_controller' => 'App\\Controller\\Admin\\AdminOccasionController::editOccasion'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        463 => [[['_route' => 'admin_occasion_unlinkPicture', '_controller' => 'App\\Controller\\Admin\\AdminOccasionController::unlinkPicture'], ['occasion_id', 'id'], ['GET' => 0, 'DELETE' => 1], null, false, true, null]],
        479 => [[['_route' => 'admin_occasion_delete', '_controller' => 'App\\Controller\\Admin\\AdminOccasionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        510 => [[['_route' => 'admin_picture_show', '_controller' => 'App\\Controller\\Admin\\AdminPictureController::showPicture'], ['id'], ['GET' => 0], null, false, true, null]],
        523 => [[['_route' => 'admin_picture_edit', '_controller' => 'App\\Controller\\Admin\\AdminPictureController::editPicture'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        531 => [[['_route' => 'admin_picture_delete', '_controller' => 'App\\Controller\\Admin\\AdminPictureController::deletePicture'], ['id'], ['POST' => 0], null, false, true, null]],
        558 => [[['_route' => 'admin_profile_show', '_controller' => 'App\\Controller\\Admin\\AdminProfileController::showProfile'], ['id'], ['GET' => 0], null, false, true, null]],
        571 => [[['_route' => 'admin_profile_edit', '_controller' => 'App\\Controller\\Admin\\AdminProfileController::editProfile'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        579 => [[['_route' => 'admin_profile_delete', '_controller' => 'App\\Controller\\Admin\\AdminProfileController::deleteProfile'], ['id'], ['POST' => 0], null, false, true, null]],
        607 => [[['_route' => 'admin_status_show', '_controller' => 'App\\Controller\\Admin\\AdminStatusController::showStatus'], ['id'], ['GET' => 0], null, false, true, null]],
        620 => [[['_route' => 'admin_status_edit', '_controller' => 'App\\Controller\\Admin\\AdminStatusController::editStatus'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        628 => [[['_route' => 'admin_status_delete', '_controller' => 'App\\Controller\\Admin\\AdminStatusController::deleteStatus'], ['id'], ['POST' => 0], null, false, true, null]],
        653 => [[['_route' => 'admin_user_show', '_controller' => 'App\\Controller\\Admin\\AdminUserController::showUser'], ['id'], null, null, false, true, null]],
        666 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\Admin\\AdminUserController::editUser'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        674 => [[['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\Admin\\AdminUserController::deleteUser'], ['id'], ['POST' => 0], null, false, true, null]],
        714 => [[['_route' => 'editor_article_show', '_controller' => 'App\\Controller\\EditorController::showArticle'], ['id'], ['GET' => 0], null, false, true, null]],
        727 => [[['_route' => 'editor_article_edit', '_controller' => 'App\\Controller\\EditorController::editArticle'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        735 => [[['_route' => 'editor_article_delete', '_controller' => 'App\\Controller\\EditorController::deleteArticle'], ['id'], ['POST' => 0], null, false, true, null]],
        780 => [[['_route' => 'editor_article_unlinkPicture', '_controller' => 'App\\Controller\\EditorController::unlinkPictureArticle'], ['article_id', 'id'], ['GET' => 0, 'POST' => 1, 'DELETE' => 2], null, false, true, null]],
        807 => [[['_route' => 'editor_picture_show', '_controller' => 'App\\Controller\\EditorController::showPicture'], ['id'], ['GET' => 0], null, false, true, null]],
        820 => [[['_route' => 'editor_picture_edit', '_controller' => 'App\\Controller\\EditorController::editPicture'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        850 => [[['_route' => 'showEvent', '_controller' => 'App\\Controller\\MainController::showEvent'], ['id'], ['GET' => 0], null, false, true, null]],
        875 => [[['_route' => 'show_gallery', '_controller' => 'App\\Controller\\MainController::showGalerie'], ['id'], ['GET' => 0], null, false, true, null]],
        919 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        957 => [[['_route' => 'user_profile_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        965 => [
            [['_route' => 'user_profile_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [['_route' => 'user_profile_reset', '_controller' => 'App\\Controller\\UserController::reset'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
