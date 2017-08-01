<?php 

namespace VoIPInnovations\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static object assignIntlDID($cityID = null, $epgID = null)
 * @method static object getCNAMDisplay($tn = null)
 * @method static object getCountries()
 * @method static object getFaxToEmail($tn = null)
 * @method static object releaseIntlDID($tn = null)
 * @method static object removeCNAM($tn = null)
 * @method static object removeFaxToEmail($tn = null)
 * @method static object setFaxToEmail($tn = null, $email = null)
 * @method static object updateCNAMDisplay($tn = null, $name = null)
 * @method static object addLocation($did = null, $address1 = null, $address2 = null, $city = null, $state = null, $zip = null, $plusFour = null, $callerName = null)
 * @method static object assignDID($didParams = null)
 * @method static object audit911()
 * @method static object auditDIDs()
 * @method static object configDID($didParams = null)
 * @method static object getDIDCount($state = null, $lata = null, $rateCenter = null, $npa = null, $nxx = null, $tier = null, $t38 = null, $cnam = null, $orderby = null)
 * @method static object getDIDs($state = null, $lata = null, $rateCenter = null, $npa = null, $nxx = null, $tier = null, $t38 = null, $cnam = null)
 * @method static object getLocations($did = null)
 * @method static object getPortDetails($portId = null)
 * @method static object getProvisioningHistory($did = null)
 * @method static object insert911($did = null, $address1 = null, $address2 = null, $city = null, $state = null, $zip = null, $plusFour = null, $callerName = null)
 * @method static object isPortable($tn = null)
 * @method static object provisionLocation($did = null, $locationId = null)
 * @method static object query911($did = null)
 * @method static object queryDID($did = null)
 * @method static object releaseDID($didParams = null)
 * @method static object remove911($did = null)
 * @method static object removeLocation($locationId = null, $did = null)
 * @method static object reserveDID($didParams = null)
 * @method static object update911($did = null, $address1 = null, $address2 = null, $city = null, $state = null, $zip = null, $plusFour = null, $callerName = null)
 * @method static object validate911($address1 = null, $address2 = null, $city = null, $state = null, $zip = null, $plusFour = null, $callerName = null)
 *
 * @see \VoIPInnovations\VoIPInnovations
 * @see \VoIPInnovations\VoIPInnovationsCore
 * @see \VoIPInnovations\Facades\VoIPInnovations
 */
class VoIPInnovations extends Facade {

	/**
	 * Get the registered name of the component
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'voipinnovations'; }
}