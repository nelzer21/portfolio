<?php
class Navigation{
    static function getNav($cnx){
         $menuList = '<ul>';
         $dataFromDataBase = $cnx->getArray('MySqlRequest');

         foreach($dataFromDataBase as $menu) {
              $menuList  .='<li><a href="'.$menu->uri.'">'.$menu->name.'</a></li>';
         }

         $menuList .= '</ul>';

         return $menuList;
    }
}
