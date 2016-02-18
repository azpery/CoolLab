<?php
namespace CoolLabBundle\Controller;

use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class CoolLabRestController extends Controller
{

  /**
   *
   * @param type $nom
   *
   * @View(serializerGroups={"Default","Details"})
   */
   public function getUserAction($username){
     $user = $this->getDoctrine()->getRepository('CoolLabBundle:FosUser')->findOneByUsernameCanonical($username);
     if(!is_object($user)){
       throw $this->createNotFoundException();
     }
     return $user;
   }

  /**
   *
   * @View(serializerGroups={"Default","Me","Details"})
   */
  public function getMeAction(){
    $this->forwardIfNotAuthenticated();
    return $this->getUser();
  }

  /**
   * Shortcut to throw a AccessDeniedException($message) if the user is not authenticated
   * @param String $message The message to display (default:'warn.user.notAuthenticated')
   */
  protected function forwardIfNotAuthenticated($message='warn.user.notAuthenticated'){
    if (!is_object($this->getUser()))
    {
        throw new AccessDeniedException($message);
    }
  }
  public function getProjetAction($nomProjet){
    $user = $this->getDoctrine()->getRepository('CoolLabBundle:Projet')->findOneByNom($nomProjet);
    if(!is_object($user)){
      throw $this->createNotFoundException();
    }
    return $user;
  }
}
?>
