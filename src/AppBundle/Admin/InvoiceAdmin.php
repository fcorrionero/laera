<?php
namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class InvoiceAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Metadatos')
                ->add('orden', 'text')
                ->add('fecha','date')
                ->add('es_gasto','text')
                ->add('es_inversion','text')
            ->end()
            ->with('Datos factura')
                ->add('numFactura','text')
                ->add('nif','text')
                ->add('direccion','text')
                ->add('baseImponibleIva','text')
            ->end()
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('orden')
            ->add('fecha')
            ->add('nif')
            //->add('last_login')
            //->add('password_requested_at')
            ->add('baseImponibleIva')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('numFactura')
            ->add('nif')
            ->add('direccion')
            ->add('baseImponibleIva')
        ;
    }

    public function toString($object)
    {
        return $object instanceof Invoice
            ? $object->getNumFactura()
            : 'Factura'; // shown in the breadcrumb on the create view
    }
}