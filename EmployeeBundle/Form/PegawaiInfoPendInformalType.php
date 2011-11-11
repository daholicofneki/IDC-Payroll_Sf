<?php

namespace ZK\EmployeeBundle\Form;

use
    Symfony\Component\Form\AbstractType,
    Symfony\Component\Form\FormBuilder
;

class PegawaiInfoPendInformalType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('pi3_jenis_kursus', 'text', array('max_length'=>24));
        $builder->add('pi3_lembaga', 'text', array('max_length'=>24));
        $builder->add('pi3_kualifikasi', 'text', array('max_length'=>24, 'required' => false));
        $builder->add('pi3_tahun', 'text', array('max_length'=>12, 'required' => false));
        #$builder->add('pegawai', new PegawaiType());
    }

    public function getName()
    {
        return 'employee';
    }    
}