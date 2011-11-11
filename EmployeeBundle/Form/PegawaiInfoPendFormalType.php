<?php

namespace ZK\EmployeeBundle\Form;

use
    Symfony\Component\Form\AbstractType,
    Symfony\Component\Form\FormBuilder
;

class PegawaiInfoPendFormalType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('pi2_tingkat', 'text', array('max_length'=>6));
        $builder->add('pi2_nama_sekolah', 'text', array('max_length'=>24));
        $builder->add('pi2_tahun_lulus', 'text', array('required' => false));
        $builder->add('pi2_jurusan', 'text', array('max_length'=>12, 'required' => false));
        $builder->add('pi2_sertifikat', 'text', array('max_length'=>12, 'required' => false));
        #$builder->add('pegawai', new PegawaiType());
    }

    public function getName()
    {
        return 'employee';
    }    
}