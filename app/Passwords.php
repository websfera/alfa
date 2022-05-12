<?php

namespace App;

class Passwords {

  private string $algo;

  public function __construct(string $algo = PASSWORD_DEFAULT) {
    $this->algo = $algo;
  }

  public function hash(string $password): string {
    if ($password === '') {
      throw new \InvalidArgumentException("Password can not be empty.");
    }

    $hash = @password_hash($password, $this->algo);

    if ($hash === false) {
      throw new \Exception("Computed hash is invalid.");
    }

    return $hash;
  }

  public function verify(string $password, string $hash): bool {
    return password_verify($password, $hash);
  }
  
}
