<?php

namespace Tests\Feature;

use Tests\TestCase;

class FilamentAdminAccessTest extends TestCase
{
    public function test_admin_login_page_is_accessible(): void
    {
        $response = $this->get('/admin/login');

        $response->assertStatus(200);
    }
}
