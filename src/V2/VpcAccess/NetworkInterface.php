<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/run/v2/vendor_settings.proto

namespace Google\Cloud\Run\V2\VpcAccess;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Direct VPC egress settings.
 *
 * Generated from protobuf message <code>google.cloud.run.v2.VpcAccess.NetworkInterface</code>
 */
class NetworkInterface extends \Google\Protobuf\Internal\Message
{
    /**
     * The VPC network that the Cloud Run resource will be able to send traffic
     * to. At least one of network or subnetwork must be specified. If both
     * network and subnetwork are specified, the given VPC subnetwork must
     * belong to the given VPC network. If network is not specified, it will be
     * looked up from the subnetwork.
     *
     * Generated from protobuf field <code>string network = 1;</code>
     */
    protected $network = '';
    /**
     * The VPC subnetwork that the Cloud Run resource will get IPs from. At
     * least one of network or subnetwork must be specified. If both
     * network and subnetwork are specified, the given VPC subnetwork must
     * belong to the given VPC network. If subnetwork is not specified, the
     * subnetwork with the same name with the network will be used.
     *
     * Generated from protobuf field <code>string subnetwork = 2;</code>
     */
    protected $subnetwork = '';
    /**
     * Network tags applied to this Cloud Run resource.
     *
     * Generated from protobuf field <code>repeated string tags = 3;</code>
     */
    private $tags;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $network
     *           The VPC network that the Cloud Run resource will be able to send traffic
     *           to. At least one of network or subnetwork must be specified. If both
     *           network and subnetwork are specified, the given VPC subnetwork must
     *           belong to the given VPC network. If network is not specified, it will be
     *           looked up from the subnetwork.
     *     @type string $subnetwork
     *           The VPC subnetwork that the Cloud Run resource will get IPs from. At
     *           least one of network or subnetwork must be specified. If both
     *           network and subnetwork are specified, the given VPC subnetwork must
     *           belong to the given VPC network. If subnetwork is not specified, the
     *           subnetwork with the same name with the network will be used.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $tags
     *           Network tags applied to this Cloud Run resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Run\V2\VendorSettings::initOnce();
        parent::__construct($data);
    }

    /**
     * The VPC network that the Cloud Run resource will be able to send traffic
     * to. At least one of network or subnetwork must be specified. If both
     * network and subnetwork are specified, the given VPC subnetwork must
     * belong to the given VPC network. If network is not specified, it will be
     * looked up from the subnetwork.
     *
     * Generated from protobuf field <code>string network = 1;</code>
     * @return string
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * The VPC network that the Cloud Run resource will be able to send traffic
     * to. At least one of network or subnetwork must be specified. If both
     * network and subnetwork are specified, the given VPC subnetwork must
     * belong to the given VPC network. If network is not specified, it will be
     * looked up from the subnetwork.
     *
     * Generated from protobuf field <code>string network = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setNetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->network = $var;

        return $this;
    }

    /**
     * The VPC subnetwork that the Cloud Run resource will get IPs from. At
     * least one of network or subnetwork must be specified. If both
     * network and subnetwork are specified, the given VPC subnetwork must
     * belong to the given VPC network. If subnetwork is not specified, the
     * subnetwork with the same name with the network will be used.
     *
     * Generated from protobuf field <code>string subnetwork = 2;</code>
     * @return string
     */
    public function getSubnetwork()
    {
        return $this->subnetwork;
    }

    /**
     * The VPC subnetwork that the Cloud Run resource will get IPs from. At
     * least one of network or subnetwork must be specified. If both
     * network and subnetwork are specified, the given VPC subnetwork must
     * belong to the given VPC network. If subnetwork is not specified, the
     * subnetwork with the same name with the network will be used.
     *
     * Generated from protobuf field <code>string subnetwork = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSubnetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->subnetwork = $var;

        return $this;
    }

    /**
     * Network tags applied to this Cloud Run resource.
     *
     * Generated from protobuf field <code>repeated string tags = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Network tags applied to this Cloud Run resource.
     *
     * Generated from protobuf field <code>repeated string tags = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTags($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->tags = $arr;

        return $this;
    }

}


