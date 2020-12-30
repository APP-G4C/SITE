
<?php
echo "En utilisant DOCUMENT_ROOT  :  ".$_SERVER['DOCUMENT_ROOT'].'\SITE\view\testreqonce.php';
echo "En utilisant dirname  :  ".dirname(__FILE__);
echo "Si les deux on echo la même chose, alors ma solution ne marche pas"?>
