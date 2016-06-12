<?php

namespace CF\CarBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use CF\CarBundle\Entity\Preferences;
use CF\CarBundle\Form\PreferencesType;

/**
 * Preferences controller.
 *
 * @Route("/preferences")
 */
class PreferencesController extends Controller
{
    /**
     * Lists all Preferences entities.
     *
     * @Route("/", name="preferences_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $preferences = $em->getRepository('CFCarBundle:Preferences')->findAll();

        return $this->render('preferences/index.html.twig', array(
            'preferences' => $preferences,
        ));
    }

    /**
     * Creates a new Preferences entity.
     *
     * @Route("/new", name="preferences_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $preference = new Preferences();
        $form = $this->createForm('CF\CarBundle\Form\PreferencesType', $preference);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($preference);
            $em->flush();

            return $this->redirectToRoute('preferences_show', array('id' => $preference->getId()));
        }

        return $this->render('preferences/new.html.twig', array(
            'preference' => $preference,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Preferences entity.
     *
     * @Route("/{id}", name="preferences_show")
     * @Method("GET")
     */
    public function showAction(Preferences $preference)
    {
        $deleteForm = $this->createDeleteForm($preference);

        return $this->render('preferences/show.html.twig', array(
            'preference' => $preference,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Preferences entity.
     *
     * @Route("/{id}/edit", name="preferences_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Preferences $preference)
    {
        $deleteForm = $this->createDeleteForm($preference);
        $editForm = $this->createForm('CF\CarBundle\Form\PreferencesType', $preference);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($preference);
            $em->flush();

            return $this->redirectToRoute('preferences_edit', array('id' => $preference->getId()));
        }

        return $this->render('preferences/edit.html.twig', array(
            'preference' => $preference,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Preferences entity.
     *
     * @Route("/{id}", name="preferences_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Preferences $preference)
    {
        $form = $this->createDeleteForm($preference);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($preference);
            $em->flush();
        }

        return $this->redirectToRoute('preferences_index');
    }

    /**
     * Creates a form to delete a Preferences entity.
     *
     * @param Preferences $preference The Preferences entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Preferences $preference)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('preferences_delete', array('id' => $preference->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
