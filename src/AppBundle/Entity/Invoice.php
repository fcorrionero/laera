<?php
// FACTURAS
namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\User as User;

/**
 * ORM\Entity
 * @ORM\Table(name="facturas")
 */
class Invoice{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     * @ORM\Column(length=10)
     * @ORM\Column(nullable=true)
     */
    private $orden;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fecha;

    /**
     * @ORM\Column(type="date")
     * @ORM\Column(nullable=true)
     */
    private $fechaPago;

    /**
     * @ORM\Column(type="date")
     * @ORM\Column(nullable=true)
     */
    private $fechaCobro;

    /**
     * @ORM\Column(type="string")
     * @ORM\Column(length=250)
     */
    private $numFactura;

    /**
     * @ORM\Column(type="string")
     * @ORM\Column(length=10)
     * @ORM\Column(nullable=true)
     */
    private $periodo;

    /**
     * @ORM\Column(type="string")
     * @ORM\Column(length=10)
     * @ORM\Column(nullable=true)
     */
    private $ejercicio;

    /**
     * @ORM\Column(type="string)
     * @ORM\Column(length=20)
     * @ORM\Column(nullable=true)
     */
    private $nif;

    /**
     * @ORM\Column(type="string")
     * @ORM\Column(length=250)
     * @ORM\Column(nullable=true)
    */
    private $direccion;

    /**
     * @ORM\Column(type="string")
     * @ORM\Column(length=250)
     * @ORM\Column(nullable=true)
     */
    private $nombre;

    /**
     * @ORM\Column(type="string")
     * @ORM\Column(length=250)
     * @ORM\Column(nullable=true)
     */
    private $razon_social;

    /**
     * @ORM\Column(type="string")
     * @ORM\Column(length=250)
     * @ORM\Column(nullable=true)
     */
    private $concepto;

    /**
     * @ORM\Column(type="string")
     * @ORM\Column(length=250)
     * @ORM\Column(nullable=true)
     */
    private $tipo;

    /**
     * @ORM\Column(type="float")
     * @ORM\Column(nullable=true)
     */
    private $baseImponibleIva;

    /**
     * @ORM\Column(type="float")
     * @ORM\Column(nullable=true)
     */
    private $baseImponibleIrpf;

    /**
     * @ORM\Column(type="float")
     * @ORM\Column(nullable=true)
     */
    private $tipoIva;

    /**
     * @ORM\Column(type="float")
     * @ORM\Column(nullable=true)
     */
    private $tipoIrpf;

    /**
     * @ORM\Column(type="float")
     * @ORM\Column(nullable=true)
     */
    private $deducible;

    /**
     * @ORM\Column(type="float")
     * @ORM\Column(nullable=true)
     */
    private $retencion;

    /**
     * @ORM\Column(type="float")
     * @ORM\Column(nullable=true)
     */
    private $totalFactura;

    /**
     * @ORM\Column(type="string")
     * @ORM\Column(length=50)
     * @ORM\Column(nullable=true)
     */
    private $regimen;

    /**
     * @ORM\Column(type="string")
     * @ORM\Column(length=100)
     * @ORM\Column(nullable=true)
     */
    private $medioCobroPago;

    /**
     * @ORM\Column(type="boolean")
     */
    private $es_gasto;

    /**
     * @ORM\Column(type="boolean")
     */
    private $es_inversion;

    /**
     * @ORM\Column(type="decimal")
     * @ORM\Column(nullable=true)
     */
    private $periodoAmortizacion;

    /**
     * @ORM\Column(type="text")
     * @ORM\Column(nullable=true)
     */
    private $observaciones;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @ORM\Column(type="string)
     * @ORM\Column(length=20)
     * @ORM\Column(nullable=true)
     */
    private $nif_titular;

    /**
     * @ORM\Column(type="string)
     * @ORM\Column(length=250)
     * @ORM\Column(nullable=true)
     */
    private $explotacion_empresa;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getOrden()
    {
        return $this->orden;
    }

    /**
     * @param mixed $orden
     */
    public function setOrden($orden)
    {
        $this->orden = $orden;
    }

    /**
     * @return mixed
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * @param mixed $fecha
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    /**
     * @return mixed
     */
    public function getFechaPago()
    {
        return $this->fechaPago;
    }

    /**
     * @param mixed $fechaPago
     */
    public function setFechaPago($fechaPago)
    {
        $this->fechaPago = $fechaPago;
    }

    /**
     * @return mixed
     */
    public function getFechaCobro()
    {
        return $this->fechaCobro;
    }

    /**
     * @param mixed $fechaCobro
     */
    public function setFechaCobro($fechaCobro)
    {
        $this->fechaCobro = $fechaCobro;
    }

    /**
     * @return mixed
     */
    public function getNumFactura()
    {
        return $this->numFactura;
    }

    /**
     * @param mixed $numFactura
     */
    public function setNumFactura($numFactura)
    {
        $this->numFactura = $numFactura;
    }

    /**
     * @return mixed
     */
    public function getPeriodo()
    {
        return $this->periodo;
    }

    /**
     * @param mixed $periodo
     */
    public function setPeriodo($periodo)
    {
        $this->periodo = $periodo;
    }

    /**
     * @return mixed
     */
    public function getEjercicio()
    {
        return $this->ejercicio;
    }

    /**
     * @param mixed $ejercicio
     */
    public function setEjercicio($ejercicio)
    {
        $this->ejercicio = $ejercicio;
    }

    /**
     * @return mixed
     */
    public function getNif()
    {
        return $this->nif;
    }

    /**
     * @param mixed $nif
     */
    public function setNif($nif)
    {
        $this->nif = $nif;
    }

    /**
     * @return mixed
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * @param mixed $direccion
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getRazonSocial()
    {
        return $this->razon_social;
    }

    /**
     * @param mixed $razon_social
     */
    public function setRazonSocial($razon_social)
    {
        $this->razon_social = $razon_social;
    }

    /**
     * @return mixed
     */
    public function getConcepto()
    {
        return $this->concepto;
    }

    /**
     * @param mixed $concepto
     */
    public function setConcepto($concepto)
    {
        $this->concepto = $concepto;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * @return mixed
     */
    public function getBaseImponibleIva()
    {
        return $this->baseImponibleIva;
    }

    /**
     * @param mixed $baseImponibleIva
     */
    public function setBaseImponibleIva($baseImponibleIva)
    {
        $this->baseImponibleIva = $baseImponibleIva;
    }

    /**
     * @return mixed
     */
    public function getBaseImponibleIrpf()
    {
        return $this->baseImponibleIrpf;
    }

    /**
     * @param mixed $baseImponibleIrpf
     */
    public function setBaseImponibleIrpf($baseImponibleIrpf)
    {
        $this->baseImponibleIrpf = $baseImponibleIrpf;
    }

    /**
     * @return mixed
     */
    public function getTipoIva()
    {
        return $this->tipoIva;
    }

    /**
     * @param mixed $tipoIva
     */
    public function setTipoIva($tipoIva)
    {
        $this->tipoIva = $tipoIva;
    }

    /**
     * @return mixed
     */
    public function getTipoIrpf()
    {
        return $this->tipoIrpf;
    }

    /**
     * @param mixed $tipoIrpf
     */
    public function setTipoIrpf($tipoIrpf)
    {
        $this->tipoIrpf = $tipoIrpf;
    }

    /**
     * @return mixed
     */
    public function getDeducible()
    {
        return $this->deducible;
    }

    /**
     * @param mixed $deducible
     */
    public function setDeducible($deducible)
    {
        $this->deducible = $deducible;
    }

    /**
     * @return mixed
     */
    public function getRetencion()
    {
        return $this->retencion;
    }

    /**
     * @param mixed $retencion
     */
    public function setRetencion($retencion)
    {
        $this->retencion = $retencion;
    }

    /**
     * @return mixed
     */
    public function getTotalFactura()
    {
        return $this->totalFactura;
    }

    /**
     * @param mixed $totalFactura
     */
    public function setTotalFactura($totalFactura)
    {
        $this->totalFactura = $totalFactura;
    }

    /**
     * @return mixed
     */
    public function getRegimen()
    {
        return $this->regimen;
    }

    /**
     * @param mixed $regimen
     */
    public function setRegimen($regimen)
    {
        $this->regimen = $regimen;
    }

    /**
     * @return mixed
     */
    public function getMedioCobroPago()
    {
        return $this->medioCobroPago;
    }

    /**
     * @param mixed $medioCobroPago
     */
    public function setMedioCobroPago($medioCobroPago)
    {
        $this->medioCobroPago = $medioCobroPago;
    }

    /**
     * @return mixed
     */
    public function getEsGasto()
    {
        return $this->es_gasto;
    }

    /**
     * @param mixed $es_gasto
     */
    public function setEsGasto($es_gasto)
    {
        $this->es_gasto = $es_gasto;
    }

    /**
     * @return mixed
     */
    public function getEsInversion()
    {
        return $this->es_inversion;
    }

    /**
     * @param mixed $es_inversion
     */
    public function setEsInversion($es_inversion)
    {
        $this->es_inversion = $es_inversion;
    }

    /**
     * @return mixed
     */
    public function getPeriodoAmortizacion()
    {
        return $this->periodoAmortizacion;
    }

    /**
     * @param mixed $periodoAmortizacion
     */
    public function setPeriodoAmortizacion($periodoAmortizacion)
    {
        $this->periodoAmortizacion = $periodoAmortizacion;
    }

    /**
     * @return mixed
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * @param mixed $observaciones
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser(User $user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getNifTitular()
    {
        return $this->nif_titular;
    }

    /**
     * @param mixed $nif_titular
     */
    public function setNifTitular($nif_titular)
    {
        $this->nif_titular = $nif_titular;
    }

    /**
     * @return mixed
     */
    public function getExplotacionEmpresa()
    {
        return $this->explotacion_empresa;
    }

    /**
     * @param mixed $explotacion_empresa
     */
    public function setExplotacionEmpresa($explotacion_empresa)
    {
        $this->explotacion_empresa = $explotacion_empresa;
    }



}