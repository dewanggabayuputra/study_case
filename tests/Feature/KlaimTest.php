<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Klaim;
use Tests\TestCase;

class KlaimTest extends TestCase
{
    use RefreshDatabase;

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
