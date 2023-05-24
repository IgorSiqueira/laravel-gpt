<?php

namespace IgorSiqueira\LaravelGPT\Interfaces;

interface ChatClientInterface
{
    public function generateText(string $prompt): string;
}
