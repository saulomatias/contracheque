<?php

/*
 * Copyright (C) 2017 Leda Ferreira
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

/* @var $this League\Plates\Template\Template */
/* @var $writing_pdf boolean */

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$this->e($title)?></title>
    <style type="text/css">
        <?= $this->insert('assets/reset.css') ?>
        <?= $this->insert('assets/print.css') ?>
        <?= $this->insert('assets/contracheque.css') ?>
    </style>
</head>
<body class="<?= $writing_pdf ? 'pdf' : '' ?>">
    <page size="A4" class="relative">
        <?= $this->section('content') ?>
    </page>
</body>
</html>