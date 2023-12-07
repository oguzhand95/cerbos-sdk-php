<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cerbos/engine/v1/engine.proto

namespace Cerbos\Engine\V1\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cerbos.engine.v1.Request.Resource</code>
 */
class Resource extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string kind = 1 [json_name = "kind"];</code>
     */
    protected $kind = '';
    /**
     * Generated from protobuf field <code>string id = 2 [json_name = "id"];</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>map<string, .google.protobuf.Value> attr = 3 [json_name = "attr"];</code>
     */
    private $attr;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $kind
     *     @type string $id
     *     @type array|\Google\Protobuf\Internal\MapField $attr
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Engine\V1\Engine::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string kind = 1 [json_name = "kind"];</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Generated from protobuf field <code>string kind = 1 [json_name = "kind"];</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string id = 2 [json_name = "id"];</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 2 [json_name = "id"];</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, .google.protobuf.Value> attr = 3 [json_name = "attr"];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAttr()
    {
        return $this->attr;
    }

    /**
     * Generated from protobuf field <code>map<string, .google.protobuf.Value> attr = 3 [json_name = "attr"];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAttr($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Value::class);
        $this->attr = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Resource::class, \Cerbos\Engine\V1\Request_Resource::class);
