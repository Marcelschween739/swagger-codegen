<?php

namespace Swagger\Client;

use Http\Adapter\Guzzle6\Client;
use Swagger\Client\Api\UserApi;

class UserApiTest extends \PHPUnit_Framework_TestCase
{

    /** @var UserApi*/
    private $api;

    public static function setUpBeforeClass()
    {
        // for error reporting (need to run with php5.3 to get no warning)
        //ini_set('display_errors', 1);
        //error_reporting(~0);
    }

    public function setUp()
    {
        $this->api = new Api\UserApi(
            Client::createWithConfig([
                'base_uri' => 'http://petstore.swagger.io/v2/'
            ])
        );
    }

    // test login user
    public function testLoginUser()
    {
        // initialize the API client
        // login
        $response = $this->api->loginUser("xxxxx", "yyyyyyyy");
        
        $this->assertInternalType("string", $response);
        $this->assertRegExp(
            "/^logged in user session/",
            $response,
            "response string starts with 'logged in user session'"
        );

    }
}
