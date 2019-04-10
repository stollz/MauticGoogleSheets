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

class Google_Service_Books_VolumeSaleInfoOffers extends Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $finskyOfferType;
    protected $listPriceType = 'Google_Service_Books_VolumeSaleInfoOffersListPrice';
    protected $listPriceDataType = '';
    protected $rentalDurationType = 'Google_Service_Books_VolumeSaleInfoOffersRentalDuration';
    protected $rentalDurationDataType = '';
    protected $retailPriceType = 'Google_Service_Books_VolumeSaleInfoOffersRetailPrice';
    protected $retailPriceDataType = '';


    public function setFinskyOfferType($finskyOfferType)
    {
        $this->finskyOfferType = $finskyOfferType;
    }
    public function getFinskyOfferType()
    {
        return $this->finskyOfferType;
    }
    public function setListPrice(Google_Service_Books_VolumeSaleInfoOffersListPrice $listPrice)
    {
        $this->listPrice = $listPrice;
    }
    public function getListPrice()
    {
        return $this->listPrice;
    }
    public function setRentalDuration(Google_Service_Books_VolumeSaleInfoOffersRentalDuration $rentalDuration)
    {
        $this->rentalDuration = $rentalDuration;
    }
    public function getRentalDuration()
    {
        return $this->rentalDuration;
    }
    public function setRetailPrice(Google_Service_Books_VolumeSaleInfoOffersRetailPrice $retailPrice)
    {
        $this->retailPrice = $retailPrice;
    }
    public function getRetailPrice()
    {
        return $this->retailPrice;
    }
}
