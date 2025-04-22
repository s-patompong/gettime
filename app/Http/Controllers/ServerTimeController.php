<?php

namespace App\Http\Controllers;

class ServerTimeController
{
    public function getTime(): string
    {
        return $this->currentTimeString();
    }

    public function storeGetTime($enoseId, $message): string
    {
        return $this->currentTimeString();
    }

    private function currentTimeString(): string
    {
        $nowTimeString = now()->format('Y/m/d H:i:s');

        return "ewafs:$nowTimeString";
    }
}
