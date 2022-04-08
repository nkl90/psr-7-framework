<?php

declare(strict_types=1);

namespace Framework\HTTP;


class Request
{
    public function getQueryParams(): array
    {
        return $_GET;
    }

    public function getParsedBody(): ?array
    {
        return $_POST ?: null;
    }

}