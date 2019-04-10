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

class Google_Service_SQLAdmin_Settings extends Google_Collection
{
    protected $collection_key = 'databaseFlags';
    protected $internal_gapi_mappings = array(
    );
    public $activationPolicy;
    public $authorizedGaeApplications;
    protected $backupConfigurationType = 'Google_Service_SQLAdmin_BackupConfiguration';
    protected $backupConfigurationDataType = '';
    public $crashSafeReplicationEnabled;
    protected $databaseFlagsType = 'Google_Service_SQLAdmin_DatabaseFlags';
    protected $databaseFlagsDataType = 'array';
    public $databaseReplicationEnabled;
    protected $ipConfigurationType = 'Google_Service_SQLAdmin_IpConfiguration';
    protected $ipConfigurationDataType = '';
    public $kind;
    protected $locationPreferenceType = 'Google_Service_SQLAdmin_LocationPreference';
    protected $locationPreferenceDataType = '';
    public $pricingPlan;
    public $replicationType;
    public $settingsVersion;
    public $tier;


    public function setActivationPolicy($activationPolicy)
    {
        $this->activationPolicy = $activationPolicy;
    }
    public function getActivationPolicy()
    {
        return $this->activationPolicy;
    }
    public function setAuthorizedGaeApplications($authorizedGaeApplications)
    {
        $this->authorizedGaeApplications = $authorizedGaeApplications;
    }
    public function getAuthorizedGaeApplications()
    {
        return $this->authorizedGaeApplications;
    }
    public function setBackupConfiguration(Google_Service_SQLAdmin_BackupConfiguration $backupConfiguration)
    {
        $this->backupConfiguration = $backupConfiguration;
    }
    public function getBackupConfiguration()
    {
        return $this->backupConfiguration;
    }
    public function setCrashSafeReplicationEnabled($crashSafeReplicationEnabled)
    {
        $this->crashSafeReplicationEnabled = $crashSafeReplicationEnabled;
    }
    public function getCrashSafeReplicationEnabled()
    {
        return $this->crashSafeReplicationEnabled;
    }
    public function setDatabaseFlags($databaseFlags)
    {
        $this->databaseFlags = $databaseFlags;
    }
    public function getDatabaseFlags()
    {
        return $this->databaseFlags;
    }
    public function setDatabaseReplicationEnabled($databaseReplicationEnabled)
    {
        $this->databaseReplicationEnabled = $databaseReplicationEnabled;
    }
    public function getDatabaseReplicationEnabled()
    {
        return $this->databaseReplicationEnabled;
    }
    public function setIpConfiguration(Google_Service_SQLAdmin_IpConfiguration $ipConfiguration)
    {
        $this->ipConfiguration = $ipConfiguration;
    }
    public function getIpConfiguration()
    {
        return $this->ipConfiguration;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setLocationPreference(Google_Service_SQLAdmin_LocationPreference $locationPreference)
    {
        $this->locationPreference = $locationPreference;
    }
    public function getLocationPreference()
    {
        return $this->locationPreference;
    }
    public function setPricingPlan($pricingPlan)
    {
        $this->pricingPlan = $pricingPlan;
    }
    public function getPricingPlan()
    {
        return $this->pricingPlan;
    }
    public function setReplicationType($replicationType)
    {
        $this->replicationType = $replicationType;
    }
    public function getReplicationType()
    {
        return $this->replicationType;
    }
    public function setSettingsVersion($settingsVersion)
    {
        $this->settingsVersion = $settingsVersion;
    }
    public function getSettingsVersion()
    {
        return $this->settingsVersion;
    }
    public function setTier($tier)
    {
        $this->tier = $tier;
    }
    public function getTier()
    {
        return $this->tier;
    }
}