<?php

/**
 * SlimRouter
 *
 * PHP version 7.1
 *
 * @package todoist
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 */

/**
 * Todoist API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 * The version of the OpenAPI document: 0.5.0
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */
namespace todoist;

use Slim\Factory\AppFactory;
use Slim\Interfaces\RouteInterface;
use Psr\Container\ContainerInterface;
use InvalidArgumentException;
use Dyorg\TokenAuthentication;
use Dyorg\TokenAuthentication\TokenSearch;
use Psr\Http\Message\ServerRequestInterface;
use todoist\Middleware\JsonBodyParserMiddleware;
use todoist\Mock\OpenApiDataMocker;
use todoist\Mock\OpenApiDataMockerMiddleware;
use Exception;

/**
 * SlimRouter Class Doc Comment
 *
 * @package todoist
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 */
class SlimRouter
{

    /** @var App instance */
    private $slimApp;

    /** @var array[] list of all api operations */
    private $operations = [
        [
            'httpMethod' => 'POST',
            'basePathWithoutHost' => '',
            'path' => '/tasks',
            'apiPackage' => 'todoist\Api',
            'classname' => 'AbstractTaskApi',
            'userClassname' => 'TaskApi',
            'operationId' => 'createTask',
            'responses' => [
                'default' => [
                    'code' => 200,
                    'message' => 'Successful operation',
                    'jsonSchema' => '{
  "description" : "Successful operation",
  "content" : {
    "application/json" : {
      "schema" : {
        "$ref" : "#/components/schemas/Task"
      }
    }
  }
}',
                ],
                '500' => [
                    'code' => 500,
                    'message' => 'Error',
                    'jsonSchema' => '{
  "description" : "Error"
}',
                ],
            ],
            'authMethods' => [
                // apiKey security schema named 'api_key'
                [
                    'type' => 'apiKey',
                    'isBasic' => false,
                    'isBearer' => false,
                    'isApiKey' => true,
                    'isOAuth' => false,
                    'keyParamName' => 'X-TODOIST-API-KEY',
                    'isKeyInHeader' => true,
                    'isKeyInQuery' => false,
                    'isKeyInCookie' => false,
                ],
            ],
        ],
        [
            'httpMethod' => 'GET',
            'basePathWithoutHost' => '',
            'path' => '/tasks',
            'apiPackage' => 'todoist\Api',
            'classname' => 'AbstractTaskApi',
            'userClassname' => 'TaskApi',
            'operationId' => 'getTasks',
            'responses' => [
                'default' => [
                    'code' => 200,
                    'message' => 'Successful operation',
                    'jsonSchema' => '{
  "description" : "Successful operation",
  "content" : {
    "application/json" : {
      "schema" : {
        "$ref" : "#/components/schemas/Task"
      }
    }
  }
}',
                ],
            ],
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'POST',
            'basePathWithoutHost' => '',
            'path' => '/tasks/{id}/complete',
            'apiPackage' => 'todoist\Api',
            'classname' => 'AbstractTaskApi',
            'userClassname' => 'TaskApi',
            'operationId' => 'completeTask',
            'responses' => [
                'default' => [
                    'code' => 200,
                    'message' => 'OK',
                    'jsonSchema' => '{
  "description" : "OK",
  "content" : {
    "application/json" : {
      "schema" : {
        "$ref" : "#/components/schemas/Task"
      }
    }
  }
}',
                ],
            ],
            'authMethods' => [
                // apiKey security schema named 'api_key'
                [
                    'type' => 'apiKey',
                    'isBasic' => false,
                    'isBearer' => false,
                    'isApiKey' => true,
                    'isOAuth' => false,
                    'keyParamName' => 'X-TODOIST-API-KEY',
                    'isKeyInHeader' => true,
                    'isKeyInQuery' => false,
                    'isKeyInCookie' => false,
                ],
            ],
        ],
        [
            'httpMethod' => 'DELETE',
            'basePathWithoutHost' => '',
            'path' => '/tasks/{id}',
            'apiPackage' => 'todoist\Api',
            'classname' => 'AbstractTaskApi',
            'userClassname' => 'TaskApi',
            'operationId' => 'deleteTask',
            'responses' => [
                '500' => [
                    'code' => 500,
                    'message' => 'Error',
                    'jsonSchema' => '{
  "description" : "Error"
}',
                ],
            ],
            'authMethods' => [
                // apiKey security schema named 'api_key'
                [
                    'type' => 'apiKey',
                    'isBasic' => false,
                    'isBearer' => false,
                    'isApiKey' => true,
                    'isOAuth' => false,
                    'keyParamName' => 'X-TODOIST-API-KEY',
                    'isKeyInHeader' => true,
                    'isKeyInQuery' => false,
                    'isKeyInCookie' => false,
                ],
            ],
        ],
        [
            'httpMethod' => 'PUT',
            'basePathWithoutHost' => '',
            'path' => '/tasks/{id}',
            'apiPackage' => 'todoist\Api',
            'classname' => 'AbstractTaskApi',
            'userClassname' => 'TaskApi',
            'operationId' => 'updateTask',
            'responses' => [
                'default' => [
                    'code' => 200,
                    'message' => 'Successful operation',
                    'jsonSchema' => '{
  "description" : "Successful operation",
  "content" : {
    "application/json" : {
      "schema" : {
        "$ref" : "#/components/schemas/Task"
      }
    }
  }
}',
                ],
                '500' => [
                    'code' => 500,
                    'message' => 'Error',
                    'jsonSchema' => '{
  "description" : "Error"
}',
                ],
            ],
            'authMethods' => [
                // apiKey security schema named 'api_key'
                [
                    'type' => 'apiKey',
                    'isBasic' => false,
                    'isBearer' => false,
                    'isApiKey' => true,
                    'isOAuth' => false,
                    'keyParamName' => 'X-TODOIST-API-KEY',
                    'isKeyInHeader' => true,
                    'isKeyInQuery' => false,
                    'isKeyInCookie' => false,
                ],
            ],
        ],
    ];

    /**
     * Class constructor
     *
     * @param ContainerInterface|array $settings Either a ContainerInterface or an associative array of app settings
     *
     * @throws Exception When implementation class doesn't exists
     */
    public function __construct($settings = [])
    {
        if ($settings instanceof ContainerInterface) {
            // Set container to create App with on AppFactory
            AppFactory::setContainer($settings);
        }
        $this->slimApp = AppFactory::create();

        // middlewares requires Psr\Container\ContainerInterface
        $container = $this->slimApp->getContainer();

        $authPackage = 'todoist\Auth';
        $basicAuthenticator = function (ServerRequestInterface &$request, TokenSearch $tokenSearch) use ($authPackage) {
            $message = "How about extending AbstractAuthenticator class by {$authPackage}\BasicAuthenticator?";
            throw new Exception($message);
        };
        $apiKeyAuthenticator = function (ServerRequestInterface &$request, TokenSearch $tokenSearch) use ($authPackage) {
            $message = "How about extending AbstractAuthenticator class by {$authPackage}\ApiKeyAuthenticator?";
            throw new Exception($message);
        };
        $oAuthAuthenticator = function (ServerRequestInterface &$request, TokenSearch $tokenSearch) use ($authPackage) {
            $message = "How about extending AbstractAuthenticator class by {$authPackage}\OAuthAuthenticator?";
            throw new Exception($message);
        };

        $userOptions = $this->getSetting($settings, 'tokenAuthenticationOptions', null);

        // mocker options
        $mockerOptions = $this->getSetting($settings, 'mockerOptions', null);
        $dataMocker = $mockerOptions['dataMocker'] ?? new OpenApiDataMocker();
        $getMockResponseCallback = $mockerOptions['getMockResponseCallback'] ?? null;
        $mockAfterCallback = $mockerOptions['afterCallback'] ?? null;

        foreach ($this->operations as $operation) {
            $callback = function ($request, $response, $arguments) use ($operation) {
                $message = "How about extending {$operation['classname']} by {$operation['apiPackage']}\\{$operation['userClassname']} class implementing {$operation['operationId']} as a {$operation['httpMethod']} method?";
                throw new Exception($message);
                $response->getBody()->write($message);
                return $response->withStatus(501);
            };
            $middlewares = [new JsonBodyParserMiddleware()];

            if (class_exists("\\{$operation['apiPackage']}\\{$operation['userClassname']}")) {
                $callback = "\\{$operation['apiPackage']}\\{$operation['userClassname']}:{$operation['operationId']}";
            }

            foreach ($operation['authMethods'] as $authMethod) {
                switch ($authMethod['type']) {
                    case 'http':
                        $authenticatorClassname = "\\{$authPackage}\\BasicAuthenticator";
                        if (class_exists($authenticatorClassname)) {
                            $basicAuthenticator = new $authenticatorClassname($container);
                        }

                        $middlewares[] = new TokenAuthentication($this->getTokenAuthenticationOptions([
                            'authenticator' => $basicAuthenticator,
                            'regex' => $authMethod['isBearer'] ? '/Bearer\s+(.*)$/i' : '/Basic\s+(.*)$/i',
                            'header' => 'Authorization',
                            'parameter' => null,
                            'cookie' => null,
                            'argument' => null,
                        ], $userOptions));
                        break;
                    case 'apiKey':
                        $authenticatorClassname = "\\{$authPackage}\\ApiKeyAuthenticator";
                        if (class_exists($authenticatorClassname)) {
                            $apiKeyAuthenticator = new $authenticatorClassname($container);
                        }

                        $middlewares[] = new TokenAuthentication($this->getTokenAuthenticationOptions([
                            'authenticator' => $apiKeyAuthenticator,
                            'regex' => '/^(.*)$/i',
                            'header' => $authMethod['isKeyInHeader'] ? $authMethod['keyParamName'] : null,
                            'parameter' => $authMethod['isKeyInQuery'] ? $authMethod['keyParamName'] : null,
                            'cookie' => $authMethod['isKeyInCookie'] ? $authMethod['keyParamName'] : null,
                            'argument' => null,
                        ], $userOptions));
                        break;
                    case 'oauth2':
                        $authenticatorClassname = "\\{$authPackage}\\OAuthAuthenticator";
                        if (class_exists($authenticatorClassname)) {
                            $oAuthAuthenticator = new $authenticatorClassname($container, $authMethod['scopes']);
                        }

                        $middlewares[] = new TokenAuthentication($this->getTokenAuthenticationOptions([
                            'authenticator' => $oAuthAuthenticator,
                            'regex' => '/Bearer\s+(.*)$/i',
                            'header' => 'Authorization',
                            'parameter' => null,
                            'cookie' => null,
                            'argument' => null,
                        ], $userOptions));
                        break;
                    default:
                        throw new Exception('Unknown authorization schema type');
                }
            }

            if (is_callable($getMockResponseCallback)) {
                $middlewares[] = new OpenApiDataMockerMiddleware($dataMocker, $operation['responses'], $getMockResponseCallback, $mockAfterCallback);
            }

            $this->addRoute(
                [$operation['httpMethod']],
                "{$operation['basePathWithoutHost']}{$operation['path']}",
                $callback,
                $middlewares
            )->setName($operation['operationId']);
        }
    }

    /**
     * Merges user defined options with dynamic params
     *
     * @param array $staticOptions Required static options
     * @param array $userOptions   User options
     *
     * @return array Merged array
     */
    private function getTokenAuthenticationOptions(array $staticOptions, array $userOptions = null)
    {
        if (is_array($userOptions) === false) {
            return $staticOptions;
        }

        return array_merge($userOptions, $staticOptions);
    }

    /**
     * Returns app setting by name.
     *
     * @param ContainerInterface|array $settings    Either a ContainerInterface or an associative array of app settings
     * @param string                   $settingName Setting name
     * @param mixed                    $default     Default setting value.
     *
     * @return mixed
     */
    private function getSetting($settings, $settingName, $default = null)
    {
        if ($settings instanceof ContainerInterface && $settings->has($settingName)) {
            return $settings->get($settingName);
        } elseif (is_array($settings) && array_key_exists($settingName, $settings)) {
            return $settings[$settingName];
        }

        return $default;
    }

    /**
     * Add route with multiple methods
     *
     * @param string[]        $methods     Numeric array of HTTP method names
     * @param string          $pattern     The route URI pattern
     * @param callable|string $callable    The route callback routine
     * @param array|null      $middlewares List of middlewares
     *
     * @return RouteInterface
     *
     * @throws InvalidArgumentException If the route pattern isn't a string
     */
    public function addRoute(array $methods, string $pattern, $callable, $middlewares = [])
    {
        $route = $this->slimApp->map($methods, $pattern, $callable);
        foreach ($middlewares as $middleware) {
            $route->add($middleware);
        }
        return $route;
    }

    /**
     * Returns Slim Framework instance
     *
     * @return App
     */
    public function getSlimApp()
    {
        return $this->slimApp;
    }
}
