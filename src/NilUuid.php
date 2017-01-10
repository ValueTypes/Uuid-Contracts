<?php
/**
 * This file is part of the valuetypes/uuid-contracts package.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * Please read the license at http://www.apache.org/licenses/LICENSE-2.0
 *
 * @copyright (c) 2017 Bas Hamar de la Brethonière
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 *
 */

namespace ValueTypes\UuidContracts;

/**
 * Represents a universally unique identifier (UUID). This is a special case of
 * UUIDs where all bits are set to 0.
 *
 * Interface NilUuid
 * @package ValueTypes\UuidContracts
 */
interface NilUuid extends Uuid {}