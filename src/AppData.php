<?php
/**
 * Inställningar för olika app-varianter från Swedbank.
 *
 * @package Projectnamn
 * @author walle
 * Date: 2014-05-13
 * Time: 21:40
 */
namespace SwedbankJson;

/**
 * Class appdata
 */
class AppData
{
    private static $appData = array(
        'swedbank'              => array('appID' => 'HithYAGrzi8fu73j', 'useragent' => 'SwedbankMOBPrivateIOS/3.9.0_(iOS;_8.0.2)_Apple/iPhone5,2'),
        'sparbanken'            => array('appID' => '9iZSu74jfDFaTdPd', 'useragent' => 'SavingbankMOBPrivateIOS/3.9.0_(iOS;_8.0.2)_Apple/iPhone5,2'),
        'swedbank_ung'          => array('appID' => 'IV4Wrt2VZtyYjfpW', 'useragent' => 'SwedbankMOBYouthIOS/1.6.0_(iOS;_8.0.2)_Apple/iPhone5,2'),
        'sparbanken_ung'        => array('appID' => 'BrGkZQR89rEbFwnj', 'useragent' => 'SavingbankMOBYouthIOS/1.6.0_(iOS;_8.0.2)_Apple/iPhone5,2'),
        'swedbank_foretag'      => array('appID' => 'v0RVbFGKMXz7U4Eb', 'useragent' => 'SwedbankMOBCorporateIOS/1.5.0_(iOS;_8.0.2)_Apple/iPhone5,2'),
        'sparbanken_foretag'    => array('appID' => 'JPf1VxiskNdFSclr', 'useragent' => 'SavingbankMOBCorporateIOS/1.5.0_(iOS;_8.0.2)_Apple/iPhone5,2'),
    );

    public static function bankAppId($bankID)
    {
        if($bankID == 'swedbank_företag')
            throw new UserException('Bankid "swedbank_företag" är inte längre giltigt. Använd "swedbank_foretag"',1);
        elseif(!array_key_exists($bankID, self::$appData))
            throw new UserException('BankID existerar inte, använd något av följande: '.implode(', ', array_keys(self::$appData)));

        return self::$appData[$bankID];
    }
}