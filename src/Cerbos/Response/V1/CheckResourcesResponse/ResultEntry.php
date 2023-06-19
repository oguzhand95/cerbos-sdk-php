<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cerbos/response/v1/response.proto

namespace Cerbos\Response\V1\CheckResourcesResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cerbos.response.v1.CheckResourcesResponse.ResultEntry</code>
 */
class ResultEntry extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.cerbos.response.v1.CheckResourcesResponse.ResultEntry.Resource resource = 1 [json_name = "resource"];</code>
     */
    protected $resource = null;
    /**
     * Generated from protobuf field <code>map<string, .cerbos.effect.v1.Effect> actions = 2 [json_name = "actions", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    private $actions;
    /**
     * Generated from protobuf field <code>repeated .cerbos.schema.v1.ValidationError validation_errors = 3 [json_name = "validationErrors", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    private $validation_errors;
    /**
     * Generated from protobuf field <code>.cerbos.response.v1.CheckResourcesResponse.ResultEntry.Meta meta = 4 [json_name = "meta", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $meta = null;
    /**
     * Generated from protobuf field <code>repeated .cerbos.engine.v1.OutputEntry outputs = 5 [json_name = "outputs", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    private $outputs;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Cerbos\Response\V1\CheckResourcesResponse\ResultEntry\Resource $resource
     *     @type array|\Google\Protobuf\Internal\MapField $actions
     *     @type array<\Cerbos\Schema\V1\ValidationError>|\Google\Protobuf\Internal\RepeatedField $validation_errors
     *     @type \Cerbos\Response\V1\CheckResourcesResponse\ResultEntry\Meta $meta
     *     @type array<\Cerbos\Engine\V1\OutputEntry>|\Google\Protobuf\Internal\RepeatedField $outputs
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cerbos\Response\V1\Response::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.cerbos.response.v1.CheckResourcesResponse.ResultEntry.Resource resource = 1 [json_name = "resource"];</code>
     * @return \Cerbos\Response\V1\CheckResourcesResponse\ResultEntry\Resource|null
     */
    public function getResource()
    {
        return $this->resource;
    }

    public function hasResource()
    {
        return isset($this->resource);
    }

    public function clearResource()
    {
        unset($this->resource);
    }

    /**
     * Generated from protobuf field <code>.cerbos.response.v1.CheckResourcesResponse.ResultEntry.Resource resource = 1 [json_name = "resource"];</code>
     * @param \Cerbos\Response\V1\CheckResourcesResponse\ResultEntry\Resource $var
     * @return $this
     */
    public function setResource($var)
    {
        GPBUtil::checkMessage($var, \Cerbos\Response\V1\CheckResourcesResponse\ResultEntry\Resource::class);
        $this->resource = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, .cerbos.effect.v1.Effect> actions = 2 [json_name = "actions", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * Generated from protobuf field <code>map<string, .cerbos.effect.v1.Effect> actions = 2 [json_name = "actions", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setActions($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::ENUM, \Cerbos\Effect\V1\Effect::class);
        $this->actions = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .cerbos.schema.v1.ValidationError validation_errors = 3 [json_name = "validationErrors", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValidationErrors()
    {
        return $this->validation_errors;
    }

    /**
     * Generated from protobuf field <code>repeated .cerbos.schema.v1.ValidationError validation_errors = 3 [json_name = "validationErrors", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param array<\Cerbos\Schema\V1\ValidationError>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValidationErrors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cerbos\Schema\V1\ValidationError::class);
        $this->validation_errors = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.cerbos.response.v1.CheckResourcesResponse.ResultEntry.Meta meta = 4 [json_name = "meta", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Cerbos\Response\V1\CheckResourcesResponse\ResultEntry\Meta|null
     */
    public function getMeta()
    {
        return $this->meta;
    }

    public function hasMeta()
    {
        return isset($this->meta);
    }

    public function clearMeta()
    {
        unset($this->meta);
    }

    /**
     * Generated from protobuf field <code>.cerbos.response.v1.CheckResourcesResponse.ResultEntry.Meta meta = 4 [json_name = "meta", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Cerbos\Response\V1\CheckResourcesResponse\ResultEntry\Meta $var
     * @return $this
     */
    public function setMeta($var)
    {
        GPBUtil::checkMessage($var, \Cerbos\Response\V1\CheckResourcesResponse\ResultEntry\Meta::class);
        $this->meta = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .cerbos.engine.v1.OutputEntry outputs = 5 [json_name = "outputs", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOutputs()
    {
        return $this->outputs;
    }

    /**
     * Generated from protobuf field <code>repeated .cerbos.engine.v1.OutputEntry outputs = 5 [json_name = "outputs", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param array<\Cerbos\Engine\V1\OutputEntry>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOutputs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cerbos\Engine\V1\OutputEntry::class);
        $this->outputs = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ResultEntry::class, \Cerbos\Response\V1\CheckResourcesResponse_ResultEntry::class);
