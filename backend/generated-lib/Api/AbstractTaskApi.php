<?php

/**
 * AbstractTaskApi
 *
 * PHP version 7.1
 *
 * @package todoist\Api
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
namespace todoist\Api;

use Psr\Container\ContainerInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Exception;

/**
 * AbstractTaskApi Class Doc Comment
 *
 * @package todoist\Api
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 */
abstract class AbstractTaskApi
{

    /**
     * @var ContainerInterface|null Slim app container instance
     */
    protected $container;

    /**
     * Route Controller constructor receives container
     *
     * @param ContainerInterface|null $container Slim app container instance
     */
    public function __construct(ContainerInterface $container = null)
    {
        $this->container = $container;
    }


    /**
     * POST completeTask
     * Summary: Completes a task
     * Output-Formats: [application/json]
     *
     * @param ServerRequestInterface $request  Request
     * @param ResponseInterface      $response Response
     * @param array|null             $args     Path arguments
     *
     * @return ResponseInterface
     * @throws Exception to force implementation class to override this method
     */
    public function completeTask(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        $id = $args['id'];
        $message = "How about implementing completeTask as a POST method in todoist\Api\TaskApi class?";
        throw new Exception($message);

        $response->getBody()->write($message);
        return $response->withStatus(501);
    }

    /**
     * POST createTask
     * Summary: Create a new task
     * Notes: Create a new task
     * Output-Formats: [application/json]
     *
     * @param ServerRequestInterface $request  Request
     * @param ResponseInterface      $response Response
     * @param array|null             $args     Path arguments
     *
     * @return ResponseInterface
     * @throws Exception to force implementation class to override this method
     */
    public function createTask(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        $body = $request->getParsedBody();
        $message = "How about implementing createTask as a POST method in todoist\Api\TaskApi class?";
        throw new Exception($message);

        $response->getBody()->write($message);
        return $response->withStatus(501);
    }

    /**
     * DELETE deleteTask
     * Summary: Deletes a task
     *
     * @param ServerRequestInterface $request  Request
     * @param ResponseInterface      $response Response
     * @param array|null             $args     Path arguments
     *
     * @return ResponseInterface
     * @throws Exception to force implementation class to override this method
     */
    public function deleteTask(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        $headers = $request->getHeaders();
        $apiKey = $request->hasHeader('api_key') ? $headers['api_key'] : null;
        $id = $args['id'];
        $message = "How about implementing deleteTask as a DELETE method in todoist\Api\TaskApi class?";
        throw new Exception($message);

        $response->getBody()->write($message);
        return $response->withStatus(501);
    }

    /**
     * GET getTasks
     * Summary: List tasks
     * Notes: Return a list of tasks
     * Output-Formats: [application/json]
     *
     * @param ServerRequestInterface $request  Request
     * @param ResponseInterface      $response Response
     * @param array|null             $args     Path arguments
     *
     * @return ResponseInterface
     * @throws Exception to force implementation class to override this method
     */
    public function getTasks(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        $message = "How about implementing getTasks as a GET method in todoist\Api\TaskApi class?";
        throw new Exception($message);

        $response->getBody()->write($message);
        return $response->withStatus(501);
    }

    /**
     * PUT updateTask
     * Summary: Update an existing task
     * Notes: Update an existing task by Id
     * Output-Formats: [application/json]
     *
     * @param ServerRequestInterface $request  Request
     * @param ResponseInterface      $response Response
     * @param array|null             $args     Path arguments
     *
     * @return ResponseInterface
     * @throws Exception to force implementation class to override this method
     */
    public function updateTask(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        $headers = $request->getHeaders();
        $apiKey = $request->hasHeader('api_key') ? $headers['api_key'] : null;
        $id = $args['id'];
        $body = $request->getParsedBody();
        $message = "How about implementing updateTask as a PUT method in todoist\Api\TaskApi class?";
        throw new Exception($message);

        $response->getBody()->write($message);
        return $response->withStatus(501);
    }
}
