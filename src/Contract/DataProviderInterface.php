<?php

namespace src\Contract;

interface DataProviderInterface
{
    /**
     * @param array $request
     *
     * @return array
     */
    public function getResponse(array $request): array;
}