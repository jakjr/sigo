<?php
$home = Menu::item(null, '/', 'Início', 'fa fa-home', 'home');

$atendimentos = Menu::item(null, '', 'Atendimentos', 'fa fa-commenting', 'atendimentos');
Menu::item($atendimentos, action('\Sigo\Http\Controllers\AtendimentoController@index'), 'Listagem', 'fa fa-list', 'atendimentos-listagem');
Menu::item($atendimentos, action('\Sigo\Http\Controllers\AtendimentoController@create'), 'Novo', 'fa fa-plus-circle', 'atendimentos-novo');

$relatorios = Menu::item(null, '', 'Relatórios', 'fa fa-list-alt', 'relatorios');
Menu::item($relatorios, '', 'Operacional', 'fa fa-cogs', 'relatorios-operacional');

$administracao = Menu::item(null, '', 'Administração', 'fa fa-black-tie', 'administracao');
Menu::item($administracao, '', 'Usuários', 'fa fa-user', 'administracao-usuarios');
Menu::item($administracao, '', 'Órgãos', 'fa fa-university', 'administracao-orgaos');