<?php

namespace App\Models;

use \DateTime;
use App\Passwords;
use App\Container;

class User extends AbstractEntity  {

  private string $firstName;
  private string $lastName;
  private string $email;
  private string $password;
  private DateTime $birthDate;
  private DateTime $registrationDate;
  private DateTime $dateCreated;
  private ?DateTime $dateUpdated;

  private Passwords $passwords;

  public function __construct(Container $container) {
    Parent::__construct($container);

    $this->passwords = new Passwords();
  }
  
  public function findById(int $id) {
    $sql = "SELECT * FROM alfa.user WHERE id = ?;";

    $rows = $this->db->query($sql, [$id]);

    if (count($rows) <= 0) {
      throw new \RecordNotFoundException("Record not found");
    }

    $this->setValues($rows[0]);
  }

  public function setValues(array $v): void {
    $this->id = (int)$v['id'];
    $this->firstName = $v['first_name'];
    $this->lastName = $v['last_name'];
    $this->password = $v['password'];
    $this->email = $v['email'];

    $this->birthDate = DateTime::createFromFormat(
      'Y-m-d H:i:s',
      $v['birth_date']
    );
    
    $this->registrationDate = DateTime::createFromFormat(
      'Y-m-d H:i:s',
      $v['registration_date']
    );

    $this->dateCreated = DateTime::createFromFormat(
      'Y-m-d H:i:s',
      $v['date_created']
    );

    if (!empty($v['date_updated'])) {
      $this->dateUpdated = DateTime::createFromFormat(
      'Y-m-d H:i:s',
      $v['date_updated']
    );
    }
  }

  public function save(): void {
    $insert = "INSERT INTO alfa.user 
(
  first_name, 
  last_name, 
  email, 
  password,
  birth_date,
  registration_date,
  date_created, 
  date_updated
) VALUES (?, ?, ?, ?, ?, NOW(), NOW(), NULL);";

    $params = [
      $this->getFirstName(),
      $this->getLastName(),
      $this->getEmail(),
      $this->getPassword(),
      $this->getBirthDate()->format('Y-m-d H:i:s'),
    ];

    $this->db->query($insert, $params);
  }
  
  public function getFirstName(): string {
    return $this->firstName;
  }

  public function getLastName(): string {
    return $this->lastName;
  }

  public function getFullName(): string {
    return $this->getFirstName() . " " . $this->getLastName();
  }

  public function getEmail(): string {
    return $this->email;
  }

  public function getPassword(): string {
    return $this->password;
  }

  public function getRegistrationDate(): DateTime {
    return $this->registrationDate;
  }

  public function getBirthDate(): DateTime {
    return $this->birthDate;
  }

  public function getDateCreated(): DateTime {
    return $this->dateCreated;
  }

  public function getDateCreatedFormatted(): string {
    return $this->dateCreated->format("d.m.Y H:i");
  }

  public function getDateUpdated(): ?DateTime {
    return $this->dateUpdated;
  }

  public function setFirstName($firstName): void {
    $this->firstName = $firstName;
  }

  public function setLastName($lastName): void {
    $this->lastName = $lastName;
  }

  public function setEmail($email): void {
    $this->email = $email;
  }

  public function setPassword(string $password): void {
    $this->password = $this->passwords->hash($password);
  }

  public function setRegistrationDate(
    DateTime $registrationDate
  ): void {
    $this->registrationDate = $registrationDate;
  }

  public function setBirthDate(DateTime $birthDate): void {
    $this->birthDate = $birthDate;
  }

  public function setDateCreated(DateTime $dateCreated): void {
    $this->dateCreated = $dateCreated;
  }

  public function setDateUpdated(?DateTime $dateUpdated): void {
    $this->dateUpdated = $dateUpdated;
  }

  public function __toString() {
    return $this->getFullName();
  }
  
}