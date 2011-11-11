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
    ZK\EmployeeBundle\Form\EmployeeType,

    ZK\EmployeeBundle\Entity\Pegawai_Info_Keluarga,
    ZK\EmployeeBundle\Form\EmployeeInfoKeluargaType,

    ZK\EmployeeBundle\Entity\Pegawai_Info_Pendidikan_Formal,
    ZK\EmployeeBundle\Form\EmployeeInfoPendFormalType,

    ZK\EmployeeBundle\Entity\Pegawai_Info_Pendidikan_Informal,
    ZK\EmployeeBundle\Form\EmployeeInfoPendInformalType,

    ZK\EmployeeBundle\Entity\Pegawai_Info_Bahasa,
    ZK\EmployeeBundle\Form\EmployeeInfoBahasaType,

    ZK\EmployeeBundle\Entity\Pegawai_Info_Pekerjaan,
    ZK\EmployeeBundle\Form\EmployeeInfoPekerjaanType
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

        $em = $this->getDoctrine()->getEntityManager();

        $pegawai = $em->find('ZKEmployeeBundle:Pegawai', $id);

        $form = $this->createForm(new EmployeeType(), $pegawai);

        $request = $this->getRequest();

        if ('POST' === $request->getMethod()) {
            $form->bindRequest($request);

            if ($form->isValid()) {
                $em->persist($pegawai);
                $em->flush();

                return $this->redirect($this->generateUrl('zk_employee_employee_update', array('id' => $id)));
            }
        }

        return array(
            'form'  => $form->createView(),
            'pegawai' => $pegawai,
        );
    }

    /**
     * @Route("/detail/{id}/{info}/{height}/{width}", name="zk_employee_employee_detail")
     * @Template()
     */
    public function detailAction($id, $info, $height, $width)
    {

        $em = $this->getDoctrine()->getEntityManager();

        switch ($info) {
            case 2:
                $detail = new Pegawai_Info_Keluarga();
                $form = $this->createForm(new EmployeeInfoKeluargaType(), $detail);
                break;
            case 3:
                $detail = new Pegawai_Info_Pendidikan_Formal();
                $form = $this->createForm(new EmployeeInfoPendFormalType(), $detail);
                break;
            case 4:
                $detail = new Pegawai_Info_Pendidikan_Informal();
                $form = $this->createForm(new EmployeeInfoPendInformalType(), $detail);
                break;
            case 5:
                $detail = new Pegawai_Info_Bahasa();
                $form = $this->createForm(new EmployeeInfoBahasaType(), $detail);
                break;
            case 6:
                $detail = new Pegawai_Info_Pekerjaan();
                $form = $this->createForm(new EmployeeInfoPekerjaanType(), $detail);
                break;
        }

        $request = $this->getRequest();

        if ('POST' === $request->getMethod()) {
            $form->bindRequest($request);

            if ($form->isValid()) {
                $em->persist($detail);
                $em->flush();

                $this->get('session')->setFlash('success', 'Pegawai baru berhasil disimpan!');
            }
        }

        return array(
            'form'  => $form->createView(),
            'detail' => $detail,
            'id' => $id,
            'info' => $info,
            'height' => $height,
            'width' => $width,
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
