<?php

namespace Mastercel\ChartBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Mastercel\ChartBundle\Entity\Transacciones;
use Mastercel\ChartBundle\Form\TransaccionesType;

/**
 * Transacciones controller.
 *
 */
class TransaccionesController extends Controller
{

    /**
     * Lists all Transacciones entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MastercelChartBundle:Transacciones')->findAll();

        return $this->render('MastercelChartBundle:Transacciones:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Transacciones entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Transacciones();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('transacciones_show', array('id' => $entity->getId())));
        }

        return $this->render('MastercelChartBundle:Transacciones:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Transacciones entity.
    *
    * @param Transacciones $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Transacciones $entity)
    {
        $form = $this->createForm(new TransaccionesType(), $entity, array(
            'action' => $this->generateUrl('transacciones_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Transacciones entity.
     *
     */
    public function newAction()
    {
        $entity = new Transacciones();
        $form   = $this->createCreateForm($entity);

        return $this->render('MastercelChartBundle:Transacciones:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Transacciones entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MastercelChartBundle:Transacciones')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Transacciones entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MastercelChartBundle:Transacciones:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Transacciones entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MastercelChartBundle:Transacciones')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Transacciones entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MastercelChartBundle:Transacciones:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Transacciones entity.
    *
    * @param Transacciones $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Transacciones $entity)
    {
        $form = $this->createForm(new TransaccionesType(), $entity, array(
            'action' => $this->generateUrl('transacciones_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Transacciones entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MastercelChartBundle:Transacciones')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Transacciones entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('transacciones_edit', array('id' => $id)));
        }

        return $this->render('MastercelChartBundle:Transacciones:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Transacciones entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MastercelChartBundle:Transacciones')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Transacciones entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('transacciones'));
    }

    /**
     * Creates a form to delete a Transacciones entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('transacciones_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
