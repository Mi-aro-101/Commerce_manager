<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/adresse' => [[['_route' => 'app_adresse_index', '_controller' => 'App\\Controller\\AdresseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/adresse/new' => [[['_route' => 'app_adresse_new', '_controller' => 'App\\Controller\\AdresseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/annonce' => [[['_route' => 'app_annonce', '_controller' => 'App\\Controller\\AnnonceController::index'], null, null, null, true, false, null]],
        '/annonce/nouvelle' => [[['_route' => 'app_annonce_new', '_controller' => 'App\\Controller\\AnnonceController::nouvelle'], null, null, null, false, false, null]],
        '/article' => [[['_route' => 'app_article_index', '_controller' => 'App\\Controller\\ArticleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/article/new' => [[['_route' => 'app_article_new', '_controller' => 'App\\Controller\\ArticleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/article/fournisseur/new' => [[['_route' => 'app_article_fournisseur_new', '_controller' => 'App\\Controller\\ArticleFournisseurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/c/v/candidat/liste' => [[['_route' => 'app_c_v_candidat_liste', '_controller' => 'App\\Controller\\CVCandidatController::liste_annonce'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/c/v/candidat' => [[['_route' => 'app_c_v_candidat_index', '_controller' => 'App\\Controller\\CVCandidatController::index'], null, ['GET' => 0], null, true, false, null]],
        '/c/v/candidat/new' => [[['_route' => 'app_c_v_candidat_new', '_controller' => 'App\\Controller\\CVCandidatController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/c/v/requirements/liste_candidat_cv' => [[['_route' => 'app_c_v_requirements_liste_candidat_cv', '_controller' => 'App\\Controller\\CVRequirementsController::liste_candidat_cv'], null, ['GET' => 0], null, false, false, null]],
        '/c/v/requirements' => [[['_route' => 'app_c_v_requirements_index', '_controller' => 'App\\Controller\\CVRequirementsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/c/v/requirements/new' => [[['_route' => 'app_c_v_requirements_new', '_controller' => 'App\\Controller\\CVRequirementsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/conge' => [[['_route' => 'app_conge_index', '_controller' => 'App\\Controller\\CongeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/conge/new' => [[['_route' => 'app_conge_new', '_controller' => 'App\\Controller\\CongeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/conge/mes/employes' => [[['_route' => 'employe_conge', '_controller' => 'App\\Controller\\CongeController::congeMesEmployes'], null, null, null, false, false, null]],
        '/conge/calendrier/employes' => [[['_route' => 'app_conge_calendrier', '_controller' => 'App\\Controller\\CongeController::voirCalendrier'], null, null, null, false, false, null]],
        '/conge/all/employes' => [[['_route' => 'app_conge_all_employes', '_controller' => 'App\\Controller\\CongeController::congeAllEMployes'], null, null, null, false, false, null]],
        '/cv/candidat/note' => [[['_route' => 'app_cv_candidat_note_index', '_controller' => 'App\\Controller\\CvCandidatNoteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/cv/candidat/note/new' => [[['_route' => 'app_cv_candidat_note_new', '_controller' => 'App\\Controller\\CvCandidatNoteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/diplome' => [[['_route' => 'app_diplome_index', '_controller' => 'App\\Controller\\DiplomeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/diplome/new' => [[['_route' => 'app_diplome_new', '_controller' => 'App\\Controller\\DiplomeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/domaine' => [[['_route' => 'app_domaine_index', '_controller' => 'App\\Controller\\DomaineController::index'], null, ['GET' => 0], null, true, false, null]],
        '/domaine/new' => [[['_route' => 'app_domaine_new', '_controller' => 'App\\Controller\\DomaineController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/employe' => [[['_route' => 'app_employe_index', '_controller' => 'App\\Controller\\EmployeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/employe/fiche' => [[['_route' => 'app_employe_fiche', '_controller' => 'App\\Controller\\EmployeController::fiche_paie'], null, ['GET' => 0], null, false, false, null]],
        '/employe/view/my/employe' => [[['_route' => 'app_employe_view', '_controller' => 'App\\Controller\\EmployeController::view'], null, null, null, false, false, null]],
        '/experience' => [[['_route' => 'app_experience_index', '_controller' => 'App\\Controller\\ExperienceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/experience/new' => [[['_route' => 'app_experience_new', '_controller' => 'App\\Controller\\ExperienceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/fournisseur' => [[['_route' => 'app_fournisseur_index', '_controller' => 'App\\Controller\\FournisseurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/fournisseur/new' => [[['_route' => 'app_fournisseur_new', '_controller' => 'App\\Controller\\FournisseurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/heure/suplementaire' => [[['_route' => 'app_heure_suplementaire_index', '_controller' => 'App\\Controller\\HeureSuplementaireController::index'], null, ['GET' => 0], null, true, false, null]],
        '/heure/suplementaire/new' => [[['_route' => 'app_heure_suplementaire_new', '_controller' => 'App\\Controller\\HeureSuplementaireController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/heure/suplementaire/employe/heuresup' => [[['_route' => 'app_heure_suplementaire_employe', '_controller' => 'App\\Controller\\HeureSuplementaireController::heureSupEmploye'], null, null, null, false, false, null]],
        '/home/achat' => [[['_route' => 'app_home_achat', '_controller' => 'App\\Controller\\HomeAchatController::index'], null, null, null, false, false, null]],
        '/home/client' => [[['_route' => 'app_home_client', '_controller' => 'App\\Controller\\HomeClientController::index'], null, null, null, false, false, null]],
        '/home/departement' => [[['_route' => 'app_home_departement', '_controller' => 'App\\Controller\\HomeDepartementController::index'], null, null, null, false, false, null]],
        '/home/page' => [[['_route' => 'app_home_page', '_controller' => 'App\\Controller\\HomePageController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
        '/matrimoniale' => [[['_route' => 'app_matrimoniale_index', '_controller' => 'App\\Controller\\MatrimonialeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/matrimoniale/new' => [[['_route' => 'app_matrimoniale_new', '_controller' => 'App\\Controller\\MatrimonialeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/mode/paiment' => [[['_route' => 'app_mode_paiment_index', '_controller' => 'App\\Controller\\ModePaimentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/mode/paiment/new' => [[['_route' => 'app_mode_paiment_new', '_controller' => 'App\\Controller\\ModePaimentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/nationalite' => [[['_route' => 'app_nationalite_index', '_controller' => 'App\\Controller\\NationaliteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/nationalite/new' => [[['_route' => 'app_nationalite_new', '_controller' => 'App\\Controller\\NationaliteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reponse/section' => [[['_route' => 'app_reponse_section_index', '_controller' => 'App\\Controller\\ReponseSectionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reponse/section/new' => [[['_route' => 'app_reponse_section_new', '_controller' => 'App\\Controller\\ReponseSectionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/section' => [[['_route' => 'app_section_index', '_controller' => 'App\\Controller\\SectionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/section/new' => [[['_route' => 'app_section_new', '_controller' => 'App\\Controller\\SectionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/section/reponse/new' => [[['_route' => 'app_section_reponse_new', '_controller' => 'App\\Controller\\SectionReponseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/service' => [[['_route' => 'app_service_index', '_controller' => 'App\\Controller\\ServiceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/service/new' => [[['_route' => 'app_service_new', '_controller' => 'App\\Controller\\ServiceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/sexe' => [[['_route' => 'app_sexe_index', '_controller' => 'App\\Controller\\SexeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/sexe/new' => [[['_route' => 'app_sexe_new', '_controller' => 'App\\Controller\\SexeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/test/aptitude' => [[['_route' => 'app_test_aptitude_index', '_controller' => 'App\\Controller\\TestAptitudeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/test/aptitude/new' => [[['_route' => 'app_test_aptitude_new', '_controller' => 'App\\Controller\\TestAptitudeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/test/resultat' => [[['_route' => 'app_test_resultat_index', '_controller' => 'App\\Controller\\TestResultatController::index'], null, ['GET' => 0], null, true, false, null]],
        '/test/resultat/new' => [[['_route' => 'app_test_resultat_new', '_controller' => 'App\\Controller\\TestResultatController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/a(?'
                    .'|dresse/([^/]++)(?'
                        .'|(*:192)'
                        .'|/edit(*:205)'
                        .'|(*:213)'
                    .')'
                    .'|rticle/(?'
                        .'|([^/]++)(?'
                            .'|(*:243)'
                            .'|/edit(*:256)'
                            .'|(*:264)'
                        .')'
                        .'|fournisseur(?'
                            .'|(*:287)'
                            .'|/([^/]++)(?'
                                .'|(*:307)'
                                .'|/edit(*:320)'
                                .'|(*:328)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/c(?'
                    .'|/v/(?'
                        .'|candidat/(?'
                            .'|([^/]++)(?'
                                .'|(*:374)'
                                .'|/edit(*:387)'
                                .'|(*:395)'
                            .')'
                            .'|voircvcandidat/([^/]++)(*:427)'
                            .'|acceptercv/([^/]++)(*:454)'
                        .')'
                        .'|requirements/([^/]++)(?'
                            .'|(*:487)'
                            .'|/edit(*:500)'
                            .'|(*:508)'
                        .')'
                    .')'
                    .'|onge/(?'
                        .'|([^/]++)(?'
                            .'|(*:537)'
                            .'|/edit(*:550)'
                            .'|(*:558)'
                        .')'
                        .'|accepter/([^/]++)(*:584)'
                        .'|r(?'
                            .'|efuser/([^/]++)(*:611)'
                            .'|h/accepter/([^/]++)(*:638)'
                        .')'
                    .')'
                    .'|v/candidat/note/([^/]++)(?'
                        .'|(*:675)'
                        .'|/edit(*:688)'
                        .'|(*:696)'
                    .')'
                .')'
                .'|/d(?'
                    .'|iplome/([^/]++)(?'
                        .'|(*:729)'
                        .'|/edit(*:742)'
                        .'|(*:750)'
                    .')'
                    .'|omaine/([^/]++)(?'
                        .'|(*:777)'
                        .'|/edit(*:790)'
                        .'|(*:798)'
                    .')'
                .')'
                .'|/e(?'
                    .'|mploye/(?'
                        .'|addemp/([^/]++)(*:838)'
                        .'|([^/]++)(?'
                            .'|(*:857)'
                            .'|/edit(*:870)'
                            .'|(*:878)'
                        .')'
                    .')'
                    .'|xperience/([^/]++)(?'
                        .'|(*:909)'
                        .'|/edit(*:922)'
                        .'|(*:930)'
                    .')'
                .')'
                .'|/fournisseur/([^/]++)(?'
                    .'|(*:964)'
                    .'|/edit(*:977)'
                    .'|(*:985)'
                .')'
                .'|/heure/suplementaire/(?'
                    .'|([^/]++)(?'
                        .'|(*:1029)'
                        .'|/edit(*:1043)'
                        .'|(*:1052)'
                    .')'
                    .'|accepter/([^/]++)(*:1079)'
                    .'|refuser/([^/]++)(*:1104)'
                .')'
                .'|/m(?'
                    .'|atrimoniale/([^/]++)(?'
                        .'|(*:1142)'
                        .'|/edit(*:1156)'
                        .'|(*:1165)'
                    .')'
                    .'|ode/paiment/([^/]++)(?'
                        .'|(*:1198)'
                        .'|/edit(*:1212)'
                        .'|(*:1221)'
                    .')'
                .')'
                .'|/nationalite/([^/]++)(?'
                    .'|(*:1256)'
                    .'|/edit(*:1270)'
                    .'|(*:1279)'
                .')'
                .'|/reponse/section/([^/]++)(?'
                    .'|(*:1317)'
                    .'|/edit(*:1331)'
                    .'|(*:1340)'
                .')'
                .'|/se(?'
                    .'|ction/(?'
                        .'|([^/]++)(?'
                            .'|(*:1376)'
                            .'|/edit(*:1390)'
                            .'|(*:1399)'
                        .')'
                        .'|reponse(?'
                            .'|(*:1419)'
                            .'|/([^/]++)(?'
                                .'|(*:1440)'
                                .'|/edit(*:1454)'
                                .'|(*:1463)'
                            .')'
                        .')'
                    .')'
                    .'|rvice/([^/]++)(?'
                        .'|(*:1492)'
                        .'|/edit(*:1506)'
                        .'|(*:1515)'
                    .')'
                    .'|xe/([^/]++)(?'
                        .'|(*:1539)'
                        .'|/edit(*:1553)'
                        .'|(*:1562)'
                    .')'
                .')'
                .'|/test/(?'
                    .'|aptitude/([^/]++)(?'
                        .'|(*:1602)'
                        .'|/edit(*:1616)'
                        .'|(*:1625)'
                    .')'
                    .'|resultat/([^/]++)(?'
                        .'|(*:1655)'
                        .'|/edit(*:1669)'
                        .'|(*:1678)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        192 => [[['_route' => 'app_adresse_show', '_controller' => 'App\\Controller\\AdresseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        205 => [[['_route' => 'app_adresse_edit', '_controller' => 'App\\Controller\\AdresseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        213 => [[['_route' => 'app_adresse_delete', '_controller' => 'App\\Controller\\AdresseController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        243 => [[['_route' => 'app_article_show', '_controller' => 'App\\Controller\\ArticleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        256 => [[['_route' => 'app_article_edit', '_controller' => 'App\\Controller\\ArticleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        264 => [[['_route' => 'app_article_delete', '_controller' => 'App\\Controller\\ArticleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        287 => [[['_route' => 'app_article_fournisseur_index', '_controller' => 'App\\Controller\\ArticleFournisseurController::index'], [], ['GET' => 0], null, true, false, null]],
        307 => [[['_route' => 'app_article_fournisseur_show', '_controller' => 'App\\Controller\\ArticleFournisseurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        320 => [[['_route' => 'app_article_fournisseur_edit', '_controller' => 'App\\Controller\\ArticleFournisseurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        328 => [[['_route' => 'app_article_fournisseur_delete', '_controller' => 'App\\Controller\\ArticleFournisseurController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        374 => [[['_route' => 'app_c_v_candidat_show', '_controller' => 'App\\Controller\\CVCandidatController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        387 => [[['_route' => 'app_c_v_candidat_edit', '_controller' => 'App\\Controller\\CVCandidatController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        395 => [[['_route' => 'app_c_v_candidat_delete', '_controller' => 'App\\Controller\\CVCandidatController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        427 => [[['_route' => 'app_c_v_candidat_by_candidat', '_controller' => 'App\\Controller\\CVCandidatController::viewCvCandidat'], ['idcandidat'], ['GET' => 0], null, false, true, null]],
        454 => [[['_route' => 'app_acceptercv_by_id', '_controller' => 'App\\Controller\\CVCandidatController::accepterCv'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        487 => [[['_route' => 'app_c_v_requirements_show', '_controller' => 'App\\Controller\\CVRequirementsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        500 => [[['_route' => 'app_c_v_requirements_edit', '_controller' => 'App\\Controller\\CVRequirementsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        508 => [[['_route' => 'app_c_v_requirements_delete', '_controller' => 'App\\Controller\\CVRequirementsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        537 => [[['_route' => 'app_conge_show', '_controller' => 'App\\Controller\\CongeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        550 => [[['_route' => 'app_conge_edit', '_controller' => 'App\\Controller\\CongeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        558 => [[['_route' => 'app_conge_delete', '_controller' => 'App\\Controller\\CongeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        584 => [[['_route' => 'app_conge_accepter', '_controller' => 'App\\Controller\\CongeController::accepter'], ['idconge'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        611 => [[['_route' => 'app_conge_refuser', '_controller' => 'App\\Controller\\CongeController::refuser'], ['idconge'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        638 => [[['_route' => 'app_conge_accepter_rh', '_controller' => 'App\\Controller\\CongeController::accepter2'], ['idconge'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        675 => [[['_route' => 'app_cv_candidat_note_show', '_controller' => 'App\\Controller\\CvCandidatNoteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        688 => [[['_route' => 'app_cv_candidat_note_edit', '_controller' => 'App\\Controller\\CvCandidatNoteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        696 => [[['_route' => 'app_cv_candidat_note_delete', '_controller' => 'App\\Controller\\CvCandidatNoteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        729 => [[['_route' => 'app_diplome_show', '_controller' => 'App\\Controller\\DiplomeController::show'], ['id_diplome'], ['GET' => 0], null, false, true, null]],
        742 => [[['_route' => 'app_diplome_edit', '_controller' => 'App\\Controller\\DiplomeController::edit'], ['id_diplome'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        750 => [[['_route' => 'app_diplome_delete', '_controller' => 'App\\Controller\\DiplomeController::delete'], ['id_diplome'], ['POST' => 0], null, false, true, null]],
        777 => [[['_route' => 'app_domaine_show', '_controller' => 'App\\Controller\\DomaineController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        790 => [[['_route' => 'app_domaine_edit', '_controller' => 'App\\Controller\\DomaineController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        798 => [[['_route' => 'app_domaine_delete', '_controller' => 'App\\Controller\\DomaineController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        838 => [[['_route' => 'app_employe_new', '_controller' => 'App\\Controller\\EmployeController::new'], ['idcandidat'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        857 => [[['_route' => 'app_employe_show', '_controller' => 'App\\Controller\\EmployeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        870 => [[['_route' => 'app_employe_edit', '_controller' => 'App\\Controller\\EmployeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        878 => [[['_route' => 'app_employe_delete', '_controller' => 'App\\Controller\\EmployeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        909 => [[['_route' => 'app_experience_show', '_controller' => 'App\\Controller\\ExperienceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        922 => [[['_route' => 'app_experience_edit', '_controller' => 'App\\Controller\\ExperienceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        930 => [[['_route' => 'app_experience_delete', '_controller' => 'App\\Controller\\ExperienceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        964 => [[['_route' => 'app_fournisseur_show', '_controller' => 'App\\Controller\\FournisseurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        977 => [[['_route' => 'app_fournisseur_edit', '_controller' => 'App\\Controller\\FournisseurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        985 => [[['_route' => 'app_fournisseur_delete', '_controller' => 'App\\Controller\\FournisseurController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1029 => [[['_route' => 'app_heure_suplementaire_show', '_controller' => 'App\\Controller\\HeureSuplementaireController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1043 => [[['_route' => 'app_heure_suplementaire_edit', '_controller' => 'App\\Controller\\HeureSuplementaireController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1052 => [[['_route' => 'app_heure_suplementaire_delete', '_controller' => 'App\\Controller\\HeureSuplementaireController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1079 => [[['_route' => 'app_accepter_heure_sup', '_controller' => 'App\\Controller\\HeureSuplementaireController::accepter'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1104 => [[['_route' => 'app_refuser_heure_sup', '_controller' => 'App\\Controller\\HeureSuplementaireController::refuser'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1142 => [[['_route' => 'app_matrimoniale_show', '_controller' => 'App\\Controller\\MatrimonialeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1156 => [[['_route' => 'app_matrimoniale_edit', '_controller' => 'App\\Controller\\MatrimonialeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1165 => [[['_route' => 'app_matrimoniale_delete', '_controller' => 'App\\Controller\\MatrimonialeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1198 => [[['_route' => 'app_mode_paiment_show', '_controller' => 'App\\Controller\\ModePaimentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1212 => [[['_route' => 'app_mode_paiment_edit', '_controller' => 'App\\Controller\\ModePaimentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1221 => [[['_route' => 'app_mode_paiment_delete', '_controller' => 'App\\Controller\\ModePaimentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1256 => [[['_route' => 'app_nationalite_show', '_controller' => 'App\\Controller\\NationaliteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1270 => [[['_route' => 'app_nationalite_edit', '_controller' => 'App\\Controller\\NationaliteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1279 => [[['_route' => 'app_nationalite_delete', '_controller' => 'App\\Controller\\NationaliteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1317 => [[['_route' => 'app_reponse_section_show', '_controller' => 'App\\Controller\\ReponseSectionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1331 => [[['_route' => 'app_reponse_section_edit', '_controller' => 'App\\Controller\\ReponseSectionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1340 => [[['_route' => 'app_reponse_section_delete', '_controller' => 'App\\Controller\\ReponseSectionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1376 => [[['_route' => 'app_section_show', '_controller' => 'App\\Controller\\SectionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1390 => [[['_route' => 'app_section_edit', '_controller' => 'App\\Controller\\SectionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1399 => [[['_route' => 'app_section_delete', '_controller' => 'App\\Controller\\SectionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1419 => [[['_route' => 'app_section_reponse_index', '_controller' => 'App\\Controller\\SectionReponseController::index'], [], ['GET' => 0], null, true, false, null]],
        1440 => [[['_route' => 'app_section_reponse_show', '_controller' => 'App\\Controller\\SectionReponseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1454 => [[['_route' => 'app_section_reponse_edit', '_controller' => 'App\\Controller\\SectionReponseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1463 => [[['_route' => 'app_section_reponse_delete', '_controller' => 'App\\Controller\\SectionReponseController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1492 => [[['_route' => 'app_service_show', '_controller' => 'App\\Controller\\ServiceController::show'], ['id_service'], ['GET' => 0], null, false, true, null]],
        1506 => [[['_route' => 'app_service_edit', '_controller' => 'App\\Controller\\ServiceController::edit'], ['id_service'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1515 => [[['_route' => 'app_service_delete', '_controller' => 'App\\Controller\\ServiceController::delete'], ['id_service'], ['POST' => 0], null, false, true, null]],
        1539 => [[['_route' => 'app_sexe_show', '_controller' => 'App\\Controller\\SexeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1553 => [[['_route' => 'app_sexe_edit', '_controller' => 'App\\Controller\\SexeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1562 => [[['_route' => 'app_sexe_delete', '_controller' => 'App\\Controller\\SexeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1602 => [[['_route' => 'app_test_aptitude_show', '_controller' => 'App\\Controller\\TestAptitudeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1616 => [[['_route' => 'app_test_aptitude_edit', '_controller' => 'App\\Controller\\TestAptitudeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1625 => [[['_route' => 'app_test_aptitude_delete', '_controller' => 'App\\Controller\\TestAptitudeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1655 => [[['_route' => 'app_test_resultat_show', '_controller' => 'App\\Controller\\TestResultatController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1669 => [[['_route' => 'app_test_resultat_edit', '_controller' => 'App\\Controller\\TestResultatController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1678 => [
            [['_route' => 'app_test_resultat_delete', '_controller' => 'App\\Controller\\TestResultatController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
