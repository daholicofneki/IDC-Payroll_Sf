<?php

namespace ZK\EmployeeBundle\Form;

use
    Symfony\Component\Form\AbstractType,
    Symfony\Component\Form\FormBuilder
;

class EmployeeInfoPekerjaanType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('pi5_nama_perusahaan', 'text', array('max_length'=>24));
        $builder->add('pi5_dari', 'text', array('max_length'=>12, 'required' => false));
        $builder->add('pi5_sampai', 'text', array('max_length'=>12, 'required' => false));
        $builder->add('pi5_jabatan', 'text', array('max_length'=>24, 'required' => false));
        $builder->add('pi5_pekerjaan', 'text', array('max_length'=>24, 'required' => false));
        $builder->add('pi5_gaji', 'money', array('required' => false));
        #$builder->add('pegawai', new PegawaiType());
    }

    public function getName()
    {
        return 'employee';
    }    
}