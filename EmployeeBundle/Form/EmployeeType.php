<?php

namespace ZK\EmployeeBundle\Form;

use
    Symfony\Component\Form\AbstractType,
    Symfony\Component\Form\FormBuilder
;

class EmployeeType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('pi_no', 'text');
        $builder->add('pi_nama_lengkap', 'text', array('max_length'=>64));
        $builder->add('pi_nama_kecil', 'text', array('max_length'=>64));
        $builder->add('pi_jenis_kelamin', 'choice', array(
                'choices'   => array('P' => 'Pria', 'W' => 'Wanita')
            ));
        $builder->add('pi_tempat_lahir', 'text');
        $builder->add('pi_tanggal_lahir', 'date', array(
                'attr' => array('class' => 'date'),
                'widget' => 'single_text',
                'input' => 'string',
                'format' => 'dd/MM/yy',
            ));
        $builder->add('pi_no_telepon1', 'text');
        $builder->add('pi_no_telepon2', 'text');
        $builder->add('pi_email', 'email');
        $builder->add('pi_alamat', 'textarea');
        $builder->add('pi_status_nikah', 'choice', array(
                'choices'   => array('L' => 'Lajang', 'M' => 'Menikah')
            ));
        $builder->add('pi_jumlah_anak', 'number');
        $builder->add('pi_kewarganegaraan', 'text');
        $builder->add('pi_suku', 'text');
        $builder->add('pi_no_ktp', 'text');
        $builder->add('pi_no_sim', 'text');
        $builder->add('pi_no_jamsostek', 'text');
        $builder->add('pi_status_pajak', 'choice', array(
                'choices'   => array('TK0' => 'TK0', 'K0' => 'K0', 'K1'=>'K1', 'K2'=>'K2')
            ));
        $builder->add('pi_npwp', 'text');
        $builder->add('pi_foto', 'text');
    }

    public function getName()
    {
        return 'employee';
    }    
}