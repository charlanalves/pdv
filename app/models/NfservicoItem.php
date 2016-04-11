<?php

namespace App\Models;

class NfservicoItem extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $cd_item;

    /**
     *
     * @var integer
     */
    protected $cd_nfservico;

    /**
     *
     * @var integer
     */
    protected $num_item;

    /**
     *
     * @var string
     */
    protected $descricao;

    /**
     *
     * @var double
     */
    protected $qtde;

    /**
     *
     * @var double
     */
    protected $valor;

    /**
     *
     * @var double
     */
    protected $desconto;

    /**
     *
     * @var integer
     */
    protected $ind_mov;

    /**
     *
     * @var integer
     */
    protected $cfop;

    /**
     *
     * @var integer
     */
    protected $tipo_item;

    /**
     *
     * @var integer
     */
    protected $unidadeMedida;

    /**
     *
     * @var integer
     */
    protected $ncm;

    /**
     *
     * @var integer
     */
    protected $cod_genero;

    /**
     *
     * @var integer
     */
    protected $cod_servico;

    /**
     *
     * @var string
     */
    protected $cst_pis;

    /**
     *
     * @var double
     */
    protected $baseCalculoPis;

    /**
     *
     * @var double
     */
    protected $aliquotaPis;

    /**
     *
     * @var double
     */
    protected $qtdeBaseCalculoPis;

    /**
     *
     * @var double
     */
    protected $aliquotaReaisPis;

    /**
     *
     * @var double
     */
    protected $valorPis;

    /**
     *
     * @var string
     */
    protected $cst_cofins;

    /**
     *
     * @var double
     */
    protected $baseCalculoCofins;

    /**
     *
     * @var double
     */
    protected $aliquotaCofins;

    /**
     *
     * @var double
     */
    protected $qtdeBaseCalculoCofins;

    /**
     *
     * @var double
     */
    protected $aliquotaReaisCofins;

    /**
     *
     * @var double
     */
    protected $valorCofins;

    /**
     * Method to set the value of field cd_item
     *
     * @param integer $cd_item
     * @return $this
     */
    public function setCdItem($cd_item)
    {
        $this->cd_item = $cd_item;

        return $this;
    }

    /**
     * Method to set the value of field cd_nfservico
     *
     * @param integer $cd_nfservico
     * @return $this
     */
    public function setCdNfservico($cd_nfservico)
    {
        $this->cd_nfservico = $cd_nfservico;

        return $this;
    }

    /**
     * Method to set the value of field num_item
     *
     * @param integer $num_item
     * @return $this
     */
    public function setNumItem($num_item)
    {
        $this->num_item = $num_item;

        return $this;
    }

    /**
     * Method to set the value of field descricao
     *
     * @param string $descricao
     * @return $this
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Method to set the value of field qtde
     *
     * @param double $qtde
     * @return $this
     */
    public function setQtde($qtde)
    {
        $this->qtde = $qtde;

        return $this;
    }

    /**
     * Method to set the value of field valor
     *
     * @param double $valor
     * @return $this
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Method to set the value of field desconto
     *
     * @param double $desconto
     * @return $this
     */
    public function setDesconto($desconto)
    {
        $this->desconto = $desconto;

        return $this;
    }

    /**
     * Method to set the value of field ind_mov
     *
     * @param integer $ind_mov
     * @return $this
     */
    public function setIndMov($ind_mov)
    {
        $this->ind_mov = $ind_mov;

        return $this;
    }

    /**
     * Method to set the value of field cfop
     *
     * @param integer $cfop
     * @return $this
     */
    public function setCfop($cfop)
    {
        $this->cfop = $cfop;

        return $this;
    }

    /**
     * Method to set the value of field tipo_item
     *
     * @param integer $tipo_item
     * @return $this
     */
    public function setTipoItem($tipo_item)
    {
        $this->tipo_item = $tipo_item;

        return $this;
    }

    /**
     * Method to set the value of field unidadeMedida
     *
     * @param integer $unidadeMedida
     * @return $this
     */
    public function setUnidadeMedida($unidadeMedida)
    {
        $this->unidadeMedida = $unidadeMedida;

        return $this;
    }

    /**
     * Method to set the value of field ncm
     *
     * @param integer $ncm
     * @return $this
     */
    public function setNcm($ncm)
    {
        $this->ncm = $ncm;

        return $this;
    }

    /**
     * Method to set the value of field cod_genero
     *
     * @param integer $cod_genero
     * @return $this
     */
    public function setCodGenero($cod_genero)
    {
        $this->cod_genero = $cod_genero;

        return $this;
    }

    /**
     * Method to set the value of field cod_servico
     *
     * @param integer $cod_servico
     * @return $this
     */
    public function setCodServico($cod_servico)
    {
        $this->cod_servico = $cod_servico;

        return $this;
    }

    /**
     * Method to set the value of field cst_pis
     *
     * @param string $cst_pis
     * @return $this
     */
    public function setCstPis($cst_pis)
    {
        $this->cst_pis = $cst_pis;

        return $this;
    }

    /**
     * Method to set the value of field baseCalculoPis
     *
     * @param double $baseCalculoPis
     * @return $this
     */
    public function setBaseCalculoPis($baseCalculoPis)
    {
        $this->baseCalculoPis = $baseCalculoPis;

        return $this;
    }

    /**
     * Method to set the value of field aliquotaPis
     *
     * @param double $aliquotaPis
     * @return $this
     */
    public function setAliquotaPis($aliquotaPis)
    {
        $this->aliquotaPis = $aliquotaPis;

        return $this;
    }

    /**
     * Method to set the value of field qtdeBaseCalculoPis
     *
     * @param double $qtdeBaseCalculoPis
     * @return $this
     */
    public function setQtdeBaseCalculoPis($qtdeBaseCalculoPis)
    {
        $this->qtdeBaseCalculoPis = $qtdeBaseCalculoPis;

        return $this;
    }

    /**
     * Method to set the value of field aliquotaReaisPis
     *
     * @param double $aliquotaReaisPis
     * @return $this
     */
    public function setAliquotaReaisPis($aliquotaReaisPis)
    {
        $this->aliquotaReaisPis = $aliquotaReaisPis;

        return $this;
    }

    /**
     * Method to set the value of field valorPis
     *
     * @param double $valorPis
     * @return $this
     */
    public function setValorPis($valorPis)
    {
        $this->valorPis = $valorPis;

        return $this;
    }

    /**
     * Method to set the value of field cst_cofins
     *
     * @param string $cst_cofins
     * @return $this
     */
    public function setCstCofins($cst_cofins)
    {
        $this->cst_cofins = $cst_cofins;

        return $this;
    }

    /**
     * Method to set the value of field baseCalculoCofins
     *
     * @param double $baseCalculoCofins
     * @return $this
     */
    public function setBaseCalculoCofins($baseCalculoCofins)
    {
        $this->baseCalculoCofins = $baseCalculoCofins;

        return $this;
    }

    /**
     * Method to set the value of field aliquotaCofins
     *
     * @param double $aliquotaCofins
     * @return $this
     */
    public function setAliquotaCofins($aliquotaCofins)
    {
        $this->aliquotaCofins = $aliquotaCofins;

        return $this;
    }

    /**
     * Method to set the value of field qtdeBaseCalculoCofins
     *
     * @param double $qtdeBaseCalculoCofins
     * @return $this
     */
    public function setQtdeBaseCalculoCofins($qtdeBaseCalculoCofins)
    {
        $this->qtdeBaseCalculoCofins = $qtdeBaseCalculoCofins;

        return $this;
    }

    /**
     * Method to set the value of field aliquotaReaisCofins
     *
     * @param double $aliquotaReaisCofins
     * @return $this
     */
    public function setAliquotaReaisCofins($aliquotaReaisCofins)
    {
        $this->aliquotaReaisCofins = $aliquotaReaisCofins;

        return $this;
    }

    /**
     * Method to set the value of field valorCofins
     *
     * @param double $valorCofins
     * @return $this
     */
    public function setValorCofins($valorCofins)
    {
        $this->valorCofins = $valorCofins;

        return $this;
    }

    /**
     * Returns the value of field cd_item
     *
     * @return integer
     */
    public function getCdItem()
    {
        return $this->cd_item;
    }

    /**
     * Returns the value of field cd_nfservico
     *
     * @return integer
     */
    public function getCdNfservico()
    {
        return $this->cd_nfservico;
    }

    /**
     * Returns the value of field num_item
     *
     * @return integer
     */
    public function getNumItem()
    {
        return $this->num_item;
    }

    /**
     * Returns the value of field descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Returns the value of field qtde
     *
     * @return double
     */
    public function getQtde()
    {
        return $this->qtde;
    }

    /**
     * Returns the value of field valor
     *
     * @return double
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Returns the value of field desconto
     *
     * @return double
     */
    public function getDesconto()
    {
        return $this->desconto;
    }

    /**
     * Returns the value of field ind_mov
     *
     * @return integer
     */
    public function getIndMov()
    {
        return $this->ind_mov;
    }

    /**
     * Returns the value of field cfop
     *
     * @return integer
     */
    public function getCfop()
    {
        return $this->cfop;
    }

    /**
     * Returns the value of field tipo_item
     *
     * @return integer
     */
    public function getTipoItem()
    {
        return $this->tipo_item;
    }

    /**
     * Returns the value of field unidadeMedida
     *
     * @return integer
     */
    public function getUnidadeMedida()
    {
        return $this->unidadeMedida;
    }

    /**
     * Returns the value of field ncm
     *
     * @return integer
     */
    public function getNcm()
    {
        return $this->ncm;
    }

    /**
     * Returns the value of field cod_genero
     *
     * @return integer
     */
    public function getCodGenero()
    {
        return $this->cod_genero;
    }

    /**
     * Returns the value of field cod_servico
     *
     * @return integer
     */
    public function getCodServico()
    {
        return $this->cod_servico;
    }

    /**
     * Returns the value of field cst_pis
     *
     * @return string
     */
    public function getCstPis()
    {
        return $this->cst_pis;
    }

    /**
     * Returns the value of field baseCalculoPis
     *
     * @return double
     */
    public function getBaseCalculoPis()
    {
        return $this->baseCalculoPis;
    }

    /**
     * Returns the value of field aliquotaPis
     *
     * @return double
     */
    public function getAliquotaPis()
    {
        return $this->aliquotaPis;
    }

    /**
     * Returns the value of field qtdeBaseCalculoPis
     *
     * @return double
     */
    public function getQtdeBaseCalculoPis()
    {
        return $this->qtdeBaseCalculoPis;
    }

    /**
     * Returns the value of field aliquotaReaisPis
     *
     * @return double
     */
    public function getAliquotaReaisPis()
    {
        return $this->aliquotaReaisPis;
    }

    /**
     * Returns the value of field valorPis
     *
     * @return double
     */
    public function getValorPis()
    {
        return $this->valorPis;
    }

    /**
     * Returns the value of field cst_cofins
     *
     * @return string
     */
    public function getCstCofins()
    {
        return $this->cst_cofins;
    }

    /**
     * Returns the value of field baseCalculoCofins
     *
     * @return double
     */
    public function getBaseCalculoCofins()
    {
        return $this->baseCalculoCofins;
    }

    /**
     * Returns the value of field aliquotaCofins
     *
     * @return double
     */
    public function getAliquotaCofins()
    {
        return $this->aliquotaCofins;
    }

    /**
     * Returns the value of field qtdeBaseCalculoCofins
     *
     * @return double
     */
    public function getQtdeBaseCalculoCofins()
    {
        return $this->qtdeBaseCalculoCofins;
    }

    /**
     * Returns the value of field aliquotaReaisCofins
     *
     * @return double
     */
    public function getAliquotaReaisCofins()
    {
        return $this->aliquotaReaisCofins;
    }

    /**
     * Returns the value of field valorCofins
     *
     * @return double
     */
    public function getValorCofins()
    {
        return $this->valorCofins;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('cfop', 'App\Models\Cfop', 'cfop', array('alias' => 'Cfop'));
        $this->belongsTo('cod_genero', 'App\Models\GeneroItem', 'id_genero', array('alias' => 'GeneroItem'));
        $this->belongsTo('ncm', 'App\Models\Ncm', 'cd_ncm', array('alias' => 'Ncm'));
        $this->belongsTo('cd_nfservico', 'App\Models\Nfservico', 'cd_nfservico', array('alias' => 'Nfservico'));
        $this->belongsTo('tipo_item', 'App\Models\TipoItem', 'id_tipo', array('alias' => 'TipoItem'));
        $this->belongsTo('unidadeMedida', 'App\Models\Unidademedida', 'cd_medida', array('alias' => 'Unidademedida'));
        $this->belongsTo('cfop', 'App\Models\Cfop', 'cfop', array('foreignKey' => true,'alias' => 'Cfop'));
        $this->belongsTo('cod_genero', 'App\Models\GeneroItem', 'id_genero', array('foreignKey' => true,'alias' => 'GeneroItem'));
        $this->belongsTo('ncm', 'App\Models\Ncm', 'cd_ncm', array('foreignKey' => true,'alias' => 'Ncm'));
        $this->belongsTo('cd_nfservico', 'App\Models\Nfservico', 'cd_nfservico', array('foreignKey' => true,'alias' => 'Nfservico'));
        $this->belongsTo('tipo_item', 'App\Models\TipoItem', 'id_tipo', array('foreignKey' => true,'alias' => 'TipoItem'));
        $this->belongsTo('unidadeMedida', 'App\Models\Unidademedida', 'cd_medida', array('foreignKey' => true,'alias' => 'Unidademedida'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'nfservico_item';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return NfservicoItem[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return NfservicoItem
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

    /**
     * Independent Column Mapping.
     * Keys are the real names in the table and the values their names in the application
     *
     * @return array
     */
    public function columnMap()
    {
        return array(
            'cd_item' => 'cd_item',
            'cd_nfservico' => 'cd_nfservico',
            'num_item' => 'num_item',
            'descricao' => 'descricao',
            'qtde' => 'qtde',
            'valor' => 'valor',
            'desconto' => 'desconto',
            'ind_mov' => 'ind_mov',
            'cfop' => 'cfop',
            'tipo_item' => 'tipo_item',
            'unidadeMedida' => 'unidadeMedida',
            'ncm' => 'ncm',
            'cod_genero' => 'cod_genero',
            'cod_servico' => 'cod_servico',
            'cst_pis' => 'cst_pis',
            'baseCalculoPis' => 'baseCalculoPis',
            'aliquotaPis' => 'aliquotaPis',
            'qtdeBaseCalculoPis' => 'qtdeBaseCalculoPis',
            'aliquotaReaisPis' => 'aliquotaReaisPis',
            'valorPis' => 'valorPis',
            'cst_cofins' => 'cst_cofins',
            'baseCalculoCofins' => 'baseCalculoCofins',
            'aliquotaCofins' => 'aliquotaCofins',
            'qtdeBaseCalculoCofins' => 'qtdeBaseCalculoCofins',
            'aliquotaReaisCofins' => 'aliquotaReaisCofins',
            'valorCofins' => 'valorCofins'
        );
    }

}
