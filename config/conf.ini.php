<?php
//! @file smarty.inc.php
//! @author Caro Noyer
//! @date 2012-09-09

$config['website']['title'] = 'Caroline Noyer';
$config['website']['description'] = 'Caroline Noyer Website';
$config['website']['keywords'] = 'Caroline Noyer : CV, projets, photos, creations';

$config['website']['pagedir'] = 'pages/';
$config['website']['pagedft'] = 'home';

$config['menu'] = array (
    'home' => array (
        'title' => 'Home',
        /*'link' => 'index.php?page=home',*/
        'link' => 'home.html',
        'show' => 'yes'
    ),
    'experience' => array (
        'title' => 'Expérience',
        /*'link' => 'index.php?page=experience',*/
        'link' => 'experience.html',
        'show' => 'yes'
    ),
    'competences' => array (
        'title' => 'Compétences',
        /*'link' => 'index.php?page=competences',*/
        'link' => 'competences.html',
        'show' => 'yes'
    ),
    'formation' => array (
        'title' => 'Formation',
        /*'link' => 'index.php?page=formation',*/
        'link' => 'formation.html',
        'show' => 'yes'
    ),
    'projets' => array (
        'title' => 'Projets',
        /*'link' => 'index.php?page=projets',*/
        'link' => 'projets.html',
        'show' => 'yes'
    ),
    'photos' => array (
        'title' => 'Photos',
        /*'link' => 'index.php?page=photos',*/
        'link' => 'photos.html',
        'show' => 'yes'
    ),
    'creations' => array (
        'title' => 'Créations',
        /*'link' => 'index.php?page=creations',*/
        'link' => 'creations.html',
        'show' => 'yes'
    ),
    'contact' => array (
        'title' => 'Contact',
        /*'link' => 'index.php?page=contact',*/
        'link' => 'contact.html',
        'show' => 'yes'
    ),
    'send' => array (
        'title' => 'Contact',
        /*'link' => 'index.php?page=send',*/
        'link' => 'send.html',
        'show' => 'no'
    )
);
?>
