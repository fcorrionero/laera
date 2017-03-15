<?php
namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class UserAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Información Personal')
                ->add('username', 'text')
                ->add('email','email')
            ->end()
            ->with('Configuración')
                ->add('roles', 'choice', array(
                    'choices' => array(
                        'Admin' => 'ROLE_ADMIN',
                        'User' => 'ROLE_USER'
                    ),
                    'expanded' => false,
                    'multiple' => true,
                    'required' => false
                ))
            ->end()
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('username')
            ->add('email')
            ->add('enabled')
            //->add('last_login')
            //->add('password_requested_at')
            ->add('roles')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('username')
            ->add('email')
            ->add('enabled')
            ->add('roles')
        ;
    }

    public function toString($object)
    {
        return $object instanceof User
            ? $object->getUsername()
            : 'Usuario'; // shown in the breadcrumb on the create view
    }
}