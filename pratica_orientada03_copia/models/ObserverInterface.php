<?php

interface ObserverInterface
{
    public function update(SubjectInterface $subject): array;
}
