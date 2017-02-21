<?php

namespace CodersLabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use CodersLabBundle\Entity\Contact;

class ContactController extends Controller
{
  private function getNewForm($contact){ //formularz do tworzenia
    $form = $this->createFormBuilder($contact);   //  proszę o obiekt, który będzie generował formularze
    $form->add('name');
    $form->add('surname');
    $form->add('description');
    $form->add('save','submit');
    $form->setAction($this->generateUrl('coderslab_contact_create'));
    return $form->getForm();
  }

  private function getEditForm($contact){ //osobny formularz do edycji
    $form = $this->createFormBuilder($contact);
    $form->add('name');
    $form->add('surname');
    $form->add('description');
    $form->add('save','submit');
    $form->setAction($this->generateUrl('coderslab_contact_update',['id'=>$contact->getId()]));
    return $form->getForm();

  }

/**
*@Route("/new")
*@Method("GET")
*@Template()
*/

  public function newAction(){
    $contact = new Contact();
    $form = $this->getNewForm($contact);
    return ['form'=>$form->createView()];
  }
/**
*@Route("/new")
*@Method("POST")
*@Template()
*/
  public function createAction(Request $request){
    $contact = new Contact();
    $form = $this->getNewForm($contact);

    $form->handleRequest($request);

    if($form->isSubmitted()){
      $em=$this->getDoctrine()->getManager();
      $em->persist($contact);
      $em->flush(); //flusha można wywołać z parametrami, jak bez, to zapisuje wszystkie zmiany

    }

    return $this->redirectToRoute('coderslab_contact_index');
  }

  /**
  *@Route("/{id}/modify")
  *@Method("GET")
  *@Template()
  */

  public function editAction($id){
    $contact=$this->getDoctrine()->getManager()->getRepository('CodersLabBundle:Contact')->find($id);
    $form = $this->getEditForm($contact);
    return ['form'=>$form->createView()];

  }
  /**
  *@Route("/{id}/modify")
  *@Method("POST")
  *@Template()
  */

  public function updateAction(Request $request, $id){
    $contact=$this->getDoctrine()->getManager()->getRepository('CodersLabBundle:Contact')->find($id);
    $form = $this->getEditForm($contact);
    $form->handleRequest($request);
    if($form->isSubmitted()){
      $this->getDoctrine()->getManager()->flush();

    }
    return $this->redirectToRoute('coderslab_contact_show', ['id'=>$contact->getId()]);
  }

  /**
  *@Route("/{id}/delete")
  *@Method("GET")
  */

  public function deleteAction($id){
    $em=$this->getDoctrine()->getManager();
    $repository=$em->getRepository('CodersLabBundle:Contact');
    $contact=$repository->find($id);
    $em->remove($contact);
    $em->flush();
    return $this->redirectToRoute('coderslab_contact_index');

  }

  /**
  *@Route("/{id}")
  *@Method("GET")
  *@Template()
  */

  public function showAction($id){
    $em=$this->getDoctrine()->getManager();
    $repository=$em->getRepository('CodersLabBundle:Contact');
    $contact=$repository->find($id);

    return ['contact'=>$contact];
  }

  /**
  *@Route("/")
  *@Method("GET")
  *@Template("CodersLabBundle:Contact:index.html.twig")
  */

  public function indexAction(){
    $em=$this->getDoctrine()->getManager();
    $repository=$em->getRepository('CodersLabBundle:Contact');

    $contacts=$repository->findAll();

    return ['contacts'=>$contacts];
  }
}
