<?php

namespace VoIPInnovations;

class VoIPInnovationsCore {
        
    /**
     * @var \SoapClient
     */
    protected $client;

    /**
     * @var string
     */
    protected $wsdl_url;

    /**
     * @var string
     */
    protected $login;

    /**
     * @var string
     */
    protected $secret;

    /**
     * Instantiate a new instance
     */
    public function __construct()
    {
        $this->wsdl_url = config('voipinnovations.url');
        $this->login    = config('voipinnovations.login');
        $this->secret   = config('voipinnovations.secret');

        $this->client = new \SoapClient($this->wsdl_url);
    }

    /**
     * @param array $params
     * @return array
     */
    public function addDefaultParams($params = [])
    {
        $params['login'] = $this->login;
        $params['secret'] = $this->secret;

        return array_filter($params, function($value, $key){return !is_null($value);});
    }

}