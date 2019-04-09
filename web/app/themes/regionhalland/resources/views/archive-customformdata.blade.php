@extends('layouts.app')

@section('content')

<?php
$args = array(
   'public'   => true,
   '_builtin' => false
);
  
$output = 'names'; // 'names' or 'objects' (default: 'names')
$operator = 'and'; // 'and' or 'or' (default: 'and')
  
$post_types = get_post_types( $args, $output, $operator );
var_dump($post_types);

$all_post_types = get_post_types();
var_dump($all_post_types);

$all_categories = get_categories();
var_dump($all_categories);

die();
?>

@endsection
