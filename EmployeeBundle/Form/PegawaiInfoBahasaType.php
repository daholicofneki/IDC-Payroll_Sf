<?php

namespace ZK\EmployeeBundle\Form;

use
    Symfony\Component\Form\AbstractType,
    Symfony\Component\Form\FormBuilder
;

class PegawaiInfoBahasaType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('pi4_bahasa', 'text', array('max_length'=>12));
        $builder->add('pi4_nilai_bicara', 'choice', array(
                'required' => false,
                'choices'   => array('5' => '* * * * *', '4' => '* * * *', '3' => '* * *', '2' => '* *', '1' => '*', '0'=>'')
            ));
        $builder->add('pi4_nilai_membaca', 'choice', array(
                'required' => false,
                'choices'   => array('5' => '* * * * *', '4' => '* * * *', '3' => '* * *', '2' => '* *', '1' => '*', '0'=>'')
            ));
        $builder->add('pi4_nilai_menulis', 'choice', array(
                'required' => false,
                'choices'   => array('5' => '* * * * *', '4' => '* * * *', '3' => '* * *', '2' => '* *', '1' => '*', '0'=>'')
            ));
        #$builder->add('pegawai', new PegawaiType());
    }

    public function getName()
    {
        return 'employee';
    }    
}