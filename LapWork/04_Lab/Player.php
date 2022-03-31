<?php
class Player {
  
  public $HP;
  public $Race;
  public $SpecialAttack;

  function Change_HP($Value) {
    $this->HP += $Value;
  }

  function Race_Type($Race) {
    $this->Race = $Race;
  }

  function AttackType($Attack) {
    $this->SpecialAttack = $Attack;

  function DisplayInformation() {
    return "The player has $this->HP Hp and is from $this->Race And his special attack is $this->SpecialAttack" ;
  }
  
  }

  $Player_1 = new Player;
  $Player_1 -> HP = 100;
  $Player_1 -> Race = Saudi;
  $Player_1 -> SpecialAttack = Kick Punch;


  $player -> Change_HP(40);
  echo .$Player_1 ->.$DisplayInformation;


?>
