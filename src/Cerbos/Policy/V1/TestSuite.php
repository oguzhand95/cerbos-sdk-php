<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cerbos/policy/v1/policy.proto

namespace Cerbos\Policy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cerbos.policy.v1.TestSuite</code>
 */
class TestSuite extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string name = 1 [json_name = "name", (.validate.rules) = {</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>string description = 2 [json_name = "description"];</code>
     */
    protected $description = '';
    /**
     * Generated from protobuf field <code>bool skip = 3 [json_name = "skip"];</code>
     */
    protected $skip = false;
    /**
     * Generated from protobuf field <code>string skip_reason = 4 [json_name = "skipReason"];</code>
     */
    protected $skip_reason = '';
    /**
     * Generated from protobuf field <code>repeated .cerbos.policy.v1.TestTable tests = 5 [json_name = "tests", (.validate.rules) = {</code>
     */
    private $tests;
    /**
     * Generated from protobuf field <code>map<string, .cerbos.engine.v1.Principal> principals = 6 [json_name = "principals"];</code>
     */
    private $principals;
    /**
     * Generated from protobuf field <code>map<string, .cerbos.engine.v1.Resource> resources = 7 [json_name = "resources"];</code>
     */
    private $resources;
    /**
     * Generated from protobuf field <code>map<string, .cerbos.engine.v1.AuxData> aux_data = 8 [json_name = "auxData"];</code>
     */
    private $aux_data;
    /**
     * Generated from protobuf field <code>.cerbos.policy.v1.TestOptions options = 9 [json_name = "options"];</code>
     */
    protected $options = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *     @type string $description
     *     @type bool $skip
     *     @type string $skip_reason
     *     @type array<\Cerbos\Policy\V1\TestTable>|\Google\Protobuf\Internal\RepeatedField $tests
     *     @type array|\Google\Protobuf\Internal\MapField $principals
     *     @type array|\Google\Protobuf\Internal\MapField $resources
     *     @type array|\Google\Protobuf\Internal\MapField $aux_data
     *     @type \Cerbos\Policy\V1\TestOptions $options
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Policy\V1\Policy::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string name = 1 [json_name = "name", (.validate.rules) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 1 [json_name = "name", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string description = 2 [json_name = "description"];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Generated from protobuf field <code>string description = 2 [json_name = "description"];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool skip = 3 [json_name = "skip"];</code>
     * @return bool
     */
    public function getSkip()
    {
        return $this->skip;
    }

    /**
     * Generated from protobuf field <code>bool skip = 3 [json_name = "skip"];</code>
     * @param bool $var
     * @return $this
     */
    public function setSkip($var)
    {
        GPBUtil::checkBool($var);
        $this->skip = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string skip_reason = 4 [json_name = "skipReason"];</code>
     * @return string
     */
    public function getSkipReason()
    {
        return $this->skip_reason;
    }

    /**
     * Generated from protobuf field <code>string skip_reason = 4 [json_name = "skipReason"];</code>
     * @param string $var
     * @return $this
     */
    public function setSkipReason($var)
    {
        GPBUtil::checkString($var, True);
        $this->skip_reason = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .cerbos.policy.v1.TestTable tests = 5 [json_name = "tests", (.validate.rules) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTests()
    {
        return $this->tests;
    }

    /**
     * Generated from protobuf field <code>repeated .cerbos.policy.v1.TestTable tests = 5 [json_name = "tests", (.validate.rules) = {</code>
     * @param array<\Cerbos\Policy\V1\TestTable>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTests($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cerbos\Policy\V1\TestTable::class);
        $this->tests = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, .cerbos.engine.v1.Principal> principals = 6 [json_name = "principals"];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getPrincipals()
    {
        return $this->principals;
    }

    /**
     * Generated from protobuf field <code>map<string, .cerbos.engine.v1.Principal> principals = 6 [json_name = "principals"];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setPrincipals($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cerbos\Engine\V1\Principal::class);
        $this->principals = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, .cerbos.engine.v1.Resource> resources = 7 [json_name = "resources"];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getResources()
    {
        return $this->resources;
    }

    /**
     * Generated from protobuf field <code>map<string, .cerbos.engine.v1.Resource> resources = 7 [json_name = "resources"];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setResources($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cerbos\Engine\V1\Resource::class);
        $this->resources = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, .cerbos.engine.v1.AuxData> aux_data = 8 [json_name = "auxData"];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAuxData()
    {
        return $this->aux_data;
    }

    /**
     * Generated from protobuf field <code>map<string, .cerbos.engine.v1.AuxData> aux_data = 8 [json_name = "auxData"];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAuxData($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cerbos\Engine\V1\AuxData::class);
        $this->aux_data = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cerbos.policy.v1.TestOptions options = 9 [json_name = "options"];</code>
     * @return \Cerbos\Policy\V1\TestOptions|null
     */
    public function getOptions()
    {
        return $this->options;
    }

    public function hasOptions()
    {
        return isset($this->options);
    }

    public function clearOptions()
    {
        unset($this->options);
    }

    /**
     * Generated from protobuf field <code>.cerbos.policy.v1.TestOptions options = 9 [json_name = "options"];</code>
     * @param \Cerbos\Policy\V1\TestOptions $var
     * @return $this
     */
    public function setOptions($var)
    {
        GPBUtil::checkMessage($var, \Cerbos\Policy\V1\TestOptions::class);
        $this->options = $var;

        return $this;
    }

}
