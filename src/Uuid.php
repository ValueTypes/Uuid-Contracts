<?php namespace ValueTypes\UuidContracts;



interface Uuid {

  /**
   * @return string
   */
  public function toCanonicalForm();

}