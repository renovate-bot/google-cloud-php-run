<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/run/v2/vendor_settings.proto

namespace Google\Cloud\Run\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Settings for Binary Authorization feature.
 *
 * Generated from protobuf message <code>google.cloud.run.v2.BinaryAuthorization</code>
 */
class BinaryAuthorization extends \Google\Protobuf\Internal\Message
{
    /**
     * If present, indicates to use Breakglass using this justification.
     * If use_default is False, then it must be empty.
     * For more information on breakglass, see
     * https://cloud.google.com/binary-authorization/docs/using-breakglass
     *
     * Generated from protobuf field <code>string breakglass_justification = 2;</code>
     */
    protected $breakglass_justification = '';
    protected $binauthz_method;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $use_default
     *           If True, indicates to use the default project's binary authorization
     *           policy. If False, binary authorization will be disabled.
     *     @type string $breakglass_justification
     *           If present, indicates to use Breakglass using this justification.
     *           If use_default is False, then it must be empty.
     *           For more information on breakglass, see
     *           https://cloud.google.com/binary-authorization/docs/using-breakglass
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Run\V2\VendorSettings::initOnce();
        parent::__construct($data);
    }

    /**
     * If True, indicates to use the default project's binary authorization
     * policy. If False, binary authorization will be disabled.
     *
     * Generated from protobuf field <code>bool use_default = 1;</code>
     * @return bool
     */
    public function getUseDefault()
    {
        return $this->readOneof(1);
    }

    public function hasUseDefault()
    {
        return $this->hasOneof(1);
    }

    /**
     * If True, indicates to use the default project's binary authorization
     * policy. If False, binary authorization will be disabled.
     *
     * Generated from protobuf field <code>bool use_default = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setUseDefault($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * If present, indicates to use Breakglass using this justification.
     * If use_default is False, then it must be empty.
     * For more information on breakglass, see
     * https://cloud.google.com/binary-authorization/docs/using-breakglass
     *
     * Generated from protobuf field <code>string breakglass_justification = 2;</code>
     * @return string
     */
    public function getBreakglassJustification()
    {
        return $this->breakglass_justification;
    }

    /**
     * If present, indicates to use Breakglass using this justification.
     * If use_default is False, then it must be empty.
     * For more information on breakglass, see
     * https://cloud.google.com/binary-authorization/docs/using-breakglass
     *
     * Generated from protobuf field <code>string breakglass_justification = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setBreakglassJustification($var)
    {
        GPBUtil::checkString($var, True);
        $this->breakglass_justification = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getBinauthzMethod()
    {
        return $this->whichOneof("binauthz_method");
    }

}

