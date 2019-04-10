<?php
namespace MauticPlugin\MauticGSBundle\Google\google_api_php_client\src\Google\Service;
    /*
     * Copyright 2010 Google Inc.
     *
     * Licensed under the Apache License, Version 2.0 (the "License"); you may not
     * use this file except in compliance with the License. You may obtain a copy of
     * the License at
     *
     * http://www.apache.org/licenses/LICENSE-2.0
     *
     * Unless required by applicable law or agreed to in writing, software
     * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
     * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
     * License for the specific language governing permissions and limitations under
     * the License.
     */


/**
 * The "columns" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Google_Service_Analytics(...);
 *   $columns = $analyticsService->columns;
 *  </code>
 */
class Google_Service_Analytics_MetadataColumns_Resource extends Google_Service_Resource
{

    /**
     * Lists all columns for a report type (columns.listMetadataColumns)
     *
     * @param string $reportType Report type. Allowed Values: 'ga'. Where 'ga'
     * corresponds to the Core Reporting API
     * @param array $optParams Optional parameters.
     * @return Google_Service_Analytics_Columns
     */
    public function listMetadataColumns($reportType, $optParams = array())
    {
        $params = array('reportType' => $reportType);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Analytics_Columns");
    }
}