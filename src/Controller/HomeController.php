<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use App\Entity\Message;
use Doctrine\ORM\EntityManagerInterface;
class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig');
    }

    /**
     * @Route("/home/contact", name="home_contact")
     * @return [type] [description]
     */
    public function contact(): Response
    {
      return $this->render('home/contact.html.twig');
    }

    /**
     * @Route("/home/message", name="home_message")
     * @param  Request $request [description]
     * @param  Message $message [description]
     * @return [type]           [description]
     */
    public function contact_message(Request $request, EntityManagerInterface $entityManager, SerializerInterface $serializer )
    {
      // transforme le tableau des elements de requete en json
      $data = json_encode( $request->request->all());
      // hydrate l'objet message avec les data du fichier json
      $message = $serializer->deserialize($data, Message::class, 'json');
      $entityManager->persist($message);
      $entityManager->flush();
      return $this->redirectToRoute('home_contact');
    }
}
