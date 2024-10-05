<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/run/v2/service.proto

namespace GPBMetadata\Google\Cloud\Run\V2;

class Service
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\LaunchStage::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\Routing::initOnce();
        \GPBMetadata\Google\Cloud\Run\V2\Condition::initOnce();
        \GPBMetadata\Google\Cloud\Run\V2\RevisionTemplate::initOnce();
        \GPBMetadata\Google\Cloud\Run\V2\TrafficTarget::initOnce();
        \GPBMetadata\Google\Cloud\Run\V2\VendorSettings::initOnce();
        \GPBMetadata\Google\Iam\V1\IamPolicy::initOnce();
        \GPBMetadata\Google\Iam\V1\Policy::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�%
!google/cloud/run/v2/service.protogoogle.cloud.run.v2google/api/client.protogoogle/api/field_behavior.protogoogle/api/launch_stage.protogoogle/api/resource.protogoogle/api/routing.proto#google/cloud/run/v2/condition.proto+google/cloud/run/v2/revision_template.proto(google/cloud/run/v2/traffic_target.proto)google/cloud/run/v2/vendor_settings.protogoogle/iam/v1/iam_policy.protogoogle/iam/v1/policy.proto#google/longrunning/operations.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�
CreateServiceRequest2
parent (	B"�A�Arun.googleapis.com/Service2
service (2.google.cloud.run.v2.ServiceB�A

service_id (	B�A
validate_only ("�
UpdateServiceRequest4
update_mask (2.google.protobuf.FieldMaskB�A2
service (2.google.cloud.run.v2.ServiceB�A
validate_only (
allow_missing (B�A"�
ListServicesRequest2
parent (	B"�A�Arun.googleapis.com/Service
	page_size (

page_token (	
show_deleted ("_
ListServicesResponse.
services (2.google.cloud.run.v2.Service
next_page_token (	"E
GetServiceRequest0
name (	B"�A�A
run.googleapis.com/Service"m
DeleteServiceRequest0
name (	B"�A�A
run.googleapis.com/Service
validate_only (
etag (	"�
Service
name (	
description (	
uid (	B�A

generation (B�A=
labels (2(.google.cloud.run.v2.Service.LabelsEntryB�AG
annotations (2-.google.cloud.run.v2.Service.AnnotationsEntryB�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A4
delete_time	 (2.google.protobuf.TimestampB�A4
expire_time
 (2.google.protobuf.TimestampB�A
creator (	B�A
last_modifier (	B�A
client (	
client_version (	9
ingress (2#.google.cloud.run.v2.IngressTrafficB�A2
launch_stage (2.google.api.LaunchStageB�AK
binary_authorization (2(.google.cloud.run.v2.BinaryAuthorizationB�A<
template (2%.google.cloud.run.v2.RevisionTemplateB�A8
traffic (2".google.cloud.run.v2.TrafficTargetB�A9
scaling (2#.google.cloud.run.v2.ServiceScalingB�A!
invoker_iam_disabled (B�A!
default_uri_disabled (B�A
urls (	B�A
custom_audiences% (	 
observed_generation (B�A?
terminal_condition (2.google.cloud.run.v2.ConditionB�A7

conditions  (2.google.cloud.run.v2.ConditionB�AB
latest_ready_revision! (	B#�A�A
run.googleapis.com/RevisionD
latest_created_revision" (	B#�A�A
run.googleapis.com/RevisionG
traffic_statuses# (2(.google.cloud.run.v2.TrafficTargetStatusB�A
uri$ (	B�A
satisfies_pzs& (B�A
reconcilingb (B�A
etagc (	B�A-
LabelsEntry
key (	
value (	:82
AnnotationsEntry
key (	
value (	:8:^�A[
run.googleapis.com/Service:projects/{project}/locations/{location}/services/{service}R2�
Services�
CreateService).google.cloud.run.v2.CreateServiceRequest.google.longrunning.Operation"��A
ServiceService�Aparent,service,service_id���7",/v2/{parent=projects/*/locations/*}/services:service���-+
parent!projects/*/locations/{location=*}�

GetService&.google.cloud.run.v2.GetServiceRequest.google.cloud.run.v2.Service"o�Aname���.,/v2/{name=projects/*/locations/*/services/*}���.,
name$projects/*/locations/{location=*}/**�
ListServices(.google.cloud.run.v2.ListServicesRequest).google.cloud.run.v2.ListServicesResponse"p�Aparent���.,/v2/{parent=projects/*/locations/*}/services���-+
parent!projects/*/locations/{location=*}�
UpdateService).google.cloud.run.v2.UpdateServiceRequest.google.longrunning.Operation"��A
ServiceService�Aservice�Aservice,update_mask���?24/v2/{service.name=projects/*/locations/*/services/*}:service���64
service.name$projects/*/locations/{location=*}/**�
DeleteService).google.cloud.run.v2.DeleteServiceRequest.google.longrunning.Operation"��A
ServiceService�Aname���.*,/v2/{name=projects/*/locations/*/services/*}���.,
name$projects/*/locations/{location=*}/**�
GetIamPolicy".google.iam.v1.GetIamPolicyRequest.google.iam.v1.Policy"E���?=/v2/{resource=projects/*/locations/*/services/*}:getIamPolicy�
SetIamPolicy".google.iam.v1.SetIamPolicyRequest.google.iam.v1.Policy"H���B"=/v2/{resource=projects/*/locations/*/services/*}:setIamPolicy:*�
TestIamPermissions(.google.iam.v1.TestIamPermissionsRequest).google.iam.v1.TestIamPermissionsResponse"N���H"C/v2/{resource=projects/*/locations/*/services/*}:testIamPermissions:*F�Arun.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformBT
com.google.cloud.run.v2BServiceProtoPZ)cloud.google.com/go/run/apiv2/runpb;runpbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

