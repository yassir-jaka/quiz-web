  <?php
    $rootDirectoryPath = realpath(dirname(__FILE__));
    define ('__ROOT_DIR', $rootDirectoryPath );

    $base_url = explode('/',$_SERVER['REQUEST_URI']);
    array_pop($base_url);
    define ('__BASE_URL', implode('/',$base_url) );
    
    require_once(__ROOT_DIR . '/classes/AutoLoader.class.php');

    $request = Request::getCurrentRequest();
    try {
      $controller = Dispatcher::dispatch($request);

      $controller->execute();
    
    } catch (Exception $e) {
      echo 'Error : ' . $e->getMessage() . "\n";
    }

  ?>

</div>
