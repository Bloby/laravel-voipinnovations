<?php

namespace VoIPInnovations;

class VoIPInnovations extends VoIPInnovationsCore {
    
    /**
     * Instantiate a new instance
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param int $cityID
     * @param int $epgID
     * @return object
     *
     * @see http://dev.voipinnovations.com/VOIP/Services/APIService.asmx?op=AssignIntlDID
     */
    public function assignIntlDID($cityID = null, $epgID = null)
    {
        return $this->client->AssignIntlDID($this->addDefaultParams(compact(['cityID','epgID'])));
    }

    /**
     * @param string $tn
     * @return object
     *
     * @see http://dev.voipinnovations.com/VOIP/Services/APIService.asmx?op=GetCNAMDisplay
     */
    public function getCNAMDisplay($tn = null)
    {
        return $this->client->GetCNAMDisplay($this->addDefaultParams(compact(['tn'])));
    }

    /**
     * @return object
     *
     * @see http://dev.voipinnovations.com/VOIP/Services/APIService.asmx?op=GetCountries
     */
    public function getCountries()
    {
        return $this->client->GetCountries($this->addDefaultParams());
    }

    /**
     * @param string $tn
     * @return object
     *
     * @see http://dev.voipinnovations.com/VOIP/Services/APIService.asmx?op=GetFaxToEmail
     */
    public function getFaxToEmail($tn = null)
    {
        return $this->client->GetFaxToEmail($this->addDefaultParams(compact(['tn'])));
    }

    /**
     * @param string $tn
     * @return object
     *
     * @see http://dev.voipinnovations.com/VOIP/Services/APIService.asmx?op=ReleaseIntlDID
     */
    public function releaseIntlDID($tn = null)
    {
        return $this->client->ReleaseIntlDID($this->addDefaultParams(compact(['tn'])));
    }

    /**
     * @param string $tn
     * @return object
     *
     * @see http://dev.voipinnovations.com/VOIP/Services/APIService.asmx?op=RemoveCNAM
     */
    public function removeCNAM($tn = null)
    {
        return $this->client->RemoveCNAM($this->addDefaultParams(compact(['tn'])));
    }

    /**
     * @param string $tn
     * @return object
     *
     * @see http://dev.voipinnovations.com/VOIP/Services/APIService.asmx?op=RemoveFaxToEmail
     */
    public function removeFaxToEmail($tn = null)
    {
        return $this->client->RemoveFaxToEmail($this->addDefaultParams(compact(['tn'])));
    }

    /**
     * @param string $tn
     * @param string $email
     * @return object
     *
     * @see http://dev.voipinnovations.com/VOIP/Services/APIService.asmx?op=SetFaxToEmail
     */
    public function setFaxToEmail($tn = null, $email = null)
    {
        return $this->client->SetFaxToEmail($this->addDefaultParams(compact(['tn','email'])));
    }

    /**
     * @param string $tn
     * @param string $name
     * @return object
     *
     * @see http://dev.voipinnovations.com/VOIP/Services/APIService.asmx?op=UpdateCNAMDisplay
     */
    public function updateCNAMDisplay($tn = null, $name = null)
    {
        return $this->client->UpdateCNAMDisplay($this->addDefaultParams(compact(['tn','name'])));
    }

    /**
     * @param string $did
     * @param string $address1
     * @param string $address2
     * @param string $city
     * @param string $state
     * @param string $zip
     * @param string $plusFour
     * @param string $callerName
     * @return object
     *
     * @see http://dev.voipinnovations.com/VOIP/Services/APIService.asmx?op=addLocation
     */
    public function addLocation($did = null, $address1 = null, $address2 = null, $city = null, $state = null, $zip = null, $plusFour = null, $callerName = null)
    {
        return $this->client->addLocation($this->addDefaultParams(compact([
            'did','address1','address2','city','state','zip','plusFour','callerName'
        ])));
    }

    /**
     * @param array $didParams [
     * +<DIDParam>
     * 	+<tn>string</tn>
     * 	+<cnam>string</cnam>
     * 	+<refId>string</refId>
     * 	+<epg>int</epg>
     * +</DIDParam>
     * +<DIDParam>
     * 	+<tn>string</tn>
     * 	+<cnam>string</cnam>
     * 	+<refId>string</refId>
     * 	+<epg>int</epg>
     * +</DIDParam>
     * ]
     * @return object
     *
     * @see http://dev.voipinnovations.com/VOIP/Services/APIService.asmx?op=assignDID
     */
    public function assignDID($didParams = null)
    {
        return $this->client->assignDID($this->addDefaultParams(compact(['didParams'])));
    }

    /**
     * @return object
     *
     * @see http://dev.voipinnovations.com/VOIP/Services/APIService.asmx?op=audit911
     */
    public function audit911()
    {
        return $this->client->audit911($this->addDefaultParams());
    }

    /**
     * @return object
     *
     * @see http://dev.voipinnovations.com/VOIP/Services/APIService.asmx?op=auditDIDs
     */
    public function auditDIDs()
    {
        return $this->client->auditDIDs($this->addDefaultParams());
    }

    /**
     * @param array $didParams [
     * +<DIDParam>
     * 	+<tn>string</tn>
     * 	+<cnam>string</cnam>
     * 	+<refId>string</refId>
     * 	+<epg>int</epg>
     * +</DIDParam>
     * +<DIDParam>
     * 	+<tn>string</tn>
     * 	+<cnam>string</cnam>
     * 	+<refId>string</refId>
     * 	+<epg>int</epg>
     * +</DIDParam>
     * ]
     * @return object
     *
     * @see http://dev.voipinnovations.com/VOIP/Services/APIService.asmx?op=configDID
     */
    public function configDID($didParams = null)
    {
        return $this->client->configDID($this->addDefaultParams(compact(['didParams'])));
    }

    /**
     * @param string $state
     * @param string $lata
     * @param string $rateCenter
     * @param string $npa
     * @param string $nxx
     * @param string $tier
     * @param string $t38
     * @param string $cnam
     * @param string $orderby
     * @return object
     *
     * @see http://dev.voipinnovations.com/VOIP/Services/APIService.asmx?op=getDIDCount
     */
    public function getDIDCount($state = null, $lata = null, $rateCenter = null, $npa = null, $nxx = null, $tier = null, $t38 = null, $cnam = null, $orderby = null)
    {
        return $this->client->getDIDCount($this->addDefaultParams(compact([
            'state','lata','rateCenter','npa','nxx','tier','t38','cnam','orderby'
        ])));
    }

    /**
     * @param string $state
     * @param string $lata
     * @param string $rateCenter
     * @param string $npa
     * @param string $nxx
     * @param string $tier
     * @param string $t38
     * @param string $cnam
     * @return object
     *
     * @see http://dev.voipinnovations.com/VOIP/Services/APIService.asmx?op=getDIDs
     */
    public function getDIDs($state = null, $lata = null, $rateCenter = null, $npa = null, $nxx = null, $tier = null, $t38 = null, $cnam = null)
    {
        return $this->client->getDIDs($this->addDefaultParams(compact([
            'state','lata','rateCenter','npa','nxx','tier','t38','cnam'
        ])));
    }

    /**
     * @param string $did
     * @return object
     *
     * @see http://dev.voipinnovations.com/VOIP/Services/APIService.asmx?op=getLocations
     */
    public function getLocations($did = null)
    {
        return $this->client->getLocations($this->addDefaultParams(compact(['did'])));
    }

    /**
     * @param int $portId
     * @return object
     *
     * @see http://dev.voipinnovations.com/VOIP/Services/APIService.asmx?op=getPortDetails
     */
    public function getPortDetails($portId = null)
    {
        return $this->client->getPortDetails($this->addDefaultParams(compact(['portId'])));
    }

    /**
     * @param string $did
     * @return object
     *
     * @see http://dev.voipinnovations.com/VOIP/Services/APIService.asmx?op=getProvisioningHistory
     */
    public function getProvisioningHistory($did = null)
    {
        return $this->client->getProvisioningHistory($this->addDefaultParams(compact(['did'])));
    }

    /**
     * @param string $did
     * @param string $address1
     * @param string $address2
     * @param string $city
     * @param string $state
     * @param string $zip
     * @param string $plusFour
     * @param string $callerName
     * @return object
     *
     * @see http://dev.voipinnovations.com/VOIP/Services/APIService.asmx?op=insert911
     */
    public function insert911($did = null, $address1 = null, $address2 = null, $city = null, $state = null, $zip = null, $plusFour = null, $callerName = null)
    {
        return $this->client->insert911($this->addDefaultParams(compact([
            'did','address1','address2','city','state','zip','plusFour','callerName'
        ])));
    }

    /**
     * @param string $tn
     * @return object
     *
     * @see http://dev.voipinnovations.com/VOIP/Services/APIService.asmx?op=isPortable
     */
    public function isPortable($tn = null)
    {
        return $this->client->isPortable($this->addDefaultParams(compact(['tn'])));
    }

    /**
     * @param string $did
     * @param string $locationId
     * @return object
     *
     * @see http://dev.voipinnovations.com/VOIP/Services/APIService.asmx?op=provisionLocation
     */
    public function provisionLocation($did = null, $locationId = null)
    {
        return $this->client->provisionLocation($this->addDefaultParams(compact(['did','locationId'])));
    }

    /**
     * @param string $did
     * @return object
     *
     * @see http://dev.voipinnovations.com/VOIP/Services/APIService.asmx?op=query911
     */
    public function query911($did = null)
    {
        return $this->client->query911($this->addDefaultParams(compact(['did'])));
    }

    /**
     * @param string $did
     * @return object
     *
     * @see http://dev.voipinnovations.com/VOIP/Services/APIService.asmx?op=queryDID
     */
    public function queryDID($did = null)
    {
        return $this->client->queryDID($this->addDefaultParams(compact(['did'])));
    }

    /**
     * @param array $didParams [
     * +<DIDParam>
     * 	+<tn>string</tn>
     * 	+<cnam>string</cnam>
     * 	+<refId>string</refId>
     * 	+<epg>int</epg>
     * +</DIDParam>
     * +<DIDParam>
     * 	+<tn>string</tn>
     * 	+<cnam>string</cnam>
     * 	+<refId>string</refId>
     * 	+<epg>int</epg>
     * +</DIDParam>
     * ]
     * @return object
     *
     * @see http://dev.voipinnovations.com/VOIP/Services/APIService.asmx?op=releaseDID
     */
    public function releaseDID($didParams = null)
    {
        return $this->client->releaseDID($this->addDefaultParams(compact(['didParams'])));
    }

    /**
     * @param string $did
     * @return object
     *
     * @see http://dev.voipinnovations.com/VOIP/Services/APIService.asmx?op=remove911
     */
    public function remove911($did = null)
    {
        return $this->client->remove911($this->addDefaultParams(compact(['did'])));
    }

    /**
     * @param string $locationId
     * @param string $did
     * @return object
     *
     * @see http://dev.voipinnovations.com/VOIP/Services/APIService.asmx?op=removeLocation
     */
    public function removeLocation($locationId = null, $did = null)
    {
        return $this->client->removeLocation($this->addDefaultParams(compact(['locationId','did'])));
    }

    /**
     * @param array $didParams [
     * +<DIDParam>
     * 	+<tn>string</tn>
     * 	+<cnam>string</cnam>
     * 	+<refId>string</refId>
     * 	+<epg>int</epg>
     * +</DIDParam>
     * +<DIDParam>
     * 	+<tn>string</tn>
     * 	+<cnam>string</cnam>
     * 	+<refId>string</refId>
     * 	+<epg>int</epg>
     * +</DIDParam>
     * ]
     * @return object
     *
     * @see http://dev.voipinnovations.com/VOIP/Services/APIService.asmx?op=reserveDID
     */
    public function reserveDID($didParams = null)
    {
        return $this->client->reserveDID($this->addDefaultParams(compact(['didParams'])));
    }

    /**
     * @param string $did
     * @param string $address1
     * @param string $address2
     * @param string $city
     * @param string $state
     * @param string $zip
     * @param string $plusFour
     * @param string $callerName
     * @return object
     *
     * @see http://dev.voipinnovations.com/VOIP/Services/APIService.asmx?op=update911
     */
    public function update911($did = null, $address1 = null, $address2 = null, $city = null, $state = null, $zip = null, $plusFour = null, $callerName = null)
    {
        return $this->client->update911($this->addDefaultParams(compact([
            'did','address1','address2','city','state','zip','plusFour','callerName'
        ])));
    }

    /**
     * @param string $address1
     * @param string $address2
     * @param string $city
     * @param string $state
     * @param string $zip
     * @param string $plusFour
     * @param string $callerName
     * @return object
     *
     * @see http://dev.voipinnovations.com/VOIP/Services/APIService.asmx?op=validate911
     */
    public function validate911($address1 = null, $address2 = null, $city = null, $state = null, $zip = null, $plusFour = null, $callerName = null)
    {
        return $this->client->validate911($this->addDefaultParams(compact([
            'address1','address2','city','state','zip','plusFour','callerName'
        ])));
    }

}