<?php

namespace App\Models;

use Phalcon\Mvc\Model\Behavior\Timestampable;

class Simulated extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $idSimulated;

    /**
     *
     * @var integer
     */
    protected $areaOperation_idAreaOperation;

    /**
     *
     * @var integer
     */
    protected $simulated_idSimulated;

    /**
     *
     * @var string
     */
    protected $question;

    /**
     *
     * @var string
     */
    protected $answer;

    /**
     *
     * @var integer
     */
    protected $ordem;

    /**
     *
     * @var integer
     */
    protected $rightAnswer;

    /**
     *
     * @var string
     */
    protected $created;

    /**
     *
     * @var string
     */
    protected $modified;

    /**
     *
     * @var integer
     */
    protected $enabled;

    /**
     *
     * @var string
     */
    protected $institution;

    /**
     *
     * @var integer
     */
    protected $difficulty;

    /**
     * Method to set the value of field idSimulated
     *
     * @param integer $idSimulated
     * @return $this
     */
    public function setIdsimulated($idSimulated)
    {
        $this->idSimulated = $idSimulated;

        return $this;
    }

    /**
     * Method to set the value of field areaOperation_idAreaOperation
     *
     * @param integer $areaOperation_idAreaOperation
     * @return $this
     */
    public function setAreaoperationIdareaoperation($areaOperation_idAreaOperation)
    {
        $this->areaOperation_idAreaOperation = $areaOperation_idAreaOperation;

        return $this;
    }

    /**
     * Method to set the value of field simulated_idSimulated
     *
     * @param integer $simulated_idSimulated
     * @return $this
     */
    public function setSimulatedIdsimulated($simulated_idSimulated)
    {
        $this->simulated_idSimulated = $simulated_idSimulated;

        return $this;
    }

    /**
     * Method to set the value of field question
     *
     * @param string $question
     * @return $this
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Method to set the value of field answer
     *
     * @param string $answer
     * @return $this
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;

        return $this;
    }

    /**
     * Method to set the value of field ordem
     *
     * @param integer $ordem
     * @return $this
     */
    public function setOrdem($ordem)
    {
        $this->ordem = $ordem;

        return $this;
    }

    /**
     * Method to set the value of field rightAnswer
     *
     * @param integer $rightAnswer
     * @return $this
     */
    public function setRightanswer($rightAnswer)
    {
        $this->rightAnswer = $rightAnswer;

        return $this;
    }

    /**
     * Method to set the value of field created
     *
     * @param string $created
     * @return $this
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Method to set the value of field modified
     *
     * @param string $modified
     * @return $this
     */
    public function setModified($modified)
    {
        $this->modified = $modified;

        return $this;
    }

    /**
     * Method to set the value of field enabled
     *
     * @param integer $enabled
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Method to set the value of field institution
     *
     * @param string $institution
     * @return $this
     */
    public function setInstitution($institution)
    {
        $this->institution = $institution;

        return $this;
    }

    /**
     * Method to set the value of field difficulty
     *
     * @param integer $difficulty
     * @return $this
     */
    public function setDifficulty($difficulty)
    {
        $this->difficulty = $difficulty;

        return $this;
    }

    /**
     * Returns the value of field idSimulated
     *
     * @return integer
     */
    public function getIdsimulated()
    {
        return $this->idSimulated;
    }

    /**
     * Returns the value of field areaOperation_idAreaOperation
     *
     * @return integer
     */
    public function getAreaoperationIdareaoperation()
    {
        return $this->areaOperation_idAreaOperation;
    }

    /**
     * Returns the value of field simulated_idSimulated
     *
     * @return integer
     */
    public function getSimulatedIdsimulated()
    {
        return $this->simulated_idSimulated;
    }

    /**
     * Returns the value of field question
     *
     * @return string
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Returns the value of field answer
     *
     * @return string
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Returns the value of field ordem
     *
     * @return integer
     */
    public function getOrdem()
    {
        return $this->ordem;
    }

    /**
     * Returns the value of field rightAnswer
     *
     * @return integer
     */
    public function getRightanswer()
    {
        return $this->rightAnswer;
    }

    /**
     * Returns the value of field created
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Returns the value of field modified
     *
     * @return string
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * Returns the value of field enabled
     *
     * @return integer
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Returns the value of field institution
     *
     * @return string
     */
    public function getInstitution()
    {
        return $this->institution;
    }

    /**
     * Returns the value of field difficulty
     *
     * @return integer
     */
    public function getDifficulty()
    {
        return $this->difficulty;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('idSimulated', 'App\Models\Simulated', 'simulated_idSimulated', array('alias' => 'Simulated'));
        $this->hasMany('idSimulated', 'App\Models\UserHasSimulated', 'simulated_idSimulated', array('alias' => 'UserHasSimulated'));
        $this->belongsTo('areaOperation_idAreaOperation', 'App\Models\AreaOperation', 'idAreaOperation', array('alias' => 'AreaOperation'));
        $this->belongsTo('simulated_idSimulated', 'App\Models\Simulated', 'idSimulated', array('alias' => 'SimulatedQuestion'));

        $this->customInitialize();
    }

    public function getSource()
    {
        return 'simulated';
    }

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'idSimulated' => 'idSimulated',
            'areaOperation_idAreaOperation' => 'areaOperation_idAreaOperation',
            'simulated_idSimulated' => 'simulated_idSimulated',
            'question' => 'question',
            'answer' => 'answer',
            'ordem' => 'ordem',
            'rightAnswer' => 'rightAnswer',
            'created' => 'created',
            'modified' => 'modified',
            'enabled' => 'enabled',
            'institution' => 'institution',
            'difficulty' => 'difficulty'
        );
    }

    public static function search($params = null)
    {
        $query = self::query();

        // check if we need to join a table
        preg_match_all('/[\S]*\./', $params['conditions'] .' '. $params['order'], $aModelsToJoin);
        if (count($aModelsToJoin) > 0) {
            // remove duplicates
            $aModelsToJoin = array_filter(array_unique($aModelsToJoin[0]));
            foreach ($aModelsToJoin as $model) {
                if (rtrim($model, '.') != 'App\Models\Simulated') {
                    $query->Join(rtrim($model, '.'));
                }
            }
        }

        if (isset($params['conditions'])) {
            $query->where($params['conditions'], $params['bind']);
        }

        if (isset($params['order'])) {
            $query->order($params['order']);
        }

        if (isset($params['limit'])) {
            if (!isset($params['offset'])) {
                $params['offset'] = 0;
            }

            $query->limit($params['limit'], $params['offset']);
        }
        if (isset($params['columns'])) {
            $query->columns($params['columns']);
        }

        if (isset($params['bulder']) && $params['bulder'] == 1) {
            return $query;
        } else {
            return $query->execute();
        }
    }

    public function customInitialize()
    {
        $this->addBehavior(new Timestampable(
            array(
                'beforeCreate' => array(
                    'field' => array('created'),
                    'format' => 'Y-m-d H:i:s'
                    )
                )
        ));
    }
}
