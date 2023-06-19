<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/expr/v1alpha1/syntax.proto

namespace Google\Api\Expr\V1alpha1\Expr;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A list creation expression.
 * Lists may either be homogenous, e.g. `[1, 2, 3]`, or heterogeneous, e.g.
 * `dyn([1, 'hello', 2.0])`
 *
 * Generated from protobuf message <code>google.api.expr.v1alpha1.Expr.CreateList</code>
 */
class CreateList extends \Google\Protobuf\Internal\Message
{
    /**
     * The elements part of the list.
     *
     * Generated from protobuf field <code>repeated .google.api.expr.v1alpha1.Expr elements = 1 [json_name = "elements"];</code>
     */
    private $elements;
    /**
     * The indices within the elements list which are marked as optional
     * elements.
     * When an optional-typed value is present, the value it contains
     * is included in the list. If the optional-typed value is absent, the list
     * element is omitted from the CreateList result.
     *
     * Generated from protobuf field <code>repeated int32 optional_indices = 2 [json_name = "optionalIndices"];</code>
     */
    private $optional_indices;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Api\Expr\V1alpha1\Expr>|\Google\Protobuf\Internal\RepeatedField $elements
     *           The elements part of the list.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $optional_indices
     *           The indices within the elements list which are marked as optional
     *           elements.
     *           When an optional-typed value is present, the value it contains
     *           is included in the list. If the optional-typed value is absent, the list
     *           element is omitted from the CreateList result.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Expr\V1Alpha1\Syntax::initOnce();
        parent::__construct($data);
    }

    /**
     * The elements part of the list.
     *
     * Generated from protobuf field <code>repeated .google.api.expr.v1alpha1.Expr elements = 1 [json_name = "elements"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getElements()
    {
        return $this->elements;
    }

    /**
     * The elements part of the list.
     *
     * Generated from protobuf field <code>repeated .google.api.expr.v1alpha1.Expr elements = 1 [json_name = "elements"];</code>
     * @param array<\Google\Api\Expr\V1alpha1\Expr>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setElements($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Api\Expr\V1alpha1\Expr::class);
        $this->elements = $arr;

        return $this;
    }

    /**
     * The indices within the elements list which are marked as optional
     * elements.
     * When an optional-typed value is present, the value it contains
     * is included in the list. If the optional-typed value is absent, the list
     * element is omitted from the CreateList result.
     *
     * Generated from protobuf field <code>repeated int32 optional_indices = 2 [json_name = "optionalIndices"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOptionalIndices()
    {
        return $this->optional_indices;
    }

    /**
     * The indices within the elements list which are marked as optional
     * elements.
     * When an optional-typed value is present, the value it contains
     * is included in the list. If the optional-typed value is absent, the list
     * element is omitted from the CreateList result.
     *
     * Generated from protobuf field <code>repeated int32 optional_indices = 2 [json_name = "optionalIndices"];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOptionalIndices($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->optional_indices = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CreateList::class, \Google\Api\Expr\V1alpha1\Expr_CreateList::class);
