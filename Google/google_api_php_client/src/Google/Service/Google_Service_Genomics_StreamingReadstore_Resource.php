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
 * The "streamingReadstore" collection of methods.
 * Typical usage is:
 *  <code>
 *   $genomicsService = new Google_Service_Genomics(...);
 *   $streamingReadstore = $genomicsService->streamingReadstore;
 *  </code>
 */
class Google_Service_Genomics_StreamingReadstore_Resource extends Google_Service_Resource
{

    /**
     * Gets a stream of reads for one or more read group sets. Reads search operates
     * over a genomic coordinate space of reference sequence & position defined over
     * the reference sequences to which the requested read group sets are aligned.
     *
     * If a target positional range is specified, all reads whose alignment to the
     * reference genome overlap the range are returned.
     *
     * All reads returned are ordered by genomic coordinate (reference sequence &
     * position). Reads with equivalent genomic coordinates are returned in a
     * deterministic order. (streamingReadstore.streamreads)
     *
     * @param Google_StreamReadsRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Genomics_StreamReadsResponse
     */
    public function streamreads(Google_Service_Genomics_StreamReadsRequest $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('streamreads', array($params), "Google_Service_Genomics_StreamReadsResponse");
    }
}
