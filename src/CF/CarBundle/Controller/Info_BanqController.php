<?php

namespace CF\CarBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use CF\CarBundle\Entity\Info_Banq;
use CF\CarBundle\Form\Info_BanqType;

/**
 * Info_Banq controller.
 *
 * @Route("/info_banq")
 */
class Info_BanqController extends Controller
{
    /**
     * Lists all Info_Banq entities.
     *
     * @Route("/", name="info_banq_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $info_Banqs = $em->getRepository('CFCarBundle:Info_Banq')->findAll();

        return $this->render('info_banq/index.html.twig', array(
            'info_Banqs' => $info_Banqs,
        ));
    }

    /**
     * Creates a new Info_Banq entity.
     *
     * @Route("/new", name="info_banq_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $info_Banq = new Info_Banq();
        $form = $this->createForm('CF\CarBundle\Form\Info_BanqType', $info_Banq);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($info_Banq);
            $em->flush();

            return $this->redirectToRoute('info_banq_show', array('id' => $info_Banq->getId()));
        }

        return $this->render('info_banq/new.html.twig', array(
            'info_Banq' => $info_Banq,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Info_Banq entity.
     *
     * @Route("/{id}", name="info_banq_show")
     * @Method("GET")
     */
    public function showAction(Info_Banq $info_Banq)
    {
        $deleteForm = $this->createDeleteForm($info_Banq);

        return $this->render('info_banq/show.html.twig', array(
            'info_Banq' => $info_Banq,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Info_Banq entity.
     *
     * @Route("/{id}/edit", name="info_banq_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Info_Banq $info_Banq)
    {
        $deleteForm = $this->createDeleteForm($info_Banq);
        $editForm = $this->createForm('CF\CarBundle\Form\Info_BanqType', $info_Banq);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($info_Banq);
            $em->flush();

            return $this->redirectToRoute('info_banq_edit', array('id' => $info_Banq->getId()));
        }

        return $this->render('info_banq/edit.html.twig', array(
            'info_Banq' => $info_Banq,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Info_Banq entity.
     *
     * @Route("/{id}", name="info_banq_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Info_Banq $info_Banq)
    {
        $form = $this->createDeleteForm($info_Banq);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($info_Banq);
            $em->flush();
        }

        return $this->redirectToRoute('info_banq_index');
    }

    /**
     * Creates a form to delete a Info_Banq entity.
     *
     * @param Info_Banq $info_Banq The Info_Banq entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Info_Banq $info_Banq)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('info_banq_delete', array('id' => $info_Banq->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
