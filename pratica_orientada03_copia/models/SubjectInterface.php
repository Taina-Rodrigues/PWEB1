<?php

interface SubjectInterface
{
    public function attach(ObserverInterface $observer): void;
    public function notify(): array;
}
