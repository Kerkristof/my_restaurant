<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UsersRepository;
use App\Repository\MessageRepository;
use App\Entity\Users;
use Doctrine\ORM\EntityManagerInterface;


/**
 * @Route("/admin")
 */
class AdminController extends AbstractController
{
    /**
     * @Route("/index", name="admin_index")
     */
    public function index(UsersRepository $users_repo, MessageRepository $message_repo): Response
    {
        $users = $users_repo->findBy([], ['created_at' => 'DESC']);
        $messages = $message_repo->findAll();
        return $this->render('admin/index.html.twig', [
          'users' => $users,
          'messages' => $messages,
          ]) ;
    }

    /**
     * @Route("/update/{id}", name="admin_update_user")
     * @param  Users   $user    [description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function update_role(Users $user ,Request $request)
    {
      if ($user->getEmail() != "kerkristof@gmail.com") {
        $user_role = $request->request->get('role');
        $user->setRoles([$user_role]);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($user);
        $entityManager->flush();
      }
      else {
        $this->addFlash('protected_user', 'Vous ne pouvez pas modifier cet utilisateur');
      }
      return $this->redirectToRoute('admin_index');
    }

    /**
     * @Route("/delete/{id}", name="admin_delete_user")
     * @param  Users  $user [description]
     * @return [type]       [description]
     */
    public function delete_user(Users $user, EntityManagerInterface $entityManager)
    {
      if ($user->getEmail() != "kerkristof@gmail.com") {
        $entityManager->remove($user);
        $entityManager->flush($user);
        $this->addFlash('success', 'Le compte '.$user->getEmail().' a bien été supprimé!');
      }
      else {
        $this->addFlash('protected_user', 'Vous ne pouvez pas supprimer cet utilisateur');
      }
      return $this->redirectToRoute('admin_index');
    }
}
