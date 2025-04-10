<?php

/**
 *  SFW2 - SimpleFrameWork
 *
 *  Copyright (C) 2025  Stefan Paproth
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
 *  along with this program. If not, see <http://www.gnu.org/licenses/agpl.txt>.
 *
 */

declare(strict_types=1);

namespace SFW2\Interoperability;

use DateTime;
use Exception;

interface DateTimeHelperInterface
{
    /**
     * @throws Exception
     */
    public function getFullDate(?string $date = 'now'): string;

    /**
     * @throws Exception
     */
    public function getShortDate(?string $date = 'now'): string;

    /**
     * @throws Exception
     */
    public function getDateTimeObject(string $date): DateTime;

    public function getTimeString(string $startTime, string $endTime): string;

    /**
     * @throws Exception
     */
    public function getDateString(string $startDate, string $endDate): string;
}