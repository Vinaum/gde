<?php

namespace GDE;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlanejadoExtra
 *
 * @ORM\Table(name="gde_planejado_extras", indexes={@ORM\Index(name="id_planejado", columns={"id_planejado"})})
 * @ORM\Entity
 */
class PlanejadoExtra extends Base {
	/**
	 * @var integer
	 *
	 * @ORM\Column(type="integer", options={"unsigned"=true}), nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	protected $id_planejado_extra;

	/**
	 * @var Planejado
	 *
	 * @ORM\ManyToOne(targetEntity="Planejado", inversedBy="extras")
	 * @ORM\JoinColumns({
	 *   @ORM\JoinColumn(name="id_planejado", referencedColumnName="id_planejado")
	 * })
	 */
	protected $planejado;

	/**
	 * @var string
	 *
	 * @ORM\Column(type="string", length=255, nullable=false)
	 */
	protected $nome;

	/**
	 * @var boolean
	 *
	 * @ORM\Column(type="boolean", nullable=false)
	 */
	protected $dia;

	/**
	 * @var \DateTime
	 *
	 * @ORM\Column(type="time", nullable=false)
	 */
	protected $inicio;

	/**
	 * @var \DateTime
	 *
	 * @ORM\Column(type="time", nullable=false)
	 */
	protected $fim;

	private static $_cores = array('#604F99', '#D47F1E', '#4CB052', '#AD2D2D', '#536CA6');

	public static function getCores() {
		return self::$_cores;
	}

}
