<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: cerbos/policy/v1/policy.proto

namespace Cerbos\Policy\V1;

use UnexpectedValueException;

/**
 * Protobuf type <code>cerbos.policy.v1.Kind</code>
 */
class Kind
{
    /**
     * Generated from protobuf enum <code>KIND_UNSPECIFIED = 0;</code>
     */
    const KIND_UNSPECIFIED = 0;
    /**
     * Generated from protobuf enum <code>KIND_DERIVED_ROLES = 1;</code>
     */
    const KIND_DERIVED_ROLES = 1;
    /**
     * Generated from protobuf enum <code>KIND_EXPORT_VARIABLES = 2;</code>
     */
    const KIND_EXPORT_VARIABLES = 2;
    /**
     * Generated from protobuf enum <code>KIND_PRINCIPAL = 3;</code>
     */
    const KIND_PRINCIPAL = 3;
    /**
     * Generated from protobuf enum <code>KIND_RESOURCE = 4;</code>
     */
    const KIND_RESOURCE = 4;
    /**
     * Generated from protobuf enum <code>KIND_ROLE_POLICY = 5;</code>
     */
    const KIND_ROLE_POLICY = 5;

    private static $valueToName = [
        self::KIND_UNSPECIFIED => 'KIND_UNSPECIFIED',
        self::KIND_DERIVED_ROLES => 'KIND_DERIVED_ROLES',
        self::KIND_EXPORT_VARIABLES => 'KIND_EXPORT_VARIABLES',
        self::KIND_PRINCIPAL => 'KIND_PRINCIPAL',
        self::KIND_RESOURCE => 'KIND_RESOURCE',
        self::KIND_ROLE_POLICY => 'KIND_ROLE_POLICY',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}
