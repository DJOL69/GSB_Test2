<?php
namespace Pg\GsbFraisBundle\Controller;
require_once("include/fct.inc.php");
//require_once ("include/class.pdogsb.inc.php");
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use PdoGsb;

class TablettesController extends Controller
{
    public function indexAction()
    {
      return $this->render('PgGsbFraisBundle:Tablettes:tablettes.html.twig');
    }

    public function afficherAction()
    {
        $em = $this->getDoctrine()->getManager();
        $tablettes = $em->getRepository('PgGsbFraisBundle:Tablettes')->testsql();

       return $this->render('PgGsbFraisBundle:Tablettes:tablettes.html.twig', array('liste'=>$tablettes));
    }

}
?>