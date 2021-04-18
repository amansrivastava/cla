<?php

namespace CLA\Commands;
use Spatie\Dns\Dns;

class DNSCommand extends \Robo\Tasks {

  /**
  * Get DNS records of given domain.
  * @command dns:records
  * @aliases dns
  */
  public function getDns($domain) {
    $dns = Dns::of('spatie.be');
      return $this->say("<info>".$dns->getRecords()."</info>");
  }

  /**
  * Get DNS records of given domain.
  * @command dns:a
  */
  public function getDnsA($domain) {
    $dns = Dns::of('spatie.be');
    if(empty($record)){
      return $dns->getRecords("A");
    }
    else {
      return $this->say("<info>".$dns->getRecords()."</info>");
    }
  }
}
