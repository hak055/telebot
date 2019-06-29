<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
 
class FallbackController extends Controller
{
    /**
     * Respond with a generic message.
     *
     * @param Botman $bot
     * @return void
     */
    public function index($bot)
    {
        $bot->reply('Woops, Я ТАКОЙ КОМАНДЫ НЕ ЗНАЮ. Try: \'Start Conversation\'');
    }
}