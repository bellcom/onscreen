<?php

namespace Onscreen\AdminBundle\Controller;

use Onscreen\ScreenBundle\Entity\Screen;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\SecurityContext;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use JMS\SecurityExtraBundle\Annotation\Secure;

class DefaultController extends Controller
{

    /**
     * @Route("/admin/", name="_admin")
     * @Template()
     */
    public function indexAction()
    {
        return [];
    }


    /**
     * @Route("/admin/screen/", name="_admin_screen")
     * @Template()
     */
    public function screenAction()
    {
        $screens = $this->getDoctrine()
            ->getRepository('OnscreenScreenBundle:Screen')
            ->findAll()
        ;

        return [
            'screens' => $screens
        ];
    }


    /**
     * @Route("/admin/screen/edit", name="_admin_screen_add")
     * @Route("/admin/screen/edit/{id}", name="_admin_screen_edit")
     * @Template()
     */
    public function editScreenAction(Request $request, $id = null)
    {

        $form = $this->createFormBuilder()
            ->add('title', 'text')
            ->add('mashine_name', 'text')
            ->getForm()
        ;

        return [
            'form' => $form->createView()
        ];
    }


    /**
     * @Route("/admin/screen/delete/{id}", name="_admin_screen_delete")
     * @Template()
     */
    public function deleteScreenAction(Request $request, $id)
    {
        return ['form' => []];
    }


    /**
     * @Route("/admin/test", name="_admin_test")
     */
    public function testAction(Request $request)
    {
        $now = new \DateTime();
        $screen = new Screen();
        $screen
            ->setTitle('test 1.2.3')
            ->setMashineName('test-123')
            ->setMatrix('1x2')
            ->setCreatedAt($now)
            ->setUpdatedAt($now)
            ->setIsActive(true)
        ;

        $em = $this->getDoctrine()->getManager();
        $em->persist($screen);
        $em->flush();

        return new Response('Created screen id '.$screen->getId());
    }


}
