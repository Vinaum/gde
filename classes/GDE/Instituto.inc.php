<?php

namespace GDE;

use Doctrine\ORM\Mapping as ORM;

/**
 * Instituto
 *
 * @ORM\Table(name="gde_institutos", uniqueConstraints={@ORM\UniqueConstraint(name="id_unidade", columns={"id_unidade"})})
 * @ORM\Entity
 */
class Instituto extends Base {
	/**
	 * @var boolean
	 *
	 * @ORM\Column(type="boolean", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	protected $id_instituto;

	/**
	 * @var string
	 *
	 * @ORM\Column(type="string", length=10, nullable=false)
	 */
	protected $sigla;

	/**
	 * @var string
	 *
	 * @ORM\Column(type="string", length=255, nullable=true)
	 */
	protected $nome;

	/**
	 * @var integer
	 *
	 * @ORM\Column(type="integer", options={"unsigned"=true}), nullable=true)
	 */
	protected $id_unidade;

	/**
	 * @var string
	 *
	 * @ORM\Column(type="text", nullable=true)
	 */
	protected $link_mapa;

	/**
	 * Por_ID_Unidade
	 *
	 * Carrega um Instituto por id_unidade
	 *
	 * @param $id_unidade
	 * @param bool $vazio
	 * @return Instituto|mixed
	 */
	public static function Por_ID_Unidade($id_unidade, $vazio = true) {
		$Instituto = self::FindOneBy(array('id_unidade' => $id_unidade));
		if(($Instituto === null) && ($vazio === true))
			$Instituto = new self;
		return $Instituto;
	}

}
