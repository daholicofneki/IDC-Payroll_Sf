<?php

namespace ZK\EmployeeBundle\Form;

use
    Symfony\Component\Form\AbstractType,
    Symfony\Component\Form\FormBuilder
;

class EmployeeInfoKeluargaType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('pi1_nama', 'text', array('max_length'=>32));
        $builder->add('pi1_jenis_kelamin', 'choice', array(
                'choices'   => array('P' => 'Pria', 'W' => 'Wanita')
            ));
        $builder->add('pi1_umur', 'number', array('required' => false));
        $builder->add('pi1_hubungan_keluarga', 'text', array('max_length'=>12, 'required' => false));
        $builder->add('pi1_pendidikan', 'text', array('max_length'=>8, 'required' => false));
        $builder->add('pi1_pekerjaan', 'text', array('max_length'=>12, 'required' => false));
        #$builder->add('pegawai', new PegawaiType());
    }

    public function getName()
    {
        return 'employee';
    }    
}