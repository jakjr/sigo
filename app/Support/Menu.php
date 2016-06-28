<?php

namespace Sigo\Support;

use Illuminate\Contracts\View\View;

class Menu extends \Celepar\Light\Menu\ViewComposers\Menu {

    /**
     * Método da viewComposer
     * Ao renderizar a view layout::master.sidebar este método é executado
     * O método popular a variável $menu com código html que representa o menu.
     * @param View $view
     * @return string|void
     */
    public function compose(View $view)
    {
        include(__DIR__.'/../../menu.php');

        self::$menu->setAttributes(['class'=>'page-sidebar-menu']);

        if (! is_null($view->activeMenu)) {
            //Definido menu ativo no controller
            self::$menu->activate($view->activeMenu, 'key');
        } else {
            //Tentando definir qual menu esta ativo via URL
            self::$menu->activate( \Request::url() );
        }

        return $this->render(self::$menu);
    }

}