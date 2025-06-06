<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/run/v2/execution_template.proto

namespace Google\Cloud\Run\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ExecutionTemplate describes the data an execution should have when created
 * from a template.
 *
 * Generated from protobuf message <code>google.cloud.run.v2.ExecutionTemplate</code>
 */
class ExecutionTemplate extends \Google\Protobuf\Internal\Message
{
    /**
     * Unstructured key value map that can be used to organize and categorize
     * objects.
     * User-provided labels are shared with Google's billing system, so they can
     * be used to filter, or break down billing charges by team, component,
     * environment, state, etc. For more information, visit
     * https://cloud.google.com/resource-manager/docs/creating-managing-labels or
     * https://cloud.google.com/run/docs/configuring/labels.
     * <p>Cloud Run API v2 does not support labels with `run.googleapis.com`,
     * `cloud.googleapis.com`, `serving.knative.dev`, or `autoscaling.knative.dev`
     * namespaces, and they will be rejected. All system labels in v1 now have a
     * corresponding field in v2 ExecutionTemplate.
     *
     * Generated from protobuf field <code>map<string, string> labels = 1;</code>
     */
    private $labels;
    /**
     * Unstructured key value map that may be set by external tools to store and
     * arbitrary metadata. They are not queryable and should be preserved
     * when modifying objects.
     * <p>Cloud Run API v2 does not support annotations with `run.googleapis.com`,
     * `cloud.googleapis.com`, `serving.knative.dev`, or `autoscaling.knative.dev`
     * namespaces, and they will be rejected. All system annotations in v1 now
     * have a corresponding field in v2 ExecutionTemplate.
     * <p>This field follows Kubernetes annotations' namespacing, limits, and
     * rules.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 2;</code>
     */
    private $annotations;
    /**
     * Optional. Specifies the maximum desired number of tasks the execution
     * should run at given time. When the job is run, if this field is 0 or unset,
     * the maximum possible value will be used for that execution. The actual
     * number of tasks running in steady state will be less than this number when
     * there are fewer tasks waiting to be completed remaining, i.e. when the work
     * left to do is less than max parallelism.
     *
     * Generated from protobuf field <code>int32 parallelism = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $parallelism = 0;
    /**
     * Specifies the desired number of tasks the execution should run.
     * Setting to 1 means that parallelism is limited to 1 and the success of
     * that task signals the success of the execution. Defaults to 1.
     *
     * Generated from protobuf field <code>int32 task_count = 4;</code>
     */
    protected $task_count = 0;
    /**
     * Required. Describes the task(s) that will be created when executing an
     * execution.
     *
     * Generated from protobuf field <code>.google.cloud.run.v2.TaskTemplate template = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $template = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Unstructured key value map that can be used to organize and categorize
     *           objects.
     *           User-provided labels are shared with Google's billing system, so they can
     *           be used to filter, or break down billing charges by team, component,
     *           environment, state, etc. For more information, visit
     *           https://cloud.google.com/resource-manager/docs/creating-managing-labels or
     *           https://cloud.google.com/run/docs/configuring/labels.
     *           <p>Cloud Run API v2 does not support labels with `run.googleapis.com`,
     *           `cloud.googleapis.com`, `serving.knative.dev`, or `autoscaling.knative.dev`
     *           namespaces, and they will be rejected. All system labels in v1 now have a
     *           corresponding field in v2 ExecutionTemplate.
     *     @type array|\Google\Protobuf\Internal\MapField $annotations
     *           Unstructured key value map that may be set by external tools to store and
     *           arbitrary metadata. They are not queryable and should be preserved
     *           when modifying objects.
     *           <p>Cloud Run API v2 does not support annotations with `run.googleapis.com`,
     *           `cloud.googleapis.com`, `serving.knative.dev`, or `autoscaling.knative.dev`
     *           namespaces, and they will be rejected. All system annotations in v1 now
     *           have a corresponding field in v2 ExecutionTemplate.
     *           <p>This field follows Kubernetes annotations' namespacing, limits, and
     *           rules.
     *     @type int $parallelism
     *           Optional. Specifies the maximum desired number of tasks the execution
     *           should run at given time. When the job is run, if this field is 0 or unset,
     *           the maximum possible value will be used for that execution. The actual
     *           number of tasks running in steady state will be less than this number when
     *           there are fewer tasks waiting to be completed remaining, i.e. when the work
     *           left to do is less than max parallelism.
     *     @type int $task_count
     *           Specifies the desired number of tasks the execution should run.
     *           Setting to 1 means that parallelism is limited to 1 and the success of
     *           that task signals the success of the execution. Defaults to 1.
     *     @type \Google\Cloud\Run\V2\TaskTemplate $template
     *           Required. Describes the task(s) that will be created when executing an
     *           execution.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Run\V2\ExecutionTemplate::initOnce();
        parent::__construct($data);
    }

    /**
     * Unstructured key value map that can be used to organize and categorize
     * objects.
     * User-provided labels are shared with Google's billing system, so they can
     * be used to filter, or break down billing charges by team, component,
     * environment, state, etc. For more information, visit
     * https://cloud.google.com/resource-manager/docs/creating-managing-labels or
     * https://cloud.google.com/run/docs/configuring/labels.
     * <p>Cloud Run API v2 does not support labels with `run.googleapis.com`,
     * `cloud.googleapis.com`, `serving.knative.dev`, or `autoscaling.knative.dev`
     * namespaces, and they will be rejected. All system labels in v1 now have a
     * corresponding field in v2 ExecutionTemplate.
     *
     * Generated from protobuf field <code>map<string, string> labels = 1;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Unstructured key value map that can be used to organize and categorize
     * objects.
     * User-provided labels are shared with Google's billing system, so they can
     * be used to filter, or break down billing charges by team, component,
     * environment, state, etc. For more information, visit
     * https://cloud.google.com/resource-manager/docs/creating-managing-labels or
     * https://cloud.google.com/run/docs/configuring/labels.
     * <p>Cloud Run API v2 does not support labels with `run.googleapis.com`,
     * `cloud.googleapis.com`, `serving.knative.dev`, or `autoscaling.knative.dev`
     * namespaces, and they will be rejected. All system labels in v1 now have a
     * corresponding field in v2 ExecutionTemplate.
     *
     * Generated from protobuf field <code>map<string, string> labels = 1;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Unstructured key value map that may be set by external tools to store and
     * arbitrary metadata. They are not queryable and should be preserved
     * when modifying objects.
     * <p>Cloud Run API v2 does not support annotations with `run.googleapis.com`,
     * `cloud.googleapis.com`, `serving.knative.dev`, or `autoscaling.knative.dev`
     * namespaces, and they will be rejected. All system annotations in v1 now
     * have a corresponding field in v2 ExecutionTemplate.
     * <p>This field follows Kubernetes annotations' namespacing, limits, and
     * rules.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAnnotations()
    {
        return $this->annotations;
    }

    /**
     * Unstructured key value map that may be set by external tools to store and
     * arbitrary metadata. They are not queryable and should be preserved
     * when modifying objects.
     * <p>Cloud Run API v2 does not support annotations with `run.googleapis.com`,
     * `cloud.googleapis.com`, `serving.knative.dev`, or `autoscaling.knative.dev`
     * namespaces, and they will be rejected. All system annotations in v1 now
     * have a corresponding field in v2 ExecutionTemplate.
     * <p>This field follows Kubernetes annotations' namespacing, limits, and
     * rules.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 2;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAnnotations($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->annotations = $arr;

        return $this;
    }

    /**
     * Optional. Specifies the maximum desired number of tasks the execution
     * should run at given time. When the job is run, if this field is 0 or unset,
     * the maximum possible value will be used for that execution. The actual
     * number of tasks running in steady state will be less than this number when
     * there are fewer tasks waiting to be completed remaining, i.e. when the work
     * left to do is less than max parallelism.
     *
     * Generated from protobuf field <code>int32 parallelism = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getParallelism()
    {
        return $this->parallelism;
    }

    /**
     * Optional. Specifies the maximum desired number of tasks the execution
     * should run at given time. When the job is run, if this field is 0 or unset,
     * the maximum possible value will be used for that execution. The actual
     * number of tasks running in steady state will be less than this number when
     * there are fewer tasks waiting to be completed remaining, i.e. when the work
     * left to do is less than max parallelism.
     *
     * Generated from protobuf field <code>int32 parallelism = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setParallelism($var)
    {
        GPBUtil::checkInt32($var);
        $this->parallelism = $var;

        return $this;
    }

    /**
     * Specifies the desired number of tasks the execution should run.
     * Setting to 1 means that parallelism is limited to 1 and the success of
     * that task signals the success of the execution. Defaults to 1.
     *
     * Generated from protobuf field <code>int32 task_count = 4;</code>
     * @return int
     */
    public function getTaskCount()
    {
        return $this->task_count;
    }

    /**
     * Specifies the desired number of tasks the execution should run.
     * Setting to 1 means that parallelism is limited to 1 and the success of
     * that task signals the success of the execution. Defaults to 1.
     *
     * Generated from protobuf field <code>int32 task_count = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setTaskCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->task_count = $var;

        return $this;
    }

    /**
     * Required. Describes the task(s) that will be created when executing an
     * execution.
     *
     * Generated from protobuf field <code>.google.cloud.run.v2.TaskTemplate template = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Run\V2\TaskTemplate|null
     */
    public function getTemplate()
    {
        return $this->template;
    }

    public function hasTemplate()
    {
        return isset($this->template);
    }

    public function clearTemplate()
    {
        unset($this->template);
    }

    /**
     * Required. Describes the task(s) that will be created when executing an
     * execution.
     *
     * Generated from protobuf field <code>.google.cloud.run.v2.TaskTemplate template = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Run\V2\TaskTemplate $var
     * @return $this
     */
    public function setTemplate($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Run\V2\TaskTemplate::class);
        $this->template = $var;

        return $this;
    }

}

