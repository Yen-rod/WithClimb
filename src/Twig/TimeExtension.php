<?php
// src/Twig/TimeExtension.php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use DateTime;

class TimeExtension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            new TwigFilter('time_ago', [$this, 'timeAgo']),
        ];
    }

    public function timeAgo(\DateTimeInterface $date): string
    {
        $now = new DateTime();
        $interval = $now->diff($date);

        if ($interval->y > 0) {
            return $interval->y === 1 ? '1 año' : $interval->y . ' años';
        }

        if ($interval->m > 0) {
            return $interval->m === 1 ? '1 mes' : $interval->m . ' meses';
        }

        if ($interval->d > 0) {
            if ($interval->d === 1) {
                return 'ayer';
            }
            if ($interval->d < 7) {
                return $interval->d . ' días';
            }
            return floor($interval->d / 7) . ' semanas';
        }

        if ($interval->h > 0) {
            return $interval->h === 1 ? '1 hora' : $interval->h . ' horas';
        }

        if ($interval->i > 0) {
            return $interval->i === 1 ? '1 minuto' : $interval->i . ' minutos';
        }

        return 'hace un momento';
    }
}