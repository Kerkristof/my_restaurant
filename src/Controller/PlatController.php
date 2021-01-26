<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Plat;
use App\Repository\PlatRepository;
use App\Form\PlatType;
use App\Entity\PlatImage;
use App\Form\PlatImageType;

/**
 * @Route("/plat")
 */
class PlatController extends AbstractController
{
  /**
  * @Route("/index", name="plat_index")
  */
  public function index(PlatRepository $plat_repo)
  {
    $plats = $plat_repo->findAll();
    return $this->render('plat/index.html.twig', [
      'plats' => $plats
    ]);
  }
  /**
   * [edit description]
   * @Route("/new", name="plat_new", methods={"POST"})
   * @Route("/update/{id}", name="plat_update", methods={"POST"})
   * @param  [type]        $plat    [description]
   * @param  Request       $request [description]
   * @param EntityManagerInterface $entityManager [description]
   * @return [type]                 [description]
   */
  public function edit( Plat $plat = null, Request $request, EntityManagerInterface $entityManager)
  {
    if (! $plat) {
      $plat = new Plat;
    }
    $form = $this->createForm(PlatType::class, $plat);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      $entityManager->persist($plat);
      $entityManager->flush($plat);
      return $this->RedirectToRoute('plat_index');
    }

    return $this->render('plat/edit.html.twig', [
      'platForm' => $form->createView()
    ]);
  }

  /**
   * @Route("/delete/{id}", name="plat_delete", methods={"DELETE"})
   * @param  Plat          $plat    [description]
   * @param EntityManagerInterface $entityManager [description]
   * @return [type]                 [description]
   */
  public function delete(Plat $plat, EntityManagerInterface $entityManager)
  {
    $entityManager->remove($plat);
    $entityManager->flush($plat);
    return $this->RedirectToRoute('plat_index');
  }

  /**
   * @Route("/add_image/{id}", name="plat_add_image", methods={"POST"})
   * @param Plat          $plat    [description]
   * @param EntityManagerInterface $entityManager [description]
   * @param Request       $request [description]
   */
  public function add_image(Plat $plat, EntityManagerInterface $entityManager, Request $request)
  {
    $plat_image = new PlatImage;
    $plat_image->setPlat($plat);
    $form = $this->createForm(PlatImageType::class, $plat_image);
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid())
    {
      $entityManager->persist($plat_image);
      $entityManager->flush($plat_image);
      return $this->RedirectToRoute('plat_index');
    }
    return $this->render('plat/plat_image.html.twig', [
      'platImageForm' => $form->createView()
    ]);
  }

  /**
   * @Route("/delete_image/{id}", name="plat_delete_image", methods={"DELETE"})
   * @param  PlatImage              $plat_image    [description]
   * @param  EntityManagerInterface $entityManager [description]
   * @return [type]                                [description]
   */
  public function delete_image(PlatImage $plat_image, EntityManagerInterface $entityManager)
  {
    $entityManager->remove($plat_image);
    $entityManager->flush($plat_image);
    return $this->redirectToRoute('plat_index');
  }

}
