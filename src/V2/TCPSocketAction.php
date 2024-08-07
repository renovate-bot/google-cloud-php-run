<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/run/v2/k8s.min.proto

namespace Google\Cloud\Run\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * TCPSocketAction describes an action based on opening a socket
 *
 * Generated from protobuf message <code>google.cloud.run.v2.TCPSocketAction</code>
 */
class TCPSocketAction extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Port number to access on the container. Must be in the range 1 to
     * 65535. If not specified, defaults to the exposed port of the container,
     * which is the value of container.ports[0].containerPort.
     *
     * Generated from protobuf field <code>int32 port = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $port = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $port
     *           Optional. Port number to access on the container. Must be in the range 1 to
     *           65535. If not specified, defaults to the exposed port of the container,
     *           which is the value of container.ports[0].containerPort.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Run\V2\K8SMin::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Port number to access on the container. Must be in the range 1 to
     * 65535. If not specified, defaults to the exposed port of the container,
     * which is the value of container.ports[0].containerPort.
     *
     * Generated from protobuf field <code>int32 port = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Optional. Port number to access on the container. Must be in the range 1 to
     * 65535. If not specified, defaults to the exposed port of the container,
     * which is the value of container.ports[0].containerPort.
     *
     * Generated from protobuf field <code>int32 port = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPort($var)
    {
        GPBUtil::checkInt32($var);
        $this->port = $var;

        return $this;
    }

}

