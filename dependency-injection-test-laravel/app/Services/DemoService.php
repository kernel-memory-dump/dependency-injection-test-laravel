<?php
 
namespace App\Services;
 
use App\Contracts\IDemoService;
 
class DemoService implements IDemoService
{
    public function demoMethod(): bool {
        return true;
    }
}