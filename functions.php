<?php

declare(strict_types=1);

function render_templates(string $template, array $data = [])
{
  extract($data);
  require "templates/$template.php";
}



