<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'nuevo' => [[], ['_controller' => 'App\\Controller\\ArchivosController::index'], [], [['text', '/nuevo']], [], []],
    'analizar' => [[], ['_controller' => 'App\\Controller\\ArchivosController::analizar'], [], [['text', '/analizar']], [], []],
    'report' => [[], ['_controller' => 'App\\Controller\\ArchivosController::report'], [], [['text', '/report']], [], []],
    'editar' => [[], ['_controller' => 'App\\Controller\\ArchivosController::editar'], [], [['text', '/editar']], [], []],
    'borrar' => [[], ['_controller' => 'App\\Controller\\ArchivosController::borrar'], [], [['text', '/borrar']], [], []],
    'restaurar' => [[], ['_controller' => 'App\\Controller\\ArchivosController::restaurar'], [], [['text', '/restaurar']], [], []],
    'definitivo' => [[], ['_controller' => 'App\\Controller\\ArchivosController::borradoDefinitivo'], [], [['text', '/definitivo']], [], []],
    'comprimir' => [[], ['_controller' => 'App\\Controller\\ArchivosController::comprimir'], [], [['text', '/comprimir']], [], []],
    'compartir' => [[], ['_controller' => 'App\\Controller\\ArchivosController::compartir'], [], [['text', '/compartir']], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\IndexController::index'], [], [['text', '/']], [], []],
    'nueva_pass' => [[], ['_controller' => 'App\\Controller\\NuevaPassController::index'], [], [['text', '/nuevapass']], [], []],
    'newpass' => [[], ['_controller' => 'App\\Controller\\NuevaPassController::newPass'], [], [['text', '/newpass']], [], []],
    'panel' => [[], ['_controller' => 'App\\Controller\\PanelController::index'], [], [['text', '/panel']], [], []],
    'perfil' => [[], ['_controller' => 'App\\Controller\\PerfilController::index'], [], [['text', '/perfil']], [], []],
    'email' => [[], ['_controller' => 'App\\Controller\\PerfilController::buscarEmail'], [], [['text', '/email']], [], []],
    'c_email' => [[], ['_controller' => 'App\\Controller\\PerfilController::cambiarEmail'], [], [['text', '/c_email']], [], []],
    'usuario' => [[], ['_controller' => 'App\\Controller\\PerfilController::buscarUsuario'], [], [['text', '/usuario']], [], []],
    'c_usuario' => [[], ['_controller' => 'App\\Controller\\PerfilController::cambiarUsuario'], [], [['text', '/c_usuario']], [], []],
    'pass' => [[], ['_controller' => 'App\\Controller\\PerfilController::compruebaPass'], [], [['text', '/pass']], [], []],
    'c_pass' => [[], ['_controller' => 'App\\Controller\\PerfilController::cambiarPass'], [], [['text', '/c_pass']], [], []],
    'e_user' => [[], ['_controller' => 'App\\Controller\\PerfilController::eliminarUsuario'], [], [['text', '/e_user']], [], []],
    'registro' => [[], ['_controller' => 'App\\Controller\\RegistroController::index'], [], [['text', '/registro']], [], []],
    'reset' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::sendEmail'], [], [['text', '/reset']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'fos_js_routing_js' => [['_format'], ['_controller' => 'fos_js_routing.controller::indexAction', '_format' => 'js'], ['_format' => 'js|json'], [['variable', '.', 'js|json', '_format', true], ['text', '/js/routing']], [], []],
];
