<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/run/v2/k8s.min.proto

namespace Google\Cloud\Run\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * EnvVar represents an environment variable present in a Container.
 *
 * Generated from protobuf message <code>google.cloud.run.v2.EnvVar</code>
 */
class EnvVar extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the environment variable. Must not exceed 32768
     * characters.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $name = '';
    protected $values;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Name of the environment variable. Must not exceed 32768
     *           characters.
     *     @type string $value
     *           Variable references $(VAR_NAME) are expanded
     *           using the previous defined environment variables in the container and
     *           any route environment variables. If a variable cannot be resolved,
     *           the reference in the input string will be unchanged. The $(VAR_NAME)
     *           syntax can be escaped with a double $$, ie: $$(VAR_NAME). Escaped
     *           references will never be expanded, regardless of whether the variable
     *           exists or not.
     *           Defaults to "", and the maximum length is 32768 bytes.
     *     @type \Google\Cloud\Run\V2\EnvVarSource $value_source
     *           Source for the environment variable's value.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Run\V2\K8SMin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the environment variable. Must not exceed 32768
     * characters.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Name of the environment variable. Must not exceed 32768
     * characters.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Variable references $(VAR_NAME) are expanded
     * using the previous defined environment variables in the container and
     * any route environment variables. If a variable cannot be resolved,
     * the reference in the input string will be unchanged. The $(VAR_NAME)
     * syntax can be escaped with a double $$, ie: $$(VAR_NAME). Escaped
     * references will never be expanded, regardless of whether the variable
     * exists or not.
     * Defaults to "", and the maximum length is 32768 bytes.
     *
     * Generated from protobuf field <code>string value = 2;</code>
     * @return string
     */
    public function getValue()
    {
        return $this->readOneof(2);
    }

    public function hasValue()
    {
        return $this->hasOneof(2);
    }

    /**
     * Variable references $(VAR_NAME) are expanded
     * using the previous defined environment variables in the container and
     * any route environment variables. If a variable cannot be resolved,
     * the reference in the input string will be unchanged. The $(VAR_NAME)
     * syntax can be escaped with a double $$, ie: $$(VAR_NAME). Escaped
     * references will never be expanded, regardless of whether the variable
     * exists or not.
     * Defaults to "", and the maximum length is 32768 bytes.
     *
     * Generated from protobuf field <code>string value = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Source for the environment variable's value.
     *
     * Generated from protobuf field <code>.google.cloud.run.v2.EnvVarSource value_source = 3;</code>
     * @return \Google\Cloud\Run\V2\EnvVarSource|null
     */
    public function getValueSource()
    {
        return $this->readOneof(3);
    }

    public function hasValueSource()
    {
        return $this->hasOneof(3);
    }

    /**
     * Source for the environment variable's value.
     *
     * Generated from protobuf field <code>.google.cloud.run.v2.EnvVarSource value_source = 3;</code>
     * @param \Google\Cloud\Run\V2\EnvVarSource $var
     * @return $this
     */
    public function setValueSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Run\V2\EnvVarSource::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getValues()
    {
        return $this->whichOneof("values");
    }

}

