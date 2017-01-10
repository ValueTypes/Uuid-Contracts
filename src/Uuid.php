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
 * Represents a universally unique identifier (UUID). Base interface of the UUID
 * value types. Use this interface to type hint any and all possible UUID formats.
 *
 * Interface Uuid
 * @package ValueTypes\UuidContracts
 */
interface Uuid {

  /**
   * Returns the canonical form of the UUID value as string. The value MUST be
   * represented as 32 lowercase hexadecimal digits, in five groups separated by
   * hyphens, in the form `8-4-4-4-12` for a total of 36 characters.
   *
   * @see https://en.wikipedia.org/wiki/Universally_unique_identifier Wikipedia
   * @return string UUID in canonical form.
   */
  public function toCanonicalForm();

}