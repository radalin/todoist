<?php

namespace todoist\Auth;

class ApiKeyAuthenticator extends \todoist\Auth\AbstractAuthenticator
{

    protected function getUserByToken(string $token)
    {
        // TODO: make this work?
        return null;
    }
}