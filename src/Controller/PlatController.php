<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Plat;
use App\Repository\PlatRepository;
use App\Form\PlatType;
use App\Entity\PlatImage;
use App\Form\PlatImageType;

class PlatController extends AbstractController
{
  /**
  * @Route("/plat/index", name="plat_index")
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
   * @Route("/plat/new", name="plat_new")
   * @Route("/plat/update/{id}", name="plat_update")
   * @param  [type]        $plat    [description]
   * @param  Request       $request [description]
   * @param  ObjectManager $manager [description]
   * @return [type]                 [description]
   */
  public function edit( Plat $plat = null, Request $request, ObjectManager $manager)
  {
    if (! $plat) {
      $plat = new Plat;
    }
    $form = $this->createForm(PlatType::class, $plat);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      $manager->persist($plat);
      $manager->flush($plat);
      return $this->RedirectToRoute('plat_index');
    }

    return $this->render('plat/edit.html.twig', [
      'platForm' => $form->createView()
    ]);
  }

  /**
   * @Route("/plat/delete/{id}", name="plat_delete")
   * @param  Plat          $plat    [description]
   * @param  ObjectManager $manager [description]
   * @return [type]                 [description]
   */
  public function delete(Plat $plat, ObjectManager $manager)
  {
    $manager->remove($plat);
    $manager->flush($plat);
    return $this->RedirectToRoute('plat_index');
  }

  /**
   * @Route("/plat/add_image/{id}", name="plat_add_image")
   * @param Plat          $plat    [description]
   * @param ObjectManager $manager [description]
   * @param Request       $request [description]
   */
  public function add_image(Plat $plat, ObjectManager $manager, Request $request)
  {
    $plat_image = new PlatImage;
    $plat_image->setPlat($plat);
    $form = $this->createForm(PlatImageType::class, $plat_image);
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid())
    {
      $manager->persist($plat_image);
      $manager->flush($plat_image);
      return $this->RedirectToRoute('plat_index');
    }
    return $this->render('plat/plat_image.html.twig', [
      'platImageForm' => $form->createView()
    ]);
  }

  /**
   * @Route("/plat/delete_image/{id}", name="plat_delete_image")
   * @param  PlatImage     $plat_image [description]
   * @param  ObjectManager $manager    [description]
   * @return [type]                    [description]
   */
  public function delete_image(PlatImage $plat_image, ObjectManager $manager)
  {
    $manager->remove($plat_image);
    $manager->flush($plat_image);
    return $this->redirectToRoute('plat_index');
  }

}
