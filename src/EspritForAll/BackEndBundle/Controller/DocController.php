<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 16/11/2017
 * Time: 16:55
 */

namespace EspritForAll\BackEndBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle;
use Symfony\Bundle\MonologBundle\SwiftMailer;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DocController extends Controller
{   public function ListDocAction(){
$em= $this->getDoctrine()->getManager();
$documentadministratif=$em->getRepository("EspritForAllBackEndBundle:Documentadministratif")->findAll();

return $this->render('EspritForAllBackEndBundle:DocAd:Docadminiback.html.twig',array("Documentadministratif" => $documentadministratif));
}

    public function DeleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $doc= $em->getRepository("EspritForAllBackEndBundle:Documentadministratif")->find($id);//esmbundle puis esm class "MODELE"
        $em->remove($doc);
        $em->flush();
 return $this->redirectToRoute('AfficheDocs');

    }
    public function SendMailAction()
    {
        $message = \Swift_Message::newInstance()
            ->setSubject('docdoc')
            ->setFrom('espritforall@gmail.com')
            ->setTo('ilyes.elb@gmail.com')
            ->setContentType('text/html')
            ->setBody('votre demande est valider')
        ;
        $this->get('mailer')->send($message);
        return $this->redirectToRoute('AfficheDocs');
    }

    }
