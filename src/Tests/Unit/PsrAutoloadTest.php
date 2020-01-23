<?php

namespace Drupal\opdavies\Tests\Unit;

class PsrAutoloadTest extends \DrupalUnitTestCase {

  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return [
      'name' => 'PSR-4 autoload test',
      'description' => 'Test loading test cases automatically using PSR-4 autoloading.',
      'group' => 'opdavies',
    ];
  }

  /**
   * Test loading a test case automatically with autoloading.
   */
  public function test_true_is_true() {
    $this->assertTrue(TRUE);
  }

}
