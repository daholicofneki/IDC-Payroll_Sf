<?php

namespace ZK\EmployeeBundle\Controller;

use
    Symfony\Bundle\FrameworkBundle\Controller\Controller,
    Symfony\Component\HttpKernel\Exception\NotFoundHttpException,
    Sensio\Bundle\FrameworkExtraBundle\Configuration\Route,
    Sensio\Bundle\FrameworkExtraBundle\Configuration\Template
    #Symfony\Component\HttpFoundation\Response
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
     * @Template()
     */
    public function editAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $pegawai = new Pegawai();

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
     * @Route("/update/{id}", name="zk_employee_employee_update")
     * @Template()
     */
    public function updateAction($id)
    {
        $peg = $this->get('doctrine')->getEntityManager()
            ->createQuery('SELECT p FROM ZKEmployeeBundle:Pegawai p WHERE p.id = '.$id)
            ->getResult()
        ;

        $em = $this->getDoctrine()->getEntityManager();
        $pegawai = new Pegawai();

        $form = $this->createForm(new EmployeeType(), $pegawai);

        $request = $this->getRequest();

        return array(
            'form'  => $form->createView(),
            'peg' => $peg,
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

}
