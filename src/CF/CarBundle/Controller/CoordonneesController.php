<?php

namespace CF\CarBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use CF\CarBundle\Entity\Coordonnees;
use CF\CarBundle\Form\CoordonneesType;

/**
 * Coordonnees controller.
 *
 * @Route("/coordonnees")
 */
class CoordonneesController extends Controller
{
    /**
     * Lists all Coordonnees entities.
     *
     * @Route("/", name="coordonnees_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $coordonnees = $em->getRepository('CFCarBundle:Coordonnees')->findAll();

        return $this->render('coordonnees/index.html.twig', array(
            'coordonnees' => $coordonnees,
        ));
    }

    /**
     * Creates a new Coordonnees entity.
     *
     * @Route("/new", name="coordonnees_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $coordonnee = new Coordonnees();
        $form = $this->createForm('CF\CarBundle\Form\CoordonneesType', $coordonnee);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($coordonnee);
            $em->flush();

            return $this->redirectToRoute('coordonnees_show', array('id' => $coordonnee->getId()));
        }

        return $this->render('coordonnees/new.html.twig', array(
            'coordonnee' => $coordonnee,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Coordonnees entity.
     *
     * @Route("/{id}", name="coordonnees_show")
     * @Method("GET")
     */
    public function showAction(Coordonnees $coordonnee)
    {
        $deleteForm = $this->createDeleteForm($coordonnee);

        return $this->render('coordonnees/show.html.twig', array(
            'coordonnee' => $coordonnee,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Coordonnees entity.
     *
     * @Route("/{id}/edit", name="coordonnees_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Coordonnees $coordonnee)
    {
        $deleteForm = $this->createDeleteForm($coordonnee);
        $editForm = $this->createForm('CF\CarBundle\Form\CoordonneesType', $coordonnee);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($coordonnee);
            $em->flush();

            return $this->redirectToRoute('coordonnees_edit', array('id' => $coordonnee->getId()));
        }

        return $this->render('coordonnees/edit.html.twig', array(
            'coordonnee' => $coordonnee,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Coordonnees entity.
     *
     * @Route("/{id}", name="coordonnees_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Coordonnees $coordonnee)
    {
        $form = $this->createDeleteForm($coordonnee);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($coordonnee);
            $em->flush();
        }

        return $this->redirectToRoute('coordonnees_index');
    }

    /**
     * Creates a form to delete a Coordonnees entity.
     *
     * @param Coordonnees $coordonnee The Coordonnees entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Coordonnees $coordonnee)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('coordonnees_delete', array('id' => $coordonnee->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
