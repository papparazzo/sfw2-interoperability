<?php

/**
 *  SFW2 - SimpleFrameWork
 *
 *  Copyright (C) 2025 Stefan Paproth
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU Affero General Public License as
 *  published by the Free Software Foundation, either version 3 of the
 *  License, or (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 *  GNU Affero General Public License for more details.
 *
 *  You should have received a copy of the GNU Affero General Public License
 *  along with this program. If not, see <https://www.gnu.org/licenses/agpl.txt>.
 *
 */

declare(strict_types=1);

namespace SFW2\Interoperability\Path;

use Psr\Http\Message\ServerRequestInterface;

final readonly class Path
{
    private function __construct(private string $path, private MethodType $method = MethodType::GET)
    {
    }

    public static function create(string $path, MethodType $method = MethodType::GET): Path
    {
        return new Path($path, $method);
    }

    public static function createFromRequest(ServerRequestInterface $request): Path
    {
        return new Path($request->getUri()->getPath(), MethodType::from($request->getMethod()));
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function getMethod(): MethodType
    {
        return $this->method;
    }
}