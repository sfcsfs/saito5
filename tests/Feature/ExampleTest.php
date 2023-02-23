<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()//最初の画面にたどりつけるかの確認
    {
        $this->withoutExceptionHandling();
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSeeText('ログイン');
        
    }
    public function test_the_application_returns_a_successful_response2() //URLにHomeを追加した場合の確認
    {
        $response = $this->get('/home');

        $response->assertStatus(200);
        $response->assertSeeText('ログイン');
    }

    public function test_the_application_returns_a_successful_response3()//ログインできてない状態でログインが必要な画面に入ろうとした場合
    {
        $response = $this->get('/home/edit');
        $response->assertStatus(302);
        $response = $this->get('/home/edit_check');
        $response->assertStatus(302);
        $response = $this->get('/home/edit_finish');
        $response->assertStatus(302);
        $response = $this->get('/home/search');
        $response->assertStatus(302);
        $response = $this->get('/home/result');
        $response->assertStatus(302);
        $response = $this->get('/home/k');
        $response->assertStatus(405); //POST専用
        $response = $this->get('/home/k2');
        $response->assertStatus(405); //POST専用
    }

    


}
