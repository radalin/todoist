<?php

/**
 * JsonBodyParserMiddleware
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
namespace todoist\Middleware;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

/**
 * JsonBodyParserMiddleware Class Doc Comment
 *
 * @package todoist\Middleware
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 */
final class JsonBodyParserMiddleware implements MiddlewareInterface
{

    /**
     * Parse incoming JSON input into a native PHP format
     * Copied from Slim4 guide
     * @ref https://www.slimframework.com/docs/v4/objects/request.html#the-request-body
     *
     * @param ServerRequestInterface  $request HTTP request
     * @param RequestHandlerInterface $handler Request handler
     *
     * @return ResponseInterface HTTP response
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        $contentType = $request->getHeaderLine('Content-Type');

        if (strstr($contentType, 'application/json')) {
            $contents = json_decode(file_get_contents('php://input'), true);
            if (json_last_error() === JSON_ERROR_NONE) {
                $request = $request->withParsedBody($contents);
            }
        }

        return $handler->handle($request);
    }
}
