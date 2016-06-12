<?php

namespace CF\CarBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use CF\CarBundle\Entity\Sponsors;
use CF\CarBundle\Form\SponsorsType;

/**
 * Sponsors controller.
 *
 * @Route("/sponsors")
 */
class SponsorsController extends Controller
{
    /**
     * Lists all Sponsors entities.
     *
     * @Route("/", name="sponsors_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $sponsors = $em->getRepository('CFCarBundle:Sponsors')->findAll();

        return $this->render('sponsors/index.html.twig', array(
            'sponsors' => $sponsors,
        ));
    }

    /**
     * Creates a new Sponsors entity.
     *
     * @Route("/new", name="sponsors_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $sponsor = new Sponsors();
        $form = $this->createForm('CF\CarBundle\Form\SponsorsType', $sponsor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($sponsor);
            $em->flush();

            return $this->redirectToRoute('sponsors_show', array('id' => $sponsor->getId()));
        }

        return $this->render('sponsors/new.html.twig', array(
            'sponsor' => $sponsor,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Sponsors entity.
     *
     * @Route("/{id}", name="sponsors_show")
     * @Method("GET")
     */
    public function showAction(Sponsors $sponsor)
    {
        $deleteForm = $this->createDeleteForm($sponsor);

        return $this->render('sponsors/show.html.twig', array(
            'sponsor' => $sponsor,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Sponsors entity.
     *
     * @Route("/{id}/edit", name="sponsors_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Sponsors $sponsor)
    {
        $deleteForm = $this->createDeleteForm($sponsor);
        $editForm = $this->createForm('CF\CarBundle\Form\SponsorsType', $sponsor);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($sponsor);
            $em->flush();

            return $this->redirectToRoute('sponsors_edit', array('id' => $sponsor->getId()));
        }

        return $this->render('sponsors/edit.html.twig', array(
            'sponsor' => $sponsor,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Sponsors entity.
     *
     * @Route("/{id}", name="sponsors_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Sponsors $sponsor)
    {
        $form = $this->createDeleteForm($sponsor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($sponsor);
            $em->flush();
        }

        return $this->redirectToRoute('sponsors_index');
    }

    /**
     * Creates a form to delete a Sponsors entity.
     *
     * @param Sponsors $sponsor The Sponsors entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Sponsors $sponsor)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('sponsors_delete', array('id' => $sponsor->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
