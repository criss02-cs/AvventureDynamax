<?php
require_once 'headerInclude.php';
?>
<main role="main" class="container">
    <h1 class="text-center p-2">Avventure Dynamax </h1>
    <?php
      $id = getParam('id_leggendari', 0);
      $action = getParam('action','');
      $orderDir = getParam('orderDir', 'ASC');
      $search = getParam('search' ,'') ;
      $page = getParam('page',1);
       $paramsArray = compact('orderBy','orderDir','page','search');
      $defaultParams = http_build_query($paramsArray, '','&amp;');

    $orderBy = getParam('orderBy', 'id_leggendari');
      if($id){
          $user = getUser($id);
      } else {
          $user = [
              'nome' => '',
              'tipo1' => '',
              'tipo2' => '',
              'id_leggendari' => '',
          ];
      }

      // var_dump($user);die;
        require_once 'view/formUpdate.php';
?>
</main>
<?php
require_once 'view/footer.php';