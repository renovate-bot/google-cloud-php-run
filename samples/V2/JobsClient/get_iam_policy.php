<?php
/*
 * Copyright 2022 Google LLC
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
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START run_v2_generated_Jobs_GetIamPolicy_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\Iam\V1\Policy;
use Google\Cloud\Run\V2\JobsClient;

/**
 * Gets the IAM Access Control policy currently in effect for the given Job.
 * This result does not include any inherited policies.
 *
 * @param string $resource REQUIRED: The resource for which the policy is being requested.
 *                         See the operation documentation for the appropriate value for this field.
 */
function get_iam_policy_sample(string $resource): void
{
    // Create a client.
    $jobsClient = new JobsClient();

    // Call the API and handle any network failures.
    try {
        /** @var Policy $response */
        $response = $jobsClient->getIamPolicy($resource);
        printf('Response data: %s' . PHP_EOL, $response->serializeToJsonString());
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $resource = '[RESOURCE]';

    get_iam_policy_sample($resource);
}
// [END run_v2_generated_Jobs_GetIamPolicy_sync]