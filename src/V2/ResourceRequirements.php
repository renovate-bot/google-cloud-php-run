<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/run/v2/k8s.min.proto

namespace Google\Cloud\Run\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ResourceRequirements describes the compute resource requirements.
 *
 * Generated from protobuf message <code>google.cloud.run.v2.ResourceRequirements</code>
 */
class ResourceRequirements extends \Google\Protobuf\Internal\Message
{
    /**
     * Only `memory` and `cpu` keys in the map are supported.
     * <p>Notes:
     *  * The only supported values for CPU are '1', '2', '4', and '8'. Setting 4
     * CPU requires at least 2Gi of memory. For more information, go to
     * https://cloud.google.com/run/docs/configuring/cpu.
     *   * For supported 'memory' values and syntax, go to
     *  https://cloud.google.com/run/docs/configuring/memory-limits
     *
     * Generated from protobuf field <code>map<string, string> limits = 1;</code>
     */
    private $limits;
    /**
     * Determines whether CPU is only allocated during requests (true by default).
     * However, if ResourceRequirements is set, the caller must explicitly
     * set this field to true to preserve the default behavior.
     *
     * Generated from protobuf field <code>bool cpu_idle = 2;</code>
     */
    protected $cpu_idle = false;
    /**
     * Determines whether CPU should be boosted on startup of a new container
     * instance above the requested CPU threshold, this can help reduce cold-start
     * latency.
     *
     * Generated from protobuf field <code>bool startup_cpu_boost = 3;</code>
     */
    protected $startup_cpu_boost = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $limits
     *           Only `memory` and `cpu` keys in the map are supported.
     *           <p>Notes:
     *            * The only supported values for CPU are '1', '2', '4', and '8'. Setting 4
     *           CPU requires at least 2Gi of memory. For more information, go to
     *           https://cloud.google.com/run/docs/configuring/cpu.
     *             * For supported 'memory' values and syntax, go to
     *            https://cloud.google.com/run/docs/configuring/memory-limits
     *     @type bool $cpu_idle
     *           Determines whether CPU is only allocated during requests (true by default).
     *           However, if ResourceRequirements is set, the caller must explicitly
     *           set this field to true to preserve the default behavior.
     *     @type bool $startup_cpu_boost
     *           Determines whether CPU should be boosted on startup of a new container
     *           instance above the requested CPU threshold, this can help reduce cold-start
     *           latency.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Run\V2\K8SMin::initOnce();
        parent::__construct($data);
    }

    /**
     * Only `memory` and `cpu` keys in the map are supported.
     * <p>Notes:
     *  * The only supported values for CPU are '1', '2', '4', and '8'. Setting 4
     * CPU requires at least 2Gi of memory. For more information, go to
     * https://cloud.google.com/run/docs/configuring/cpu.
     *   * For supported 'memory' values and syntax, go to
     *  https://cloud.google.com/run/docs/configuring/memory-limits
     *
     * Generated from protobuf field <code>map<string, string> limits = 1;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLimits()
    {
        return $this->limits;
    }

    /**
     * Only `memory` and `cpu` keys in the map are supported.
     * <p>Notes:
     *  * The only supported values for CPU are '1', '2', '4', and '8'. Setting 4
     * CPU requires at least 2Gi of memory. For more information, go to
     * https://cloud.google.com/run/docs/configuring/cpu.
     *   * For supported 'memory' values and syntax, go to
     *  https://cloud.google.com/run/docs/configuring/memory-limits
     *
     * Generated from protobuf field <code>map<string, string> limits = 1;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLimits($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->limits = $arr;

        return $this;
    }

    /**
     * Determines whether CPU is only allocated during requests (true by default).
     * However, if ResourceRequirements is set, the caller must explicitly
     * set this field to true to preserve the default behavior.
     *
     * Generated from protobuf field <code>bool cpu_idle = 2;</code>
     * @return bool
     */
    public function getCpuIdle()
    {
        return $this->cpu_idle;
    }

    /**
     * Determines whether CPU is only allocated during requests (true by default).
     * However, if ResourceRequirements is set, the caller must explicitly
     * set this field to true to preserve the default behavior.
     *
     * Generated from protobuf field <code>bool cpu_idle = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setCpuIdle($var)
    {
        GPBUtil::checkBool($var);
        $this->cpu_idle = $var;

        return $this;
    }

    /**
     * Determines whether CPU should be boosted on startup of a new container
     * instance above the requested CPU threshold, this can help reduce cold-start
     * latency.
     *
     * Generated from protobuf field <code>bool startup_cpu_boost = 3;</code>
     * @return bool
     */
    public function getStartupCpuBoost()
    {
        return $this->startup_cpu_boost;
    }

    /**
     * Determines whether CPU should be boosted on startup of a new container
     * instance above the requested CPU threshold, this can help reduce cold-start
     * latency.
     *
     * Generated from protobuf field <code>bool startup_cpu_boost = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setStartupCpuBoost($var)
    {
        GPBUtil::checkBool($var);
        $this->startup_cpu_boost = $var;

        return $this;
    }

}

