<?php

namespace Tests\Unit;

use Klaim;
use PHPUnit\Framework\TestCase;

class KlaimTest extends TestCase
{
    public function user_can_create_a_klaim()
    {
        $data = [
            'lob' => 'Konsumtif',
            'penyebab_klaim' => 'Macet',
            'jumlah_nasabah' => 100,
            'beban_klaim' => 100
        ];

        $klaim = Klaim::create($data);

        // Assert
        $this->assertInstanceOf(Klaim::class, $klaim);
    }
    
}
