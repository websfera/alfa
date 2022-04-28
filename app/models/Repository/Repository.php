<?php

final class Repository implements \Iterator, \Countable {

  private array $list;

  private array $keys;

  public function __construct() {
    $this->list = [];
  }

  public function push($obj) {
    $this->list[] = $obj;
  }

  public function pop(int $key) {
    $poped = $this->list[$key];
    unset($this->list[$key]);

    return $poped;
  }

  // iterator

  public function current() {
    if ($key = current($this->keys) !== false) {
      return $this->list[$key];
    }

    return false;
  }

  public function key() {
    return current($this->keys);
  }

  public function next(): void {
    next($this->keys);
  }

  public function rewind(): void {
    $this->keys = array_keys($this->list);
    reset($this->keys);
  }

  public function valid(): bool {
    return current($this->keys) !== false;
  }

  // countable 

  public function count(): int {
    return count($this->list);
  }
  
}
