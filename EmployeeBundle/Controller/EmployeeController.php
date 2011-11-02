<?php

namespace ZK\EmployeeBundle\Controller;

use
    Symfony\Bundle\FrameworkBundle\Controller\Controller,
    Symfony\Component\HttpKernel\Exception\NotFoundHttpException,
    Sensio\Bundle\FrameworkExtraBundle\Configuration\Route,
    Sensio\Bundle\FrameworkExtraBundle\Configuration\Template
;

use
    ZK\EmployeeBundle\Entity\Pegawai,
    ZK\EmployeeBundle\Form\EmployeeType
;

/**
 * @Route("/employee")
 */
class EmployeeController extends Controller
{

    /**
     * @Route("/create", name="zk_employee_employee_create"),
     * @Route("/update/{id}", name="zk_employee_employee_update", requirements={"id" = "\d+"})
     * @Template()
     */
    public function editAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        if (isset($id)) {
            $pegawai = $em->find('ZKEmployeeBundle:Pegawai', $id);
            if (!$pegawai) {
                throw new NotFoundHttpException("Invalid pegawai.");
            }
        } else {
            $pegawai = new Pegawai();
        }

        $form = $this->createForm(new EmployeeType(), $pegawai);

        $request = $this->getRequest();

        if ('POST' === $request->getMethod()) {
            $form->bindRequest($request);

            if ($form->isValid()) {
                $em->persist($pegawai);
                $em->flush();

                $this->get('session')->setFlash('success', 'Pegawai baru berhasil disimpan!');

                return $this->redirect($this->generateUrl('zk_employee_employee_list'));
            }
        }

        return array(
            'form'  => $form->createView(),
            'pegawai' => $pegawai,
        );
    }

    /**
     * @Route("/", name="zk_employee_employee_list")
     * @Template()
     */
    public function listAction()
    {
        $pegawais = $this->get('doctrine')->getEntityManager()
            ->createQuery('SELECT p FROM ZKEmployeeBundle:Pegawai p ORDER BY p.pi_nama_lengkap ASC')
            ->getResult()
        ;

        return array('pegawais' => $pegawais);
    }

    /**
     * @Route("/delete/{id}", name="zk_employee_employee_delete")
     * @Template()
     */
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $pegawai = $em->find('ZKEmployeeBundle:Pegawai', $id);

        if (!$pegawai) {
            throw new NotFoundHttpException("Invalid pegawai.");
        }

        $em->remove($pegawai);
        $em->flush();

        return $this->redirect($this->generateUrl('zk_employee_employee_list'));
    }
}
