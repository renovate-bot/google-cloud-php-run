<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/run/v2/vendor_settings.proto

namespace GPBMetadata\Google\Cloud\Run\V2;

class VendorSettings
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
)google/cloud/run/v2/vendor_settings.protogoogle.cloud.run.v2google/api/resource.proto"�
	VpcAccess:
	connector (	B\'�A$
"vpcaccess.googleapis.com/Connector=
egress (2(.google.cloud.run.v2.VpcAccess.VpcEgressB�AP
network_interfaces (2/.google.cloud.run.v2.VpcAccess.NetworkInterfaceB�AT
NetworkInterface
network (	B�A

subnetwork (	B�A
tags (	B�A"Q
	VpcEgress
VPC_EGRESS_UNSPECIFIED 
ALL_TRAFFIC
PRIVATE_RANGES_ONLY"�
BinaryAuthorization
use_default (B�AH C
policy (	B1�A�A+
)binaryauthorization.googleapis.com/PolicyH %
breakglass_justification (	B�AB
binauthz_method"S
RevisionScaling
min_instance_count (B�A
max_instance_count (B�A"E
ServiceMesh6
mesh (	B(�A%
#networkservices.googleapis.com/Mesh"�
ServiceScaling
min_instance_count (B�AJ
scaling_mode (2/.google.cloud.run.v2.ServiceScaling.ScalingModeB�A\'
manual_instance_count (B�AH �"F
ScalingMode
SCALING_MODE_UNSPECIFIED 
	AUTOMATIC

MANUALB
_manual_instance_count"(
NodeSelector
accelerator (	B�A"�
BuildConfig5
name (	B\'�A�A!
cloudbuild.googleapis.com/Build
source_location (	
function_target (	B�A
	image_uri (	B�A

base_image (	B�A%
enable_automatic_updates (B�AA
worker_pool (	B,�A�A&
$cloudbuild.googleapis.com/WorkerPool^
environment_variables (2:.google.cloud.run.v2.BuildConfig.EnvironmentVariablesEntryB�A
service_account	 (	B�A;
EnvironmentVariablesEntry
key (	
value (	:8*�
IngressTraffic
INGRESS_TRAFFIC_UNSPECIFIED 
INGRESS_TRAFFIC_ALL!
INGRESS_TRAFFIC_INTERNAL_ONLY*
&INGRESS_TRAFFIC_INTERNAL_LOAD_BALANCER
INGRESS_TRAFFIC_NONE*}
ExecutionEnvironment%
!EXECUTION_ENVIRONMENT_UNSPECIFIED 
EXECUTION_ENVIRONMENT_GEN1
EXECUTION_ENVIRONMENT_GEN2*p
EncryptionKeyRevocationAction0
,ENCRYPTION_KEY_REVOCATION_ACTION_UNSPECIFIED 
PREVENT_NEW
SHUTDOWNB�
com.google.cloud.run.v2BVendorSettingsProtoPZ)cloud.google.com/go/run/apiv2/runpb;runpb�Ac
)binaryauthorization.googleapis.com/Policyprojects/{project}/policylocations/{location}/policy�A\\
#networkservices.googleapis.com/Mesh5projects/{project}/locations/{location}/meshes/{mesh}�AY
cloudbuild.googleapis.com/Build6projects/{project}/locations/{location}/builds/{build}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

