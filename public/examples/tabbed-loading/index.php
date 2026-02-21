<?php

require '../../Htmx.php';

/**
 * Data and images taken from
 * https://www.skyatnightmagazine.com/space-science/planets-solar-system-guide
 */

$planets = [
  1 => [
    'name' => 'Mercury',
    'distance_from_sun' => '0.39 UA',
    'diameter' => 4880,
    'moons' => 0,
    'image' => 'images/mercury.webp',
  ],
  2 => [
    'name' => 'Venus',
    'distance_from_sun' => '0.72 AU',
    'diameter' => 12104,
    'moons' => 0,
    'image' => 'images/venus.webp',
  ],
  3 => [
    'name' => 'Earth',
    'distance_from_sun' => '1 AU',
    'diameter' => 12756,
    'moons' => 1,
    'image' => 'images/earth.webp',
  ],
  4 => [
    'name' => 'Mars',
    'distance_from_sun' => '1.5 AU',
    'diameter' => 6792,
    'moons' => 2,
    'image' => 'images/mars.webp',
  ],
  5 => [
    'name' => 'Jupiter',
    'distance_from_sun' => '5.2 AU',
    'diameter' => 142984,
    'moons' => 67,
    'image' => 'images/jupiter.webp',
  ],
  6 => [
    'name' => 'Saturn',
    'distance_from_sun' => '9.54 AU',
    'diameter' => 120536,
    'moons' => 146,
    'image' => 'images/saturn.webp',
  ],
  7 => [
    'name' => 'Uranus',
    'distance_from_sun' => '19.2 AU',
    'diameter' => 51118,
    'moons' => 27,
    'image' => 'images/uranus.webp',
  ],
  8 => [
    'name' => 'Neptune',
    'distance_from_sun' => '30 AU',
    'diameter' => 49528,
    'moons' => 13,
    'image' => 'images/neptune.webp',
  ],
];

if (Htmx::isHtmxRequest() && Htmx::isGet()) {
  $id = (int)$_GET['id'];

  if (!isset($planets[$id])) {
    echo '';
    die();
  }

  $planet = $planets[$id];
  echo '<h3>' . $planet['name'] . '</h3>';
  echo '<p><strong>Distance from Sun:</strong> ' . $planet['distance_from_sun'] . '</p>';
  echo '<p><strong>Diameter:</strong> ' . number_format($planet['diameter']) . 'km</p>';
  echo '<p><strong>Moons:</strong> ' . $planet['moons'] . '</p>';
  echo '<img src="' . $planet['image'] . '" />';
}
