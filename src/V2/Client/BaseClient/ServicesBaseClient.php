<?php
/*
 * Copyright 2023 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/run/v2/service.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Run\V2\Client\BaseClient;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\LongRunning\OperationsClient;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Iam\V1\GetIamPolicyRequest;
use Google\Cloud\Iam\V1\Policy;
use Google\Cloud\Iam\V1\SetIamPolicyRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsResponse;
use Google\Cloud\Run\V2\CreateServiceRequest;
use Google\Cloud\Run\V2\DeleteServiceRequest;
use Google\Cloud\Run\V2\GetServiceRequest;
use Google\Cloud\Run\V2\ListServicesRequest;
use Google\Cloud\Run\V2\Service;
use Google\Cloud\Run\V2\UpdateServiceRequest;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: Cloud Run Service Control Plane API
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * This class is currently experimental and may be subject to changes. See {@see
 * \Google\Cloud\Run\V2\ServicesClient} for the stable implementation
 *
 * @experimental
 *
 * @internal
 *
 * @method PromiseInterface createServiceAsync(CreateServiceRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteServiceAsync(DeleteServiceRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getIamPolicyAsync(GetIamPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getServiceAsync(GetServiceRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listServicesAsync(ListServicesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface setIamPolicyAsync(SetIamPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface testIamPermissionsAsync(TestIamPermissionsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface updateServiceAsync(UpdateServiceRequest $request, array $optionalArgs = [])
 */
abstract class ServicesBaseClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.run.v2.Services';

    /** The default address of the service. */
    private const SERVICE_ADDRESS = 'run.googleapis.com';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../../resources/services_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../../resources/services_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../../resources/services_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../../resources/services_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Return an OperationsClient object with the same endpoint as $this.
     *
     * @return OperationsClient
     */
    public function getOperationsClient()
    {
        return $this->operationsClient;
    }

    /**
     * Resume an existing long running operation that was previously started by a long
     * running API method. If $methodName is not provided, or does not match a long
     * running API method, then the operation can still be resumed, but the
     * OperationResponse object will not deserialize the final response.
     *
     * @param string $operationName The name of the long running operation
     * @param string $methodName    The name of the method used to start the operation
     *
     * @return OperationResponse
     */
    public function resumeOperation($operationName, $methodName = null)
    {
        $options = isset($this->descriptors[$methodName]['longRunning']) ? $this->descriptors[$methodName]['longRunning'] : [];
        $operation = new OperationResponse($operationName, $this->getOperationsClient(), $options);
        $operation->reload();
        return $operation;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a connector
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $connector
     *
     * @return string The formatted connector resource.
     */
    public static function connectorName(string $project, string $location, string $connector): string
    {
        return self::getPathTemplate('connector')->render([
            'project' => $project,
            'location' => $location,
            'connector' => $connector,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a crypto_key
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $keyRing
     * @param string $cryptoKey
     *
     * @return string The formatted crypto_key resource.
     */
    public static function cryptoKeyName(string $project, string $location, string $keyRing, string $cryptoKey): string
    {
        return self::getPathTemplate('cryptoKey')->render([
            'project' => $project,
            'location' => $location,
            'key_ring' => $keyRing,
            'crypto_key' => $cryptoKey,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a location
     * resource.
     *
     * @param string $project
     * @param string $location
     *
     * @return string The formatted location resource.
     */
    public static function locationName(string $project, string $location): string
    {
        return self::getPathTemplate('location')->render([
            'project' => $project,
            'location' => $location,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a revision
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $service
     * @param string $revision
     *
     * @return string The formatted revision resource.
     */
    public static function revisionName(string $project, string $location, string $service, string $revision): string
    {
        return self::getPathTemplate('revision')->render([
            'project' => $project,
            'location' => $location,
            'service' => $service,
            'revision' => $revision,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a secret
     * resource.
     *
     * @param string $project
     * @param string $secret
     *
     * @return string The formatted secret resource.
     */
    public static function secretName(string $project, string $secret): string
    {
        return self::getPathTemplate('secret')->render([
            'project' => $project,
            'secret' => $secret,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * secret_version resource.
     *
     * @param string $project
     * @param string $secret
     * @param string $version
     *
     * @return string The formatted secret_version resource.
     */
    public static function secretVersionName(string $project, string $secret, string $version): string
    {
        return self::getPathTemplate('secretVersion')->render([
            'project' => $project,
            'secret' => $secret,
            'version' => $version,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a service
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $service
     *
     * @return string The formatted service resource.
     */
    public static function serviceName(string $project, string $location, string $service): string
    {
        return self::getPathTemplate('service')->render([
            'project' => $project,
            'location' => $location,
            'service' => $service,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - connector: projects/{project}/locations/{location}/connectors/{connector}
     * - cryptoKey: projects/{project}/locations/{location}/keyRings/{key_ring}/cryptoKeys/{crypto_key}
     * - location: projects/{project}/locations/{location}
     * - revision: projects/{project}/locations/{location}/services/{service}/revisions/{revision}
     * - secret: projects/{project}/secrets/{secret}
     * - secretVersion: projects/{project}/secrets/{secret}/versions/{version}
     * - service: projects/{project}/locations/{location}/services/{service}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName(string $formattedName, string $template = null): array
    {
        return self::parseFormattedName($formattedName, $template);
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'run.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
        $this->operationsClient = $this->createOperationsClient($clientOptions);
    }

    /** Handles execution of the async variants for each documented method. */
    public function __call($method, $args)
    {
        if (substr($method, -5) !== 'Async') {
            trigger_error('Call to undefined method ' . __CLASS__ . "::$method()", E_USER_ERROR);
        }

        array_unshift($args, substr($method, 0, -5));
        return call_user_func_array([$this, 'startAsyncCall'], $args);
    }

    /**
     * Creates a new Service in a given project and location.
     *
     * The async variant is {@see self::createServiceAsync()} .
     *
     * @example samples/V2/ServicesClient/create_service.php
     *
     * @param CreateServiceRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createService(CreateServiceRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('CreateService', $request, $callOptions)->wait();
    }

    /**
     * Deletes a Service.
     * This will cause the Service to stop serving traffic and will delete all
     * revisions.
     *
     * The async variant is {@see self::deleteServiceAsync()} .
     *
     * @example samples/V2/ServicesClient/delete_service.php
     *
     * @param DeleteServiceRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteService(DeleteServiceRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('DeleteService', $request, $callOptions)->wait();
    }

    /**
     * Gets the IAM Access Control policy currently in effect for the given
     * Cloud Run Service. This result does not include any inherited policies.
     *
     * The async variant is {@see self::getIamPolicyAsync()} .
     *
     * @example samples/V2/ServicesClient/get_iam_policy.php
     *
     * @param GetIamPolicyRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Policy
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getIamPolicy(GetIamPolicyRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('GetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Gets information about a Service.
     *
     * The async variant is {@see self::getServiceAsync()} .
     *
     * @example samples/V2/ServicesClient/get_service.php
     *
     * @param GetServiceRequest $request     A request to house fields associated with the call.
     * @param array             $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Service
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getService(GetServiceRequest $request, array $callOptions = []): Service
    {
        return $this->startApiCall('GetService', $request, $callOptions)->wait();
    }

    /**
     * Lists Services.
     *
     * The async variant is {@see self::listServicesAsync()} .
     *
     * @example samples/V2/ServicesClient/list_services.php
     *
     * @param ListServicesRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listServices(ListServicesRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListServices', $request, $callOptions);
    }

    /**
     * Sets the IAM Access control policy for the specified Service. Overwrites
     * any existing policy.
     *
     * The async variant is {@see self::setIamPolicyAsync()} .
     *
     * @example samples/V2/ServicesClient/set_iam_policy.php
     *
     * @param SetIamPolicyRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Policy
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function setIamPolicy(SetIamPolicyRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('SetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Returns permissions that a caller has on the specified Project.
     *
     * There are no permissions required for making this API call.
     *
     * The async variant is {@see self::testIamPermissionsAsync()} .
     *
     * @example samples/V2/ServicesClient/test_iam_permissions.php
     *
     * @param TestIamPermissionsRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return TestIamPermissionsResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function testIamPermissions(TestIamPermissionsRequest $request, array $callOptions = []): TestIamPermissionsResponse
    {
        return $this->startApiCall('TestIamPermissions', $request, $callOptions)->wait();
    }

    /**
     * Updates a Service.
     *
     * The async variant is {@see self::updateServiceAsync()} .
     *
     * @example samples/V2/ServicesClient/update_service.php
     *
     * @param UpdateServiceRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateService(UpdateServiceRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('UpdateService', $request, $callOptions)->wait();
    }
}
