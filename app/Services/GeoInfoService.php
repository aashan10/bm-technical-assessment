<?php

namespace BM\Services;

class GeoInfoService
{

    const API_URL = 'http://ftp.geoinfo.msl.mt.gov/Documents/Metadata/GIS_Inventory/35524afc-669b-4614-9f44-43506ae21a1d.xml';

    public function getData()
    {

        $xml = file_get_contents(self::API_URL);
        $xml = simplexml_load_string($xml);
        return json_encode($xml, JSON_PRETTY_PRINT);
    }

}