<?php

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class AdminPosts7EditTest extends DuskTestCase
{

    /**
     * My test implementation
     */
    public function testHelpdeskIsErgonomic()
    {

        $this->browse(/**
         * @param Browser $browser
         */ function (Browser $browser) {
            $browser->press('× Путешествие × Машины');
            $browser->visit('/admin/posts/7/edit');
            $browser->assertPathIs('/admin/posts/7/edit');
            $browser->press('category_id');
        });

    }
}
