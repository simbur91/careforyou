<?php

namespace CF\CarBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use CF\CarBundle\Entity\Advice;
use CF\CarBundle\Form\AdviceType;

/**
 * Advice controller.
 *
 * @Route("/advice")
 */
class AdviceController extends Controller
{
    /**
     * Lists all Advice entities.
     *
     * @Route("/", name="advice_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $advices = $em->getRepository('CFCarBundle:Advice')->findAll();

        return $this->render('advice/index.html.twig', array(
            'advices' => $advices,
        ));
    }

    /**
     * Creates a new Advice entity.
     *
     * @Route("/new", name="advice_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $advice = new Advice();
        $form = $this->createForm('CF\CarBundle\Form\AdviceType', $advice);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($advice);
            $em->flush();

            return $this->redirectToRoute('advice_show', array('id' => $advice->getId()));
        }

        return $this->render('advice/new.html.twig', array(
            'advice' => $advice,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Advice entity.
     *
     * @Route("/{id}", name="advice_show")
     * @Method("GET")
     */
    public function showAction(Advice $advice)
    {
        $deleteForm = $this->createDeleteForm($advice);

        return $this->render('advice/show.html.twig', array(
            'advice' => $advice,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Advice entity.
     *
     * @Route("/{id}/edit", name="advice_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Advice $advice)
    {
        $deleteForm = $this->createDeleteForm($advice);
        $editForm = $this->createForm('CF\CarBundle\Form\AdviceType', $advice);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($advice);
            $em->flush();

            return $this->redirectToRoute('advice_edit', array('id' => $advice->getId()));
        }

        return $this->render('advice/edit.html.twig', array(
            'advice' => $advice,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Advice entity.
     *
     * @Route("/{id}", name="advice_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Advice $advice)
    {
        $form = $this->createDeleteForm($advice);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($advice);
            $em->flush();
        }

        return $this->redirectToRoute('advice_index');
    }

    /**
     * Creates a form to delete a Advice entity.
     *
     * @param Advice $advice The Advice entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Advice $advice)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('advice_delete', array('id' => $advice->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
